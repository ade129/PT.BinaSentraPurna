<section class="content-header">
        <h1>Data</h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><i class="fa fa-cubes"></i>Kantor Cabang</li>
        </ol>
      </section>
      
      <!-- Main content -->
      <section class="content">
      
        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Index</h3>
            <div class="box-tools pull-right">
              <a href="{{url('trees/create-new')}}" class="btn btn-box-tool" title="Create New"><i class="fa fa-plus"></i> Create New</a>
              </div>
          </div>
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Kode Cabang</th>
                <th>Nama Cabang</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($trees as $tree)
                <tr>
                    <td>{{$tree->idtrees}}</td>
                    <td>{{$tree->code}}</td>
                    <td>{{$tree->name}}</td>
                </tr>    
                 @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      
      </section>
      