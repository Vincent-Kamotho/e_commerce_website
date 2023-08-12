<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ecommerce Website</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="{{asset('assets/index/style.css')}}">
    </head>

    <body>

        <section id="header">
            <a href="#"><img src="{{asset('assets/index/img/logo.png')}}" class="logo" alt=""></a>

            <div>
                <ul id="navbar">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a class="active" href="{{url('shop')}}">Shop</a></li>
                    <li><a href="{{url('blog')}}">Blog</a></li>
                    <li><a href="{{url('about')}}">About</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                    <li><a href="{{url('cart')}}"><i class="far fa-shopping-bag"></i></a></li>
                </ul>
            </div>
        </section>

        <section id="page-header">
            <h2>#stayhome</h2>
            <p>Save more with coupons & up to 70% off! </p>
        </section>

        
        <section id="product1" class="section-p1">
           <a href="{{url('cart')}}">
                <button type="submit" class="normal" style="background: #17a2b8; text-align:right;">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart <span style="color: red;">&nbsp; &nbsp; &nbsp; {{ count((array) session('cart')) }}</span>
                    
                </button>
           </a>
            
            <div class="pro-container">
                @foreach($shoppings as $shopping)
                
                {{-- <div class="pro" onclick="window.location.href='{{url('shop/single-product/'. $shopping->id)}}'"> --}}
                <div class="pro">
                    <img src="{{asset($shopping->image)}}" alt="">
                    <div class="des">
                        <span>{{$shopping->product_brand}}</span>
                        <h5>{{$shopping->product_name}}</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>KES  {{$shopping->product_price}}</h4>
                    </div>
                    <a href="{{url('add-to-cart/'. $shopping->id)}}"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                @endforeach
                
            </div>
        </section>

        <section id="pagination" class="section-p1">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
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