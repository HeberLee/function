<?php
	class Linear_list{
		private $arr;
		private $len;
		private $capacity;
		public function create($capacity){
			$this->capacity = $capacity;
			$this->arr = array($capacity);
			$this->len = 0;
		}

		public function destory(){
			unset($this->arr);
		}

		public function zero(){
			return $this->len == 0?true:false;
		}

		public function full(){
			return $this->len == $this->capacity?true:false;
		}

		public function len(){
			echo "  ".$this->len;
		}

		public function add($site,$data){
			if($this->full()){
				echo "full";
				return false;
			}
			else if($site > $this->len){
				echo "error site!";
			}
			else if($site <= $this->len){
				for($i=$site;$i<$this->len;$i++){
					$temp[$i] = $this->arr[$i];  
				}
				$this->arr[$site] = $data;
				$this->len++;
				for($i=$site+1;$i<$this->len;$i++){
					$this->arr[$i] = $temp[$i-1];
				}
				return true;
			}
		}
		public function get($site = 0){
			if($this->zero()){
				echo "empty";
				return false;
			}
			else if($site >= $this->len || $site < 0){
				echo "error site";
			}
			else{
				$data = $this->arr[$site];
				$this->len--;
				for($i=$site;$i<$this->len;$i++){
					echo $this->arr[$i]."will become".$this->arr[$i+1];
					$this->arr[$i] = $this->arr[$i+1];

				}
				unset($this->arr[$this->len]);
				
				echo $data;
			}
		}
		public function traverse(){
			if($this->zero()){
				echo "<br>empty<br>";
				return false;
			}
			else{
				echo "<br>";
				for($i=0;$i<$this->len;$i++){
					echo $this->arr[$i];
				}
				echo "<br>";
			}
		}

	}