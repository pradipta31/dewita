<!-- blog comments -->
<div class="blog-comments">
    <h3 class="title">
        @if ($count == 0)
            0 Comments
        @else
            Comments
        @endif
    </h3>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <!-- comment -->
    @foreach ($comment as $c)
        @if ($c->status == 'approved')
        <div class="media">
            <div class="media-left">
                <img class="media-object" src="./img/perso2.jpg" alt="">
            </div>
            <div class="media-body">
                <h4 class="media-heading">{{$c->name}}<span class="time">{{$c->created_at->format('d-m-Y')}}</span></h4>
                <p>{{$c->comment}}</p>
            </div>
        </div>
        
        @endif
    @endforeach
    <!-- /comment -->
    <!-- reply form -->
    <div class="reply-form">
        <h3 class="title">Leave a reply</h3>
        <form action="{{url('article/'.$news->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input class="input" type="text" placeholder="Name" name="name">
            <input class="input" type="email" placeholder="Email" name="email">
            <textarea placeholder="Add Your Commment" class="form-control" name="comment"></textarea>
            <button type="submit" class="main-btn">Submit</button>
        </form>
    </div>
    <!-- /reply form -->
</div>
<!-- /blog comments -->