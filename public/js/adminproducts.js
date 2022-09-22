$(document).ready(function () {
    $(".adminproducts").hide();
    $(".products-show").click(function () {
        $(".adminpayments").hide();
        $(".adminusers").hide();
        $(".adminorders").hide();
        $(".add-user").hide();
        $(".adminproducts").show();
        $(".add-products").hide();


    });
});

// orders code
$(document).ready(function () {
    $(".adminorders").hide();
    $(".orders-show").click(function () {
        $(".adminpayments").hide();
        $(".adminusers").hide();
        $(".adminproducts").hide();
        $(".add-products").hide();
        $(".add-user").hide();
        $(".adminorders").show();


    });
});

// Payments
$(document).ready(function () {
    $(".adminpayments").hide();
    $(".payments-show").click(function () {
        $(".adminusers").hide();
        $(".adminorders").hide();
        $(".adminproducts").hide();
        $(".add-products").hide();
        $(".add-user").hide();
        $(".adminpayments").show();

    });
});

// Users
$(document).ready(function () {
    $(".adminusers").hide();
    $(".users-show").click(function () {
        $(".adminpayments").hide();
        $(".adminorders").hide();
        $(".adminproducts").hide();
        $(".adminpayments").hide();
        $(".add-products").hide();
        $(".add-user").hide();
        $(".adminusers").show();

    });
});

// add products view
$(document).ready(function () {
    $(".add-products").hide();
    $(".addproducts").click(function () {
        $(".add-user").hide();
        $(".add-products").show();

    });
});

// add products view
$(document).ready(function () {
    $(".add-user").hide();
    $(".adduser").click(function () {
        $(".add-products").hide();
        $(".add-user").show();
    });
});

