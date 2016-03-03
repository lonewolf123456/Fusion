<?php
    
defined('BASEPATH') or exit('No direct script access allowd');


class Edit extends CI_Controller{

    function __construct(){
        $this->load->library('session');
    }
    
function index(){
    $this->load->view('header');
    $this->load->view('edit_login');
    $this->load->view('footer');
}

function edit_login(){
    
}
}


?>

