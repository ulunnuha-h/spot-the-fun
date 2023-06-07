<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <title>Login</title>
</head>
<body class="d-flex align-items-center justify-content-center vh-100" style="background-color: var(--white)">
    <main class="bg-primary text-white p-5 pt-4 rounded-4 d-flex align-items-center flex-column auth-card">
        <h4>Login to your account</h4>
        <p>Don't have an account? <a href="/register">Sign Up</a></p>
        <section style="color: var(--red)" class="mb-2">
            {!! implode($errors->all('<span>:message</span>')) !!}
        </section>
        <form 
            action="{{ route('login') }}" 
            method="POST" 
            class="d-flex flex-column text-black p-3 rounded-3 w-100"
            style="background-color: var(--gray)">
            @csrf
            <h5 class="mb-4 fw-bold text-center">Login with username</h5>
            <label for="username" class="fw-semibold mb-2">Username</label>
            <input type="text" name="username" id="username" style="w" required>            
            <section class="d-flex justify-content-between align-items-end mb-1">
                <label for="pass" class="fw-semibold mb-2">Password</label>
                <a href="#" style="font-size: 14px">Forget Password?</a>
            </section>
            <input type="password" name="password" id="pass" required>
            <button class="btn-primary border-0 rounded-1 py-2 px-5 align-self-end">Login</button>
        </form>
    </main>
</body>
</html>