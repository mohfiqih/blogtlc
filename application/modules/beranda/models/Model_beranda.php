<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_beranda extends CI_Model
{
    function getDataBeranda()
    {
        $query = $this->db->get('tb_beranda');
        return $query->result();
    }

    function insertDataBeranda($data)
    {
        $this->db->insert('tb_beranda', $data);
    }

    function getDataBerandaDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_beranda');
        return $query->row();
    }
    function updateDataBeranda($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_beranda', $data);
    }

    function deleteDataBeranda($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_beranda');
    }

    // total data dashboard //
    function total_beranda()
    {
        return $this->db->get('tb_beranda')->num_rows();
    }

    function total_berita()
    {
        return $this->db->get('tb_berita')->num_rows();
    }

    function total_cerita()
    {
        return $this->db->get('tb_cerita')->num_rows();
    }

    function total_divisi()
    {
        return $this->db->get('tb_relawan')->num_rows();
    }

    //GALERY//
    function getDataGaleri()
    {
        $query = $this->db->get('tb_galeri');
        return $query->result();
    }

    function insertDataGaleri($data)
    {
        $this->db->insert('tb_galeri', $data);
    }

    function getDataGaleriDetail($id_galeri)
    {
        $this->db->where('id_galeri', $id_galeri);
        $query = $this->db->get('tb_galeri');
        return $query->row();
    }
    function updateDataGaleri($id_galeri, $data)
    {
        $this->db->where('id_galeri', $id_galeri);
        $this->db->update('tb_galeri', $data);
    }

    function deleteDataGaleri($id_galeri)
    {
        $this->db->where('id_galeri', $id_galeri);
        $this->db->delete('tb_galeri');
    }
}