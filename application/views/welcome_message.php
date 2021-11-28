<!DOCTYPE html>
<html>

<head>
    <title>Creative Colorlib SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js" integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <style type="text/css">
     
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        dl,
        dt,
        dd,
        ol,
        nav ul,
        nav li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 2;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        ol,
        ul {
            list-style: none;
            margin: 0px;
            padding: 0px;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        /*-- start editing from here --*/
        a {
            text-decoration: none;
        }

        .txt-rt {
            text-align: right;
        }

        /* text align right */
        .txt-lt {
            text-align: left;
        }

        /* text align left */
        .txt-center {
            text-align: center;
        }

        /* text align center */
        .float-rt {
            float: right;
        }

        /* float right */
        .float-lt {
            float: left;
        }

        /* float left */
        .clear {
            clear: both;
        }

        /* clear float */
        .pos-relative {
            position: relative;
        }

        /* Position Relative */
        .pos-absolute {
            position: absolute;
        }

        /* Position Absolute */
        .vertical-base {
            vertical-align: baseline;
        }

        /* vertical align baseline */
        .vertical-top {
            vertical-align: top;
        }

        /* vertical align top */
        nav.vertical ul li {
            display: block;
        }

        /* vertical menu */
        nav.horizontal ul li {
            display: inline-block;
        }

        /* horizontal menu */
        img {
            max-width: 100%;
        }

        /*-- end reset --*/
        body {
            background: #76b852;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #76b852, #8DC26F);
            background: -moz-linear-gradient(to top, #76b852, #8DC26F);
            background: -o-linear-gradient(to top, #76b852, #8DC26F);
            background: linear-gradient(to top, #76b852, #8DC26F);
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Roboto', sans-serif;
        }

        h1 {
            font-size: 3em;
            text-align: center;
            color: #fff;
            font-weight: 100;
            text-transform: capitalize;
            letter-spacing: 4px;
            font-family: 'Roboto', sans-serif;
        }

        /*-- main --*/
        .main-w3layouts {
            padding: 3em 0 1em;
        }

        .main-agileinfo {
            width: 35%;
            margin: 3em auto;
            background: rgba(0, 0, 0, 0.18);
            background-size: cover;
        }

        .agileits-top {
            padding: 3em;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            font-size: 0.9em;
            color: #fff;
            font-weight: 100;
            width: 94.5%;
            display: block;
            border: none;
            padding: 0.8em;
            border: solid 1px rgba(255, 255, 255, 0.37);
            -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
            transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
            background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
            background-position: -800px 0;
            background-size: 100%;
            background-repeat: no-repeat;
            color: #fff;
            font-family: 'Roboto', sans-serif;
        }

        input.email,
        input.text.w3lpass {
            margin: 2em 0;
        }

        .text:focus,
        .text:valid {
            box-shadow: none;
            outline: none;
            background-position: 0 0;
        }

        .text:focus::-webkit-input-placeholder,
        .text:valid::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 0.7);
            font-size: .9em;
            -webkit-transform: translateY(-30px);
            -moz-transform: translateY(-30px);
            -o-transform: translateY(-30px);
            -ms-transform: translateY(-30px);
            transform: translateY(-30px);
            visibility: visible !important;
        }

        ::-webkit-input-placeholder {
            color: #fff;
            font-weight: 100;
        }

        :-moz-placeholder {
            /* Firefox 18- */
            color: #fff;
        }

        ::-moz-placeholder {
            /* Firefox 19+ */
            color: #fff;
        }

        :-ms-input-placeholder {
            color: #fff;
        }

        input[type="submit"] {
            font-size: .9em;
            color: #fff;
            background: #76b852;
            outline: none;
            border: 1px solid #76b852;
            cursor: pointer;
            padding: 0.9em;
            -webkit-appearance: none;
            width: 100%;
            margin: 2em 0;
            letter-spacing: 4px;
        }

        input[type="submit"]:hover {
            -webkit-transition: .5s all;
            -moz-transition: .5s all;
            -o-transition: .5s all;
            -ms-transition: .5s all;
            transition: .5s all;
            background: #8DC26F;
        }

        .agileits-top p {
            font-size: 1em;
            color: #fff;
            text-align: center;
            letter-spacing: 1px;
            font-weight: 300;
        }

        .agileits-top p a {
            color: #fff;
            -webkit-transition: .5s all;
            -moz-transition: .5s all;
            transition: .5s all;
            font-weight: 400;
        }

        .agileits-top p a:hover {
            color: #76b852;
        }

        /*-- //main --*/
        /*-- checkbox --*/
        .wthree-text label {
            font-size: 0.9em;
            color: #fff;
            font-weight: 200;
            cursor: pointer;
            position: relative;
        }

        input.checkbox {
            background: #8DC26F;
            cursor: pointer;
            width: 1.2em;
            height: 1.2em;
        }

        input.checkbox:before {
            content: "";
            position: absolute;
            width: 1.2em;
            height: 1.2em;
            background: inherit;
            cursor: pointer;
        }

        input.checkbox:after {
            content: "";
            position: absolute;
            top: 0px;
            left: 0;
            z-index: 1;
            width: 1.2em;
            height: 1.2em;
            border: 1px solid #fff;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
        }

        input.checkbox:checked:after {
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
            height: .5rem;
            border-color: #fff;
            border-top-color: transparent;
            border-right-color: transparent;
        }

        .anim input.checkbox:checked:after {
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
            height: .5rem;
            border-color: transparent;
            border-right-color: transparent;
            animation: .4s rippling .4s ease;
            animation-fill-mode: forwards;
        }

        @keyframes rippling {
            50% {
                border-left-color: #fff;
            }

            100% {
                border-bottom-color: #fff;
                border-left-color: #fff;
            }
        }

        /*-- //checkbox --*/
        /*-- copyright --*/
        .colorlibcopy-agile {
            margin: 2em 0 1em;
            text-align: center;
        }

        .colorlibcopy-agile p {
            font-size: .9em;
            color: #fff;
            line-height: 1.8em;
            letter-spacing: 1px;
            font-weight: 100;
        }

        .colorlibcopy-agile p a {
            color: #fff;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
            -ms-transition: 0.5s all;
        }

        .colorlibcopy-agile p a:hover {
            color: #000;
        }

        /*-- //copyright --*/
        .wrapper {
            position: relative;
            overflow: hidden;
        }

        .colorlib-bubbles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .colorlib-bubbles li {
            position: absolute;
            list-style: none;
            display: block;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.15);
            bottom: -160px;
            -webkit-animation: square 20s infinite;
            -moz-animation: square 250s infinite;
            -o-animation: square 20s infinite;
            -ms-animation: square 20s infinite;
            animation: square 20s infinite;
            -webkit-transition-timing-function: linear;
            -moz-transition-timing-function: linear;
            -o-transition-timing-function: linear;
            -ms-transition-timing-function: linear;
            transition-timing-function: linear;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -o-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
        }

        .colorlib-bubbles li:nth-child(1) {
            left: 10%;
        }

        .colorlib-bubbles li:nth-child(2) {
            left: 20%;
            width: 80px;
            height: 80px;
            -webkit-animation-delay: 2s;
            -moz-animation-delay: 2s;
            -o-animation-delay: 2s;
            -ms-animation-delay: 2s;
            animation-delay: 2s;
            -webkit-animation-duration: 17s;
            -moz-animation-duration: 17s;
            -o-animation-duration: 17s;
            animation-duration: 17s;
        }

        .colorlib-bubbles li:nth-child(3) {
            left: 25%;
            -webkit-animation-delay: 4s;
            -moz-animation-delay: 4s;
            -o-animation-delay: 4s;
            -ms-animation-delay: 4s;
            animation-delay: 4s;
        }

        .colorlib-bubbles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            -webkit-animation-duration: 22s;
            -moz-animation-duration: 22s;
            -o-animation-duration: 22s;
            -ms-animation-duration: 22s;
            animation-duration: 22s;
            background-color: rgba(255, 255, 255, 0.25);
        }

        .colorlib-bubbles li:nth-child(5) {
            left: 70%;
        }

        .colorlib-bubbles li:nth-child(6) {
            left: 80%;
            width: 120px;
            height: 120px;
            -webkit-animation-delay: 3s;
            -moz-animation-delay: 3s;
            -o-animation-delay: 3s;
            -ms-animation-delay: 3s;
            animation-delay: 3s;
            background-color: rgba(255, 255, 255, 0.2);
        }

        .colorlib-bubbles li:nth-child(7) {
            left: 32%;
            width: 160px;
            height: 160px;
            -webkit-animation-delay: 7s;
            -moz-animation-delay: 7s;
            -o-animation-delay: 7s;
            -ms-animation-delay: 7s;
            animation-delay: 7s;
        }

        .colorlib-bubbles li:nth-child(8) {
            left: 55%;
            width: 20px;
            height: 20px;
            -webkit-animation-delay: 15s;
            -moz-animation-delay: 15s;
            animation-delay: 15s;
            -webkit-animation-duration: 40s;
            -moz-animation-duration: 40s;
            animation-duration: 40s;
        }

        .colorlib-bubbles li:nth-child(9) {
            left: 25%;
            width: 10px;
            height: 10px;
            -webkit-animation-delay: 2s;
            animation-delay: 2s;
            -webkit-animation-duration: 40s;
            animation-duration: 40s;
            background-color: rgba(255, 255, 255, 0.3);
        }

        .colorlib-bubbles li:nth-child(10) {
            left: 90%;
            width: 160px;
            height: 160px;
            -webkit-animation-delay: 11s;
            animation-delay: 11s;
        }

        @-webkit-keyframes square {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -o-transform: translateY(0);
                -ms-transform: translateY(0);
                transform: translateY(0);
            }

            100% {
                -webkit-transform: translateY(-700px) rotate(600deg);
                -moz-transform: translateY(-700px) rotate(600deg);
                -o-transform: translateY(-700px) rotate(600deg);
                -ms-transform: translateY(-700px) rotate(600deg);
                transform: translateY(-700px) rotate(600deg);
            }
        }

        @keyframes square {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -o-transform: translateY(0);
                -ms-transform: translateY(0);
                transform: translateY(0);
            }

            100% {
                -webkit-transform: translateY(-700px) rotate(600deg);
                -moz-transform: translateY(-700px) rotate(600deg);
                -o-transform: translateY(-700px) rotate(600deg);
                -ms-transform: translateY(-700px) rotate(600deg);
                transform: translateY(-700px) rotate(600deg);
            }
        }

        /*-- responsive-design --*/
        @media(max-width:1440px) {

            input[type="text"],
            input[type="email"],
            input[type="password"] {
                width: 94%;
            }
        }

        @media(max-width:1366px) {
            h1 {
                font-size: 2.6em;
            }

            .agileits-top {
                padding: 2.5em;
            }

            .main-agileinfo {
                margin: 2em auto;
            }

            .main-agileinfo {
                width: 36%;
            }
        }

        @media(max-width:1280px) {
            .main-agileinfo {
                width: 40%;
            }
        }

        @media(max-width:1080px) {
            .main-agileinfo {
                width: 46%;
            }
        }

        @media(max-width:1024px) {
            .main-agileinfo {
                width: 49%;
            }
        }

        @media(max-width:991px) {
            h1 {
                font-size: 2.4em;
            }

            .main-w3layouts {
                padding: 2em 0 1em;
            }
        }

        @media(max-width:900px) {
            .main-agileinfo {
                width: 58%;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"] {
                width: 93%;
            }
        }

        @media(max-width:800px) {
            h1 {
                font-size: 2.2em;
            }
        }

        @media(max-width:736px) {
            .main-agileinfo {
                width: 62%;
            }
        }

        @media(max-width:667px) {
            .main-agileinfo {
                width: 67%;
            }
        }

        @media(max-width:600px) {
            .agileits-top {
                padding: 2.2em;
            }

            input.email,
            input.text.w3lpass {
                margin: 1.5em 0;
            }

            input[type="submit"] {
                margin: 2em 0;
            }

            h1 {
                font-size: 2em;
                letter-spacing: 3px;
            }
        }

        @media(max-width:568px) {
            .main-agileinfo {
                width: 75%;
            }

            .colorlibcopy-agile p {
                padding: 0 2em;
            }
        }

        @media(max-width:480px) {
            h1 {
                font-size: 1.8em;
                letter-spacing: 3px;
            }

            .agileits-top {
                padding: 1.8em;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"] {
                width: 91%;
            }

            .agileits-top p {
                font-size: 0.9em;
            }
        }

        @media(max-width:414px) {
            h1 {
                font-size: 1.8em;
                letter-spacing: 2px;
            }

            .main-agileinfo {
                width: 85%;
                margin: 1.5em auto;
            }

            .text:focus,
            .text:valid {
                background-position: 0 0px;
            }

            .wthree-text ul li,
            .wthree-text ul li:nth-child(2) {
                display: block;
                float: none;
            }

            .wthree-text ul li:nth-child(2) {
                margin-top: 1.5em;
            }

            input[type="submit"] {
                margin: 2em 0 1.5em;
                letter-spacing: 3px;
            }

            input[type="submit"] {
                margin: 2em 0 1.5em;
            }

            .colorlibcopy-agile {
                margin: 1em 0 1em;
            }
        }

        @media(max-width:384px) {
            .main-agileinfo {
                width: 88%;
            }

            .colorlibcopy-agile p {
                padding: 0 1em;
            }
        }

        @media(max-width:375px) {
            .agileits-top p {
                letter-spacing: 0px;
            }
        }

        @media(max-width:320px) {
            .main-w3layouts {
                padding: 1.5em 0 0;
            }

            .agileits-top {
                padding: 1.2em;
            }

            .colorlibcopy-agile {
                margin: 0 0 1em;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"] {
                width: 89.5%;
                font-size: 0.85em;
            }

            h1 {
                font-size: 1.7em;
                letter-spacing: 0px;
            }

            .main-agileinfo {
                width: 92%;
                margin: 1em auto;
            }

            .text:focus,
            .text:valid {
                background-position: 0 0px;
            }

            input[type="submit"] {
                margin: 1.5em 0;
                padding: 0.8em;
                font-size: .85em;
            }

            .colorlibcopy-agile p {
                font-size: .85em;
            }

            .wthree-text label {
                font-size: 0.85em;
            }

            .main-w3layouts {
                padding: 1em 0 0;
            }
        }
    </style>
</head>

<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>SignUp Form</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form method="POST" id="signupform">
                    <input class="text" type="text" name="name" id="name" placeholder="Username" required="">
                    <input class="text email" type="email" name="email" id="email" placeholder="Email" required="">
                    <input class="text" type="text" name="address" id="address" placeholder="Address" required="">
                    <input class="text w3lpass" type="text" name="phone" id="phone" placeholder="Phone" required="">

                    <input class="text w3lpass" type="password" name="password" id="password"  placeholder="Password" required="">
                    <input class="text w3lpass" type="password" name="conpassword" id="conpassword" placeholder="Confirm Password" required="">
                    
                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="designation" value="Admin" checked>
                                                <span> Admin </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="designation" value="User">
                                                <span>User </span>
                                            </label>
                                        </div>
                                    </div>
                    
                    <div class="wthree-text p-3">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required="">
                            <span>I Agree To The Terms & Conditions</span>
                        </label>
                        <div class="clear"> </div>
                    </div>
                    <button name="submit" type="submit" class="form-control">Signup</button></br>
                </form>
                <p>Don't have an Account? <a href="#"> Login Now!</a></p>
            </div>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <p>© 2021 Arbaz Signup Form. All rights reserved | Design by <a href="https://github.com/arbazbagwan" target="_blank">Arbaz</a></p>
        </div>
        <!-- //copyright -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- //main -->
</body>


<script type="text/javascript">
    $(document).ready(function(e) {
        $("#signupform").on('submit', (function(e) {
            //e.preventDefault();
            if (e.isDefaultPrevented()) {
                //alert('invalid');
            } else {
                $("#preview3").html('<img src="<?= base_url() ?>assets/images/default.gif" style="height:30px;width:30px;" alt="Uploading data...."/>');
                $("#preview3").show();
                $.ajax({
                    url: "<?php echo site_url('welcome/signup'); ?>",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {


                        setTimeout(function() {
                            window.location = "<?php echo site_url('Welcome/user_login') ?>";
                        }, 2000);
                    },
                    error: function() {
                        alert('fail');
                    }
                });
            }
            return false;
        }));
    });
</script>

</html>














<!-- <html>

<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js" integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style type="text/css">
        .register {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            margin-top: 3%;
            padding: 3%;
        }

        .register-left {
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }

        .register-left input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }

        .register-right {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }

        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }

        .register .register-form {
            padding: 10%;
            margin-top: 10%;
        }

        .btnRegister {
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }

        .register .nav-tabs {
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }

        .register .nav-tabs .nav-link {
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .register .nav-tabs .nav-link.active {
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading {
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }
    </style>
</head>

<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Assignment</h3>
                <p>for mplus</p>
                <a href="<?= site_url() ?>/Welcome/user_login" class="text-white bg-dark p-2">Login</a>
            </div>
            <div class="col-md-9 register-right">

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Signup as a User or Admin</h3>
                        <form method="POST" id="signupform">

                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name *" value="" name="name" id="name" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="10" name="phone" id="phone" class="form-control" placeholder="Your Phone *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Address *" value="" name="address" id="address" />
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" value="" name="email" id="email" />
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="designation" value="Admin" checked>
                                                <span> Admin </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="designation" value="User">
                                                <span>User </span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">


                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" value="" name="password" id="password" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password *" value="" name="conpassword" id="conpassword" />
                                    </div>
                                    <div class="form-group">
                                        <button name="submit" type="submit" class="form-control">Signup</button>
                                    </div>


                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>

    </div>

</body>

<script type="text/javascript">
    $(document).ready(function() {
        $('#signupform').bootstrapValidator({
            message: 'This value is not valid',
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'The name must be more than 6 and less than 40 characters</br>'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z ]+$/,
                            message: 'The name can only consist of alphabetical'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Email is required'
                        },
                        regexp: {
                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                            message: 'Enter valid an email address'
                        }
                    }
                },
                address: {
                    validators: {
                        notEmpty: {
                            message: 'Address is required'
                        },
                        stringLength: {
                            min: 20,
                            message: 'Address is too short'
                        }

                    }
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: 'Mobile number is required'
                        },
                        stringLength: {
                            min: 10,
                            message: 'Phone number must be 10 digits'
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'characters not allowed'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'Password is required'
                        },
                        identical: {
                            field: 'conpassword',
                            message: 'Your password does not match </br>'
                        },
                        stringLength: {
                            min: 6,

                            message: 'Password too short'
                        }
                    }
                },
                conpassword: {
                    validators: {
                        notEmpty: {
                            message: 'Confirm Password is required'
                        },
                        identical: {
                            field: 'password',
                            message: 'Your password does not match </br>'
                        },
                        stringLength: {
                            min: 6,

                            message: 'Password too short'
                        }
                    }
                },
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(e) {
        $("#signupform").on('submit', (function(e) {
            //e.preventDefault();
            if (e.isDefaultPrevented()) {
                //alert('invalid');
            } else {
                $("#preview3").html('<img src="<?= base_url() ?>assets/images/default.gif" style="height:30px;width:30px;" alt="Uploading data...."/>');
                $("#preview3").show();
                $.ajax({
                    url: "<?php echo site_url('welcome/signup'); ?>",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {


                        setTimeout(function() {
                            window.location = "<?php echo site_url('Welcome/user_login') ?>";
                        }, 2000);
                    },
                    error: function() {
                        alert('fail');
                    }
                });
            }
            return false;
        }));
    });
</script>

</html> -->