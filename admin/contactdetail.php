<?php

    require_once('function/function.php');
    get_header();
    get_sidbar();
    logg();

    $id=$_GET['view'];
    $sel="SELECT * FROM con_info WHERE con_id='$id'";
    $q=mysqli_query($con,$sel);
    $data= mysqli_fetch_assoc($q);
    ?>
        <div class="row">
            <div class="col-md-12 main_content">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> User Data</h4>
                            </div>
                            <div class="col-md-4 text-right">
                                <a class="btn btn-sm btn-dark card_top_btn" href="contactinfo.php"><i class="fa fa-th"></i> ALL Contact Details </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-2"></div>
                                      <div class="col-md-8">
                                          <table class="table table-bordered table-striped table-hover custom_view_table">
                                              <tr>
                                                  <td>Name</td>
                                                  <td>:</td>
                                                  <td><?= $data['con_name']; ?></td>
                                              </tr>

                                              <tr>
                                                  <td>Email</td>
                                                  <td>:</td>
                                                  <td><?= $data['con_email']; ?></td>
                                              </tr>
                                              <tr>
                                                  <td>Phone</td>
                                                  <td>:</td>
                                                  <td><?= $data['con_phn']; ?></td>
                                              </tr>
                                              
                                              <tr>
                                                  <td>Company</td>
                                                  <td>:</td>
                                                  <td><?= $data['con_company']; ?></td>
                                              </tr>

                                              <tr>
                                                  <td>Subeject</td>
                                                  <td>:</td>
                                                  <td><?= $data['con_subj']; ?></td>
                                              </tr>

                                              <tr>
                                                  <td>Messenge</td>
                                                  <td>:</td>
                                                  <td><?= $data['con_mes']; ?></td>
                                              </tr>
                                              
                                          </table>
                                      </div>
                                      <div class="col-md-2"></div>
                                  </div>
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