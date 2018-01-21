<?php
class login_model extends CI_Model 
{
   
    function cek($username='', $password='') 
    {
        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));

        return $this->db->get('user_admin');
    }

   // function getLoginData($usr, $psw)
   // {
   //     $u = $usr;
   //     $p = md5($psw);
   //     $q_cek_login = $this->db->get_where('user_admin', array('username' => $u, 'password' => $p));
   //     if(count($q_cek_login->result()) > 0){
   //         foreach($q_cek_login->result() as $qck){
   //             foreach($q_cek_login->result() as $qad){
   //                 $sess_data['logged_in'] = TRUE;
   //                 $sess_data['id'] = $qad->id;
   //                 $sess_data['username'] = $qad->username;
   //                 $sess_data['password'] = $qad->password;
   //                 $sess_data['email'] = $qad->email;
   //                 $sess_data['level'] = $qad->level;
   //                 $this->session->set_userdata($sess_data);
   //             }
   //             redirect('');
   //         }
   //     }else{
   //         $this->session->set_flashdata('result_login'. 'username dan password salah');
   //         header('location: '. base_url(). 'login');
   //     }
   // }
}