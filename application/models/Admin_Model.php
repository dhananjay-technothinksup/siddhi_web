<?php
/**
 *
 */
class Admin_Model extends CI_Model
{
      public function save_make($save_make){
        $this->db->insert('tbl_make',$save_make);
      }

      public function save_category($save_category){
        $this->db->insert('tbl_category',$save_category);
      }

      public function save_product($save_product){
        $this->db->insert('tbl_product',$save_product);
      }

      public function get_make(){
      $this->db->select('*');
      $this->db->from('tbl_make');
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }

    public function get_category(){
    $this->db->select('*');
    $this->db->from('tbl_category');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function get_product(){
  $this->db->select('*');
  $this->db->from('tbl_product');
  $query = $this->db->get();
  $result = $query->result();
  return $result;
}

}
  ?>
