<?php

class Proj5Controller extends CI_Controller{

	public function openAskVet(){
		$this->load->helper('url');
		$this->load->view('askvet');
	}

	public function openContact(){
		// $this->load->helper('url');

		//Use this controller to open Contacts page

		$this->load->helper(array('form','url'));
		$this->load->view('contact');
	}

	public function openServices(){
		$this->load->helper('url');
		$this->load->view('services');
	}
	public function openIndex(){
		$this->load->helper('url');
		$this->load->view('index');
	}
	public function openSubscribe(){
		$this->load->helper(array('url','form'));
		$this->load->view('subscribe');
	}

	public function getDetailsFromContactPHP(){
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		$contactname = $this->input->post('contactname');
		$contactemail = $this->input->post('contactemail');
		$contactcomments = $this->input->post('contactcomments');

		$this->form_validation->set_rules('contactname','Name', 'trim|required|alpha');
		$this->form_validation->set_rules('contactcomments','Comments', 'trim|required');
		$this->form_validation->set_rules('contactemail','Email', 'trim|required|valid_email');

		echo '<script>';
		echo 'alert("'.$contactname.' '.$contactemail.' '.$contactcomments.'");';
		echo '</script>';

		if ($this->form_validation->run() == FALSE)
        {
        	$this->load->helper('url');
			$this->load->view('contact');
        }
        else{
        	//Send the received data to the model which will update this into the database
			$this->load->model('Proj5Model');
			$returnValue = $this->Proj5Model->insertIntoContactsDB($contactname,$contactemail,$contactcomments);
			if($returnValue == 1){
				$this->load->helper('url');
				$this->load->view('index');
			}
			else{
				//Do nothing as of now
			}
        }

		//echo '<script>';
		//echo 'alert("'.$contactname.' '.$contactemail.' '.$contactcomments.'");';
		//echo '</script>';

		

	}

	public function getDetailsFromSubscribePHP(){
		//$this->load->helper(array('form'));

		$this->load->library('form_validation');
		$this->load->helper(array('url','form'));

		$subscribefullname = $this->input->post('subscribefullname');
		$subscribeaddress = $this->input->post('subscribeaddress');
		$subscribeemail = $this->input->post('subscribeemail');
		$subscribephone = $this->input->post('subscribephone');
		$subscribepassword = $this->input->post('subscribepassword');
		$servicedropdownid = $this->input->post('servicedropdown');
		$petdropdownid = $this->input->post('petdropdown');

		//echo '<script>';
		//echo 'alert("'.$servicedropdownid.' '.$petdropdownid.'");';
		//echo '</script>';

		$this->form_validation->set_rules('subscribefullname','Name', 'trim|required|alpha');
		$this->form_validation->set_rules('subscribeaddress','Address', 'trim|required');
		$this->form_validation->set_rules('subscribeemail','Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('subscribephone','Phone', 'trim|required|numeric');
		$this->form_validation->set_rules('subscribepassword','Password', 'trim|required|min_length[8]|max_length[16]|regex_match[/[A-Z]/]|regex_match[/[a-z]/]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->load->model('Proj5Model');
			$this->load->helper(array('url','form'));
			$this->load->library('form_validation');
		
			$this->data['servicelistsubscribe'] = $this->Proj5Model->getServiceDataDB();
			$this->data['petlistsubscribe'] = $this->Proj5Model->getPetDataDB();
			$this->load->view('subscribe',$this->data);
        }
        else{
        	$this->load->model('Proj5Model');
			list($clientIDExists,$clientlist) = $this->Proj5Model->getClientWithClientEmail($subscribeemail);
			if($clientIDExists == '1'){
				//Client ID already into database so use the clientID to insert into the database
				foreach($clientlist as $client){
					$clientID = $client->clientid;
				}

				$returnValue = $this->Proj5Model->insertIntoSubscribeDB($clientID,$petdropdownid,$servicedropdownid);
				if($returnValue == 1){
					$this->load->helper('url');
					$this->load->view('index');
				}

			}
			else if($clientIDExists == '0'){
				//Client ID not into the database so enter the client info into the database and then retrieve the client ID to insert into the database

				$this->load->helper('security');

				//$returnValue = $this->Proj5Model->insertClientRecord($subscribefullname,$subscribeaddress,$subscribephone,$subscribeemail,md5($subscribepassword));

				$returnValue = $this->Proj5Model->insertClientRecord($subscribefullname,$subscribeaddress,$subscribephone,$subscribeemail,do_hash($subscribepassword,"md5"));

				list($clientIDExists,$clientlist) = $this->Proj5Model->getClientWithClientEmail($subscribeemail);
				foreach($clientlist as $client){
					$clientID = $client->clientid;
				}

				$returnValue = $this->Proj5Model->insertIntoSubscribeDB($clientID,$petdropdownid,$servicedropdownid);
				if($returnValue == 1){
					$this->load->helper('url');
					$this->load->view('index');
				}

			}
    	}

		


		//Send the received data to the model which will update this into the database
		/*$this->load->model('Proj5Model');
		$returnValue = $this->Proj5Model->insertIntoContactsDB($contactname,$contactemail,$contactcomments);
		if($returnValue == 1){
			$this->load->helper('url');
			$this->load->view('index');
		}
		else{
			//Do nothing as of now
		}*/


		

	}

	public function setServiceToServicePHP(){
		$this->load->model('Proj5Model');
		$this->load->helper('url');
		$this->data['servicelist'] = $this->Proj5Model->getServiceDataDB(); 
   		$this->load->view('services', $this->data);
	}

	public function setServiceAndPetToSubscribePHP(){
		
		//Use this controller to open Subscribe Page in Browser

		$this->load->model('Proj5Model');
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		
		$this->data['servicelistsubscribe'] = $this->Proj5Model->getServiceDataDB();
		$this->data['petlistsubscribe'] = $this->Proj5Model->getPetDataDB();
		$this->load->view('subscribe',$this->data); 
	}

	public function setQuestionsToAskVetPHP(){

		//Use this controller to open Ask Vet page

		$this->load->model('Proj5Model');
		$this->load->helper('url');
		$this->data1['questions'] = $this->Proj5Model->getQuestionsDataDB(); 
   		$this->load->view('askvet', $this->data1);
	}

}

?>