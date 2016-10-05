<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('admin/header');
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }

    public function cabaimerah() {
        $this->load->view('admin/header');
        $this->load->view('admin/cabaimerah');
        $this->load->view('admin/footer');
    }

    public function distributor() {
        $this->load->view('admin/header');
        $this->load->view('admin/distributor');
        $this->load->view('admin/footer');
    }

    public function perusahaan() {
        $this->load->view('admin/header');
        $this->load->view('admin/perusahaan');
        $this->load->view('admin/footer');
    }

    public function task() {
        $this->load->view('admin/header');
        $this->load->view('admin/task');
        $this->load->view('admin/footer');
    }

    public function forms() {
        $this->load->view('admin/header');
        $this->load->view('admin/form');
        $this->load->view('admin/footer');
    }

    public function tables() {
        $this->load->view('admin/header');
        $this->load->view('admin/table');
        $this->load->view('admin/footer');
    }

    public function charts() {
        $this->load->view('admin/header');
        $this->load->view('admin/charts');
        $this->load->view('admin/footer');
    }

    public function profile() {
        $this->load->view('admin/header');
        $this->load->view('admin/profile');
        $this->load->view('admin/footer');
    }

    public function users() {
        $this->load->view('admin/header');
        $this->load->view('admin/userlist');
        $this->load->view('admin/footer');
    }
    
    public function button() {
        $this->load->view('admin/header');
        $this->load->view('admin/button');
        $this->load->view('admin/footer');
    }


}
