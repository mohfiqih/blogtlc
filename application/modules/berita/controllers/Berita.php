<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_berita');
    }

    // berita admin //
    public function admin()
    {
        $this->load->view('berita_admin');
    }

    // berita admin //
    public function portal_berita()
    {
        $data['page'] = 'berita';
        $queryAllBerita = $this->Model_berita->getDataBerita();
        $data['queryAllBerita'] = $queryAllBerita;
        $this->load->view('berita', $data, FALSE);
    }

    // ADMIN NEWS //
    public function upload()
    {
        $data['page'] = 'upload';
        $queryAllBerita = $this->Model_berita->getDataBerita();
        $data['queryAllBerita'] = $queryAllBerita;
        $data['jml_berita'] = $this->Model_berita->total_berita();
        $this->load->view('upload_admin', $data, FALSE);
    }
    
    //edit admin//
    public function edit_berita($id_berita)
    {
        $queryBeritaDetail = $this->Model_berita->getDataBeritaDetail($id_berita);
        $DATA = array('queryBrtDetail' => $queryBeritaDetail);
        $this->load->view('edit_berita', $DATA);
    }
    
    //FungsiTambah admin//
    public function fungsiTambah()
    {        
        $foto_berita = $_FILES['foto_berita'];
        if ($foto_berita = '') {
        } else {
            $config['upload_path'] = './assets/foto_berita';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_berita')) {
                echo "Uploade Gagal";
                die();
            } else {
                $foto_berita = $this->upload->data('file_name');
            }
        }
        
        $id_berita = $this->input->post('id_berita');
        $kategori = $this->input->post('kategori');
        $judul_berita = $this->input->post('judul_berita');
        $isi_berita = $this->input->post('isi_berita');
        $tgl_berita = $this->input->post('tgl_berita');
        $detail_berita = $this->input->post('detail_berita');

        $ArrInsert = array(
            'foto_berita' => $foto_berita,
            'id_berita' => $id_berita,
            'kategori' => $kategori,
            'judul_berita' => $judul_berita,
            'isi_berita' => $isi_berita,
            'tgl_berita' => $tgl_berita,
            'detail_berita' => $detail_berita

        );
        $this->Model_berita->insertDataBerita($ArrInsert);
        redirect(base_url('berita/upload'));
    }

    //edit admin//
    public function fungsiEdit()
    {    
        $foto_berita = $_FILES['foto_berita'];
        if ($foto_berita = '') {
        } else {
            $config['upload_path'] = './assets/foto_berita';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_berita')) {
                echo "Uploade Gagal";
                die();
            } else {
                $foto_berita = $this->upload->data('file_name');
            }
        }
        
        $id_berita = $this->input->post('id_berita');
        $kategori = $this->input->post('kategori');
        $judul_berita = $this->input->post('judul_berita');
        $isi_berita = $this->input->post('isi_berita');
        $tgl_berita = $this->input->post('tgl_berita');
        $detail_berita = $this->input->post('detail_berita');

        $ArrUpdate = array(
            'foto_berita' => $foto_berita,
            'kategori' => $kategori,
            'judul_berita' => $judul_berita,
            'isi_berita' => $isi_berita,
            'tgl_berita' => $tgl_berita,
            'detail_berita' => $detail_berita
        );
        $this->Model_berita->updateDataBerita($id_berita, $ArrUpdate);
        redirect(base_url('berita/upload'));
    }

    //delete konten//
    public function fungsiDelete($id_berita)
    {
        $this->Model_berita->deleteDataBerita($id_berita);
        redirect(base_url('berita/upload'));
    }
}