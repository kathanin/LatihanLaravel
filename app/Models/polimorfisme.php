<?php

class Hewan {
    public function bersuara() {
        echo "Suara hewan generik\n";
    }
}

class Kucing extends Hewan {
    public function bersuara() {
        echo "Meow!\n";
    }
}

class Anjing extends Hewan {
    public function bersuara() {
        echo "Woof!\n";
    }
}

function peliharaHewan($hewan) {
    $hewan->bersuara();
}

$kucing = new Kucing();
$anjing = new Anjing();

peliharaHewan($kucing); // Output: Meow!
peliharaHewan($anjing); // Output: Woof!
