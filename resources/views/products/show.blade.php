@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="product-details-tab">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpane1" aria-labelledby="home-tab">
                        <div class="prode-large-thumb">
                            <img src="{{ Voyager::Image($product->image) }}" alt="">
                        </div>
                    </div>
                    @foreach(json_decode($product->images, true) as $image)
                      <div class="tab-pane fade" id="profile" role="tabpane1" aria-labelledby="profile-tab">
                          <div class="prode-large-thumb">
                              <img src="{{ Voyager::image($image) }}" alt="">
                          </div>
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpane1" aria-labelledby="contact-tab">
                        <div class="prode-large-thumb">
                            <img src="{{ Voyager::image($image) }}" alt="">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="skills" role="tabpane1" aria-labelledby="skills-tab">
                      <div class="prode-large-thumb">
                          <img src="{{ Voyager::image($image) }}" alt="">
                      </div>
                  </div>
                    @endforeach
                </div>
                <ul class="nav" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">
                            <img src="{{ Voyager::Image($product->image) }}" alt="">
                        </a>
                    </li>
                          @foreach(json_decode($product->images, true) as $image)
                          <li class="nav-item">
                        <a href="#profile" class="nav-link" id="profile-tab" data-toggle="tab" role="tab" aria-controls="profile" aria-selected="true">
                            <img src="{{ Voyager::image($image) }}" />
                        </a>
                    </li>
                    @endforeach
                  </ul>
            </div>
        </div>
        <div class="col-md-6 single-product">
            <h1>{{ $product->title }}</h1>
            <h4>${{ $product->price }}</h4>
            <div class="d-flex my-5">
                <div>
                    <input type="number" class="form-control" value="1">
                </div>
                <div>
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="btn m-0">Add To Cart</button>
                    </form>
                </div>
            </div>
            <h3 class="border-bottom">Product Details</h3>
            <p>{!! $product->description !!}</p>
        </div>
    </div>

    <h5 class="mt-4 font-weight-bold">Les clients ayant consulté cet article ont également regardé</h5>

    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="single-item col-sm-6 col-md-4 col-lg-3 mb-2">
                    <div class="img" style="background-image: url('img/frigo1.jpg');"></div>
                    <div class="info">
                        <h6>Tablet PC</h6>
                        <small>This is a description for the item</small>

                        <div class="item-flex">
                            <div class="rating-product">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>

                            <div class="price-product">
                                <h6 class="mt-2">$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item col-sm-6 col-md-4 col-lg-3 mb-2">
                    <div class="img" style="background-image: url('img/frigo2.jpg');"></div>
                    <div class="info">
                        <h6>Tablet PC</h6>
                        <small>This is a description for the item</small>

                        <div class="item-flex">
                            <div class="rating-product">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>

                            <div class="price-product">
                                <h6 class="mt-2">$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item col-sm-6 col-md-4 col-lg-3 mb-2">
                    <div class="img" style="background-image: url('img/congelateur1.jpg');"></div>
                    <div class="info">
                        <h6><a href="detail.html">Tablet PC</a></h6>
                        <small>This is a description for the item</small>

                        <div class="item-flex">
                            <div class="rating-product">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>

                            <div class="price-product">
                                <h6 class="mt-2">$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item col-sm-6 col-md-4 col-lg-3 mb-2">
                    <div class="img" style="background-image: url('img/congelateur2.jpg');"></div>
                    <div class="info">
                        <h6><a href="detail.html">Tablet PC</a></h6>
                        <small>This is a description for the item</small>

                        <div class="item-flex">
                            <div class="rating-product">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>

                            <div class="price-product">
                                <h6 class="mt-2">$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item col-sm-6 col-md-4 col-lg-3 mb-2">
                    <div class="img" style="background-image: url('img/ouffeur1.jpg');"></div>
                    <div class="info">
                        <h6><a href="detail.html">Tablet PC</a></h6>
                        <small>This is a description for the item</small>

                        <div class="item-flex">
                            <div class="rating-product">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>

                            <div class="price-product">
                                <h6 class="mt-2">$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item col-sm-6 col-md-4 col-lg-3 mb-2">
                    <div class="img" style="background-image: url('img/ouffeur2.jpg');"></div>
                    <div class="info">
                        <h6><a href="detail.html">Tablet PC</a></h6>
                        <small>This is a description for the item</small>

                        <div class="item-flex">
                            <div class="rating-product">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>

                            <div class="price-product">
                                <h6 class="mt-2">$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection