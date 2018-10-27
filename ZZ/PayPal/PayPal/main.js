/* global paypal */

$(document).ready(function () {

    paypal.Button.render({
        env: 'production',
        
         style: {
            label: 'paypal',
            size:  'medium',    // small | medium | large | responsive
            shape: 'rect',     // pill | rect
            color: 'blue',     // gold | blue | silver | black
            tagline: false    
        },
        
        client: {
            sandbox: 'AR_5tDkPibYK77if9NOHQzhKSxWRq6vhgA2HXkusoohl2ZBmK3MUYKfljnh4fz96jlie8kJsidK5mQjH',
            production: 'AR3WfY9Joqw8XesVCBsJG7-10ADvplZTOOrRVp0zN3YioryvT0DshY8I2NNdwwY8tZZC-NbKC2g9_JyE'
        },
        commit: true,
        payment: function (data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: {total: '10.21', currency: 'USD'}
                        }
                    ]
                }
            });
        },

        // onAuthorize() is called when the buyer approves the payment
        onAuthorize: function (data, actions) {

            // Make a call to the REST api to execute the payment
            return actions.payment.execute().then(function (payment) {
                 
                var path = "http://localhost/PayPal/pay.php";
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
                                window.location.href = "http://localhost/PayPal/dashboard.php";
                                
                            }, 2500);
                        }

                    }
                });

            });
        }

    }, '#btn-paypal');
});

