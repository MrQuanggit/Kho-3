<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui-pro.svg#full"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui-pro.svg#signet"></use>
        </svg>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="index.html">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                </svg> Dashboard<span class="badge badge-info">NEW</span></a></li>

        <li class="c-sidebar-nav-title">Components</li>
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                </svg> Quản lý người dùng</a>
            <ul class="c-sidebar-nav-dropdown-items">
                @can('admin')
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('users.create') }}"> Thêm mới người dùng</a></li>
                @endcan
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('users.index') }}"> Danh sách người dùng</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('categories.index') }}"> Danh sách thể loại</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('posts.index') }}"> Danh sách bài viết</a> </li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('cart') }}"> Danh sách sản phẩm</a> </li>
            </ul>
        </li>
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
                </svg> Buttons</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"> Buttons</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/brand-buttons.html"> Brand Buttons</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/button-group.html"> Buttons Group</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/dropdowns.html"> Dropdowns</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/loading-buttons.html"> Loading Buttons<span class="badge badge-danger">PRO</span><span class="badge badge-success">NEW</span></a></li>
            </ul>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-unfoldable"></button>
</div>
