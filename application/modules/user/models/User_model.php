<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/* * ***********************
 * PAGE: USE TO MANAGE USER 
 * #COPYRIGHT: BRAINMOBI
 * @AUTHOR: Pratibha Kushwaha <pratibha@brainmobi.com>.
 * CREATOR: 08/09/2016.
 * UPDATED: 12/09/2016.
 * Codigniter    
 * *** */

class User_model extends CI_Model {

    protected $user_tbl='pz_user';
            
    function _construct() {
        parent::_construct();
    }

    /**
     * Insert data in DB
     *
     * @access	public
     * @param	string
     * @param	array
     * @return	string
     */
    public function insertUser($table, $data = array()) {
        //Check if any data to insert
        if (count($data) < 1) {
            return false;
        }

        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

   /**
     * Get admin details
     * @param array $where $coloumn
     * @return array $result
     * @author Pratibha Kushwaha <pratibha@brainmobi.com>.
     */
    public function fetchData($table, $fields =array(), $conditions = array(), $returnRow = false) {
        //Preparing query
        $this->db->select($fields);
        $this->db->from($table);

        //If there are conditions
        if (count($conditions) > 0) {
            $this->condition_handler($conditions);
        }
//       echo '<pre>'; print_r($conditions);echo '</pre>';//die;
        $query = $this->db->get();
//       echo  $this->db->last_query();exit;
//        echo '<pre>'; print_r($query);die;
        //Return
        return $returnRow ? $query->row_array() : $query->result_array();
    }
   /**
     * Handle different conditions of query
     *
     * @access	public
     * @param	array
     * @return	bool
     */
    private function condition_handler($conditions) {
        //Where
        if (array_key_exists('where', $conditions)) {

            //Iterate all where's
            foreach ($conditions['where'] as $key => $val) {
                $this->db->where($key, $val);
            }
        }

        //Where In
        if (array_key_exists('where_in', $conditions)) {
            //Iterate all where in's
            foreach ($conditions['where_in'] as $key => $val) {
                $this->db->where_in($key, $val);
            }
        }

        //Where Not In
        if (array_key_exists('where_not_in', $conditions)) {

            //Iterate all where in's
            foreach ($conditions['where_not_in'] as $key => $val) {
                $this->db->where_not_in($key, $val);
            }
        }

        //Having
        if (array_key_exists('having', $conditions)) {
            $this->db->having($conditions['having']);
        }

        //Group By
        if (array_key_exists('group_by', $conditions)) {
            $this->db->group_by($conditions['group_by']);
        }

        //Order By
        if (array_key_exists('order_by', $conditions)) {

            //Iterate all order by's
            foreach ($conditions['order_by'] as $key => $val) {
                $this->db->order_by($key, $val);
            }
        }

        //Like
        if (array_key_exists('like', $conditions)) {

            //Iterate all likes
            $i = 1;
            foreach ($conditions['like'] as $key => $val) {
                if ($i == 1) {
                    $this->db->like('LOWER(' . $key . ')', strtolower($val), 'after');
                } else {
                    $this->db->or_like('LOWER(' . $key . ')', strtolower($val), 'after');
                }
                $i++;
            }
        }

        //Limit
        if (array_key_exists('limit', $conditions)) {
            //If offset is there too?
            if (count($conditions['limit']) == 1) {
                $this->db->limit($conditions['limit'][0]);
            } else {
                $this->db->limit($conditions['limit'][0], $conditions['limit'][1]);
            }
        }
    }
    

}
