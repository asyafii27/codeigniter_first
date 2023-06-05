<?php

class Category extends CI_Controller {

    public function index()
    {
        $this->load->model('m_category');
        $data['category'] = $this->m_category->getCategory();

        $this->load->view('dashboard');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
        $this->load->view('category/index', $data);
        // var_dump($data);die;
		$this->load->view('template/footer');
    }

    public function addCategory()
    {
        $this->load->view('dashboard');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');

        $this->load->view('category/tambah');
        $this->load->view('template/footer');

    }

    public function editCategory($id)
    {
        $data['category'] = $this->m_category->getCategory($id);

        $this->load->view('dashboard');
        $this->load->view('template/header');
        $this->load->view('template/sidebar');

        $this->load->view('category/ubah', $data);
        $this->load->view('template/footer');

    }


    public function tambahCategory()
    {
        $name = $this->input->post('name');
        $now = date('Y-m-d H:i:s');

        $data = array(
            'name' => $name,
            'created_at' => $now,
            'updated_at' => $now,
        );

        $this->m_category->simpan_category($data, 'category');

        redirect('category/index');
    }

    public function ubahCategory($id)
    {
        $name = $this->input->post('name');
        $now = date('Y-m-d H:i:s');

        $data = array(
            'name' => $name,
            'created_at' => $now,
            'updated_at' => $now,
        );  

        // $where = array('id' => $id);
        $this->m_category->ubah_category($data, array('id' => $id));

        redirect('category/index');
    } 

    public function deleteCategory($id)
    {
        $where = array('id' => $id);
        $this->m_category->hapus_category($where);

        redirect('category/index');
    }

}