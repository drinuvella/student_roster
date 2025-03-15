<div class="modal-body">
  <div class="py-1">
    <form class="form" novalidate="">
      <div class="row">
        <div class="col">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Name</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name',$college->name) }}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Address</label>
                <input class="form-control @error('address') is-invalid @enderror" type="text" name="address" value="{{ old('address',$college->address) }}">
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