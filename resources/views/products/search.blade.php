@extends('layouts.master')

@section('content')
        <!-- PRODUITS POPULAIRES -->

        <div class="popular my-5">
            <h3>PRODUITS POPULAIRES</h3>
            <div class="popular-caroussel" data-flickity='{"autoPlay": true, "prevNextButtons": true, "wrapAround": true}'>         
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
            <h3>PRODUITS MIS EN AVANT</h3>
            <div class="popular-caroussel" data-flickity='{"autoPlay": true, "prevNextButtons": false, "wrapAround": true}'>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/table1.jpg');"></div>
                    <div class="info">
                        <h6>table balcon</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/congelateur1.jpg');"></div>
                    <div class="info">
                        <h6>Congélateur</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/chemise2.jpg');"></div>
                    <div class="info">
                        <h6>Chemise bleue</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/costume1.jpg');"></div>
                    <div class="info">
                        <h6>Costume gris</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/tenis2.jpg');"></div>
                    <div class="info">
                        <h6>Tenis nike</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/chaise1.jpg');"></div>
                    <div class="info">
                        <h6>chaises</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
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
            <h3>PRODUITS MIS EN AVANT</h3>
            <div class="popular-caroussel" data-flickity='{"autoPlay": true, "prevNextButtons": false, "wrapAround": true}'>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/ouffeur2.jpg');"></div>
                    <div class="info">
                        <h6>Ouffeur à 3 baffles</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/smartphone6.jpg');"></div>
                    <div class="info">
                        <h6>Samsung</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/tablette1.jpg');"></div>
                    <div class="info">
                        <h6>Tablette avec stylo</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/frigo7.jpg');"></div>
                    <div class="info">
                        <h6>Frigo</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/macbookpro1.jpg');"></div>
                    <div class="info">
                        <h6>Laptop</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/lampe6.jpg');"></div>
                    <div class="info">
                        <h6>Lampe de chevet</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURED PRODUCTS -->
    
        <!-- FEATURED PRODUCTS -->
        <div class="popular my-5">
            <h3>PRODUITS MIS EN AVANT</h3>
            <div class="popular-caroussel" data-flickity='{"autoPlay": true, "prevNextButtons": false, "wrapAround": true}'>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/robe1.jpg');"></div>
                    <div class="info">
                        <h6>Robe de soirée</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/tshirt-f1.jpg');"></div>
                    <div class="info">
                        <h6>T-shirt femme</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/fauteuil5.jpg');"></div>
                    <div class="info">
                        <h6>Canapé</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/tv3.jpg');"></div>
                    <div class="info">
                        <h6>Samsung 17'</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/radio3.jpg');"></div>
                    <div class="info">
                        <h6>Radio</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/tshirt-h10.jpg');"></div>
                    <div class="info">
                        <h6>t-shirt blanc</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
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
            <h3>PRODUITS POPULAIRES</h3>
            <div class="popular-caroussel" data-flickity='{"autoPlay": true, "prevNextButtons": false, "wrapAround": true}'>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/plaque1.jpg');"></div>
                    <div class="info">
                        <h6>Plaque à gaz</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/chauffe1.jpg');"></div>
                    <div class="info">
                        <h6>Chauffe eau</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/cuisiniere1.jpg');"></div>
                    <div class="info">
                        <h6>cuisinière</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/mixeur1.jpg');"></div>
                    <div class="info">
                        <h6>robot mixeur</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/camera1.jpg');"></div>
                    <div class="info">
                        <h6>camera photo</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/bureau1.jpg');"></div>
                    <div class="info">
                        <h6>bureau</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURED PRODUCTS -->
    
        <!-- FEATURED PRODUCTS -->
        <div class="popular my-5">
            <h3>PRODUITS POPULAIRES</h3>
            <div class="popular-caroussel" data-flickity='{"autoPlay": true, "prevNextButtons": false, "wrapAround": true}'>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/sac1.jpg');"></div>
                    <div class="info">
                        <h6>Sac à dos</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/pull1.jpg');"></div>
                    <div class="info">
                        <h6>pullover</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/sacf1.jpg');"></div>
                    <div class="info">
                        <h6>sac à main</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/talon1.jpg');"></div>
                    <div class="info">
                        <h6>talon</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/chaisep1.jpg');"></div>
                    <div class="info">
                        <h6>Chaise présidentielle</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="img" style="background-image: url('img/casquette1.jpg');"></div>
                    <div class="info">
                        <h6>Casquette</h6>
                        <small>This is a description for the item</small>
    
                        <div class="item-flex">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
    
                            <div class="price">
                                <h6>$650.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURED PRODUCTS -->
    
@endsection