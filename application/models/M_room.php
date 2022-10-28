<?php
class M_room extends CI_Model
{
    public function getRoom()
    {
        $query = "SELECT `room`.*,`hotel`.`nama_hotel`,`user`.`email`,`room_type`.`name`
                    FROM `room` JOIN `hotel`
                    ON `room`.`hotel_id` = `hotel`.`id`
                    JOIN `user` ON `room`.`user_id` = `user`.`id`
                    JOIN `room_type` ON `room`.`type_id` = `room_type`.`id`
        ";
        return $this->db->query($query)->result();
    }
    public function update($where, $table, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}