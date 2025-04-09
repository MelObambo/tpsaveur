<?php


namespace App\Models\UserModel\AdminModel;


use App\Models\UserModel\User;
use App\Models\RoleModel\Role;

class Admin extends User
{
    private int $login;
    private int $password;

    /**
     * Get user login

     * 
     * @return string login
     * This value is empty if the user is a customer.
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * Get user password
     * 
     * @return string password
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function __construct(int $id, string $name, string $mail, int $phone, int $login, int $password, Role $role)
    {
        parent::__construct($id, $name, $mail, $phone, $role);
        $this->login = $login;
        $this->password = $password;
    }
}


?>