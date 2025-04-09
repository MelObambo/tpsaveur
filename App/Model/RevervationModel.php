<?php

namespace App\Models\ReservationModel;

use App\Models\UserModel\User;

class Reservation
{
    private int $id;
    private int $attendeesNumber;
    private string $message;
    private User $user;

    /**
     * Get reservation id
     * 
     * @return int $id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get reservation attendeesNumber;
     * 
     * @return int $attendeesNumber
     */
    public function getAttendeesNumber(): int
    {
        return $this->attendeesNumber;
    }

    /**
     * Get reservation message
     * 
     * @return string message
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Get reservation user
     * 
     * @return int user
     * The user id
     */
    public function getUser(): int
    {
        return $this->user->getId();
    }


    public function __construct(int $id, int $attendeesNumber, string $message, User $user) {
        $this->id = $id;
        $this->attendeesNumber = $attendeesNumber;
        $this->message = $message;
        $this->user = $user;
    }
}

?>