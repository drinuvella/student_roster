@extends('layout.main')

@section('main-card')
<div class="card-title">
    <h6 class="mr-2"><span>Colleges</span></h6>
</div>
<div class="e-table">
    <div class="table-responsive table-lg mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="max-width">Name</th>
                    <th class="sortable">Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($colleges as $college)
                    <tr>
                        <td class="text-nowrap align-middle">{{$college->name}}</td>
                        <td class="text-nowrap align-middle">{{$college->address}}</td>
                        <td class="text-center align-middle">
                            <div class="btn-group align-top">
                                <a href="{{route('college.edit',$college->id)}}">
                                    <button class="btn btn-sm btn-outline-secondary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
                                </a>
                                <a class="btn-delete" href="{{route('college.destroy',$college->id)}}">
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
        <a href="{{route('college.create')}}">
            <button class="btn btn-success btn-block"  type="button" data-toggle="modal" data-target="#college-form-modal">New College</button>
        </a>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/delete.js')}}"></script>
@endsection