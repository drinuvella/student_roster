@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@else
    <div class="text-center px-xl-3">
        {{"No Errors"}}
    </div>
@endif    