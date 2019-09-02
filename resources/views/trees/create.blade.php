<section class="content-header">
        <h1>
          Data
          <small>Kantor Cabang</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><i class="fa fa-database"></i> Data</a></li>
          <li><a href="{{url('trees')}}"><i class="fa fa-cubes"></i> Kantor Cabang</a></li>
          <li class="active"><i class="fa fa-plus"></i> Create New</a></li>
        </ol>
      </section>
      
      <!-- Main content -->
      <section class="content">
      
        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Create New</h3>
          </div>
          <div class="box-body">
            {{ Form::open(array('url' => 'trees/create-new', 'class' => 'form-horizontal')) }}
            <div class="form-group">
              <label class="col-sm-2 control-label">Kode Cabang</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" placeholder="Kode Cabang" name="code" required>
              </div>
            </div>

            <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Cabang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nama Cabang" name="name" required>
                    </div>
                  </div>
      
            <div class="form-group">
              <label class="col-sm-2 control-label"></label>
              <div class="col-sm-10">
                <a href="{{url('trees')}}" class="btn btn-warning pull-right">Back</a>
                <input type="submit" value="Save" class="btn btn-primary">
              </div>
            </div>
            {{ Form::close() }}
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      
      </section>
      {{-- <script type="text/javascript">
        $(document).ready(function() {
         $('.datepicker').datepicker();
        });
      </script> --}}
      