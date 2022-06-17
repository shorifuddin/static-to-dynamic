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
                                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> ALL Banner Info</h4>
                                      </div>
                                      <div class="col-md-4 text-right">
                                          <a class="btn btn-sm btn-dark card_top_btn" href="recentworkadd.php"><i class="fa fa-th"></i> Update Banner</a>
                                      </div>
                                      <div class="clearfix"></div>
                                  </div>
                              </div>
                              <div class="card-body">
                                  <table class="table table-bordered table-striped table-hover custom_table">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col"> Recent Work Title </th>
                                        <th scope="col"> Recent Work Photo </th>
                                        <th scope="col">Manage</th>
                                      </tr>
                                    </thead>
                                    <tbody>


                                    <?php

                                      $sel="SELECT * FROM rw_info ORDER BY rw_id ASC";
                                      $Q=mysqli_query($con,$sel);
                                      while ($data=mysqli_fetch_assoc($Q)) {
                                        

                                    ?>

                                      <tr>


                                        <td><?=$data['rw_title'];?></td>
                                       
                                        <td>
                                               
                                             <?php
                                                if ($data['rw_img']!='') {
                                                ?>
                                                <img height="50px" src="uploads/<?=$data['rw_img'] ?>"/>

                                             <?php   }else{ ?>

                                              <img height="50px" src="images/avatar.png"/>

                                              <?php } ?>

                                      </td>
                                        <td>

                                            <?php if ($_SESSION['role']=='Super Admin' || $_SESSION['role']=='Admin' || $_SESSION['role']=='Editor' ) {?>
                                            <a href="aboutuser.php?view=<?=$data['rw_id']; ?>"><i class="fa fa-plus-square fa-lg"></i></a>
                                            <?php } ?>

                                            <?php if ($_SESSION['role']=='Super Admin' || $_SESSION['role']=='Admin' ) {?>
                                            <a href="edituserinfo.php?edit=<?=$data['rw_id']; ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                                            <?php } ?>

                                            <?php if ($_SESSION['role']=='Super Admin') {?>
                                            <a href="deletuser.php?delet=<?=$data['rw_id']?>"><i class="fa fa-trash fa-lg"></i></a>
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