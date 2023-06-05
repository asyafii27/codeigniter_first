<?php

class CategoryModal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_category');
    }

    public function index()
    {
        $this->load->model('m_category');
        $data['category'] = $this->m_category->getCategory();

        $this->load->view('dashboard');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
        $this->load->view('category_modal/index', $data);
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

        redirect('CategoryModal/index');
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

    public function ubahCategory($id)
    {
        // $id = $this->input->post('id');
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


}