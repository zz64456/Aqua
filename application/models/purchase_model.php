<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Purchase_model extends CI_Model {

        public function insert_purchase($data) {

                $sql = "SELECT * FROM `EMPLOYEE` WHERE `EMPLOYEE_ACCOUNT` = '$acc' AND `EMPLOYEE_PASSWORD` = '$pswd'";
                $sql = "INSERT INTO `PURCHASE`(
                                         `PURCHASE_ID`
                                        ,`PRODUCT_NAME`
                                        ,`SOURCE_NAME`
                                        ,`PURCHAE_PRICE`
                                        ,`PURCHAE_AMOUNT`
                                        ,`PURCHAE_COSt`
                                        ,`PURCHAE_TOTAL`
                                        ,`PURCHAE_DATE`
                                        ,`PURCHASE_S_AMOUNT`
                                        ,`PURCHASE_R_AMOUNT`
                                        ,`PURCHASE_Y_AMOUNT`
                                        ,`PURCHASE_A_AMOUNT`) VALUES (
                                        'PURCHASE_ID'
                                        ,'日期'
                                        ,'買賣'
                                        ,'LINE'
                                        ,'股票名稱
                                        ,'姓名'
                                        ,'電話'
                                        ,'手機1'
                                        ,'手機2'
                                        ,'價位'
                                        ,'張數'
                                        ,'來源');";

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

}

?>

