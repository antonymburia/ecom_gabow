@extends('master')
@section('content')

<div class="container">
    Total Ammount

    {{ $total }}
</div>

<div class="container">
    
    <div class="col-md-7 col-lg-8">
    <form class="card p-2">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
        </div>
    </form>
        <h4 class="mb-3">Checkout</h4>
        <form class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

                <div class="col-12">
                    <label for="username" class="form-label">Phone Number</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="phone Number" placeholder="Phone Number" required>
                        <div class="invalid-feedback">
                            Your phone number is required.
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                

                

                <div class="col-md-5">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" id="country" required>
                        <option value="">Choose...</option>
                        <option>Tanzania</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="region" class="form-label">Region</label>
                    <select class="form-select" id="region" required>
                        <option value="">Choose...</option>
                        <option>Dar es salaam</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid region.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="town" class="form-label">Town</label>
                    <select class="form-select" id="town" required>
                        <option value="">Choose...</option>
                        <option>Ilala</option>
                    </select>
                    <div class="invalid-feedback">
                        town name required.
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Save this information for next time</label>
            </div>

            <hr class="my-4">

            <h4 class="mb-3">Payment</h4>

            <div class="my-3">
                <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                    <label class="form-check-label" for="credit">Credit card</label>
                </div>
                <div class="form-check">
                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="debit">Debit card</label>
                </div>
                <div class="form-check">
                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="paypal">PayPal</label>
                </div>
            </div>

            <div class="row gy-3">
                <div class="col-md-6">
                    <label for="cc-name" class="form-label">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                        Name on card is required
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="cc-number" class="form-label">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    <div class="invalid-feedback">
                        Credit card number is required
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="cc-expiration" class="form-label">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback">
                        Expiration date required
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="cc-cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
    </div>
</div>
    @endsection