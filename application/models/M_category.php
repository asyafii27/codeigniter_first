<?php
class M_category extends CI_Model 
{
    public function __construct() {
        parent::__construct();
        $this->load->database(); // memuat library database
    }

    public function getCategory($id = null)
    {
        if ($id) {
            return $this->db->where('id', $id)->get('category')->row();
        } else {
            return $this->db->get('category')->result();
        }
    }

    public function simpan_category($data)
    {
        $this->db->insert('category', $data);
        return $this->db->insert_id();
    }

    public function ubah_category($data, $where)
    {
        $this->db->update('category', $data, $where);
        return $this->db->affected_rows();
    }

    public function hapus_category($where)
    {
        $this->db->where($where);
        return $this->db->delete('category', $where);

    }
}
