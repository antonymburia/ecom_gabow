@extends('master')
@section('content')
<div class="container">
    <div class="row">

        <div class="search-results">
            @foreach ($products as $item)
            <div class="col-md-3">
                <div class="searched-item">
                    <div class="card">
                        <div class="card-header">
                            <h5>{{ $item['name'] }}</h5>
                        </div>
                        <div class="card-body">
                            <img class="search-img" src="{{ $item['gallery'] }}">
                        </div>
                        <div class="card-footer">
                            <div class="">
                                <h5>{{ $item['price'] }}</h5>
                                <p>{{ $item['category'] }}</p>
                                <p>{{ $item['description'] }}</p>
                                <a href="detail/{{$item['id']}}">
                                    <button>View Product</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection