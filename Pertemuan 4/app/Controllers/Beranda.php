<?php

    namespace App\Controllers;

    use CodeIgniter\Controllers;
    use App\Models\Mahasiswa_Model;


    class Beranda extends BaseController{

        //PRAKTIKUM 4
        public function index(){
            echo 'pabw';
        }

	    public function ucapan(){
            //echo "Selamat malam";
            //return view("hello");
            //bisa mengembalikan lebih dari 1
            //$data['n']=$this->request->getGet('nama');
            $data['n']=$this->request->getPost('nama');
            echo view("hello",$data);
        }

        //PRAKTIKUM 5
        public function index_pin(){
            echo view('beranda_pin');
        }
    
    }

?>