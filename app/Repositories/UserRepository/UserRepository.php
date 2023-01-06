<?php

namespace App\Repositories\UserRepository;

use App\Models\User;
use App\Repositories\BaseRepository\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    protected $user;

    public function __construct(User $user)
    {
        parent::__construct($user);
    }
}

?>
