<!DOCTYPE html>
<html>
<?php
include("project connection.php");
error_reporting(E_ALL ^ E_DEPRECATED);
session_start();
$message0="";
$message1="";

if(isset($_POST['finishbutton']))
{
$town=$_POST['town'];
$spot=$_POST['spot'];
$uname=$_POST['uname'];
$password=$_POST['pass'];
$avspace=$_POST['avspace'];
$repeatPassword=$_POST['vpass'];

foreach($_POST as $field => $value)
{
if($value=="")
 {
  $blankArray[$field]=$value;
 }
}
if(@sizeof($blankArray)>0)
{
 $message0="<div class='alert alert-danger alert-dismissable'>
    <i class='fa fa-ban'></i>
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
    <b>Alert!</b> Please fill the form completely.
</div>";
}
else if($password!=$repeatPassword)
{
 $message1="* Passwords doesn't mach";
}
if(@sizeof($blankArray)>0 and $password!=$repeatPassword)
{
$message0="<div class='alert alert-danger alert-dismissable'>
    <i class='fa fa-ban'></i>
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
    <b>Alert!</b> Please fill the form completely.
</div>";
$message1="* Passwords doesn't mach";
}
if($message0=="" and $message1=="")
{
 mysql_query("insert into register(username,password,email,type)values('".$_POST['uname']."','".$_POST['pass']."','".$_POST['uname']."@gmail.com','gm')");

mysql_query("insert into gm(gmid,town,spot,total,parked,blocked,free) values ('$uname','$town','$spot','$avspace','0','0','$avspace')");

header("Location:gmdet.php");
}
}

?>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#uname").keyup(function (e) {
            
                //removes spaces from username
                $(this).val($(this).val().replace(/\s/g, ''));
                
                var username = $(this).val();
                // if(username.length < 4){$("#user-result").html('');return;}
                
                if(username.length >= 4){
                    // $("#user-result").html('<img src="imgs/ajax-loader.gif" />');
                    $.post('check_gm.php', {'username':username}, function(data) {
                    if (data=="userexists")
                        {$("#user-result").prop('class',"form-group has-error");
                         $("#userlabel").html('<i class="fa fa-times-circle-o"></i> username already exists');}
       
                    else{
                        $("#user-result").prop('class',"form-group has-success");
                        $("#userlabel").html('<i class="fa fa-check"></i> username available');}
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
                {$("#pass-result").prop('class',"form-group has-error");
                 $("#passlabel").html('<i class="fa fa-times-circle-o"></i> Passwords doesnot match');}
       
            else{
                $("#pass-result").prop('class',"form-group has-success");
                $("#passlabel").html('<i class="fa fa-check"></i> Passwords matches');}
        }
        </script>
        <script type="text/javascript">
        $(document).ready(function () {
           $("#availspace").keyup(ValidateField);
        });
        function ValidateField()   
        {  
            var avail_field = $("#availspace").val()
            if (isNaN(avail_field))   
                {$("#avail-result").prop('class',"form-group has-error");
                 $("#availlabel").html('<i class="fa fa-times-circle-o"></i> Must be a number');} 
            else{
                $("#avail-result").prop('class',"form-group has-success");
                $("#availlabel").html('<i class="fa fa-check"></i>Available Space ');}
        }  

        </script>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Find N Park
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="inbox.php" class="dropdown-toggle">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success"><?php echo $unreadcount;?></span>
                            </a>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="recfed.php" class="dropdown-toggle">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger"><?php echo $feed_count;?></span>
                            </a>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Admin <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Admin - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                   
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Admin</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="admin_home.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="gmdet.php">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>GM Details</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="gmdet.php"><i class="fa fa-angle-double-right"></i>View all GM</a></li>
                                <li><a href="addgm.php"><i class="fa fa-angle-double-right"></i>Add GM</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="parkdet.php">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Parking Details</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="userdet.php">
                                <i class="fa fa-laptop"></i>
                                <span>User Details</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="userdet.php"><i class="fa fa-angle-double-right"></i>View all Users</a></li>
                                <li><a href="useredit.php"><i class="fa fa-angle-double-right"></i>Edit User</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="recfed.php">
                                <i class="fa fa-envelope"></i> <span>Feedbacks</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Adminstration
                        <small>it all starts here</small>
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                                               <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Add GM</h3>
                        </div><!-- /.box-header -->
                        <?php echo $message0; ?>

                        <!-- form start -->
                        <form role="form" style="MARGIN-LEFT: 163PX; width:500px;" action="addgm.php" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Town</label>
                                    <input type="text" name="town" class="form-control"placeholder="Town">
                                </div>
                                <div class="form-group">
                                    <label>Spot</label>
                                    <input type="text" name="spot" class="form-control" placeholder="Spot">
                                </div>
                                <div id="user-result" class="form-group">
                                    <label id="userlabel">GM Username</label>
                                    <input type="text" id="uname" name="uname" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" id="pass" name="pass" class="form-control"placeholder="Password">
                                </div>
                                <div id="pass-result" class="form-group">
                                    <label id="passlabel" class="control-label" for="inputSuccess">Retype-Password</label>
                                    <input type="password" id="vpass" name="vpass" class="form-control" placeholder="Retype-Password">
                                </div>
                                <div id="avail-result" class="form-group">
                                    <label id="availlabel">Available Space</label>
                                    <input type="text" id="availspace" name="avspace" class="form-control" placeholder="Available Space">
                                </div>
                                
                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <input type="submit" name="finishbutton" value="Enter" class="btn btn-primary">
                                <!-- <button type="reset" name="reset" class="btn btn-primary">  Reset</button> -->
                            </div>
                        </form>
                    </div><!-- /.box -->
                 

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../js/AdminLTE/app.js" type="text/javascript"></script>

    </body>
</html>