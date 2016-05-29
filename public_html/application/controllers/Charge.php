<?php
defined('BASEPATH') or exit('No direct file access allowed');


class Charge extends CI_Controller{
    private $stripe_key;

    function __construct(){
        parent::__construct();
        $this->config->load('stripe', TRUE, '');
        $this->stripe_key = $this->config->item('api_key', 'stripe');
    }

    function index(){
      \Stripe\Stripe::setApiKey($this->stripe_key);
       $myCard = array('number' => '4242424242424242', 'exp_month' => 8, 'exp_year' => 2018);
       $charge = \Stripe\Charge::create(array('card' => $myCard, 'amount' => 2000, 'currency' => 'usd'));
       echo $charge;  
    }
}


?>

