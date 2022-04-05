@extends("layout")

@section("content")

  <div class="form-group">
      <div class="text-end">
          <a href="{{route("articles")}}" class="btn btn-link">مقالات</a>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-8">
          <form action="{{route("article.store")}}" method="post">
              @csrf
              <div class="form-item m-1 text-end">
                  <input type="text" name="title" id="titel" class="form-control" placeholder="عنوان">
              </div>
              <div class="form-item m-1 text-end">
                  <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="توضیحات"></textarea>
              </div>
              <div class="form-item m-1 text-end">
                  <input type="submit" value="افزودن" class="btn btn-info" name="send">
              </div>
          </form>
      </div>
  </div>

@endsection
