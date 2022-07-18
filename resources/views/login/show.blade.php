<!DOCTYPE html>
<html lang="en" class="h-screen">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skill | Login</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="h-full">
    <main class="h-full flex flex-col justify-center items-center bg-gray-50">
        <h1 class="hidden">
            Page de connection à Skills GE
        </h1>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <form action="{{ url('/authenticate') }}" method="post" class="panel bg-white w-6/12">
            <h2 class="mb-2 text-2xl font-bold">
                Connexion
            </h2>

            <x-input type="text" name="email">
                Adresse email
            </x-input>
            <x-input type="password" name="password">
                Mot de passe
            </x-input>
            @csrf
            <button type="submit" class="btn btn-sm mt-4">Se connecter</button>
        </form>
    </main>
</body>

</html>
