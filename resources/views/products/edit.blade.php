<!DOCTYPE html>
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

</html>
