<?php

abstract class Video {
  abstract public function calcularInteresse();
}

class Movie extends Video {
  public function calcularInteresse() {
    //Calcula
  }
}

class TVShow extends Video {
  public function calcularInteresse() {
    //Calcula
  }
}
