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
                <?php include('includes/menu.php'); ?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Imputation des dossiers</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
      
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                                    <?php include('includes/demandes_a_dispatcher.php'); ?>
                        </div>
                        <!-- /.col-lg-8 -->
                        
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
