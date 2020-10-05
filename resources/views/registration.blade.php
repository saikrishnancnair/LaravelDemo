<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Registration</title>
</head>
<body>
    <div class="text-center pt-8  pb-5 ml-64 mr-64">
        <h1 class="text-2xl text-center">Registration</h1>
        <form method="POST" action="/registration" class="pt-8">
       <x-alert/>
        @csrf
        
        <div class="pr-10 pl-10 py-2 ml-64 mr-64">
            <div class="text-lg py-1 pr-40 ">Name:</div>
            <input type="text" name="name" class="rounded-lg border-2 border-blue-500 px-5 py-2 ">
        </div>
        <div class="pr-10 pl-10 py-2 ml-64 mr-64">
            <div class="text-lg py-1 pr-40">Email:</div>
            <input type="email" name="email" class="rounded-lg border-2 border-blue-500 px-5 py-2 " >
        </div>
        <div class="pr-10 pl-10 py-2 ml-64 mr-64">
            <div class="text-lg py-1 pr-40">State:</div>
            <input type="text" name="state" class="rounded-lg border-2 border-blue-500 px-5 py-2 ">
        </div>
        <div class="pr-10 pl-10 py-2 ml-64 mr-64">
            <div class="text-lg py-1 pr-40 pl-3">District:</div>
            <input type="text" name="district" class="rounded-lg border-2 border-blue-500 px-5 py-2 ">
        </div>
        <div class="pr-10 pl-10 py-2 ml-64 mr-64">
            <div class="text-lg py-1 pr-32">Password:</div>
            <input type="password" name="password" class="rounded-lg border-2 border-blue-500 px-5 py-2 " >
        </div>
        <div class="pr-10 pl-10 py-2 ml-64 mr-64">
            <div class="text-lg py-1 pl-5 pr-20">Confirm Password:</div>
            <input type="password" name="confirmpassword" class="rounded-lg border-2 border-blue-500 px-5 py-2">
        </div>
        <div class="place-items-center mx-4 px-20 py-2">
            <input type="submit" value="Submit" class="rounded-lg border-2 border-blue-500 px-5 py-2 cursor-pointer" >
        </div>
    </form>
</div>
</body>
</html>