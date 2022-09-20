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
                <div class="breadcrumb-title pe-3">Todo</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Todo</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-0">To Do List</h4>
                    <hr>
                    <div class="row gy-3">
                        <div class="col-md-10">
                            <input id="todo-input" type="text" class="form-control" value="">
                        </div>
                        <div class="col-md-2 text-end d-grid">
                            <button type="button" onclick="CreateTodo();" class="btn btn-primary">Add todo</button>
                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <div class="col-12">
                            <div id="todo-container"><div class="pb-3 todo-item" todo-id="0">
                                    <div class="input-group">

                                        <div class="input-group-text">
                                            <input type="checkbox" onchange="TodoChecked(0)" aria-label="Checkbox for following text input" false="">
                                        </div>

                                        <input type="text" readonly="" class="form-control false " aria-label="Text input with checkbox" value="take out the trash">

                                        <button todo-id="0" class="btn btn-outline-secondary bg-danger text-white" type="button" onclick="DeleteTodo(this);" id="button-addon2 ">X</button>

                                    </div>
                                </div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
<!--end page-wrapper-->

@include('includes.footer')
