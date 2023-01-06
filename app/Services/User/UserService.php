<?php
namespace App\Services\User;

use App\Repositories\UserRepository\UserRepository;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }
}
