<h1>User Login</h1>


<form action="customer" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter user name"> <br>
    <span style="color: red">@error('username'){{$message}}@enderror</span> <br> <br>
    <input type="password" name="userpassword" placeholder="enter password"> <br>
    <span style="color: red">@error('userpassword'){{$message}}@enderror</span> <br> <br>

    <button type="submit">Login</button>
</form>