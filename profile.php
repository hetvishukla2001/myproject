


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

<head><title>profile page</title>
<script language="JavaScript">
  javascript:window.history.forward();
  
</script>


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
$number=$_SESSION['number'];
    $pin=$_SESSION['pin'];
    
    
 

    if(isset($_POST['sub']))
    {
        header('Location: view_list.php');

    }
    else if(array_key_exists('sub1', $_POST)) { 
            
            header('Location: tranfer.php'); 
        } 
    else if(array_key_exists('sub2', $_POST)) { 
        session_destroy();

            
            header('Location: index.php'); 
        } 
    
    $q="select * from user_list where pin=".$pin." AND account=".$number;
    $result = mysqli_query($_SESSION['connection'], $q);
    $row=mysqli_fetch_array($result,true);
    
    
    
    
  
    
    
    

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

<div class="container  text-center ">
 <div class="row text-center h-100 bg-white">
    <div class="col-md-3  mx-auto my-auto">
    <h1>Profile detail</h1>
	
     USER NAME:  <?php echo $row["userid"];?><br>
     USER account NO : <?php echo $row["account"]; ?><br><br>

     USER City : <?php echo $row["city"]; ?><br><br>
     user current money :<?php echo $row["current_money"]; ?><br>
     user last transition:<?php echo $row["last_tranfer"]; ?><br>
    <form class="form-signin p-5  text-white" action="" method="post">


<div style="display:flex;justify-content: space-around;">
        <button class="btn btn-lg btn-primary " type="submit" name="sub">view_list</button>&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-lg btn-primary " type="submit" name="sub1">tranfer money</button>&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-lg btn-primary " type="submit" name="sub2">back to login</button>
</div>
 
    </form>
        
	</div>
    </div>
</div>


</body>

<html>
