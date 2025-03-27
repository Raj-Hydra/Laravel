<div>
    <h1> Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci </h1>

    <form action="/search" method="get">
         <input type="search" placeholder="search here" name="search" 
         value="{{@$search}}">
         <button>Search</button>
    </form>
    {{-- Success Message --}}
    @if(session('message'))
        <div style="color: green; padding: 10px; margin: 10px 0; border: 1px solid green;">
            {{ session('message') }}
        </div>
    @endif

    {{-- Error Message --}}
    @if(session('error'))
        <div style="color: red; padding: 10px; margin: 10px 0; border: 1px solid red;">
            {{ session('error') }}
        </div>
    @endif


    <br><br>

    <form action="delete-multi" method="post">
        @csrf
        <button>Delete</button>


    <table border="1">
        <tr>
            <td>
                <input style="width: 15px;" type="checkbox" name="parentCheckbox" >
                <select name="Options" style="width: 20px;"><option value="">v</option>
                    <option value="Selectall">Selectall</option>
                </select>
            </td>
            <td>Name</td>
            <td>Course</td>
            <td>Batch</td>
            <td >Operation</td>
        </tr>
        @foreach($studentData as $studentdata)


        <tr>
            <td style="width: 25px;" ><input type="checkbox" name="ids" value="{{$studentdata->Id}}"></td>
            <td>{{$studentdata->Name}}</td>
            <td>{{$studentdata->Course}}</td>
            <td>{{$studentdata->Batch}}</td>
            <td> 
                <a href="{{'delete/'.$studentdata->Id}}">Delete</a> 
                <a href="{{'edit/'.$studentdata->Id}}">Edit</a> 
            </td>

        </tr>

        

        @endforeach
    </table>
    </form>
    {{$studentData->links()}}
</div>

<style>
    .w-5.h-5{
        width: 15px;
        height: 15px;
    }
</style>
