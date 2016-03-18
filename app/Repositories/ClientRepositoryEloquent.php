<?php
/**
 * Created by PhpStorm.
 * User: rafael.franco
 * Date: 18/03/2016
 * Time: 15:33
 */

namespace CodeProject\Repositories;


use CodeProject\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{

    public function model()
    {
        return Client::class;
    }

}