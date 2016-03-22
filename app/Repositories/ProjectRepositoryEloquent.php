<?php
/**
 * Created by PhpStorm.
 * User: rafael.franco
 * Date: 22/03/2016
 * Time: 10:26
 */

namespace CodeProject\Repositories;


use CodeProject\Entities\Project;
use Prettus\Repository\Eloquent\BaseRepository;


class ProjectRepositoryEloquent extends BaseRepository implements ProjectRepository
{
    public function model()
    {
        return Project::class;
    }
}