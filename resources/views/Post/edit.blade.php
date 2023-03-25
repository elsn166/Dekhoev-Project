@include('admin_header')
<div class="content-wrapper">
<div class="container my-3">
        <form action="{{URL::to('/Post/update')}}/{{$Posts->id}}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
            <h2 class="text-center">Edit Posts </h2>
            
                @if(session('Success'))
                    <div class="alert alert-success">
                      {{ session('Success') }}
                    </div> 
                @endif
                    <div class="container">
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <div class="alart alart-danger" role="alert">
                                        <h4 style="color:red;">{{$error}}</h4>
                                    </div>
                                @endforeach
                            @endif    
                    </div>
                <div class="row my-2">
                    <div class="col-3 my-3">
                        <h3 class="text-center fw-bold">Title</h3>
                    </div>
                    <div class="col-6  my-3">
                        <textarea name="Posttitle" id="title" placeholder="Post title entered to be here" value="{{$Posts->Posttitle}}" row="3" cols="80">{{$Posts->Posttitle}}</textarea>
                    </div>
                    <div class="col-3  my-3">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-3 my-3">
                        <h3 class="text-center fw-bold">Content</h3>
                    </div>
                    <div class="col-6  my-3">
                        <textarea id="exampleFormControlTextarea1" name="Postcontent"  placeholder="Post content to be entered here" value="{{$Posts->Postcontent}}" rows="10" cols="80">{{$Posts->Postcontent}}</textarea>
                        <!-- <textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="Postcontent" rows="10" placeholder="Post content to be entered here" value="{{$Posts->Postcontent}}"></textarea> -->
                        <!-- <textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="Postcontent" height="300" placeholder="Post content to be entered here" value="{{$Posts->Postcontent}}"></textarea> -->
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
			                <h5 style="color: blue;" >Note :Should upload only jpeg,png,svg,jpg. Dimension 400px X 400px  and maximum size:30kb </h5>	
                        </center>
                        <center><figure><img src="{{url('UploadImages/Post/'. $Posts->Postimage)}}" class="img-thumbnail"  width="150" height="150" alt="Image"></figure></center>
                    </div>
                    <div class="col-3">
                        
                    </div>
                    <div class="col-3">
                        
                    </div>
                </div>
            
                <center><button class="btn btn-warning my-1 ">Update</button></center><br>
        </form>
          <center><a href="/home"><button  class="return_admin_button  my-1">Return To Admin Screen</button></a></center>
    </div>
</div>
