<?php if(!defined('BASEPATH'))exit('No direct script access allowed');

class Auth_Model extends CI_MODEL {

    public function cek($in){
        $username = $in['username'];
        $password = $in['password'];

        $q_login = $this->db->query("SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password' ");

        if($q_login->num_rows()>0){
            redirect('Niomic');
        } else {
            redirect('Auth');
        }
        
    }
}
