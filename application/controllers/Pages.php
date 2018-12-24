<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-09
 * Time: 11:45
 */

class Pages extends CI_Controller {
    public function view($page = 'home') {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            echo APPPATH . 'views/pages/' . $page . '.php';
            show_404();
        }
        $data['title'] = ucfirst($page);
        $this->load->view('templates/header');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
    }

    public function showProfile() {
        session_start();
        $userId    = isset($_SESSION['userId']) ? $_SESSION['userId'] : 0;
        if ($userId === 0) {
            show_404();
        }
        $userData = $this->M_Profile->getProfile($userId);

        $userData['templateList'] = $this->M_Profile->getTemplateList();
        $userData['style'] = $this->M_Profile->getTemplate($userData[0]['template']);


        $this->load->view('templates/header');
        $this->load->view('pages/profile',$userData);
        $this->load->view('templates/footer');
    }
}