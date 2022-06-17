<?php

    require_once('function/function.php');
    if ($_SESSION['role']=='Super Admin') {
     
    get_header();
    get_sidbar();
    logg();


    if (!empty($_POST)) {
     
   
        $ftitle=$_POST['title'];
        $fsubtitle=$_POST['subtitle'];
        $ficon=$_POST['icon'];

        if (!empty($ftitle)) {

           $ins=" INSERT INTO features_info(f_title,f_subtitle,f_icon)
           VALUE('$ftitle','$fsubtitle','$ficon')";

                    if (mysqli_query($con,$ins)) {

                      echo "Features Update SuccessFully";
                    }else {
                      echo "Features Update Faild";
                    }
          
        }else {
          echo "Full Fill Features Title";
        }
    }

?>
                    <div class="row">
                        <div class="col-md-12 main_content">
                            <form method="POST" enctype="multipart/form-data" action="" >
                              <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-8">
                                              <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Features Update NOW</h4>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a class="btn btn-sm btn-dark card_top_btn" href="Featuresinfo.php"><i class="fa fa-th"></i> ALL Features</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="card-body">
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Features Title :</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="title">
                                        </div>
                                      </div> 
                                      
                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Features Subtitle :</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="subtitle">
                                        </div>
                                      </div>

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Features ICON : :</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="icon">
                                        </div>
                                      </div>

                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-sm btn-dark submit_btn">Features Update NOW</button>
                                </div>
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php

    get_footer();

 }else{
   header('Location:login.php');
 }

    ?>