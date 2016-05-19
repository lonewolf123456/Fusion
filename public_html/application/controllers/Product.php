<?php




class Product extends CI_Controller{
     private $stripe_key;

    function __construct(){
        parent::__construct();

        $this->config->load('stripe', TRUE, '');

        $this->stripe_key = $this->config->item('api_key', 'stripe');
    }

    function index(){

        $this->load->view('header');
        $this->load->view('product');

    }

    function get($limit=20){

         header('Content-Type: application/json');

       \Stripe\Stripe::setApiKey($this->stripe_key);

       $products = \Stripe\Product::all(array("limit" => $limit, "active"=> TRUE));
       
       $products = preg_replace('/.+?\:/i','', $products, 1);

       echo $products;
        
    }
}



?>


