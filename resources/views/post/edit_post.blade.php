<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>
    
<x-dashboard_heder/>
<div class="container">
<div class="row my-2 d-flex justify-content-center">
    <div class="col-md-8">

     <!-- Message -->
     @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form method="POST" action="{{url('/update/'.$edit_post->id)}}" enctype="multipart/form-data">
        @csrf    
    <div class="form-group">
        <label for="exampleFormControlInput1">Post Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{($edit_post->title)}}">
    </div>
    
    <div class="form-group">
        <label for="exampleFormControlSelect1">Post Catagory</label>
        <select class="form-control" id="exampleFormControlSelect1" name="catagory">
            @foreach($edit_cat as $row)
            <option value="{{$row->id}}" <?php if($row->id == $edit_post->id) echo "selected"; ?>  >{{$row->catName}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group d-flex justify-content-between">
        <span>
            <label for="exampleFormControlFile1">New Image</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
        </span><br>
        <span>
            <label for="exampleFormControlFile1">Post Image</label>
            <img src="{{URL::to($edit_post->image)}}" style="widht:70px; height:70px; display:inline-block;">
            <input type="hidden" name="old_photo" value="{{ $edit_post->image }}">
        </span>
        

    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Post Details</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="details">{{($edit_post->details)}}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Author Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="author" value="{{($edit_post->author)}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Date</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="date" value="{{($edit_post->date)}}">
    </div>
    <div class="form-group">
        <input type="submit" class="form-control btn-success btn-sm w-25 m-auto" value="Update">
    </div>
    </form>
    </div>
</div>
</div>
  

</x-app-layout>

