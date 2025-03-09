<?php
defined('BASEPATH') OR exit('No direct script access allowed');  


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author Shamim Hossein Molla
 */
class Login  extends CI_Controller 
{
    private $event_type=array();
     public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('my_helper'));
        
        error_reporting(E_ALL);
        @ini_set('display_errors', 1);
	ini_set('error_reporting', E_ALL);
     
        
    }
    
    public function index()  
    {  
        if(isset($this->session->user))
        {
            redirect('');
        }
	$this->load->helper(array('form', 'url'));
       $vars=array();
        $vars['layout'] = 'login';
        $vars['page_title'] = 'login';
        $vars['body_class'] = 'login';
     	
        $this->fuel->pages->render('blank', $vars);
    }  
    public function process()  
    {  
        $user = $this->input->post('user_name');  
        $pass = md5($this->input->post('password'));  
      	
      	$dbQuery = $this->db->select('*')
        ->from('fuel_event_registration')
        ->where(array(
           
    
          'email'=> $user,
          'password' => $pass
          
       ))->get()->result();	
        
       //echo $this->db->last_query( );exit; 
      
        
        if (!empty($dbQuery))   
        {  
            //declaring session  
            $this->session->set_userdata(array('user'=>$user));  
           redirect(base_url());  
        }  
        else{  
            $this->session->set_flashdata('message', 'Your Account is Invalid');
            redirect("Login"); 
        }  
    }  
    public function logout()  
    {  
        //removing session  
        $this->session->unset_userdata('user');  
        redirect("Login");  
    }  
  
}  

