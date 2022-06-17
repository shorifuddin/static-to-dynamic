<?php

    require_once('function/function.php');
    get_header();
    get_sidbar();
    logg();


    ?>
                    <div class="row">
                        <div class="col-md-12 main_content">
                            <div class="card">
                              <div class="card-header">
                                  <div class="row">
                                      <div class="col-md-8">
                                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> ALL User Data</h4>
                                      </div>
                                      <div class="col-md-4 text-right">
                                          <a class="btn btn-sm btn-dark card_top_btn" href="regstration.php"><i class="fa fa-th"></i> REGISTRATION Form</a>
                                      </div>
                                      <div class="clearfix"></div>
                                  </div>
                              </div>
                              <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover custom_table">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Eamil</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Company</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Messange</th>
                                        <th scope="col">Manage</th>
                                      </tr>
                                    </thead>
                                    <tbody>


                                    <?php

                                      $sel="SELECT * FROM con_info ORDER BY con_id DESC";
                                      $Q=mysqli_query($con,$sel);
                                      while ($data=mysqli_fetch_assoc($Q)) {
                                        

                                    ?>

                                      <tr>


                                        <td><?=$data['con_name'];?></td>
                                        <td><?=$data['con_email'];?></td>
                                        <td><?=$data['con_phn'];?></td>
                                        <td><?=$data['con_company'];?></td>
                                        <td><?= substr($data['con_subj'],0,8);?>...</td>
                                        <td><?=substr($data['con_mes'],0,10);?>...</td>
                                        
                                        
                                        <td>

                                      <?php if ($_SESSION['role']=='Super Admin' || $_SESSION['role']=='Admin' || $_SESSION['role']=='Editor' ) {?>
                                      <a href="contactdetail.php?view=<?=$data['con_id']; ?>"><i class="fa fa-plus-square fa-lg"></i></a>
                                      <?php } ?>

                                      

                                      <?php if ($_SESSION['role']=='Super Admin') {?>
                                      <a href="deletuser.php?delet=<?=$data['con_id']?>"><i class="fa fa-trash fa-lg"></i></a>
                                      <?php } ?>

                                        </td>
                                      </tr>
                                     
                                      <?php
                                      }
                                      ?>
                                     
                                    </tbody>
                                  </table>
                              </div>
                              <div class="card-footer text-center">
                                  .
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php

get_footer();

    ?>