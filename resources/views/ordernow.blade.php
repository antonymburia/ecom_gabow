@extends('master')
@section('content')

<div class="container">
    Total Ammount

    {{ $total }}
</div>

<div class="container">

    <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Checkout</h4>
        <form class="needs-validation" action="/checkout" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" name="firstName" class="form-control" id="firstName" placeholder="" value="">

                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text"name="lastName" class="form-control" id="lastName" placeholder="" value="">

                </div>

                <div class="col-12">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <div class="input-group has-validation">
                        <input type="text" name="phone_number"class="form-control" id="phone Number" placeholder="Phone Number">

                    </div>
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">email</label>
                    <div class="input-group has-validation">
                        <input type="text" name="email" class="form-control" id="email" placeholder="email">

                    </div>
                </div>









                <div class="col-md-4">
                    <label for="region" class="form-label">Region</label>
                    <select class="form-select" name="region" id="region">
                        <option value="">Choose...</option>
                        <option>Dar es salaam</option>
                    </select>

                </div>
                <div class="col-md-4">
                    <label for="city" class="form-label">City</label>
                    <select class="form-select"name="city" id="city">
                        <option value="">Choose...</option>
                        <option>Dodoma</option>
                    </select>

                </div>

                <div class="col-md-4">
                    <label for="town" class="form-label">Town</label>
                    <select class="form-select" name="town" id="town">
                        <option value="">Choose...</option>
                        <option>Ilala</option>
                    </select>

                </div>
            </div>


            <h4 class="mb-3">Payment</h4>

            <div class="my-3">
                <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" value="creditcard">
                    <label class="form-check-label" for="credit">Credit card</label>
                </div>
                <div class="form-check">
                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" value="debitcard">
                    <label class="form-check-label" for="debit">Debit card</label>
                </div>
                <div class="form-check">
                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" value="paypal">
                    <label class="form-check-label" for="paypal">PayPal</label>
                </div>
            </div>



            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
    </div>
</div>
@endsection