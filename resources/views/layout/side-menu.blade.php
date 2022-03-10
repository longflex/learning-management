@extends('../layout/main')

@section('head')
    @yield('subhead')
@endsection
@section('substyle')
<style>
.txt-white{
    color:white;
}

</style>

@endsection
@section('content')
    @include('../layout/components/top-bar')
    <div class="wrapper">
        <div class="wrapper-box">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <ul>
                    @foreach ($side_menu as $menuKey => $menu)
                        @if ($menu == 'devider')
                            <li class="side-nav__devider my-6"></li>
                        @else
                            <li>
                                <a href="{{ isset($menu['route_name']) ? route($menu['route_name'], $menu['params']) : 'javascript:;' }}" class="{{ $first_level_active_index == $menuKey ? 'side-menu side-menu--active' : 'side-menu'}}">
                                    <div class="side-menu__icon">
                                        <i data-feather="{{ $menu['icon'] }}"></i>
                                    </div>
                                    <div class="side-menu__title">
                                        {{ $menu['title'] }}
                                        @if (isset($menu['sub_menu']))
                                            <div class="side-menu__sub-icon {{ $first_level_active_index == $menuKey ? 'transform rotate-180' : '' }}">
                                                <i data-feather="chevron-down"></i>
                                            </div>
                                        @endif
                                    </div>
                                </a>
                                @if (isset($menu['sub_menu']))
                                    <ul class="{{ $first_level_active_index == $menuKey ? 'side-menu__sub-open' : '' }}">
                                        @foreach ($menu['sub_menu'] as $subMenuKey => $subMenu)
                                            <li>
                                                <a href="{{ isset($subMenu['route_name']) ? route($subMenu['route_name'], $subMenu['params']) : 'javascript:;' }}" class="{{ $second_level_active_index == $subMenuKey ? 'side-menu side-menu--active' : 'side-menu' }}">
                                                    <div class="side-menu__icon">
                                                        <i data-feather="activity"></i>
                                                    </div>
                                                    <div class="side-menu__title">
                                                        {{ $subMenu['title'] }}
                                                        @if (isset($subMenu['sub_menu']))
                                                            <div class="side-menu__sub-icon {{ $second_level_active_index == $subMenuKey ? 'transform rotate-180' : '' }}">
                                                                <i data-feather="chevron-down"></i>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </a>
                                                @if (isset($subMenu['sub_menu']))
                                                    <ul class="{{ $second_level_active_index == $subMenuKey ? 'side-menu__sub-open' : '' }}">
                                                        @foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu)
                                                            <li>
                                                                <a href="{{ isset($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], $lastSubMenu['params']) : 'javascript:;' }}" class="{{ $third_level_active_index == $lastSubMenuKey ? 'side-menu side-menu--active' : 'side-menu' }}">
                                                                    <div class="side-menu__icon">
                                                                        <i data-feather="zap"></i>
                                                                    </div>
                                                                    <div class="side-menu__title">{{ $lastSubMenu['title'] }}</div>
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endif
                    @endforeach
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 2xl:col-span-12">
                            <!-- BEGIN: General Report -->
                            <div class="col-span-12 mt-8">
                                <div class="intro-y flex items-center h-10">
                                    @yield('subtitle')
                                
                                </div>
                                <div class="grid grid-cols-12 gap-6 mt-5">
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-6 intro-y">
                                        <div class="box p-5 bg-primary">
                                            <div class="p-5 txt-white">
                                                <div class="flex items-center">
                                                    <i data-feather="log-in" class="block text-primary w-5 h-5 " style="color:yellow;"></i>
                                                    <div class="text-base font-medium ml-3 truncate">Device Login Information</div>
                                                </div>
                                                <div class="text-slate-300 mt-1 ml-8">Today : <span id="time"></span></div>
                                                <div class="text-slate-300 text-justify mt-1 ml-8">Your Login IP : {{$user_ip}}</div>
                                                <div class="text-slate-300 text-justify mt-1 ml-8">Logged in via DESKTOP</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 xl:col-span-6 intro-y">
                                        <div class="box p-3 bg-primary" >
                                                <div class="grid grid-cols-12 gap-6">
                                                    <div class="col-span-12 sm:col-span-6 xl:col-span-6 intro-y">
                                                        <div class="box p-10 text-center shadow-lg bg-primary">
                                                                <span class="text-base font-medium truncate txt-white">Current Stage</span>
                                                                <div class="font-medium  mt-5  text-center">
                                                                    <a href="{{route('sendoffer')}}" type="button" class="btn  btn-outline-success py-1 px-2">{{$loggedin_user->level->stage->name}}</a>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-12 sm:col-span-6 xl:col-span-6 intro-y">
                                                        <div class="box p-10 text-center bg-primary shadow-lg ">
                                                                <span class="text-base font-medium truncate txt-white">Current Level</span>
                                                                <div class="font-medium  mt-5 text-center">
                                                                    <button type="button" class="btn btn-outline-success py-1 px-2">{{$loggedin_user->level->name}}</button>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-12 mt-8">
                                <i data-feather="award" style="color:green;" class="block text-primary w-5 h-5 "></i>

                                    <div class="ml-3 mb-10">Welcome <span style="color:green;" >{{$loggedin_user->name}}</span> to <i>{{env('APP_NAME')}}</i>
                                        <br>Good afternoon, you already success, keep on activating money...
                                    </div>
                                </div>
                            </div>
                            <!-- END: General Report -->
                            @yield('subcontent')
                    </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>
    </div>
@endsection
