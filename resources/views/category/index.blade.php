@extends('layoutsforMainPage.masterForMain')

@section('mainContent')


    <div class="content-wrapper" style="margin-top: 80px; min-height: 100vh; "  >
        <div class="w-container">
            <div class="w-row">
                <div class="content-column w-col w-col-12" >
                    <div class="w-dyn-list" >
                        <div role="list" class="w-dyn-items">
                            @foreach($categories as $c)
                            <div role="listitem" class="w-dyn-item">
                                <div data-w-id="53cc7567-513c-3103-cd72-dfb075f10bef" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; border: 100px;"  class="post-wrapper" >
                                    <div class="post-content"  >
                                        <div class="w-row">
                                            <div class="w-col w-col-8 w-col-medium-8 ">
                                                <a href="/posts/coffee-sugar-chicory-seasonal-espresso-barista-americano" class="blog-title-link w-inline-block">
                                                    <h2 class="blog-title">{{$c->id}}){{$c->categoryName}}</h2>
                                                </a>

                                                @foreach($posts as $post)
                                                    @if($post->category_id == $c->id)
                                                        <div class="details-wrapper">
                                                            <div class="post-info">
                                                                <a href="{{ route('post.details', $post) }}">{{ $post->title }}</a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="w-col w-col-4 w-col-medium-8">

                                                <img src="{{ asset('/images/' . $c->categoryName . '.png') }}" style="height: 130px;" alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
