@extends('admin.layout.layout')
@section('content')
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>名称</th>
                <th>描述</th>
                <th>Logo</th>
                <td>关注数</td>
                <td>社团数</td>
                <th>创办时间</th>
            </tr>
            @foreach($schoolList as $school)
                <tr>
                    <td>
                        {{$school->id}}
                    </td>
                    <td>
                        {{$school->school_name}}
                    </td>
                    <td class="text-muted">
                        {{$school->school_description}}
                    </td>
                    <td>
                        <img class="img-md" src="{{$school->school_logo}}">
                    </td>
                    <td>
                        {{$school->favorite_number}}
                    </td>
                    <td>
                        {{$school->club_number}}
                    </td>
                    <td>
                        {{$school->created_at}}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="row justify-content-center">
        {!! $schoolList->links() !!}
    </div>
@endsection