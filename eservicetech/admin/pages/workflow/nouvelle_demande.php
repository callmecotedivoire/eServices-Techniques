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
                            <h1 class="page-header">Dashboard</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                                    <?php include('includes/boxes_users.php'); ?>
                                    <?php include('includes/boxes_admin.php'); ?>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-8">
                                    <?php include('includes/chat.php'); ?>
                        </div>
                        <!-- /.col-lg-8 -->
                        <div class="col-lg-4">
                                    <?php include('includes/panneau_notification.php'); ?>
                            <!-- /.panel -->
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
