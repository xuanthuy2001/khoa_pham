<!DOCTYPE html>
<html lang="en">

<head>
      @include('admin.heade')
</head>

<body class="hold-transition sidebar-mini">
      <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                  <!-- Left navbar links -->
                  <ul class="navbar-nav">
                        <li class="nav-item">
                              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                          class="fas fa-bars"></i></a>
                        </li>

                  </ul>

                  <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                                    <i class="fas fa-expand-arrows-alt"></i>
                              </a>
                        </li>

                  </ul>
            </nav>

            @include('admin.sidebar')

            <div class="content-wrapper">
                  <section class="content">
                        <div class="container-fluid">

                              {{-- hiển thị khi có nỗi về form --}}
                              @include('admin.alert')
                              <div class="row">
                                    <!-- left column -->
                                    <div class="col-md-12">
                                          <!-- jquery validation -->
                                          <div class="card card-primary mt-3">
                                                <div class="card-header">
                                                      <h3 class="card-title">{{ $title }}</h3>
                                                </div>




                                                {{-- đặt tên để khi muốn thay thế bên file khác bằng hàm session thì sẽ truyền đối số là tên này vào --}}
                                                @yield('content')






                                          </div>
                                          <!-- /.card -->
                                    </div>
                                    <!--/.col (left) -->
                                    <!-- right column -->
                                    <div class="col-md-6">

                                    </div>
                                    <!--/.col (right) -->
                              </div>
                              <!-- /.row -->
                        </div>
                  </section>
            </div>
            <footer class="main-footer">
                  <div class="float-right d-none d-sm-block">
                        <b>Version</b> 3.2.0
                  </div>
                  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
                  reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                  <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      @include('admin.footer')
</body>

</html>