<header class="panel t--shadow-z1">

    <div class="header">
        <h1 class="header__brand">Ganymed-Dashboard</h1>

        <form class="header__options" action="/logout" method="post">
            <button class="header__button ripple">Logout({{ $session->get('email') }})</button>
        </form>
    </div>
</header>