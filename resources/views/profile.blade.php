

@extends('layoutsforMainPage.masterForMain')

@section('mainContent')


    <div class="content-wrapper" style="margin-top: 80px; min-height: 100vh;">
        <div class="w-container">
            <div class="w-row">
                <div class="w-hidden-small w-hidden-tiny w-col w-col-4">
                    <div class="white-wrapper">
                        @if($user->user_surname) <p>{{$user->name}} {{$user->user_surname}}</p> @else <p>{{$user->name}}</p> @endif

                       @if($user->user_about) <p class="KullanıcıOnSoz"> {{$user->user_about}}</p> @endif
                        <p>Email adresim :  {{$user->email}}</p>
                        <div class="grey-rule"></div>
                    </div>

                    <form action="{{route('postCreate')}}" method="get">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <button class="btn btn-warning" type="submit">Yeni Post</button>
                    </form>

                    @auth
                        <form action="{{ route('user.detail', $user->id) }}" method="get" style="display: inline;">
                            <button type="submit" style="cursor: pointer;">Bilgilerimi Görüntüle</button>
                        </form>
                    @endauth



                </div>

                @if($user->posts->count())

                <div class="content-column w-col w-col-8">
                    <div class="w-dyn-list">
                        <div role="list" class="w-dyn-items">
                            @foreach($user->posts as $post)
                            <div role="listitem" class="w-dyn-item">
                                <div data-w-id="53cc7567-513c-3103-cd72-dfb075f10bef" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="post-wrapper">
                                    <div class="post-content">
                                        <div class="w-row">
                                            <div class="w-col w-col-8 w-col-medium-8">
                                                    <h2 class="blog-title">{{$post->title}}</h2>
                                                <div class="details-wrapper">
                                                    <div class="post-info">{{$post->created_at->diffForHumans()}}</div>
                                                    <div class="post-info">|</div>
                                                    <strong>{{$post->name}}</strong>
                                                </div>
                                                <div class="post-summary-wrapper">
                                                    <p class="post-summary">{{ \Illuminate\Support\Str::limit($post->content, 100, '...') }}</p>
                                                    <a href="{{ route('post.details', $post) }}">Read More ...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{route('updatePost',$post->id)}}" class="btn btn-info" style="margin-left:10px;"> Düzenle </a>
                                    <a href="{{route('post.delete',$post->id)}}" class="btn btn-danger" style="margin-left:10px;"> Sil </a>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @else
                                    <div class="w-col w-col-8 w-col-medium-8">
                                            <h2 class="blog-title"> Merhaba  {{$user->name}} </h2>
                                        <div class="post-summary-wrapper">
                                            <strong style="margin-top: 10px;"> Henüz yayınlamış olduğun bir yazın yok . Bir yazı oluşturmaya ne dersin ?</strong>
                                        </div>
                                    </div>
                @endif

            </div>
        </div>
    </div>



@endsection
