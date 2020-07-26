<?php

//Certo
$movie = new Movie();
$movie = new TheLionKing();

//Errado
$movia = new ModernTimes();
// O LSP preve que todas as funcionalidades na classe tem que ser identicas,
// neste caso o ModernTimes a opção de increaseVolume esta diferente, pois não pode aumentar o volume.

class Movie {

  public function play() {
    //play no video
  }

  public function increaseVolume() {

  }

}

class TheLionKing extends Movie {

}

class ModernTimes extends Movie {

  public function increaseVolume () {
    //putz
  }

}
