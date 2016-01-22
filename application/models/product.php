<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set("America/Los_Angeles");

class Product extends CI_Model
{
	public function get_all_products()
	{
		return $this->db->query('SELECT * FROM semi_restful.products')->result_array();
	}

	public function get_product_by_id($id)
	{
		$query = "SELECT * FROM semi_restful.products WHERE products.id = ?";
		$values = array($id);
		return $this->db->query($query,$values)->row_array();
	}

	public function add_product($product)
	{
		$query = "INSERT INTO semi_restful.products (name, description, price, created_at, updated_at) VALUES (?,?,?,?,?)";
		$values = array($product['name'],$product['description'],$product['price'],date("Y-m-d, H:i:s"),date("Y-m-d, H:i:s"));
		return $this->db->query($query,$values);
	}

	public function update_product($product)
	{
		$query = "UPDATE semi_restful.products SET name = ?, description = ?, price = ?, updated_at = ? WHERE id = ?";
		$values = array($product['name'],$product['description'],$product['price'],date('Y-m-d, H:i:s'),$product['id']);
		return $this->db->query($query,$values);
	}

	public function delete_product($id)
	{
		$query = "DELETE FROM semi_restful.products WHERE id = ?";
		$values = $id;
		return $this->db->query($query,$values);
	}
}