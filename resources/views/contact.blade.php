<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Squeaky Cleaners</title>

        <!-- Styles -->
        <link href="css/app.css" rel="stylesheet" type="text/css">

        <style>
            .lead {
                font-size: 20px;
                font-weight: 500;
                line-height: 1.7;
                font-family: 'Barlow Semi Condensed', sans-serif;
                color: #06131a;
                margin-bottom: 20px;
            }

            .feature-left {
                margin-bottom: 40px;
            }

            .feature-left .feature-icon {
                font-size: 50px;
                color: #4cbec5;
                display: inline-block;
                float: left;
                padding-right: 40px;
                padding-top: 7px;
            }

            .feature-left .feature-content {
                font-size: 20px;
            }

            .feature-left:last-child {}
            textarea.form-control {
                height: 90px;
            }

            .required {}

            .form-group {
                margin-bottom: 5px;
            }

            select.form-control:not([size]):not([multiple]) {
                height: 56px;
                color: #50595e;
            }

            .hero-section .form-control {
                border: 1px solid #8c897d;
                height: 58px;
            }

            .form-control {
                border-radius: 0;
                font-size: 14px;
                font-weight: 500;
                width: 100%;
                height: 56px;
                padding: 14px 18px;
                line-height: 1.42857143;
                border: 1px solid #d2d8db;
                background-color: #fff;
                text-transform: capitalize;
                letter-spacing: 0;
                margin-bottom: 14px;
                -webkit-box-shadow: inset 0 0 0 rgba(0, 0, 0, 1);
                box-shadow: inset 0 0 0 rgba(0, 0, 0, 1);
                -webkit-appearance: none;
            }

            .form-control:focus {
                color: #06131a !important;
                outline: 0;
                box-shadow: 0 0 0 0.1rem rgb(234, 231, 222);
                border-color: #06131a;
            }

            input::-webkit-input-placeholder {
                color: #50595e !important;
            }

            textarea::-webkit-input-placeholder {
                color: #50595e !important;
            }

            .input-group-addon {
                background-color: transparent;
                border: 1px solid #eee;
                border-radius: 0;
                position: absolute;
                right: 16px;
                top: 16px;
                font-size: 12px;
            }

            .focus {
                border: 1px solid #d2d8db;
            }

            .focus:focus {
                border: 1px solid #06131a;
            }
            .input-group-addon i {
                color: #63480f;
            }

            .btn-select {
                font-size: 14px;
            }

            select option {
                margin: 40px;
                background: rgba(255, 255, 255, 1);
                color: #50595e;
                text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
                position: relative;
            }

            select.form-control {
                position: relative;
            }

            select {
                -moz-appearance: none;
                border-radius: 0;
                font-size: 14px;
                font-weight: 700;
                width: 100%;
                padding: 14px;
                line-height: 1.42857143;
                border: 1px solid #e0e5e9;
                background-color: #fff;
                text-transform: capitalize;
                -webkit-appearance: none;
                -webkit-box-shadow: inset 0 0 0 rgba(0, 0, 0, .075);
                box-shadow: inset 0 0 0 rgba(0, 0, 0, .075);
            }

            .select {
                position: relative;
                display: block;
                line-height: 2.2;
                overflow: hidden;
            }

            select {
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0 0 0 .5em;
                cursor: pointer;
                color: #50595e;
                font-size: 16px;
            }

            .select::after {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                padding: 10px 17px 0 0;
                background: transparent;
                pointer-events: none;
                font-family: 'FontAwesome';
                content: "\f107";
                font-size: 16px;
            }

            .select:hover::after {
                color: #50595e;
            }

            .select::after {
                -webkit-transition: .25s all ease;
                -o-transition: .25s all ease;
                transition: .25s all ease;
            }

            select option {
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                cursor: pointer;
                padding: 10px;
                width: 100%;
                background-color: #fff;
                font-family: 'Barlow Semi Condensed', sans-serif;
            }

            .input-group>.custom-select:not(:last-child),
            .input-group>.form-control:not(:last-child) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }
            .service-form {
                background-color: #fafbfb;
                border: 1px solid #e4e8ea;
                padding: 40px 40px 20px 40px;
            }

            .service-form-group {
                position: relative;
            }

            .form-icon {
                position: absolute;
                right: 14px;
                bottom: 15px;
                font-size: 13px;
            }
            .btn {
                font-family: 'Barlow Semi Condensed', sans-serif;
                font-size: 16px;
                text-transform: uppercase;
                font-weight: 700;
                padding: 10px 26px;
                letter-spacing: 0;
                border-radius: 0;
                line-height: 2;
                -webkit-transition: all 0.3s;
                -moz-transition: all 0.3s;
                transition: all 0.3s;
                word-wrap: break-word;
                white-space: normal !important;
            }

            .btn-default {
                background-color: #ce0058;
                color: #fff;
                border: 2px solid #ce0058;
            }

            .btn-default:hover {
                background-color: transparent;
                color: #ce0058;
                border: 2px solid #ce0058;
            }

            .btn-default.focus,
            .btn-default:focus {
                background-color: transparent;
                color: #ce0058;
                border: 2px solid #ce0058;
                box-shadow: 0 0 0 0.2rem rgb(206, 0, 88);
            }

            .space-medium{padding-top:80px; padding-bottom:80px;}

            #form-submit {
                color: #fff;
            }
        </style>
    </head>
    <body>
    @include('partials/navbar')

    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="feature-description">
                        <h2>We’re ready to listen to your needs &
                            would like to talk about how we can help you.</h2>
                        <hr>
                        <!-- feature-left -->
                        <div class="feature-left">
                            <div class="feature-icon"><i class="far fa-address-book"></i></div>
                            <div class="feature-content">
                                <p>Hundreds of satisfied clients.</p>
                            </div>
                        </div>
                        <!-- /.feature-left -->
                        <!-- feature-left -->
                        <div class="feature-left">
                            <div class="feature-icon"><i class="far fa-compass"></i></div>
                            <div class="feature-content">
                                <p>We operate within an 8 mile radius of Belper town centre.</p>
                            </div>
                        </div>
                        <!-- /.feature-left -->
                        <!-- feature-left -->
                        <div class="feature-left">
                            <div class="feature-icon"><i class="far fa-question-circle"></i></div>
                            <div class="feature-content">
                                <p>We normally respond to new enquiries within 5 working days.</p>
                            </div>
                        </div>
                        <!-- /.feature-left -->
                        {{--<hr>--}}
                        {{--<p>Note : you can write whatever you want to describe here.</p>--}}
                    </div>
                </div>
                <!-- /.feature-sections -->
                <div class="offset-xl-1 col-xl-6 offset-lg-1 col-lg-10 offset-md-1 col-md-10 col-sm-12 col-12 mt30">
                    <form>
                        <!-- service-form -->
                        <div class="service-form">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb10">
                                    <h3>Affordable Home Cleaning Services in Belper</h3>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="first_name"></label>
                                        <input id="first_name" type="text" placeholder="First Name" class="form-control" required>
                                        <div class="form-icon"><i class="fa fa-user"></i></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="second_name"></label>
                                        <input id="second_name" type="text" placeholder="Last Name" class="form-control" required>
                                        <div class="form-icon"><i class="fa fa-user"></i></div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="email"></label>
                                        <input id="email" type="email" placeholder="Email (Optional)" class="form-control">
                                        <div class="form-icon"><i class="fa fa-envelope"></i></div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="phone"></label>
                                        <input id="phone" type="text" placeholder="Phone" class="form-control" required>
                                        <div class="form-icon"><i class="fa fa-phone"></i></div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="postcode"></label>
                                        <input id="postcode" type="text" placeholder="Postcode" class="form-control" required>
                                        <div class="form-icon"><i class="fa fa-home"></i></div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="message"></label>
                                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <a id="form-submit" class="btn btn-primary btn-block mb10">send message</a>
                                    <label for="newsletter"><input type="checkbox" id="newsletter"><small> I would like to receive newsletter emails.</small></label>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /.service-form -->
                </div>
            </div>
        </div>
    </div>

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="js/app.js"></script>
    </body>
</html>
