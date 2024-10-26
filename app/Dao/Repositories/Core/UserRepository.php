<?php

namespace App\Dao\Repositories\Core;

trait UserRepository
{
    public function dataRepository()
    {
        $query = $this->model
            ->select($this->model->getSelectedField())
            ->leftJoinRelationship('has_role')
            ->active()
            ->sortable()
            ->filter();

        return $query;
    }
}
