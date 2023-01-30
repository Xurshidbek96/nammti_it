@extends('admin.layouts.layout')

@section('teachers')
active
@endsection

@section('content')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h4>Show Product</h4>

              <a href="{{ route('teachers.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                        <td>Ismi : </td>
                        <td><b>{{ $teacher->name }}</b></td>
                    </tr>

                    <tr>
                        <td>Yo'nalishi : </td>
                        <td><b>{{ $teacher->positsion }}</b></td>
                    </tr>

                    <tr>
                        <td>Bog'langan guruhlari : </td>
                        <td><b>@foreach ($teacher->groups as $groups)
                           {{ ++$loop->index  }}. {{$groups->name }} <br>
                        @endforeach</b></td>
                    </tr>

                    <tr>
                        <td>Rasmi : </td>
                        <td>
                          <img alt="image" src="/images/teachers/{{ $teacher->img }}" width="59">
                        </td>
                    </tr>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
