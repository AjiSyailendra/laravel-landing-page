<!DOCTYPE html>
<html data-theme="light" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Login Admin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'montserrat'
        }
    </style>
</head>

<body>
    <div
        class="from-yellow-400 to-yellow-300 bg-gradient-to-b min-h-screen h-full w-full flex items-center justify-center">
        <div class="p-6 bg-white w-96 rounded-xl">
            <h1 class="text-gray-800 text-2xl font-bold text-center">Login</h1>

            <form method="POST" action="{{ route('login.send') }}">
                @csrf
                @if (session()->has('loginError'))
                    <p class="text-red-500 text-center">{{ session('loginError') }}</p>
                @endif
                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Email</span>
                    </label>
                    <input name="email" type="text" placeholder="Type here"
                        class="input error input-bordered  @error('email') input-error @enderror  w-full"
                        value="{{ old('email') }}" />
                    @error('email')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control  w-full">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input name="password" type="password" placeholder="Type here"
                        class="input error input-bordered  @error('email') input-error @enderror  w-full"
                        value="{{ old('email') }}" />
                    @error('email')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                    @enderror
                </div>
                <button class="btn btn-warning w-full mt-10">Login</button>
                <p class="mt-2 text-center text-sm">Don't have account? <a class="underline text-warning"
                        href="{{ route('register') }}">Register</a></p>
            </form>
        </div>
    </div>
</body>

</html>
