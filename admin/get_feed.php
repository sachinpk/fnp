<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("project connection.php");
$id=$_REQUEST['no'];
$result=mysql_query("SELECT * from feedback where no='$id'");
$arr=mysql_fetch_array($result);
$message= '<div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-envelope-o"></i>    '.$arr['email'].'</h4>
                    </div>
                    <form action="#" method="post">
                        <div class="modal-body">
                            <div >
                                <div class="callout callout-info">
                                <h4>'.$arr['subject'].'</h4>
                                '.$arr['description'].'
                                </div>
                                            
                            </div>
                        </div>
                        
                    </form>';

if ($arr) {
	die($message);
} else {
	die("Something went wrong");
}


?>