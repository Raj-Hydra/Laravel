<div>
    We must ship. - Taylor Otwell

   

    @foreach($image as $img) 

     <img  style="width: 150px;margin: 10px; display:flex; " src="{{url('storage/'.$img->path)}}" alt="">

     @endforeach
</div>
