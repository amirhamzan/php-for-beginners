<?php

$car_list = [
    [
        'brand' => 'proton',
        'model' => 'iriz',
        'car type' => 'hatchback'
    ],
    [
        'brand' => 'perodua',
        'model' => 'alza',
        'car type' => 'mpv'
    ],
    [
        'brand' => 'audi',
        'model' => 'a3',
        'car type' => 'sedan'
    ]
    ];

$encode_car_list = json_encode($car_list);
$encode_car_list_second = json_encode($car_list, JSON_PRETTY_PRINT); //add extra space between word
$encode_car_list_third = json_encode($car_list, JSON_FORCE_OBJECT);


print_r($car_list);
echo '<hr>';

var_dump($car_list);
echo '<hr>';

var_export($car_list);
echo '<hr>';

foreach($car_list as $car)
{
    echo $car['brand'] . ', ' . $car['model'] . ', ' . $car['car type'];
    echo '<br>';
}
echo '<hr>';

echo $encode_car_list;
echo '<hr>';

echo $encode_car_list_second;
echo '<hr>';

echo $encode_car_list_third;
echo '<hr>';

?>