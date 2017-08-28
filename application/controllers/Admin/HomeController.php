<?php
    class HomeController extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
        }
        function index()
        {
            $this->load->view('Admin/Home_v');
        }
    }
       
?>