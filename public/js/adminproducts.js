$(document).ready(function () {
    $(".adminproducts").hide();
    $(".products-show").click(function () {
        $(".adminpayments").hide();
        $(".adminusers").hide();
        $(".adminorders").hide();
        $(".adminproducts").show();

    });
});

// orders code
$(document).ready(function () {
    $(".adminorders").hide();
    $(".orders-show").click(function () {
        $(".adminpayments").hide();
        $(".adminusers").hide();
        $(".adminproducts").hide();
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
        $(".adminusers").show();

    });
});
