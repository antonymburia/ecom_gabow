@extends('master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="container">
                <div class="dash-btn">
                    <div class="products">
                        <button type="button" class="btn-primary products-show">products</button>
                    </div>

                    <div class="orders">
                        <button type="button" class="btn-primary orders-show">Orders</button>
                    </div>
                    <div class="payments">
                        <button type="button" class="btn-primary payments-show "> payments</button>
                    </div>
                    <div class="fulfilled">
                        <button type="button" class="btn-primary users-show">users</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-9">
            <div class="container">
                <div class="dash-row">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="dash-button">
                                <button class="button btn-success addproducts" data-bs-toggle="modal" data-bs-target="#myModal">Add Products</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="dash-button">
                                <button class="button btn-success">Add Order</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="dash-button">
                                <button class="button btn-success">Add Users</button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- dashboard content -->
                <div class="main-content">

                    <div class="dash-items">
                        <!-- products code goes here -->
                        <div class="adminproducts">
                            hello
                        </div>

                        <!-- orders code goes here -->
                        <div class="adminorders">
                            orders
                        </div>

                        <!-- payments code goes here -->
                        <div class="adminpayments">
                            payments
                        </div>

                        <!-- users code goes here -->
                        <div class="adminusers">
                            users
                        </div>
                    </div>

                    <div class="right-pannel">
                        <!-- add product code goes here -->
                        <div class="add-products">
                            <form action="" method="POST">
                                <div class="mb-3 mt-3">
                                    <label for="productname" class="form-label">Productname:</label>
                                    <input type="text" class="form-control" id="productname" placeholder="Enter Productname" name="productname">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="price" class="form-label">price:</label>
                                    <input type="number" class="form-control" id="price" placeholder="Enter price" name="price">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="Description">Product Description:</label>
                                    <textarea class="form-control" rows="5" id="description" name="text"></textarea>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="category">Category:</label>
                                    <select class="form-select">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>


                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection