<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 15/02/2017
 * Time: 21:17
 */

namespace ifestas\Repositories;


use ifestas\Entities\Cidade;
use Prettus\Repository\Eloquent\BaseRepository;

class CidadeRepositoryEloquent extends BaseRepository implements CidadeRepository
{
    public function model()
    {
        return Cidade::class;
    }

}