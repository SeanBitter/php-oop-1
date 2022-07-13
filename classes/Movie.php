<?php

class Movie {
  public $title;
  public $genre;
  public int $year;

  function __construct($_title, $_genre, $_year)
  {
    $this->setTitle($_title);
    $this->setGenre($_genre);
    $this->setYear($_year);
  }

  /**
   * Get the value of title
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * Set the value of title
   */
  public function setTitle($title): self
  {
    $this->title = $title;

    return $this;
  }

  /**
   * Get the value of genre
   */
  public function getGenre()
  {
    return $this->genre;
  }

  /**
   * Set the value of genre
   */
  public function setGenre($genre): self
  {
    $this->genre = $genre;

    return $this;
  }

  /**
   * Get the value of year
   */
  public function getYear()
  {
    return $this->year;
  }

  /**
   * Set the value of year
   */
  public function setYear($year): self
  {
    $this->year = $year;

    return $this;
  }

  // creo una funzione per stampare i valori degli oggetti
  public function printFilm() {
    $title = $this->getTitle();
    $genre = $this->getGenre();
    $year = $this->getYear();

    echo "<h2 class='text-danger'>$title</h2>";
    echo "<h3 class='text-primary'>$genre</h3>";
    echo "<h4 class='text-success'>$year</h4>";
  }
}

?>