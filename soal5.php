<?php
class mobil{
	public $suara,$berat,$jenis;
	public function __construct($suara,$warna,$jenis){
		$this->suara=$suara;
		$this->warna=$warna;
		$this->jenis=$jenis;
	}
	public function get_suara(){
		return $this->suara;
	}
	public function get_warna(){
		return $this->warna;
	}
	public function get_jenis(){
		return $this->jenis;
	}
	
}
?>