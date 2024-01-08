<?php
class Category
{
    private $cat_id;
    private $cat_name;
    private $creation_date;

    public function __construct($cat_id, $cat_name, $creation_date)
    {
        $this->cat_id = $cat_id;
        $this->cat_name = $cat_name;
        $this->creation_date = $creation_date;
    }

    // Getter for cat_id
    public function getCatId()
    {
        return $this->cat_id;
    }

    // Getter for cat_name
    public function getCatName()
    {
        return $this->cat_name;
    }

    // Getter for creation_date
    public function getCreationDate()
    {
        return $this->creation_date;
    }
}
