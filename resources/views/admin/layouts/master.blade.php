<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    @vite('resources/css/app.css')
</head>
<body>

    <div class="flex relative">

        {{-- Start Left Area --}}
        <aside id="side-bar" class="hidden flex-1 max-w-[300px] h-screen p-3 bg-gray-50 shadow-lg md:shadow-none overflow-y-auto md:block md:static transition-all duration-300">
            <div class="space-y-5">
                <div class="flex justify-around md:justify-start items-center">
                    <h1 class="text-xl font-bold">Admin Panel</h1>
                    <button id="close-btn" class="text-2xl block md:hidden"><i class="fi fi-sr-caret-left"></i></button>
                </div>
                <div class="">
                    <a href="" class="flex items-center gap-3 mt-10">
                        @if(Auth::user()->image === null)
                            <img src="{{ asset('assets/images/profiles/image.png') }}" class="w-10 h-10 rounded-full" />
                        @else
                            {{-- <img src="{{ asset("storage/".Auth::user()->image) }}" class="w-10 h-10 rounded-full" /> --}}
                        @endif
                        <div class="space-y-1">
                            <p class="text-sm font-medium">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                    </a>
                </div>
                <nav class="">
                    <ul class="mt-10 space-y-1">                            
                        <li id="home" class="p-2 rounded hover:bg-gray-200 transition-all duration-300">
                            <a href="{{ route('admin.categories.index') }}" class="flex items-center gap-3 p-2">
                                <i class="fi fi-rr-clipboard-list text-xl"></i>
                                <span>Category</span>
                            </a>
                        </li>

                        {{-- <li id="users" class="p-2 rounded hover:bg-gray-50 transition-all duration-300">
                            <a href="" class="flex items-center gap-3 p-2">
                                <i class="fa-solid fa-users w-4 h-4"></i>
                                <span>Users</span>
                            </a>
                        </li>

                        <li id="roles" class="p-2 rounded hover:bg-gray-50 transition-all duration-300">
                            <a href="" class="flex items-center gap-3 p-2">
                                <i class="fa-solid fa-user-lock w-4 h-4"></i>
                                <span>Roles</span>
                            </a>
                        </li>

                        <li id="timetable-manage" class="p-2 rounded hover:bg-gray-50 transition-all duration-300">
                            <a href="javascript:void(0);" class="flex items-center gap-3 p-2" data-toggle="expand">
                                <i class="fa-solid fa-table w-4 h-4"></i>
                                <span>Timetable Manage</span>
                            </a>
                            <ul class="h-0 overflow-hidden transition-all duration-300 space-y-1">
                                <li id="classroom" class="p-2 rounded hover:bg-gray-200 transition-all duration-300">
                                    <a href="" class="flex items-center gap-3">
                                        <i class="fa-solid fa-chalkboard w-4 h-4"></i>
                                        <span>Classrooms</span>
                                    </a>
                                </li>

                                <li id="time" class="p-2 rounded hover:bg-gray-200 transition-all duration-300">
                                    <a href="" class="flex items-center gap-3">
                                        <i class="fa-solid fa-clock w-4 h-4"></i>
                                        <span>Time</span>
                                    </a>
                                </li>
                                <li id="teacher" class="p-2 rounded hover:bg-gray-200 transition-all duration-300">
                                    <a href="" class="flex items-center gap-3">
                                        <i class="fa-solid fa-chalkboard-user w-4 h-4"></i>
                                        <span>Tearchers</span>
                                    </a>
                                </li>
                                <li id="users" class="p-2 rounded hover:bg-gray-200 transition-all duration-300">
                                    <a href="" class="flex items-center gap-3">
                                        <i class="fa-solid fa-book-open w-4 h-4"></i>
                                        <span>Subjects</span>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}

                        <li class="p-2 rounded hover:bg-gray-50 transition-all duration-300">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="flex items-center gap-3 p-2">
                                    <i class="fi fi-rr-door-closed text-xl"></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        {{-- End Left Area --}}

        <div class="flex-1 h-screen overflow-y-auto">
            {{-- Start Top Nav Bar --}}
            <nav class="flex justify-between md:justify-end items-center gap-3 md:gap-0 bg-gray-50 p-3 sticky top-0 z-10 ">
                <div class="block md:hidden">
                    <button id="side-bar-btn" class="text-2xl"><i class="fi fi-sr-caret-right"></i></button>
                </div>
                <div class="flex items-center gap-3 md:gap-12 pr-2">
                    @yield('search')
                    <div class="">
                        <a href="" class="flex items-center gap-3">
                            @if(Auth::user()->image === null)
                                <img src="{{ asset('assets/images/profiles/image.png') }}" class="w-10 h-10 rounded-full" />
                            @else
                                {{-- <img src="{{ asset("storage/".Auth::user()->image) }}" class="w-10 h-10 rounded-full" /> --}}
                            @endif
                            <p class="hidden md:block text-lg">{{ Auth::user()->name }}</p>
                        </a>
                    </div>
                </div>
            </nav>
            {{-- End Top Nav Bar --}}

            {{-- Start Content Area --}}
            <div class="p-10">
                @yield('content')
            </div>
            {{-- End Content Area --}}
        </div>
    </div>

    <script src="{{ asset('assets/js/sidebar.js') }}" type="text/javascript" ></script>
    @stack('inputBoxScript')
    @yield('scripts')
</body>
</html>