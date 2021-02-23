<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Post') }}
        </h2>
    </x-slot>
    
<x-dashboard_heder/>
<div class="container">
    <div class="col-md-12">

<div class="row my-2 d-flex justify-content-center">
 @foreach($allpost as $row)
    <div class="col-md-4 mb-3">
        <div class="card">
            <img src="{{ URL::to($row->image)}}" class="card-img-top" style="height: 200px;">
            <div class="card-body">
                <h5 class="card-title"> {{ $row->title}}</h5>
                <p class="card-text text-justify">{{substr($row->details,0,150)}}</p>
                <ul class="text-info">
                    <li>Catagory: {{$row->catName}}</li>
                    <li>Author: {{$row->author}}</li>
                    <li>Date: {{$row->date}}</li>
                </ul>
                <a href="{{URL::to('edit_post',$row->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{URL::to('delete_post',$row->id)}}" class="btn btn-danger">Delet</a>
            </div>
        </div>
    </div>
    @endforeach


    
    </div>
</div>
</div>
  

</x-app-layout>



