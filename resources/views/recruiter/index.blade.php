<pre>
    {{ Auth::user() }}
</pre>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button>Logout</button>
</form>