<?php

namespace App\Models\Umum;

use CodeIgniter\Model;

class BerandaModel extends Model
{
    function getData()
    {
        $query = $this->db->query("SELECT * FROM comics AS c");
        return  $query->getResult();
    }
    function addData($data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('comics');
        return $builder->insert($data);
    }
    function editData($id)
    {
        $query = $this->db->query("SELECT * FROM comics AS c WHERE c.id=?",array($id));
        return  $query->getResult();
    }
    function updateData($id, $data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('comics');
        $builder->where('id',$id);
        return $builder->update($data);
    }
    function hapusData($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('comics');
        $builder->where('id',$id);
        return $builder->delete();
    }
}
