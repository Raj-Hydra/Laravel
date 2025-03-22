<div>
    Nothing worth having comes easy. - Theodore Roosevelt

    <h2>{{print_r($user)}}</h2>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Course</td>
            <td>Batch</td>
        </tr>
        @foreach($user as $users)
        <tr>
            <td>{{$users->Name}}</td>
            <td>{{$users->Course}}</td>
            <td>{{$users->Batch}}</td>
        </tr>
        @endforeach
    </table>
</div>


