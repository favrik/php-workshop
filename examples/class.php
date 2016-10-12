<?php

class Workshop {
  private $title;

  function __construct($title) {
    $this->title = $title;
  }

  function title() {
    return $this->title;
  }
}

$workshop = new Workshop('Taller de PHP');
echo $workshop->title() . "\n";


