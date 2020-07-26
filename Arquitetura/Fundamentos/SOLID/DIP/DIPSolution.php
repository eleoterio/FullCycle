<?php

interface Category
{
  // code...
}

class DramaCategory implements Category{

}

$movie = new Movie("name", new DramaCategory());
class Movie {

  public function __contruct($name, Category $category) {
    $this->name = $name;
    $this->category = $category;
  }

  private $name;
  private $category;

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getCategory() {
    return $this->category
  }

  public function setCategory(Category $category) {
    $this->category = $category;
  }
}
