<?php
	class Binary_tree{
		private $arr;
		public function create($root){
			$this->arr = array('0'=>'$root');
		}

		public function get_len(){
			return count($this->arr);
		}

		public function destory(){
			unset($this->arr);
		}

		public function zero($site){
			if($site == 0){
				return true;
			}
			else{
				return false;
			}
		}

		public function add($data){
			$this->arr = $data;
		}

		public function add_one($root_site,$dir,$data){
			if($this->zero($root_site)){
				echo "root is empty!";
			}
			else if($dir == 0){
				$site = $root_site*2+1;
				$this->arr[$site] = $data;
			}
			else if($dir == 1){
				$site = $root_site*2+2;
				$this->arr[$site] = $data;
			}
		}

		public function del($root_site,$dir){
			if($this->zero($root_site)){
				echo "root is empty!";
			}
			else if($dir = 0){
				$site = $root_site*2+1;
				$this->arr[$site] = 0;
			}
			else if($dir = 1){
				$site = $root_site*2+2;
				$this->arr[$site] = 0;
			}
		}

		public function pre_traverse($root = '0'){
			if($root<$this->get_len() && $this->arr[$root] != 0){
				echo $this->arr[$root]."<br>";
				$this->pre_traverse($root*2+1);
				$this->pre_traverse($root*2+2);
			}
		}

		public function mid_traverse($root = '0'){
			if($root<$this->get_len() && $this->arr[$root] != 0){
				$this->mid_traverse($root*2+1);
				echo $this->arr[$root]."<br>";
				$this->mid_traverse($root*2+2);
			}
		}

		public function las_traverse($root = '0'){
			if($root<$this->get_len() && $this->arr[$root] != 0){
				$this->las_traverse($root*2+1);
				$this->las_traverse($root*2+2);
				echo $this->arr[$root]."<br>";
			}
		}
	}
