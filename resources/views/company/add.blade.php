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
                            <h5 class="mb-0 text-danger">Add Company</h5>
                        </div>
                        <hr>
                        <form class="row g-3" action="{{ route('companies.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <label for="inputName" class="form-label">Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="company_name" id="inputName" placeholder="Name">
                                </div>
                                @if ($errors->has('company_name'))
                                    <span class="text-danger">{{ $errors->first('company_name') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="inputEmail" class="form-label">Email</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
                                </div>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="inputAddress" class="form-label">Street Address</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="Street Address">
                                </div>
                                @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="inputCity" class="form-label">City</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="city" id="inputCity" placeholder="City">
                                </div>
                                @if ($errors->has('city'))
                                    <span class="text-danger">{{ $errors->first('city') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="inputState" class="form-label">State</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="state" id="inputState" placeholder="State">
                                </div>
                                @if ($errors->has('state'))
                                    <span class="text-danger">{{ $errors->first('state') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="inputZip" class="form-label">Zipcode</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="zip" id="inputZip" placeholder="Zipcode">
                                </div>
                                @if ($errors->has('zip'))
                                    <span class="text-danger">{{ $errors->first('zip') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="inputPhone" class="form-label">Phone</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="phone" id="inputPhone" placeholder="Phone">
                                </div>
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="inputImage" class="form-label">Image</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="image" id="inputImage">
                                </div>
                                @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="inputNotes" class="form-label">Notes</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="notes" id="inputNotes" placeholder="Notes">
                                </div>
                                @if ($errors->has('notes'))
                                    <span class="text-danger">{{ $errors->first('notes') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="inputType" class="form-label">Type</label>
                                <div class="input-group">
                                    <select class="form-control" name="type" id="inputType">
                                        <option value="">Select options</option>
                                        <option value="Engineer">Engineer</option>
                                        <option value="Architect">Architect</option>
                                        <option value="Owner">Owner</option>
                                        <option value="General Contractor">General Contractor</option>
                                        <option value="Main purchaser contact">Main purchaser contact</option>
                                        <option value="Mechanical Contractor">Mechanical Contractor</option>
                                    </select>
                                </div>
                                @if ($errors->has('type'))
                                    <span class="text-danger">{{ $errors->first('type') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="inputContacts" class="form-label">Contacts</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="contacts" id="inputContacts" placeholder="Contacts">
                                </div>
                                @if ($errors->has('contacts'))
                                    <span class="text-danger">{{ $errors->first('contacts') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="inputRep" class="form-label">Sales Rep</label>
                                <div class="input-group">
                                    <select class="form-control" name="rep" id="inputRep">
                                        <option value="">Select options</option>
                                        @foreach($sales as $single)
                                            <option value="{{ $single->name }}">{{ $single->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if ($errors->has('type'))
                                    <span class="text-danger">{{ $errors->first('type') }}</span>
                                @endif
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-danger px-5">Register</button>
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
