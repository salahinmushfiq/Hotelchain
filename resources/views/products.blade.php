<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>
        Products

    </title>
</head>
<body>

<div class="container my-5 mx-5">
    <h1>Products</h1>

    <form action="/hotelSubmit" method="POST">
        @csrf
        <div class="form-row ">
            <div class="form-group col-md-6">
                <label for="Hotel Name">Hotel Name</label>
                <input type="text" class="form-control" placeholder="Hotel Name" name="name">
            </div>
            <div class="form-group col-md-6">
                <label for="Id">Id</label>
                <input type="text" class="form-control"  placeholder="Id" name="id">
            </div>
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <input type="text" class="form-control"  placeholder="Description" name="description">
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Address">
        </div>
        <div class="form-group">
            <label for="inputPrice">Price</label>
            <input type="number" class="form-control" name="price" placeholder="Price" >
        </div>
        <div class="form-group">
            <label for="inputRating">Rating</label>
            <input type="number" class="form-control" name="rating" placeholder="Rating">
        </div>
        <div class="form-group">
            <label for="inputStock">Stock</label>
            <input type="number" class="form-control" name="stock" placeholder="Stock">
        </div>

        <button type="submit" class="btn btn-success mt-5">Submit</button>
    </form>

</div>

</body>
</html>
