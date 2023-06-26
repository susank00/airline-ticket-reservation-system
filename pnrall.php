<?php
session_start();

$con=mysqli_connect("localhost","root","","airline_reservation");
if(!isset($con))
{
    die("Database Not Found");
}


if(isset($_REQUEST["u_sub"]))
{
    
 $id=$_POST['pnr'];

 if($id!='')
 {
   $query=mysqli_query($con ,"select * from passengers where pnr='".$id."'");
   $res=mysqli_fetch_row($query);
   $query0=mysqli_query($con ,"select * from ticket_details where pnr='".$id."'");
   $res0=mysqli_fetch_row($query0);
   $query1=mysqli_query($con ,"select * from payment_details where pnr='".$id."'");
   $res1=mysqli_fetch_row($query1);

   if($res)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheck.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Invalid username or password")';
    echo '</script>';
   }
if($res0)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheck.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Invalid username or password")';
    echo '</script>';
   }


   
   if($res1)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheck.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Invalid username or password")';
    echo '</script>';
   }
  }
 else
 {
     echo '<script>';
    echo 'alert("Enter both username and password")';
    echo '</script>';
 
 }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>PNR Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form-box {
      background-color: orange;
      border-radius: 10px;
      padding: 20px;
      max-width: 400px;
      margin: 0 auto;
      opacity:1;
    }
  </style>
</head>
<body style="background-image:url('./images/inbg.jpg');">
  <div class="container">
    <div class="form-box">
      <form id="index" action="pnr.php" method="post">
        <div class="form-group">
          <center>
            <br><br><br>
            <img src="./images/tick.jpeg" width="180px" height="150px">
            <br><br>
            <input type="text" id="u_id" name="pnr" class="form-control" placeholder="Enter Your PNR Number" required>
            <br>
            <input type="submit" id="u_sub" name="u_sub" value="Print" class="btn btn-primary" style="width: 100px;">
            <button type="button" onclick="location.href = './home_page.php';" class="btn btn-primary">Back to Home</button>
          </center>
        </div>
      </form>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
