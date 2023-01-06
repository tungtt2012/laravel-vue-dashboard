<?php
namespace App\Repositories\BaseRepository;

interface BaseRepositoryInterface{

    public function getAll();
    public function getById($id);
    public function store($data);
    public function update($id,$data);
    public function destroy($id);
    public function paginate();
}
?>
