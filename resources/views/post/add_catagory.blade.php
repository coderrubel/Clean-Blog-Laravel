<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Catagory') }}
        </h2>
    </x-slot>
    
<x-dashboard_heder/>
<div class="container">
<div class="row my-2 d-flex justify-content-center">
    <div class="col-md-8">
    <form method="POST" action="/add_catagory">
        @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Catagory Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="cat_name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Catagory Slug</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" name="cat_slug">
    </div>
    <div class="form-group">
        <input type="submit" class="form-control btn-success btn-sm" value="Submit">
    </div>
    </form>
    </div>
</div>
</div>
  

</x-app-layout>

