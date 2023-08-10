<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Real Estate System</title>
    <link rel="stylesheet" href="{{asset('assets/admin/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    @include('admin.layouts.sidebar')

    <div class="main--content">
        @include('admin.layouts.header')
        <div class="container">
            <div class="row" style="margin-bottom:20px;">
                <div class="col-sm-4">
                    <h4>Products for Shopping</h4>
                </div>
                <div class="col-sm-8 d-flex justify-content-end">
                    <a href="{{url('admin/shopping/add-shopping-product')}}" class="btn btn-success">Add Shopping</a>
                </div>
            </div>
        </div>
        <div class="container">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product Brand</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shoppings as $shopping)
                    <tr>
                        <td>{{$shopping->product_brand}}</td>
                        <td>{{$shopping->product_name}}</td>
                        <td>{{$shopping->product_price}}</td>
                        <td><img src="{{asset($shopping->image)}}" alt="Product Image" style="width: 200px; height: 100px; object-fit: cover;"></td>
                        <td>
                            <a href="" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                        
                        {{-- <td>
                            <a href="{{url('admin/listings/edit/' . $listing->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{url('admin/listings/delete/'. $listing->id)}}" class="btn btn-danger">Delete</a>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>