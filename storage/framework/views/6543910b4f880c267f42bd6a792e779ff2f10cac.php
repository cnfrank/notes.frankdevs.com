<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* 将主要内容区域撑满剩余空间 */
        .main-content {
          min-height: calc(100vh - 160px); /* 页面视口高度减去页脚高度 */
        }
      </style>
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</head>

<body class="bg-gray-100 flex flex-col justify-between min-h-screen">


    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between">
            <div class="flex items-center">
                
            </div>
            <div class="flex items-center space-x-4">
                <a href="#" class="hover:text-gray-300">Home</a>
                <a href="<?php echo e(url("/login")); ?>" class="hover:text-gray-300">Login</a>
                <a href="<?php echo e(url("/register")); ?>" class="hover:text-gray-300">Register</a>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Notes</h1>
        <p class="text-lg text-gray-700 leading-relaxed">
            This application utilizes Laravel 9 with MVC architecture, Tailwind CSS for the frontend, and MySQL for the database. This note-taking application covers everything from user authentication and routing to CRUD operations and database relationships. It serves as a learning and practical endeavor within my PHP Laravel MVC technology stack.</p>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4">
        <div class="container mx-auto">
          <p>&copy; <?php echo e(date('Y')); ?> by Frank.</p>
        </div>
      </footer>

</body>

</html>
<?php /**PATH /www/wwwroot/note.frankdevs.com/resources/views/welcome.blade.php ENDPATH**/ ?>