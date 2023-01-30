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
              <h4>O'zgartirish</h4>
              <a href="{{ route('groups.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>
            <div class="card-body">
              <form action="{{ route('groups.update', $group->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Guruh nomi</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name" value="{{ $group->name }}">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kurs vaqti</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="time_id">
                        <option value="{{ $group->time->id }}">{{ $group->time->name }}</option>
                    @foreach ($times as $time)
                        @if ($time->id != $group->time->id)
                            <option value="{{ $time->id }}">{{ $time->name }} </option>
                        @endif
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mentor</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="teacher_id">
                    <option value="{{ $group->teacher->id }}">{{ $group->teacher->name}} </option>
                    @foreach ($teachers as $teacher)
                        @if($teacher->id !=  $group->teacher->id)
                            <option value="{{ $teacher->id }}">{{ $teacher->name }} </option>
                        @endif

                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">xolati</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="status">
                        <option value="{{ $group->status }}">
                            @if($group->status == 0)
                                Boshlanmagan
                                <option value="1">Boshlangan</option>
                                <option value="2">Yakunlangan</option>
                                </option>
                            @elseif($group->status == 1)
                                Boshlangan
                                <option value="0">Boshlanmagan</option>
                                <option value="2">Yakunlangan</option>
                                </option>
                            @else
                                Yakunlangan
                                <option value="0">Boshlanmagan</option>
                                <option value="1">Boshlangan</option>
                                </option>
                            @endif

                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Boshlangan sanasi</label>
                <div class="col-sm-12 col-md-7">
                  <input type="date" class="form-control" name="start" value="{{ $group->start }}">
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
