<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skills</title>

    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <header class="bg-gray-100 flex justify-center">
        <div class="w-10/12 flex justify-between items-center pt-5 pb-5">
            <h1 class="text-2xl ">Skills GE</h1>
            <nav class="dropdown">
                <label tabindex="0" class="btn m-1">Menu</label>
                <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                        <a href="{{ url('/tests') }}">test</a>
                    </li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <input type="submit" value="Se déconnecter">
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="mt-5">
        {{ $mainContent }}
    </main>
</body>

</html>
