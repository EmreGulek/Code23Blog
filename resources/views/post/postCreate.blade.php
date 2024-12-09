@extends('layouts.master')

@section('content')
<div class="formbold-main-wrapper">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="formbold-form-wrapper">
        <label >Merhaba, hadi yeni bir içerik oluşturalım.</label>
        <form action="{{route('post.store')}}"  method="POST" >
            @csrf
            <div class="formbold-input-flex">

                <div>

                    <label for="post_name" class="formbold-form-label"> Post name </label>
                    <input
                        type="text"
                        name="post_name"
                        id="post_name"
                        placeholder="Laravel"
                        class="formbold-form-input"
                    />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div>
                    <label for="post_title" class="formbold-form-label"> Title </label>
                    <input
                        type="text"
                        name="post_title"
                        id="post_title"
                        placeholder=".Net Validation"
                        class="formbold-form-input"
                    />
                </div>
            </div>

            <div class="formbold-input-radio-wrapper">
                <label for="jobtitle" class="formbold-form-label"> Category </label>

                <div class="formbold-radio-flex">


            @foreach($categories as $c)
              <!-- Tekrar edecek olan yapııı -->
                    <div class="formbold-radio-group">
                        <label class="formbold-radio-label">
                            <input class="formbold-input-radio" type="radio" name="category_id" value="{{$c->id}}" id="category{{$c->id}}">
                            {{$c->categoryName}}
                            <span class="formbold-radio-checkmark"></span>
                        </label>
                    </div>

                    @endforeach

                </div>
            </div>


            <div>
                <label for="Content" class="formbold-form-label"> İçerik </label>
                <textarea
                    rows="10"
                    name="post_content"
                    id="post_content"
                    placeholder="Lütfen İçeriğinizi Giriniz."
                    class="formbold-form-input"
                ></textarea>
            </div>
            <div>

                <input type="hidden" name="user_id" value="{{ $user_id }}">
            </div>
            <button type="submit" class="formbold-btn">
                Send Post
            </button>
        </form>
    </div>
</div>
@endsection
