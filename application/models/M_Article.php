<?php

class M_Article extends CI_Model

{
    public function getArticle($id = null)
    {
        if ($id){
            $this->db->select('article.*, category.name as category_name');
            $this->db->from('article');
            $this->db->join('category', 'category.id = article.category_id');

            return $this->db->where('id', $id)->get()->row();
        }
        else
        {
            $this->db->select('article.*, category.name as category_name');
            $this->db->from('article');
            $this->db->join('category', 'category.id = article.category_id');

            return $this->db->get()->result();
        }
    }

    public function simpan_article($data)
    {
        $this->db->insert('article', $data);
        return $this->db->insert_id();
    }
}