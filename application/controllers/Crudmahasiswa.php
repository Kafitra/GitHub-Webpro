<?php
class Crudmahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_mahasiswa');
    }

    public function index()
    {
        $data['tabel_mahasiswa'] = $this->Model_mahasiswa->get_all();
        $this->load->view('tabel_mahasiswa', $data);
    }

    public function tambah()
    {
        $this->load->view('tambah_mahasiswa');
    }

    public function tambah_aksi()
    {
        $data = [
            'nama'   => $this->input->post('nama'),
            'npm'    => $this->input->post('npm'),
            'alamat' => $this->input->post('alamat'),
            'email'  => $this->input->post('email'),
            'prodi'  => $this->input->post('prodi'),
        ];
        $this->Model_mahasiswa->insert($data);
        redirect('crudmahasiswa');
    }

    public function edit($id)
    {
        $data['mahasiswa'] = $this->Model_mahasiswa->get_by_id($id);
        $this->load->view('edit_mahasiswa', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $data = [
            'nama'   => $this->input->post('nama'),
            'npm'    => $this->input->post('npm'),
            'alamat' => $this->input->post('alamat'),
            'email'  => $this->input->post('email'),
            'prodi'  => $this->input->post('prodi'),
        ];
        $this->Model_mahasiswa->update($id, $data);
        redirect('crudmahasiswa');
    }

    public function hapus($id)
    {
        $this->Model_mahasiswa->delete($id);
        redirect('crudmahasiswa');
    }
}
