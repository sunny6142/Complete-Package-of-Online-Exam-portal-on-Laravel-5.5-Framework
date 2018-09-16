<?php 
/*$product_name = "Test Series";
$price = 106;
$name = "Name";
$phone = 9169743022;
$email = "sunny6142@gmail.com";


include 'src/instamojo.php';

$api = new Instamojo\Instamojo('ff9a8d711de08e2b5e70a01d6145d620', '405b84eeb5e4a05910f2f5525348866f','https://instamojo.com/api/1.1/');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "http://allexamcorner.com/payment/thankyou.php",
        "webhook" => "http://allexamcorner.com/payment/webhook.php"
        ));
    //print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     */
  ?>

<?php



?>