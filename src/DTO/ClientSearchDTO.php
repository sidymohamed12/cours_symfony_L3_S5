<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class ClientSearchDTO
{

    public string $telephone;

    public function __construct()
    {
        $this->telephone = '';
    }
}