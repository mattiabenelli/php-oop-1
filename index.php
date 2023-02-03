<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    class movie
    {
        public $title;
        public $protagonist;
        public $director;
        public $type;

        function __construct($_title, $_protagonist, $_director, $_type) {
            $this->title = $_title;
            $this->protagonist = $_protagonist;
            $this->director = $_director;
            $this->type = $_type;
        }
    }
    $title_1 = 'titolo';
    $protagonist_1 = 'protagonista';
    $director_1 = 'direttore';
    $type_1 = 'categoria';
    
    $film_1 = new movie($title_1, $protagonist_1, $director_1, $type_1) ;
    echo "<pre>";
    var_dump($film_1);
    echo "</pre>";
?>
