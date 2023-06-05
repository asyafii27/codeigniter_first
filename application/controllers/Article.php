<?php

class Article extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_article');
    }

    public function index()
    {
        $this->load->model('m_article');
        $this->load->model('m_category');

        $data['article'] = $this->m_article->getArticle();
        $data['category'] = $this->m_category->getCategory();

        $this->load->view('dashboard');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
        $this->load->view('article/index', $data);
		$this->load->view('template/footer');
    }

    public function tambahArticle()
    {
        // $this->load->model('m_article');

        $category_id = $this->input->post('category_id');
        $title = $this->input->post('title');
        $author = $this->input->post('author');
        $content = $this->input->post('content');

        $data = array(
            'category_id' => $category_id,
            'title' => $title,
            'author'=> $author,
            'content' => $content,
        );
        
        $this->m_article->simpan_article($data, 'article');
        redirect('article/index');

    }
}