<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class proxy extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(get_class($this).'_model', 'model');
	}

	public function index(){
		$data = array(
			"result" => $this->model->fetch("*", PROXY, "uid = '".session("uid")."'", "id", "DESC")
		);
		$this->template->title(l('Proxy management'));
		$this->template->build('index', $data);
	}

	public function update(){
		$data = array(
			"result"  => $this->model->get("*", PROXY, "id = '".get("id")."'"),
		);
		$this->template->title(l('Proxy management'));
		$this->template->build('update', $data);
	}

	public function ajax_update(){
		$id = (int)post("id");

		if(post("name") == ""){
			ms(array(
				"st"    => "error",
				"label" => "bg-red",
				"txt"   => l('Name is required')
			));
		}

		if(post("proxy") == ""){
			ms(array(
				"st"    => "error",
				"label" => "bg-red",
				"txt"   => l('Proxy is required')
			));
		}

		$data = array(
			"name"            => post("name"),
			"proxy"           => post("proxy"),
			"uid"             => session("uid"),
			"status"          => (int)post("status"),
			"changed"         => NOW
		);

		if($id == 0){
			$data["created"]  = NOW;
			$this->db->insert(PROXY, $data);
			$id = $this->db->insert_id();
		}else{
			$this->db->update(PROXY, $data, array("id" => $id));
		}

		ms(array(
			"st"    => "success",
			"label" => "bg-light-green",
			"txt"   => l('Update successfully')
		));
	}

	public function ajax_action_item(){
		$id = (int)post('id');
		$POST = $this->model->get('*', PROXY, "id = '{$id}'");
		if(!empty($POST)){
			switch (post("action")) {
				case 'delete':
					$this->db->delete(PROXY, "id = '{$id}'");
					break;
				
				case 'active':
					$this->db->update(PROXY, array("status" => 1), "id = '{$id}'");
					break;

				case 'disable':
					$this->db->update(PROXY, array("status" => 0), "id = '{$id}'");
					break;
			}
		}

		ms(array(
			"st"    => "success",
			"label" => "bg-light-green",
			"txt"   => l('Update successfully')
		));
	}

	public function ajax_action_multiple(){
		$ids =$this->input->post('id');
		if(!empty($ids)){
			foreach ($ids as $id) {
				$POST = $this->model->get('*', PROXY, "id = '{$id}'");
				if(!empty($POST)){
					switch (post("action")) {
						case 'delete':
							$this->db->delete(PROXY, "id = '{$id}'");
							break;
						case 'active':
							$this->db->update(PROXY, array("status" => 1), "id = '{$id}'");
							break;

						case 'disable':
							$this->db->update(PROXY, array("status" => 0), "id = '{$id}'");
							break;
					}
				}
			}
		}

		print_r(json_encode(array(
			'st' 	=> 'success',
			'txt' 	=> l('Update successfully')
		)));
	}
}