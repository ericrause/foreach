<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 2018-12-09
 * Time: 15:21
 */

class Login extends CI_Controller {
    public function showLogin($msg = ''){
        $data['msg'] = $msg;
        $this->load->view('templates/header');
        $this->load->view('pages/login', $data);
        $this->load->view('templates/footer');
    }

    public function showSignup($msg = '') {
        $data['msg'] = $msg;

        $this->load->view('templates/header');
        $this->load->view('pages/signup', $data);
        $this->load->view('templates/footer');
    }

    public function authentication() {
        $email    = $_POST['email'];
        $password = $_POST['password'];
        $authId   = $this->M_Login->authenticate($email, $password);
        if($authId > 0) {
            $_SESSION['active']   = true;
            $_SESSION['timeout']  = time();
            $_SESSION['username'] = $email;
            $_SESSION['userId']   = $authId;
            redirect('posts');
        } else {
            $this->showLogin('incorret email/pass');
        }
    }


    public function deleteLink($id){
        $this->M_Links->deleteLink($id);
        redirect('links');
    }
}