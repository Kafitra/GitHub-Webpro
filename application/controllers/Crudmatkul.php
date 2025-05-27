<?php
class Crudmatkul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_matkul');
    }

    public function index()
    {
        $data['matkul'] = $this->Model_matkul->get_all();
        $this->load->view('matkul', $data);
    }

    public function tambah()
    {
        $this->load->view('tambah_matkul');
    }

    public function tambah_aksi()
    {
        $nama_dosen = $this->input->post('nama_dosen');   
        $nama_matkul = $this->input->post('nama_matkul');

        $data = [
            'nama_dosen' => $nama_dosen,
            'nama_matkul' => $nama_matkul
        ];

        $this->Model_matkul->insert($data);
        redirect('crudmatkul');
    }

    public function edit($id)
    {
        $data['matkul'] = $this->Model_matkul->get_by_id($id);
        $this->load->view('edit_matkul', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama_dosen = $this->input->post('nama_dosen'); 
        $nama_matkul = $this->input->post('nama_matkul');

        $data = [
            'nama_dosen' => $nama_dosen,
            'nama_matkul' => $nama_matkul
        ];

        $this->Model_matkul->update($id, $data);
        redirect('crudmatkul');
    }

    public function hapus($id)
    {
        $this->Model_matkul->delete($id);
        redirect('crudmatkul');
    }
}
?>
