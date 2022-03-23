{{-- Lưu ý: như đã nói ban đầu thì biến $errors có thể được truy cập từ bất cứ file .blade.php nào bạn tạo ra. --}}

@if ($errors->any())
{{-- $errors->any(): Kiểm tra xem có lỗi nào không --}}
<div class="alert alert-danger">
      <ul>
            {{-- $errors->all(): Lấy toàn bộ lỗi (thường dùng trong vòng lặp foreach) --}}
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
      </ul>
</div>
@endif
<!-- thất bại -->
@if (Session::has('error'))
<div class="alert alert-danger">
      {{ Session::get('error') }}
</div>
@endif
<!-- thành công -->
@if (Session::has('success'))
<div class="alert alert-danger">
      {{ Session::get('success') }}
</div>
@endif