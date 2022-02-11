<?php
    if(isset($_POST['email'])){
        $to = $_POST['email'];
        $subject = "Mail subscription";
        $from= 'prudentjag@gmail.com';
        $message= 'Thnks for subscribing to choicemi we will keep you updated';
        $headers = "From: Choicemi";

        //sending the mail
        if(mail($to, $subject, $message)){
            print_r(json_encode(['error'=> 1, 'msg' => 'Your mail has been successfully recieved']));
        }else{
            print_r(json_encode(['error'=> 0, 'msg' => 'Error sending mail, try again']));
        }
    }
?>