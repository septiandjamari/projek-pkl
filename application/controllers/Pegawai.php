<?php
class Pegawai extends CI_Controller{
    function __construct(){
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
        }
    }

    
    function index(){
        $this->load->view('beranda');    
    }
}
?>