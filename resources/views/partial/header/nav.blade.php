<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container d-flex justify-content-between">
        <a class="navbar-brand thetitle" href="/welcome"><b>{{ env('APP_CODINGSCHOOL') }}</b></a>
        <div class="navbar-nav">
            <a class="nav-link {{ (request()->is('about')) ? 'active' : '' }}" href="/about">About</a>
            <a class="nav-link {{ (request()->is('services')) ? 'active' : '' }}" href="/services">Services</a>
            <a class="nav-link disabled " tabindex="-1" aria-disabled="true">Contact</a>
        </div>
    </div>
</nav>
