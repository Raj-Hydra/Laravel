<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
     <h1>Edit Page</h1>

     <form action="/edit-student/{{$reditdata->Id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
    <input type="text" name="Name" value="{{$reditdata->Name}}" placeholder="name">
    <br>
    <br>
    <input type="text" name="Course" value="{{$reditdata->Course}}" placeholder="Course">
    <br>
    <br>
    <input type="text" name="Batch" value="{{$reditdata->Batch}}" placeholder="Batch">
    <br>
    <br>
    <button>Submit</button>
    <a href="/list">Cancel</a>
     </form>
</div>
