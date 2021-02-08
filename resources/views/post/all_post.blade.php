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
            <img src="" class="card-img-top" alt="...">{{ $row->image}}
            <div class="card-body">
                <h5 class="card-title"> {{ $row->title}}</h5>
                <p class="card-text">{{$row->details}}</p>
                <p class="d-flex justify-content-between text-info"><span>Author: {{$row->author}}</span> <span>Date: {{$row->date}}</span></p>
                <a href="#" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Delet</a>
            </div>
        </div>
    </div>
    @endforeach


    
    </div>
</div>
</div>
  

</x-app-layout>



