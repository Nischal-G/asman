<?php
class CRUD extends CI_Model
{
	public function team()
	{
		$sql='SELECT * FROM sw_team ORDER BY sw_id ASC';
		$query = $this->db->query($sql);
		return $query;
	}
}
?>