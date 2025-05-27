<?php
    Class Navigasi extends CI_Controller{
        public function index(){
            $data['segment3'] = $this->uri->segment('3');
            $data['segment4'] = $this->uri->segment('4');
            $data['segment5'] = $this->uri->segment('5');
            $data['segment6'] = $this->uri->segment('6');
            
            return $this->load->view('uri');
        }

        public function data() {
            echo "Mahasiswa 1 bernama Anton Ego" . $this->uri->segment('3'). "<br>";
            echo "Mahasiswa 2 bernama Toni" . $this->uri->segment('4'). "<br>";
            echo "Mahasiswa 3 bernama Faisa" . $this->uri->segment('5'). "<br>";
            echo "Mahasiswa 4 bernama Indah" . $this->uri->segment('6'). "<br>";
        }
    }
?>