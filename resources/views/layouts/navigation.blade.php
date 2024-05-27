
<nav>
    <div>
        <div>
            <div>
                <!-- Logo -->
                <div>
                    {{-- <a href="{{ route('dashboard') }}">
                        <img src="path/to/logo.png" alt="Logo" class="h-9 w-auto text-gray-800">
                    </a> --}}
                </div>

                <!-- Navigation Links -->
                <div>
                    <ul>
                        <li>
                            <a href="{{ route('dashboard') }}" class="text-gray-800">Dashboard</a>
                          </li>
                          <li>
                            <a href="{{ route('books.index') }}" class="text-gray-800">Books</a>
                          </li>
                          <li>
                            <a href="{{ route('members.index') }}" class="text-gray-800">Members</a>
                          </li>
                          <li>
                            <a href="{{ route('borrowings.index') }}" class="text-gray-800">Borrowings</a>
                          </li>
                          <li>
                            <a href="{{ route('users.index') }}" class="text-gray-800">Users</a>
                          </li>
                          <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit">Log Out</button>
                                </form>
                            </li>



                    </ul>
                </div>
            </div>

            <!-- User Profile Dropdown -->
            <div>
                {{-- <button>
                    <span>{{ Auth::user()->name }}</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </button> --}}

                <!-- User Profile Dropdown Content -->
                <div>
                    <ul>
                        {{-- <li>
                            <a href="{{ route('profile.edit') }}">Profile</a>
                        </li> --}}
                        {{-- <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit">Log Out</button>
                            </form>
                        </li> --}}
                    </ul>
                </div>
            </div>

            <!-- Hamburger Menu -->
            <div>
                {{-- <button>
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button> --}}
            </div>
        </div>
    </div>
</nav>
