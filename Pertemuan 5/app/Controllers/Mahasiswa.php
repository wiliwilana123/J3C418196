<?php 
	
	namespace App\Controllers;

	use CodeIgniter\Controllers;
	use App\Models\Mahasiswa_Model;

class Mahasiswa extends BaseController
{

	public function __construct(){
		//Deklarasi class Mahasiswa_Model dengan $this->mahasiswa
		$this->mahasiswa = new Mahasiswa_Model();
		/* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
	}

	//Fungsi praktikum ke-4
	public function ucapan(){
        //echo "Selamat malam";
        //return view("hello");
        //bisa mengembalikan lebih dari 1
        //$data['n']=$this->request->getGet('nama');
        $data['n']=$this->request->getPost('nama');
        echo view("Mahasiswa/hello",$data);
    }

	public function Index()
	{
		$data['mahasiswa'] = $this->mahasiswa->getMahasiswa_CI4();
		echo view('Mahasiswa/index', $data);
	}

	//Fungsi menampilkan halaman create
	public function create(){
		echo view('Mahasiswa/create');
	}

	//Fungsi untuk menyimpan data ke DB
	public function store(){
		
		//Mengambil nilai value dri form dgn POST
		$nim = $this->request->getPost('nim');
		$nama = $this->request->getPost('nama');
		$jk = $this->request->getPost('jenis_kelamin');
		$agama = $this->request->getPost('agama');
		$olahraga = $this->request->getPost('olahraga-favorit');

		//Membuat array untuk proses insert ke DB
		$data = [
			'NIM'	=> $nim,
			'Nama'	=> $nama,
			'Agama'	=> $agama,
			'Olahraga_Favorit'	=> $olahraga,
			'Jenis_Kelamin'		=> $jk
		];

		//var_dump($data);

		//Proses insert ke DB
		$store = $this->mahasiswa->insert_data($data);

		if($store){
			//Deklarasi session flashdata dengan tipe sukses
			session()->setFlashdata('success', 'Berhasil menambahkan data');
			return redirect()->to(base_url('Mahasiswa'));
		}else{
			echo "gagal";
		}
	}

	public function Edit($nim){
		$data['mahasiswa'] = $this->mahasiswa->getMahasiswa_CI4($nim);
		//var_dump($data);
		echo view('Mahasiswa/edit', $data);
	}

	public function Update(){
		
		//Mengambil nilai dari form
		$nim = $this->request->getPost('nim_hidden');
		$nama = $this->request->getPost('nama');
		$agama = $this->request->getPost('agama');
		$jk = $this->request->getPost('jenis-kelamin');
		$olahraga = $this->request->getPost('olahraga-favorit');

		//Membuat array untuk proses update
		$data = [
			'NIM' 		=> $nim,
			'Nama'		=> $nama,
			'Agama'		=> $agama,
			'Olahraga_Favorit' => $olahraga,
			'Jenis_Kelamin'	=> $jk
		];

		//var_dump($data);

		$result = $this->mahasiswa->perbaharui($data);

		if($result){
			//Deklarasi session flashdata dengan tipe sukses
			session()->setFlashdata('success', 'Berhasil menambahkan data');
			return redirect()->to(base_url('Mahasiswa'));
		}else{
			echo "gagal";
		}
	}

	public function Delete($nim){
		
		$result = $this->mahasiswa->hapus($nim);

		if($result){
			//Deklarasi session flashdata dengan tipe sukses
			session()->setFlashdata('success', 'Berhasil menambahkan data');
			return redirect()->to(base_url('Mahasiswa'));
		}else{
			echo "gagal";
		}
	}

	//--------------------------------------------------------------------

}