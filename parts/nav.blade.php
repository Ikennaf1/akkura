@php
    $menus = getMenu();
    $sitename = settings('r', 'general.name');
@endphp

<span id="top"></span>
<div id="nav_fixed_bottom" class="nav-fixed-bottom">
    <a href="#top" title="Move to top"><div class="nav-move-top">&#10224;</div></a>
</div>

{{-- main nav --}}
<nav class="nav">
    <div class="body-margin py-5">
        <div class="relative flex items-center justify-between">
            <a href="/" aria-label="{{$sitename}}" title="{{$sitename}}" class="inline-flex items-center">
                <span class="ml-2 text-xl font-bold tracking-wide text-gray-800">{{$sitename}}</span>
            </a>
            <ul class="menu-items">
                @foreach ($menus as $menu)
                    <li class="menu-item">{!! $menu !!}</li>
                @endforeach
                <li>
                    <div class="blinds" id="blinds_container_id"></div>
                </li>
            </ul>
            <button aria-label="Open Menu" title="Open Menu" onclick="handleNav()" class="mobile-menu-btn">
                <svg class="w-5 h-5 text-gray-600" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                    <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
                    <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                </svg>
            </button>

            <button id="show_nav" class="hidden" type="button" onclick="handleNav()"></button>

            <!-- Mobile menu -->
            <div id="nav_collapsed" class="mobile-menu-btn-container">
                
                <!-- Mobile menu dropdown -->
                <div class="absolute top-0 left-0 w-full">
                    <div class="p-5 bg-white border rounded shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <a href="/" aria-label="{{$sitename}}" title="{{$sitename}}" class="inline-flex items-center">
                                <span class="text-xl font-bold tracking-wide text-gray-800">{{$sitename}}</span>
                                </a>
                            </div>
                            <div>
                                <button aria-label="Close Menu" title="Close Menu" class="mobile-menu-close-btn" onclick="handleNav()">
                                    <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                                        <path
                                        fill="currentColor"
                                        d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <nav>
                            <ul class="space-y-4">
                                @foreach ($menus as $menu)
                                <li class="mobile-menu-item">{!! $menu !!}</li>
                                @endforeach
                                <li>
                                    <div id="blinds_container_collapse_id" class="blinds-collapse"></div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>