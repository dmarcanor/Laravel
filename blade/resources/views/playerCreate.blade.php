@extends("layouts.plantilla")

@section("main")
    <form action="#" method="POST">
        <label for="nickname">Nickname:
            <input type="text" name="nickname" id="nickname">
        </label>
        <br>
        <label for="level">Level:
            <input type="number" name="level" id="level">
        </label>
        <br>
        <label for="class">Class: 
            <input type="text" name="class" id="class">
        </label>
        <br>
        <label for="guild">Guild:
            <input type="text" name="guild" id="guild">
        </label>
        <br>
        <input type="submit" value="Submit">
    </form>
@endsection

@section("footer")
    <h2>Enterprise</h2>
@endsection