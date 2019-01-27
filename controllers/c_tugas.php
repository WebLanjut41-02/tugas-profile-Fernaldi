<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class c_tugas
 extends CI_Controller {

    public function index($value='home')
    {
        // $this->load->view('main/header');
        // $this->load->view('main/footer');

        $this->load->view('pages/'.$value);
        
    }

    public function inputkomen()
    {
        $komen=$this->input->post('komen');
        $data['kmtr'] = $komen;
        $this->load->view('pages/home',$data);
        
    }

}

/* End of file c_tugas
.php */


?>