<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
		
	public function __construct ()
	{
		parent::__construct();
		$this->load->model('general_model');		
		$this->load->model('article_model');
	}

	public function index()
	{			
        $where_organization['organization_id'] = 1;    
		$where_berita['type_article'] = 2; 
		$where_berita['status_review'] = 1;
		$where_ads['ads_position'] = 3; 
		
		$join = array();
        $join[0]['table'] = "users u";
        $join[0]['connection'] = "a.created_by = u.usr_id";
		$join[0]['type'] = "left";        
		
		$sorting_article['field'] = "a.reviewed_at";
        $sorting_article['sort'] = "desc";

        $data['organization'] = $this->general_model->get_info("*", "organization", $where_organization);        		
		
		$data['list_article'] = $this->general_model->get_info("a.*, u.usr_fullname as created_user", "article a", $where_berita, $sorting_article, $join, array(),
		array(), array(), 8);

		$data['article_populer'] = $this->db->query("SELECT a.*, u.usr_fullname as created_user, COUNT(av.article_id) 
		as count_view FROM article a LEFT JOIN article_view av on a.article_id = av.article_id LEFT JOIN users u on 
		a.created_by = u.usr_id WHERE a.type_article = 2 AND a.status_review = 1 GROUP BY a.article_id ORDER BY count_view DESC, a.reviewed_at DESC LIMIT 10");				

		$data['total_rows'] = $this->general_model->get_info("COUNT(1) as count", "article", $where_berita)->row()->count;

		$data['ads'] = $this->general_model->get_info("*", "ads", $where_ads);
				  
		$data['tags'] = $this->db->query("
		SELECT t.*, COUNT(tv.tags_id) as count_view FROM tags t LEFT JOIN tags_view tv on t.tags_id = tv.tags_id 
		WHERE t.tags_id IN (SELECT ats.tags_id from article_tags ats LEFT JOIN article a on ats.article_id = a.article_id 
		WHERE a.type_article = 2 GROUP BY ats.tags_id) GROUP BY t.tags_id ORDER BY count_view DESC LIMIT 8");

		$data['type_article'] = 2;		
		$data['type_article_name'] = "Artikel";		

		$this->load->view('list', $data);
	}

	public function berita()
	{			
        $where_organization['organization_id'] = 1;    
		$where_berita['type_article'] = 1; 
		$where_berita['status_review'] = 1;
		$where_ads['ads_position'] = 2; 
		
		$join = array();
        $join[0]['table'] = "users u";
        $join[0]['connection'] = "a.created_by = u.usr_id";
		$join[0]['type'] = "left";    
		
		$sorting_article['field'] = "a.reviewed_at";
        $sorting_article['sort'] = "desc";

        $data['organization'] = $this->general_model->get_info("*", "organization", $where_organization);        		
		
		$data['list_article'] = $this->general_model->get_info("a.*, u.usr_fullname as created_user", "article a", $where_berita, $sorting_article, $join, array(),
		array(), array(), 8);

		$data['article_populer'] = $this->db->query("SELECT a.*, u.usr_fullname as created_user, COUNT(av.article_id) 
		as count_view FROM article a LEFT JOIN article_view av on a.article_id = av.article_id LEFT JOIN users u on 
		a.created_by = u.usr_id WHERE a.type_article = 1 AND a.status_review = 1 GROUP BY a.article_id ORDER BY count_view DESC, a.reviewed_at DESC LIMIT 10");		

		$data['total_rows'] = $this->general_model->get_info("COUNT(1) as count", "article", $where_berita)->row()->count;

		$data['ads'] = $this->general_model->get_info("*", "ads", $where_ads);
		$data['tags'] = $this->db->query("
		SELECT t.*, COUNT(tv.tags_id) as count_view FROM tags t LEFT JOIN tags_view tv on t.tags_id = tv.tags_id 
		WHERE t.tags_id IN (SELECT ats.tags_id from article_tags ats LEFT JOIN article a on ats.article_id = a.article_id 
		WHERE a.type_article = 1 GROUP BY ats.tags_id) GROUP BY t.tags_id ORDER BY count_view DESC LIMIT 8");

		$data['type_article'] = 1;		
		$data['type_article_name'] = "Berita";		

		$this->load->view('list', $data);
	}

	public function serba_serbi()
	{			
        $where_organization['organization_id'] = 1;    
		$where_berita['type_article'] = 3; 
		$where_berita['status_review'] = 1;
		$where_ads['ads_position'] = 4; 
		
		$join = array();
        $join[0]['table'] = "users u";
        $join[0]['connection'] = "a.created_by = u.usr_id";
		$join[0]['type'] = "left";     
		
		$sorting_article['field'] = "a.reviewed_at";
        $sorting_article['sort'] = "desc";

        $data['organization'] = $this->general_model->get_info("*", "organization", $where_organization);        		
		
		$data['list_article'] = $this->general_model->get_info("a.*, u.usr_fullname as created_user", "article a", $where_berita, $sorting_article, $join, array(),
		array(), array(), 8);

		$data['article_populer'] = $this->db->query("SELECT a.*, u.usr_fullname as created_user, COUNT(av.article_id) 
		as count_view FROM article a LEFT JOIN article_view av on a.article_id = av.article_id LEFT JOIN users u on 
		a.created_by = u.usr_id WHERE a.type_article = 3 AND a.status_review = 1 GROUP BY a.article_id ORDER BY count_view DESC, a.reviewed_at DESC LIMIT 4");		

		$data['total_rows'] = $this->general_model->get_info("COUNT(1) as count", "article", $where_berita)->row()->count;

		$data['ads'] = $this->general_model->get_info("*", "ads", $where_ads);
		$data['tags'] = $this->db->query("
		SELECT t.*, COUNT(tv.tags_id) as count_view FROM tags t LEFT JOIN tags_view tv on t.tags_id = tv.tags_id 
		WHERE t.tags_id IN (SELECT ats.tags_id from article_tags ats LEFT JOIN article a on ats.article_id = a.article_id 
		WHERE a.type_article = 3 GROUP BY ats.tags_id) GROUP BY t.tags_id ORDER BY count_view DESC LIMIT 8");

		$data['type_article'] = 3;		
		$data['type_article_name'] = "Serba - Serbi";		

		$this->load->view('list', $data);
	}

	public function detail($id)
	{			
		date_default_timezone_set('Asia/Jakarta');	

		$where_organization['organization_id'] = 1;    
		$where_article['article_id'] = $id;		
		$where_detail_article['article_id'] = $id;	
		$where_detail_article['status_review'] = 1;	
		$where_article_tags['at.article_id'] = $id;		
		
		$join = array();
        $join[0]['table'] = "users u";
        $join[0]['connection'] = "a.created_by = u.usr_id";
		$join[0]['type'] = "left";        
		
		$join_tags = array();
		$join_tags[0]['table'] = "tags t";
        $join_tags[0]['connection'] = "at.tags_id = t.tags_id";
        $join_tags[0]['type'] = "left";        

		$data['organization'] = $this->general_model->get_info("*", "organization", $where_organization);        		
		
		$data['article'] = $this->general_model->get_info("a.*, (CASE WHEN a.type_article = 1 THEN 'Berita' 
		WHEN a.type_article = 2 THEN 'Artikel' ELSE 'Serba - Serbi' END) as type_article_name, 
		u.usr_fullname as created_user", "article a", $where_detail_article, array(), $join);		

		if($data['article'] != FALSE){
			$data['list_gallery'] = $this->general_model->get_info("*", "article_gallery", $where_article);		

		$where_list_article['type_article'] = $data['article']->row()->type_article; 		
		$where_list_article['status_review'] = 1; 		
		$exception_user['field'] = 'article_id';
		$exception_user['value'] = $id;		
		
		$sorting_article['field'] = "a.reviewed_at";
        $sorting_article['sort'] = "desc";

		$data['list_article'] = $this->general_model->get_info("a.*, u.usr_fullname as created_user", "article a", $where_list_article, $sorting_article, $join, $exception_user,
		array(), array(), 8);

		$data['list_tags'] = $this->general_model->get_info("at.tags_id, t.tags_name", "article_tags at", $where_article_tags, array(), $join_tags);

		$data['list_article_terkait'] = FALSE;

		if($data['list_tags'] != FALSE){
			$tags_id = array();
			foreach($data['list_tags']->result() as $row){
				array_push($tags_id,$row->tags_id);
			}
			$data['list_article_terkait'] = $this->db->query("SELECT a.*, u.usr_fullname as created_user, 
		(SELECT COUNT(ats.article_id) FROM article_tags ats WHERE ats.article_id = a.article_id AND 
		ats.tags_id IN ?) as count_tags FROM article a LEFT JOIN users u on a.created_by = u.usr_id 
		WHERE a.type_article = ? AND a.article_id != ? AND a.status_review = 1 HAVING count_tags > 0 ORDER BY count_tags DESC, 
		a.reviewed_at DESC LIMIT 6",array($tags_id, $data['article']->row()->type_article, $id));				
		}		
				
		$data['total_rows'] = $this->general_model->get_info("COUNT(1) as count", "article", $where_list_article, array(), array(), $exception_user)->row()->count;				

		$this->db->trans_start();

		$insertview['article_id'] = $id;
      	$insertview['viewed_on'] = date('Y-m-d H:i:s');

		  $this->db->insert('article_view',$insertview);
		  
		  if ($data['list_tags'] != false) {
			foreach($data['list_tags']->result() as $var){
				$inserttags['tags_id'] = $var->tags_id;
      	$inserttags['viewed_on'] = date('Y-m-d H:i:s');

		  $this->db->insert('tags_view',$inserttags);
			}
		}

		$this->db->trans_complete();

		$this->load->view('detail', $data);
		}else{
			redirect('home');
		}		
	}
	
	public function load_more_article()
	{			
		$row = $this->input->post('row');
		$type = $this->input->post('type');
		$where_article['type_article'] = $type; 
		$where_article['status_review'] = 1;

		$data = $this->article_model->list_article($type, $row);
		$html = '';

		$type_article_name = "Berita";
		$url = base_url().'assets/images/';		

		if($data != FALSE){ 
		foreach($data as $row){ 
			$font_awesome = "fa fa-camera";
									if($row->media_type == 2){
										$font_awesome = "fa fa-video-camera";
									}
		$short = substr(strip_tags(trim($row->description)),0,145);
		if(strlen(trim($row->description)) > 145){
		$short .= "...";
		}
		
		${"article_image" . $row->article_id} = base_url().'assets/images/'.$row->image;
			if(!file_exists(getcwd().'/assets/images/'.$row->image)){
			${"article_image" . $row->article_id} = base_url().'assets/img/no-photo.png';
			}
			
			$html .= '<article class="article row-article" style="margin-bottom: 25px">';
			$html .= '<div class="article-img" style="margin-right:0">';
			$html .= '<a href="'.site_url('article/detail/'.$row->article_id).'">';
			$html .= '<img src="'.${"article_image" . $row->article_id}.'" alt="">';
			$html .= '</a>';
			$html .= '</div>';
			$html .= '<div class="article-body" style="width:50%;float:right;padding-left:30px">';
			$html .= '<ul class="article-info">';
			$html .= '<li class="article-category" style="margin-right: 0"><a href="#">'.$type_article_name.'</a></li>';
			$html .= '<li class="article-type"><i class="'.$font_awesome.'"></i></li>';
			$html .= '</ul>';
			$html .= '<h4 class="article-title"><a href="'.site_url('article/detail/'.$row->article_id).'">'.$row->title.'</a></h4>';
			$html .= '<ul class="article-meta">';
			$html .= '<li><i class="fa fa-clock-o"></i> '.$row->reviewed_at.'</li>';
			$html .= '<li><i class="fa fa-user"></i> '.$row->created_user.'</li>';
			$html .= '</ul>';
			$html .= '<p>'.$short.'</p>';
			$html .= '</div>';
			$html .= '</article>';
		}		
	}

	$returnarray = array();
    $returnarray['html'] = $html;
    $returnarray['count_data'] = $this->general_model->get_info("*", "article", $where_article)->num_rows();

	echo json_encode($returnarray);
	}

	public function load_more_article_detail()
	{			
		$row = $this->input->post('row');
		$type = $this->input->post('type');
		$article_id = $this->input->post('article_id');
		$where_article['type_article'] = $type; 		
		$where_article['status_review'] = 1;
		$exception_user['field'] = 'article_id';
        $exception_user['value'] = $article_id;

		$data = $this->article_model->list_article($type, $row, $article_id);
		$html = '';

		$type_article_name = "Berita";
		$url = base_url().'assets/images/';		

		if($data != FALSE){ 
			foreach($data as $row){ 
				$font_awesome = "fa fa-camera";
			if($type == 2){
				$font_awesome = "fa fa-video-camera";
			}
			
			${"article_image" . $row->article_id} = base_url().'assets/images/'.$row->image;
			if(!file_exists(getcwd().'/assets/images/'.$row->image)){
			${"article_image" . $row->article_id} = base_url().'assets/img/no-photo.png';
			}
			
			$html .= '<div class="col-md-3 col-sm-6 list-article">';		
			$html .= '<article class="article">';
			$html .= '<div class="article-img">';
			$html .= '<a href="'.site_url('article/detail/'.$row->article_id).'">';
			$html .= '<img src="'.${"article_image" . $row->article_id}.'" alt="">';
			$html .= '</a>';
			$html .= '<ul class="article-info">';
			$html .= '<li class="article-type"><i class="'.$font_awesome.'"></i></li>';
			$html .= '</ul>';
			$html .= '</div>';
			$html .= '<div class="article-body">';
			$html .= '<h4 class="article-title"><a href="'.site_url('article/detail/'.$row->article_id).'">'.$row->title.'</a></h4>';
			$html .= '<ul class="article-meta">';
			$html .= '<li><i class="fa fa-clock-o"></i> '.$row->reviewed_at.'</li>';
			$html .= '<li><i class="fa fa-user"></i> '.$row->created_user.'</li>';
			$html .= '</ul>';
			$html .= '</div>';
			$html .= '</article>';		
			$html .= '</div>';				
			}
			}

	$returnarray = array();
    $returnarray['html'] = $html;
    $returnarray['count_data'] = $this->general_model->get_info("*", "article", $where_article, array(), array(), $exception_user)->num_rows();

	echo json_encode($returnarray);
	}
}
