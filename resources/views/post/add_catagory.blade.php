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
   
    <form method="POST" action="/add_catagory">
        @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Catagory Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="catName" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Catagory Slug</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" name="slug" >
    </div>
    <div class="form-group">
        <input type="submit" class="form-control btn-success btn-sm w-25 m-auto" value="Add Catagory">
    </div>
    </form>
    </div>
</div>
</div>
  

</x-app-layout>

