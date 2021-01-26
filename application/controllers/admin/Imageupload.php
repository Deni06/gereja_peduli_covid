<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imageupload extends CI_Controller {
		
	public function __construct ()
	{
		parent::__construct();		
		
	}
	
	public function index()
	{	        
        error_reporting(-1);
        date_default_timezone_set('Asia/Jakarta');

// cek 1
if (preg_match('/^image\/p?jpeg$/i', $_FILES['imagewyg']['type']) or
preg_match('/^image\/gif$/i', $_FILES['imagewyg']['type']) or
preg_match('/^image\/jpg$/i', $_FILES['imagewyg']['type']) or
preg_match('/^image\/(x-)?png$/i', $_FILES['imagewyg']['type'])) {
    
    $pictureName = "INL_".$this->input->post('folder')."_".date('dmYHis');    
    $ext = explode(".", $_FILES['imagewyg']['name']);
    $ext = strtolower(end($ext));
    $pictureName = $pictureName.".".$ext;
    
    $tpFile = htmlspecialchars($_FILES['imagewyg']['tmp_name'], ENT_QUOTES, 'UTF-8');
    $pictureName = htmlspecialchars($pictureName, ENT_QUOTES, 'UTF-8');        
} else {    
    $updErr = 'Please upload a JPEG, GIF, or PNG image file';
    exit;

}

// cek 2
$type = array("jpg","jpeg","gif","png");

$ext = explode(".", $_FILES['imagewyg']['name']);
$ext = strtolower(end($ext));

if (!in_array($ext, $type)){
    $updErr = 'Please upload a JPEG, GIF, or PNG image file';
    exit;
}

// upload
if (!is_uploaded_file($_FILES['imagewyg']['tmp_name']) ) {

    $updErr = 'Please upload a JPEG, GIF, or PNG image file';

} else {        
    move_uploaded_file($tpFile, "assets/images/tmp/".$pictureName);
    $this->load->library('Compress');
				$compress0 = new Compress();		
                        
		$compress0->file_url = getcwd().'/assets/images/tmp/'.$pictureName;
		$compress0->new_name_image = $pictureName;
		$compress0->quality = 60;
        $compress0->destination = base_url().'assets/images/'.$this->input->post('folder').'/';                

        $compress0->compress_image();
        
        if(file_exists(getcwd().'/assets/images/tmp/'.$pictureName)){
			unlink(getcwd().'/assets/images/tmp/'.$pictureName);						
		}		
}

$file = base_url()."/assets/images/".$this->input->post('folder').'/'.$pictureName;        

$data['success'] = true;
$data['url'] = $file;

header('Content-type:application/json;charset=utf-8');
echo json_encode( $data );
	}	

}