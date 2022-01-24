<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_cerita extends CI_Model
{
    // TLC News //
    function getDataCerita()
    {
        $query = $this->db->get('tb_cerita');
        return $query->result();
    }

    function insertDataCerita($data)
    {
        $this->db->insert('tb_cerita', $data);
    }

    function getDataCeritaDetail($id_cerita)
    {
        $this->db->where('id_cerita', $id_cerita);
        $query = $this->db->get('tb_cerita');
        return $query->row();
    }
    function updateDataCerita($id_cerita, $data)
    {
        $this->db->where('id_cerita', $id_cerita);
        $this->db->update('tb_cerita', $data);
    }

    function deleteDataCerita($id_cerita)
    {
        $this->db->where('id_cerita', $id_cerita);
        $this->db->delete('tb_cerita');
    }

    function total_cerita()
    {
        return $this->db->get('tb_cerita')->num_rows();
    }
}