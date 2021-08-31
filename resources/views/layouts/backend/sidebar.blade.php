<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="index.html">
            <img :src="'assets/images/brand/logo.png'" class="header-brand-img desktop-lgo" alt="Azea logo">
            <img :src="'assets/images/brand/logo1.png'" class="header-brand-img dark-logo" alt="Azea logo">
            <img :src="'assets/images/brand/favicon.png'" class="header-brand-img mobile-logo" alt="Azea logo">
            <img :src="'assets/images/brand/favicon1.png'" class="header-brand-img darkmobile-logo" alt="Azea logo">
        </a>
    </div>
    <ul class="side-menu app-sidebar3">
        @foreach ($sidebar as $menu)
        @if(!empty($menu['heading']))
        <li class="side-item side-item-category">{{$menu['heading']}}</li>
        @endif
        @if(!empty($menu['menu']))
        <li class="slide">
            <a class="side-menu__item" href="index.html">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewbox="0 0 24 24" width="24px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"></path></g><g><g><path d="M3,11h8V3H3V11z M5,5h4v4H5V5z"></path><path d="M13,3v8h8V3H13z M19,9h-4V5h4V9z"></path><path d="M3,21h8v-8H3V21z M5,15h4v4H5V15z"></path><polygon points="18,13 16,13 16,16 13,16 13,18 16,18 16,21 18,21 18,18 21,18 21,16 18,16"></polygon></g></g></svg>
            <span class="side-menu__label">{{$menu['menu']['title']}}</span></a>
        </li>
        @endif
        <li class="side-item side-item-category">Components</li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="#">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewbox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M13.03 16.72l3.63 3.62 3.62-3.63-3.62-3.62zM7.29 3.71L3.66 7.34l3.63 3.62 3.62-3.63z" opacity=".3"></path><path d="M17.73 12.02l3.98-3.98c.39-.39.39-1.02 0-1.41l-4.34-4.34c-.39-.39-1.02-.39-1.41 0l-3.98 3.98L8 2.29C7.8 2.1 7.55 2 7.29 2c-.25 0-.51.1-.7.29L2.25 6.63c-.39.39-.39 1.02 0 1.41l3.98 3.98L2.25 16c-.39.39-.39 1.02 0 1.41l4.34 4.34c.39.39 1.02.39 1.41 0l3.98-3.98 3.98 3.98c.2.2.45.29.71.29s.51-.1.71-.29l4.34-4.34c.39-.39.39-1.02 0-1.41l-3.99-3.98zM12 9c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-4.71 1.96L3.66 7.34l3.63-3.63 3.62 3.62-3.62 3.63zM10 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm2 2c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm2-4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2.66 9.34l-3.63-3.62 3.63-3.63 3.62 3.62-3.62 3.63z"></path></svg>

            <span class="side-menu__label">Utilities</span><i class="angle fe fe-chevron-right"></i></a>
            @foreach ($menu['menu']['sub_menu'] as $item)
            <ul class="slide-menu">
                <li><a href="elements-border.html" class="slide-item"> Border</a></li>
                <li><a href="element-colors.html" class="slide-item"> Colors</a></li>
                <li><a href="elements-display.html" class="slide-item"> Display</a></li>
                <li><a href="element-flex.html" class="slide-item"> Flex Items</a></li>
                <li><a href="element-height.html" class="slide-item"> Height</a></li>
                <li><a href="elements-margin.html" class="slide-item"> Margin</a></li>
                <li><a href="elements-paddning.html" class="slide-item"> Padding</a></li>
                <li><a href="element-typography.html" class="slide-item"> Typhography</a></li>
                <li><a href="element-width.html" class="slide-item"> Width</a></li>
            </ul>
            @endforeach
        </li>


        @endif
        @if(!empty($menu['single_link']))
        <li class="side-item side-item-category"></li>
        @endif
        @endforeach



    </ul>
</aside>
