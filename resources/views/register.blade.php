<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen flex items-center justify-center">
    <div class="min-w-[500px] border p-5 shadow-lg rounded-lg bg-zinc-50">
        <form action="" method="POST">
            @csrf
            <h1 class="text-4xl text-center font-semibold mb-10 text-gray-700">Register</h1>

            <div class="space-y-5">
                <div class="">
                    <x-input label="Name" name="name" type="text" icon="fi fi-sr-id-badge" placeholder="Enter your name" />
                </div>

                <div class="">
                    <x-input label="Email" name="email" type="email" icon="fi fi-sr-envelope" placeholder="Enter your email" />
                </div>

                <div class="">
                    <x-input label="Phone" name="phone" type="phone" icon="fi fi-sr-mobile-notch" placeholder="Enter your phone number" />
                </div>

                <div class="">
                    <x-input label="Address" name="address" type="text" icon="fi fi-sr-map-marker" placeholder="Enter your address" />
                </div>

                <div class="">
                    <x-input label="Password" name="password" type="password" icon="fi fi-sr-lock" placeholder="Enter password" />
                </div>

                <div class="">
                    <x-input label="Password Confirmation" name="password_confirmation" type="password" icon="fi fi-sr-lock" placeholder="Enter password" />
                </div>

                <button class="btn-gray w-full">Submit</button>
            </div>
        </form>
    </div>

    @stack('inputBoxScript')
</body>
</html>