<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
        <h1 class="text-2xl text-center text-gray-800 mb-6">Admin Login</h1>
        <form action="" method="post" class="space-y-4">
            <div>
                <label for="name" class="text-gray-600 mb-1">Admin Name</label>
                <input type="text" name="name" id="name"
                    class="w-full px-4 border border-gray-300 rounded-xl py-2 focus:outline-none">
            </div>
            <div>
                <label for="password" class="text-gray-600 mb-1">Admin Password</label>
                <input type="password" name="password" id="password"
                    class="w-full px-4 border border-gray-300 rounded-xl py-2 focus:outline-none">
            </div>
            <button class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">Login</button>
        </form>
    </div>
</body>

</html>
