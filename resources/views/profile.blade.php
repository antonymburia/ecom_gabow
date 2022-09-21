@extends('master')
@section('content')
<?php
$user = session()->get('user');
?>
<div class="container">
    Username: {{ $user['name'] }} <br>
    Email: {{ $user['email'] }}

</div>

@endsection