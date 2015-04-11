<nav class="panel shadow-z1">
    <h1 class="panel-brand">Ganymed-Dashboard</h1>

    <form class="panel-options" action="/logout" method="post">
        <button class="panel-button ripple">Logout({{ $session->get('email') }})</button>
    </form>
</nav>