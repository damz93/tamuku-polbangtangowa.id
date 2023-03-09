@extends('admin-access.layouts.main')
@section('container')
<p style="font-size:28px" class="mt-3">Edit User - Email :{{ $user->email }}</p>
<hr>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card mb-5">
		<div class="container">
			<div class="card-body p-0 m-2">
				<div class=" table-wrapper table-responsive">
               <form class="mb-5" autocomplete="off" action="/admin-access/user/update-user/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                @method('put')    
                @csrf                  
                  <div class="mb-3">              
                    <label for="password" class="form-label">Password</label>
                    <input type="password" autofocus placeholder="Masukkan Password" value="{{ $user->password }}"class="form-control" id="password" name="password">
                  </div>

                  <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{ $user->nama }}" placeholder="Masukkan Nama Lengkap">
                  </div>
                  <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                      <option value="Laki-laki" @if($user->jenis_kelamin == "Laki-laki") selected @endif>Laki-laki</option>
                      <option value="Perempuan"@if($user->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <input type="submit" name="update" value="Update" class="btn btn-success btn-lg"></button>
                        </div>

                  
                </form>
              </div>
        </div>
        </div>
      </div>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    
  @endsection