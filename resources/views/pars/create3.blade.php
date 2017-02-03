@extends('layouts.app')
@section('content-header')
<h1>Nouveau PAR</h1>
@endsection
@section('css')
    <link href="{{ asset("/bower_components/AdminLTE/plugins/select2/select2.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<style id="PAR IT_Septembre16_Mac Greco Peralte (2)_3272_Styles">
    <!--table
    {mso-displayed-decimal-separator:"\.";
        mso-displayed-thousand-separator:"\,";}
    .font53272
    {color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;}
    .font63272
    {color:windowtext;
        font-size:9.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;}
    .xl633272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial;
        mso-generic-font-family:auto;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl643272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
        text-align:general;
        vertical-align:bottom;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl653272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:0;
        text-align:general;
        vertical-align:bottom;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl663272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:middle;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl673272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:0;
        text-align:general;
        vertical-align:middle;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl683272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"_\(* \#\,\#\#0_\)\;_\(* \\\(\#\,\#\#0\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
        text-align:general;
        vertical-align:middle;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl693272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:0%;
        text-align:center;
        vertical-align:middle;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl703272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial;
        mso-generic-font-family:auto;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl713272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl723272
    {padding:0px
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial;
        mso-generic-font-family:auto;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:bottom;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl733272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl743272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:0;
        text-align:general;
        vertical-align:bottom;
        border-top:none;
        border-right:none;
        border-bottom:none;
        border-left:.5pt solid windowtext;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl753272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"_\(* \#\,\#\#0_\)\;_\(* \\\(\#\,\#\#0\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
        text-align:general;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:none;
        border-left:.5pt solid windowtext;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl763272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:16.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:bottom;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl773272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:none;
        border-left:.5pt solid windowtext;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:normal;}
    .xl783272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:none;
        border-left:none;
        background:black;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl793272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:bottom;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl803272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:.5pt solid white;
        background:black;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl813272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        background:black;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl823272
    {color:windowtext;
        font-size:11.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:Percent;
        text-align:right;
        vertical-align:middle;
        border:.5pt solid windowtext;
        background:yellow;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;
        padding-right:12px;
        mso-char-indent-count:1;}
    .xl833272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:none;
        border-left:none;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl843272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:.5pt solid windowtext;
        mso-pattern:black none;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl853272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:Fixed;
        text-align:general;
        vertical-align:middle;
        border:.5pt solid windowtext;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl863272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:Fixed;
        text-align:general;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid windowtext;
        border-bottom:.5pt solid windowtext;
        border-left:.5pt solid windowtext;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl873272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:11.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid windowtext;
        border-bottom:none;
        border-left:.5pt solid windowtext;
        background:yellow;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:normal;}
    .xl883272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:bottom;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:none;
        border-left:none;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl893272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:16.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:bottom;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl903272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:16.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:bottom;
        mso-background-source:auto;
        mso-pattern:auto;
        white-space:nowrap;}
    .xl913272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl923272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:bottom;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl933272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
        text-align:general;
        vertical-align:bottom;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl943272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:none;
        border-left:.5pt solid windowtext;
        background:black;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl953272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:none;
        border-left:none;
        background:black;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl963272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:bottom;
        border-top:.5pt solid windowtext;
        border-right:.5pt solid white;
        border-bottom:.5pt solid windowtext;
        border-left:.5pt solid white;
        background:black;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl973272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:bottom;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:none;
        border-left:none;
        background:black;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl983272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        mso-background-source:auto;
        mso-pattern:auto;
        white-space:nowrap;}
    .xl993272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:none;
        border-left:none;
        mso-background-source:auto;
        mso-pattern:auto;
        white-space:nowrap;}
    .xl1003272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:middle;
        mso-background-source:auto;
        mso-pattern:auto;
        white-space:nowrap;}
    .xl1013272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:Fixed;
        text-align:general;
        vertical-align:middle;
        border:.5pt solid windowtext;
        mso-background-source:auto;
        mso-pattern:auto;
        white-space:nowrap;}
    .xl1023272
    {color:white;
        font-size:11.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:Percent;
        text-align:right;
        vertical-align:bottom;
        border:.5pt solid windowtext;
        background:black;
        mso-pattern:black none;
        white-space:nowrap;
        padding-right:12px;
        mso-char-indent-count:1;}
    .xl1033272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:none;
        border-left:none;
        background:black;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl1043272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial;
        mso-generic-font-family:auto;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl1053272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial;
        mso-generic-font-family:auto;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:bottom;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl1063272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial;
        mso-generic-font-family:auto;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        mso-pattern:black none;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1073272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial;
        mso-generic-font-family:auto;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:bottom;
        mso-pattern:black none;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1083272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
        text-align:general;
        vertical-align:bottom;
        mso-pattern:black none;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1093272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:9.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        mso-background-source:auto;
        mso-pattern:auto;
        white-space:normal;}
    .xl1103272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:9.0pt;
        font-weight:700;
        font-style:italic;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt dashed windowtext;
        border-right:.5pt solid windowtext;
        border-bottom:.5pt solid windowtext;
        border-left:.5pt solid windowtext;
        background:yellow;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:normal;}
    .xl1113272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:11.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:.5pt solid white;
        border-bottom:.5pt solid windowtext;
        border-left:.5pt solid white;
        background:black;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl1123272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:Fixed;
        text-align:general;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:.5pt solid windowtext;
        border-bottom:none;
        border-left:.5pt solid windowtext;
        background:yellow;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl1133272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:Fixed;
        text-align:general;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid windowtext;
        border-bottom:.5pt solid windowtext;
        border-left:.5pt solid windowtext;
        background:yellow;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl1143272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:Fixed;
        text-align:general;
        vertical-align:middle;
        border:.5pt solid windowtext;
        background:yellow;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl1153272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:10.0pt;
        font-weight:400;
        font-style:italic;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:none;
        border-left:none;
        background:black;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl1163272
    {color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:Fixed;
        text-align:right;
        vertical-align:middle;
        border:.5pt solid windowtext;
        background:yellow;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;
        padding-right:24px;
        mso-char-indent-count:2;}
    .xl1173272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:Fixed;
        text-align:general;
        vertical-align:middle;
        border:.5pt solid windowtext;
        background:yellow;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl1183272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:11.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:.5pt solid white;
        border-bottom:.5pt solid windowtext;
        border-left:.5pt solid white;
        background:black;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl1193272
    {color:windowtext;
        font-size:11.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
        text-align:right;
        vertical-align:middle;
        border:.5pt solid windowtext;
        background:yellow;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;
        padding-right:12px;
        mso-char-indent-count:1;}
    .xl1203272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:11.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
        text-align:general;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:.5pt solid windowtext;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1213272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:.5pt solid windowtext;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1223272
    {padding:0px;
        mso-ignore:padding;
        color:red;
        font-size:11.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
        text-align:right;
        vertical-align:bottom;
        mso-background-source:auto;
        mso-pattern:auto;
        white-space:nowrap;}
    .xl1233272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:.5pt solid windowtext;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        background:black;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:normal;}
    .xl1243272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:.5pt solid windowtext;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        background:black;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:normal;}
    .xl1253272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:none;
        border-left:.5pt solid windowtext;
        background:black;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl1263272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1273272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:middle;
        mso-background-source:auto;
        mso-pattern:auto;
        white-space:nowrap;}
    .xl1283272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:11.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
        text-align:general;
        vertical-align:middle;
        border:.5pt solid windowtext;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1293272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:"Book Antiqua", serif;
        mso-font-charset:0;
        mso-number-format:"\@";
        text-align:center;
        vertical-align:middle;
        border:.5pt solid windowtext;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1303272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:"Book Antiqua", serif;
        mso-font-charset:0;
        mso-number-format:"\@";
        text-align:left;
        vertical-align:middle;
        border:.5pt solid windowtext;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1313272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:"Book Antiqua", serif;
        mso-font-charset:0;
        mso-number-format:Fixed;
        text-align:general;
        vertical-align:middle;
        border:.5pt solid windowtext;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1323272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:"Book Antiqua", serif;
        mso-font-charset:0;
        mso-number-format:Fixed;
        text-align:general;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:.5pt solid windowtext;
        border-bottom:none;
        border-left:.5pt solid windowtext;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1333272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:none;
        border-left:none;
        background:black;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl1343272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:none;
        border-left:none;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1353272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:.5pt solid windowtext;
        border-bottom:none;
        border-left:none;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1363272
    {color:windowtext;
        font-size:11.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
        text-align:right;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:.5pt solid windowtext;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        background:yellow;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;
        padding-right:12px;
        mso-char-indent-count:1;}
    .xl1373272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:11.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:Fixed;
        text-align:general;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:.5pt solid windowtext;
        border-bottom:.5pt solid windowtext;
        border-left:1.0pt solid windowtext;
        mso-pattern:black none;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1383272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:11.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:Fixed;
        text-align:general;
        vertical-align:middle;
        border:.5pt solid windowtext;
        mso-pattern:black none;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1393272
    {color:windowtext;
        font-size:11.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:none;
        border-left:.5pt solid windowtext;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;
        padding-left:12px;
        mso-char-indent-count:1;}
    .xl1403272
    {color:windowtext;
        font-size:11.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:none;
        border-left:none;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;
        padding-left:12px;
        mso-char-indent-count:1;}
    .xl1413272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:general;
        vertical-align:bottom;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl1423272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"Short Date";
        text-align:center;
        vertical-align:bottom;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1433272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"Short Date";
        text-align:center;
        vertical-align:bottom;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1443272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:20.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:bottom;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl1453272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:bottom;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        background:black;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl1463272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:bottom;
        border-top:.5pt solid windowtext;
        border-right:.5pt solid windowtext;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        background:black;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl1473272
    {color:windowtext;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:.5pt solid windowtext;
        mso-pattern:black none;
        mso-protection:unlocked visible;
        white-space:nowrap;
        padding-left:12px;
        mso-char-indent-count:1;}
    .xl1483272
    {color:windowtext;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        mso-pattern:black none;
        mso-protection:unlocked visible;
        white-space:nowrap;
        padding-left:12px;
        mso-char-indent-count:1;}
    .xl1493272
    {color:windowtext;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid windowtext;
        border-bottom:.5pt solid windowtext;
        border-left:none;

        mso-pattern:black none;
        mso-protection:unlocked visible;
        white-space:nowrap;
        padding-left:12px;
        mso-char-indent-count:1;}
    .xl1503272
    {color:windowtext;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:.5pt solid windowtext;
        mso-pattern:black none;
        mso-protection:unlocked visible;
        white-space:nowrap;
        padding-left:12px;
        mso-char-indent-count:1;}
    .xl1513272
    {color:windowtext;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        mso-pattern:black none;
        mso-protection:unlocked visible;
        white-space:nowrap;
        padding-left:12px;
        mso-char-indent-count:1;}
    .xl1523272
    {color:windowtext;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:.5pt solid windowtext;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        mso-pattern:black none;
        mso-protection:unlocked visible;
        white-space:nowrap;
        padding-left:12px;
        mso-char-indent-count:1;}
    .xl1533272
    {color:windowtext;
        font-size:9.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        mso-background-source:auto;
        mso-pattern:auto;
        white-space:normal;
        padding-left:48px;
        mso-char-indent-count:4;}
    .xl1543272
    {color:windowtext;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]mmmm\\ yyyy";
        text-align:left;
        vertical-align:middle;
        border-top:1.0pt solid windowtext;
        border-right:none;
        border-bottom:1.0pt solid windowtext;
        border-left:1.0pt solid windowtext;
        mso-pattern:black none;
        mso-protection:unlocked visible;
        white-space:nowrap;
        padding-left:12px;
        mso-char-indent-count:1;}
    .xl1553272
    {color:windowtext;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]mmmm\\ yyyy";
        text-align:left;
        vertical-align:middle;
        border-top:1.0pt solid windowtext;
        border-right:none;
        border-bottom:1.0pt solid windowtext;
        border-left:none;
        mso-pattern:black none;
        mso-protection:unlocked visible;
        white-space:nowrap;
        padding-left:12px;
        mso-char-indent-count:1;}
    .xl1563272
    {color:windowtext;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:"\[ENG\]\[$-409\]mmmm\\ yyyy";
        text-align:left;
        vertical-align:middle;
        border-top:1.0pt solid windowtext;
        border-right:1.0pt solid windowtext;
        border-bottom:1.0pt solid windowtext;
        border-left:none;
        mso-pattern:black none;
        mso-protection:unlocked visible;
        white-space:nowrap;
        padding-left:12px;
        mso-char-indent-count:1;}
    .xl1573272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial;
        mso-generic-font-family:auto;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:bottom;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1583272
    {padding:0px;
        mso-ignore:padding;
        color:blue;
        font-size:11.0pt;
        font-weight:700;
        font-style:italic;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:bottom;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:normal;}
    .xl1593272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial;
        mso-generic-font-family:auto;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:bottom;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        mso-pattern:black none;
        mso-protection:unlocked visible;
        white-space:nowrap;}
    .xl1603272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:11.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:.5pt solid windowtext;
        border-bottom:none;
        border-left:.5pt solid windowtext;
        background:yellow;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:normal;}
    .xl1613272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:11.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:middle;
        border-top:none;
        border-right:.5pt solid windowtext;
        border-bottom:.5pt solid windowtext;
        border-left:.5pt solid windowtext;
        background:yellow;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:normal;}
    .xl1623272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:justify;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:normal;}
    .xl1633272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:1.0pt solid windowtext;
        border-left:.5pt solid white;
        background:black;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl1643272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:1.0pt solid windowtext;
        border-left:none;
        background:black;
        mso-pattern:black none;
        white-space:nowrap;}
    .xl1653272
    {color:windowtext;
        font-size:11.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:.5pt solid windowtext;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;
        padding-left:12px;
        mso-char-indent-count:1;}
    .xl1663272
    {color:windowtext;
        font-size:11.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;
        padding-left:12px;
        mso-char-indent-count:1;}
    .xl1673272
    {color:windowtext;
        font-size:11.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Tahoma, sans-serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:.5pt solid windowtext;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        mso-background-source:auto;
        mso-pattern:auto;
        mso-protection:unlocked visible;
        white-space:nowrap;
        padding-left:12px;
        mso-char-indent-count:1;}
    .xl1683272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:bottom;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:.5pt solid windowtext;
        background:black;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl1693272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:bottom;
        border-top:.5pt solid windowtext;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        background:black;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl1703272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:bottom;
        border-top:.5pt solid windowtext;
        border-right:.5pt solid white;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        background:black;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl1713272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:bottom;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:.5pt solid white;
        background:black;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl1723272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:bottom;
        border-top:none;
        border-right:none;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        background:black;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl1733272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:bottom;
        background:black;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl1743272
    {padding:0px;
        mso-ignore:padding;
        color:white;
        font-size:12.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:left;
        vertical-align:bottom;
        border-top:none;
        border-right:.5pt solid windowtext;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        background:black;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:nowrap;}
    .xl1753272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:11.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:General;
        text-align:center;
        vertical-align:middle;
        border:.5pt solid windowtext;
        background:yellow;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:normal;}
    .xl1763272
    {padding:0px;
        mso-ignore:padding;
        color:windowtext;
        font-size:11.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Cambria, serif;
        mso-font-charset:0;
        mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
        text-align:center;
        vertical-align:middle;
        border-top:.5pt solid windowtext;
        border-right:.5pt solid windowtext;
        border-bottom:.5pt solid windowtext;
        border-left:none;
        background:yellow;
        mso-pattern:black none;
        mso-protection:locked hidden;
        white-space:normal;}
    -->
</style>
<style>
    .par_input
    {
        text-align:center;
        vertical-align:middle;
        background:inherit;
        border:none;
        width: 100%;
     }
.text_centered
{
    text-align:center;
    vertical-align:middle;
}
</style>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="PAR IT_Septembre16_Mac Greco Peralte (2)_3272" align=center
     x:publishsource="Excel">
    <form class="form" method="post" action="/par">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table border=0 cellpadding=0 cellspacing=0 width=1229 class="xl655353272 table-hover"
           style='border-collapse:collapse;table-layout:fixed;width:922pt'>
        <col class=xl655353272 width=88 style='mso-width-source:userset;mso-width-alt:
 3218;width:66pt'>
        <col class=xl655353272 width=103 style='mso-width-source:userset;mso-width-alt:
 3766;width:77pt'>
        <col class=xl655353272 width=115 style='mso-width-source:userset;mso-width-alt:
 4205;width:86pt'>
        <col class=xl655353272 width=90 style='mso-width-source:userset;mso-width-alt:
 3291;width:68pt'>
        <col class=xl655353272 width=91 style='mso-width-source:userset;mso-width-alt:
 3328;width:68pt'>
        <col class=xl655353272 width=103 style='mso-width-source:userset;mso-width-alt:
 3766;width:77pt'>
        <col class=xl655353272 width=105 style='mso-width-source:userset;mso-width-alt:
 3840;width:79pt'>
        <col class=xl655353272 width=68 span=5 style='mso-width-source:userset;
 mso-width-alt:2486;width:51pt'>
        <col class=xl655353272 width=77 style='mso-width-source:userset;mso-width-alt:
 2816;width:58pt'>
        <col class=xl655353272 width=5 style='mso-width-source:userset;mso-width-alt:
 182;width:4pt'>
        <col class=xl655353272 width=112 style='mso-width-source:userset;mso-width-alt:
 4096;width:84pt'>
        <tr height=34 style='height:25.5pt'>
            <td colspan=15 height=34 width=1229 style='height:25.5pt;width:922pt'
                align=left valign=top><v:shapetype id="_x0000_t75" coordsize="21600,21600"
                                                   o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe" filled="f"
                                                   stroked="f">
                    <v:stroke joinstyle="miter"/>
                    <v:formulas>
                        <v:f eqn="if lineDrawn pixelLineWidth 0"/>
                        <v:f eqn="sum @0 1 0"/>
                        <v:f eqn="sum 0 0 @1"/>
                        <v:f eqn="prod @2 1 2"/>
                        <v:f eqn="prod @3 21600 pixelWidth"/>
                        <v:f eqn="prod @3 21600 pixelHeight"/>
                        <v:f eqn="sum @0 0 1"/>
                        <v:f eqn="prod @6 1 2"/>
                        <v:f eqn="prod @7 21600 pixelWidth"/>
                        <v:f eqn="sum @8 21600 0"/>
                        <v:f eqn="prod @7 21600 pixelHeight"/>
                        <v:f eqn="sum @10 21600 0"/>
                    </v:formulas>
                    <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
                    <o:lock v:ext="edit" aspectratio="t"/>
                    <span class="logo-lg"><img src="{{ asset("/images/CARE_PAR_logo.png") }}"  style='position:absolute;margin-left:6.75pt;margin-top:5.25pt;width:61.5pt;
   height:76.5pt;z-index:1;visibility:visible'/></span>

  <table cellpadding=0 cellspacing=0>
   <tr>
    <td colspan=15 height=34 class=xl1443272 width=1229 style='height:25.5pt;
    width:922pt'><a name="RANGE!A1:O38">Personnel Activity Report (PAR)</a></td>
   </tr>
  </table>
  </span></td>
        </tr>
        <tr height=27 style='height:20.25pt'>
            <td height=27 class=xl893272 style='height:20.25pt'>&nbsp;</td>
            <td class=xl893272>&nbsp;</td>
            <td class=xl893272>&nbsp;</td>
            <td class=xl893272>&nbsp;</td>
            <td class=xl903272></td>
            <td class=xl903272></td>
            <td class=xl903272></td>
            <td class=xl903272></td>
            <td class=xl903272></td>
            <td class=xl763272></td>
            <td class=xl763272></td>
            <td class=xl763272></td>
            <td class=xl655353272></td>
            <td class=xl903272></td>
            <td class=xl1223272><span style='mso-spacerun:yes'> </span>ATTACHMENT 1<span
                        style='mso-spacerun:yes'>  </span></td>
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.75pt'>
            <td height=21 class=xl655353272 style='height:15.75pt'></td>
            <td colspan=14 rowspan=4 class=xl1533272 width=1141 style='width:856pt'><font
                        class="font53272">POLICY &amp; PROCEDURES SUMMARY</font><font
                        class="font63272">: All employees<span style='mso-spacerun:yes'>  </span>are
                    required to report hours worked as evidenced by completion of a PAR.<span
                            style='mso-spacerun:yes'>  </span>All compensated time must be reported on
                    the PAR. This would include time spent on direct project activities as well
                    as time spent on other activities such as proposal development, sick leave,
                    vacation, holidays, administrative duties, travel, etc.<span
                            style='mso-spacerun:yes'>  </span>The period covered by the PAR must coincide
                    with the pay period.<span style='mso-spacerun:yes'>  </span>All supervisors
                    must ensure that the approved PARs are submitted on the first business day
                    after payday to the unit that performs Payroll Accounting for appropriate and
                    timely allocation of personnel costs to the various funding sources.</font></td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
            <td height=20 class=xl655353272 style='height:15.0pt'></td>
        </tr>
        <tr height=20 style='mso-height-source:userset;height:15.0pt'>
            <td height=20 class=xl655353272 style='height:15.0pt'></td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl913272 style='height:15.0pt'>&nbsp;</td>
        </tr>
        <tr height=21 style='mso-height-source:userset;height:15.75pt'>
            <td height=21 class=xl1413272 style='height:15.75pt'>PART I</td>
            <td class=xl913272>&nbsp;</td>
            <td class=xl1093272 width=115 style='width:86pt'></td>
            <td class=xl1093272 width=90 style='width:68pt'></td>
            <td class=xl1093272 width=91 style='width:68pt'></td>
            <td class=xl1093272 width=103 style='width:77pt'></td>
            <td class=xl1093272 width=105 style='width:79pt'></td>
            <td class=xl1093272 width=68 style='width:51pt'></td>
            <td class=xl1093272 width=68 style='width:51pt'></td>
            <td class=xl1093272 width=68 style='width:51pt'></td>
            <td class=xl1093272 width=68 style='width:51pt'></td>
            <td class=xl1093272 width=68 style='width:51pt'></td>
            <td class=xl1093272 width=77 style='width:58pt'></td>
            <td class=xl1093272 width=5 style='width:4pt'></td>
            <td class=xl933272>&nbsp;</td>
        </tr>
        <tr height=22 style='height:16.5pt'>
            <td height=22 class=xl943272 colspan=2 style='height:16.5pt'><span
                        style='mso-spacerun:yes'> </span>Employee Name</td>
            <td class=xl953272>&nbsp;</td>
            <td class=xl963272><span style='mso-spacerun:yes'> </span>Empl. No.</td>
            <td class=xl973272><span style='mso-spacerun:yes'> </span>Job Title</td>
            <td class=xl973272>&nbsp;</td>
            <td class=xl973272>&nbsp;</td>
            <td class=xl803272><span style='mso-spacerun:yes'> </span>Busines<span
                        style='display:none'>s Unit Name</span></td>
            <td class=xl783272>&nbsp;</td>
            <td class=xl783272>&nbsp;</td>
            <td class=xl783272>&nbsp;</td>
            <td class=xl783272>Period</td>
            <td colspan=3 class=xl1453272 style='border-right:.5pt solid black'>&nbsp;</td>
        </tr>
        <tr height=40 style='mso-height-source:userset;height:30.0pt'>
            <td colspan=3 height=40 class=xl1473272 style='border-right:.5pt solid black;
  height:30.0pt'>Mac Greco Peralte</td>
            <td class=xl843272 align=right style='border-top:none;border-left:none'>24661</td>
            <td colspan=3 class=xl1503272 style='border-right:.5pt solid black'>IT Web
                Developer Intern</td>
            <td colspan=4 class=xl1503272 style='border-right:.5pt solid black;
  border-left:none'>CARE</td>
            <td colspan=4 class=xl1543272 style='border-right:1.0pt solid black'>
                <input type="month" class="par_input"/></td>
        </tr>
        <tr height=21 style='height:15.75pt'>
            <td height=21 class=xl1413272 style='height:15.75pt'>PART II</td>
            <td class=xl913272>&nbsp;</td>
            <td class=xl913272>&nbsp;</td>
            <td class=xl913272>&nbsp;</td>
            <td class=xl913272>&nbsp;</td>
            <td class=xl913272>&nbsp;</td>
            <td class=xl913272>&nbsp;</td>
            <td class=xl923272>&nbsp;</td>
            <td class=xl913272>&nbsp;</td>
            <td class=xl713272>&nbsp;</td>
            <td class=xl713272>&nbsp;</td>
            <td class=xl713272>&nbsp;</td>
            <td class=xl913272>&nbsp;</td>
            <td class=xl913272>&nbsp;</td>
            <td class=xl933272>&nbsp;</td>
        </tr>
        <tr class=xl983272 height=21 style='height:15.75pt'>
            <td colspan=7 height=21 class=xl1683272 style='border-right:.5pt solid white;
  height:15.75pt'><span style='mso-spacerun:yes'> </span>Time Allocation</td>
            <td colspan=6 class=xl1713272 style='border-right:.5pt solid black;
  border-left:none'><span style='mso-spacerun:yes'> </span>Number of Hours
                Worked</td>
            <td class=xl773272 width=5 style='border-left:none;width:4pt'>&nbsp;</td>
            <td class=xl813272>Percentage</td>
        </tr>
        <tr class=xl983272 height=36 style='mso-height-source:userset;height:27.0pt'>
            <td height=36 class=xl873272 width=88 style='height:27.0pt;width:66pt'>Dept
                ID</td>
            <td class=xl873272 width=103 style='border-left:none;width:77pt'>Fund Code</td>
            <td class=xl873272 width=115 style='border-left:none;width:86pt'>Business
                Unit</td>
            <td class=xl873272 width=90 style='border-left:none;width:68pt'>Project ID</td>
            <td class=xl873272 width=91 style='border-left:none;width:68pt'>Activity</td>
            <td class=xl873272 width=103 style='border-left:none;width:77pt'>Source Type</td>
            <td class=xl873272 width=105 style='border-left:none;width:79pt'>Category</td>
            <td rowspan=2 class=xl1753272 width=68 style='border-top:none;width:51pt'>Week
                1<span style='mso-spacerun:yes'>  </span></td>
            <td rowspan=2 class=xl1603272 width=68 style='border-bottom:.5pt solid black;
  border-top:none;width:51pt'>Week 2<span style='mso-spacerun:yes'> </span></td>
            <td rowspan=2 class=xl1603272 width=68 style='border-bottom:.5pt solid black;
  border-top:none;width:51pt'>Week 3</td>
            <td rowspan=2 class=xl1603272 width=68 style='border-bottom:.5pt solid black;
  border-top:none;width:51pt'>Week 4<span style='mso-spacerun:yes'> </span></td>
            <td rowspan=2 class=xl1603272 width=68 style='border-bottom:.5pt solid black;
  border-top:none;width:51pt'>Week 5</td>
            <td rowspan=2 class=xl1763272 width=77 style='border-top:none;width:58pt'><span
                        style='mso-spacerun:yes'> </span>Total Hours<span
                        style='mso-spacerun:yes'> </span></td>
            <td class=xl773272 width=5 style='border-left:none;width:4pt'>&nbsp;</td>
            <td rowspan=2 class=xl1603272 width=112 style='border-bottom:.5pt solid black;
  width:84pt'>Distribution</td>
        </tr>
        <tr class=xl983272 height=32 style='height:24.0pt'>
            <td height=32 class=xl1103272 width=88 style='height:24.0pt;width:66pt'>Main
                office/ Sub-Office</td>
            <td class=xl1103272 width=103 style='border-left:none;width:77pt'>Agreement
                or Award Number</td>
            <td class=xl1103272 width=115 style='border-left:none;width:86pt'>Country
                Office or CI HQ Office</td>
            <td class=xl1103272 width=90 style='border-left:none;width:68pt'>Pamodzi
                Projects</td>
            <td class=xl1103272 width=91 style='border-left:none;width:68pt'>Budget Line
                Item</td>
            <td class=xl1103272 width=103 style='border-left:none;width:77pt'>CARE
                Activity or Task</td>
            <td class=xl1103272 width=105 style='border-left:none;width:79pt'>Sub-Analysis,
                Employee ID, etc</td>
            <td class=xl773272 width=5 style='border-left:none;width:4pt'>&nbsp;</td>
        </tr>
        @for($i=0; $i<8;$i++)
        <tr height=26 style='mso-height-source:userset;height:20.1pt'>
            <td height=26 class=xl1293272 style='height:20.1pt;border-top:none'><input type="text"  name="DeptID{{$i}}" class="par_input" value="HT-SPC"></td>
            <td class=xl1293272 style='border-top:none;border-left:none'>
                    <select name="FundCode{{$i}}" class="par_input">
                        <option value="1">VUS25U</option>
                        <option value="2">US25V</option>
                        <option value="3">US25W</option>
                        <option value="4">US25Y</option>
                    </select></td>
            <td class=xl1293272 style='border-top:none;border-left:none'>
                <select name="BusUnit{{$i}}" class="par_input">
                    <option value="HTI01">HTI01</option>
                    <option value="HTI02">HTI02</option>
                    <option value="HTI03">HTI03</option>
                    <option value="HTI04">HTI04</option>
                </select></td>

            </td>
            <td class=xl1293272 style='border-top:none;border-left:none'>
                <select name="ProjetId{{$i}}" class="par_input">
                    <option value="1">UFFPHT0017</option>
                    <option value="2">UFFPHT0018</option>
                    <option value="3">UFFPHT0019</option>
                    <option value="4">UFFPHT0020</option>
                </select>
            </td>
            <td class=xl1293272 style='border-top:none;border-left:none'>
                <select name="ActivityID{{$i}}" class="par_input">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            <td class=xl1293272 style='border-top:none;border-left:none'>
                <select name="SourceType{{$i}}" class="par_input">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </td>
            <td class=xl1303272 style='border-top:none;border-left:none'>
                <input type="text"  class="par_input" value="00220">
            </td>
            <td class=xl1373272 align=center style='border-top:none'>
                <input type="text"  class="par_input" value="10" >
            </td>
            <td class=xl1383272 align=center style='border-top:none;border-left:none'>
                <input type="text"  class="par_input" value="10" >
            </td>
            <td class=xl1383272 align=center style='border-top:none;border-left:none'>
                <input type="text"  class="par_input" value="10" >
            </td>
            <td class=xl1383272 align=center style='border-top:none;border-left:none'>
                <input type="text"  class="par_input" value="10" >
            </td>
            <td class=xl1383272 align=center style='border-top:none;border-left:none'>
                <input type="text"  class="par_input" value="10" >
            </td>
            <td class=xl1143272 align=center style='border-top:none;border-left:none'>
                176.00
            </td>
            <td class=xl743272 style='border-left:none'>&nbsp;</td>
            <td class=xl823272 style='border-top:none'>
                <input type="text"  class="par_input" value="0.00%">
            </td>
        </tr>
        @endfor







        <tr height=21 style='mso-height-source:userset;height:15.75pt'>
            <td height=21 class=xl993272 style='height:15.75pt;border-top:none'>&nbsp;</td>
            <td class=xl993272 style='border-top:none'>&nbsp;</td>
            <td class=xl1003272></td>
            <td class=xl1003272></td>
            <td class=xl1003272></td>
            <td class=xl1003272></td>
            <td class=xl1003272>Total</td>
            <td class=xl1013272 align=center>16.00</td>
            <td class=xl1013272 align=center style='border-left:none'>0.00</td>
            <td class=xl1013272 align=center style='border-left:none'>0.00</td>
            <td class=xl1013272 align=center style='border-left:none'>0.00</td>
            <td class=xl1013272 align=center style='border-left:none'>0.00</td>
            <td class=xl1143272 align=center style='border-left:none'>0.00</td>
            <td class=xl653272>&nbsp;</td>
            <td class=xl1023272 style='border-top:none'>100.00%</td>
        </tr>
        <tr height=21 style='height:15.75pt'>
            <td colspan=15 height=21 class=xl1623272 width=1229 style='height:15.75pt;
  width:922pt'>PART III</td>
        </tr>
        <tr class=xl983272 height=22 style='height:16.5pt'>
            <td height=22 class=xl1253272 colspan=3 style='height:16.5pt'><span
                        style='mso-spacerun:yes'> </span>Paid Time Off (PTO) Tracking</td>
            <td class=xl1153272># of Days =&gt;</td>
            <td class=xl1113272>Prior Periods</td>
            <td class=xl1113272 style='border-left:none'>This Period</td>
            <td class=xl1183272 style='border-left:none'>Total Earned</td>
            <td colspan=4 class=xl1633272 style='border-left:none'><span
                        style='mso-spacerun:yes'>   </span>Number of PTO Hours Used</td>
            <td class=xl1333272>&nbsp;</td>
            <td class=xl1233272 width=77 style='width:58pt'><span
                        style='mso-spacerun:yes'>  </span>Total<span
                        style='mso-spacerun:yes'> </span></td>
            <td class=xl983272></td>
            <td class=xl1243272 width=112 style='width:84pt'><span
                        style='mso-spacerun:yes'> </span># Days Left<span
                        style='mso-spacerun:yes'> </span></td>
        </tr>
        <tr height=25 style='mso-height-source:userset;height:18.95pt'>
            <td colspan=4 height=25 class=xl1653272 style='border-right:.5pt solid black;
  height:18.95pt'>Annual Leave (Vacation Leave)</td>
            <td class=xl1283272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl1203272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl1193272 style='border-top:none'><span
                        style='mso-spacerun:yes'>   </span></td>
            <td class=xl863272 style='border-left:none'>&nbsp;</td>
            <td class=xl863272 style='border-left:none'>&nbsp;</td>
            <td class=xl863272 style='border-left:none'>&nbsp;</td>
            <td class=xl863272 style='border-left:none'>&nbsp;</td>
            <td class=xl863272 style='border-left:none'>&nbsp;</td>
            <td class=xl1133272 align=right style='border-left:none'>0.00</td>
            <td class=xl743272 style='border-left:none'>&nbsp;</td>
            <td class=xl1163272 style='border-top:none'>#VALUE!</td>
        </tr>
        <tr height=25 style='mso-height-source:userset;height:18.95pt'>
            <td colspan=4 height=25 class=xl1653272 style='height:18.95pt'>Holiday
                Leave<span style='mso-spacerun:yes'> </span></td>
            <td class=xl1263272 style='border-top:none'>&nbsp;</td>
            <td class=xl1213272 style='border-top:none'>&nbsp;</td>
            <td class=xl1193272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl1133272 align=right style='border-left:none'>0.00</td>
            <td class=xl743272 style='border-left:none'>&nbsp;</td>
            <td class=xl1163272 style='border-top:none'>N/A</td>
        </tr>
        <tr height=25 style='mso-height-source:userset;height:18.95pt'>
            <td colspan=4 height=25 class=xl1393272 style='height:18.95pt'>Sick Leave</td>
            <td class=xl1343272 style='border-top:none'>&nbsp;</td>
            <td class=xl1353272 style='border-top:none'>&nbsp;</td>
            <td class=xl1193272 style='border-top:none;border-left:none'><span
                        style='mso-spacerun:yes'>   </span></td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl1133272 align=right style='border-left:none'>0.00</td>
            <td class=xl743272 style='border-left:none'>&nbsp;</td>
            <td class=xl1163272 style='border-top:none'>N/A</td>
        </tr>
        <tr height=25 style='mso-height-source:userset;height:18.95pt'>
            <td height=25 class=xl1393272 style='height:18.95pt'>Hardship</td>
            <td class=xl1403272>&nbsp;</td>
            <td class=xl1403272>&nbsp;</td>
            <td class=xl1403272>&nbsp;</td>
            <td class=xl1343272>&nbsp;</td>
            <td class=xl1353272>&nbsp;</td>
            <td class=xl1363272 style='border-top:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl1133272 align=right style='border-left:none'>0.00</td>
            <td class=xl743272 style='border-left:none'>&nbsp;</td>
            <td class=xl1163272 style='border-top:none'>N/A</td>
        </tr>
        <tr height=25 style='mso-height-source:userset;height:18.95pt'>
            <td height=25 class=xl1393272 style='height:18.95pt'>R&amp;R</td>
            <td class=xl1403272>&nbsp;</td>
            <td class=xl1403272>&nbsp;</td>
            <td class=xl1403272>&nbsp;</td>
            <td class=xl1343272>&nbsp;</td>
            <td class=xl1353272>&nbsp;</td>
            <td class=xl1363272 style='border-top:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl1133272 align=right style='border-left:none'>0.00</td>
            <td class=xl743272 style='border-left:none'>&nbsp;</td>
            <td class=xl1163272 style='border-top:none'>N/A</td>
        </tr>
        <tr height=25 style='mso-height-source:userset;height:18.95pt'>
            <td colspan=4 height=25 class=xl1653272 style='height:18.95pt'>Orthers ( to
                specify)</td>
            <td class=xl1263272>&nbsp;</td>
            <td class=xl1213272>&nbsp;</td>
            <td class=xl1363272 style='border-top:none'><span
                        style='mso-spacerun:yes'>   </span></td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl853272 style='border-top:none;border-left:none'>&nbsp;</td>
            <td class=xl1133272 align=right style='border-left:none'>0.00</td>
            <td class=xl743272 style='border-left:none'>&nbsp;</td>
            <td class=xl1163272 style='border-top:none'>N/A</td>
        </tr>
        <tr height=23 style='mso-height-source:userset;height:17.25pt'>
            <td height=23 class=xl1273272 style='height:17.25pt'></td>
            <td class=xl1273272></td>
            <td class=xl1003272></td>
            <td class=xl1003272></td>
            <td class=xl1003272></td>
            <td class=xl1003272></td>
            <td class=xl1003272>Total</td>
            <td class=xl1173272 align=right style='border-top:none'>0.00</td>
            <td class=xl1173272 align=right style='border-top:none;border-left:none'>0.00</td>
            <td class=xl1173272 align=right style='border-top:none;border-left:none'>0.00</td>
            <td class=xl1173272 align=right style='border-top:none;border-left:none'>0.00</td>
            <td class=xl1173272 align=right style='border-top:none;border-left:none'>0.00</td>
            <td class=xl1143272 align=right style='border-top:none;border-left:none'>0.00</td>
            <td class=xl753272 style='border-left:none'>&nbsp;</td>
            <td class=xl1163272 style='border-top:none'>#VALUE!</td>
        </tr>
        <tr height=1 style='mso-height-source:userset;height:.75pt'>
            <td height=1 class=xl663272 style='height:.75pt'>&nbsp;</td>
            <td class=xl663272>&nbsp;</td>
            <td class=xl663272>&nbsp;</td>
            <td class=xl663272>&nbsp;</td>
            <td class=xl663272>&nbsp;</td>
            <td class=xl663272>&nbsp;</td>
            <td class=xl663272>&nbsp;</td>
            <td class=xl673272>&nbsp;</td>
            <td class=xl673272>&nbsp;</td>
            <td class=xl673272>&nbsp;</td>
            <td class=xl673272>&nbsp;</td>
            <td class=xl673272>&nbsp;</td>
            <td class=xl653272>&nbsp;</td>
            <td class=xl683272>&nbsp;</td>
            <td class=xl693272></td>
        </tr>
        <tr height=61 style='mso-height-source:userset;height:45.75pt'>
            <td colspan=15 height=61 class=xl1583272 width=1229 style='height:45.75pt;
  width:922pt'>This report is an after-the-fact determination of the activity
                of the employee and represents a real estimate of the work performed during
                the pay period. All supervisors must ensure that the approved PARs are
                submitted on the last day of the month, or at the latest, within the
                first<span style='mso-spacerun:yes'>  </span>two working days of the
                following month to the Unit that performs Payroll Accounting<span
                        style='mso-spacerun:yes'>  </span>for appropriate<span
                        style='mso-spacerun:yes'>  </span>and timely allocation of personnel costs to
                the various funding sources.</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl713272 style='height:15.0pt'>&nbsp;</td>
            <td class=xl633272>&nbsp;</td>
            <td class=xl633272>&nbsp;</td>
            <td class=xl633272>&nbsp;</td>
            <td class=xl633272>&nbsp;</td>
            <td class=xl633272>&nbsp;</td>
            <td class=xl633272>&nbsp;</td>
            <td class=xl723272>&nbsp;</td>
            <td class=xl633272>&nbsp;</td>
            <td class=xl633272>&nbsp;</td>
            <td class=xl633272>&nbsp;</td>
            <td class=xl633272>&nbsp;</td>
            <td class=xl633272>&nbsp;</td>
            <td class=xl633272>&nbsp;</td>
            <td class=xl643272>&nbsp;</td>
        </tr>
        <tr height=17 style='height:12.75pt'>
            <td height=17 class=xl1063272 style='height:12.75pt'>&nbsp;</td>
            <td class=xl1063272>&nbsp;</td>
            <td class=xl1063272>&nbsp;</td>
            <td class=xl1063272>&nbsp;</td>
            <td class=xl1063272>&nbsp;</td>
            <td class=xl1063272>&nbsp;</td>
            <td class=xl1063272>&nbsp;</td>
            <td class=xl1073272>&nbsp;</td>
            <td class=xl1063272>&nbsp;</td>
            <td class=xl1063272>&nbsp;</td>
            <td class=xl1063272>&nbsp;</td>
            <td class=xl1063272>&nbsp;</td>
            <td class=xl1063272>&nbsp;</td>
            <td class=xl1063272>&nbsp;</td>
            <td class=xl1083272>&nbsp;</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td colspan=4 height=20 class=xl1573272 style='height:15.0pt'>Mac Greco
                Peralte</td>
            <td class=xl1423272>9/30/2016</td>
            <td class=xl1063272>&nbsp;</td>
            <td class=xl1063272>&nbsp;</td>
            <td colspan=7 class=xl1593272>Jean-Bernard MERISTIL</td>
            <td class=xl1433272>9/30/2016</td>
        </tr>
        <tr height=21 style='height:15.75pt'>
            <td colspan=4 height=21 class=xl883272 style='height:15.75pt'>Employee's
                Name<span style='mso-spacerun:yes'> </span></td>
            <td class=xl793272>Date</td>
            <td class=xl1043272>&nbsp;</td>
            <td class=xl1043272>&nbsp;</td>
            <td colspan=6 class=xl883272>Supervisor's Name</td>
            <td class=xl833272 style='border-top:none'>&nbsp;</td>
            <td class=xl883272>Date</td>
        </tr>
        <tr height=20 style='height:15.0pt'>
            <td height=20 class=xl733272 style='height:15.0pt'></td>
            <td class=xl733272></td>
            <td class=xl733272></td>
            <td class=xl733272></td>
            <td class=xl733272></td>
            <td class=xl1043272>&nbsp;</td>
            <td class=xl1043272>&nbsp;</td>
            <td class=xl1053272>&nbsp;</td>
            <td class=xl733272></td>
            <td class=xl733272></td>
            <td class=xl733272></td>
            <td class=xl733272></td>
            <td class=xl703272></td>
            <td class=xl703272></td>
            <td class=xl703272></td>
        </tr>
        <![if supportMisalignedColumns]>
        <tr height=0 style='display:none'>
            <td width=88 style='width:66pt'></td>
            <td width=103 style='width:77pt'></td>
            <td width=115 style='width:86pt'></td>
            <td width=90 style='width:68pt'></td>
            <td width=91 style='width:68pt'></td>
            <td width=103 style='width:77pt'></td>
            <td width=105 style='width:79pt'></td>
            <td width=68 style='width:51pt'></td>
            <td width=68 style='width:51pt'></td>
            <td width=68 style='width:51pt'></td>
            <td width=68 style='width:51pt'></td>
            <td width=68 style='width:51pt'></td>
            <td width=77 style='width:58pt'></td>
            <td width=5 style='width:4pt'></td>
            <td width=112 style='width:84pt'></td>
        </tr>
        <![endif]>
    </table>




        <div class="row">

            <div class="col-md-12">
<div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title pull-left">Actions</h3>
                </div>
                <!-- /.box-header -->

                    <div class="box-body">
                        <div class="col-md-3">
                        <button class="btn btn-flat btn-block btn-info "> <i class="glyphicon glyphicon-save pull-left"></i>Sauvegarder</button>
                          </div>
                        <div class="col-md-3">
                            <button class="btn btn-flat btn-block btn-primary "> <i class="glyphicon glyphicon-send pull-left"></i>Soumettre</button>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-flat btn-block btn-success"><i class="glyphicon glyphicon-ok pull-left"></i> Valider</button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-flat btn-block btn-danger "><i class="glyphicon glyphicon-remove pull-left"></i>Rejeter</button>

                        </div>

                    </div>
                    <!-- /.box-body -->

</div>



            </div>
        </div>
</form>
</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
@endsection
@section('script')
    <script src="{{ asset ("/bower_components/AdminLTE/plugins/select2/select2.min.js") }}" type="text/javascript"></script>
    <script>

        $("#select2").select2({
            ajax: {
                dataType: 'json',
                url: '{{ url("funds/active/list") }}',
                delay: 400,
                data: function(params) {
                    return {
                        term: params.term
                    }
                },
                processResults: function (data, page) {
                    return {
                        results: data
                    };
                },
            }
        });

    </script>
@endsection