<?php

    require_once('function/function.php');
    if ($_SESSION['role']=='Super Admin') {
     
    get_header();
    get_sidbar();
    logg();


    if (!empty($_POST)) {
     
   
        $title=$_POST['title'];
        $subtitle=$_POST['subtitle'];
        $btn1=$_POST['btn1'];
        $btn2=$_POST['btn2'];
        $url=$_POST['url'];
        $active=$_POST['active'];
        
        $banpic=$_FILES['bannerpic'];
        $imagename='';

        if ($banpic['name']!='') {
          $imagename='banner-'. time(). rand(10,1000). '.' . pathinfo($banpic['name'],PATHINFO_EXTENSION);
        }

        if (!empty($title)) {

         
           $ins=" INSERT INTO banner_info(ban_title,ban_subtitle,ban_btn1,ban_btn2,ban_url,ban_img,ban_active)
           VALUE('$title','$subtitle','$btn1','$btn2','$url','$imagename','$active')";

                    if (mysqli_query($con,$ins)) {
                      move_uploaded_file($banpic['tmp_name'],'uploads/'.$imagename);
                      
                      echo "Banner Update SuccessFully";
                    }else {
                      echo "Banner Update Faild";
                    }
          
        }else {
          echo "Full Fill The Title";
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
                                              <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Banner Update </h4>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a class="btn btn-sm btn-dark card_top_btn" href="bannerinfo.php"><i class="fa fa-th"></i> Banner Info</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="card-body">
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Banner Title :</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="title">
                                        </div>
                                      </div> 
                                      
                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Banner SubTitle :</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="subtitle">
                                        </div>
                                      </div>

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Banner Button 1:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="btn1">
                                        </div>
                                      </div>

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Banner Button 2:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="btn2">
                                        </div>
                                      </div>

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Banner URL :</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="url">
                                        </div>
                                      </div> 


                                      <div class="form-group row custom_form_group">
                                                  <label class="col-sm-3 col-form-label">Banner Photo :</label>
                                                  <div class="col-sm-7">
                                                    <input type="file" id="" name="bannerpic">
                                                  </div>
                                            </div>

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Banner Active :</label>
                                        <div class="col-sm-7">
                                          <input type="number" class="form-control" id="" name="active">
                                        </div>
                                      </div> 

                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-sm btn-dark submit_btn">UPDATE</button>
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