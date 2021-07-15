<?php
	defined('BASEPATH') or die('No direct access script allowed!');

    require_once(APPPATH.'core/BaseModel.php');

	class Talent_model extends BaseModel
	{
		var $table = 'talents';


		public function where($params) {
			if(isset($params["keyword"])){
				$this->db->where("context.content LIKE '%".$params["keyword"]."%'");
				unset($params["keyword"]);
			}
			return parent::where($params);
		}
		public function search($filter = null, $limit = null){
			$this->db->join("context", "context.id = talents.id");
			if($filter)
				$this->where($filter);
			if(isset($limit)){
				$this->db->limit($limit["end"], $limit["start"]);
			}
			
			return parent::getDataByParam($filter);
		}

		public function count($filter = null){
			$this->db->join("context", "context.id = talents.id");
			if($filter)
				$this->where($filter);
			return parent::counts($filter);
		}
	}