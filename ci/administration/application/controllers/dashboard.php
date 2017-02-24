<?php

class Dashboard extends CI_Controller{
    
    public function index()
    {
        $this->load->library('session');
        $this->load->helper('url');
        $variables ="";
        $data['header'] = $this->load->view('templates/header', $variables, TRUE);
        $data['topheader'] = $this->load->view('templates/topheader', $variables, TRUE);
        $data['sidebar'] = $this->load->view('templates/sidebar', $variables, TRUE);
        $data['footer'] = $this->load->view('templates/footer', $variables, TRUE);
        $this->load->view('dashboard',$data);
    }
    
}

?>

