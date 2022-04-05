@extends("layout")

@section("content")
    <div class="text-end">
        <a href="{{route('articles')}}" class="btn btn-link">مقاله ها</a>
    </div>
    <div class="text-center">
         <header>
             <h4 id="title">{{$article->title}}</h4>
         </header>
         <p class="lead">{{$article->description}}</p>
         <small>{{$article->created_at}}</small>
        <input type="hidden" name="article_id" value="{{$article->id}}" id="article_id">
    </div>


    <script>
        (function (d,w){


          const url = `/api/views`

          let article_id = d.querySelector("#article_id").value
          let article_title = d.getElementById("title").textContent
          let counter = 1

          let data = {
              article_id,article_title,counter
          }

          fetch(url,{
              method:"POST",
              body : JSON.stringify(data)
           })
              .then(res => res.json())
            .then(res => {
                console.log(res)
            })

            console.log(article_id)
        })(document,window)
    </script>
@endsection
