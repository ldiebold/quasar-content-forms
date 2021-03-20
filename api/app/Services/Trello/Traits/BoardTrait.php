<?php

namespace App\Services\Trello\Traits;

trait BoardTrait
{
    public function getBoards($paramaters = [])
    {
        return $this->get('/members/me/boards', $paramaters);
    }

    public function getBoard(String $id, $paramaters = [])
    {
        return $this->get("/boards/$id", $paramaters);
    }

    public function getBoardLists(String $id, $paramaters = [])
    {
        return $this->get("/boards/$id/lists", $paramaters);
    }

    public function addCardToList(String $id, $paramaters = [])
    {
        $paramaters = array_merge($paramaters, ['idList' => $id]);
        return $this->post("/cards", $paramaters);
    }

    public function getBoardCards(String $id, $paramaters = [])
    {
        return $this->get("/boards/$id/cards", $paramaters);
    }
}
