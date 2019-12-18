<?php
session_start();
include('controllers/db_config.php'); 

$profil = $_SESSION['type'];
$nom = $_SESSION['nom_prenom'];
$code = $_SESSION['code_client'];
$contact = $_SESSION['contact'];
$mail = $_SESSION['mail'];
$datenais = $_SESSION['datenais'];
$id_user = $_SESSION['id'];




switch ($profil) {
    case 1:
    $hidden_user = '';
    $hidden_admin = 'hidden="hidden"';
	$visi_user =  '';
	$visi_admin =  'hidden';
    break;
		
    case 2:
    $hidden_user = 'hidden="hidden"';
    $hidden_admin = '';
	$visi_user =  'hidden';
	$visi_admin =  '';
    break;
}


?>

<!DOCTYPE html>
<html lang="en">
    <?php include('includes/head.php'); ?>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <div <?php echo $hidden_user ?>>
                <?php include('includes/menu_user.php'); ?>
    		</div>
              <div <?php echo $hidden_admin ?>>
                <?php include('includes/menu.php'); ?>
   			 </div>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Dashboard</h1>
                            <?php //echo$nom; echo'test_ok';?>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div <?php echo $hidden_user ?>>
                                    <?php include('includes/boxes_users.php'); ?>
                    </div>
                    <div <?php echo $hidden_admin ?>>
                                    <?php include('includes/boxes_admin.php'); ?>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-8">
                        	<div <?php echo $hidden_user ?>>
                                    <?php include('includes/chat.php'); ?>
                            </div>       
                        </div>
                        <div class="col-lg-4">
                        	<div <?php echo $hidden_user ?>>
                                 <?php include('includes/panneau_notification.php'); ?>
                            </div> 
                        </div>
                                 <?php include('includes/infos.php'); ?>
                        <!-- /.col-lg-4 -->
                    </div>
                    <!-- /.row -->

                </div>
                
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->


        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="js/raphael.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

    </body>
</html>
