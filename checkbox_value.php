<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['check_list'])) {

        $checked_count = count($_POST['check_list']);
        echo "Email has successfully send";

        foreach($_POST['check_list'] as $selected) {
//            echo "<p>".$selected ."</p>";
            $email=$_POST['email'];

            $to=$email;
            $subject='Pdf Files';
            $message= 'https://drive.google.com/file/d/'.$selected;
            $headers="From: ".$email;
            
            mail($to, $subject, $message, $headers);
                echo '<script language="javascript">';
                echo 'alert("Sent Successfully! Thank you")';
                echo '</script>';

        }

    }
    else{
        echo "<b>Please Select Atleast One Option.</b>";
    }
}
?>

<script>
setTimeout("location.href = 'https://magentasquares.com/e-catalog';",1000);
</script>


