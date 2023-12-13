<?php
defined('BASEPATH') or exit('No direct script access allowed');

class produk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index()
    {
        $data['produk'] = $this->Madmin->get_all_data('tbl_produk')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/produk/tampil', $data);
        $this->load->view('admin/layout/footer');
    }

    public function add()
    {
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/produk/formAdd', $data);
        $this->load->view('admin/layout/footer');
    }

    public function save()
    {
        $nama_produk = $this->input->post('nama_produk');
        // $gambar_produk = $this->input->post('gambar');
        $kategori_produk = $this->input->post('kategori');
        $harga_produk = $this->input->post('harga_produk');
        $stok = $this->input->post('stok');
        $berat_produk = $this->input->post('berat_produk');
        $warna_produk = $this->input->post('warna_produk');
        $ukuran_produk = $this->input->post('ukuran_produk');
        $deskripsi = $this->input->post('deskripsi');


        $config['upload_path']          = './assets/produk/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 1024 * 10;
        $config['file_name']            = strtolower(url_title($nama_produk));
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $foto = $this->upload->data("file_name");
            $dataInput = array(
                'id_kategori' => $kategori_produk,
                'nama_produk' => $nama_produk,
                'gambar' => $foto,
                'harga_produk' => $harga_produk,
                'stok' => $stok,
                'warna_produk' => $warna_produk,
                'ukuran_produk' => $ukuran_produk,
                'deskripsi' => $deskripsi
            );
            $this->Madmin->insert('tbl_produk', $dataInput);
            redirect('produk');
        } else {
            echo "Gagal Upload";
            die();
        }
    }

    public function get_by_id($id)
    {
        $dataWhere = array('id_produk' => $id);
        $data['produk'] = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->row_object();
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/produk/formEdit', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit()
    {
        $id_produk = $this->input->post('id_produk');
        // $gambar_produk = $this->input->post('gambar');
        $kategori_produk = $this->input->post('kategori');
        $nama_produk = $this->input->post('nama_produk');
        $harga_produk = $this->input->post('harga_produk');
        $stok = $this->input->post('stok');
        $warna_produk = $this->input->post('warna_produk');
        $ukuran_produk = $this->input->post('ukuran_produk');
        $deskripsi = $this->input->post('deskripsi');

        // ini adalah function edit, bagaimana cara agar file upload hanya jika $gambar_produk itu diupload
        $image = null;
        if (!empty($_FILES["gambar"]["name"])) {
            $config['upload_path']          = './assets/produk/';
            $config['allowed_types']        = 'jpg|jpeg|png';
            $config['max_size']             = 1024 * 10;
            $config['file_name']            = strtolower(url_title($nama_produk));
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $old_image = $this->db->get_where('tbl_produk', ['id_produk' => $id_produk])->row()->gambar;
                unlink(FCPATH . '/assets/produk/' . $old_image);
                $image = $this->upload->data('file_name');
            }
        }

        $dataUpdate = array(
            'id_kategori' => $kategori_produk,
            'nama_produk' => $nama_produk,
            'harga_produk' => $harga_produk,
            'stok' => $stok,
            'warna_produk' => $warna_produk,
            'ukuran_produk' => $ukuran_produk,
            'deskripsi' => $deskripsi
        );
        if ($image)
            $dataUpdate["gambar"] = $image;
        $this->Madmin->update('tbl_produk', $dataUpdate, 'id_produk', $id_produk);
        redirect('produk');
    }

    public function delete($id)
    {
        $this->Madmin->delete('tbl_produk', 'id_produk', $id);
        $old_image = $this->db->get_where('tbl_produk', ['id_produk' => $id])->row()->gambar;
        unlink(FCPATH . '/assets/produk/' . $old_image);
        redirect('produk');
    }
}
