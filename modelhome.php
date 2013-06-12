<?php

class ModelHome extends Model {

  
	function ModelHome()
    {
        parent::Model();
		
	
    }
	
	//////////////////////////// email existance /////////////////////////////////
	function isEmailExist()
	{		
		$email = trim($this->input->request('email'));

		$sql = "SELECT COUNT(*) as CNT FROM mh_users_master WHERE email = '".$email."'";
		$recordSet = $this->db->query($sql);
		$cnt = $recordSet->row();
		return $cnt->CNT;
			
	}
	
	////////////////////////////// Login Info //////////////////////////////////
	
	
	function loginInfo($id)
	{
		$date = date('Y-m-d h:i:s');
		$sql = "update mh_users_master set logintime = '".$date."', islogin = 'Y' where id = $id";
		if($this->db->simple_query($sql)){}

	}
	
	function logoutInfo($id)
	{
		$sql = "update mh_users_master set islogin = 'N' where id = $id";
		if($this->db->simple_query($sql)){}

	}
	
		function getAttributeList($attributeId,$languageId)
		{
			
			$sql="SELECT id,name FROM mh_attributes_details WHERE attributeId='".$attributeId."' AND status = '1'";
			if($this->db->simple_query($sql))
			{
				$recordSet = $this->db->query($sql);
			   	$rs = array();
			
				if($recordSet->num_rows() > 0)
				{
					$n=0;
					foreach ($recordSet->result() as $row)
					{
						$rs[$n]['id']=$row->id;
						$rs[$n]['name']=$row->name;
						$n++;
					}
					return $rs;
				}
			}
			else
			{
				log_message('error',": ".$this->db->_error_message() );
				return false;
			}
	
	}
	
//	}
	
//////////////////////////////////////
	function getStateName($id,$languageId)
	{
		$sql="SELECT * FROM mh_states_details  where id='".$id."' and languageId = '".$languageId."'";	
		
		$rs = false;
		if($this->db->simple_query($sql))
		{
			$recordSet = $this->db->query($sql);
           	$rs = array();
			$isEscapeArr = array();
			if($recordSet->num_rows() > 0)
			{
				$n=0;
				$fields = $recordSet->list_fields();
				foreach ($recordSet->result() as $row)
				{	
					$lang_id = $row->languageId;
 					for($i=0; $i<count($fields) ; $i++)
					{
						$field_name = $fields[$i];
						$rs[$field_name]=$row->$field_name;
					}
					$n++;
				}
				return $rs['state'];
			}
        }
		else
		{
			log_message('error',": ".$this->db->_error_message() );
			return false;
		}
		return $rs;		
	}
	


/////////////////////////////////////////////////////////////////////////////

		function identifyUser($iriId)
		{
			$sql = "select * from `mh_invitation` where token = '".$iriId."'";
			if($this->db->simple_query($sql))
			{
				$recordSet = $this->db->query($sql);
			   	$rs = array();
			
				if($recordSet->num_rows() > 0)
				{
					$n=0;
					foreach ($recordSet->result() as $row)
					{
						$rs['mId']=$row->mId;
						$rs['memberId']=$row->memberId;
						$rs['fName']=$row->fName;
						$rs['lName']=$row->lName;
						$rs['mailId']=$row->mailId;
						$rs['inviteDate']=$row->inviteDate;
						$rs['imviteStatus']=$row->imviteStatus;
						$rs['isBlocked']=$row->isBlocked;
						$rs['inviteSendDate']=$row->inviteSendDate;
						$rs['token']=$row->token;
						$rs['invitRcevDate']=$row->invitRcevDate;
						
					}
					return $rs;
				}
				else
				{
				$rs['error'] = "Sorry <br> Invalid Token";
				return $rs;
				}
			}
			else
			{
				log_message('error',": ".$this->db->_error_message() );
				return false;
			}
	
	}
	

//////////////////////////////////////////////////////////////////////////////

  function getCountryList($languageId)
		{
			
			$sql="SELECT id,name FROM mh_countries_details where languageId='".$languageId."'";
			if($this->db->simple_query($sql))
			{
				$recordSet = $this->db->query($sql);
			   	$rs = array();
			
				if($recordSet->num_rows() > 0)
				{
					$n=0;
					foreach ($recordSet->result() as $row)
					{
						$rs[$n]['id']=$row->id;
						$rs[$n]['name']=$row->name;
						$n++;
					}
					return $rs;
				}
			}
			else
			{
				log_message('error',": ".$this->db->_error_message() );
				return false;
			}
	
	}
	
	
	function getStateList($CountryId,$languageId)
		{
			
			$sql="SELECT id,state FROM mh_states_details where countryId='".$CountryId."' and languageId='".$languageId."'";
			if($this->db->simple_query($sql))
			{
				$recordSet = $this->db->query($sql);
			   	$rs = array();
			
				if($recordSet->num_rows() > 0)
				{
					$n=0;
					foreach ($recordSet->result() as $row)
					{
						$rs[$n]['id']=$row->id;
						$rs[$n]['state']=$row->state;
						$n++;
					}
					return $rs;
				}
			}
			else
			{
				log_message('error',": ".$this->db->_error_message() );
				return false;
			}
	
	}
	
	
	function getCityList($StateId,$languageId)
		{
			
			$sql="SELECT id,city FROM mh_city_details where stateId ='".$StateId."' and languageId='".$languageId."'";
			if($this->db->simple_query($sql))
			{
				$recordSet = $this->db->query($sql);
			   	$rs = array();
			
				if($recordSet->num_rows() > 0)
				{
					$n=0;
					foreach ($recordSet->result() as $row)
					{
						$rs[$n]['id']=$row->id;
						$rs[$n]['city']=$row->city;
						$n++;
					}
					return $rs;
				}
			}
			else
			{
				log_message('error',": ".$this->db->_error_message() );
				return false;
			}
	
	}
	



	
}

?>
