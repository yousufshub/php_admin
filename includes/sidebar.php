<div class="container-fluid content_full">
        <div class="row">
            <div class="col-md-2 sidebar pd0">
            	<div class="side_user">
                	  <img class="img-responsive" src="uploads/<?= $_SESSION['pic']; ?>"/>
                    <h4><?= $_SESSION['name']; ?></h4>
                    <span><i class="fa fa-circle"></i> Online</span>
                </div>
                <h2>MAIN NAVIGATION</h2>
                <ul>
                	  <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <?php if($_SESSION['role']==1){ ?>
                    <li><a href="all-user.php"><i class="fa fa-user-circle"></i> User</a></li>
                    <?php } ?>
                    <?php if($_SESSION['role']==1 || $_SESSION['role']==2 ){ ?>
                    <li><a href="#"><i class="fa fa-gamepad"></i> Banner</a></li>
                    <?php } ?>
                    <li><a href="#"><i class="fa fa-image"></i> Gallery</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
            </div><!--sidebar end-->
            <div class="col-md-10 admin-part pd0">
            	<ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                  <li><a href="#">Dashboard</a></li>
                </ol>
