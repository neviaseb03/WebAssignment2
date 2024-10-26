<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-blue-600 p-4">
    <div class="container mx-auto">
        <a href="index.php" class="text-white text-2xl font-bold">Simple Blog</a>
    </div>
</nav>

<!-- Form Section -->
<div class="container mx-auto mt-8">
    <div class="bg-white shadow-md rounded p-6">
        <h1 class="text-2xl font-bold mb-4">Create a New Post</h1>
        <form action="process.php" method="POST">
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Post Title</label>
                <input type="text" id="title" name="title" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-medium mb-2">Content</label>
                <textarea id="content" name="content" rows="5" class="w-full px-4 py-2 border rounded" required></textarea>
            </div>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Submit</button>
            <a href="index.php" class="ml-4 text-gray-600 hover:underline">Cancel</a>
        </form>
    </div>
</div>

</body>
</html>
