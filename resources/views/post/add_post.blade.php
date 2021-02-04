<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Post') }}
        </h2>
    </x-slot>
    
<x-dashboard_heder/>
<div class="container">
<div class="row my-2 d-flex justify-content-center">
    <div class="col-md-8">
    <form method="POST" action="/add_new_post">
        @csrf    
    <div class="form-group">
        <label for="exampleFormControlInput1">Post Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="title" required>
    </div>
    
    <div class="form-group">
        <label for="exampleFormControlSelect1">Post Catagory</label>
        <select class="form-control" id="exampleFormControlSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlFile1">Post Image</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Post Details</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="details" required></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Author Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="author" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Date</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="date" required>
    </div>
    <div class="form-group">
        <input type="submit" class="form-control btn-success btn-sm w-25 m-auto" value="Add Post">
    </div>
    </form>
    </div>
</div>
</div>
  

</x-app-layout>

