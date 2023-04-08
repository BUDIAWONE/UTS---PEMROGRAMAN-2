<?php
    namespace App\Controllers;
    use App\Models\Modelmahasiswa;

    class mahasiswa extends BaseController
    {
        public function index()
        {
            $Modelmahasiswa = new Modelmahasiswa();
            $pager = \Config\Services::pager();

            $data = array (
                'mahasiswas' => $Modelmahasiswa->paginate(10, 'mahasiswa'),
                'pager' => $Modelmahasiswa->pager
            );

            return view('mahasiswa', $data);
        }

        public function update($id)
        {
            $model = new Modelmahasiswa();   
            $data['mahasiswa'] = $model->getmahasiswaById($id)->getRow();
            echo view('mahasiswaedit', $data);
        }

        public function edit()
        {
            $model = new Modelmahasiswa();
            $id = $this->request->getPost('id');
            $data = array (
                'nama'  => $this->request->getPost('nama'),
                'nim'  => $this->request->getPost('nim'),
                'telepon' => $this->request->getPost('telepon'),
                'alamat' => $this->request->getPost('alamat'),
            );
            $model->updatemahasiswa($data, $id);
            return redirect()->to('/mahasiswa');

        }

        public function delete($id)
        {
            $model = new Modelmahasiswa();
            $model->deletemahasiswa($id);
            return redirect()->to('/mahasiswa');
        }

        public function input()
        {
            echo view('mahasiswainput');
        }

        public function insert()
        {
            $model = new Modelmahasiswa();
            //$id = $this->request->getPost('id');
            $data = array (
                'nama'  => $this->request->getPost('nama'),
                'nim'  => $this->request->getPost('nim'),
                'telepon' => $this->request->getPost('telepon'),
                'alamat' => $this->request->getPost('alamat'),
            );
            $model->insertmahasiswa($data);
            return redirect()->to('/mahasiswa');   
        }

    }
    

?>