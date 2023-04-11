<?php 

$name = $_REQUEST['userName'];
$email = $_REQUEST['userEmail'];
$subject = $_REQUEST['subject'];
$content = $_REQUEST['content'];
if(empty($name)|| empty($email) || empty($subject) || empty($content)) {

                            echo "please fill all fields";
                        
                            
                        
                        }
else
{
    mail("saminaparveen31@gmail.com","User messege" , $content,"From: $name<$email>");
    echo "<script type='text/javascript'>alert('your messege sent succussfully');
    window.history.log(-1);
    </script>";
}                        
?>