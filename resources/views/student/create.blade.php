@extends('layout.main')

@section('main-card')
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Student</h5>
            </div>
            <form action="{{route('student.store')}}" method="POST">
                @csrf
                @include('student._form')                  
            </form>
        </div>
    </div>
@endsection

@section('secondary-card')
    <div class="text-center px-xl-3">
        {{"Just an empty card"}}
    </div>
@endsection