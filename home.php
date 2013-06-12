<?php
class Home extends Controller {

  var $urlfix = "";
	
	function Home()
	{
		parent::Controller();
		$this->load->model('ModelUser');
		$this->load->model('ModelHome');
	}
	
	
	function index()
	{
		
		$data = $this->initData();

		$data['errmsg'] = $this->nsession->userdata('errmsg');
		$this->nsession->set_userdata('errmsg', "");
		
		$data['login_link'] = base_url()."home/login";
		
		$elements = array();
		$element_data = array();
		
		$userinfoinstep1 = 	isset($_SESSION['value4mStep1'])?$_SESSION['value4mStep1']:'';
		$data['userinfoinstep1'] = $userinfoinstep1;
		
		$elements['middle'] = 'home/index';
		$element_data['middle'] = $data;
		
		$this->layout->setLayout('layout_home');
		$this->layout->multiple_view($elements,$element_data);
		
	}
	
		
	function initData()
	{
		$data = array();
	
		// For maritalstatus
		$maritalstatus =$this->ModelHome->getAttributeList(21,1);
		$maritalstatusOptions = array();
		$maritalstatusOptions[0] = "--Select--";
		for ($c=0; $c<count($maritalstatus); $c++)
		{
			$maritalstatusOptions[$maritalstatus[$c]['id']] =  $maritalstatus[$c]['name'];
		}
		$data['maritalstatusOptions'] = $maritalstatusOptions;
		
		// For starsign
		$starsign = $this->ModelUser->getAttributeList(10,1);
		$starsignOptions = array();
		$starsignOptions[0] = "--Select--";
		for ($c=0; $c<count($starsign); $c++)
		{
			$starsignOptions[$starsign[$c]['id']] =  $starsign[$c]['name'];
		}
		$data['starsignOptions'] = $starsignOptions;
		
		//For education
		$education =$this->ModelUser->getAttributeList(3,1);
		$educationOptions = array();
		$educationOptions[0] = "--Select--";
		for ($c=0; $c<count($education); $c++)
		{
			$educationOptions[$education[$c]['id']] =  $education[$c]['name'];
		}
		$data['educationOptions'] = $educationOptions;
		
		//For Language
		$language =$this->ModelUser->getAttributeList(29,1);
		$languageOptions = array();
		for ($c=0; $c<count($language); $c++)
		{
			$languageOptions[$language[$c]['id']] =  $language[$c]['name'];
		}
		$data['languageOptions'] = $languageOptions;
		
		//For ethnicity
		$ethnicity = $this->ModelUser->getAttributeList(11,1);
		$ethnicityOptions = array();
		for ($c=0; $c<count($ethnicity); $c++)
		{
			$ethnicityOptions[$ethnicity[$c]['id']] =  $ethnicity[$c]['name'];
		}
		$data['ethnicityOptions'] = $ethnicityOptions;
		
		//For religion (faith)
		$faith = $this->ModelUser->getAttributeList(19,1);
		$faithOptions = array();
		for ($c=0; $c<count($faith); $c++)
		{
			$faithOptions[$faith[$c]['id']] =  $faith[$c]['name'];
		}
		$data['faithOptions'] = $faithOptions;
		
		//For bodyType
		$bodyType = $this->ModelUser->getAttributeList(7,1);
		$bodyTypeOptions = array();
		$bodyTypeOptions[0] = "--Select--";
		for ($c=0; $c<count($bodyType); $c++)
		{
			$bodyTypeOptions[$bodyType[$c]['id']] =  $bodyType[$c]['name'];
		}
		$data['bodyTypeOptions'] = $bodyTypeOptions;
		
		//For Hight
		$hight = $this->ModelUser->getAttributeList(12,1);
		$hightOptions = array();
		$hightOptions[0] = "--Select--";
		for ($c=0; $c<count($hight); $c++)
		{
			$hightOptions[$hight[$c]['id']] =  $hight[$c]['name'];
		}
		$data['hightOptions'] = $hightOptions;
		
		//For eyeColor
		$eyeColor = $this->ModelUser->getAttributeList(2,1);
		$eyeColorOptions = array();
		$eyeColorOptions[0] = "--Select--";
		for ($c=0; $c<count($eyeColor); $c++)
		{
			$eyeColorOptions[$eyeColor[$c]['id']] =  $eyeColor[$c]['name'];
		}
		$data['eyeColorOptions'] = $eyeColorOptions;
		
		//For hairColor
		$hairColor = $this->ModelUser->getAttributeList(1,1);
		$hairColorOptions = array();
		$hairColorOptions[0] = "--Select--";
		for ($c=0; $c<count($hairColor); $c++)
		{
			$hairColorOptions[$hairColor[$c]['id']] =  $hairColor[$c]['name'];
		}
		$data['hairColorOptions'] = $hairColorOptions;
		
		//For enjoy
		$enjoy = $this->ModelUser->getAttributeList(38,1);
		$enjoyOptions = array();
		for ($c=0; $c<count($enjoy); $c++)
		{
			$enjoyOptions[$enjoy[$c]['id']] =  $enjoy[$c]['name'];
		}
		$data['enjoyOptions'] = $enjoyOptions;
		
		//For occupation
		$occupation = $this->ModelUser->getAttributeList(14,1);
		$occupationOptions = array();
		$occupationOptions[0] = "--Select--";
		for ($c=0; $c<count($occupation); $c++)
		{
			$occupationOptions[$occupation[$c]['id']] =  $occupation[$c]['name'];
		}
		$data['occupationOptions'] = $occupationOptions;
		
		//For income
		$income = $this->ModelUser->getAttributeList(18,1);
		$incomeOptions = array();
		for ($c=0; $c<count($income); $c++)
		{
			$incomeOptions[$income[$c]['id']] =  $income[$c]['name'];
		}
		$data['incomeOptions'] = $incomeOptions;
		
		//For exercise
		$exercise = $this->ModelUser->getAttributeList(40,1);
		$exerciseOptions = array();
		$exerciseOptions[0] = "--Select--";
		for ($c=0; $c<count($exercise); $c++)
		{
			$exerciseOptions[$exercise[$c]['id']] =  $exercise[$c]['name'];
		}
		$data['exerciseOptions'] = $exerciseOptions;
		
		//For smoke
		$smoke =$this->ModelUser->getAttributeList(23,1);
		$smokeOptions = array();
		for ($c=0; $c<count($smoke); $c++)
		{
			$smokeOptions[$smoke[$c]['id']] =  $smoke[$c]['name'];
		}
		$data['smokeOptions'] = $smokeOptions;
		
		//For drink
		$drink =$this->ModelUser->getAttributeList(22,1);
		$drinkOptions = array();
		$drinkOptions[0] = "--Select--";
		for ($c=0; $c<count($drink); $c++)
		{
			$drinkOptions[$drink[$c]['id']] =  $drink[$c]['name'];
		}
		$data['drinkOptions'] = $drinkOptions;
		
		//For childrenHave
		$childrenHave =$this->ModelUser->getAttributeList(9,1);
		$childrenHaveOptions = array();
		for ($c=0; $c<count($childrenHave); $c++)
		{
			$childrenHaveOptions[$childrenHave[$c]['id']] =  $childrenHave[$c]['name'];
		}
		$data['childrenHaveOptions'] = $childrenHaveOptions;
		
		//For pets
		$pets =$this->ModelUser->getAttributeList(28,1);
		$petsOptions = array();
		$petsOptions[0] = "--Select--";
		for ($c=0; $c<count($pets); $c++)
		{
			$petsOptions[$pets[$c]['id']] =  $pets[$c]['name'];
		}
		$data['petsOptions'] = $petsOptions;
		
		// For First date palce
		$datePlace =$this->ModelUser->getFirstDatesPalce();
		$datePlaceOptions = array();
		for ($c=0; $c<count($datePlace); $c++)
		{
			$datePlaceOptions[$datePlace[$c]['id']] =  $datePlace[$c]['datePlace'];
			$datePlaceOptions[$datePlace[$c]['id']] =  $datePlace[$c]['imagePath'];
		}
		$data['datePlaceOptions'] = $datePlaceOptions;
		
		//For vegetarian
		$vegetarian =$this->ModelUser->getAttributeList(41,1);
		$vegetarianOptions = array();
		$vegetarianOptions[0] = "--Select--";
		for ($c=0; $c<count($vegetarian); $c++)
		{
			$vegetarianOptions[$vegetarian[$c]['id']] =  $vegetarian[$c]['name'];
		}
		$data['vegetarianOptions'] = $vegetarianOptions;
		
		//For occupationTime
		$occupationTime =$this->ModelUser->getAttributeList(42,1);
		$occupationTimeOptions = array();
		$occupationTimeOptions[0] = "--Select--";
		for ($c=0; $c<count($occupationTime); $c++)
		{
			$occupationTimeOptions[$occupationTime[$c]['id']] =  $occupationTime[$c]['name'];
		}
		$data['occupationTimeOptions'] = $occupationTimeOptions;
		
		//For introvert
		$introvert =$this->ModelUser->getAttributeList(43,1);
		$introvertOptions = array();
		$introvertOptions[0] = "--Select--";
		for ($c=0; $c<count($introvert); $c++)
		{
			$introvertOptions[$introvert[$c]['id']] =  $introvert[$c]['name'];
		}
		$data['introvertOptions'] = $introvertOptions;
		
		//For sexualAppetite
		$sexualAppetite =$this->ModelUser->getAttributeList(44,1);
		$sexualAppetiteOptions = array();
		$sexualAppetiteOptions[0] = "--Select--";
		for ($c=0; $c<count($sexualAppetite); $c++)
		{
			$sexualAppetiteOptions[$sexualAppetite[$c]['id']] =  $sexualAppetite[$c]['name'];
		}
		$data['sexualAppetiteOptions'] = $sexualAppetiteOptions;
		
		
		
		//For country-state-city
		$country_result =$this->ModelUser->getCountryList(1);
		$countryOptions = array();
		$countryOptions[0] = "--Select country--";
		for ($c=0; $c<count($country_result); $c++)
		{
			$countryOptions[$country_result[$c]['id']] =  $country_result[$c]['name'];
		}
		$data['countryOptions'] = $countryOptions;
		
		
		$stateOptions = array();
		$stateOptions[0] = "--Select state--";
		$data['stateOptions'] = $stateOptions;
		$cityOptions = array();
		$cityOptions[0] = "--Select city--";
		$data['cityOptions'] = $cityOptions;
		
		
		
		$ageOptions = array();
		$ageOptions[0] = "Select";
		for ($c=18; $c<100; $c++)
		{
			$ageOptions[$c] =  $c;
		}
		$data['ageOptions'] = $ageOptions;
		
		$image_result =$this->ModelUser->getImageList($GLOBALS['LANGUAGE_ID']);
		$data['image_result'] = $image_result;
		//pr($image_result);
		
		return $data;
	
	}
	
	
	function propertydetails()
	{

		$this->form_validation->set_rules('firstName', 'First Name', 'trim|required|alpha|xss_clean');
		$this->form_validation->set_rules('lastName', 'Last Name', 'trim|required|alpha|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
		
		$this->form_validation->set_error_delimiters('<div style="color:#FF0000" class="error">', '</div>');
		if($this->form_validation->run() == TRUE)
			{
						$data = $_POST;
						// chk box hear_about;
						if(isset($_POST['hear_about_us']) && !empty($_POST['hear_about_us']))
						{
						$hear_about_us = isset($_POST['hear_about_us'])?$_POST['hear_about_us']:'';
						$hear_about_us = implode(',',$hear_about_us);
						$data['hear_about_us'] = $hear_about_us;
						}
						$this->nsession->set_userdata('value4mStep1', $data);
						
						$this->do_propertydetails();
		}
		else
		{
				$data = $this->initData();
				if(isset($_POST['hear_about_us']) && !empty($_POST['hear_about_us']))
				{
				$hear_about_us = isset($_POST['hear_about_us'])?$_POST['hear_about_us']:'';
				$hear_about_us = implode(',',$hear_about_us);
				$data['hear_about_us'] = $hear_about_us;
				}
				$userinfoinstep1 = 	isset($_SESSION['userinfoinstep1'])?$_SESSION['userinfoinstep1']:'';
				$data['userinfoinstep1'] = $userinfoinstep1;
				$this->index();

		}
	}
	
	function do_propertydetails()
		{
			if(isset($_SESSION['value4mStep1']) && !empty($_SESSION['value4mStep1']))
			{
			$data = $this->initData();
			$elements = array();
			$element_data = array();
			$state_result =$this->ModelUser->getStateList(1);
			$data['stateOptions'] = $state_result;
			$rentper_result =$this->ModelUser->getRentPerList(1);
			$data['rentPerOptions'] = $rentper_result;

			$userinfoinstep2 = 	isset($_SESSION['value4mStep2'])?$_SESSION['value4mStep2']:'';
			$data['userinfoinstep2'] = $userinfoinstep2;
		
			$elements['middle'] = 'home/propertydetails';
			$element_data['middle'] = $data;
			$this->layout->setLayout('layout_home');
			$this->layout->multiple_view($elements,$element_data);
			}
			else
			{
				$this->index();
			}
	
		}
		
	function packageselection()
	{
		$this->form_validation->set_rules('suburb[]', 'Suburb', 'trim|required|xss_clean');
		$this->form_validation->set_rules('postcode[]', 'Post Code', 'trim|required|xss_clean');
		$this->form_validation->set_rules('state[]', 'State', 'trim|required|xss_clean');
		$this->form_validation->set_rules('rent[]', 'Rent', 'trim|required|xss_clean');
		$this->form_validation->set_rules('rent_per[]', 'Rent Per', 'trim|required|xss_clean');
		$this->form_validation->set_rules('stepCheck2', 'sorry', 'trim|required|xss_clean');
		if(isset($_SESSION['value4mStep1']) && !empty($_SESSION['value4mStep1']))
		{
			if($this->form_validation->run() == TRUE)
			{
				$data = $_POST;
				$this->nsession->set_userdata('value4mStep2', $data);
				$this->do_packageselection();
			}else{
				$this->do_propertydetails();
			}
		}
		else
		{
			$this->index();
		}
	}
	
	function do_packageselection()
	{
			$data = $this->initData();
			$elements = array();
			$element_data = array();
			$userinfoinstep1 = 	isset($_SESSION['value4mStep1'])?$_SESSION['value4mStep1']:'';
			$data['userinfoinstep1'] = $userinfoinstep1;
			$promotion_code = $userinfoinstep1['promotion_code'];
			
			$pkglist_result =$this->ModelUser->getPackageList(1,$promotion_code);
			$data['pkglist_result'] = $pkglist_result;
			$servlist_result =$this->ModelUser->getServiceList(1,$promotion_code);
			$data['servlist_result'] = $servlist_result;
			
			$userinfoinstep3 = 	isset($_SESSION['value4mStep3'])?$_SESSION['value4mStep3']:'';
			$data['userinfoinstep3'] = $userinfoinstep3;
			
			$elements['middle'] = 'home/packageselection';
			$element_data['middle'] = $data;
			
			$this->layout->setLayout('layout_home');
			$this->layout->multiple_view($elements,$element_data);
	}

	
	function optionalextras()
	{
		$this->form_validation->set_rules('stepCheck3', 'sorry', 'trim|required|xss_clean');
		if(isset($_SESSION['value4mStep1']) && !empty($_SESSION['value4mStep1']) && isset($_SESSION['value4mStep2']) && !empty($_SESSION['value4mStep2']))
		{
			if($this->form_validation->run() == TRUE)
			{
				$data = $_POST;
				$this->nsession->set_userdata('value4mStep3', $data);
				$this->do_optionalextras();
			}else{
				$this->do_packageselection();
			}
		}
		else
		{
			$userinfoinstep3 = 	isset($_SESSION['value4mStep3'])?$_SESSION['value4mStep3']:'';
			$data['userinfoinstep3'] = $userinfoinstep3;
			$this->index();
		}
	}
	
	function do_optionalextras()
	{
			$data = $this->initData();
			$elements = array();
			$element_data = array();
			$addiservicess_result =$this->ModelUser->getAddiServicesList(1);
			$data['additiservsResult'] = $addiservicess_result;
			$termpege_result =$this->ModelUser->getSinglePage(13,1);
			$data['termpegeResult'] = $termpege_result;
			
			$pack_choose = $_SESSION['value4mStep3']['packageID'];						
			$package_select =$this->ModelUser->getSinglePackage($pack_choose,1);
			$data['package_select'] = $package_select;
			
			$userinfoinstep1 = 	isset($_SESSION['value4mStep1'])?$_SESSION['value4mStep1']:'';
			$data['userinfoinstep1'] = $userinfoinstep1;
			$userinfoinstep3 = 	isset($_SESSION['value4mStep3'])?$_SESSION['value4mStep3']:'';
			$data['packageID'] = $userinfoinstep3['packageID'];
			
			$promotion_code = $userinfoinstep1['promotion_code'];
			
			$servlist_result =$this->ModelUser->getServiceList(1,$promotion_code);
			$data['servlist_result'] = $servlist_result;
			
			$userinfoinstep4 = 	isset($_SESSION['value4mStep4'])?$_SESSION['value4mStep4']:'';
			$data['userinfoinstep4'] = $userinfoinstep4;
			
			$elements['middle'] = 'home/optionalextras';
			$element_data['middle'] = $data;
			
			$this->layout->setLayout('layout_home');
			$this->layout->multiple_view($elements,$element_data);
	}
	
	function PrintedTermsAndConditions()
	{
		if(isset($_SESSION['value4mStep1']) && !empty($_SESSION['value4mStep1']))
		{
			$data = $_POST;
			$_SESSION['4thstep'] = $_POST;
			$this->nsession->set_userdata('value4mStep4', $data);
			
			$elements = array();
			$addiservicess_result =$this->ModelUser->getAddiServicesList(1);
			$data['additiservsResult'] = $addiservicess_result;
			$termpege_result =$this->ModelUser->getSinglePage(13,1);
			$data['termpegeResult'] = $termpege_result;
			
			$pack_choose = $_POST['packageID'];						
			$package_select =$this->ModelUser->getSinglePackage($pack_choose,1);
			$data['package_select'] = $package_select;
			
			$userinfoinstep1 = 	isset($_SESSION['value4mStep1'])?$_SESSION['value4mStep1']:'';
			$data['userinfoinstep1'] = $userinfoinstep1;
			
			$userinfoinstep2 = 	isset($_SESSION['value4mStep2'])?$_SESSION['value4mStep2']:'';
			$data['userinfoinstep2'] = $userinfoinstep2;
			
			$promotion_code = $userinfoinstep1['promotion_code'];
			$userinfoinstep4 = 	isset($_SESSION['value4mStep4'])?$_SESSION['value4mStep4']:'';
			$data['userinfoinstep4'] = $userinfoinstep4;
			
			$servlist_result =$this->ModelUser->getServiceList(1,$promotion_code);
			$data['servlist_result'] = $servlist_result;
			
			$termpege_result =$this->ModelUser->getSinglePage(13,1);
			$data['termpegeResult'] = $termpege_result;

			$elements['middle'] = 'home/PrintedTermsAndConditions';
			$element_data['middle'] = $data;
			$this->layout->setLayout('layout_home');
			$this->layout->multiple_view($elements,$element_data);
		}
		else
		{
			$this->index();
		}
	}
	
	function summary()
	{
		$this->form_validation->set_rules('stepCheck4', 'sorry', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tc', 'Terms & Conditions', 'trim|required|xss_clean');
		
		$this->form_validation->set_error_delimiters('<div style="color:#FF0000;margin-left: 255px;" class="error">', '</div>');
		if(isset($_SESSION['value4mStep1']) && !empty($_SESSION['value4mStep1']) && isset($_SESSION['value4mStep2']) && !empty($_SESSION['value4mStep2']) && isset($_SESSION['value4mStep3']) && !empty($_SESSION['value4mStep3']))
		{
			
			if($this->form_validation->run() == TRUE)
			{
				$data = $_POST;
				$_SESSION['4thstep'] = $_POST;
				$this->nsession->set_userdata('value4mStep4', $data);
				$this->do_summary();
			}else{
				if(isset($_SESSION['4thstep']) && !empty($_SESSION['4thstep']))
				$data = $_SESSION['4thstep'];
				else
				$data = $_POST;
				$this->nsession->set_userdata('value4mStep4', $data);
				$userinfoinstep4 = 	isset($_SESSION['value4mStep4'])?$_SESSION['value4mStep4']:'';
			    $data['userinfoinstep4'] = $userinfoinstep4;
			$this->do_optionalextras();
			}
		}
		else
		{
			$this->index();
		}

	}
	
	function do_summary()
	{
			$data = $this->initData();
			$elements = array();
			$element_data = array();
			$userinfoinstep1 = 	isset($_SESSION['value4mStep1'])?$_SESSION['value4mStep1']:'';
			$data['userinfoinstep1'] = $userinfoinstep1;
			$promotion_code = $userinfoinstep1['promotion_code'];
			
			$userinfoinstep2 = 	$_SESSION['value4mStep2'];
			$data['userinfoinstep2'] = $userinfoinstep2;
			$pack_choose = $_SESSION['value4mStep3']['packageID'];						
			$package_select =$this->ModelUser->getSinglePackage($pack_choose,1);
			
			$data['package_select'] = $package_select;
			
			$servlist_result =$this->ModelUser->getServiceList(1,$promotion_code);
			$data['servlist_result'] = $servlist_result;
			
			$getAddiServicesList =$this->ModelUser->getAddiServicesList(1);
			$data['getAddiServicesList'] = $getAddiServicesList;
			$value4mStep4 = 	$_SESSION['value4mStep4'];
			$data['value4mStep4'] = $value4mStep4;
			$addserv_choose = isset($_SESSION['value4mStep4']['addiserv'])?$_SESSION['value4mStep4']['addiserv']:'';
			$data['addserv_choose'] = $addserv_choose;
			
			$elements['middle'] = 'home/summary';
			$element_data['middle'] = $data;
			
			$this->layout->setLayout('layout_home');
			$this->layout->multiple_view($elements,$element_data);
	}
	
	function thankyou()
	{	
			
		if(isset($_SESSION['value4mStep1']) && !empty($_SESSION['value4mStep1']))
		{
			$elements = array();
			$thankpage_result =$this->ModelUser->getSinglePage(21,1);
			$data['thankpage_result'] = $thankpage_result;
			$elements['middle'] = 'home/thankyou';
			$element_data['middle'] = $data;
			
			$this->nsession->destroy();
			$this->layout->setLayout('layout_home');
			$this->layout->multiple_view($elements,$element_data);
		}
		else
		{
			$this->index();
		}
	}
	
	function successMail()
	{
		$success_mail_containtent =$this->ModelUser->getSinglePage(22,1);
		$emailContent = 'mail body content';
		$fromEmail = 'info@neeshproperty.com.au';
		
		$to 		= isset($_SESSION['value4mStep1']['email'])?$_SESSION['value4mStep1']['email']:'';
		$subject = "Welcome to Neesh Property Residential ";
		$first_name = isset($_SESSION['value4mStep1']['firstName'])?$_SESSION['value4mStep1']['firstName']:'';
		$body 		= "<p>Dear ".$first_name."<br />";
		$body		.= $success_mail_containtent[0]['content']; 
		$body 		.= '<p><img src="http://www.switchagents.com.au/public/images/clip_image002.jpg" alt="" width="415" height="73" border="0" /><br />
			
					<strong>PROPERTY  MANAGEMENT</strong> - MELBOURNE | SYDNEY | BRISBANE | PERTH <br />
					<strong>FINANCE</strong> - MELBOURNE  | SYDNEY | BRISBANE | PERTH | ADELAIDE | HOBART | DARWIN | CANBERRA</p>
				<p>&nbsp;</p>
				<p>If you are currently under an Exclusive  Management Authority, please disregard this email</p>';
		
		$newline 		= "\n";
		
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: switchagents<".$fromEmail.">\r\n";
		//=======================================================================================================================			
		
		$r = @mail($to, $subject, $body, $headers);
		$error = 'error_mail_send';		
		redirect(base_url()."home/thankyou");			
		return $r;
	
	}
	
	function failure()
	{
		if(isset($_SESSION['value4mStep1']) && !empty($_SESSION['value4mStep1']))
		{
			$elements = array();
			$elements['middle'] = 'home/failure';
			$element_data['middle'] = '';
			$this->nsession->destroy();
			$this->layout->setLayout('layout_home');
			$this->layout->multiple_view($elements,$element_data);
		}
		else
		{
			$this->index();
		}
	
	}

	
	function addUser()
	{
		if(isset($_SESSION['value4mStep1']) && !empty($_SESSION['value4mStep1']) && isset($_SESSION['value4mStep2']) && !empty($_SESSION['value4mStep2']) && isset($_SESSION['value4mStep3']) && !empty($_SESSION['value4mStep3']) && isset($_SESSION['value4mStep4']) && !empty($_SESSION['value4mStep4']))
		{
			$this->form_validation->set_rules('dd', 'Date Of Birth', 'trim|required|is_numeric|xss_clean');
		$this->form_validation->set_error_delimiters('<div style="color:#FF0000;margin-left: -14px;" class="error">', '</div>');
			if($this->form_validation->run() == TRUE)
			{
			$data = $_POST;
			$this->nsession->set_userdata('value4mStep5', $data);
		
				$isexist = $this->ModelUser->addUser();
				if(!$isexist)
				{
					$this->failure();
				}
				else
				{
					$this->nsession->set_userdata('succmsg', $this->lang->line('success_user_add'));
					$this->successMail();
				}
			}
			else
			{
				$this->do_summary();
			}
		}
		else
		{
			$this->index();
		}
	}
	
	
	function login()
	{
	
			$elements = array();
			$data = array();
			$elements['middle'] = 'home/login';
			
			$this->layout->setLayout('layout_home');
			$this->layout->multiple_view($elements,$data);
	
	}
	function do_login()
	{ 
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');		
		
		if ($this->form_validation->run() == TRUE)
		{		
		
			if($this->ModelUser->authenticateUser())
			{	
				$user_id = $this->nsession->userdata('session_user_id');
				$this->ModelHome->loginInfo($user_id);
				redirect(base_url()."user/index");
				return true;					
			}else{
			$this->nsession->set_userdata('errmsg', 'Email or Password not match');
			$this->login();
			}

		}
		else
		{
		$this->nsession->set_userdata('errmsg', '');
		$this->login();
		}
		
	}

	
	function forgetPassword()
	{	
		$data = array();
		$data['do_forgetPassword_link']   	= base_url()."en/home/do_forgetPassword";
		$this->load->view('home/forgetPassword',$data);
		
				
	}
	
	function do_forgetPassword()
	{
	
		$this->form_validation->set_rules('emailAddress', 'email', 'trim|required|valid_email|xss_clean');
		
		if ($this->form_validation->run() == TRUE)
		{		
		
		$this->ModelUser->forgotPassword();

			
		}
		else
		{
		echo "Please enter valid Email address";
		}
	
	}
	
	
	
	
	
	function userDetails($pid = 0,$page = 0 )
	{
		if($data['state']!=0){
			$stateName = $this->ModelHome->getStateName($data['state'],$languageId);
			$data['stateName'] = $stateName;
		}
	}
///////////////////////////////////////////
//---------------------------------------------- User Mail Welcome Page -------------------------------------//
	function welcome()
		{
			$data = array();
			$uriId = $this->uri->segment(3, 0);
			$data['invData'] = $this->ModelHome->identifyUser($uriId);
			$elements = array();
			
			$elements['middle'] = 'home/welcome';
			$element_data['middle'] = $data;
			$this->layout->setLayout('layout_home');
			$this->layout->multiple_view($elements,$element_data);
		}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	function statename(){
		$id 	= $this->input->request('id');
	
		$state_result =$this->ModelUser->getStateList($id,1);
		$stateOptions = array();
		$stateOptions[0] = "--Select--";
		for ($c=0; $c<count($state_result); $c++)
		{
			$stateOptions[$state_result[$c]['id']] =  $state_result[$c]['state'];
		}
		$data['stateOptions'] = $stateOptions;
	$this->load->view('user/ajax_statename',$data);
	}
	
	function ajax_cityname(){
	$id 	= $this->input->request('id');
	
		$city_result =$this->ModelUser->getCityList($id,1);
		$cityOptions = array();
		$cityOptions[0] = "--Select--";
		for ($c=0; $c<count($city_result); $c++)
		{
			$cityOptions[$city_result[$c]['id']] =  $city_result[$c]['city'];
		}
		$data['cityOptions'] = $cityOptions;
	$this->load->view('user/ajax_cityname',$data);
	}
	
}
/////////////////////////////////////////////////

?>
