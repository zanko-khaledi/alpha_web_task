@extends("layout")

@section("content")
    <div>
         <h4>بیشترین بازدید ها</h4>
         <div class="text-end">
             <a href="{{route('articles')}}" class="btn btn-link">مقالات</a>
         </div>
         <table class="table table-striped table-hover">
             <thead>
                 <tr>
                     <th>تیتر</th>
                     <th>تعداد بازدید</th>
                     <th>نمایش</th>
                 </tr>
             </thead>
             <tbod>
                 @foreach($articles as $item)
                     <tr>
                         <td>{{$item->title}}</td>
                         <td>{{$item->views}}</td>
                         <td>
                             <a href="{{route("article",["article" => $item->id ])}}" class="btn btn-link">نمایش</a>
                         </td>
                     </tr>
                 @endforeach
             </tbod>
         </table>
    </div>
@endsection
