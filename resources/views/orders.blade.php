@extends('master')
@section('content')

<div class="container">
    <h2>My Orders</h2>
    <table>
        <tr>
            <th>
                Product
            </th>
            <th>
                Item
            </th>
            <th>
                price
            </th>
            <th>
                Payment Status
            </th>
            <th>
                Adress
            </th>
            <th>
                Payment Method
            </th>
            


        </tr>
        @foreach ($orders as $item)
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
            <td>
                {{ $item->status }}
            </td>
            <td>
                {{ $item->town }}
            </td>
            <td>
                {{ $item->payment_method }}
            </td>
            
            
        </tr>
        
        @endforeach


        

        
    </table>


</div>
@endsection