<?php
      function encrypt($string) {

        $ciphering = "AES-128-CTR"; // it store the cipher method
        $option = 0; // it holds the bitwise disjunction of the flags
        $encrytion_iv = '1234567890123456'; //it hold the initialization vector witch is not null
        $encrytion_key = "Scotti-Davide";
        $encrytion = openssl_encrypt($string,$ciphering,$encrytion_key,$option,$encrytion_iv);
        
        return $encrytion;
    }

    function decrypt($string){

        $ciphering = "AES-128-CTR"; // it store the cipher method
        $option = 0; // it holds the bitwise disjunction of the flags
        $decrytion_iv = '1234567890123456'; //it hold the initialization vector witch is not null
        $decrytion_key = "Scotti-Davide";
        $decrytion = openssl_decrypt($string,$ciphering,$decrytion_key,$option,$decrytion_iv);

        return $decrytion;
    }

    function encryptchat($string, $incoming_id, $outgoing_id) {

        if($outgoing_id > $incoming_id){
            $temp = $incoming_id;
            $incoming_id = $outgoing_id;
            $outgoing_id = $temp;
        }

        $ciphering = "AES-128-CTR"; // it store the cipher method
        $option = 0; // it holds the bitwise disjunction of the flags
        $encrytion_iv = '1234567890123456'; //it hold the initialization vector witch is not null
        $encrytion_key = strval($incoming_id) . strval($outgoing_id) ;
        $encrytion = openssl_encrypt($string,$ciphering,$encrytion_key,$option,$encrytion_iv);
        
        return $encrytion;
    }

    function decryptchat($string,  $incoming_id, $outgoing_id){

        if($outgoing_id > $incoming_id){
            $temp = $incoming_id;
            $incoming_id = $outgoing_id;
            $outgoing_id = $temp;
        }

        $ciphering = "AES-128-CTR"; // it store the cipher method
        $option = 0; // it holds the bitwise disjunction of the flags
        $decrytion_iv = '1234567890123456'; //it hold the initialization vector witch is not null
        $encrytion_key = strval($incoming_id) . strval($outgoing_id) ;
        $decrytion = openssl_decrypt($string,$ciphering,$decrytion_key,$option,$decrytion_iv);

        return $decrytion;
    }
?>