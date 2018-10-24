<div id="article" class="section md-padding bg-grey">
        <div class="container">
            <div class="row">
    
                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">Artikel Terbaru</h2>
                </div>
                <!-- /Section header -->
            
                <!-- blog -->
                @foreach ($articles as $article)
                <div class="col-md-4">
                    <div class="blog">
                        @php
                            $descs = strip_tags($article->desc);
                            $image = $article->file;
                            // $data['file'] = 'images/article/' . $request->file('file')->getClientOriginalName();
                        @endphp
                        <div class="blog-img">
                            <img class="img-responsive" src="{{ asset('images/article/'.$image) }}" alt="{{$article->title}}">
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li><i class="fa fa-clock-o"></i>{{$article->created_at->format('d-m-Y')}}</li>
                            </ul>
                            <h3>{{$article->title}}</h3>
                            <p>{!! str_limit($descs, 100) !!}</p>
                            <a href="{{url('article/'.$article->slug)}}" class="btn btn-info">Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- /blog -->
            
            </div>
        </div>
    </div>
