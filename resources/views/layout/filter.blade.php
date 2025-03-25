<select name="college_id" id="college_id" class="form-control mb-2">
    @foreach ($colleges as $id => $name)
        <option {{$id == $college_id?'selected':''}}  value="{{ $id }}">{{ $name }}</option>
    @endforeach
</select>