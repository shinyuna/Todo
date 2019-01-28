@extends("layouts.app")

@section('content')
<div class="container">
    @if (Auth::check())

    <div>
        @include('common.errors')

        <form action="/task" method="POST" class="form-horizontal">
            {{ csrf_field()}}

            <div class="form-group">
                <label for="task" class="col-cm-3 control-label">할 일</label>
                <div class="col-sm-6">
                    <input type="text" name="task" id="task" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-plus"></span> 할 일 추가
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div>
        <table class="table">
            <thead>
                <th>할 일</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                @foreach($user->task as $task)
                <tr>
                    <td class="table-text">
                        <div>{{ $task->task }}</div>
                    </td>

                    <td>
                        <form action="/task/{{$task->id}}" method="POST">
                            <a href="/task/{{$task->id}}" class="btn btn-primary btn-sm">수정</a>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" name="delete" class="btn btn-danger btn-sm">삭제</button>
                            {{ csrf_field() }}
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection