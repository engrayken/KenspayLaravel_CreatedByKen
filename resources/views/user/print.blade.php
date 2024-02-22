<body onLoad="javscript:window.close( window.print() )">

    @php
        $noo = $per;
        $no = 0;
    @endphp

    <table width="100%">
        <tr>
            <td>

                <table cellpadding="1" width="100%" border="1">

                    @foreach ($epin as $item)
                        @if ($no == 0)
                            <tr>
                        @endif


                        <td>
                            <table>
                                <tr>
                                    <td>kenspaytech </td>
                                    <td>

                                        <small style='font-size:15px'>N{{ $item->deno }}
                                            @if ($item->network == 'mtn')
                                                <img src='{{ asset('frontend1/images/MTN-Airtime.jpg') }}' height='20'
                                                    width='20' />
                                        </small>
                    @endif

                    @if ($item->network == 'airtel')
                        <img src='{{ asset('frontend1/images/Airtel-Airtime.jpg') }}' height='20' width='20' />
                        </small>
                    @endif

                    @if ($item->network == 'glo')
                        <img src='{{ asset('frontend1/images/Glo-Airtime.jpg') }}' height='20' width='20' />
                        </small>
                    @endif

                    @if ($item->network == '9mobile')
                        <img src='{{ asset('frontend1/images/9mobile-Airtime.jpg') }}' height='20' width='20' />
                        </small>
                    @endif
            </td>
        </tr>
    </table>

    <table cellpadding='2' cellspacing='0'>

        {{-- <tr><td style='font-size:10px'>Ref:</td><td style='font-size:10px'>{{ $item->transId }}</td></tr> --}}
        <tr>
            <td><b style='font-size:17px'>PIN:</b> </td>
            <td><b
                    style='font-size:17px'>{{ str_replace($pinAlp, $pinNum, implode('-', str_split($item->pin, 4))) }}</b>
            </td>
        </tr>
        <tr>
            <td style='font-size:15px'>S/N:</td>
            <td style='font-size:15'>{{ $item->seria }}</td>
        </tr>
        <tr>
            <td>Dial:</td>
            <td><b>{{ str_replace($pinAlp, $pinNum, $item->descr) }}</b></td>
        </tr>
        <tr>
            <td style='font-size:11px'>DATE:</td>
            <td style='font-size:11px'>{{ date('d M, Y, i:hA', strtotime($item->created_at)) }}</td>
        </tr>
    </table>


    @php

        $no = $no + 1;
    @endphp

    </td>
    @if ($no == $noo)
        </tr>

        @php
            $no = 0;
        @endphp
    @endif
    @endforeach
    </table>
</body>
