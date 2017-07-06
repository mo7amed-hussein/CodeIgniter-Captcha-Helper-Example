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
    
    
    /**
     * init captcha generator and store generated image in images folder
     */
      function initCaptcha()
     {
        //Only the img_path and img_url are required. rest is optional it will use default 
        $values=array(
        //If a word is not supplied, the function will generate a random ASCII string
        'word'=>'',
        'word_lenght'=>8,
        'img_path'=>'./images/',
        'img_url'=>base_url().'images/',
        'font_path' => base_url() . 'system/fonts/texb.ttf',
        'img_width' => '150',
        'img_height' => 50,
        'img_id'=>'captchaId',
        'expiration' => 3600 ,//(Seconds))how long an image will remain in the captcha folder before it will be deleted.
         // White background and border, black text and red grid
        'color'=>array(
        'backgroud'=>array(255,255,255),
        'border'=>array(255,255,255),
        'text'=>array(0,0,0),
        'grid'=>array(255,40,40)
        )
        );
        
        $data = create_captcha($values);
        $this->session->set_userdata('captchaWord',$data['word']);
        return $data;
     }
    
    
}
?>