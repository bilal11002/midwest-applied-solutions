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
            @include('flash-messages')
            <div class="page-content">
                <div class="card border-top border-0 border-4 border-danger">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                            </div>
                            <h5 class="mb-0 text-danger">Edit User</h5>
                        </div>
                        <hr>
                        <form class="row g-3" action="{{ route('users.update', $fields[0]->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $fields[0]->id }}" />
                            <div class="col-md-12">
                                <label for="inputName" class="form-label">Name</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bxs-user"></i></span>
                                    <input type="text" class="form-control border-start-0" name="username" id="inputName" placeholder="First Name" value="{{$fields[0]->name}}">
                                </div>
                                @if ($errors->has('username'))
                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bxs-message"></i></span>
                                    <input type="email" name="email" class="form-control border-start-0" id="inputEmailAddress" placeholder="Email Address" value="{{$fields[0]->email}}" readonly>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="inputChoosePassword" class="form-label">Choose Password</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bxs-lock-open"></i></span>
                                    <input type="password" name="password" class="form-control border-start-0" id="inputChoosePassword" placeholder="Choose Password">
                                </div>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bxs-lock"></i></span>
                                    <input type="password" name="confirmPassword" class="form-control border-start-0" id="inputConfirmPassword" placeholder="Confirm Password">
                                </div>
                                @if ($errors->has('confirmPassword'))
                                    <span class="text-danger">{{ $errors->first('confirmPassword') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="inputPhoneNo" class="form-label">Phone No</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bxs-microphone"></i></span>
                                    <input type="text" name="phone" class="form-control border-start-0" id="inputPhoneNo" placeholder="Phone No" value="{{$fields[0]->phone}}">
                                </div>
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="inputType" class="form-label">Type</label>
                                <div class="input-group"> <span class="input-group-text bg-transparent"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down text-black"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></span>
                                    <select name="type" class="form-control border-start-0" id="inputType">
                                        <option value="">Select Type</option>
                                        <option value="admin" @if ($fields[0]->type == "admin") selected="selected" @endif>Admin</option>
                                        <option value="rep" @if ($fields[0]->type == "rep") selected="selected" @endif>Rep</option>
                                    </select>
                                </div>
                                @if ($errors->has('type'))
                                    <span class="text-danger">{{ $errors->first('type') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <label for="inputImage" class="form-label">Avatar/Image</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus text-black"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
                                    </span>
                                    <input type="file" name="image" class="form-control border-start-0" id="inputImage">
                                </div>
                                @if ($fields[0]->type != "")
                                    <img class="my-2" src="{{ asset('images/users/'.$fields[0]->image) }}" width="100px">
                                @endif
                                @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-danger px-5">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end page-content-wrapper-->
    </div>
    <!--end page-wrapper-->

@include('includes.footer')
