<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
</head>
<body>
    <div class="h-25" >
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
            
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
            
            
        </div>
        @endif
    </div>
        
    <div class="mt-5">
        <form action="{{route('sendMail')}}" method="post" class="php-email-form container d-flex flex-column align-item-center">
            @csrf
            <div class="mb-3  d-flex flex-column align-items-center">
                <label  class="form-label  fw-bold ">Name</label>
                <input type="text" name="name" class="form-control w-25" id="exampleInputEmail1" >
            </div>
            <div class="mb-3  d-flex flex-column align-items-center">
                <label  class="form-label  fw-bold">Email</label>
                <input type="email" name="email" class="form-control w-25" id="exampleInputEmail1" >
            </div>
            <div class="mb-3  d-flex flex-column align-items-center">
                <label  class="form-label  fw-bold">Phone</label>
                <input type="text" name="phone" class="form-control w-25" id="exampleInputEmail1" >
            </div>
            <div class="mb-3  d-flex flex-column align-items-center">
                <label  class="form-label  fw-bold">Message</label>
                <textarea type="text" name="message" class="form-control w-50" id="exampleInputEmail1" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    
    
    
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/tailwind.js')}}"></script>
</body>
</html>