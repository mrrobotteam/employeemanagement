<?php
    class LoginController extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            echo "x";
        }

        function index()
        {
            $this->load->view('Auth/Login_v');
        }
    }
          


?>