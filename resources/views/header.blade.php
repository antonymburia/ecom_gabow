<?php

use App\Http\Controllers\ProductController;

$total = 0;
if (session()->has('user')) {
    $total = ProductController::cartItem();
}

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ URL('images/logo.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ordernow">Checkout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/myorders">Orders</a>
                </li>


            </ul>

            <div class="dropdown d-flex">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    My account
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Account settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    @if(session()->has('user'))
                    <li><a class="dropdown-item" href="/logout">logout</a></li>
                    
                    @else
                        <li><a class="dropdown-item" href="/login">login</a></li>
                        
                    @endif

                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Gabow Computers</a>
            </div>
            <li class="nav-item no-bullets">
                <form action="/search">
                    <div class="row">
                        <div class="col">
                            <input class="form-control me-2 search-box" type="search" placeholder="Search" aria-label="Search" name="query">
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </li>

            <ul class="nav navbar-nav ">
                <li class="active "><a href="/cartList" class="cart-link">Cart&nbsp;<i class="fa  fa-shopping-basket" style="font-size:30px;color:black;"></i></i> </a><sup class="cart-total">({{$total}})</sup></li>
            </ul>
        </div>
    </nav>
</div>

<style>
    img {
        height: 50px;
    }
</style>