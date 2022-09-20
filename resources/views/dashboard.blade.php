@extends('master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="container">
                <div class="dash-btn">
                    <div class="products">
                        <button type="button" class="btn-primary">products</button>
                    </div>
                    
                    <div class="orders">
                        <button type="button" class="btn-primary">Orders</button>
                    </div>
                    <div class="payments">
                        <button type="button" class="btn-primary">payments</button>
                    </div>
                    <div class="fulfilled">
                        <button type="button" class="btn-primary">fulfilled Orders</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-9">
            <div class="container">
                <div class="dash-row">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                .
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                .
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection