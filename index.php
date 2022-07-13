<!-- create un file index.php in cui:
- è definita una classe ‘Movie’
  => all’interno della classe sono dichiarate delle variabili d’istanza
  => all’interno della classe è definito un costruttore
  => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 

require_once "classes/Movie.php";

$film1 = new Movie("Memento", "Thriller", 2000);
$film2 = new Movie("Shutter Island", "Thriller", 2007);
$film3 = new Movie("Ordinary People", "Drama", 1980);
$film4 = new Movie("L.A. Confidential", "Noir", 1997);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

  <div class="container my-5">

    <div class="row row-cols-4">

      <div class="col">
        <?php echo $film1->printFilm() ?>
      </div>
      <div class="col">
        <?php echo $film2->printFilm() ?>
      </div>
      <div class="col">
        <?php echo $film3->printFilm() ?>
      </div>
      <div class="col">
        <?php echo $film4->printFilm() ?>
      </div>

    </div>

  </div>

</body>
</html>
