<?php
class M_model extends CI_Model{
     public $table='bencana';

    public function data_bencana()  
    {
     
        return $this->db->select('*')
                    ->from('bencana')
                    ->get()->result();
    }

    public function get_tampil_bencana($limit, $offset, $search, $count, $tabel, $namacari, $urut){
     
        $this->db->select('*');
        $this->db->from($tabel);
        if($search){
             $keyword = $search['keyword'];
             if($keyword){
             
                  $this->db->where($namacari." LIKE '%$keyword%'");
                
             }
        }
        if($count){
             return $this->db->count_all_results();
        }
        else {
             $this->db->limit($limit, $offset);
             $query = $this->db->order_by($urut,'DESC')->get();
             
             if($query->num_rows() > 0) {
                  return $query->result();
             }
        }
        
        return array();
       }
    public function simpan($table,$data){
        return $this->db->insert($table, $data);
    }
    public function tampil ($table, $urut_id){
     return $this->db->from($table)
                 ->order_by($urut_id,'DESC')
                 ->get('');
 }
    public function hapus($table,$id,$primary){
        return $this->db->delete($table, array($primary=>$id));
    }
    public function form_edit($table, $primary, $id){
     return $this->db->get_where($table, array($primary=>$id))->row();
 }
    public function editdata($tabel, $primary, $id, $data)
    {
        return $this->db->where($primary, $id)->update($tabel, $data);
    }

    public function get_tampil($limit, $offset, $search, $count, $tabel, $namacari, $urut){
     
        $this->db->select('*');
        $this->db->from($tabel);
        if($search){
             $keyword = $search['keyword'];
             if($keyword){
             
                  $this->db->where($namacari." LIKE '%$keyword%'");
             }
        }
        if($count){
             return $this->db->count_all_results();
        }
        else {
             $this->db->limit($limit, $offset);
             $query = $this->db->order_by($urut,'DESC')->get();
             
             if($query->num_rows() > 0) {
                  return $query->result();
             }
        }
        
        return array();
       }

     
     public function getByIdSearch($lokasi) {
          $this->db->from($this->table); 
          $this->db->where("lokasi", $lokasi);
          $query=$this->db->get();
          return $query->result_array();
     }
    
}