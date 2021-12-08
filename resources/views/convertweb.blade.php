<!DOCTYPE html>
<html lang="en">
<head>
<title>Factorial</title>
<body>
    <h2> Input Number </h2>
    <form method=POST action='tugasphp'>
        @csrf
        <input type=text name=n1>
        <input type=submit value=Submit>
    </form>

    @if(session('hasil'))
    <div>{{session('hasil')}}</div>
    @endif

</body>
</html>
