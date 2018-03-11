<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>

@foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <th>{{$user->firstname}}</th>
    </tr>
@endforeach




</table>