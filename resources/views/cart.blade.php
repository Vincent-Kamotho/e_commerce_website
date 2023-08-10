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
                    <li><a href="{{url('shop')}}">Shop</a></li>
                    <li><a href="{{url('blog')}}">Blog</a></li>
                    <li><a href="{{url('about')}}">About</a></li>
                    <li><a  href="{{url('contact')}}">Contact</a></li>
                    <li><a class="active" href="{{url('cart')}}"><i class="far fa-shopping-bag"></i></a></li>
                </ul>
            </div>
        </section>

        <section id="page-header" class="about-header">
            <h2>#let's_talk</h2>
            <p>LEAVE A MESSAGE,We love to hear from you!</p>
        </section>

        <section id="cart" class="section-p1">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Remove</td>
                        <td>Image</td>
                        <td>Product</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Subtotal</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                        <td><img src="{{asset('assets/index/img/products/f1.jpg')}}" alt=""></td>
                        <td>Cartoon Astronaunt T-Shirts</td>
                        <td>$118.19</td>
                        <td><input type="number" value="1"></td>
                        <td>$118.19</td>
                    </tr>
                    <tr>
                        <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                        <td><img src="{{asset('assets/index/img/products/f2.jpg')}}" alt=""></td>
                        <td>Cartoon Astronaunt T-Shirts</td>
                        <td>$118.19</td>
                        <td><input type="number" value="1"></td>
                        <td>$118.19</td>
                    </tr>
                    <tr>
                        <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                        <td><img src="{{asset('assets/index/img/products/f3.jpg')}}" alt=""></td>
                        <td>Cartoon Astronaunt T-Shirts</td>
                        <td>$118.19</td>
                        <td><input type="number" value="1"></td>
                        <td>$118.19</td>
                    </tr>
                </tbody>
            </table>

        </section>
        
        <section id="cart-add" class="section-p1">
            <div id="coupon">
                <h3>Apply Coupon</h3>
                <div>
                    <input type="text" placeholder="Enter your Coupon">
                    <button class="normal">Apply</button>
                </div>
            </div>
            <div id="subtotal">
                <h3>Cart Totals</h3>
                <table>
                    <tr>
                        <td>Cart SubTotal</td>
                        <td>$335</td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>$ 335</strong></td>
                    </tr>
                </table>
                <button class="normal">Proceed to checkout</button>
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
            
        
        <script src="{{asset('assets/index/script.js')}}"></script>
    </body>
</html>