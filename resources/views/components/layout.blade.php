<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>My blog</title>
</head>

<body class="max-w-5xl m-auto">
    <header class="bg-white relative w-full mb-20 shadow-sm lg:static lg:overflow-y-visible">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative flex justify-between lg:gap-8 xl:grid xl:grid-cols-12">
                <div class="flex md:absolute md:inset-y-0 md:left-0 lg:static xl:col-span-2">
                    <div class="flex flex-shrink-0 items-center">
                        <a href="/">
                            <p
                                class="ml-6 inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Home</p>
                        </a>
                    </div>
                </div>
                <div class="min-w-0 flex-1 md:px-8 lg:px-0 xl:col-span-6">
                    <div class="flex items-center px-6 py-4 md:mx-auto md:max-w-3xl lg:mx-0 lg:max-w-none xl:px-0">
                        <div class="w-full">
                            <label for="search" class="sr-only">Search</label>
                            <div class="relative flex gap-x-4">

                                <!-- category -->
                                <x-category-drop-down />

                                <!-- search -->
                                <form method="GET" action="/">
                                    <div>
                                        @if (request('category'))
                                        <input type="hidden" class="flex" name="category"
                                            value="{{ request('category') }}">
                                        @endif
                                        <input id="search" name="search" value="{{ request('search') }}"
                                            class="block w-full rounded-md border-0 bg-white py-1.5 pl-10 pr-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"
                                            placeholder="Search" type="text">
                                        @if ($errors->has('search'))
                                        <span class="text-red-500 text-xs mt-1">{{ $errors->first('search') }}</span>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden lg:flex lg:items-center lg:justify-end xl:col-span-4">
                    @auth
                    <span class="font-bold">{{ auth()->user()->name }}</span>
                    <form method="POST" action="/logout" class="ml-5">
                        @csrf
                        <button type="submit"
                            class="ml-5 flex-shrink-0 rounded-full bg-white p-1 text-gray-500 font-bold hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            LOGOUT
                        </button>
                    </form>
                    @else
                    <a href="/register"
                        class="ml-5 flex-shrink-0 rounded-full bg-white p-1 font-bold text-gray-500 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        REGISTER
                    </a>
                    <a href="/login"
                        class="ml-5 flex-shrink-0 rounded-full bg-white p-1 font-bold text-gray-500 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        LOGIN
                    </a>
                    @endauth



                </div>
            </div>
        </div>
        </div>
        </div>
    </header>

    @yield('content')


    <footer class="bg-gray-200 rounded-md p-20 shadow-md mb-10 flex justify-center  ">

            
        
        <form class=" sm:flex sm:max-w-md">
            <label for="email-address" class="sr-only">Email address</label>
            <input type="email" name="email-address" id="email-address" autocomplete="email" required
                class="w-full min-w-0 appearance-none  rounded-md border-0 bg-white px-3 py-1.5 text-base text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:w-64 sm:text-sm sm:leading-6 xl:w-full"
                placeholder="Enter your email">
            <div class="mt-4 sm:ml-4 sm:mt-0 sm:flex-shrink-0">
                <button type="submit"
                    class="flex w-full items-center justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Subscribe</button>
            </div>
        </form>
    </footer>






</body>

</html>