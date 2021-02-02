<?php
class User_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function get_user($usr)
        {
                $query = $this->db->select('user_name, user_password')
                                ->where('user_name', $usr)
                                ->get('hrd_user_login');

                return $query->row();
        }

        public function get_absen_lengkap()
        {
                $query = $this->db->query('select * from hrd_absen a left join hrd_user_login b on a.id_user = b.user_id left join hrd_pgw c on c.pgw_id = b.id_pgw');
                return $query->result();
        }

        public function get_absen_harian()
        {
                $d = date('Y-m-d');
                $sql = "select * from hrd_absen a left join hrd_user_login b on a.id_user = b.user_id left join hrd_pgw c on c.pgw_id = b.id_pgw where a.absen_tgl = ?";
                $query = $this->db->query($sql, $d);
                return $query->result();
        }

        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

}