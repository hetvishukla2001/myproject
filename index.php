

<?php

    session_start();
    

$server='sql108.epizy.com';
$username='epiz_27703731';

$db_base_name='epiz_27703731_Mytable';
    $con=mysqli_connect("$server", "$username", "$password");
	$_SESSION['connection']=$con;
    
	if(!$con){
		echo" connection unsuccessful";
	}

mysqli_select_db($_SESSION['connection'],'epiz_27703731_Mytable');

?>


<!DOCTYPE html>


<head><title>login page</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<?php




    

if(isset($_POST['sub']))
    {
    $name=$_POST['user'];
    $number=$_POST['number'];
    $pin=$_POST['pin'];
    
  
    
    $q="select * from user_list where userid='$name' AND pin=$pin AND account=$number";
    $result = mysqli_query($_SESSION['connection'], $q);
    
    $nums=mysqli_num_rows($result);
    if($nums!=NULL){
        $_SESSION['number']=$number;
       
        $_SESSION['pin']=$pin;
        

       header('Location: profile.php');
    }
    else{
        
           echo '<script>$(function(){

  $("#check1").css("color", "red");

});</script>';
    }
    
    
}
?>

<style>
body{
    background-image: url("https://www.bcsconsulting.com/wp-content/uploads/2018/12/bank-system-tile.png");
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.container{
    padding-top:10rem;
}

</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

  <div class="text-center bg-dark" >
    <a class="text-white text-center" href="#" align="center" style="font-size:2rem;">Bank System</a>
    </div>
   
  

<div class="container  text-center ">
 <div class="row text-center h-100 bg-white">
    <div class="col-md-3  mx-auto my-auto">
    
    <h2 class="text-dark" style="padding-top:2rem;">Login</h2>
	
       
    <form class="form-signin p-5  text-white" action="" method="post">
  <p id="check1"  > not valid data please enter valid data</p>
  
  
     <div class="text-dark">Enter your user-name<input type="text" id="inputEmail" name="user"  placeholder="user name" ></div><br>
  
  <div class="text-dark"> Enter your account-no<input type="text" id="inputPassword" name="number"  placeholder="account number"></div><br>
  <div class="text-dark"> Enter your pin_number<input type="password" id="inputpin" name="pin"  placeholder="enter pin "></div><br>
  
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="sub">Sign in</button>
 
</form>
        
	</div>
    </div>
</div>


</body>

<html>
