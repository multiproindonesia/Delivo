<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function Index()
    {

        $content = array('title' => 'Delivo | Multipro',
            'content' => 'pages/Home',                                    
        );
        $this->load->view('layout/Wrapper', $content);
    }    

}
