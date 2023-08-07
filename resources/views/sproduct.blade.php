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
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a class="active" href="{{url('shop')}}">Shop</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
                </ul>
            </div>
        </section>

        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img src="{{asset('assets/index/img/products/f1.jpg')}}" width="100%" id="MainImg" alt="">

                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="{{asset('assets/index/img/products/f1.jpg')}}" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="{{asset('assets/index/img/products/f2.jpg')}}" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="{{asset('assets/index/img/products/f3.jpg')}}" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="{{asset('assets/index/img/products/f4.jpg')}}" width="100%" class="small-img" alt="">
                    </div>
                </div>
            </div>
            <div class="single-pro-details">
                <h6>Home / T-Shirt</h6>
                <h4>Men's Fashion T Shirts</h4>
                <h2>$139.00</h2>
                <select>
                    <option>Select Size</option>
                    <option>XL</option>
                    <option>XXL</option>
                    <option>Small</option>
                    <option>Large</option>
                </select>
                <input type="number" value="1">
                <button class="normal">Add To Cart</button>
                <h4>Product Details</h4>
                <span>The cottin shirt that comes with substantial cotton material.  Also Fabric
                    and a seamless double-needle collar, and available in a range of colors, it offers it all
                    in the ultimate head-turning package.
                </span>
            </div>
        </section>


        <section id="product1" class="section-p1">
            <h2>Featured Products</h2>
            <p>Summer Collection New Modern Desing</p>
            <div class="pro-container">
                <div class="pro">
                    <img src="{{asset('assets/index/img/products/f1.jpg')}}" alt="">
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
            </div>
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

        <script>
            var MainImg = document.getElementById("MainImg");
            var smallimg = document.getElementsByClassName("small-img");

            smallimg[0].onclick = function(){
                MainImg.src = smallimg[0].src;
            }
            smallimg[1].onclick = function(){
                MainImg.src = smallimg[1].src;
            }
            smallimg[2].onclick = function(){
                MainImg.src = smallimg[2].src;
            }
            smallimg[3].onclick = function(){
                MainImg.src = smallimg[3].src;
            }
        </script>
            
        
        <script src="{{asset('assets/index/script.js')}}"></script>
    </body>
</html>