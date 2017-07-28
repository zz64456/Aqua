<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

        public function login($acc, $pswd) {
                $acc = $acc;
                $pswd = $pswd;

                $sql = "SELECT * FROM `EMPLOYEE` WHERE `EMPLOYEE_ACCOUNT` = '$acc' AND `EMPLOYEE_PASSWORD` = '$pswd'";

                $query = $this->db->query($sql);

                if ($query->num_rows() == 1) {
                        foreach ($query->result() as $row) {
                                $result[] = array('EMPLOYEE_ACCOUNT'=>$row-> EMPLOYEE_ACCOUNT,
                                                                'EMPLOYEE_PASSWORD'=>$row-> EMPLOYEE_PASSWORD,
                                                                'EMPLOYEE_NAME'=>$row-> EMPLOYEE_NAME,
                                                                'EMPLOYEE_ID'=>$row-> EMPLOYEE_ID);
                        }
                        return $result;
                }
                else {
                        
                        return false;
                }
        }

        public function insert_purchase($data){
                $this->db->insert('PURCHASE', $data); 
        }
}

?>

