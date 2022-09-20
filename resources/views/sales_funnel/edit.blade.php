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
                            <h5 class="mb-0 text-danger">Edit Sales Funnel</h5>
                        </div>
                        <hr>
                        <form class="row g-3" action="{{ route('funnels.update', $fields[0]->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $fields[0]->id }}" />
                            <div class="col-md-12">
                                <label for="inputFirstName" class="form-label">Funnel Name</label>
                                <input type="text" class="form-control" name="funnel_name" id="inputFirstName" value="{{ $fields[0]->name }}">
                                @if ($errors->has('funnel_name'))
                                    <span class="text-danger">{{ $errors->first('funnel_name') }}</span>
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
