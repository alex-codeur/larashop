@extends('layouts.master')

@section('content')

        @include('partials.caroussel')

        <!-- PRODUITS POPULAIRES -->

        <div class="popular my-5">
            <h3>PRODUITS POPULAIRES</h3>
            <div class="popular-caroussel" data-flickity='{"autoPlay": true, "prevNextButtons": false, "wrapAround": true}'>         
                @foreach ($products as $product)
                <div class="single-item">
                    <a href="{{ route('products.show', $product->slug) }}">
                        <div class="img" style="background-image: url('{{ Voyager::Image($product->image) }}');"></div>
                    </a>
                    <div class="info">
                        <h6><a href="{{ route('products.show', $product->slug) }}">{{ $product->title }}</a></h6>
                        <small>{{ $product->subtitle }}</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>${{ $product->getPrice() }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    
        <!-- END PRODUITS POPULAIRES -->
    
        <!-- FEATURED PRODUCTS -->
    
        <div class="popular my-5">
            <h3>PRODUITS ELECTRO-MENAGERS</h3>
            <div class="popular-caroussel" data-flickity='{"autoPlay": true, "prevNextButtons": false, "wrapAround": true}'>         
                @foreach ($products2 as $product)
                <div class="single-item">
                    <a href="{{ route('products.show', $product->slug) }}">
                        <div class="img" style="background-image: url('{{ Voyager::Image($product->image) }}');"></div>
                    </a>
                    <div class="info">
                        <h6><a href="{{ route('products.show', $product->slug) }}">{{ $product->title }}</a></h6>
                        <small>{{ $product->subtitle }}</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>${{ $product->getPrice() }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- PRODUITS POPULAIRES -->
    
        <!-- OFFER -->
    
        <div class="offer container">
            <div class="row">
                <div class="column-2 col-md-5 w-100 text-center">
                    <img src="img/iphone.png" class="offer-img" alt="">
                </div>
                <div class="column-2 col-md-7 w-100 text-center">
                    <p>Exclisively Available on RedStore</p>
                    <h1>Smart Band 4</h1>
                    <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis eius qui alias at? Quis est fugiat porro magnam explicabo, temporibus facere doloremque deserunt neque dignissimos illum nobis repellendus, deleniti expedita.</small><br>
                    <a href="#" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
        
      <!--  END OFFER -->
    
        <!-- FEATURED PRODUCTS -->
        <div class="popular my-5">
            <h3>VETEMENTS HOMMES</h3>
            <div class="popular-caroussel" data-flickity='{"autoPlay": true, "prevNextButtons": false, "wrapAround": true}'>         
                @foreach ($products3 as $product)
                <div class="single-item">
                    <a href="{{ route('products.show', $product->slug) }}">
                        <div class="img" style="background-image: url('{{ Voyager::Image($product->image) }}');"></div>
                    </a>
                    <div class="info">
                        <h6><a href="{{ route('products.show', $product->slug) }}">{{ $product->title }}</a></h6>
                        <small>{{ $product->subtitle }}</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>${{ $product->getPrice() }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- FEATURED PRODUCTS -->
    
        <!-- FEATURED PRODUCTS -->
        <div class="popular my-5">
            <h3>VETEMENTS FEMMES</h3>
            <div class="popular-caroussel" data-flickity='{"autoPlay": true, "prevNextButtons": false, "wrapAround": true}'>         
                @foreach ($products4 as $product)
                <div class="single-item">
                    <a href="{{ route('products.show', $product->slug) }}">
                        <div class="img" style="background-image: url('{{ Voyager::Image($product->image) }}');"></div>
                    </a>
                    <div class="info">
                        <h6><a href="{{ route('products.show', $product->slug) }}">{{ $product->title }}</a></h6>
                        <small>{{ $product->subtitle }}</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>${{ $product->getPrice() }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- FEATURED PRODUCTS -->
    
        <!-- OFFER -->
    
        <div class="offer-2 container">
            <div class="row">
                <div class="column-2 col-md-5 w-100 text-center">
                    <img src="img/smartmockups_ke4yc3o2.png" class="offer-img" alt="">
                </div>
                <div class="column-2 col-md-7 w-100 text-center">
                    <p>Exclisively Available on RedStore</p>
                    <h1>Smart Band 4</h1>
                    <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis eius qui alias at? Quis est fugiat porro magnam explicabo, temporibus facere doloremque deserunt neque dignissimos illum nobis repellendus, deleniti expedita.</small><br>
                    <a href="#" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
        
      <!--  END OFFER -->
    
        <!-- FEATURED PRODUCTS -->
        <div class="popular my-5">
            <h3>PRODUITS INFORMATIQUES</h3>
            <div class="popular-caroussel" data-flickity='{"autoPlay": true, "prevNextButtons": false, "wrapAround": true}'>         
                @foreach ($products5 as $product)
                <div class="single-item">
                    <a href="{{ route('products.show', $product->slug) }}">
                        <div class="img" style="background-image: url('{{ Voyager::Image($product->image) }}');"></div>
                    </a>
                    <div class="info">
                        <h6><a href="{{ route('products.show', $product->slug) }}">{{ $product->title }}</a></h6>
                        <small>{{ $product->subtitle }}</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>${{ $product->getPrice() }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- FEATURED PRODUCTS -->
    
        <!-- FEATURED PRODUCTS -->
        <div class="popular my-5">
            <h3>PRODUITS MAISONS ET BUREAUX</h3>
            <div class="popular-caroussel" data-flickity='{"autoPlay": true, "prevNextButtons": false, "wrapAround": true}'>         
                @foreach ($products6 as $product)
                <div class="single-item">
                    <a href="{{ route('products.show', $product->slug) }}">
                        <div class="img" style="background-image: url('{{ Voyager::Image($product->image) }}');"></div>
                    </a>
                    <div class="info">
                        <h6><a href="{{ route('products.show', $product->slug) }}">{{ $product->title }}</a></h6>
                        <small>{{ $product->subtitle }}</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>${{ $product->getPrice() }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- FEATURED PRODUCTS -->
    
@endsection