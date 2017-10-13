<?php
require_once(APPPATH . 'models/Agat_model.php');

class Users_model extends Agat_model
{
    protected $table = TBL_USERS;

    /**
     * @param int $username
     * @param int $password
     * @return int
     */
    public function checkIfUserExist($username, $password)
    {
        $res = $this->db
            ->where('username', $username)
            ->get($this->getTable())
            ->row_array();

        return empty($res) ? false : password_verify($password, $res['pass']);
    }

    /**
     * @param string $username
     */
    public function updatePassword($username)
    {
            $array = array(
                'pass' => password_hash($_POST['new_password'], PASSWORD_DEFAULT)
            );
            $this->db->set($array);
            $this->db->where('username', $username);
            $this->db->update($this->getTable());
    }

}