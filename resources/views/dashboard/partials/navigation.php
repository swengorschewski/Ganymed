<header class="panel t--shadow-z1">
    <h1 class="panel__brand">Ganymed-Dashboard</h1>

    <form class="panel__options" action="/logout" method="post">
        <button class="panel__button">Logout({{ $session->get('email') }})</button>
    </form>
</header>