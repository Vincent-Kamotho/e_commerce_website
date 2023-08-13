<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
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
                @php $total = 0 @endphp

                @if(session('cart'))

                @foreach(session('cart') as $id => $details)

                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id={{ $id }}>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm cart_remove" data-id="{{ $id }}"><i class="far fa-times-circle"></i></button>
                    </td>
                    <td><img src="{{$details['image']}}" alt=""></td>
                    <td>{{ $details['name']}}</td>
                    <td data-th="Price" class="price" >KES {{ $details['price']}}</td>
                    <td data-th="Quantity">
                        <input type="number" value="1" min="1" class="quantity cart_update">
                    </td>
                    <td data-th="SubTotal" class="total">KES {{ $details['price'] * $details['quantity']}}</td>
                </tr>
                @endforeach
                @endif

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
                    <td class="cart-subtotal">KES {{ $total}}</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td class="final-total"><strong>KES {{ $total}}</strong></td>
                </tr>
            </table>
            <a href="{{url('login')}}">
                <button class="normal">Proceed to checkout</button>
            </a>
        </div>
    </section>


    <footer class="section-p1">
        <div class="col">
            <img src="{{asset('assets/index/img/logo.png')}}" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong> Embakasi Nairobi</p>
            <p><strong>Phone: </strong> <a href="tel:+254708683439">+254 708 683 439</a></p>
            <p><strong>Hours: </strong> 09:00 - 5:00P.M MON-SAT</p>
            <p><strong>Location: </strong>
                <a href="https://maps.google.com/maps?q=Pipeline+Embakasi+Nairobi" target="_blank">Embakasi Nairobi</a>
            </p>
        </div>
    </footer>


    <script>
        $(document).ready(function() {
            $(".quantity.cart_update").on("input", function() {
                var row = $(this).closest("tr");
                var price = parseFloat(row.find(".price").text().replace("KES", "").trim());
                var quantity = parseInt($(this).val(), 10);
                var subtotal = price * quantity;
                row.find(".total").text("KES " + subtotal.toFixed(2));
            });
        });

        
    </script>

    <script>
        $(document).ready(function() {
        $(".cart_remove").on("click", function() {
            var itemId = $(this).data("id");
            
            // Send the itemId to the server for removing the item from the cart
            $.ajax({
                url: "/remove-from-cart/" + itemId,
                type: "GET",
                success: function(response) {
                    // Handle success, like updating the cart view
                    // For example: window.location.reload();

                    if (response.message === 'Item removed successfully') {
                        window.location.href = "{{ route('cart')}}"
                    } else{
                        document.write('OK');
                    }
                },
                error: function() {
                    // Handle error
                }
            });
        });
    });



    $(document).ready(function() {
    // Calculate and update total when page loads
    updateTotals();

    // Update totals when quantity changes
    $(".quantity").on("change", function() {
        updateTotals();
    });

    // Update totals when an item is removed
    $(".cart_remove").on("click", function() {
        updateTotals();
    });

    function updateTotals() {
        let cartSubtotal = 0;

        $(".quantity").each(function() {
            const price = parseFloat($(this).closest("tr").find(".price").text().replace("KES ", ""));
            const quantity = parseInt($(this).val());
            const subtotal = price * quantity;

            $(this).closest("tr").find(".total").text("KES " + subtotal.toFixed(2));
            cartSubtotal += subtotal;
        });

        $(".cart-subtotal").text("KES " + cartSubtotal.toFixed(2));
        $(".final-total").text("KES " + cartSubtotal.toFixed(2));
    }
    });
    </script>
    

    
</body>

</html>