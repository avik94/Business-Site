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
		$data["getTeamData"] = $this->Model->getTeamData();
		$data["getTestimonialData"] = $this->Model->getTestimonialData();
		$data["getpriceData"] = $this->Model->getpriceData();
		$data["getPriceTableData"] = $this->Model->getPriceTableData();
		// echo "<pre>";
		// print_r($data["getPriceTableData"]);die();

		$this->load->view('index',$data);

	}
	// public function newsLetter(){
	// 	$data= $this->input->post("email");
	// 	$datas["gettingnewsletterData"]=$this->Model->sendingnewsLetterData($data);
	// 	if ($datas["gettingnewsletterData"] == 1) {
	// 		$this->session->set_flashdata("sessionVariable","Data already exits!");
	// 		redirect("/");
	// 	}else{
	// 		$this->load->view("newsletter",$datas);
	// 	}
	// }
}
