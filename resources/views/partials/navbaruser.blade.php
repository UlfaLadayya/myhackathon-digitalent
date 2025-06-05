<nav class="navbar navbar-expand-lg"> {{--SmarGenKnowsite bg-body-tertiary --}}
  <div class="container-fluid">
    <a class="navbar-brand {{ Request::is('homepageuser') ? 'main-brand' : '' }}" href="/homepageuser">WePTIK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-lg-0" >
            {{-- mb-2 me-auto ms-auto --}}
            <li class="nav-item">
                <a class="nav-link pe-3 {{ ($title === 'Home') ? 'active' : '' }}" aria-current="page" href="/homepageuser">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link pengetahuan pe-3 {{ ($title === 'Teknologi Informasi dan Komunikasi') ? 'active' : '' }}" href="/teknologiinformasidankomunikasi">Teknologi Informasi dan Komunikasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link pe-3 {{ ($title === 'About Us') ? 'active' : '' }}" href="/aboutus">Tentang WePTIK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link pe-3 {{ ($title === 'Suggestions & Criticism') ? 'active' : '' }}" href="/suggestionscriticism">Saran dan Kritik</a>
            </li>

            <form id='form-logout' action="{{ route('logoutuser') }}" method="POST" style="display: none;">
                @csrf
            </form>

            <script>
                document.getElementById('form-logout').addEventListener('submit', function () {
                if ('caches' in window) {
                    caches.keys().then(function(names) {
                    for (let name of names) caches.delete(name);
                    });
                }
                });
            </script>

            <li class="nav-item">
                <a class="nav-link {{ ($title === 'Logout') ? 'active' : '' }}" href="#" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Log Out</a>
            </li>
        </ul>
    </div>
  </div>
</nav>

