@extends('layout.main')

@section('main-card')
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Student</h5>
            </div>
            <div class="modal-body">
                <div class="py-1">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" disabled type="text" name="phone" value="{{$student->phone}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input class="form-control" disabled type="date" name="dob" value="{{$student->dob}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" disabled type="text" name="name" value="{{$student->name}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" disabled type="text" name="email" value="{{$student->email}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>College</label>
                                    <select name="college_id" disabled id="college_id" class="form-control">
                                        <option>{{$student->college->name }}</option>
                                    </select>
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
            <a href="{{route('student.index')}}">
                <button class="btn btn-primary" type="submit">Back</button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            <a href="{{route('student.edit',$student->id)}}">
                <button class="btn btn-primary mt-3" type="submit">Edit</button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            <a class="btn-delete" href="{{route('student.destroy',$student->id)}}">
                <button class="btn btn-secondary mt-3" type="submit">Delete</button>
            </a>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/delete.js')}}"></script>
@endsection