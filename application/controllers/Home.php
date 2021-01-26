<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
		
	public function __construct ()
	{
		parent::__construct();
		$this->load->model('general_model');		
	}

	public function index()
	{			
		$where_organization['organization_id'] = 1;    
		$where_berita['type_article'] = 1;    
		$where_berita['status_review'] = 1; 
		$where_article['type_article'] = 2; 
		$where_article['status_review'] = 1;    
		$where_serba_serbi['type_article'] = 3;  
		$where_serba_serbi['status_review'] = 1;    

		$where_ads['ads_position'] = 1; 
		
		$sorting_article['field'] = "a.reviewed_at";
        $sorting_article['sort'] = "desc";
		
		$join = array();
        $join[0]['table'] = "users u";
        $join[0]['connection'] = "a.created_by = u.usr_id";
        $join[0]['type'] = "left";        

		$data['organization'] = $this->general_model->get_info("*", "organization", $where_organization);

		$data['list_berita'] = $this->general_model->get_info("a.*, u.usr_fullname as created_user", "article a", $where_berita, $sorting_article, $join, array(),
		array(), array(), 3);

		$data['berita_populer'] = $this->db->query("SELECT a.*, u.usr_fullname as created_user, COUNT(av.article_id) 
		as count_view FROM article a LEFT JOIN article_view av on a.article_id = av.article_id LEFT JOIN users u on 
		a.created_by = u.usr_id WHERE a.type_article = 1 AND a.status_review = 1 GROUP BY a.article_id ORDER BY count_view DESC, a.reviewed_at DESC LIMIT 4");		

		$data['list_article'] = $this->general_model->get_info("a.*, u.usr_fullname as created_user", "article a", $where_article, $sorting_article, $join, array(),
		array(), array(), 3);

		$data['article_populer'] = $this->db->query("SELECT a.*, u.usr_fullname as created_user, COUNT(av.article_id) 
		as count_view FROM article a LEFT JOIN article_view av on a.article_id = av.article_id LEFT JOIN users u on 
		a.created_by = u.usr_id WHERE a.type_article = 2 AND a.status_review = 1 GROUP BY a.article_id ORDER BY count_view DESC, a.reviewed_at DESC LIMIT 3");		

		$data['list_serba_serbi'] = $this->general_model->get_info("a.*, u.usr_fullname as created_user", "article a", $where_serba_serbi, $sorting_article, $join, array(),
		array(), array(), 3);

		$data['serba_serbi_populer'] = $this->db->query("SELECT a.*, u.usr_fullname as created_user, COUNT(av.article_id) 
		as count_view FROM article a LEFT JOIN article_view av on a.article_id = av.article_id LEFT JOIN users u on 
		a.created_by = u.usr_id WHERE a.type_article = 3 AND a.status_review = 1 GROUP BY a.article_id ORDER BY count_view DESC, a.reviewed_at DESC LIMIT 3");		

		$data['ads'] = $this->general_model->get_info("*", "ads", $where_ads);

		$join_tags = array();
          $join_tags[0]['table'] = 'tags_view tv';
          $join_tags[0]['connection'] = 't.tags_id = tv.tags_id';
		  $join_tags[0]['type'] = 'left';  
		  
		  $sorting_tags['field'] = "count_view";
            $sorting_tags['sort'] = "desc";
		  
		$data['tags'] = $this->general_model->get_info("t.*, , COUNT(tv.tags_id) as count_view", "tags t", 
		array(), $sorting_tags, $join_tags, array(), array(), array(), 8, "t.tags_id");

		$this->load->view('home', $data);
	}			
	
	public function search()
	{	
		$where_organization['organization_id'] = 1;    
		$data['organization'] = $this->general_model->get_info("*", "organization", $where_organization);		

		$where_berita['type_article'] = 2; 
		$sorting_article['field'] = "a.reviewed_at";
		$sorting_article['sort'] = "desc";
		$join = array();
        $join[0]['table'] = "users u";
        $join[0]['connection'] = "a.created_by = u.usr_id";
		$join[0]['type'] = "left";        
		$data['list_article'] = $this->general_model->get_info("a.*, u.usr_fullname as created_user", "article a", $where_berita, $sorting_article, $join, array(),
		array(), array(), 8)->result();

		$data['type_article'] = 2;		
		$data['type_article_name'] = "Artikel";		

		$this->load->view('search', $data);
	}			
}
