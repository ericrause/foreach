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
}