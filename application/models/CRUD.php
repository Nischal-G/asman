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
		$sql = $this->db->set($data)->get_compiled_insert('sw_member');
		$q=$this->db->query($sql);
		return $q;
	}

	public function contactUs($data)
	{
		$sql = $this->db->set($data)->get_compiled_insert('sw_contact');
		$q=$this->db->query($sql);
		return $q;
	}

	public function newsHome()
	{
		$this->db->select('*'); 
	  	$this->db->from('sw_news');
	  	$this->db->order_by("news_id", "DESC");
		$this->db->limit(3,0);
		$query = $this->db->get();
	  	return $query;
	}

	public function getNews()
	 {
	  $this->db->select('*'); 
	  $this->db->from('sw_news');
	  $this->db->order_by("news_id", "DESC");
	  $query = $this->db->get();
	  return $query;
	 }

	public function getNewsbyCat($id)
	{
		$this->db->select('*'); 
	  	$this->db->from('sw_news');
	  	$this->db->where('category_id',$id);
	  	$this->db->order_by("news_id", "DESC");
	  	$query = $this->db->get();
	  	return $query;
	}

	public function getNewsbyId($id)
	{
		$this->db->select('*'); 
	  	$this->db->from('sw_news');
	  	$this->db->where('news_id',$id);
	  	$this->db->order_by("news_id", "DESC");
	  	$query = $this->db->get();
	  	return $query;
	}

	public function getNewsbyCatId()
	{
		$this->db->select('*'); 
	  	$this->db->from('sw_category');
	  	$query = $this->db->get();
	  	return $query;
	}
}
?>