<?php
class Chart_model extends CI_Model
{   
    // Mangrove
    public function getJumlahMangrove(){
        return $this->db->get('tb_bali')->num_rows();
    }
}