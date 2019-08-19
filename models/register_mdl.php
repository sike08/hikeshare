<?php

class Register_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function register_standard()
    {
        $userid = Util::generate_userid();
        $query = ('CALL uspRegister(:firstname,:lastname,:pass,:email, :userid)');
        $params = array(
            ':firstname' => $_POST['inputFname'],
            ':lastname' => $_POST['inputLname'],
            ':pass' => Util::create('md5', $_POST['inputPassword'], HASH_PASSWORD_KEY),
            ':email' => $_POST['inputEmail'],
            ':userid' => $userid,
        );
        $result = Database::Execute($query, $params);
        if ($result) {
            $arr = array(
                'online'=>true,
                'userid'=>$userid
            );
            Util::init_session();
            Util::set_session('loggedin',$arr);
            header('location:' . URL . 'dashboard');
            exit;
        } else {
            header('location:' . URL .'register');
        }
    }

    public function register_google()
    {}

    public function register_facebook()
    {}
}
