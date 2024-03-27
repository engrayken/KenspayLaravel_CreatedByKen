@extends('home.app')

@section('content')
    <div class="page-content">


        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12">
                <div class="container" style="max-width: 100% !important;">
                    <div class="row" id="major-holder">
                        <div class="col-lg-12" id="noty-page-holder">
                            <h4 class="card-title mb-3" style="color:#173D52;">Notifications</h4>

                        </div>

                        <div class="col-lg-8 " id="unread-block-parent">
                            <div class="card content-area shadow">

                                <div class="card-header">
                                    Unread Notifications
                                </div>
                                <div class="card-body">
                                    <div class="row m-0 p-0" id="unread-block">

                                        @foreach ($noti as $item)
                                            <div class="col-12 m-0">
                                                <div class="w-100 d-flex flex-column align-items-start justify-content-center pl-2 pr-2 pt-2 pb-0 mb-2 platform-notification-page-view"
                                                    data-id="{{ $item->id }}" data-subject="{{ $item->subject }}"
                                                    data-date="{{ date('M, y,  h:ia', strtotime($item->created_at)) }}"
                                                    data-flag="&lt;img width=&#039;15px&#039; height=&#039;15px&#039; src=&#039;{{ asset('frontend1/images/flaggreen.png') }}&#039;/&gt;"
                                                    data-content="{{ base64_encode($item->text) }}">

                                                    <div
                                                        class="d-flex
                                                    justify-content-between align-items-center w-100">
                                                        <h4 style="max-width:90%;">
                                                            <span class="d-block"
                                                                style="font-size: 14px;font-weight: 700;letter-spacing: 0.02em;line-height: 1;margin-top: 0;">{{ $item->subject }}</span>
                                                            <span class="d-block"
                                                                style="font-size: 10px;letter-spacing: 0.02em;padding-top: 7px;font-weight: 400;color: #758698;line-height: 1;">
                                                                {{ date('M, y,  h:ia', strtotime($item->created_at)) }}</span>
                                                        </h4>
                                                        <img width='15px' height='15px'
                                                            src='{{ asset('frontend1/images/flaggreen.png') }}' />
                                                    </div>
                                                    <div class="d-flex justify-content-start align-items-center w-100">
                                                        <span
                                                            style="display:block;font-size:12px;color:#758698;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 400;">

                                                            {!! $item->text !!}

                                                        </span>

                                                    </div>
                                                    {{-- <a href="single-platform-display/{{ $item->subject }}"
                                                        class="btn noty-view-btn btn-sm mt-2 single-platform-display"
                                                        style="min-width:unset;width:50px;padding:0;color:#fff;background-image:linear-gradient(#173D52, #195B7e);cursor:pointer;">view</a> --}}
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-8 d-none" id="read-block-parent">
                            <div class="card content-area shadow">

                                <div class="card-header">
                                    Read Notifications
                                </div>
                                <div class="card-body">
                                    <div class="row m-0 p-0" id="read-block">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12 d-none" id="no-notification-holder">
                            <div class="card content-area shadow">
                                <div class="card-innr card-innr-fix">
                                    <p class="mt-2 text-center">No Notifications</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>










    <script>
        $('#major-holder').on('click', '.platform-notification-page-view', function(e) {
            e.preventDefault();
            var e1 = e.currentTarget;
            if ($(e.target).hasClass('single-platform-display')) {
                window.location = $(e.target).attr('href');
            } else {
                var id = $(e1).attr('data-id');
                console.log(id);
                var subject = $(e1).attr('data-subject');
                var content = $(e1).attr('data-content');
                var notyDate = $(e1).attr('data-date');
                var flag = $(e1).attr('data-flag');

                $('#platform-notification-modal-subject').text(subject);
                $('#platform-notification-modal-date').text(notyDate);
                $('#platform-notification-modal-flag').html(flag);
                $('#platform-notification-modal-content').html(atob(content));

                $('#platform-notification-modal').modal('show');
                $.ajax({
                    url: "platform-notification-read/" + id,
                    method: "GET",
                    success: function(data) {
                        if (data) {
                            var data = JSON.parse(data);
                            $('#noty-holder-div').html("");
                            if (data.data.length > 0) {
                                data.data.forEach((element) => {
                                    var html =
                                        '<div class="w-100 d-flex flex-column align-items-center justify-content-center pl-2 pr-2 pt-2 pb-0 mb-2 platform-notification-view" data-id="' +
                                        element.id + '" data-subject="' + element.subject +
                                        '" data-date="' + element.date + '" data-flag="' +
                                        element.flag + '" data-content="' + btoa(element
                                            .content) +
                                        '" style="border-bottom: 1px solid #e6effb;">';

                                    html +=
                                        '<div class="d-flex justify-content-between align-items-center w-100"><h4 style="max-width:250px;"><span class="d-block" style="font-size: 14px;font-weight: 700;letter-spacing: 0.02em;line-height: 1;margin-top: 0;">' +
                                        element.subject +
                                        '</span><span class="d-block" style="font-size: 10px;letter-spacing: 0.02em;padding-top: 7px;font-weight: 400;color: #758698;line-height: 1;">' +
                                        element.date + '</span></h4>' + element.flag + '</div>';

                                    html +=
                                        '<div class="d-flex justify-content-start align-items-center w-100"><span style="display:block;font-size:12px;color:#758698;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 400;">' +
                                        element.preamble +
                                        '</span></div><a role="button" href="single-platform-display' +
                                        "/" + element.id +
                                        '" class="btn noty-view-btn btn-sm align-self-end single-platform-display" style="min-width:unset;width:50px;padding:0;color:#fff;background-image:linear-gradient(#173D52, #195B7e);cursor:pointer;">view</a></div>';

                                    $('#noty-holder-div').append(html);
                                });

                                $('#notification-counter').text(data.totalCount > 99 ? "99+" : data
                                    .totalCount);
                                if (data.totalCount == 0) {
                                    if (!document.getElementById('notification-counter').classList
                                        .contains('d-none')) {
                                        $('#notification-counter').addClass('d-none');
                                    }
                                }


                                $('#noty-holder-div').append(
                                    '<a href="display-all-platform-notification" class="btn btn-block display-all-platform-notification" style="background-image:linear-gradient(#173D52, #195B7e);color:#fff;">View All</a>'
                                );

                            } else if (data.totalCount == 1) {
                                var html =
                                    "<div class='w-100 d-flex flex-column align-items-center justify-content-center pl-2 pr-2 pt-2 pb-0 mb-2 platform-notification-view' data-id='" +
                                    data.data.id + "' data-subject='" + data.data.subject +
                                    "' data-date='" + data.data.date + "' data-flag='" + data.data
                                    .flag + "' data-content='" + btoa(data.data.content) +
                                    "' style='border-bottom: 1px solid #e6effb;'>";

                                html +=
                                    '<div class="d-flex justify-content-between align-items-center w-100"><h4 style="max-width:250px;"><span class="d-block" style="font-size: 14px;font-weight: 700;letter-spacing: 0.02em;line-height: 1;margin-top: 0;">' +
                                    data.data.subject +
                                    '</span><span class="d-block" style="font-size: 10px;letter-spacing: 0.02em;padding-top: 7px;font-weight: 400;color: #758698;line-height: 1;">' +
                                    data.data.date + '</span></h4>' + data.data.flag + '</div>';

                                html +=
                                    '<div class="d-flex justify-content-start align-items-center w-100"><span style="display:block;font-size:12px;color:#758698;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 400;">' +
                                    data.data.preamble +
                                    '</span></div><a role="button" href="single-platform-display' +
                                    "/" + element.id +
                                    '" class="btn noty-view-btn btn-sm align-self-end single-platform-display" style="min-width:unset;width:50px;padding:0;color:#fff;background-image:linear-gradient(#173D52, #195B7e);cursor:pointer;">view</a></div>';

                                $('#noty-holder-div').append(html);

                                $('#notification-counter').text(data.totalCount > 99 ? "99+" : data
                                    .totalCount);
                                if (data.totalCount == 0) {
                                    if (!document.getElementById('notification-counter').classList
                                        .contains('d-none')) {
                                        $('#notification-counter').addClass('d-none');
                                    }
                                }

                                $('#noty-holder-div').append(
                                    '<a href="display-all-platform-notification" class="btn btn-block display-all-platform-notification" style="background-image:linear-gradient(#173D52, #195B7e);color:#fff;">View All</a>'
                                );
                            } else {
                                if (data.totalCount == 0) {
                                    if (!document.getElementById('notification-counter').classList
                                        .contains('d-none')) {
                                        $('#notification-counter').addClass('d-none');
                                    }
                                }
                                $('#noty-holder-div').html(
                                    "<p class='mt-2 text-center' style='color:#ddd;'>No Notifications.</p>"
                                );
                            }

                            $.ajax({
                                url: "ajax-display-platform-notification",
                                method: "GET",
                                success: function(data) {
                                    var data = JSON.parse(data);
                                    var singleURL =
                                        "single-platform-display";
                                    if (data.unreadnotifications.length > 0) {
                                        $('#unread-block').html("");
                                        data.unreadnotifications.forEach((element) => {
                                            var html =
                                                '<div class="col-12 m-0" style="cursor: pointer;"><div style="cursor: pointer;" class="w-100 d-flex flex-column align-items-start justify-content-center pl-2 pr-2 pt-2 pb-0 mb-2 platform-notification-page-view" data-id="' +
                                                element.id + '" data-subject="' +
                                                element.subject + '" data-date="' +
                                                element.date + '" data-flag="' +
                                                element.flag + '" data-content="' +
                                                btoa(element.content) + '">';

                                            html +=
                                                "<div style='cursor: pointer;' class='d-flex justify-content-between align-items-center w-100'><h4 style='max-width:90%;'><span class='d-block' style='font-size: 14px;font-weight: 700;letter-spacing: 0.02em;line-height: 1;margin-top: 0;'>" +
                                                element.subject +
                                                "</span><span class='d-block' style='font-size: 10px;letter-spacing: 0.02em;padding-top: 7px;font-weight: 400;color: #758698;line-height: 1;'>" +
                                                element.date + "</span></h4>" +
                                                element.flag + "</div>";

                                            html +=
                                                "<div style='cursor: pointer;' class='d-flex justify-content-start align-items-center w-100'><span style='display:block;font-size:12px;color:#758698;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 400;'>" +
                                                element.preamble +
                                                "</span></div><a role='button' href='" +
                                                singleURL + "/" + element.id +
                                                "' class='btn noty-view-btn btn-sm mt-2 single-platform-display' style='min-width:unset;width:50px;padding:0;color:#fff;background-image:linear-gradient(#173D52, #195B7e);cursor:pointer;'>view</a></div></div>";

                                            $('#unread-block').append(html);
                                        });
                                        if (data.unreadtotalCount > 4) {
                                            $('#noty-holder-div').append(
                                                '<a href="display-all-platform-notification" class="btn btn-block display-all-platform-notification" style="background-image:linear-gradient(#173D52, #195B7e);color:#fff;">View More</a>'
                                            );
                                        }
                                        if (document.getElementById('notification-counter')
                                            .classList.contains('d-none')) {
                                            $('#notification-counter').removeClass(
                                                'd-none');
                                            $('#notification-counter').text(data
                                                .unreadtotalCount > 99 ? "99+" : data
                                                .unreadtotalCount);
                                        } else {
                                            $('#notification-counter').text(data
                                                .unreadtotalCount > 99 ? "99+" : data
                                                .unreadtotalCount);
                                        }
                                        if (!document.getElementById(
                                                'no-notification-holder').classList
                                            .contains('d-none')) {
                                            $('#no-notification-holder').addClass("d-none");
                                        }
                                    } else if (data.unreadtotalCount == 1) {
                                        $('#unread-block').html("");
                                        var html =
                                            '<div class="col-12 m-0" style="cursor: pointer;"><div style="cursor: pointer;" class="w-100 d-flex flex-column align-items-start justify-content-center pl-2 pr-2 pt-2 pb-0 mb-2 platform-notification-page-view" data-id="' +
                                            data.unreadnotifications.id +
                                            '" data-subject="' + data.unreadnotifications
                                            .subject + '" data-date="' + data
                                            .unreadnotifications.date + '" data-flag="' +
                                            data.unreadnotifications.flag +
                                            '" data-content="' + btoa(data
                                                .unreadnotifications.content) + '">';

                                        html +=
                                            "<div style='cursor: pointer;' class='d-flex justify-content-between align-items-center w-100'><h4 style='max-width:90%;'><span class='d-block' style='font-size: 14px;font-weight: 700;letter-spacing: 0.02em;line-height: 1;margin-top: 0;'>" +
                                            data.unreadnotifications.subject +
                                            "</span><span class='d-block' style='font-size: 10px;letter-spacing: 0.02em;padding-top: 7px;font-weight: 400;color: #758698;line-height: 1;'>" +
                                            data.unreadnotifications.date + "</span></h4>" +
                                            data.unreadnotifications.flag + "</div>";

                                        html +=
                                            "<div style='cursor: pointer;' class='d-flex justify-content-start align-items-center w-100'><span style='display:block;font-size:12px;color:#758698;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 400;'>" +
                                            data.unreadnotifications.preamble +
                                            "</span></div><a role='button' href='" +
                                            singleURL + "/" + element.id +
                                            "' class='btn noty-view-btn btn-sm mt-2 single-platform-display' style='min-width:unset;width:50px;padding:0;color:#fff;background-image:linear-gradient(#173D52, #195B7e);cursor:pointer;'>view</a></div></div>";

                                        $('#unread-block').append(html);
                                        if (document.getElementById('notification-counter')
                                            .classList.contains('d-none')) {
                                            $('#notification-counter').removeClass(
                                                'd-none');
                                            $('#notification-counter').text(data
                                                .unreadtotalCount > 99 ? "99+" : data
                                                .unreadtotalCount);
                                        } else {
                                            $('#notification-counter').text(data
                                                .unreadtotalCount > 99 ? "99+" : data
                                                .unreadtotalCount);
                                        }
                                        if (!document.getElementById(
                                                'no-notification-holder').classList
                                            .contains('d-none')) {
                                            $('#no-notification-holder').addClass("d-none");
                                        }
                                    } else {
                                        if (!document.getElementById('notification-counter')
                                            .classList.contains('d-none')) {
                                            $('#notification-counter').addClass('d-none');
                                        }
                                        if (data.unreadtotalCount == 0) {
                                            if (!document.getElementById(
                                                    'unread-block-parent').classList
                                                .contains('d-none')) {
                                                $("#unread-block-parent").addClass(
                                                    "d-none");
                                            }
                                        }
                                    }
                                    if (data.readnotifications.length > 0) {
                                        $('#read-block').html("");
                                        data.readnotifications.forEach((element) => {
                                            var html =
                                                '<div class="col-12 m-0" style="cursor: pointer;"><div style="cursor: pointer;" class="w-100 d-flex flex-column align-items-start justify-content-center pl-2 pr-2 pt-2 pb-0 mb-2 platform-notification-page-view" data-id="' +
                                                element.id + '" data-subject="' +
                                                element.subject + '" data-date="' +
                                                element.date + '" data-flag="' +
                                                element.flag + '" data-content="' +
                                                btoa(element.content) + '">';

                                            html +=
                                                "<div style='cursor: pointer;' class='d-flex justify-content-between align-items-center w-100'><h4 style='max-width:90%;'><span class='d-block' style='font-size: 14px;font-weight: 700;letter-spacing: 0.02em;line-height: 1;margin-top: 0;'>" +
                                                element.subject +
                                                "</span><span class='d-block' style='font-size: 10px;letter-spacing: 0.02em;padding-top: 7px;font-weight: 400;color: #758698;line-height: 1;'>" +
                                                element.date + "</span></h4>" +
                                                element.flag + "</div>";

                                            html +=
                                                "<div style='cursor: pointer;' class='d-flex justify-content-start align-items-center w-100'><span style='display:block;font-size:12px;color:#758698;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 400;'>" +
                                                element.preamble +
                                                "</span></div><a role='button' href='" +
                                                singleURL + "/" + element.id +
                                                "' class='btn noty-view-btn btn-sm mt-2 single-platform-display' style='min-width:unset;width:50px;padding:0;color:#fff;background-image:linear-gradient(#173D52, #195B7e);cursor:pointer;'>view</a></div></div>";



                                            $('#read-block').append(html);
                                        });
                                        if (document.getElementById('read-block-parent')
                                            .classList.contains('d-none')) {
                                            $("#unread-block-parent").removeClass("d-none");
                                        }
                                        if (!document.getElementById(
                                                'no-notification-holder').classList
                                            .contains('d-none')) {
                                            $('#no-notification-holder').addClass("d-none");
                                        }
                                    } else if (data.readtotalCount == 1) {
                                        $('#read-block').html("");
                                        var html =
                                            '<div class="col-12 m-0" style="cursor: pointer;"><div style="cursor: pointer;" class="w-100 d-flex flex-column align-items-start justify-content-center pl-2 pr-2 pt-2 pb-0 mb-2 platform-notification-page-view" data-id="' +
                                            data.readnotifications.id + '" data-subject="' +
                                            data.readnotifications.subject +
                                            '" data-date="' + data.readnotifications.date +
                                            '" data-flag="' + data.readnotifications.flag +
                                            '" data-content="' + btoa(data.readnotifications
                                                .content) + '">';

                                        html +=
                                            "<div style='cursor: pointer;' class='d-flex justify-content-between align-items-center w-100'><h4 style='max-width:90%;'><span class='d-block' style='font-size: 14px;font-weight: 700;letter-spacing: 0.02em;line-height: 1;margin-top: 0;'>" +
                                            data.readnotifications.subject +
                                            "</span><span class='d-block' style='font-size: 10px;letter-spacing: 0.02em;padding-top: 7px;font-weight: 400;color: #758698;line-height: 1;'>" +
                                            data.readnotifications.date + "</span></h4>" +
                                            data.readnotifications.flag + "</div>";

                                        html +=
                                            "<div style='cursor: pointer;' class='d-flex justify-content-start align-items-center w-100'><span style='display:block;font-size:12px;color:#758698;letter-spacing: 0.01em;line-height: 1;padding-top: 7px;font-weight: 400;'>" +
                                            data.readnotifications.preamble +
                                            "</span></div><a role='button' href='" +
                                            singleURL + "/" + element.id +
                                            "' class='btn noty-view-btn btn-sm mt-2 single-platform-display' style='min-width:unset;width:50px;padding:0;color:#fff;background-image:linear-gradient(#173D52, #195B7e);cursor:pointer;'>view</a></div></div>";



                                        $('#read-block').append(html);
                                        if (document.getElementById('read-block-parent')
                                            .classList.contains('d-none')) {
                                            $("#unread-block-parent").removeClass("d-none");
                                        }
                                        if (!document.getElementById(
                                                'no-notification-holder').classList
                                            .contains('d-none')) {
                                            $('#no-notification-holder').addClass("d-none");
                                        }
                                    } else {
                                        if (data.readtotalCount == 0) {
                                            if (!document.getElementById(
                                                    'read-block-parent').classList.contains(
                                                    'd-none')) {
                                                $("#unread-block-parent").addClass(
                                                    "d-none");
                                            }
                                        }
                                    }
                                    if (data.readtotalCount == 0 && data.unreadtotalCount ==
                                        0) {
                                        if (document.getElementById(
                                                'no-notification-holder').classList
                                            .contains('d-none')) {
                                            $('#no-notification-holder').removeClass(
                                                "d-none");
                                        }
                                    }
                                }
                            });
                        }
                    }
                });
            }
        });
    </script>
    </body>

    </html>
@endsection
