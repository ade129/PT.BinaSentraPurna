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
            <h4 class="box-tittle">Update</h4>
            </div>
            <div class="box-body">
              {{Form::open(array('url' => 'policies/update/'.$polis->idpolicies, 'class' => 'form-horizontal'))}}
              <div class="form-group">
                <label class="col-sm-2 control-label">Nomor Polis</label>
                <div class="col-sm-8">
                <input type="number" class="form-control" value="{{$polis->numb_policies}}" placeholder="Nomor Polis" name="numb_policies" required>
                </div>
              </div>
    
              <div class="form-group">
                  <label class="col-sm-2 control-label">Nomor Aplikasi</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" value="{{$polis->numb_applications}}" placeholder="Nomor Aplikasi" name="numb_applications" required>
                  </div>
              </div>
    
              <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Nama" name="name" value="{{$polis->name}}" required>
                  </div>
              </div>
    
              <div class="form-group">
                  <label class="col-sm-2 control-label">Cabang</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Cabang" name="trees" value="{{$polis->trees}}" required>
                  </div>
              </div>
    
      
              <div class="form-group">
                <label class="col-sm-2 control-label">Usia</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" placeholder="Usia" name="age" value="{{$polis->age}}" required>
                </div>
              </div>
    
              <div class="form-group">
                <label class="col-sm-2 control-label">Jangka Waktu</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" placeholder="Jangka Waktu" name="exp" value="{{$polis->exp}}" required>
                </div>
              </div>
    
              <div class="form-group">
                <label class="col-sm-2 control-label">Harga Bangunan</label>
                <div class="col-sm-8">
                <input type="number" class="form-control" placeholder="Harga Bangunan" name="price" value="{{$polis->price}}" required>
                </div>
              </div>
    
              <div class="form-group">
                  <label class="col-sm-2 control-label">Tipe Bangunan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Tipe Bangunan" name="type" value="{{$polis->type}}" required>
                  </div>
              </div>
    
              <div class="form-group">
                <label class="col-sm-2 control-label">Premi</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" placeholder="Premi" name="premi" value="{{$polis->premi}}" required>
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
      
            
            