<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="/" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/hospital.png">
            </div>
        </a>
        <a href="/" class="simple-text logo-normal">
            Hospital Nijoha
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li>
                <a href="{{ route('page.index', 'dashboard') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="nc-icon nc-diamond"></i>
                    <p>Polyclinics</p>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="nc-icon nc-diamond"></i>
                    <p>Doctors</p>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="nc-icon nc-diamond"></i>
                    <p>Patients</p>
                </a>
            </li>
            
        </ul>
    </div>
</div>
