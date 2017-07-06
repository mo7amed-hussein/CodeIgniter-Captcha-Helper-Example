<?php
class CaptchaController extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        
        //load captcha helper 
        $this->load->helper('captcha');
        
        //load session library
        $this->load->library('session');
        
        //load url helper
        $this->load->helper('url');
    }
    
    
}
?>