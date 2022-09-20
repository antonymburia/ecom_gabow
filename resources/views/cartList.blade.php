@extends('master')
@section('content')

<div class="container">
    <table>
        <tr>
            <th>
                cart Item
            </th>
            <th>
                Item
            </th>
            <th>
                price
            </th>


        </tr>
        @foreach ($products as $item)
        <tr>
            <td>
                <img class="trending-product" src="{{ $item->gallery }}" style="width: 80px; height:auto;">
            </td>
            <td>
                <b>{{ $item->name }}</b>

            </td>
            <td>
                {{ $item->price }}
            </td>
            
        </tr>
        <tr>
            <td>
            
            </td>
        </tr>
        
        @endforeach
        <a href="/ordernow">
            <button>Order Now</button>
        </a>


        

        
    </table>


</div>
@endsection