<h1>Member List</h1>

<table border='1'>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Age</td>
        <td>City</td>
        <td>Gender</td>
    </tr>

    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['age']}}</td>
        <td>{{$member['city']}}</td>
        <td>{{$member['gender']}}</td>
        <td>
            <a href={{"delete/".$member['id']}}>Delete</a>
            <a href={{"edit/".$member['id']}}> Edit</a>
    </td>
    </tr>
    @endforeach
</table>

<span>{{$members->links()}}</span>

<style>
    .w-5 {
        display: none;
    }
</style>