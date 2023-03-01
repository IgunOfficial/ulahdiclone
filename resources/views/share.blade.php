<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Share
  </title>
  <!-- Favicon -->
  <link href="{{asset('/assets/img/brand/favicon.png')}}" rel="icon" type="image/png')}}">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('/assets/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href="{{asset('/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('/assets/css/argon-dashboard.css?v=1.1.2')}}" rel="stylesheet" />
  <!-- Bootstrap -->
  
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <b>Buat Resep Anda Disini</b>
                        <ul class="navbar-nav align-items-center d-none d-md-flex">
                            <li class="nav-item dropdown">
                              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="media align-items-center">
                                  <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="{{asset('assets/img/pp.png')}}">
                                  </span>
                                  <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">{{Auth::user()->name }}</span>
                                  </div>
                                </div>
                              </a>
                              
                              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                  <i class="ni ni-user-run"></i>
                                  <span>Logout</span>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                  </form>
                                </a>
                              </div>
                            </li>
                          </ul>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('share.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label><b>Resep dari Daerah :</b></label>
                                <select name="kota_id"
                                  class="form-control @error('kota_id') is-invalid @enderror">
                                  @foreach ($kotas as $kota)
                                    <option value="{{ $kota->id }}">{{ $kota->nama_kota }}</option>
                                  @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                              <label><b>Kategori Makanan :</b></label>
                              <select name="kategori_id"
                                class="form-control @error('kategori_id') is-invalid @enderror">
                                @foreach ($kategoris as $kategori)
                                  <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                @endforeach
                              </select>
                          </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Judul Makanan :</b></label>
                                <input type="text" class="form-control" name="judul">
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label"><b>Foto Makanan :</b></label>
                                <input type="file" class="form-control" name="gambar_resep">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Deskripsi :</b></label>
                                <textarea name="deskripsi" id="" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Bahan-Bahan :</b></label>
                                <textarea name="bahan_bahan" id="" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Langkah-Langkah :</b></label>
                                <textarea name="langkah_langkah" id="" rows="5" class="form-control"></textarea>
                            </div>
                           
                                    <button class="btn btn-primary" type="submit">Buat</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   Core   -->
  <script src="{{asset('/assets/js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
  <script src="{{asset('/assets/js/plugins/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('/assets/js/plugins/chart.js/dist/Chart.extension.js')}}"></script>
  <!--   Argon JS   -->
  <script src="{{asset('/assets/js/argon-dashboard.min.js?v=1.1.2')}}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
  @include('sweetalert::alert')
</body>
</html>