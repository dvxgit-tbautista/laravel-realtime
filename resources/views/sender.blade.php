<form action="/sender" method="post">
    @csrf

    {{-- <input type="text" name="text"> --}}
    <select name="text">
        <option value="ON">ON</option>
        <option value="OFF">OFF</option>
    </select>
    <input type="submit">

</form>


