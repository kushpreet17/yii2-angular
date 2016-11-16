<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* * ***********************
 * PAGE: USE TO MANAGE USER 
 * #COPYRIGHT: BRAINMOBI
 * @AUTHOR: Pratibha Kushwaha <pratibha@brainmobi.com>.
 * CREATOR: 08/09/2016.
 * UPDATED: --/--/----.
 * Codigineter    
 * *** */

class Employer_model extends CI_Model {

    function _construct() {
        parent::_construct();
        $this->load->library('database');
        $this->load->library('upload');
    }
}