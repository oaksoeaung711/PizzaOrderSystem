Hello World
<form action="{{ route('logout') }}" method="POST">
    @csrf

    <button class="btn-gray">Logout</button>
</form>