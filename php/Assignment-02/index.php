<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sliding</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="slideBorad">
        <div class="textBoard">            
            <?php
            $slidePrint = '';
            $slideArray = slideArray();
            $slidePrint .= '<div class="'. $slideArray['slideClass'] .'">';
            $slidePrint .= '<p>"' . $slideArray['text'] . '"</p>';
            $slidePrint .= '<p> -' . $slideArray['writer'] . '</p>';
            $slidePrint .= '</div>';
            echo $slidePrint;
            ?>
        </div>
    </div>
</body>

</html>
<?php
function slideArray()
{

    $slideArray = [
        'slide1' => [
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora reprehenderit iure molestiae non earum quas.',
            'writer' => 'Lorem ipsum dolor sit amet',
            'slideClass' => 'slideMediumorchid'
        ],
        'slide2' => [
            'text' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, atque.',
            'writer' => 'Ipsum dolor sit amet lorem',
            'slideClass' => 'slideBlueviolet'
        ],
        'slide3' => [
            'text' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam veritatis voluptate officiis.',
            'writer' => 'Dolor sit amet lorem ipsum',
            'slideClass' => 'slideYellowgreen'
        ],
        'slide4' => [
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'writer' => 'Sit amet lorem ipsum dolor',
            'slideClass' => 'slideGreen'
        ]
    ];

    $randomSlideKey = array_rand($slideArray);
    $randomSlide = $slideArray[$randomSlideKey];

    return $randomSlide;
}

// var_dump(slideArray());
?>