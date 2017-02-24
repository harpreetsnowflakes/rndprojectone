<?php

Class Inviteusers extends CI_Controller{
    
    public function index()
    {
        $this->load->model('usermodel');
        $this->load->helper('url');
        $variables ="";
        $data['users'] = $this->usermodel->getinviteuser();
        $data['header'] = $this->load->view('templates/header', $variables, TRUE);
        $data['topheader'] = $this->load->view('templates/topheader', $variables, TRUE);
        $data['sidebar'] = $this->load->view('templates/sidebar', $variables, TRUE);
        $data['footer'] = $this->load->view('templates/footer', $variables, TRUE);

        $this->load->view('inviteusers', $data);
        
//        $this->load->view('templates/header');
//        $this->load->view('templates/topheader');
//        $this->load->view('templates/sidebar');
//        $this->load->view('inviteusers',$data);
//        $this->load->view('templates/footer');
        
    }
}


?>

