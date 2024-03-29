<?php

class M_Homepage extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function getClass($email){
        $this->db->select('*');
        $this->db->from('class');
        $this->db->join('users', 'class.lecturer = users.user_id', 'left');
        $this->db->where('email', $email);
        
        $query = $this->db->get(); //echo $sql; die();

        if ($query->num_rows() == 1) {
            return $query->result_array();
        } else if ($query->num_rows() > 1){
        	return $query->result_array();
        }
    }

    public function getClassDataTable($lecturer){
        $this->db->select('class.class_id, class.name, class.place, class.grade, class.term');
        $this->db->from('class');
        $this->db->join('users', 'lecturer = user_id', 'left');
        $this->db->where('email', $lecturer);
        
        $query = $this->db->get(); //echo $sql; die();

        if ($query->num_rows() > 1) {
            // return $query->result_array();
            $results = $query->result_array();
            $columns = [];
            $data = [];

            foreach ($results as $row_number => $row) {
                $new_row = [];
                foreach ($row as $column_name => $column_value) {
                    if ($row_number == 0){
                        $column = new stdClass();
                        $column->title = $column_name;
                        $columns[] = $column;
                    }
                    // echo $column_value;
                    if ($column_name == 'grade') {
                        $new_row[] = 'S'.$column_value;
                    } else if ($column_name == 'term') {
                        $new_row[] = $column_value.'/'.($column_value + 1);
                    } else {
                        $new_row[] = $column_value;
                    }
                }

                $data[] = $new_row;
            }

            $result = [
                'data' => $data,
                'columns' => $columns
            ];

            // echo "<pre>";
            // print_r($result);
            // die();

            return $result;
        } 
    }
}
?>
