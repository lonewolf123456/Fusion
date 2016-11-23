<?php
defined('BASEPATH') or exit('No direct file access allowed');

class Cart extends CI_Controller{
	
	 private $stripe_key;

     function __construct(){
        parent::__construct();
        $this->config->load('stripe', TRUE, '');
        $this->stripe_key = $this->config->item('api_key', 'stripe');
    }
	
	
	function index(){
		$this->load->view('header');
	}
	
	
}








?>