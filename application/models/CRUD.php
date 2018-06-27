<?php
class CRUD extends CI_Model
{
	public function team()
	{
		$sql='SELECT * FROM sw_team ORDER BY sw_id ASC';
		$query = $this->db->query($sql);
		return $query;
	}

	public function addMember($data)
	{
		$sql = $this->db->set($data)->get_compiled_insert('as_member');
		$q=$this->db->query($sql);
		return $q;
	}
}
?>