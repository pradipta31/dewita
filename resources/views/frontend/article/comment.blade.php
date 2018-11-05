<!-- blog comments -->
<div class="blog-comments">
    <h3 class="title">(13) Comments</h3>
    @if (session('message'))
        <div class="alert alert-success" style="margin-top: 75px; margin-bot: -50px">
            {{ session('message') }}
        </div>
    @endif
    <!-- comment -->
    <div class="media">
        <div class="media-left">
            <img class="media-object" src="./img/perso2.jpg" alt="">
        </div>
        <div class="media-body">
            <h4 class="media-heading">Joe Doe<span class="time">2 min ago</span></h4>
            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
        </div>
    </div>
    <!-- /comment -->
    <!-- reply form -->
    <div class="reply-form">
        <h3 class="title">Leave a reply</h3>
        <form action="" method="post" enctype="multipart/form-data">
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