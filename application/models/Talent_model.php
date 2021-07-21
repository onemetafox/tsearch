<?php
	defined('BASEPATH') or die('No direct access script allowed!');

    require_once(APPPATH.'core/BaseModel.php');

	class Talent_model extends BaseModel
	{
		var $table = 'talents';
		var $belonging = [ "学生", "会社員", "主婦・家事手伝い", "パート・アルバイト", "自営業", "その他" ];
		var $skills = [ "地上波番組", "雑誌・カタログ", "CM", "ファッションショー", "ドラマ・舞台", "ラジオ・MC", "ミス〇〇","サロンモデル", "撮影会", "ライブ/イベント","ライター", "モニター","エキストラ"];
		var $activity_bases = ["北海道","青森県","岩手県","東京都", "宮城県","秋田県","山形県","福島県","茨城県","栃木県","群馬県","埼玉県","千葉県","神奈川県","新潟県","富山県","石川県","福井県","山梨県","長野県","岐阜県", "静岡県","愛知県","三重県","滋賀県","京都府","大阪府","兵庫県","奈良県","和歌山県","鳥取県","島根県","岡山県","広島県","山口県","徳島県","香川県","愛媛県","高知県","福岡県","佐賀県","長崎県","熊本県","大分県","宮崎県","鹿児島県","沖縄県"];
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
			// print_r($params);
			if(isset($params["active"])){
				$actives = $params["active"];
				$this->db->group_start();
				foreach($actives as $key => $item){
					$this->db->like("activity_base",$this->activity_bases[$key]);
				}
				$this->db->group_end();
				unset($params["active"]);
			}
			if(isset($params["belonging"])){
				$this->db->group_start();
				foreach($params["belonging"] as $key => $item){
					$this->db->like("belonging",$this->belonging[$key]);
				}
				$this->db->group_end();
				unset($params["belonging"]);
			}
			if(isset($params["talent"])){
				$this->db->group_start();
				foreach($params["talent"] as $key => $item){
					$this->db->like("talent",$this->skills[$key]);
				}
				$this->db->group_end();
				unset($params["talent"]);
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