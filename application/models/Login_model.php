<?php
class Login_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
function auth_user($username,$password){
			$query=$this->db->query("SELECT pegawai.id_pegawai ,pegawai.id_tim, pegawai.password , pegawai.nama , pegawai.id_tim , pegawai.akses , tbqrcode.qrcode, tabel_tim.nama_tim_leader FROM pegawai, tbqrcode, tabel_tim WHERE pegawai.id_pegawai='$username' AND pegawai.password='$password' and pegawai.id_tim = tbqrcode.id_tim and tabel_tim.id_tim = pegawai.id_tim LIMIT 1");
		
		return $query;
		
		
}
	







}

	/*function verify($data){
		if($data['username']=="" || $data['password']=="")
			return 0;
		$username = $data['username'];
		$password = $data['password'];

		$query = $this->db->query("SELECT id_pegawai from pegawai where id_pegawai='".$username."' and password='".$password."'");
		if(count($query->result()))
			return array("type" => "pegawai","result"=> $query->result());

		$query = $this->db->query("SELECT username from admin where username='".$username."' and password='".$password."'");
		if(count($query->result()))
			return array("type" => "admin","result"=> $query->result());

		/*$query = $this->db->query("SELECT npm from mahasiswa where npm='".$username."' and password='".$password."'");
		if(count($query->result()))
			return array("type" => "mahasiswa","result"=> $query->result());
	}
		

}*/
