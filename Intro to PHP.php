<?php

/*******w******** 
    
    Name: Harleen Kaur
    Date: May 19, 2024
    Description: Assignment 1

****************/

    $config = [
        'gallery_name' => ' Amor Gallery',
        'unsplash_categories' => ['Animal','Dessert','Architecture','Lakes','Food','Archival'],
        'local_images' => [
            ['filename' => 'img1.jpg', 'photographer' => ['name' => 'Danie LIU', 'url' => 'https://unsplash.com/photos/a-boat-traveling-down-a-river-next-to-tall-buildings-ATWgopX-wnw']],
            ['filename' => 'img2.jpg', 'photographer' => ['name' => 'Sergio Kian', 'url' => 'https://unsplash.com/photos/a-city-street-filled-with-lots-of-tall-buildings-QTUK_crQgiQ']],
            ['filename' => 'img3.jpg', 'photographer' => ['name' => 'Isaac Garcia', 'url' => 'https://unsplash.com/photos/person-in-black-jacket-sitting-on-rock-near-lake-during-daytime-4F5CfyuZT74']],
            ['filename' => 'img4.jpg', 'photographer' => ['name' => 'Thierry K', 'url' => 'https://unsplash.com/photos/space-needle-seattle-washington-during-night-Ca5PAGxvybc']]
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title><?= $config['gallery_name']?></title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <h1><?php echo $config['gallery_name']; ?></h1>
    
    <div class="unsplashimages">
        <?php for ($i = 0; $i < count($config['unsplash_categories']); $i++): ?>
            <h2><?php echo $config['unsplash_categories'][$i]; ?></h2>
            <img src="https://source.unsplash.com/300x200/?<?php echo $config['unsplash_categories'][$i]; ?>" alt="<?php echo $config['unsplash_categories'][$i]; ?> image">
        <?php 
        endfor; 
        ?>
    </div>

    <div class="localimages">
        
        <h1><?php echo count($config['local_images']). ' Large Images'?></h1>

        <?php for ($i = 0; $i < count($config['local_images']); $i++): ?>
            <div class="local-image">
                
                <img src="images/<?php echo $config['local_images'][$i]['filename']; ?>" alt="<?php echo $config['local_images'][$i]['filename']; ?>">
                <a href="<?php echo $config['local_images'][$i]['photographer']['url']; ?>" target="_blank">
                    <h3><?php echo $config['local_images'][$i]['photographer']['name']; ?></h3>
                </a>
            </div>
        <?php 
        endfor; 
        ?>
    </div>
</body>
</html>

