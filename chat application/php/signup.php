<?php
    session_start();
    include_once "config.php";
    include_once "function.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        //check if user email is valid
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){  //if is valid
            //chech if email the email doesn't alredy exist in DB
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){  //if email alredy exist
                echo "$email - This email alredy exist!";
            }else{
                //check user uploaded file
                if(isset($_FILES['image'])){ //if file is uploaded
                    $img_name = $_FILES['image']['name']; //getting user uploaded img name
                    $img_type = $_FILES['image']['type']; //getting user upload img type
                    $tmp_name = $_FILES['image']['tmp_name']; //temporary name used to sqave file in our folder
                    
                    //exploding image and getting extension
                    $img_explode = explode('.',  $img_name);
                    $img_ext = end($img_explode); //getting extension of file

                    $extensions = ['png', 'jpeg', 'jpg']; //valid ectension file
                    if(in_array($img_ext, $extensions) === true){ //if there's a correct extension
                        $time = time(); //this will return us curent time
                                        //we need it because when user image were uploaded we rename it with current time
                                        //so all image file will have unique name
                        //move image to our folder
                        $new_img_name = $time .  $img_name;

                        if(move_uploaded_file($tmp_name, "images/" . $new_img_name)){ //if user uploaded image moved successfully
                            $status = "Active now"; //once user signed up his status will be active now
                            $random_id = rand(time(), 10000000); //creating random id for user

                            $psw = encrypt($password);  echo $psw;
                        
                            //insert all user data inside the db
                            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                                VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");

                            if($sql2){ //if this data inseted
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($sql3) > 0 ){
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id'] ; //using this session we used user unique_id in other php file
                                    echo "success";
                                }
                            }else{
                                echo "Error to insert on DB!";
                            }
                        }
                        
                    }else{
                        echo "Please select an Image file - jpeg, jpg, png!";
                    }

                }else{
                    echo "Please select an Image file!";
                }
            }
        }else{
            echo "$email - This is not a valid email!";
        }
    }else{
        echo "All input are required!";
    }

?>