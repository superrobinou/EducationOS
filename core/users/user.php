<?php
/**
 * @author rthomas
 *
 */
class User{
	var $idUser;
	var $name;
	var $firstname;
	var $motdepasse;
	var $email;
	function User($idUser,$name,$firsname,$password,$mail){
		$this->idUser=$idUser;
		$this->name=$name;
		$this->firstname=$firsname;
		$this->motdepasse=$password;
		$this->email=$mail;
	}
	function Connect($idUser,$password){
	}
	function Disconnect($idUser){
	}
	function ChangeInformations($name,$firsname,$password=null,$password2=null,$mail=null){
		if($password<>null){
			if($password2=password){
				
			}
		else if($email<>null){
			echo "hello";
		}
		}
	}
	function changepasseword($idUser,$password,$password2){
		
	}
	function changeemail($idUser,$password,$password2){
		
	}
}
