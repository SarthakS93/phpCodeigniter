<?php 
   class Stud_controller extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  
      public function index() { 
         $query = $this->db->get("student"); 
         $data['records'] = $query->result(); 
         
			
         $this->load->helper('url');
         $this->load->view('templates/header'); 
         $this->load->view('Stud_view',$data); 
         $this->load->view('templates/footer');
      } 
  
      public function add_student_view() { 
         $this->load->helper('form'); 
         $this->load->view('templates/header');
         $this->load->view('Stud_add'); 
         $this->load->view('templates/footer');
      } 
  
      public function add_student() { 
         $this->load->model('Stud_Model');
			/*echo $this->input->post('roll_no');
         echo $this->input->post('address');
         echo $this->input->post('name');
         echo $this->input->post('gender');
         //echo $this->input->post('activities');
         echo $this->input->post('yr');*/


         $a = $this->input->post('activities');          
             $N = count($a);
             $str = "";
             
             for($i=0; $i < $N; $i++)
             {
               $str .= $a[$i];
               if($i != $N - 1) {
                  $str .= " ";
               }

               
               //echo($a[$i] . " ");
             }
             //echo $str;
             //$ip = explode(" ", $str);
             //echo sizeof($ip);
             //echo $ip;

           

         $data = array( 
            'roll_no' => $this->input->post('roll_no'), 
            'name' => $this->input->post('name'),            
            'address' => $this->input->post('address'),
            'gender' => $this->input->post('gender'),
            'activities' => $str,
            'year' => $this->input->post('yr') 
         ); 
			
         $this->Stud_Model->insert($data); 
   
         $query = $this->db->get("student"); 
         $data['records'] = $query->result();
         $this->load->view('templates/header'); 
         $this->load->view('Stud_view',$data); 
         $this->load->view('templates/footer');
      } 
  
      public function update_student_view() { 
         $this->load->helper('form'); 
         $roll_no = $this->uri->segment('3'); 
         $query = $this->db->get_where("student",array("roll_no"=>$roll_no));
         $data['records'] = $query->result(); 
         $data['old_roll_no'] = $roll_no;
         $this->load->view('templates/header'); 
         $this->load->view('Stud_edit',$data); 
         $this->load->view('templates/footer');
      } 
  
      public function update_student(){ 
         $this->load->model('Stud_Model');

            $a = $this->input->post('activities');          
            $N = count($a);
            $str = "";
             
             for($i=0; $i < $N; $i++)
             {
               $str .= $a[$i];
               if($i != $N - 1) {
                  $str .= " ";
               }

             }
			
         $data = array( 
            'roll_no' => $this->input->post('roll_no'), 
            'name' => $this->input->post('name'), 
            'address' => $this->input->post('address'),
            'gender' => $this->input->post('gender'),
            'activities' => $str,
            'year' => $this->input->post('yr')
         ); 
			
         $old_roll_no = $this->input->post('old_roll_no'); 
         $this->Stud_Model->update($data,$old_roll_no); 
			
         $query = $this->db->get("student"); 
         $data['records'] = $query->result(); 
         $this->load->view('templates/header');
         $this->load->view('Stud_view',$data); 
         $this->load->view('templates/footer');
      } 
  
      public function delete_student() { 
         $this->load->model('Stud_Model'); 
         $roll_no = $this->uri->segment('3'); 
         $this->Stud_Model->delete($roll_no); 
   
         $query = $this->db->get("student"); 
         $data['records'] = $query->result();
         $this->load->view('templates/header'); 
         $this->load->view('Stud_view',$data); 
         $this->load->view('templates/footer');
      } 
   } 
?>