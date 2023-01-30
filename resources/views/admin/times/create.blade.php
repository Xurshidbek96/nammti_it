@extends('admin.layouts.layout')

@section('times')
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
              <h4>Yangi vaqt yaratish</h4>
              <a href="{{ route('times.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>
            <div class="card-body">
              <form action="{{ route('times.store') }}" method="POST">
                @csrf
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Vaqt tanlang</label>
                    <div class="col-sm-12 col-md-7">
                      <select class="form-control selectric" name="name">
                        <option value="Toq/ 8:00 - 10:00"> Toq/ 8:00 - 10:00 </option>
                        <option value="Toq/ 10:00 - 12:00"> Toq/ 10:00 - 12:00</option>
                        <option value="Toq/ 12:00 - 14:00"> Toq/ 12:00 - 14:00</option>
                        <option value="Toq/ 14:00 - 16:00"> Toq/ 14:00 - 16:00</option>
                        <option value="Toq/ 16:00 - 18:00"> Toq/ 16:00 - 18:00</option>
                        <option value="Toq/ 18:00 - 20:00"> Toq/ 18:00 - 20:00</option>
                        <option value="Juft/ 8:00 - 10:00"> Juft/ 8:00 - 10:00 </option>
                        <option value="Juft/ 10:00 - 12:00"> Juft/ 10:00 - 12:00</option>
                        <option value="Juft/ 12:00 - 14:00"> Toq/ 12:00 - 14:00</option>
                        <option value="Juft/ 14:00 - 16:00"> Juft/ 14:00 - 16:00</option>
                        <option value="Juft/ 16:00 - 18:00"> Juft/ 16:00 - 18:00</option>
                        <option value="Juft/ 18:00 - 20:00"> Juft/ 18:00 - 20:00</option>
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
