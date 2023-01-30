@extends('front.layout')

@section('home')
active
@endsection

@section('content')

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>NamMTI IT Park </h1>
					<ul class="breadcrumb">
						<li>
							<a href="{{route('a-panel')}}">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="{{route('a-panel')}}">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

            @php
                $student = DB::table('students')->count();
                $teacher = DB::table('teachers')->count();
                $group = DB::table('groups')->count();
            @endphp

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>{{ $student }}</h3>
						<p>O'quvchilar</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-teacher' ></i>
					<span class="text">
						<h3>{{ $teacher }}</h3>
						<p>Mentorlar</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>{{ $group }}</h3>
						<p>Guruhlar</p>
					</span>
				</li>
			</ul>
		</main>
		<!-- MAIN -->


@endsection
