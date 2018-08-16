<?php
class Admin extends CI_Controller{
    function __construct(){
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
        }
    }
    
    function index(){
        if ($this->session->userdata('role')==='1'){
            $this->load->view('beranda');
        }else{
            echo "Akses Ditolak!!";
        }
    }

    function absensi(){
        if ($this->session->userdata('role')==='1'){
            $this->load->view('absensi');
        }else{
            echo "Akses Ditolak!!";
        }
        
    }

    function lihatpegawai(){
        if ($this->session->userdata('role')==='1'){
            $this->load->view('lihat_pegawai');
        }else{
            echo "Akses Ditolak!!";
        }
    }

    function gajipegawai(){
        if ($this->session->userdata('role')==='1'){
            $this->load->view('gaji_pegawai');
        }else{
            echo "Akses Ditolak!!";
        }
    }
    function halamanlembur(){
        if ($this->session->userdata('role')==='1'){
            $this->load->view('halaman_lembur');
        }else{
            echo "Akses Ditolak!!";
        }
    }
}
?>