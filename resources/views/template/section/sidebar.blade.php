    <aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a><span class="fa fa-area-chart"></span>Snowboard<br>Shop</a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
              <a href="#" class="d-block">
                @if(Auth::check())
                  {{request()->user()->nama}}
                @else
                  Silahkan Login
                @endif
              </a>
            </div>
          </div>
          
              <li class="header">Menu</li>
              <li class="treeview">
                <a href="{{url('homeadmin')}}">
                <i class="fa fa-home"></i> <span>Beranda</span>
                </a>
              </li>
              <li class="treeview">
                <a href="{{url('produk')}}">
                <i class="fa fa-archive"></i> <span>Produk</span>
                </a>
              </li>
               <li class="treeview">
                <a href="{{url('user')}}">
                <i class="fa fa-user"></i> <span>User</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
  </div>