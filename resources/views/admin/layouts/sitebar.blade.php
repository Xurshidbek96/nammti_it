<ul class="sidebar-menu">

    <li class="dropdown @yield('dashboard')">
      <a href="/admin/home" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
    </li>
    <li class="dropdown @yield('teachers')">
      <a href="{{ route('teachers.index') }}" ><i
          data-feather="briefcase"></i><span>Mentorlar</span></a>
    </li>

    {{-- <li class="dropdown @yield('times')">
        <a href="{{ route('times.index') }}" ><i
            data-feather="briefcase"></i><span>Kurs vaqtlari</span></a>
    </li> --}}

    <li class="dropdown @yield('groups')">
        <a href="{{ route('groups.index') }}" ><i
            data-feather="briefcase"></i><span>Guruh qo'shish</span></a>
    </li>
    <li class="dropdown @yield('students')">
        <a href="{{ route('students.index') }}" ><i
            data-feather="briefcase"></i><span>Talaba qo'shish</span></a>
    </li>

    <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Guruhlar</span></a>
        <ul class="dropdown-menu">
            @php
                use App\Models\Group;
                $groups = Group::orderBy('id', 'DESC')->get();
            @endphp
            @foreach ($groups as $group)
                <li><a class="nav-link" href="{{ route('groups.show', $group->id) }}">{{ $group->name }}</a></li>
            @endforeach
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Kelejak kasblari</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('futures', 'Frontend') }}">Frontend</a></li>
            <li><a class="nav-link" href="{{ route('futures', 'Backend') }}">Backend</a></li>
        </ul>
      </li>

  </ul>
