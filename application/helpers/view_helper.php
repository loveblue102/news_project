<?php
/**
 * Created by PhpStorm.
 * UserModel: AnhTrung
 * Date: 3/16/2019
 * Time: 8:47 AM
 */
use Jenssegers\Blade\Blade;
if(!function_exists('view')){
	function view($view, $data = [] ){
		$path = APPPATH.'views';
		$blade = new Blade($path, $path.'/cache' );
		echo $blade->make($view,$data);
	}
}
