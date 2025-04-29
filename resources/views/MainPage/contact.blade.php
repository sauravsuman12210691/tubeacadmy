<?php
session_start();
if (!isset($_SESSION['role'])) {
    header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    {{-- <link rel="stylesheet" href="{{ asset('css/contact.css') }}"> --}}
    <title>TubeAcademy | Contact Us</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap');

    body {
        overflow-x: hidden;
        margin: 0;
        padding: 0;
        user-select: none;
    }

    .button {
        display: flex;
        justify-content: space-around;
        width: 50%;
        margin: auto;
        margin-top: 4cm;
    }

    .contact {
        font-family: 'Josefin Sans';
        color: black;
    }

    .contacting {
        display: flex;
        flex-direction: column;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        padding: 25px;
        border-radius: 10px;
        cursor: pointer;
        background-color: #edecec;
    }

    #elu {
        font-size: 4rem;
        text-align: center;
    }

    .textContact {
        font-size: 3rem;
        margin-top: 15px;
    }

    .reachUs {
        display: flex;
        flex-direction: column;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        padding: 25px;
        border-radius: 10px;
        cursor: pointer;
    }

    .textReach {
        font-size: 3rem;
        margin-top: 15px;
    }

    .formBox {
        display: flex;
        flex-direction: column;
        padding: 25px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        width: 70%;
        margin: auto;
        margin-top: 25px;
        border-radius: 10px;
    }

    .a1 {
        display: flex;
        text-align: center;
        font-size: 2.5rem;
        margin: auto;
    }

    .a2 {
        display: flex;
        margin: auto;
        font-weight: bold;
        font-size: 1.2rem;

        .a11 {
            font-weight: 400;
        }
    }

    .form {
        display: flex;
        flex-direction: column;
        font-size: 1.1em;
    }

    .label {
        margin-top: 15px;
    }

    .a3 {
        display: flex;
        width: 100%;
        gap: .5cm;
        margin-top: 1.5cm;
    }

    .a4 {
        display: flex;
        flex-direction: column;
        width: 50%;
    }

    .input {
        height: 1cm;
        border-radius: 5px;
        outline: none;
        padding-left: 15px;
        font-size: 20px;
        border: 2px solid #dddbdb;
        margin-top: 5px;
        font-family: 'Josefin Sans';
    }

    .textArea {
        height: 4cm;
        width: 98%;
        border-radius: 5px;
        outline: none;
        padding-top: 15px;
        padding-left: 15px;
        font-size: 20px;
        border: 2px solid #dddbdb;
        margin-top: 5px;
        resize: none;
    }

    /* Send Button CSS */

    /* From Uiverse.io by adamgiebl */
    button {
        font-family: inherit;
        font-size: 20px;
        background: royalblue;
        color: white;
        padding: 0.7em 1em;
        padding-left: 0.9em;
        display: flex;
        align-items: center;
        border: none;
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.2s;
        cursor: pointer;
        margin-top: 25px;
        width: 11%;
    }

    button span {
        display: block;
        margin-left: 0.3em;
        transition: all 0.3s ease-in-out;
    }

    button svg {
        display: block;
        transform-origin: center center;
        transition: transform 0.3s ease-in-out;
    }

    button:hover .svg-wrapper {
        animation: fly-1 0.6s ease-in-out infinite alternate;
    }

    button:hover svg {
        transform: translateX(1.2em) rotate(45deg) scale(1.1);
    }

    button:hover span {
        transform: translateX(5em);
    }

    button:active {
        transform: scale(0.95);
    }

    @keyframes fly-1 {
        from {
            transform: translateY(0.1em);
        }

        to {
            transform: translateY(-0.1em);
        }
    }


    .successful {
        display: none;
        border-radius: 0.375rem;
        background-color: #d1e7dd;
        color: #0a3622;
        font-family: sans-serif;
        font-size: 1.2rem;
        padding: 10px 5px;
        border: 1px solid #a3cfbb;
        margin-top: 5px;
    }

    .uns {
        display: flex;
        flex-direction: column;
    }

    .unsuccessful {
        display: none;
        border-radius: 0.375rem;
        background-color: #f8d7da;
        color: #58151c;
        font-family: sans-serif;
        font-size: 1.2rem;
        padding: 10px 5px;
        border: 1px solid #f1aeb5;
        margin-top: 5px;
    }

    .reachBox {
        display: none;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        margin: auto;
        margin-top: 24px;
        padding: 25px;
        width: fit-content;
        height: fit-content;
        border-radius: 15px;
        justify-content: space-around;
    }

    .wrapper {
        display: inline-flex;
        list-style: none;
        width: 100%;
        padding-top: 40px;
        font-family: "Poppins", sans-serif;
        justify-content: center;
    }

    .wrapper .icon {
        position: relative;
        background: #fff;
        border-radius: 50%;
        margin: 10px;
        width: 100px;
        height: 100px;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .wrapper .tooltip {
        position: absolute;
        top: 0;
        font-size: 14px;
        background: #fff;
        color: #fff;
        padding: 5px 8px;
        border-radius: 5px;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
        opacity: 0;
        pointer-events: none;
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .wrapper .tooltip::before {
        position: absolute;
        content: "";
        height: 8px;
        width: 8px;
        background: #fff;
        bottom: -3px;
        left: 50%;
        transform: translate(-50%) rotate(45deg);
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .wrapper .icon {
        color: black;
        font-size: 1.2rem;
    }

    .wrapper .icon:hover .tooltip {
        top: -45px;
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
    }

    .wrapper .icon:hover span,
    .wrapper .icon:hover .tooltip {
        text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
    }

    .wrapper .facebook:hover,
    .wrapper .facebook:hover .tooltip,
    .wrapper .facebook:hover .tooltip::before {
        background: #1877f2;
        color: #fff;
    }

    .wrapper .twitter:hover,
    .wrapper .twitter:hover .tooltip,
    .wrapper .twitter:hover .tooltip::before {
        background: #1da1f2;
        color: #fff;
    }

    .wrapper .instagram:hover,
    .wrapper .instagram:hover .tooltip,
    .wrapper .instagram:hover .tooltip::before {
        background: #e4405f;
        color: #fff;
    }

    @media (max-width: 1200px) {
        .button {
            width: 100%;
        }
    }
</style>

<body>
    @include('navbar')
    <div>
        <div class="contact">
            <div class="button">
                <div class="contacting" onclick="showContacting()">
                    <span class="material-symbols-outlined" id="elu">
                        connect_without_contact
                    </span>
                    <div class="textContact">Contact Us</div>
                </div>
                <div class="reachUs" onclick="showReachBox()">
                    <span class="material-symbols-outlined" id="elu">
                        rocket_launch
                    </span>
                    <div class="textReach">Reach Us</div>
                </div>
            </div>
            <div class="formBox">
                <div class="a1">Contact Us</div>
                <div class="a2">
                    Customer Care: <span class="a11">9113189281</span>
                </div>
                <form class="form" method="post">
                    @csrf
                    <input type="text" name="Reg_ID" hidden value="{{ $_SESSION['Reg_ID'] }}">
                    <div class="a3">
                        <div class="a4">
                            <label for="name" class="label">Name</label>
                            <input type="text" name="fullname" required class="input">
                        </div>
                        <div class="a4">
                            <label for="email" class="label">Email</label>
                            <input type="email" value="" name="email" class="input" required>
                        </div>
                    </div>
                    <label for="message" class="label">Message</label>
                    <textarea value="" name="message" required class="textArea"></textarea>

                    <button>
                        <div class="svg-wrapper-1">
                            <div class="svg-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path fill="currentColor"
                                        d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <span>Send</span>
                    </button>

                </form>
                <div class="uns">
                    @error('fullname')
                        <div class="unsuccessful">{{ $message }}</div>
                    @enderror
                    @error('email')
                        <div class="unsuccessful">{{ $message }}</div>
                    @enderror
                    @error('message')
                        <div class="unsuccessful">{{ $message }}</div>
                    @enderror
                </div>
                @if (session('sucess'))
                    <div class="successful">{{ session('sucess') }}</div>
                @endif
                <div class="successful"></div>
            </div>
            <div class="reachBox">
                <ul class="wrapper">
                    <a href="#" class="icon facebook">
                        <span class="tooltip">Facebook</span>
                        <svg viewBox="0 0 320 512" height="1.2em" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            class="facebook">
                            <path
                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                            </path>
                        </svg>
                    </a>
                    <a href="#" class="icon facebook">
                        <span class="tooltip">Twitter</span>
                        <svg height="1.8em" fill="currentColor" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"
                            class="twitter">
                            <path
                                d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429">
                            </path>
                        </svg>
                    </a>
                    <a href="#" class="icon instagram">
                        <span class="tooltip">Instagram</span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" fill="currentColor" class="instagram"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                            </path>
                        </svg>
                    </a>
                </ul>
            </div>
        </div>

    </div>

    {{-- <script src="js/contact.js"></script> --}}

    <script>
        var contacting = document.querySelector(".contacting")
        var reachUs = document.querySelector(".reachUs")
        var formBox = document.querySelector(".formBox")
        var reachBox = document.querySelector(".reachBox")

        function showContacting() {
            contacting.style.background = "#edecec"
            reachUs.style.background = "white"
            formBox.style.display = "flex"
            reachBox.style.display = "none"
        }

        function showReachBox() {
            reachUs.style.background = "#edecec"
            contacting.style.background = "white"
            formBox.style.display = "none"
            reachBox.style.display = "flex"
        }
    </script>
</body>

</html>
