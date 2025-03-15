<ul class="nav nav-tabs">
    <li class="nav-item"> <a @class(['nav-link','active'=>Request::is('college*')]) href="/college">Colleges</a></li>
    <li class="nav-item"><a @class(['nav-link','active'=>Request::is('student*')]) href="/student">Students</a></li>
</ul>