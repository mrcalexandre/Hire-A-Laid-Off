<?php
    class HBF_Model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        //fonction pour avoir tous les journalistes
        public function getJournalists()
        {
            $query = $this->db->get('_journalists');

            return $query->result_array();
        }
    }
