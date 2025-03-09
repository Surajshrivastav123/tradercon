<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(FUEL_PATH.'libraries/Fuel_layouts.php');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Froms_layout
 *
 * @author swarnasekhar.dhar
 */
class Home_layout extends Fuel_module_layout{
    function fields()
    {
        $fields = parent::fields();
        // PUT YOUR FIELDS HERE...
        return $fields;
    }
    function pre_process($vars)
    {
     // prin_r($vars['layout']);die();
        $ci = & get_instance();
        $vars['speakers_list'] = $ci->db->select('c.*')
        ->from('event_speakers as es')
        ->join('events_master as b', 'b.id=es.event_id', 'left')
        ->join('speakers_master as c', 'c.id=es.speaker_id', 'left')
        ->where(array(
          'b.published'=>'yes',
    
          'es.published'=>'yes'
        ))->get()->result();
        $vars['Offerings'] = $ci->db->select('es.*')
        ->from('event_pricing_plan as es')
        ->join('events_master as b', 'b.id=es.event_id', 'left')
        ->where(array(
          'b.published'=>'yes',
          'es.published'=>'yes'
        ))->get()->result();
        $vars['bloglist'] = $ci->db->select('b.*,c.title as catagory,c.slug as cslug')
        ->from('blogs as b')
        ->join('blogcatagory as c', 'c.id=b.category_id', 'left')
        ->where(array(
          'b.published'=>'yes',
          'c.published'=>'yes'
        ))->order_by("precedence", "asc")
        ->limit(3)->get()->result();
        $vars['banner'] = $ci->db->select('*')
        ->from('banners')
        ->where(array(
          'published'=>'yes',
        ))->get()->row();
         $vars['event'] = $ci->db->select("DATE_FORMAT(`start_date`,'%Y/%m/%d %h:%i:%s') as starton")
        ->from('events_master')
        ->where(array(
          'published'=>'yes',
        ))->get()->row();
     //  
        return $vars;
    }
}
