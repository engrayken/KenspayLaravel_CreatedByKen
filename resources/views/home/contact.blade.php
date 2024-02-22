@extends('home.app')

@section('content')
    <div class="page-content">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12">
                <div class="container" style="max-width: 100% !important;">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content-area card pl-lg-5 pr-lg-5">
                                <div class="card-innr">

                                    <div class="row" style="margin-top:20px;">


                                        <p class="" style="text-align:left;">
                                            <b class="d-flex justify-content-center align-items-center"
                                                style="font-weight:bold;color:#173D52;font-size:30px; margin-bottom:5px;"><span
                                                    style="color:inherit;border-bottom:10px solid #D50000;">Need
                                                    help</span></b>
                                            <br>
                                            {{-- kenspay.com.ng is Nigeria’s top payment platform providing fast, easy online payment solution for millions of<br/>people. We are impacting lives by ensuring payments for day-to-day services you enjoy are<br/>stress-free. With kenspay.com.ng, you can perform quick transactions anytime and anywhere using any device. --}}
                                            {!! $cpage->message !!}


                                        </p>



                                    </div>


                                    <div class="gaps-3x"></div>

                                    <form action="contact-ticket" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            @if (Session::has('success'))
                                                <div class="alert btn-success"> {{ session::get('success') }}</div>
                                            @elseif (Session::has('failed'))
                                                <div class="alert btn-danger"> {{ session::get('failed') }}</div>
                                            @endif

                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label class="input-item-label">Name <span
                                                            style="color:#D50000;">*</span></label>
                                                    <input value="" class="input-bordered" type="text"
                                                        name="name" placeholder="Enter Your Name"
                                                        value="{{ old('name') }}">
                                                </div><!-- .input-item -->
                                                @error('name')
                                                    <p class="text-danger text-center" style="align:center">
                                                        {{ $message }}
                                                    </p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label class="input-item-label">Email <span
                                                            style="color:#D50000;">*</span></label>
                                                    <input value="" class="input-bordered" type="text"
                                                        name="email" placeholder="Enter Your Email"
                                                        value="{{ old('email') }}">
                                                </div><!-- .input-item -->
                                                @error('email')
                                                    <p class="text-danger text-center" style="align:center">
                                                        {{ $message }}
                                                    </p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label class="input-item-label">Phone No. <span
                                                            style="color:#D50000;">*</span></label>
                                                    <input class="input-bordered" value="" type="text"
                                                        name="phone" placeholder="Your phone number"
                                                        value="{{ old('phone') }}">
                                                </div><!-- .input-item -->
                                                @error('phone')
                                                    <p class="text-danger text-center" style="align:center">
                                                        {{ $message }}
                                                    </p>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label class="input-item-label">Message</label>
                                                    <div class="message-sm"
                                                        style="margin-top: -10px;color: #7c8797;font-style: italic;line-height: 1.4;margin-bottom: 8px;font-size: 13px;">
                                                        Please give us enough information that you believe will help us
                                                        easily resolve your complaint/enquiry</div>
                                                    <textarea class="input-bordered input-textarea" style="height: 70px;" name="message" placeholder="Your message"
                                                        value="{{ old('message') }}"></textarea>
                                                </div><!-- .input-item -->
                                                @error('message')
                                                    <p class="text-danger text-center" style="align:center">
                                                        {{ $message }}
                                                    </p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-with-label">
                                                    <label class="input-item-label">
                                                        Attachments <small>(optional)</small>
                                                    </label>
                                                    <div id="attachment-holder">
                                                        <div id="attachment-0">
                                                            <input accept=".jpeg,.png,.pdf,.doc,.docx,.jpg,.xls,.xlsx"
                                                                class="" type="file" name="attachment[]">
                                                        </div>
                                                    </div>
                                                </div><!-- .input-item -->
                                            </div>
                                        </div>
                                        <div class="gaps-1x"></div>
                                        {{-- <button class="btn btn-sm btn-primary float-right" type="button" id="add-attachment" style="min-width: unset;">Add Attachment</button> --}}
                                        <button type="submit" class="btn btn-sm btn-success float-left"><span
                                                class="fa fa-paper-plane"></span> &nbsp; Send</button>
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
                                </script>




                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div>
        </div>
        {{-- <button id="website-rating-btn" data-toggle="modal" data-target="#website-rating" class="btn"
style="padding: 4px 10px;background-image: linear-gradient(#114761,#173D52);color:#fff;position:fixed;top:50%;right:0;border:0;border-bottom-right-radius:0;border-top-right-radius:0;min-width:unset;"><img
width="25px" height="25px"
src="{{ asset('frontend1/images/star.png') }}" /></button> --}}
    </div>
@endsection
