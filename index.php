<?php
// SETUP
// 'controller.php' MUST be first!
$controllers = array(
    'controller',
    'index',
    'category',
    'forum',
    'post',
    'topic',
    'user'
);

foreach ($controllers as $controller) {
    include_once ('controllers/' . $controller . '.php');
}

// A poor man's routing system
if (!array_key_exists('page', $_GET)) {
    $index = new Index();
    $index->loadIndex();
}
else {
    $page = $_GET['page'];

    switch($page) {
        case 'create_category':
            $category = new Category();
            $category->loadCreateCategory();
            break;
        case 'create_forum':
            $forum = new Forum();
            $forum->loadCreateForum();
            break;
        default:
            print_r("THIS PAGE DOES NOT EXIST $page");
            $index = new Index();
            $index->loadIndex();
            break;
    }
        
}
?>
