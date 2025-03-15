<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('css/custom.css')}}" rel="stylesheet">

<div class="container">
    <div class="row flex-lg-nowrap">
    <div class="col">
        <div class="e-tabs mb-3 px-3">
            @include('layout.header')
        </div>

        <div class="row flex-lg-nowrap">
        <div class="col col-lg-9 mb-3">
            <div class="e-panel card">
                <div class="card-body">
                    @yield('main-card')
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-3">
            <div class="card">
                <div class="card-body">
                    @yield('secondary-card')
                </div>
            </div>
        </div>
        </div>

        <!-- User Form Modal -->
        <div class="modal fade" role="dialog" tabindex="-1" id="user-form-modal">
        </div>
    </div>
    </div>
</div>

@yield('scripts')
<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('js/jquery-1.10.2.min.js')}}"></script>
