<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <title>Register</title>
</head>
<body class="d-flex align-items-center justify-content-center py-5" style="background-color: var(--white)">
    <main class="bg-primary text-white p-5 pt-4 rounded-4 d-flex align-items-center flex-column auth-card">
        <h4>Create your new account</h4>
        <p>Have an account? <a href="/login">Login</a></p>
        <section style="color: var(--red)" class="mb-2">
            {!! implode($errors->all('<span>:message</span>')) !!}
        </section>
        <form 
            action="{{ route('register') }}" 
            method="POST" 
            class="d-flex flex-column text-black p-3 rounded-3 w-100"
            style="background-color: var(--gray)"
            enctype="multipart/form-data">
            @csrf
            <h5 class="mb-4 fw-bold text-center">Complete your profile</h5>
            <label for="photo" style="cursor: pointer" class="bg-primary rounded-circle w-25 ratio ratio-1x1 align-self-center my-2 position-relative">
                <span class="iconify text-white p-2" data-icon="mdi:account"></span>
                <img src="" alt="profile" class="rounded-circle d-none absolute z-10" style="object-fit: cover" id="profile-photo">
                    <span 
                        class="iconify w-25 h-25 end-0 bottom-0 rounded-circle" 
                        data-icon="ic:baseline-plus"
                        style="background-color: var(--red);left:75%;top:75%">
                    </span>
            </label>
            <input type="file" name="photo" class="d-none" id="photo" required>
            <label for="username" class="fw-semibold mb-2">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="name" class="fw-semibold mb-2">Name</label>
            <input type="text" id="name" name="name" required>
            <label for="pass" class="fw-semibold mb-2">Password</label>
            <input type="password" id="pass" name="password" required>
            <label for="pass_confirm" class="fw-semibold mb-2">Repeat Password</label>
            <input type="password" id="pass_confirm" name="password_confirmation" required>
            <button class="btn-primary border-0 rounded-1 py-2 px-5 align-self-end">Register</button>
        </form>
    </main>
    <script>
        let photo = document.getElementById('photo');
        photo.addEventListener('change', () => {
            let file = photo.files[0];
            if (file) {
                let url = URL.createObjectURL(file);                
                let profilePhoto = document.getElementById('profile-photo');
                profilePhoto.setAttribute('src', url);
                profilePhoto.classList.remove('d-none');
            }
        })
    </script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</body>
</html>