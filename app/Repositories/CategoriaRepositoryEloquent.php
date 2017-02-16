<?php
/**
 * Created by PhpStorm.
 * User: rodri
 * Date: 15/02/2017
 * Time: 21:47
 */

namespace ifestas\Repositories;


use ifestas\Entities\Categoria;
use Prettus\Repository\Eloquent\BaseRepository;

class CategoriaRepositoryEloquent extends BaseRepository implements CategoriaRepository
{

    public function model()
    {
        return Categoria::class;
    }
}