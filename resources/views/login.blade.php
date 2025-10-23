<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
</head>
<body class="m-0 font-sans">
    <div class="flex">
        <div class="ml-30 mt-30">
            <h1 class=" font-bold text-4xl">hola,<br>Selamat Datang</h1>
            <form action="/dashboard" method="Get">
                <div class="mt-10">
                    <label for="" class="mt-20">Username</label><br>
                    <input type="text" name="Username" class=" border-1 rounded-sm pr-20" autocomplete= "off"><br>
                    <label for="">Password</label><br>
                    <input type="text" name="Password" class=" border-1 rounded-sm pr-20" autocomplete= "off"><br>
                    <input type="radio">
                    <label for="" class="text-xs">Remember Me</label>
                </div>
                <button class=" border-1 rounded-sm pl-5 pr-5 mt-5 text-sm pb-2 pt-2">Log In</button>   
            </form>
        </div>
        <img src="{{ asset('image/Belajar.jpg') }}" alt="" class="ml-70 w-[40%] mt-15">
    </div>
</body>
</html>