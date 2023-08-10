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
                    <li><a class="active" href="{{url('blog')}}">Blog</a></li>
                    <li><a href="{{url('about')}}">About</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                    <li><a href="{{url('cart')}}"><i class="far fa-shopping-bag"></i></a></li>
                </ul>
            </div>
        </section>

        <section id="page-header" class="blog-header">
            <h2>#readmore</h2>
            <p>Read all case studies about our products! </p>
        </section>

        <section id="blog">
            <div class="blog-box">
                <div class="blog-img">
                    <img src="{{asset('assets/index/img/blog/b1.jpg')}}" alt="">
                </div>
                <div class="blog-details">
                    <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
                    <p>Kickstarter man braid godard coloring book. Reclette waistcoat selfies year
                        wolf chartreuse hexagon irony, godard...
                    </p>
                    <a href="#">CONTINUE READING</a>
                </div>
                <h1>13/01</h1>
            </div>
            <div class="blog-box">
                <div class="blog-img">
                    <img src="{{asset('assets/index/img/blog/b2.jpg')}}" alt="">
                </div>
                <div class="blog-details">
                    <h4>How to Style a Quiff</h4>
                    <p>Kickstarter man braid godard coloring book. Reclette waistcoat selfies year
                        wolf chartreuse hexagon irony, godard...
                    </p>
                    <a href="#">CONTINUE READING</a>
                </div>
                <h1>13/04</h1>
            </div>
            <div class="blog-box">
                <div class="blog-img">
                    <img src="{{asset('assets/index/img/blog/b3.jpg')}}" alt="">
                </div>
                <div class="blog-details">
                    <h4>Must-Have Skater Girl Items</h4>
                    <p>Kickstarter man braid godard coloring book. Reclette waistcoat selfies year
                        wolf chartreuse hexagon irony, godard...
                    </p>
                    <a href="#">CONTINUE READING</a>
                </div>
                <h1>12/01</h1>
            </div>
            <div class="blog-box">
                <div class="blog-img">
                    <img src="{{asset('assets/index/img/blog/b4.jpg')}}" alt="">
                </div>
                <div class="blog-details">
                    <h4>Runway-Inspired Trends</h4>
                    <p>Kickstarter man braid godard coloring book. Reclette waistcoat selfies year
                        wolf chartreuse hexagon irony, godard...
                    </p>
                    <a href="#">CONTINUE READING</a>
                </div>
                <h1>16/01</h1>
            </div>
            <div class="blog-box">
                <div class="blog-img">
                    <img src="{{asset('assets/index/img/blog/b6.jpg')}}" alt="">
                </div>
                <div class="blog-details">
                    <h4>AW20 Menswear Trends</h4>
                    <p>Kickstarter man braid godard coloring book. Reclette waistcoat selfies year
                        wolf chartreuse hexagon irony, godard...
                    </p>
                    <a href="#">CONTINUE READING</a>
                </div>
                <h1>10/03</h1>
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