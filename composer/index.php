<?php 
    require_once 'vendor/autoload.php';

    use Cocur\Slugify\Slugify;

    $slugify = new Slugify();
    echo $slugify->slugify("Teste De como Usar o Slugfy no composer"); // hello-world

?>