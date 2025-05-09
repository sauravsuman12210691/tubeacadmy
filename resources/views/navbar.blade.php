<?php
$homeRouting = '';
$profileRouting = '';
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'admin') {
        $homeRouting = '/admin/home';
        $profileRouting = '/admin/profile';
    } elseif ($_SESSION['role'] == 'Teacher') {
        $homeRouting = '/teacher/home';
        $profileRouting = '/teacher/profile';
    } elseif ($_SESSION['role'] == 'Student') {
        $homeRouting = '/student/home';
        $profileRouting = '/student/profile';
    }
}
?>
{{-- <link rel="stylesheet" href="{{asset('css/navbar.css')}}"> --}}

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap');

    li {
        list-style: none;
    }

    a {
        text-decoration: none;
    }

    .header {
        display: flex;
        width: 100%;
        height: 2cm;
        justify-content: space-between;
        padding: 10px;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        width: 100%;
        align-items: center;
        padding: 1.5rem 1.5rem;
    }

    .hamburger {
        display: none;
    }

    .bar {
        display: block;
        width: 25px;
        height: 3px;
        margin: 5px auto;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        /* background-color: #101010; */
        background-color: #fff;
    }

    .navMenu {
        display: flex;
        align-items: center;
    }

    .navItem {
        margin-left: 25px;
    }

    .navLink {
        /* font-size: 1.6rem; */
        font-size: 1rem;
        font-weight: 400;
        color: black;
    }

    .navLink:hover {
        color: #482ff7;
    }

    .logo {
        height: 2cm;
        width: 2cm;
    }

    @media only screen and (max-width: 768px) {
        .navMenu {
            position: fixed;
            left: -100%;
            top: 5rem;
            flex-direction: column;
            /* background-color: #fff; */
            background-color: #222;
            width: 100%;
            border-radius: 10px;
            text-align: center;
            transition: 0.3s;
            box-shadow:
                0 10px 27px rgba(0, 0, 0, 0.05);
        }

        .navLink {
            color: #fff;
        }

        .navMenu.active {
            left: 0;
            display: flex;
            flex-direction: column;
            z-index: 10;
        }

        .navItem {
            margin: 2.5rem 0;
        }

        .hamburger {
            display: block;
            cursor: pointer;
        }

        .hamburger.active .bar:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .hamburger.active .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

    }
</style>
<div class="navbarr">
    <header class="header">
        <nav class="navbar">
            <a href='{{ $homeRouting }}' class="navLogo">
                <img src="{{ asset('Images/Logo.png') }}" alt="Logo" class="logo" />
            </a>
            <ul class="navMenu">
                <li class="navItem">
                    <a href="{{ $homeRouting }}" class="navLink">Home</a>
                </li>
                <li class="navItem">
                    <a href="/askai" class="navLink">Ask AI</a>
                </li>
                <li class="navItem">
                    <a href="/contact" class="navLink">Contact Us</a>
                </li>
                <li class="navItem">
                    <a href='{{ $profileRouting }}' class="navLink">Profile</a>
                </li>
            </ul>
        </nav>
    </header>
</div>
