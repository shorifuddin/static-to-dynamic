<?php

    require_once('function/function.php');
    if ($_SESSION['role']=='Super Admin') {
     
    get_header();
    get_sidbar();
    logg();


    if (!empty($_POST)) {
     
   
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $pw=md5($_POST['pass']);
        $rpw=md5($_POST['repass']);
        $role=$_POST['role'];
        $photo=$_FILES['pic'];
        $imagename='';

        if ($photo['name']!='') {
          $imagename='upload-'. time(). rand(10,1000). '.' . pathinfo($photo['name'],PATHINFO_EXTENSION);
        }

        if (!empty($name)) {

          if ($pw===$rpw) {
           
           $ins=" INSERT INTO user_info(user_name,user_phone,user_username,user_email,user_pas,role_id,user_photo)
           VALUE('$name','$phone','$username','$email','$pw','$role','$imagename')";

                    if (mysqli_query($con,$ins)) {
                      move_uploaded_file($photo['tmp_name'],'uploads/'.$imagename);
                      
                      echo "Registration SuccessFully";
                    }else {
                      echo "Registration Faild";
                    }
          }else {
            echo "Password Don't Match";
          }
        }else {
          echo "Full Fill Your Name";
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
                                              <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> REGISTRATION NOW</h4>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a class="btn btn-sm btn-dark card_top_btn" href="alluser.php"><i class="fa fa-th"></i> ALL User</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <div class="card-body">
                                     <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Name:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="name">
                                        </div>
                                      </div> 
                                      
                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Phone :</label>
                                        <div class="col-sm-7">
                                          <input type="number" class="form-control" id="" name="phone">
                                        </div>
                                      </div>

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Username :</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="" name="username">
                                        </div>
                                      </div>

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Email :</label>
                                        <div class="col-sm-7">
                                          <input type="email" class="form-control" id="" name="email">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Password :</label>
                                        <div class="col-sm-7">
                                          <input type="password" class="form-control" id="" name="pass">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Confrim Password :</label>
                                        <div class="col-sm-7">
                                          <input type="password" class="form-control" id="" name="repass">
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">Gender :</label>
                                        <div class="col-sm-7">
                                          <select  class="form-control" id="" name="">
                                          <option selected>Select Gender</option>
                                          <option value="1">Male</option>
                                          <option value="2">Femal</option>
                                          <option value="3">Other</option>
                                          </select>
                                        </div>
                                      </div> 

                                      <div class="form-group row custom_form_group">
                                        <label class="col-sm-3 col-form-label">User Role:</label>
                                        <div class="col-sm-7">
                                          <select  class="form-control" id="" name="role">
                                          <option selected>Select Role</option>

                                          <?php

                                          $sel="SELECT * FROM user_role  ORDER BY role_id ASC";
                                          $rol=mysqli_query($con,$sel);
                                          while ($urole=mysqli_fetch_assoc($rol)) {
                                         
                                          ?>

                                          <option value="<?= $urole['role_id']; ?>"><?= $urole['role_name'];?></option>

                                              <?php } ?>
                                          


                                          </select>
                                        </div>
                                      </div> 


                                        

                                      <div class="form-group row custom_form_group">
                                                  <label class="col-sm-3 col-form-label">Photo:</label>
                                                  <div class="col-sm-7">
                                                    <input type="file" id="" name="pic">
                                                  </div>
                                            </div>


                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-sm btn-dark submit_btn">REGISTRATION</button>
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