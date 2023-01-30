@extends('admin.layouts.layout')

@section('groups')
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
              <h4>Yangi guruh qo'shish</h4>
              <a href="{{ route('groups.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>
            <div class="card-body">
              <form action="{{ route('groups.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Guruh nomi</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kurs vaqti</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="time_id">
                    @foreach ($times as $time)
                        <option value="{{ $time->id }}">{{ $time->name }} </option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mentor</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="teacher_id">
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->name }} </option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">xolati</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="status">
                        <option value="0">Boshlanmagan</option>
                        <option value="1">Jarayonda</option>
                        <option value="2">Yakunlangan</option>
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Boshlangan sanasi</label>
                <div class="col-sm-12 col-md-7">
                  <input type="date" class="form-control" name="start">
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
