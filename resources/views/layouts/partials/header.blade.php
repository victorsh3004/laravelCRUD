<header>
    <h1>Menu</h1>
    <ul>
        <li><a href="{{Route('home')}}" class="{{request()->routeIs('home') ? 'active' : ""}}">Home</a>
            <!--@dump(request()->routeIs('home'))-->
        </li>
        <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ""}}">Cursos</a>
            <!--@dump(request()->routeIs('cursos.index'))-->
        </li>   
        <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ""}}">Nosotros</a>
            <!--@dump(request()->routeIs('nosotros'))-->
        </li>
    </ul>
</header>