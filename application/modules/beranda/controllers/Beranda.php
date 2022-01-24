<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_beranda');
    }

    public function utama()
    {
        $data['page'] = 'utama';
        $queryAllUtama = $this->Model_beranda->getDataBeranda();
        $queryAllGaleri = $this->Model_beranda->getDataGaleri();
        $data['queryAllUtama'] = $queryAllUtama;
        $data['queryAllGaleri'] = $queryAllGaleri;
        $this->load->view('utama', $data, FALSE);
    }

    public function admin()
    {
        $data['page'] = 'admin';
        $queryAllBeranda = $this->Model_beranda->getDataBeranda();
        $data['queryAllBeranda'] = $queryAllBeranda;
        $data['jml_beranda'] = $this->Model_beranda->total_beranda();
        $this->load->view('beranda_admin', $data, FALSE);
    }

    public function galeri()
    {
        $data['page'] = 'galeri';
        $queryAllGaleri = $this->Model_beranda->getDataGaleri();
        $data['queryAllGaleri'] = $queryAllGaleri;
        $this->load->view('galeri', $data, FALSE);
    }

    public function dashboard()
    {
        $data['jml_beranda'] = $this->Model_beranda->total_beranda();
        $data['jml_berita'] = $this->Model_beranda->total_berita();
        $data['jml_cerita'] = $this->Model_beranda->total_cerita();
        $data['jml_divisi'] = $this->Model_beranda->total_divisi();
        $this->load->view('dashboard', $data, FALSE);
    }

    //edit admin//
    public function edit_beranda($id)
    {
        $queryBerandaDetail = $this->Model_beranda->getDataBerandaDetail($id);
        $DATA = array('queryBrdDetail' => $queryBerandaDetail);
        $this->load->view('edit_beranda', $DATA);
    }

    //edit galeri//
    public function edit_galeri($id_galeri)
    {
        $queryGaleriDetail = $this->Model_beranda->getDataGaleriDetail($id_galeri);
        $DATA = array('queryGlrDetail' => $queryGaleriDetail);
        $this->load->view('edit_galeri', $DATA);
    }

    //FungsiTambah admin//
    public function fungsiTambah()
    {
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Uploade Gagal";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $more = $this->input->post('more');

        $ArrInsert = array(
            'foto' => $foto,
            'id' => $id,
            'judul' => $judul,
            'isi' => $isi,
            'more' => $more

        );
        $this->Model_beranda->insertDataBeranda($ArrInsert);
        redirect(base_url('beranda/admin'));
    }

    //edit admin//
    public function fungsiEdit()
    {
        $id = $this->input->post('id');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/foto';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Uploade Gagal";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $more = $this->input->post('more');

        $ArrUpdate = array(
            'foto' => $foto,
            'judul' => $judul,
            'isi' => $isi,
            'more' => $more,
        );
        $this->Model_beranda->updateDataBeranda($id, $ArrUpdate);
        redirect(base_url('beranda/admin'));
    }

    //delete konten//
    public function fungsiDelete($id)
    {
        $this->Model_beranda->deleteDataBeranda($id);
        redirect(base_url('beranda/admin'));
    }
 
    function logout()
    {
        $this->session->sess_destroy($this->session->userdata('data_login'));
        redirect('beranda/utama', 'refresh');
    }


    //FungsiTambah Galeri//
    public function fungsiTambahGaleri()
    {
        $galeri_tlc = $_FILES['galeri_tlc'];
        if ($galeri_tlc  = '') {
        } else {
            $config['upload_path'] = './assets/galeri_tlc';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('galeri_tlc')) {
                echo "Uploade Gagal";
                die();
            } else {
                $galeri_tlc  = $this->upload->data('file_name');
            }
        }

        $id_galeri = $this->input->post('id_galeri');
        $nama_kegiatan = $this->input->post('nama_kegiatan');

        $ArrInsert = array(
            'galeri_tlc ' => $galeri_tlc ,
            'id_galeri' => $id_galeri,
            'nama_kegiatan' => $nama_kegiatan

        );
        $this->Model_beranda->insertDataGaleri($ArrInsert);
        redirect(base_url('beranda/galeri'));
    }

    //edit admin//
    public function fungsiEditGaleri()
    {
        $galeri_tlc = $_FILES['galeri_tlc'];
        if ($galeri_tlc  = '') {
        } else {
            $config['upload_path'] = './assets/galeri_tlc';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('galeri_tlc')) {
                echo "Uploade Gagal";
                die();
            } else {
                $galeri_tlc  = $this->upload->data('file_name');
            }
        }

        $id_galeri = $this->input->post('id_galeri');
        $nama_kegiatan = $this->input->post('nama_kegiatan');

        $ArrUpdate = array(
            'galeri_tlc ' => $galeri_tlc ,
            'id_galeri' => $id_galeri,
            'nama_kegiatan' => $nama_kegiatan
        );
        $this->Model_beranda->updateDataGaleri($id_galeri, $ArrUpdate);
        redirect(base_url('beranda/galeri'));
    }

     //delete galeri//
     public function fungsiDeleteGaleri($id_galeri)
     {
         $this->Model_beranda->deleteDataGaleri($id_galeri);
         redirect(base_url('beranda/galeri'));
     }
}
