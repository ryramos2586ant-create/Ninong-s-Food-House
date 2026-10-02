<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Create Account | Ninong's Food</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    >

    <style>

        /* =====================================================
           RESET
        ===================================================== */

        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            min-height: 100%;
        }

        body {
            background: #2d1813;
            color: #fff4cf;
            font-family: "Playfair Display", Georgia, serif;
            overflow-x: hidden;
        }

        a {
            color: inherit;
        }


        /* =====================================================
           PAGE
        ===================================================== */

        .register-page {

            position: relative;

            min-height: 100vh;

            padding:
                125px 20px 80px;

            display: flex;

            align-items: center;
            justify-content: center;

            overflow: hidden;

        }


        /* =====================================================
           BACKGROUND
        ===================================================== */

        .register-background {

            position: fixed;

            inset: 0;

            z-index: 0;

            background-image:
                url("images/food-1.jpg");

            background-size: cover;

            background-position: center;

            transform: scale(1.04);

        }


        .register-background::after {

            content: "";

            position: absolute;

            inset: 0;

            background:

                linear-gradient(
                    90deg,
                    rgba(45,24,19,.97) 0%,
                    rgba(45,24,19,.78) 48%,
                    rgba(45,24,19,.94) 100%
                ),

                linear-gradient(
                    0deg,
                    rgba(45,24,19,.96),
                    rgba(45,24,19,.60)
                );

        }


        /* =====================================================
           NAVIGATION
        ===================================================== */

        .register-header {

            position: absolute;

            top: 22px;
            left: 50%;

            width:
                min(1120px, calc(100% - 50px));

            height: 80px;

            transform:
                translateX(-50%);

            z-index: 50;

        }


        /* =====================================================
           LOGO
        ===================================================== */

        .register-logo {

            position: absolute;

            left: 0;
            top: -8px;

            width: 92px;
            height: 92px;

            display: flex;

            align-items: center;
            justify-content: center;

        }


        .register-logo-ring {

            width: 82px;
            height: 82px;

            padding: 4px;

            border-radius: 50%;

            background:
                linear-gradient(
                    145deg,
                    #fff4cf,
                    #d8c58d
                );

            box-shadow:

                0 0 10px
                rgba(255,244,207,.65),

                0 0 28px
                rgba(255,233,166,.20);

        }


        .register-logo-inner {

            width: 100%;
            height: 100%;

            border-radius: 50%;

            overflow: hidden;

            background: #2d1813;

        }


        .register-logo-inner img {

            display: block;

            width: 100%;
            height: 100%;

            object-fit: contain;

        }


        /* =====================================================
           NAV BAR
        ===================================================== */

        .register-nav {

            position: absolute;

            top: 8px;
            left: 50%;

            transform:
                translateX(-50%);

            height: 52px;

            min-width: 410px;

            padding:
                0 38px;

            display: flex;

            align-items: center;
            justify-content: center;

            gap: 42px;

            border:
                1.5px solid #fff4cf;

            border-radius: 10px;

            background:
                rgba(155,96,69,.94);

            box-shadow:

                0 10px 30px
                rgba(0,0,0,.30),

                0 0 20px
                rgba(255,244,207,.08);

        }


        .register-nav a {

            position: relative;

            color: #fff4cf;

            text-decoration: none;

            font-size: 15px;

            font-weight: 700;

            transition:
                color .25s ease,
                transform .25s ease;

        }


        .register-nav a::after {

            content: "";

            position: absolute;

            left: 50%;
            bottom: -7px;

            width: 0;
            height: 2px;

            transform:
                translateX(-50%);

            background: #fff4cf;

            transition:
                width .25s ease;

        }


        .register-nav a:hover {

            color: #ffffff;

            transform:
                translateY(-2px);

        }


        .register-nav a:hover::after {

            width: 100%;

        }


        .register-nav a.active::after {

            width: 100%;

        }


        /* =====================================================
           SIGN IN BUTTON
        ===================================================== */

        .register-sign-in {

            position: absolute;

            top: 12px;
            right: 0;

            width: 112px;
            height: 43px;

            display: flex;

            align-items: center;
            justify-content: center;

            border:
                1.5px solid #fff4cf;

            border-radius: 8px;

            background:
                rgba(45,24,19,.72);

            color: #fff4cf;

            text-decoration: none;

            font-size: 14px;

            font-style: italic;

            font-weight: 700;

            transition:
                .25s ease;

        }


        .register-sign-in.active {

            background: #9b6045;

            box-shadow:
                0 0 16px
                rgba(255,244,207,.25);

        }


        .register-sign-in:hover {

            background: #9b6045;

            transform:
                translateY(-2px);

            box-shadow:
                0 0 16px
                rgba(255,244,207,.25);

        }


        /* =====================================================
           ACCOUNT CARD
        ===================================================== */

        .account-card {

            position: relative;

            z-index: 10;

            width:
                min(760px, 94vw);

            padding:
                45px 50px 40px;

            border:
                2px solid #fff4cf;

            border-radius: 28px;

            background:

                linear-gradient(
                    145deg,
                    rgba(73,40,30,.97),
                    rgba(45,24,19,.96)
                );

            box-shadow:

                0 30px 90px
                rgba(0,0,0,.58),

                0 0 35px
                rgba(255,233,166,.14),

                inset 0 1px 0
                rgba(255,244,207,.08);

            backdrop-filter:
                blur(18px);

            animation:
                cardIn .65s
                cubic-bezier(.2,.8,.2,1);

        }


        @keyframes cardIn {

            from {
                opacity: 0;
                transform:
                    translateY(35px)
                    scale(.97);
            }

            to {
                opacity: 1;
                transform:
                    translateY(0)
                    scale(1);
            }

        }


        /* =====================================================
           CARD HEADER
        ===================================================== */

        .account-heading {

            text-align: center;

        }


        .account-eyebrow {

            display: block;

            margin-bottom: 8px;

            color: #d8c58d;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 4px;

        }


        .account-heading h1 {

            margin: 0;

            color: #fff4cf;

            font-family:
                "DM Serif Display",
                Georgia,
                serif;

            font-size:
                clamp(40px, 5vw, 58px);

            font-style: italic;

            line-height: 1.05;

            text-shadow:

                0 0 8px
                rgba(255,244,207,.50),

                0 0 25px
                rgba(255,233,166,.18);

        }


        .account-heading p {

            max-width: 520px;

            margin:
                14px auto 0;

            color:
                rgba(255,248,223,.70);

            font-size: 14px;

            line-height: 1.5;

        }


        /* =====================================================
           FORM
        ===================================================== */

        #registerForm {

            margin-top: 30px;

        }


        .form-grid {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 18px 20px;

        }


        .form-field.full {

            grid-column:
                1 / -1;

        }


        .form-field label {

            display: block;

            margin-bottom: 7px;

            color: #fff4cf;

            font-size: 13px;

            font-weight: 700;

        }


        .required {
            color: #fff4cf;
        }


        .optional {

            color: #cdbb86;

            font-size: 10px;

            font-style: italic;

            font-weight: 400;

        }


        /* =====================================================
           INPUT
        ===================================================== */

        .form-input {

            width: 100%;

            height: 49px;

            padding:
                0 14px;

            outline: none;

            border:
                1px solid
                rgba(255,244,207,.30);

            border-radius: 9px;

            background:
                rgba(25,12,9,.65);

            color: #fff4cf;

            font-family:
                "Playfair Display",
                Georgia,
                serif;

            font-size: 13px;

            transition:
                .25s ease;

        }


        .form-input::placeholder {

            color:
                rgba(255,244,207,.34);

        }


        .form-input:hover {

            border-color:
                rgba(255,244,207,.55);

        }


        .form-input:focus {

            border-color:
                #fff4cf;

            background:
                rgba(25,12,9,.82);

            box-shadow:

                0 0 0 3px
                rgba(255,244,207,.06),

                0 0 18px
                rgba(255,244,207,.12);

        }


        /* =====================================================
           PASSWORD
        ===================================================== */

        .password-wrapper {

            position: relative;

        }


        .password-wrapper .form-input {

            padding-right: 65px;

        }


        .password-toggle {

            position: absolute;

            top: 50%;
            right: 12px;

            transform:
                translateY(-50%);

            border: 0;

            padding: 3px;

            background: transparent;

            color: #d8c58d;

            font-family:
                "Playfair Display",
                Georgia,
                serif;

            font-size: 10px;

            font-weight: 700;

            cursor: pointer;

        }


        .password-toggle:hover {

            color: #fff4cf;

        }


        .password-hint {

            display: block;

            margin-top: 5px;

            color:
                rgba(255,244,207,.38);

            font-size: 9px;

        }


        /* =====================================================
           ERRORS
        ===================================================== */

        .error-message {

            display: block;

            min-height: 14px;

            margin-top: 4px;

            color: #e4a18b;

            font-size: 9px;

        }


        .invalid .form-input {

            border-color:
                #d9866c;

        }


        /* =====================================================
           TERMS
        ===================================================== */

        .terms {

            display: flex;

            align-items: flex-start;

            gap: 9px;

            margin-top: 8px;

            color:
                rgba(255,244,207,.62);

            font-size: 10px;

            line-height: 1.5;

        }


        .terms input {

            width: 15px;
            height: 15px;

            margin: 1px 0 0;

            flex-shrink: 0;

            accent-color: #b97857;

        }


        .terms a {

            color: #fff4cf;

        }


        /* =====================================================
           BUTTON
        ===================================================== */

        .create-button {

            position: relative;

            width: 100%;
            height: 54px;

            margin-top: 13px;

            border:
                2px solid #fff4cf;

            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    #b97857,
                    #9b6045
                );

            color: #fff4cf;

            font-family:
                "Playfair Display",
                Georgia,
                serif;

            font-size: 15px;

            font-weight: 700;

            cursor: pointer;

            box-shadow:
                0 8px 22px
                rgba(0,0,0,.25);

            transition:
                .25s ease;

        }


        .create-button:hover {

            transform:
                translateY(-2px);

            box-shadow:

                0 12px 30px
                rgba(0,0,0,.35),

                0 0 18px
                rgba(255,244,207,.17);

        }


        .create-button span {

            position: absolute;

            right: 20px;

            font-size: 20px;

            transition:
                transform .25s ease;

        }


        .create-button:hover span {

            transform:
                translateX(5px);

        }


        /* =====================================================
           SUCCESS
        ===================================================== */

        .success-message {

            display: none;

            margin-top: 12px;

            padding: 12px;

            border:
                1px solid
                rgba(255,244,207,.28);

            border-radius: 9px;

            background:
                rgba(216,197,141,.06);

            text-align: center;

        }


        .success-message.show {

            display: block;

        }


        .success-message strong {

            display: block;

            color: #fff4cf;

            font-size: 13px;

        }


        .success-message small {

            display: block;

            margin-top: 3px;

            color: #d8c58d;

            font-size: 10px;

        }


        /* =====================================================
           ACCOUNT FOOT LINKS
        ===================================================== */

        .account-login {

            margin-top: 18px;

            text-align: center;

            color:
                rgba(255,244,207,.52);

            font-size: 11px;

        }


        .account-login a {

            margin-left: 4px;

            color: #fff4cf;

            font-weight: 700;

        }


        .back-home {

            display: block;

            width: fit-content;

            margin:
                13px auto 0;

            color: #d8c58d;

            font-size: 10px;

            text-decoration: none;

            transition:
                .2s ease;

        }


        .back-home:hover {

            color: #fff4cf;

        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .site-footer {

            position: relative;

            z-index: 20;

            padding:
                26px 20px 24px;

            border-top:
                1px solid
                rgba(255,244,207,.15);

            background:
                #24120e;

            text-align: center;

        }


        .footer-brand {

            color: #fff4cf;

            font-family:
                "DM Serif Display",
                Georgia,
                serif;

            font-size: 19px;

        }


        .footer-links {

            display: flex;

            justify-content: center;

            flex-wrap: wrap;

            gap: 20px;

            margin-top: 10px;

        }


        .footer-links a {

            color:
                rgba(255,244,207,.62);

            font-size: 10px;

            text-decoration: none;

            transition:
                color .2s ease;

        }


        .footer-links a:hover {

            color: #fff4cf;

        }


        .site-footer p {

            margin:
                10px 0 0;

            color:
                rgba(255,244,207,.55);

            font-size: 10px;

        }


        .footer-note {

            display: block;

            margin-top: 5px;

            color:
                rgba(255,244,207,.36);

            font-size: 9px;

        }


        /* =====================================================
           TABLET
        ===================================================== */

        @media (max-width: 850px) {

            .register-header {

                width:
                    calc(100% - 30px);

            }

            .register-nav {

                min-width: 350px;

                gap: 28px;

            }

            .register-sign-in {

                width: 95px;

            }

            .account-card {

                width:
                    min(720px, 94vw);

                padding:
                    40px 35px 35px;

            }

        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 650px) {

            .register-header {

                top: 12px;

                height: 55px;

                width:
                    calc(100% - 20px);

            }


            .register-logo {

                display: none;

            }


            .register-nav {

                position: absolute;

                left: 50%;

                top: 0;

                min-width: 0;

                width:
                    min(320px, 90vw);

                height: 48px;

                padding:
                    0 18px;

                gap: 22px;

            }


            .register-nav a {

                font-size: 12px;

            }


            .register-sign-in {

                display: none;

            }


            .register-page {

                padding:
                    85px 12px 55px;

            }


            .account-card {

                width: 100%;

                padding:
                    30px 19px;

                border-radius: 21px;

            }


            .account-heading h1 {

                font-size: 37px;

            }


            .account-heading p {

                font-size: 12px;

            }


            .form-grid {

                grid-template-columns: 1fr;

                gap: 13px;

            }


            .form-field.full {

                grid-column: auto;

            }


            .footer-links {

                gap: 12px;

            }

        }

    </style>

</head>


<body>


    <!-- =====================================================
         BACKGROUND
    ====================================================== -->

    <div class="register-background"></div>


    <!-- =====================================================
         NAVIGATION
    ====================================================== -->

    <header class="register-header">


        <!-- LOGO
             THIS IS NOT A BUTTON.
             IT DOES NOT GO HOME.
        -->

        <div class="register-logo">

            <div class="register-logo-ring">

                <div class="register-logo-inner">

                    <img
                        src="images/NF New Logo.png"
                        alt="Ninong's Food"
                    >

                </div>

            </div>

        </div>


        <!-- NAVIGATION -->

        <nav class="register-nav">

            <a
                href="index.php"
            >
                Home
            </a>

            <a href="menu.php">
                Menu
            </a>

            <a href="features.php">
                Features
            </a>

        </nav>


        <!-- SIGN IN -->

        <a
            href="register.php"
            class="register-sign-in active"
        >
            Sign In
        </a>

    </header>



    <!-- =====================================================
         MAIN ACCOUNT AREA
    ====================================================== -->

    <main class="register-page">


        <section class="account-card">


            <!-- HEADING -->

            <div class="account-heading">

                <span class="account-eyebrow">
                    NINONG'S FOOD™
                </span>

                <h1>
                    Create Your Account
                </h1>

                <p>
                    Start with your details and join us
                    for something delicious.
                </p>

            </div>



            <!-- FORM -->

            <form
                id="registerForm"
                novalidate
            >


                <div class="form-grid">


                    <!-- NAME -->

                    <div
                        class="form-field full"
                        id="nameField"
                    >

                        <label for="registerName">
                            Create a Name
                            <span class="required">*</span>
                        </label>

                        <input
                            class="form-input"
                            type="text"
                            id="registerName"
                            placeholder="Enter your name"
                            autocomplete="name"
                            required
                        >

                        <small
                            class="error-message"
                            id="nameError"
                        ></small>

                    </div>



                    <!-- PASSWORD -->

                    <div
                        class="form-field"
                        id="passwordField"
                    >

                        <label for="registerPassword">
                            Create a Password
                            <span class="required">*</span>
                        </label>

                        <div class="password-wrapper">

                            <input
                                class="form-input"
                                type="password"
                                id="registerPassword"
                                placeholder="At least 8 characters"
                                autocomplete="new-password"
                                required
                            >

                            <button
                                type="button"
                                class="password-toggle"
                                data-target="registerPassword"
                            >
                                Show
                            </button>

                        </div>

                        <small class="password-hint">
                            Minimum 8 characters.
                        </small>

                        <small
                            class="error-message"
                            id="passwordError"
                        ></small>

                    </div>



                    <!-- CONFIRM -->

                    <div
                        class="form-field"
                        id="confirmField"
                    >

                        <label for="registerConfirm">
                            Confirm Password
                            <span class="required">*</span>
                        </label>

                        <div class="password-wrapper">

                            <input
                                class="form-input"
                                type="password"
                                id="registerConfirm"
                                placeholder="Repeat your password"
                                autocomplete="new-password"
                                required
                            >

                            <button
                                type="button"
                                class="password-toggle"
                                data-target="registerConfirm"
                            >
                                Show
                            </button>

                        </div>

                        <small
                            class="error-message"
                            id="confirmError"
                        ></small>

                    </div>



                    <!-- EMAIL -->

                    <div
                        class="form-field"
                        id="emailField"
                    >

                        <label for="registerEmail">

                            Email

                            <span class="optional">
                                Optional
                            </span>

                        </label>

                        <input
                            class="form-input"
                            type="email"
                            id="registerEmail"
                            placeholder="you@example.com"
                            autocomplete="email"
                        >

                        <small
                            class="error-message"
                            id="emailError"
                        ></small>

                    </div>



                    <!-- NUMBER -->

                    <div
                        class="form-field"
                        id="numberField"
                    >

                        <label for="registerNumber">

                            Mobile Number

                            <span class="required">
                                *
                            </span>

                        </label>

                        <input
                            class="form-input"
                            type="tel"
                            id="registerNumber"
                            placeholder="09XX XXX XXXX"
                            autocomplete="tel"
                            required
                        >

                        <small
                            class="error-message"
                            id="numberError"
                        ></small>

                    </div>


                </div>



                <!-- TERMS -->

                <label class="terms">

                    <input
                        type="checkbox"
                        id="terms"
                    >

                    <span>

                        I agree to the
                        <a href="#">
                            Terms
                        </a>
                        and
                        <a href="#">
                            Privacy Policy
                        </a>.

                    </span>

                </label>

                <small
                    class="error-message"
                    id="termsError"
                ></small>



                <!-- CREATE -->

                <button
                    type="submit"
                    class="create-button"
                >

                    Create Account

                    <span>
                        →
                    </span>

                </button>



                <!-- SUCCESS -->

                <div
                    class="success-message"
                    id="successMessage"
                >

                    <strong>
                        You're all set!
                    </strong>

                    <small>
                        Your account details passed the registration check.
                    </small>

                </div>



                <!-- ACCOUNT -->

                <div class="account-login">

                    Already have an account?

                    <a href="register.php">
                        Sign In
                    </a>

                </div>


                <a
                    href="index.php"
                    class="back-home"
                >
                    ← Back to Home
                </a>


            </form>

        </section>

    </main>



    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <footer class="site-footer">

        <div class="footer-brand">
            Ninong's Food™
        </div>

        <div class="footer-links">

            <a href="index.php">
                Home
            </a>

            <a href="menu.php">
                Menu
            </a>

            <a href="features.php">
                Features
            </a>

            <a href="#">
                Contact
            </a>

            <a href="#">
                Privacy
            </a>

            <a href="#">
                Terms
            </a>

        </div>

        <p>
            © 2026 Ninong's Food™. All Rights Reserved.
        </p>

        <span class="footer-note">
            Made with care, tradition, and good food.
        </span>

    </footer>



    <!-- =====================================================
         REGISTER JAVASCRIPT
    ====================================================== -->

    <script>

        /* =====================================================
           SHOW / HIDE PASSWORD
        ===================================================== */

        document
            .querySelectorAll(".password-toggle")
            .forEach(button => {

                button.addEventListener(
                    "click",
                    () => {

                        const input =
                            document.getElementById(
                                button.dataset.target
                            );

                        if (
                            input.type === "password"
                        ) {

                            input.type = "text";

                            button.textContent =
                                "Hide";

                        } else {

                            input.type =
                                "password";

                            button.textContent =
                                "Show";

                        }

                    }
                );

            });



        /* =====================================================
           FORM
        ===================================================== */

        const form =
            document.getElementById(
                "registerForm"
            );


        function clearErrors() {

            document
                .querySelectorAll(
                    ".error-message"
                )
                .forEach(error => {

                    error.textContent = "";

                });


            document
                .querySelectorAll(
                    ".invalid"
                )
                .forEach(field => {

                    field.classList.remove(
                        "invalid"
                    );

                });

        }


        function error(
            fieldId,
            errorId,
            message
        ) {

            const field =
                document.getElementById(
                    fieldId
                );

            const messageElement =
                document.getElementById(
                    errorId
                );

            if (field) {

                field.classList.add(
                    "invalid"
                );

            }

            if (messageElement) {

                messageElement.textContent =
                    message;

            }

        }


        form.addEventListener(
            "submit",
            event => {

                event.preventDefault();

                clearErrors();


                const name =
                    document.getElementById(
                        "registerName"
                    );

                const password =
                    document.getElementById(
                        "registerPassword"
                    );

                const confirm =
                    document.getElementById(
                        "registerConfirm"
                    );

                const email =
                    document.getElementById(
                        "registerEmail"
                    );

                const number =
                    document.getElementById(
                        "registerNumber"
                    );

                const terms =
                    document.getElementById(
                        "terms"
                    );


                let valid = true;



                /* NAME */

                if (
                    name.value.trim().length < 2
                ) {

                    error(
                        "nameField",
                        "nameError",
                        "Please enter your name."
                    );

                    valid = false;

                }



                /* PASSWORD */

                if (
                    password.value.length < 8
                ) {

                    error(
                        "passwordField",
                        "passwordError",
                        "Password must be at least 8 characters."
                    );

                    valid = false;

                }



                /* CONFIRM */

                if (
                    confirm.value !==
                    password.value
                ) {

                    error(
                        "confirmField",
                        "confirmError",
                        "Passwords do not match."
                    );

                    valid = false;

                }



                /* EMAIL */

                if (
                    email.value.trim() !== ""
                ) {

                    const emailPattern =
                        /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    if (
                        !emailPattern.test(
                            email.value.trim()
                        )
                    ) {

                        error(
                            "emailField",
                            "emailError",
                            "Please enter a valid email."
                        );

                        valid = false;

                    }

                }



                /* NUMBER */

                const digits =
                    number.value.replace(
                        /\D/g,
                        ""
                    );


                if (
                    digits.length < 10
                ) {

                    error(
                        "numberField",
                        "numberError",
                        "Please enter a valid mobile number."
                    );

                    valid = false;

                }



                /* TERMS */

                if (!terms.checked) {

                    document.getElementById(
                        "termsError"
                    ).textContent =
                        "Please agree to the terms.";

                    valid = false;

                }



                /* SUCCESS */

                if (valid) {

                    document
                        .getElementById(
                            "successMessage"
                        )
                        .classList.add(
                            "show"
                        );

                }

            }
        );

    </script>

</body>
</html>