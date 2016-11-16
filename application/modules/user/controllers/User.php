<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/* * ***********************
 * PAGE: USE TO MANAGE USER INDEX CONTROLLER.
 * #COPYRIGHT: BRAINMOBI
 * @AUTHOR: Pratibha Kushwaha <pratibha@brainmobi.com>.
 * CREATOR: 08/09/2016.
 * UPDATED: --/--/----.
 * Codiginiter    
 * *** */

class User extends MX_Controller {

    protected $user_tabl = 'pz_user';

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('user_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    /**
     * Use to open default page 
     * @param null
     */
    public function index() {
        $this->load->view('/user_index');
    }

    /**
     * Function to insert new user in table
     * @param null
     * return user id
     */
    function register() {
        $post = $this->input->post();
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[pz_user.pz_user_email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('phone_no', 'Phone No', 'trim|required|is_unique[pz_user.pz_user_phone_no]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/user_index');
        } else {
            if (!empty($post)) {
                if (empty($post['id'])) {
                    $insert = array(
                        'pz_user_fname' => $post['firstname'],
                        'pz_user_lname' => $post['lastname'],
                        'pz_user_email' => $post['email'],
                        'pz_user_password' => md5($post['password']),
                        'pz_user_phone_no' => $post['phone_no'],
                        'pz_user_country' => $post['country'],
                        'pz_user_address' => $post['address'],
                    );
                    $data = $this->db->get_where('pz_user', array('pz_user_email' => $post['email']))->row_array();
                    if ($data) {
                        echo 'data already exist';
                        exit;
                    } else {
                        $user_id = $this->user_model->insertUser('pz_user', $insert);
                        echo 'successfully inserted';
                    }
                }
            }
        }
    }

    /**
     * Function to login user 
     * @param null
     * return user 
     */
    public function login(){
 //    echo 'dfghj';die;
       $data = array();
 
        $post= $this->input->post();
        if (!empty($post)) {            
            //$check = (isset($post['remember_me'])? $post['remember_me'] : '' );
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
//            echo '<pre>';
//            print_r($post);
//            exit;
            if ($this->form_validation->run() == TRUE) {   
                //echo 'asdf';die;
                $user['user_email'] = $this->input->post('email');
                $userData= $this->user_model->fetchData('pz_user',array('pz_user_fname','pz_user_lname','pz_user_email','pz_user_phone_no','pz_user_address'), array('where' => array('pz_user_email' => $post['email'], 'pz_user_password' => $post['password']), 'LIMIT' => 1),true);
//                echo '<pre>';
//                print_r($userData);
//                die;
                $this->session->set_userdata('user_login', $user);
             // print_r($_SESSION);die;
                if ($userData) {
                   redirect('/user/dashboard');
                } else {
                    $data['invalid_access'] = 'Invalid email or password.';
                }
            }
        }
        
        $this->load->view('/user/user_index', $data);
    }
    
    
    public function dashboard(){
       
         $data[]= $_SESSION['user_login'];//$this->session->userData['user_login']['user_email'];
         // print_r( $_SESSION['user_login']);die;
     //$userData= $this->user_model->fetchData('pz_user',array('pz_user_email,pz_user_fname,pz_user_lname,pz_user_phone_no,pz_user_address'), array('where' => array('pz_user_email' => $post['email'], 'pz_user_password' => $post['password']), 'LIMIT' => 1),true);
        $this->load->view('/user/dashboard',$data);
    }
    
    public function isLogin(){
        if (!isset($_SESSION['user_login']) && count($_SESSION['user_login']) > 0) {
            redirect('user/dashboard');
        }
    }
    
}
