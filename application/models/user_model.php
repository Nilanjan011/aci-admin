<?php

class user_model extends CI_Model{

    // public function __construct() {
    //     parent::__construct(); 
    //     $this->load->database();
    // }

    public function get_data(){

        // $this->load->database();
        $this->db->order_by("id", "desc");
        // $query = $this->db->get($this->table_name);
        // return $query->result();
        $query = $this->db->get('user');

        return $query->result();
        
    }

    public function login_check(){
        $email =$this->input->post('email');
        $password =$this->input->post('password');
            
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query= $this->db->get("admin");
        // $query= $this->db->query("SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password'");
        // echo "<pre>";

        // print_r($query->num_rows());
        // //var_dump($query);
        // die();
        if ($query->num_rows()==1) {
            return $query->num_rows();
            // echo "login";
        }
        return false;
    }
    public function add()
    {
        $data=[
            "email" =>$this->input->post('email'),
            "password"=> $this->input->post('password')
        ];
        return $this->db->insert('admin', $data);
    }

    public function insert_item($image_path)
    {    
        $data = array(

            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'image'=>$image_path

        );

        return $this->db->insert('user', $data);

    }



    public function update_item($id,$image_path) 
    {
        if ($image_path!="") {
            $data=array(

            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'image'=>$image_path
        );
        } else {
            $data=array(

            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            );
        }
        if($id==0){

            return $this->db->insert('user',$data);

        }else{

            $this->db->where('id',$id);

            return $this->db->update('user',$data);

        }        

    }


    public function find_item($id)
    {

        return $this->db->get_where('user', array('id' => $id))->row();

    }


    public function delete_item($id)
    {
        $image=$this->user_model->find_item($id);
        unlink($image->image);
        return $this->db->delete('user', array('id' => $id));

    }

}

?>

