<?php
class Mangrove_model extends CI_Model
{
    public function getAllMangrove(){
        return $this->db->get('tb_bali')->result_array();    
    }

    public function tambahDataMangrove(){
        $nama = $this->input->post('nama', true);
        $alamat = $this->input->post('alamat', true);
        $latitude = $this->input->post('latitude', true);
        $longitude = $this->input->post('longitude', true);

        $data = [
            "nama" => $nama,
            "alamat" => $alamat,
            "latitude" => $latitude,
            "longitude" => $longitude
        ];

        $this->db->insert('tb_bali', $data);
    }

    public function getDataMangrove()  
    {
        $this->db->select('*');
        $this->db->from('tb_bali');
        $query = $this->db->get();
        return $query->result();
    }

    public function getMangroveByID($id){
        $this->db->from('tb_bali');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function hapusDataMangrove($id){
        
        $this->db->where('id', $id);
        $this->db->delete('tb_bali');
    }
    
    public function editDataMangrove($post){
        $params['nama'] = $post['nama'];
        $params['alamat'] = $post['alamat'];
        $params['latitude'] = $post['latitude'];
        $params['longitude'] = $post['longitude'];
        
        $this->db->where('id', $post['id']);
        $this->db->update('tb_bali', $params);    
    }
}