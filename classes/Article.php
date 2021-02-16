<?php

class Article extends User{
    public $createdBy;
    public $title;
    public $category;
    public $date;

    public function __construct(string $name, string $createdBy, string $title, string $category, string $date) {
        $this->name = $name;
        $this->createdBy = $createdBy;
        $this->title = $title;
        $this->category = $category;
        $this->date = $date;
    }
}