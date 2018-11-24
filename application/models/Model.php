<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model
{
  public function getFirstSecResult(){
    $qry = $this->db->get("first-section");
    $result = $qry->row();
    return $result;
  }
  public function getSeccondResult(){
    $qry = $this->db->get("seccond_section");
    $result = $qry->row();
    return $result;
  }
  public function getSeccond_ServiceResult(){
    $qry = $this->db->get("seccond_section_service");
    $result = $qry->result();
    return $result;
  }
  public function getSkillData(){
    $qry=$this->db->get("skill_section");
    $result = $qry->row();
    return $result;
  }
  public function ourServiceHeaddingData(){
    $qry=$this->db->get("our_service_headding");
    $result = $qry->row();
    return $result;
  }
  public function ourServiceFeaturedData(){
    $qry=$this->db->get("our_service_feature");
    $result = $qry->result();
    return $result;
  }
  public function counterData(){
    $qry=$this->db->get("counter");
    $result = $qry->result();
    return $result;
  }
  public function portfolioHeaddingData(){
    $qry=$this->db->get("portfolio_headding");
    $result = $qry->row();
    return $result;
  }
  public function getPortfolioImageData(){
    $this->db->select('*');
    $this->db->from('portfolio_image');
    $this->db->join('portfolio_category', 'portfolio_category.category_id = portfolio_image.cat_id');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }
  public function headdingGrouping(){
    $qry = $this->db->get("portfolio_category");
    $result = $qry->result();
    return $result;
  }
  public function whyChooseUsHeaddingImage(){
    $qry = $this->db->get("why_choose_us");
    $result =$qry->row();
    return $result;
  }
  public function acrodionText(){
    $qry = $this->db->get("acrodion_text");
    $result =$qry->result();
    return $result;
  }


}

?>
