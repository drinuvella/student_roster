@extends('layout.main')

@section('main-card')
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit College</h5>
            </div>
            <form action="{{route('college.update',$college->id)}}" method="POST">
                @method('PUT')
                @csrf
                @include('college._form')                  
            </form>
        </div>
    </div>
@endsection

@section('secondary-card')
    @include('layout.form_errors')
@endsection