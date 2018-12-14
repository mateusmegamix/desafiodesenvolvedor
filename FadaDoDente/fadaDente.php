<?php

	class FadaDoDente{
		public static function logado(){
			return isset($_SESSION['login']) ? true : false;
 		}
	}

?>