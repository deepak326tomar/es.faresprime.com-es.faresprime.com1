<?php 
//include("flight/includes/multi_server_config.php");
$var_email="";
if(isset($_POST['submitd'])){
 $name = htmlentities(trim($_POST['name']));
 $email = htmlentities(trim($_POST['email']));
 $phone = htmlentities(trim($_POST['phone']));
 $message = htmlentities(trim(nl2br($_POST['message'])));
 $site_name= "faresprime.com";
 $add_date = date("Y-m-d H:s:i");
 $sql = "INSERT INTO tb_content_details(name,email,phone,message,site_name,add_date) VALUES ('$name','$email','$phone','$message','$site_name','$add_date')";
 $fire=mysqli_query($conn2,$sql)or die("something wrong..");
//$admin_msg = "Mr ".$_POST['contact_person']."\n Email: ".$email_id."\n Mobile: ".$phone_no."\n Message:".$massage;
$user_msg = "
Name: ".$name." 

Email: ".$email."

phone: ".$phone."

Message:".$message."
";

$to = $email;
$to2="support@faresprime.com ";
$from="support@faresprime.com ";
//$too_admin="softwarexprtsdelhi@gmail.com";
$subject="New Inquiry by faresprime.com";
$header  = "From:".$from." \r\n";
//mail($too_admin,$subject,$admin_msg,$header);
mail($to,$subject,$user_msg,$header);
mail($to2,$subject,$user_msg,$header);

$var_email="<p class='text-danger' style='color: #8BC34A;font-size: 14px;text-transform: capitalize;font-weight: 400;text-align: center;'>Thank you for your query , we will get back to you shortly.</p>";
}
//print_r($data['subject']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title> Contacta con nosotras - Faresprime.com</title>
<meta name="Description" content="Call us at +1-855-503-0424 for great flight deals. We have lots of unpublished flight deals.  ">
<meta name="Keywords" content="flight booking, flight tickets, airline tickets">

  
  
  
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script> -->
</head>
<body>

<?php include('header.php'); ?>

<div class="pagebanner">
  <h1>Contacta con nosotras</h1>
  <img src="images/aboutbanner.jpg" class="img-responsive">
</div>
  
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          
        <div class="page_ctnt">
        <?php echo $var_email;?>
          <div class="txt_hding"> Contacta con <span> nosotras </span>
          <p> PÓNGASE EN CONTACTO CON NOSOTROS ! </p> 
        </div>
          <form class="contact_enq" method="post" action="">
            <input type="text" placeholder="Introduzca su nombre" name="name" required="">
            <input type="email" placeholder="Ingrese correo electrónico" name="email" required="">
            <input type="text" placeholder="Ingresa número telefónico" name="phone" id="txtChar" onkeypress="return isNumberKey(event)" oninput="if(value.length>10)value=value.slice(0,10)" required="">
            <textarea name="message" required="" placeholder="Escribe aquí"></textarea>
            <button name="submitd" type="submit">Enviar</button>
          </form>
          
        </div>
      </div>
    </div>
  </div>
</section>

<div class="map">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.1677976619667!2d-106.95709208446478!3d44.79776887909876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5335fbeebfdba2bb%3A0x433452124d08131e!2s30%20N%20Gould%20St%20ste%20r%2C%20Sheridan%2C%20WY%2082801%2C%20USA!5e0!3m2!1sen!2sin!4v1664455582321!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php include('footer.php'); ?>

<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
</body>
</html>
