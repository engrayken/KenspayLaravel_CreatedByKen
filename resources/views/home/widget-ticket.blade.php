<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="vtpass.com ">
    <meta name="keywords" content="">
    <title></title>
    <link rel='shortcut icon' href='{{ asset('frontend1/images/fav.jpg') }}' type='image/x-icon' />

    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="{{ asset('frontend1/css/vendo104.bundle.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend1/css/style.css') }}">

    <style>
        .input-item {
            padding-bottom: 5px !important;
        }

        label {
            margin-bottom: 0px !important;
        }

        .input-bordered {
            padding: 7px 10px !important;
        }

        #overlay {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(255, 255, 255, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 999;
        }

        #loader {
            border: 8px solid #f3f3f3;
            border-top: 8px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(10deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

</head>

<body style="background:#ebf4f9;min-width:auto;">
    <div class="container">
        <div id="overlay">
            <div id="loader"></div>
        </div>

        <form action="contact-ticket" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                @if (Session::has('success'))
                    <div class="alert btn-success"> {{ session::get('success') }}</div>
                @elseif (Session::has('failed'))
                    <div class="alert btn-danger"> {{ session::get('failed') }}</div>
                @endif

                <div class="col-md-12">
                    <div class="input-item input-with-label">
                        <label class="input-item-label">Name <span style="color:#D50000;">*</span></label>
                        <input value="" class="input-bordered" type="text" name="name"
                            placeholder="Enter Your Name">
                    </div><!-- .input-item -->
                    @error('name')
                        <p class="text-danger text-center" style="align:center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="col-md-12">
                    <div class="input-item input-with-label">
                        <label class="input-item-label">Email <span style="color:#D50000;">*</span></label>
                        <input value="" class="input-bordered" type="text" name="email"
                            placeholder="Enter Your Email">
                    </div><!-- .input-item -->
                    @error('email')
                        <p class="text-danger text-center" style="align:center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="col-md-12">
                    <div class="input-item input-with-label">
                        <label class="input-item-label">Phone No. <span style="color:#D50000;">*</span></label>
                        <input class="input-bordered" value="" type="text" name="phone"
                            placeholder="Your phone number">
                    </div><!-- .input-item -->
                    @error('phone')
                        <p class="text-danger text-center" style="align:center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="col-md-12">
                    <div class="input-item input-with-label">
                        <label class="input-item-label">Message</label>
                        <div class="message-sm"
                            style="margin-top: -10px;color: #7c8797;font-style: italic;line-height: 1.4;margin-bottom: 8px;font-size: 13px;">
                            Please give us enough information that you believe will help us easily resolve your
                            complaint/enquiry</div>
                        <textarea class="input-bordered input-textarea" style="height: 70px;" name="message" placeholder="Your message"></textarea>
                    </div><!-- .input-item -->
                    @error('message')
                        <p class="text-danger text-center" style="align:center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="col-md-12">
                    <div class="input-item input-with-label">
                        <label class="input-item-label">
                            Attachments <small>(optional)</small>
                        </label>
                        <div id="attachment-holder">
                            <div id="attachment-0">
                                <input accept=".jpeg,.png,.pdf,.doc,.docx,.jpg,.xls,.xlsx" class="" type="file"
                                    name="attachment[]">
                            </div>
                        </div>
                    </div><!-- .input-item -->
                </div>
            </div>
            <div class="gaps-1x"></div>
            {{-- <button class="btn btn-sm btn-primary float-right" type="button" id="add-attachment" style="min-width: unset;">Add Attachment</button> --}}
            <button type="submit" class="btn btn-sm btn-success float-left" id="click-me"><span
                    class="fa fa-paper-plane"></span>
                &nbsp; Send</button>
        </form>
    </div>
    <script src="{{ asset('frontend1/js/jquery104.bundle.js') }}"></script>
    <script src="{{ asset('frontend1/js/script104.js') }}"></script>

    <script>
        $("#add-attachment").on('click', function() {
            //get last ID
            console.log(12302)
            var lastChild = $("#attachment-holder").children().last();
            var lastId = $(lastChild).attr('id').split('-');

            var id = lastId[1] + 1;
            var child = '<div id="attachment-' + id +
                '"><input accept=".jpeg,.png,.pdf,.doc,.docx,.jpg,.xls,.xlsx" class="" type="file" name="attachment[]"><button class="btn btn-sm btn-danger remove-attachment" id="remove-attachment-' +
                id + '" type="button" style="min-width: unset;">Remove</button></div>';
            $("#attachment-holder").append(child);
        });

        $("#attachment-holder").on('click', '.remove-attachment', function(e) {
            var removeId = $(e.target).attr('id').split('-');

            var id = removeId[2];
            $("#attachment-" + id).remove();
        });

        document.addEventListener('DOMContentLoaded', function() {
            var overlay = document.getElementById('overlay');
            var clickMeButton = document.getElementById('click-me');

            clickMeButton.addEventListener('click', function() {
                // Show the overlay with the circular loader
                overlay.style.display = 'flex';

                // Simulate loading delay (you can replace this with your actual loading logic)
                setTimeout(function() {
                    // Hide the overlay after the loading is complete
                    overlay.style.display = 'none';
                }, 6000); // Replace 2000 with your desired loading duration in milliseconds
            });
        });
    </script>

</body>

</html>
