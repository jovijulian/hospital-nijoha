<nav class="navbar navbar-expand-lg navbar-absolute fixed-top" style="background: #E5E0FF; color: #000">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            @if ( str_replace('-', ' ', Request::path()) == "/")
            <a class="navbar-brand" href="#pablo" style="color: #000">Dashboard</a>
            @else
            <a class="navbar-brand" href="#pablo" style="color: #000">{{ str_replace('-', ' ', Request::path()) }}</a>
            @endif
        </div>

    </div>
</nav>
