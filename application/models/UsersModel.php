<?php 
  class UsersModel extends CI_model {
    public function getUsers() {
        return $this->db->get('users');
    }

    public function allProducts() {
        return $this->db->get('products');
    }
    public function deleteUsers($id){
        $this->db->delete("users", ["userId" => $id]);
    }
    public function updateUsers($data, $id){
        $this->db->update("users",$data,  ["userId" => $id]);
    }
    public function one($id){
        $query = $this->db->get_where('users', ['userId'=> $id]);
        return $query->row();

    }
    public function uppdatedUsers($id, $data){
        $this->db->update("users",$data, ['userId' => $id]);
    }

    public function regist($data){
        $this->db->insert('users',$data);
    }
    public function registerProduct($data){
        $this->db->insert('products',$data);
    }
    public function getProducts(){
        return $this->db->get_where('products');
    }
    public function getProductsbyId($id){
        $query =  $this->db->get_where('products',['productId' => $id]);
        return $query->row();

    }

    public function deleteProduct($id){
        $this->db->delete('products', ['productId'=>$id]);

    }
  }



?>