<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cerita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_cerita');
    }
    
    public function portal_cerita()
    {
        $data['page'] = 'cerita';
        $queryAllCerita = $this->Model_cerita->getDataCerita();
        $data['queryAllCerita'] = $queryAllCerita;
        $data['jml_cerita'] = $this->Model_cerita->total_cerita();
        $this->load->view('cerita', $data, FALSE);
    }

    public function admin()
    {
        $this->load->view('cerita_admin');
    }

    public function upload()
    {
        $data['page'] = 'upload';
        $queryAllCerita = $this->Model_cerita->getDataCerita();
        $data['queryAllCerita'] = $queryAllCerita;
        $data['jml_cerita'] = $this->Model_cerita->total_cerita();
        $this->load->view('upload_cerita', $data, FALSE);
    }

    //edit admin//
    public function edit_cerita($id_cerita)
    {
        $queryCeritaDetail = $this->Model_cerita->getDataCeritaDetail($id_cerita);
        $DATA = array('queryCrtDetail' => $queryCeritaDetail);
        $this->load->view('edit_cerita', $DATA);
    }
    
    //FungsiTambah admin//
    public function fungsiTambah()
    {        
        $id_cerita = $this->input->post('id_cerita');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $isi_cerita = $this->input->post('isi_cerita');
        $tgl_cerita = $this->input->post('tgl_cerita');

        $ArrInsert = array(
            'id_cerita' => $id_cerita,
            'nama_lengkap' => $nama_lengkap,
            'isi_cerita' => $isi_cerita,
            'tgl_cerita' => $tgl_cerita

        );
        $this->Model_cerita->insertDataCerita($ArrInsert);
        redirect(base_url('cerita/upload'));
    }

    //edit admin//
    public function fungsiEdit()
    {    
        $id_cerita = $this->input->post('id_cerita');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $isi_cerita = $this->input->post('isi_cerita');
        $tgl_cerita = $this->input->post('tgl_cerita');

        $ArrUpdate = array(
            'nama_lengkap' => $nama_lengkap,
            'isi_cerita' => $isi_cerita,
            'tgl_cerita' => $tgl_cerita
        );
        $this->Model_cerita->updateDataCerita($id_cerita, $ArrUpdate);
        redirect(base_url('cerita/upload'));
    }

    //delete konten//
    public function fungsiDelete($id_cerita)
    {
        $this->Model_cerita->deleteDataCerita($id_cerita);
        redirect(base_url('cerita/upload'));
    }
}