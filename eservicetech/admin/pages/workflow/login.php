<!DOCTYPE html>
<html lang="en">
       <?php include('includes/head.php'); ?>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <div align="center" style="padding-top:25px">
                <img src="../images/header-logo.png" width="254" height="184">
                	<div align="center">
                Intranet Service technique
        	    	</div>
                </div>
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"> Connectez-vous à votre espace</h3>
                        </div>
                        <div class="panel-body">
                                 <form method="post" action="controllers/controllers.php">
								<input type="hidden" name="login" value="admin_login">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Nom d'utilisateur" name="username" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    
                                    <input type="submit" class="btn btn-lg btn-success btn-block" value="Connexion">
                                    <!-- Change this to a button or input when using this as a form -->
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

    </body>
</html>
