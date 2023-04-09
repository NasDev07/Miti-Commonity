<li class="nav-item navbar-dropdown dropdown-user dropdown">
    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
        data-bs-toggle="dropdown">

        {{-- <div class="avatar avatar-online">
            <img src="{{ asset('storage/' . ($datadiri()->image)) }}" alt
                class="w-px-40 h-auto rounded-circle" />
        </div> --}}

        <div class="avatar avatar-online">
            <img src="../assets/img/avatars/1.png" alt
                class="w-px-40 h-auto rounded-circle" />
        </div>
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
        <li>
            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                <i class="bx bx-user me-2"></i>
                <span class="align-middle">My Profile</span>
            </a>
        </li>
        <li>
            <div class="dropdown-divider"></div>
        </li>
        <li>
            <form onsubmit="return confirm('are you sore?')" action="{{ route('logout') }}"
                method="POST">
                @csrf
                <button type="submit" class="dropdown-item">
                    <i class="bx bx-power-off me-2"></i>
                    <span class="align-middle">Log Out</span>
                </button>
            </form>
        </li>
    </ul>
</li>
