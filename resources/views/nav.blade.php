        <div id="left">
            <ul id="menu" class="collapse">

               @if(!empty($halaman) && $halaman == 'dashboard')
                <li class="active"><a href="{{ url('/')}}"> Dashboard
                <i class="icon-home"></i><span class="sr-only">(current)</span></a></li>
                @else
                <li><a href="{{ url('/')}}"><i class="icon-home"></i> Dashboard</a></li>
                @endif

                @if(! empty($halaman) && $halaman == 'pasien')
                    <li class="active"><a href="{{ url('pasien') }}"><i class="icon-paper-clip"></i>Pendaftaran Pasien 
                    </a></li>
                @else
                    <li><a href="{{ url('pasien') }}"><i class="icon-paper-clip"></i> Pendaftaran Pasien</a></li>
                @endif

                <!-- @if(! empty($halaman) && $halaman == 'dokter')
                    <li class="active"><a href="{{ url('dokter') }}"><i class="icon-paper-clip"></i> Dokter 
                    </a></li>
                @else
                    <li><a href="{{ url('dokter') }}"><i class="icon-paper-clip"></i> Dokter</a></li>
                @endif -->

                <!-- @if(! empty($halaman) && $halaman == 'poliklinik')
                    <li class="active"><a href="{{ url('poliklinik') }}"><i class="icon-paper-clip"></i> Poliklinik </a></li>
                @else
                    <li><a href="{{ url('poliklinik') }}"><i class="icon-paper-clip"></i> Poliklinik</a></li>
                @endif -->

                @if(!empty($halaman) && $halaman == 'ruangan')
                <li class="active"><a href="{{ url('ruangan')}}"><i class="icon-paper-clip"></i> Ruang Rawat Inap
                </a></li></a></li>
                @else
                <li><a href="{{ url('ruangan')}}"><i class="icon-paper-clip"></i> Ruang Rawat Inap</a></li>
                @endif

                <!-- @if(!empty($halaman) && $halaman == 'kamar')
                <li class="active"><a href="{{ url('kamar')}}"><i class="icon-paper-clip"></i> kamar
                </a></li></a></li>
                @else
                <li><a href="{{ url('kamar')}}"><i class="icon-paper-clip"></i> Kamar</a></li>
                @endif -->

               

                @if(!empty($halaman) && $halaman == 'rawatinapp')
                <li class="active"><a href="{{ url('rawatinap')}}"><i class="icon-paper-clip"></i> Rawat Inap
                </a></li>
                @else
                <li><a href="{{ url('rawatinap')}}"><i class="icon-paper-clip"></i> Rawat Inap</a></li>
                @endif

                 @if(!empty($halaman) && $halaman == 'pemesanan')
                <li class="active"><a href="{{ url('pemesanan')}}"><i class="icon-paper-clip"></i> Pemesanan
                </a></li>
                @else
                <li><a href="{{ url('pemesanan')}}"><i class="icon-paper-clip"></i> Pemesanan</a></li>
                @endif 

                @if(! empty($halaman) && $halaman == 'dokters')
                    <li class="active"><a href="{{ url('dokters') }}"><i class="icon-paper-clip"></i> Dokter 
                    </a></li>
                @else
                    <li><a href="{{ url('dokters') }}"><i class="icon-paper-clip"></i> Dokter</a></li>
                @endif

                 @if(!empty($halaman) && $halaman == 'user')
                <li class="active"><a href="{{ url('user')}}"><i class="icon-user "></i> Petugas
                </a></li>
                @else
                <li><a href="{{ url('user')}}"><i class="icon-user "></i> Petugas</a></li>
                @endif

              
                @if(!empty($halaman) && $halaman == 'rawatinap')
                <li class="active"><a href="{{ url('rawatinap')}}"><i class="icon-paper-clip"></i> Laporan Keuangan
                </a></li>
                @else
                <li><a href="{{ url('rawatinap')}}"><i class="icon-paper-clip"></i> Laporan Keuangan</a></li>
                @endif
                
            </ul>
        </div>