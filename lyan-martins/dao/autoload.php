<?php 

spl_autoload_register(function($class_name){

	$file_name= "dao".DIRECTORY_SEPARATOR."Modal".DIRECTORY_SEPARATOR.$class_name.".php";
	
	if (file_exists($file_name)) {

		require_once($file_name);

	}else{

		$file_name= "..".DIRECTORY_SEPARATOR."dao".DIRECTORY_SEPARATOR."Modal".DIRECTORY_SEPARATOR.$class_name.".php";

		if (file_exists($file_name)) {

			require_once($file_name);
			
		}
	}
	
});
