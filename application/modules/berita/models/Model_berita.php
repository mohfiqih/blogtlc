<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_berita extends CI_Model
{
    // TLC News //
    function getDataBerita()
    {
        $query = $this->db->get('tb_berita');
        return $query->result();
    }

    function insertDataBerita($data)
    {
        $this->db->insert('tb_berita', $data);
    }

    function getDataBeritaDetail($id_berita)
    {
        $this->db->where('id_berita', $id_berita);
        $query = $this->db->get('tb_berita');
        return $query->row();
    }
    function updateDataBerita($id_berita, $data)
    {
        $this->db->where('id_berita', $id_berita);
        $this->db->update('tb_berita', $data);
    }

    function deleteDataBerita($id_berita)
    {
        $this->db->where('id_berita', $id_berita);
        $this->db->delete('tb_berita');
    }

    function total_berita()
    {
        return $this->db->get('tb_berita')->num_rows();
    }
}