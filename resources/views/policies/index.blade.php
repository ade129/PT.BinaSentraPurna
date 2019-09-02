<section class="content-header">
    <h1>Data Polis</h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><i class="fa fa-inbox"></i>Data Polis</li>
    </ol>
</section>

<section class="content">

{{-- default box --}}
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Index</h3>
        <div class="box-tools pull-right">
            <a href="{{url('policies/create-new')}}" class="btn btn-box-tool" title="Create New"><i class="fa fa-plus"></i>Create New</a>
        </div>
    </div>
    <div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Polis</th>
                    <th>Nomor Aplikasi</th>
                    <th>Nama</th>
                    <th>Cabang</th>
                    <th>Usia</th>
                    <th>Jangka Waktu</th>
                    <th>Harga Bangunan</th>
                    <th>Tipe Bangunan</th>
                    <th>Premi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($policies as $polis)
                <tr>
                    <td>{{$polis->idpolicies}}</td>
                    <td>{{$polis->numb_policies}}</td>
                    <td>{{$polis->numb_applications}}</td>
                    <td>{{$polis->name}}</td>
                    <td>{{$polis->trees}}</td>
                    <td>{{$polis->age}}</td>
                    <td>{{$polis->exp}}</td>
                    <td>{{$polis->price}}</td>
                    <td>{{$polis->type}}</td>
                    <td>{{$polis->premi}}</td>
                    <td>                   
                </td>
            <td>
                        <center>
                            <a href="{{url('/policies/update/'.$polis->idpolicies)}}"><i class="fa fa-pencil-square-o"></i></a>
                        </center>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    
        
</div>
</section>