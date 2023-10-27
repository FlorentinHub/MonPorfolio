        <footer>
            <p>&copy; 2023 - FlorentinToupet</p>
            @if (auth()->check())
                <p>{{ __('auth.logged_in_as', ['name' => auth()->user()->name]) }}</p>
            @endif
        </footer>
