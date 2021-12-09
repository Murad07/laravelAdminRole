<h1>Update Member Info</h1>

<form action="edit" method="post">
    @csrf
    <input type="hidden" name='id' value={{$data['id']}}>
    <input type="text" name="name" value={{$data['name']}}> <br> <br>
    <input type="text" name="age" value={{$data['age']}}> <br> <br>
    <input type="text" name="city" value={{$data['city']}}> <br> <br>
    <input type="text" name="gender" value={{$data['gender']}}> <br> <br>

    <button type="submit">Add Member</button>
</form>