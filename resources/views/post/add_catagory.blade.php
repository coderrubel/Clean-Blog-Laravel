<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Catagory') }}
        </h2>
    </x-slot>
    
<x-dashboard_heder/>
<div class="container">
<div class="row my-2 d-flex justify-content-between">

    <div class="col-md-6">
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
    <div class="col-md-5">
        <table class="table table-striped w-100">
        <thead class="thead-light">
            <tr>
                <th class="py-1 px-2">Name</th>
                <th class="py-1 px-2">Slug</th>
            </tr>
        </thead>    
            @foreach($allcategory as $row)
            <tr>
                <td class="py-1 px-2">{{$row->catName}}</td>
                <td class="py-1 px-2">{{$row->slug}}</td>
            </tr>
            @endforeach
        </table>
</div>    

</div>
</div>
  

</x-app-layout>

