/* global paypal */

$(document).ready(function () {

    paypal.Button.render({
        env: 'sandbox',
        
         style: {
            label: 'paypal',
            size:  'medium',    // small | medium | large | responsive
            shape: 'rect',     // pill | rect
            color: 'blue',     // gold | blue | silver | black
            tagline: false    
        },
        
        client: {
            sandbox: 'AQLDFwGh6Kf4-Abs4U8ss99gUE1BEj-5EWk3oO3n4ydIUlP0sgItnxYij1qNnN-Wjn4WxXQOyX_o3ejA',
        },
        commit: true,
        payment: function (data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: {total: '500', currency: 'KES'}
                        }
                    ]
                }
            });
        },

        // onAuthorize() is called when the buyer approves the payment
        onAuthorize: function (data, actions) {

            // Make a call to the REST api to execute the payment
            return actions.payment.execute().then(function (payment) {
                 
                var path = "https://localhost/estate/ZZ/PayPal/pay.php";
                $.ajax({
                    type: 'POST',
                    url: path,
                    data: {
                        tid: payment.id,
                        state: payment.state

                    },
                    success: function (response) {
                        
                   console.log(response);
                        
                        if (response == "success") {
                            $('#payment-success').html('<h2>Payment done, Thanks ! please wait .....</h2>');
                            setTimeout(function () {
                                //after succefull payment send user to specific page
                                window.location.href = "http://localhost/estate/ZZ/PayPal/dashboard.php";
                                
                            }, 2500);
                        }

                    }
                });

            });
        }

    }, '#btn-paypal');
});

