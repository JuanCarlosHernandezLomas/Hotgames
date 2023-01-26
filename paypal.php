<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://www.paypal.com/sdk/js?client-id=AVMtrigobAvvN6P04AontHw7jBN7NItpdH30pW9JsWdmZXEvV8MmaJzrsIVZyTjG6K9gBqt9BRPR0qUk
    "></script>
</head>
<body>
    <div id="paypal-button-conteiner"></div>
    <script>
        paypal.Buttons(
        {
            style: {
            color:  'blue',
            shape:  'pill',
            label:  'pay'
        },
        createOrder: function(data,actions){
            return actions.order.create({
                purchase_units:[{
                    amount:{
                        value:<?php echo $totalprice ?>
                    }
                }]
            });
        },
        onApprove: function(data, actions){
          actions.order.capture().then(function(detalles){
            console.log(detalles);
            window.location.href="order-history.php"
          });
        }
    }).render('#paypal-button-conteiner');
    </script>
</body>
</html>