<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
	}
	
	
	/***********************************************/
	/***********************************************/
	
	public function index() {

		$data = array();

		$this->load->view('pages/index',$data);
	}

}
