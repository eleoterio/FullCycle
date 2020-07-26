<?php

interface Movie {
  public function play();
}

interface AudioControl {
    public function increaseVolume();
}


class TheLionKing implements Movie, AudioControl {
  public function play(){
    //play movie
  }

  public function increaseVOlume(){
    //increasing volume
  }
}

class ModernTimes implements Movie {
  public function play(){
    //play movie
  }

  public function increaseVOlume(){
    //Este metodo não será utilizado, porem tera de ser implementado.
  }
}
