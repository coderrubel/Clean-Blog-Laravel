<x-header/>
<!-- Page Header -->
<header class="masthead" style="background-image: url('/{{($post->image)}}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>{{($post->title)}}</h1>
                    <!-- <h2 class="subheading">Problems look mighty small from 150 miles up</h2> -->
                    <span class="meta">Posted by
              <a href="#">{{($post->author)}}</a>
              on {{($post->date)}}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 mx-auto">
                <p class="m-0 text-justify">{{($post->details)}}</p>

                <!-- 
                    <h2 class="section-heading">The Final Frontier</h2>

                <p>As we got further and further away, it  diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched
                    it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>

                <a href="#">
                    <img class="img-fluid" src="img/post-sample-image.jpg" alt="">
                </a>
                <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span> 
                -->

            </div>
        </div>
    </div>
</article>

<hr>
<x-footer/>