<?php

class blogModel
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get single post ( [0]'st element from results array)
    public function getAll(): array
    {
        return $this->db->select("SELECT * FROM post");
    }

    // Get all posts
    public function getPost(int $id): array
    {
        return $this->db->select("SELECT * FROM post WHERE id = :id", [":id" => $id]);
    }

}