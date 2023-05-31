<?php
class ModelLaundry extends CI_Model{
    function get_data(){
        return $this->db->get('laundry');
    }
}
