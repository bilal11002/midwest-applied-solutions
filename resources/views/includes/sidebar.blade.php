<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="">
            <a href="{{url('/')}}">
                <img src="{{ asset('images/logo-icon.png') }}" class="logo-icon-2" alt="" />
            </a>
        </div>
        <div>
            <h4 class="logo-text">
                <a href="{{url('/')}}">Syndash</a>
            </h4>
        </div>
        <a href="javascript:;" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
        </a>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{url('/')}}">
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon icon-color-7">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users text-primary"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <div class="menu-title">Users</div>
            </a>
            <ul>
                <li> <a href="{{url('/all-users')}}"><i class="bx bx-right-arrow-alt"></i>All</a>
                </li>
                <li> <a href="{{url('/add-user')}}"><i class="bx bx-right-arrow-alt"></i>Add New</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon icon-color-7">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users text-primary"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <div class="menu-title">Sales Funnel</div>
            </a>
            <ul>
                <li> <a href="{{url('/all-funnels')}}"><i class="bx bx-right-arrow-alt"></i>All</a>
                </li>
                <li> <a href="{{url('/create-funnel')}}"><i class="bx bx-right-arrow-alt"></i>Add new</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon icon-color-7">
                    <i class="fadeIn animated bx bx-book-reader"></i>
                </div>
                <div class="menu-title">Companies</div>
            </a>
            <ul>
                <li> <a href="{{url('/all-companies')}}"><i class="bx bx-right-arrow-alt"></i>All</a>
                </li>
                <li> <a href="{{url('/add-company')}}"><i class="bx bx-right-arrow-alt"></i>Add new</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon icon-color-7">
                    <i class="fadeIn animated bx bx-book-reader"></i>
                </div>
                <div class="menu-title">Products</div>
            </a>
            <ul>
                <li> <a href="{{url('/all-products')}}"><i class="bx bx-right-arrow-alt"></i>All</a>
                </li>
                <li> <a href="{{url('/add-product')}}"><i class="bx bx-right-arrow-alt"></i>Add new</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{url('/email')}}">
                <div class="parent-icon icon-color-2"><i class="bx bx-envelope"></i>
                </div>
                <div class="menu-title">Email</div>
            </a>
        </li>
        <li>
            <a href="{{url('/chat-box')}}">
                <div class="parent-icon icon-color-3"> <i class="bx bx-conversation"></i>
                </div>
                <div class="menu-title">Chat Box</div>
            </a>
        </li>
        <li>
            <a href="{{url('/file-manager')}}">
                <div class="parent-icon icon-color-4"><i class="bx bx-archive"></i>
                </div>
                <div class="menu-title">File Manager</div>
            </a>
        </li>
        <li>
            <a href="{{url('/contact-list')}}">
                <div class="parent-icon icon-color-5"><i class="bx bx-group"></i>
                </div>
                <div class="menu-title">Contatcs</div>
            </a>
        </li>
        <li>
            <a href="{{url('/to-do')}}">
                <div class="parent-icon icon-color-6"><i class="bx bx-task"></i>
                </div>
                <div class="menu-title">Todo List</div>
            </a>
        </li>
        <li>
            <a href="{{url('/invoice')}}">
                <div class="parent-icon icon-color-7"><i class="bx bx-file"></i>
                </div>
                <div class="menu-title">Invoice</div>
            </a>
        </li>
        <li>
            <a href="{{url('/logout')}}">
                <div class="parent-icon icon-color-7">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out text-primary"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                </div>
                <div class="menu-title">Logout</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
