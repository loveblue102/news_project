<?php
/**
 * Created by PhpStorm.
 * User: AnhTrung
 * Date: 3/25/2019
 * Time: 3:44 PM
 */
function getCI(){
	$c =& get_instance();
	$c->load->library('pagination');
	$c->load->helper('cookie');
	$c->load->library('session');
	return $c;
//	var_dump($c);
}

