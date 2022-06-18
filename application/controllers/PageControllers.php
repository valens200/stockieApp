<?php

class PageControllers extends CI_controller{

    public function showLandingPage(){
        $this->load->view('template/header');
        $this->load->view('pages/home');
        $this->load->view('template/footer');
    }

    public function showDashboard(){
        $this->load->model('UsersModel', 'md');
        $data['products'] = $this->md->allProducts();
        $this->load->view('template/header');
        $this->load->view('components/side');
        $this->load->view('components/nav');
        $this->load->view('components/analytics');
        $this->load->view('components/table', $data);
        $this->load->view('components/footer');
    }
    public function users(){
        $this->load->model('UsersModel', 'users');
        $data['users'] = $this->users->getUsers();
        $this->load->view('template/header');
        $this->load->view('components/side');
        $this->load->view('components/nav');
        // $this->load->view('components/analytics');
        $this->load->view('components/userstable', $data);
        $this->load->view('components/footer');
    }
    public function outgoing(){
        $this->load->model('UsersModel', 'md');
        $data['products'] = $this->md->allProducts();
        $this->load->view('template/header');
        $this->load->view('components/side');
        $this->load->view('components/nav');
        $this->load->view('components/outgoing' , $data);
        $this->load->view('components/footer');
    }
    public function ingoing(){
        $this->load->model('UsersModel', 'md');
        $data['products'] = $this->md->allProducts();
        $this->load->view('template/header');
        $this->load->view('components/side');
        $this->load->view('components/nav');
        $this->load->view('components/ingoing', $data);
        $this->load->view('components/footer');
    }
    public function products(){
        $this->load->model('UsersModel','md');
        $data['products'] = $this->md->getProducts();

        $this->load->view('template/header');
        $this->load->view('components/side');
        $this->load->view('components/nav');
        $this->load->view('components/products', $data);
        $this->load->view('components/footer');
    }
    public function delete($id){
        $this->load->model('UsersModel', 'users');
        $this->users->deleteUsers($id);
        $this->users();    
    }
    
   
    public function updateUser($id){
        $this->load->model('UsersModel', 'users');
        $data['users'] = $this->users->one($id);
        $this->load->view('template/header');
        $this->load->view('components/side');
        $this->load->view('components/nav');
        $this->load->view('components/fom', $data);
        
    }
       
    public function uppdateUser(){
        $this->load->view('template/header');
        $this->load->view('components/side');
        $this->load->view('components/nav');
        $this->load->view('components/from');
        
    }
    public function updatebyID($id){
        $this->load->model('UsersModel', 'users');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'firstname', 'required');
        $this->form_validation->set_rules('lastname', 'lastname','required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('email','email', 'required');
        $this->form_validation->set_rules('telephone', 'telephone', 'required');
        $this->form_validation->set_rules('nationality', 'nationality', 'required');

        if(!$this->form_validation->run()){
            $this->updateUser($id);
        }else{
            $data = [
                'firstName'=>$this->input->post('firstname'),
                'lastName' => $this->input->post('lastname'),
                'telephone' => $this->input->post('telephone'),
                'gender'=>'male',
                'nationality'=>$this->input->post('nationality'),
                'email'=>$this->input->post('email'),
                'password'=>$this->input->post('password')
            ];
            $this->load->model('UsersModel', 'users');
            $this->users->uppdatedUsers($id, $data);
            redirect(base_url('index.php/PageControllers/users'));
        }
       
    }

    public function registerUser(){
        $this->load->model('UsersModel', 'users');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'firstname', 'required');
        $this->form_validation->set_rules('lastname', 'lastname','required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('email','email', 'required');
        $this->form_validation->set_rules('telephone', 'telephone', 'required');
        $this->form_validation->set_rules('nationality', 'nationality', 'required');

        if($this->form_validation->run()){
            $data = [
                'firstName'=>$this->input->post('firstname'),
                'lastName' => $this->input->post('lastname'),
                'telephone' => $this->input->post('telephone'),
                'gender'=>'male',
                'nationality'=>$this->input->post('nationality'),
                'email'=>$this->input->post('email'),
                'password'=>$this->input->post('password')
            ];
            $this->load->model('UsersModel', 'rs');
            $this->rs->regist($data);
            $this->users();
            
        }else{
            $this->uppdateUser();
        
        }


    }

    public function showregister(){
        $this->load->view('template/header');
        $this->load->view('components/side');
        $this->load->view('components/nav');
        $this->load->view('components/froma');
    }
    public function registerProduct(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('productname', 'productname', 'required');
        $this->form_validation->set_rules('brand', 'brand', 'required');
        $this->form_validation->set_rules('supplier', 'supplier', 'required');
        $this->form_validation->set_rules('supplierphone', 'supplierphone', 'required');


        if($this->form_validation->run()){

            $data = [
                'product_Name'=>$this->input->post('productname'),
                'brand'=>$this->input->post('brand'),
                'supplier'=> $this->input->post('supplier'),
                'supplier_phone'=>$this->input->post('supplierphone'),
            ];

            $this->load->model('UsersModel', 'md');
            $this->md->registerProduct($data);
            $this->products();
        }else{
            $this->showregister();
        }
    }


    //products controller


    public function deleteProduct($id){
        $this->load->model('UsersModel', 'md');
        $this->md->deleteProduct($id);
        $this->products();
    }
    public function getOne($id){
            $this->load->model('UsersModel', 'md');
            $data['products'] = $this->md->getProductsbyId($id);
            $this->load->view('template/header');
            $this->load->view('components/side');
            $this->load->view('components/nav');
            $this->load->view('components/prod', $data);
        }
    public function updateLast($id){
        $this->load->model('UsersModel', 'md');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('productname', 'productname', 'required');
        $this->form_validation->set_rules('brand', 'brand', 'required');
        $this->form_validation->set_rules('supplier', 'supplier', 'required');
        $this->form_validation->set_rules('supplierphone', 'supplierphone', 'required');


        if($this->form_validation->run()){

            $data = [
                'product_Name'=>$this->input->post('productname'),
                'brand'=>$this->input->post('brand'),
                'supplier'=> $this->input->post('supplier'),
                'supplier_phone'=>$this->input->post('supplierphone'),
            ];
            $this->md->updateLast($id, $data);
            $this->products();
        }else{
            $this->showregister();
        }
    }


}




?>