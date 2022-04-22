<?php 


class Manajementim extends CI_Controller {

function __construct(){
parent::__construct();
  $this->load->model('Manajementim_Model');
//$this->load->model('DataPenduduk_Model');
$this->load->helper('url');

}

  public function index()
    {


 if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');
  			}
    
    else if ( $this->session->userdata('akses')=='admin')
          { 
           $this->load->model('Manajementim_Model');
         $data['datatim'] = $this->Manajementim_Model->getAlldatatim();

  
        $this->load->view('template/Header');
        $this->load->view('Manajementim',$data);
        $this->load->view('template/Footertable');


  		}
    
    else{
  
redirect('Home/logout','refresh');
    	
     

    }
 }

      public function Viewupdate($id_tim)
    {

    	 if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');}
    

    else if ( $this->session->userdata('akses')=='admin')
          { 
		    	
		    	
		$this->load->model('Manajementim_Model');
		 $data['datatim'] = $this->Manajementim_Model->Datatimwhere($id_tim);
     $data['nama_tim_leaderall']=$this->Manajementim_Model->Nama_tim_leaderall();
  
      $this->load->view('template/Header');
        $this->load->view('Viewupdatetim',$data);
      $this->load->view('template/Footer');
  		}
    
    else{
    	redirect('Home/logout','refresh');
  


     

    }
}

     public function Aksiupdatetim()
    {

    		if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');}
    

    else if ( $this->session->userdata('akses')=='admin')
          { 
		    	$this->load->model('Manajementim_Model');
		
		  $id_tim=$this->input->post('id_tim');
      $id_tim_lama=$this->input->post('id_tim_lama');
				 $nama_tim_leader=$this->input->post('nama_tim_leader');
               


		$this->Manajementim_Model->Aksiupdatetim($id_tim,$nama_tim_leader,$id_tim_lama);

		
		redirect('Manajementim');
      
  		}
    
    else{
    	redirect('Home/logout','refresh');
  


     

    }
}

	
     

  

     public function Deletetim($id_tim)

     	 {

    		if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');}
    

    else if ( $this->session->userdata('akses')=='admin')
          { 
		    	$this->load->model('Manajementim_Model');
    		$this->Manajementim_Model->Deletetim($id_tim);

    		redirect('Manajementim');
      
  		}
    
    else{
    	redirect('Home/logout','refresh');
  


     

    }
}






  



      public function Viewaddtim()
    {

    	 if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');

  			}
    

    else if ( $this->session->userdata('akses')=='admin')
          { 
		    	
  
		
             $data['nama_tim_leaderall']=$this->Manajementim_Model->Nama_tim_leaderall();
      $this->load->view('template/Header');
      $this->load->view('Viewaddtim',$data);
      $this->load->view('template/Footer');
  		}
    
    else{
    	redirect('Home/logout','refresh');
  

    }


	}



 public function Aksiaddtim()
    {

    	 if ( $this->session->userdata('akses')==null)
          { redirect('Home/logout','refresh');

  			}
    

    else if ( $this->session->userdata('akses')=='admin')
          { 
		    	
  	$this->load->model('Manajementim_Model');
		
	
		
				 $id_tim=$this->input->post('id_tim');
                $nama_tim_leader=$this->input->post('nama_tim_leader');
                

     



		$this->Manajementim_Model->Aksiaddtim($id_tim,$nama_tim_leader);

		
		redirect('Manajementim');
  		}
    
    else{
    	redirect('Home/logout','refresh');
  


     

    }
	}










}