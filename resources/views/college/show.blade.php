@extends('layout.main')

@section('main-card')
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit College</h5>
            </div>
            <div class="modal-body">
            <div class="py-1">
                <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" disabled type="text" name="name" value="{{$college->name}}">
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" disabled type="text" name="address" value="{{$college->address}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<form id="form-delete" method="POST" style="display:none">
    @method('DELETE')
    @csrf
</form>
@endsection

@section('secondary-card')
    <div class="row">
        <div class="col d-flex justify-content-center">
            <a href="{{route('college.index')}}">
                <button class="btn btn-primary" type="submit">Back</button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            <a href="{{route('college.edit',$college->id)}}">
                <button class="btn btn-primary mt-3" type="submit">Edit</button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            <a class="btn-delete" href="{{route('college.destroy',$college->id)}}">
                <button class="btn btn-secondary mt-3" type="submit">Delete</button>
            </a>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/delete.js')}}"></script>
@endsection