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
                    <h2>Add Product</h2>
                </div>
            </div>
        </div>

        <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <form action="{{url('/admin/products/save-product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col md-4">
                        <label for="product_brand" class="form-label">Product Brand</label>
                        <select class="form-select" name="product_brand" required>
                            <option value="">Select property brand</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Puma">Puma</option>
                            <option value="Vans">Vans</option>
                            <option value="Under Armor">Under Armor</option>
                            <option value="Sketchers">Sketchers</option>
                            <option value="Reebok">Reebok</option>
                            <option value="Fila">Fila</option>
                            <option value="Converse">Converse</option>
                        </select>
                    </div>
                    <div class="form-group col md-4">
                        <label for="product_name" class="form-label">Property Name</label>
                        <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') }}" placeholder="Product name">
                        @error('product_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    
                    <div class="form-group col-md-6">
                        <label for="price" class="form-label" style="margin-bottom:10px;margin-top:15px;">Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="KES" value="{{ old('price') }}">
                        @error('price')
                            <div class="invalid-feedback">{{ $message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="inputItemImage" style="margin-bottom:10px;margin-top:15px;">Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}">
                        @error('image')
                            <div class="invalid-feedback">{{ $message}}</div>
                        @enderror
                    </div>
                </div>

                <div style="margin-top:25px;">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>

    </div>
</body>