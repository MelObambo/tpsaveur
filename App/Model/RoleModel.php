<?php

namespace App\Models\RoleModel;

class Role
{
    private int $id;
    private string $label;

    public function getId(): int
    {
        return $this->id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function __construct(int $id, string $label)
    {
        $this->id = $id;
        $this->label = $label;
    }
}

?>