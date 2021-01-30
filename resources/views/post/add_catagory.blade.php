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
    <form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Catagory Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Catagory Slug</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="form-control btn-success btn-sm" value="Submit">
    </div>
    </form>
    </div>
</div>
</div>
  

</x-app-layout>

