<?php
$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    ),
    'Lord of the Rings' => array(
        'published' => 1968,
        'author' => 'J. R. R. Tolkien',
        'pages' => 1178
    )
);


foreach ($books as $key => $value) {
    if ($value['published'] >= 1950 && $value['pages'] > 300){
        echo "Title: " . $key .PHP_EOL;
        echo "Published: " . $value['published'] .PHP_EOL;
        echo "Author: " . $value['author'] .PHP_EOL;
        echo "Pages: " . $value['pages'] .PHP_EOL; 
    }
}
$x = 0;
$i = 0;
$y = 0;
foreach ($books as $key => $value) {
    $i += $value['pages'];
    $x++;
    $y += $value['published'];
}
$i = $i / $x;
$y = $y / $x;
echo "Average publication year: ".$i.PHP_EOL;
echo "Average amount of pages: ".$y.PHP_EOL;
