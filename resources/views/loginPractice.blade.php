<h1>User Login</h1>

<!-- <form action="login-action" method="POST"> -->
<form action="user-auth" method="POST">
    @csrf
    <input type="text" name="user" placeholder="enter name"> <br> <br>
    <input type="password" name="password" placeholder="enter password"> <br> <br>
    <button type="submit">Login</button>
</form>