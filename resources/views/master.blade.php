<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL('css/main.css') }}">
    <title>Gabow Computer Solutions</title>
</head>

<body>
    {{ View::make('header') }}
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="{{ URL('js/adminproducts.js') }}" ></script>

</body>
<style>
    img.slider-img {
        height: 400px !important
    }

    .trending-img {
        float: left;
        padding: 2%;

    }

    .trending-product {
        width: 250px;
        height: 200px;
    }

    .product-detail {
        width: 100%;
    }

    .detail-img {
        width: 100%;
        height: auto;
    }

    .search-box {
        width: 400px !important
    }

    .search-results {
        display: flex;
        flex-wrap: wrap;
    }

    .searched-item {
        margin: 2%;
    }

    .search-img {
        width: 100%;
        height: auto;
    }
    .cart-total{
        font-weight: 900;
        font-size: 20;
        color: red;
    }
    .cart-link{
        text-decoration: none;
        font-weight: 900;
        
    }
    .no-bullets{
        list-style-type: none;
    }
</style>
<script src=""></script>

</html>