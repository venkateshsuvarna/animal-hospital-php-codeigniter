<?php

class Proj5Model extends CI_Model{

	function insertIntoContactsDB($contactname,$contactemail,$contactcomments){

		$data = array('name' => $contactname, 'email' => $contactemail, 'questioncomments' => $contactcomments);
		$this->db->insert('contact',$data);

		if($this->db->affected_rows() == 1){
			return 1;
		}
		else{
			return 0;
		}

	}

	function insertIntoSubscribeDB($clientID,$petdropdownid,$servicedropdownid){

		$data = array('clientid' => $clientID, 'serviceid' => $servicedropdownid, 'petid' => $petdropdownid,'date' => date('y-m-d'));
		$this->db->insert('subscription',$data);

		if($this->db->affected_rows() == 1){
			return 1;
		}
		else{
			return 0;
		}

	}

	function insertClientRecord($subscribefullname,$subscribeaddress,$subscribephone,$subscribeemail,$encryptedsubscribepassword){

		$data = array('name' => $subscribefullname, 'address' => $subscribeaddress,'phone' => $subscribephone, 'email' => $subscribeemail, 'password' => $encryptedsubscribepassword);
		$this->db->insert('client',$data);

		if($this->db->affected_rows() == 1){
			return 1;
		}
		else{
			return 0;
		}

	}

	function getServiceDataDB(){
		$this->db->select("serviceid,servicename,description"); 
  		$this->db->from('service');
  		$query = $this->db->get();
  		return $query->result();
	}

	function getQuestionsDataDB(){
		$this->db->select("question,answer"); 
  		$this->db->from('questions');
  		$query = $this->db->get();
  		return $query->result();
	}

	function getPetDataDB(){
		$this->db->select("petid,petname"); 
  		$this->db->from('pet');
  		$query = $this->db->get();
  		return $query->result();
	}

	function getClientWithClientEmail($subscribeemail){
		$this->db->select("clientid,email"); 
  		$this->db->from('client');
  		$this->db->where('email',$subscribeemail);
  		$query = $this->db->get();

  		if($query->num_rows() > 0){
  			//Client email exists with the email id mentioned
  			return array('1',$query->result());
  		}
  		else{
  			return array('0',$query->result());
  		}


  		return $query->result();
	}

}

?>