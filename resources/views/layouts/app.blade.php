<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cardiology System</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            background-color: #cbd5e0;
        }

        body {
            margin: 0;
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .900rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
            background-color: #cbd5e0;
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand font-semibold">
                    Cardiology System
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @guest
                        <li class="nav-item">
                            <a class="{{ request()->is('/') ? 'nav-link active text-sm font-semibold' : 'nav-link text-sm font-semibold'}}" href="{{ url('/') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ request()->is('aboutus') ? 'nav-link active text-sm font-semibold' : 'nav-link text-sm font-semibold'}}" href="{{ url('aboutus') }}">{{ __('About us') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ request()->is('contactus') ? 'nav-link active text-sm font-semibold' : 'nav-link text-sm font-semibold'}}" href="{{ url('/contactus') }}">{{ __('Contact us') }}</a>
                        </li>

                        @else
                        @if(Auth::check() && Auth::user()->role=='admin')
                        <li class="nav-item">
                            <a class="{{ request()->is('admin/dashboard') ? 'nav-link active text-sm font-semibold' : 'nav-link text-sm font-semibold'}}" href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="{{ request()->is('admin/patients') ? 'nav-link active text-sm font-semibold' : 'nav-link text-sm font-semibold'}}" href="{{ route('patients.index') }}">{{ __('Patient') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ request()->is('admin/clinic_dates') ? 'nav-link active text-sm font-semibold' : 'nav-link text-sm font-semibold'}}" href="{{ route('clinic_dates.index') }}">{{ __('ClinicDate') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ request()->is('admin/clinic_visits') ? 'nav-link active text-sm font-semibold' : 'nav-link text-sm font-semibold'}}" href="{{ route('clinic_visits.index') }}">{{ __('ClinicVisit') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ request()->is('admin/emergencies') ? 'nav-link active text-sm font-semibold' : 'nav-link text-sm font-semibold'}}" href="{{ route('emergencies.index') }}">{{ __('InCaseofEmergency') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ request()->is('admin/inward_admission_summaries') ? 'nav-link active text-sm font-semibold' : 'nav-link text-sm font-semibold'}}" href="{{ route('inward_admission_summaries.index') }}">{{ __('InwardAdmissionSummaries') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ request()->is('admin/investigations') ? 'nav-link active text-sm font-semibold' : 'nav-link text-sm font-semibold'}}" href="{{ route('investigations.index') }}">{{ __('Investigations') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ request()->is('admin/treatment_drugs') ? 'nav-link active text-sm font-semibold' : 'nav-link text-sm font-semibold'}}" href="{{ route('treatment_drugs.index') }}">{{ __('TreatmentDrugs') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ request()->is('admin/test_appointments') ? 'nav-link active text-sm font-semibold' : 'nav-link text-sm font-semibold'}}" href="{{ route('test_appointments.index') }}">{{ __('TestAppointments') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ request()->is('admin/ett_appointments') ? 'nav-link active text-sm font-semibold' : 'nav-link text-sm font-semibold'}}" href="{{ route('ett_appointments.index') }}">{{ __('ETTAppointments') }}</a>
                        </li> -->
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Patient</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('patients.index')}}">Patient</a></li>
                                    <li><a class="dropdown-item" href="{{route('clinic_dates.index')}}">Clinic Date</a></li>
                                    <li><a class="dropdown-item" href="{{route('clinic_visits.index')}}">Clinic Visit</a></li>
                                    <li><a class="dropdown-item" href="{{route('emergencies.index')}}">In Case of Emergency</a></li>
                                </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Admission</a>
                                <ul class="dropdown-menu">
                                    <!-- <li><a class="dropdown-item" href="#">Request for admission</a></li> -->
                                    <li><a class="dropdown-item" href="{{route('inward_admission_summaries.index')}}">Inward Admission Summary</a></li>
                                    <li><a class="dropdown-item" href="{{route('investigations.index')}}">Investigations</a></li>
                                    <li><a class="dropdown-item" href="{{route('treatment_drugs.index')}}">Treatment Drugs</a></li>
                                </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Appointment</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('test_appointments.index')}}">Test Appointments</a></li>
                                    <li><a class="dropdown-item" href="{{route('ett_appointments.index')}}">ETT Appointments</a></li>
                                </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Permanent Pace Maker</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('permanent_pace_makers.index')}}">Permanent Pace Maker</a></li>
                                    <li><a class="dropdown-item" href="{{route('pace_makers.index')}}">Pace Maker</a></li>
                                    <li><a class="dropdown-item" href="{{route('procedures.index')}}">Procedure</a></li>
                                </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Special Cardiac Investigations</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">2D Echo</a></li>
                                    <li><a class="dropdown-item" href="#">TOE</a></li>
                                    <li><a class="dropdown-item" href="#">Stress Echo</a></li>
                                    <li><a class="dropdown-item" href="#">Exercise Treadmil Test</a></li>
                                    <li><a class="dropdown-item" href="#">Holter Monitoring</a></li>
                                    <li><a class="dropdown-item" href="#">Cardiac Catheterization Report</a></li>
                                </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Referrals</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('coronary_angiogram_admissions.index')}}">Coronary Angiogram Admission</a></li>
                                    <li><a class="dropdown-item" href="{{route('cardio_thoracic_clinics.index')}}">Cardiac Thoracic Clinic</a></li>
                                </ul>
                        </li>
                        <li class="nav-item">
                            <a class="{{ request()->is('admin/users') ? 'nav-link active text-sm font-semibold' : 'nav-link text-sm font-semibold'}}" href="{{ route('users.index') }}">{{ __('Users') }}</a>
                        </li>
                        @endif

                        @if(Auth::check() && Auth::user()->role=='doctor')
                        <li class="nav-item">
                            <a class="{{ request()->is('doctor/dashboard') ? 'nav-link active text-sm font-semibold' : 'nav-link text-sm font-semibold'}}" href="{{ route('doctor.dashboard') }}">{{ __('Dashboard') }}</a>
                        </li>
                        @endif
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="{{ request()->is('login') ? 'nav-link active text-sm font-semibold' : 'nav-link text-sm font-semibold'}}" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="{{ request()->is('register') ? 'nav-link active text-sm font-semibold' : 'nav-link text-sm font-semibold'}}" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link text-sm font-semibold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Footer -->
    <footer class="bg-dark text-center text-white fixed-bottom">
        <div class="text-center p-3">
            Copyright &copy; Cardiology System
        </div>
    </footer>
    <!-- Footer -->
</body>

</html>