<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Registration Page</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#uname").keyup(function (e) {
            
                //removes spaces from username
                $(this).val($(this).val().replace(/\s/g, ''));
                
                var username = $(this).val();
                if(username.length < 4){$("#user-result").html('');return;}
                
                if(username.length >= 4){
                    $("#user-result").html('<img src="imgs/ajax-loader.gif" />');
                    $.post('check_username.php', {'username':username}, function(data) {
                      $("#user-result").html(data);
                    });
                }
            }); 
        });
        </script>
        <script type="text/javascript">
        $(document).ready(function () {
           $("#vpass").keyup(checkPasswordMatch);
        });
        function checkPasswordMatch() {
            var password = $("#pass").val();
            var confirmPassword = $("#vpass").val();

            if (password != confirmPassword)
                $("#pass-result").html('<div class="form-group has-error"><label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i></label></div>');
            else
                $("#pass-result").html('<div class="form-group has-success"><label class="control-label" for="inputSuccess"><i class="fa fa-check"></i></label></div>');
        }
        </script>
        <script type="text/javascript">
        $(document).ready(function () {
           $("#email").keyup(ValidateEmail);
        });
        function ValidateEmail()   
        {  
            var mail = $("#email").val()
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))   
                $("#email-result").html('<div class="form-group has-success"><label class="control-label" for="inputSuccess"><i class="fa fa-check"></i></label></div>'); 
            else
                $("#email-result").html('<div class="form-group has-error"><label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i></label></div>');
        }  

        </script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>


    <body class="bg-black">
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
session_start();
$message0="";
$message1="";
$msg="";
if(isset($_POST['finishbutton']))
{
    // $sac="insert into register(username,password,email,type)values('".$_POST['uname']."','".$_POST['pass']."','".$_POST['email']."','user')";
    echo "<script type='text/javascript'>alert('".$_POST['uname']."')</script>";
    $email=$_POST['email'];
    $uname=$_POST['uname'];
    $password=$_POST['pass'];
    $repeatPassword=$_POST['vpass'];
    include("project connection.php");
    foreach($_POST as $field => $value)
    {
        if($value=="")
         {
              $blankArray[$field]=$value;
         }
    }
    if(@sizeof($blankArray)>0)
    {
         $message0="* Please fill all the fields";
    }
    else if($password!=$repeatPassword)
    {
         $message1="* Passwords doesn't mach";
    }
    if(@sizeof($blankArray)>0 and $password!=$repeatPassword)
    {
        $message0="* Please fill all the fields";
        $message1="* Passwords doesn't mach";
    }
    $select=mysql_query("select username from register");
    while($name=mysql_fetch_array($select))
    {
         if($uname==$name['username'])
        {
             $msg="Username not available";
        }
    }
    // if($message0=="" and $message1=="" and $msg="")
    // { 
        $insert="insert into register(username,password,email,type)values('".$_POST['uname']."','".$_POST['pass']."','".$_POST['email']."','user')";
        mysql_query($insert,$con);
        header("Location:signin.php");
    // }
}

?>


        <div class="form-box" id="login-box">
            <div class="header">Register New Membership</div>
            <form action="signup.php" method="post">
                <div class="body bg-gray">
                <table cellpadding="8">
                    <tr>
                    <div class="form-group">
                        <td width="100%"><input type="text" id="uname" name="uname" class="form-control" placeholder="User Name"/></td>
                        <td id="user-result"></td>
                        
                        
                    </div>
                    </tr>
                    <tr>
                    <div class="form-group">
                        <td><input type="text" id="email" name="email" class="form-control" placeholder="User ID"/></td>
                        <td id="email-result"></td>
                    </div>
                    </tr>
                    <tr>
                    <div class="form-group">
                        <td><input type="password" id="pass" name="pass" class="form-control" placeholder="Password"/></td>

                    </div>
                    </tr>
                    <tr>
                    <div class="form-group">
                        <td><input type="password" id="vpass" name="vpass" class="form-control" placeholder="Retype password"/></td>
                        <td id="pass-result"></td>
                    </div>
                    </tr>
                </table>
                </div>
                
                <div class="footer">                    

                    <button type="submit" name="finishbutton" class="btn bg-olive btn-block">Sign me up</button>

                    <a href="signin.php" class="text-center">I already have a membership</a>
                </div>
            </form>

            <div class="margin text-center">
                <span>Follow us on</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>