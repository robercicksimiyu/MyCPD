<?php

/**
 * Controller for Section maintenance
 * 
 * Loads models and views required for admin functions 
 *
 * @author rh
 */
class Section extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }
    
    public function create(){
        /**
         * @todo add code
         */
    }
    
    public function delete($id){
        /**
         * @todo code
         */
    }
    
    public function index(){
        $this->load->view('admin/section');
    }
    
    public function update($id){
        /**
         * @todo add code
         */
    }
}

?>
