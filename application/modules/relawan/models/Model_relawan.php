<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_relawan extends CI_Model
{
    function getDataRelawan()
    {
        $query = $this->db->get('tb_relawan');
        return $query->result();
    }

    function insertDataRelawan($data)
    {
        $this->db->insert('tb_relawan', $data);
    }

    function getDataRelawanDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_relawan');
        return $query->row();
    }
    function updateDataRelawan($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_relawan', $data);
    }

    function deleteDataRelawan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_relawan');
    }

    // total data //
    function total_divisi()
    {
        return $this->db->get('tb_relawan')->num_rows();
    }
}