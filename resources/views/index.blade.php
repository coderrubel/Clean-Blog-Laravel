<x-header/>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($viewpost as $row)
                <div class="post-preview">
                    <a href="{{URL::to('post',$row->id)}}">
                        <h2 class="post-title">
                        {{ $row->title}}
                        </h2>
                        <div class="post-img"><img src="{{ URL::to($row->image)}}"></div>
                        <h3 class="post-subtitle"> {{substr($row->details,0,320,)}}</h3>
                    
                    <p class="post-meta">Posted by &nbsp; <a href="#">{{$row->author}}</a>&nbsp; on &nbsp;<span class="text-body">{{$row->date}} </span>&nbsp;  Catagory: <span class="text-body">{{$row->catName}}</span></p>
                </a>
                </div>
                <hr>
                @endforeach
                
                <!-- Pager 
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                </div>
                -->
            </div>
        </div>
    </div>

    <hr>

<x-footer/> 