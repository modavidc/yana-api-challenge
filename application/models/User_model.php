<?php

class User_model extends CI_Model
{
    public int $id;
    public string $email;
    public string $password;

    public function create(array $params)
    {
        $this->email    = $params['email'];
        $this->password = $params['password'];

        $this->db->insert('users', $this);
    }

    public function get_by(string $field, string $fieldValue): ?array
    {
        return $this->db->get_where('users', [$field => $fieldValue])->row_array();
    }
}
