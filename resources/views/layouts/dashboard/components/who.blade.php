@if(Auth::user()->role == "author")

    <ul class="menu-list grid d-flex flex-wrap border rounded mx-auto">
        <li><a class="m-link" href="{{ route('author.home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a class="m-link" href="{{ route('dashboard.article.all') }}"><i class="fa fa-tasks"></i> <span>Article</span></a></li>
    </ul>

@endif
