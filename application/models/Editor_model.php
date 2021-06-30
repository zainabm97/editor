<?php 
    class Editor_model extends CI_Model {
        public function  __construct(){
            $this->load->database();
        }

        public function db_insert($data){
            $data = array(
               
                'body' => $data,
            );

            $this->db->insert('post', $data);
          return true ;
        }


        public function fetch(){

            $this->db->select("*");
            $this->db->from("post");
            $this->db->limit(1);
            $this->db->order_by('post_id',"DESC");
            $query = $this->db->get();
            $result = $query->result();
            return $result ;
        }

    }
    