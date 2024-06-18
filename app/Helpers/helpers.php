<?php

if (! function_exists('setActive')) {

    /**
     * MENU ACTIVE SAAT DI KLIK
     *
     */
    function setActive($path)
    {
        return Request::is($path . '*') ? ' active' :  '';
    }

}

if (! function_exists('TanggalID')) {

    /**
     * FORMAT TANGGAL INDONESIA
     *
     */
    function TanggalID($tanggal) {
        $value = Carbon\Carbon::parse($tanggal);
        $parse = $value->locale('id');
        return $parse->translatedFormat('l, d F Y');
    }
}
