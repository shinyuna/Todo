@extends('layouts.app')

@section('content')

<div class="container">
    <h1>할 일 수정</h1>

    <form action="/task/{{ $task->id }}" method="POST">
        <div class="form-group">
            <input type="hidden" name="_method" value="PUT">
            <textarea name="task" class="form-control">{{$task->task}}</textarea>
        </div>
        <div class="for-group">
            <button type="submit" name="update" class="btn btn-primary">수정하기</button>
        </div>
        {{ csrf_field() }}
        <!-- CSRF(Cross Site Request Forgery)는 인증되지 않은 사용자가 인증되지 않은 명령을 수행하도록 하는 웹 공격의 하나이다.  -->
    </form>
</div>

@endsection