@extends('layouts.master')

@section('content')
    
        <!-- NAVBAR -->
    <nav arial-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Accueil</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="#">High-tech</a>
            </li>
        </ol>
    </nav>
    <!-- END OF NAVBAR -->

    <div class="container">
        <div class="py-3">
            <span class="font-weight-bold">  
            </span> <span>(214 produits trouvés)</span>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="single-item col-sm-6 col-md-4 col-lg-2 mb-2">
                        <div class="img" style="background-image: url('{{ Voyager::Image($product->image) }}');"></div>
                        <div class="info">
                            <h6><a href="{{ route('products.show', $product->slug) }}">{{ $product->title }}</a></h6>
                            <small>{{ $product->subtitle }}</small>
    
                            <div class="item-flex">
                                <div class="rating-product">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </div>
    
                                <div class="price-product">
                                    <h6 class="mt-2">${{ $product->price }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <div class="col-md-2">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea, odit neque aliquid porro accusamus reiciendis blanditiis quos non, cum rerum quod perspiciatis voluptatum? Reiciendis commodi odio quae possimus est provident.
            </div>
        </div>
    </div>
    
@endsection