@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @can('admin-higher')
                            <a href="{{route('user_role.index')}}"> 役割管理画面 </a>
                        @endcan
                        <form action="{{ route('attached_file.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div>ファイル：<input type="file" name="file"></div>
                            <div>コメント：<input type="text" name="comment"></div>
                            <input type="submit" value="投稿">
                        </form>
                        <table>
                            <tr><th>ファイル名</th><th>プレビュー</th><th>コメント</th><th>ユーザー名</th></tr>
                            @foreach($files as $file)
                                <tr>
                                    <td>{{$file->file_name}}</td>
                                    <td><img src="/Users/miyamaruyuuki/postMovies/storage/app/{{$file->file_name}}"></td>
                                    <td>{{$file->comment}}</td>
                                    <td>{{$file->user}}</td>
                                </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
