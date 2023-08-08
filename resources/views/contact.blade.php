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
                    <li><a class="active" href="{{url('contact')}}">Contact</a></li>
                    <li><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
                </ul>
            </div>
        </section>

        <section id="page-header" class="about-header">
            <h2>#let's_talk</h2>
            <p>LEAVE A MESSAGE,We love to hear from you!</p>
        </section>

        <section id="contact-details" class="section-p1">
            <div class="details">
                <span>GET IN TOUCH</span>
                <h2>Visit one of our agency location or contact us today</h2>
                <h3>Head Office</h3>
                <div>
                    <li>
                        <i class="fal fa-map"></i>
                        <p>76 Street Embakasi Pipeline</p>
                    </li>
                    <li>
                        <i class="fal fa-envelope"></i>
                        <p>contact@vincent.com</p>
                    </li>
                    <li>
                        <i class="fal fa-phone-alt"></i>
                        <p>+254 708 683 439</p>
                    </li>
                    <li>
                        <i class="fal fa-clock"></i>
                        <p>Monday to Saturday: 9:00am to 5:00pm</p>
                    </li>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31910.
                009124390097!2d36.878053559507535!3d-1.3252247793707543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
                1!3m3!1m2!1s0x182f13ce1d7b41e3%3A0xc20ee78d2c07b946!2sTransami
                !5e0!3m2!1sen!2ske!4v1691476491164!5m2!1sen!2ske" width="600" height="450" 
                style="border:0;" allowfullscreen="" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        
        <section id ="form-details">
            <form action="">
                <span>LEAVE A MESSAGE</span>
                <h2>We love to hear from you</h2>
                <input type="text" placeholder="Your Name">
                <input type="email" placeholder="E-mail">
                <input type="text" placeholder="Subject">
                <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                <button class="normal">Submit</button>
            </form>

            <div class="people">
                <div>
                    <img src="{{asset('assets/index/img/people/1.png')}}" alt="">
                    <p><span>John Doe</span> Senior Marketing Manager <br> Phone: + 000 123 
                        77 88 <br>Email: contact@john.com</p>
                </div>
                <div>
                    <img src="{{asset('assets/index/img/people/2.png')}}" alt="">
                    <p><span>William Smith</span> Senior Marketing Manager <br> Phone: + 000 123 
                        77 88 <br>Email: contact@william.com</p>
                </div>
                <div>
                    <img src="{{asset('assets/index/img/people/3.png')}}" alt="">
                    <p><span>Emma Stone</span> Senior Marketing Manager <br> Phone: + 000 123 
                        77 88 <br>Email: contact@emmastone.com</p>
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
            
        
        <script src="{{asset('assets/index/script.js')}}"></script>
    </body>
</html>