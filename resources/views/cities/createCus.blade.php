<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="width: 20%"><form action="{{route('cities.createCustomer')}}" method="post">
        @csrf
        <fieldset>
            <legend>Create Customer</legend>
            <label><p><input type="text" name="name" placeholder="name"></p>
                <p><input type="text" name="dob" placeholder="dob"></p>
                <p><input type="text" name="email" placeholder="email"></p>
                <p><input type="text" name="city_id" placeholder="city_id"></p>
                <button>ADD</button></label>
        </fieldset>
    </form></div>
</body>
</html>

