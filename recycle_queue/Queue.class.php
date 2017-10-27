<?php
class Queue{
	public  $capacity;
	public  $arr;
	public  $head;
	public  $tail;
	public  $len;
	public  function create($num){
		$this->capacity = $num;
		$this->arr = array();
		$this->init();
	}
	public  function destroy(){
		unset($this->arr);
	}
	public  function init(){
		$this->head = 0;
		$this->tail = 0;
		$this->len = 0;
	}
	public function zero(){
		return $this->len == 0?true:false;
	}
	public function full(){
		return $this->len == $this->capacity?true:false;
	}
	public function len(){
		return $this->len;
	}
	public function add($data){
		if($this->full()){
			echo "full";
			return false;
		}
		else{
			$this->arr[$this->tail] = $data;
			$this->tail++;
			$this->tail = $this->tail % $this->capacity;
			$this->len++;
			return true;
		}
	}
	public function get(){
		if($this->zero()){
			echo "empty";
			return false;
		}
		else{
			$data = $this->arr[$this->head];
			$this->head++;
			$this->head = $this->head % $this->capacity;
			$this->len--;
			echo $data;
		}
	}
	public function travel(){
		for($i=$this->head;$i<$this->len+$this->head;$i++){
			echo $this->arr[$i%$this->capacity];
		}
	}
}