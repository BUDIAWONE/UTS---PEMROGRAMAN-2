<?php
    namespace App\Controllers;
    use App\Models\Modeldosen;

    class dosen extends BaseController
    {
        public function index()
        {
            $Modeldosen = new Modeldosen();
            $pager = \Config\Services::pager();

            $data = array (
                'dosens' => $Modeldosen->paginate(10, 'dosen'),
                'pager' => $Modeldosen->pager
            );

            return view('dosen', $data);
        }

        public function update($id)
        {
            $model = new Modeldosen();   
            $data['dosen'] = $model->getdosenById($id)->getRow();
            echo view('dosenedit', $data);
        }

        public function edit()
        {
            $model = new Modeldosen();
            $id = $this->request->getPost('id');
            $data = array (
                'nama'  => $this->request->getPost('nama'),
                'telepon' => $this->request->getPost('telepon'),
                'alamat' => $this->request->getPost('alamat'),
            );
            $model->updatedosen($data, $id);
            return redirect()->to('/dosen');

        }

        public function delete($id)
        {
            $model = new Modeldosen();
            $model->deletedosen($id);
            return redirect()->to('/dosen');
        }

        public function input()
        {
            echo view('doseninput');
        }

        public function insert()
        {
            $model = new Modeldosen();
            //$id = $this->request->getPost('id');
            $data = array (
                'nama'  => $this->request->getPost('nama'),
                'telepon' => $this->request->getPost('telepon'),
                'alamat' => $this->request->getPost('alamat'),
            );
            $model->insertdosen($data);
            return redirect()->to('/dosen');   
        }

    }
    

?>