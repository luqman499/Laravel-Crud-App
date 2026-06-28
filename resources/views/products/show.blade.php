<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product</title>
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

        .field {
            margin-bottom: 1.2rem;
            border-bottom: 1px solid #f0f0f0;
            padding-bottom: 1.2rem;
        }

        .field:last-of-type {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .field-label {
            font-size: 0.8rem;
            font-weight: 500;
            color: #888;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 0.3rem;
        }

        .field-value {
            font-size: 1rem;
            color: #333;
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

        .btn-danger {
            background: #ef4444;
            color: white;
        }

        .btn-danger:hover {
            background: #dc2626;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Product Details</h1>
        <div class="card">

            <div class="field">
                <div class="field-label">ID</div>
                <div class="field-value">{{ $product->id }}</div>
            </div>

            <div class="field">
                <div class="field-label">Name</div>
                <div class="field-value">{{ $product->name }}</div>
            </div>

            <div class="field">
                <div class="field-label">Quantity</div>
                <div class="field-value">{{ $product->qty }}</div>
            </div>

            <div class="field">
                <div class="field-label">Price</div>
                <div class="field-value">{{ $product->price }}</div>
            </div>

            <div class="field">
                <div class="field-label">Description</div>
                <div class="field-value">{{ $product->description ?? 'No description' }}</div>
            </div>

            <div class="btn-row">
                <a href="{{ route('product.edit', ['product' => $product]) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('product.index') }}" class="btn btn-secondary">Back to List</a>
                <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}" style="margin:0">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Delete this product?')">Delete</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
