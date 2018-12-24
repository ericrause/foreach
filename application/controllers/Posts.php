<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-09
 * Time: 15:21
 */

class Posts extends  CI_Controller {
    public function index() {
        session_start();
        $userId    = isset($_SESSION['userId']) ? $_SESSION['userId'] : 0;
        if ($userId === 0) {
            show_404();
        }

        $this->M_Deamon->updateNews($userId);

        $config['base_url']     = base_url() . 'posts';
        $config['total_rows']   = $this->M_Posts->record_count($userId);
        $config['per_page']     = 20;
        $config['uri_segment']  = 3;
        $config['cur_tag_open'] = '<a class="page-link">';
        $config['cur_tag_close'] = '</a>';
        $config['attributes']   = ['class' => 'page-link'];
        $this->load->library('pagination');
        $this->load->helper('url');

        $this->pagination->initialize($config);

        $page = $this->uri->segment(3) ?: 0;
        $data['posts'] = $this->M_Posts->getPosts($config['per_page'], $page);
        $data['links'] = $this->pagination->create_links();
        $data['title'] = 'All latests posts';


        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }


    public function viewSource($urlId) {
        session_start();
        $userId    = isset($_SESSION['userId']) ? $_SESSION['userId'] : 0;
        if ($userId === 0) {
            show_404();
        }

        $this->M_Deamon->updateNews($userId);

        $link = $this->M_Links->getLink($urlId);

        $config['base_url']     = base_url() . 'posts';
        $config['total_rows']   = $this->M_Posts->record_count($userId);
        $config['per_page']     = 20;
        $config['uri_segment']  = 3;
        $config['cur_tag_open'] = '<a class="page-link">';
        $config['cur_tag_close'] = '</a>';
        $config['attributes']   = ['class' => 'page-link'];
        $this->load->library('pagination');
        $this->load->helper('url');

        $this->pagination->initialize($config);

        $page = $this->uri->segment(3) ?: 0;
        $data['posts'] = $this->M_Posts->getPosts($config['per_page'], $page, $urlId);
        $data['links'] = $this->pagination->create_links();
        $data['title'] = $link['title'];


        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }
}