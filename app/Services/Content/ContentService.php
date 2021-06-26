<?php


namespace App\Services\Content;


use App\Repositories\Content\ContentRepository;

class ContentService
{

    private $repository;

    /**
     * ContentService constructor.
     * @param ContentRepository $contentRepository
     */
    public function __construct(ContentRepository $contentRepository)
    {
        $this->repository = $contentRepository;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function show()
    {
        return $this->repository
            ->findAll();
    }

    /**
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function create(array $data){
        $user = auth()->user();
        $data['user_id'] = $user->id;
        return $this->repository->create($data);
    }

}
