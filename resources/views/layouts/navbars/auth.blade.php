<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo" style="background: #8EA7E9; color: #FFF2F2; font-weight: bold">
        <a href="/" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/hospital.png">
            </div>
        </a>
        <a href="/" class="simple-text logo-normal" style="color: #FFF2F2; font-weight: bold">
            Hospital Nijoha
        </a>
    </div>
    <div class="sidebar-wrapper" style="background: #8EA7E9; color: #FFF2F2; font-weight: bold">
        <ul class="nav">
            <li >
                <a href="{{ route('dashboard')}}" class="nav-link {{ (Request::is('dashboard') ? 'active' : '') }}" style="color: #FFF2F2">
                    <i class="fa fa-home" style=" font-weight: bold; color: #FFF2F2; "></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ route('polyclinic.index') }}" class="nav-link {{ (Request::is('polyclinics') ? 'active' : '') }} " style="color: #FFF2F2">
                    <i class="fa fa-stethoscope" style=" font-weight: bold; color: #FFF2F2;"></i>
                    <p>Polyclinics</p>
                </a>
            </li>
            <li>
                <a href="{{ route('doctor.index') }}" class="nav-link {{ (Request::is('doctors') ? 'active' : '') }} " style="color: #FFF2F2">
                    <i class="fa fa-user-md" style=" font-weight: bold; color: #FFF2F2;"></i>
                    <p>Doctors</p>
                </a>
            </li>
            <li>
                <a href="{{ route('patient.index') }}" class="nav-link {{ (Request::is('patients') ? 'active' : '') }} " style="color: #FFF2F2">
                    <i class="fa fa-heartbeat" style=" font-weight: bold; color: #FFF2F2;"></i>
                    <p>Patients</p>
                </a>
            </li>
        </ul>
    </div>
</div>