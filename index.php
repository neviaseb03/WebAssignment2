<?php
$posts = json_decode(file_get_contents('posts.json'), true); // Load posts from JSON
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-blue-600 p-4">
    <div class="container mx-auto">
        <a href="index.php" class="text-white text-2xl font-bold">Simple Blog</a>
    </div>
</nav>

<!-- Content Section -->
<div class="container mx-auto mt-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Blog Posts</h1>
        <!-- Create Post Button -->
        <a href="create.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Create New Post
        </a>
    </div>

    <!-- Post List -->
    <?php if (!empty($posts)): ?>
        <?php foreach ($posts as $post): ?>
            <div class="bg-white shadow-md rounded p-6 mb-4">
                <h2 class="text-xl font-semibold mb-2"><?= htmlspecialchars($post['title']) ?></h2>
                <p class="text-gray-700 mb-4"><?= nl2br(htmlspecialchars($post['content'])) ?></p>
                <span class="text-sm text-gray-500">Posted on: <?= $post['created_at'] ?></span>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
            No posts yet. <a href="create.php" class="text-blue-500 underline">Create one</a>!
        </div>
    <?php endif; ?>
</div>

</body>
</html>
