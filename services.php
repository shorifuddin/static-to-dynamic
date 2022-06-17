<?php

    require_once('function/function.php');

    get_header();

?>

    <div class="page-title" style="background-image: url(images/page-title.png)">
        <h1>Services</h1>
    </div>
    
    <section id="services" class="service-item">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Our Service</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">

            <?php 

                    $self="SELECT * FROM service_info ORDER BY sv_id ASC";
                    $Qs=mysqli_query($con,$self);

                    while ($sdata=mysqli_fetch_assoc($Qs)) {
                                
            ?>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="admin/uploads/<?=$sdata['sv_icon'];?>">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><?=$sdata['sv_title'];?></h3>
                            <p><?=$sdata['sv_subtitle'];?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
 
                </div>

            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->


    <section id="testimonial">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Testimonials</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="testimonial-slider owl-carousel">

            <?php 
           $seltst="SELECT * FROM testimonial_info ORDER BY testimonial_id ASC";
           $Qtst=mysqli_query($con,$seltst);

           while ($tst=mysqli_fetch_assoc($Qtst)) {
       
            ?>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="admin/uploads/<?=$tst['t_img']; ?>" alt="">
                    </div>
                    <div class="content">
                        <img src="images/review.png" alt="">
                        <p><?=$tst['t_rw']; ?></p>
                        <h4>- <?=$tst['t_rwn']; ?></h4>
                    </div>
                </div>

                <?php } ?>

 
            </div>
        </div>
    </section>


    <section id="partner">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Our Partners</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="partners">
                <ul>
                <?php 
           $selpt="SELECT * FROM partners_info ORDER BY partners_id ASC";
           $Qp=mysqli_query($con,$selpt);

           while ($part=mysqli_fetch_assoc($Qp)) {
       
            ?>

                    <li>
                        <a href="#"><img class="img-responsive fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="admin/uploads/<?=$part['p_img'];?>"></a>
                    </li>
                   
            <?php } ?>

                </ul>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/#partner-->


    <section id="bottom">
        <div class="container fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-2">
                    <a href="#" class="footer-logo">
                        <img src="images/logo-black.png" alt="logo">
                    </a>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Company</h3>
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">We are hiring</a></li>
                                    <li><a href="#">Meet the team</a></li>
                                    <li><a href="#">Copyright</a></li>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->

                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Support</h3>
                                <ul>
                                    <li><a href="#">Faq</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Forum</a></li>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Refund policy</a></li>
                                    <li><a href="#">Ticket system</a></li>
                                    <li><a href="#">Billing system</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->

                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Developers</h3>
                                <ul>
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">SEO Marketing</a></li>
                                    <li><a href="#">Theme</a></li>
                                    <li><a href="#">Development</a></li>
                                    <li><a href="#">Email Marketing</a></li>
                                    <li><a href="#">Plugin Development</a></li>
                                    <li><a href="#">Article Writing</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->

                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Our Partners</h3>
                                <ul>
                                    <li><a href="#">Adipisicing Elit</a></li>
                                    <li><a href="#">Eiusmod</a></li>
                                    <li><a href="#">Tempor</a></li>
                                    <li><a href="#">Veniam</a></li>
                                    <li><a href="#">Exercitation</a></li>
                                    <li><a href="#">Ullamco</a></li>
                                    <li><a href="#">Laboris</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--/#bottom-->

    <?php

get_footer();

?>
    