<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('css/custom.css')}}" rel="stylesheet">
<div class="container">
<div class="row flex-lg-nowrap">
  <div class="col">
    <div class="e-tabs mb-3 px-3">
      <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="#">Colleges</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Students</a></li>
      </ul>
    </div>

    <div class="row flex-lg-nowrap">
      <div class="col mb-3">
        <div class="e-panel card">
          <div class="card-body">
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
                    <tr>
                      <td class="text-nowrap align-middle">Adam Cotter</td>
                      <td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>
                      <td class="text-center align-middle">
                        <div class="btn-group align-top">
                            <button class="btn btn-sm btn-outline-secondary badge" type="button" data-toggle="modal" data-target="#user-form-modal">Edit</button>
                            <button class="btn btn-sm btn-outline-secondary badge" type="button"><i class="fa fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="text-center px-xl-3">
              <button class="btn btn-success btn-block" type="button" data-toggle="modal" data-target="#user-form-modal">New College</button>
            </div>
            <hr class="my-3">
            <div class="">
              <select class="form-control"> 
                <option selected>All</option>
                <option>Mcast</option>
                <option>University of malta</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" role="dialog" tabindex="-1" id="user-form-modal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Create User</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-1">
              <form class="form" novalidate="">
                <div class="row">
                  <div class="col">
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Full Name</label>
                          <input class="form-control" type="text" name="name" placeholder="John Smith" value="John Smith">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Username</label>
                          <input class="form-control" type="text" name="username" placeholder="johnny.s" value="johnny.s">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Email</label>
                          <input class="form-control" type="text" placeholder="user@example.com">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col mb-3">
                        <div class="form-group">
                          <label>About</label>
                          <textarea class="form-control" rows="5" placeholder="My Bio"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-sm-6 mb-3">
                    <div class="mb-2"><b>Change Password</b></div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Current Password</label>
                          <input class="form-control" type="password" placeholder="••••••">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>New Password</label>
                          <input class="form-control" type="password" placeholder="••••••">
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                          <input class="form-control" type="password" placeholder="••••••"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                    <div class="mb-2"><b>Keeping in Touch</b></div>
                    <div class="row">
                      <div class="col">
                        <label>Email Notifications</label>
                        <div class="custom-controls-stacked px-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="notifications-blog" checked="">
                            <label class="custom-control-label" for="notifications-blog">Blog posts</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="notifications-news" checked="">
                            <label class="custom-control-label" for="notifications-news">Newsletter</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="notifications-offers" checked="">
                            <label class="custom-control-label" for="notifications-offers">Personal Offers</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">Save Changes</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('js/jquery-1.10.2.min.js')}}"></script>
