@extends('layouts.master')

@section('extra-meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    @if (Cart::count() > 0)
        <div class="container">
            <div class="small-container cart-page">
                <div class="row">
                    <div class="col-md-9">
                        <table>
                            <thead>
                                <tr>
                                    <th>Produit</th>
                                    <th>Quantité</th>
                                    <th>Sous-total</th>
                                </tr>
                            </thead>
                        <tbody>
                                @foreach (Cart::content() as $product)
                                    <tr>
                                        <td>
                                            <div class="cart-info">
                                                    <img src="{{ Voyager::Image($product->model->image) }}" class="img-cart" alt="">
                                                <div>
                                                    <p class="font-weight-bold">{{ $product->name }}</p>
                                                    <span class="font-weight-bold">Price: </span><small>{{ $product->price }}</small>
                                                    <br>
                                                    <form action="{{ route('cart.destroy', $product->rowId) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="remove">Remove</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <select name="qty" id="qty" data-id="{{ $product->rowId }}" class="custom-select" data-stock="{{ $product->model->stock }}">
                                                @for ($i = 1; $i <= 6; $i++)
                                                    <option value="{{ $i }}"  {{ $i == $product->qty ? 'selected' : '' }}>{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </td>
                                        <td>${{ $product->subtotal() }}</td>
                                    </tr>
                                @endforeach
                        </tbody>
                        </table>
                    </div>
        
                    <div class="col-md-3 total-price">
                        <table>
                            <tr>
                                <td class="font-weight-bold">Sous-total</td>
                                <td>${{ getPrice(Cart::subtotal()) }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Tax</td>
                                <td>${{ getPrice(Cart::tax()) }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Total</td>
                                <td>${{ getPrice(Cart::total()) }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
                            <form action="#" method="POST">
                                <div class="input-group mb-4 border rounded-pill p-2">
                                    <input type="text" placeholder="Entrez votre code ici" name="code" aria-describedby="button-addon3" class="form-control border-0 coupon">
                                    <div class="input-group-append border-0">
                                        <button id="button-addon3" type="submit" class="btn btn-dark px-4 m-0 border-0 rounded-pill"><i class="fa fa-gift mr-2"></i>Appliquer le coupon</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="index.html" class="btn">Continuer Shopping <i class="fas fa-shopping-basket"></i></a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('checkout.index') }}" class="btn">Passer à la caisse ----- <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            Votre panier est vide.
        </div>
    @endif
@endsection

@section('extra-js')
    <script>
        var selects = document.querySelectorAll('#qty');

        Array.from(selects).forEach((element) => {
            element.addEventListener('change', function() {
                var rowId = this.getAttribute('data-id');
                var stock = element.getAttribute('data-stock');
                var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                fetch(
                    `/panier/${rowId}`,
                    {
                        headers: {
                            "Content-Type": "application/json",
                            "Accept": "application/json, text-plain, */*",
                            "X-Requested-With": "XMLHttpRequest",
                            "X-CSRF-TOKEN": token
                        },
                        method: 'PATCH',
                        body: JSON.stringify({
                            qty: this.value,
                            stock: stock
                        })
                    }
                ).then((data) => {
                    console.log(data)
                    location.reload();
                }).catch((error) => {
                    console.log(error)
                })
            });
        });
    </script>
@endsection