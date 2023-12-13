<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->library('form_validation');
        $this->load->library('cart');
    }

    public function index()
    {
        $this->load->view('member/layout/header');
        $this->load->view('member/home');
        $this->load->view('member/layout/footer');
    }

    public function keranjang($do = '')
    {
        $data["keranjang"] = [];
        if (isset($_SESSION["keranjang"])) {
            foreach ($_SESSION['keranjang'] as $id => $jml) {
                $dt = $this->db->get_where("tbl_produk", ["id_produk" => $id])->row_array();
                $data["keranjang"][] = (object) array(
                    'id'      =>  $dt['id_produk'],
                    'nama'    =>  $dt['nama_produk'],
                    'harga'   =>  $dt['harga_produk'],
                    'qty'     =>  $jml,
                    'gambar'  =>  $dt['gambar']
                );
            };
        }
        if (isset($_POST["qty"])) {
            $qty = $this->input->post("qty");
            foreach ($data["keranjang"] as $id => $dt) {
                $data['keranjang'][$id]->qty = $qty[$id];
                $_SESSION['keranjang'][$dt->id] = $qty[$id];
            }
        }

        if ($do == "hapus") {
            unset($_SESSION['keranjang'][$this->input->get("id")]);
            redirect("./home/keranjang");
        }
        $this->load->view('member/layout/header');
        $this->load->view('member/keranjang', $data);
        $this->load->view('member/layout/footer');
    }

    public function login()
    {
        $this->load->view('member/layout/header');
        $this->load->view('member/login');
        $this->load->view('member/layout/footer');
    }

    public function produk($do = "")
    {
        $data["produk"] = $this->db->get("tbl_produk")->result();
        $data["kategori"] = $this->db->get("tbl_kategori")->result();
        $content = "member/produk";
        if ($do == "preview") {
            $id = $this->input->get("id");
            $this->db->where("id_produk", $id);
            $data["produk"] = $this->db->get("tbl_produk")->row();
            $content = "member/produk-preview";
        } else if ($do == "get_by_category") {
            $cat = $this->input->get("cat");
            $this->db->where("nama_kategori", $cat);
            $idc = $this->db->get('tbl_kategori')->row();
            $this->db->where("id_kategori", $idc->id_kategori);
            $data["category"] = $cat;
            $data["produk"] = $this->db->get("tbl_produk")->result();
            $content = "member/produk";
        }
        $this->load->view('member/layout/header');
        $this->load->view($content, $data);
        $this->load->view('member/layout/footer');
    }

    public function checkout()
    {
        $data["keranjang"] = [];

        if (isset($_POST["c_fname"])) {
            foreach ($_SESSION['keranjang'] as $id => $jml) {
                $this->db->select('stok');
                $this->db->from('tbl_produk');
                $this->db->where('id_produk', $id);
                $query = $this->db->get();
                $currentStock = $query->row()->stok;

                // Perform subtraction
                $newStock = $currentStock - ((int)$jml);

                // Update the database with the new stock value
                $dt = array(
                    'stok' => $newStock,
                );

                $this->db->where('id_produk', $id);
                $this->db->update('tbl_produk', $dt);
            }
            unset($_SESSION["keranjang"]);
            $this->session->set_flashdata('success', 'Pesanan berhasil dipesan!');
            redirect("./home/produk");
        }

        if (isset($_SESSION["keranjang"])) {
            foreach ($_SESSION['keranjang'] as $id => $jml) {
                $dt = $this->db->get_where("tbl_produk", ["id_produk" => $id])->row_array();
                $data["keranjang"][] = (object) array(
                    'id'      =>  $dt['id_produk'],
                    'nama'    =>  $dt['nama_produk'],
                    'harga'   =>  $dt['harga_produk'],
                    'qty'     =>  $jml,
                    'gambar'  =>  $dt['gambar']
                );
            };
        }
        $this->load->view('member/layout/header');
        $this->load->view('member/checkout', $data);
        $this->load->view('member/layout/footer');
    }
}
