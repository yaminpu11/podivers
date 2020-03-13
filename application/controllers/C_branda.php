<?php defined("BASEPATH") OR exit("No direct script access allowed");

  class C_branda extends MY_Controller {

	function __construct()
    {
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        // header('Content-Type: application/json');
        $this->load->model('m_branda');
       
        $this->load->helper('url');
    }

    // ===== View ===== //
    function load_about(){
        $data=$this->m_branda->load_about();
        echo json_encode($data);
    }
    
    function load_slide1(){
        $data=$this->m_branda->list_data1();
        echo json_encode($data);
    }
    function load_slide2(){
        $data=$this->m_branda->list_data2();
        echo json_encode($data);
    }
    function load_slide3(){
        $data=$this->m_branda->list_data3();
        echo json_encode($data);
    }
    function load_slide4(){
        $data=$this->m_branda->list_data4();
        echo json_encode($data);
    }
    function load_slide5(){
        $data=$this->m_branda->list_data5();
        echo json_encode($data);
    }
    function load_slide6(){
        $data=$this->m_branda->list_data6();
        echo json_encode($data);
    }

    function load_category(){
        $data=$this->m_branda->list_category();
        echo json_encode($data);
    }
    function load_categorytop(){
        $data=$this->m_branda->list_categorytop();
        $data[0]->CreateAT = date('M d, Y', strtotime($data[0]->CreateAT));
        echo json_encode($data);
    }
    function load_categorytop1(){
        $data=$this->m_branda->list_categorytop1();
        foreach($data as $row){
		$row->CreateAT = date('M d, Y', strtotime($row->CreateAT));
		$new_data[]=$row;
		}
        echo json_encode($new_data);
    }
    function load_recentPost(){
        $data=$this->m_branda->list_recent_post();
        foreach($data as $row){
		$row->CreateAT = date('M d, Y', strtotime($row->CreateAT));
		$new_data[]=$row;
		}
        echo json_encode($new_data);
    }
    function load_recentPost1(){
        $data=$this->m_branda->list_recent_post1();
        foreach($data as $row){
		$row->CreateAT = date('M d, Y', strtotime($row->CreateAT));
		$new_data[]=$row;
		}
        echo json_encode($new_data);
    }
    function load_recommend(){
        $data=$this->m_branda->list_recommend();
        foreach($data as $row){
		$row->CreateAT = date('M d, Y', strtotime($row->CreateAT));
		$new_data[]=$row;
		}
        echo json_encode($new_data);
    }
    function load_recommend1(){
        $data=$this->m_branda->list_recommend1();
        foreach($data as $row){
		$row->CreateAT = date('M d, Y', strtotime($row->CreateAT));
		$new_data[]=$row;
		}
        echo json_encode($new_data);
    }

    // function count_slider(){
    //     $data['getslider']=$this->m_branda->count_slider()->result();
    //     $this->load->view('v_home', $data);
    // }

  //   function load_trending(){
  //       $data['record32']=$this->m_branda->list_trending()->result();

		// $this->load->view('v_home', $data);
  //   }

  //   function load_most(){
  //       $data['record22']=$this->m_branda->list_trending()->result();
  //       print_r($data);
		// $this->load->view('template/v_details', $data);
  //   }
    function load_details(){

    	$id= $this->input->post('id');
    	// var_dump($id);
        $data=$this->m_branda->get_by_id($id);
        echo json_encode($data);
        // var_dump($id);

        //  $content = $this->load->view('template/v_details',$data,true);
      	// parent::template($content);

    }
    function show_bycategory(){
        $idcategory = $this->input->post('idcategory');
        // var_dump($idcategory);
        $data = $this->m_branda->load_bycategory($idcategory);
        
        echo json_encode($data);
    }
    function save_comment(){
    	date_default_timezone_set('Asia/Jakarta');
        $dataTime = date('Y-m-d H:i:s') ;
        $this->_validate();
        $data = [
                'ID_title'  => $this->input->post('id_title'), 
                'Comment'  => $this->input->post('comment'), 
                'Name' => $this->session->userdata('Username'), 
                'Email' => $this->session->userdata('Email'),
                // 'Password' => $this->input->post('password'),
                'Status' => 'User',
                'CreateAT' => $dataTime,
            ];
	 
	    $insert = $this->m_branda->save_comment($data);
        // $result=$this->db->insert('article',$data);
        echo json_encode(array("status" => TRUE));
    	
    }

    function show_comment(){
    	$id = $this->input->post('id');
        $data = $this->m_branda->list_comment($id);
        echo json_encode($data);
    }

    function save_childcomment(){
    	date_default_timezone_set('Asia/Jakarta');
        $dataTime = date('Y-m-d H:i:s') ;
        $this->_validate();
        $data = [
                'ID_comment'  => $this->input->post('id_comment'),
                'Comment'  => $this->input->post('comment'), 
                'Name' => $this->session->userdata('Username'), 
                'Email' => $this->session->userdata('Email'),
                'Status' => 'User',
                'CreateAT' => $dataTime,
            ];
	 
	    $insert = $this->m_branda->save_childcomment($data);
        // $result=$this->db->insert('article',$data);
        echo json_encode(array("status" => TRUE));
    	
    }

    function show_childcomment(){
    	$id = $this->input->post('id');
    	$id_comment = $this->input->post('id_comment');
        $data = $this->m_branda->list_childcomment($id,$id_comment);
        echo json_encode($data);
    }

    function save_contact(){
    	date_default_timezone_set('Asia/Jakarta');
        $dataTime = date('Y-m-d H:i:s') ;
        $this->_validatecontact();
        $data = [
                'Message'  => $this->input->post('message'), 
                'Name' => $this->input->post('name'), 
                'Email' => $this->input->post('email'),
                'Subject' => $this->input->post('subject'),
                'Phone' => $this->input->post('phone'),
                'CreateAT' => $dataTime,
            ];
	 
	    $insert = $this->m_branda->save_contact($data);
        // $result=$this->db->insert('article',$data);
        echo json_encode(array("status" => TRUE));
    	
    }

    function save_rating(){

        $ip_public = (array_key_exists('ip', $getIP = $this->GetIPPublic() )) ? $getIP['ip'] : '';
        $getdata=array(
                 'ID_article' => $this->input->post('id'), 
                 'Rating' => $this->input->post('rating'), 
                 'IP_public' => $ip_public,
                );
        $data = $this->m_branda->save_rating($getdata);
        echo json_encode($data);
    }

    function show_rata(){
        $idpost = $this->input->post('id');
        $data = $this->m_branda->show_rating($idpost);
        echo json_encode($data);    
    }

    public function GetIPPublic($url='https://api.ipify.org/?format=json')
    {
        $rs = array();
       
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $pr = curl_exec($ch);
        $rs = (array) json_decode($pr,true);
        curl_close ($ch);
        return $rs;
    }

    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;
 
        if($this->input->post('comment') == '')
        {
            $data['inputerror'][] = 'comment';
            $data['error_string'][] = 'Comment is required';
            $data['status'] = FALSE;
        }
 
        // if($this->input->post('name') == '')
        // {
        //     $data['inputerror'][] = 'name';
        //     $data['error_string'][] = 'Name is required';
        //     $data['status'] = FALSE;
        // }
 
        // if($this->input->post('email') == '')
        // {
        //     $data['inputerror'][] = 'email';
        //     $data['error_string'][] = 'Email is required';
        //     $data['status'] = FALSE;
        // }
  
        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }

    private function _validatecontact()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;
 
        if($this->input->post('message') == '')
        {
            $data['inputerror'][] = 'message';
            $data['error_string'][] = 'Message is required';
            $data['status'] = FALSE;
        }
 
        if($this->input->post('name') == '')
        {
            $data['inputerror'][] = 'name';
            $data['error_string'][] = 'Name is required';
            $data['status'] = FALSE;
        }
 
        if($this->input->post('email') == '')
        {
            $data['inputerror'][] = 'email';
            $data['error_string'][] = 'Email is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('subject') == '')
        {
            $data['inputerror'][] = 'subject';
            $data['error_string'][] = 'Subject is required';
            $data['status'] = FALSE;
        }
  
        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }

    public function details_search(){
        $search = $this->input->post('value');
        $data=$this->m_branda->get_by_search($search);
        echo json_encode($data);
    }

}

