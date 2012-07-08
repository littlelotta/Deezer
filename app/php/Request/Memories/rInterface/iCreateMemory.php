<?php

  namespace App\Request\Memories\rInterface;

  interface iCreateMemory extends \Simplon\Abstracts\iAbstractRequest
  {
    public function getTrackId();
    public function getArtistName();
    public function getTrackTitle();
    public function getMoodTag();
  }