@extends('admin.layouts.layout')

@section('teachers')
active
@endsection

@section('content')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
          <div class="card">
            <div class="card-header">
              <h4>Teachers</h4>
              <a href="{{ route('teachers.create') }}" class="btn btn-primary" style="position:absolute; right:50;">Create</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                      </th>
                      <th>Ismi</th>
                      <th>Rasmi</th>
                      <th>Yo'nalishi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($teachers) == 0)
					    <tr>
					        <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan</td>
					    </tr>
					@endif

                    @foreach($teachers as $teacher)
                      <tr>
                        <td>
                          {{ ++$loop->index }}
                        </td>
                        <td>{{ $teacher->name }}</td>
                        <td>
                          <img alt="image" src="/images/teachers/{{ $teacher->img }}" width="59">
                        </td>
                        <td>{{ $teacher->positsion }}</td>
                        <td>
                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
                            @csrf
						    @method('DELETE')
                          <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-info"><ion-icon class="fas fa-info-circle"></ion-icon></a>
                          <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary"><ion-icon class="far fa-edit"></ion-icon></a>
                          <button class="btn btn-danger" onclick="return confirm('Rostdan o`chirmoqchimisiz ?')"><ion-icon class="fas fa-times"></ion-icon></button>
                        </form>
                        </td>

                      </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
