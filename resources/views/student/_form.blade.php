<div class="modal-body">
  <div class="py-1">
    <form class="form" novalidate="">
      <div class="row">
        <div class="col">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Phone</label>
                <input class="form-control" type="text" name="phone" value="{{ old('phone',$student->phone) }}" placeholder="12345678">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Date Of Birth</label>
                <input class="form-control" type="date" name="dob" value="{{ old('dob',$student->dob) }}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="name" value="{{ old('name',$student->name) }}" placeholder="Giuseppi">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="text" name="email" value="{{ old('email',$student->email) }}" placeholder="giuseppi@email.com">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>College</label>
                  <select name="college_id" id="college_id" class="form-control">
                      @foreach ($colleges as $id => $name)
                          <option {{ $id == old('college_id',$student->college_id) ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
                      @endforeach
                  </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center">
          <button class="btn btn-primary" type="submit">Save Changes</button>
        </div>
      </div>
    </form>
  </div>
</div>