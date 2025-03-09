<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author  
 */
class home  extends CI_Controller 
{
    private $event_type=array();
     public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('my_helper'));
        
        error_reporting(E_ALL);
        @ini_set('display_errors', 1);
	ini_set('error_reporting', E_ALL);
      //  $procidu=   $this->uri->segment(2) ;
      // if($procidu != ''){if(!method_exists($this,$procidu)) { redirect(base_url('404'));  }}
        
    }
	
  /*  function index()
    {
        $vars=array();
        $vars['layout'] = 'home';
        $vars['page_title'] = 'Home';
        $vars['body_class'] = 'home';
        $vars['speakers_list'] = $this->db->select('c.*')
        ->from('event_speakers as es')
        ->join('events_master as b', 'b.id=es.event_id', 'left')
        ->join('speakers_master as c', 'c.id=es.speaker_id', 'left')
        ->where(array(
          'b.published'=>'yes',
    
          'es.published'=>'yes'
        ))->get()->result();
        $vars['Offerings'] = $this->db->select('es.*')
        ->from('event_pricing_plan as es')
        ->join('events_master as b', 'b.id=es.event_id', 'left')
        ->where(array(
          'b.published'=>'yes',
          'es.published'=>'yes'
        ))->get()->result();
        $vars['bloglist'] = $this->db->select('b.*,c.title as catagory,c.slug as cslug')
        ->from('blogs as b')
        ->join('blogcatagory as c', 'c.id=b.category_id', 'left')
        ->where(array(
          'b.published'=>'yes',
          'c.published'=>'yes'
        ))->order_by("precedence", "asc")
        ->limit(3)->get()->result();
        $vars['banner'] = $this->db->select('*')
        ->from('banners')
        ->where(array(
          'published'=>'yes',
        ))->get()->row();
        
        $this->fuel->pages->render('home', $vars);

    }*/

    function speakers()
    {
        $vars=array();
        $vars['layout'] = 'speakers';
        $vars['page_title'] = 'Event Speakers';
        $vars['body_class'] = 'Event Speakers';
        $vars['speakers_list'] = $this->db->select('c.*')
        ->from('event_speakers as es')
        ->join('events_master as b', 'b.id=es.event_id', 'left')
        ->join('speakers_master as c', 'c.id=es.speaker_id', 'left')
        ->where(array(
          'b.published'=>'yes',
          'c.is_active'=>'yes',
          'es.published'=>'yes'
        ))->get()->result();
      //  echo $this->db->last_query( );
        $this->fuel->pages->render('blank', $vars);

    }
    function advisors()
    {
        $vars=array();
        $vars['layout'] = 'advisors';
        $vars['page_title'] = 'Advisors';
        $vars['body_class'] = 'advisors';
        $vars['speakers_list'] = $this->db->select('a.*')
        ->from('advisors as a')
        ->where(array(
     
          'a.is_active'=>'yes',
         
        ))->get()->result();
      //  echo $this->db->last_query( );
        $this->fuel->pages->render('blank', $vars);

    }
    function advisor($id)
    {
      
        $vars=array();
        $vars['layout'] = 'advisor';
        $vars['page_title'] = 'Advisor';
        $vars['body_class'] = 'Advisor';
        $vars['speaker'] = $this->db->select('*')
        ->from('advisors')
        ->where(array(
           
    
          'id'=> $id
        ))->get()->row();
        $this->fuel->pages->render('blank', $vars);

    }
    function profile($id)
    {
      
        $vars=array();
        $vars['layout'] = 'profile';
        $vars['page_title'] = 'Event Speakers';
        $vars['body_class'] = 'Event Speakers';
        $vars['speaker'] = $this->db->select('*')
        ->from('speakers_master')
        ->where(array(
           
    
          'id'=> $id
        ))->get()->row();
        $this->fuel->pages->render('blank', $vars);

    }

    function sponsors()
    {
        $vars=array();
        $vars['layout'] = 'sponsors';
        $vars['page_title'] = 'Event Sponsors';
        $vars['body_class'] = 'Event Sponsors';
        $vars['sponsors_list'] = $this->db->select('c.*')
        ->from('event_sponsors as es')
        ->join('events_master as b', 'b.id=es.event_id', 'left')
        ->join('sponsors_master as c', 'c.id=es.sponsor_id', 'left')
        ->where(array(
          'b.published'=>'yes',
    
          'es.published'=>'yes'
        ))->get()->result();
        $vars['event'] = $this->db->select('*')
        ->from('events_master as b')->where(array(
          'b.published'=>'yes',
        ))->get()->row();
      //  echo $this->db->last_query( );
        $this->fuel->pages->render('blank', $vars);

    }

    function prices()
    {
        $vars=array();
        $vars['layout'] = 'prices';
        $vars['page_title'] = 'Pricing & Offerings Plan ';
        $vars['body_class'] = 'Pricing & Offerings Plan ';
        $vars['Offerings'] = $this->db->select('es.*')
        ->from('event_pricing_plan as es')
        ->join('events_master as b', 'b.id=es.event_id', 'left')
        ->where(array(
          'b.published'=>'yes',
          'es.published'=>'yes'
        ))->get()->result();
       //  echo $this->db->last_query( );
        $this->fuel->pages->render('blank', $vars);

    }

    function registration($plan_id=0)
    {

      $plan_id=intval($plan_id);
       if(empty($plan_id)) { redirect('prices'); }
       
    	  $vars=array();
        $vars['event'] = $this->db->select('p.title_top,p.title as ptitle,p.price, 
        p.payment_link,e.*')
        ->from('event_pricing_plan as p')
        ->join('events_master as e','e.id=p.event_id')
        ->where(array(
          'e.published'=>'yes',
          'p.id'=> $plan_id
        ))->get()->row();
        if(!isset($vars['event']->id))  {  redirect('prices');  }
        $this->load->helper(array('form', 'url'));
        $vars['layout'] = 'registration';
        $vars['page_title'] = 'Event Registration';
        $vars['body_class'] = 'Event Registration';
        $time=date("Y-m-d H:i:s", time());
       $pass= $this->generateRandomString(9);
        $registration=array(
          'plan_id'=>$plan_id,
          'date_added'=>$time,
          'date_updated'=>$time,
          'status'=> 'active',
          'password'=> md5($pass),
        );
        if(isset($_POST['first_name']))
        {
          foreach($_POST as $key=>$val)
          {
              $registration[$key]=  $this->input->post($key);
              $registration[$key]=(is_array($registration[$key]))?json_encode($registration[$key]):$registration[$key];
          }
         // print_r($registration);die();
          if($this->db->insert('event_registration',$registration))
          {
            $params=array();
            $params['from']='noreply@'.$_SERVER['HTTP_HOST'];
            $params['to']=$registration['email'];
            $params['subject']='Delegate Registration Confirmation';
            $params['message']= "your password is ". $pass ."<br>";
             $params['message']= "You successfully registered with us. <br> Your selected plan is : ".$vars['event']->price;
            $params['from_name']=$_SERVER['HTTP_HOST'];
            $params['use_dev_mode']=1;
            $params['mailtype']='html';
            $this->notify($params); 
           
             $this->session->set_flashdata('registered','success');
              redirect( $vars['event']->payment_link);
          }
          else{
            $this->session->set_flashdata('registered','fail');
            
          }
        }
        

       
        $this->fuel->pages->render('blank', $vars);

    }
    function notify($params)
    {
        $this->load->library('email');
        $config=array();
       // $config['protocol'] = 'sendmail';
       // $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['priority'] = 1;
        $config['mailtype'] = 'html';
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'mail.tradersconvention.com';
        $config['smtp_user'] = 'info@tradersconvention.com';
        $config['smtp_pass'] = 'Fnt#32@uTre';
        $config['smtp_port'] = 465;
        $this->email->clear(); 
        $this->email->initialize($config);
        $this->email->from('info@tradersconvention.com', $params['from_name']);
        $this->email->to($params['to']); 
        if(isset($params['cc'])){$this->email->cc($params['cc']);} 
        if(isset($params['bcc'])){$this->email->bcc($params['bcc']);}
        $this->email->subject($params['subject']);
        $this->email->message($params['message']);	
        $status=$this->email->send();
     //     echo $this->email->print_debugger();
        return $status;
    }
    function generateRandomString($length = 10) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }
  function blogs()
  {
      $vars=array();
      $vars['layout'] = 'blogs';
      $vars['page_title'] = 'Blogs';
      $vars['body_class'] = 'Blogs';
      $this->load->model(array('BlogCatagory_model','Blogs_model'));
   
      $vars['bloglist'] = $this->db->select('b.*,c.title as catagory,c.slug as cslug')
        ->from('blogs as b')
        ->join('blogcatagory as c', 'c.id=b.category_id', 'left')
        ->where(array(
          'b.published'=>'yes',
          'c.published'=>'yes'
        ))->order_by("precedence", "asc")
        ->limit(3)->offset(0)->get()->result();
      $this->fuel->pages->render('blank', $vars);
  }
  function blog($slag)
  {
      $vars=array();
      $vars['layout'] = 'blog';
      $vars['page_title'] = 'Blog';
      $vars['body_class'] = 'Blog';
      $this->load->model(array('BlogCatagory_model','Blogs_model'));
      $vars['blogdetails'] = $this->db->select('b.*,c.title as catagory,c.slug as cslug')
      ->from('blogs as b')
      ->join('blogcatagory as c', 'c.id=b.category_id', 'left')
      ->where(array(
        'b.slug'=>$slag,
        'b.published'=>'yes',
        'c.published'=>'yes'
      ))->order_by('id','desc')->get()->row();
//print_r($vars['blogdetails']);
     //  echo $this->db->last_query( );
      $this->fuel->pages->render('blog', $vars);

  }
}