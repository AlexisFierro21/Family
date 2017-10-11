<div class="bs-example">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle collapsed" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Family </a>
    </div>

    @auth
    <div id="navbarCollapse" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
        @switch($role_id)
    @case(1)
        {{ menu('directora','recursos.contructor_navbar') }} 
        @break

    @case(2)
        {{menu('recepcionista','recursos.contructor_navbar')}}
        @break
@endswitch
</div>
@endauth
</nav>
</div>  