@extends('admin.layouts.layout')

@section('students')
    active
@endsection

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<section class="section">
    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Yangi talaba qo'shish</h4>
              <a href="{{ route('students.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>
            <div class="card-body">
              <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Familya ismi</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telefon</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="phone">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Guruhi</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="group_edu">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mavjud kurslar</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="group_id">
                    @foreach ($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Imtiyoz</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="status">
                        <option value="0">Mavjud emas</option>
                        <option value="1">Grand</option>
                        <option value="2">Bepul</option>
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Imtiyoz yo'nalishi (Agar Grand bo'lsa)</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="direction">
                        <option></option>
                        <option value="Frontend">Frontend</option>
                        <option value="Backend">Backend</option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rasmi</label>
                <div class="col-sm-12 col-md-7">
                  <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Rasm tanlang</label>
                    <input type="file" name="img" id="image-upload" />
                  </div>
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

@endsection
