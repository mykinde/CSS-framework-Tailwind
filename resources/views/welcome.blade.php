<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | {{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="max-w-3xl w-full text-center bg-white rounded-2xl shadow-xl p-10 space-y-6">
            <div>
                <h1 class="text-4xl font-bold text-indigo-600 mb-2">Welcome to {{ config('app.name') }}</h1>
                <p class="text-gray-600 text-lg">Your Laravel application is ready. Build something amazing!</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-6">
                <a href="https://laravel.com/docs" target="_blank"
                   class="bg-indigo-100 hover:bg-indigo-200 text-indigo-800 font-semibold py-3 px-6 rounded-lg transition">
                    📘 Documentation
                </a>
                <a href="{{ url('login') }}"
                   class="bg-green-100 hover:bg-green-200 text-green-800 font-semibold py-3 px-6 rounded-lg transition">
                    🔐 Login
                </a>
                <a href="https://laracasts.com" target="_blank"
                   class="bg-yellow-100 hover:bg-yellow-200 text-yellow-800 font-semibold py-3 px-6 rounded-lg transition">
                    🎓 Laracasts
                </a>
                <a href="https://github.com/laravel/laravel" target="_blank"
                   class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-semibold py-3 px-6 rounded-lg transition">
                    🔧 GitHub Repo
                </a>
            </div>

            <footer class="pt-6 text-sm text-gray-400">
                &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </footer>
        </div>
    </div>

</body>
</html>
