@extends('master')
@section('content')
<div class="container">
    <div class="" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
        <form action="/createuser" method="POST">
            @csrf
    
            <!-- Name input -->
            <div class="form-outline mb-4">
                <input type="text" name="name"  class="form-control" />
                <label class="form-label" for="registerFirstName"> Name</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name="email" class="form-control" />
                <label class="form-label" for="registerEmail">Email</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" class="form-control" />
                <label class="form-label" for="registerPassword">Password</label>
            </div>

            <!-- Repeat Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="registerRepeatPassword" class="form-control" />
                <label class="form-label" for="registerRepeatPassword">Repeat password</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">•••••••••
                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
                <label class="form-check-label" for="registerCheck">
                    I have read and agree to the terms
                </label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
        </form>
    </div>
</div>
</div>
@endsection