<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ecommerce Website</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <link rel="stylesheet" href="{{asset('assets/index/style.css')}}">
    </head>

    <body>

        <section id="header">
            <a href="#"><img src="{{asset('assets/index/img/logo.png')}}" class="logo" alt=""></a>

            <div>
                <ul id="navbar">
                    <li><a class="active" href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('shop')}}">Shop</a></li>
                    <li><a href="{{url('blog')}}">Blog</a></li>
                    <li><a href="{{url('about')}}">About</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                    <li><a href="{{url('cart')}}"><i class="far fa-shopping-bag"></i></a></li>
                </ul>
            </div>
        </section>

        <section id="hero">
            <h4>Trade-in-offer</h4>
            <h2>Super Value Deals</h2>
            <h1>On all Products</h1>
            <p>Save more with coupons & up to 70% off! </p>
            <button>Shop Now</button>
        </section>

        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="{{asset('assets/index/img/features/f1.png')}}" alt="">
                <h6>Free Shipping</h6>
            </div>
            <div class="fe-box">
                <img src="{{asset('assets/index/img/features/f2.png')}}" alt="">
                <h6>Online Order</h6>
            </div>
            <div class="fe-box">
                <img src="{{asset('assets/index/img/features/f3.png')}}" alt="">
                <h6>Save Money</h6>
            </div>
            <div class="fe-box">
                <img src="{{asset('assets/index/img/features/f4.png')}}" alt="">
                <h6>Promotions</h6>
            </div>
            <div class="fe-box">
                <img src="{{asset('assets/index/img/features/f5.png')}}" alt="">
                <h6>Happy Sell</h6>
            </div>
            <div class="fe-box">
                <img src="{{asset('assets/index/img/features/f6.png')}}" alt="">
                <h6>Support</h6>
            </div>
        </section>

        <section id="product1" class="section-p1">
            <h2>Featured Products</h2>
            <p>Summer Collection New Modern Desing</p>
            <div class="pro-container">
                @foreach ($products as $product)
                <div class="pro">
                    <img src="{{asset($product->image)}}" alt="">
                    <div class="des">
                        <span>{{$product->product_brand}}</span>
                        <h5>{{$product->product_name}}</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>KES  {{$product->product_price}}</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                @endforeach
                {{-- <div class="pro">
                    <img src="{{asset('assets/index/img/products/f2.jpg')}}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon astronaunt T-Shirts</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="{{asset('assets/index/img/products/f3.jpg')}}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon astronaunt T-Shirts</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="{{asset('assets/index/img/products/f4.jpg')}}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon astronaunt T-Shirts</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="{{asset('assets/index/img/products/f5.jpg')}}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon astronaunt T-Shirts</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="{{asset('assets/index/img/products/f6.jpg')}}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon astronaunt T-Shirts</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="{{asset('assets/index/img/products/f7.jpg')}}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon astronaunt T-Shirts</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="{{asset('assets/index/img/products/f8.jpg')}}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Cartoon astronaunt T-Shirts</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div> --}}
            </div>
        </section>

        <section id="banner" class="section-m1">
            <h4>Repair Service</h4>
            <h2>Up to <span>70% off</span> - All t-shirts & Accessories</h2>
            <a href="{{url('shop')}}">
                <button class="normal">Explore More</button>
            </a>
            
        </section>

        <footer class="section-p1">
            <div class="col">
                <img src="{{asset('assets/index/img/logo.png')}}" alt="">
                <h4>Contact</h4>
                <p><strong>Address: </strong> Embakasi Nairobi</p>
                <p><strong>Phone: </strong> <a href="tel:+254708683439">+254 708 683 439</a></p>
                <p><strong>Hours: </strong> 09:00 - 5:00P.M  MON-SAT</p>
                <p><strong>Location: </strong> 
                    <a href="https://maps.google.com/maps?q=Pipeline+Embakasi+Nairobi" target="_blank">Embakasi Nairobi</a>
                </p>
                <p>
            </div>
        </footer>
            
        
        <script src="{{asset('assets/index/script.js')}}"></script>
    </body>
</html>