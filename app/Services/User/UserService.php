<?php


namespace App\Services\User;


use App\Models\User;

class UserService
{

    private $user;

    /**
     * UserService constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function findAll()
    {
        return $this->user::query()
            ->get();
    }

}
