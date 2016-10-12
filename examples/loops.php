<?php

// for
for ($i = 0; $i < 10; $i++) {

}

$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);

for($i = 0; $i < count($people); ++$i) {
    $people[$i]['salt'] = mt_rand(000000, 999999);
}

for($i = 0, $size = count($people); $i < $size; ++$i) {
    $people[$i]['salt'] = mt_rand(000000, 999999);
}


// foreach
$materias = ['mate', 'fisica', 'os'];

foreach ($materias as $materia) {

}

foreach ($materias as $i => $materia) {

}

// while
while ($i < 10) {

}

// do while
do {

} while (true);
