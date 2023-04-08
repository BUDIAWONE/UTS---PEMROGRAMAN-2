<?php namespace App\Models;

use CodeIgniter\Model;

class Modeldosen extends Model
{
    //table name
    protected $table = "dosen";

    //allowed fields
    protected $allowedFields = 
    [
        'nama',
        'jabatan',
        'telepon',
        'alamat'
    ];

    public function getdosen()
    {
        return $this->findAll();
    }


    public function getdosetById($id = false)
    {
        if($id === false)
        {
            return $this->findAll();
        }
        else
        {
            return $this->getWhere(['id' => $id]);
        }   
    }
	
	public function updatdosen($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }
}