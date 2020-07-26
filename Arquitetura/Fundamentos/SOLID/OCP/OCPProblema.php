<?php

class Video {
  private $type;

  public function calcularInteresse() {
    if ($this->type == "Movie") {
      // Calcula interesse base em filme
    } elseif ($this->type == "TVShow") {
      // Calcula interesse baseado em serie
    }
  }
}
