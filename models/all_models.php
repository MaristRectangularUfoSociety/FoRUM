<?php
// 'model.php' MUST be first!
$models = array(
    'model.php',
    'audit_model.php',
    'category_model.php',
    'forum_model.php',
    'post_model.php',
    'topic_model.php',
    'user_model.php'
);

foreach ($models as $model) {
    include_once $model;
}
?>
