<?php


class Course {
  
  private $name;
  private $categoria;

  public function connection() {
    $pdo = new PDO();
    return $pdo;
  }

  public function createCategoria() {
    $this->connetion()->insert($this->categoria);
  }

  public function createCourse() {
    $this->connection()->insert($this->name);
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
    return $this;
  }

  public function getCategoria() {
    return $this->categoria;
  }

  public function setCategoria($categoria) {
    $this->categoria = $categoria;
    return $this;
  }

}
