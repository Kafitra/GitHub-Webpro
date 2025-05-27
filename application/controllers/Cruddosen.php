<?php
class Cruddosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_dosen');
    }

    public function index()
    {
        $data['tabel_dosen'] = $this->Model_dosen->get_all();
        $this->load->view('tabel_dosen', $data);
    }

    public function tambah()
    {
        $this->load->view('tambah_dosen');
    }

    public function simpan()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nidn' => $this->input->post('nidn')
        ];
        $this->Model_dosen->insert($data);
        redirect('cruddosen');
    }

    public function edit($id)
    {
        $data['dosen'] = $this->Model_dosen->get_by_id($id);
        $this->load->view('edit_dosen', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $data = [
            'nama' => $this->input->post('nama'),
            'nidn' => $this->input->post('nidn')
        ];
        $this->Model_dosen->update($id, $data);
        redirect('cruddosen');
    }

    public function hapus($id)
    {
        $this->Model_dosen->delete($id);
        redirect('cruddosen');
    }
}
?>
