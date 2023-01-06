<?php

namespace App\Repositories\BaseRepository;

use App\Enums\WebConfig;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function paginate()
    {
        return $this->model->paginate(WebConfig::PaginateOnePageDefault);
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function store($data)
    {
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        $model = $this->getById($id);

        return $model->update($data);
    }

    public function destroy($id)
    {
        $models = $this->getById($id);
        return $models->delete();
    }


}

?>
