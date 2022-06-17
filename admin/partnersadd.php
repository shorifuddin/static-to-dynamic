<?php

    require_once('function/function.php');
    if ($_SESSION['role']=='Super Admin') {
     
    get_header();
    get_sidbar();
    logg();


    if (!empty($_POST)) {
 
        $ptitle=$_POST['title'];
        $pimg=$_FILES['ppic'];
        $imagename='';

        if ($pimg['name']!='') {
          $imagename='partners-'. time(). rand(10,1000). '.' . pathinfo($pimg['name'],PATHINFO_EXTENSION);
        }

        if (!empty($ptitle)) {

         
           $ins=" INSERT INTO partners_info(p_title,p_img)
           VALUE('$ptitle','$imagename')";

                    if (mysqli_query($con,$ins)) {
                      move_uploaded_file($pimg['tmp_name'],'uploads/'.$imagename);
                      
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
                                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Partners Update </h4>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a class="btn btn-sm btn-dark card_top_btn" href="partnersinfo.php"><i class="fa fa-th"></i> Partners Info</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="card-body">

                                <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Partners Title :</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="title">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                                  <label class="col-sm-3 col-form-label">Partners Photo :</label>
                                                  <div class="col-sm-7">
                                                    <input type="file" id="" name="ppic">
                                                  </div>
                                            </div>

                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-sm btn-dark submit_btn">Partners UPDATE</button>
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