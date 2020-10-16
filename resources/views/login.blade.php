<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>SIPERPUS</title>
</head>
<body class=" bg-cover bg-blue-600">
   <div class="h-screen flex items-center justify-center">
        <div class="w-full shadow-lg rounded-lg max-w-md bg-blue-200 mx-4 p-4 p-20 leading-normal">
            <form action="/postlogin" method="POST">
            @csrf
            <div class="font-mono text-4xl font-light mb-10 text-center ">LOGIN</div>
            <div class="mb-5">
                <label for="email" class="text-sm mb-2 black">Email</label><br>
                <input type="email" name="email" id="" placeholder="Masukkan Email Anda" class="border p-3 rounded w-full ">
            </div>
            <div class="mb-6">
                <label for="password" class="text-sm mb-2 black">Password</label>
                <input type="password" name="password" id="exampleInputPassword" placeholder="Masukkan Password Anda" class="border p-3 rounded w-full">
            </div>
            <button type="submit" class="bg-blue-700 py-3 px-6 text-white rounded">Login</button>
            </form>
    </div>
   </div>
</body>
</html>
