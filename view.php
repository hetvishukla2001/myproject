<?php 



    session_start();
    $server='sql108.epizy.com';
$username='epiz_27703731';

$db_base_name='epiz_27703731_Mytable';
    $con=mysqli_connect("$server", "$username", "$password");
	$_SESSION['connection']=$con;
    


?>
<!DOCTYPE html>

<head><title>view page</title>
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

mysqli_select_db($_SESSION['connection'],'epiz_27703731_Mytable');

    
    if(array_key_exists('1', $_POST)) { 
            $_SESSION['new']='1';
            header('Location: profile1.php'); 
        } 
        else if(array_key_exists('2', $_POST)) { 
            $_SESSION['new']='2';
            header('Location: profile1.php');
        } 
        else if(array_key_exists('3', $_POST)) { 
            $_SESSION['new']=3;
            header('Location: profile1.php');
        } 
        else if(array_key_exists('4', $_POST)) { 
            $_SESSION['new']=4;
            header('Location: profile1.php');
        } 
        else if(array_key_exists('5', $_POST)) { 
            $_SESSION['new']=5;
            header('Location: profile1.php');
        } 
        else if(array_key_exists('6', $_POST)) { 
            $_SESSION['new']=6;
            header('Location: profile1.php');
        } 
        else if(array_key_exists('7', $_POST)) { 
            $_SESSION['new']=7;
            header('Location: profile1.php');
        } 
        else if(array_key_exists('8', $_POST)) { 
            $_SESSION['new']=8;
            header('Location: profile1.php');
        } 
        else if(array_key_exists('9', $_POST)) { 
            $_SESSION['new']=9;
            header('Location: profile1.php');
        } 
        else if(array_key_exists('10', $_POST)) { 
            $_SESSION['new']=10;
            header('Location: profile1.php');
        } 
        else if(array_key_exists('11', $_POST)) { 
            $_SESSION['new']=11;
            header('Location: profile1.php');
        } 
        else if(array_key_exists('12', $_POST)) { 
            $_SESSION['new']=12;
            header('Location: profile1.php');
        } 
        else if(array_key_exists('13', $_POST)) { 
            $_SESSION['new']=13;
            header('Location: profile1.php');
        } 
        else if(array_key_exists('14', $_POST)) { 
            $_SESSION['new']=14;
            header('Location: profile1.php');
        } 
        else if(array_key_exists('15', $_POST)) { 
            $_SESSION['new']=15;
            header('Location: profile1.php');
        } 
        else if(array_key_exists('sub', $_POST)) { 
            
            header('Location: tranfer.php');
        } 
        else if(array_key_exists('sub1', $_POST)) { 
            
            header('Location: profile.php');
        } 
        else if(array_key_exists('sub2', $_POST)) { 
        session_destroy();

            
            header('Location: index.php'); 
        } 
        

    
    
    $q="select * from user_list ";
    $result = mysqli_query($_SESSION['connection'], $q);
    $nums=mysqli_num_rows($result);
    
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
#table-wrapper {
  position:relative;
}
#table-scroll {
  height:300px;
  overflow-x: hidden;
  
  overflow-y:auto;  
  margin-top:20px;
}

#table-wrapper table * {
  background:white;
  color:black;
}
#table-wrapper table thead th .text {
   
  top:-20px;
  z-index:2;
  height:400px;
  width:100%;
 
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
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
 
    <div class="col-md-8  mx-auto my-auto">
    <h1 class="text-dark">list of user</h1>
    <form name="f2" action="" method="post">
    <div id="table-wrapper" style="margin:2rem;align:center;">
  <div id="table-scroll">
    <table>
        <thead>
            <tr>
                <th><span class="text">no</span></th>
                <th><span class="text">username</span></th>
                <th><span class="text">account_number</span></th>
                <th><span class="text">city</span></th>
                <th><span class="text">city</span></th>
                <th><span class="text">city</span></th>
               
            </tr>
        </thead>
        <tbody>
        <?php 
        $i=0;
    while(($row=mysqli_fetch_array($result,true))!=NULL){
        $i++;
        echo '<tr><td>'.$row["id"].'</td><td>'.$row["userid"].'</td><td>'.$row["account"].'</td><td>'.$row["current_money"].'</td><td>'.$row["last_tranfer"].'</td><td><button type="submit" class="btn btn-lg btn-primary btn-block" name="'.$i.'" >view</button></td></tr>';
          
           }
    
    
    ?>
    
          
        </tbody>
    </table>
    
  </div>
  <button type="submit" class="btn btn-lg btn-primary btn-block" name="sub" >tranfer money</button>
    <button type="submit" class="btn btn-lg btn-primary btn-block" name="sub1" >back to profile</button>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="sub2">back to login</button>
</div>
	
</form>
   
      
        
	</div>
    </div>
</div>


</body>

<html>
