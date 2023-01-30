@extends('admin.layouts.layout')

@section('groups')
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
              <h4>Guruhlar</h4>
              <a href="{{ route('groups.create') }}" class="btn btn-primary" style="position:absolute; right:50;">Create</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                      </th>
                      <th>Nomi</th>
                      <th>Vaqti</th>
                      <th>Mentor</th>
                      <th>Xolati</th>
                      <th>O'quvchi soni</th>
                      <th>Start</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($groups) == 0)
					    <tr>
					        <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan</td>
					    </tr>
					@endif
                    @foreach($groups as $group)
                      <tr>
                        <td>
                          {{ ++$loop->index }}
                        </td>
                        <td>{{ $group->name }}</td>
                        <td>{{ $group->time->name ?? 'Mavjud emas' }}</td>
                        <td>{{ $group->teacher->name ?? 'Bog`lanmagan'}}</td>
                        @if($group->status == 0)
                            <td style="color:red">Boshlanmagan</td>
                        @elseif($group->status == 1)
                            <td style="color:rgb(31, 237, 31)">Boshlangan</td>
                        @else
                            <td style="color:rgb(255, 170, 0)">Yakunlangan</td>
                        @endif
                        @php
                            $c = count($group->students)
                        @endphp
                        <td>{{ $c }}</td>
                        <td>{{ $group->start }}</td>
                        <td>
                            <form action="{{ route('groups.destroy', $group->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-primary"><ion-icon class="far fa-edit"></ion-icon></a>
                                <button class="btn btn-danger" onclick="return confirm('Rostdan o`chirmoqchimisiz ?')"><ion-icon class="fas fa-times"></ion-icon></button>
                            </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $groups->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
