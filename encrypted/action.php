<?php

echo '  <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
            <title>Encrypt/Decrypt</title>
        </head>';

echo '  <body class="bg-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 bg-light p-4 mt-5 rounded">
                        <form action="action.php" method="POST">
                            <div class="form-group">';

if(isset($_POST['encrypt'])){

    $simple_string = $_POST['text'];

    $ciphering = "AES-128-CTR"; // it store the cipher method
    $option = 0; // it holds the bitwise disjunction of the flags
    $encrytion_iv = '1234567890123456'; //it hold the initialization vector witch is not null 
    $encrytion_key = "Davide-Scotti";
    $encrytion = openssl_encrypt($simple_string,$ciphering,$encrytion_key,$option,$encrytion_iv);

    echo ' <label for="message">Encrypted Data:</label>';
    echo ' <textarea name="text" class="form-control" id="msg" rows="3" placeholder="Enter Message" readonly>'.  $encrytion . '</textarea></div>';
    echo ' <button type="submit" name="goback" class="btn btn-primary">Go Back</button>
           <button type="submit" name="decrypt" class="btn btn-primary">Decrypt</button>
           <button type="submit" name="intercept" class="btn btn-primary">Intercept</button>';
}

if(isset($_POST['decrypt'])){

    $text = $_POST['text'];
    $ciphering = "AES-128-CTR"; // it store the cipher method
    $option = 0; // it holds the bitwise disjunction of the flags
    $decrytion_iv = '1234567890123456'; //it hold the initialization vector witch is not null
    $decrytion_key = "Davide-Scotti";

    $decrytion = openssl_decrypt($text,$ciphering,$decrytion_key,$option,$decrytion_iv);

    echo ' <label for="message">Decrypted Data:</label>';
    echo ' <textarea name="text" class="form-control" id="msg" rows="3" placeholder="Enter Message" readonly>' .  $decrytion . '</textarea></div>';
    echo ' <button type="submit" name="goback" class="btn btn-primary">Go Back</button>
           <button type="submit" name="decrypt" class="btn btn-primary">Decrypt</button>
           <button type="submit" name="intercept" class="btn btn-primary">Intercept</button>';

}

if(isset($_POST['intercept'])){

    $text = $_POST['text'];

    echo ' <label for="message">Intercepted Data:</label>';
    echo ' <textarea name="text" class="form-control" id="msg" rows="3" placeholder="Enter Message" readonly>' .  $text . '</textarea></div>';
    echo ' <button type="submit" name="goback" class="btn btn-primary">Go Back</button>
           <button type="submit" name="decrypt" class="btn btn-primary">Decrypt</button>
           <button type="submit" name="intercept" class="btn btn-primary">Intercept</button>';
}

if(isset($_POST['goback'])){
    header("Location: http://localhost/Realtime-chat-App/encrypted/");
}

echo '                  </form>
                    </div>
                </div>
            </div>
        </body>';










/*function generateRandomString($length = 16) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}*/
?>









