<?php
/**
 * summary
 */
class crud_m extends CI_model
{
    public function ceklogin($tbl,$where){
      return $this->db->get_where($tbl,$where);
    }

    public function ambilSemua($tbl)
    {
    	return $this->db->get($tbl);
    }

    public function ambilData($tbl, $where = null)
    {
    	if ($where) {
    		$this->db->where($where);
    	}
    	return $this->db->get($tbl);
    }

    public function insertData($tbl,$data)
    {
    	$this->db->insert($tbl, $data);
    }

    public function updateData($tbl, $data, $where)
    {
    	$this->db->update($tbl, $data, $where);
    }

    public function deleteData($tbl, $where)
    {
    	$this->db->delete($tbl,$where);
    }
}
?>
