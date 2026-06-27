<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <H1>Create File</H1>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        @method('post')
        <div>
            <label for="Name">Name:</label>
            <input type="text" name="name" placeholder="Name">

        </div>
        <br>

        <div>
            <label for="Qty">Qty:</label>
            <input type="text" name="qty" placeholder="Qty">
        </div>
        <br>
        <div>
            <label for="Price">Price:</label>
            <input type="text" name="price" placeholder="Price">
        </div>
        <br>
        <div>
            <label for="description">Description:</label>
            <input type="text" name="description" placeholder="Description">
        </div>
        <br>
        <input type="submit" value="save a new product">

    </form>
</body>

</html>
