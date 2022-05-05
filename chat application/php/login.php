<?php
    session_start();
    include_once "config.php";
    include_once "function.php";

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($email) && !empty($password)){
        //check if exist an user with that email and password

        $psw = encrypt($password);

        $sql = "SELECT * FROM users WHERE email = ? AND password = ?"; // SQL with parameters
        $stmt = $conn->prepare($sql); 
        $stmt->bind_param("ss", $email, $psw);
        $stmt->execute();
        $sql = $stmt->get_result(); // get the mysqli result

        if(mysqli_num_rows($sql) > 0){ //if user credential metch
            $row = mysqli_fetch_assoc($sql);
            $status = "Active now";
            $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = '{$row['unique_id']}'");
            if($sql2){
                $_SESSION['unique_id'] = $row['unique_id'] ; //using this session we used user unique_id in other php file
                echo "success";
            }else{
                echo "Error on setting session id";
            }
        }else{
            echo "Email or Password is incorrect!";
        }
    }else{
        echo "All input fields are required!";
    }
?>
