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
        public $film_age;
        public $alert;

        function __construct($_title, $_protagonist, $_director, $_type, $_film_age) {
            $this->title = $_title;
            $this->protagonist = $_protagonist;
            $this->director = $_director;
            $this->type = $_type;
            $this->film_age = $_film_age;
        }

        public function SetFilmAge(){
            if($this->film_age >= 18){
                $this->alert = 'red';
            }
            elseif($this->film_age < 18 && $this->film_age >= 14){
                $this->alert = 'yellow';   
            }
        }
        public function GetFilmAge(){
            return $this->alert;
        } 
    }
    $title_1 = 'titolo';
    $protagonist_1 = 'protagonista';
    $director_1 = 'direttore';
    $type_1 = 'categoria';
    $film_age_1 = 18;

    $title_2 = 'titolo2';
    $protagonist_2 = 'protagonista2';
    $director_2 = 'direttore2';
    $type_2 = 'categoria2';
    $film_age_2 = 14;
    
    $film_1 = new movie($title_1, $protagonist_1, $director_1, $type_1, $film_age_1) ;
    $film_1->SetFilmAge();
    $alert_film_1 = $film_1->GetFilmAge();

    $film_2 = new movie($title_2, $protagonist_2, $director_2, $type_2, $film_age_2) ;
    $film_2->SetFilmAge();
    $alert_film_2 = $film_2->GetFilmAge();
    
    echo "<pre>";
    var_dump($film_1);
    echo "</pre>";

    echo "<pre>";
    var_dump($film_2);
    echo "</pre>";
?>