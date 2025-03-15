@extends('layout.main')

@section('main-card')
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Student</h5>
            </div>
            <form action="{{route('student.update',$student->id)}}" method="POST">
                @method('PUT')
                @csrf
                @include('student._form')                  
            </form>
        </div>
    </div>
@endsection

@section('secondary-card')
    @include('layout.form_errors')
@endsection