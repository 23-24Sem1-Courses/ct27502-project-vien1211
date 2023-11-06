<?php
class login extends DController{
    public function __construct(){
        $message = array();
        $data = array();
        parent::__construct();
        
    }

    public function index(){
        $this->login();
    }

    public function login(){
        $this->load->view('header');
        Session::init();
        if(Session::get("login")==true){
            header("location:".BASE_URL."/login/dashboard");
        }
            
        $this->load->view('cpanel/login');
        $this->load->view('footer');
    }

    public function dashboard(){
        Session::checkSession();
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/navbar');
        $this->load->view('cpanel/dashboard');
        $this->load->view('cpanel/footer');
    }
    public function authentication_login(){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $table_admin = 'admin';
        $loginmodel = $this->load->model('loginmodel');

        $count = $loginmodel->login($table_admin,$username,$password);

        if($count==0){
            $message['msg'] = "ten dang nhap hoac mat khau khong dung";
            header("location:".BASE_URL."/login");
        }else{
            $result = $loginmodel->getLogin($table_admin,$username,$password);
            Session::init();
            Session::set('login', true);
            Session::set('username',$result[0]['username']);
            Session::set('userid',$result[0]['id_admin']);

            header("location:".BASE_URL."/login/dashboard");
        }
    }

    public function logout(){
        Session::init();
        Session::destroy();
        header("location:".BASE_URL."/login");

        
        
    }
    
}
?>