<section class="content-header">
    <h1>
        Data Polis
        <small>Asuransi</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i>Home</a>
        <li class="active"><i class="fa fa-database"></i>Data Polis</a>
        <li><a href="{{url('/policies')}}"><i class="fa fa-cubes"></i>Asuransi</a>
        <li class="active"><i class="fa fa-plus"></i>Create New</a>
    </ol>
  </section>
  
  {{-- main content --}}
  <section>
  
    {{-- default box --}}
    <section class="content">
    <div class="box">
      <div class="box-header with-border"> 
        <h4 class="box-tittle">Create New</h4>
        </div>
        <div class="box-body">
          {{Form::open(array('url' => 'policies/create-new', 'class' => 'form-horizontal'))}}
          <div class="form-group">
            <label class="col-sm-2 control-label">Nomor Polis</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" placeholder="" name="numb_policies" readonly>
            </div>
          </div>

          <div class="form-group">
              <label class="col-sm-2 control-label">Nomor Aplikasi</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" placeholder="Nomor Aplikasi" name="numb_applications" required>
              </div>
          </div>

          <div class="form-group">
              <label class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Nama" name="name" required>
              </div>
          </div>

          <div class="form-group">
              <label class="col-sm-2 control-label">Cabang</label>
              <div class="col-sm-8">
                <select class="form-control" id="sel1" name="idtrees">
                  <option value="">--Pilih Cabang--</option>
                  @foreach ($trees as $cabang)
                  <option value="{{$cabang->idtrees}}">{{$cabang->name}}</option>    
                  @endforeach
                </select>
                </div>
          </div>
  
          <div class="form-group">
            <label class="col-sm-2 control-label">Usia</label>
            <div class="col-sm-1">
            <input type="number" class="form-control" id="age" name="age" readonly>
            </div>
            <div class="input-group date col-sm-2">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control datepicker pull-right"  id="datepicker" data-date-format='yyyy-mm-dd' value="{{date('Y-m-d')}}" autocomplete="off">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Jangka Waktu</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" placeholder="Jangka Waktu" name="exp" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Harga Bangunan</label>
            <div class="col-sm-8">
            <input type="number" class="form-control" placeholder="Harga Bangunan" name="price" required>
            </div>
          </div>

          <div class="form-group">
              <label class="col-sm-2 control-label">Tipe Bangunan</label>
              <div class="col-sm-8">
                <select class="form-control" name="idbuildings" id="sel1">
                  <option value="">--Pilih Tipe Bangunan--</option>
                  @foreach ($buildings as $bangunan)
                  <option value="{{$bangunan->idbuildings}}">{{$bangunan->name}}</option>    
                  @endforeach
                </select>
              </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Premi</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" placeholder="Premi" name="premi" required>
            </div>
        </div>

        <hr>
        <div class="form-group">
          <label class="col-sm-2 control-label"></label>
          <div class="col-sm-8">
            <a href="{{url('policies')}}" class="btn btn-warning pull-right">Back</a>
            <input type="submit" value="Save" class="btn btn-primary">
          </div>
        </div>          
          {{Form::close()}}
      </div>  
    </div>                  
    </section>
  </section>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script>
      $(function() {
          $( "#datepicker" ).datepicker();
      });

      window.onload=function(){
          $('#datepicker').on('change', function() {
              var dob = new Date(this.value);
              var today = new Date();
              var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
              $('#age').val(age);
          });
      }

  </script>
  
        
        