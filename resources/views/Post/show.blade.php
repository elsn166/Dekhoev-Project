@include('admin_header')
<div class="content-wrapper">
<div class="container my-3">
        <form action="" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
            <h2 class="text-center"> Posts </h2>
            
                <div class="row my-2">
                    <div class="col-3 my-3">
                        <h3 class="text-center fw-bold">Title</h3>
                    </div>
                    <div class="col-6  my-3">
                        <input type="text" name="Posttitle" id="title" placeholder="Post title entered to be here" value="{{$Posts->Posttitle}}">
                    </div>
                    <div class="col-3  my-3">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-3 my-3">
                        <h3 class="text-center fw-bold">Content</h3>
                    </div>
                    <div class="col-6  my-3">
                        <input type="text" class="form-control" id="exampleFormControlTextarea1" name="Postcontent" height="300" placeholder="Post content to be entered here" value="{{$Posts->Postcontent}}">
                    </div>
                    <div class="col-6  my-3">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-3">
                    </div>
                    <div class="col-6">
                        <center>
                            <div class="input-group mb-2 ">
                                <input type="file" class="form-control" name ="Postimage" id="inputGroupFile02">
                                <label class="input-group-text upload_icon" for="inputGroupFile02">Upload Image</label>                               
                            </div>
                        </center>
                        <figure><img src="{{url('UploadImages/Post/'. $Posts->Postimage)}}" class="img-thumbnail"  width="150" height="150" alt="Image"></figure>
                    </div>
                    <div class="col-3">
                        
                    </div>
                    <div class="col-3">
                        
                    </div>
                </div>
            
                <!-- <center><a href=""><button class="btn btn-warning my-1 ">Post</button></a></center><br> -->
        </form>
          <center><a href="/home"><button  class="return_admin_button  my-1">Return To Admin Screen</button></a></center>
    </div>
</div>
