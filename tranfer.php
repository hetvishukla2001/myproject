


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

<head><title>tranfer page</title>
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
    
   
    $q="select * from user_list where pin=".$pin." AND account=".$number;
    $result = mysqli_query($_SESSION['connection'], $q);
    $row=mysqli_fetch_array($result,true);
 

    if(isset($_POST['sub']))
    {
        $ch=$_POST['cars'];
        
        $money=$_POST['money'];
        
        if($row['id']!=$ch){
                    if(($row['current_money']-1000)<=$money){
                        echo '<script>$(function(){

            $("#error").css("color", "red");

            });</script>';
                    }
                else{
                    $q1="select * from user_list where id=$ch";
                    $result1 = mysqli_query($_SESSION['connection'], $q1);
                    $row1=mysqli_fetch_array($result1,true);
                    $sum=$row1['current_money']+$money;
                    $q2="update user_list set current_money=".$sum." where id=$ch";
                    mysqli_query($_SESSION['connection'],$q2);

                    $diff=$row['current_money'] - $money ;
                   

                    $q3="update user_list set current_money=".$diff." , last_tranfer=".$money."  where account=$number";
                    mysqli_query($_SESSION['connection'],$q3);

                    $q4="select * from user_list where pin=".$pin." AND account=".$number;
                    $result2 = mysqli_query($_SESSION['connection'], $q4);
                    $row2=mysqli_fetch_array($result2,true);


                                echo '<script>$(function(){

                    $("#yeah").css("color", "green");

                    });</script>';
                }

        }

        else{
             echo '<script>$(function(){

                    $("#het").css("color", "red");

                    });</script>';


        }




            
        

       

    }
    else if(array_key_exists('sub1', $_POST)) { 
            
            header('Location: profile.php'); 
        } 
        else if(array_key_exists('sub2', $_POST)) { 
        session_destroy();

            
            header('Location: index.php'); 
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
    <h1>Transition</h1>
	
     USER NAME:  <?php echo $row["userid"];?><br>
     USER account NO : <?php echo $row["account"]; ?><br><br>

     


    <form class="form-signin p-5  text-white" action="" method="post" name="f1">
            <label for="cars" class="text-dark">Choose a user:</label>
  <select name="cars" id="cate1">
    <option value="1">hetvi</option>
    <option value="2">kanav</option>
    <option value="3">palkan</option>
    <option value="4">manish</option>
    <option value="5">manisha</option>
    <option value="6">jalpesh</option>
    <option value="7">rahul</option>
    <option value="8">mukesh</option>
    <option value="9">rajesh</option>
    <option value="10">krishna</option>
    <option value="11">shiv</option>
    <option value="12">komal</option>
    <option value="13">vivek</option>
    <option value="14">harshil</option>
    <option value="15">shraddha</option>
  </select>
  <br><br><div id="error" class="text-dark">please enter amount less then you have in your account!!</div><br><br>
  <div class="text-dark">ENTER AMOUNT TO TRANFER<input type="text" name="money" id="mo" onkeyup="check(this)"><div id="mm" style="color:red"></div></div><br>


    <div style="display:flex;justify-content: center;">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="sub" id="pay"  disabled="true">pay</button>&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="sub1" id="pay"  >back to profile</button>&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-lg btn-primary " type="submit" name="sub2">back to login</button>
        
    </div>
    <div id="yeah">done your current amount have <?php echo $row2['current_money']; ?></div>
        <div id="het">select correct user :</div>
    </form>
        
	</div>
    </div>
</div>

<script>


function check(x){
    var e =document.getElementById("mm");
    
    var data=f1.money.value;
  var pat="^[1-9]+[0-9]*$";
  var reg=new RegExp(pat);
        if(reg.test(data)){
            
            e.innerHTML="";
            
            var sid = document.getElementById("pay");
            sid.disabled=false;
            

        }
  
        
        else{
            name=0;
            e.innerHTML="not valid input";
            var sid = document.getElementById("pay");
            sid.disabled=true;
        }

}

        




</script>
</body>

<html>
