<div>
    <!-- Be present above all else. - Naval Ravikant -->
     <h1>upload image</h1>
     <form action="/upload" method="post" enctype="multipart/form-data"> <!--gave encytype telling form this input data is media.-->
        @csrf

        <input type="file" name="file" >
        <button>Upload</button>
     </form>
</div>
