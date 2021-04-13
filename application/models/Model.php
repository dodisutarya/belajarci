<?php if(!defined('BASEPATH'))exit('No direct script access allowed');

class Model extends CI_MODEL {

    public function get_pelajar(){
        $q = $this->db->get("tbl_pelajar");
        return $q;
    }
}
