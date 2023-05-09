<header class="header">
    <div class="toggle"></div>

    <div class="sober-indication">
        <span>100 napja józan</span>
    </div>
    <div class="dropdown" >
        <button class="dropbtn">{{Auth::check() ? getFirstCharacter(getFirstName(Auth::user()->name)) : 'teszt' }}</button>
        <span>{{Auth::check() ? getFirstName(Auth::user()->name) : 'teszt' }}</span>
        <ul class="dropdown-content">
            <li><a href="#">Első menüpont</a></li>
            <li><a href="#">Második menüpont</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">{{ __('Kijelentkezés') }}</button>
                </form>
            </li>
        </ul>
    </div>
</header>



