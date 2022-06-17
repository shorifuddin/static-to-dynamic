<?php

    require_once('function/function.php');
    if ($_SESSION['role']=='Super Admin') {
     
    get_header();
    get_sidbar();
    logg();


    if (!empty($_POST)) {
 
        $rwtitle=$_POST['title'];
        $rwsimg=$_FILES['rwpic'];
        $imagename='';

        if ($rwsimg['name']!='') {
          $imagename='recentwork-'. time(). rand(10,1000). '.' . pathinfo($rwsimg['name'],PATHINFO_EXTENSION);
        }

        if (!empty($rwtitle)) {

         
           $ins=" INSERT INTO rw_info(rw_title,rw_img)
           VALUE('$rwtitle','$imagename')";

                    if (mysqli_query($con,$ins)) {
                      move_uploaded_file($rwsimg['tmp_name'],'uploads/'.$imagename);
                      
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
                                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Recent Work  Update </h4>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a class="btn btn-sm btn-dark card_top_btn" href="recentworkinfo.php"><i class="fa fa-th"></i> Recent Work Info</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="card-body">

                                <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Recent Work Title :</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="title">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                                  <label class="col-sm-3 col-form-label">Recent Work Photo :</label>
                                                  <div class="col-sm-7">
                                                    <input type="file" id="" name="rwpic">
                                                  </div>
                                            </div>

                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-sm btn-dark submit_btn">Recent Work UPDATE</button>
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