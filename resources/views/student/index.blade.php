@extends('layout.main')

@section('main-card')
<div class="card-title">
    <h6 class="mr-2"><span>Students</span></h6>
</div>
<div class="e-table">
    <div class="table-responsive table-lg mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="max-width">Name</th>
                    <th class="sortable">email</th>
                    <th class="sortable">phone</th>
                    <th class="sortable">Date Of Birth</th>
                    <th class="sortable">College</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td class="text-nowrap align-middle">{{$student->name}}</td>
                        <td class="text-nowrap align-middle">{{$student->email}}</td>
                        <td class="text-nowrap align-middle">{{$student->phone}}</td>
                        <td class="text-nowrap align-middle">{{$student->dob}}</td>
                        <td class="text-nowrap align-middle">{{$student->college->name}}</td>
                        <td class="text-center align-middle">
                            <div class="btn-group align-top">
                                <a href="{{route('student.edit',$student->id)}}">
                                    <button class="btn btn-sm btn-outline-secondary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
                                </a>
                                <a class="btn-delete" href="{{route('student.destroy',$student->id)}}">
                                    <button class="btn btn-sm btn-outline-secondary badge" type="button"><i class="fa fa-trash"></i></button>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>    
<form id="form-delete" method="POST" style="display:none">
    @method('DELETE')
    @csrf
</form>
@endsection

@section('secondary-card')
    <div class="text-center px-xl-3">
        <a href="{{route('student.create')}}">
            <button class="btn btn-success btn-block"  type="button" data-toggle="modal" data-target="#student-form-modal">New Student</button>
        </a>
    </div>
    <hr class="my-3">
    <div class="filter">
        @include('layout.filter')
        @include('layout.sort')
        
        <div class="text-center px-xl-3">
            <button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#student-form-modal">Filter</button>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/filter.js')}}"></script>
    <script src="{{asset('js/delete.js')}}"></script>
@endsection