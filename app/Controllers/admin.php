<?php
    namespace App\Controllers;
    use App\Models\Modeladmin;

    class admin extends BaseController
    {
        public function index()
        {
            $Modeladmin = new Modeladmin();
            $pager = \Config\Services::pager();

            $data = array (
                'admins' => $Modeladmin->paginate(10, 'admin'),
                'pager' => $Modeladmin->pager
            );

            return view('admin', $data);
        }

        public function update($id)
        {
            $model = new Modeladmin();   
            $data['admin'] = $model->getadminById($id)->getRow();
            echo view('adminedit', $data);
        }

        public function edit()
        {
            $model = new Modeladmin();
            $id = $this->request->getPost('id');
            $data = array (
                'nama'  => $this->request->getPost('nama'),
                'jabatan'  => $this->request->getPost('jabatan'),
                'telepon' => $this->request->getPost('telepon'),
                'alamat' => $this->request->getPost('alamat'),
            );
            $model->updateadmin($data, $id);
            return redirect()->to('/admin');

        }

        public function delete($id)
        {
            $model = new Modeladmin();
            $model->deleteadmin($id);
            return redirect()->to('/admin');
        }

        public function input()
        {
            echo view('admininput');
        }

        public function insert()
        {
            $model = new Modeladmin();
            //$id = $this->request->getPost('id');
            $data = array (
                'nama'  => $this->request->getPost('nama'),
                'nama'  => $this->request->getPost('jabatan'),
                'telepon' => $this->request->getPost('telepon'),
                'alamat' => $this->request->getPost('alamat'),
            );
            $model->insertadmin($data);
            return redirect()->to('/admin');   
        }

    }
    

?>