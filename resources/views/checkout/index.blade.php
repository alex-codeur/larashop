@extends('layouts.master')

@section('extra-meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('extra-script')
    <script src="https://js.stripe.com/v3/"></script>
@endsection

@section('content')
    <div class="col-md-12 text-center">
        <a class="btn btn-secondary" href="{{ route('cart.index') }}">Revenir au panier</a>
        <h1>Procéder au paiement</h1>

        <div class="row">
            <div class="col-md-12 text-center">
                <form id="payment-form" class="my-4 text-center" action="{{ route('checkout.store') }}" method="POST">
                    @csrf
                    <div id="card-element">

                    </div>
                    <div id="card-errors" role="alert"></div>

                    <button class="btn btn-success mt-4" id="submit"><i class="fa fa-money-check mr-2"></i>Payer maintenant ({{ getPrice($total) }})</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
    <script>
        var stripe = Stripe('pk_test_51HtcYbDFY5jhrTh5LlLx2cBHU9uz92h5vfkYUyexSohLyaVyRwPfWJl7EeoDQL3UwkKEIM1P7qGqsbMRqYqaRATj00O2w1qWpK');
        var elements = stripe.elements();
        var style = {
            base: {
            color: "#32325d",
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: "antialiased",
            fontSize: "16px",
            "::placeholder": {
                color: "#aab7c4"
            }
            },
            invalid: {
            color: "#fa755a",
            iconColor: "#fa755a"
            }
        };
        var card = elements.create("card", { style: style });
        card.mount("#card-element");
        card.addEventListener('change', ({error}) => {
        const displayError = document.getElementById('card-errors');
        if (error) {
            displayError.classList.add('alert', 'alert-warning');
            displayError.textContent = error.message;
        } else {
            displayError.classList.remove('alert', 'alert-warning');
            displayError.textContent = '';
        }
        });
        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function(ev) {
        ev.preventDefault();
        form.disabled = true;
        stripe.confirmCardPayment("{{ $clientSecret }}", {
                payment_method: {
                    card: card
                }
            }).then(function(result) {
                if (result.error) {
                    // Show error to your customer (e.g., insufficient funds)
                    form.disabled = false;
                    console.log(result.error.message); 
                } else {
                // The payment has been processed!
                    if (result.paymentIntent.status === 'succeeded') {
                        var paymentIntent = result.paymentIntent;
                        var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                        var form = document.getElementById('payment-form');
                        var url = form.action;
                        
                        fetch(
                            url,
                            {
                                headers: {
                                    "Content-Type": "application/json",
                                    "Accept": "application/json, text-plain, */*",
                                    "X-Requested-With": "XMLHttpRequest",
                                    "X-CSRF-TOKEN": token
                                },
                                method: 'post',
                                body: JSON.stringify({
                                    paymentIntent: paymentIntent
                                })
                            }).then((data) => {
                                if (data.status === 400) {
                                    var redirect = '/boutique';
                                } else {
                                    var redirect = '/merci';
                                }
                                //console.log(data)
                                window.location.href = redirect;
                        }).catch((error) => {
                            console.log(error)
                        })
                    }
                }
            });
        });
    </script>
@endsection