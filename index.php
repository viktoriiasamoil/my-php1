<?php

$arr = [
    [
        'Name' => 'Tomato',
        'Price' => '18 AED 1 kg',
        'Country' => 'Turkey'
    ],
    [
        'Name' => 'Banana',
        'Price' => '11 AED 1 kg',
        'Country' => 'Spain'

    ],
    [
        'Name' => 'Avocado',
        'Price' => '15 AED 1 piece',
        'Country' => 'Columbia'
    ],
    [
        'Name' => 'Potato',
        'Price' => '4 AED 1 kg',
        'Country' => 'Belarus'
    ],
    [
        'Name' => 'Blue Onion',
        'Price' => '7 AED 1 kg',
        'Country' => 'Ukraine'
    ],
    [
        'Name' => 'Grapes',
        'Price' => '25 AED 1 kg',
        'Country' => 'Georgia'
    ]
];


$html = '<html lang="en">';
$html .= '<head>';
$html .= '<link rel="stylesheet" href="main.css">';
$html .= '<meta charset="UTF-8" />';
$html .= '<meta name="viewport" content="width=device-width, initial-scale=1.0" />';
$html .= '<title>Al Madina</title>';
$html .= '</head>';

$html .= '<body>';
$html .= '<header class="header">';
$html .= '<h1 class="storeName">Grocery Store Al Madina';
$html .= '<button class="button">Log in</button>';
$html .= '<button class="button">Register</button>';
$html .= '</h1>';
$html .= '</header>';
$html .= '<div class="div1">';
$html .= '<h1 class="h1">Make shopping online now!</h1>';
$html .= '<form action="http://localhost:9000/action_page.php" method="post">';
$html .= '<label for="name" class="label">Name:</label>';
$html .= '<input type="text" id="name" name="name"><br>';
$html .= '<label for="phone" class="label">Phone:</label>';
$html .= '<input type="number" id="phone" name="phone"><br>';
$html .= '<input type="submit" value="Submit" class="form">';
$html .= '</form>';
$html .= '</div>';

$html .= '<div class="div2">';
$html .= '<h1 class="priceList">Price List</h1>';
$html .= '<table class="table" border="1">';
$html .= '<thead>';
$html .= '<th class="name">Name</th>';
$html .= '<th class="name">Price</th>';
$html .= '<th class="name">Country</th>';
$html .= '</thead>';
$html .= '<tbody>';

foreach ($arr as $food) {
    $html .= "<tr><td class='food'>{$food['Name']}</td><td class='food'>{$food['Price']}</td><td class='food'>{$food['Country']}</td></tr>";

};

$html .= '</tbody>';
$html .= '</table>';
$html .= '</div>';
$html .= '</body>';
$html .= '</html>';



echo $html;


die();



$html .= '<tr>';
$html .= '<td class="food">Tomato</td>';
$html .= '<td class="food">18 AED 1 kg</td>';
$html .= '<td class="food">Turkey</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td class="food">Banana</td>';
$html .= '<td class="food">11 AED 1 kg</td>';
$html .= '<td class="food">Spain</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td class="food">Avocado</td>';
$html .= '<td class="food">15 AED 1 piece</td>';
$html .= '<td class="food">Columbia</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td class="food">Potato</td>';
$html .= '<td class="food">4 AED 1 kg</td>';
$html .= '<td class="food">Belarus</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td class="food">Blue onion</td>';
$html .= '<td class="food">7 AED 1 kg</td>';
$html .= '<td class="food">Ukraine</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td class="food">Grapes</td>';
$html .= '<td class="food">25 AED 1 kg</td>';
$html .= '<td class="food">Georgia</td>';
$html .= '</tr>';
$html .= '</table>';
$html .= '</div>';
$html .= '</body>';
$html .= '</html>';



echo $html;












