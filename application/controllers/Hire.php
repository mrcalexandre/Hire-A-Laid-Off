<?php
    class Hire extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('HBF_Model');
            $this->load->helper('url');
            $this->load->helper('html');
        }


        //fonction pour gérer la page d'accueil
        public function index()
        {
            $this->load->helper('html');
            $data['journalists'] = $this->HBF_Model->getJournalists();
            shuffle($data['journalists']);
            $data['nbjournalists'] = count($data['journalists']);
            $this->load->view('index', $data);
        }
    }
