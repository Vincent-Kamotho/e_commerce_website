<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Send Mail</title>
</head>

<body>

    <h2 style="margin-top: 10px; margin-left: 120px;">Checkout Page</h2>

    <div class="container mt-4">

        <form action="{{url('purchase')}}" method="POST" id="payment-form">
            @csrf
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Email</label>
                    @if(auth()->user())
                        <input type="email" class="form-control" name="email" id="email" value="{{ auth()->user()->email }}" readonly>
                    @else
                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email')}}" required>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                </div>
            </div>
            

            <h4 style="margin-top: 10px; margin-bottom: 10px;">Payment Details</h4>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCardName">Name on Card</label>
                    <input type="text" class="form-control" name="card_name" id="inputCardName" placeholder="Name on Card">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputAddress">Credit or Debit Card</label>
                    <input type="text" class="form-control" name="card_number" placeholder="Debit/Credit card Number" required/>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Complete Order</button>
        </form>


    </div>

    

</body>

</html>