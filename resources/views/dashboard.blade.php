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
                                <button class="button btn-success">Add Products</button>
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
            </div>
        </div>
    </div>
</div>


@endsection