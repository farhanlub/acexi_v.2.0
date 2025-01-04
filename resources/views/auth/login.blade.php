<!DOCTYPE html>
<html lang="en" data-theme="light" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Tailwind and DaisyUI CSS -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Check if user prefers dark mode
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.setAttribute('data-theme', 'dark');
            document.documentElement.classList.remove('light');
            document.documentElement.classList.add('dark');
        }

        // Watch for changes in system dark mode preference
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            const newTheme = e.matches ? 'dark' : 'light';
            document.documentElement.setAttribute('data-theme', newTheme);
            document.documentElement.classList.remove(newTheme === 'dark' ? 'light' : 'dark');
            document.documentElement.classList.add(newTheme);
        });
    </script>
</head>

<body class="min-h-screen bg-base-200">
    <section class="min-h-screen flex items-center justify-center">
        <div class="container">
            <form method="POST" action="{{ route('login') }}" class="card w-96 bg-base-100 shadow-xl mx-auto p-6">
                @csrf
                <!-- Login Header -->
                <div class="text-center mb-6">
                    <h2 class="text-2xl font-bold">Member Login</h2>
                </div>

                <!-- Email Address -->
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Email</span>
                    </label>
                    <input type="email" class="input input-bordered w-full @error('email') input-error @enderror" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                    @error('email')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-control w-full mt-4">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input type="password" class="input input-bordered w-full @error('password') input-error @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="flex justify-between items-center mt-6">
                    <button type="submit" class="btn btn-primary">
                        Log in
                    </button>
                </div>

                <!-- Register Link -->
                <div class="mt-6">
                    <p class="text-sm">Cara menjadi  <a href="{{ route('anggota.cara') }}" class="link link-primary">Anggota</a> / <a href="{{ route('mitra.cara') }}" class="link link-primary">Mitra</a>?
                    </p>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
