<?php 
class Pages{	
	public static function getLink($action){
		if($action == "index" || $action == "home"){
			$module =  "../app/views/pages/home.php";		
		}
		else if($action == "services"){
			$module =  "../app/views/pages/services.php";		
		}
		else if($action == "about"){
			$module =  "../app/views/pages/about.php";		
		}
		else if($action == "gallery"){
			$module =  "../app/views/pages/gallery.php";		
		}
		else{
			$module =  "../app/views/pages/home.php";
		}		
		return $module;
	}
}
