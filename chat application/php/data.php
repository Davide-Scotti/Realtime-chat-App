<?php
    while($row = mysqli_fetch_assoc($sql)){
        if($row['unique_id'] != $_SESSION['unique_id']){
            $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                            <div class="content">
                                <img src="php/images/' . $row['img'] . '" alt="">
                                <div class="details">
                                    <span>'. $row['fname'] . " " . $row['lname'] .'</span>
                                    <p>Click to start a chat</p>
                                </div>
                            </div>
                            <div class="status-dot"><i class="fas fa-circle"></i></div>
                        </a>';
        }
    }
?>