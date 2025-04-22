<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black text-white">
    <div class="container mx-auto p-4">
        <header>
            <nav class="flex justify-between items-center p-4 bg-gray-900">
                <a href="{{ url('/') }}" class="text-white text-lg font-bold">Home</a>
                <div class="space-x-4">
                    @auth
                        <a href="{{ route('products.index') }}" class="text-white">Products</a>
                        <a href="{{ route('dashboard') }}" class="text-white">Dashboard</a>
                        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="text-white">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-white">Login</a>
                        <a href="{{ route('register') }}" class="text-white">Register</a>
                    @endauth
                </div>
            </nav>
        </header>

        <main>
            @yield('content')  
        </main>
    </div>
</body>
</html>
