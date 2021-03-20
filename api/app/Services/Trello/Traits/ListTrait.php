<?php

namespace App\Services\Trello\Traits;

trait ListTrait
{
    public function getList($id, $paramaters = [])
    {
        return $this->get("/lists/$id", $paramaters);
    }
}
