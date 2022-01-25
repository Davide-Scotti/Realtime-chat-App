<?php

echo ' <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">';

if(isset($_POST['encrypt'])){

    $simple_string = $_POST['text'];
    echo "Original Data : " .  $simple_string . "<br>";

    $ciphering = "AES-128-CTR"; // it store the cipher method
    $option = 0; // it holds the bitwise disjunction of the flags
    $encrytion_iv = '1234567890123456'; //it hold the initialization vector witch is not null
    $encrytion_key = "Scotti-Davide";
    $encrytion = openssl_encrypt($simple_string,$ciphering,$encrytion_key,$option,$encrytion_iv);

    echo "Encrypted Data : " .  $encrytion . "<br>";
}

if(isset($_POST['decrypt'])){

    $text = $_POST['text'];
    $ciphering = "AES-128-CTR"; // it store the cipher method
    $option = 0; // it holds the bitwise disjunction of the flags
    $decrytion_iv = '1234567890123456'; //it hold the initialization vector witch is not null
    $decrytion_key = "Scotti-Davide";
    

    $decrytion = openssl_decrypt($text,$ciphering,$decrytion_key,$option,$decrytion_iv);

    echo '<label for="message">Message:</label>';
    echo ' <textarea name="text" class="form-control" id="msg" rows="3" placeholder="Enter Message">' . "Decrypted Data : " .  $decrytion . '</textarea>';
}

if(isset($_POST['intercept'])){

    $text = $_POST['text'];
    $ciphering = "AES-128-CTR"; // it store the cipher method
    $option = 0; // it holds the bitwise disjunction of the flags
    $decrytion_iv = '1234567890123456'; //it hold the initialization vector witch is not null
    $decrytion_key = "hello";
    

    $decrytion = openssl_decrypt($text,$ciphering,$decrytion_key,$option,$decrytion_iv);

    echo "Intercepted Data : " .  $decrytion . "<br>";
}

?>