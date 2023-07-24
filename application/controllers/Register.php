  <?php 
  class Register extends CI_Controller{
    public function index(){
        $this->load->view('login');
    }
    public function Student() {
        $this->load->view('Application_form');

    }

   public function SaveData(){
    /*
     $stid= $this->input->post('stid');
     $stname= $this->input->post('stname');
     $stdate= $this->input->post('stdate');
     $staddress= $this->input->post('staddress');
     $sel= $this->input->post('sel');
     $stphonenumber= $this->input->post('stphonenumber');
     $Gender= $this->input->post('Gender');
     $sel= $this->input->post('sel');
*/

     extract($_POST);
     echo $stid.' '.$stname.' '.$stdate.' '.$staddress.' '.$sel.' '.$stphonenumber.' '.$Gender.' '.$sel;
    }
  }
  
  
  
  ?>            