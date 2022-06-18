<?php 

 class  UsersControllers extends CI_Controller{

    public function register(){

    }
    public function users(){
        $this->load->model('UsesModel', 'users');
        $data['users'] = $this->users->getUsers();
        $this->load->view('table', $data); 
    }
    public function updateLast($id, $data){
        $this->db->update('users',$data, ['productId'=>$id]);
    }
 }


?>