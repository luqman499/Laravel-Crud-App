<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            background: #f5f5f5;
            color: #333;
            padding: 2rem;
        }

        .container {
            max-width: 550px;
            margin: 0 auto;
        }

        h1 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.08);
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        label {
            display: block;
            font-size: 0.85rem;
            font-weight: 500;
            margin-bottom: 0.4rem;
            color: #555;
        }

        input,
        textarea {
            width: 100%;
            padding: 0.6rem 0.85rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 0.9rem;
            outline: none;
        }

        input:focus,
        textarea:focus {
            border-color: #f59e0b;
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        .error {
            color: #ef4444;
            font-size: 0.8rem;
            margin-top: 0.3rem;
        }

        .btn-row {
            display: flex;
            gap: 0.75rem;
            margin-top: 1.5rem;
        }

        .btn {
            padding: 0.55rem 1.2rem;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.9rem;
            cursor: pointer;
            border: none;
        }

        .btn-warning {
            background: #f59e0b;
            color: white;
        }

        .btn-warning:hover {
            background: #d97706;
        }

        .btn-secondary {
            background: #e5e7eb;
            color: #333;
        }

        .btn-secondary:hover {
            background: #d1d5db;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit Product</h1>
        <div class="card">
            <form method="post" action="{{ route('product.update', ['product' => $product]) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Product name"
                        value="{{ $product->name }}">
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="qty">Quantity</label>
                    <input type="number" name="qty" id="qty" placeholder="0" value="{{ $product->qty }}">
                    @error('qty')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" placeholder="0" value="{{ $product->price }}">
                    @error('price')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" placeholder="Product description">{{ $product->description }}</textarea>
                    @error('description')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="btn-row">
                    <button type="submit" class="btn btn-warning">Update Product</button>
                    <a href="{{ route('product.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>














{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <H1>Edit a Product
    </H1>
    <form method="post" action="{{ route('product.update', ['product' => $product]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="Name">Name:</label>
            <input type="text" name="name" placeholder="Name" value="{{ $product->name }}">

        </div>
        <br>

        <div>
            <label for="Qty">Qty:</label>
            <input type="text" name="qty" placeholder="Qty" value="{{ $product->qty }}">
        </div>
        <br>
        <div>
            <label for="Price">Price:</label>
            <input type="text" name="price" placeholder="Price" value="{{ $product->price }}">
        </div>
        <br>
        <div>
            <label for="description">Description:</label>
            <input type="text" name="description" placeholder="Description" value="{{ $product->description }}">
        </div>
        <br>
        <input type="submit" value="Update">

    </form>
</body>

</html> --}}
