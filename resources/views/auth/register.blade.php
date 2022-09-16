@extends ('layouts.app')

@section('title', 'Register | PT IndoKarya')

@section('content')
    <div class="container mt-5">
        <div class="col-md-4 bg-white p-3 rounded">

            <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Nama Lengkap">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="text" class="form-control" placeholder="Confirm your password">
            </div>

        </div>
    </div>
    </div>
@endsection
