<?php 
    const base_url = 'http://localhost/pagweb/';
    const telcel = "62345076";
    const correo = "tierradesabores@zambrana.com";
    const lugar = "El Alto - Bolivia";

    function headerAdmin(){
        $view_header ="Template/Header.php";
        require_once ($view_header);
    }
    function headerAdmin1(){
        $view_header ="Template/Header1.php";
        require_once ($view_header);
    }

    function footerAdmin(){
        $view_footer = "Template/Footer.php";
        require_once ($view_footer);
    }

    function navAdmin(){
        $view_nav = "Template/nav.php";
        require_once ($view_nav);
    }

    function base_url(){
        return base_url;
    }

    function media(){
        return base_url .'Assets/';
    }

    function tel_cel(){
        return telcel;
        
    }

    function email(){
        return correo;
        
    }
     function lugar(){
        return lugar;
     }
    
?>