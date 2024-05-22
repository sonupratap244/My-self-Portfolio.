

<?php
$server= "sql110.epizy.com";
$username = "epiz_32819033";
$password = "pH8IRoIuqMbZs";
$db = "epiz_32819033_portfolio";

$con = mysqli_connect($server , $username ,$password ,$db);

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($con, $_POST['name']);
    $email =  mysqli_real_escape_string($con, $_POST['email']);
    $message =  mysqli_real_escape_string($con, $_POST['message']);
    
    $emailquery =" select * from portfolio where email ='$email' ";
    $query = mysqli_query($con, $emailquery);
    $emailcount = mysqli_num_rows($query);
    
    if($emailcount>0){
        ?>
        <script>
        alert("email alredy exists...!");
        location.replace("index.php");
        </script>    
        <?php
    }else{
        $insertquery = "insert into portfolio(name, email, message)  
        values('$username','$email','$message')";

        $iquery = mysqli_query($con ,$insertquery);
        if($iquery){
            ?>
            <script>
             alert("Thank's for give me response.");
             location.replace("index.php");
            </script>
            <?php
            
        }else{
            ?>
            <script>
             alert(" ...error...!");
             location.replace("index.php");
            </script>
         <?php 
}
    }
        }
?>