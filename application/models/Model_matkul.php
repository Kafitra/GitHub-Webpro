<?php
class Model_matkul extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('matkul')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('matkul', $data);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('matkul', ['id' => $id])->row();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('matkul', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('matkul', ['id' => $id]);
    }
}
?>
