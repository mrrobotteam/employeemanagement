<?php
    class Navigation extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
        }
        function attendance()
        {
            $this->load->view('pages/Attendance_v');
        }
    }
       
?>