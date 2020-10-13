<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class Mahasiswa_Model extends Model{
        
        protected $table = "Mahasiswa_CI4";

        public function getMahasiswa_CI4($id = false){
            if ($id == false){
                return $this->table('Mahasiswa_CI4')
                            ->get()->getResultArray();
                
            }else {
                return $this->table('Mahasiswa_CI4')
                            ->getWhere(['Nim' => $id])
                            ->getResultArray();
            }
        }

        //FUngsi untuk insert data ke DB
        public function insert_data($data){
            return $this->db->table($this->table)->insert($data);
        }

        //Fungsi update 
        public function perbaharui($data){
            return $this->db->table($this->table)->replace($data);
        }

        //Fungsi delete
        public function hapus($nim){
            return $this->db->table($this->table)->where('NIM',$nim)->delete();
        }
    }

?>
