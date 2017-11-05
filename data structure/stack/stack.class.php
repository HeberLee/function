<?php
	class Stack{
		private $top;
		private $len;
		private $capacity;
		private $arr;
		public function create($size){
			$this->capacity = $size;
			$this->arr = array($this->capacity);
			$this->clean();

		}

		public function destroy(){
			unset($this->arr);
		}

		public function clean(){
			$this->top = -1;
			$this->len = 0;
		}

		public function full(){
			return $this->len == $this->capacity?true:false;
		}

		public function zero(){
			return $this->len == 0?true:false;
		}

		public function push($data){
			if($this->full()){
				echo "stack is full<br>";
				return false;
			}
			else{
				$this->arr[$this->top+1] = $data;
				$this->top++;
				$this->len++;
			}
		}


		public function pop(){
			if($this->zero()){
				echo "stack is empty!<br>";
				return false;
			}
			else{
				$data = $this->arr[$this->top];
				$this->top--;
				$this->len--;
				echo $data."<br>";
			}
		}

		public function len(){
			echo $this->len."<br>";
		}

		public function traverse(){
			if($this->zero()){
				echo "stack is empty!<br>";
				return false;
			}
			else{
				for($i = $this->top;$i >= 0;$i--){
					$data = $this->arr[$i];
					echo $data."<br>";
				}
			}
		}
	}