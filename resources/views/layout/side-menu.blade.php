@extends('../layout/main')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    @include('../layout/components/mobile-menu')
    <div class="flex">
        <!-- BEGIN: Side Menu -->
        <nav class="side-nav">
            <a href="" class="intro-x flex items-center pl-5 pt-4">
                <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                <span class="hidden xl:block text-white text-lg ml-3">
                    Mid<span class="font-medium">one</span>
                </span>
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                <li>
                    <a href="/" class="side-menu @if(request()->is('/')) side-menu--active @endif">
                        <div class="side-menu__icon">
                            <i data-feather="home"></i>
                        </div>
                        <div class="side-menu__title">
                            Dashboard
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('users-layout-1') }}" class="side-menu @if(request()->is('users-layout-1-page')) side-menu--active @endif">
                        <div class="side-menu__icon">
                            <i data-feather="user-check"></i>
                        </div>
                        <div class="side-menu__title">
                            Users
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('crud-data-list') }}" class="side-menu @if(request()->is('crud-data-list-page')) side-menu--active @endif">
                        <div class="side-menu__icon">
                            <i data-feather="users"></i>
                        </div>
                        <div class="side-menu__title">
                            Penduduk
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('file-manager') }}" class="side-menu @if(request()->is('file-manager-page')) side-menu--active @endif">
                        <div class="side-menu__icon">
                            <i data-feather="image"></i>
                        </div>
                        <div class="side-menu__title">
                            Gallery
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog-layout-1') }}" class="side-menu @if(request()->is('blog-layout-1-page')) side-menu--active @endif">
                        <div class="side-menu__icon">
                            <i data-feather="file-text"></i>
                        </div>
                        <div class="side-menu__title">
                            Artikel
                            {{-- @if (isset($menu['sub_menu']))
                                <div class="side-menu__sub-icon">
                                    <i data-feather="chevron-down"></i>
                                </div>
                            @endif --}}
                        </div>
                    </a>
                    {{-- @if (isset($menu['sub_menu']))
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
                                                <div class="side-menu__sub-icon">
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
                    @endif --}}
                </li>
            </ul>
        </nav>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            @include('../layout/components/top-bar')
            @yield('subcontent')
        </div>
        <!-- END: Content -->
    </div>
@endsection
