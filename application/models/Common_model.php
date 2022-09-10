<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model
{
	function __construct(){
		parent::__construct();
	}
	
	function insert_data($table, $data)
	{
		$flag = $this->db->insert($table, $data);
		if($flag){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}
	
	function get_single($table, $filter)
	{
		$data = $this->db->get_where($table, $filter);
		if($data->num_rows() > 0){
			$data = $data->first_row("array");
			return $data;
		}else{
			return false;
		}
	}
	
	function get_single_by_condition($table, $filter, $order="")
	{
		if($order != ""){
			$this->db->order_by($order[0], $order[1]);
		}

		$data = $this->db->get_where($table, $filter);
		if($data->num_rows() > 0){
			$data = $data->first_row("array");
			return $data;
		}else{
			return false;
		}
	}
	
	function get_by_condition($table, $filter, $order="")
	{
		if($order != ""){
			$this->db->order_by($order[0], $order[1]);
		}

		$data = $this->db->get_where($table, $filter);
		if($data->num_rows() > 0){
			$data = $data->result_array();
			return $data;
		}else{
			return false;
		}
	}
	
	function upload($input = "", $folder="default", $allowd="", $thumb="")
	{
		$this->load->library('upload');
		$this->load->library('image_lib');
		$structure = './uploads/';

		$folders = explode("/", $folder);
		
		foreach($folders as $dir){
			if($dir != ""){
				if (!file_exists($structure.$dir)){
					mkdir($structure.$dir, 0777, true);
					chmod($structure.$dir, 0777);
				}else{
					chmod($structure.$dir, 0777);
				}
				$structure .= $dir."/";
				$folder = $dir;
			}
		}
	
		if (!file_exists($structure.'thumbs')) {
			mkdir($structure.'thumbs', 0777, true);
			chmod($structure.'thumbs', 0777);
		}else{
			chmod($structure.'thumbs', 0777);
		}
	
		$config['upload_path']	= $structure;
		$config['allowed_types']= $allowd;
		$config['max_size']		= 2048;
		$config['file_name']	= date('YmdHis').rand(0,999);

		$this->upload->initialize($config);
	
		if($this->upload->do_upload($input)){
			$data = $this->upload->data();

			if($thumb != "" && isset($thumb['width']) && isset($thumb['height'])){
				$thumbconfig = array(
					'image_library'  => 'gd2',
					'source_image'   => $data ['full_path'],
					'new_image'   => $data ['file_path']."thumbs",
					'maintain_ratio' => TRUE,
					'create_thumb'   => TRUE,
					'thumb_marker'   => "",
					'width'    => $thumb['width'],
					'height'    => $thumb['height']
				);

				$this->image_lib->initialize($thumbconfig);

				if(!$this->image_lib->resize()){
					$error = $this->image_lib->display_errors();
					print_r($error);
				}
			}
			return $data;
		}
	}
	
	
	function get_all($table, $order_by="id", $order="ASC")
	{
	    $this->db->order_by($order_by, $order);
		$data = $this->db->get($table);
		if($data->num_rows() > 0){
			$data = $data->result_array();
			return $data;
		}else{
			return false;
		}
	}
	
	function update_data($table, $data, $filter)
	{
		$this->db->where($filter);
	
		$flag = $this->db->update($table, $data);
		if($flag){
			return true;
		}else{
			return false;
		}
	}
	
	function delete_data($table, $filter)
	{
		$this->db->where($filter);
		$flag = $this->db->delete($table);
		/*$data = array('is_deleted'=> 1);
		$flag = $this->db->update($table, $data);*/
		if($flag){
			return true;
		}else{
			return false;
		}
	}

}
?>