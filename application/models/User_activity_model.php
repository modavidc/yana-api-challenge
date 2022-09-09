<?php

class User_activity_model extends CI_Model
{
    public int $id;
    public int $uid;
    public string $message_text;
    public string $message_from;
    public string $datetime;
    public string $timestamp;

    public function get_by(string $field, string $fieldValue)
    {
        return $this->db->get_where('user_activities', [$field => $fieldValue])->result();
    }
}
