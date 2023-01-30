@extends('admin.layouts.layout')

@section('times')
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
              <h4>Mavjud vaqtlar</h4>
              <a href="{{ route('times.create') }}" class="btn btn-primary" style="position:absolute; right:50;">Qo'shish</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                      </th>
                      <th>Vaqt</th>
                      <th>Guruh</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($times) == 0)
					    <tr>
					        <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan</td>
					    </tr>
					@endif

                    @foreach($times as $time)
                      <tr>
                        <td>
                          {{ ++$loop->index }}
                        </td>
                        <td>{{ $time->name }}</td>
                        <td>{{ $time->group->name ?? 'Bog`lanmagan' }}</td>
                        <td>
                        <form action="{{ route('times.destroy', $time->id) }}" method="POST">
                            @csrf
						    @method('DELETE')

                          <a href="{{ route('times.edit', $time->id) }}" class="btn btn-primary"><ion-icon class="far fa-edit"></ion-icon></a>
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
