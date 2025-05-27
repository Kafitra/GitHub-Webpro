<?php
class Crudkelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_kelas');
    }

    public function index()
    {
        $data['tabel_kelas'] = $this->Model_kelas->get_all();
        $this->load->view('tabel_kelas', $data);
    }
    

    public function tambah()
    {
        $this->load->view('tambah_kelas');
    }

    public function tambah_aksi()
    {
        $kode_kelas = $this->input->post('kode_kelas');
        $nama_kelas = $this->input->post('nama_kelas');

        $data = [
            'kode_kelas' => $kode_kelas,
            'nama_kelas' => $nama_kelas
        ];

        $this->Model_kelas->insert($data);
        redirect('crudkelas');
    }

    public function edit($id)
    {
        $data['tabel_kelas'] = $this->Model_kelas->get_by_id($id);
        $this->load->view('edit_kelas', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $kode_kelas = $this->input->post('kode_kelas');
        $nama_kelas = $this->input->post('nama_kelas');

        $data = [
            'kode_kelas' => $kode_kelas,
            'nama_kelas' => $nama_kelas
        ];

        $this->Model_kelas->update($id, $data);
        redirect('crudkelas');
    }

    public function hapus($id)
    {
        $this->Model_kelas->delete($id);
        redirect('crudkelas');
    }
}
?>
