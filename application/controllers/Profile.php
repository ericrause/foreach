<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-09
 * Time: 15:21
 */

class Profile extends  CI_Controller {
    public function showProfile() {
        session_start();
        $userId    = isset($_SESSION['userId']) ? $_SESSION['userId'] : 0;
        if ($userId === 0) {
            show_404();
        }

        $userData['profile'] = $this->M_Profile->getProfile($userId);

        $userData['templateList'] = $this->M_Profile->getTemplateList();


        $this->load->view('templates/header');
        $this->load->view('pages/profile', $userData);
        $this->load->view('templates/footer');
    }

    public function updateProfile() {
        session_start();
        $userId        = isset($_SESSION['userId']) ? $_SESSION['userId'] : 0;
        if ($userId === 0) {
            show_404();
        }
        $password       = isset($_POST['password'])     ? $_POST['password']    : '';
        $phone          = isset($_POST['phone'])        ? $_POST['phone']       : '';
        $themeSelector  = isset($_POST['themeSelector'])? $_POST['themeSelector'] : '';
        $name           = isset($_POST['name'])         ? $_POST['name']        : '';
        $biography      = isset($_POST['biography'])    ? $_POST['biography']   : '';

        $this->M_Profile->updateProfile($userId,$password,$phone,$themeSelector,$name,$biography);

        $userData = $this->M_Profile->getProfile($userId);
        $userData['style']    = $this->M_Profile->getTemplate($userData['template']);
        $_SESSION['template'] = $userData['style']['title'];
        redirect('profile');

    }


    public function editLink() {
        session_start();
        $data['title'] = 'Edit link';
        $userId        = isset($_SESSION['userId']) ? $_SESSION['userId'] : 0;


        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');

        if($this->form_validation->run() === false ) {
            $this->load->view('templates/header');
            $this->load->view('links/addLink', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_Links->addLink($userId);
            redirect('links');

//            $this->showLinks();
        }
    }

    public function deleteLink(){
        $id = isset($_POST['id']) ? $_POST['id'] : 0;
        $this->M_Links->deleteLink($id);
        $this->M_Posts->deletePosts($id);
        redirect('links');
    }
}