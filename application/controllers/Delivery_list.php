<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delivery_list extends CI_Controller {

  public function Index()
    {

        $content = array('title' => 'Delivo | Multipro',
            'content' => 'pages/Delivery_list',  
            'data' => $this->M_delivery->showList(),                                  
        );
        $this->load->view('layout/Wrapper', $content);
    }
    function Create_Delivery()
    {
    	
        $store=$this->input->post('store');
        $address=$this->input->post('address');
        $postcode=$this->input->post('postcode');
        $address=$this->input->post('address');
        $cp=$this->input->post('cp');
        $no=$this->input->post('no');
        $date=$this->input->post('date');
        $poscc=$this->input->post('poscc');
        $note=$this->input->post('note');
        $data=array(
        			'store' 	=>$store,
        			'address'	=>$address,
        			'postcode'	=>$postcode,
        			'address'	=>$address,
        			'cp'		=>$cp,
        			'no'		=>$no,
        			'poscc'		=>$poscc,
        			'date'		=>$date,
        			'note'		=>$note,
         );
         $this->M_delivery->input_data('delorder',$data);        
          $this->session->set_flashdata('messages', '<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
  <strong>Success!</strong> Delivery Order has been Inputed,please proceed to add Items.
</div>');
            redirect('Delivery_list/Delivery_Details'.$no,'refresh');
    }
    function Delivery_Details($no)
    {
    	$where = array('no' => $no);    	
    	$content = array('title' => $no.'| Delivo | Multipro',
            'content' => 'pages/Delivery_Details',  
            'data' => $this->M_delivery->Edit_data($where, 'delorder')->result(),                                  
        );
        $this->load->view('layout/Wrapper', $content);
    }



}
        