<?php
class getUAG extends CI_Model
{

function __construct()
{
parent::__construct();
$this->load->database();

}

function getName($id)
{
$this->db->where("id", $id);
$this->db->select("id, name as studentName"); // selects columns and renames the name column
//return $this->db->get("Initial")->result(); //object array containing all results
return $this->db->get("Initial")->row(); //one object containing the first result

}

function getFullName($id)
{
//$this->db->where("id", $id);
$this->db->select("name, surname"); // selects columns and renames the name column
return $this->db->get("Initial")->result(); //object array containing all results
//return $this->db->get("Initial")->row(); //one object containing the first result

}

function getAllNames()
{
//$this->db->where("id", $id);// No filtering since we want all the names in the db
$this->db->select("name as studentName"); // select the name column
return $this->db->get("Initial")->result(); //object array containing all results
//return $this->db->get("Initial")->row(); //one object containing the first result
}

function getAllData()
{
	$this->db->get("Initial");
	return $this->db->get("Initial")->result();
}


}