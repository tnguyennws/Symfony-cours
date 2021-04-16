<?php

namespace MesEntity;

class Post
{
    public $id;
    public $userId;
    public $title;
    public $body;

    public function __construct($id, $userId, $title, $body)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->title = $title;
        $this->body = $body;
    }

    public function GetId()
    {
        return ($this->id);
    }

    public function SetId($id)
    {
        $this->id = $id;
    }
}



?>