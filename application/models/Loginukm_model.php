 <?php  
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Loginukm_model extends CI_Model {
    
    function cek_login($tabel,$where)
    {
        return $this->db->get_where($tabel, $where);       
    }   

}

?>