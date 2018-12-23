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

        $this->M_Deamon->updateNews($userId);

        $data['title'] = 'Latests posts';
        $data['posts'] = $this->M_Posts->getPosts();

        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }

//    public function view($id = 0) {
//        $data['post'] = $this->M_Posts->getPosts($id);
//
//        if (empty($data['post'])) {
//            show_404();
//        }
//
//        $data['title'] = $data['post']['title'];
//
//
//        $this->load->view('templates/header');
//        $this->load->view('posts/view', $data);
//        $this->load->view('templates/footer');
//    }

}