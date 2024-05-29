<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<style>
    body{
        background-color: rgba(122, 236, 177, 0.716);
        background-repeat: no-repeat;
        object-fit: cover;
        background-size: contain;
    
    }
    .container{
        width: 50%;
        height: 50px;
        border-style: solid;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        left: 25%;
    }
    .container h2{
        letter-spacing: 2px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: 700;
        font-stretch: expanded;
        text-transform: uppercase;
    }
    .form{
        position: relative;
        left: 25%;
        border-style: solid;
          
        width: 50%;
        line-height: 1.5;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: x-large;
    }
    .container{
        position: relative;
        margin-top: 10%;
    }

    .form input{
       line-height: 2.0;
        padding: 1px;
        padding-left: 14px;
    }
    .rel{
        position: relative;
        left: 80px;
    }
    .sub button{
        height: 70px;
        width: 50.5%;
        border: none;
        position: relative;
        left: 25%;
        text-transform: uppercase;
        font-size: x-large;
    }
    #a1,#a2,#a3,#a4{
        font-size: xx-small;
        color: red;
    }
    .sub{
        width: 100%;
        height: 50px;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: x-large;
        text-transform: uppercase;
    }
</style>


</head>

<?php
$con=mysqli_connect("localhost","root","","validate");

if(isset($_POST['submit'])){
    $sql = "SELECT * FROM signin WHERE Username = '{$_POST['uname']}' AND Password = '{$_POST['pword']}'";

$result = $con->query($sql);
// if($con->query($sql)){
//     // echo"<script>window.open('Project 2.html','_self')</script>";
//     header("Location: Project 2.html");
// }else{
//     echo "Error";   
// }

if ($result->num_rows > 0) {
    header("Location: Project 2.html");
    exit();
} else {
    // $error_message = "Invalid username or password";
    echo "<script>alert('Invalid username or password');</script>";
    // echo "Invalid username or password";
}

}
?>

<body>
    <div class="container">
        <h2>signin</h2>
    </div>
    <div class="form">
        <form name="signin" method="post"  >
           <div class="rel"><br>
            <label>username</label>
            <input type="text" name="uname" required><br>
            <span id="a1"> </span><br>

            <label>password</label>
            <input type="text" name="pword" required><br>
            <span id="a4"></span></div><br>
            <input  class="sub" type="submit" name='submit' value="submit"> 
        </form>
       
        
    </div>


  

</body>
</html> 