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
			if(isset($params["age_from"]) && $params["age_from"]){
				$this->db->where("talents.age > '" . $params["age_from"] . "'");
				unset($params['age_from']);
			}
			if(isset($params["age_to"]) && $params["age_to"]){
				$this->db->where("talents.age < '" . $params["age_to"] . "'");
				unset($params['age_to']);
			}	
			if(isset($params["media"])){
				if($params["media"] == "youtube")
					$this->db->order_by("talents.yt_fw", "DESC");

				if($params["media"] == "instagram")
					$this->db->order_by("talents.it_fw", "DESC");

				if($params["media"] == "facebook")
					$this->db->order_by("talents.fb_fw", "DESC");

				if($params["media"] == "tiktok")
					$this->db->order_by("talents.tt_fw", "DESC");

				if($params["media"] == "twitter")
					$this->db->order_by("talents.tw_fw", "DESC");

				if($params["media"] == "follow")
					$this->db->order_by("talents.fw_count", "DESC");

				unset($params["media"]);
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
			$data = parent::getDataByParam($filter);
			// print_r($this->db->last_query());
			return $data;
		}

		public function count($filter = null){
			$this->db->join("context", "context.id = talents.id");
			if($filter)
				$this->where($filter);
			return parent::counts($filter);
		}
	}