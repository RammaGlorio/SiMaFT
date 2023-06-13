<div>
  <body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
      <div class="card">
        <div class="card-body login-card-body">
          <h3 class="login-box-msg">Lacak Surat</h3>
    
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group mb-3">
              <input type="text" placeholder="Masukan Nomor Surat" class="form-control @error('no_surat') is-invalid @enderror" name="no_surat" value="{{ old('no_surat') }}" required autofocus>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary">
                Cari
            </button>
          </form>
          <!-- /.social-auth-links -->
        </div>
        <!-- /.login-card-body -->
      </div>
  
      <div class="d-flex justify-content-center">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="timeline">
                  <div>
                      <i class="fas fa-user bg-green"></i>
                      <div class="timeline-item">
                          <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
                          <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
                      </div>
                  </div>
                  <div>
                    <i class="fas fa-user bg-green"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
                        <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
                    </div>
                  </div>
                  <div>
                    <i class="fas fa-user bg-green"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
                        <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
                    </div>
                  </div>
                  <div>
                      <i class="fas fa-clock bg-gray"></i>
                      <div class="timeline-item">
                        <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
                        <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>      
        </div>    
      </div>
    </div>
    </body>
</div>