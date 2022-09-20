@include('includes.header')

<!--sidebar-wrapper-->
@include('includes.sidebar')
<!--end sidebar-wrapper-->
<!--header-->
@include('includes.topbar')
<!--end header-->
<!--page-wrapper-->
<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Contatcs</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Contatcs</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-start">	<a class="dropdown-item" href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card radius-15 bg-primary">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/avatars/avatar-1.png') }}" width="100" height="100" class="rounded-circle p-1 border bg-white" alt="" />
                            <h5 class="mb-0 mt-4 text-white">Pauline I. Bird</h5>
                            <p class="mb-0 text-white">Webdeveloper</p>
                            <div class="list-inline contacts-social mt-3"> <a href="javascript:;" class="list-inline-item text-facebook"><i class='bx bxl-facebook'></i></a>
                                <a href="javascript:;" class="list-inline-item text-twitter"><i class='bx bxl-twitter'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                <a href="javascript:;" class="list-inline-item text-skype"><i class='bx bxl-skype'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card radius-15">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/avatars/avatar-2.png') }}" width="100" height="100" class="rounded-circle p-1 border" alt="" />
                            <h5 class="mb-0 mt-4">Ralph L. Alva</h5>
                            <p class="mb-0 text-secondary">UI Developer</p>
                            <div class="list-inline contacts-social mt-3"> <a href="javascript:;" class="list-inline-item text-facebook"><i class='bx bxl-facebook'></i></a>
                                <a href="javascript:;" class="list-inline-item text-twitter"><i class='bx bxl-twitter'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                <a href="javascript:;" class="list-inline-item text-skype"><i class='bx bxl-skype'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card radius-15 bg-danger">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/avatars/avatar-3.png') }}" width="100" height="100" class="rounded-circle p-1 border bg-white" alt="" />
                            <h5 class="mb-0 mt-4 text-white">John B. Roman</h5>
                            <p class="mb-0 text-white">Graphic Designer</p>
                            <div class="list-inline contacts-social mt-3"> <a href="javascript:;" class="list-inline-item text-facebook"><i class='bx bxl-facebook'></i></a>
                                <a href="javascript:;" class="list-inline-item text-twitter"><i class='bx bxl-twitter'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                <a href="javascript:;" class="list-inline-item text-skype"><i class='bx bxl-skype'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card radius-15">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/avatars/avatar-3.png') }}" width="100" height="100" class="rounded-circle p-1 border bg-white" alt="" />
                            <h5 class="mb-0 mt-4">David O. Buckley</h5>
                            <p class="mb-0 text-secondary">Android Developer</p>
                            <div class="list-inline contacts-social mt-3"> <a href="javascript:;" class="list-inline-item text-facebook"><i class='bx bxl-facebook'></i></a>
                                <a href="javascript:;" class="list-inline-item text-twitter"><i class='bx bxl-twitter'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                <a href="javascript:;" class="list-inline-item text-skype"><i class='bx bxl-skype'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card radius-15 bg-warning">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('images/avatars/avatar-3.png') }}" width="80" height="80" class="rounded-circle p-1 border bg-white" alt="" />
                                <div class="">
                                    <h5 class="mb-0">Pauline I. Bird</h5>
                                    <p class="mb-0">Webdeveloper</p>
                                    <div class="list-inline contacts-social mt-2"> <a href="javascript:;" class="list-inline-item text-facebook"><i class='bx bxl-facebook'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-twitter"><i class='bx bxl-twitter'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-skype"><i class='bx bxl-skype'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card radius-15 bg-success">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('images/avatars/avatar-2.png') }}" width="80" height="80" class="rounded-circle p-1 border bg-white" alt="" />
                                <div class="">
                                    <h5 class="mb-0 text-white">Ralph L. Alva</h5>
                                    <p class="mb-0 text-white">UI Developer</p>
                                    <div class="list-inline contacts-social mt-2"> <a href="javascript:;" class="list-inline-item text-facebook"><i class='bx bxl-facebook'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-twitter"><i class='bx bxl-twitter'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-skype"><i class='bx bxl-skype'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card radius-15 bg-secondary">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('images/avatars/avatar-1.png') }}" width="80" height="80" class="rounded-circle p-1 border bg-white" alt="" />
                                <div class="">
                                    <h5 class="mb-0 text-white">John B. Roman</h5>
                                    <p class="mb-0 text-white">Graphic Designer</p>
                                    <div class="list-inline contacts-social mt-2"> <a href="javascript:;" class="list-inline-item text-facebook"><i class='bx bxl-facebook'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-twitter"><i class='bx bxl-twitter'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-skype"><i class='bx bxl-skype'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card radius-15 bg-light-primary">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('images/avatars/avatar-3.png') }}" width="80" height="80" class="rounded-circle p-1 border bg-white" alt="" />
                                <div class="">
                                    <h5 class="mb-0 text-primary">James M. Caviness</h5>
                                    <p class="mb-0 text-secondary">Sr. Project Manager</p>
                                    <div class="list-inline contacts-social mt-2"> <a href="javascript:;" class="list-inline-item text-facebook"><i class='bx bxl-facebook'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-twitter"><i class='bx bxl-twitter'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-skype"><i class='bx bxl-skype'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card radius-15 bg-light-info">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('images/avatars/avatar-3.png') }}" width="80" height="80" class="rounded-circle p-1 border bg-white" alt="" />
                                <div class="">
                                    <h5 class="mb-0 text-info">Peter F. Costanzo</h5>
                                    <p class="mb-0 text-secondary">Human Resource</p>
                                    <div class="list-inline contacts-social mt-2"> <a href="javascript:;" class="list-inline-item text-facebook"><i class='bx bxl-facebook'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-twitter"><i class='bx bxl-twitter'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-skype"><i class='bx bxl-skype'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card radius-15 bg-light-danger">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('images/avatars/avatar-3.png') }}" width="80" height="80" class="rounded-circle p-1 border bg-white" alt="" />
                                <div class="">
                                    <h5 class="mb-0 text-danger">Lewis S. Cruz</h5>
                                    <p class="mb-0 text-secondary">Software Engineer</p>
                                    <div class="list-inline contacts-social mt-2"> <a href="javascript:;" class="list-inline-item text-facebook"><i class='bx bxl-facebook'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-twitter"><i class='bx bxl-twitter'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-skype"><i class='bx bxl-skype'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('images/avatars/avatar-3.png') }}" width="80" height="80" class="rounded-circle p-1 border" alt="" />
                                <div class="">
                                    <h5 class="mb-0">Thomas C. Wheeler</h5>
                                    <p class="mb-0 text-secondary">Sales Manager</p>
                                    <div class="list-inline contacts-social mt-2"> <a href="javascript:;" class="list-inline-item text-facebook"><i class='bx bxl-facebook'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-twitter"><i class='bx bxl-twitter'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-skype"><i class='bx bxl-skype'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('images/avatars/avatar-3.png') }}" width="80" height="80" class="rounded-circle p-1 border" alt="" />
                                <div class="">
                                    <h5 class="mb-0">David O. Buckley</h5>
                                    <p class="mb-0 text-secondary">Android Developer</p>
                                    <div class="list-inline contacts-social mt-2"> <a href="javascript:;" class="list-inline-item text-facebook"><i class='bx bxl-facebook'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-twitter"><i class='bx bxl-twitter'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-skype"><i class='bx bxl-skype'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('images/avatars/avatar-3.png') }}" width="80" height="80" class="rounded-circle p-1 border" alt="" />
                                <div class="">
                                    <h5 class="mb-0">Johnny W. Seitz</h5>
                                    <p class="mb-0 text-secondary">Php Programmer</p>
                                    <div class="list-inline contacts-social mt-2"> <a href="javascript:;" class="list-inline-item text-facebook"><i class='bx bxl-facebook'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-twitter"><i class='bx bxl-twitter'></i></a>
                                        <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                        <a href="javascript:;" class="list-inline-item text-skype"><i class='bx bxl-skype'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
<!--end page-wrapper-->

@include('includes.footer')
