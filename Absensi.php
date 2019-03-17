<?php

class Absensi{
	private $id_absensi;
	private $id_user;
	private $id_jadwal;
	private $foto;

	public function getIdAbsensi(){
		return $this -> id_absensi;
	}
	public function getIdUser(){
		return $this -> id_user;	
	}
	public function getIdJadwal(){
		return $this -> id_jadwal;
	}
	public function getFoto(){
		return $this -> foto;
	}
	public function setIdAbsensi($id_absensi){
		$this -> id_absensi = $id_absensi;
	}
	public function setIdUser($id_user){
		$this -> id_user = $id_user;
	}
	public function setIdJadwal($id_jadwal){
		$this -> id_jadwal = $id_jadwali;
	}
	public function setFoto($foto){
		$this -> foto = $foto;
	}
}

?>