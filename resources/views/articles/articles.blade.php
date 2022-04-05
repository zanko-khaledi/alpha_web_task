@extends("layout")


@section("content")
    <div class="text-end m-1">
        <a href="{{route("article.create")}}" class="btn btn-primary btn-sm">افزودن</a>
    </div>
    <div class="text-end m-1">
        <a href="{{route("views")}}" class="btn btn-info">پربازدید ترین اخبار</a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>شناسه</th>
                <th>عنوان</th>
                <th>نمایش</th>
            </tr>
        </thead>
        <tbody>
            @if($articles !== null)
                @foreach($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td><a href="{{route("article",["article" => $article->id])}}" class="btn btn-link">نمایش</a></td>
                    </tr>
                @endforeach
            @else

            @endif
        </tbody>
    </table>
@endsection
