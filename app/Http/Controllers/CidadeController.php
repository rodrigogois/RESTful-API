<?php

namespace ifestas\Http\Controllers;

use ifestas\Repositories\CidadeRepository;

class CidadeController extends Controller
{
    /**
     * @var CidadeRepository
     */
    private $repository;

    public function __construct(CidadeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function lista()
    {
        return $this->repository->paginate(5);
    }

}
