

<section>
        <div class="container-fluid content_part_full">
            <div class="row">
                <div class="col-md-2 sidebar_part">
                  <div class="user_part">

                  
                    <img src="images/avatar.png" alt="avatar">
                    <h4>Name: <?=$_SESSION['name']; ?></h4>
                    <h4>Role: <?=$_SESSION['role']; ?></h4>
                    <p><i class="fa fa-circle"></i> Online</p>
                  </div>
                  <div class="menu">
                      <ul>
                        <li><a href="index.php"><i class="fa fa-home"></i> Dashboard</a></li>
                        <?php if ($_SESSION['role']=='Super Admin') {?>
                        <li><a href="regstration.php"><i class="fa fa-user-plus"></i> Add User</a></li>
                        <?php } ?>

                        <?php if ($_SESSION['role']=='Super Admin') {?>
                        <li><a href="contactinfo.php"><i class="fa fa-comments"></i> Contact Messange </a></li>
                        <?php } ?>

                        <?php if ($_SESSION['role']=='Super Admin') {?>
                        <li><a href="Featuresadd.php"><i class="fa fa-address-book"></i> Features Add </a></li>
                        <?php } ?>

                        <?php if ($_SESSION['role']=='Super Admin') {?>
                        <li><a href="recentworkadd.php"><i class="fa fa-address-book"></i> Recent Works Add </a></li>
                        <?php } ?>

                        <?php if ($_SESSION['role']=='Super Admin') {?>
                        <li><a href="serviceadd.php"><i class="fa fa-address-book"></i> Service Add </a></li>
                        <?php } ?>

                        <?php if ($_SESSION['role']=='Super Admin') {?>
                        <li><a href="testimonialadd.php"><i class="fa fa-address-book"></i> Testimonials Add </a></li>
                        <?php } ?>

                        <?php if ($_SESSION['role']=='Super Admin') {?>
                        <li><a href="partnersadd.php"><i class="fa fa-address-book"></i> Partners Add </a></li>
                        <?php } ?>

                        <?php if ($_SESSION['role']=='Super Admin' || $_SESSION['role']=='Admin' || $_SESSION['role']=='Editor' ) {?>
                        <li><a href="alluser.php"><i class="fa fa-user-circle"></i> All User</a></li>

                        <li><a href="banneradd.php"><i class="fa fa-bandcamp"></i> Banner</a></li>
                        <?php } ?>

                        <?php if ($_SESSION['role']=='Super Admin' || $_SESSION['role']=='Admin' || $_SESSION['role']=='Editor' || $_SESSION['role']=='Subscribers' ) {?>
                          
                        <li><a href="login.php"><i class="fa fa-power-off"></i> Logout</a></li>
                        <?php } ?>
                      </ul>
                  </div>
                </div>
                <div class="col-md-10 content_part">
                    <div class="row custom_bread_part">
                        <div class="col-md-12 bread">
                             <ul>
                               <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                               <li><a href="#"><i class="fa fa-angle-double-right"></i> Dashboard</a></li>
                             </ul> 
                        </div>
                    </div>