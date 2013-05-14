Halo
<?php
// SETUP
// 'controller.php' MUST be first!
$controllers = array(
    'controller',
    'index'
    /*
    'category.php',
    'forum.php',
    'post.php',
    'topic.php',
    'user.php'
    */
);

foreach ($controllers as $controller) {
    include_once ('controllers/' . $controller . '.php');
}

// A poor man's routing system
if (!array_key_exists('page', $_GET)) {
    $index = new Index('index');
    $index->loadIndex();
}
else {
    $page = $_GET['page'];

    switch($page) {
        default:
            $index = new Index('index');
            $index->loadIndex();
            break;
    }
        
}
?>
