<?php defined('BASEPATH') or exit('No Direct Scrept Allowed!');

class App_cookies extends MX_Controller{

	public $data, $logedin, $error, $success;

	function __construct()
	{
		parent::__construct();
		$this->data['title'] = "Cookies";
	}
	
	
	function verify($shop)
	{
		if($shop != ""){
			$table 	= 'users';
			$filter = array('site_url' => $shop, 'is_status' => 1, 'is_deleted' => 0);
			$logedin = $this->common_model->get_single($table, $filter);
			$this->data['shop'] = $shop;
			return $logedin;
		}else{
			redirect("auth/access/");exit;
		}
	}
	
	
	function dashboard($shop)
	{
		$this->logedin = $this->verify($shop);
		$this->data['logedin'] = $this->logedin;
		$this->load_view();
	}
	

	function load_view($view = "view_cookies")
	{
		$this->load->view('app_header', $this->data);
		$this->load->view('app_sidebar', $this->data);
		$this->load->view($view, $this->data);
		$this->load->view('app_footer');
	}
	
	
	function get_cookies($shop)
	{
		$this->logedin = $this->verify($shop);
		
		$joinColumsName = array("id, sr_no, cookie_name, cookie_provider, cookie_group, cookie_description, cookie_lifetime, cookie_type");
		$aColumns = array("sr_no","cookie_name","cookie_provider","cookie_group","cookie_description","cookie_lifetime","cookie_type");
		$findColumns = array("sr_no","cookie_name","cookie_provider","cookie_group","cookie_description","cookie_lifetime","cookie_type");
		
		$this->db->where('user_id', $this->logedin['id']);
		
		$sTable = 'cookies';

		$iDisplayStart  = $this->input->get_post('iDisplayStart', true);
		$iDisplayLength = $this->input->get_post('iDisplayLength', true);
		$iSortCol_0     = $this->input->get_post('iSortCol_0', true);
		$iSortingCols   = $this->input->get_post('iSortingCols', true);
		$sSearch        = $this->input->get_post('sSearch', true);
		$sEcho          = $this->input->get_post('sEcho', true);

		// Paging
		if(isset($iDisplayStart) && $iDisplayLength != '-1')
		{
			$this->db->limit($this->db->escape_str($iDisplayLength), $this->db->escape_str($iDisplayStart));
		}

		// Ordering
		if(isset($iSortCol_0))
		{
			for($i=0; $i<intval($iSortingCols); $i++)
			{
				$iSortCol = $this->input->get_post('iSortCol_'.$i, true);
				$bSortable = $this->input->get_post('bSortable_'.intval($iSortCol), true);
				$sSortDir = $this->input->get_post('sSortDir_'.$i, true);

				if($bSortable == 'true')
				{
					 $this->db->order_by($aColumns[intval($this->db->escape_str($iSortCol))], $this->db->escape_str($sSortDir));
				}
			}
		}

		if(isset($sSearch) && !empty($sSearch)){
			$this->db->group_start();
			
			for($i=0; $i<count($findColumns); $i++){
				$bSearchable = $this->input->get_post('bSearchable_'.$i, true);

				// Individual column filtering
				if(isset($bSearchable) && $bSearchable == 'true'){
					if($i==0){
						$this->db->where($findColumns[$i]." LIKE '%".$this->db->escape_like_str($sSearch)."%' ");
					}
					elseif($i==count($findColumns)){
						$this->db->or_where($findColumns[$i]." LIKE '%".$this->db->escape_like_str($sSearch)."%' )");
					}else{
						$this->db->or_where($findColumns[$i]." LIKE '%".$this->db->escape_like_str($sSearch)."%' ");
					}
					//$mCount++;
				}
			}
			
			$this->db->group_end();
		}
		
		// Select Data
		$this->db->select('SQL_CALC_FOUND_ROWS '.str_replace(' , ', ' ', implode(', ', $joinColumsName)), false);
		$rResult = $this->db->get($sTable);

		// Data set length after filtering

		$this->db->select('FOUND_ROWS() AS found_rows');
		$iFilteredTotal = $this->db->get()->row()->found_rows;

		// Total data set length

		$iTotal = $this->db->count_all($sTable);

		// Output

		$output = array(
			'sEcho' => intval($sEcho),
			'iTotalRecords' => $iTotal,
			'iTotalDisplayRecords' => $iFilteredTotal,
			'aaData' => array()
		);

		foreach($rResult->result_array() as $aRow) {
			$row = array();

			foreach ($aColumns as $col){
				
				$row[] = $aRow[$col];
			
			}
			
			$delete = "return confirm('Are you sure? You want to delete?')";
			$row[] = '<div class="hidden-sm hidden-xs action-buttons">
						<a class="green" href="'.base_url().'app_cookies/edit_cookies/'.$shop.'/'.$aRow['id'].'">
							<i class="ace-icon fa fa-pencil bigger-130"></i>
						</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="red delete_link" href="'.base_url().'app_cookies/delete_cookies/'.$shop.'/'.$aRow['id'].'" onclick="'.$delete.'">
							<i class="ace-icon fa fa-trash-o bigger-130"></i>
						</a>
					</div>';

			$output['aaData'][] = $row;

		}
		echo json_encode($output);
	}
	
	
	function add_cookies($shop)
	{
		$this->logedin = $this->verify($shop);
		$this->data['logedin'] = $this->logedin;
		
		$this->data['page'] = "Create New Cookies";
		$this->data['groups'] = $this->common_model->get_by_condition("cookie_groups", array('user_id' => $this->logedin['id'], 'is_enabled' => "Yes"));
		$view = "create_cookies";
		$this->load_view($view);
	}
	
	
	function get_cookies_post()
	{
		$data['user_id'] = $this->logedin['id'];
		$data['is_enabled'] = $this->input->post('is_enabled');
		$data['cookie_name'] = $this->input->post('cookie_name');
		$data['cookie_provider'] = $this->input->post('cookie_provider');
		$data['cookie_group'] = $this->input->post('cookie_group');
		$data['cookie_description'] = $this->input->post('cookie_description');
		$data['cookie_lifetime'] = $this->input->post('cookie_lifetime');
		$data['cookie_type'] = $this->input->post('cookie_type');
		$data['updated_date'] = date('Y-m-d H:i:s');

		return $data;
	}

	function create_new_cookies()
	{
		$shop = $_POST['domain'];
		$this->logedin = $this->verify($shop);
		$this->data['logedin'] = $this->logedin;
		
		$data = $this->get_cookies_post();
		$data['created_date'] = date('Y-m-d H:i:s');
		
		$table = "cookies";
		$get = $this->common_model->get_single_by_condition($table, array('user_id' => $this->logedin['id']), array('sr_no', "desc"));

		$data['sr_no'] = 1;
		if($get != false){
			$data['sr_no'] = $get['sr_no']+1;
		}
		
		$flag = $this->common_model->insert_data($table, $data);
		
		redirect("app_cookies/dashboard/".$shop);
	}
	
	
	function delete_cookies($shop, $id = "")
	{
		if($id != ""){
			$filter = array("id" => $id);
			$table = "cookies";
			
			$data = $this->common_model->get_single($table, $filter);
			if ($data != false){
				$flag = $this->common_model->delete_data($table, $filter);
			}
		}
		redirect("app_cookies/dashboard/".$shop);
	}
	
	
	function edit_cookies($shop, $id = "")
	{
		$this->logedin = $this->verify($shop);
		$this->data['logedin'] = $this->logedin;
		if ($id != "") {
			$filter = array('id' => $id, 'user_id' => $this->logedin['id']);
			$table = "cookies";
			$data = $this->common_model->get_single($table, $filter);
			$groups = $this->common_model->get_by_condition("cookie_groups", array('user_id' => $this->logedin['id'], 'is_enabled' => "Yes"));
			if ($data != false) {
				$this->data['cookies'] = $data;
				$this->data['groups'] = $groups;
				$view = "edit_cookies";
				$this->data['page'] = "Edit Cookies";
				$this->load_view($view);
			}else{
				redirect("app_cookies/dashboard/".$shop);
			}
		}else{
			redirect("app_cookies/dashboard/".$shop);
		}
	}

	function update_cookies($id = "")
	{
		$shop = $_POST['domain'];
		$this->logedin = $this->verify($shop);
		$this->data['logedin'] = $this->logedin;
		
		if($id != "") 
		{
			$filter = array('id' => $id, 'user_id' => $this->logedin['id']);
			$table = "cookies";
			$flag = $this->common_model->get_single($table, $filter);
			if($flag != false){
				$data = $this->get_cookies_post();
				$flag = $this->common_model->update_data($table, $data, $filter);
			}
		}
		redirect("app_cookies/dashboard/".$shop);
	}
	
}
