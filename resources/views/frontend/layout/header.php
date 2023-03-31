<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="capitalize transition-all ">
  <div class="">
    <nav class="bg-green-500">
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button-->
            <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-slate-200 hover:text-green-500  focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <!--
                Icon when menu is closed.
    
                Heroicon name: outline/bars-3
    
                Menu open: "hidden", Menu closed: "block"
              -->
              <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>

            </button>
          </div>
          <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">

            <div class="flex flex-shrink-0 items-center">
              <img class="block h-8 w-auto lg:hidden" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
              <img class="hidden h-8 w-auto lg:block" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
            </div>
            <div class="hidden sm:ml-6 sm:block">
              <div class="flex space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-white hover:bg-slate-200 hover:text-green-500 " -->
                <a href="/" class=" text-white hover:bg-slate-200 hover:text-green-500 px-3 py-2 rounded-md text-sm font-medium" aria-current="page">trang chủ</a>


                <a href="/cart" class="text-white hover:bg-slate-200 hover:text-green-500  px-3 py-2 rounded-md text-sm font-medium">Giỏ hàng</a>
                <?php if (!isset($_SESSION['user'])) : ?>
                  <a href="/login" class="tksext-white hover:bg-slate-200 hover:text-green-500  px-3 py-2 rounded-md text-sm font-medium">đăng nhập</a>

                  <a href="/register" class="text-white hover:bg-slate-200 hover:text-green-500  px-3 py-2 rounded-md text-sm font-medium">đăng ký</a>
                <?php else : ?>
                  <a href="/logout" class="text-white hover:bg-slate-200 hover:text-green-500  px-3 py-2 rounded-md text-sm font-medium">đăng xuất</a>
                <?php endif; ?>
                <form action="" method="post" class="relative">
                  <input class="h-9 rounded-l-2xl border-0 w-64 outline-none px-3 text-sm" type="text" name="search">
                  <button class="h-9 absolute rounded-r-2xl bg-white px-2"> <i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

              </div>
            </div>

          </div>

          <?php if (isset($_SESSION['user'])) : ?>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
              <!-- Profile dropdown -->
              <a href="/profile" class="relative ml-3">
                <div>
                  <button type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </button>
                </div>

              </a>
            </div>
          <?php endif ?>
        </div>
      </div>

      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3">
          <!-- Current: "bg-gray-900 text-white", Default: "text-white hover:bg-slate-200 hover:text-green-500 " -->
          <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>

          <a href="#" class="text-white hover:bg-slate-200 hover:text-green-500  block px-3 py-2 rounded-md text-base font-medium">Team</a>

          <a href="#" class="text-white hover:bg-slate-200 hover:text-green-500  block px-3 py-2 rounded-md text-base font-medium">Projects</a>

          <a href="#" class="text-white hover:bg-slate-200 hover:text-green-500  block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
        </div>
      </div>
    </nav>