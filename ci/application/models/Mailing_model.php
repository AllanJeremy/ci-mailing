<?php defined('BASEPATH') or exit('No direct script access allowed');

defined('BASEPATH') OR exit('No direct script access allowed');

class Mailing_model extends MY_Model {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    // Add an email to mailing list
    public function add($data)
    {
        return $this->db->insert('mailing_list',$data);
    }

    // Get mailing list
    public function get($filters=NULL)
    {
        $this->db->select('*');
        if(!empty($filters))
        {   $this->db->where($filters); }

        return $this->db->get('mailing_list');
    }
}

/* End of file Mailing_model.php */
