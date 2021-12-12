<a href="/"><h4>Home</h4></a>
<a href="/practice"><h4>Practice Home</h4></a>
<h1>Add New Member</h1>

<form action="add" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter name"> <br> <br>
    <input type="text" name="age" placeholder="Enter age"> <br> <br>
    <input type="text" name="city" placeholder="Enter city"> <br> <br>
    <input type="text" name="gender" placeholder="Enter gender"> <br> <br>

    <button type="submit">Add Member</button>
</form>