<?php
    session_start();
    require_once('config.php');
    

    function get_header(){
        require_once('includes/header.php');
    }
    function get_sidbar(){
        require_once('includes/sidbar.php');
    }
    function get_footer(){
        require_once('includes/footer.php');
    }

    function getlog(){
        return !empty($_SESSION['id']) ? true:false;
    }

    function logg(){
        $login=getlog();
        
        if (!$login) {
            header('Location:login.php');
        }
    }
  
?>