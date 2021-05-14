<?php
    class MvcController{
        public function getDefaultPage(){
            include "../app/views/template.php";
        }
        public function getPage(){
            if(isset($_GET["action"])){
                $link=$_GET["action"];
            }
            else {
                $link="index";
            }
            $response=Pages::getLink($link);
            include $response;
        }
    }
?>