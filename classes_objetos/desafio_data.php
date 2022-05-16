<div class="titulo">Desafio Data</div>

<?php

class Data {

    public $day = 01;
    public $month = 01;
    public $year = 1970;

    public function showData() {
        return "Date: {$this->day}/{$this->month}/{$this->year}";
    }

}

$d = new Data;
echo $d->showData();
