<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> PayPal Checkout Integration | Button Styles </title> 
</head>

<body>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?
    client-id=AasI_p7s7H9qgc4jSNegsanVEBOTLATxQk17LjJESHd-9iTjCXKZBRZbMNl5t2Lcoteiwd0cCUOWK5PT
    currency=COP"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            style: {
                color:  'blue',
                shape:  'pill',
                label:  'pay',
                height: 40
            },
            
            // Call your server to set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: 100000
                        }
                    }]
                });
            },

            onApprove:function(data, actions){
                actions.order.capture().then(function(detalles){
                    console.log(detalles);
                });
            },
            // Call your server to finalize the transaction
            oncancel: function(data, actions) {
                alert("Pago cancelado");
                console.log(data);
            }

        }).render('#paypal-button-container');
    </script>
</body>

</html>
    