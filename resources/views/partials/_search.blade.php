<div class="search-container">
    <form action="{{ route('search') }}" method="GET" role="search">
        <input type="search" name="query" class="form-control search"  autocomplete="off" placeholder="Keresés..." aria-label="Search" spellcheck="false">
        {{--<button type="submit">Keresés</button>--}}
    </form>

    <div id="results" class="list-group bg-dark results"></div>
</div>

