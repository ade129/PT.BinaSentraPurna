<section class="content-header">
  <h1>
      Tipe Bangunan
  </h1>
  <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Home</a>
      <li class="active"><i class="fa fa-database"></i>Tipe Bangunan</a>
      <li><a href="{{url('/buildings')}}"><i class="fa fa-cubes"></i>Index</a>
      <li class="active"><i class="fa fa-plus"></i>Create New</a>
  </ol>
</section>

{{-- main content --}}
<section>

  {{-- default box --}}
  <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Create New</h3> 
            </div>
            <div class="box-body">
              {{ Form::open(array('url' => 'buildings/create-new', 'class' => 'form-horizontal')) }}
              
              <div class="form-group">
                    <label class="col-sm-2 control-label">Kode Bangunan</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" placeholder="Kode Bangunan" name="code" required>
                    </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Bangunan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Nama Bangunan" name="name" required>
                </div>
              </div>

              <div class="form-group">
                    <label class="col-sm-2 control-label">Tarif</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Tarif" name="fee" required>
                    </div>
              </div>
               
              <hr>
              <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                  <a href="{{url('buildings')}}" class="btn btn-warning pull-right">Back</a>
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