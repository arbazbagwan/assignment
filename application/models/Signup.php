<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Model
{

     public function insert_signup($data)
     {
        $name = $data['name'];
        $email = $data['email'];
        $address = $data['address'];
        $phone = $data['phone'];
        $designation = $data['designation'];
        $password = $data['password'];
      
        $date=date("Y-m-d H:i:s"); 
            $data1=array(
                            
                          'name'=>$name,
                          'email'=>$email,
                          'address'=>$address,
                          'phone'=>$phone,
                          'designation'=>$designation,
                          'password'=>$password,
                          'date_created'=>$date
                          
                        );
            $this->db->insert('tbl_users',$data1);


     }

    public function display_details()
    {
            $data =  $this->db->query("SELECT * FROM tbl_users")->result();
            $new_data = array(
                'data' => $data
            );
            return $new_data;

    }
}
