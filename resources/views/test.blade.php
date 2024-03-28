<form method="POST" action="{{url('/tessst')}}">
    @csrf
    <input type="text" name="phone">
    <button type="submit"></button>
</form>


