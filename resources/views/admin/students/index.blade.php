@extends('admin.layouts.layout')

@section('students')
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
              <h4>Barcha talabalar</h4>
              <a href="{{ route('students.create') }}" class="btn btn-primary" style="position:absolute; right:50;">Qo'shish</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                      </th>
                      <th>F.I.SH</th>
                      <th>Kurs yo'nalishi</th>
                      <th>Telefon</th>
                      <th>Guruhi</th>
                      <th>Imtiyoz</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($students) == 0)
					    <tr>
					        <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan</td>
					    </tr>
					@endif

                    @foreach($students as $student)
                      <tr>
                        <td>
                          {{ ++$loop->index }}
                        </td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->group->name ?? 'Bog`lanmagan' }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->group_edu }}</td>
                        @if($student->status == 0)
                            <td style="color:red">Mavjud emas</td>
                        @elseif($student->status == 1)
                            <td style="color:green"><b>Grand</b></td>
                        @else
                            <td style="color:rgb(159, 159, 11)">Bepul</td>
                        @endif
                        <td>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            @csrf
						    @method('DELETE')
                          <a href="{{ route('students.show', $student->id) }}" class="btn btn-info"><ion-icon class="fas fa-info-circle"></ion-icon></a>
                          <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary"><ion-icon class="far fa-edit"></ion-icon></a>
                          <button class="btn btn-danger" onclick="return confirm('Rostdan o`chirmoqchimisiz ?')"><ion-icon class="fas fa-times"></ion-icon></button>
                        </form>
                        </td>

                      </tr>
                    @endforeach

                  </tbody>
                </table>
                {{ $students->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
