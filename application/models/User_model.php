<?php 
class User_model extends CI_model{

    function adduser($user){
        //var_dump($user);
        //$this->db->insert('usuarios',$user);
                /* ->update('usuarios',$user); */
        //update
        $id=12;
         /* 
        $this->db->where('id',$id)
                    ->update('usuarios',$user); */

        $this->db->where('id',$id)
                    ->delete('usuarios'); 
                    
    }



}
?>