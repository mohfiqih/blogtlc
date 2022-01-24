<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Relawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_relawan');
    }
    
    public function portal_relawan()
    {
        $data['page'] = 'relawan';
        $queryAllUtama = $this->Model_relawan->getDataRelawan();
        $data['queryAllUtama'] = $queryAllUtama;
        $this->load->view('relawan', $data, FALSE);
    }

    public function admin()
    {
        $data['page'] = 'admin';
        $queryAllRelawan = $this->Model_relawan->getDataRelawan();
        $data['queryAllRelawan'] = $queryAllRelawan;
        $data['jml_divisi'] = $this->Model_relawan->total_divisi();
        $this->load->view('relawan_admin', $data, FALSE);
    }

    //edit admin//
    public function edit_relawan($id)
    {
        $queryRelawanDetail = $this->Model_relawan->getDataRelawanDetail($id);
        $DATA = array('queryRelDetail' => $queryRelawanDetail);
        $this->load->view('edit_relawan', $DATA);
    }

    public function fungsiTambah()
    {
        $id = $this->input->post('id');
        $divisi = $this->input->post('divisi');
        $ketua = $this->input->post('ketua');
        $info = $this->input->post('info');

        $ArrInsert = array(
            'id' => $id,
            'divisi' => $divisi,
            'ketua' => $ketua,
            'info' => $info

        );
        $this->Model_relawan->insertDataRelawan($ArrInsert);
        redirect(base_url('relawan/admin'));
    }

//edit admin//
public function fungsiEdit()
{
    $id = $this->input->post('id');
    $divisi = $this->input->post('divisi');
    $ketua = $this->input->post('ketua');
    $info = $this->input->post('info');

    $ArrUpdate = array(
        'divisi' => $divisi,
        'ketua' => $ketua,
        'info' => $info,
    );
    $this->Model_relawan->updateDataRelawan($id, $ArrUpdate);
    redirect(base_url('relawan/admin'));
}

//delete konten//
public function fungsiDelete($id)
{
    $this->Model_relawan->deleteDataRelawan($id);
    redirect(base_url('relawan/admin'));
}
}