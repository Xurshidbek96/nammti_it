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
              <h4>O'zgartirish</h4>
              <a href="{{ route('students.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>
            <div class="card-body">
              <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Familya ismi</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name" value="{{ $student->name }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telefon</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="phone" value="{{ $student->phone }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Guruhi</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="group_edu" value="{{ $student->group_edu }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mavjud kurslar</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="group_id">
                    <option value="{{ $student->group_id }}"> {{ $student->group->name }} </option>
                    @foreach ($groups as $group)
                        @if($student->group_id != $group->id)
                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                        @endif
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Imtiyoz</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="status">
                        <option value="{{ $student->status }}">
                            @if($student->status == 0)
                                Mavjud emas
                                <option value="1">Grand</option>
                                <option value="2">Bepul</option>
                                </option>
                            @elseif($student->status == 1)
                                Grand
                                <option value="0">Mavjud emas</option>
                                <option value="2">Bepul</option>
                                </option>
                            @else
                                Bepul
                                <option value="0">Mavjud emas</option>
                                <option value="1">Grand</option>
                                </option>
                            @endif
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Imtiyoz yo'nalishi (Agar Grand bo'lsa)</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="direction">
                        <option value="{{ $student->direction }}">{{ $student->direction }}</option>
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
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><b>To'lov 1 - oy</b></label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="pay1">
                    <option value="{{ $student->pay1 }}">
                        @if($student->pay1 == 0)
                            Yo'q
                            <option value="1">Bor</option>
                            </option>
                        @else
                            Bor
                            <option value="0">Yo'q</option>

                            </option>
                        @endif
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><b>To'lov 2 - oy</b></label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="pay2">
                    <option value="{{ $student->pay2 }}">
                        @if($student->pay2 == 0)
                            Yo'q
                            <option value="1">Bor</option>
                            </option>
                        @else
                            Bor
                            <option value="0">Yo'q</option>
                            </option>
                        @endif
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><b>To'lov 3 - oy</b></label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="pay3">
                    <option value="{{ $student->pay3 }}">
                        @if($student->pay3 == 0)
                            Yo'q
                            <option value="1">Bor</option>
                            </option>
                        @else
                            Bor
                            <option value="0">Yo'q</option>
                            </option>
                        @endif
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><b>To'lov 4 - oy</b></label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="pay4">
                    <option value="{{ $student->pay4 }}">
                        @if($student->pay4 == 0)
                            Yo'q
                            <option value="1">Bor</option>
                            </option>
                        @else
                            Bor
                            <option value="0">Yo'q</option>
                            </option>
                        @endif
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><b>To'lov 5 - oy</b></label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="pay5">
                    <option value="{{ $student->pay5 }}">
                        @if($student->pay5 == 0)
                            Yo'q
                            <option value="1">Bor</option>
                            </option>
                        @else
                            Bor
                            <option value="0">Yo'q</option>
                            </option>
                        @endif
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><b>To'lov 6 - oy</b></label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="pay6">
                    <option value="{{ $student->pay6 }}">
                        @if($student->pay6 == 0)
                            Yo'q
                            <option value="1">Bor</option>
                            </option>
                        @else
                            Bor
                            <option value="0">Yo'q</option>
                            </option>
                        @endif
                  </select>
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
