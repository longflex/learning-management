<!-- BEGIN: Top Bar -->
<div class="top-bar-boxed h-[70px] z-[51] relative border-b border-white/[0.08] -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
    <div class="h-full flex items-center">
        <!-- BEGIN: Logo -->
        <a href="" class="-intro-x hidden md:flex">
            <img alt="Icewall Tailwind HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
            <span class="text-white text-lg ml-3">
                Icewall
            </span>
        </a>
        <!-- END: Logo -->
        
        <!-- BEGIN: Notifications notification--bullet-->
        <div class="intro-x dropdown ml-auto mr-4 sm:mr-6">
            <div class="dropdown-toggle notification  cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <i data-feather="bell" class="notification__icon dark:text-slate-500"></i>
            </div>
            <!-- <div class="notification-content pt-2 dropdown-menu">
                <div class="notification-content__box dropdown-content">
                    <div class="notification-content__title">Notifications</div>
                    @foreach (array_slice($fakers, 0, 5) as $key => $faker)
                        <div class="cursor-pointer relative flex items-center {{ $key ? 'mt-5' : '' }}">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">{{ $faker['users'][0]['name'] }}</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">{{ $faker['times'][0] }}</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">{{ $faker['news'][0]['short_content'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> -->
        </div>
        <!-- END: Notifications -->
        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <img alt="Icewall Tailwind HTML Admin Template" src="{{ asset('storage/images/' . $loggedin_user->photo) }}">
            </div>
            <div class="dropdown-menu w-56">
                <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                    <li class="p-2">
                        <div class="font-medium">{{ $loggedin_user->name }}</div>
                        <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">{{ $loggedin_user->state }}</div>
                    </li>
                    <li><hr class="dropdown-divider border-white/[0.08]"></li>
                    <li>
                        <a href="{{ route('update-profile') }}" class="dropdown-item hover:bg-white/5">
                            <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item hover:bg-white/5">
                            <i data-feather="edit" class="w-4 h-4 mr-2"></i> Account
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('change-password') }}" class="dropdown-item hover:bg-white/5">
                            <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password
                        </a>
                    </li>
                    <li><hr class="dropdown-divider border-white/[0.08]"></li>
                    <li>
                        <a href="{{ route('addcourses.page') }}" class="dropdown-item hover:bg-white/5">
                            <i data-feather="lock" class="w-4 h-4 mr-2"></i> Admin
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" class="dropdown-item hover:bg-white/5">
                            <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
</div>
<!-- END: Top Bar -->
