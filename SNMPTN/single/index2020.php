<!--
    - naufalist@2020 -
    # single version 
    
    tolong sc sampah buatan gua ini jgn diganti" :v
    makasih
    lu ganti ganti? fix gak bisa ngoding B) masa buat ginian doang gak bisa hhhhh
-->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Hasil Seleksi SNMPTN 2020</title>
    <script type="text/javascript">
       function hide(x) {
           //document.getElementById(x).style.display = "none";
           document.getElementById(x).classList.add("hidden");
       }
       function show(x) {
           //document.getElementById(x).style.display = null;
           //document.getElementById(x).removeAttribute("style");
           document.getElementById(x).classList.remove("hidden");
       }
    </script>
    <!--link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-gv0oNvwnqzF6ULI9TVsSmnULNb3zasNysvWwfT/s4l8k5I+g6oFz9dye0wg3rQ2Q" crossorigin="anonymous"-->
    <!--script src="merge.js" type="text/javascript"></script-->
    <!-- Sweet Alert -->
    <!--link rel="stylesheet" type="text/css" href="sweetalert.css"-->
    <!--script type="text/javascript" src="sweetalert.min.js"></script-->
    <!-- Validasi Form -->
    <script>
    function validateForm() {
        var x = document.forms["snm"]["regno"].value;
        var y = document.forms["snm"]["nisn"].value;
        if (x.length !== 10) {
            setTimeout(function () { swal("Invalid!","Nomor Pendaftaran harus berjumlah 10","error")}, 1000);
            //alert("Nomor Pendaftaran harus berjumlah 10!");
            return false;
        }
        if (y.length !== 10) {
            setTimeout(function () { swal("Invalid!","NISN harus berjumlah 10","error")}, 1000);
            //alert("NISN harus berjumlah 10!");
            return false;
        }
    }
    </script>
    <style type="text/css">
        body.stop-scrolling {
          height: 100%;
          overflow: hidden; }

        .sweet-overlay {
          background-color: black;
          /* IE8 */
          -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=40)";
          /* IE8 */
          background-color: rgba(0, 0, 0, 0.4);
          position: fixed;
          left: 0;
          right: 0;
          top: 0;
          bottom: 0;
          display: none;
          z-index: 10000; }

        .sweet-alert {
          background-color: white;
          font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
          width: 478px;
          padding: 17px;
          border-radius: 2px;
          text-align: center;
          position: fixed;
          left: 50%;
          top: 50%;
          margin-left: -256px;
          margin-top: -200px;
          overflow: hidden;
          display: none;
          z-index: 99999; }
          @media all and (max-width: 540px) {
            .sweet-alert {
              width: auto;
              margin-left: 0;
              margin-right: 0;
              left: 15px;
              right: 15px; } }
          .sweet-alert h2 {
            color: #575757;
            font-size: 30px;
            text-align: center;
            font-weight: 600;
            text-transform: none;
            position: relative;
            margin: 25px 0;
            padding: 0;
            line-height: 40px;
            display: block; }
          .sweet-alert p {
            color: #797979;
            font-size: 16px;
            text-align: center;
            font-weight: 300;
            position: relative;
            text-align: inherit;
            float: none;
            margin: 0;
            padding: 0;
            line-height: normal; }
          .sweet-alert fieldset {
            border: none;
            position: relative; }
          .sweet-alert .sa-error-container {
            background-color: #f1f1f1;
            margin-left: -17px;
            margin-right: -17px;
            overflow: hidden;
            padding: 0 10px;
            max-height: 0;
            webkit-transition: padding 0.15s, max-height 0.15s;
            transition: padding 0.15s, max-height 0.15s; }
            .sweet-alert .sa-error-container.show {
              padding: 10px 0;
              max-height: 100px;
              webkit-transition: padding 0.2s, max-height 0.2s;
              transition: padding 0.25s, max-height 0.25s; }
            .sweet-alert .sa-error-container .icon {
              display: inline-block;
              width: 24px;
              height: 24px;
              border-radius: 50%;
              background-color: #ea7d7d;
              color: white;
              line-height: 24px;
              text-align: center;
              margin-right: 3px; }
            .sweet-alert .sa-error-container p {
              display: inline-block; }
          .sweet-alert .sa-input-error {
            position: absolute;
            top: 29px;
            right: 26px;
            width: 20px;
            height: 20px;
            opacity: 0;
            -webkit-transform: scale(0.5);
            transform: scale(0.5);
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            -webkit-transition: all 0.1s;
            transition: all 0.1s; }
            .sweet-alert .sa-input-error::before, .sweet-alert .sa-input-error::after {
              content: "";
              width: 20px;
              height: 6px;
              background-color: #f06e57;
              border-radius: 3px;
              position: absolute;
              top: 50%;
              margin-top: -4px;
              left: 50%;
              margin-left: -9px; }
            .sweet-alert .sa-input-error::before {
              -webkit-transform: rotate(-45deg);
              transform: rotate(-45deg); }
            .sweet-alert .sa-input-error::after {
              -webkit-transform: rotate(45deg);
              transform: rotate(45deg); }
            .sweet-alert .sa-input-error.show {
              opacity: 1;
              -webkit-transform: scale(1);
              transform: scale(1); }
          .sweet-alert input {
            width: 100%;
            box-sizing: border-box;
            border-radius: 3px;
            border: 1px solid #d7d7d7;
            height: 43px;
            margin-top: 10px;
            margin-bottom: 17px;
            font-size: 18px;
            box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.06);
            padding: 0 12px;
            display: none;
            -webkit-transition: all 0.3s;
            transition: all 0.3s; }
            .sweet-alert input:focus {
              outline: none;
              box-shadow: 0px 0px 3px #c4e6f5;
              border: 1px solid #b4dbed; }
              .sweet-alert input:focus::-moz-placeholder {
                transition: opacity 0.3s 0.03s ease;
                opacity: 0.5; }
              .sweet-alert input:focus:-ms-input-placeholder {
                transition: opacity 0.3s 0.03s ease;
                opacity: 0.5; }
              .sweet-alert input:focus::-webkit-input-placeholder {
                transition: opacity 0.3s 0.03s ease;
                opacity: 0.5; }
            .sweet-alert input::-moz-placeholder {
              color: #bdbdbd; }
            .sweet-alert input:-ms-input-placeholder {
              color: #bdbdbd; }
            .sweet-alert input::-webkit-input-placeholder {
              color: #bdbdbd; }
          .sweet-alert.show-input input {
            display: block; }
          .sweet-alert .sa-confirm-button-container {
            display: inline-block;
            position: relative; }
          .sweet-alert .la-ball-fall {
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -27px;
            margin-top: 4px;
            opacity: 0;
            visibility: hidden; }
          .sweet-alert button {
            background-color: #8CD4F5;
            color: white;
            border: none;
            box-shadow: none;
            font-size: 17px;
            font-weight: 500;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            padding: 10px 32px;
            margin: 26px 5px 0 5px;
            cursor: pointer; }
            .sweet-alert button:focus {
              outline: none;
              box-shadow: 0 0 2px rgba(128, 179, 235, 0.5), inset 0 0 0 1px rgba(0, 0, 0, 0.05); }
            .sweet-alert button:hover {
              background-color: #7ecff4; }
            .sweet-alert button:active {
              background-color: #5dc2f1; }
            .sweet-alert button.cancel {
              background-color: #C1C1C1; }
              .sweet-alert button.cancel:hover {
                background-color: #b9b9b9; }
              .sweet-alert button.cancel:active {
                background-color: #a8a8a8; }
              .sweet-alert button.cancel:focus {
                box-shadow: rgba(197, 205, 211, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.0470588) 0px 0px 0px 1px inset !important; }
            .sweet-alert button[disabled] {
              opacity: .6;
              cursor: default; }
            .sweet-alert button.confirm[disabled] {
              color: transparent; }
              .sweet-alert button.confirm[disabled] ~ .la-ball-fall {
                opacity: 1;
                visibility: visible;
                transition-delay: 0s; }
            .sweet-alert button::-moz-focus-inner {
              border: 0; }
          .sweet-alert[data-has-cancel-button=false] button {
            box-shadow: none !important; }
          .sweet-alert[data-has-confirm-button=false][data-has-cancel-button=false] {
            padding-bottom: 40px; }
          .sweet-alert .sa-icon {
            width: 80px;
            height: 80px;
            border: 4px solid gray;
            -webkit-border-radius: 40px;
            border-radius: 40px;
            border-radius: 50%;
            margin: 20px auto;
            padding: 0;
            position: relative;
            box-sizing: content-box; }
            .sweet-alert .sa-icon.sa-error {
              border-color: #F27474; }
              .sweet-alert .sa-icon.sa-error .sa-x-mark {
                position: relative;
                display: block; }
              .sweet-alert .sa-icon.sa-error .sa-line {
                position: absolute;
                height: 5px;
                width: 47px;
                background-color: #F27474;
                display: block;
                top: 37px;
                border-radius: 2px; }
                .sweet-alert .sa-icon.sa-error .sa-line.sa-left {
                  -webkit-transform: rotate(45deg);
                  transform: rotate(45deg);
                  left: 17px; }
                .sweet-alert .sa-icon.sa-error .sa-line.sa-right {
                  -webkit-transform: rotate(-45deg);
                  transform: rotate(-45deg);
                  right: 16px; }
            .sweet-alert .sa-icon.sa-warning {
              border-color: #F8BB86; }
              .sweet-alert .sa-icon.sa-warning .sa-body {
                position: absolute;
                width: 5px;
                height: 47px;
                left: 50%;
                top: 10px;
                -webkit-border-radius: 2px;
                border-radius: 2px;
                margin-left: -2px;
                background-color: #F8BB86; }
              .sweet-alert .sa-icon.sa-warning .sa-dot {
                position: absolute;
                width: 7px;
                height: 7px;
                -webkit-border-radius: 50%;
                border-radius: 50%;
                margin-left: -3px;
                left: 50%;
                bottom: 10px;
                background-color: #F8BB86; }
            .sweet-alert .sa-icon.sa-info {
              border-color: #C9DAE1; }
              .sweet-alert .sa-icon.sa-info::before {
                content: "";
                position: absolute;
                width: 5px;
                height: 29px;
                left: 50%;
                bottom: 17px;
                border-radius: 2px;
                margin-left: -2px;
                background-color: #C9DAE1; }
              .sweet-alert .sa-icon.sa-info::after {
                content: "";
                position: absolute;
                width: 7px;
                height: 7px;
                border-radius: 50%;
                margin-left: -3px;
                top: 19px;
                background-color: #C9DAE1; }
            .sweet-alert .sa-icon.sa-success {
              border-color: #A5DC86; }
              .sweet-alert .sa-icon.sa-success::before, .sweet-alert .sa-icon.sa-success::after {
                content: '';
                -webkit-border-radius: 40px;
                border-radius: 40px;
                border-radius: 50%;
                position: absolute;
                width: 60px;
                height: 120px;
                background: white;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg); }
              .sweet-alert .sa-icon.sa-success::before {
                -webkit-border-radius: 120px 0 0 120px;
                border-radius: 120px 0 0 120px;
                top: -7px;
                left: -33px;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                -webkit-transform-origin: 60px 60px;
                transform-origin: 60px 60px; }
              .sweet-alert .sa-icon.sa-success::after {
                -webkit-border-radius: 0 120px 120px 0;
                border-radius: 0 120px 120px 0;
                top: -11px;
                left: 30px;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
                -webkit-transform-origin: 0px 60px;
                transform-origin: 0px 60px; }
              .sweet-alert .sa-icon.sa-success .sa-placeholder {
                width: 80px;
                height: 80px;
                border: 4px solid rgba(165, 220, 134, 0.2);
                -webkit-border-radius: 40px;
                border-radius: 40px;
                border-radius: 50%;
                box-sizing: content-box;
                position: absolute;
                left: -4px;
                top: -4px;
                z-index: 2; }
              .sweet-alert .sa-icon.sa-success .sa-fix {
                width: 5px;
                height: 90px;
                background-color: white;
                position: absolute;
                left: 28px;
                top: 8px;
                z-index: 1;
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg); }
              .sweet-alert .sa-icon.sa-success .sa-line {
                height: 5px;
                background-color: #A5DC86;
                display: block;
                border-radius: 2px;
                position: absolute;
                z-index: 2; }
                .sweet-alert .sa-icon.sa-success .sa-line.sa-tip {
                  width: 25px;
                  left: 14px;
                  top: 46px;
                  -webkit-transform: rotate(45deg);
                  transform: rotate(45deg); }
                .sweet-alert .sa-icon.sa-success .sa-line.sa-long {
                  width: 47px;
                  right: 8px;
                  top: 38px;
                  -webkit-transform: rotate(-45deg);
                  transform: rotate(-45deg); }
            .sweet-alert .sa-icon.sa-custom {
              background-size: contain;
              border-radius: 50%;
              border: none;
              background-position: center center;
              background-repeat: no-repeat; }

        /*
         * Animations
         */
        @-webkit-keyframes showSweetAlert {
          0% {
            transform: scale(0.7);
            -webkit-transform: scale(0.7); }
          45% {
            transform: scale(1.05);
            -webkit-transform: scale(1.05); }
          80% {
            transform: scale(0.95);
            -webkit-transform: scale(0.95); }
          100% {
            transform: scale(1);
            -webkit-transform: scale(1); } }

        @keyframes showSweetAlert {
          0% {
            transform: scale(0.7);
            -webkit-transform: scale(0.7); }
          45% {
            transform: scale(1.05);
            -webkit-transform: scale(1.05); }
          80% {
            transform: scale(0.95);
            -webkit-transform: scale(0.95); }
          100% {
            transform: scale(1);
            -webkit-transform: scale(1); } }

        @-webkit-keyframes hideSweetAlert {
          0% {
            transform: scale(1);
            -webkit-transform: scale(1); }
          100% {
            transform: scale(0.5);
            -webkit-transform: scale(0.5); } }

        @keyframes hideSweetAlert {
          0% {
            transform: scale(1);
            -webkit-transform: scale(1); }
          100% {
            transform: scale(0.5);
            -webkit-transform: scale(0.5); } }

        @-webkit-keyframes slideFromTop {
          0% {
            top: 0%; }
          100% {
            top: 50%; } }

        @keyframes slideFromTop {
          0% {
            top: 0%; }
          100% {
            top: 50%; } }

        @-webkit-keyframes slideToTop {
          0% {
            top: 50%; }
          100% {
            top: 0%; } }

        @keyframes slideToTop {
          0% {
            top: 50%; }
          100% {
            top: 0%; } }

        @-webkit-keyframes slideFromBottom {
          0% {
            top: 70%; }
          100% {
            top: 50%; } }

        @keyframes slideFromBottom {
          0% {
            top: 70%; }
          100% {
            top: 50%; } }

        @-webkit-keyframes slideToBottom {
          0% {
            top: 50%; }
          100% {
            top: 70%; } }

        @keyframes slideToBottom {
          0% {
            top: 50%; }
          100% {
            top: 70%; } }

        .showSweetAlert[data-animation=pop] {
          -webkit-animation: showSweetAlert 0.3s;
          animation: showSweetAlert 0.3s; }

        .showSweetAlert[data-animation=none] {
          -webkit-animation: none;
          animation: none; }

        .showSweetAlert[data-animation=slide-from-top] {
          -webkit-animation: slideFromTop 0.3s;
          animation: slideFromTop 0.3s; }

        .showSweetAlert[data-animation=slide-from-bottom] {
          -webkit-animation: slideFromBottom 0.3s;
          animation: slideFromBottom 0.3s; }

        .hideSweetAlert[data-animation=pop] {
          -webkit-animation: hideSweetAlert 0.2s;
          animation: hideSweetAlert 0.2s; }

        .hideSweetAlert[data-animation=none] {
          -webkit-animation: none;
          animation: none; }

        .hideSweetAlert[data-animation=slide-from-top] {
          -webkit-animation: slideToTop 0.4s;
          animation: slideToTop 0.4s; }

        .hideSweetAlert[data-animation=slide-from-bottom] {
          -webkit-animation: slideToBottom 0.3s;
          animation: slideToBottom 0.3s; }

        @-webkit-keyframes animateSuccessTip {
          0% {
            width: 0;
            left: 1px;
            top: 19px; }
          54% {
            width: 0;
            left: 1px;
            top: 19px; }
          70% {
            width: 50px;
            left: -8px;
            top: 37px; }
          84% {
            width: 17px;
            left: 21px;
            top: 48px; }
          100% {
            width: 25px;
            left: 14px;
            top: 45px; } }

        @keyframes animateSuccessTip {
          0% {
            width: 0;
            left: 1px;
            top: 19px; }
          54% {
            width: 0;
            left: 1px;
            top: 19px; }
          70% {
            width: 50px;
            left: -8px;
            top: 37px; }
          84% {
            width: 17px;
            left: 21px;
            top: 48px; }
          100% {
            width: 25px;
            left: 14px;
            top: 45px; } }

        @-webkit-keyframes animateSuccessLong {
          0% {
            width: 0;
            right: 46px;
            top: 54px; }
          65% {
            width: 0;
            right: 46px;
            top: 54px; }
          84% {
            width: 55px;
            right: 0px;
            top: 35px; }
          100% {
            width: 47px;
            right: 8px;
            top: 38px; } }

        @keyframes animateSuccessLong {
          0% {
            width: 0;
            right: 46px;
            top: 54px; }
          65% {
            width: 0;
            right: 46px;
            top: 54px; }
          84% {
            width: 55px;
            right: 0px;
            top: 35px; }
          100% {
            width: 47px;
            right: 8px;
            top: 38px; } }

        @-webkit-keyframes rotatePlaceholder {
          0% {
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg); }
          5% {
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg); }
          12% {
            transform: rotate(-405deg);
            -webkit-transform: rotate(-405deg); }
          100% {
            transform: rotate(-405deg);
            -webkit-transform: rotate(-405deg); } }

        @keyframes rotatePlaceholder {
          0% {
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg); }
          5% {
            transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg); }
          12% {
            transform: rotate(-405deg);
            -webkit-transform: rotate(-405deg); }
          100% {
            transform: rotate(-405deg);
            -webkit-transform: rotate(-405deg); } }

        .animateSuccessTip {
          -webkit-animation: animateSuccessTip 0.75s;
          animation: animateSuccessTip 0.75s; }

        .animateSuccessLong {
          -webkit-animation: animateSuccessLong 0.75s;
          animation: animateSuccessLong 0.75s; }

        .sa-icon.sa-success.animate::after {
          -webkit-animation: rotatePlaceholder 4.25s ease-in;
          animation: rotatePlaceholder 4.25s ease-in; }

        @-webkit-keyframes animateErrorIcon {
          0% {
            transform: rotateX(100deg);
            -webkit-transform: rotateX(100deg);
            opacity: 0; }
          100% {
            transform: rotateX(0deg);
            -webkit-transform: rotateX(0deg);
            opacity: 1; } }

        @keyframes animateErrorIcon {
          0% {
            transform: rotateX(100deg);
            -webkit-transform: rotateX(100deg);
            opacity: 0; }
          100% {
            transform: rotateX(0deg);
            -webkit-transform: rotateX(0deg);
            opacity: 1; } }

        .animateErrorIcon {
          -webkit-animation: animateErrorIcon 0.5s;
          animation: animateErrorIcon 0.5s; }

        @-webkit-keyframes animateXMark {
          0% {
            transform: scale(0.4);
            -webkit-transform: scale(0.4);
            margin-top: 26px;
            opacity: 0; }
          50% {
            transform: scale(0.4);
            -webkit-transform: scale(0.4);
            margin-top: 26px;
            opacity: 0; }
          80% {
            transform: scale(1.15);
            -webkit-transform: scale(1.15);
            margin-top: -6px; }
          100% {
            transform: scale(1);
            -webkit-transform: scale(1);
            margin-top: 0;
            opacity: 1; } }

        @keyframes animateXMark {
          0% {
            transform: scale(0.4);
            -webkit-transform: scale(0.4);
            margin-top: 26px;
            opacity: 0; }
          50% {
            transform: scale(0.4);
            -webkit-transform: scale(0.4);
            margin-top: 26px;
            opacity: 0; }
          80% {
            transform: scale(1.15);
            -webkit-transform: scale(1.15);
            margin-top: -6px; }
          100% {
            transform: scale(1);
            -webkit-transform: scale(1);
            margin-top: 0;
            opacity: 1; } }

        .animateXMark {
          -webkit-animation: animateXMark 0.5s;
          animation: animateXMark 0.5s; }

        @-webkit-keyframes pulseWarning {
          0% {
            border-color: #F8D486; }
          100% {
            border-color: #F8BB86; } }

        @keyframes pulseWarning {
          0% {
            border-color: #F8D486; }
          100% {
            border-color: #F8BB86; } }

        .pulseWarning {
          -webkit-animation: pulseWarning 0.75s infinite alternate;
          animation: pulseWarning 0.75s infinite alternate; }

        @-webkit-keyframes pulseWarningIns {
          0% {
            background-color: #F8D486; }
          100% {
            background-color: #F8BB86; } }

        @keyframes pulseWarningIns {
          0% {
            background-color: #F8D486; }
          100% {
            background-color: #F8BB86; } }

        .pulseWarningIns {
          -webkit-animation: pulseWarningIns 0.75s infinite alternate;
          animation: pulseWarningIns 0.75s infinite alternate; }

        @-webkit-keyframes rotate-loading {
          0% {
            transform: rotate(0deg); }
          100% {
            transform: rotate(360deg); } }

        @keyframes rotate-loading {
          0% {
            transform: rotate(0deg); }
          100% {
            transform: rotate(360deg); } }

        /* Internet Explorer 9 has some special quirks that are fixed here */
        /* The icons are not animated. */
        /* This file is automatically merged into sweet-alert.min.js through Gulp */
        /* Error icon */
        .sweet-alert .sa-icon.sa-error .sa-line.sa-left {
          -ms-transform: rotate(45deg) \9; }

        .sweet-alert .sa-icon.sa-error .sa-line.sa-right {
          -ms-transform: rotate(-45deg) \9; }

        /* Success icon */
        .sweet-alert .sa-icon.sa-success {
          border-color: transparent\9; }

        .sweet-alert .sa-icon.sa-success .sa-line.sa-tip {
          -ms-transform: rotate(45deg) \9; }

        .sweet-alert .sa-icon.sa-success .sa-line.sa-long {
          -ms-transform: rotate(-45deg) \9; }

        /*!
         * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
         * Copyright 2015 Daniel Cardoso <@DanielCardoso>
         * Licensed under MIT
         */
        .la-ball-fall,
        .la-ball-fall > div {
          position: relative;
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          box-sizing: border-box; }

        .la-ball-fall {
          display: block;
          font-size: 0;
          color: #fff; }

        .la-ball-fall.la-dark {
          color: #333; }

        .la-ball-fall > div {
          display: inline-block;
          float: none;
          background-color: currentColor;
          border: 0 solid currentColor; }

        .la-ball-fall {
          width: 54px;
          height: 18px; }

        .la-ball-fall > div {
          width: 10px;
          height: 10px;
          margin: 4px;
          border-radius: 100%;
          opacity: 0;
          -webkit-animation: ball-fall 1s ease-in-out infinite;
          -moz-animation: ball-fall 1s ease-in-out infinite;
          -o-animation: ball-fall 1s ease-in-out infinite;
          animation: ball-fall 1s ease-in-out infinite; }

        .la-ball-fall > div:nth-child(1) {
          -webkit-animation-delay: -200ms;
          -moz-animation-delay: -200ms;
          -o-animation-delay: -200ms;
          animation-delay: -200ms; }

        .la-ball-fall > div:nth-child(2) {
          -webkit-animation-delay: -100ms;
          -moz-animation-delay: -100ms;
          -o-animation-delay: -100ms;
          animation-delay: -100ms; }

        .la-ball-fall > div:nth-child(3) {
          -webkit-animation-delay: 0ms;
          -moz-animation-delay: 0ms;
          -o-animation-delay: 0ms;
          animation-delay: 0ms; }

        .la-ball-fall.la-sm {
          width: 26px;
          height: 8px; }

        .la-ball-fall.la-sm > div {
          width: 4px;
          height: 4px;
          margin: 2px; }

        .la-ball-fall.la-2x {
          width: 108px;
          height: 36px; }

        .la-ball-fall.la-2x > div {
          width: 20px;
          height: 20px;
          margin: 8px; }

        .la-ball-fall.la-3x {
          width: 162px;
          height: 54px; }

        .la-ball-fall.la-3x > div {
          width: 30px;
          height: 30px;
          margin: 12px; }

        /*
         * Animation
         */
        @-webkit-keyframes ball-fall {
          0% {
            opacity: 0;
            -webkit-transform: translateY(-145%);
            transform: translateY(-145%); }
          10% {
            opacity: .5; }
          20% {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0); }
          80% {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0); }
          90% {
            opacity: .5; }
          100% {
            opacity: 0;
            -webkit-transform: translateY(145%);
            transform: translateY(145%); } }

        @-moz-keyframes ball-fall {
          0% {
            opacity: 0;
            -moz-transform: translateY(-145%);
            transform: translateY(-145%); }
          10% {
            opacity: .5; }
          20% {
            opacity: 1;
            -moz-transform: translateY(0);
            transform: translateY(0); }
          80% {
            opacity: 1;
            -moz-transform: translateY(0);
            transform: translateY(0); }
          90% {
            opacity: .5; }
          100% {
            opacity: 0;
            -moz-transform: translateY(145%);
            transform: translateY(145%); } }

        @-o-keyframes ball-fall {
          0% {
            opacity: 0;
            -o-transform: translateY(-145%);
            transform: translateY(-145%); }
          10% {
            opacity: .5; }
          20% {
            opacity: 1;
            -o-transform: translateY(0);
            transform: translateY(0); }
          80% {
            opacity: 1;
            -o-transform: translateY(0);
            transform: translateY(0); }
          90% {
            opacity: .5; }
          100% {
            opacity: 0;
            -o-transform: translateY(145%);
            transform: translateY(145%); } }

        @keyframes ball-fall {
          0% {
            opacity: 0;
            -webkit-transform: translateY(-145%);
            -moz-transform: translateY(-145%);
            -o-transform: translateY(-145%);
            transform: translateY(-145%); }
          10% {
            opacity: .5; }
          20% {
            opacity: 1;
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0); }
          80% {
            opacity: 1;
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0); }
          90% {
            opacity: .5; }
          100% {
            opacity: 0;
            -webkit-transform: translateY(145%);
            -moz-transform: translateY(145%);
            -o-transform: translateY(145%);
            transform: translateY(145%); } }
    </style>
    <script type="text/javascript">
        !function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e():"function"==typeof define&&define.amd?define([],e):"object"==typeof exports?exports.swal=e():t.swal=e()}(this,function(){return function(t){function e(o){if(n[o])return n[o].exports;var r=n[o]={i:o,l:!1,exports:{}};return t[o].call(r.exports,r,r.exports,e),r.l=!0,r.exports}var n={};return e.m=t,e.c=n,e.d=function(t,n,o){e.o(t,n)||Object.defineProperty(t,n,{configurable:!1,enumerable:!0,get:o})},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},e.p="",e(e.s=8)}([function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o="swal-button";e.CLASS_NAMES={MODAL:"swal-modal",OVERLAY:"swal-overlay",SHOW_MODAL:"swal-overlay--show-modal",MODAL_TITLE:"swal-title",MODAL_TEXT:"swal-text",ICON:"swal-icon",ICON_CUSTOM:"swal-icon--custom",CONTENT:"swal-content",FOOTER:"swal-footer",BUTTON_CONTAINER:"swal-button-container",BUTTON:o,CONFIRM_BUTTON:o+"--confirm",CANCEL_BUTTON:o+"--cancel",DANGER_BUTTON:o+"--danger",BUTTON_LOADING:o+"--loading",BUTTON_LOADER:o+"__loader"},e.default=e.CLASS_NAMES},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.getNode=function(t){var e="."+t;return document.querySelector(e)},e.stringToNode=function(t){var e=document.createElement("div");return e.innerHTML=t.trim(),e.firstChild},e.insertAfter=function(t,e){var n=e.nextSibling;e.parentNode.insertBefore(t,n)},e.removeNode=function(t){t.parentElement.removeChild(t)},e.throwErr=function(t){throw t=t.replace(/ +(?= )/g,""),"SweetAlert: "+(t=t.trim())},e.isPlainObject=function(t){if("[object Object]"!==Object.prototype.toString.call(t))return!1;var e=Object.getPrototypeOf(t);return null===e||e===Object.prototype},e.ordinalSuffixOf=function(t){var e=t%10,n=t%100;return 1===e&&11!==n?t+"st":2===e&&12!==n?t+"nd":3===e&&13!==n?t+"rd":t+"th"}},function(t,e,n){"use strict";function o(t){for(var n in t)e.hasOwnProperty(n)||(e[n]=t[n])}Object.defineProperty(e,"__esModule",{value:!0}),o(n(25));var r=n(26);e.overlayMarkup=r.default,o(n(27)),o(n(28)),o(n(29));var i=n(0),a=i.default.MODAL_TITLE,s=i.default.MODAL_TEXT,c=i.default.ICON,l=i.default.FOOTER;e.iconMarkup='\n  <div class="'+c+'"></div>',e.titleMarkup='\n  <div class="'+a+'"></div>\n',e.textMarkup='\n  <div class="'+s+'"></div>',e.footerMarkup='\n  <div class="'+l+'"></div>\n'},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(1);e.CONFIRM_KEY="confirm",e.CANCEL_KEY="cancel";var r={visible:!0,text:null,value:null,className:"",closeModal:!0},i=Object.assign({},r,{visible:!1,text:"Cancel",value:null}),a=Object.assign({},r,{text:"OK",value:!0});e.defaultButtonList={cancel:i,confirm:a};var s=function(t){switch(t){case e.CONFIRM_KEY:return a;case e.CANCEL_KEY:return i;default:var n=t.charAt(0).toUpperCase()+t.slice(1);return Object.assign({},r,{text:n,value:t})}},c=function(t,e){var n=s(t);return!0===e?Object.assign({},n,{visible:!0}):"string"==typeof e?Object.assign({},n,{visible:!0,text:e}):o.isPlainObject(e)?Object.assign({visible:!0},n,e):Object.assign({},n,{visible:!1})},l=function(t){for(var e={},n=0,o=Object.keys(t);n<o.length;n++){var r=o[n],a=t[r],s=c(r,a);e[r]=s}return e.cancel||(e.cancel=i),e},u=function(t){var n={};switch(t.length){case 1:n[e.CANCEL_KEY]=Object.assign({},i,{visible:!1});break;case 2:n[e.CANCEL_KEY]=c(e.CANCEL_KEY,t[0]),n[e.CONFIRM_KEY]=c(e.CONFIRM_KEY,t[1]);break;default:o.throwErr("Invalid number of 'buttons' in array ("+t.length+").\n      If you want more than 2 buttons, you need to use an object!")}return n};e.getButtonListOpts=function(t){var n=e.defaultButtonList;return"string"==typeof t?n[e.CONFIRM_KEY]=c(e.CONFIRM_KEY,t):Array.isArray(t)?n=u(t):o.isPlainObject(t)?n=l(t):!0===t?n=u([!0,!0]):!1===t?n=u([!1,!1]):void 0===t&&(n=e.defaultButtonList),n}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(1),r=n(2),i=n(0),a=i.default.MODAL,s=i.default.OVERLAY,c=n(30),l=n(31),u=n(32),f=n(33);e.injectElIntoModal=function(t){var e=o.getNode(a),n=o.stringToNode(t);return e.appendChild(n),n};var d=function(t){t.className=a,t.textContent=""},p=function(t,e){d(t);var n=e.className;n&&t.classList.add(n)};e.initModalContent=function(t){var e=o.getNode(a);p(e,t),c.default(t.icon),l.initTitle(t.title),l.initText(t.text),f.default(t.content),u.default(t.buttons,t.dangerMode)};var m=function(){var t=o.getNode(s),e=o.stringToNode(r.modalMarkup);t.appendChild(e)};e.default=m},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(3),r={isOpen:!1,promise:null,actions:{},timer:null},i=Object.assign({},r);e.resetState=function(){i=Object.assign({},r)},e.setActionValue=function(t){if("string"==typeof t)return a(o.CONFIRM_KEY,t);for(var e in t)a(e,t[e])};var a=function(t,e){i.actions[t]||(i.actions[t]={}),Object.assign(i.actions[t],{value:e})};e.setActionOptionsFor=function(t,e){var n=(void 0===e?{}:e).closeModal,o=void 0===n||n;Object.assign(i.actions[t],{closeModal:o})},e.default=i},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(1),r=n(3),i=n(0),a=i.default.OVERLAY,s=i.default.SHOW_MODAL,c=i.default.BUTTON,l=i.default.BUTTON_LOADING,u=n(5);e.openModal=function(){o.getNode(a).classList.add(s),u.default.isOpen=!0};var f=function(){o.getNode(a).classList.remove(s),u.default.isOpen=!1};e.onAction=function(t){void 0===t&&(t=r.CANCEL_KEY);var e=u.default.actions[t],n=e.value;if(!1===e.closeModal){var i=c+"--"+t;o.getNode(i).classList.add(l)}else f();u.default.promise.resolve(n)},e.getState=function(){var t=Object.assign({},u.default);return delete t.promise,delete t.timer,t},e.stopLoading=function(){for(var t=document.querySelectorAll("."+c),e=0;e<t.length;e++){t[e].classList.remove(l)}}},function(t,e){var n;n=function(){return this}();try{n=n||Function("return this")()||(0,eval)("this")}catch(t){"object"==typeof window&&(n=window)}t.exports=n},function(t,e,n){(function(e){t.exports=e.sweetAlert=n(9)}).call(e,n(7))},function(t,e,n){(function(e){t.exports=e.swal=n(10)}).call(e,n(7))},function(t,e,n){"undefined"!=typeof window&&n(11),n(16);var o=n(23).default;t.exports=o},function(t,e,n){var o=n(12);"string"==typeof o&&(o=[[t.i,o,""]]);var r={insertAt:"top"};r.transform=void 0;n(14)(o,r);o.locals&&(t.exports=o.locals)},function(t,e,n){e=t.exports=n(13)(void 0),e.push([t.i,'.swal-icon--error{border-color:#f27474;-webkit-animation:animateErrorIcon .5s;animation:animateErrorIcon .5s}.swal-icon--error__x-mark{position:relative;display:block;-webkit-animation:animateXMark .5s;animation:animateXMark .5s}.swal-icon--error__line{position:absolute;height:5px;width:47px;background-color:#f27474;display:block;top:37px;border-radius:2px}.swal-icon--error__line--left{-webkit-transform:rotate(45deg);transform:rotate(45deg);left:17px}.swal-icon--error__line--right{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);right:16px}@-webkit-keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@-webkit-keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}@keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}.swal-icon--warning{border-color:#f8bb86;-webkit-animation:pulseWarning .75s infinite alternate;animation:pulseWarning .75s infinite alternate}.swal-icon--warning__body{width:5px;height:47px;top:10px;border-radius:2px;margin-left:-2px}.swal-icon--warning__body,.swal-icon--warning__dot{position:absolute;left:50%;background-color:#f8bb86}.swal-icon--warning__dot{width:7px;height:7px;border-radius:50%;margin-left:-4px;bottom:-11px}@-webkit-keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}@keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}.swal-icon--success{border-color:#a5dc86}.swal-icon--success:after,.swal-icon--success:before{content:"";border-radius:50%;position:absolute;width:60px;height:120px;background:#fff;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal-icon--success:before{border-radius:120px 0 0 120px;top:-7px;left:-33px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:60px 60px;transform-origin:60px 60px}.swal-icon--success:after{border-radius:0 120px 120px 0;top:-11px;left:30px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:0 60px;transform-origin:0 60px;-webkit-animation:rotatePlaceholder 4.25s ease-in;animation:rotatePlaceholder 4.25s ease-in}.swal-icon--success__ring{width:80px;height:80px;border:4px solid hsla(98,55%,69%,.2);border-radius:50%;box-sizing:content-box;position:absolute;left:-4px;top:-4px;z-index:2}.swal-icon--success__hide-corners{width:5px;height:90px;background-color:#fff;padding:1px;position:absolute;left:28px;top:8px;z-index:1;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal-icon--success__line{height:5px;background-color:#a5dc86;display:block;border-radius:2px;position:absolute;z-index:2}.swal-icon--success__line--tip{width:25px;left:14px;top:46px;-webkit-transform:rotate(45deg);transform:rotate(45deg);-webkit-animation:animateSuccessTip .75s;animation:animateSuccessTip .75s}.swal-icon--success__line--long{width:47px;right:8px;top:38px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-animation:animateSuccessLong .75s;animation:animateSuccessLong .75s}@-webkit-keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@-webkit-keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@-webkit-keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}@keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}.swal-icon--info{border-color:#c9dae1}.swal-icon--info:before{width:5px;height:29px;bottom:17px;border-radius:2px;margin-left:-2px}.swal-icon--info:after,.swal-icon--info:before{content:"";position:absolute;left:50%;background-color:#c9dae1}.swal-icon--info:after{width:7px;height:7px;border-radius:50%;margin-left:-3px;top:19px}.swal-icon{width:80px;height:80px;border-width:4px;border-style:solid;border-radius:50%;padding:0;position:relative;box-sizing:content-box;margin:20px auto}.swal-icon:first-child{margin-top:32px}.swal-icon--custom{width:auto;height:auto;max-width:100%;border:none;border-radius:0}.swal-icon img{max-width:100%;max-height:100%}.swal-title{color:rgba(0,0,0,.65);font-weight:600;text-transform:none;position:relative;display:block;padding:13px 16px;font-size:27px;line-height:normal;text-align:center;margin-bottom:0}.swal-title:first-child{margin-top:26px}.swal-title:not(:first-child){padding-bottom:0}.swal-title:not(:last-child){margin-bottom:13px}.swal-text{font-size:16px;position:relative;float:none;line-height:normal;vertical-align:top;text-align:left;display:inline-block;margin:0;padding:0 10px;font-weight:400;color:rgba(0,0,0,.64);max-width:calc(100% - 20px);overflow-wrap:break-word;box-sizing:border-box}.swal-text:first-child{margin-top:45px}.swal-text:last-child{margin-bottom:45px}.swal-footer{text-align:right;padding-top:13px;margin-top:13px;padding:13px 16px;border-radius:inherit;border-top-left-radius:0;border-top-right-radius:0}.swal-button-container{margin:5px;display:inline-block;position:relative}.swal-button{background-color:#7cd1f9;color:#fff;border:none;box-shadow:none;border-radius:5px;font-weight:600;font-size:14px;padding:10px 24px;margin:0;cursor:pointer}.swal-button[not:disabled]:hover{background-color:#78cbf2}.swal-button:active{background-color:#70bce0}.swal-button:focus{outline:none;box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(43,114,165,.29)}.swal-button[disabled]{opacity:.5;cursor:default}.swal-button::-moz-focus-inner{border:0}.swal-button--cancel{color:#555;background-color:#efefef}.swal-button--cancel[not:disabled]:hover{background-color:#e8e8e8}.swal-button--cancel:active{background-color:#d7d7d7}.swal-button--cancel:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(116,136,150,.29)}.swal-button--danger{background-color:#e64942}.swal-button--danger[not:disabled]:hover{background-color:#df4740}.swal-button--danger:active{background-color:#cf423b}.swal-button--danger:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(165,43,43,.29)}.swal-content{padding:0 20px;margin-top:20px;font-size:medium}.swal-content:last-child{margin-bottom:20px}.swal-content__input,.swal-content__textarea{-webkit-appearance:none;background-color:#fff;border:none;font-size:14px;display:block;box-sizing:border-box;width:100%;border:1px solid rgba(0,0,0,.14);padding:10px 13px;border-radius:2px;transition:border-color .2s}.swal-content__input:focus,.swal-content__textarea:focus{outline:none;border-color:#6db8ff}.swal-content__textarea{resize:vertical}.swal-button--loading{color:transparent}.swal-button--loading~.swal-button__loader{opacity:1}.swal-button__loader{position:absolute;height:auto;width:43px;z-index:2;left:50%;top:50%;-webkit-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);text-align:center;pointer-events:none;opacity:0}.swal-button__loader div{display:inline-block;float:none;vertical-align:baseline;width:9px;height:9px;padding:0;border:none;margin:2px;opacity:.4;border-radius:7px;background-color:hsla(0,0%,100%,.9);transition:background .2s;-webkit-animation:swal-loading-anim 1s infinite;animation:swal-loading-anim 1s infinite}.swal-button__loader div:nth-child(3n+2){-webkit-animation-delay:.15s;animation-delay:.15s}.swal-button__loader div:nth-child(3n+3){-webkit-animation-delay:.3s;animation-delay:.3s}@-webkit-keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}@keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}.swal-overlay{position:fixed;top:0;bottom:0;left:0;right:0;text-align:center;font-size:0;overflow-y:auto;background-color:rgba(0,0,0,.4);z-index:10000;pointer-events:none;opacity:0;transition:opacity .3s}.swal-overlay:before{content:" ";display:inline-block;vertical-align:middle;height:100%}.swal-overlay--show-modal{opacity:1;pointer-events:auto}.swal-overlay--show-modal .swal-modal{opacity:1;pointer-events:auto;box-sizing:border-box;-webkit-animation:showSweetAlert .3s;animation:showSweetAlert .3s;will-change:transform}.swal-modal{width:478px;opacity:0;pointer-events:none;background-color:#fff;text-align:center;border-radius:5px;position:static;margin:20px auto;display:inline-block;vertical-align:middle;-webkit-transform:scale(1);transform:scale(1);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;z-index:10001;transition:opacity .2s,-webkit-transform .3s;transition:transform .3s,opacity .2s;transition:transform .3s,opacity .2s,-webkit-transform .3s}@media (max-width:500px){.swal-modal{width:calc(100% - 20px)}}@-webkit-keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}@keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}',""])},function(t,e){function n(t,e){var n=t[1]||"",r=t[3];if(!r)return n;if(e&&"function"==typeof btoa){var i=o(r);return[n].concat(r.sources.map(function(t){return"/*# sourceURL="+r.sourceRoot+t+" */"})).concat([i]).join("\n")}return[n].join("\n")}function o(t){return"/*# sourceMappingURL=data:application/json;charset=utf-8;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(t))))+" */"}t.exports=function(t){var e=[];return e.toString=function(){return this.map(function(e){var o=n(e,t);return e[2]?"@media "+e[2]+"{"+o+"}":o}).join("")},e.i=function(t,n){"string"==typeof t&&(t=[[null,t,""]]);for(var o={},r=0;r<this.length;r++){var i=this[r][0];"number"==typeof i&&(o[i]=!0)}for(r=0;r<t.length;r++){var a=t[r];"number"==typeof a[0]&&o[a[0]]||(n&&!a[2]?a[2]=n:n&&(a[2]="("+a[2]+") and ("+n+")"),e.push(a))}},e}},function(t,e,n){function o(t,e){for(var n=0;n<t.length;n++){var o=t[n],r=m[o.id];if(r){r.refs++;for(var i=0;i<r.parts.length;i++)r.parts[i](o.parts[i]);for(;i<o.parts.length;i++)r.parts.push(u(o.parts[i],e))}else{for(var a=[],i=0;i<o.parts.length;i++)a.push(u(o.parts[i],e));m[o.id]={id:o.id,refs:1,parts:a}}}}function r(t,e){for(var n=[],o={},r=0;r<t.length;r++){var i=t[r],a=e.base?i[0]+e.base:i[0],s=i[1],c=i[2],l=i[3],u={css:s,media:c,sourceMap:l};o[a]?o[a].parts.push(u):n.push(o[a]={id:a,parts:[u]})}return n}function i(t,e){var n=v(t.insertInto);if(!n)throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");var o=w[w.length-1];if("top"===t.insertAt)o?o.nextSibling?n.insertBefore(e,o.nextSibling):n.appendChild(e):n.insertBefore(e,n.firstChild),w.push(e);else{if("bottom"!==t.insertAt)throw new Error("Invalid value for parameter 'insertAt'. Must be 'top' or 'bottom'.");n.appendChild(e)}}function a(t){if(null===t.parentNode)return!1;t.parentNode.removeChild(t);var e=w.indexOf(t);e>=0&&w.splice(e,1)}function s(t){var e=document.createElement("style");return t.attrs.type="text/css",l(e,t.attrs),i(t,e),e}function c(t){var e=document.createElement("link");return t.attrs.type="text/css",t.attrs.rel="stylesheet",l(e,t.attrs),i(t,e),e}function l(t,e){Object.keys(e).forEach(function(n){t.setAttribute(n,e[n])})}function u(t,e){var n,o,r,i;if(e.transform&&t.css){if(!(i=e.transform(t.css)))return function(){};t.css=i}if(e.singleton){var l=h++;n=g||(g=s(e)),o=f.bind(null,n,l,!1),r=f.bind(null,n,l,!0)}else t.sourceMap&&"function"==typeof URL&&"function"==typeof URL.createObjectURL&&"function"==typeof URL.revokeObjectURL&&"function"==typeof Blob&&"function"==typeof btoa?(n=c(e),o=p.bind(null,n,e),r=function(){a(n),n.href&&URL.revokeObjectURL(n.href)}):(n=s(e),o=d.bind(null,n),r=function(){a(n)});return o(t),function(e){if(e){if(e.css===t.css&&e.media===t.media&&e.sourceMap===t.sourceMap)return;o(t=e)}else r()}}function f(t,e,n,o){var r=n?"":o.css;if(t.styleSheet)t.styleSheet.cssText=x(e,r);else{var i=document.createTextNode(r),a=t.childNodes;a[e]&&t.removeChild(a[e]),a.length?t.insertBefore(i,a[e]):t.appendChild(i)}}function d(t,e){var n=e.css,o=e.media;if(o&&t.setAttribute("media",o),t.styleSheet)t.styleSheet.cssText=n;else{for(;t.firstChild;)t.removeChild(t.firstChild);t.appendChild(document.createTextNode(n))}}function p(t,e,n){var o=n.css,r=n.sourceMap,i=void 0===e.convertToAbsoluteUrls&&r;(e.convertToAbsoluteUrls||i)&&(o=y(o)),r&&(o+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(r))))+" */");var a=new Blob([o],{type:"text/css"}),s=t.href;t.href=URL.createObjectURL(a),s&&URL.revokeObjectURL(s)}var m={},b=function(t){var e;return function(){return void 0===e&&(e=t.apply(this,arguments)),e}}(function(){return window&&document&&document.all&&!window.atob}),v=function(t){var e={};return function(n){return void 0===e[n]&&(e[n]=t.call(this,n)),e[n]}}(function(t){return document.querySelector(t)}),g=null,h=0,w=[],y=n(15);t.exports=function(t,e){if("undefined"!=typeof DEBUG&&DEBUG&&"object"!=typeof document)throw new Error("The style-loader cannot be used in a non-browser environment");e=e||{},e.attrs="object"==typeof e.attrs?e.attrs:{},e.singleton||(e.singleton=b()),e.insertInto||(e.insertInto="head"),e.insertAt||(e.insertAt="bottom");var n=r(t,e);return o(n,e),function(t){for(var i=[],a=0;a<n.length;a++){var s=n[a],c=m[s.id];c.refs--,i.push(c)}if(t){o(r(t,e),e)}for(var a=0;a<i.length;a++){var c=i[a];if(0===c.refs){for(var l=0;l<c.parts.length;l++)c.parts[l]();delete m[c.id]}}}};var x=function(){var t=[];return function(e,n){return t[e]=n,t.filter(Boolean).join("\n")}}()},function(t,e){t.exports=function(t){var e="undefined"!=typeof window&&window.location;if(!e)throw new Error("fixUrls requires window.location");if(!t||"string"!=typeof t)return t;var n=e.protocol+"//"+e.host,o=n+e.pathname.replace(/\/[^\/]*$/,"/");return t.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi,function(t,e){var r=e.trim().replace(/^"(.*)"$/,function(t,e){return e}).replace(/^'(.*)'$/,function(t,e){return e});if(/^(#|data:|http:\/\/|https:\/\/|file:\/\/\/)/i.test(r))return t;var i;return i=0===r.indexOf("//")?r:0===r.indexOf("/")?n+r:o+r.replace(/^\.\//,""),"url("+JSON.stringify(i)+")"})}},function(t,e,n){var o=n(17);"undefined"==typeof window||window.Promise||(window.Promise=o),n(21),String.prototype.includes||(String.prototype.includes=function(t,e){"use strict";return"number"!=typeof e&&(e=0),!(e+t.length>this.length)&&-1!==this.indexOf(t,e)}),Array.prototype.includes||Object.defineProperty(Array.prototype,"includes",{value:function(t,e){if(null==this)throw new TypeError('"this" is null or not defined');var n=Object(this),o=n.length>>>0;if(0===o)return!1;for(var r=0|e,i=Math.max(r>=0?r:o-Math.abs(r),0);i<o;){if(function(t,e){return t===e||"number"==typeof t&&"number"==typeof e&&isNaN(t)&&isNaN(e)}(n[i],t))return!0;i++}return!1}}),"undefined"!=typeof window&&function(t){t.forEach(function(t){t.hasOwnProperty("remove")||Object.defineProperty(t,"remove",{configurable:!0,enumerable:!0,writable:!0,value:function(){this.parentNode.removeChild(this)}})})}([Element.prototype,CharacterData.prototype,DocumentType.prototype])},function(t,e,n){(function(e){!function(n){function o(){}function r(t,e){return function(){t.apply(e,arguments)}}function i(t){if("object"!=typeof this)throw new TypeError("Promises must be constructed via new");if("function"!=typeof t)throw new TypeError("not a function");this._state=0,this._handled=!1,this._value=void 0,this._deferreds=[],f(t,this)}function a(t,e){for(;3===t._state;)t=t._value;if(0===t._state)return void t._deferreds.push(e);t._handled=!0,i._immediateFn(function(){var n=1===t._state?e.onFulfilled:e.onRejected;if(null===n)return void(1===t._state?s:c)(e.promise,t._value);var o;try{o=n(t._value)}catch(t){return void c(e.promise,t)}s(e.promise,o)})}function s(t,e){try{if(e===t)throw new TypeError("A promise cannot be resolved with itself.");if(e&&("object"==typeof e||"function"==typeof e)){var n=e.then;if(e instanceof i)return t._state=3,t._value=e,void l(t);if("function"==typeof n)return void f(r(n,e),t)}t._state=1,t._value=e,l(t)}catch(e){c(t,e)}}function c(t,e){t._state=2,t._value=e,l(t)}function l(t){2===t._state&&0===t._deferreds.length&&i._immediateFn(function(){t._handled||i._unhandledRejectionFn(t._value)});for(var e=0,n=t._deferreds.length;e<n;e++)a(t,t._deferreds[e]);t._deferreds=null}function u(t,e,n){this.onFulfilled="function"==typeof t?t:null,this.onRejected="function"==typeof e?e:null,this.promise=n}function f(t,e){var n=!1;try{t(function(t){n||(n=!0,s(e,t))},function(t){n||(n=!0,c(e,t))})}catch(t){if(n)return;n=!0,c(e,t)}}var d=setTimeout;i.prototype.catch=function(t){return this.then(null,t)},i.prototype.then=function(t,e){var n=new this.constructor(o);return a(this,new u(t,e,n)),n},i.all=function(t){var e=Array.prototype.slice.call(t);return new i(function(t,n){function o(i,a){try{if(a&&("object"==typeof a||"function"==typeof a)){var s=a.then;if("function"==typeof s)return void s.call(a,function(t){o(i,t)},n)}e[i]=a,0==--r&&t(e)}catch(t){n(t)}}if(0===e.length)return t([]);for(var r=e.length,i=0;i<e.length;i++)o(i,e[i])})},i.resolve=function(t){return t&&"object"==typeof t&&t.constructor===i?t:new i(function(e){e(t)})},i.reject=function(t){return new i(function(e,n){n(t)})},i.race=function(t){return new i(function(e,n){for(var o=0,r=t.length;o<r;o++)t[o].then(e,n)})},i._immediateFn="function"==typeof e&&function(t){e(t)}||function(t){d(t,0)},i._unhandledRejectionFn=function(t){"undefined"!=typeof console&&console&&console.warn("Possible Unhandled Promise Rejection:",t)},i._setImmediateFn=function(t){i._immediateFn=t},i._setUnhandledRejectionFn=function(t){i._unhandledRejectionFn=t},void 0!==t&&t.exports?t.exports=i:n.Promise||(n.Promise=i)}(this)}).call(e,n(18).setImmediate)},function(t,e,n){function o(t,e){this._id=t,this._clearFn=e}var r=Function.prototype.apply;e.setTimeout=function(){return new o(r.call(setTimeout,window,arguments),clearTimeout)},e.setInterval=function(){return new o(r.call(setInterval,window,arguments),clearInterval)},e.clearTimeout=e.clearInterval=function(t){t&&t.close()},o.prototype.unref=o.prototype.ref=function(){},o.prototype.close=function(){this._clearFn.call(window,this._id)},e.enroll=function(t,e){clearTimeout(t._idleTimeoutId),t._idleTimeout=e},e.unenroll=function(t){clearTimeout(t._idleTimeoutId),t._idleTimeout=-1},e._unrefActive=e.active=function(t){clearTimeout(t._idleTimeoutId);var e=t._idleTimeout;e>=0&&(t._idleTimeoutId=setTimeout(function(){t._onTimeout&&t._onTimeout()},e))},n(19),e.setImmediate=setImmediate,e.clearImmediate=clearImmediate},function(t,e,n){(function(t,e){!function(t,n){"use strict";function o(t){"function"!=typeof t&&(t=new Function(""+t));for(var e=new Array(arguments.length-1),n=0;n<e.length;n++)e[n]=arguments[n+1];var o={callback:t,args:e};return l[c]=o,s(c),c++}function r(t){delete l[t]}function i(t){var e=t.callback,o=t.args;switch(o.length){case 0:e();break;case 1:e(o[0]);break;case 2:e(o[0],o[1]);break;case 3:e(o[0],o[1],o[2]);break;default:e.apply(n,o)}}function a(t){if(u)setTimeout(a,0,t);else{var e=l[t];if(e){u=!0;try{i(e)}finally{r(t),u=!1}}}}if(!t.setImmediate){var s,c=1,l={},u=!1,f=t.document,d=Object.getPrototypeOf&&Object.getPrototypeOf(t);d=d&&d.setTimeout?d:t,"[object process]"==={}.toString.call(t.process)?function(){s=function(t){e.nextTick(function(){a(t)})}}():function(){if(t.postMessage&&!t.importScripts){var e=!0,n=t.onmessage;return t.onmessage=function(){e=!1},t.postMessage("","*"),t.onmessage=n,e}}()?function(){var e="setImmediate$"+Math.random()+"$",n=function(n){n.source===t&&"string"==typeof n.data&&0===n.data.indexOf(e)&&a(+n.data.slice(e.length))};t.addEventListener?t.addEventListener("message",n,!1):t.attachEvent("onmessage",n),s=function(n){t.postMessage(e+n,"*")}}():t.MessageChannel?function(){var t=new MessageChannel;t.port1.onmessage=function(t){a(t.data)},s=function(e){t.port2.postMessage(e)}}():f&&"onreadystatechange"in f.createElement("script")?function(){var t=f.documentElement;s=function(e){var n=f.createElement("script");n.onreadystatechange=function(){a(e),n.onreadystatechange=null,t.removeChild(n),n=null},t.appendChild(n)}}():function(){s=function(t){setTimeout(a,0,t)}}(),d.setImmediate=o,d.clearImmediate=r}}("undefined"==typeof self?void 0===t?this:t:self)}).call(e,n(7),n(20))},function(t,e){function n(){throw new Error("setTimeout has not been defined")}function o(){throw new Error("clearTimeout has not been defined")}function r(t){if(u===setTimeout)return setTimeout(t,0);if((u===n||!u)&&setTimeout)return u=setTimeout,setTimeout(t,0);try{return u(t,0)}catch(e){try{return u.call(null,t,0)}catch(e){return u.call(this,t,0)}}}function i(t){if(f===clearTimeout)return clearTimeout(t);if((f===o||!f)&&clearTimeout)return f=clearTimeout,clearTimeout(t);try{return f(t)}catch(e){try{return f.call(null,t)}catch(e){return f.call(this,t)}}}function a(){b&&p&&(b=!1,p.length?m=p.concat(m):v=-1,m.length&&s())}function s(){if(!b){var t=r(a);b=!0;for(var e=m.length;e;){for(p=m,m=[];++v<e;)p&&p[v].run();v=-1,e=m.length}p=null,b=!1,i(t)}}function c(t,e){this.fun=t,this.array=e}function l(){}var u,f,d=t.exports={};!function(){try{u="function"==typeof setTimeout?setTimeout:n}catch(t){u=n}try{f="function"==typeof clearTimeout?clearTimeout:o}catch(t){f=o}}();var p,m=[],b=!1,v=-1;d.nextTick=function(t){var e=new Array(arguments.length-1);if(arguments.length>1)for(var n=1;n<arguments.length;n++)e[n-1]=arguments[n];m.push(new c(t,e)),1!==m.length||b||r(s)},c.prototype.run=function(){this.fun.apply(null,this.array)},d.title="browser",d.browser=!0,d.env={},d.argv=[],d.version="",d.versions={},d.on=l,d.addListener=l,d.once=l,d.off=l,d.removeListener=l,d.removeAllListeners=l,d.emit=l,d.prependListener=l,d.prependOnceListener=l,d.listeners=function(t){return[]},d.binding=function(t){throw new Error("process.binding is not supported")},d.cwd=function(){return"/"},d.chdir=function(t){throw new Error("process.chdir is not supported")},d.umask=function(){return 0}},function(t,e,n){"use strict";n(22).polyfill()},function(t,e,n){"use strict";function o(t,e){if(void 0===t||null===t)throw new TypeError("Cannot convert first argument to object");for(var n=Object(t),o=1;o<arguments.length;o++){var r=arguments[o];if(void 0!==r&&null!==r)for(var i=Object.keys(Object(r)),a=0,s=i.length;a<s;a++){var c=i[a],l=Object.getOwnPropertyDescriptor(r,c);void 0!==l&&l.enumerable&&(n[c]=r[c])}}return n}function r(){Object.assign||Object.defineProperty(Object,"assign",{enumerable:!1,configurable:!0,writable:!0,value:o})}t.exports={assign:o,polyfill:r}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(24),r=n(6),i=n(5),a=n(36),s=function(){for(var t=[],e=0;e<arguments.length;e++)t[e]=arguments[e];if("undefined"!=typeof window){var n=a.getOpts.apply(void 0,t);return new Promise(function(t,e){i.default.promise={resolve:t,reject:e},o.default(n),setTimeout(function(){r.openModal()})})}};s.close=r.onAction,s.getState=r.getState,s.setActionValue=i.setActionValue,s.stopLoading=r.stopLoading,s.setDefaults=a.setDefaults,e.default=s},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(1),r=n(0),i=r.default.MODAL,a=n(4),s=n(34),c=n(35),l=n(1);e.init=function(t){o.getNode(i)||(document.body||l.throwErr("You can only use SweetAlert AFTER the DOM has loaded!"),s.default(),a.default()),a.initModalContent(t),c.default(t)},e.default=e.init},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(0),r=o.default.MODAL;e.modalMarkup='\n  <div class="'+r+'" role="dialog" aria-modal="true"></div>',e.default=e.modalMarkup},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(0),r=o.default.OVERLAY,i='<div \n    class="'+r+'"\n    tabIndex="-1">\n  </div>';e.default=i},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(0),r=o.default.ICON;e.errorIconMarkup=function(){var t=r+"--error",e=t+"__line";return'\n    <div class="'+t+'__x-mark">\n      <span class="'+e+" "+e+'--left"></span>\n      <span class="'+e+" "+e+'--right"></span>\n    </div>\n  '},e.warningIconMarkup=function(){var t=r+"--warning";return'\n    <span class="'+t+'__body">\n      <span class="'+t+'__dot"></span>\n    </span>\n  '},e.successIconMarkup=function(){var t=r+"--success";return'\n    <span class="'+t+"__line "+t+'__line--long"></span>\n    <span class="'+t+"__line "+t+'__line--tip"></span>\n\n    <div class="'+t+'__ring"></div>\n    <div class="'+t+'__hide-corners"></div>\n  '}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(0),r=o.default.CONTENT;e.contentMarkup='\n  <div class="'+r+'">\n\n  </div>\n'},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(0),r=o.default.BUTTON_CONTAINER,i=o.default.BUTTON,a=o.default.BUTTON_LOADER;e.buttonMarkup='\n  <div class="'+r+'">\n\n    <button\n      class="'+i+'"\n    ></button>\n\n    <div class="'+a+'">\n      <div></div>\n      <div></div>\n      <div></div>\n    </div>\n\n  </div>\n'},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(4),r=n(2),i=n(0),a=i.default.ICON,s=i.default.ICON_CUSTOM,c=["error","warning","success","info"],l={error:r.errorIconMarkup(),warning:r.warningIconMarkup(),success:r.successIconMarkup()},u=function(t,e){var n=a+"--"+t;e.classList.add(n);var o=l[t];o&&(e.innerHTML=o)},f=function(t,e){e.classList.add(s);var n=document.createElement("img");n.src=t,e.appendChild(n)},d=function(t){if(t){var e=o.injectElIntoModal(r.iconMarkup);c.includes(t)?u(t,e):f(t,e)}};e.default=d},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(2),r=n(4),i=function(t){navigator.userAgent.includes("AppleWebKit")&&(t.style.display="none",t.offsetHeight,t.style.display="")};e.initTitle=function(t){if(t){var e=r.injectElIntoModal(o.titleMarkup);e.textContent=t,i(e)}},e.initText=function(t){if(t){var e=document.createDocumentFragment();t.split("\n").forEach(function(t,n,o){e.appendChild(document.createTextNode(t)),n<o.length-1&&e.appendChild(document.createElement("br"))});var n=r.injectElIntoModal(o.textMarkup);n.appendChild(e),i(n)}}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(1),r=n(4),i=n(0),a=i.default.BUTTON,s=i.default.DANGER_BUTTON,c=n(3),l=n(2),u=n(6),f=n(5),d=function(t,e,n){var r=e.text,i=e.value,d=e.className,p=e.closeModal,m=o.stringToNode(l.buttonMarkup),b=m.querySelector("."+a),v=a+"--"+t;if(b.classList.add(v),d){(Array.isArray(d)?d:d.split(" ")).filter(function(t){return t.length>0}).forEach(function(t){b.classList.add(t)})}n&&t===c.CONFIRM_KEY&&b.classList.add(s),b.textContent=r;var g={};return g[t]=i,f.setActionValue(g),f.setActionOptionsFor(t,{closeModal:p}),b.addEventListener("click",function(){return u.onAction(t)}),m},p=function(t,e){var n=r.injectElIntoModal(l.footerMarkup);for(var o in t){var i=t[o],a=d(o,i,e);i.visible&&n.appendChild(a)}0===n.children.length&&n.remove()};e.default=p},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(3),r=n(4),i=n(2),a=n(5),s=n(6),c=n(0),l=c.default.CONTENT,u=function(t){t.addEventListener("input",function(t){var e=t.target,n=e.value;a.setActionValue(n)}),t.addEventListener("keyup",function(t){if("Enter"===t.key)return s.onAction(o.CONFIRM_KEY)}),setTimeout(function(){t.focus(),a.setActionValue("")},0)},f=function(t,e,n){var o=document.createElement(e),r=l+"__"+e;o.classList.add(r);for(var i in n){var a=n[i];o[i]=a}"input"===e&&u(o),t.appendChild(o)},d=function(t){if(t){var e=r.injectElIntoModal(i.contentMarkup),n=t.element,o=t.attributes;"string"==typeof n?f(e,n,o):e.appendChild(n)}};e.default=d},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(1),r=n(2),i=function(){var t=o.stringToNode(r.overlayMarkup);document.body.appendChild(t)};e.default=i},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(5),r=n(6),i=n(1),a=n(3),s=n(0),c=s.default.MODAL,l=s.default.BUTTON,u=s.default.OVERLAY,f=function(t){t.preventDefault(),v()},d=function(t){t.preventDefault(),g()},p=function(t){if(o.default.isOpen)switch(t.key){case"Escape":return r.onAction(a.CANCEL_KEY)}},m=function(t){if(o.default.isOpen)switch(t.key){case"Tab":return f(t)}},b=function(t){if(o.default.isOpen)return"Tab"===t.key&&t.shiftKey?d(t):void 0},v=function(){var t=i.getNode(l);t&&(t.tabIndex=0,t.focus())},g=function(){var t=i.getNode(c),e=t.querySelectorAll("."+l),n=e.length-1,o=e[n];o&&o.focus()},h=function(t){t[t.length-1].addEventListener("keydown",m)},w=function(t){t[0].addEventListener("keydown",b)},y=function(){var t=i.getNode(c),e=t.querySelectorAll("."+l);e.length&&(h(e),w(e))},x=function(t){if(i.getNode(u)===t.target)return r.onAction(a.CANCEL_KEY)},_=function(t){var e=i.getNode(u);e.removeEventListener("click",x),t&&e.addEventListener("click",x)},k=function(t){o.default.timer&&clearTimeout(o.default.timer),t&&(o.default.timer=window.setTimeout(function(){return r.onAction(a.CANCEL_KEY)},t))},O=function(t){t.closeOnEsc?document.addEventListener("keyup",p):document.removeEventListener("keyup",p),t.dangerMode?v():g(),y(),_(t.closeOnClickOutside),k(t.timer)};e.default=O},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(1),r=n(3),i=n(37),a=n(38),s={title:null,text:null,icon:null,buttons:r.defaultButtonList,content:null,className:null,closeOnClickOutside:!0,closeOnEsc:!0,dangerMode:!1,timer:null},c=Object.assign({},s);e.setDefaults=function(t){c=Object.assign({},s,t)};var l=function(t){var e=t&&t.button,n=t&&t.buttons;return void 0!==e&&void 0!==n&&o.throwErr("Cannot set both 'button' and 'buttons' options!"),void 0!==e?{confirm:e}:n},u=function(t){return o.ordinalSuffixOf(t+1)},f=function(t,e){o.throwErr(u(e)+" argument ('"+t+"') is invalid")},d=function(t,e){var n=t+1,r=e[n];o.isPlainObject(r)||void 0===r||o.throwErr("Expected "+u(n)+" argument ('"+r+"') to be a plain object")},p=function(t,e){var n=t+1,r=e[n];void 0!==r&&o.throwErr("Unexpected "+u(n)+" argument ("+r+")")},m=function(t,e,n,r){var i=typeof e,a="string"===i,s=e instanceof Element;if(a){if(0===n)return{text:e};if(1===n)return{text:e,title:r[0]};if(2===n)return d(n,r),{icon:e};f(e,n)}else{if(s&&0===n)return d(n,r),{content:e};if(o.isPlainObject(e))return p(n,r),e;f(e,n)}};e.getOpts=function(){for(var t=[],e=0;e<arguments.length;e++)t[e]=arguments[e];var n={};t.forEach(function(e,o){var r=m(0,e,o,t);Object.assign(n,r)});var o=l(n);n.buttons=r.getButtonListOpts(o),delete n.button,n.content=i.getContentOpts(n.content);var u=Object.assign({},s,c,n);return Object.keys(u).forEach(function(t){a.DEPRECATED_OPTS[t]&&a.logDeprecation(t)}),u}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(1),r={element:"input",attributes:{placeholder:""}};e.getContentOpts=function(t){var e={};return o.isPlainObject(t)?Object.assign(e,t):t instanceof Element?{element:t}:"input"===t?r:null}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.logDeprecation=function(t){var n=e.DEPRECATED_OPTS[t],o=n.onlyRename,r=n.replacement,i=n.subOption,a=n.link,s=o?"renamed":"deprecated",c='SweetAlert warning: "'+t+'" option has been '+s+".";if(r){c+=" Please use"+(i?' "'+i+'" in ':" ")+'"'+r+'" instead.'}var l="https://sweetalert.js.org";c+=a?" More details: "+l+a:" More details: "+l+"/guides/#upgrading-from-1x",console.warn(c)},e.DEPRECATED_OPTS={type:{replacement:"icon",link:"/docs/#icon"},imageUrl:{replacement:"icon",link:"/docs/#icon"},customClass:{replacement:"className",onlyRename:!0,link:"/docs/#classname"},imageSize:{},showCancelButton:{replacement:"buttons",link:"/docs/#buttons"},showConfirmButton:{replacement:"button",link:"/docs/#button"},confirmButtonText:{replacement:"button",link:"/docs/#button"},confirmButtonColor:{},cancelButtonText:{replacement:"buttons",link:"/docs/#buttons"},closeOnConfirm:{replacement:"button",subOption:"closeModal",link:"/docs/#button"},closeOnCancel:{replacement:"buttons",subOption:"closeModal",link:"/docs/#buttons"},showLoaderOnConfirm:{replacement:"buttons"},animation:{},inputType:{replacement:"content",link:"/docs/#content"},inputValue:{replacement:"content",link:"/docs/#content"},inputPlaceholder:{replacement:"content",link:"/docs/#content"},html:{replacement:"content",link:"/docs/#content"},allowEscapeKey:{replacement:"closeOnEsc",onlyRename:!0,link:"/docs/#closeonesc"},allowClickOutside:{replacement:"closeOnClickOutside",onlyRename:!0,link:"/docs/#closeonclickoutside"}}}])});
    </script>
    <script type="text/javascript">
      var dataObject = {
          "ACEH": {
              "KAB. ACEH SELATAN": [],
              "KAB. ACEH TENGGARA": [],
              "KAB. ACEH TIMUR": [],
              "KAB. ACEH TENGAH": [],
              "KAB. ACEH BARAT": [],
              "KAB. ACEH BESAR": [],
              "KAB. PIDIE": [],
              "KAB. ACEH UTARA": [],
              "KAB. SIMEULUE": [],
              "KAB. ACEH SINGKIL": [],
              "KAB. BIREUEN": [],
              "KAB. ACEH BARAT DAYA": [],
              "KAB. GAYO LUES": [],
              "KAB. ACEH JAYA": [],
              "KAB. NAGAN RAYA": [],
              "KAB. ACEH TAMIANG": [],
              "KAB. BENER MERIAH": [],
              "KAB. PIDIE JAYA": [],
              "KOTA BANDA ACEH": [],
              "KOTA SABANG": [],
              "KOTA LHOKSEUMAWE": [],
              "KOTA LANGSA": [],
              "KOTA SUBULUSSALAM": []
          },
          "SUMATERA UTARA": {
              "KAB. TAPANULI TENGAH": [],
              "KAB. TAPANULI UTARA": [],
              "KAB. TAPANULI SELATAN": [],
              "KAB. NIAS": [],
              "KAB. LANGKAT": [],
              "KAB. KARO": [],
              "KAB. DELI SERDANG": [],
              "KAB. SIMALUNGUN": [],
              "KAB. ASAHAN": [],
              "KAB. LABUHANBATU": [],
              "KAB. DAIRI": [],
              "KAB. TOBA SAMOSIR": [],
              "KAB. MANDAILING NATAL": [],
              "KAB. NIAS SELATAN": [],
              "KAB. PAKPAK BHARAT": [],
              "KAB. HUMBANG HASUNDUTAN": [],
              "KAB. SAMOSIR": [],
              "KAB. SERDANG BEDAGAI": [],
              "KAB. BATU BARA": [],
              "KAB. PADANG LAWAS UTARA": [],
              "KAB. PADANG LAWAS": [],
              "KAB. LABUHANBATU SELATAN": [],
              "KAB. LABUHANBATU UTARA": [],
              "KAB. NIAS UTARA": [],
              "KAB. NIAS BARAT": [],
              "KOTA MEDAN": [],
              "KOTA PEMATANGSIANTAR": [],
              "KOTA SIBOLGA": [],
              "KOTA TANJUNG BALAI": [],
              "KOTA BINJAI": [],
              "KOTA TEBING TINGGI": [],
              "KOTA PADANGSIDIMPUAN": [],
              "KOTA GUNUNGSITOLI": []
          },
          "SUMATERA BARAT": {
              "KAB. PESISIR SELATAN": [],
              "KAB. SOLOK": [],
              "KAB. SIJUNJUNG": [],
              "KAB. TANAH DATAR": [],
              "KAB. PADANG PARIAMAN": [],
              "KAB. AGAM": [],
              "KAB. LIMA PULUH KOTA": [],
              "KAB. PASAMAN": [],
              "KAB. KEPULAUAN MENTAWAI": [],
              "KAB. DHARMASRAYA": [],
              "KAB. SOLOK SELATAN": [],
              "KAB. PASAMAN BARAT": [],
              "KOTA PADANG": [],
              "KOTA SOLOK": [],
              "KOTA SAWAHLUNTO": [],
              "KOTA PADANG PANJANG": [],
              "KOTA BUKITTINGGI": [],
              "KOTA PAYAKUMBUH": [],
              "KOTA PARIAMAN": []
          },
          "RIAU": {
              "KAB. KAMPAR": [],
              "KAB. INDRAGIRI HULU": [],
              "KAB. BENGKALIS": [],
              "KAB. INDRAGIRI HILIR": [],
              "KAB. PELALAWAN": [],
              "KAB. ROKAN HULU": [],
              "KAB. ROKAN HILIR": [],
              "KAB. SIAK": [],
              "KAB. KUANTAN SINGINGI": [],
              "KAB. KEPULAUAN MERANTI": [],
              "KOTA PEKANBARU": [],
              "KOTA DUMAI": []
          },
          "JAMBI": {
              "KAB. KERINCI": [],
              "KAB. MERANGIN": [],
              "KAB. SAROLANGUN": [],
              "KAB. BATANGHARI": [],
              "KAB. MUARO JAMBI": [],
              "KAB. TANJUNG JABUNG BARAT": [],
              "KAB. TANJUNG JABUNG TIMUR": [],
              "KAB. BUNGO": [],
              "KAB. TEBO": [],
              "KOTA JAMBI": [],
              "KOTA SUNGAI PENUH": []
          },
          "SUMATERA SELATAN": {
              "KAB. OGAN KOMERING ULU": [],
              "KAB. OGAN KOMERING ILIR": [],
              "KAB. MUARA ENIM": [],
              "KAB. LAHAT": [],
              "KAB. MUSI RAWAS": [],
              "KAB. MUSI BANYUASIN": [],
              "KAB. BANYUASIN": [],
              "KAB. OGAN KOMERING ULU TIMUR": [],
              "KAB. OGAN KOMERING ULU SELATAN": [],
              "KAB. OGAN ILIR": [],
              "KAB. EMPAT LAWANG": [],
              "KAB. PENUKAL ABAB LEMATANG ILIR": [],
              "KAB. MUSI RAWAS UTARA": [],
              "KOTA PALEMBANG": [],
              "KOTA PAGAR ALAM": [],
              "KOTA LUBUK LINGGAU": [],
              "KOTA PRABUMULIH": []
          },
          "BENGKULU": {
              "KAB. BENGKULU SELATAN": [],
              "KAB. REJANG LEBONG": [],
              "KAB. BENGKULU UTARA": [],
              "KAB. KAUR": [],
              "KAB. SELUMA": [],
              "KAB. MUKO MUKO": [],
              "KAB. LEBONG": [],
              "KAB. KEPAHIANG": [],
              "KAB. BENGKULU TENGAH": [],
              "KOTA BENGKULU": []
          },
          "LAMPUNG": {
              "KAB. LAMPUNG SELATAN": [],
              "KAB. LAMPUNG TENGAH": [],
              "KAB. LAMPUNG UTARA": [],
              "KAB. LAMPUNG BARAT": [],
              "KAB. TULANG BAWANG": [],
              "KAB. TANGGAMUS": [],
              "KAB. LAMPUNG TIMUR": [],
              "KAB. WAY KANAN": [],
              "KAB. PESAWARAN": [],
              "KAB. PRINGSEWU": [],
              "KAB. MESUJI": [],
              "KAB. TULANG BAWANG BARAT": [],
              "KAB. PESISIR BARAT": [],
              "KOTA BANDAR LAMPUNG": [],
              "KOTA METRO": []
          },
          "KEPULAUAN BANGKA BELITUNG": {
              "KAB. BANGKA": [],
              "KAB. BELITUNG": [],
              "KAB. BANGKA SELATAN": [],
              "KAB. BANGKA TENGAH": [],
              "KAB. BANGKA BARAT": [],
              "KAB. BELITUNG TIMUR": [],
              "KOTA PANGKAL PINANG": []
          },
          "KEPULAUAN RIAU": {
              "KAB. BINTAN": [],
              "KAB. KARIMUN": [],
              "KAB. NATUNA": [],
              "KAB. LINGGA": [],
              "KAB. KEPULAUAN ANAMBAS": [],
              "KOTA BATAM": [],
              "KOTA TANJUNG PINANG": []
          },
          "DKI JAKARTA": {
              "KAB. ADM. KEP. SERIBU": [],
              "KOTA ADM. JAKARTA PUSAT": [],
              "KOTA ADM. JAKARTA UTARA": [],
              "KOTA ADM. JAKARTA BARAT": [],
              "KOTA ADM. JAKARTA SELATAN": [],
              "KOTA ADM. JAKARTA TIMUR": []
          },
          "JAWA BARAT": {
              "KAB. BOGOR": [],
              "KAB. SUKABUMI": [],
              "KAB. CIANJUR": [],
              "KAB. BANDUNG": [],
              "KAB. GARUT": [],
              "KAB. TASIKMALAYA": [],
              "KAB. CIAMIS": [],
              "KAB. KUNINGAN": [],
              "KAB. CIREBON": [],
              "KAB. MAJALENGKA": [],
              "KAB. SUMEDANG": [],
              "KAB. INDRAMAYU": [],
              "KAB. SUBANG": [],
              "KAB. PURWAKARTA": [],
              "KAB. KARAWANG": [],
              "KAB. BEKASI": [],
              "KAB. BANDUNG BARAT": [],
              "KAB. PANGANDARAN": [],
              "KOTA BOGOR": [],
              "KOTA SUKABUMI": [],
              "KOTA BANDUNG": [],
              "KOTA CIREBON": [],
              "KOTA BEKASI": [],
              "KOTA DEPOK": [],
              "KOTA CIMAHI": [],
              "KOTA TASIKMALAYA": [],
              "KOTA BANJAR": []
          },
          "JAWA TENGAH": {
              "KAB. CILACAP": [],
              "KAB. BANYUMAS": [],
              "KAB. PURBALINGGA": [],
              "KAB. BANJARNEGARA": [],
              "KAB. KEBUMEN": [],
              "KAB. PURWOREJO": [],
              "KAB. WONOSOBO": [],
              "KAB. MAGELANG": [],
              "KAB. BOYOLALI": [],
              "KAB. KLATEN": [],
              "KAB. SUKOHARJO": [],
              "KAB. WONOGIRI": [],
              "KAB. KARANGANYAR": [],
              "KAB. SRAGEN": [],
              "KAB. GROBOGAN": [],
              "KAB. BLORA": [],
              "KAB. REMBANG": [],
              "KAB. PATI": [],
              "KAB. KUDUS": [],
              "KAB. JEPARA": [],
              "KAB. DEMAK": [],
              "KAB. SEMARANG": [],
              "KAB. TEMANGGUNG": [],
              "KAB. KENDAL": [],
              "KAB. BATANG": [],
              "KAB. PEKALONGAN": [],
              "KAB. PEMALANG": [],
              "KAB. TEGAL": [],
              "KAB. BREBES": [],
              "KOTA MAGELANG": [],
              "KOTA SURAKARTA": [],
              "KOTA SALATIGA": [],
              "KOTA SEMARANG": [],
              "KOTA PEKALONGAN": [],
              "KOTA TEGAL": []
          },
          "DAERAH ISTIMEWA YOGYAKARTA": {
              "KAB. KULON PROGO": [],
              "KAB. BANTUL": [],
              "KAB. GUNUNGKIDUL": [],
              "KAB. SLEMAN": [],
              "KOTA YOGYAKARTA": []
          },
          "JAWA TIMUR": {
              "KAB. PACITAN": [],
              "KAB. PONOROGO": [],
              "KAB. TRENGGALEK": [],
              "KAB. TULUNGAGUNG": [],
              "KAB. BLITAR": [],
              "KAB. KEDIRI": [],
              "KAB. MALANG": [],
              "KAB. LUMAJANG": [],
              "KAB. JEMBER": [],
              "KAB. BANYUWANGI": [],
              "KAB. BONDOWOSO": [],
              "KAB. SITUBONDO": [],
              "KAB. PROBOLINGGO": [],
              "KAB. PASURUAN": [],
              "KAB. SIDOARJO": [],
              "KAB. MOJOKERTO": [],
              "KAB. JOMBANG": [],
              "KAB. NGANJUK": [],
              "KAB. MADIUN": [],
              "KAB. MAGETAN": [],
              "KAB. NGAWI": [],
              "KAB. BOJONEGORO": [],
              "KAB. TUBAN": [],
              "KAB. LAMONGAN": [],
              "KAB. GRESIK": [],
              "KAB. BANGKALAN": [],
              "KAB. SAMPANG": [],
              "KAB. PAMEKASAN": [],
              "KAB. SUMENEP": [],
              "KOTA KEDIRI": [],
              "KOTA BLITAR": [],
              "KOTA MALANG": [],
              "KOTA PROBOLINGGO": [],
              "KOTA PASURUAN": [],
              "KOTA MOJOKERTO": [],
              "KOTA MADIUN": [],
              "KOTA SURABAYA": [],
              "KOTA BATU": []
          },
          "BANTEN": {
              "KAB. PANDEGLANG": [],
              "KAB. LEBAK": [],
              "KAB. TANGERANG": [],
              "KAB. SERANG": [],
              "KOTA TANGERANG": [],
              "KOTA CILEGON": [],
              "KOTA SERANG": [],
              "KOTA TANGERANG SELATAN": []
          },
          "BALI": {
              "KAB. JEMBRANA": [],
              "KAB. TABANAN": [],
              "KAB. BADUNG": [],
              "KAB. GIANYAR": [],
              "KAB. KLUNGKUNG": [],
              "KAB. BANGLI": [],
              "KAB. KARANGASEM": [],
              "KAB. BULELENG": [],
              "KOTA DENPASAR": []
          },
          "NUSA TENGGARA BARAT": {
              "KAB. LOMBOK BARAT": [],
              "KAB. LOMBOK TENGAH": [],
              "KAB. LOMBOK TIMUR": [],
              "KAB. SUMBAWA": [],
              "KAB. DOMPU": [],
              "KAB. BIMA": [],
              "KAB. SUMBAWA BARAT": [],
              "KAB. LOMBOK UTARA": [],
              "KOTA MATARAM": [],
              "KOTA BIMA": []
          },
          "NUSA TENGGARA TIMUR": {
              "KAB. KUPANG": [],
              "KAB TIMOR TENGAH SELATAN": [],
              "KAB. TIMOR TENGAH UTARA": [],
              "KAB. BELU": [],
              "KAB. ALOR": [],
              "KAB. FLORES TIMUR": [],
              "KAB. SIKKA": [],
              "KAB. ENDE": [],
              "KAB. NGADA": [],
              "KAB. MANGGARAI": [],
              "KAB. SUMBA TIMUR": [],
              "KAB. SUMBA BARAT": [],
              "KAB. LEMBATA": [],
              "KAB. ROTE NDAO": [],
              "KAB. MANGGARAI BARAT": [],
              "KAB. NAGEKEO": [],
              "KAB. SUMBA TENGAH": [],
              "KAB. SUMBA BARAT DAYA": [],
              "KAB. MANGGARAI TIMUR": [],
              "KAB. SABU RAIJUA": [],
              "KAB. MALAKA": [],
              "KOTA KUPANG": []
          },
          "KALIMANTAN BARAT": {
              "KAB. SAMBAS": [],
              "KAB. MEMPAWAH": [],
              "KAB. SANGGAU": [],
              "KAB. KETAPANG": [],
              "KAB. SINTANG": [],
              "KAB. KAPUAS HULU": [],
              "KAB. BENGKAYANG": [],
              "KAB. LANDAK": [],
              "KAB. SEKADAU": [],
              "KAB. MELAWI": [],
              "KAB. KAYONG UTARA": [],
              "KAB. KUBU RAYA": [],
              "KOTA PONTIANAK": [],
              "KOTA SINGKAWANG": []
          },
          "PAPUA BARAT": {
              "KAB. SORONG": [],
              "KAB. MANOKWARI": [],
              "KAB. FAK FAK": [],
              "KAB. SORONG SELATAN": [],
              "KAB. RAJA AMPAT": [],
              "KAB. TELUK BINTUNI": [],
              "KAB. TELUK WONDAMA": [],
              "KAB. KAIMANA": [],
              "KAB. TAMBRAUW": [],
              "KAB. MAYBRAT": [],
              "KAB. MANOKWARI SELATAN": [],
              "KAB. PEGUNUNGAN ARFAK": [],
              "KOTA SORONG": []
          },
          "KALIMANTAN TENGAH": {
              "KAB. KOTAWARINGIN BARAT": [],
              "KAB. KOTAWARINGIN TIMUR": [],
              "KAB. KAPUAS": [],
              "KAB. BARITO SELATAN": [],
              "KAB. BARITO UTARA": [],
              "KAB. KATINGAN": [],
              "KAB. SERUYAN": [],
              "KAB. SUKAMARA": [],
              "KAB. LAMANDAU": [],
              "KAB. GUNUNG MAS": [],
              "KAB. PULANG PISAU": [],
              "KAB. MURUNG RAYA": [],
              "KAB. BARITO TIMUR": [],
              "KOTA PALANGKARAYA": []
          },
          "KALIMANTAN SELATAN": {
              "KAB. TANAH LAUT": [],
              "KAB. KOTABARU": [],
              "KAB. BANJAR": [],
              "KAB. BARITO KUALA": [],
              "KAB. TAPIN": [],
              "KAB. HULU SUNGAI SELATAN": [],
              "KAB. HULU SUNGAI TENGAH": [],
              "KAB. HULU SUNGAI UTARA": [],
              "KAB. TABALONG": [],
              "KAB. TANAH BUMBU": [],
              "KAB. BALANGAN": [],
              "KOTA BANJARMASIN": [],
              "KOTA BANJARBARU": []
          },
          "KALIMANTAN TIMUR": {
              "KAB. PASER": [],
              "KAB. KUTAI KARTANEGARA": [],
              "KAB. BERAU": [],
              "KAB. KUTAI BARAT": [],
              "KAB. KUTAI TIMUR": [],
              "KAB. PENAJAM PASER UTARA": [],
              "KAB. MAHAKAM ULU": [],
              "KOTA BALIKPAPAN": [],
              "KOTA SAMARINDA": [],
              "KOTA BONTANG": []
          },
          "KALIMANTAN UTARA": {
              "KAB. BULUNGAN": [],
              "KAB. MALINAU": [],
              "KAB. NUNUKAN": [],
              "KAB. TANA TIDUNG": [],
              "KOTA TARAKAN": []
          },
          "SULAWESI UTARA": {
              "KAB. BOLAANG MONGONDOW": [],
              "KAB. MINAHASA": [],
              "KAB. KEPULAUAN SANGIHE": [],
              "KAB. KEPULAUAN TALAUD": [],
              "KAB. MINAHASA SELATAN": [],
              "KAB. MINAHASA UTARA": [],
              "KAB. MINAHASA TENGGARA": [],
              "KAB. BOLAANG MONGONDOW UTARA": [],
              "KAB. KEP. SIAU TAGULANDANG BIARO": [],
              "KAB. BOLAANG MONGONDOW TIMUR": [],
              "KAB. BOLAANG MONGONDOW SELATAN": [],
              "KOTA MANADO": [],
              "KOTA BITUNG": [],
              "KOTA TOMOHON": [],
              "KOTA KOTAMOBAGU": [],
          },
          "SULAWESI TENGAH": {
              "KAB. BANGGAI": [],
              "KAB. POSO": [],
              "KAB. DONGGALA": [],
              "KAB. TOLI TOLI": [],
              "KAB. BUOL": [],
              "KAB. MOROWALI": [],
              "KAB. BANGGAI KEPULAUAN": [],
              "KAB. PARIGI MOUTONG": [],
              "KAB. TOJO UNA UNA": [],
              "KAB. SIGI": [],
              "KAB. BANGGAI LAUT": [],
              "KAB. MOROWALI UTARA": [],
              "KOTA PALU": []
          },
          "SULAWESI SELATAN": {
              "KAB. KEPULAUAN SELAYAR": [],
              "KAB. BULUKUMBA": [],
              "KAB. BANTAENG": [],
              "KAB. JENEPONTO": [],
              "KAB. TAKALAR": [],
              "KAB. GOWA": [],
              "KAB. SINJAI": [],
              "KAB. BONE": [],
              "KAB. MAROS": [],
              "KAB. PANGKAJENE KEPULAUAN": [],
              "KAB. BARRU": [],
              "KAB. SOPPENG": [],
              "KAB. WAJO": [],
              "KAB. SIDENRENG RAPPANG": [],
              "KAB. PINRANG": [],
              "KAB. ENREKANG": [],
              "KAB. LUWU": [],
              "KAB. TANA TORAJA": [],
              "KAB. LUWU UTARA": [],
              "KAB. LUWU TIMUR": [],
              "KAB. TORAJA UTARA": [],
              "KOTA MAKASSAR": [],
              "KOTA PARE PARE": [],
              "KOTA PALOPO": []
          },
          "SULAWESI TENGGARA": {
              "KAB. KOLAKA": [],
              "KAB. KONAWE": [],
              "KAB. MUNA": [],
              "KAB. BUTON": [],
              "KAB. KONAWE SELATAN": [],
              "KAB. BOMBANA": [],
              "KAB. WAKATOBI": [],
              "KAB. KOLAKA UTARA": [],
              "KAB. KONAWE UTARA": [],
              "KAB. BUTON UTARA": [],
              "KAB. KOLAKA TIMUR": [],
              "KAB. KONAWE KEPULAUAN": [],
              "KAB. MUNA BARAT": [],
              "KAB. BUTON TENGAH": [],
              "KAB. BUTON SELATAN": [],
              "KOTA KENDARI": [],
              "KOTA BAU BAU": []
          },
          "GORONTALO": {
              "KAB. GORONTALO": [],
              "KAB. BOALEMO": [],
              "KAB. BONE BOLANGO": [],
              "KAB. PAHUWATO": [],
              "KAB. GORONTALO UTARA": [],
              "KOTA GORONTALO": []
          },
          "SULAWESI BARAT": {
              "KAB. MAMUJU UTARA": [],
              "KAB. MAMUJU": [],
              "KAB. MAMASA": [],
              "KAB. POLEWALI MANDAR": [],
              "KAB. MAJENE": [],
              "KAB. MAMUJU TENGAH": []
          },
          "MALUKU": {
              "KAB. MALUKU TENGAH": [],
              "KAB. MALUKU TENGGARA": [],
              "KAB. MALUKU TENGGARA BARAT": [],
              "KAB. BURU": [],
              "KAB. SERAM BAGIAN TIMUR": [],
              "KAB. SERAM BAGIAN BARAT": [],
              "KAB. KEPULAUAN ARU": [],
              "KAB. MALUKU BARAT DAYA": [],
              "KAB. BURU SELATAN": [],
              "KOTA AMBON": [],
              "KOTA TUAL": []
          },
          "MALUKU UTARA": {
              "KAB. HALMAHERA BARAT": [],
              "KAB. HALMAHERA TENGAH": [],
              "KAB. HALMAHERA UTARA": [],
              "KAB. HALMAHERA SELATAN": [],
              "KAB. KEPULAUAN SULA": [],
              "KAB. HALMAHERA TIMUR": [],
              "KAB. PULAU MOROTAI": [],
              "KAB. PULAU TALIABU": [],
              "KOTA TERNATE": [],
              "TIDORE KEPULAUAN": []
          },
          "PAPUA": {
              "KAB. MERAUKE": [],
              "KAB. JAYAWIJAYA": [],
              "KAB. JAYAPURA": [],
              "KAB. NABIRE": [],
              "KAB. KEPULAUAN YAPEN": [],
              "KAB. BIAK NUMFOR": [],
              "KAB. PUNCAK JAYA": [],
              "KAB. PANIAI": [],
              "KAB. MIMIKA": [],
              "KAB. SARMI": [],
              "KAB. KEEROM": [],
              "KAB. PEGUNUNGAN BINTANG": [],
              "KAB. YAHUKIMO": [],
              "KAB. TOLIKARA": [],
              "KAB. WAROPEN": [],
              "KAB. BOVEN DIGOEL": [],
              "KAB. MAPPI": [],
              "KAB. ASMAT": [],
              "KAB. SUPIORI": [],
              "KAB. MAMBERAMO RAYA": [],
              "KAB. MAMBERAMO TENGAH": [],
              "KAB. YALIMO": [],
              "KAB. LANNY JAYA": [],
              "KAB. NDUGA": [],
              "KAB. PUNCAK": [],
              "KAB. DOGIYAI": [],
              "KAB. INTAN JAYA": [],
              "KAB. DEIYAI": [],
              "KOTA JAYAPURA": []
          }
      }

      var dataPTN = {
          "STANFORD UNIVERSITY": {
              "SAINTEK & SOSHUM": [
              "INTERNATIONAL RELATIONS",
              "PSYCHOLOGY",
              "ENGINEERING",
              "FILM AND MEDIA STUDIES",
              "SCIENCE, TECHNOLOGY, AND SOCIETY",
              "COMPUTER SCIENCE",
              "MANAGEMENT SCIENCE AND ENGINEERING",
              "COMMUNICATION",
              "ECONOMICS",
              "PUBLIC POLICY",
              "AERONAUTICS AND ASTRONAUTICS",
              "PHYSICS",
              "CIVIL ENGINEERING",
              "AMERICAN STUDIES",
              "COMPARATIVE STUDIES IN RACE AND ETHNICITY",
              "ENVIRONMENTAL SYSTEMS ENGINEERING",
              "MATHEMATICS",
              "URBAN STUDIES",
              "CHEMICAL ENGINEERING",
              "CHEMISTRY",
              "MECHANICAL ENGINEERING",
              "AFRICAN AND AFRICAN AMERICAN STUDIES",
              "FEMINIST, GENDER, AND SEXUALITY STUDIES",
              "MUSIC",
              "POLITICAL SCIENCE",
              "BIOENGINEERING",
              "ENGINEERING - BIOMEDICAL COMPUTATION",
              "ENGINEERING - ENGINEERING PHYSICS",
              "HISTORY",
              "BIOLOGY",
              "ELECTRICAL ENGINEERING",
              "RESOURCES ENGINEERING",
              "ART HISTORY",
              "PRACTICE",
              "BIOMECHANICAL",
              "MATERIALS SCIENCE AND ENGINEERING",
              "MATHEMATICAL AND COMPUTATIONAL SCIENCE",
              "ARCHAEOLOGY",
              "ENGLISH",
              "PHILOSOPHY",
              "RELIGIOUS STUDIES",
              "THEATER AND PERFORMANCE STUDIES",
              "GEOPHYSICS",
              "SYMBOLIC SYSTEMS",
              "CHICANA/O-LATINA/O STUDIES",
              "EAST ASIAN STUDIES",
              "HISTORY AND PHILOSOPHY OF SCIENCE",
              "HUMAN BIOLOGY",
              "ARCHITECTURAL DESIGN",
              "ENGINEERING - ATMOSPHERE/ENERGY",
              "ANTHROPOLOGY",
              "CLASSICS",
              "COMPARATIVE LITERATURE",
              "LINGUISTICS",
              "SLAVIC LANGUAGES AND LITERATURES"
              ],//https://www.hotcourses.co.id/study/provider-result.html?collegeId=72102#search&countryId=211&nationCode=88&nationCntryCode=88&studyAbroad=N&studyOnline=N&studyCross=N&studyDomestic=N&studyPartTime=N&orderBy=POPULAR&collegeId=72102&manStdyAbrdFlg=N&restRefineFlag=Y&pageNo=15
          },
          "UNIVERSITY OF OXFORD": {
              "SAINTEK & SOSHUM": [
              "ECONOMICS AND MANAGEMENT",
              "ARABIC AND ISLAMIC STUDIES",
              "MEDICINE",
              "CIVIL ENGINEERING",
              "EXPERIMENTAL PSYCHOLOGY",
              "PHILOSOPHY, POLITICS AND ECONOMICS",
              "BIOMEDICAL ENGINEERING",
              "CHEMICAL ENGINEERING",
              "ENGLISH LANGUAGE AND LITERATURE",
              "ANCIENT AND MODERN HISTORY",
              "PSYCHOLOGY AND PHILOSOPHY",
              "FINE ART BFA",
              "ARCHAEOLOGY AND ANTHROPOLOGY",
              "LAW",
              "PSYCHOLOGY AND LINGUISTICS",
              "MATHEMATICS AND COMPUTER SCIENCE",
              "MECHANICAL ENGINEERING",
              "MANAGEMENT STUDIES",
              "GEOLOGY",
              "EGYPTOLOGY AND ANCIENT NEAR EASTERN STUDIES",
              "COMPUTER SCIENCE AND PHILOSOPHY",
              "INFORMATION ENGINEERING",
              "CHEMISTRY",
              "COMPUTER SCIENCE",
              "MATHEMATICS AND STATISTICS",
              "CLASSICS AND ENGLISH",
              "GEOGRAPHY",
              "HUMAN SCIENCES",
              "MATHEMATICS",
              "BIOCHEMISTRY",
              "PHYSICS",
              "BIOMEDICAL SCIENCES",
              "ANCIENT NEAR EASTERN STUDIES",
              "LAW WITH EUROPEAN LAW",
              "EGYPTOLOGY",
              "HISTORY AND ECONOMICS",
              "LAW WITH SPANISH LAW",
              "MATHEMATICS AND PHILOSOPHY",
              "PHYSICS AND PHILOSOPHY",
              "BEGINNERS' ITALIAN AND LINGUISTICS",
              "BEGINNERS' MODERN GREEK AND LINGUISTICS",
              "EARTH SCIENCES",
              "HISTORY AND POLITICS",
              "MUSIC",
              "ARABIC WITH SUBSIDIARY LANGUAGE"
              /*"P2A", //page15
              "P3A"*/
              ], //https://www.hotcourses.co.id/study/provider-result.html?collegeId=3757#search&countryId=210&nationCode=88&nationCntryCode=88&studyAbroad=N&studyOnline=N&studyCross=N&studyDomestic=N&studyPartTime=N&orderBy=POPULAR&collegeId=3757&manStdyAbrdFlg=N&restRefineFlag=Y&pageNo=15
          },
          "HARVARD UNIVERSITY": {
              "SAINTEK & SOSHUM": [
              "APPLIED MATHEMATICS",
              "COMPUTER SCIENCE",
              "BIOMEDICAL ENGINEERING",
              "ENVIRONMENTAL SCIENCE AND ENGINEERING",
              "MECHANICAL ENGINEERING",
              "ELECTRICAL ENGINEERING",
              "ARCHITECTURE STUDIES",
              "LIBERAL ARTS"
              ]//https://www.hotcourses.co.id/study/provider-result.html?collegeId=72040#search&countryId=211&nationCode=88&nationCntryCode=88&studyAbroad=N&studyOnline=N&studyCross=N&studyDomestic=N&studyPartTime=N&orderBy=POPULAR&collegeId=72040&manStdyAbrdFlg=N&restRefineFlag=Y&pageNo=16
          },
          "UNIVERSITAS PETERNAKAN IKAN LELE": {
              "SAINTEK": [
              "PENDIDIKAN TERNAK LELE",
              "TEKNIK BUDIDAYA LELE",
              "TEKNOLOGI HASIL PERLELEAN"
              ],
              "SOSHUM": [
              "MANAJEMEN PERIKANAN IKAN LELE",
              "LELEKOLOGI"
              ]
          },
          "UNIVERSITAS SYIAH KUALA": {
              "SAINTEK": [
              "PENDIDIKAN DOKTER HEWAN",
              "TEKNIK SIPIL",
              "TEKNIK MESIN",
              "TEKNIK KIMIA",
              "ARSITEKTUR",
              "TEKNIK ELEKTRO",
              "AGROTEKNOLOGI",
              "AGRIBISNIS",
              "PETERNAKAN",
              "TEKNOLOGI HASIL PERTANIAN",
              "TEKNIK PERTANIAN",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN DOKTER",
              "ILMU KEPERAWATAN",
              "PENDIDIKAN DOKTER GIGI",
              "MATEMATIKA",
              "FISIKA",
              "KIMIA",
              "BIOLOGI",
              "ILMU KELAUTAN",
              "BUDIDAYA PERAIRAN",
              "TEKNIK INDUSTRI",
              "INFORMATIKA",
              "FARMASI",
              "TEKNIK GEOFISIKA",
              "TEKNIK PERTAMBANGAN",
              "STATISTIKA",
              "PEMANFAATAN SUMBERDAYA PERIKANAN",
              "ILMU TANAH",
              "TEKNIK GEOLOGI",
              "AGROTEKNOLOGI (PSDKU GAYO LUES)",
              "PENDIDIKAN BIOLOGI (PDSKU GAYO LUES)",
              "KEHUTANAN (PSDKU GAYO LUES)",
              "PROTEKSI TANAMAN",
              "PERENCANAAN WILAYAH DAN KOTA",
              "KEHUTANAN",
              "TEKNIK KOMPUTER"
              ],
              "SOSHUM": [
              "EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "AKUNTANSI",
              "ILMU HUKUM",
              "PENDIDIKAN PANCASILA DAN KEWARGANEGARAAN",
              "PENDIDIKAN SEJARAH",
              "PENDIDIKAN EKONOMI",
              "PENDIDIKAN GEOGRAFI",
              "PENDIDIKAN BAHASA DAN SASTRA INDONESIA",
              "PENDIDIKAN BAHASA INGGRIS",
              "PENDIDIKAN SENI DRAMA TARI DAN MUSIK",
              "PENDIDIKAN KESEJAHTERAAN KELUARGA",
              "PEND. JASMANI KESEHATAN DAN REKREASI",
              "BIMBINGAN KONSELING",
              "PENDIDIKAN GURU SEKOLAH DASAR",
              "PSIKOLOGI",
              "ILMU POLITIK",
              "SOSIOLOGI",
              "ILMU KOMUNIKASI",
              "PENDIDIKAN GURU PAUD",
              "ILMU PEMERINTAHAN",
              "EKONOMI ISLAM",
              "MANAJEMEN (PSDKU GAYO LUES)"
              ]
          },
          "UNIVERSITAS MALIKUSSALEH": {
              "SAINTEK": [
              "TEKNIK SIPIL",
              "TEKNIK MESIN",
              "TEKNIK KIMIA",
              "TEKNIK ELEKTRO",
              "TEKNIK INDUSTRI",
              "TEKNIK INFORMATIKA",
              "TEKNIK ARSITEKTUR",
              "AGROEKOTEKNOLOGI",
              "AGRIBISNIS",
              "BUDIDAYA PERAIRAN",
              "PENDIDIKAN DOKTER",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN TEKNIK MESIN",
              "SISTEM INFORMASI",
              "ILMU KELAUTAN"
              ],
              "SOSHUM": [
              "MANAJEMEN",
              "AKUNTANSI",
              "ILMU EKONOMI & STUDI PEMBANGUNAN",
              "ILMU ADMINISTRASI NEGARA",
              "SOSIOLOGI",
              "ILMU POLITIK",
              "ANTROPOLOGI",
              "ILMU KOMUNIKASI",
              "ILMU HUKUM",
              "EKONOMI ISLAM",
              "PSIKOLOGI",
              "SASTRA INDONESIA",
              "ILMU ADMINISTRASI NIAGA"
              ]
          },
          "UNIVERSITAS TEUKU UMAR": {
              "SAINTEK": [
              "TEKNIK SIPIL",
              "TEKNIK MESIN",
              "TEKNIK INDUSTRI",
              "AGRIBISNIS",
              "AGROTEKNOLOGI",
              "PERIKANAN",
              "KESEHATAN MASYARAKAT",
              "AKUAKULTUR",
              "SUMBER DAYA AKUATIK",
              "TEKNOLOGI HASIL PERTANIAN",
              "ILMU KELAUTAN"
              ],
              "SOSHUM": [
              "EKONOMI PEMBANGUNAN",
              "ILMU ADMINISTRASI NEGARA",
              "SOSIOLOGI",
              "ILMU KOMUNIKASI",
              "MANAJEMEN",
              "AKUNTANSI",
              "ILMU HUKUM"
              ]
          },
          "UNIVERSITAS SAMUDRA": {
              "SAINTEK": [
              "AGROTEKNOLOGI",
              "AGRIBISNIS",
              "BUDIDAYA PERAIRAN",
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN BIOLOGI",
              "TEKNIK MESIN",
              "TEKNIK SIPIL",
              "TEKNIK INDUSTRI",
              "TEKNIK INFORMATIKA",
              "MATEMATIKA",
              "FISIKA",
              "KIMIA",
              "BIOLOGI"
              ],
              "SOSHUM": [
              "ILMU HUKUM",
              "EKONOMI MANAJEMEN",
              "EKONOMI PEMBANGUNAN",
              "PENDIDIKAN SEJARAH",
              "PENDIDIKAN GEOGRAFI",
              "PENDIDIKAN OLAHRAGA",
              "PENDIDIKAN GURU SEKOLAH DASAR",
              "PENDIDIKAN BAHASA INDONESIA",
              "AKUNTANSI"
              ]
          },
          "ISBI ACEH": {
              "SOSHUM": [
              "SENI KARAWITAN",
              "SENI TARI",
              "SENI TEATER",
              "SENI RUPA MURNI",
              "KRIYA SENI",
              "DESAIN KOMUNIKASI VISUAL"
              ]
          },
          "UNIVERSITAS ISLAM NEGERI AR-RANIRY": {
              "SAINTEK": [
              "PENDIDIKAN TEKNIK ELEKTRO",
              "PENDIDIKAN TEKNOLOGI INFORMATIKA",
              "ARSITEKTUR",
              "TEKNIK LINGKUNGAN",
              "BIOLOGI",
              "KIMIA"
              ],
              "SOSHUM": [
              "ILMU HUKUM",
              "BIMBINGAN KONSELING",
              "ILMU PERPUSTAKAAN",
              "EKONOMI SYARIAH",
              "PERBANKAN SYARIAH",
              "ILMU EKONOMI",
              "ILMU POLITIK",
              "ILMU ADMINISTRASI NEGARA",
              "PSIKOLOGI"
              ]
          },
          "UNIVERSITAS SUMATERA UTARA": {
              "SAINTEK": [
              "PENDIDIKAN DOKTER",
              "TEKNIK SIPIL",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "TEKNIK INDUSTRI",
              "TEKNIK KIMIA",
              "PENDIDIKAN DOKTER GIGI",
              "MATEMATIKA",
              "KIMIA",
              "FARMASI",
              "FISIKA",
              "ILMU KESEHATAN MASYARAKAT",
              "AGROEKOTEKNOLOGI",
              "KETEKNIKAN PERTANIAN",
              "BIOLOGI",
              "AGRIBISNIS",
              "ILMU DAN TEKNOLOGI PANGAN",
              "PETERNAKAN",
              "ARSITEKTUR",
              "ILMU KEPERAWATAN",
              "KEHUTANAN",
              "ILMU KOMPUTER",
              "TEKNOLOGI INFORMASI",
              "MANAJEMEN SUMBER DAYA PERAIRAN",
              "TEKNIK LINGKUNGAN"
              ],
              "SOSHUM": [
              "ILMU HUKUM",
              "ILMU SEJARAH",
              "ANTROPOLOGI SOSIAL",
              "AKUNTANSI",
              "SOSIOLOGI",
              "ILMU KESEJAHTERAAN SOSIAL",
              "ILMU ADMINISTRASI NEGARA",
              "ILMU KOMUNIKASI",
              "MANAJEMEN",
              "EKONOMI PEMBANGUNAN",
              "ILMU POLITIK",
              "SASTRA INDONESIA",
              "SASTRA DAERAH UNTUK SASTRA MELAYU",
              "SASTRA INGGRIS",
              "SASTRA DAERAH UNTUK SASTRA BATAK",
              "SASTRA ARAB",
              "ETNO MUSIKOLOGI",
              "SASTRA JEPANG",
              "ILMU PERPUSTAKAAN",
              "SASTRA CINA",
              "ILMU ADMINISTRASI NIAGA/BISNIS",
              "PSIKOLOGI"
              ]
          },
          "UNIVERSITAS NEGERI MEDAN": {
              "SAINTEK": [
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN TEKNIK BANGUNAN",
              "PENDIDIKAN TEKNIK MESIN",
              "PENDIDIKAN TEKNIK ELEKTRO",
              "KIMIA",
              "BIOLOGI",
              "ILMU KEOLAHRAGAAN",
              "MATEMATIKA",
              "FISIKA",
              "PENDIDIKAN TEKNIK OTOMOTIF",
              "GIZI",
              "TEKNIK ELEKTRO",
              "TEKNIK SIPIL",
              "PENDIDIKAN TEKNOLOGI INFORMATIKA DAN KOMPUTER",
              "ILMU KOMPUTER",
              "PENDIDIKAN IPA"
              ],
              "SOSHUM": [
              "PENDIDIKAN SEJARAH",
              "PEND. PANCASILA & KEWARGANEGARAAN (PPKN)",
              "PENDIDIKAN GEOGRAFI",
              "PEND. JASMANI, KESEHATAN & REKREASI",
              "PENDIDIKAN KEPELATIHAN OLAHRAGA (PKO)",
              "PENDIDIKAN LUAR SEKOLAH (PLS)",
              "PENDIDIKAN EKONOMI",
              "MANAJEMEN",
              "AKUNTANSI",
              "PEND. BAHASA, SASTRA INDONESIA & DAERAH",
              "PENDIDIKAN BAHASA INGGRIS",
              "PENDIDIKAN BAHASA PERANCIS",
              "PENDIDIKAN BAHASA JERMAN",
              "PENDIDIKAN SENI RUPA",
              "SASTRA INDONESIA",
              "SASTRA INGGRIS",
              "PENDIDIKAN GURU SEKOLAH DASAR (PGSD)",
              "PENDIDIKAN TATA BOGA",
              "PENDIDIKAN TATA RIAS",
              "PENDIDIKAN ANTROPOLOGI",
              "PEND. GURU PENDIDIKAN ANAK USIA DINI",
              "PENDIDIKAN BIMBINGAN DAN KONSELING",
              "PENDIDIKAN AKUNTANSI",
              "PENDIDIKAN ADMINISTRASI PERKANTORAN",
              "PENDIDIKAN TATA NIAGA",
              "PENDIDIKAN SENI TARI",
              "PENDIDIKAN SENI MUSIK",
              "PENDIDIKAN TATA BUSANA",
              "SENI PERTUNJUKAN",
              "ILMU EKONOMI"
              ]
          },
          "UNIVERSITAS ISLAM NEGERI SUMATERA UTARA": {
              "SAINTEK": [
              "ILMU KOMPUTER",
              "SISTEM INFORMASI",
              "MATEMATIKA",
              "BIOLOGI",
              "FISIKA",
              "ILMU KESEHATAN MASYARAKAT"
              ],
              "SOSHUM": [
              "ILMU PERPUSTAKAAN",
              "ILMU KOMUNIKASI"
              ]
          },
          "UNIVERSITAS RIAU": {
              "SAINTEK": [
              "FISIKA",
              "KIMIA",
              "MATEMATIKA",
              "BIOLOGI",
              "MANAJEMEN SUMBERDAYA PERAIRAN",
              "BUDIDAYA PERAIRAN",
              "ILMU KELAUTAN",
              "TEKNOLOGI HASIL PERIKANAN",
              "PEMANFAATAN SUMBERDAYA PERIKANAN",
              "SOSIAL EKONOMI PERIKANAN",
              "AGROTEKNOLOGI",
              "SOSIAL EKONOMI PERTANIAN (AGRIBISNIS)",
              "TEKNOLOGI HASIL PERTANIAN",
              "KEHUTANAN",
              "TEKNIK SIPIL",
              "TEKNIK KIMIA",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "PEND. DOKTER",
              "ILMU KEPERAWATAN",
              "PEND. MATEMATIKA",
              "PEND. BIOLOGI",
              "PEND. FISIKA",
              "PEND. KIMIA",
              "TEKNIK LINGKUNGAN",
              "TEKNIK ARSITEK",
              "SISTEM INFORMASI",
              "TEKNIK INFORMATIKA",
              "TEKNOLOGI INDUSTRI PERTANIAN",
              "STATISTIKA"
              ],
              "SOSHUM": [
              "HUBUNGAN INTERNASIONAL",
              "ILMU PEMERINTAHAN",
              "ILMU ADMINISTRASI NEGARA",
              "ILMU ADMINISTRASI NIAGA",
              "SOSIOLOGI",
              "ILMU KOMUNIKASI",
              "PARIWISATA",
              "EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "AKUNTANSI",
              "ILMU HUKUM",
              "PEND. EKONOMI",
              "PEND. PANCASILA & KEWARGANEGARAAN (PPKN)",
              "PEND. SEJARAH",
              "PEND. BAHASA, SASTRA INDONEIA & DAERAH",
              "PEND. BHS. INGGRIS",
              "PEND. BAHASA JEPANG",
              "PEND. LUAR SEKOLAH",
              "BIMBINGAN KONSELING",
              "PEND JASMANI KESEHATAN & REKREASI",
              "PEND KEPELATIHAN OLAHRAGA",
              "PGSD",
              "PAUD"
              ]
          },
          "UNIVERSITAS ISLAM NEGERI SULTAN SYARIF KASIM": {
              "SAINTEK": [
              "ILMU PETERNAKAN",
              "MATEMATIKA",
              "SISTEM INFORMASI",
              "TEKNIK ELEKTRO",
              "TEKNIK INDUSTRI",
              "TEKNIK INFORMATIKA",
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN KIMIA",
              "ILMU PERTANIAN (AGROTEKNOLOGI)"
              ],
              "SOSHUM": [
              "AKUNTANSI",
              "ILMU ADMINISTRASI NEGARA",
              "MANAJEMEN",
              "PSIKOLOGI",
              "ILMU HUKUM",
              "PENDIDIKAN EKONOMI",
              "ILMU KOMUNIKASI"
              ]
          },
          "UNIVERSITAS MARITIM RAJA ALI HAJI": {
              "SAINTEK": [
              "TEKNIK ELEKTRO",
              "TEKNIK INFORMATIKA",
              "ILMU KELAUTAN",
              "MANAJEMEN SUMBERDAYA PERAIRAN",
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN KIMIA",
              "BUDI DAYA PERAIRAN",
              "TEKNOLOGI HASIL PERIKANAN",
              "SOSIAL EKONOMI PERIKANAN"
              ],
              "SOSHUM": [
              "PENDIDIKAN BAHASA INDONESIA",
              "AKUNTANSI",
              "ILMU ADMINISTRASI NEGARA",
              "ILMU PEMERINTAHAN",
              "SOSIOLOGI",
              "PENDIDIKAN BAHASA INGGRIS",
              "MANAJEMEN",
              "ILMU HUKUM",
              "ILMU HUBUNGAN INTERNASIONAL"
              ]
          },
          "UNIVERSITAS ANDALAS": {
              "SAINTEK": [
              "AGRIBISNIS",
              "AGROEKOTEKNOLOGI",
              "PENDIDIKAN DOKTER",
              "ILMU KEPERAWATAN",
              "ILMU KESEHATAN MASYARAKAT",
              "PENDIDIKAN DOKTER GIGI",
              "KIMIA",
              "BIOLOGI",
              "MATEMATIKA",
              "FISIKA",
              "SISTEM KOMPUTER",
              "PETERNAKAN",
              "TEKNIK MESIN",
              "TEKNIK SIPIL",
              "TEKNIK INDUSTRI",
              "TEKNIK LINGKUNGAN",
              "TEKNIK ELEKTRO",
              "FARMASI",
              "TEKNIK PERTANIAN",
              "TEKNOLOGI HASIL PERTANIAN",
              "SISTEM INFORMASI",
              "PSIKOLOGI",
              "ILMU TANAH",
              "AGROEKOTEKNOLOGI (KAMPUS X DHARMASRAYA)",
              "PETERNAKAN ( KAMPUS II PAYAKUMBUH)",
              "KEBIDANAN",
              "GIZI",
              "PROTEKSI TANAMAN",
              "PENYULUHAN PERTANIAN"
              ],
              "SOSHUM": [
              "EKONOMI PEMBANGUNAN",
              "ILMU HUKUM",
              "ILMU SEJARAH",
              "SOSIOLOGI",
              "ANTROPOLOGI SOSIAL",
              "MANAJEMEN",
              "AKUNTANSI",
              "ILMU POLITIK",
              "ILMU ADMINISTRASI NEGARA",
              "SASTRA INDONESIA",
              "SASTRA INGGRIS",
              "SASTRA DAERAH MINANGKABAU",
              "SASTRA JEPANG",
              "ILMU HUBUNGAN INTERNASIONAL",
              "ILMU KOMUNIKASI",
              "MANAJEMEN (KAMPUS X PAYAKUMBUH)",
              "EKONOMI PEMBANGUNAN (KAMPUS X PAYAKUMBUH)"
              ]
          },
          "UNIVERSITAS NEGERI PADANG": {
              "SAINTEK": [
              "PENDIDIKAN MATEMATIKA",
              "MATEMATIKA (NK)",
              "PENDIDIKAN BIOLOGI",
              "BIOLOGI (NK)",
              "PENDIDIKAN FISIKA",
              "FISIKA (NK)",
              "PENDIDIKAN KIMIA",
              "KIMIA (NK)",
              "PENDIDIKAN TEKNIK BANGUNAN",
              "PENDIDIKAN TEKNIK ELEKTRO",
              "PENDIDIKAN TEKNIK ELEKTRONIKA",
              "PENDIDIKAN TEKNIK MESIN",
              "PENDIDIKAN TEKNIK OTOMOTIF",
              "PEND. TEKNIK INFORMATIKA DAN KOMPUTER",
              "ILMU KEOLAHRAGAAN (NK)",
              "TEKNIK PERTAMBANGAN (NK)",
              "TEKNIK ELEKTRO INDUSTRI (NK)",
              "PENDIDIKAN ILMU PENGETAHUAN ALAM",
              "TEKNIK SIPIL",
              "STATISTIKA (NK)",
              "TEKNIK MESIN (NK)"
              ],
              "SOSHUM": [
              "ADMINISTRASI PENDIDIKAN",
              "PENDIDIKAN LUAR BIASA",
              "TEKNOLOGI PENDIDIKAN",
              "PENDIDIKAN LUAR SEKOLAH",
              "BIMBINGAN DAN KONSELING",
              "PSIKOLOGI",
              "PGSD (PENDIDIKAN GURU SEKOLAH DASAR)",
              "PEND. GURU PENDIDIKAN ANAK USIA DINI",
              "PEND. BHS & SAST. INDO. & DAERAH",
              "BAHASA & SASTRA INDONESIA (NK)",
              "PEND. BHS INGGRIS",
              "BAHASA & SASTRA INGGRIS (NK)",
              "PENDIDIKAN SENI RUPA",
              "PENDIDIKAN SENDRATASIK",
              "PENDIDIKAN GEOGRAFI",
              "PENDIDIKAN SEJARAH",
              "PENDIDIKAN SOSIOLOGI ANTROPOLOGI",
              "PEND. PANCASILA & KEWARGANEGARAAN (PPKN)",
              "ILMU ADMINISTRASI NEGARA (NK)",
              "PENDIDIKAN EKONOMI",
              "MANAJEMEN (NK)",
              "AKUNTANSI (NK)",
              "EKONOMI PEMBANGUNAN (NK)",
              "PEND. KESEJAHTERAAN KELUARGA",
              "TATA RIAS DAN KECANTIKAN (NK)",
              "PENJASKESREK",
              "PENDD. KEPELATIHAN OLAHRAGA",
              "GEOGRAFI (NK)",
              "MANAJEMEN PERHOTELAN (NK)",
              "DISAIN KOM. VISUAL (NK)",
              "PENDIDIKAN BAHASA JEPANG",
              "PENDIDIKAN MUSIK",
              "PENDIDIKAN KEAGAMAAN ISLAM",
              "PERPUSTAKAAN DAN ILMU INFORMASI",
              "PENDIDIKAN TARI"
              ]
          },
          "ISI PADANG PANJANG": {
              "SOSHUM": [
              "SENI KARAWITAN",
              "SENI TARI",
              "SENI MUSIK",
              "SENI TEATER",
              "SENI KRIYA",
              "TV DAN FILM",
              "SENI MURNI",
              "FOTOGRAFI",
              "DESAIN DAN KOMUNIKASI VISUAL",
              "ANTROPOLOGI BUDAYA",
              "PENDIDIKAN KRIYA"
              ]
          },
          "UNIVERSITAS JAMBI": {
              "SAINTEK": [
              "PEND. KIMIA",
              "PEND. MATEMATIKA",
              "PEND. FISIKA",
              "PEND. BIOLOGI",
              "AGROEKOTEKNOLOGI",
              "AGRIBISNIS",
              "TEKNOLOGI HASIL PERTANIAN",
              "PEND. OLAHRAGA & KESEHATAN",
              "KEHUTANAN",
              "PETERNAKAN",
              "KEDOKTERAN",
              "KIMIA",
              "ILMU KEPERAWATAN",
              "FARMASI",
              "PEMANFAATAN SUMBERDAYA PERIKANAN",
              "SISTEM INFORMASI",
              "TEKNIK PERTAMBANGAN",
              "TEKNIK GEOLOGI",
              "BIOLOGI",
              "FISIKA",
              "MATEMATIKA",
              "ILMU KESEHATAN MASYARAKAT",
              "TEKNIK LINGKUNGAN",
              "KEPELATIHAN OLAHRAGA",
              "TEKNIK ELEKTRO",
              "TEKNIK GEOFISIKA",
              "TEKNIK KIMIA",
              "TEKNIK SIPIL",
              "TEKNIK PERTANIAN",
              "TEKNOLOGI INDUSTRI PERTANIAN"
              ],
              "SOSHUM": [
              "PEND. EKONOMI",
              "PEND. BAHASA, SASTRA INDONESIA & DAERAH",
              "PEND. BAHASA INGGRIS",
              "ILMU HUKUM",
              "ILMU EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "AKUNTANSI",
              "PEND. GURU SEKOLAH DASAR",
              "BIMBINGAN DAN KONSELING",
              "PENDIDIKAN GURU PAUD",
              "PENDIDIKAN BAHASA ARAB",
              "PENDIDIKAN SEJARAH",
              "SASTRA INDONESIA",
              "PSIKOLOGI",
              "ILMU PEMERINTAHAN",
              "EKONOMI ISLAM",
              "ARKEOLOGI",
              "PENDIDIKAN PANCASILA DAN KEWARGANEGARAAN",
              "ILMU SEJARAH",
              "ADMINISTRASI PENDIDIKAN",
              "ILMU POLITIK",
              "SENI DRAMA TARI DAN MUSIK"
              ]
          },
          "UNIVERSITAS BENGKULU": {
              "SAINTEK": [
              "AGROEKOTEKNOLOGI",
              "KEHUTANAN",
              "PETERNAKAN",
              "AGRIBISNIS",
              "TEKNOLOGI INDUSTRI PERTANIAN",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN MATEMATIKA",
              "MATEMATIKA",
              "FISIKA",
              "BIOLOGI",
              "KIMIA",
              "TEKNIK INFORMATIKA",
              "TEKNIK SIPIL",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "ILMU KELAUTAN",
              "PENDIDIKAN DOKTER",
              "ILMU TANAH",
              "STATISTIKA",
              "ARSITEKTUR",
              "SISTEM INFORMASI",
              "PROTEKSI TANAMAN",
              "FARMASI",
              "GEOFISIKA",
              "PENDIDIKAN IPA"
              ],
              "SOSHUM": [
              "ILMU HUKUM",
              "ILMU KESEJAHTERAAN SOSIAL",
              "EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "ILMU ADMINISTRASI NEGARA",
              "SOSIOLOGI",
              "ILMU KOMUNIKASI",
              "AKUNTANSI",
              "PENDIDIKAN LUAR SEKOLAH",
              "PENDIDIKAN BAHASA DAN SASTRA INDONESIA",
              "PENDIDIKAN BAHASA INGGRIS",
              "PENDIDIKAN GURU SEKOLAH DASAR",
              "PENDIDIKAN GURU PENDIDIKAN ANAK USIA DINI",
              "PENDIDIKAN JASMANI DAN KESEHATAN",
              "BIMBINGAN DAN KONSELING",
              "ILMU PERPUSTAKAAN",
              "JURNALISTIK"
              ]
          },
          "UNIVERSITAS SRIWIJAYA": {
              "SAINTEK": [
              "TEKNIK SIPIL",
              "TEKNIK PERTAMBANGAN",
              "TEKNIK KIMIA",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "PENDIDIKAN DOKTER",
              "PENDIDIKAN DOKTER GIGI",
              "MATEMATIKA",
              "FISIKA",
              "KIMIA",
              "BIOLOGI",
              "AGRIBISNIS",
              "TEKNOLOGI HASIL PERTANIAN",
              "TEKNIK PERTANIAN",
              "PEND. MATEMATIKA",
              "PEND BIOLOGI",
              "PEND. KIMIA",
              "PEND FISIKA",
              "ILMU KESEHATAN MASYARAKAT",
              "ARSITEKTUR",
              "ILMU KELAUTAN",
              "BUDIDAYA PERAIRAN",
              "TEKNOLOGI HASIL PERIKANAN",
              "ILMU KEPERAWATAN",
              "PEND TEKNIK MESIN",
              "SISTEM KOMPUTER",
              "TEKNIK INFORMATIKA",
              "SISTEM INFORMASI",
              "AGROEKOTEKNOLOGI",
              "PETERNAKAN",
              "FARMASI",
              "TEKNIK GEOLOGI",
              "PSIKOLOGI",
              "ILMU TANAH",
              "AGRONOMI",
              "PROTEKSI TANAMAN",
              "GIZI",
              "KESEHATAN LINGKUNGAN"
              ],
              "SOSHUM": [
              "EKONOMI PEMBANGUNAN",
              "ILMU HUKUM",
              "MANAJEMEN",
              "AKUNTANSI",
              "ILMU ADM NEGARA",
              "SOSIOLOGI",
              "PPKN",
              "PEND SEJARAH",
              "PEND EKONOMI",
              "PEND BHS, SATRA IND & DAERAH",
              "PEND BHS INGGRIS",
              "PENJASKES",
              "BIMB & KONSELING",
              "PGSD",
              "PAUD",
              "ILMU KOMUNIKASI",
              "PENDIDIKAN LUAR SEKOLAH",
              "ILMU HUBUNGAN INTERNASIONAL "
              ]
          },
          "UNIVERSITAS ISLAM NEGERI RADEN FATAH": {
              "SAINTEK": [
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN BIOLOGI",
              "KIMIA",
              "BIOLOGI",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN KIMIA"
              ],
              "SOSHUM": [
              "ILMU POLITIK",
              "ILMU PERPUSTAKAAN",
              "ILMU KOMUNIKASI"
              ]
          },
          "UNIVERSITAS BANGKA BELITUNG": {
              "SAINTEK": [
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "TEKNIK PERTAMBANGAN",
              "TEKNIK SIPIL",
              "AGROTEKNOLOGI",
              "MANAJEMEN SUMBERDAYA PERAIRAN",
              "BIOLOGI",
              "AGRIBISNIS",
              "BUDIDAYA PERAIRAN",
              "ILMU KELAUTAN",
              "KIMIA",
              "FISIKA"
              ],
              "SOSHUM": [
              "AKUNTANSI",
              "MANAJEMEN",
              "ILMU HUKUM",
              "SOSIOLOGI",
              "SASTRA INGGRIS",
              "ILMU POLITIK",
              "EKONOMI"
              ]
          },
          "UNIVERSITAS LAMPUNG": {
              "SAINTEK": [
              "AGROTEKNOLOGI",
              "AGRIBISNIS",
              "TEKNIK GEOFISIKA",
              "TEKNIK SIPIL",
              "KIMIA",
              "BIOLOGI",
              "TEKNOLOGI HASIL PERTANIAN",
              "PETERNAKAN",
              "KEHUTANAN",
              "TEKNIK PERTANIAN",
              "MATEMATIKA",
              "FISIKA",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "PEND. MATEMATIKA",
              "PEND. FISIKA",
              "PEND. KIMIA",
              "PEND. BIOLOGI",
              "TEKNIK KIMIA",
              "PEND. KEDOKTERAN",
              "BUDIDAYA PERAIRAN",
              "ILMU KOMPUTER",
              "ARSITEKTUR",
              "TEKNIK GEODESI",
              "TEKNIK INFORMATIKA",
              "SUMBERDAYA AKUATIK",
              "ILMU TANAH",
              "AGRONOMI",
              "PROTEKSI TANAMAN",
              "PENYULUHAN PERTANIAN",
              "ILMU KELAUTAN",
              "TEKNOLOGI INDUSTRI PERTANIAN",
              "NUTRISI DAN TEKNOLOGI PANGAN TERNAK",
              "PENDIDIKAN VOKASIONAL TEKNOLOGI INFORMASI"
              ],
              "SOSHUM": [
              "HUKUM",
              "SOSIOLOGI",
              "ILMU PEMERINTAHAN",
              "MANAJEMEN",
              "IESP",
              "AKUNTANSI",
              "ILMU KOMUNIKASI",
              "ILMU ADM. NEGARA",
              "ILMU ADM. NIAGA/BISNIS",
              "PPKN",
              "PEND. SEJARAH",
              "PEND. GEOGRAFI",
              "PEND. EKONOMI",
              "PENJASKESREK",
              "BIMB. KONSELING",
              "PEND. BAHASA INDONESIA",
              "PEND. B. INGGRIS",
              "PGSD",
              "PEND. SENI DRAMA,TARI&MUSIK",
              "PENDIDIKAN ANAK USIA DINI",
              "HUBUNGAN INTERNASIONAL",
              "BAHASA PERANCIS",
              "PENDIDIKAN MUSIK"
              ]
          },
          "INSTITUT TEKNOLOGI SUMATERA": {
              "SAINTEK": [
              "TEKNIK GEOMATIKA",
              "TEKNIK ELEKTRO",
              "PERENCANAAN WILAYAH DAN KOTA",
              "TEKNIK GEOFISIKA",
              "TEKNIK SIPIL",
              "TEKNIK INFORMATIKA",
              "FISIKA",
              "ARSITEKTUR",
              "TEKNIK LINGKUNGAN",
              "TEKNIK GEOLOGI",
              "MATEMATIKA",
              "TEKNIK MESIN",
              "BIOLOGI",
              "TEKNIK INDUSTRI",
              "FARMASI",
              "TEKNIK KIMIA",
              "KIMIA",
              "TEKNIK FISIKA",
              "TEKNIK KELAUTAN",
              "SAINS ATMOSFIR DAN KEPLANETAN",
              "TEKNIK BIOSISTEM"
              ]
          },
          "UNIVERSITAS SULTAN AGENG TIRTAYASA": {
              "SAINTEK": [
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "TEKNIK INDUSTRI",
              "TEKNIK METALURGI",
              "TEKNIK KIMIA",
              "TEKNIK SIPIL",
              "AGRIBISNIS",
              "AGROEKOTEKNOLOGI",
              "PERIKANAN",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN TEKNIK ELEKTRO",
              "PENDIDIKAN TEKNIK MESIN",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN IPA",
              "TEKNOLOGI PANGAN"
              ],
              "SOSHUM": [
              "ILMU HUKUM",
              "MANAJEMEN",
              "AKUNTANSI",
              "EKONOMI PEMBANGUNAN",
              "ADMINISTRASI NEGARA",
              "ILMU KOMUNIKASI",
              "PENDIDIKAN LUAR SEKOLAH",
              "PENDIDIKAN BAHASA INDONESIA",
              "PENDIDIKAN BAHASA INGGRIS",
              "PENDIDIKAN GURU SEKOLAH DASAR",
              "PENDIDIKAN ANAK USIA DINI",
              "EKONOMI ISLAM",
              "PENDIDIKAN SOSIOLOGI",
              "PENDIDIKAN SEJARAH",
              "PENDIDIKAN KEWARGANEGARAAN",
              "PENDIDIKAN SENI DRAMA, TARI, DAN MUSIK",
              "PENDIDIKAN KONSELING",
              "PENDIDIKAN LUAR BIASA",
              "ILMU PEMERINTAHAN   "
              ]
          },
          "UNIVERSITAS INDONESIA": {
              "SAINTEK": [
              "PENDIDIKAN DOKTER",
              "PENDIDIKAN DOKTER GIGI",
              "MATEMATIKA",
              "FISIKA",
              "KIMIA",
              "BIOLOGI",
              "FARMASI",
              "GEOGRAFI",
              "TEKNIK SIPIL",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "TEKNIK METALURGI & MATERIAL",
              "ARSITEKTUR",
              "TEKNIK KIMIA",
              "ILMU KEPERAWATAN",
              "ILMU KOMPUTER",
              "ILMU KESEHATAN MASYARAKAT",
              "TEKNIK INDUSTRI",
              "TEKNIK PERKAPALAN",
              "TEKNIK LINGKUNGAN",
              "TEKNIK KOMPUTER",
              "SISTEM INFORMASI",
              "ARSITEKTUR INTERIOR",
              "TEKNOLOGI BIOPROSES",
              "GIZI",
              "KESEHATAN LINGKUNGAN",
              "KESELAMATAN DAN KESEHATAN KERJA",
              "GEOFISIKA",
              "GEOLOGI",
              "STATISTIKA",
              "AKTUARIA",
              "TEKNIK BIOMEDIS"
              ],
              "SOSHUM": [
              "ILMU HUKUM",
              "ARKEOLOGI INDONESIA",
              "ILMU SEJARAH",
              "ILMU PSIKOLOGI",
              "ILMU KOMUNIKASI",
              "ILMU POLITIK",
              "ILMU ADMINISTRASI NEGARA",
              "KRIMINOLOGI",
              "SOSIOLOGI",
              "ILMU KESEJAHTERAAN SOSIAL",
              "ANTROPOLOGI SOSIAL",
              "ILMU EKONOMI",
              "ILMU ADMINISTRASI NIAGA",
              "ILMU ADMINISTRASI FISKAL",
              "MANAJEMEN",
              "AKUNTANSI",
              "ILMU HUBUNGAN INTERNASIONAL",
              "ILMU PERPUSTAKAAN",
              "ILMU FILSAFAT",
              "SASTRA INDONESIA",
              "SASTRA DAERAH UNTUK SASTRA JAWA",
              "SASTRA JEPANG",
              "SASTRA CINA",
              "SASTRA ARAB",
              "SASTRA PERANCIS",
              "SASTRA INGGRIS",
              "SASTRA JERMAN",
              "SASTRA BELANDA",
              "SASTRA RUSIA",
              "BAHASA DAN KEBUDAYAAN KOREA",
              "ILMU EKONOMI ISLAM",
              "BISNIS ISLAM    "
              ]
          },
          "UNIVERSITAS ISLAM NEGERI JAKARTA": {
              "SAINTEK": [
              "SOSIAL EKONOMI PERTANIAN / AGRIBISNIS",
              "TEKNIK INFORMATIKA",
              "SISTEM INFORMASI",
              "MATEMATIKA",
              "BIOLOGI",
              "KIMIA",
              "FISIKA",
              "KESEHATAN MASYARAKAT",
              "FARMASI",
              "ILMU KEPERAWATAN",
              "PENDIDIKAN DOKTER",
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN KIMIA",
              "TEKNIK PERTAMBANGAN"
              ],
              "SOSHUM": [
              "AKUNTANSI",
              "ILMU EKONOMI DAN STUDI PEMBANGUNAN",
              "ILMU HUBUNGAN INTERNASIONAL",
              "ILMU HUKUM",
              "ILMU PERPUSTAKAAN",
              "MANAJEMEN",
              "ILMU POLITIK",
              "KESEJAHTERAAN SOSIAL",
              "PSIKOLOGI",
              "SOSIOLOGI",
              "BAHASA DAN SASTRA INGGRIS"
              ]
          },
          "UNIVERSITAS NEGERI JAKARTA": {
              "SAINTEK": [
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN BIOLOGI",
              "MATEMATIKA",
              "FISIKA",
              "KIMIA",
              "BIOLOGI",
              "PENDIDIKAN VOKASIONAL TEKNIK ELEKTRO",
              "PENDIDIKAN VOKASIONAL TEKNIK MESIN",
              "PENDIDIKAN VOKASIONAL KONSTRUKSI BANGUNAN",
              "ILMU KEOLAHRAGAAN",
              "PENDIDIKAN INFORMATIKA",
              "PENDIDIKAN VOKASIONAL TEKNIK ELEKTRONIKA",
              "ILMU KOMPUTER",
              "STATISTIKA",
              "REKAYASA KESELAMATAN KEBAKARAN"
              ],
              "SOSHUM": [
              "TEKNOLOGI PENDIDIKAN",
              "PENDIDIKAN KHUSUS",
              "MANAJEMEN PENDIDIKAN",
              "PENDIDIKAN MASYARAKAT",
              "PEND. GURU PAUD",
              "BIMBINGAN & KONSELING",
              "PENDIDIKAN GURU SEKOLAH DASAR",
              "PSIKOLOGI",
              "PENDIDIKAN BAHASA INDONESIA",
              "SASTRA INDONESIA",
              "PENDIDIKAN BAHASA INGGRIS",
              "SASTRA INGGRIS",
              "PENDIDIKAN BAHASA PRANCIS",
              "PENDIDIKAN BAHASA JERMAN",
              "PENDIDIKAN BAHASA ARAB",
              "PENDIDIKAN BAHASA JEPANG",
              "PENDIDIKAN TARI",
              "PENDIDIKAN MUSIK",
              "PENDIDIKAN SENI RUPA",
              "PENDIDIKAN PANCASILA & KEWARGANEGARAAN",
              "PENDIDIKAN GEOGRAFI",
              "PENDIDIKAN SEJARAH",
              "PENDIDIKAN AGAMA ISLAM",
              "SOSIOLOGI",
              "PENDIDIKAN SOSIOLOGI",
              "PENDIDIKAN VOKASIONAL KESEJAHTERAAN KELUARGA",
              "PENDIDIKAN JASMANI",
              "PENDIDIKAN KEPELATIHAN OLAHRAGA",
              "PENDIDIKAN EKONOMI",
              "MANAJEMEN",
              "AKUNTANSI",
              "PENDIDIKAN ILMU PENGETAHUAN SOSIAL",
              "PENDIDIKAN VOKASIONAL SENI KULINER",
              "PENDIDIKAN VOKASIONAL DESAIN FASHION",
              "PENDIDIKAN VOKASIONAL TATA RIAS",
              "PENDIDIKAN BISNIS",
              "PENDIDIKAN BAHASA MANDARIN",
              "PENDIDIKAN ADMINISTRASI PERKANTORAN",
              "OLAHRAGA REKREASI",
              "KEPELATIHAN KECABANGAN OLAHRAGA",
              "ILMU KOMUNIKASI "
              ]
          },
          //BATAS FIX
          "UPN \"VETERAN\" JAKARTA": {
              "SAINTEK": [
              "TEKNIK MESIN",
              "TEKNIK PERKAPALAN",
              "TEKNIK INDUSTRI",
              "TEKNIK INFORMATIKA",
              "SISTEM INFORMASI",
              "KEDOKTERAN",
              "KEPERAWATAN",
              "KESEHATAN MASYARAKAT",
              "ILMU GIZI"
              ],
              "SOSHUM": [
              "MANAJEMEN",
              "AKUNTANSI",
              "HUB. INTERNASIONAL",
              "KOMUNIKASI",
              "HUKUM",
              "EKONOMI PEMBANGUNAN",
              "EKONOMI SYARIAH",
              "ILMU POLITIK"
              ]
          },
          "UNIVERSITAS SINGAPERBANGSA KARAWANG": {
              "SAINTEK": [
              "AGROTEKNOLOGI",
              "TEKNIK INDUSTRI",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "TEKNIK INFORMATIKA",
              "PEND. MATEMATIKA",
              "AGRIBISNIS",
              "FARMASI"
              ],
              "SOSHUM": [
              "ILMU HUKUM",
              "MANAJEMEN",
              "AKUNTANSI",
              "PEND. LUAR SEKOLAH",
              "PEND. BAHASA INGGRIS",
              "PEND. JASMANI, KESEHATAN DAN REKREASI",
              "PEND. BAHASA DAN SASTRA INDONESIA",
              "ILMU PEMERINTAHAN",
              "ILMU KOMUNIKASI     "
              ]
          },
          "INSTITUT TEKNOLOGI BANDUNG": {
              "SAINTEK": [
              "FAK. ILMU DAN TEKNOLOGI KEBUMIAN (FITB)",
              "FAK. TEKNIK PERTAMB. & PERMINYAKAN (FTTM)",
              "FAK. MATEMATIKA & ILMU PENGET. ALAM (FMIPA)",
              "FAKULTAS TEKNIK SIPIL & LINGKUNGAN (FTSL) - KAMPUS GANESA",
              "SEKOLAH FARMASI (SF)",
              "SEKOLAH ILMU & TEKNO. HAYATI - PROG. SAINS",
              "SEKOLAH TEK. ELEKTRO & INFORMATIKA (STEI)",
              "FAKULTAS TEKNOLOGI INDUSTRI (FTI) - KAMPUS GANESA",
              "FAKULTAS TEKNIK MESIN & DIRGANTARA (FTMD)",
              "SEK. ARSITEKTUR, PERENC & PENGEMB KEBIJAKAN",
              "SEKOLAH ILMU & TEKNO HAYATI - PROG REKAYASA",
              "FAKULTAS TEKNIK SIPIL DAN LINGKUNGAN (FTSL) - KAMPUS JATINANGOR",
              "FAKULTAS TEKNOLOGI INDUSTRI (FTI) - KAMPUS JATINANGOR",
              "FAKULTAS TEKNOLOGI INDUSTRI (FTI) - KAMPUS CIREBON",
              "SEK. ARSITEKTUR, PERENC & PENGEMB KEBIJAKAN (SAPPK) - KAMPUS CIREBON"
              ],
              "SOSHUM": [
              "FAKULTAS SENIRUPA DAN DESAIN (FSRD)",
              "SEKOLAH BISNIS DAN MANAJEMEN (SBM)",
              "FAKULTAS SENIRUPA DAN DESAIN (FSRD) - KAMPUS CIREBON"
              ]
          },
          "UNIVERSITAS PADJADJARAN": {
              "SAINTEK": [
              "PENDIDIKAN DOKTER",
              "MATEMATIKA",
              "KIMIA",
              "FISIKA",
              "BIOLOGI",
              "STATISTIKA",
              "AGROTEKNOLOGI",
              "AGRIBISNIS",
              "PENDIDIKAN DOKTER GIGI",
              "ILMU PETERNAKAN",
              "PERIKANAN",
              "ILMU KEPERAWATAN",
              "ILMU KELAUTAN",
              "TEKNOLOGI PANGAN",
              "TEKNIK PERTANIAN",
              "FARMASI",
              "TEKNIK GEOLOGI",
              "PSIKOLOGI",
              "GEOFISIKA",
              "TEKNIK INFORMATIKA",
              "TEKNOLOGI INDUSTRI PERTANIAN",
              "TEKNIK ELEKTRO",
              "KEDOKTERAN HEWAN",
              "ILMU AKTUARIA",
              "KEPERAWATAN PSDKU GARUT",
              "PERIKANAN PSDKU PANGANDARAN",
              "PETERNAKAN PSDKU PANGANDARAN",
              "KEPERAWATAN PSDKU PANGANDARAN"
              ],
              "SOSHUM": [
              "ILMU HUKUM",
              "AKUNTANSI",
              "EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "ILMU ADMINISTRASI NEGARA",
              "ILMU HUBUNGAN INTERNASIONAL",
              "ILMU KESEJAHTERAAN SOSIAL",
              "ILMU PEMERINTAHAN",
              "ANTROPOLOGI",
              "ILMU ADMINISTRASI BISNIS",
              "SASTRA INDONESIA",
              "SASTRA SUNDA",
              "ILMU SEJARAH",
              "SASTRA INGGRIS",
              "SASTRA PERANCIS",
              "SASTRA JEPANG",
              "SASTRA RUSIA",
              "SASTRA JERMAN",
              "SASTRA ARAB",
              "ILMU KOMUNIKASI",
              "ILMU PERPUSTAKAAN",
              "SOSIOLOGI",
              "ILMU POLITIK",
              "HUBUNGAN MASYARAKAT",
              "EKONOMI ISLAM",
              "MANAJEMEN KOMUNIKASI",
              "JURNALISTIK",
              "TELEVISI DAN FILM",
              "BISNIS DIGITAL",
              "ADMINISTRASI BISNIS PSDKU PANGANDARAN",
              "ILMU KOMUNIKASI PSDKU PANGANDARAN   "
              ]
          },
          "UNIVERSITAS PENDIDIKAN INDONESIA": {
              "SAINTEK": [
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN ILMU KOMPUTER",
              "MATEMATIKA",
              "FISIKA",
              "BIOLOGI",
              "KIMIA",
              "ILMU KOMPUTER",
              "PENDIDIKAN TEKNIK ARSITEKTUR",
              "PENDIDIKAN TEKNIK BANGUNAN",
              "PENDIDIKAN TEKNIK ELEKTRO",
              "PENDIDIKAN TEKNIK MESIN",
              "ILMU KEOLAHRAGAAN",
              "TEKNIK ELEKTRO",
              "PENDIDIKAN TEKNOLOGI AGRO INDUSTRI",
              "TEKNIK SIPIL",
              "PENDIDIKAN ILMU PENGETAHUAN ALAM",
              "TEKNIK ARSITEKTUR",
              "PENDIDIKAN KELAUTAN DAN PERIKANAN KAMPUS SERANG",
              "PENDIDIKAN MULTIMEDIA KAMPUS CIBIRU",
              "PENDIDIKAN SISTEM DAN TEKNOLOGI INFORMASI KAMPUS PURWAKARTA"
              ],
              "SOSHUM": [
              "ADMINISTRASI PENDIDIKAN",
              "BIMBINGAN DAN KONSELING",
              "PENDIDIKAN LUAR SEKOLAH",
              "PENDIDIKAN KHUSUS",
              "TEKNOLOGI PENDIDIKAN",
              "PSIKOLOGI",
              "PKN",
              "PENDIDIKAN SEJARAH",
              "PENDIDIKAN GEOGRAFI",
              "ILMU PENDIDIKAN AGAMA ISLAM",
              "MANAJEMEN RESORT DAN LEISURE",
              "MANAJEMEN PEMASARAN PARIWISATA",
              "MANAJEMEN INDUSTRI KATERING",
              "PENDIDIKAN BHS.DAN SASTRA INDONESIA",
              "PENDIDIKAN BAHASA DAERAH",
              "PENDIDIKAN BAHASA INGGRIS",
              "PENDIDIKAN BAHASA ARAB",
              "PENDIDIKAN BAHASA JEPANG",
              "PENDIDIKAN BAHASA JERMAN",
              "PENDIDIKAN BAHASA PERANCIS",
              "PENDIDIKAN SENI RUPA DAN KERAJINAN",
              "PENDIDIKAN SENI TARI",
              "PENDIDIKAN SENI MUSIK",
              "BAHASA DAN SASTRA INGGRIS",
              "BAHASA DAN SASTRA INDONESIA",
              "PENDIDIKAN KESEJAHTERAAN KELUARGA",
              "PENDIDIKAN TATA BOGA",
              "PENDIDIKAN TATA BUSANA",
              "PENDIDIKAN KEPELATIHAN OLAHRAGA",
              "PEND. JASMANI KESEHATAN & REKREASI (PJKR)",
              "PENDIDIKAN AKUNTANSI",
              "PENDIDIKAN MANAJEMEN BISNIS",
              "PENDIDIKAN MANAJEMEN PERKANTORAN",
              "PENDIDIKAN EKONOMI",
              "MANAJEMEN",
              "AKUNTANSI",
              "PERPUSTAKAAN DAN INFORMASI",
              "PENDIDIKAN IPS",
              "PENDIDIKAN SOSIOLOGI",
              "PGSD PEND. JASMANI KAMPUS BUMI SILIWANGI",
              "PGSD KAMPUS CIBIRU",
              "PGPAUD KAMPUS CIBIRU",
              "PGSD KAMPUS SUMEDANG",
              "PGSD PENDIDIKAN JASMANI KAMPUS SUMEDANG",
              "PGSD KAMPUS PURWAKARTA",
              "PGSD KAMPUS TASIKMALAYA",
              "PGSD KAMPUS SERANG",
              "PGSD KAMPUS BUMI SILIWANGI",
              "PGPAUD KAMPUS BUMI SILIWANGI",
              "ILMU KOMUNIKASI",
              "PGPAUD KAMPUS SERANG",
              "ILMU EKONOMI DAN KEUANGAN ISLAM",
              "PGPAUD KAMPUS TASIKMALAYA",
              "PGPAUD KAMPUS PURWAKARTA",
              "PENDIDIKAN BAHASA KOREA",
              "KEWIRAUSAHAAN KAMPUS TASIKMALAYA",
              "SAINS INFORMASI GEOGRAFI",
              "DESAIN KOMUNIKASI VISUAL"
              ]
          },
          "ISBI BANDUNG": {
              "SOSHUM": [
              "TARI",
              "KARAWITAN",
              "TEATER",
              "SENI MURNI",
              "ANTROPOLOGI BUDAYA"
              ]
          },
          "UNIVERSITAS ISLAM NEGERI SUNAN GUNUNG DJATI": {
              "SAINTEK": [
              "MATEMATIKA",
              "BIOLOGI",
              "FISIKA",
              "KIMIA",
              "TEKNIK INFORMATIKA",
              "TEKNIK ELEKTRO",
              "AGROTEKNOLOGI"
              ],
              "SOSHUM": [
              "SOSIOLOGI",
              "ILMU HUKUM",
              "MANAJEMEN",
              "ADMINISTRASI PUBLIK",
              "ILMU KOM. KONST. HUMAS",
              "ILMU KOM. KONST. JURNALISTIK",
              "BAHASA DAN SASTRA INGGRIS",
              "PSIKOLOGI"
              ]
          },
          "INSTITUT PERTANIAN BOGOR": {
              "SAINTEK": [
              "AGRIBISNIS",
              "AGRONOMI DAN HORTIKULTURA",
              "ARSITEKTUR LANSEKAP",
              "BIOKIMIA",
              "BIOLOGI",
              "EKONOMI SUMBERDAYA DAN LINGKUNGAN",
              "ILMU DAN TEKNOLOGI KELAUTAN",
              "ILMU KOMPUTER",
              "KEDOKTERAN HEWAN",
              "KIMIA",
              "KOMUNIKASI DAN PENGEMBANGAN MASYARAKAT",
              "KONSERVASI SUMBERDAYAHUTAN& EKOWISATA",
              "MANAJEMEN HUTAN",
              "STATISTIKA",
              "TEKNIK PERTANIAN DAN BIOSISTEM",
              "TEKNOLOGI HASIL HUTAN",
              "TEKNOLOGI INDUSTRI PERTANIAN",
              "TEKNOLOGI PANGAN",
              "NUTRISI DAN TEKNOLOGI PAKAN",
              "TEKNOLOGI PRODUKSI TERNAK",
              "TEKNIK SIPIL DAN LINGKUNGAN",
              "TEKNOLOGI & MANAJEMEN PERIKANAN BUDIDAYA",
              "EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "ILMU GIZI",
              "EKONOMI SYARIAH",
              "MANAJEMEN SUMBERDAYA LAHAN",
              "PROTEKSI TANAMAN",
              "MANAJEMEN SUMBERDAYA PERAIRAN",
              "TEKNOLOGI HASIL PERAIRAN",
              "TEKNOLOGI & MANAJEMEN PERIKANAN TANGKAP",
              "SILVIKULTUR",
              "METEOROLOGI TERAPAN",
              "MATEMATIKA",
              "FISIKA",
              "ILMU KELUARGA DAN KONSUMEN",
              "BISNIS",
              "TEKNOLOGI HASIL TERNAK",
              "AKTUARIA"
              ]
          },
          "UNIVERSITAS SILIWANGI": {
              "SAINTEK": [
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN BIOLOGI",
              "AGROTEKNOLOGI",
              "AGRIBISNIS",
              "TEKNIK SIPIL",
              "TEKNIK ELEKTRO",
              "TEKNIK INFORMATIKA",
              "KESEHATAN MASYARAKAT",
              "PENDIDIKAN FISIKA",
              "GIZI"
              ],
              "SOSHUM": [
              "PENDIDIKAN LUAR SEKOLAH",
              "PENDIDIKAN EKONOMI",
              "PENDIDIKAN GEOGRAFI",
              "PENDIDIKAN SEJARAH",
              "PENDIDIKAN JASMANI, KESEHATAN DAN REKREASI",
              "EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "AKUNTANSI",
              "EKONOMI SYARIAH",
              "ILMU POLITIK",
              "PENDIDIKAN BAHASA DAN SASTRA INDONESIA",
              "PENDIDIKAN BAHASA INGGRIS "
              ]
          },
          "UNIVERSITAS JENDERAL SOEDIRMAN": {
              "SAINTEK": [
              "BIOLOGI",
              "KIMIA",
              "MATEMATIKA",
              "FISIKA",
              "MANAJEMEN SUMBERDAYA PERAIRAN",
              "BUDIDAYA PERAIRAN",
              "TEKNIK PERTANIAN",
              "TEKNIK ELEKTRO",
              "TEKNIK SIPIL",
              "PENDIDIKAN DOKTER",
              "KESEHATAN MASYARAKAT",
              "KEPERAWATAN",
              "FARMASI",
              "TEKNIK GEOLOGI",
              "ILMU KELAUTAN",
              "AGROTEKNOLOGI",
              "AGRIBISNIS",
              "ILMU DAN TEKNOLOGI PANGAN",
              "PETERNAKAN",
              "TEKNIK INFORMATIKA",
              "PENDIDIKAN DOKTER GIGI",
              "ILMU GIZI",
              "PENDIDIKAN JASMANI KESEHATAN DAN REKREASI",
              "TEKNIK INDUSTRI"
              ],
              "SOSHUM": [
              "ILMU HUKUM",
              "SOSIOLOGI",
              "ADMINISTRASI NEGARA",
              "MANAJEMEN",
              "EKONOMI PEMBANGUNAN",
              "AKUNTANSI",
              "ILMU KOMUNIKASI",
              "ILMU POLITIK",
              "BAHASA DAN SASTRA INDONESIA",
              "BAHASA DAN SASTRA INGGRIS",
              "HUBUNGAN INTERNASIONAL",
              "BAHASA JEPANG",
              "PENDIDIKAN EKONOMI",
              "PENDIDIKAN BAHASA DAN SASTRA INDONESIA",
              "PENDIDIKAN BAHASA INGGRIS"
              ]
          },
          "UNIVERSITAS TIDAR": {
              "SAINTEK": [
              "AGROTEKNOLOGI",
              "TEKNIK SIPIL",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "PETERNAKAN",
              "PENDIDIKAN ILMU PENGETAHUAN ALAM",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN MATEMATIKA",
              "AKUAKULTUR"
              ],
              "SOSHUM": [
              "EKONOMI PEMBANGUNAN",
              "ILMU ADMINISTRASI NEGARA",
              "PENDIDIKAN BAHASA INGGRIS",
              "PENDIDIKAN BAHASA DAN SASTRA INDONESIA",
              "HUKUM",
              "MANAJEMEN",
              "ILMU KOMUNIKASI",
              "AKUNTANSI"
              ]
          },
          "UNIVERSITAS SEBELAS MARET": {
              "SAINTEK": [
              "KEDOKTERAN",
              "PSIKOLOGI",
              "AGROTEKNOLOGI / AGROEKOTEKNOLOGI",
              "AGRIBISNIS",
              "PETERNAKAN",
              "ILMU DAN TEKNOLOGI PANGAN",
              "TEKNIK SIPIL",
              "ARSITEKTUR",
              "TEKNIK INDUSTRI",
              "TEKNIK MESIN",
              "TEKNIK KIMIA",
              "MATEMATIKA",
              "FISIKA",
              "KIMIA",
              "BIOLOGI",
              "PERENCANAAN WILAYAH DAN KOTA (PWK)",
              "INFORMATIKA",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN TEKNIK MESIN",
              "PENDIDIKAN TEKNIK BANGUNAN",
              "PENDIDIKAN TEKNIK INFORMATIKA & KOMPUTER",
              "ILMU TANAH",
              "PENYULUHAN DAN KOMUNIKASI PERTANIAN",
              "FARMASI",
              "TEKNIK ELEKTRO",
              "STATISTIKA",
              "PENDIDIKAN IPA",
              "ILMU LINGKUNGAN"
              ],
              "SOSHUM": [
              "ILMU ADMINISTRASI NEGARA",
              "ILMU KOMUNIKASI",
              "SOSIOLOGI",
              "ILMU HUKUM",
              "EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "AKUNTANSI",
              "ILMU SEJARAH",
              "SASTRA INDONESIA",
              "SASTRA INGGRIS",
              "SASTRA DAERAH UNTUK SASTRA JAWA",
              "KRIYA SENI (DESAIN TEKSTIL)",
              "SENI RUPA MURNI (LUKIS, GRFS, PTNG, KRMIK)",
              "DESAIN INTERIOR",
              "DESAIN KOMUNIKASI VISUAL",
              "PENDIDIKAN SEJARAH",
              "PENDIDIKAN GEOGRAFI",
              "PEND. PANCASILA & KEWARGANEGARAAN (PPKN)",
              "PENDIDIKAN LUAR BIASA (PENDIDIKAN KHUSUS)",
              "PENDIDIKAN JASMANI, KESEHATAN & REKREASI",
              "PENDIDIKAN KEPELATIHAN OLAHRAGA",
              "PEND. BAHASA, SASTRA INDONESIA & DAERAH",
              "PENDIDIKAN BAHASA INGGRIS",
              "PENDIDIKAN SENI RUPA",
              "PENDIDIKAN SOSIOLOGI ANTROPOLOGI",
              "PEND. GURU SEKOLAH DASAR (PGSD) SURAKARTA",
              "BIMBINGAN DAN KONSELING",
              "PEND. GURU PEND ANAK USIA DINI (PG-PAUD)",
              "SASTRA ARAB",
              "PENDIDIKAN BAHASA JAWA",
              "PEND. GURU SEKOLAH DASAR (PGSD) KEBUMEN",
              "HUBUNGAN INTERNASIONAL",
              "PENDIDIKAN AKUNTANSI",
              "PENDIDIKAN ADMINISTRASI PERKANTORAN",
              "PENDIDIKAN EKONOMI"
              ]
          },
          "ISI SURAKARTA": {
              "SOSHUM": [
              "SENI TARI",
              "ETNOMUSIKOLOGI",
              "SENI TEATER",
              "KRIYA SENI",
              "SENI RUPA MURNI",
              "DESAIN INTERIOR",
              "DESAIN KOMUNIKASI VISUAL",
              "TELEVISI DAN FILM",
              "FOTOGRAFI",
              "SENI KARAWITAN",
              "SENI PEDALANGAN"
              ]
          },
          "UNIVERSITAS DIPONEGORO": {
              "SAINTEK": [
              "KESEHATAN MASYARAKAT",
              "KEDOKTERAN",
              "KEPERAWATAN",
              "ILMU GIZI",
              "MATEMATIKA",
              "BIOLOGI",
              "KIMIA",
              "FISIKA",
              "STATISTIKA",
              "INFORMATIKA",
              "MANAJEMEN SD PERAIRAN",
              "AKUAKULTUR",
              "PERIKANAN TANGKAP",
              "ILMU KELAUTAN",
              "OCEANOGRAFI",
              "TEKNOLOGI HASIL PERIKANAN",
              "TEKNIK SIPIL",
              "ARSITEKTUR",
              "TEKNIK MESIN",
              "TEKNIK KIMIA",
              "TEKNIK ELEKTRO",
              "PERENCANAAN WILAYAH KOTA",
              "TEKNIK INDUSTRI",
              "TEKNIK LINGKUNGAN",
              "TEKNIK PERKAPALAN",
              "TEKNIK GEOLOGI",
              "TEKNIK GEODESI",
              "TEKNIK KOMPUTER",
              "PETERNAKAN",
              "TEKNOLOGI PANGAN",
              "AGROEKOTEKNOLOGI",
              "AGRIBISNIS",
              "KEDOKTERAN GIGI",
              "FARMASI"
              ],
              "SOSHUM": [
              "BAHASA & SASTRA INDONESIA",
              "BAHASA & SASTRA INGGRIS",
              "SEJARAH",
              "ILMU PERPUSTAKAAN",
              "ILMU HUKUM",
              "MANAJEMEN",
              "ILMU EKONOMI & STUDI PEMB.",
              "AKUNTANSI",
              "ILMU ADM. PUBLIK",
              "ADMINISTRASI BISNIS",
              "PEMERINTAHAN",
              "KOMUNIKASI",
              "PSIKOLOGI",
              "BAHASA DAN KEBUDAYAAN JEPANG",
              "HUBUNGAN INTERNASIONAL",
              "ANTROPOLOGI SOSIAL",
              "EKONOMI ISLAM"
              ]
          },
          "UNIVERSITAS NEGERI SEMARANG": {
              "SAINTEK": [
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN TEKNIK BANGUNAN",
              "PENDIDIKAN TEKNIK MESIN",
              "PENDIDIKAN TEKNIK ELEKTRO",
              "ILMU KEOLAHRAGAAN",
              "MATEMATIKA",
              "FISIKA",
              "KIMIA",
              "BIOLOGI",
              "KESEHATAN MASYARAKAT",
              "PENDIDIKAN IPA",
              "PEND. TEKNIK INFORMATIKA & KOMPUTER",
              "TEKNIK ARSITEKTUR",
              "PENDIDIKAN TEKNIK OTOMOTIF",
              "TEKNIK KIMIA",
              "TEKNIK MESIN",
              "TEKNIK SIPIL",
              "TEKNIK INFORMATIKA",
              "TEKNIK ELEKTRO",
              "GIZI"
              ],
              "SOSHUM": [
              "BIMBINGAN DAN KONSELING",
              "TEKNOLOGI PENDIDIKAN",
              "PENDIDIKAN LUAR SEKOLAH",
              "PENDIDIKAN PANCASILA & KEWARGANEGARAAN",
              "PENDIDIKAN GEOGRAFI",
              "PENDIDIKAN SEJARAH",
              "PENDIDIKAN JASMANI, KESEHATAN & REKREASI",
              "PENDIDIKAN KEPELATIHAN OLAHRAGA",
              "PENDIDIKAN TATA BOGA",
              "PENDIDIKAN TATA BUSANA",
              "PENDIDIKAN SOSIOLOGI & ANTROPOLOGI",
              "EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "PSIKOLOGI",
              "GEOGRAFI",
              "ILMU HUKUM",
              "AKUNTANSI",
              "SENI RUPA (DKV,LUKIS,PTNG,GRAFIS,GBR KRIYA)",
              "PENDIDIKAN EKONOMI (PENDIDIKAN AKUNTANSI)",
              "PENDIDIKAN EKONOMI (PENDIDIKAN KOPERASI)",
              "PEND. EKONOMI (PEND. ADMIN. PEKANTORAN)",
              "PENDIDIKAN BAHASA DAN SASTRA INDONESIA",
              "PENDIDIKAN BAHASA INGGRIS",
              "PENDIDIKAN BAHASA PRANCIS",
              "PENDIDIKAN SENI RUPA",
              "SASTRA INDONESIA",
              "SASTRA INGGRIS",
              "SASTRA PRANCIS",
              "ILMU SEJARAH",
              "SASTRA JAWA",
              "PENDIDIKAN BAHASA DAN SASTRA JAWA",
              "P. SENI DRAMA, TARI & MUSIK (P. SENI TARI)",
              "P. SENI DRAMA, TARI & MUSIK (P. SENI MUSIK)",
              "PENDIDIKAN BAHASA JEPANG",
              "PENDIDIKAN BAHASA ARAB",
              "PENDIDIKAN GURU SEKOLAH DASAR",
              "PEND.GURU PEND. ANAK USIA DINI (PGPAUD)",
              "PENDIDIKAN TATA KECANTIKAN",
              "PENDIDIKAN BAHASA MANDARIN",
              "ILMU POLITIK",
              "PENDIDIKAN JASMANI KESEHATAN DAN REKREASI (PENDIDIKAN GURU PENDIDIKAN JASMANI SEKOLAH DASAR)",
              "PENDIDIKAN ILMU PENGETAHUAN SOSIAL",
              "PENDIDIKAN KESEJAHTERAAN KELUARGA"
              ]
          },
          "UNIVERSITAS ISLAM NEGERI WALISONGO": {
              "SAINTEK": [
              "GIZI",
              "MATEMATIKA",
              "KIMIA",
              "FISIKA",
              "BIOLOGI",
              "TEKNOLOGI INFORMASI"
              ],
              "SOSHUM": [
              "PSIKOLOGI",
              "SOSIOLOGI",
              "ILMU POLITIK",
              "ILMU HUKUM",
              "MANAJEMEN   "
              ]
          },
          "UNIVERSITAS GADJAH MADA": {
              "SAINTEK": [
              "BIOLOGI",
              "FARMASI",
              "GEOGRAFI LINGKUNGAN",
              "KARTOGRAFI DAN PENGINDERAAN JAUH",
              "PEMBANGUNAN WILAYAH",
              "KEDOKTERAN",
              "ILMU KEPERAWATAN",
              "GIZI KESEHATAN",
              "KEDOKTERAN GIGI",
              "KEDOKTERAN HEWAN",
              "FISIKA",
              "KIMIA",
              "MATEMATIKA",
              "ILMU KOMPUTER",
              "STATISTIKA",
              "GEOFISIKA",
              "ELEKTRONIKA DAN INSTRUMENTASI",
              "AGRONOMI",
              "ILMU TANAH",
              "EKONOMI PERTANIAN DAN AGRIBISNIS",
              "PROTEKSI TANAMAN (ILMU HAMA DAN PENYAKIT TUMBUHAN)",
              "PENYULUHAN DAN KOMUNIKASI PERTANIAN",
              "AKUAKULTUR (BUDIDAYA PERIKANAN)",
              "TEKNOLOGI HASIL PERIKANAN",
              "MANAJEMEN SUMBERDAYA AKUATIK (MANAJEMEN SUMBER DAYA PERIKANAN)",
              "MIKROBIOLOGI PERTANIAN",
              "ILMU DAN INDUSTRI PETERNAKAN",
              "ARSITEKTUR",
              "PERENCANAAN WILAYAH DAN KOTA",
              "TEKNIK GEODESI",
              "TEKNIK GEOLOGI",
              "TEKNIK KIMIA",
              "TEKNIK ELEKTRO",
              "TEKNIK MESIN",
              "TEKNIK SIPIL",
              "TEKNIK NUKLIR",
              "TEKNIK FISIKA",
              "TEKNIK INDUSTRI",
              "TEKNIK PERTANIAN",
              "TEKNOLOGI PANGAN DAN HASIL PERTANIAN",
              "TEKNOLOGI INDUSTRI PERTANIAN",
              "HIGIENE GIGI",
              "KEHUTANAN",
              "TEKNOLOGI INFORMASI"
              ],
              "SOSHUM": [
              "ILMU EKONOMI",
              "MANAJEMEN",
              "AKUNTANSI",
              "FILSAFAT",
              "HUKUM",
              "ANTROPOLOGI BUDAYA",
              "ARKEOLOGI",
              "SEJARAH",
              "SASTRA ARAB",
              "BAHASA DAN SASTRA INDONESIA",
              "SASTRA INGGRIS",
              "SASTRA JAWA",
              "SASTRA PRANCIS",
              "SASTRA JEPANG",
              "BAHASA DAN KEBUDAYAAN KOREA",
              "MANAJEMEN DAN KEBIJAKAN PUBLIK",
              "ILMU HUBUNGAN INTERNASIONAL",
              "POLITIK DAN PEMERINTAHAN",
              "PEMBANGUNAN SOSIAL DAN KESEJAHTERAAN",
              "ILMU KOMUNIKASI",
              "SOSIOLOGI",
              "PSIKOLOGI",
              "PARIWISATA"
              ]
          },
          "UNIVERSITAS NEGERI YOGYAKARTA": {
              "SAINTEK": [
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN TEKNIK ELEKTRONIKA",
              "PENDIDIKAN TEKNIK OTOMOTIF",
              "PENDIDIKAN TEKNIK MESIN",
              "PENDIDIKAN TEKNIK ELEKTRO",
              "PENDIDIKAN TEKNIK SIPIL & PERENCANAAN",
              "MATEMATIKA",
              "FISIKA",
              "KIMIA",
              "BIOLOGI",
              "PENDIDIKAN TEKNIK MEKATRONIKA",
              "PENDIDIKAN TEKNIK INFORMATIKA",
              "PENDIDIKAN IPA",
              "ILMU KEOLAHRAGAAN",
              "STATISTIKA"
              ],
              "SOSHUM": [
              "MANAJEMEN PENDIDIKAN",
              "BIMBINGAN & KONSELING",
              "TEKNOLOGI PENDIDIKAN",
              "PENDIDIKAN LUAR BIASA",
              "PENDIDIKAN LUAR SEKOLAH",
              "PENDIDIKAN SENI KERAJINAN",
              "PENDIDIKAN KEWARGANEGARAAN",
              "PENDIDIKAN SEJARAH",
              "PENDIDIKAN GEOGRAFI",
              "PENDIDIKAN JASMANI KESEHATAN DAN REKREASI",
              "PENDIDIKAN KEPELATIHAN OLAHRAGA",
              "PENDIDIKAN TEKNIK BUSANA",
              "PENDIDIKAN TEKNIK BOGA",
              "PENDIDIKAN ADMINISTRASI PERKANTORAN",
              "PENDIDIKAN AKUNTANSI",
              "PENDIDIKAN EKONOMI",
              "MANAJEMEN",
              "ILMU SEJARAH",
              "AKUNTANSI",
              "PENDIDIKAN SOSIOLOGI",
              "PENDIDIKAN IPS",
              "ADMINISTRASI NEGARA",
              "KEBIJAKAN PENDIDIKAN",
              "PENDIDIKAN GURU SEKOLAH DASAR",
              "PENDIDIKAN GURU PAUD",
              "PGSD PENDIDIKAN JASMANI",
              "PENDIDIKAN BAHASA INGGRIS",
              "PENDIDIKAN BAHASA JERMAN",
              "PENDIDIKAN BAHASA PRANCIS",
              "PENDIDIKAN SENI RUPA",
              "BAHASA. DAN SASTRA INDONESIA",
              "BAHASA DAN SASTRA INGGRIS",
              "PENDIDIKAN SENI TARI",
              "PENDIDIKAN SENI MUSIK",
              "PENDIDIKAN BAHASA DAN SASTRA INDONESIA",
              "PENDIDIKAN BAHASA JAWA",
              "ILMU KOMUNIKASI",
              "PSIKOLOGI"
              ]
          },
          "UPN \"VETERAN\" YOGYAKARTA": {
              "SAINTEK": [
              "TEKNIK GEOLOGI",
              "TEKNIK PERTAMBANGAN",
              "TEKNIK PERMINYAKAN",
              "TEKNIK LINGKUNGAN",
              "TEKNIK GEOFISIKA",
              "TEKNIK KIMIA",
              "TEKNIK INDUSTRI",
              "TEKNIK INFORMATIKA",
              "AGROTEKNOLOGI",
              "AGRIBISNIS",
              "METALURGI",
              "ILMU TANAH",
              "SISTEM INFORMASI"
              ],
              "SOSHUM": [
              "MANAJEMEN",
              "AKUNTANSI",
              "EKONOMI PEMBANGUNAN",
              "ILMU HUBUNGAN INTERNASIONAL",
              "ILMU ADMINISTRASI BISNIS",
              "ILMU KOMUNIKASI",
              "HUBUNGAN MASYARAKAT"
              ]
          },
          "ISI YOGYAKARTA": {
              "SOSHUM": [
              "SENI TARI",
              "SENI MUSIK",
              "PENDIDIKAN MUSIK",
              "PENCIPTAAN MUSIK",
              "SENI TEATER",
              "PENDIDIKAN SENI DRAMA, TARI, DAN MUSIK",
              "SENI RUPA MURNI",
              "KRIYA SENI",
              "DESAIN INTERIOR",
              "DESAIN KOMUNIKASI VISUAL",
              "DESAIN PRODUK",
              "TELEVISI DAN FILM",
              "FOTOGRAFI",
              "SENI KARAWITAN",
              "ETNOMUSIKOLOGI",
              "SENI PEDALANGANXXXXXXX  SENI PEDALANGAN",
              "TATA KELOLA SENI    "
              ]
          },
          "UNIVERSITAS ISLAM NEGERI SUNAN KALIJAGA": {
              "SAINTEK": [
              "MATEMATIKA",
              "FISIKA",
              "KIMIA",
              "BIOLOGI",
              "TEKNIK INFORMATIKA",
              "TEKNIK INDUSTRI",
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN BIOLOGI"
              ],
              "SOSHUM": [
              "ILMU PERPUSTAKAAN (IP)",
              "PSIKOLOGI",
              "SOSIOLOGI",
              "ILMU KOMUNIKASI",
              "SASTRA INGGRIS (SI)",
              "ILMU HUKUM (IH)",
              "ILMU KESEJAHTERAAN SOSIAL (IKS)"
              ]
          },
          "UNIVERSITAS JEMBER": {
              "SAINTEK": [
              "AGROTEKNOLOGI / AGROEKOTEKNOLOGI",
              "AGRIBISNIS",
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN BIOLOGI",
              "TEKNOLOGI HASIL PERTANIAN",
              "TEKNIK PERTANIAN",
              "PENDIDIKAN DOKTER GIGI",
              "MATEMATIKA",
              "FISIKA",
              "KIMIA",
              "BIOLOGI",
              "PENDIDIKAN DOKTER",
              "KESEHATAN MASYARAKAT",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "TEKNIK SIPIL",
              "FARMASI",
              "ILMU KEPERAWATAN",
              "SISTEM INFORMASI",
              "TEKNOLOGI INDUSTRI PERTANIAN",
              "ILMU TANAH",
              "PROTEKSI TANAMAN",
              "TEKNOLOGI INFORMASI",
              "PENDIDIKAN IPA",
              "PERENCANAAN WILAYAH DAN KOTA",
              "TEKNIK KIMIA",
              "AGRONOMI",
              "ILMU PERTANIAN",
              "INFORMATIKA",
              "PENYULUHAN PERTANIAN",
              "TEKNIK LINGKUNGAN",
              "TEKNIK KONSTRUKSI PERKAPALAN",
              "PETERNAKAN"
              ],
              "SOSHUM": [
              "ILMU HUKUM",
              "HUBUNGAN INTERNASIONAL",
              "ILMU ADMINISTRASI NEGARA",
              "ILMU ADMINISTRASI BISNIS",
              "ILMU KESEJAHTERAAN SOSIAL",
              "SOSIOLOGI",
              "EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "AKUNTANSI",
              "PENDIDIKAN LUAR SEKOLAH",
              "PENDIDIKAN EKONOMI",
              "PENDIDIKAN SEJARAH",
              "PENDIDIKAN BAHASA INGGRIS",
              "PENDIDIKAN BHS. & SASTRA INDO.",
              "PENDIDIKAN GURU SEKOLAH DASAR",
              "SASTRA INGGRIS",
              "SASTRA INDONESIA",
              "ILMU SEJARAH",
              "TELEVISI & FILM",
              "PG PAUD",
              "EKONOMI SYARIAH",
              "PENDIDIKAN GEOGRAFI",
              "EKONOMI SYARIAH KAMPUS BONDOWOSO",
              "PEND. GURU SEKOLAH DASAR KAMPUS BONDOWOSO"
              ]
          },
          "UNIVERSITAS BRAWIJAYA": {
              "SAINTEK": [
              "MANAJEMEN SUMBERDAYA PERAIRAN",
              "BUDIDAYA PERAIRAN",
              "TEKNIK SIPIL",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "ARSITEKTUR",
              "TEKNIK PENGAIRAN",
              "PENDIDIKAN DOKTER",
              "ILMU DAN TEKNOLOGI PANGAN",
              "BIOLOGI",
              "FISIKA",
              "KIMIA",
              "MATEMATIKA",
              "PEMANFAATAN SUMBERDAYA PERIKANAN",
              "TEKNOLOGI HASIL PERIKANAN",
              "AGROBISNIS PERIKANAN",
              "KETEKNIKAN PERTANIAN",
              "STATISTIKA",
              "PERENCANAAN WILAYAH & KOTA",
              "TEKNOLOGI INDUSTRI PERTANIAN",
              "ILMU KEPERAWATAN",
              "GIZI KESEHATAN / ILMU GIZI",
              "TEKNIK INDUSTRI",
              "TEKNIK INFORMATIKA",
              "AGROEKOTEKNOLOGI",
              "AGRIBISNIS",
              "PETERNAKAN",
              "PENDIDIKAN DOKTER HEWAN",
              "PENDIDIKAN DOKTER GIGI",
              "ILMU KELAUTAN",
              "KEBIDANAN",
              "FARMASI",
              "TEKNIK KOMPUTER",
              "SISTEM INFORMASI",
              "TEKNIK KIMIA",
              "INSTRUMENTASI",
              "TEKNIK GEOFISIKA",
              "BIOTEKNOLOGI",
              "TEKNOLOGI BIOPROSES",
              "TEKNIK LINGKUNGAN",
              "PENDIDIKAN TEKNOLOGI INFORMASI",
              "TEKNOLOGI INFORMASI"
              ],
              "SOSHUM": [
              "ILMU HUKUM",
              "EKONOMI PEMBANGUNAN",
              "ILMU ADMINISTRASI PUBLIK",
              "ILMU ADMINISTRASI BISNIS",
              "MANAJEMEN",
              "AKUNTANSI",
              "SOSIOLOGI",
              "ILMU KOMUNIKASI",
              "PSIKOLOGI",
              "HUBUNGAN INTERNASIONAL",
              "SASTRA INGGRIS",
              "SASTRA JEPANG",
              "BAHASA DAN SASTRA PERANCIS",
              "ILMU POLITIK",
              "ILMU PEMERINTAHAN",
              "ADMINISTRASI PERPAJAKAN",
              "EKONOMI ISLAM",
              "EKONOMI, KEUANGAN DAN PERBANKAN",
              "ILMU PERPUSTAKAAN",
              "PARIWISATA",
              "PENDIDIKAN BHS & SASTRA INGGRIS",
              "PENDIDIKAN BHS & SASTRA JEPANG",
              "PENDIDIKAN BHS & SASTRA INDONESIA",
              "ADMINISTRASI PENDIDIKAN",
              "SENI RUPA MURNI",
              "SASTRA CINA",
              "ANTROPOLOGI SOSIAL",
              "KEWIRAUSAHAAN   "
              ]
          },
          "UNIVERSITAS NEGERI MALANG": {
              "SAINTEK": [
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN TEKNIK MESIN",
              "PENDIDIKAN TEKNIK BANGUNAN",
              "PENDIDIKAN TEKNIK INFORMATIKA",
              "PENDIDIKAN TEKNIK OTOMOTIF",
              "ILMU KEOLAHRAGAAN",
              "MATEMATIKA",
              "FISIKA",
              "KIMIA",
              "BIOLOGI",
              "PENDIDIKAN TEKNIK ELEKTRO",
              "TEKNIK SIPIL",
              "PENDIDIKAN ILMU PENGETAHUAN ALAM",
              "ILMU KESEHATAN MASYARAKAT",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "TEKNIK INFORMATIKA",
              "TEKNIK INDUSTRI"
              ],
              "SOSHUM": [
              "BIMBINGAN DAN KONSELING",
              "PENDIDIKAN JASMANI DAN KESEHATAN",
              "TEKNOLOGI PENDIDIKAN",
              "PENDIDIKAN LUAR SEKOLAH",
              "ADMINISTRASI PENDIDIKAN",
              "PENDIDIKAN GURU SEKOLAH DASAR",
              "PENDIDIKAN GURU PEND. ANAK USIA DINI",
              "PENDIDIKAN PANCASILA DAN KEWARGANEGARAAN",
              "PEND. BAHASA, SASTRA INDONESIA & DAERAH",
              "PENDIDIKAN BAHASA INGGRIS",
              "PENDIDIKAN BAHASA ARAB",
              "PENDIDIKAN SENI RUPA",
              "PENDIDIKAN BAHASA JERMAN",
              "PENDIDIKAN SENI TARI DAN MUSIK",
              "PENDIDIKAN SEJARAH",
              "PENDIDIKAN EKONOMI",
              "PENDIDIKAN TATA NIAGA",
              "PENDIDIKAN ADMINISTRASI PERKANTORAN",
              "PENDIDIKAN AKUNTANSI",
              "PENDIDIKAN TATA BOGA",
              "PENDIDIKAN TATA BUSANA",
              "PSIKOLOGI",
              "BAHASA DAN SASTRA INDONESIA",
              "BAHASA DAN SASTRA INGGRIS",
              "ILMU SEJARAH",
              "DESAIN KOMUNIKASI VISUAL",
              "AKUNTANSI",
              "EKONOMI DAN STUDI PEMBANGUNAN",
              "MANAJEMEN",
              "PENDIDIKAN LUAR BIASA",
              "PENDIDIKAN GEOGRAFI",
              "PENDIDIKAN BAHASA MANDARIN",
              "PENDIDIKAN ILMU PENGETAHUAN SOSIAL",
              "PENDIDIKAN KEPELATIHAN OLAHRAGA",
              "GEOGRAFI",
              "PENDIDIKAN SOSIOLOGI",
              "ILMU PERPUSTAKAAN"
              ]
          },
          "UNIVERSITAS ISLAM NEGERI MALANG": {
              "SAINTEK": [
              "MATEMATIKA",
              "BIOLOGI",
              "KIMIA",
              "FISIKA",
              "TEKNIK INFORMATIKA",
              "TEKNIK ARSITEKTUR",
              "FARMASI",
              "PENDIDIKAN DOKTER"
              ],
              "SOSHUM": [
              "PENDIDIKAN IPS",
              "BAHASA DAN SASTRA INGGRIS",
              "PSIKOLOGI",
              "MANAJEMEN",
              "AKUNTANSI"
              ]
          },
          "UNIVERSITAS AIRLANGGA": {
              "SAINTEK": [
              "PENDIDIKAN DOKTER",
              "PENDIDIKAN DOKTER GIGI",
              "PENDIDIKAN APOTEKER",
              "KEDOKTERAN HEWAN",
              "MATEMATIKA",
              "BIOLOGI",
              "FISIKA",
              "KIMIA",
              "KESEHATAN MASYARAKAT",
              "PENDIDIKAN NERS",
              "BUDIDAYA PERAIRAN",
              "PENDIDIKAN BIDAN",
              "TEKNOBIOMEDIK",
              "ILMU DAN TEKNOLOGI LINGKUNGAN",
              "SISTEM INFORMASI",
              "STATISTIKA",
              "ILMU GIZI",
              "PENDIDIKAN DOKTER HEWAN (PSDKU BANYUWANGI)",
              "KESEHATAN MASYARAKAT (PSDKU BANYUWANGI)",
              "BUDIDAYA PERAIRAN (PSDKU BANYUWANGI)",
              "TEKNOLOGI INDUSTRI HASIL PERIKANAN"
              ],
              "SOSHUM": [
              "ILMU HUKUM",
              "ILMU ADMINISTRASI NEGARA",
              "PSIKOLOGI",
              "SOSIOLOGI",
              "ILMU POLITIK",
              "ILMU HUBUNGAN INTERNASIONAL",
              "ANTROPOLOGI SOSIAL",
              "EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "AKUNTANSI",
              "ILMU KOMUNIKASI",
              "ILMU SEJARAH",
              "ILMU INFORMASI DAN PERPUSTAKAAN",
              "SASTRA INGGRIS",
              "SASTRA INDONESIA",
              "SASTRA JEPANG",
              "EKONOMI ISLAM",
              "AKUNTANSI (PSDKU BANYUWANGI)    "
              ]
          },
          "INSTITUT TEKNOLOGI SEPULUH NOPEMBER": {
              "SAINTEK": [
              "FISIKA",
              "MATEMATIKA",
              "STATISTIKA",
              "KIMIA",
              "BIOLOGI",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "TEKNIK KIMIA",
              "TEKNIK FISIKA",
              "TEKNIK INDUSTRI",
              "TEKNIK MATERIAL",
              "TEKNIK SIPIL",
              "ARSITEKTUR",
              "TEKNIK LINGKUNGAN",
              "TEKNIK GEOMATIKA",
              "PERENCANAAN WILAYAH DAN KOTA",
              "TEKNIK PERKAPALAN",
              "TEKNIK KELAUTAN",
              "TEKNIK SISTEM PERKAPALAN",
              "INFORMATIKA",
              "SISTEM INFORMASI",
              "DESAIN PRODUK INDUSTRI",
              "TEKNIK TRANSPORTASI LAUT",
              "TEK. SIST PERKAPALAN (GLR GANDA ITS-JERMAN)",
              "TEKNIK KOMPUTER",
              "TEKNIK GEOFISIKA",
              "DESAIN INTERIOR",
              "TEKNIK BIOMEDIK",
              "SAINS AKTUARIA",
              "TEKNOLOGI INFORMASI",
              "DESAIN KOMUNIKASI VISUAL"
              ],
              "SOSHUM": [
              "MANAJEMEN BISNIS"
              ]
          },
          "UNIVERSITAS NEGERI SURABAYA": {
              "SAINTEK": [
              "PEND. MATEMATIKA",
              "PEND. FISIKA",
              "PEND. KIMIA",
              "PEND. BIOLOGI",
              "MATEMATIKA",
              "FISIKA",
              "KIMIA",
              "BIOLOGI",
              "PEND. SAINS",
              "PEND. TEKNIK ELEKTRO",
              "PEND. TEKNIK MESIN",
              "PEND. TEKNIK BANGUNAN",
              "ILMU KEOLAHRAGAAN",
              "TEKNIK SIPIL",
              "PENDIDIKAN TEKNOLOGI INFORMASI",
              "TEKNIK ELEKTRO",
              "TEKNIK MESIN",
              "SISTEM INFORMASI",
              "TEKNIK INFORMATIKA",
              "GIZI"
              ],
              "SOSHUM": [
              "PSIKOLOGI PENDIDIKAN DAN BIMBINGAN",
              "KURIKULUM DAN TEKNOLOGI PENDIDIKAN",
              "PENDIDIKAN LUAR SEKOLAH",
              "PENDI. LUAR BIASA",
              "PGSD",
              "PSIKOLOGI",
              "PG-PAUD",
              "P. BAHASA DAN SASTRA INDONESIA",
              "P. BAHASA INGGRIS",
              "P. BAHASA JERMAN",
              "P. BAHASA JEPANG",
              "P. BAHASA DAERAH (JAWA)",
              "P. SENI RUPA",
              "P. SENDRATASIK",
              "SASTRA INDONESIA",
              "SASTRA INGGRIS",
              "SASTRA JERMAN",
              "PEND. PANCASILA DAN KEWARGANEGARAAN",
              "P. GEOGRAFI",
              "PEND. SEJARAH",
              "SOSIOLOGI",
              "ILMU ADMINISTRASI NEGARA",
              "PEND. JASMANI, KESEHATAN DAN REKREASI",
              "PEND. KEPELATIHAN OLAHRAGA",
              "P. EKONOMI",
              "MANAJEMEN",
              "AKUNTANSI",
              "PEND. TATA RIAS",
              "MANAJEMEN PENDIDIKAN",
              "ILMU HUKUM",
              "PEND. BAHASA MANDARIN",
              "PEND. TATA BOGA",
              "PEND. TATA BUSANA",
              "PEND. AKUNTANSI",
              "PEND. TATA NIAGA",
              "PEND. ADM. PERKANTORAN",
              "ILMU KOMUNIKASI",
              "SENI MUSIK",
              "DESAIN KOMUNIKASI VISUAL",
              "SENI RUPA MURNI",
              "EKONOMI ISLAM",
              "PEND. ILMU PENGETAHUAN SOSIAL",
              "EKONOMI"
              ]
          },
          "UNIVERSITAS TRUNOJOYO MADURA": {
              "SAINTEK": [
              "AGROEKOTEKNOLOGI",
              "AGRIBISNIS",
              "TEKNOLOGI INDUSTRI PERTANIAN",
              "ILMU KELAUTAN",
              "TEKNIK INDUSTRI",
              "TEKNIK INFORMATIKA",
              "TEKNIK ELEKTRO",
              "PENDIDIKAN INFORMATIKA",
              "PENDIDIKAN ILMU PENGETAHUAN ALAM",
              "MANAJEMEN SUMBERDAYA PERAIRAN",
              "TEKNIK MESIN",
              "TEKNIK MEKATRONIKA",
              "SISTEM INFORMASI"
              ],
              "SOSHUM": [
              "ILMU HUKUM",
              "SASTRA INGGRIS",
              "SOSIOLOGI",
              "ILMU KOMUNIKASI",
              "MANAJEMEN",
              "AKUNTANSI",
              "EKONOMI PEMBANGUNAN",
              "PSIKOLOGI",
              "PGSD",
              "HUKUM BISNIS SYARIAH",
              "EKONOMI SYARIAH",
              "PENDIDIKAN BAHASA DAN SASTRA INDONESIA",
              "PENDIDIKAN GURU ANAK USIA DINI"
              ]
          },
          "UPN \"VETERAN\" JAWA TIMUR": {
              "SAINTEK": [
              "AGRIBISNIS",
              "AGROTEKNOLOGI",
              "TEKNIK KIMIA",
              "TEKNIK INDUSTRI",
              "TEKNOLOGI PANGAN",
              "TEKNIK INFORMATIKA",
              "SISTEM INFORMASI",
              "ARSITEKTUR",
              "TEKNIK LINGKUNGAN",
              "TEKNIK SIPIL",
              "DESAIN KOMUNIKASI VISUAL"
              ],
              "SOSHUM": [
              "EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "AKUNTANSI",
              "ADMINISTRASI NEGARA",
              "ADMINISTRASI BISNIS/NIAGA",
              "ILMU KOMUNIKASI",
              "ILMU HUBUNGAN INTERNASIONAL",
              "ILMU HUKUM"
              ]
          },
          "UNIVERSITAS ISLAM NEGERI SUNAN AMPEL SURABAYA": {
              "SAINTEK": [
              "PENDIDIKAN MATEMATIKA",
              "TEKNIK LINGKUNGAN",
              "ARSITEKTUR",
              "SISTEM INFORMASI",
              "ILMU KELAUTAN",
              "BIOLOGI",
              "MATEMATIKA"
              ],
              "SOSHUM": [
              "PENDIDIKAN BAHASA INGGRIS",
              "SOSIOLOGI",
              "ILMU KOMUNIKASI",
              "PSIKOLOGI",
              "SASTRA INGGRIS",
              "ILMU EKONOMI",
              "AKUNTANSI",
              "MANAJEMEN",
              "ILMU POLITIK",
              "HUBUNGAN INTERNASIONAL  "
              ]
          },
          "UNIVERSITAS TANJUNGPURA": {
              "SAINTEK": [
              "SOSIAL EKONOMI PERTANIAN (AGRIBISNIS)",
              "TEKNIK SIPIL",
              "TEKNIK ELEKTRO",
              "TEKNIK ARSITEKTUR",
              "TEKNIK INFORMATIKA",
              "TEKNIK INDUSTRI",
              "TEKNIK LINGKUNGAN",
              "PEND. MATEMATIKA",
              "PEND. BIOLOGI",
              "PEND. FISIKA",
              "PEND. KIMIA",
              "MATEMATIKA",
              "FISIKA",
              "KIMIA",
              "BIOLOGI",
              "PEND. DOKTER",
              "FARMASI",
              "SISTEM KOMPUTER",
              "AGROTEKNOLOGI",
              "KEHUTANAN",
              "KEPERAWATAN",
              "GEOFISIKA",
              "ILMU KELAUTAN",
              "PERENCANAAN WILAYAH KOTA",
              "ILMU DAN TEKNOLOGI PANGAN",
              "TEKNIK PERTAMBANGAN",
              "PETERNAKAN",
              "STATISTIK",
              "TEKNIK KELAUTAN",
              "TEKNIK KIMIA",
              "TEKNIK MESIN",
              "ILMU TANAH",
              "SISTEM INFORMASI"
              ],
              "SOSHUM": [
              "ILMU HUKUM",
              "EKONOMI PEMBANGUAN",
              "MANAJEMEN",
              "AKUNTANSI",
              "ILMU ADMINISTRASI NEGARA",
              "ILMU SOSIATRI/PEM. MASYARAKAT",
              "PEND. BAHASA INGGRIS",
              "PEND. BAHASA, SASTRA INDONESIA & DAERAH",
              "PEND. EKONOMI",
              "PEND. SOSIOLOGI",
              "PEND. GURU PEND. ANAK USIA DINI (PGPAUD)",
              "PEND. JASMANI,KESEHATAN & REKREASI",
              "PEND. SENI TARI DAN MUSIK",
              "ILMU POLITIK",
              "SOSIOLOGI",
              "PEND. BAHASA MANDARIN",
              "MANAJEMEN (KELAS INTERNASIONAL)",
              "PEND. GURU SEKOLAH DASAR (PGSD)",
              "PEND. BIMBINGAN KONSELING",
              "AKUNTANSI (KELAS INTERNASIONAL)",
              "ILMU KOMUNIKASI",
              "ILMU PEMERINTAHAN",
              "MANAJEMEN SUMBER PERAIRAN",
              "EKONOMI ISLAM",
              "PENDIDIKAN PANCASILA DAN KEWARGANEGARAAN",
              "PENDIDIKAN SEJARAH",
              "PENDIDIKAN GEOGRAFI",
              "PENDIDIKAN KEPELATIHAN OLAHRAGA",
              "PENDIDIKAN IPS",
              "ILMU HUBUNGAN INTERNASIONAL",
              "ANTROPOLOGI SOSIAL "
              ]
          },
          "UNIVERSITAS PALANGKARAYA": {
              "SAINTEK": [
              "ILMU SOSIAL EKONOMI PERTANIAN (AGRIBISNIS)",
              "MANAJEMEN SUMBERDAYA PERAIRAN",
              "BUDIDAYA PERAIRAN",
              "TEKNIK SIPIL",
              "ARSITEKTUR",
              "TEKNIK PERANGKAT LUNAK (TEK. INFORMATIKA)",
              "PEND. MATEMATIKA",
              "PEND. FISIKA",
              "PEND. KIMIA",
              "PEND. BIOLOGI",
              "PEND. TEKNIK MESIN",
              "TEKNIK PERTAMBANGAN",
              "AGROTEKNOLOGI",
              "KEHUTANAN",
              "TEKNOLOGI HASIL PERIKANAN",
              "PETERNAKAN",
              "PENDIDIKAN TEKNIK BANGUNAN",
              "PENDIDIKAN DOKTER",
              "TEKNOLOGI INDUSTRI PERTANIAN",
              "FISIKA",
              "KIMIA",
              "BIOLOGI"
              ],
              "SOSHUM": [
              "PEND. PANCASILA & KEWARGANEGARAAN (PPKN)",
              "PEND. EKONOMI",
              "PEND. BAHASA INGGRIS",
              "PEND. BAHASA, SASTRA INDONESIA & DAERAH",
              "PEND. GURU SEKOLAH DASAR (PGSD)",
              "PEND. JASMANI, KESEHATAN DAN REKREASI",
              "PEND. GURU PEND ANAK USIA DINI (PG PAUD)",
              "PEND. LUAR SEKOLAH",
              "BIMBINGAN DAN KONSELING",
              "EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "AKUNTANSI",
              "SOSIOLOGI",
              "ILMU ADMINISTRASI NEGARA",
              "ILMU HUKUM",
              "TEKNOLOGI PENDIDIKAN",
              "MANAJEMEN PENDIDIKAN",
              "ILMU PEMERINTAHAN",
              "PENDIDIKAN SENDRATASIK"
              ]
          },
          "UNIVERSITAS LAMBUNG MANGKURAT": {
              "SAINTEK": [
              "PEND. MATEMATIKA",
              "PEND. BIOLOGI",
              "PEND. KIMIA",
              "AGROEKOTEKNOLOGI",
              "AGRIBISNIS",
              "PRODUKSI TERNAK",
              "TEKNOLOGI INDUSTRI PERTANIAN",
              "TEKNOLOGI HASIL PERIKANAN",
              "BUDIDAYA PERAIRAN",
              "PEMANFAATAN SD PERIKANAN",
              "MANAJEMEN SD PERAIRAN",
              "AGRIBISNIS PERIKANAN",
              "ILMU KELAUTAN",
              "TEKNIK SIPIL",
              "TEKNIK ARSITEKTUR",
              "TEKNIK PERTAMBANGAN",
              "TEKNIK KIMIA",
              "TEKNIK LINGKUNGAN",
              "TEKNIK MESIN",
              "PENDIDIKAN DOKTER",
              "KESEHATAN MASYARAKAT",
              "MATEMATIKA",
              "KIMIA",
              "BIOLOGI",
              "FISIKA",
              "FARMASI",
              "ILMU KOMPUTER",
              "KEHUTANAN",
              "PEND. FISIKA",
              "ILMU KEPERAWATAN",
              "ILMU TANAH",
              "PROTEKSI TANAMAN",
              "AGRONOMI",
              "KEDOKTERAN GIGI",
              "PENDIDIKAN ILMU KOMPUTER",
              "PENDIDIKAN IPA",
              "TEKNIK INFORMATIKA",
              "STATISTIKA"
              ],
              "SOSHUM": [
              "PEND. SEJARAH",
              "PEND PANCASILA & KN",
              "PEND. EKONOMI",
              "PEND. BHS SASTRA IND. & DAERAH",
              "PEND. BAHASA INGGRIS",
              "ILMU HUKUM",
              "EKONOMI & STUDI PEMBANGUNAN",
              "MANAJEMEN",
              "AKUNTANSI",
              "ADMINISTRASI PUBLIK",
              "ILMU ADMINISTRASI BISNIS",
              "ILMU PEMERINTAHAN",
              "ILMU KOMUNIKASI",
              "PEND. GEOGRAFI",
              "PEND. SOSIOLOGI",
              "PEND. BIMBINGAN KONSELING",
              "PENDIDIKAN LUAR BIASA",
              "PENDIDIKAN JASMANI KESEHATAN DAN REKREASI",
              "PGSD",
              "PG-PAUD",
              "PENDIDIKAN SENDRATASIK",
              "TEKNOLOGI PENDIDIKAN",
              "PENDIDIKAN IPS",
              "PSIKOLOGI"
              ]
          },
          "UNIVERSITAS MULAWARMAN": {
              "SAINTEK": [
              "AGROEKOTEKNOLOGI",
              "AGRIBISNIS",
              "TEKNOLOGI HASIL PERTANIAN",
              "KEHUTANAN",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN MATEMATIKA",
              "BUDIDAYA PERAIRAN",
              "AGROBISNIS PERIKANAN",
              "MANAJEMEN SUMBERDAYA PERAIRAN",
              "STATISTIKA",
              "BIOLOGI",
              "KIMIA",
              "FISIKA",
              "ILMU KOMPUTER",
              "TEKNIK SIPIL",
              "TEKNIK INDUSTRI",
              "TEKNIK LINGKUNGAN",
              "TEKNIK PERTAMBANGAN",
              "PENDIDIKAN DOKTER",
              "KESEHATAN MASYARAKAT",
              "FARMASI",
              "PETERNAKAN",
              "TEKNIK KIMIA",
              "TEKNIK INFORMATIKA",
              "TEKNIK GEOLOGI",
              "TEKNIK ELEKTRO",
              "TEKNOLOGI HASIL PERIKANAN",
              "KEDOKTERAN GIGI",
              "MATEMATIKA",
              "ILMU KELAUTAN",
              "GEOFISIKA",
              "PENDIDIKAN KOMPUTER"
              ],
              "SOSHUM": [
              "MANAJEMEN",
              "EKONOMI PEMBANGUNAN",
              "AKUNTANSI",
              "ILMU ADMINISTRASI NEGARA",
              "ILMU PEMERINTAHAN",
              "ILMU SOSIATRI",
              "ILMU HUBUNGAN INTERNASIONAL",
              "ILMU KOMUNIKASI",
              "ILMU ADMINISTRASI BISNIS",
              "PEND. PANCASILA DAN KEWARGANEGARAAN",
              "PENDIDIKAN EKONOMI",
              "PEND. BAHASA, SASTRA INDO. & DAERAH",
              "PENDIDIKAN BAHASA INGGRIS",
              "BIMBINGAN DAN KONSELING",
              "PENDIDIKAN JASMANI, KESEHATAN & REKREASI",
              "PENDIDIKAN GURU SEKOLAH DASAR",
              "PENDIDIKAN ANAK USIA DINI",
              "ILMU HUKUM",
              "PSIKOLOGI",
              "SASTRA INDONESIA",
              "SASTRA INGGRIS",
              "PENDIDIKAN LUAR SEKOLAH",
              "PENDIDIKAN GEOGRAFI",
              "EKONOMI ISLAM",
              "ETNOMUSIKOLOGI",
              "PENDIDIKAN SEJARAH"
              ]
          },
          "INSTITUT TEKNOLOGI KALIMANTAN": {
              "SAINTEK": [
              "FISIKA",
              "MATEMATIKA",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "TEKNIK KIMIA",
              "TEKNIK MATERIAL DAN METALURGI",
              "TEKNIK SIPIL",
              "PERENCANAAN WILAYAH DAN KOTA",
              "TEKNIK PERKAPALAN",
              "SISTEM INFORMASI",
              "TEKNIK INDUSTRI",
              "INFORMATIKA",
              "TEKNIK LINGKUNGAN",
              "TEKNIK KELAUTAN"
              ]
          },
          "UNIVERSITAS BORNEO TARAKAN": {
              "SAINTEK": [
              "TEKNIK ELEKTRO",
              "TEKNIK SIPIL",
              "AGRIBISNIS",
              "AGROTEKNOLOGI",
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN BIOLOGI",
              "MANAJEMEN SUMBER DAYA PERAIRAN",
              "BUDIDAYA PERAIRAN",
              "TEKNOLOGI HASIL PERIKANAN",
              "TEKNIK MESIN"
              ],
              "SOSHUM": [
              "BIMBINGAN DAN KONSELING",
              "PENDIDIKAN BAHASA DAN SASTRA INDONESIA",
              "PENDIDIKAN BAHASA INGGRIS",
              "EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "ILMU HUKUM",
              "PENDIDIKAN GURU SEKOLAH DASAR"
              ]
          },
          "UNIVERSITAS UDAYANA": {
              "SAINTEK": [
              "PENDIDIKAN DOKTER",
              "KEDOKTERAN HEWAN",
              "TEKNIK ARSITEKTUR",
              "TEKNIK SIPIL",
              "ILMU DAN TEKNOLOGI PANGAN",
              "TEKNOLOGI INDUSTRI PERTANIAN",
              "TEKNIK PERTANIAN",
              "BIOLOGI",
              "KIMIA",
              "FISIKA",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "AGRIBISNIS",
              "AGROEKOTEKNOLOGI",
              "PETERNAKAN",
              "MATEMATIKA",
              "ILMU KESEHATAN MASYARAKAT",
              "FARMASI",
              "ILMU KEPERAWATAN",
              "ILMU KOMPUTER/TEKNIK INFORMATIKA",
              "TEKNOLOGI INFORMASI",
              "FISIOTERAPI",
              "ILMU KELAUTAN",
              "ARSITEKTUR PERTAMANAN",
              "MANAJEMEN SUMBER DAYA PERAIRAN",
              "PENDIDIKAN DOKTER GIGI"
              ],
              "SOSHUM": [
              "ARKEOLOGI",
              "ANTROPOLOGI BUDAYA",
              "ILMU SEJARAH",
              "ILMU HUKUM",
              "EKONOMI PEMBANGUNAN",
              "AKUNTANSI",
              "MANAJEMEN",
              "SASTRA INDONESIA",
              "SASTRA INGGRIS",
              "SASTRA DAERAH JAWA KUNA",
              "SASTRA DAERAH UNTUK SASTRA BALI",
              "SASTRA JEPANG",
              "DESTINASI PARIWISATA",
              "INDUSTRI PERJALANAN WISATA",
              "HUBUNGAN INTERNASIONAL",
              "SOSIOLOGI",
              "PSIKOLOGI",
              "ADMINISTRASI NEGARA",
              "ILMU KOMUNIKASI",
              "ILMU POLITIK"
              ]
          },
          "UNIVERSITAS PENDIDIKAN GANESHA": {
              "SAINTEK": [
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN TEKNIK INFORMATIKA",
              "ILMU KEOLAHRAGAAN",
              "PENDIDIKAN TEKNIK ELEKTRO",
              "PENDIDIKAN TEKNIK MESIN",
              "PENDIDIKAN IPA",
              "KIMIA",
              "MATEMATIKA",
              "BIOLOGI",
              "AKUAKULTUR",
              "SISTEM INFORMASI"
              ],
              "SOSHUM": [
              "PENDIDIKAN PANCASILA DAN KEWARGANEGARAAN",
              "PENDIDIKAN EKONOMI",
              "PENDIDIKAN SEJARAH",
              "PENDIDIKAN GEOGRAFI",
              "PENDIDIKAN BAHASA DAN SASTRA INDONESIA",
              "PENDIDIKAN BAHASA INGGRIS",
              "PENDIDIKAN SENI RUPA",
              "PENDIDIKAN KESEJAHTERAAN KELUARGA",
              "BIMBINGAN KONSELING",
              "TEKNOLOGI PENDIDIKAN",
              "PENDIDIKAN JASMANI KESEHATAN DAN REKREASI",
              "MANAJEMEN",
              "AKUNTANSI",
              "PENDIDIKAN KEPELATIHAN OLAHRAGA",
              "PENDIDIKAN GURU SEKOLAH DASAR",
              "PENDIDIKAN GURU ANAK USIA DINI",
              "PEND. BAHASA JEPANG",
              "PENDIDIKAN BAHASA BALI",
              "PENDIDIKAN SOSIOLOGI",
              "ILMU HUKUM"
              ]
          },
          "ISI DENPASAR": {
              "SOSHUM": [
              "TARI",
              "SENI KARAWITAN",
              "PENDIDIKAN SENI DRAMA, TARI, DAN MUSIK",
              "MUSIK",
              "SENI MURNI",
              "DESAIN INTERIOR",
              "DESAIN KOMUNIKASI VISUAL",
              "KRIYA",
              "FOTOGRAFI",
              "SENI PEDALANGAN"
              ]
          },
          "UNIVERSITAS MATARAM": {
              "SAINTEK": [
              "AGROEKOTEKNOLOGI",
              "AGRIBISNIS",
              "KEHUTANAN",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN MATEMATIKA",
              "TEKNIK SIPIL",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "BIOLOGI",
              "MATEMATIKA",
              "FISIKA",
              "KIMIA",
              "PETERNAKAN",
              "PENDIDIKAN DOKTER",
              "ILMU DAN TEKNOLOGI PANGAN",
              "KETEKNIKAN PERTANIAN",
              "BUDIDAYA PERAIRAN",
              "TEKNIK INFORMATIKA",
              "FARMASI",
              "ILMU TANAH"
              ],
              "SOSHUM": [
              "EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "AKUNTANSI",
              "ILMU HUKUM",
              "PENDIDIKAN BAHASA DAN SASTRA INDONESIA",
              "PENDIDIKAN BAHASA INGGRIS",
              "PENDIDIKAN PANCASILA DAN KEWARGANEGARAAN",
              "PENDIDIKAN GURU SEKOLAH DASAR",
              "PENDIDIKAN ANAK USIA DINI",
              "HUBUNGAN INTERNASIONAL",
              "ILMU KOMUNIKASI",
              "SOSIOLOGI",
              "PENDIDIKAN SOSIOLOGI"
              ]
          },
          "UNIVERSITAS NUSA CENDANA": {
              "SAINTEK": [
              "PEND. MATEMATIKA",
              "PEND. BIOLOGI",
              "PEND. FISIKA",
              "PEND. KIMIA",
              "PEND. TEKNIK BANGUNAN",
              "PEND. TEKNIK MESIN",
              "PEND. TEKNIK ELEKTRO",
              "AGRONOMI/AGROEKOTEKNOLOGI",
              "AGRIBISNIS",
              "ILMU PETERNAKAN",
              "ILMU KESEHATAN MASYARAKAT",
              "MATEMATIKA",
              "BIOLOGI",
              "FISIKA",
              "KIMIA",
              "TEKNIK SIPIL",
              "TEKNIK ELEKTRO",
              "TEKNIK MESIN",
              "ILMU KOMPUTER",
              "TEKNIK ARSITEKTUR",
              "TEKNIK PERTAMBANGAN",
              "PENDIDIKAN DOKTER",
              "BUDIDAYA PERIKANAN",
              "KEDOKTERAN HEWAN",
              "KEHUTANAN",
              "MANAJEMEN SUMBER DAYA PERAIRAN"
              ],
              "SOSHUM": [
              "PEND. BHS & SASTRA INDO.",
              "PEND. BHS. INGGRIS",
              "PPKN",
              "PEND. EKONOMI",
              "PEND. GEOGRAFI",
              "PEND. SEJARAH",
              "BIMBINGAN KONSELING",
              "PEND. LUAR SEKOLAH",
              "PEND. ANAK USIA DINI",
              "PEND. GURU SEKOLAH DASAR",
              "ILMU HUKUM",
              "ILMU ADM.NEGARA",
              "ILMU ADM.NIAGA",
              "SOSIOLOGI",
              "ILMU KOMUNIKASI",
              "ILMU POLITIK",
              "PENJASKESREK",
              "EKONOMI PEMBANGUNAN",
              "AKUNTANSI",
              "MANAJEMEN",
              "PSIKOLOGI"
              ]
          },
          "UNIVERSITAS TIMOR": {
              "SAINTEK": [
              "AGRIBISNIS",
              "AGROTEKNOLOGI",
              "PETERNAKAN",
              "PEND. BIOLOGI",
              "PEND. MATEMATIKA",
              "BIOLOGI",
              "MATEMATIKA",
              "KIMIA",
              "TEKNOLOGI INFORMASI"
              ],
              "SOSHUM": [
              "ADM. NEGARA",
              "ILMU PEMERINTAHAN",
              "PEND. BAHASA INDONESIA",
              "PEND. BAHASA INGGRIS",
              "MANAJEMEN",
              "EKO. PEMBANGUNAN    "
              ]
          },
          "UNIVERSITAS HASANUDDIN": {
              "SAINTEK": [
              "MATEMATIKA",
              "FISIKA",
              "KESEHATAN MASYARAKAT",
              "FARMASI",
              "KIMIA",
              "BIOLOGI",
              "PENDIDIKAN DOKTER",
              "AGROTEKNOLOGI",
              "ILMU DAN TEKNOLOGI PANGAN",
              "AGRIBISNIS",
              "KETEKNIKAN PERTANIAN",
              "TEKNIK SIPIL",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "TEKNIK PERKAPALAN",
              "TEKNIK GEOLOGI",
              "PENDIDIKAN DOKTER GIGI",
              "TEKNIK ARSITEKTUR",
              "KEHUTANAN",
              "GEOFISIKA",
              "STATISTIKA",
              "ILMU GIZI",
              "ILMU KELAUTAN",
              "BUDIDAYA PERAIRAN",
              "MANAJEMEN SUMBERDAYA PERAIRAN",
              "PEMANFAATAN SUMBERDAYA PERIKANAN",
              "SOSIAL EKONOMI PERIKANAN",
              "ILMU KEPERAWATAN",
              "PETERNAKAN",
              "TEKNIK KELAUTAN",
              "TEKNIK INDUSTRI",
              "TEKNIK SISTEM PERKAPALAN",
              "TEKNIK PENGEMB. WILAYAH KOTA",
              "TEKNIK PERTAMBANGAN",
              "TEKNIK INFORMATIKA",
              "FISOTERAPI",
              "TEKNIK LINGKUNGAN",
              "KEDOKTERAN HEWAN",
              "PSIKOLOGI",
              "ILMU KOMPUTER"
              ],
              "SOSHUM": [
              "MANAJEMEN",
              "ILMU HUKUM",
              "ILMU POLITIK",
              "ANTROPOLOGI SOSIAL",
              "ILMU SEJARAH",
              "ILMU KOMUNIKASI",
              "SOSIOLOGI",
              "AKUNTANSI",
              "ILMU PEMERINTAHAN",
              "ILMU HUBUNGAN INTERNASIONAL",
              "ILMU ADMINISTRASI NEGARA",
              "SASTRA INDONESIA",
              "SASTRA DAERAH/BUGIS MAKASSAR",
              "SASTRA ASIA BARAT/ARAB",
              "SASTRA INGGRIS",
              "SASTRA PERANCIS/ BARAT ROMAN",
              "ARKEOLOGI",
              "SASTRA JEPANG",
              "ILMU EKONOMI",
              "HUKUM ADMINISTRASI NEGARA"
              ]
          },
          "UNIVERSITAS NEGERI MAKASSAR": {
              "SAINTEK": [
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN BIOLOGI",
              "MATEMATIKA",
              "FISIKA",
              "KIMIA",
              "BIOLOGI",
              "GEOGRAFI",
              "PENDIDIKAN TEKNIK ELEKTRO",
              "PEND. TEKNIK ELEKTRONIKA",
              "PENDIDIKAN TEKNIK MESIN",
              "PEND. TEKNIK OTOMOTIF",
              "PENDIDIKAN TEKNIK BANGUNAN",
              "ILMU KEOLAHRAGAAN",
              "PENDIDIKAN TEKNIK INFORMATIKA & KOMPUTER",
              "PEND. KIMIA KLS INTERNASIONAL (BILINGUAL)",
              "PEND. MATEMATIKA KLS INTERNAS. (BILINGUAL)",
              "DESAIN KOMUNIKASI VISUAL",
              "PEND. BIOLOGI KLS INTERNASIONAL (BILINGUAL)",
              "PEND. FISIKA KLS INTERNASIONAL (BILINGUAL)",
              "PENDIDIKAN TEKNOLOGI PERTANIAN",
              "PENDIDIKAN IPA",
              "PENDIDIKAN IPA KLS INTERNASIONAL (BILINGUAL)",
              "STATISTIKA",
              "PENDIDIKAN VOKASIONAL MEKATRONIKA",
              "TEKNIK KOMPUTER"
              ],
              "SOSHUM": [
              "PENDIDIKAN GEOGRAFI",
              "PENDIDIKAN KESEJAHTERAAN KELUARGA",
              "PENDIDIKAN JASMANI, KESEHATAN & REKREASI",
              "PENDIDIKAN KEPELATIHAN OLAHRAGA",
              "ADMINISTRASI PENDIDIKAN",
              "TEKNOLOGI PENDIDIKAN",
              "BIMBINGAN DAN KONSELING",
              "PENDIDIKAN LUAR SEKOLAH",
              "PENDIDIKAN LUAR BIASA",
              "PENDIDIKAN BAHASA DAN SASTRA INDONESIA",
              "PENDIDIKAN BAHASA INGGRIS",
              "SASTRA INDONESIA",
              "SASTRA INGGRIS",
              "PENDIDIKAN BAHASA JERMAN",
              "PENDIDIKAN PANCASILA DAN KEWARGANEGARAAN",
              "PENDIDIKAAN SOSIOLOGI",
              "PENDIDIKAN SEJARAH",
              "MANAJEMEN",
              "SOSIOLOGI",
              "PEND. GURU SEK. DASAR (KAMPUS MAKASSAR)",
              "PENDIDIKAN GURU PAUD",
              "PEND. GURU SEKOLAH DASAR (KAMPUS BONE)",
              "PEND. GURU SEK. DASAR (KAMPUS PARE-PARE)",
              "PENDIDIKAN IPS",
              "ADMINISTRASI NEGARA",
              "PENDIDIKAN EKONOMI",
              "PEND. GEOGRAFI KLS INTERNAS. (BILINGUAL)",
              "EKONOMI PEMBANGUNAN",
              "AKUNTANSI",
              "PENDIDIKAN SENI DRAMA, TARI, DAN MUSIK",
              "PENDIDIKAN SENI RUPA",
              "P. GURU SEK DASAR BILINGUAL (KAMP MAKASSAR)",
              "SENI TARI",
              "PEND. ADMINISTRASI PERKANTORAN",
              "PEND. AKUNTANSI",
              "PENDIDIKAN ANTROPOLOGI",
              "PENDIDIKAN BAHASA DAN SASTRA DAERAH",
              "PENDIDIKAN BAHASA ARAB",
              "ILMU ADMINISTRASI BISNIS",
              "PENDIDIKAN BAHASA MANDARIN"
              ]
          },
          "UNIVERSITAS ISLAM NEGERI ALAUDDIN": {
              "SAINTEK": [
              "MATEMATIKA",
              "KIMIA",
              "TEKNIK PERENCANAAN WILAYAH DAN KOTA",
              "TEKNIK ARSITEKTUR",
              "ILMU PETERNAKAN",
              "SISTEM INFORMASI",
              "PENDIDIKAN DOKTER"
              ],
              "SOSHUM": [
              "ILMU HUKUM",
              "JURNALISTIK",
              "MANAJEMEN",
              "AKUNTANSI",
              "ILMU EKONOMI",
              "ILMU POLITIK",
              "ILMU KOMUNIKASI "
              ]
          },
          "UNIVERSITAS SAM RATULANGI": {
              "SAINTEK": [
              "PENDIDIKAN DOKTER",
              "PENDIDIKAN DOKTER GIGI",
              "ILMU KESEHATAN MASYARAKAT",
              "ILMU KEPERAWATAN",
              "TEKNIK ELEKTRO",
              "TEKNIK MESIN",
              "TEKNIK SIPIL",
              "ARSITEKTUR",
              "PERENCANAAN WILAYAH DAN KOTA",
              "TEKNIK PERTANIAN",
              "ILMU DAN TEKNOLOGI PANGAN",
              "MATEMATIKA",
              "FISIKA",
              "BIOLOGI",
              "KIMIA",
              "AGRIBISNIS",
              "AGROEKOTEKNOLOGI",
              "PETERNAKAN",
              "ILMU KELAUTAN",
              "MANAJEMEN SUMBERDAYA PERAIRAN",
              "BUDIDAYA PERAIRAN",
              "TEKNOLOGI HASIL PERIKANAN",
              "AGROBISNIS PERIKANAN",
              "PEMANFAATAN SUMBERDAYA PERIKANAN",
              "KEHUTANAN",
              "INFORMATIKA",
              "FARMASI",
              "TEKNIK LINGKUNGAN",
              "SISTEM INFORMASI",
              "ILMU TANAH",
              "AGRONOMI",
              "PROTEKSI TANAMAN"
              ],
              "SOSHUM": [
              "EKONOMI PEMBANGNAN",
              "MANAJEMEN",
              "AKUNTANSI",
              "ILMU ADMINISTRASI NEGARA",
              "ILMU ADMINISTRASI BISNIS",
              "ILMU PEMERINTAHAN",
              "ILMU POLITIK",
              "SOSIOLOGI",
              "ILMU KOMUNIKASI",
              "ILMU PERPUSTAKAAN",
              "ILMU HUKUM",
              "SASTRA INDONESIA",
              "SASTRA INGGRIS",
              "SASTRA JERMAN",
              "ILMU SEJARAH",
              "ANTROPOLOGI SOSIAL  "
              ]
          },
          "UNIVERSITAS NEGERI MANADO": {
              "SAINTEK": [
              "PEND. BIOLOGI",
              "ILMU BIOLOGI",
              "PEND. KIMIA",
              "ILMU KIMIA",
              "PEND. FISIKA",
              "ILMU FISIKA",
              "PEND. MATEMATIKA",
              "PEND. TEK BANGUNAN",
              "PEND. TEK ELEKTRO",
              "PEND. INF./KOM",
              "PEND. TEK MESIN",
              "ILMU GEOGRAFI",
              "ILMU KEOLAHRAGAAN",
              "PENDIDIKAN IPA",
              "ARSITEKTUR",
              "TEKNIK INFORMATIKA",
              "TEKNIK SIPIL",
              "ILMU KESEHATAN MASYARAKAT",
              "TEKNIK MESIN"
              ],
              "SOSHUM": [
              "PEND. KES. KEL",
              "PEND. BAHASA INDONESIA",
              "PEND. BAH INGGRIS",
              "BAH & SASTRA INGGRIS",
              "PEND. BAHASA JEPANG",
              "PEND. BAH. JERMAN",
              "PEND. BAH. PERANCIS",
              "PEND. SENI MUSIK",
              "PEND. SENI RUPA",
              "PPKN",
              "PEND. SEJARAH",
              "PEND GEOGRAFI",
              "ILMU ADM NEGARA",
              "ILMU HUKUM",
              "PEND EKONOMI SX",
              "MANAJEMEN SX",
              "PEND. KEPELATIHAN OR",
              "PEND. JASMANI, KES. REK",
              "PLS",
              "PLB/P.KH",
              "PSIKOLOGI",
              "PGSD",
              "AKUNTANSI",
              "BIMBINGAN KONSELING",
              "PEND. ANAK USIA DINI",
              "PENDIDIKAN SOSIOLOGI",
              "PENDIDIKAN IPS",
              "ILMU EKONOMI"
              ]
          },
          "UNIVERSITAS TADULAKO": {
              "SAINTEK": [
              "PEND. BIOLOGI",
              "PEND. MATEMATIKA",
              "PEND. FISIKA",
              "PEND. KIMIA",
              "AGROTEKNOLOGI",
              "KEHUTANAN",
              "AGRIBISNIS",
              "PETERNAKAN",
              "TEKNIK SIPIL",
              "TEKNIK ARSITEKTUR",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "FISIKA",
              "MATEMATIKA",
              "KIMIA",
              "BIOLOGI",
              "PEND. DOKTER",
              "KESEHATAN MASYARAKAT",
              "BUDIDAYA PERAIRAN",
              "FARMASI",
              "TEKNIK INFORMATIKA",
              "STATISTIKA",
              "TEKNIK GEOLOGI",
              "PERENCANAAN WILAYAH DAN KOTA",
              "GIZI",
              "TEKNIK GEO FISIKA",
              "AGROTEKNOLOGI (PSDKU MOROWALI)",
              "TEKNIK SIPIL (PSDKU MOROWALI)",
              "AGROTEKNOLOGI (PSDKU TOUNA)",
              "TEKNIK SIPIL (PSDKU TOUNA)"
              ],
              "SOSHUM": [
              "PEND. BAHASA INDONESIA",
              "PEND. BAHASA INGGRIS",
              "PEND. PANCASILA DAN KEWARGANEGARAAN",
              "PEND. SEJARAH",
              "BIMBINGAN DAN KONSELING",
              "PEND. GURU SEKOLAH DASAR",
              "PEND. GURU PAUD",
              "ADMINSTRASI NEGARA",
              "SOSIOLOGI",
              "ANTROPOLOGI",
              "ILMU PEMERINTAHAN",
              "ILMU KOMUNIKASI",
              "EKONOMI PEMBANGUNAN",
              "EKONOMI MANAJEMEN",
              "EKONOMI AKUNTANSI",
              "ILMU HUKUM",
              "PEND. JASMANI, KESEHATAN DAN REKREASI",
              "PEND. GEOGRAFI",
              "MANAJEMEN (PSDKU MOROWALI)",
              "MANAJEMEN (PSDKU TOUNA)"
              ]
          },
          "UNIVERSITAS SULAWESI BARAT": {
              "SAINTEK": [
              "AGRIBISNIS",
              "KEHUTANAN",
              "KEPERAWATAN",
              "TEKNIK SIPIL",
              "TEKNIK INFORMATIKA",
              "MATEMATIKA",
              "PEND. MATEMATIKA",
              "PEND. BIOLOGI",
              "PEND. FISIKA",
              "PETERNAKAN",
              "BUDIDAYA PERAIRAN",
              "PERIKANAN TANGKAP"
              ],
              "SOSHUM": [
              "MANAJEMEN",
              "AKUNTANSI",
              "ILMU POLITIK",
              "ILMU HUBUNGAN INTERNASIONAL",
              "ILMU HUKUM",
              "PEND. BHS. INGGRIS"
              ]
          },
          "UNIVERSITAS HALUOLEO": {
              "SAINTEK": [
              "AGRIBISNIS",
              "AGROTEKNOLOGI / AGROEKOTEKNOLOGI",
              "PETERNAKAN",
              "MANAJEMEN SUMBERDAYA PERAIRAN",
              "BUDIDAYA PERAIRAN",
              "MATEMATIKA",
              "FISIKA",
              "KIMIA",
              "BIOLOGI",
              "ILMU KESEHATAN MASYARAKAT",
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN KIMIA",
              "TEKNIK SIPIL",
              "TEKNIK ARSITEKTUR",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "TEKNIK INFORMATIKA",
              "PENDIDIKAN DOKTER",
              "KEHUTANAN",
              "ILMU DAN TEKNOLOGI PANGAN",
              "FARMASI",
              "AGROBISNIS PERIKANAN",
              "TEKNIK GEOFISIKA",
              "TEKNIK GEOLOGI",
              "ILMU KELAUTAN",
              "ILMU LINGKUNGAN",
              "TEKNIK PERTAMBANGAN",
              "TEKNOLOGI HASIL PERIKANAN",
              "GEOGRAFI",
              "ILMU TANAH",
              "PROTEKSI TANAMAN",
              "PENYULUHAN PERTANIAN",
              "BIOTEKNOLOGI",
              "ILMU KEOLAHRAGAAN",
              "OSEANOGRAFI",
              "PERIKANAN TANGKAP",
              "STATISTIKA",
              "ILMU KOMPUTER",
              "REKAYASA INFRASTRUKTUR DAN LINGKUNGAN",
              "TEKNIK KELAUTAN"
              ],
              "SOSHUM": [
              "EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "AKUTANSI",
              "ILMU ADMINISTRASI NEGARA",
              "SOSIOLOGI",
              "ANTROPOLOGI SOSIAL",
              "ILMU KOMUNIKASI",
              "ILMU HUKUM",
              "PENDIDIKAN SEJARAH",
              "PENDIDIKAN EKONOMI",
              "PEND. PANCASILA & KEWARGANEGARAAN",
              "PEND. JASMANI, KESEHATAN DAN REKREASI",
              "PEND. BAHASA, SASTRA INDO. & DAERAH",
              "PENDIDIKAN BAHASA INGGRIS",
              "PEND. GURU SEKOLAH DASAR (PGSD) SX",
              "PENDIDIKAN ANAK USIA DINI (PG-PAUD)",
              "PENDIDIKAN BIMBINGAN DAN KONSELING",
              "ADMINISTRASI BISNIS",
              "ARKEOLOGI",
              "ILMU KESEJAHTERAAN SOSIAL",
              "ILMU SEJARAH",
              "JURNALISTIK",
              "PENDIDIKAN GEOGRAFI",
              "SASTRA INDONESIA",
              "SASTRA INGGRIS",
              "TRADISI LISAN",
              "PSIKOLOGI",
              "ILMU POLITIK",
              "PENDIDIKAN AKUNTANSI",
              "SASTRA PRANCIS",
              "PERPUSTAKAAN DAN ILMU INFORMASI"
              ]
          },
          "UNIVERSITAS NEGERI GORONTALO": {
              "SAINTEK": [
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN KIMIA",
              "PENDIDIKAN GEOGRAFI",
              "PENDIDIKAN SENI RUPA",
              "AGROTEKNOLOGI",
              "SISTEM INFORMASI",
              "TEKNIK ELEKTRO",
              "AGRIBISNIS",
              "KESEHATAN MASYARAKAT",
              "MANAJAMEN SUMBERDAYA PERAIRAN",
              "PETERNAKAN",
              "BUDIDAYA PERAIRAN",
              "KEPERAWATAN",
              "TEKNOLOGI HASIL PERIKANAN",
              "TEKNIK SIPIL",
              "TEKNIK ARSITEKTUR",
              "FARMASI",
              "TEKNIK GEOLOGI",
              "PENDIDIKAN TEKNIK BANGUNAN",
              "PENDIDIKAN TEKNOLOGI INFORMASI",
              "TEKNIK INDUSTRI",
              "ILMU TEKNOLOGI PANGAN",
              "PENDIDIKAN TEKNIK MESIN",
              "KIMIA",
              "BIOLOGI",
              "FISIKA",
              "MATEMATIKA",
              "STATISTIKA",
              "PENDIDIKAN ILMU PENGETAHUAN ALAM"
              ],
              "SOSHUM": [
              "PENDIDIKAN SEJARAH",
              "PENDIDIKAN PANCASLA DAN KEWARGANEGARAAN",
              "PENDIDIKAN EKONOMI",
              "PENDIDIKAN JASMANI KESEHATAN DAN REKREASI",
              "PENDIDIKAN BAHASA DAN SASTRA INDONESIA",
              "PENDIDIKAN BAHASA INGGRIS",
              "PENDIDIKAN GURU SD",
              "PENDIDIKAN ANAK USIA DINI",
              "PENDIDIKAN SENDRATASIK",
              "BIMBINGAN DAN KONSELING",
              "PENDIDIKAN LUAR SEKOLAH",
              "MANAJEMEN PENDIDIKAN",
              "ILMU HUKUM",
              "AKUNTANSI",
              "MANAJEMEN",
              "PENDIDIKAN KEPELATIHAN",
              "SOSIOLOGI",
              "ILMU KOMUNIKASI",
              "EKONOMI PEMBANGUNAN",
              "ADMINISTRASI PUBLIK"
              ]
          },
          "UNIVERSITAS SEMBILAN BELAS NOVEMBER KOLAKA": {
              "SAINTEK": [
              "PENDIDIKAN MATEMATIKA",
              "SISTEM INFORMASI",
              "TEKNIK SIPIL",
              "TEKNIK PERTAMBANGAN",
              "AGRIBISNIS",
              "AGROTEKNOLOGI",
              "PETERNAKAN",
              "BUDIDAYA PERIKANAN",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN KIMIA",
              "TEKNOLOGI HASIL PERTANIAN",
              "KIMIA",
              "ILMU KOMPUTER"
              ],
              "SOSHUM": [
              "ILMU HUKUM",
              "ADMINISTRASI NEGARA",
              "PENDIDIKAN BAHASA INDONESIA",
              "PENDIDIKAN BAHASA INGGRIS",
              "PENDIDIKAN GEOGRAFI",
              "AKUNTANSI",
              "PENDIDIKAN PANCASILA DAN KEWARGANEGARAAN",
              "MANAJEMEN",
              "ILMU KEOLAHRAGAAN",
              "EKONOMI PEMBANGUNAN"
              ]
          },
          "UNIVERSITAS PATTIMURA": {
              "SAINTEK": [
              "PEND. BIOLOGI",
              "PEND. FISIKA",
              "PEND. MATEMATIKA",
              "PEND. KIMIA",
              "AGRIBISNIS",
              "AGROTEKNOLOGI",
              "TEK. HASIL PERTANIAN",
              "KEHUTANAN",
              "PETERNAKAN",
              "TEKNIK PERKAPALAN",
              "TEKNIK SISTIM PERKAPALAN",
              "TEKNIK MESIN",
              "TEKNIK INDUSTRI",
              "MAJEMEN SUMB.PERAIRAN",
              "IL. KELAUTAN",
              "BUDIDAYA PERAIRAN",
              "PEMANFAATAN SD PERIKANAN",
              "TEK. HASIL PERIKANAN",
              "AGROBISNIS PERIKANAN",
              "MATEMATIKA",
              "FISIKA",
              "KIMIA",
              "BIOLOGI",
              "PENDIDIKAN DOKTER",
              "PERENCANAAN WILAYAH DAN KOTA",
              "TEKNIK SIPIL",
              "PEMULIAAN TANAMAN",
              "ILMU TANAH",
              "TEKNIK GEOLOGI",
              "STATISTIKA",
              "PETERNAKAN (PSDKU KAB. MBD)",
              "PENDIDIKAN MATEMATIKA (PSDKU KAB. MBD)",
              "PENDIDIKAN MATEMATIKA (PSDKU KAB. ARU)"
              ],
              "SOSHUM": [
              "IL. HUKUM",
              "IL. ADM. NEGARA",
              "IL. PEMERINTAHAN",
              "SOSIOLOGI",
              "MANAJEMEN",
              "EKONOMI PEMBANGUNAN",
              "AKUNTANSI",
              "PENDIDIKAN SEJARAH",
              "PENDIDIKAN GEOGRAFI",
              "PENDIDIKAN EKONOMI",
              "PPKN",
              "PEND. BAHASA INDONESIA",
              "PEND. BAHASA INGGRIS",
              "PEND. BAHASA JERMAN",
              "PENJASKESREK",
              "BIMBINGAN KONSELING",
              "PEND. LUAR SEKOLAH",
              "PGSD SX",
              "ILMU KOMUNIKASI",
              "PENYULUHAN PERTANIAN",
              "ILMU HUKUM (PSDKU KAB. MBD)",
              "AKUNTANSI (PSDKU KAB. MBD)",
              "PEND. GURU SEKOLAH DASAR (PSDKU KAB. MBD)",
              "PEND. BAHASA INGGRIS (PSDKU KAB. MBD)",
              "ILMU HUKUM (PSDKU KAB. ARU)",
              "AKUNTANSI (PSDKU KAB. ARU)",
              "PEND. GURU SEKOLAH DASAR (PSDKU KAB. ARU)",
              "PEND. BAHASA INGGRIS (PSDKU KAB. ARU)",
              "PEND. JASMANI, KESEHATAN, DAN REKREASI (PSDKU KAB. ARU)"
              ]
          },
          "UNIVERSITAS KHAIRUN": {
              "SAINTEK": [
              "TEKNIK SIPIL",
              "TEKNIK MESIN",
              "TEKNIK ELEKTRO",
              "ARSITEKTUR",
              "TEKNOLOGI PERTANIAN",
              "PETERNAKAN",
              "MANAJEMEN SUMBERDAYA PERAIRAN",
              "ILMU KELAUTAN",
              "PEMANFAATAN SUMBERDAYA PERAIRAN",
              "BUDIDAYA PERAIRAN",
              "PEND. MATEMATIKA",
              "PEND. BIOLOGI",
              "PEND. FISIKA",
              "PEND. KIMIA",
              "AGROTEKNOLOGI",
              "TEKNIK INFORMATIKA",
              "KEHUTANAN",
              "TEKNIK PERTAMBANGAN",
              "AGRIBISNIS",
              "PENDIDIKAN DOKTER",
              "ILMU TANAH"
              ],
              "SOSHUM": [
              "ILMU HUKUM",
              "EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "ILMU SEJARAH",
              "SASTRA INDONESIA",
              "SASTRA INGGRIS",
              "PPKN",
              "PEND. BAHASA INDONESIA",
              "PEND. BAHASA INGGRIS",
              "AKUNTANSI",
              "PEND. GEOGRAFI",
              "PGSD SX",
              "ANTROPOLOGI SOSIAL",
              "PG PAUD"
              ]
          },
          "UNIVERSITAS CENDERAWASIH": {
              "SAINTEK": [
              "MATEMATIKA",
              "BIOLOGI",
              "KIMIA",
              "FISIKA",
              "ILMU KESEHATAN MASYARAKAT",
              "PEND. MATEMATIKA",
              "PEND. BIOLOGI",
              "PEND. KIMIA",
              "PEND. FISIKA",
              "TEKNIK SIPIL",
              "TEKNIK ELEKTRO",
              "PENDIDIKAN DOKTER",
              "ILMU KEPERAWATAN",
              "TEKNIK MESIN",
              "TEKNIK PERTAMBANGAN",
              "ILMU KELAUTAN",
              "FARMASI",
              "SISTEM INFORMASI",
              "TEKNIK GEOFISIKA",
              "PERENCANAAN WILAYAH DAN KOTA/PLANOLOGI",
              "ILMU KEOLAHRAGAAN",
              "ILMU PERIKANAN",
              "STATISTIKA"
              ],
              "SOSHUM": [
              "ILMU EKONOMI",
              "ILMU ADMINISTRASI NEGARA",
              "ANTROPOLOGI SOSIAL",
              "ILMU HUKUM",
              "MANAJEMEN",
              "ILMU KESEJAHTERAAN SOSIAL",
              "PEND. PANCASILA & KEWARGANEG.",
              "AKUNTANSI",
              "ILMU PEMERINTAHAN",
              "BIMBINGAN KONSELING",
              "PEND. GEOGRAFI",
              "PEND. SEJARAH",
              "PEND. BHS. SASTRA IND. & DAERAH",
              "PEND. BAHASA INGGRIS",
              "HUBUNGAN INTERNASIONAL",
              "PENDIDIKAN GURU SEKOLAH DASAR",
              "PENDIDKAN JASMANI KESEHATAN REKREASI",
              "PG PAUD",
              "ILMU PERPUSTAKAAN",
              "MANAJEMEN ADMINISTRASI PERKANTORAN  "
              ]
          },
          "UNIVERSITAS MUSAMUS MERAUKE": {
              "SAINTEK": [
              "TEKNIK ELEKTRO",
              "TEKNIK MESIN",
              "TEKNIK SIPIL",
              "ARSITEKTUR",
              "KETEKNIKAN PERTANIAN",
              "AGRIBISNIS",
              "AGROTEKNOLOGI",
              "PETERNAKAN",
              "MANAJEMEN SUMBERDAYA PERAIRAN",
              "TEKNIK INFORMATIKA",
              "SISTEM INFORMASI",
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN FISIKA",
              "PENDIDIKAN KIMIA"
              ],
              "SOSHUM": [
              "EKONOMI PEMBANGUNAN",
              "MANAJEMEN",
              "AKUNTANSI",
              "ILMU ADMINISTRASI NEGARA",
              "PENDIDIKAN JASMANI, KESEHATAN DAN REKREASI",
              "PENDIDIKAN BAHASA DAN SASTRA INDONESIA",
              "PENDIDIKAN BAHASA INGGRIS",
              "PENDIDIKAN GURU SEKOLAH DASAR",
              "PENDIDIKAN GURU PENDIDIKAN ANAK USIA DINI",
              "ILMU HUKUM",
              "SASTRA INGGRIS"
              ]
          },
          "ISBI TANAH PAPUA": {
              "SOSHUM": [
              "DESAIN KOMUNIKASI VISUAL",
              "SENI RUPA MURNI",
              "SENI KRIYA",
              "SENI MUSIK",
              "SENI TARI"
              ]
          },
          "UNIVERSITAS PAPUA": {
              "SAINTEK": [
              "TEKNOLOGI HASIL PERTANIAN",
              "MANAJEMEN SUMBERDAYA PERAIRAN",
              "ILMU KELAUTAN",
              "MATEMATIKA",
              "FISIKA",
              "BIOLOGI",
              "KIMIA",
              "AGRIBISNIS",
              "AGROTEKNOLOGI",
              "PETERNAKAN",
              "KEHUTANAN",
              "TEKNIK INFORMATIKA",
              "TEKNIK PERTAMBANGAN",
              "TEKNIK ELEKTRO",
              "PENDIDIKAN BIOLOGI",
              "PENDIDIKAN MATEMATIKA",
              "PENDIDIKAN KIMIA",
              "TEKNIK GEOLOGI",
              "PENDIDIKAN FISIKA",
              "ILMU TANAH",
              "NUTRISI DAN TEKNOLOGI PAKAN TERNAK",
              "TEKNIK PERTANIAN DAN BIOSISTEM",
              "TEKNIK SIPIL"
              ],
              "SOSHUM": [
              "EKONOMI PEMBANGUNAN",
              "SASTRA INGGRIS",
              "ANTROPOLOGI",
              "MANAJEMEN",
              "AKUNTANSI",
              "PENDIDIKAN BAHASA INDONESIA",
              "PENDIDIKAN BAHASA INGGRIS",
              "PENDIDIKAN SASTRA INDONESIA"
              ]
          }
      }

      window.onload = function () {
          var provinsi = document.getElementById("provinsiSel"),
              kabkota = document.getElementById("kabkotaSel"),
              keckel = document.getElementById("keckelSel");
          for (var varPROV in dataObject) {
              provinsi.options[provinsi.options.length] = new Option(varPROV, varPROV);
          }
          provinsi.onchange = function () {
              kabkota.length = 1; // remove all options bar first
              keckel.length = 1; // remove all options bar first
              if (this.selectedIndex < 1) return; // done   
              for (var varKABKOTA in dataObject[this.value]) {
                  kabkota.options[kabkota.options.length] = new Option(varKABKOTA, varKABKOTA);
              }
          }
          provinsi.onchange(); // reset in case page is reloaded
          kabkota.onchange = function () {
              keckel.length = 1; // remove all options bar first
              if (this.selectedIndex < 1) return; // done   
              var varKECKEL = dataObject[provinsi.value][this.value];
              for (var i = 0; i < varKECKEL.length; i++) {
                  keckel.options[keckel.options.length] = new Option(varKECKEL[i], varKECKEL[i]);
              }
          }

          ///

          var kodeptn = document.getElementById("kodeptn"),
              jurusan = document.getElementById("jurusan"),
              prodi = document.getElementById("prodi");
          for (var varKODEPTN in dataPTN) {
              kodeptn.options[kodeptn.options.length] = new Option(varKODEPTN, varKODEPTN);
          }
          kodeptn.onchange = function () {
              jurusan.length = 1; // remove all options bar first
              prodi.length = 1; // remove all options bar first
              if (this.selectedIndex < 1) return; // done   
              for (var varJURUSAN in dataPTN[this.value]) {
                  jurusan.options[jurusan.options.length] = new Option(varJURUSAN, varJURUSAN);
              }
          }
          kodeptn.onchange(); // reset in case page is reloaded
          jurusan.onchange = function () {
              prodi.length = 1; // remove all options bar first
              if (this.selectedIndex < 1) return; // done   
              var varPRODI = dataPTN[kodeptn.value][this.value];
              for (var i = 0; i < varPRODI.length; i++) {
                  prodi.options[prodi.options.length] = new Option(varPRODI[i], varPRODI[i]);
              }
          }
          
      }
    </script>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic");/*!
 * bootswatch v3.3.7
 * Homepage: http://bootswatch.com
 * Copyright 2012-2016 Thomas Park
 * Licensed under MIT
 * Based on Bootstrap
*//*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 *//*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:2em;margin:0.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-appearance:textfield;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */@media print{*,*:before,*:after{background:transparent !important;color:#000 !important;-webkit-box-shadow:none !important;box-shadow:none !important;text-shadow:none !important}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}abbr[title]:after{content:" (" attr(title) ")"}a[href^="#"]:after,a[href^="javascript:"]:after{content:""}pre,blockquote{border:1px solid #999;page-break-inside:avoid}thead{display:table-header-group}tr,img{page-break-inside:avoid}img{max-width:100% !important}p,h2,h3{orphans:3;widows:3}h2,h3{page-break-after:avoid}.navbar{display:none}.btn>.caret,.dropup>.btn>.caret{border-top-color:#000 !important}.label{border:1px solid #000}.table{border-collapse:collapse !important}.table td,.table th{background-color:#fff !important}.table-bordered th,.table-bordered td{border:1px solid #ddd !important}}@font-face{font-family:'Glyphicons Halflings';src:url('../fonts/glyphicons-halflings-regular.eot');src:url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'),url('../fonts/glyphicons-halflings-regular.woff2') format('woff2'),url('../fonts/glyphicons-halflings-regular.woff') format('woff'),url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'),url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg')}.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';font-style:normal;font-weight:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.glyphicon-asterisk:before{content:"\002a"}.glyphicon-plus:before{content:"\002b"}.glyphicon-euro:before,.glyphicon-eur:before{content:"\20ac"}.glyphicon-minus:before{content:"\2212"}.glyphicon-cloud:before{content:"\2601"}.glyphicon-envelope:before{content:"\2709"}.glyphicon-pencil:before{content:"\270f"}.glyphicon-glass:before{content:"\e001"}.glyphicon-music:before{content:"\e002"}.glyphicon-search:before{content:"\e003"}.glyphicon-heart:before{content:"\e005"}.glyphicon-star:before{content:"\e006"}.glyphicon-star-empty:before{content:"\e007"}.glyphicon-user:before{content:"\e008"}.glyphicon-film:before{content:"\e009"}.glyphicon-th-large:before{content:"\e010"}.glyphicon-th:before{content:"\e011"}.glyphicon-th-list:before{content:"\e012"}.glyphicon-ok:before{content:"\e013"}.glyphicon-remove:before{content:"\e014"}.glyphicon-zoom-in:before{content:"\e015"}.glyphicon-zoom-out:before{content:"\e016"}.glyphicon-off:before{content:"\e017"}.glyphicon-signal:before{content:"\e018"}.glyphicon-cog:before{content:"\e019"}.glyphicon-trash:before{content:"\e020"}.glyphicon-home:before{content:"\e021"}.glyphicon-file:before{content:"\e022"}.glyphicon-time:before{content:"\e023"}.glyphicon-road:before{content:"\e024"}.glyphicon-download-alt:before{content:"\e025"}.glyphicon-download:before{content:"\e026"}.glyphicon-upload:before{content:"\e027"}.glyphicon-inbox:before{content:"\e028"}.glyphicon-play-circle:before{content:"\e029"}.glyphicon-repeat:before{content:"\e030"}.glyphicon-refresh:before{content:"\e031"}.glyphicon-list-alt:before{content:"\e032"}.glyphicon-lock:before{content:"\e033"}.glyphicon-flag:before{content:"\e034"}.glyphicon-headphones:before{content:"\e035"}.glyphicon-volume-off:before{content:"\e036"}.glyphicon-volume-down:before{content:"\e037"}.glyphicon-volume-up:before{content:"\e038"}.glyphicon-qrcode:before{content:"\e039"}.glyphicon-barcode:before{content:"\e040"}.glyphicon-tag:before{content:"\e041"}.glyphicon-tags:before{content:"\e042"}.glyphicon-book:before{content:"\e043"}.glyphicon-bookmark:before{content:"\e044"}.glyphicon-print:before{content:"\e045"}.glyphicon-camera:before{content:"\e046"}.glyphicon-font:before{content:"\e047"}.glyphicon-bold:before{content:"\e048"}.glyphicon-italic:before{content:"\e049"}.glyphicon-text-height:before{content:"\e050"}.glyphicon-text-width:before{content:"\e051"}.glyphicon-align-left:before{content:"\e052"}.glyphicon-align-center:before{content:"\e053"}.glyphicon-align-right:before{content:"\e054"}.glyphicon-align-justify:before{content:"\e055"}.glyphicon-list:before{content:"\e056"}.glyphicon-indent-left:before{content:"\e057"}.glyphicon-indent-right:before{content:"\e058"}.glyphicon-facetime-video:before{content:"\e059"}.glyphicon-picture:before{content:"\e060"}.glyphicon-map-marker:before{content:"\e062"}.glyphicon-adjust:before{content:"\e063"}.glyphicon-tint:before{content:"\e064"}.glyphicon-edit:before{content:"\e065"}.glyphicon-share:before{content:"\e066"}.glyphicon-check:before{content:"\e067"}.glyphicon-move:before{content:"\e068"}.glyphicon-step-backward:before{content:"\e069"}.glyphicon-fast-backward:before{content:"\e070"}.glyphicon-backward:before{content:"\e071"}.glyphicon-play:before{content:"\e072"}.glyphicon-pause:before{content:"\e073"}.glyphicon-stop:before{content:"\e074"}.glyphicon-forward:before{content:"\e075"}.glyphicon-fast-forward:before{content:"\e076"}.glyphicon-step-forward:before{content:"\e077"}.glyphicon-eject:before{content:"\e078"}.glyphicon-chevron-left:before{content:"\e079"}.glyphicon-chevron-right:before{content:"\e080"}.glyphicon-plus-sign:before{content:"\e081"}.glyphicon-minus-sign:before{content:"\e082"}.glyphicon-remove-sign:before{content:"\e083"}.glyphicon-ok-sign:before{content:"\e084"}.glyphicon-question-sign:before{content:"\e085"}.glyphicon-info-sign:before{content:"\e086"}.glyphicon-screenshot:before{content:"\e087"}.glyphicon-remove-circle:before{content:"\e088"}.glyphicon-ok-circle:before{content:"\e089"}.glyphicon-ban-circle:before{content:"\e090"}.glyphicon-arrow-left:before{content:"\e091"}.glyphicon-arrow-right:before{content:"\e092"}.glyphicon-arrow-up:before{content:"\e093"}.glyphicon-arrow-down:before{content:"\e094"}.glyphicon-share-alt:before{content:"\e095"}.glyphicon-resize-full:before{content:"\e096"}.glyphicon-resize-small:before{content:"\e097"}.glyphicon-exclamation-sign:before{content:"\e101"}.glyphicon-gift:before{content:"\e102"}.glyphicon-leaf:before{content:"\e103"}.glyphicon-fire:before{content:"\e104"}.glyphicon-eye-open:before{content:"\e105"}.glyphicon-eye-close:before{content:"\e106"}.glyphicon-warning-sign:before{content:"\e107"}.glyphicon-plane:before{content:"\e108"}.glyphicon-calendar:before{content:"\e109"}.glyphicon-random:before{content:"\e110"}.glyphicon-comment:before{content:"\e111"}.glyphicon-magnet:before{content:"\e112"}.glyphicon-chevron-up:before{content:"\e113"}.glyphicon-chevron-down:before{content:"\e114"}.glyphicon-retweet:before{content:"\e115"}.glyphicon-shopping-cart:before{content:"\e116"}.glyphicon-folder-close:before{content:"\e117"}.glyphicon-folder-open:before{content:"\e118"}.glyphicon-resize-vertical:before{content:"\e119"}.glyphicon-resize-horizontal:before{content:"\e120"}.glyphicon-hdd:before{content:"\e121"}.glyphicon-bullhorn:before{content:"\e122"}.glyphicon-bell:before{content:"\e123"}.glyphicon-certificate:before{content:"\e124"}.glyphicon-thumbs-up:before{content:"\e125"}.glyphicon-thumbs-down:before{content:"\e126"}.glyphicon-hand-right:before{content:"\e127"}.glyphicon-hand-left:before{content:"\e128"}.glyphicon-hand-up:before{content:"\e129"}.glyphicon-hand-down:before{content:"\e130"}.glyphicon-circle-arrow-right:before{content:"\e131"}.glyphicon-circle-arrow-left:before{content:"\e132"}.glyphicon-circle-arrow-up:before{content:"\e133"}.glyphicon-circle-arrow-down:before{content:"\e134"}.glyphicon-globe:before{content:"\e135"}.glyphicon-wrench:before{content:"\e136"}.glyphicon-tasks:before{content:"\e137"}.glyphicon-filter:before{content:"\e138"}.glyphicon-briefcase:before{content:"\e139"}.glyphicon-fullscreen:before{content:"\e140"}.glyphicon-dashboard:before{content:"\e141"}.glyphicon-paperclip:before{content:"\e142"}.glyphicon-heart-empty:before{content:"\e143"}.glyphicon-link:before{content:"\e144"}.glyphicon-phone:before{content:"\e145"}.glyphicon-pushpin:before{content:"\e146"}.glyphicon-usd:before{content:"\e148"}.glyphicon-gbp:before{content:"\e149"}.glyphicon-sort:before{content:"\e150"}.glyphicon-sort-by-alphabet:before{content:"\e151"}.glyphicon-sort-by-alphabet-alt:before{content:"\e152"}.glyphicon-sort-by-order:before{content:"\e153"}.glyphicon-sort-by-order-alt:before{content:"\e154"}.glyphicon-sort-by-attributes:before{content:"\e155"}.glyphicon-sort-by-attributes-alt:before{content:"\e156"}.glyphicon-unchecked:before{content:"\e157"}.glyphicon-expand:before{content:"\e158"}.glyphicon-collapse-down:before{content:"\e159"}.glyphicon-collapse-up:before{content:"\e160"}.glyphicon-log-in:before{content:"\e161"}.glyphicon-flash:before{content:"\e162"}.glyphicon-log-out:before{content:"\e163"}.glyphicon-new-window:before{content:"\e164"}.glyphicon-record:before{content:"\e165"}.glyphicon-save:before{content:"\e166"}.glyphicon-open:before{content:"\e167"}.glyphicon-saved:before{content:"\e168"}.glyphicon-import:before{content:"\e169"}.glyphicon-export:before{content:"\e170"}.glyphicon-send:before{content:"\e171"}.glyphicon-floppy-disk:before{content:"\e172"}.glyphicon-floppy-saved:before{content:"\e173"}.glyphicon-floppy-remove:before{content:"\e174"}.glyphicon-floppy-save:before{content:"\e175"}.glyphicon-floppy-open:before{content:"\e176"}.glyphicon-credit-card:before{content:"\e177"}.glyphicon-transfer:before{content:"\e178"}.glyphicon-cutlery:before{content:"\e179"}.glyphicon-header:before{content:"\e180"}.glyphicon-compressed:before{content:"\e181"}.glyphicon-earphone:before{content:"\e182"}.glyphicon-phone-alt:before{content:"\e183"}.glyphicon-tower:before{content:"\e184"}.glyphicon-stats:before{content:"\e185"}.glyphicon-sd-video:before{content:"\e186"}.glyphicon-hd-video:before{content:"\e187"}.glyphicon-subtitles:before{content:"\e188"}.glyphicon-sound-stereo:before{content:"\e189"}.glyphicon-sound-dolby:before{content:"\e190"}.glyphicon-sound-5-1:before{content:"\e191"}.glyphicon-sound-6-1:before{content:"\e192"}.glyphicon-sound-7-1:before{content:"\e193"}.glyphicon-copyright-mark:before{content:"\e194"}.glyphicon-registration-mark:before{content:"\e195"}.glyphicon-cloud-download:before{content:"\e197"}.glyphicon-cloud-upload:before{content:"\e198"}.glyphicon-tree-conifer:before{content:"\e199"}.glyphicon-tree-deciduous:before{content:"\e200"}.glyphicon-cd:before{content:"\e201"}.glyphicon-save-file:before{content:"\e202"}.glyphicon-open-file:before{content:"\e203"}.glyphicon-level-up:before{content:"\e204"}.glyphicon-copy:before{content:"\e205"}.glyphicon-paste:before{content:"\e206"}.glyphicon-alert:before{content:"\e209"}.glyphicon-equalizer:before{content:"\e210"}.glyphicon-king:before{content:"\e211"}.glyphicon-queen:before{content:"\e212"}.glyphicon-pawn:before{content:"\e213"}.glyphicon-bishop:before{content:"\e214"}.glyphicon-knight:before{content:"\e215"}.glyphicon-baby-formula:before{content:"\e216"}.glyphicon-tent:before{content:"\26fa"}.glyphicon-blackboard:before{content:"\e218"}.glyphicon-bed:before{content:"\e219"}.glyphicon-apple:before{content:"\f8ff"}.glyphicon-erase:before{content:"\e221"}.glyphicon-hourglass:before{content:"\231b"}.glyphicon-lamp:before{content:"\e223"}.glyphicon-duplicate:before{content:"\e224"}.glyphicon-piggy-bank:before{content:"\e225"}.glyphicon-scissors:before{content:"\e226"}.glyphicon-bitcoin:before{content:"\e227"}.glyphicon-btc:before{content:"\e227"}.glyphicon-xbt:before{content:"\e227"}.glyphicon-yen:before{content:"\00a5"}.glyphicon-jpy:before{content:"\00a5"}.glyphicon-ruble:before{content:"\20bd"}.glyphicon-rub:before{content:"\20bd"}.glyphicon-scale:before{content:"\e230"}.glyphicon-ice-lolly:before{content:"\e231"}.glyphicon-ice-lolly-tasted:before{content:"\e232"}.glyphicon-education:before{content:"\e233"}.glyphicon-option-horizontal:before{content:"\e234"}.glyphicon-option-vertical:before{content:"\e235"}.glyphicon-menu-hamburger:before{content:"\e236"}.glyphicon-modal-window:before{content:"\e237"}.glyphicon-oil:before{content:"\e238"}.glyphicon-grain:before{content:"\e239"}.glyphicon-sunglasses:before{content:"\e240"}.glyphicon-text-size:before{content:"\e241"}.glyphicon-text-color:before{content:"\e242"}.glyphicon-text-background:before{content:"\e243"}.glyphicon-object-align-top:before{content:"\e244"}.glyphicon-object-align-bottom:before{content:"\e245"}.glyphicon-object-align-horizontal:before{content:"\e246"}.glyphicon-object-align-left:before{content:"\e247"}.glyphicon-object-align-vertical:before{content:"\e248"}.glyphicon-object-align-right:before{content:"\e249"}.glyphicon-triangle-right:before{content:"\e250"}.glyphicon-triangle-left:before{content:"\e251"}.glyphicon-triangle-bottom:before{content:"\e252"}.glyphicon-triangle-top:before{content:"\e253"}.glyphicon-console:before{content:"\e254"}.glyphicon-superscript:before{content:"\e255"}.glyphicon-subscript:before{content:"\e256"}.glyphicon-menu-left:before{content:"\e257"}.glyphicon-menu-right:before{content:"\e258"}.glyphicon-menu-down:before{content:"\e259"}.glyphicon-menu-up:before{content:"\e260"}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#555555;background-color:#ffffff}input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#158cba;text-decoration:none}a:hover,a:focus{color:#158cba;text-decoration:underline}a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}.img-responsive,.thumbnail>img,.thumbnail a>img,.carousel-inner>.item>img,.carousel-inner>.item>a>img{display:block;max-width:100%;height:auto}.img-rounded{border-radius:5px}.img-thumbnail{padding:4px;line-height:1.42857143;background-color:#ffffff;border:1px solid #eeeeee;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out;display:inline-block;max-width:100%;height:auto}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eeeeee}.sr-only{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}[role="button"]{cursor:pointer}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{font-family:inherit;font-weight:400;line-height:1.1;color:#333333}h1 small,h2 small,h3 small,h4 small,h5 small,h6 small,.h1 small,.h2 small,.h3 small,.h4 small,.h5 small,.h6 small,h1 .small,h2 .small,h3 .small,h4 .small,h5 .small,h6 .small,.h1 .small,.h2 .small,.h3 .small,.h4 .small,.h5 .small,.h6 .small{font-weight:normal;line-height:1;color:#999999}h1,.h1,h2,.h2,h3,.h3{margin-top:20px;margin-bottom:10px}h1 small,.h1 small,h2 small,.h2 small,h3 small,.h3 small,h1 .small,.h1 .small,h2 .small,.h2 .small,h3 .small,.h3 .small{font-size:65%}h4,.h4,h5,.h5,h6,.h6{margin-top:10px;margin-bottom:10px}h4 small,.h4 small,h5 small,.h5 small,h6 small,.h6 small,h4 .small,.h4 .small,h5 .small,.h5 .small,h6 .small,.h6 .small{font-size:75%}h1,.h1{font-size:36px}h2,.h2{font-size:30px}h3,.h3{font-size:24px}h4,.h4{font-size:18px}h5,.h5{font-size:14px}h6,.h6{font-size:12px}p{margin:0 0 10px}.lead{margin-bottom:20px;font-size:16px;font-weight:300;line-height:1.4}@media (min-width:768px){.lead{font-size:21px}}small,.small{font-size:85%}mark,.mark{background-color:#ff851b;padding:.2em}.text-left{text-align:left}.text-right{text-align:right}.text-center{text-align:center}.text-justify{text-align:justify}.text-nowrap{white-space:nowrap}.text-lowercase{text-transform:lowercase}.text-uppercase{text-transform:uppercase}.text-capitalize{text-transform:capitalize}.text-muted{color:#999999}.text-primary{color:#158cba}a.text-primary:hover,a.text-primary:focus{color:#106a8c}.text-success{color:#ffffff}a.text-success:hover,a.text-success:focus{color:#e6e6e6}.text-info{color:#ffffff}a.text-info:hover,a.text-info:focus{color:#e6e6e6}.text-warning{color:#ffffff}a.text-warning:hover,a.text-warning:focus{color:#e6e6e6}.text-danger{color:#ffffff}a.text-danger:hover,a.text-danger:focus{color:#e6e6e6}.bg-primary{color:#fff;background-color:#158cba}a.bg-primary:hover,a.bg-primary:focus{background-color:#106a8c}.bg-success{background-color:#28b62c}a.bg-success:hover,a.bg-success:focus{background-color:#1f8c22}.bg-info{background-color:#75caeb}a.bg-info:hover,a.bg-info:focus{background-color:#48b9e5}.bg-warning{background-color:#ff851b}a.bg-warning:hover,a.bg-warning:focus{background-color:#e76b00}.bg-danger{background-color:#ff4136}a.bg-danger:hover,a.bg-danger:focus{background-color:#ff1103}.page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eeeeee}ul,ol{margin-top:0;margin-bottom:10px}ul ul,ol ul,ul ol,ol ol{margin-bottom:0}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;list-style:none;margin-left:-5px}.list-inline>li{display:inline-block;padding-left:5px;padding-right:5px}dl{margin-top:0;margin-bottom:20px}dt,dd{line-height:1.42857143}dt{font-weight:bold}dd{margin-left:0}@media (min-width:768px){.dl-horizontal dt{float:left;width:160px;clear:left;text-align:right;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.dl-horizontal dd{margin-left:180px}}abbr[title],abbr[data-original-title]{cursor:help;border-bottom:1px dotted #999999}.initialism{font-size:90%;text-transform:uppercase}blockquote{padding:10px 20px;margin:0 0 20px;font-size:17.5px;border-left:5px solid #eeeeee}blockquote p:last-child,blockquote ul:last-child,blockquote ol:last-child{margin-bottom:0}blockquote footer,blockquote small,blockquote .small{display:block;font-size:80%;line-height:1.42857143;color:#999999}blockquote footer:before,blockquote small:before,blockquote .small:before{content:'\2014 \00A0'}.blockquote-reverse,blockquote.pull-right{padding-right:15px;padding-left:0;border-right:5px solid #eeeeee;border-left:0;text-align:right}.blockquote-reverse footer:before,blockquote.pull-right footer:before,.blockquote-reverse small:before,blockquote.pull-right small:before,.blockquote-reverse .small:before,blockquote.pull-right .small:before{content:''}.blockquote-reverse footer:after,blockquote.pull-right footer:after,.blockquote-reverse small:after,blockquote.pull-right small:after,.blockquote-reverse .small:after,blockquote.pull-right .small:after{content:'\00A0 \2014'}address{margin-bottom:20px;font-style:normal;line-height:1.42857143}code,kbd,pre,samp{font-family:Menlo,Monaco,Consolas,"Courier New",monospace}code{padding:2px 4px;font-size:90%;color:#c7254e;background-color:#f9f2f4;border-radius:4px}kbd{padding:2px 4px;font-size:90%;color:#ffffff;background-color:#333333;border-radius:2px;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,0.25);box-shadow:inset 0 -1px 0 rgba(0,0,0,0.25)}kbd kbd{padding:0;font-size:100%;font-weight:bold;-webkit-box-shadow:none;box-shadow:none}pre{display:block;padding:9.5px;margin:0 0 10px;font-size:13px;line-height:1.42857143;word-break:break-all;word-wrap:break-word;color:#333333;background-color:#f5f5f5;border:1px solid #cccccc;border-radius:4px}pre code{padding:0;font-size:inherit;color:inherit;white-space:pre-wrap;background-color:transparent;border-radius:0}.pre-scrollable{max-height:340px;overflow-y:scroll}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.container-fluid{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.row{margin-left:-15px;margin-right:-15px}.col-xs-1,.col-sm-1,.col-md-1,.col-lg-1,.col-xs-2,.col-sm-2,.col-md-2,.col-lg-2,.col-xs-3,.col-sm-3,.col-md-3,.col-lg-3,.col-xs-4,.col-sm-4,.col-md-4,.col-lg-4,.col-xs-5,.col-sm-5,.col-md-5,.col-lg-5,.col-xs-6,.col-sm-6,.col-md-6,.col-lg-6,.col-xs-7,.col-sm-7,.col-md-7,.col-lg-7,.col-xs-8,.col-sm-8,.col-md-8,.col-lg-8,.col-xs-9,.col-sm-9,.col-md-9,.col-lg-9,.col-xs-10,.col-sm-10,.col-md-10,.col-lg-10,.col-xs-11,.col-sm-11,.col-md-11,.col-lg-11,.col-xs-12,.col-sm-12,.col-md-12,.col-lg-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-xs-1,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9,.col-xs-10,.col-xs-11,.col-xs-12{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0%}@media (min-width:768px){.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0%}}@media (min-width:992px){.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0%}}@media (min-width:1200px){.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0%}}table{background-color:transparent}caption{padding-top:8px;padding-bottom:8px;color:#999999;text-align:left}th{text-align:left}.table{width:100%;max-width:100%;margin-bottom:20px}.table>thead>tr>th,.table>tbody>tr>th,.table>tfoot>tr>th,.table>thead>tr>td,.table>tbody>tr>td,.table>tfoot>tr>td{padding:8px;line-height:1.42857143;vertical-align:top;border-top:1px solid #eeeeee}.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #eeeeee}.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>th,.table>caption+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>td,.table>thead:first-child>tr:first-child>td{border-top:0}.table>tbody+tbody{border-top:2px solid #eeeeee}.table .table{background-color:#ffffff}.table-condensed>thead>tr>th,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>tbody>tr>td,.table-condensed>tfoot>tr>td{padding:5px}.table-bordered{border:1px solid #eeeeee}.table-bordered>thead>tr>th,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>tbody>tr>td,.table-bordered>tfoot>tr>td{border:1px solid #eeeeee}.table-bordered>thead>tr>th,.table-bordered>thead>tr>td{border-bottom-width:2px}.table-striped>tbody>tr:nth-of-type(odd){background-color:#f9f9f9}.table-hover>tbody>tr:hover{background-color:#f5f5f5}table col[class*="col-"]{position:static;float:none;display:table-column}table td[class*="col-"],table th[class*="col-"]{position:static;float:none;display:table-cell}.table>thead>tr>td.active,.table>tbody>tr>td.active,.table>tfoot>tr>td.active,.table>thead>tr>th.active,.table>tbody>tr>th.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>tbody>tr.active>td,.table>tfoot>tr.active>td,.table>thead>tr.active>th,.table>tbody>tr.active>th,.table>tfoot>tr.active>th{background-color:#f5f5f5}.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover,.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr.active:hover>th{background-color:#e8e8e8}.table>thead>tr>td.success,.table>tbody>tr>td.success,.table>tfoot>tr>td.success,.table>thead>tr>th.success,.table>tbody>tr>th.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>tbody>tr.success>td,.table>tfoot>tr.success>td,.table>thead>tr.success>th,.table>tbody>tr.success>th,.table>tfoot>tr.success>th{background-color:#28b62c}.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover,.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr.success:hover>th{background-color:#23a127}.table>thead>tr>td.info,.table>tbody>tr>td.info,.table>tfoot>tr>td.info,.table>thead>tr>th.info,.table>tbody>tr>th.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>tbody>tr.info>td,.table>tfoot>tr.info>td,.table>thead>tr.info>th,.table>tbody>tr.info>th,.table>tfoot>tr.info>th{background-color:#75caeb}.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover,.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr.info:hover>th{background-color:#5fc1e8}.table>thead>tr>td.warning,.table>tbody>tr>td.warning,.table>tfoot>tr>td.warning,.table>thead>tr>th.warning,.table>tbody>tr>th.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>tbody>tr.warning>td,.table>tfoot>tr.warning>td,.table>thead>tr.warning>th,.table>tbody>tr.warning>th,.table>tfoot>tr.warning>th{background-color:#ff851b}.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover,.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr.warning:hover>th{background-color:#ff7701}.table>thead>tr>td.danger,.table>tbody>tr>td.danger,.table>tfoot>tr>td.danger,.table>thead>tr>th.danger,.table>tbody>tr>th.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>tbody>tr.danger>td,.table>tfoot>tr.danger>td,.table>thead>tr.danger>th,.table>tbody>tr.danger>th,.table>tfoot>tr.danger>th{background-color:#ff4136}.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover,.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr.danger:hover>th{background-color:#ff291c}.table-responsive{overflow-x:auto;min-height:0.01%}@media screen and (max-width:767px){.table-responsive{width:100%;margin-bottom:15px;overflow-y:hidden;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #eeeeee}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>thead>tr>th,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tfoot>tr>td{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>thead>tr>th:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.table-responsive>.table-bordered>thead>tr>th:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>th,.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>td{border-bottom:0}}fieldset{padding:0;margin:0;border:0;min-width:0}legend{display:block;width:100%;padding:0;margin-bottom:20px;font-size:21px;line-height:inherit;color:#333333;border:0;border-bottom:1px solid #e5e5e5}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:bold}input[type="search"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}input[type="radio"],input[type="checkbox"]{margin:4px 0 0;margin-top:1px \9;line-height:normal}input[type="file"]{display:block}input[type="range"]{display:block;width:100%}select[multiple],select[size]{height:auto}input[type="file"]:focus,input[type="radio"]:focus,input[type="checkbox"]:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}output{display:block;padding-top:8px;font-size:14px;line-height:1.42857143;color:#555555}.form-control{display:block;width:100%;height:38px;padding:7px 12px;font-size:14px;line-height:1.42857143;color:#555555;background-color:#ffffff;background-image:none;border:1px solid #e7e7e7;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(102,175,233,0.6);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(102,175,233,0.6)}.form-control::-moz-placeholder{color:#999999;opacity:1}.form-control:-ms-input-placeholder{color:#999999}.form-control::-webkit-input-placeholder{color:#999999}.form-control::-ms-expand{border:0;background-color:transparent}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{background-color:#eeeeee;opacity:1}.form-control[disabled],fieldset[disabled] .form-control{cursor:not-allowed}textarea.form-control{height:auto}input[type="search"]{-webkit-appearance:none}@media screen and (-webkit-min-device-pixel-ratio:0){input[type="date"].form-control,input[type="time"].form-control,input[type="datetime-local"].form-control,input[type="month"].form-control{line-height:38px}input[type="date"].input-sm,input[type="time"].input-sm,input[type="datetime-local"].input-sm,input[type="month"].input-sm,.input-group-sm input[type="date"],.input-group-sm input[type="time"],.input-group-sm input[type="datetime-local"],.input-group-sm input[type="month"]{line-height:28px}input[type="date"].input-lg,input[type="time"].input-lg,input[type="datetime-local"].input-lg,input[type="month"].input-lg,.input-group-lg input[type="date"],.input-group-lg input[type="time"],.input-group-lg input[type="datetime-local"],.input-group-lg input[type="month"]{line-height:52px}}.form-group{margin-bottom:15px}.radio,.checkbox{position:relative;display:block;margin-top:10px;margin-bottom:10px}.radio label,.checkbox label{min-height:20px;padding-left:20px;margin-bottom:0;font-weight:normal;cursor:pointer}.radio input[type="radio"],.radio-inline input[type="radio"],.checkbox input[type="checkbox"],.checkbox-inline input[type="checkbox"]{position:absolute;margin-left:-20px;margin-top:4px \9}.radio+.radio,.checkbox+.checkbox{margin-top:-5px}.radio-inline,.checkbox-inline{position:relative;display:inline-block;padding-left:20px;margin-bottom:0;vertical-align:middle;font-weight:normal;cursor:pointer}.radio-inline+.radio-inline,.checkbox-inline+.checkbox-inline{margin-top:0;margin-left:10px}input[type="radio"][disabled],input[type="checkbox"][disabled],input[type="radio"].disabled,input[type="checkbox"].disabled,fieldset[disabled] input[type="radio"],fieldset[disabled] input[type="checkbox"]{cursor:not-allowed}.radio-inline.disabled,.checkbox-inline.disabled,fieldset[disabled] .radio-inline,fieldset[disabled] .checkbox-inline{cursor:not-allowed}.radio.disabled label,.checkbox.disabled label,fieldset[disabled] .radio label,fieldset[disabled] .checkbox label{cursor:not-allowed}.form-control-static{padding-top:8px;padding-bottom:8px;margin-bottom:0;min-height:34px}.form-control-static.input-lg,.form-control-static.input-sm{padding-left:0;padding-right:0}.input-sm{height:28px;padding:4px 10px;font-size:12px;line-height:1.5;border-radius:2px}select.input-sm{height:28px;line-height:28px}textarea.input-sm,select[multiple].input-sm{height:auto}.form-group-sm .form-control{height:28px;padding:4px 10px;font-size:12px;line-height:1.5;border-radius:2px}.form-group-sm select.form-control{height:28px;line-height:28px}.form-group-sm textarea.form-control,.form-group-sm select[multiple].form-control{height:auto}.form-group-sm .form-control-static{height:28px;min-height:32px;padding:5px 10px;font-size:12px;line-height:1.5}.input-lg{height:52px;padding:13px 16px;font-size:18px;line-height:1.3333333;border-radius:5px}select.input-lg{height:52px;line-height:52px}textarea.input-lg,select[multiple].input-lg{height:auto}.form-group-lg .form-control{height:52px;padding:13px 16px;font-size:18px;line-height:1.3333333;border-radius:5px}.form-group-lg select.form-control{height:52px;line-height:52px}.form-group-lg textarea.form-control,.form-group-lg select[multiple].form-control{height:auto}.form-group-lg .form-control-static{height:52px;min-height:38px;padding:14px 16px;font-size:18px;line-height:1.3333333}.has-feedback{position:relative}.has-feedback .form-control{padding-right:47.5px}.form-control-feedback{position:absolute;top:0;right:0;z-index:2;display:block;width:38px;height:38px;line-height:38px;text-align:center;pointer-events:none}.input-lg+.form-control-feedback,.input-group-lg+.form-control-feedback,.form-group-lg .form-control+.form-control-feedback{width:52px;height:52px;line-height:52px}.input-sm+.form-control-feedback,.input-group-sm+.form-control-feedback,.form-group-sm .form-control+.form-control-feedback{width:28px;height:28px;line-height:28px}.has-success .help-block,.has-success .control-label,.has-success .radio,.has-success .checkbox,.has-success .radio-inline,.has-success .checkbox-inline,.has-success.radio label,.has-success.checkbox label,.has-success.radio-inline label,.has-success.checkbox-inline label{color:#ffffff}.has-success .form-control{border-color:#ffffff;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-success .form-control:focus{border-color:#e6e6e6;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #fff;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #fff}.has-success .input-group-addon{color:#ffffff;border-color:#ffffff;background-color:#28b62c}.has-success .form-control-feedback{color:#ffffff}.has-warning .help-block,.has-warning .control-label,.has-warning .radio,.has-warning .checkbox,.has-warning .radio-inline,.has-warning .checkbox-inline,.has-warning.radio label,.has-warning.checkbox label,.has-warning.radio-inline label,.has-warning.checkbox-inline label{color:#ffffff}.has-warning .form-control{border-color:#ffffff;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-warning .form-control:focus{border-color:#e6e6e6;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #fff;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #fff}.has-warning .input-group-addon{color:#ffffff;border-color:#ffffff;background-color:#ff851b}.has-warning .form-control-feedback{color:#ffffff}.has-error .help-block,.has-error .control-label,.has-error .radio,.has-error .checkbox,.has-error .radio-inline,.has-error .checkbox-inline,.has-error.radio label,.has-error.checkbox label,.has-error.radio-inline label,.has-error.checkbox-inline label{color:#ffffff}.has-error .form-control{border-color:#ffffff;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075)}.has-error .form-control:focus{border-color:#e6e6e6;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #fff;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #fff}.has-error .input-group-addon{color:#ffffff;border-color:#ffffff;background-color:#ff4136}.has-error .form-control-feedback{color:#ffffff}.has-feedback label~.form-control-feedback{top:25px}.has-feedback label.sr-only~.form-control-feedback{top:0}.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#959595}@media (min-width:768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-static{display:inline-block}.form-inline .input-group{display:inline-table;vertical-align:middle}.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn,.form-inline .input-group .form-control{width:auto}.form-inline .input-group>.form-control{width:100%}.form-inline .control-label{margin-bottom:0;vertical-align:middle}.form-inline .radio,.form-inline .checkbox{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.form-inline .radio label,.form-inline .checkbox label{padding-left:0}.form-inline .radio input[type="radio"],.form-inline .checkbox input[type="checkbox"]{position:relative;margin-left:0}.form-inline .has-feedback .form-control-feedback{top:0}}.form-horizontal .radio,.form-horizontal .checkbox,.form-horizontal .radio-inline,.form-horizontal .checkbox-inline{margin-top:0;margin-bottom:0;padding-top:8px}.form-horizontal .radio,.form-horizontal .checkbox{min-height:28px}.form-horizontal .form-group{margin-left:-15px;margin-right:-15px}@media (min-width:768px){.form-horizontal .control-label{text-align:right;margin-bottom:0;padding-top:8px}}.form-horizontal .has-feedback .form-control-feedback{right:15px}@media (min-width:768px){.form-horizontal .form-group-lg .control-label{padding-top:14px;font-size:18px}}@media (min-width:768px){.form-horizontal .form-group-sm .control-label{padding-top:5px;font-size:12px}}.btn{display:inline-block;margin-bottom:0;font-weight:normal;text-align:center;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;background-image:none;border:1px solid transparent;white-space:nowrap;padding:7px 12px;font-size:14px;line-height:1.42857143;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.btn:focus,.btn:active:focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn.active.focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.btn:hover,.btn:focus,.btn.focus{color:#555555;text-decoration:none}.btn:active,.btn.active{outline:0;background-image:none;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);box-shadow:inset 0 3px 5px rgba(0,0,0,0.125)}.btn.disabled,.btn[disabled],fieldset[disabled] .btn{cursor:not-allowed;opacity:0.65;filter:alpha(opacity=65);-webkit-box-shadow:none;box-shadow:none}a.btn.disabled,fieldset[disabled] a.btn{pointer-events:none}.btn-default{color:#555555;background-color:#eeeeee;border-color:#e2e2e2}.btn-default:focus,.btn-default.focus{color:#555555;background-color:#d5d5d5;border-color:#a2a2a2}.btn-default:hover{color:#555555;background-color:#d5d5d5;border-color:#c3c3c3}.btn-default:active,.btn-default.active,.open>.dropdown-toggle.btn-default{color:#555555;background-color:#d5d5d5;border-color:#c3c3c3}.btn-default:active:hover,.btn-default.active:hover,.open>.dropdown-toggle.btn-default:hover,.btn-default:active:focus,.btn-default.active:focus,.open>.dropdown-toggle.btn-default:focus,.btn-default:active.focus,.btn-default.active.focus,.open>.dropdown-toggle.btn-default.focus{color:#555555;background-color:#c3c3c3;border-color:#a2a2a2}.btn-default:active,.btn-default.active,.open>.dropdown-toggle.btn-default{background-image:none}.btn-default.disabled:hover,.btn-default[disabled]:hover,fieldset[disabled] .btn-default:hover,.btn-default.disabled:focus,.btn-default[disabled]:focus,fieldset[disabled] .btn-default:focus,.btn-default.disabled.focus,.btn-default[disabled].focus,fieldset[disabled] .btn-default.focus{background-color:#eeeeee;border-color:#e2e2e2}.btn-default .badge{color:#eeeeee;background-color:#555555}.btn-primary{color:#ffffff;background-color:#158cba;border-color:#127ba3}.btn-primary:focus,.btn-primary.focus{color:#ffffff;background-color:#106a8c;border-color:#052531}.btn-primary:hover{color:#ffffff;background-color:#106a8c;border-color:#0c516c}.btn-primary:active,.btn-primary.active,.open>.dropdown-toggle.btn-primary{color:#ffffff;background-color:#106a8c;border-color:#0c516c}.btn-primary:active:hover,.btn-primary.active:hover,.open>.dropdown-toggle.btn-primary:hover,.btn-primary:active:focus,.btn-primary.active:focus,.open>.dropdown-toggle.btn-primary:focus,.btn-primary:active.focus,.btn-primary.active.focus,.open>.dropdown-toggle.btn-primary.focus{color:#ffffff;background-color:#0c516c;border-color:#052531}.btn-primary:active,.btn-primary.active,.open>.dropdown-toggle.btn-primary{background-image:none}.btn-primary.disabled:hover,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary:hover,.btn-primary.disabled:focus,.btn-primary[disabled]:focus,fieldset[disabled] .btn-primary:focus,.btn-primary.disabled.focus,.btn-primary[disabled].focus,fieldset[disabled] .btn-primary.focus{background-color:#158cba;border-color:#127ba3}.btn-primary .badge{color:#158cba;background-color:#ffffff}.btn-success{color:#ffffff;background-color:#28b62c;border-color:#23a127}.btn-success:focus,.btn-success.focus{color:#ffffff;background-color:#1f8c22;border-color:#0c390e}.btn-success:hover{color:#ffffff;background-color:#1f8c22;border-color:#186f1b}.btn-success:active,.btn-success.active,.open>.dropdown-toggle.btn-success{color:#ffffff;background-color:#1f8c22;border-color:#186f1b}.btn-success:active:hover,.btn-success.active:hover,.open>.dropdown-toggle.btn-success:hover,.btn-success:active:focus,.btn-success.active:focus,.open>.dropdown-toggle.btn-success:focus,.btn-success:active.focus,.btn-success.active.focus,.open>.dropdown-toggle.btn-success.focus{color:#ffffff;background-color:#186f1b;border-color:#0c390e}.btn-success:active,.btn-success.active,.open>.dropdown-toggle.btn-success{background-image:none}.btn-success.disabled:hover,.btn-success[disabled]:hover,fieldset[disabled] .btn-success:hover,.btn-success.disabled:focus,.btn-success[disabled]:focus,fieldset[disabled] .btn-success:focus,.btn-success.disabled.focus,.btn-success[disabled].focus,fieldset[disabled] .btn-success.focus{background-color:#28b62c;border-color:#23a127}.btn-success .badge{color:#28b62c;background-color:#ffffff}.btn-info{color:#ffffff;background-color:#75caeb;border-color:#5fc1e8}.btn-info:focus,.btn-info.focus{color:#ffffff;background-color:#48b9e5;border-color:#1984ae}.btn-info:hover{color:#ffffff;background-color:#48b9e5;border-color:#29ade0}.btn-info:active,.btn-info.active,.open>.dropdown-toggle.btn-info{color:#ffffff;background-color:#48b9e5;border-color:#29ade0}.btn-info:active:hover,.btn-info.active:hover,.open>.dropdown-toggle.btn-info:hover,.btn-info:active:focus,.btn-info.active:focus,.open>.dropdown-toggle.btn-info:focus,.btn-info:active.focus,.btn-info.active.focus,.open>.dropdown-toggle.btn-info.focus{color:#ffffff;background-color:#29ade0;border-color:#1984ae}.btn-info:active,.btn-info.active,.open>.dropdown-toggle.btn-info{background-image:none}.btn-info.disabled:hover,.btn-info[disabled]:hover,fieldset[disabled] .btn-info:hover,.btn-info.disabled:focus,.btn-info[disabled]:focus,fieldset[disabled] .btn-info:focus,.btn-info.disabled.focus,.btn-info[disabled].focus,fieldset[disabled] .btn-info.focus{background-color:#75caeb;border-color:#5fc1e8}.btn-info .badge{color:#75caeb;background-color:#ffffff}.btn-warning{color:#ffffff;background-color:#ff851b;border-color:#ff7701}.btn-warning:focus,.btn-warning.focus{color:#ffffff;background-color:#e76b00;border-color:#813c00}.btn-warning:hover{color:#ffffff;background-color:#e76b00;border-color:#c35b00}.btn-warning:active,.btn-warning.active,.open>.dropdown-toggle.btn-warning{color:#ffffff;background-color:#e76b00;border-color:#c35b00}.btn-warning:active:hover,.btn-warning.active:hover,.open>.dropdown-toggle.btn-warning:hover,.btn-warning:active:focus,.btn-warning.active:focus,.open>.dropdown-toggle.btn-warning:focus,.btn-warning:active.focus,.btn-warning.active.focus,.open>.dropdown-toggle.btn-warning.focus{color:#ffffff;background-color:#c35b00;border-color:#813c00}.btn-warning:active,.btn-warning.active,.open>.dropdown-toggle.btn-warning{background-image:none}.btn-warning.disabled:hover,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning:hover,.btn-warning.disabled:focus,.btn-warning[disabled]:focus,fieldset[disabled] .btn-warning:focus,.btn-warning.disabled.focus,.btn-warning[disabled].focus,fieldset[disabled] .btn-warning.focus{background-color:#ff851b;border-color:#ff7701}.btn-warning .badge{color:#ff851b;background-color:#ffffff}.btn-danger{color:#ffffff;background-color:#ff4136;border-color:#ff291c}.btn-danger:focus,.btn-danger.focus{color:#ffffff;background-color:#ff1103;border-color:#9c0900}.btn-danger:hover{color:#ffffff;background-color:#ff1103;border-color:#de0c00}.btn-danger:active,.btn-danger.active,.open>.dropdown-toggle.btn-danger{color:#ffffff;background-color:#ff1103;border-color:#de0c00}.btn-danger:active:hover,.btn-danger.active:hover,.open>.dropdown-toggle.btn-danger:hover,.btn-danger:active:focus,.btn-danger.active:focus,.open>.dropdown-toggle.btn-danger:focus,.btn-danger:active.focus,.btn-danger.active.focus,.open>.dropdown-toggle.btn-danger.focus{color:#ffffff;background-color:#de0c00;border-color:#9c0900}.btn-danger:active,.btn-danger.active,.open>.dropdown-toggle.btn-danger{background-image:none}.btn-danger.disabled:hover,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger:hover,.btn-danger.disabled:focus,.btn-danger[disabled]:focus,fieldset[disabled] .btn-danger:focus,.btn-danger.disabled.focus,.btn-danger[disabled].focus,fieldset[disabled] .btn-danger.focus{background-color:#ff4136;border-color:#ff291c}.btn-danger .badge{color:#ff4136;background-color:#ffffff}.btn-link{color:#158cba;font-weight:normal;border-radius:0}.btn-link,.btn-link:active,.btn-link.active,.btn-link[disabled],fieldset[disabled] .btn-link{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link,.btn-link:hover,.btn-link:focus,.btn-link:active{border-color:transparent}.btn-link:hover,.btn-link:focus{color:#158cba;text-decoration:underline;background-color:transparent}.btn-link[disabled]:hover,fieldset[disabled] .btn-link:hover,.btn-link[disabled]:focus,fieldset[disabled] .btn-link:focus{color:#999999;text-decoration:none}.btn-lg,.btn-group-lg>.btn{padding:13px 16px;font-size:18px;line-height:1.3333333;border-radius:5px}.btn-sm,.btn-group-sm>.btn{padding:4px 10px;font-size:12px;line-height:1.5;border-radius:2px}.btn-xs,.btn-group-xs>.btn{padding:1px 5px;font-size:12px;line-height:1.5;border-radius:2px}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:5px}input[type="submit"].btn-block,input[type="reset"].btn-block,input[type="button"].btn-block{width:100%}.fade{opacity:0;-webkit-transition:opacity 0.15s linear;-o-transition:opacity 0.15s linear;transition:opacity 0.15s linear}.fade.in{opacity:1}.collapse{display:none}.collapse.in{display:block}tr.collapse.in{display:table-row}tbody.collapse.in{display:table-row-group}.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition-property:height, visibility;-o-transition-property:height, visibility;transition-property:height, visibility;-webkit-transition-duration:0.35s;-o-transition-duration:0.35s;transition-duration:0.35s;-webkit-transition-timing-function:ease;-o-transition-timing-function:ease;transition-timing-function:ease}.caret{display:inline-block;width:0;height:0;margin-left:2px;vertical-align:middle;border-top:4px dashed;border-top:4px solid \9;border-right:4px solid transparent;border-left:4px solid transparent}.dropup,.dropdown{position:relative}.dropdown-toggle:focus{outline:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;list-style:none;font-size:14px;text-align:left;background-color:#ffffff;border:1px solid #cccccc;border:1px solid #e7e7e7;border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0,0,0,0.175);box-shadow:0 6px 12px rgba(0,0,0,0.175);-webkit-background-clip:padding-box;background-clip:padding-box}.dropdown-menu.pull-right{right:0;left:auto}.dropdown-menu .divider{height:1px;margin:9px 0;overflow:hidden;background-color:#eeeeee}.dropdown-menu>li>a{display:block;padding:3px 20px;clear:both;font-weight:normal;line-height:1.42857143;color:#999999;white-space:nowrap}.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus{text-decoration:none;color:#333333;background-color:transparent}.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus{color:#ffffff;text-decoration:none;outline:0;background-color:#158cba}.dropdown-menu>.disabled>a,.dropdown-menu>.disabled>a:hover,.dropdown-menu>.disabled>a:focus{color:#eeeeee}.dropdown-menu>.disabled>a:hover,.dropdown-menu>.disabled>a:focus{text-decoration:none;background-color:transparent;background-image:none;filter:progid:DXImageTransform.Microsoft.gradient(enabled=false);cursor:not-allowed}.open>.dropdown-menu{display:block}.open>a{outline:0}.dropdown-menu-right{left:auto;right:0}.dropdown-menu-left{left:0;right:auto}.dropdown-header{display:block;padding:3px 20px;font-size:12px;line-height:1.42857143;color:#999999;white-space:nowrap}.dropdown-backdrop{position:fixed;left:0;right:0;bottom:0;top:0;z-index:990}.pull-right>.dropdown-menu{right:0;left:auto}.dropup .caret,.navbar-fixed-bottom .dropdown .caret{border-top:0;border-bottom:4px dashed;border-bottom:4px solid \9;content:""}.dropup .dropdown-menu,.navbar-fixed-bottom .dropdown .dropdown-menu{top:auto;bottom:100%;margin-bottom:2px}@media (min-width:768px){.navbar-right .dropdown-menu{left:auto;right:0}.navbar-right .dropdown-menu-left{left:0;right:auto}}.btn-group,.btn-group-vertical{position:relative;display:inline-block;vertical-align:middle}.btn-group>.btn,.btn-group-vertical>.btn{position:relative;float:left}.btn-group>.btn:hover,.btn-group-vertical>.btn:hover,.btn-group>.btn:focus,.btn-group-vertical>.btn:focus,.btn-group>.btn:active,.btn-group-vertical>.btn:active,.btn-group>.btn.active,.btn-group-vertical>.btn.active{z-index:2}.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group{margin-left:-1px}.btn-toolbar{margin-left:-5px}.btn-toolbar .btn,.btn-toolbar .btn-group,.btn-toolbar .input-group{float:left}.btn-toolbar>.btn,.btn-toolbar>.btn-group,.btn-toolbar>.input-group{margin-left:5px}.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle){border-radius:0}.btn-group>.btn:first-child{margin-left:0}.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle){border-bottom-right-radius:0;border-top-right-radius:0}.btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child){border-bottom-left-radius:0;border-top-left-radius:0}.btn-group>.btn-group{float:left}.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-bottom-right-radius:0;border-top-right-radius:0}.btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child{border-bottom-left-radius:0;border-top-left-radius:0}.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle{outline:0}.btn-group>.btn+.dropdown-toggle{padding-left:8px;padding-right:8px}.btn-group>.btn-lg+.dropdown-toggle{padding-left:12px;padding-right:12px}.btn-group.open .dropdown-toggle{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);box-shadow:inset 0 3px 5px rgba(0,0,0,0.125)}.btn-group.open .dropdown-toggle.btn-link{-webkit-box-shadow:none;box-shadow:none}.btn .caret{margin-left:0}.btn-lg .caret{border-width:5px 5px 0;border-bottom-width:0}.dropup .btn-lg .caret{border-width:0 5px 5px}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group,.btn-group-vertical>.btn-group>.btn{display:block;float:none;width:100%;max-width:100%}.btn-group-vertical>.btn-group>.btn{float:none}.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group{margin-top:-1px;margin-left:0}.btn-group-vertical>.btn:not(:first-child):not(:last-child){border-radius:0}.btn-group-vertical>.btn:first-child:not(:last-child){border-top-right-radius:4px;border-top-left-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn:last-child:not(:first-child){border-top-right-radius:0;border-top-left-radius:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-right-radius:0;border-top-left-radius:0}.btn-group-justified{display:table;width:100%;table-layout:fixed;border-collapse:separate}.btn-group-justified>.btn,.btn-group-justified>.btn-group{float:none;display:table-cell;width:1%}.btn-group-justified>.btn-group .btn{width:100%}.btn-group-justified>.btn-group .dropdown-menu{left:auto}[data-toggle="buttons"]>.btn input[type="radio"],[data-toggle="buttons"]>.btn-group>.btn input[type="radio"],[data-toggle="buttons"]>.btn input[type="checkbox"],[data-toggle="buttons"]>.btn-group>.btn input[type="checkbox"]{position:absolute;clip:rect(0, 0, 0, 0);pointer-events:none}.input-group{position:relative;display:table;border-collapse:separate}.input-group[class*="col-"]{float:none;padding-left:0;padding-right:0}.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0}.input-group .form-control:focus{z-index:3}.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn{height:52px;padding:13px 16px;font-size:18px;line-height:1.3333333;border-radius:5px}select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn{height:52px;line-height:52px}textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn,select[multiple].input-group-lg>.form-control,select[multiple].input-group-lg>.input-group-addon,select[multiple].input-group-lg>.input-group-btn>.btn{height:auto}.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn{height:28px;padding:4px 10px;font-size:12px;line-height:1.5;border-radius:2px}select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn{height:28px;line-height:28px}textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn,select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn{height:auto}.input-group-addon,.input-group-btn,.input-group .form-control{display:table-cell}.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child),.input-group .form-control:not(:first-child):not(:last-child){border-radius:0}.input-group-addon,.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle}.input-group-addon{padding:7px 12px;font-size:14px;font-weight:normal;line-height:1;color:#555555;text-align:center;background-color:#eeeeee;border:1px solid #e7e7e7;border-radius:4px}.input-group-addon.input-sm{padding:4px 10px;font-size:12px;border-radius:2px}.input-group-addon.input-lg{padding:13px 16px;font-size:18px;border-radius:5px}.input-group-addon input[type="radio"],.input-group-addon input[type="checkbox"]{margin-top:0}.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle),.input-group-btn:last-child>.btn-group:not(:last-child)>.btn{border-bottom-right-radius:0;border-top-right-radius:0}.input-group-addon:first-child{border-right:0}.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:first-child>.btn-group:not(:first-child)>.btn{border-bottom-left-radius:0;border-top-left-radius:0}.input-group-addon:last-child{border-left:0}.input-group-btn{position:relative;font-size:0;white-space:nowrap}.input-group-btn>.btn{position:relative}.input-group-btn>.btn+.btn{margin-left:-1px}.input-group-btn>.btn:hover,.input-group-btn>.btn:focus,.input-group-btn>.btn:active{z-index:2}.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group{margin-right:-1px}.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group{z-index:2;margin-left:-1px}.nav{margin-bottom:0;padding-left:0;list-style:none}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 15px}.nav>li>a:hover,.nav>li>a:focus{text-decoration:none;background-color:#ffffff}.nav>li.disabled>a{color:#999999}.nav>li.disabled>a:hover,.nav>li.disabled>a:focus{color:#999999;text-decoration:none;background-color:transparent;cursor:not-allowed}.nav .open>a,.nav .open>a:hover,.nav .open>a:focus{background-color:#ffffff;border-color:#158cba}.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.nav>li>a>img{max-width:none}.nav-tabs{border-bottom:1px solid #e7e7e7}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs>li>a:hover{border-color:#eeeeee #eeeeee #e7e7e7}.nav-tabs>li.active>a,.nav-tabs>li.active>a:hover,.nav-tabs>li.active>a:focus{color:#555555;background-color:#ffffff;border:1px solid #e7e7e7;border-bottom-color:transparent;cursor:default}.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li{float:none}.nav-tabs.nav-justified>li>a{text-align:center;margin-bottom:5px}.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0}}.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:hover,.nav-tabs.nav-justified>.active>a:focus{border:1px solid #e7e7e7}@media (min-width:768px){.nav-tabs.nav-justified>li>a{border-bottom:1px solid #e7e7e7;border-radius:4px 4px 0 0}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:hover,.nav-tabs.nav-justified>.active>a:focus{border-bottom-color:#ffffff}}.nav-pills>li{float:left}.nav-pills>li>a{border-radius:4px}.nav-pills>li+li{margin-left:2px}.nav-pills>li.active>a,.nav-pills>li.active>a:hover,.nav-pills>li.active>a:focus{color:#ffffff;background-color:#158cba}.nav-stacked>li{float:none}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li{float:none}.nav-justified>li>a{text-align:center;margin-bottom:5px}.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}}.nav-tabs-justified{border-bottom:0}.nav-tabs-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:hover,.nav-tabs-justified>.active>a:focus{border:1px solid #e7e7e7}@media (min-width:768px){.nav-tabs-justified>li>a{border-bottom:1px solid #e7e7e7;border-radius:4px 4px 0 0}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:hover,.nav-tabs-justified>.active>a:focus{border-bottom-color:#ffffff}}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-right-radius:0;border-top-left-radius:0}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:4px}}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{overflow-x:visible;padding-right:15px;padding-left:15px;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.1);box-shadow:inset 0 1px 0 rgba(255,255,255,0.1);-webkit-overflow-scrolling:touch}.navbar-collapse.in{overflow-y:auto}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block !important;height:auto !important;padding-bottom:0;overflow:visible !important}.navbar-collapse.in{overflow-y:visible}.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse{padding-left:0;padding-right:0}}.navbar-fixed-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse{max-height:200px}}.container>.navbar-header,.container-fluid>.navbar-header,.container>.navbar-collapse,.container-fluid>.navbar-collapse{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container>.navbar-header,.container-fluid>.navbar-header,.container>.navbar-collapse,.container-fluid>.navbar-collapse{margin-right:0;margin-left:0}}.navbar-static-top{z-index:1000;border-width:0 0 1px}@media (min-width:768px){.navbar-static-top{border-radius:0}}.navbar-fixed-top,.navbar-fixed-bottom{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-top,.navbar-fixed-bottom{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}.navbar-brand{float:left;padding:15px 15px;font-size:18px;line-height:20px;height:50px}.navbar-brand:hover,.navbar-brand:focus{text-decoration:none}.navbar-brand>img{display:block}@media (min-width:768px){.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;margin-right:15px;padding:9px 10px;margin-top:8px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}@media (max-width:767px){.navbar-nav .open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;-webkit-box-shadow:none;box-shadow:none}.navbar-nav .open .dropdown-menu>li>a,.navbar-nav .open .dropdown-menu .dropdown-header{padding:5px 15px 5px 25px}.navbar-nav .open .dropdown-menu>li>a{line-height:20px}.navbar-nav .open .dropdown-menu>li>a:hover,.navbar-nav .open .dropdown-menu>li>a:focus{background-image:none}}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}}.navbar-form{margin-left:-15px;margin-right:-15px;padding:10px 15px;border-top:1px solid transparent;border-bottom:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(255,255,255,0.1);box-shadow:inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(255,255,255,0.1);margin-top:6px;margin-bottom:6px}@media (min-width:768px){.navbar-form .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.navbar-form .form-control{display:inline-block;width:auto;vertical-align:middle}.navbar-form .form-control-static{display:inline-block}.navbar-form .input-group{display:inline-table;vertical-align:middle}.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn,.navbar-form .input-group .form-control{width:auto}.navbar-form .input-group>.form-control{width:100%}.navbar-form .control-label{margin-bottom:0;vertical-align:middle}.navbar-form .radio,.navbar-form .checkbox{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.navbar-form .radio label,.navbar-form .checkbox label{padding-left:0}.navbar-form .radio input[type="radio"],.navbar-form .checkbox input[type="checkbox"]{position:relative;margin-left:0}.navbar-form .has-feedback .form-control-feedback{top:0}}@media (max-width:767px){.navbar-form .form-group{margin-bottom:5px}.navbar-form .form-group:last-child{margin-bottom:0}}@media (min-width:768px){.navbar-form{width:auto;border:0;margin-left:0;margin-right:0;padding-top:0;padding-bottom:0;-webkit-box-shadow:none;box-shadow:none}}.navbar-nav>li>.dropdown-menu{margin-top:0;border-top-right-radius:0;border-top-left-radius:0}.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu{margin-bottom:0;border-top-right-radius:4px;border-top-left-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.navbar-btn{margin-top:6px;margin-bottom:6px}.navbar-btn.btn-sm{margin-top:11px;margin-bottom:11px}.navbar-btn.btn-xs{margin-top:14px;margin-bottom:14px}.navbar-text{margin-top:15px;margin-bottom:15px}@media (min-width:768px){.navbar-text{float:left;margin-left:15px;margin-right:15px}}@media (min-width:768px){.navbar-left{float:left !important}.navbar-right{float:right !important;margin-right:-15px}.navbar-right~.navbar-right{margin-right:0}}.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}.navbar-default .navbar-brand{color:#333333}.navbar-default .navbar-brand:hover,.navbar-default .navbar-brand:focus{color:#333333;background-color:transparent}.navbar-default .navbar-text{color:#555555}.navbar-default .navbar-nav>li>a{color:#999999}.navbar-default .navbar-nav>li>a:hover,.navbar-default .navbar-nav>li>a:focus{color:#333333;background-color:transparent}.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:hover,.navbar-default .navbar-nav>.active>a:focus{color:#333333;background-color:transparent}.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:hover,.navbar-default .navbar-nav>.disabled>a:focus{color:#eeeeee;background-color:transparent}.navbar-default .navbar-toggle{border-color:#eeeeee}.navbar-default .navbar-toggle:hover,.navbar-default .navbar-toggle:focus{background-color:#ffffff}.navbar-default .navbar-toggle .icon-bar{background-color:#999999}.navbar-default .navbar-collapse,.navbar-default .navbar-form{border-color:#e7e7e7}.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:hover,.navbar-default .navbar-nav>.open>a:focus{background-color:transparent;color:#333333}@media (max-width:767px){.navbar-default .navbar-nav .open .dropdown-menu>li>a{color:#999999}.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover,.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus{color:#333333;background-color:transparent}.navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus{color:#333333;background-color:transparent}.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus{color:#eeeeee;background-color:transparent}}.navbar-default .navbar-link{color:#999999}.navbar-default .navbar-link:hover{color:#333333}.navbar-default .btn-link{color:#999999}.navbar-default .btn-link:hover,.navbar-default .btn-link:focus{color:#333333}.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:hover,.navbar-default .btn-link[disabled]:focus,fieldset[disabled] .navbar-default .btn-link:focus{color:#eeeeee}.navbar-inverse{background-color:#ffffff;border-color:#e6e6e6}.navbar-inverse .navbar-brand{color:#999999}.navbar-inverse .navbar-brand:hover,.navbar-inverse .navbar-brand:focus{color:#333333;background-color:transparent}.navbar-inverse .navbar-text{color:#999999}.navbar-inverse .navbar-nav>li>a{color:#999999}.navbar-inverse .navbar-nav>li>a:hover,.navbar-inverse .navbar-nav>li>a:focus{color:#333333;background-color:transparent}.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.active>a:hover,.navbar-inverse .navbar-nav>.active>a:focus{color:#333333;background-color:transparent}.navbar-inverse .navbar-nav>.disabled>a,.navbar-inverse .navbar-nav>.disabled>a:hover,.navbar-inverse .navbar-nav>.disabled>a:focus{color:#eeeeee;background-color:transparent}.navbar-inverse .navbar-toggle{border-color:#eeeeee}.navbar-inverse .navbar-toggle:hover,.navbar-inverse .navbar-toggle:focus{background-color:#eeeeee}.navbar-inverse .navbar-toggle .icon-bar{background-color:#999999}.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form{border-color:#ededed}.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a:hover,.navbar-inverse .navbar-nav>.open>a:focus{background-color:transparent;color:#333333}@media (max-width:767px){.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header{border-color:#e6e6e6}.navbar-inverse .navbar-nav .open .dropdown-menu .divider{background-color:#e6e6e6}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a{color:#999999}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus{color:#333333;background-color:transparent}.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus{color:#333333;background-color:transparent}.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus{color:#eeeeee;background-color:transparent}}.navbar-inverse .navbar-link{color:#999999}.navbar-inverse .navbar-link:hover{color:#333333}.navbar-inverse .btn-link{color:#999999}.navbar-inverse .btn-link:hover,.navbar-inverse .btn-link:focus{color:#333333}.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:hover,.navbar-inverse .btn-link[disabled]:focus,fieldset[disabled] .navbar-inverse .btn-link:focus{color:#eeeeee}.breadcrumb{padding:8px 15px;margin-bottom:20px;list-style:none;background-color:#fafafa;border-radius:4px}.breadcrumb>li{display:inline-block}.breadcrumb>li+li:before{content:">\00a0";padding:0 5px;color:#999999}.breadcrumb>.active{color:#999999}.pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:7px 12px;line-height:1.42857143;text-decoration:none;color:#555555;background-color:#eeeeee;border:1px solid #e2e2e2;margin-left:-1px}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-bottom-left-radius:4px;border-top-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-bottom-right-radius:4px;border-top-right-radius:4px}.pagination>li>a:hover,.pagination>li>span:hover,.pagination>li>a:focus,.pagination>li>span:focus{z-index:2;color:#555555;background-color:#eeeeee;border-color:#e2e2e2}.pagination>.active>a,.pagination>.active>span,.pagination>.active>a:hover,.pagination>.active>span:hover,.pagination>.active>a:focus,.pagination>.active>span:focus{z-index:3;color:#ffffff;background-color:#158cba;border-color:#127ba3;cursor:default}.pagination>.disabled>span,.pagination>.disabled>span:hover,.pagination>.disabled>span:focus,.pagination>.disabled>a,.pagination>.disabled>a:hover,.pagination>.disabled>a:focus{color:#999999;background-color:#eeeeee;border-color:#e2e2e2;cursor:not-allowed}.pagination-lg>li>a,.pagination-lg>li>span{padding:13px 16px;font-size:18px;line-height:1.3333333}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-bottom-left-radius:5px;border-top-left-radius:5px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-bottom-right-radius:5px;border-top-right-radius:5px}.pagination-sm>li>a,.pagination-sm>li>span{padding:4px 10px;font-size:12px;line-height:1.5}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-bottom-left-radius:2px;border-top-left-radius:2px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-bottom-right-radius:2px;border-top-right-radius:2px}.pager{padding-left:0;margin:20px 0;list-style:none;text-align:center}.pager li{display:inline}.pager li>a,.pager li>span{display:inline-block;padding:5px 14px;background-color:#eeeeee;border:1px solid #e2e2e2;border-radius:15px}.pager li>a:hover,.pager li>a:focus{text-decoration:none;background-color:#eeeeee}.pager .next>a,.pager .next>span{float:right}.pager .previous>a,.pager .previous>span{float:left}.pager .disabled>a,.pager .disabled>a:hover,.pager .disabled>a:focus,.pager .disabled>span{color:#999999;background-color:#eeeeee;cursor:not-allowed}.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:bold;line-height:1;color:#ffffff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}a.label:hover,a.label:focus{color:#ffffff;text-decoration:none;cursor:pointer}.label:empty{display:none}.btn .label{position:relative;top:-1px}.label-default{background-color:#999999}.label-default[href]:hover,.label-default[href]:focus{background-color:#808080}.label-primary{background-color:#158cba}.label-primary[href]:hover,.label-primary[href]:focus{background-color:#106a8c}.label-success{background-color:#28b62c}.label-success[href]:hover,.label-success[href]:focus{background-color:#1f8c22}.label-info{background-color:#75caeb}.label-info[href]:hover,.label-info[href]:focus{background-color:#48b9e5}.label-warning{background-color:#ff851b}.label-warning[href]:hover,.label-warning[href]:focus{background-color:#e76b00}.label-danger{background-color:#ff4136}.label-danger[href]:hover,.label-danger[href]:focus{background-color:#ff1103}.badge{display:inline-block;min-width:10px;padding:3px 7px;font-size:12px;font-weight:normal;color:#ffffff;line-height:1;vertical-align:middle;white-space:nowrap;text-align:center;background-color:#158cba;border-radius:10px}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.btn-xs .badge,.btn-group-xs>.btn .badge{top:0;padding:1px 5px}a.badge:hover,a.badge:focus{color:#ffffff;text-decoration:none;cursor:pointer}.list-group-item.active>.badge,.nav-pills>.active>a>.badge{color:#158cba;background-color:#ffffff}.list-group-item>.badge{float:right}.list-group-item>.badge+.badge{margin-right:5px}.nav-pills>li>a>.badge{margin-left:3px}.jumbotron{padding-top:30px;padding-bottom:30px;margin-bottom:30px;color:inherit;background-color:#fafafa}.jumbotron h1,.jumbotron .h1{color:inherit}.jumbotron p{margin-bottom:15px;font-size:21px;font-weight:200}.jumbotron>hr{border-top-color:#e1e1e1}.container .jumbotron,.container-fluid .jumbotron{border-radius:5px;padding-left:15px;padding-right:15px}.jumbotron .container{max-width:100%}@media screen and (min-width:768px){.jumbotron{padding-top:48px;padding-bottom:48px}.container .jumbotron,.container-fluid .jumbotron{padding-left:60px;padding-right:60px}.jumbotron h1,.jumbotron .h1{font-size:63px}}.thumbnail{display:block;padding:4px;margin-bottom:20px;line-height:1.42857143;background-color:#ffffff;border:1px solid #eeeeee;border-radius:4px;-webkit-transition:border .2s ease-in-out;-o-transition:border .2s ease-in-out;transition:border .2s ease-in-out}.thumbnail>img,.thumbnail a>img{margin-left:auto;margin-right:auto}a.thumbnail:hover,a.thumbnail:focus,a.thumbnail.active{border-color:#158cba}.thumbnail .caption{padding:9px;color:#555555}.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px}.alert h4{margin-top:0;color:inherit}.alert .alert-link{font-weight:bold}.alert>p,.alert>ul{margin-bottom:0}.alert>p+p{margin-top:5px}.alert-dismissable,.alert-dismissible{padding-right:35px}.alert-dismissable .close,.alert-dismissible .close{position:relative;top:-2px;right:-21px;color:inherit}.alert-success{background-color:#28b62c;border-color:#24a528;color:#ffffff}.alert-success hr{border-top-color:#209023}.alert-success .alert-link{color:#e6e6e6}.alert-info{background-color:#75caeb;border-color:#40b5e3;color:#ffffff}.alert-info hr{border-top-color:#29ade0}.alert-info .alert-link{color:#e6e6e6}.alert-warning{background-color:#ff851b;border-color:#ff7701;color:#ffffff}.alert-warning hr{border-top-color:#e76b00}.alert-warning .alert-link{color:#e6e6e6}.alert-danger{background-color:#ff4136;border-color:#ff1103;color:#ffffff}.alert-danger hr{border-top-color:#e90d00}.alert-danger .alert-link{color:#e6e6e6}@-webkit-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@-o-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}.progress{overflow:hidden;height:20px;margin-bottom:20px;background-color:#fafafa;border-radius:4px;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.1);box-shadow:inset 0 1px 2px rgba(0,0,0,0.1)}.progress-bar{float:left;width:0%;height:100%;font-size:12px;line-height:20px;color:#ffffff;text-align:center;background-color:#158cba;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,0.15);box-shadow:inset 0 -1px 0 rgba(0,0,0,0.15);-webkit-transition:width 0.6s ease;-o-transition:width 0.6s ease;transition:width 0.6s ease}.progress-striped .progress-bar,.progress-bar-striped{background-image:-webkit-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);-webkit-background-size:40px 40px;background-size:40px 40px}.progress.active .progress-bar,.progress-bar.active{-webkit-animation:progress-bar-stripes 2s linear infinite;-o-animation:progress-bar-stripes 2s linear infinite;animation:progress-bar-stripes 2s linear infinite}.progress-bar-success{background-color:#28b62c}.progress-striped .progress-bar-success{background-image:-webkit-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent)}.progress-bar-info{background-color:#75caeb}.progress-striped .progress-bar-info{background-image:-webkit-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent)}.progress-bar-warning{background-color:#ff851b}.progress-striped .progress-bar-warning{background-image:-webkit-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent)}.progress-bar-danger{background-color:#ff4136}.progress-striped .progress-bar-danger{background-image:-webkit-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent)}.media{margin-top:15px}.media:first-child{margin-top:0}.media,.media-body{zoom:1;overflow:hidden}.media-body{width:10000px}.media-object{display:block}.media-object.img-thumbnail{max-width:none}.media-right,.media>.pull-right{padding-left:10px}.media-left,.media>.pull-left{padding-right:10px}.media-left,.media-right,.media-body{display:table-cell;vertical-align:top}.media-middle{vertical-align:middle}.media-bottom{vertical-align:bottom}.media-heading{margin-top:0;margin-bottom:5px}.media-list{padding-left:0;list-style:none}.list-group{margin-bottom:20px;padding-left:0}.list-group-item{position:relative;display:block;padding:10px 15px;margin-bottom:-1px;background-color:#ffffff;border:1px solid #eeeeee}.list-group-item:first-child{border-top-right-radius:4px;border-top-left-radius:4px}.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}a.list-group-item,button.list-group-item{color:#555555}a.list-group-item .list-group-item-heading,button.list-group-item .list-group-item-heading{color:#333333}a.list-group-item:hover,button.list-group-item:hover,a.list-group-item:focus,button.list-group-item:focus{text-decoration:none;color:#555555;background-color:#f5f5f5}button.list-group-item{width:100%;text-align:left}.list-group-item.disabled,.list-group-item.disabled:hover,.list-group-item.disabled:focus{background-color:#eeeeee;color:#999999;cursor:not-allowed}.list-group-item.disabled .list-group-item-heading,.list-group-item.disabled:hover .list-group-item-heading,.list-group-item.disabled:focus .list-group-item-heading{color:inherit}.list-group-item.disabled .list-group-item-text,.list-group-item.disabled:hover .list-group-item-text,.list-group-item.disabled:focus .list-group-item-text{color:#999999}.list-group-item.active,.list-group-item.active:hover,.list-group-item.active:focus{z-index:2;color:#ffffff;background-color:#158cba;border-color:#158cba}.list-group-item.active .list-group-item-heading,.list-group-item.active:hover .list-group-item-heading,.list-group-item.active:focus .list-group-item-heading,.list-group-item.active .list-group-item-heading>small,.list-group-item.active:hover .list-group-item-heading>small,.list-group-item.active:focus .list-group-item-heading>small,.list-group-item.active .list-group-item-heading>.small,.list-group-item.active:hover .list-group-item-heading>.small,.list-group-item.active:focus .list-group-item-heading>.small{color:inherit}.list-group-item.active .list-group-item-text,.list-group-item.active:hover .list-group-item-text,.list-group-item.active:focus .list-group-item-text{color:#a6dff5}.list-group-item-success{color:#ffffff;background-color:#28b62c}a.list-group-item-success,button.list-group-item-success{color:#ffffff}a.list-group-item-success .list-group-item-heading,button.list-group-item-success .list-group-item-heading{color:inherit}a.list-group-item-success:hover,button.list-group-item-success:hover,a.list-group-item-success:focus,button.list-group-item-success:focus{color:#ffffff;background-color:#23a127}a.list-group-item-success.active,button.list-group-item-success.active,a.list-group-item-success.active:hover,button.list-group-item-success.active:hover,a.list-group-item-success.active:focus,button.list-group-item-success.active:focus{color:#fff;background-color:#ffffff;border-color:#ffffff}.list-group-item-info{color:#ffffff;background-color:#75caeb}a.list-group-item-info,button.list-group-item-info{color:#ffffff}a.list-group-item-info .list-group-item-heading,button.list-group-item-info .list-group-item-heading{color:inherit}a.list-group-item-info:hover,button.list-group-item-info:hover,a.list-group-item-info:focus,button.list-group-item-info:focus{color:#ffffff;background-color:#5fc1e8}a.list-group-item-info.active,button.list-group-item-info.active,a.list-group-item-info.active:hover,button.list-group-item-info.active:hover,a.list-group-item-info.active:focus,button.list-group-item-info.active:focus{color:#fff;background-color:#ffffff;border-color:#ffffff}.list-group-item-warning{color:#ffffff;background-color:#ff851b}a.list-group-item-warning,button.list-group-item-warning{color:#ffffff}a.list-group-item-warning .list-group-item-heading,button.list-group-item-warning .list-group-item-heading{color:inherit}a.list-group-item-warning:hover,button.list-group-item-warning:hover,a.list-group-item-warning:focus,button.list-group-item-warning:focus{color:#ffffff;background-color:#ff7701}a.list-group-item-warning.active,button.list-group-item-warning.active,a.list-group-item-warning.active:hover,button.list-group-item-warning.active:hover,a.list-group-item-warning.active:focus,button.list-group-item-warning.active:focus{color:#fff;background-color:#ffffff;border-color:#ffffff}.list-group-item-danger{color:#ffffff;background-color:#ff4136}a.list-group-item-danger,button.list-group-item-danger{color:#ffffff}a.list-group-item-danger .list-group-item-heading,button.list-group-item-danger .list-group-item-heading{color:inherit}a.list-group-item-danger:hover,button.list-group-item-danger:hover,a.list-group-item-danger:focus,button.list-group-item-danger:focus{color:#ffffff;background-color:#ff291c}a.list-group-item-danger.active,button.list-group-item-danger.active,a.list-group-item-danger.active:hover,button.list-group-item-danger.active:hover,a.list-group-item-danger.active:focus,button.list-group-item-danger.active:focus{color:#fff;background-color:#ffffff;border-color:#ffffff}.list-group-item-heading{margin-top:0;margin-bottom:5px}.list-group-item-text{margin-bottom:0;line-height:1.3}.panel{margin-bottom:20px;background-color:#ffffff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.05);box-shadow:0 1px 1px rgba(0,0,0,0.05)}.panel-body{padding:15px}.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-right-radius:3px;border-top-left-radius:3px}.panel-heading>.dropdown .dropdown-toggle{color:inherit}.panel-title{margin-top:0;margin-bottom:0;font-size:16px;color:inherit}.panel-title>a,.panel-title>small,.panel-title>.small,.panel-title>small>a,.panel-title>.small>a{color:inherit}.panel-footer{padding:10px 15px;background-color:#f5f5f5;border-top:1px solid transparent;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.list-group,.panel>.panel-collapse>.list-group{margin-bottom:0}.panel>.list-group .list-group-item,.panel>.panel-collapse>.list-group .list-group-item{border-width:1px 0;border-radius:0}.panel>.list-group:first-child .list-group-item:first-child,.panel>.panel-collapse>.list-group:first-child .list-group-item:first-child{border-top:0;border-top-right-radius:3px;border-top-left-radius:3px}.panel>.list-group:last-child .list-group-item:last-child,.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child{border-bottom:0;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child{border-top-right-radius:0;border-top-left-radius:0}.panel-heading+.list-group .list-group-item:first-child{border-top-width:0}.list-group+.panel-footer{border-top-width:0}.panel>.table,.panel>.table-responsive>.table,.panel>.panel-collapse>.table{margin-bottom:0}.panel>.table caption,.panel>.table-responsive>.table caption,.panel>.panel-collapse>.table caption{padding-left:15px;padding-right:15px}.panel>.table:first-child,.panel>.table-responsive:first-child>.table:first-child{border-top-right-radius:3px;border-top-left-radius:3px}.panel>.table:first-child>thead:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child{border-top-left-radius:3px}.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child{border-top-right-radius:3px}.panel>.table:last-child,.panel>.table-responsive:last-child>.table:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table:last-child>tbody:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child{border-bottom-left-radius:3px;border-bottom-right-radius:3px}.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child{border-bottom-left-radius:3px}.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child{border-bottom-right-radius:3px}.panel>.panel-body+.table,.panel>.panel-body+.table-responsive,.panel>.table+.panel-body,.panel>.table-responsive+.panel-body{border-top:1px solid #eeeeee}.panel>.table>tbody:first-child>tr:first-child th,.panel>.table>tbody:first-child>tr:first-child td{border-top:0}.panel>.table-bordered,.panel>.table-responsive>.table-bordered{border:0}.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child{border-left:0}.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child{border-right:0}.panel>.table-bordered>thead>tr:first-child>td,.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,.panel>.table-bordered>tbody>tr:first-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,.panel>.table-bordered>thead>tr:first-child>th,.panel>.table-responsive>.table-bordered>thead>tr:first-child>th,.panel>.table-bordered>tbody>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th{border-bottom:0}.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}.panel>.table-responsive{border:0;margin-bottom:0}.panel-group{margin-bottom:20px}.panel-group .panel{margin-bottom:0;border-radius:4px}.panel-group .panel+.panel{margin-top:5px}.panel-group .panel-heading{border-bottom:0}.panel-group .panel-heading+.panel-collapse>.panel-body,.panel-group .panel-heading+.panel-collapse>.list-group{border-top:1px solid transparent}.panel-group .panel-footer{border-top:0}.panel-group .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid transparent}.panel-default{border-color:transparent}.panel-default>.panel-heading{color:#333333;background-color:#f5f5f5;border-color:transparent}.panel-default>.panel-heading+.panel-collapse>.panel-body{border-top-color:transparent}.panel-default>.panel-heading .badge{color:#f5f5f5;background-color:#333333}.panel-default>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:transparent}.panel-primary{border-color:transparent}.panel-primary>.panel-heading{color:#ffffff;background-color:#158cba;border-color:transparent}.panel-primary>.panel-heading+.panel-collapse>.panel-body{border-top-color:transparent}.panel-primary>.panel-heading .badge{color:#158cba;background-color:#ffffff}.panel-primary>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:transparent}.panel-success{border-color:transparent}.panel-success>.panel-heading{color:#ffffff;background-color:#28b62c;border-color:transparent}.panel-success>.panel-heading+.panel-collapse>.panel-body{border-top-color:transparent}.panel-success>.panel-heading .badge{color:#28b62c;background-color:#ffffff}.panel-success>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:transparent}.panel-info{border-color:transparent}.panel-info>.panel-heading{color:#ffffff;background-color:#75caeb;border-color:transparent}.panel-info>.panel-heading+.panel-collapse>.panel-body{border-top-color:transparent}.panel-info>.panel-heading .badge{color:#75caeb;background-color:#ffffff}.panel-info>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:transparent}.panel-warning{border-color:transparent}.panel-warning>.panel-heading{color:#ffffff;background-color:#ff851b;border-color:transparent}.panel-warning>.panel-heading+.panel-collapse>.panel-body{border-top-color:transparent}.panel-warning>.panel-heading .badge{color:#ff851b;background-color:#ffffff}.panel-warning>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:transparent}.panel-danger{border-color:transparent}.panel-danger>.panel-heading{color:#ffffff;background-color:#ff4136;border-color:transparent}.panel-danger>.panel-heading+.panel-collapse>.panel-body{border-top-color:transparent}.panel-danger>.panel-heading .badge{color:#ff4136;background-color:#ffffff}.panel-danger>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:transparent}.embed-responsive{position:relative;display:block;height:0;padding:0;overflow:hidden}.embed-responsive .embed-responsive-item,.embed-responsive iframe,.embed-responsive embed,.embed-responsive object,.embed-responsive video{position:absolute;top:0;left:0;bottom:0;height:100%;width:100%;border:0}.embed-responsive-16by9{padding-bottom:56.25%}.embed-responsive-4by3{padding-bottom:75%}.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#fafafa;border:1px solid #e8e8e8;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px 1px rgba(0,0,0,0.05)}.well blockquote{border-color:#ddd;border-color:rgba(0,0,0,0.15)}.well-lg{padding:24px;border-radius:5px}.well-sm{padding:9px;border-radius:2px}.close{float:right;font-size:21px;font-weight:bold;line-height:1;color:#ffffff;text-shadow:0 1px 0 #ffffff;opacity:0.2;filter:alpha(opacity=20)}.close:hover,.close:focus{color:#ffffff;text-decoration:none;cursor:pointer;opacity:0.5;filter:alpha(opacity=50)}button.close{padding:0;cursor:pointer;background:transparent;border:0;-webkit-appearance:none}.modal-open{overflow:hidden}.modal{display:none;overflow:hidden;position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;-webkit-overflow-scrolling:touch;outline:0}.modal.fade .modal-dialog{-webkit-transform:translate(0, -25%);-ms-transform:translate(0, -25%);-o-transform:translate(0, -25%);transform:translate(0, -25%);-webkit-transition:-webkit-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out}.modal.in .modal-dialog{-webkit-transform:translate(0, 0);-ms-transform:translate(0, 0);-o-transform:translate(0, 0);transform:translate(0, 0)}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal-dialog{position:relative;width:auto;margin:10px}.modal-content{position:relative;background-color:#ffffff;border:1px solid #eeeeee;border:1px solid rgba(0,0,0,0.05);border-radius:5px;-webkit-box-shadow:0 3px 9px rgba(0,0,0,0.5);box-shadow:0 3px 9px rgba(0,0,0,0.5);-webkit-background-clip:padding-box;background-clip:padding-box;outline:0}.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000000}.modal-backdrop.fade{opacity:0;filter:alpha(opacity=0)}.modal-backdrop.in{opacity:0.5;filter:alpha(opacity=50)}.modal-header{padding:15px;border-bottom:1px solid #e5e5e5}.modal-header .close{margin-top:-2px}.modal-title{margin:0;line-height:1.42857143}.modal-body{position:relative;padding:20px}.modal-footer{padding:20px;text-align:right;border-top:1px solid #e5e5e5}.modal-footer .btn+.btn{margin-left:5px;margin-bottom:0}.modal-footer .btn-group .btn+.btn{margin-left:-1px}.modal-footer .btn-block+.btn-block{margin-left:0}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:768px){.modal-dialog{width:600px;margin:30px auto}.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,0.5);box-shadow:0 5px 15px rgba(0,0,0,0.5)}.modal-sm{width:300px}}@media (min-width:992px){.modal-lg{width:900px}}.tooltip{position:absolute;z-index:1070;display:block;font-family:"Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-style:normal;font-weight:normal;letter-spacing:normal;line-break:auto;line-height:1.42857143;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;white-space:normal;word-break:normal;word-spacing:normal;word-wrap:normal;font-size:12px;opacity:0;filter:alpha(opacity=0)}.tooltip.in{opacity:0.9;filter:alpha(opacity=90)}.tooltip.top{margin-top:-3px;padding:5px 0}.tooltip.right{margin-left:3px;padding:0 5px}.tooltip.bottom{margin-top:3px;padding:5px 0}.tooltip.left{margin-left:-3px;padding:0 5px}.tooltip-inner{max-width:200px;padding:3px 8px;color:#ffffff;text-align:center;background-color:#000000;border-radius:4px}.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000000}.tooltip.top-left .tooltip-arrow{bottom:0;right:5px;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000000}.tooltip.top-right .tooltip-arrow{bottom:0;left:5px;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000000}.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000000}.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000000}.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-width:0 5px 5px;border-bottom-color:#000000}.tooltip.bottom-left .tooltip-arrow{top:0;right:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000000}.tooltip.bottom-right .tooltip-arrow{top:0;left:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000000}.popover{position:absolute;top:0;left:0;z-index:1060;display:none;max-width:276px;padding:1px;font-family:"Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-style:normal;font-weight:normal;letter-spacing:normal;line-break:auto;line-height:1.42857143;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;white-space:normal;word-break:normal;word-spacing:normal;word-wrap:normal;font-size:14px;background-color:#ffffff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #cccccc;border:1px solid rgba(0,0,0,0.2);border-radius:5px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,0.2);box-shadow:0 5px 10px rgba(0,0,0,0.2)}.popover.top{margin-top:-10px}.popover.right{margin-left:10px}.popover.bottom{margin-top:10px}.popover.left{margin-left:-10px}.popover-title{margin:0;padding:8px 14px;font-size:14px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-radius:4px 4px 0 0}.popover-content{padding:9px 14px}.popover>.arrow,.popover>.arrow:after{position:absolute;display:block;width:0;height:0;border-color:transparent;border-style:solid}.popover>.arrow{border-width:11px}.popover>.arrow:after{border-width:10px;content:""}.popover.top>.arrow{left:50%;margin-left:-11px;border-bottom-width:0;border-top-color:#999999;border-top-color:rgba(0,0,0,0.25);bottom:-11px}.popover.top>.arrow:after{content:" ";bottom:1px;margin-left:-10px;border-bottom-width:0;border-top-color:#ffffff}.popover.right>.arrow{top:50%;left:-11px;margin-top:-11px;border-left-width:0;border-right-color:#999999;border-right-color:rgba(0,0,0,0.25)}.popover.right>.arrow:after{content:" ";left:1px;bottom:-10px;border-left-width:0;border-right-color:#ffffff}.popover.bottom>.arrow{left:50%;margin-left:-11px;border-top-width:0;border-bottom-color:#999999;border-bottom-color:rgba(0,0,0,0.25);top:-11px}.popover.bottom>.arrow:after{content:" ";top:1px;margin-left:-10px;border-top-width:0;border-bottom-color:#ffffff}.popover.left>.arrow{top:50%;right:-11px;margin-top:-11px;border-right-width:0;border-left-color:#999999;border-left-color:rgba(0,0,0,0.25)}.popover.left>.arrow:after{content:" ";right:1px;border-right-width:0;border-left-color:#ffffff;bottom:-10px}.carousel{position:relative}.carousel-inner{position:relative;overflow:hidden;width:100%}.carousel-inner>.item{display:none;position:relative;-webkit-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left}.carousel-inner>.item>img,.carousel-inner>.item>a>img{line-height:1}@media all and (transform-3d),(-webkit-transform-3d){.carousel-inner>.item{-webkit-transition:-webkit-transform .6s ease-in-out;-o-transition:-o-transform .6s ease-in-out;transition:transform .6s ease-in-out;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000px;perspective:1000px}.carousel-inner>.item.next,.carousel-inner>.item.active.right{-webkit-transform:translate3d(100%, 0, 0);transform:translate3d(100%, 0, 0);left:0}.carousel-inner>.item.prev,.carousel-inner>.item.active.left{-webkit-transform:translate3d(-100%, 0, 0);transform:translate3d(-100%, 0, 0);left:0}.carousel-inner>.item.next.left,.carousel-inner>.item.prev.right,.carousel-inner>.item.active{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);left:0}}.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}.carousel-inner>.active{left:0}.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}.carousel-inner>.next{left:100%}.carousel-inner>.prev{left:-100%}.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}.carousel-inner>.active.left{left:-100%}.carousel-inner>.active.right{left:100%}.carousel-control{position:absolute;top:0;left:0;bottom:0;width:15%;opacity:0.5;filter:alpha(opacity=50);font-size:20px;color:#ffffff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,0.6);background-color:rgba(0,0,0,0)}.carousel-control.left{background-image:-webkit-linear-gradient(left, rgba(0,0,0,0.5) 0, rgba(0,0,0,0.0001) 100%);background-image:-o-linear-gradient(left, rgba(0,0,0,0.5) 0, rgba(0,0,0,0.0001) 100%);background-image:-webkit-gradient(linear, left top, right top, from(rgba(0,0,0,0.5)), to(rgba(0,0,0,0.0001)));background-image:linear-gradient(to right, rgba(0,0,0,0.5) 0, rgba(0,0,0,0.0001) 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1)}.carousel-control.right{left:auto;right:0;background-image:-webkit-linear-gradient(left, rgba(0,0,0,0.0001) 0, rgba(0,0,0,0.5) 100%);background-image:-o-linear-gradient(left, rgba(0,0,0,0.0001) 0, rgba(0,0,0,0.5) 100%);background-image:-webkit-gradient(linear, left top, right top, from(rgba(0,0,0,0.0001)), to(rgba(0,0,0,0.5)));background-image:linear-gradient(to right, rgba(0,0,0,0.0001) 0, rgba(0,0,0,0.5) 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1)}.carousel-control:hover,.carousel-control:focus{outline:0;color:#ffffff;text-decoration:none;opacity:0.9;filter:alpha(opacity=90)}.carousel-control .icon-prev,.carousel-control .icon-next,.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right{position:absolute;top:50%;margin-top:-10px;z-index:5;display:inline-block}.carousel-control .icon-prev,.carousel-control .glyphicon-chevron-left{left:50%;margin-left:-10px}.carousel-control .icon-next,.carousel-control .glyphicon-chevron-right{right:50%;margin-right:-10px}.carousel-control .icon-prev,.carousel-control .icon-next{width:20px;height:20px;line-height:1;font-family:serif}.carousel-control .icon-prev:before{content:'\2039'}.carousel-control .icon-next:before{content:'\203a'}.carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;margin-left:-30%;padding-left:0;list-style:none;text-align:center}.carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;text-indent:-999px;border:1px solid #ffffff;border-radius:10px;cursor:pointer;background-color:#000 \9;background-color:rgba(0,0,0,0)}.carousel-indicators .active{margin:0;width:12px;height:12px;background-color:#ffffff}.carousel-caption{position:absolute;left:15%;right:15%;bottom:20px;z-index:10;padding-top:20px;padding-bottom:20px;color:#ffffff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,0.6)}.carousel-caption .btn{text-shadow:none}@media screen and (min-width:768px){.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-prev,.carousel-control .icon-next{width:30px;height:30px;margin-top:-10px;font-size:30px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{margin-right:-10px}.carousel-caption{left:20%;right:20%;padding-bottom:30px}.carousel-indicators{bottom:20px}}.clearfix:before,.clearfix:after,.dl-horizontal dd:before,.dl-horizontal dd:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after,.form-horizontal .form-group:before,.form-horizontal .form-group:after,.btn-toolbar:before,.btn-toolbar:after,.btn-group-vertical>.btn-group:before,.btn-group-vertical>.btn-group:after,.nav:before,.nav:after,.navbar:before,.navbar:after,.navbar-header:before,.navbar-header:after,.navbar-collapse:before,.navbar-collapse:after,.pager:before,.pager:after,.panel-body:before,.panel-body:after,.modal-header:before,.modal-header:after,.modal-footer:before,.modal-footer:after{content:" ";display:table}.clearfix:after,.dl-horizontal dd:after,.container:after,.container-fluid:after,.row:after,.form-horizontal .form-group:after,.btn-toolbar:after,.btn-group-vertical>.btn-group:after,.nav:after,.navbar:after,.navbar-header:after,.navbar-collapse:after,.pager:after,.panel-body:after,.modal-header:after,.modal-footer:after{clear:both}.center-block{display:block;margin-left:auto;margin-right:auto}.pull-right{float:right !important}.pull-left{float:left !important}.hide{display:none !important}.show{display:block !important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none !important}.affix{position:fixed}@-ms-viewport{width:device-width}.visible-xs,.visible-sm,.visible-md,.visible-lg{display:none !important}.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block{display:none !important}@media (max-width:767px){.visible-xs{display:block !important}table.visible-xs{display:table !important}tr.visible-xs{display:table-row !important}th.visible-xs,td.visible-xs{display:table-cell !important}}@media (max-width:767px){.visible-xs-block{display:block !important}}@media (max-width:767px){.visible-xs-inline{display:inline !important}}@media (max-width:767px){.visible-xs-inline-block{display:inline-block !important}}@media (min-width:768px) and (max-width:991px){.visible-sm{display:block !important}table.visible-sm{display:table !important}tr.visible-sm{display:table-row !important}th.visible-sm,td.visible-sm{display:table-cell !important}}@media (min-width:768px) and (max-width:991px){.visible-sm-block{display:block !important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline{display:inline !important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline-block{display:inline-block !important}}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block !important}table.visible-md{display:table !important}tr.visible-md{display:table-row !important}th.visible-md,td.visible-md{display:table-cell !important}}@media (min-width:992px) and (max-width:1199px){.visible-md-block{display:block !important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline{display:inline !important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline-block{display:inline-block !important}}@media (min-width:1200px){.visible-lg{display:block !important}table.visible-lg{display:table !important}tr.visible-lg{display:table-row !important}th.visible-lg,td.visible-lg{display:table-cell !important}}@media (min-width:1200px){.visible-lg-block{display:block !important}}@media (min-width:1200px){.visible-lg-inline{display:inline !important}}@media (min-width:1200px){.visible-lg-inline-block{display:inline-block !important}}@media (max-width:767px){.hidden-xs{display:none !important}}@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none !important}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none !important}}@media (min-width:1200px){.hidden-lg{display:none !important}}.visible-print{display:none !important}@media print{.visible-print{display:block !important}table.visible-print{display:table !important}tr.visible-print{display:table-row !important}th.visible-print,td.visible-print{display:table-cell !important}}.visible-print-block{display:none !important}@media print{.visible-print-block{display:block !important}}.visible-print-inline{display:none !important}@media print{.visible-print-inline{display:inline !important}}.visible-print-inline-block{display:none !important}@media print{.visible-print-inline-block{display:inline-block !important}}@media print{.hidden-print{display:none !important}}.navbar{border-width:0 1px 4px 1px}.btn{padding:9px 12px 7px;border-width:0 1px 4px 1px;font-size:12px;font-weight:bold;text-transform:uppercase}.btn:hover{margin-top:1px;border-bottom-width:3px}.btn:active{margin-top:2px;border-bottom-width:2px;-webkit-box-shadow:none;box-shadow:none}.btn-lg,.btn-group-lg>.btn{padding:15px 16px 13px;line-height:15px}.btn-sm,.btn-group-sm>.btn{padding:6px 10px 4px}.btn-xs,.btn-group-xs>.btn{padding:3px 5px 1px}.btn-default:hover,.btn-default:focus,.btn-group.open .dropdown-toggle.btn-default{background-color:#eeeeee;border-color:#e2e2e2}.btn-primary:hover,.btn-primary:focus,.btn-group.open .dropdown-toggle.btn-primary{background-color:#158cba;border-color:#127ba3}.btn-success:hover,.btn-success:focus,.btn-group.open .dropdown-toggle.btn-success{background-color:#28b62c;border-color:#23a127}.btn-info:hover,.btn-info:focus,.btn-group.open .dropdown-toggle.btn-info{background-color:#75caeb;border-color:#5fc1e8}.btn-warning:hover,.btn-warning:focus,.btn-group.open .dropdown-toggle.btn-warning{background-color:#ff851b;border-color:#ff7701}.btn-danger:hover,.btn-danger:focus,.btn-group.open .dropdown-toggle.btn-danger{background-color:#ff4136;border-color:#ff291c}.btn-group.open .dropdown-toggle{-webkit-box-shadow:none;box-shadow:none}.navbar-btn:hover{margin-top:8px}.navbar-btn:active{margin-top:9px}.navbar-btn.btn-sm:hover{margin-top:11px}.navbar-btn.btn-sm:active{margin-top:12px}.navbar-btn.btn-xs:hover{margin-top:15px}.navbar-btn.btn-xs:active{margin-top:16px}.btn-group-vertical .btn+.btn:hover{border-top-width:1px}.btn-group-vertical .btn+.btn:active{border-top-width:2px}.text-primary,.text-primary:hover{color:#158cba}.text-success,.text-success:hover{color:#28b62c}.text-danger,.text-danger:hover{color:#ff4136}.text-warning,.text-warning:hover{color:#ff851b}.text-info,.text-info:hover{color:#75caeb}table a:not(.btn),.table a:not(.btn){text-decoration:underline}table .dropdown-menu a,.table .dropdown-menu a{text-decoration:none}table .success,.table .success,table .warning,.table .warning,table .danger,.table .danger,table .info,.table .info{color:#fff}table .success a:not(.btn),.table .success a:not(.btn),table .warning a:not(.btn),.table .warning a:not(.btn),table .danger a:not(.btn),.table .danger a:not(.btn),table .info a:not(.btn),.table .info a:not(.btn){color:#fff}table:not(.table-bordered)>thead>tr>th,.table:not(.table-bordered)>thead>tr>th,table:not(.table-bordered)>tbody>tr>th,.table:not(.table-bordered)>tbody>tr>th,table:not(.table-bordered)>tfoot>tr>th,.table:not(.table-bordered)>tfoot>tr>th,table:not(.table-bordered)>thead>tr>td,.table:not(.table-bordered)>thead>tr>td,table:not(.table-bordered)>tbody>tr>td,.table:not(.table-bordered)>tbody>tr>td,table:not(.table-bordered)>tfoot>tr>td,.table:not(.table-bordered)>tfoot>tr>td{border-color:transparent}.form-control{-webkit-box-shadow:inset 0 2px 0 rgba(0,0,0,0.075);box-shadow:inset 0 2px 0 rgba(0,0,0,0.075)}label{font-weight:normal}.has-warning .help-block,.has-warning .control-label,.has-warning .radio,.has-warning .checkbox,.has-warning .radio-inline,.has-warning .checkbox-inline,.has-warning.radio label,.has-warning.checkbox label,.has-warning.radio-inline label,.has-warning.checkbox-inline label,.has-warning .form-control-feedback{color:#ff851b}.has-warning .form-control,.has-warning .form-control:focus{border:1px solid #ff851b;-webkit-box-shadow:inset 0 2px 0 rgba(0,0,0,0.075);box-shadow:inset 0 2px 0 rgba(0,0,0,0.075)}.has-warning .input-group-addon{border:1px solid #ff851b}.has-error .help-block,.has-error .control-label,.has-error .radio,.has-error .checkbox,.has-error .radio-inline,.has-error .checkbox-inline,.has-error.radio label,.has-error.checkbox label,.has-error.radio-inline label,.has-error.checkbox-inline label,.has-error .form-control-feedback{color:#ff4136}.has-error .form-control,.has-error .form-control:focus{border:1px solid #ff4136;-webkit-box-shadow:inset 0 2px 0 rgba(0,0,0,0.075);box-shadow:inset 0 2px 0 rgba(0,0,0,0.075)}.has-error .input-group-addon{border:1px solid #ff4136}.has-success .help-block,.has-success .control-label,.has-success .radio,.has-success .checkbox,.has-success .radio-inline,.has-success .checkbox-inline,.has-success.radio label,.has-success.checkbox label,.has-success.radio-inline label,.has-success.checkbox-inline label,.has-success .form-control-feedback{color:#28b62c}.has-success .form-control,.has-success .form-control:focus{border:1px solid #28b62c;-webkit-box-shadow:inset 0 2px 0 rgba(0,0,0,0.075);box-shadow:inset 0 2px 0 rgba(0,0,0,0.075)}.has-success .input-group-addon{border:1px solid #28b62c}.nav .open>a,.nav .open>a:hover,.nav .open>a:focus{border-color:transparent}.nav-tabs>li>a{margin-top:6px;border-color:#e7e7e7;color:#333333;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.nav-tabs>li>a:hover,.nav-tabs>li>a:focus,.nav-tabs>li.active>a,.nav-tabs>li.active>a:hover,.nav-tabs>li.active>a:focus,.nav-tabs .open>a,.nav-tabs .open>a:hover,.nav-tabs .open>a:focus{padding-bottom:16px;margin-top:0}.nav-tabs .open>a,.nav-tabs .open>a:hover,.nav-tabs .open>a:focus{border-color:#e7e7e7}.nav-tabs>li.disabled>a:hover,.nav-tabs>li.disabled>a:focus{padding-top:10px;padding-bottom:10px;margin-top:6px}.nav-tabs.nav-justified>li{vertical-align:bottom}.dropdown-menu{margin-top:0;border-width:0 1px 4px 1px;border-top-width:1px;-webkit-box-shadow:none;box-shadow:none}.breadcrumb{border-color:#ededed;border-style:solid;border-width:0 1px 4px 1px}.pagination>li>a,.pager>li>a,.pagination>li>span,.pager>li>span{position:relative;top:0;border-width:0 1px 4px 1px;color:#555555;font-size:12px;font-weight:bold;text-transform:uppercase}.pagination>li>a:hover,.pager>li>a:hover,.pagination>li>span:hover,.pager>li>span:hover{top:1px;border-bottom-width:3px}.pagination>li>a:active,.pager>li>a:active,.pagination>li>span:active,.pager>li>span:active{top:2px;border-bottom-width:2px}.pagination>.disabled>a:hover,.pager>.disabled>a:hover,.pagination>.disabled>span:hover,.pager>.disabled>span:hover{top:0;border-width:0 1px 4px 1px}.pagination>.disabled>a:active,.pager>.disabled>a:active,.pagination>.disabled>span:active,.pager>.disabled>span:active{top:0;border-width:0 1px 4px 1px}.pager>li>a,.pager>li>span,.pager>.disabled>a,.pager>.disabled>span,.pager>li>a:hover,.pager>li>span:hover,.pager>.disabled>a:hover,.pager>.disabled>span:hover,.pager>li>a:active,.pager>li>span:active,.pager>.disabled>a:active,.pager>.disabled>span:active{border-left-width:2px;border-right-width:2px}.close{color:#fff;text-decoration:none;opacity:0.4}.close:hover,.close:focus{color:#fff;opacity:1}.alert{border-width:0 1px 4px 1px}.alert .alert-link{font-weight:normal;color:#fff;text-decoration:underline}.label{font-weight:normal}.progress{border:1px solid #e7e7e7;-webkit-box-shadow:inset 0 2px 0 rgba(0,0,0,0.1);box-shadow:inset 0 2px 0 rgba(0,0,0,0.1)}.progress-bar{-webkit-box-shadow:inset 0 -4px 0 rgba(0,0,0,0.15);box-shadow:inset 0 -4px 0 rgba(0,0,0,0.15)}.well{border:1px solid #e7e7e7;-webkit-box-shadow:inset 0 2px 0 rgba(0,0,0,0.05);box-shadow:inset 0 2px 0 rgba(0,0,0,0.05)}a.list-group-item.active,a.list-group-item.active:hover,a.list-group-item.active:focus{border-color:#eeeeee}a.list-group-item-success.active{background-color:#28b62c}a.list-group-item-success.active:hover,a.list-group-item-success.active:focus{background-color:#23a127}a.list-group-item-warning.active{background-color:#ff851b}a.list-group-item-warning.active:hover,a.list-group-item-warning.active:focus{background-color:#ff7701}a.list-group-item-danger.active{background-color:#ff4136}a.list-group-item-danger.active:hover,a.list-group-item-danger.active:focus{background-color:#ff291c}.jumbotron{border:1px solid #e7e7e7;-webkit-box-shadow:inset 0 2px 0 rgba(0,0,0,0.05);box-shadow:inset 0 2px 0 rgba(0,0,0,0.05)}.panel{border:1px solid #e7e7e7;border-width:0 1px 4px 1px}.panel-default .close{color:#555555}.modal .close{color:#555555}.popover{color:#555555}
    </style>
    <style>
      .alert a {
          font-weight: 400;
          color: #fff;
          text-decoration: underline;
      }
      .snmptn {
        color: #4682b4;
      }
      .container {
        max-width: 680px;
      }
      .table-program td {
          font-size: 1.1em;
      }    
      .alert-success {
          min-height: 203px;
          min-width: 650px;
      }
    </style>
</head>

<body>
    <div id="wrap">
        <div class="navbar navbar-default navbar-static-top">
            <div class="container" style="padding-top: 10px;">
                <div class="navbar-header">
                    <span id="span1" class="h2">FAKE GENERATOR <a class="snmptn" href="http://www.snmptn.ac.id/">SNMPTN 2020</a></span>
                    <span id="span2" class="h2 hidden">HASIL SELEKSI <a class="snmptn" href="http://www.snmptn.ac.id/">SNMPTN 2020</a></span>
                </div>
            </div>
        </div>
        <div class="container">
            <!--http://pengumuman.snmptn.ac.id/pengumuman2019.pdf-->
            <p>
                <a class="btn btn-default" href="#">
                Pengumuman Hasil Seleksi SNMPTN 2020 (PDF)
                </a>
            </p>
            <div class="alert alert-warning">
                Jadwal pencetakan ulang kartu pendaftaran: 10 April 2020 - 10 Mei 2020.
            </div>
            <div id="form" class="well">
                <fieldset>
                    <legend>Masukkan Data</legend>
                    <form name="snm" method="POST" onsubmit="return validateForm()" action="">
                    <div class="form-group">
                        <label>No. Pendaftaran</label>
                        <input type="number" class="form-control input-md input-regno" id="regno" name="regno" value ="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="-- 1234567890 --" maxlength="10" size="10" autocomplete="off" required="">
                        <!--input type="text" class="form-control input-md input-regno" id="regno" name="regno" value="" placeholder="Ex: 8180454470" autocomplete="off" required="" /-->
                        <p class="help-block info">No. pendaftaran SNMPTN: 10 digit, tertera pada kartu peserta SNMPTN.<br>Gak punya kartu SNMPTN? isi asal aja gan, selow ntar disensor aja nmr nya :v</p>
                    </div>
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" class="form-control input-md input-nama" id="nama" name="nama" value="" placeholder="Nabilah Ratna Ayu Azalia" style="text-transform:uppercase" autocomplete="off" required="">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <div class="form-inline">
                            <div class="form-group input-birth">
                                <select class="form-control input-md" id="day" name="day" autocomplete="off" required="">
                                    <option value="" disabled="" selected="">Tgl</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>                                /
                                <select class="form-control input-md" id="month" name="month" autocomplete="off" required="">
                                    <option value="" disabled="" selected="">Bln</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>                                /
                                <select class="form-control input-md" id="year" name="year" autocomplete="off" required="">
                                    <option value="" disabled="" selected="">Tahun</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                </select>
                            </div>
                            <p class="help-block info">Tgl. (1-31) / Bln. (1-12) / Tahun</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>NISN (Nomor Induk Siswa Nasional)</label>
                        <input type="number" class="form-control input-md input-nisn" id="nisn" name="nisn" value ="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="-- 9991234000 --" maxlength="10" size="10" autocomplete="off" required="">
                    </div>
                    <div class="form-group">
                        <label>Asal Sekolah</label>
                        <input type="text" class="form-control input-md input-sekolah" id="sekolah" name="sekolah" value="" placeholder="-- SMAN 92 Jakarta Utara --" style="text-transform:uppercase" autocomplete="off" required="">
                    </div>
                    <div class="form-group">
                        <label>Provinsi</label>
                        <select class="form-control input-md input-prov" name="prov" id="provinsiSel" required="">
                            <option value="" selected="selected">-- Provinsi --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <!--label>Kabupaten/Kota</label>
                        <select class="form-control input-md input-kota" name="kabkota" id="kabkotaSel" required="">
                            <option value="" selected="selected">-- Kabupaten/Kota --</option>
                        </select-->
                        <label>Kabupaten/Kota</label>
                        <select class="form-control input-md input-kota" name="kabkota" id="kabkotaSel" required="">
                            <option value="" selected="selected">-- Kabupaten/Kota --</option>
                        </select>

                    </div>
                    <!--div class="form-group"-->
                        <!--label>Kecamatan/Kelurahan</label-->
                        <select name="keckel" id="keckelSel" hidden="">
                            <option value="" selected="selected">-- Kecamatan/Kelurahan --</option>
                        </select>
                    <!--/div-->
                    <div class="form-group">
                        <label>Nama PTN</label>
                        <select class="form-control input-md input-kota" name="kodeptn" id="kodeptn" required="">
                            <option value="" selected="selected">-- PTN --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select class="form-control input-md input-kota" name="jurusan" id="jurusan" required="">
                            <option value="" selected="selected">-- Jurusan --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Prodi</label>
                        <select class="form-control input-md input-kota" name="prodi" id="prodi" required="">
                            <option value="" selected="selected">-- Prodi --</option>
                        </select>
                    </div>
                    <!-- div class="form-group">
                        <label>Website PTN</label>
                        <input type="text" class="form-control input-md input-ptnweb" id="" name="ptnweb" value="http://www." placeholder="http://www." style="text-transform:lowercase" autocomplete="off" required="" />
                        <p class="help-block info">Alamat website PTN. Contoh: https://www.ipb.ac.id</p>
                    </div -->
                </fieldset>
                <button class="btn btn-primary" id="submitBtn" name="submit">Buat Ortumu Bangga!</button>
                </form>
            </div>
            <div id="genform" class="well hidden">
                <fieldset>
                    <legend>Masukkan Nomor Pendaftaran SNMPTN dan Tanggal Lahir</legend>
                    <div class="form-group">
                        <label>No. Pendaftaran</label>
                        <input type="text" class="form-control input-lg input-regno" id="regno" value="<?php if(isset($_POST['submit'])){echo $_POST["regno"];} ?>" />
                        <p class="help-block info">No. pendaftaran SNMPTN: 10 digit, tertera pada kartu peserta SNMPTN.</p>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <div class="form-inline">
                            <div class="form-group input-birth">
                                <input class="form-control input-lg" size="3" id="day" value="<?php if(isset($_POST['submit'])){echo $_POST["day"];} ?>" placeholder="Tgl" />                                /
                                <input class="form-control input-lg" size="3" id="month" value="<?php if(isset($_POST['submit'])){echo $_POST["month"];} ?>" placeholder="Bln" />                                /
                                <input class="form-control input-lg" size="5" id="year" value="<?php if(isset($_POST['submit'])){echo $_POST["year"];} ?>" placeholder="Tahun" />
                            </div>
                            <p class="help-block info">Tgl. (1-31) / Bln. (1-12) / Tahun</p>
                        </div>
                    </div>
                </fieldset>
                <button class="btn btn-primary" id="searchBtn">Lihat Hasil Seleksi</button>
            </div>

            <div class="alert alert-danger hidden" id="divNotFound">
                Nomor pendaftaran dan/atau tanggal lahir tidak ditemukan. Silakan cek kembali nomor pendaftaran dan tanggal lahir yang Anda
                masukkan.
            </div>

            <div class="panel panel-info hidden" id="divData">
                <div class="panel-heading">Data Siswa Pendaftar</div>
                <table class="table table-bordered fields">
                    <tbody><tr>
                        <td>Nomor Pendaftaran</td>
                        <td><span id="no"><?php if(isset($_POST['submit'])){echo $_POST["regno"];} ?></span></td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td><span id="nama"><?php if(isset($_POST['submit'])){echo strtoupper($_POST["nama"]);} ?></span></td>
                    </tr>
                    <tr>
                        <td>NISN Siswa</td>
                        <td><span id="nisn"><?php if(isset($_POST['submit'])){echo $_POST["nisn"];} ?></span></td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td><span id="sekolah"><?php if(isset($_POST['submit'])){echo strtoupper($_POST["sekolah"]);} ?></span></td>
                    </tr>
                    <tr>
                        <td>Kabupaten/Kota</td>
                        <td><span id="kota"><?php if(isset($_POST['submit'])){echo strtoupper($_POST["kabkota"]);} ?></span></td>
                    </tr>
                    <tr>
                        <td>Provinsi</td>
                        <td><span id="provinsi"><?php if(isset($_POST['submit'])){echo strtoupper($_POST["prov"]);} ?></span></td>
                    </tr>
                </tbody></table>
            </div>

            <div class="alert alert-success hidden" id="divResult">
                <table style="width: 100%">
                    <tbody><tr>
                        <td>
                            <p><strong>Selamat, Anda dinyatakan Lulus Seleksi SNMPTN 2020 pada</strong></p>
                            <table class="pull-left table table-program">
                                <tbody><tr>
                                    <td width="120px">PTN</td>
                                    <td><b><span id="ptn"><?php if(isset($_POST['submit'])){echo strtoupper($_POST["kodeptn"]);} ?></span></b></td>
                                </tr>
                                <tr>
                                    <td>Program Studi</td>
                                    <td><b><span id="prodi"><?php if(isset($_POST['submit'])){echo strtoupper($_POST["prodi"]);} ?></span></b></td>
                                </tr>
                            </tbody></table>
                        </td>
                        <td width="180px">
                            <img style="margin-left:5px;float:right;width: 175px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQ4AAAEOCAYAAAB4sfmlAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAKT2lDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjanVNnVFPpFj333vRCS4iAlEtvUhUIIFJCi4AUkSYqIQkQSoghodkVUcERRUUEG8igiAOOjoCMFVEsDIoK2AfkIaKOg6OIisr74Xuja9a89+bN/rXXPues852zzwfACAyWSDNRNYAMqUIeEeCDx8TG4eQuQIEKJHAAEAizZCFz/SMBAPh+PDwrIsAHvgABeNMLCADATZvAMByH/w/qQplcAYCEAcB0kThLCIAUAEB6jkKmAEBGAYCdmCZTAKAEAGDLY2LjAFAtAGAnf+bTAICd+Jl7AQBblCEVAaCRACATZYhEAGg7AKzPVopFAFgwABRmS8Q5ANgtADBJV2ZIALC3AMDOEAuyAAgMADBRiIUpAAR7AGDIIyN4AISZABRG8lc88SuuEOcqAAB4mbI8uSQ5RYFbCC1xB1dXLh4ozkkXKxQ2YQJhmkAuwnmZGTKBNA/g88wAAKCRFRHgg/P9eM4Ors7ONo62Dl8t6r8G/yJiYuP+5c+rcEAAAOF0ftH+LC+zGoA7BoBt/qIl7gRoXgugdfeLZrIPQLUAoOnaV/Nw+H48PEWhkLnZ2eXk5NhKxEJbYcpXff5nwl/AV/1s+X48/Pf14L7iJIEyXYFHBPjgwsz0TKUcz5IJhGLc5o9H/LcL//wd0yLESWK5WCoU41EScY5EmozzMqUiiUKSKcUl0v9k4t8s+wM+3zUAsGo+AXuRLahdYwP2SycQWHTA4vcAAPK7b8HUKAgDgGiD4c93/+8//UegJQCAZkmScQAAXkQkLlTKsz/HCAAARKCBKrBBG/TBGCzABhzBBdzBC/xgNoRCJMTCQhBCCmSAHHJgKayCQiiGzbAdKmAv1EAdNMBRaIaTcA4uwlW4Dj1wD/phCJ7BKLyBCQRByAgTYSHaiAFiilgjjggXmYX4IcFIBBKLJCDJiBRRIkuRNUgxUopUIFVIHfI9cgI5h1xGupE7yAAygvyGvEcxlIGyUT3UDLVDuag3GoRGogvQZHQxmo8WoJvQcrQaPYw2oefQq2gP2o8+Q8cwwOgYBzPEbDAuxsNCsTgsCZNjy7EirAyrxhqwVqwDu4n1Y8+xdwQSgUXACTYEd0IgYR5BSFhMWE7YSKggHCQ0EdoJNwkDhFHCJyKTqEu0JroR+cQYYjIxh1hILCPWEo8TLxB7iEPENyQSiUMyJ7mQAkmxpFTSEtJG0m5SI+ksqZs0SBojk8naZGuyBzmULCAryIXkneTD5DPkG+Qh8lsKnWJAcaT4U+IoUspqShnlEOU05QZlmDJBVaOaUt2ooVQRNY9aQq2htlKvUYeoEzR1mjnNgxZJS6WtopXTGmgXaPdpr+h0uhHdlR5Ol9BX0svpR+iX6AP0dwwNhhWDx4hnKBmbGAcYZxl3GK+YTKYZ04sZx1QwNzHrmOeZD5lvVVgqtip8FZHKCpVKlSaVGyovVKmqpqreqgtV81XLVI+pXlN9rkZVM1PjqQnUlqtVqp1Q61MbU2epO6iHqmeob1Q/pH5Z/YkGWcNMw09DpFGgsV/jvMYgC2MZs3gsIWsNq4Z1gTXEJrHN2Xx2KruY/R27iz2qqaE5QzNKM1ezUvOUZj8H45hx+Jx0TgnnKKeX836K3hTvKeIpG6Y0TLkxZVxrqpaXllirSKtRq0frvTau7aedpr1Fu1n7gQ5Bx0onXCdHZ4/OBZ3nU9lT3acKpxZNPTr1ri6qa6UbobtEd79up+6Ynr5egJ5Mb6feeb3n+hx9L/1U/W36p/VHDFgGswwkBtsMzhg8xTVxbzwdL8fb8VFDXcNAQ6VhlWGX4YSRudE8o9VGjUYPjGnGXOMk423GbcajJgYmISZLTepN7ppSTbmmKaY7TDtMx83MzaLN1pk1mz0x1zLnm+eb15vft2BaeFostqi2uGVJsuRaplnutrxuhVo5WaVYVVpds0atna0l1rutu6cRp7lOk06rntZnw7Dxtsm2qbcZsOXYBtuutm22fWFnYhdnt8Wuw+6TvZN9un2N/T0HDYfZDqsdWh1+c7RyFDpWOt6azpzuP33F9JbpL2dYzxDP2DPjthPLKcRpnVOb00dnF2e5c4PziIuJS4LLLpc+Lpsbxt3IveRKdPVxXeF60vWdm7Obwu2o26/uNu5p7ofcn8w0nymeWTNz0MPIQ+BR5dE/C5+VMGvfrH5PQ0+BZ7XnIy9jL5FXrdewt6V3qvdh7xc+9j5yn+M+4zw33jLeWV/MN8C3yLfLT8Nvnl+F30N/I/9k/3r/0QCngCUBZwOJgUGBWwL7+Hp8Ib+OPzrbZfay2e1BjKC5QRVBj4KtguXBrSFoyOyQrSH355jOkc5pDoVQfujW0Adh5mGLw34MJ4WHhVeGP45wiFga0TGXNXfR3ENz30T6RJZE3ptnMU85ry1KNSo+qi5qPNo3ujS6P8YuZlnM1VidWElsSxw5LiquNm5svt/87fOH4p3iC+N7F5gvyF1weaHOwvSFpxapLhIsOpZATIhOOJTwQRAqqBaMJfITdyWOCnnCHcJnIi/RNtGI2ENcKh5O8kgqTXqS7JG8NXkkxTOlLOW5hCepkLxMDUzdmzqeFpp2IG0yPTq9MYOSkZBxQqohTZO2Z+pn5mZ2y6xlhbL+xW6Lty8elQfJa7OQrAVZLQq2QqboVFoo1yoHsmdlV2a/zYnKOZarnivN7cyzytuQN5zvn//tEsIS4ZK2pYZLVy0dWOa9rGo5sjxxedsK4xUFK4ZWBqw8uIq2Km3VT6vtV5eufr0mek1rgV7ByoLBtQFr6wtVCuWFfevc1+1dT1gvWd+1YfqGnRs+FYmKrhTbF5cVf9go3HjlG4dvyr+Z3JS0qavEuWTPZtJm6ebeLZ5bDpaql+aXDm4N2dq0Dd9WtO319kXbL5fNKNu7g7ZDuaO/PLi8ZafJzs07P1SkVPRU+lQ27tLdtWHX+G7R7ht7vPY07NXbW7z3/T7JvttVAVVN1WbVZftJ+7P3P66Jqun4lvttXa1ObXHtxwPSA/0HIw6217nU1R3SPVRSj9Yr60cOxx++/p3vdy0NNg1VjZzG4iNwRHnk6fcJ3/ceDTradox7rOEH0x92HWcdL2pCmvKaRptTmvtbYlu6T8w+0dbq3nr8R9sfD5w0PFl5SvNUyWna6YLTk2fyz4ydlZ19fi753GDborZ752PO32oPb++6EHTh0kX/i+c7vDvOXPK4dPKy2+UTV7hXmq86X23qdOo8/pPTT8e7nLuarrlca7nuer21e2b36RueN87d9L158Rb/1tWeOT3dvfN6b/fF9/XfFt1+cif9zsu72Xcn7q28T7xf9EDtQdlD3YfVP1v+3Njv3H9qwHeg89HcR/cGhYPP/pH1jw9DBY+Zj8uGDYbrnjg+OTniP3L96fynQ89kzyaeF/6i/suuFxYvfvjV69fO0ZjRoZfyl5O/bXyl/erA6xmv28bCxh6+yXgzMV70VvvtwXfcdx3vo98PT+R8IH8o/2j5sfVT0Kf7kxmTk/8EA5jz/GMzLdsAAAAgY0hSTQAAeiUAAICDAAD5/wAAgOkAAHUwAADqYAAAOpgAABdvkl/FRgAABedJREFUeNrs3VFy2zAMBcC6o/tf2TmBWjPiMwBp9zujULLzhiJC4vV+v99/ABb89QgAwQEIDkBwAIIDEBwAggMQHIDgAAQHIDgABAcgOADBAQgOQHAACA5AcACCAxAcgOAABAeA4ACyjvQveL1eIx7EanuZs/uqalOz+pzPxjn981r9XHb9/PTvsxkH4FUFEByA4AAEB8AHjqpfPKX6sGsVfVfVo+p57qoydBvnrvFM+T6bcQBeVQDBAQgOAMEBXHB0G9CuVeL0avnZONNVhvRejF3VnHT1Kj3OXd+fbt9nMw5AcACCAxAcAIIDuODwCP6t28la6dX+qj0pVdWrbtUKMw5AcAAIDkBwAIIDaExV5T+q9pJ0G//q9dNVpG59bcw4AAQHIDgAwQEIDuAB2lVVuq2KV/XjqOrnkh5nVXWpqv/LXas8ZhyA4AAEByA4AMEBPFJZVaWqy3Y36T4pVXtnuo1/SvXKjAMQHACCAxAcgOAAGnu9HZlU+wGE93qkP94p3didGGbGAQgOQHAAggNAcACXxfeqVP0Pf9VJU6vjSY+/qst8+vtQdfLYlD04ZhyAVxVAcACCA0BwAAHt9qqkT3C66yr3lP4mPse9z1lVBfCqAggOAMEBCA7gi+JVlemr1lW6PZ9d43la1axbnxozDsCrCiA4AMEBIDiAC44pA921erxrVXzKdab83nR1QPXEjAPwqgIIDkBwAAgO4LKyE8CqVum7mb4n5WlVntXnZq8KgOAABAcgOADBAdxIuxPAnEy1V3rPxV2rYN32IqW//2YcgOAABAcgOADBAfCB+Alg6VX0qr0Ans93nkP6vnY9z6rqhr0qgFcVQHAACA5AcABfFK+qTPnf+ypVe0N2jXNK/5H0dbqdhGbGAXhVAQQHIDgABAcQ0K5bfdXJUWfXn1412DXO1efQra9Kt+/z9Psy4wAEByA4AMEBCA7gkdp1q9+l2x6Nbs/zaXtMplR59FUBvKoACA5AcACCA2is3V6Vqj0aq3tVup3cVVVFqjopK31f6evsoq8K4FUFEBwAggMQHMAXHdNvIL1nYfX3nqla1b9rP5Rdn0v680qPX18VwKsKIDgABAcgOIAvKjsB7HRARXsZqkzZYzL9xK2qLvbdrm/GAXhVAQQHIDgABAdwQbyqMmU1u+wDGHJf6eqJviq11zfjAAQHIDgAwQEIDoAPtOtWn16FXpVeja8a/67PZUp39eknvKU/dzMOwKsKIDgAwQEIDoAPjOmrUrUq3q0b+127q6+aciLc6vPXVwXwqgIgOADBAQgOoLF4VaVbVaKqirEqXTWYshcm/T2pOpFsej8gMw5AcACCAxAcgOAAHqndXpWqfhnp6szq/e76+dXxT+/Srq+KGQfgVQUQHIDgABAcQExZt/opJzidqao+7HrO6etUfX+63VdVvxV9VQCvKoDgAAQHgOAAAuxVaXq/Z6b0Den2fFTxzDgAryqA4AAEB4DgAC47pt/AlBOfuu1h2XX9KXtYplejdnW3N+MAvKoAggMQHACCA7ggfgLY+AfUrJ/LmXT/jm6m7GnqdnKXGQcgOADBAQgOAMEBXBDfqzJ9lX71vtJ7Pc5+b7o6MGW1f0qflPTfi74qgFcVQHAAggNAcAABZSeAdTs5qmqcu8aTXo2v2rMzvQ9O+vmbcQBeVQDBASA4AMEBfFG7virTT8RK7w1ZHU9V/47pfW2qqhhT+sWYcQCCAxAcgOAABAfwSIdHsNfqqni37vDpVfpd1YFufW3Sz8FeFcCrCiA4AAQHIDiABlRVfim9Kj69z0vVSV9V15lSzTHjAAQHIDgAwQEgOIAL2lVVpnRFXx1/t5Ovup1Utut+V6+z6+fT40+P04wDEByA4AAEByA4AD5QVlWZ/r/6Vbp1h+9Wtem2N+eufxdmHIDgAAQHIDgAwQE80us9fXMIYMYBCA5AcAAIDkBwAIIDEByA4AAEB4DgAAQHIDgAwQEIDgDBAQgOQHAAggMQHACCAxAcgOAABAdwNz8DAG6n8zekJD+FAAAAAElFTkSuQmCC" id="qr" alt="QRCode SNMPTN 2020">
                        </td>
                    </tr>
                </tbody></table>
            </div>

            <div class="alert alert-warning hidden" id="divInfoResult1">
                <!-- text 2020 -->
                
                <p>Status penerimaan Anda sebagai mahasiswa akan ditetapkan setelah PTN tujuan melakukan verifikasi data akademik (rapor dan/atau portofolio).
                    Silakan Anda membaca peraturan tentang penerimaan mahasiswa baru di laman PTN tujuan. 
                    Ketidakcermatan Anda dalam memenuhi ketentuan PTN dapat berdampak pada status penerimaan Anda. 
                </p>

                <p>Khusus peserta KIP Kuliah, PTN tujuan juga dapat melakukan verifikasi data ekonomi dan/atau kunjungan ke tempat tinggal Anda sebelum menetapkan status penerimaan Anda.
                </p>
                
                <p>Sebagai bentuk rasa syukur kepada Tuhan Yang Maha Esa karena telah diterima melalui jalur SNMPTN 2020, mohon Anda bersedia menjadi "Duta Pencegahan Covid-19" dengan cara membantu mensosialisasikan materi yang tersedia di laman <a href="http://ltmpt.ac.id">ltmpt.ac.id</a> atau di Satgas Covid–19 PTN melalui berbagai media daring atau media lainnya.
                </p>
                <p>Pengumuman Resmi Tim Pelaksana Lembaga Tes Masuk Perguruan Tinggi 2020, <a
                                href=/pengumuman2020.pdf>klik disini</a>.
                </p>
                <!-- text 2019
                <p>
                    Status penerimaan Anda sebagai mahasiswa di PTN tujuan, akan ditentukan berdasarkan verifikasi data akademik (rapor dan portofolio) dan persyaratan yang akan ditentukan PTN, yang akan dilaksanakan oleh PTN tempat Anda diterima. Silakan anda melihat peraturan tentang penerimaan mhs baru di laman PTN yang meluluskan Anda. Ketidakcermatan Anda dalam memenuhi ketentuan PTN dapat berdampak pada status penerimaan Anda. Setelah Anda dinyatakan lolos verifikasi, maka status Anda ditetapkan diterima sebagai mahasiswa di PTN tujuan tersebut.
                </p>
                <p>
                    Bagi Anda peserta bidikmisi, selain dilakukan verifikasi terhadap data akademik Anda, PTN tujuan dapat juga melakukan verifikasi data ekonomi dan/atau kunjungan ke alamat tinggal Anda untuk menetapkan status penerimaan Anda sebagai mahasiswa.
                </p>
                <p>
                    Pengumuman Resmi Tim Pelaksana Lembaga Tes Masuk Perguruan Tinggi 2020, <a href="#">klik disini</a>.
                </p>
                -->
                <!-- text 2018
                <p>Status penerimaan Anda sebagai mahasiswa di PTN tujuan, akan ditentukan berdasarkan verifikasi data akademik
                    (rapor dan portofolio) yang akan dilaksanakan oleh PTN tempat Anda diterima. Kehadiran pada saat registrasi
                    tanggal 8 Mei 2020 menentukan proses verifikasi dan status penerimaan Anda. Setelah Anda dinyatakan
                    lolos verifikasi, maka status Anda ditetapkan diterima sebagai mahasiswa di PTN tujuan tersebut.</p>
                <p>Bagi Anda peserta bidikmisi, selain dilakukan verifikasi terhadap data akademik Anda, PTN
                    tujuan dapat juga melakukan verifikasi data ekonomi dan/atau kunjungan ke alamat tinggal Anda untuk menetapkan
                    status penerimaan Anda sebagai mahasiswa.</p>
                <p>Pengumuman Resmi Panitia Pusat Seleksi Nasional PMB PTN 2020, <a href="http://pengumuman.snmptn.ac.id/pengumuman2019.pdf">klik disini</a>.</p>
                -->
            </div>

            <div class="alert alert-danger hidden" id="divInfoResult2">
                <!-- text 2020 -->
                <p><strong>Penting: Anda harus melakukan pendaftaran ulang di PTN tempat Anda diterima.</strong>
                    <p>Informasi pendaftaran ulang di PTN Anda dapat dilihat pada <em>link</em> di bawah (klik pada
                        tulisan Informasi Pendaftaran Ulang).<h4 style=margin-top:10px;margin-bottom:0><a
                                href=https://registrasi.admisi.ipb.ac.id id=url1><strong>Informasi Pendaftaran Ulang »</strong></a></h4>
                        <p><a href=https://registrasi.admisi.ipb.ac.id id=url2><span id=url3>https://registrasi.admisi.ipb.ac.id</span></a>
                <!-- text 2019
                <p><strong>Penting: Anda harus melakukan pendaftaran ulang di PTN tempat Anda diterima.</strong><p>Informasi pendaftaran ulang di PTN Anda dapat dilihat pada <em>link</em> di bawah (klik pada tulisan Informasi Pendaftaran Ulang).</p>
                <h4 style="margin-top:10px;margin-bottom:0"><a id="url1" href=""><strong>Informasi Pendaftaran Ulang »</strong></a></h4>
                <p><a id="url2" href=""><span id="url3"></span></a></p>
                -->
                <!-- text 2018
                <p><strong>Penting: Anda harus melakukan pendaftaran ulang di PTN tempat Anda diterima.</strong></p>
                <p>Informasi pendaftaran ulang di PTN Anda dapat dilihat pada <em>link</em> di bawah (klik pada tulisan Informasi
                    Pendaftaran Ulang).</p>
                <h4 style="margin-top:10px;margin-bottom:0"><a id="url1" href=""><strong>Informasi Pendaftaran Ulang »</strong></a></h4>
                <p><a id="url2" href=""><span id="url3"></span></a></p>
                -->
            </div>

            <div class="alert alert-danger hidden" id="divNotAccepted">
                Anda dinyatakan tidak lulus seleksi SNMPTN 2020. Silakan mengikuti SBMPTN 2020.
            </div>

            <div id="push"></div>
        </div>
    </div>
    <div id="footer">
        <div class="container">
            <p id="foot1" class="muted">naufalist@2020</p>
            <p id="foot2" class="muted hidden">Tim Pelaksana Lembaga Tes Masuk Perguruan Tinggi 2020</p>
            <!--p class="muted">Panitia Pusat Seleksi Nasional PMB PTN 2019</p--><!-- 2018 -->
        </div>
    </div>
<?php
if (isset($_POST['submit'])) {
    echo '
        <script type="text/javascript">
        setTimeout(function () { swal("Selamat!","Kamu lolos snmptn hhhhhh :v\nSelamat pansos!\nJangan lupa sensor dulu wkwkwk","success")}, 1000);
        </script>
        ';
    echo '<script>hide("span1");</script>';
    echo '<script>show("span2");</script>';
    echo '<script>hide("form");</script>';
    echo '<script>show("genform");</script>';
    echo '<script>show("divData");</script>';
    echo '<script>show("divResult");</script>';
    echo '<script>show("divInfoResult1");</script>';
    echo '<script>show("divInfoResult2");</script>';
    echo '<script>hide("foot1");</script>';
    echo '<script>show("foot2");</script>';
}

?>
</body>

</html>
