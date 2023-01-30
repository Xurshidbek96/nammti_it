@extends('admin.layouts.layout')

@section('students')
active
@endsection

@section('content')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h4>Talaba ma'lumotlari</h4>

              <a href="{{ route('students.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                        <td>F.I.SH : </td>
                        <td><b>{{ $student->name }}</b></td>
                    </tr>

                    <tr>
                        <td>Telefoni : </td>
                        <td><b>{{ $student->phone }}</b></td>
                    </tr>

                    <tr>
                        <td>Guruhi : </td>
                        <td><b>{{ $student->group_edu }}</b></td>
                    </tr>

                    <tr>
                        <td>Kurs yo'nalishi : </td>
                        <td><b>{{ $student->group->name ?? 'Bog`lanmagan'}}</b></td>
                    </tr>


                    <tr>
                        <td><h2>To'lov</h2>1-oy uchun : </td>
                        @if($student->pay1 == 0)
                            <td style="color: red"><br><b>Yo'q</b></td>
                        @else
                            <td style="color: green"><br><b>Bor</b></td>
                        @endif
                    </tr>

                    <tr>
                        <td>2-oy uchun : </td>
                        @if($student->pay2 == 0)
                            <td style="color: red"><b>Yo'q</b></td>
                        @else
                            <td style="color: green"><b>Bor</b></td>
                        @endif
                    </tr>

                    <tr>
                        <td>3-oy uchun : </td>
                        @if($student->pay3 == 0)
                            <td style="color: red"><b>Yo'q</b></td>
                        @else
                            <td style="color: green"><b>Bor</b></td>
                        @endif
                    </tr>

                    <tr>
                        <td>4-oy uchun : </td>
                        @if($student->pay4 == 0)
                            <td style="color: red"><b>Yo'q</b></td>
                        @else
                            <td style="color: green"><b>Bor</b></td>
                        @endif
                    </tr>

                    <tr>
                        <td>5-oy uchun : </td>
                        @if($student->pay5 == 0)
                            <td style="color: red"><b>Yo'q</b></td>
                        @else
                            <td style="color: green"><b>Bor</b></td>
                        @endif
                    </tr>

                    <tr>
                        <td>6-oy uchun : </td>
                        @if($student->pay6 == 0)
                            <td style="color: red"><b>Yo'q</b></td>
                        @else
                            <td style="color: green"><b>Bor</b></td>
                        @endif
                    </tr>

                    <br><br>
                    <tr>
                        <td>Rasmi : </td>
                        <td>
                          <img alt="image" src="/images/students/{{ $student->img }}" width="100">
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
