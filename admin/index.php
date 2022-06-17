<?php

    require_once('function/function.php');
    logg();
    get_header();
    get_sidbar();
    

?>
                
                    <div class="row">
                        <div class="col-md-12 main_content">

                        <h6>Welcome <?=$_SESSION['name']; ?></h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php

get_footer();

    ?>
    