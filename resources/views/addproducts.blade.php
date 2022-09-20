@extends('master')
@section('content')
<!-- Pills navs -->
<div class="container preference">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
                </li>
            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                    <form action="/addproducts" method="POST">
                        @csrf

                        <!-- Product name -->
                        <div class="form-outline mb-4">
                            <input type="text" name="title" class="form-control" />
                            <label class="form-label">Product Title</label>
                        </div>

                        <!-- category input -->
                        <div class="form-outline mb-4">
                            <input type="text" name="category" id="category" class="form-control" />
                            <label class="form-label" for="category">category</label>
                        </div>

                        <!-- price input -->
                        <div class="form-outline mb-4">
                            <input type="number" name="price" id="price" class="form-control" />
                            <label class="form-label" for="price">price</label>
                        </div>
                        

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Add Product</button>

                       
                    </form>
                </div>

            </div>
        </div>
        <div class="col-md-3"></div>
    </div>

</div>
<style>
    .preference {
        padding-top: 2%;
    }
</style>
<!-- Pills content -->
@endsection