<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-09
 * Time: 15:21
 */

class Posts extends  CI_Controller {
    public function index() {
        $data['title'] = 'Latests posts';

        $data['posts'] = $this->M_Posts->getPosts();

        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = 0) {
        $data['post'] = $this->M_Posts->getPosts($id);

        if (empty($data['post'])) {
            show_404();
        }

        $data['title'] = $data['post']['title'];


        $this->load->view('templates/header');
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
    }

    public function showLinks(){
        $data['userId'] = 0;//how to get userId ?

        $this->load->view('templates/header');
        $this->load->view('posts/links', $data);
        $this->load->view('templates/footer');
    }

    public function addLink() {
        $data['title'] = 'Add link';

        $this->form_validation->set_rules('urls', 'Urls', 'required');

        if($this->form_validation->run() === false ){
            $this->load->view('templates/header');
            $this->load->view('posts/addLink', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_Posts->addLink();
            $this->showLinks();
        }
    }
}