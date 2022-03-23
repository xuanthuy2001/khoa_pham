@extends('admin.main')
{{-- extends là dẫn đến layout mình muốn kế thừa --}}
{{-- tức là bên admin.main có gì thì file này có cái đó --}}
@section('heade')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

{{-- thay thế nội dung vào vị trí ===> @yield('heade') <=== bên file admin.main --}}
@section('content')
<form method="post" action="">
      <div class="card-body">
            <div class="form-group">
                  <label for="menu">Tên danh mục</label>
                  <input type="text" name="name" class="form-control" id="menu" placeholder="nhập tên danh mục  ">
            </div>

            <div class="form-group">
                  <label for="menu">Danh mục</label>
                  <select name="parent_id" class="form-control">
                        <option value="0">
                              Danh mục cha
                        </option>
                        @foreach($menus as $menu)
                        <option value="{{$menu -> id}}"> {{ $menu -> name}} </option>
                        @endforeach

                  </select>
            </div>


            <div class="form-group">
                  <label>Mô tả</label>
                  <textarea name="description" class="form-control">
                  </textarea>
            </div>
            <div class="form-group">
                  <label>Mô tả chi tiết </label>
                  <textarea name="content" id="content" class="form-control"> </textarea>

            </div>
      </div>

      <div class="form-group">
            <label>kích hoạt</label>
            <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" name="active" id="active" value="1" checked="">
                  <label for="active" class="custom-control-label">có</label>
            </div>
            <div class="custom-control custom-radio">
                  <input class="custom-control-input" type="radio" name="active" id="no-active" value="0">
                  <label for="no-active" class="custom-control-label">không</label>
            </div>
      </div>
      <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tạo danh mục</button>
      </div>
      @csrf
</form>
@endsection

@section('footer')
<script>
CKEDITOR.replace('content');
</script>
@endsection