    <?php
    $autos = [
        "audi" => [
            'stock' => 22,
            'Vendidos' => 18
        ],
        "Volvo" => [
            'stock' => 30,
            'Vendidos' => 25
        ],
        "Fiat" => [
            'stock' => 15,
            'Vendidos' => 12
        ],
        "BMW" => [
            'stock' => 10,
            'Vendidos' => 8
        ],
        "Saab" => [
            'stock' => 5,
            'Vendidos' => 3
        ]
    ];
    echo $autos["Volvo"]["stock"], " El stock es " . $autos["audi"]["stock"] . " Vendidos " . $autos["audi"]["Vendidos"] . "<br>";
    ?>