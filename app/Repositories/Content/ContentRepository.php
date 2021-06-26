<?php


namespace App\Repositories\Content;


use App\Contracts\Repository\AbstractRepository;
use App\Models\Content;

class ContentRepository extends AbstractRepository
{

    public function __construct()
    {
        $this->setModel(Content::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function findAll()
    {
        return $this->getModel()
            ::with('user')
            ->get();
    }

}
