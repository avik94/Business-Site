<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("Model");
	}
	public function index()
	{
		$data["thisiskey"] = $this->Model->getFirstSecResult();
		$data["secondValue"] = $this->Model->getSeccondResult();
		$data["seccondServiceValue"] = $this->Model->getSeccond_ServiceResult();
		$data["skillData"] = $this->Model->getSkillData();
		$data["ourServiceHeaddingData"] = $this->Model->ourServiceHeaddingData();
		$data["ourServiceFeaturedData"] = $this->Model->ourServiceFeaturedData();
		$data["counterData"] = $this->Model->counterData();
		$data["portfolioHeaddingData"] = $this->Model->portfolioHeaddingData();
		$data["getPortfolioImageData"] = $this->Model->getPortfolioImageData();
		$data["headdingGrouping"] = $this->Model->headdingGrouping();
		$data["whyChooseUsHeaddingImage"] =$this->Model->whyChooseUsHeaddingImage();
		$data["acrodionText"] =$this->Model->acrodionText();

		$this->load->view('index',$data);
		// $this->load->view('index',$data1);

	}
}
