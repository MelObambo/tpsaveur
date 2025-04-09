<?php

namespace App\Models\UserModel;

use App\Models\RoleModel\Role;

/**
 * ORM\Table(name="content")
 * ORM\Entity
 */
class User
{
    /**
     * @var int id
     * 
     * @ORM\id
     * @ORM\generatedValue
     * @ORM\Column(type="integer")
     */
    protected int $id;
    
    /**
     * @var string name
     * 
     * @ORM\name
     * @ORM\generatedValue
     * @ORM\Column(type="varchar")
     */
    protected string $name;
    
    /**
    * @var string $firstname
    * 
    * @ORM\Id
    * @ORM\generatedValue
    * @ORM\Column(type="varchar")
    */
    protected string $firstname;
    
    /**
     * @var string $mail
     * 
     * @ORM\Mail
     * @ORM\generatedValue
     * @ORM\Column(type="varchar")
     */
    protected string $mail;

    /**
     * @var int $phone
     * 
     * @ORM\Phone
     * @ORM\generatedValue
     * @ORM\Column(type="char")
     */
    protected int $phone;

    /**
     * @var Role $role
     * 
     * @ORM\Role
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="Users")
     * @ORM\JoinColumn(name="idRole", referenceColumnName=")
     */
    private Role $role;


    /**
     * Get user id
     * 
     * @return int id
     */    
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get user name
     * 
     * @return string name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get user firstname
     * 
     * @return string firstname
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Get user mail
     * 
     * @return string firstname
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * Get user phone
     * 
     * @return int phone
     */
    public function getPhone(): int
    {
        return $this->phone;
    }

    /**
     * Get user role
     * 
     * @return string roleLabel
     */
    public function getRole(): string
    {
        return $this->role->getLabel();
    }


    public function __construct(int $id, string $name, string $mail, int $phone, Role $role)
    {
        $this->id = $id;
        $this->name = $name;
        $this->mail = $mail;
        $this->phone = $phone;
        $this->role = $role;
    }
}

?>