<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>hi</title>
        <style media="screen">
            .text-sm {
  text-decoration: none;
background-color:rgb(34, 176, 223);
  color: white;
  border: 5px solid rgb(34, 176, 223);
  border-radius: 12px;

          }
          .search-btn{
            border: 1px solid rgb(34, 176, 223);
              border-radius: 12px;
              background-color: white;
          }
          .search-field{
            border: 1px solid rgb(34, 176, 223);
              border-radius: 12px;
          }

        </style>
  </head>
    <br><br>
        <br>

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                         <p><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                      <a href="{{ route('login') }}" class="text-sm ">تسجيل الدخول</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class=" text-sm  ">تسجيل جديد</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <br><div class="form-box">
    <button type="button" class="search-btn">بحث</button>
  <input type="text"  class="search-field" placeholder="محرك البحث">
</div>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>


    </body>
</html>
