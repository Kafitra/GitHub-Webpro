<?php
class Model_dosen extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('tabel_dosen')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('tabel_dosen', $data);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('tabel_dosen', ['id' => $id])->row();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('tabel_dosen', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('tabel_dosen', ['id' => $id]);
    }
}
?>
