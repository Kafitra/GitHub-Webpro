<?php
class Model_kelas extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('tabel_kelas')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('tabel_kelas', $data);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('tabel_kelas', ['id' => $id])->row();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tabel_kelas', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('tabel_kelas', ['id' => $id]);
    }
}
?>
