<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Ars extends CI_Controller {
	function __construct(){
		parent:: __construct();
	}
	
	function index(){
		//$data['title'] 	= 'PT Asia Resource System - IT Solution Provider';
		//$data['main'] 	= 'front/partial/nav.php';
 		$this->load->view('front/index', $data);
	}
}
?>