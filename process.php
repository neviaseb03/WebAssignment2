<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $posts = json_decode(file_get_contents('posts.json'), true);

    $newPost = [
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'created_at' => date('Y-m-d H:i:s')
    ];

    $posts[] = $newPost;

    file_put_contents('posts.json', json_encode($posts, JSON_PRETTY_PRINT));

    header('Location: index.php');
    exit();
} else {
    echo "Invalid request.";
}
?>
