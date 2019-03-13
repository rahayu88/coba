<? php

class pengurus extend Person{
	private $th_msk;
	private $kelas;
	private $thn_kepengurusan;
	private $jabatan;

	public function getThnMsk(){
		return $this -> th_msk;
	}
	public function getkelas(){
		return $this -> kelas;
	}
	public function getThn_kepengurusan(){
		return $this -> thn_kepengurusan;
	}
	public function getJabatan(){
		return $this -> jabatan;
	}

	public function setThnMsk($thn_msk){
		$this -> th_msk = $thn_msk;
	}
	public function getkelas($kelas){
		$this -> kelas = $kelas;
	}
	public function getThn_kepengurusan($thn_kepengurusan){
		$this -> thn_kepengurusan = $thn_kepengurusan;
	}
	public function getJabatan($jabatan){
		$this -> jabatan = $jabatan;
	}
}
?>