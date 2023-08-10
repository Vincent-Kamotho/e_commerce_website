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
                    <li><a class="active" href="{{url('about')}}">About</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                    <li><a href="{{url('cart')}}"><i class="far fa-shopping-bag"></i></a></li>
                </ul>
            </div>
        </section>

        <section id="page-header" class="about-header">
            <h2>#KnowUs</h2>
            <p>Find some information about us! </p>
        </section>

        <section id="about-head" class="section-p1">
            <img src="{{asset('assets/index/img/about/a6.jpg')}}" alt="">
            <div>
                <h2>Who We Are</h2>
                <p>We are a leading website in the purchase and efficiency of the processes of the 
                    purchases of the goods.
                </p>

                <abbr title="">Create as much images with as much or as little control as you like thanks
                    to a choice of Basic and Creative modes.
                </abbr>

                <br><br>

                <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Create stunning images with as much or as little control as you like
                    thanks to a choice of Basic and Creative modes.
                </marquee>
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