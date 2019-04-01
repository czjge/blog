@extends('layouts.app')

@section("title")
    <title>编辑文章</title>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">编辑文章@if(session("alert"))&nbsp;&nbsp;&nbsp;<span class="text-success">{{ session("alert") }}</span>@endif</div>

                <div class="card-body">
                    <form method="post" action="{{ route("edit-article") }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $post->id }}"/>
                        <div class="form-group">
                            <label for="title">标题</label>
                            <input type="text" class="form-control" id="title" name="title" required value="{{ $post->title }}">
                            {{--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                        </div>
                        <div class="form-group">
                            <label for="content">内容</label>
                            <textarea class="form-control" rows="10" id="content" name="content" required>{{ $post->content }}</textarea>
                        </div>
                        @foreach($tags as $key => $item)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="{{ $item->name }}" value="{{ $item->id }}" name="category[]"
                                    @if(in_array($item->id, explode(',', $post->tag_ids)))checked="checked"@endif
                                >
                                <label class="form-check-label" for="{{ $item->name }}">{{ $item->name }}</label>
                            </div>
                        @endforeach
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">提交</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
