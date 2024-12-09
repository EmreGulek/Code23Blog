@extends('layoutsforMainPage.masterForMain')

@section('mainContent')

    <div class="content-wrapper" style="margin-top: 80px; min-height: 100vh;">
        <div class="w-container">
            <div class="w-row">
                <div class="content-column w-col w-col-12">
                    <div class="w-dyn-list">
                        <div role="list" class="w-dyn-items">
                          @foreach($posts as $p)
                            <div role="listitem" class="w-dyn-item">
                                <div data-w-id="53cc7567-513c-3103-cd72-dfb075f10bef" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="post-wrapper">
                                    <div class="post-content">
                                        <div class="w-row">
                                            <div class="w-col w-col-4 w-col-medium-4">
                                            </div>
                                            <div class="w-col w-col-8 w-col-medium-8">
                                                    <h2 class="blog-title">{{$p->name}}</h2>

                                                <div class="details-wrapper">
                                                    <div class="post-info">|</div>
                                                    <div class="post-info">{{$p->created_at->diffForHumans()}}</div>
                                                    <div class="post-info">|</div>
                                                    <div class="post-info"> @foreach($user as $u)
                                                            @if($p->user_id == $u->id)
                                                                @if($u->user_surname) <p>{{$u->name}} {{$u->u_surname}}</p> @else <p>{{$u->name}}</p> @endif
                                                            @endif
                                                        @endforeach</div>

                                                </div>
                                                <div class="post-summary-wrapper">
                                                    <p class="post-summary">{{$p->title}} </p>
                                                    <a href="{{ route('post.details', $p) }}" class="read-more-link">Read more...</a>
                                                </div>
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
