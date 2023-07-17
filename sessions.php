<html>

<head>
    <title>Tutor Park</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" href="assets/images/fevicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/index.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- style section -->
    <style type="text/css">
        :root,
        :host {
            --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Solid";
            --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Regular";
            --fa-font-light: normal 300 1em/1 "Font Awesome 6 Light";
            --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Thin";
            --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
            --fa-font-sharp-solid: normal 900 1em/1 "Font Awesome 6 Sharp";
            --fa-font-sharp-regular: normal 400 1em/1 "Font Awesome 6 Sharp";
            --fa-font-sharp-light: normal 300 1em/1 "Font Awesome 6 Sharp";
            --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
        }

        svg:not(:root).svg-inline--fa,
        svg:not(:host).svg-inline--fa {
            overflow: visible;
            box-sizing: content-box;
        }

        .svg-inline--fa {
            display: var(--fa-display, inline-block);
            height: 1em;
            overflow: visible;
            vertical-align: -0.125em;
        }

        .svg-inline--fa.fa-2xs {
            vertical-align: 0.1em;
        }

        .svg-inline--fa.fa-xs {
            vertical-align: 0em;
        }

        .svg-inline--fa.fa-sm {
            vertical-align: -0.0714285705em;
        }

        .svg-inline--fa.fa-lg {
            vertical-align: -0.2em;
        }

        .svg-inline--fa.fa-xl {
            vertical-align: -0.25em;
        }

        .svg-inline--fa.fa-2xl {
            vertical-align: -0.3125em;
        }

        .svg-inline--fa.fa-pull-left {
            margin-right: var(--fa-pull-margin, 0.3em);
            width: auto;
        }

        .svg-inline--fa.fa-pull-right {
            margin-left: var(--fa-pull-margin, 0.3em);
            width: auto;
        }

        .svg-inline--fa.fa-li {
            width: var(--fa-li-width, 2em);
            top: 0.25em;
        }

        .svg-inline--fa.fa-fw {
            width: var(--fa-fw-width, 1.25em);
        }

        .fa-layers svg.svg-inline--fa {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
        }

        .fa-layers-counter,
        .fa-layers-text {
            display: inline-block;
            position: absolute;
            text-align: center;
        }

        .fa-layers {
            display: inline-block;
            height: 1em;
            position: relative;
            text-align: center;
            vertical-align: -0.125em;
            width: 1em;
        }

        .fa-layers svg.svg-inline--fa {
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-text {
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-counter {
            background-color: var(--fa-counter-background-color, #ff253a);
            border-radius: var(--fa-counter-border-radius, 1em);
            box-sizing: border-box;
            color: var(--fa-inverse, #fff);
            line-height: var(--fa-counter-line-height, 1);
            max-width: var(--fa-counter-max-width, 5em);
            min-width: var(--fa-counter-min-width, 1.5em);
            overflow: hidden;
            padding: var(--fa-counter-padding, 0.25em 0.5em);
            right: var(--fa-right, 0);
            text-overflow: ellipsis;
            top: var(--fa-top, 0);
            -webkit-transform: scale(var(--fa-counter-scale, 0.25));
            transform: scale(var(--fa-counter-scale, 0.25));
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-bottom-right {
            bottom: var(--fa-bottom, 0);
            right: var(--fa-right, 0);
            top: auto;
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: bottom right;
            transform-origin: bottom right;
        }

        .fa-layers-bottom-left {
            bottom: var(--fa-bottom, 0);
            left: var(--fa-left, 0);
            right: auto;
            top: auto;
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: bottom left;
            transform-origin: bottom left;
        }

        .fa-layers-top-right {
            top: var(--fa-top, 0);
            right: var(--fa-right, 0);
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-top-left {
            left: var(--fa-left, 0);
            right: auto;
            top: var(--fa-top, 0);
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: top left;
            transform-origin: top left;
        }

        .fa-1x {
            font-size: 1em;
        }

        .fa-2x {
            font-size: 2em;
        }

        .fa-3x {
            font-size: 3em;
        }

        .fa-4x {
            font-size: 4em;
        }

        .fa-5x {
            font-size: 5em;
        }

        .fa-6x {
            font-size: 6em;
        }

        .fa-7x {
            font-size: 7em;
        }

        .fa-8x {
            font-size: 8em;
        }

        .fa-9x {
            font-size: 9em;
        }

        .fa-10x {
            font-size: 10em;
        }

        .fa-2xs {
            font-size: 0.625em;
            line-height: 0.1em;
            vertical-align: 0.225em;
        }

        .fa-xs {
            font-size: 0.75em;
            line-height: 0.0833333337em;
            vertical-align: 0.125em;
        }

        .fa-sm {
            font-size: 0.875em;
            line-height: 0.0714285718em;
            vertical-align: 0.0535714295em;
        }

        .fa-lg {
            font-size: 1.25em;
            line-height: 0.05em;
            vertical-align: -0.075em;
        }

        .fa-xl {
            font-size: 1.5em;
            line-height: 0.0416666682em;
            vertical-align: -0.125em;
        }

        .fa-2xl {
            font-size: 2em;
            line-height: 0.03125em;
            vertical-align: -0.1875em;
        }

        .fa-fw {
            text-align: center;
            width: 1.25em;
        }

        .fa-ul {
            list-style-type: none;
            margin-left: var(--fa-li-margin, 2.5em);
            padding-left: 0;
        }

        .fa-ul>li {
            position: relative;
        }

        .fa-li {
            left: calc(var(--fa-li-width, 2em) * -1);
            position: absolute;
            text-align: center;
            width: var(--fa-li-width, 2em);
            line-height: inherit;
        }

        .fa-border {
            border-color: var(--fa-border-color, #eee);
            border-radius: var(--fa-border-radius, 0.1em);
            border-style: var(--fa-border-style, solid);
            border-width: var(--fa-border-width, 0.08em);
            padding: var(--fa-border-padding, 0.2em 0.25em 0.15em);
        }

        .fa-pull-left {
            float: left;
            margin-right: var(--fa-pull-margin, 0.3em);
        }

        .fa-pull-right {
            float: right;
            margin-left: var(--fa-pull-margin, 0.3em);
        }

        .fa-beat {
            -webkit-animation-name: fa-beat;
            animation-name: fa-beat;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
            animation-timing-function: var(--fa-animation-timing, ease-in-out);
        }

        .fa-bounce {
            -webkit-animation-name: fa-bounce;
            animation-name: fa-bounce;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
        }

        .fa-fade {
            -webkit-animation-name: fa-fade;
            animation-name: fa-fade;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
        }

        .fa-beat-fade {
            -webkit-animation-name: fa-beat-fade;
            animation-name: fa-beat-fade;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
        }

        .fa-flip {
            -webkit-animation-name: fa-flip;
            animation-name: fa-flip;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
            animation-timing-function: var(--fa-animation-timing, ease-in-out);
        }

        .fa-shake {
            -webkit-animation-name: fa-shake;
            animation-name: fa-shake;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, linear);
            animation-timing-function: var(--fa-animation-timing, linear);
        }

        .fa-spin {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 2s);
            animation-duration: var(--fa-animation-duration, 2s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, linear);
            animation-timing-function: var(--fa-animation-timing, linear);
        }

        .fa-spin-reverse {
            --fa-animation-direction: reverse;
        }

        .fa-pulse,
        .fa-spin-pulse {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, steps(8));
            animation-timing-function: var(--fa-animation-timing, steps(8));
        }

        @media (prefers-reduced-motion: reduce) {

            .fa-beat,
            .fa-bounce,
            .fa-fade,
            .fa-beat-fade,
            .fa-flip,
            .fa-pulse,
            .fa-shake,
            .fa-spin,
            .fa-spin-pulse {
                -webkit-animation-delay: -1ms;
                animation-delay: -1ms;
                -webkit-animation-duration: 1ms;
                animation-duration: 1ms;
                -webkit-animation-iteration-count: 1;
                animation-iteration-count: 1;
                -webkit-transition-delay: 0s;
                transition-delay: 0s;
                -webkit-transition-duration: 0s;
                transition-duration: 0s;
            }
        }

        @-webkit-keyframes fa-beat {

            0%,
            90% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            45% {
                -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                transform: scale(var(--fa-beat-scale, 1.25));
            }
        }

        @keyframes fa-beat {

            0%,
            90% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            45% {
                -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                transform: scale(var(--fa-beat-scale, 1.25));
            }
        }

        @-webkit-keyframes fa-bounce {
            0% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }

            10% {
                -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
                transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            }

            30% {
                -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
                transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            }

            50% {
                -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
                transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            }

            57% {
                -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
                transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            }

            64% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }

            100% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
        }

        @keyframes fa-bounce {
            0% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }

            10% {
                -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
                transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            }

            30% {
                -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
                transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            }

            50% {
                -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
                transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            }

            57% {
                -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
                transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            }

            64% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }

            100% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
        }

        @-webkit-keyframes fa-fade {
            50% {
                opacity: var(--fa-fade-opacity, 0.4);
            }
        }

        @keyframes fa-fade {
            50% {
                opacity: var(--fa-fade-opacity, 0.4);
            }
        }

        @-webkit-keyframes fa-beat-fade {

            0%,
            100% {
                opacity: var(--fa-beat-fade-opacity, 0.4);
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                transform: scale(var(--fa-beat-fade-scale, 1.125));
            }
        }

        @keyframes fa-beat-fade {

            0%,
            100% {
                opacity: var(--fa-beat-fade-opacity, 0.4);
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                transform: scale(var(--fa-beat-fade-scale, 1.125));
            }
        }

        @-webkit-keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
            }
        }

        @keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
            }
        }

        @-webkit-keyframes fa-shake {
            0% {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg);
            }

            4% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg);
            }

            8%,
            24% {
                -webkit-transform: rotate(-18deg);
                transform: rotate(-18deg);
            }

            12%,
            28% {
                -webkit-transform: rotate(18deg);
                transform: rotate(18deg);
            }

            16% {
                -webkit-transform: rotate(-22deg);
                transform: rotate(-22deg);
            }

            20% {
                -webkit-transform: rotate(22deg);
                transform: rotate(22deg);
            }

            32% {
                -webkit-transform: rotate(-12deg);
                transform: rotate(-12deg);
            }

            36% {
                -webkit-transform: rotate(12deg);
                transform: rotate(12deg);
            }

            40%,
            100% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }

        @keyframes fa-shake {
            0% {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg);
            }

            4% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg);
            }

            8%,
            24% {
                -webkit-transform: rotate(-18deg);
                transform: rotate(-18deg);
            }

            12%,
            28% {
                -webkit-transform: rotate(18deg);
                transform: rotate(18deg);
            }

            16% {
                -webkit-transform: rotate(-22deg);
                transform: rotate(-22deg);
            }

            20% {
                -webkit-transform: rotate(22deg);
                transform: rotate(22deg);
            }

            32% {
                -webkit-transform: rotate(-12deg);
                transform: rotate(-12deg);
            }

            36% {
                -webkit-transform: rotate(12deg);
                transform: rotate(12deg);
            }

            40%,
            100% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .fa-rotate-90 {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .fa-rotate-180 {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .fa-rotate-270 {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
        }

        .fa-flip-horizontal {
            -webkit-transform: scale(-1, 1);
            transform: scale(-1, 1);
        }

        .fa-flip-vertical {
            -webkit-transform: scale(1, -1);
            transform: scale(1, -1);
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            -webkit-transform: scale(-1, -1);
            transform: scale(-1, -1);
        }

        .fa-rotate-by {
            -webkit-transform: rotate(var(--fa-rotate-angle, none));
            transform: rotate(var(--fa-rotate-angle, none));
        }

        .fa-stack {
            display: inline-block;
            vertical-align: middle;
            height: 2em;
            position: relative;
            width: 2.5em;
        }

        .fa-stack-1x,
        .fa-stack-2x {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
            z-index: var(--fa-stack-z-index, auto);
        }

        .svg-inline--fa.fa-stack-1x {
            height: 1em;
            width: 1.25em;
        }

        .svg-inline--fa.fa-stack-2x {
            height: 2em;
            width: 2.5em;
        }

        .fa-inverse {
            color: var(--fa-inverse, #fff);
        }

        .sr-only,
        .fa-sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .sr-only-focusable:not(:focus),
        .fa-sr-only-focusable:not(:focus) {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .svg-inline--fa .fa-primary {
            fill: var(--fa-primary-color, currentColor);
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa .fa-secondary {
            fill: var(--fa-secondary-color, currentColor);
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-primary {
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-secondary {
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa mask .fa-primary,
        .svg-inline--fa mask .fa-secondary {
            fill: black;
        }

        .fad.fa-inverse,
        .fa-duotone.fa-inverse {
            color: var(--fa-inverse, #fff);
        }
    </style>

    <style>
        @charset "UTF-8";

        /*!
     * CoreUI - HTML, CSS, and JavaScript UI Components Library
     * @version v4.2.6
     * @link https://coreui.io/
     * Copyright (c) 2022 creativeLabs Łukasz Holeczek
     * License MIT  (https://coreui.io/license/)
     */
        :root {
            --cui-blue: #0d6efd;
            --cui-indigo: #6610f2;
            --cui-purple: #6f42c1;
            --cui-pink: #d63384;
            --cui-red: #dc3545;
            --cui-orange: #fd7e14;
            --cui-yellow: #ffc107;
            --cui-green: #198754;
            --cui-teal: #20c997;
            --cui-cyan: #0dcaf0;
            --cui-black: #000015;
            --cui-white: #fff;
            --cui-gray: #8a93a2;
            --cui-gray-dark: #636f83;
            --cui-gray-100: #ebedef;
            --cui-gray-200: #d8dbe0;
            --cui-gray-300: #c4c9d0;
            --cui-gray-400: #b1b7c1;
            --cui-gray-500: #9da5b1;
            --cui-gray-600: #8a93a2;
            --cui-gray-700: #768192;
            --cui-gray-800: #636f83;
            --cui-gray-900: #4f5d73;
            --cui-primary: #321fdb;
            --cui-secondary: #9da5b1;
            --cui-success: #2eb85c;
            --cui-info: #39f;
            --cui-warning: #f9b115;
            --cui-danger: #e55353;
            --cui-light: #ebedef;
            --cui-dark: #4f5d73;
            --cui-primary-rgb: 50, 31, 219;
            --cui-secondary-rgb: 157, 165, 177;
            --cui-success-rgb: 46, 184, 92;
            --cui-info-rgb: 51, 153, 255;
            --cui-warning-rgb: 249, 177, 21;
            --cui-danger-rgb: 229, 83, 83;
            --cui-light-rgb: 235, 237, 239;
            --cui-dark-rgb: 79, 93, 115;
            --cui-white-rgb: 255, 255, 255;
            --cui-black-rgb: 0, 0, 21;
            --cui-body-color-rgb: 44, 56, 74;
            --cui-body-bg-rgb: 255, 255, 255;
            --cui-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --cui-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --cui-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            --cui-body-font-family: var(--cui-font-sans-serif);
            --cui-body-font-size: 1rem;
            --cui-body-font-weight: 400;
            --cui-body-line-height: 1.5;
            --cui-body-color: rgba(44, 56, 74, 0.95);
            --cui-body-bg: #fff;
            --cui-border-width: 1px;
            --cui-border-style: solid;
            --cui-border-color: #d8dbe0;
            --cui-border-color-translucent: rgba(0, 0, 21, 0.175);
            --cui-border-radius: 0.375rem;
            --cui-border-radius-sm: 0.25rem;
            --cui-border-radius-lg: 0.5rem;
            --cui-border-radius-xl: 1rem;
            --cui-border-radius-2xl: 2rem;
            --cui-border-radius-pill: 50rem;
            --cui-heading-color: unset;
            --cui-link-color: #321fdb;
            --cui-link-hover-color: #2819af;
            --cui-code-color: #d63384;
            --cui-highlight-bg: #fff3cd;
            --cui-breakpoint-xs: 0;
            --cui-breakpoint-sm: 576px;
            --cui-breakpoint-md: 768px;
            --cui-breakpoint-lg: 992px;
            --cui-breakpoint-xl: 1200px;
            --cui-breakpoint-xxl: 1400px;
            --cui-mobile-breakpoint: md;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        @media (prefers-reduced-motion: no-preference) {
            :root {
                scroll-behavior: smooth;
            }
        }

        body {
            margin: 0;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-family: var(--cui-body-font-family);
            font-size: 1rem;
            font-size: var(--cui-body-font-size);
            font-weight: 400;
            font-weight: var(--cui-body-font-weight);
            line-height: 1.5;
            line-height: var(--cui-body-line-height);
            color: rgba(44, 56, 74, 0.95);
            color: var(--cui-body-color);
            text-align: var(--cui-body-text-align);
            background-color: #fff;
            background-color: var(--cui-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 21, 0);
        }

        hr {
            margin: 1rem 0;
            color: inherit;
            border: 0;
            border-top: 1px solid;
            opacity: 0.25;
        }

        h6,
        .h6,
        h5,
        .h5,
        h4,
        .h4,
        h3,
        .h3,
        h2,
        .h2,
        h1,
        .h1 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
            color: unset;
            color: var(--cui-heading-color);
        }

        h1,
        .h1 {
            font-size: calc(1.375rem + 1.5vw);
        }

        @media (min-width: 1200px) {

            h1,
            .h1 {
                font-size: 2.5rem;
            }
        }

        h2,
        .h2 {
            font-size: calc(1.325rem + 0.9vw);
        }

        @media (min-width: 1200px) {

            h2,
            .h2 {
                font-size: 2rem;
            }
        }

        h3,
        .h3 {
            font-size: calc(1.3rem + 0.6vw);
        }

        @media (min-width: 1200px) {

            h3,
            .h3 {
                font-size: 1.75rem;
            }
        }

        h4,
        .h4 {
            font-size: calc(1.275rem + 0.3vw);
        }

        @media (min-width: 1200px) {

            h4,
            .h4 {
                font-size: 1.5rem;
            }
        }

        h5,
        .h5 {
            font-size: 1.25rem;
        }

        h6,
        .h6 {
            font-size: 1rem;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        abbr[title] {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
        }

        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit;
        }

        ol,
        ul,
        dl {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        ol ol,
        ul ul,
        ol ul,
        ul ol {
            margin-bottom: 0;
        }

        dt {
            font-weight: 700;
        }

        dd {
            margin-bottom: 0.5rem;
        }

        html:not([dir=rtl]) dd {
            margin-left: 0;
        }

        *[dir=rtl] dd {
            margin-right: 0;
        }

        blockquote {
            margin: 0 0 1rem;
        }

        b,
        strong {
            font-weight: bolder;
        }

        small,
        .small {
            font-size: 0.875em;
        }

        mark,
        .mark {
            padding: 0.1875em;
            background-color: #fff3cd;
            background-color: var(--cui-highlight-bg);
        }

        sub,
        sup {
            position: relative;
            font-size: 0.75em;
            line-height: 0;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        a {
            color: #321fdb;
            color: var(--cui-link-color);
            text-decoration: underline;
        }

        a:hover {
            color: #2819af;
            color: var(--cui-link-hover-color);
        }

        a:not([href]):not([class]),
        a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none;
        }

        pre,
        code,
        kbd,
        samp {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-family: var(--cui-font-monospace);
            font-size: 1em;
        }

        pre {
            display: block;
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto;
            font-size: 0.875em;
            color: unset;
            color: var(--cui-pre-color, unset);
        }

        pre code {
            font-size: inherit;
            color: inherit;
            word-break: normal;
        }

        code {
            font-size: 0.875em;
            color: #d63384;
            color: var(--cui-code-color);
            word-wrap: break-word;
        }

        a>code {
            color: inherit;
        }

        kbd {
            padding: 0.1875rem 0.375rem;
            font-size: 0.875em;
            color: var(--cui-body-bg);
            color: var(--cui-kbd-color, var(--cui-body-bg));
            background-color: var(--cui-body-color);
            background-color: var(--cui-kbd-bg, var(--cui-body-color));
            border-radius: 0.25rem;
        }

        kbd kbd {
            padding: 0;
            font-size: 1em;
        }

        figure {
            margin: 0 0 1rem;
        }

        img,
        svg {
            vertical-align: middle;
        }

        table {
            caption-side: bottom;
            border-collapse: collapse;
        }

        caption {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            color: rgba(44, 56, 74, 0.38);
            color: var(--cui-table-caption-color, rgba(44, 56, 74, 0.38));
            text-align: left;
        }

        th {
            font-weight: 600;
            text-align: inherit;
            text-align: -webkit-match-parent;
        }

        thead,
        tbody,
        tfoot,
        tr,
        td,
        th {
            border-color: inherit;
            border-style: solid;
            border-width: 0;
        }

        label {
            display: inline-block;
        }

        button {
            border-radius: 0;
        }

        button:focus:not(:focus-visible) {
            outline: 0;
        }

        input,
        button,
        select,
        optgroup,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        button,
        select {
            text-transform: none;
        }

        [role=button] {
            cursor: pointer;
        }

        select {
            word-wrap: normal;
        }

        select:disabled {
            opacity: 1;
        }

        [list]:not([type=date]):not([type=datetime-local]):not([type=month]):not([type=week]):not([type=time])::-webkit-calendar-picker-indicator {
            display: none !important;
        }

        button,
        [type=button],
        [type=reset],
        [type=submit] {
            -webkit-appearance: button;
        }

        button:not(:disabled),
        [type=button]:not(:disabled),
        [type=reset]:not(:disabled),
        [type=submit]:not(:disabled) {
            cursor: pointer;
        }

        ::-moz-focus-inner {
            padding: 0;
            border-style: none;
        }

        textarea {
            resize: vertical;
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0;
        }

        legend {
            width: 100%;
            padding: 0;
            margin-bottom: 0.5rem;
            font-size: calc(1.275rem + 0.3vw);
            line-height: inherit;
        }

        html:not([dir=rtl]) legend {
            float: left;
        }

        *[dir=rtl] legend {
            float: right;
        }

        @media (min-width: 1200px) {
            legend {
                font-size: 1.5rem;
            }
        }

        legend+* {
            clear: left;
        }

        ::-webkit-datetime-edit-fields-wrapper,
        ::-webkit-datetime-edit-text,
        ::-webkit-datetime-edit-minute,
        ::-webkit-datetime-edit-hour-field,
        ::-webkit-datetime-edit-day-field,
        ::-webkit-datetime-edit-month-field,
        ::-webkit-datetime-edit-year-field {
            padding: 0;
        }

        ::-webkit-inner-spin-button {
            height: auto;
        }

        [type=search] {
            outline-offset: -2px;
            -webkit-appearance: textfield;
        }

        *[dir=rtl] [type=tel],
        *[dir=rtl] [type=url],
        *[dir=rtl] [type=email],
        *[dir=rtl] [type=number] {
            direction: ltr;
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-color-swatch-wrapper {
            padding: 0;
        }

        ::file-selector-button {
            font: inherit;
            -webkit-appearance: button;
        }

        output {
            display: inline-block;
        }

        iframe {
            border: 0;
        }

        summary {
            display: list-item;
            cursor: pointer;
        }

        progress {
            vertical-align: baseline;
        }

        [hidden] {
            display: none !important;
        }

        .lead {
            font-size: 1.25rem;
            font-weight: 300;
        }

        .display-1 {
            font-size: calc(1.625rem + 4.5vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-1 {
                font-size: 5rem;
            }
        }

        .display-2 {
            font-size: calc(1.575rem + 3.9vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-2 {
                font-size: 4.5rem;
            }
        }

        .display-3 {
            font-size: calc(1.525rem + 3.3vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-3 {
                font-size: 4rem;
            }
        }

        .display-4 {
            font-size: calc(1.475rem + 2.7vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-4 {
                font-size: 3.5rem;
            }
        }

        .display-5 {
            font-size: calc(1.425rem + 2.1vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-5 {
                font-size: 3rem;
            }
        }

        .display-6 {
            font-size: calc(1.375rem + 1.5vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-6 {
                font-size: 2.5rem;
            }
        }

        .list-unstyled {
            list-style: none;
        }

        html:not([dir=rtl]) .list-unstyled {
            padding-left: 0;
        }

        *[dir=rtl] .list-unstyled {
            padding-right: 0;
        }

        .list-inline {
            list-style: none;
        }

        html:not([dir=rtl]) .list-inline {
            padding-left: 0;
        }

        *[dir=rtl] .list-inline {
            padding-right: 0;
        }

        .list-inline-item {
            display: inline-block;
        }

        html:not([dir=rtl]) .list-inline-item:not(:last-child) {
            margin-right: 0.5rem;
        }

        *[dir=rtl] .list-inline-item:not(:last-child) {
            margin-left: 0.5rem;
        }

        .initialism {
            font-size: 0.875em;
            text-transform: uppercase;
        }

        .blockquote {
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }

        .blockquote> :last-child {
            margin-bottom: 0;
        }

        .blockquote-footer {
            margin-top: -1rem;
            margin-bottom: 1rem;
            font-size: 0.875em;
            color: #8a93a2;
        }

        .blockquote-footer::before {
            content: "— ";
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .img-thumbnail {
            padding: 0.25rem;
            background-color: #fff;
            background-color: var(--cui-thumbnail-bg, #fff);
            border: 1px solid var(--cui-border-color);
            border: 1px solid var(--cui-thumbnail-border-color, var(--cui-border-color));
            border-radius: 0.375rem;
            max-width: 100%;
            height: auto;
        }

        .figure {
            display: inline-block;
        }

        .figure-img {
            margin-bottom: 0.5rem;
            line-height: 1;
        }

        .figure-caption {
            font-size: 0.875em;
            color: #8a93a2;
            color: var(--cui-figure-caption-color, #8a93a2);
        }

        .container,
        .container-fluid,
        .container-xxl,
        .container-xl,
        .container-lg,
        .container-md,
        .container-sm {
            --cui-gutter-x: 1.5rem;
            --cui-gutter-y: 0;
            width: 100%;
            padding-right: calc(var(--cui-gutter-x) * 0.5);
            padding-left: calc(var(--cui-gutter-x) * 0.5);
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 576px) {

            .container-sm,
            .container {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {

            .container-md,
            .container-sm,
            .container {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {

            .container-lg,
            .container-md,
            .container-sm,
            .container {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {

            .container-xl,
            .container-lg,
            .container-md,
            .container-sm,
            .container {
                max-width: 1140px;
            }
        }

        @media (min-width: 1400px) {

            .container-xxl,
            .container-xl,
            .container-lg,
            .container-md,
            .container-sm,
            .container {
                max-width: 1320px;
            }
        }

        .row {
            --cui-gutter-x: 1.5rem;
            --cui-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--cui-gutter-y));
            margin-right: calc(-0.5 * var(--cui-gutter-x));
            margin-left: calc(-0.5 * var(--cui-gutter-x));
        }

        .row>* {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--cui-gutter-x) * 0.5);
            padding-left: calc(var(--cui-gutter-x) * 0.5);
            margin-top: var(--cui-gutter-y);
        }

        .col {
            flex: 1 0;
        }

        .row-cols-auto>* {
            flex: 0 0 auto;
            width: auto;
        }

        .row-cols-1>* {
            flex: 0 0 auto;
            width: 100%;
        }

        .row-cols-2>* {
            flex: 0 0 auto;
            width: 50%;
        }

        .row-cols-3>* {
            flex: 0 0 auto;
            width: 33.3333333333%;
        }

        .row-cols-4>* {
            flex: 0 0 auto;
            width: 25%;
        }

        .row-cols-5>* {
            flex: 0 0 auto;
            width: 20%;
        }

        .row-cols-6>* {
            flex: 0 0 auto;
            width: 16.6666666667%;
        }

        .col-auto {
            flex: 0 0 auto;
            width: auto;
        }

        .col-1 {
            flex: 0 0 auto;
            width: 8.33333333%;
        }

        .col-2 {
            flex: 0 0 auto;
            width: 16.66666667%;
        }

        .col-3 {
            flex: 0 0 auto;
            width: 25%;
        }

        .col-4 {
            flex: 0 0 auto;
            width: 33.33333333%;
        }

        .col-5 {
            flex: 0 0 auto;
            width: 41.66666667%;
        }

        .col-6 {
            flex: 0 0 auto;
            width: 50%;
        }

        .col-7 {
            flex: 0 0 auto;
            width: 58.33333333%;
        }

        .col-8 {
            flex: 0 0 auto;
            width: 66.66666667%;
        }

        .col-9 {
            flex: 0 0 auto;
            width: 75%;
        }

        .col-10 {
            flex: 0 0 auto;
            width: 83.33333333%;
        }

        .col-11 {
            flex: 0 0 auto;
            width: 91.66666667%;
        }

        .col-12 {
            flex: 0 0 auto;
            width: 100%;
        }

        html:not([dir=rtl]) .offset-1 {
            margin-left: 8.33333333%;
        }

        *[dir=rtl] .offset-1 {
            margin-right: 8.33333333%;
        }

        html:not([dir=rtl]) .offset-2 {
            margin-left: 16.66666667%;
        }

        *[dir=rtl] .offset-2 {
            margin-right: 16.66666667%;
        }

        html:not([dir=rtl]) .offset-3 {
            margin-left: 25%;
        }

        *[dir=rtl] .offset-3 {
            margin-right: 25%;
        }

        html:not([dir=rtl]) .offset-4 {
            margin-left: 33.33333333%;
        }

        *[dir=rtl] .offset-4 {
            margin-right: 33.33333333%;
        }

        html:not([dir=rtl]) .offset-5 {
            margin-left: 41.66666667%;
        }

        *[dir=rtl] .offset-5 {
            margin-right: 41.66666667%;
        }

        html:not([dir=rtl]) .offset-6 {
            margin-left: 50%;
        }

        *[dir=rtl] .offset-6 {
            margin-right: 50%;
        }

        html:not([dir=rtl]) .offset-7 {
            margin-left: 58.33333333%;
        }

        *[dir=rtl] .offset-7 {
            margin-right: 58.33333333%;
        }

        html:not([dir=rtl]) .offset-8 {
            margin-left: 66.66666667%;
        }

        *[dir=rtl] .offset-8 {
            margin-right: 66.66666667%;
        }

        html:not([dir=rtl]) .offset-9 {
            margin-left: 75%;
        }

        *[dir=rtl] .offset-9 {
            margin-right: 75%;
        }

        html:not([dir=rtl]) .offset-10 {
            margin-left: 83.33333333%;
        }

        *[dir=rtl] .offset-10 {
            margin-right: 83.33333333%;
        }

        html:not([dir=rtl]) .offset-11 {
            margin-left: 91.66666667%;
        }

        *[dir=rtl] .offset-11 {
            margin-right: 91.66666667%;
        }

        .g-0,
        .gx-0 {
            --cui-gutter-x: 0;
        }

        .g-0,
        .gy-0 {
            --cui-gutter-y: 0;
        }

        .g-1,
        .gx-1 {
            --cui-gutter-x: 0.25rem;
        }

        .g-1,
        .gy-1 {
            --cui-gutter-y: 0.25rem;
        }

        .g-2,
        .gx-2 {
            --cui-gutter-x: 0.5rem;
        }

        .g-2,
        .gy-2 {
            --cui-gutter-y: 0.5rem;
        }

        .g-3,
        .gx-3 {
            --cui-gutter-x: 1rem;
        }

        .g-3,
        .gy-3 {
            --cui-gutter-y: 1rem;
        }

        .g-4,
        .gx-4 {
            --cui-gutter-x: 1.5rem;
        }

        .g-4,
        .gy-4 {
            --cui-gutter-y: 1.5rem;
        }

        .g-5,
        .gx-5 {
            --cui-gutter-x: 3rem;
        }

        .g-5,
        .gy-5 {
            --cui-gutter-y: 3rem;
        }

        @media (min-width: 576px) {
            .col-sm {
                flex: 1 0;
            }

            .row-cols-sm-auto>* {
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-sm-1>* {
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-sm-2>* {
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-sm-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%;
            }

            .row-cols-sm-4>* {
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-sm-5>* {
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-sm-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%;
            }

            .col-sm-auto {
                flex: 0 0 auto;
                width: auto;
            }

            .col-sm-1 {
                flex: 0 0 auto;
                width: 8.33333333%;
            }

            .col-sm-2 {
                flex: 0 0 auto;
                width: 16.66666667%;
            }

            .col-sm-3 {
                flex: 0 0 auto;
                width: 25%;
            }

            .col-sm-4 {
                flex: 0 0 auto;
                width: 33.33333333%;
            }

            .col-sm-5 {
                flex: 0 0 auto;
                width: 41.66666667%;
            }

            .col-sm-6 {
                flex: 0 0 auto;
                width: 50%;
            }

            .col-sm-7 {
                flex: 0 0 auto;
                width: 58.33333333%;
            }

            .col-sm-8 {
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .col-sm-9 {
                flex: 0 0 auto;
                width: 75%;
            }

            .col-sm-10 {
                flex: 0 0 auto;
                width: 83.33333333%;
            }

            .col-sm-11 {
                flex: 0 0 auto;
                width: 91.66666667%;
            }

            .col-sm-12 {
                flex: 0 0 auto;
                width: 100%;
            }

            html:not([dir=rtl]) .offset-sm-0 {
                margin-left: 0;
            }

            *[dir=rtl] .offset-sm-0 {
                margin-right: 0;
            }

            html:not([dir=rtl]) .offset-sm-1 {
                margin-left: 8.33333333%;
            }

            *[dir=rtl] .offset-sm-1 {
                margin-right: 8.33333333%;
            }

            html:not([dir=rtl]) .offset-sm-2 {
                margin-left: 16.66666667%;
            }

            *[dir=rtl] .offset-sm-2 {
                margin-right: 16.66666667%;
            }

            html:not([dir=rtl]) .offset-sm-3 {
                margin-left: 25%;
            }

            *[dir=rtl] .offset-sm-3 {
                margin-right: 25%;
            }

            html:not([dir=rtl]) .offset-sm-4 {
                margin-left: 33.33333333%;
            }

            *[dir=rtl] .offset-sm-4 {
                margin-right: 33.33333333%;
            }

            html:not([dir=rtl]) .offset-sm-5 {
                margin-left: 41.66666667%;
            }

            *[dir=rtl] .offset-sm-5 {
                margin-right: 41.66666667%;
            }

            html:not([dir=rtl]) .offset-sm-6 {
                margin-left: 50%;
            }

            *[dir=rtl] .offset-sm-6 {
                margin-right: 50%;
            }

            html:not([dir=rtl]) .offset-sm-7 {
                margin-left: 58.33333333%;
            }

            *[dir=rtl] .offset-sm-7 {
                margin-right: 58.33333333%;
            }

            html:not([dir=rtl]) .offset-sm-8 {
                margin-left: 66.66666667%;
            }

            *[dir=rtl] .offset-sm-8 {
                margin-right: 66.66666667%;
            }

            html:not([dir=rtl]) .offset-sm-9 {
                margin-left: 75%;
            }

            *[dir=rtl] .offset-sm-9 {
                margin-right: 75%;
            }

            html:not([dir=rtl]) .offset-sm-10 {
                margin-left: 83.33333333%;
            }

            *[dir=rtl] .offset-sm-10 {
                margin-right: 83.33333333%;
            }

            html:not([dir=rtl]) .offset-sm-11 {
                margin-left: 91.66666667%;
            }

            *[dir=rtl] .offset-sm-11 {
                margin-right: 91.66666667%;
            }

            .g-sm-0,
            .gx-sm-0 {
                --cui-gutter-x: 0;
            }

            .g-sm-0,
            .gy-sm-0 {
                --cui-gutter-y: 0;
            }

            .g-sm-1,
            .gx-sm-1 {
                --cui-gutter-x: 0.25rem;
            }

            .g-sm-1,
            .gy-sm-1 {
                --cui-gutter-y: 0.25rem;
            }

            .g-sm-2,
            .gx-sm-2 {
                --cui-gutter-x: 0.5rem;
            }

            .g-sm-2,
            .gy-sm-2 {
                --cui-gutter-y: 0.5rem;
            }

            .g-sm-3,
            .gx-sm-3 {
                --cui-gutter-x: 1rem;
            }

            .g-sm-3,
            .gy-sm-3 {
                --cui-gutter-y: 1rem;
            }

            .g-sm-4,
            .gx-sm-4 {
                --cui-gutter-x: 1.5rem;
            }

            .g-sm-4,
            .gy-sm-4 {
                --cui-gutter-y: 1.5rem;
            }

            .g-sm-5,
            .gx-sm-5 {
                --cui-gutter-x: 3rem;
            }

            .g-sm-5,
            .gy-sm-5 {
                --cui-gutter-y: 3rem;
            }
        }

        @media (min-width: 768px) {
            .col-md {
                flex: 1 0;
            }

            .row-cols-md-auto>* {
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-md-1>* {
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-md-2>* {
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-md-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%;
            }

            .row-cols-md-4>* {
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-md-5>* {
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-md-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%;
            }

            .col-md-auto {
                flex: 0 0 auto;
                width: auto;
            }

            .col-md-1 {
                flex: 0 0 auto;
                width: 8.33333333%;
            }

            .col-md-2 {
                flex: 0 0 auto;
                width: 16.66666667%;
            }

            .col-md-3 {
                flex: 0 0 auto;
                width: 25%;
            }

            .col-md-4 {
                flex: 0 0 auto;
                width: 33.33333333%;
            }

            .col-md-5 {
                flex: 0 0 auto;
                width: 41.66666667%;
            }

            .col-md-6 {
                flex: 0 0 auto;
                width: 50%;
            }

            .col-md-7 {
                flex: 0 0 auto;
                width: 58.33333333%;
            }

            .col-md-8 {
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .col-md-9 {
                flex: 0 0 auto;
                width: 75%;
            }

            .col-md-10 {
                flex: 0 0 auto;
                width: 83.33333333%;
            }

            .col-md-11 {
                flex: 0 0 auto;
                width: 91.66666667%;
            }

            .col-md-12 {
                flex: 0 0 auto;
                width: 100%;
            }

            html:not([dir=rtl]) .offset-md-0 {
                margin-left: 0;
            }

            *[dir=rtl] .offset-md-0 {
                margin-right: 0;
            }

            html:not([dir=rtl]) .offset-md-1 {
                margin-left: 8.33333333%;
            }

            *[dir=rtl] .offset-md-1 {
                margin-right: 8.33333333%;
            }

            html:not([dir=rtl]) .offset-md-2 {
                margin-left: 16.66666667%;
            }

            *[dir=rtl] .offset-md-2 {
                margin-right: 16.66666667%;
            }

            html:not([dir=rtl]) .offset-md-3 {
                margin-left: 25%;
            }

            *[dir=rtl] .offset-md-3 {
                margin-right: 25%;
            }

            html:not([dir=rtl]) .offset-md-4 {
                margin-left: 33.33333333%;
            }

            *[dir=rtl] .offset-md-4 {
                margin-right: 33.33333333%;
            }

            html:not([dir=rtl]) .offset-md-5 {
                margin-left: 41.66666667%;
            }

            *[dir=rtl] .offset-md-5 {
                margin-right: 41.66666667%;
            }

            html:not([dir=rtl]) .offset-md-6 {
                margin-left: 50%;
            }

            *[dir=rtl] .offset-md-6 {
                margin-right: 50%;
            }

            html:not([dir=rtl]) .offset-md-7 {
                margin-left: 58.33333333%;
            }

            *[dir=rtl] .offset-md-7 {
                margin-right: 58.33333333%;
            }

            html:not([dir=rtl]) .offset-md-8 {
                margin-left: 66.66666667%;
            }

            *[dir=rtl] .offset-md-8 {
                margin-right: 66.66666667%;
            }

            html:not([dir=rtl]) .offset-md-9 {
                margin-left: 75%;
            }

            *[dir=rtl] .offset-md-9 {
                margin-right: 75%;
            }

            html:not([dir=rtl]) .offset-md-10 {
                margin-left: 83.33333333%;
            }

            *[dir=rtl] .offset-md-10 {
                margin-right: 83.33333333%;
            }

            html:not([dir=rtl]) .offset-md-11 {
                margin-left: 91.66666667%;
            }

            *[dir=rtl] .offset-md-11 {
                margin-right: 91.66666667%;
            }

            .g-md-0,
            .gx-md-0 {
                --cui-gutter-x: 0;
            }

            .g-md-0,
            .gy-md-0 {
                --cui-gutter-y: 0;
            }

            .g-md-1,
            .gx-md-1 {
                --cui-gutter-x: 0.25rem;
            }

            .g-md-1,
            .gy-md-1 {
                --cui-gutter-y: 0.25rem;
            }

            .g-md-2,
            .gx-md-2 {
                --cui-gutter-x: 0.5rem;
            }

            .g-md-2,
            .gy-md-2 {
                --cui-gutter-y: 0.5rem;
            }

            .g-md-3,
            .gx-md-3 {
                --cui-gutter-x: 1rem;
            }

            .g-md-3,
            .gy-md-3 {
                --cui-gutter-y: 1rem;
            }

            .g-md-4,
            .gx-md-4 {
                --cui-gutter-x: 1.5rem;
            }

            .g-md-4,
            .gy-md-4 {
                --cui-gutter-y: 1.5rem;
            }

            .g-md-5,
            .gx-md-5 {
                --cui-gutter-x: 3rem;
            }

            .g-md-5,
            .gy-md-5 {
                --cui-gutter-y: 3rem;
            }
        }

        @media (min-width: 992px) {
            .col-lg {
                flex: 1 0;
            }

            .row-cols-lg-auto>* {
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-lg-1>* {
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-lg-2>* {
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-lg-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%;
            }

            .row-cols-lg-4>* {
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-lg-5>* {
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-lg-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%;
            }

            .col-lg-auto {
                flex: 0 0 auto;
                width: auto;
            }

            .col-lg-1 {
                flex: 0 0 auto;
                width: 8.33333333%;
            }

            .col-lg-2 {
                flex: 0 0 auto;
                width: 16.66666667%;
            }

            .col-lg-3 {
                flex: 0 0 auto;
                width: 25%;
            }

            .col-lg-4 {
                flex: 0 0 auto;
                width: 33.33333333%;
            }

            .col-lg-5 {
                flex: 0 0 auto;
                width: 41.66666667%;
            }

            .col-lg-6 {
                flex: 0 0 auto;
                width: 50%;
            }

            .col-lg-7 {
                flex: 0 0 auto;
                width: 58.33333333%;
            }

            .col-lg-8 {
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .col-lg-9 {
                flex: 0 0 auto;
                width: 75%;
            }

            .col-lg-10 {
                flex: 0 0 auto;
                width: 83.33333333%;
            }

            .col-lg-11 {
                flex: 0 0 auto;
                width: 91.66666667%;
            }

            .col-lg-12 {
                flex: 0 0 auto;
                width: 100%;
            }

            html:not([dir=rtl]) .offset-lg-0 {
                margin-left: 0;
            }

            *[dir=rtl] .offset-lg-0 {
                margin-right: 0;
            }

            html:not([dir=rtl]) .offset-lg-1 {
                margin-left: 8.33333333%;
            }

            *[dir=rtl] .offset-lg-1 {
                margin-right: 8.33333333%;
            }

            html:not([dir=rtl]) .offset-lg-2 {
                margin-left: 16.66666667%;
            }

            *[dir=rtl] .offset-lg-2 {
                margin-right: 16.66666667%;
            }

            html:not([dir=rtl]) .offset-lg-3 {
                margin-left: 25%;
            }

            *[dir=rtl] .offset-lg-3 {
                margin-right: 25%;
            }

            html:not([dir=rtl]) .offset-lg-4 {
                margin-left: 33.33333333%;
            }

            *[dir=rtl] .offset-lg-4 {
                margin-right: 33.33333333%;
            }

            html:not([dir=rtl]) .offset-lg-5 {
                margin-left: 41.66666667%;
            }

            *[dir=rtl] .offset-lg-5 {
                margin-right: 41.66666667%;
            }

            html:not([dir=rtl]) .offset-lg-6 {
                margin-left: 50%;
            }

            *[dir=rtl] .offset-lg-6 {
                margin-right: 50%;
            }

            html:not([dir=rtl]) .offset-lg-7 {
                margin-left: 58.33333333%;
            }

            *[dir=rtl] .offset-lg-7 {
                margin-right: 58.33333333%;
            }

            html:not([dir=rtl]) .offset-lg-8 {
                margin-left: 66.66666667%;
            }

            *[dir=rtl] .offset-lg-8 {
                margin-right: 66.66666667%;
            }

            html:not([dir=rtl]) .offset-lg-9 {
                margin-left: 75%;
            }

            *[dir=rtl] .offset-lg-9 {
                margin-right: 75%;
            }

            html:not([dir=rtl]) .offset-lg-10 {
                margin-left: 83.33333333%;
            }

            *[dir=rtl] .offset-lg-10 {
                margin-right: 83.33333333%;
            }

            html:not([dir=rtl]) .offset-lg-11 {
                margin-left: 91.66666667%;
            }

            *[dir=rtl] .offset-lg-11 {
                margin-right: 91.66666667%;
            }

            .g-lg-0,
            .gx-lg-0 {
                --cui-gutter-x: 0;
            }

            .g-lg-0,
            .gy-lg-0 {
                --cui-gutter-y: 0;
            }

            .g-lg-1,
            .gx-lg-1 {
                --cui-gutter-x: 0.25rem;
            }

            .g-lg-1,
            .gy-lg-1 {
                --cui-gutter-y: 0.25rem;
            }

            .g-lg-2,
            .gx-lg-2 {
                --cui-gutter-x: 0.5rem;
            }

            .g-lg-2,
            .gy-lg-2 {
                --cui-gutter-y: 0.5rem;
            }

            .g-lg-3,
            .gx-lg-3 {
                --cui-gutter-x: 1rem;
            }

            .g-lg-3,
            .gy-lg-3 {
                --cui-gutter-y: 1rem;
            }

            .g-lg-4,
            .gx-lg-4 {
                --cui-gutter-x: 1.5rem;
            }

            .g-lg-4,
            .gy-lg-4 {
                --cui-gutter-y: 1.5rem;
            }

            .g-lg-5,
            .gx-lg-5 {
                --cui-gutter-x: 3rem;
            }

            .g-lg-5,
            .gy-lg-5 {
                --cui-gutter-y: 3rem;
            }
        }

        @media (min-width: 1200px) {
            .col-xl {
                flex: 1 0;
            }

            .row-cols-xl-auto>* {
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-xl-1>* {
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-xl-2>* {
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-xl-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%;
            }

            .row-cols-xl-4>* {
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-xl-5>* {
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-xl-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%;
            }

            .col-xl-auto {
                flex: 0 0 auto;
                width: auto;
            }

            .col-xl-1 {
                flex: 0 0 auto;
                width: 8.33333333%;
            }

            .col-xl-2 {
                flex: 0 0 auto;
                width: 16.66666667%;
            }

            .col-xl-3 {
                flex: 0 0 auto;
                width: 25%;
            }

            .col-xl-4 {
                flex: 0 0 auto;
                width: 33.33333333%;
            }

            .col-xl-5 {
                flex: 0 0 auto;
                width: 41.66666667%;
            }

            .col-xl-6 {
                flex: 0 0 auto;
                width: 50%;
            }

            .col-xl-7 {
                flex: 0 0 auto;
                width: 58.33333333%;
            }

            .col-xl-8 {
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .col-xl-9 {
                flex: 0 0 auto;
                width: 75%;
            }

            .col-xl-10 {
                flex: 0 0 auto;
                width: 83.33333333%;
            }

            .col-xl-11 {
                flex: 0 0 auto;
                width: 91.66666667%;
            }

            .col-xl-12 {
                flex: 0 0 auto;
                width: 100%;
            }

            html:not([dir=rtl]) .offset-xl-0 {
                margin-left: 0;
            }

            *[dir=rtl] .offset-xl-0 {
                margin-right: 0;
            }

            html:not([dir=rtl]) .offset-xl-1 {
                margin-left: 8.33333333%;
            }

            *[dir=rtl] .offset-xl-1 {
                margin-right: 8.33333333%;
            }

            html:not([dir=rtl]) .offset-xl-2 {
                margin-left: 16.66666667%;
            }

            *[dir=rtl] .offset-xl-2 {
                margin-right: 16.66666667%;
            }

            html:not([dir=rtl]) .offset-xl-3 {
                margin-left: 25%;
            }

            *[dir=rtl] .offset-xl-3 {
                margin-right: 25%;
            }

            html:not([dir=rtl]) .offset-xl-4 {
                margin-left: 33.33333333%;
            }

            *[dir=rtl] .offset-xl-4 {
                margin-right: 33.33333333%;
            }

            html:not([dir=rtl]) .offset-xl-5 {
                margin-left: 41.66666667%;
            }

            *[dir=rtl] .offset-xl-5 {
                margin-right: 41.66666667%;
            }

            html:not([dir=rtl]) .offset-xl-6 {
                margin-left: 50%;
            }

            *[dir=rtl] .offset-xl-6 {
                margin-right: 50%;
            }

            html:not([dir=rtl]) .offset-xl-7 {
                margin-left: 58.33333333%;
            }

            *[dir=rtl] .offset-xl-7 {
                margin-right: 58.33333333%;
            }

            html:not([dir=rtl]) .offset-xl-8 {
                margin-left: 66.66666667%;
            }

            *[dir=rtl] .offset-xl-8 {
                margin-right: 66.66666667%;
            }

            html:not([dir=rtl]) .offset-xl-9 {
                margin-left: 75%;
            }

            *[dir=rtl] .offset-xl-9 {
                margin-right: 75%;
            }

            html:not([dir=rtl]) .offset-xl-10 {
                margin-left: 83.33333333%;
            }

            *[dir=rtl] .offset-xl-10 {
                margin-right: 83.33333333%;
            }

            html:not([dir=rtl]) .offset-xl-11 {
                margin-left: 91.66666667%;
            }

            *[dir=rtl] .offset-xl-11 {
                margin-right: 91.66666667%;
            }

            .g-xl-0,
            .gx-xl-0 {
                --cui-gutter-x: 0;
            }

            .g-xl-0,
            .gy-xl-0 {
                --cui-gutter-y: 0;
            }

            .g-xl-1,
            .gx-xl-1 {
                --cui-gutter-x: 0.25rem;
            }

            .g-xl-1,
            .gy-xl-1 {
                --cui-gutter-y: 0.25rem;
            }

            .g-xl-2,
            .gx-xl-2 {
                --cui-gutter-x: 0.5rem;
            }

            .g-xl-2,
            .gy-xl-2 {
                --cui-gutter-y: 0.5rem;
            }

            .g-xl-3,
            .gx-xl-3 {
                --cui-gutter-x: 1rem;
            }

            .g-xl-3,
            .gy-xl-3 {
                --cui-gutter-y: 1rem;
            }

            .g-xl-4,
            .gx-xl-4 {
                --cui-gutter-x: 1.5rem;
            }

            .g-xl-4,
            .gy-xl-4 {
                --cui-gutter-y: 1.5rem;
            }

            .g-xl-5,
            .gx-xl-5 {
                --cui-gutter-x: 3rem;
            }

            .g-xl-5,
            .gy-xl-5 {
                --cui-gutter-y: 3rem;
            }
        }

        @media (min-width: 1400px) {
            .col-xxl {
                flex: 1 0;
            }

            .row-cols-xxl-auto>* {
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-xxl-1>* {
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-xxl-2>* {
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-xxl-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%;
            }

            .row-cols-xxl-4>* {
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-xxl-5>* {
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-xxl-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%;
            }

            .col-xxl-auto {
                flex: 0 0 auto;
                width: auto;
            }

            .col-xxl-1 {
                flex: 0 0 auto;
                width: 8.33333333%;
            }

            .col-xxl-2 {
                flex: 0 0 auto;
                width: 16.66666667%;
            }

            .col-xxl-3 {
                flex: 0 0 auto;
                width: 25%;
            }

            .col-xxl-4 {
                flex: 0 0 auto;
                width: 33.33333333%;
            }

            .col-xxl-5 {
                flex: 0 0 auto;
                width: 41.66666667%;
            }

            .col-xxl-6 {
                flex: 0 0 auto;
                width: 50%;
            }

            .col-xxl-7 {
                flex: 0 0 auto;
                width: 58.33333333%;
            }

            .col-xxl-8 {
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .col-xxl-9 {
                flex: 0 0 auto;
                width: 75%;
            }

            .col-xxl-10 {
                flex: 0 0 auto;
                width: 83.33333333%;
            }

            .col-xxl-11 {
                flex: 0 0 auto;
                width: 91.66666667%;
            }

            .col-xxl-12 {
                flex: 0 0 auto;
                width: 100%;
            }

            html:not([dir=rtl]) .offset-xxl-0 {
                margin-left: 0;
            }

            *[dir=rtl] .offset-xxl-0 {
                margin-right: 0;
            }

            html:not([dir=rtl]) .offset-xxl-1 {
                margin-left: 8.33333333%;
            }

            *[dir=rtl] .offset-xxl-1 {
                margin-right: 8.33333333%;
            }

            html:not([dir=rtl]) .offset-xxl-2 {
                margin-left: 16.66666667%;
            }

            *[dir=rtl] .offset-xxl-2 {
                margin-right: 16.66666667%;
            }

            html:not([dir=rtl]) .offset-xxl-3 {
                margin-left: 25%;
            }

            *[dir=rtl] .offset-xxl-3 {
                margin-right: 25%;
            }

            html:not([dir=rtl]) .offset-xxl-4 {
                margin-left: 33.33333333%;
            }

            *[dir=rtl] .offset-xxl-4 {
                margin-right: 33.33333333%;
            }

            html:not([dir=rtl]) .offset-xxl-5 {
                margin-left: 41.66666667%;
            }

            *[dir=rtl] .offset-xxl-5 {
                margin-right: 41.66666667%;
            }

            html:not([dir=rtl]) .offset-xxl-6 {
                margin-left: 50%;
            }

            *[dir=rtl] .offset-xxl-6 {
                margin-right: 50%;
            }

            html:not([dir=rtl]) .offset-xxl-7 {
                margin-left: 58.33333333%;
            }

            *[dir=rtl] .offset-xxl-7 {
                margin-right: 58.33333333%;
            }

            html:not([dir=rtl]) .offset-xxl-8 {
                margin-left: 66.66666667%;
            }

            *[dir=rtl] .offset-xxl-8 {
                margin-right: 66.66666667%;
            }

            html:not([dir=rtl]) .offset-xxl-9 {
                margin-left: 75%;
            }

            *[dir=rtl] .offset-xxl-9 {
                margin-right: 75%;
            }

            html:not([dir=rtl]) .offset-xxl-10 {
                margin-left: 83.33333333%;
            }

            *[dir=rtl] .offset-xxl-10 {
                margin-right: 83.33333333%;
            }

            html:not([dir=rtl]) .offset-xxl-11 {
                margin-left: 91.66666667%;
            }

            *[dir=rtl] .offset-xxl-11 {
                margin-right: 91.66666667%;
            }

            .g-xxl-0,
            .gx-xxl-0 {
                --cui-gutter-x: 0;
            }

            .g-xxl-0,
            .gy-xxl-0 {
                --cui-gutter-y: 0;
            }

            .g-xxl-1,
            .gx-xxl-1 {
                --cui-gutter-x: 0.25rem;
            }

            .g-xxl-1,
            .gy-xxl-1 {
                --cui-gutter-y: 0.25rem;
            }

            .g-xxl-2,
            .gx-xxl-2 {
                --cui-gutter-x: 0.5rem;
            }

            .g-xxl-2,
            .gy-xxl-2 {
                --cui-gutter-y: 0.5rem;
            }

            .g-xxl-3,
            .gx-xxl-3 {
                --cui-gutter-x: 1rem;
            }

            .g-xxl-3,
            .gy-xxl-3 {
                --cui-gutter-y: 1rem;
            }

            .g-xxl-4,
            .gx-xxl-4 {
                --cui-gutter-x: 1.5rem;
            }

            .g-xxl-4,
            .gy-xxl-4 {
                --cui-gutter-y: 1.5rem;
            }

            .g-xxl-5,
            .gx-xxl-5 {
                --cui-gutter-x: 3rem;
            }

            .g-xxl-5,
            .gy-xxl-5 {
                --cui-gutter-y: 3rem;
            }
        }

        .table {
            --cui-table-color: var(--cui-body-color);
            --cui-table-bg: transparent;
            --cui-table-border-color: var(--cui-border-color);
            --cui-table-accent-bg: transparent;
            --cui-table-striped-color: var(--cui-body-color);
            --cui-table-striped-bg: rgba(0, 0, 21, 0.05);
            --cui-table-active-color: var(--cui-body-color);
            --cui-table-active-bg: rgba(0, 0, 21, 0.1);
            --cui-table-hover-color: var(--cui-body-color);
            --cui-table-hover-bg: rgba(0, 0, 21, 0.075);
            width: 100%;
            margin-bottom: 1rem;
            color: var(--cui-table-color);
            vertical-align: top;
            border-color: var(--cui-table-border-color);
        }

        .table> :not(caption)>*>* {
            padding: 0.5rem 0.5rem;
            background-color: var(--cui-table-bg);
            border-bottom-width: 1px;
            box-shadow: inset 0 0 0 9999px var(--cui-table-accent-bg);
        }

        .table>tbody {
            vertical-align: inherit;
        }

        .table>thead {
            vertical-align: bottom;
        }

        .table-group-divider {
            border-top: 2px solid currentcolor;
        }

        .caption-top {
            caption-side: top;
        }

        .table-sm> :not(caption)>*>* {
            padding: 0.25rem 0.25rem;
        }

        .table-bordered> :not(caption)>* {
            border-width: 1px 0;
        }

        .table-bordered> :not(caption)>*>* {
            border-width: 0 1px;
        }

        .table-borderless> :not(caption)>*>* {
            border-bottom-width: 0;
        }

        .table-borderless> :not(:first-child) {
            border-top-width: 0;
        }

        .table-striped>tbody>tr:nth-of-type(odd)>* {
            --cui-table-accent-bg: var(--cui-table-striped-bg);
            color: var(--cui-table-striped-color);
        }

        .table-striped-columns> :not(caption)>tr> :nth-child(even) {
            --cui-table-accent-bg: var(--cui-table-striped-bg);
            color: var(--cui-table-striped-color);
        }

        .table-active {
            --cui-table-accent-bg: var(--cui-table-active-bg);
            color: var(--cui-table-active-color);
        }

        .table-hover>tbody>tr:hover>* {
            --cui-table-accent-bg: var(--cui-table-hover-bg);
            color: var(--cui-table-hover-color);
        }

        .table-primary {
            --cui-table-color: rgba(44, 56, 74, 0.95);
            --cui-table-bg: #d6d2f8;
            --cui-table-border-color: rgba(198, 196, 232, 0.995);
            --cui-table-striped-bg: rgba(206, 203, 240, 0.9975);
            --cui-table-striped-color: rgba(44, 56, 74, 0.95);
            --cui-table-active-bg: rgba(198, 196, 232, 0.995);
            --cui-table-active-color: rgba(44, 56, 74, 0.95);
            --cui-table-hover-bg: rgba(202, 199, 236, 0.99625);
            --cui-table-hover-color: rgba(44, 56, 74, 0.95);
            color: var(--cui-table-color);
            border-color: var(--cui-table-border-color);
        }

        .table-secondary {
            --cui-table-color: rgba(44, 56, 74, 0.95);
            --cui-table-bg: #ebedef;
            --cui-table-border-color: rgba(218, 220, 224, 0.995);
            --cui-table-striped-bg: rgba(226, 229, 232, 0.9975);
            --cui-table-striped-color: rgba(44, 56, 74, 0.95);
            --cui-table-active-bg: rgba(218, 220, 224, 0.995);
            --cui-table-active-color: rgba(44, 56, 74, 0.95);
            --cui-table-hover-bg: rgba(222, 225, 228, 0.99625);
            --cui-table-hover-color: rgba(44, 56, 74, 0.95);
            color: var(--cui-table-color);
            border-color: var(--cui-table-border-color);
        }

        .table-success {
            --cui-table-color: rgba(44, 56, 74, 0.95);
            --cui-table-bg: #d5f1de;
            --cui-table-border-color: rgba(198, 224, 208, 0.995);
            --cui-table-striped-bg: rgba(205, 233, 215, 0.9975);
            --cui-table-striped-color: rgba(44, 56, 74, 0.95);
            --cui-table-active-bg: rgba(198, 224, 208, 0.995);
            --cui-table-active-color: rgba(44, 56, 74, 0.95);
            --cui-table-hover-bg: rgba(201, 228, 212, 0.99625);
            --cui-table-hover-color: rgba(44, 56, 74, 0.95);
            color: var(--cui-table-color);
            border-color: var(--cui-table-border-color);
        }

        .table-info {
            --cui-table-color: rgba(44, 56, 74, 0.95);
            --cui-table-bg: #d6ebff;
            --cui-table-border-color: rgba(198, 219, 238, 0.995);
            --cui-table-striped-bg: rgba(206, 227, 247, 0.9975);
            --cui-table-striped-color: rgba(44, 56, 74, 0.95);
            --cui-table-active-bg: rgba(198, 219, 238, 0.995);
            --cui-table-active-color: rgba(44, 56, 74, 0.95);
            --cui-table-hover-bg: rgba(202, 223, 243, 0.99625);
            --cui-table-hover-color: rgba(44, 56, 74, 0.95);
            color: var(--cui-table-color);
            border-color: var(--cui-table-border-color);
        }

        .table-warning {
            --cui-table-color: rgba(44, 56, 74, 0.95);
            --cui-table-bg: #feefd0;
            --cui-table-border-color: rgba(235, 222, 196, 0.995);
            --cui-table-striped-bg: rgba(244, 231, 202, 0.9975);
            --cui-table-striped-color: rgba(44, 56, 74, 0.95);
            --cui-table-active-bg: rgba(235, 222, 196, 0.995);
            --cui-table-active-color: rgba(44, 56, 74, 0.95);
            --cui-table-hover-bg: rgba(240, 226, 199, 0.99625);
            --cui-table-hover-color: rgba(44, 56, 74, 0.95);
            color: var(--cui-table-color);
            border-color: var(--cui-table-border-color);
        }

        .table-danger {
            --cui-table-color: rgba(44, 56, 74, 0.95);
            --cui-table-bg: #fadddd;
            --cui-table-border-color: rgba(231, 206, 208, 0.995);
            --cui-table-striped-bg: rgba(241, 214, 214, 0.9975);
            --cui-table-striped-color: rgba(44, 56, 74, 0.95);
            --cui-table-active-bg: rgba(231, 206, 208, 0.995);
            --cui-table-active-color: rgba(44, 56, 74, 0.95);
            --cui-table-hover-bg: rgba(236, 210, 211, 0.99625);
            --cui-table-hover-color: rgba(44, 56, 74, 0.95);
            color: var(--cui-table-color);
            border-color: var(--cui-table-border-color);
        }

        .table-light {
            --cui-table-color: rgba(44, 56, 74, 0.95);
            --cui-table-bg: #ebedef;
            --cui-table-border-color: rgba(218, 220, 224, 0.995);
            --cui-table-striped-bg: rgba(226, 229, 232, 0.9975);
            --cui-table-striped-color: rgba(44, 56, 74, 0.95);
            --cui-table-active-bg: rgba(218, 220, 224, 0.995);
            --cui-table-active-color: rgba(44, 56, 74, 0.95);
            --cui-table-hover-bg: rgba(222, 225, 228, 0.99625);
            --cui-table-hover-color: rgba(44, 56, 74, 0.95);
            color: var(--cui-table-color);
            border-color: var(--cui-table-border-color);
        }

        .table-dark {
            --cui-table-color: rgba(255, 255, 255, 0.87);
            --cui-table-bg: #4f5d73;
            --cui-table-border-color: rgba(93, 106, 126, 0.987);
            --cui-table-striped-bg: rgba(86, 99, 120, 0.9935);
            --cui-table-striped-color: rgba(255, 255, 255, 0.87);
            --cui-table-active-bg: rgba(93, 106, 126, 0.987);
            --cui-table-active-color: rgba(255, 255, 255, 0.87);
            --cui-table-hover-bg: rgba(89, 103, 123, 0.99025);
            --cui-table-hover-color: rgba(255, 255, 255, 0.87);
            color: var(--cui-table-color);
            border-color: var(--cui-table-border-color);
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        @media (max-width: 575.98px) {
            .table-responsive-sm {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        @media (max-width: 767.98px) {
            .table-responsive-md {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        @media (max-width: 991.98px) {
            .table-responsive-lg {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        @media (max-width: 1399.98px) {
            .table-responsive-xxl {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        .form-label {
            margin-bottom: 0.5rem;
            color: var(--cui-form-label-color, );
        }

        .col-form-label {
            padding-top: calc(0.375rem + 1px);
            padding-bottom: calc(0.375rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1.5;
            color: var(--cui-form-label-color, );
        }

        .col-form-label-lg {
            padding-top: calc(0.5rem + 1px);
            padding-bottom: calc(0.5rem + 1px);
            font-size: 1.25rem;
        }

        .col-form-label-sm {
            padding-top: calc(0.25rem + 1px);
            padding-bottom: calc(0.25rem + 1px);
            font-size: 0.875rem;
        }

        .form-text {
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: rgba(44, 56, 74, 0.38);
            color: var(--cui-form-text-color, rgba(44, 56, 74, 0.38));
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: rgba(44, 56, 74, 0.95);
            color: var(--cui-input-color, rgba(44, 56, 74, 0.95));
            background-color: #fff;
            background-color: var(--cui-input-bg, #fff);
            background-clip: padding-box;
            border: 1px solid #b1b7c1;
            border: 1px solid var(--cui-input-border-color, #b1b7c1);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.375rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-control {
                transition: none;
            }
        }

        .form-control[type=file] {
            overflow: hidden;
        }

        .form-control[type=file]:not(:disabled):not([readonly]) {
            cursor: pointer;
        }

        .form-control:focus {
            color: rgba(44, 56, 74, 0.95);
            color: var(--cui-input-focus-color, rgba(44, 56, 74, 0.95));
            background-color: #fff;
            background-color: var(--cui-input-focus-bg, #fff);
            border-color: #998fed;
            border-color: var(--cui-input-focus-border-color, #998fed);
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(50, 31, 219, 0.25);
        }

        .form-control::-webkit-date-and-time-value {
            height: 1.5em;
        }

        .form-control::-moz-placeholder {
            color: #8a93a2;
            color: var(--cui-input-placeholder-color, #8a93a2);
            opacity: 1;
        }

        .form-control::placeholder {
            color: #8a93a2;
            color: var(--cui-input-placeholder-color, #8a93a2);
            opacity: 1;
        }

        .form-control:disabled {
            background-color: #d8dbe0;
            border-color: #b1b7c1;
            opacity: 1;
        }

        .form-control::file-selector-button {
            padding: 0.375rem 0.75rem;
            margin: -0.375rem -0.75rem;
            -webkit-margin-end: 0.75rem;
            margin-inline-end: 0.75rem;
            color: rgba(44, 56, 74, 0.95);
            color: var(--cui-form-file-button-color, rgba(44, 56, 74, 0.95));
            background-color: #d8dbe0;
            background-color: var(--cui-form-file-button-bg, #d8dbe0);
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: 1px;
            border-radius: 0;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-control::file-selector-button {
                transition: none;
            }
        }

        .form-control:hover:not(:disabled):not([readonly])::file-selector-button {
            background-color: #cdd0d5;
            background-color: var(--cui-form-file-button-hover-bg, #cdd0d5);
        }

        .form-control-plaintext {
            display: block;
            width: 100%;
            padding: 0.375rem 0;
            margin-bottom: 0;
            line-height: 1.5;
            color: rgba(44, 56, 74, 0.95);
            color: var(--cui-input-plaintext-color, rgba(44, 56, 74, 0.95));
            background-color: transparent;
            border: solid transparent;
            border-width: 1px 0;
        }

        .form-control-plaintext:focus {
            outline: 0;
        }

        .form-control-plaintext.form-control-sm,
        .form-control-plaintext.form-control-lg {
            padding-right: 0;
            padding-left: 0;
        }

        .form-control-sm {
            min-height: calc(1.5em + 0.5rem + 2px);
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            border-radius: 0.25rem;
        }

        .form-control-sm::file-selector-button {
            padding: 0.25rem 0.5rem;
            margin: -0.25rem -0.5rem;
            -webkit-margin-end: 0.5rem;
            margin-inline-end: 0.5rem;
        }

        .form-control-lg {
            min-height: calc(1.5em + 1rem + 2px);
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            border-radius: 0.5rem;
        }

        .form-control-lg::file-selector-button {
            padding: 0.5rem 1rem;
            margin: -0.5rem -1rem;
            -webkit-margin-end: 1rem;
            margin-inline-end: 1rem;
        }

        textarea.form-control {
            min-height: calc(1.5em + 0.75rem + 2px);
        }

        textarea.form-control-sm {
            min-height: calc(1.5em + 0.5rem + 2px);
        }

        textarea.form-control-lg {
            min-height: calc(1.5em + 1rem + 2px);
        }

        .form-control-color {
            width: 3rem;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem;
        }

        .form-control-color:not(:disabled):not([readonly]) {
            cursor: pointer;
        }

        .form-control-color::-moz-color-swatch {
            border: 0 !important;
            border-radius: 0.375rem;
        }

        .form-control-color::-webkit-color-swatch {
            border-radius: 0.375rem;
        }

        .form-control-color.form-control-sm {
            height: calc(1.5em + 0.5rem + 2px);
        }

        .form-control-color.form-control-lg {
            height: calc(1.5em + 1rem + 2px);
        }

        .form-select {
            display: block;
            width: 100%;
            -moz-padding-start: calc(0.75rem - 3px);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: rgba(44, 56, 74, 0.95);
            color: var(--cui-form-select-color, rgba(44, 56, 74, 0.95));
            background-color: #fff;
            background-color: var(--cui-form-select-bg, #fff);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23636f83' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-size: 16px 12px;
            border: 1px solid #b1b7c1;
            border: 1px solid var(--cui-form-select-border-color, #b1b7c1);
            border-radius: 0.375rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        html:not([dir=rtl]) .form-select {
            padding: 0.375rem 2.25rem 0.375rem 0.75rem;
        }

        *[dir=rtl] .form-select {
            padding: 0.375rem 0.75rem 0.375rem 2.25rem;
        }

        html:not([dir=rtl]) .form-select {
            background-position: right 0.75rem center;
        }

        *[dir=rtl] .form-select {
            background-position: left 0.75rem center;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-select {
                transition: none;
            }
        }

        .form-select:focus {
            border-color: #998fed;
            border-color: var(--cui-form-select-focus-border-color, #998fed);
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(50, 31, 219, 0.25);
        }

        .form-select[multiple],
        .form-select[size]:not([size="1"]) {
            background-image: none;
        }

        html:not([dir=rtl]) .form-select[multiple],
        html:not([dir=rtl]) .form-select[size]:not([size="1"]) {
            padding-right: 0.75rem;
        }

        *[dir=rtl] .form-select[multiple],
        *[dir=rtl] .form-select[size]:not([size="1"]) {
            padding-left: 0.75rem;
        }

        .form-select:disabled {
            color: var(--cui-form-select-disabled-color, );
            background-color: #d8dbe0;
            background-color: var(--cui-form-select-disabled-bg, #d8dbe0);
            border-color: #b1b7c1;
            border-color: var(--cui-form-select-disabled-border-color, #b1b7c1);
        }

        .form-select:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 rgba(44, 56, 74, 0.95);
            text-shadow: 0 0 0 var(--cui-form-select-color, rgba(44, 56, 74, 0.95));
        }

        .form-select-sm {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            font-size: 0.875rem;
            border-radius: 0.25rem;
        }

        html:not([dir=rtl]) .form-select-sm {
            padding-left: 0.5rem;
        }

        *[dir=rtl] .form-select-sm {
            padding-right: 0.5rem;
        }

        .form-select-lg {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            font-size: 1.25rem;
            border-radius: 0.5rem;
        }

        html:not([dir=rtl]) .form-select-lg {
            padding-left: 1rem;
        }

        *[dir=rtl] .form-select-lg {
            padding-right: 1rem;
        }

        .form-check {
            display: block;
            min-height: 1.5rem;
            margin-bottom: 0.125rem;
        }

        html:not([dir=rtl]) .form-check {
            padding-left: 1.5em;
        }

        *[dir=rtl] .form-check {
            padding-right: 1.5em;
        }

        html:not([dir=rtl]) .form-check .form-check-input {
            float: left;
        }

        *[dir=rtl] .form-check .form-check-input {
            float: right;
        }

        html:not([dir=rtl]) .form-check .form-check-input {
            margin-left: -1.5em;
        }

        *[dir=rtl] .form-check .form-check-input {
            margin-right: -1.5em;
        }

        .form-check-reverse {
            padding-right: 1.5em;
            padding-left: 0;
            text-align: right;
        }

        .form-check-reverse .form-check-input {
            float: right;
            margin-right: -1.5em;
            margin-left: 0;
        }

        .form-check-input {
            width: 1em;
            height: 1em;
            margin-top: 0.25em;
            vertical-align: top;
            background-color: #fff;
            background-color: var(--cui-form-check-input-bg, #fff);
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            border: 1px solid rgba(0, 0, 21, 0.25);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            print-color-adjust: exact;
        }

        .form-check-input[type=checkbox] {
            border-radius: 0.25em;
        }

        .form-check-input[type=radio] {
            border-radius: 50%;
        }

        .form-check-input:active {
            filter: brightness(90%);
        }

        .form-check-input:focus {
            border-color: #998fed;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(50, 31, 219, 0.25);
        }

        .form-check-input:checked {
            background-color: #321fdb;
            background-color: var(--cui-form-check-input-checked-bg-color, #321fdb);
            border-color: #321fdb;
            border-color: var(--cui-form-check-input-checked-border-color, #321fdb);
        }

        .form-check-input:checked[type=checkbox] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='rgba%28255, 255, 255, 0.87%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3e%3c/svg%3e");
            background-image: var(--cui-form-check-input-checked-bg-image, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='rgba%28255, 255, 255, 0.87%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3e%3c/svg%3e"));
        }

        .form-check-input:checked[type=radio] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='rgba%28255, 255, 255, 0.87%29'/%3e%3c/svg%3e");
            background-image: var(--cui-form-check-radio-checked-bg-image, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='rgba%28255, 255, 255, 0.87%29'/%3e%3c/svg%3e"));
        }

        .form-check-input[type=checkbox]:indeterminate {
            background-color: #321fdb;
            border-color: #321fdb;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='rgba%28255, 255, 255, 0.87%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
            background-image: var(--cui-form-check-input-indeterminate-bg-image, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='rgba%28255, 255, 255, 0.87%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e"));
        }

        .form-check-input:disabled {
            pointer-events: none;
            filter: none;
            opacity: 0.5;
        }

        .form-check-input[disabled]~.form-check-label,
        .form-check-input:disabled~.form-check-label {
            cursor: default;
            opacity: 0.5;
        }

        .form-check-label {
            color: unset;
            color: var(--cui-form-check-label-color, unset);
        }

        html:not([dir=rtl]) .form-switch {
            padding-left: 2.5em;
        }

        *[dir=rtl] .form-switch {
            padding-right: 2.5em;
        }

        .form-switch .form-check-input {
            width: 2em;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 21, 0.25%29'/%3e%3c/svg%3e");
            background-image: var(--cui-form-switch-bg-image, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 21, 0.25%29'/%3e%3c/svg%3e"));
            background-position: left center;
            border-radius: 2em;
            transition: background-position 0.15s ease-in-out;
        }

        html:not([dir=rtl]) .form-switch .form-check-input {
            margin-left: -2.5em;
        }

        *[dir=rtl] .form-switch .form-check-input {
            margin-right: -2.5em;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-switch .form-check-input {
                transition: none;
            }
        }

        .form-switch .form-check-input:focus {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23998fed'/%3e%3c/svg%3e");
            background-image: var(--cui-form-switch-focus-bg-image, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23998fed'/%3e%3c/svg%3e"));
        }

        .form-switch .form-check-input:checked {
            background-position: right center;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%28255, 255, 255, 0.87%29'/%3e%3c/svg%3e");
            background-image: var(--cui-form-switch-checked-bg-image, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%28255, 255, 255, 0.87%29'/%3e%3c/svg%3e"));
        }

        .form-switch.form-check-reverse {
            padding-right: 2.5em;
            padding-left: 0;
        }

        .form-switch.form-check-reverse .form-check-input {
            margin-right: -2.5em;
            margin-left: 0;
        }

        .form-switch-lg {
            min-height: 1.25em;
        }

        html:not([dir=rtl]) .form-switch-lg {
            padding-left: 2.25em;
        }

        *[dir=rtl] .form-switch-lg {
            padding-right: 2.25em;
        }

        .form-switch-lg .form-check-input {
            width: 1.75em;
            height: 1.25em;
        }

        html:not([dir=rtl]) .form-switch-lg .form-check-input {
            margin-left: -2.25em;
        }

        *[dir=rtl] .form-switch-lg .form-check-input {
            margin-right: -2.25em;
        }

        .form-switch-lg .form-check-label {
            padding-top: calc((1.25em - 1rem) / 2);
        }

        .form-switch-xl {
            min-height: 1.5em;
        }

        html:not([dir=rtl]) .form-switch-xl {
            padding-left: 2.5em;
        }

        *[dir=rtl] .form-switch-xl {
            padding-right: 2.5em;
        }

        .form-switch-xl .form-check-input {
            width: 2em;
            height: 1.5em;
        }

        html:not([dir=rtl]) .form-switch-xl .form-check-input {
            margin-left: -2.5em;
        }

        *[dir=rtl] .form-switch-xl .form-check-input {
            margin-right: -2.5em;
        }

        .form-switch-xl .form-check-label {
            padding-top: calc((1.5em - 1rem) / 2);
        }

        .form-check-inline {
            display: inline-block;
        }

        html:not([dir=rtl]) .form-check-inline {
            margin-right: 1rem;
        }

        *[dir=rtl] .form-check-inline {
            margin-left: 1rem;
        }

        .btn-check {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none;
        }

        .btn-check[disabled]+.btn,
        .btn-check:disabled+.btn {
            pointer-events: none;
            filter: none;
            opacity: 0.65;
        }

        .form-check-primary {
            --cui-form-check-input-checked-bg-color: #321fdb;
            --cui-form-check-input-checked-border-color: #321fdb;
            --cui-form-check-input-indeterminate-bg-color: #321fdb;
            --cui-form-check-input-indeterminate-border-color: #321fdb;
        }

        .form-check-secondary {
            --cui-form-check-input-checked-bg-color: #9da5b1;
            --cui-form-check-input-checked-border-color: #9da5b1;
            --cui-form-check-input-indeterminate-bg-color: #9da5b1;
            --cui-form-check-input-indeterminate-border-color: #9da5b1;
        }

        .form-check-success {
            --cui-form-check-input-checked-bg-color: #2eb85c;
            --cui-form-check-input-checked-border-color: #2eb85c;
            --cui-form-check-input-indeterminate-bg-color: #2eb85c;
            --cui-form-check-input-indeterminate-border-color: #2eb85c;
        }

        .form-check-info {
            --cui-form-check-input-checked-bg-color: #39f;
            --cui-form-check-input-checked-border-color: #39f;
            --cui-form-check-input-indeterminate-bg-color: #39f;
            --cui-form-check-input-indeterminate-border-color: #39f;
        }

        .form-check-warning {
            --cui-form-check-input-checked-bg-color: #f9b115;
            --cui-form-check-input-checked-border-color: #f9b115;
            --cui-form-check-input-indeterminate-bg-color: #f9b115;
            --cui-form-check-input-indeterminate-border-color: #f9b115;
        }

        .form-check-danger {
            --cui-form-check-input-checked-bg-color: #e55353;
            --cui-form-check-input-checked-border-color: #e55353;
            --cui-form-check-input-indeterminate-bg-color: #e55353;
            --cui-form-check-input-indeterminate-border-color: #e55353;
        }

        .form-check-light {
            --cui-form-check-input-checked-bg-color: #ebedef;
            --cui-form-check-input-checked-border-color: #ebedef;
            --cui-form-check-input-indeterminate-bg-color: #ebedef;
            --cui-form-check-input-indeterminate-border-color: #ebedef;
        }

        .form-check-dark {
            --cui-form-check-input-checked-bg-color: #4f5d73;
            --cui-form-check-input-checked-border-color: #4f5d73;
            --cui-form-check-input-indeterminate-bg-color: #4f5d73;
            --cui-form-check-input-indeterminate-border-color: #4f5d73;
        }

        .form-range {
            width: 100%;
            height: 1.5rem;
            padding: 0;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .form-range:focus {
            outline: 0;
        }

        .form-range:focus::-webkit-slider-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(50, 31, 219, 0.25);
        }

        .form-range:focus::-moz-range-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(50, 31, 219, 0.25);
        }

        .form-range::-moz-focus-outer {
            border: 0;
        }

        .form-range::-webkit-slider-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: -0.25rem;
            background-color: #321fdb;
            background-color: var(--cui-form-range-thumb-bg, #321fdb);
            border: 0;
            border-radius: 1rem;
            -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
            appearance: none;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-range::-webkit-slider-thumb {
                -webkit-transition: none;
                transition: none;
            }
        }

        .form-range::-webkit-slider-thumb:active {
            background-color: #c2bcf4;
            background-color: var(--cui-form-range-thumb-active-bg, #c2bcf4);
        }

        .form-range::-webkit-slider-runnable-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #c4c9d0;
            background-color: var(--cui-form-range-track-bg, #c4c9d0);
            border-color: transparent;
            border-radius: 1rem;
        }

        .form-range::-moz-range-thumb {
            width: 1rem;
            height: 1rem;
            background-color: #321fdb;
            background-color: var(--cui-form-range-thumb-bg, #321fdb);
            border: 0;
            border-radius: 1rem;
            -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            -moz-appearance: none;
            appearance: none;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-range::-moz-range-thumb {
                -moz-transition: none;
                transition: none;
            }
        }

        .form-range::-moz-range-thumb:active {
            background-color: #c2bcf4;
            background-color: var(--cui-form-range-thumb-active-bg, #c2bcf4);
        }

        .form-range::-moz-range-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #c4c9d0;
            background-color: var(--cui-form-range-track-bg, #c4c9d0);
            border-color: transparent;
            border-radius: 1rem;
        }

        .form-range:disabled {
            pointer-events: none;
        }

        .form-range:disabled::-webkit-slider-thumb {
            background-color: #9da5b1;
            background-color: var(--cui-form-range-thumb-disabled-bg, #9da5b1);
        }

        .form-range:disabled::-moz-range-thumb {
            background-color: #9da5b1;
            background-color: var(--cui-form-range-thumb-disabled-bg, #9da5b1);
        }

        .form-floating {
            position: relative;
        }

        .form-floating>.form-control,
        .form-floating>.form-control-plaintext,
        .form-floating>.form-select {
            height: calc(3.5rem + 2px);
            line-height: 1.25;
        }

        .form-floating>label {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            padding: 1rem 0.75rem;
            overflow: hidden;
            text-align: start;
            text-overflow: ellipsis;
            white-space: nowrap;
            pointer-events: none;
            border: 1px solid transparent;
            transform-origin: 0 0;
            transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
        }

        html:not([dir=rtl]) .form-floating>label {
            left: 0;
        }

        *[dir=rtl] .form-floating>label {
            right: 0;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-floating>label {
                transition: none;
            }
        }

        .form-floating>.form-control,
        .form-floating>.form-control-plaintext {
            padding: 1rem 0.75rem;
        }

        .form-floating>.form-control::-moz-placeholder,
        .form-floating>.form-control-plaintext::-moz-placeholder {
            color: transparent;
        }

        .form-floating>.form-control::placeholder,
        .form-floating>.form-control-plaintext::placeholder {
            color: transparent;
        }

        .form-floating>.form-control:not(:-moz-placeholder-shown),
        .form-floating>.form-control-plaintext:not(:-moz-placeholder-shown) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }

        .form-floating>.form-control:focus,
        .form-floating>.form-control:not(:placeholder-shown),
        .form-floating>.form-control-plaintext:focus,
        .form-floating>.form-control-plaintext:not(:placeholder-shown) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }

        .form-floating>.form-control:-webkit-autofill,
        .form-floating>.form-control-plaintext:-webkit-autofill {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }

        .form-floating>.form-select {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }

        .form-floating>.form-control:not(:-moz-placeholder-shown)~label {
            opacity: 0.65;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }

        .form-floating>.form-control:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label,
        .form-floating>.form-control-plaintext~label,
        .form-floating>.form-select~label {
            opacity: 0.65;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }

        .form-floating>.form-control:-webkit-autofill~label {
            opacity: 0.65;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }

        .form-floating>.form-control-plaintext~label {
            border-width: 1px 0;
        }

        .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%;
        }

        .input-group>.form-control,
        .input-group>.form-select,
        .input-group>.form-floating {
            position: relative;
            flex: 1 1 auto;
            width: 1%;
            min-width: 0;
        }

        .input-group>.form-control:focus,
        .input-group>.form-select:focus,
        .input-group>.form-floating:focus-within {
            z-index: 5;
        }

        .input-group .btn {
            position: relative;
            z-index: 2;
        }

        .input-group .btn:focus {
            z-index: 5;
        }

        .input-group-text {
            display: flex;
            align-items: center;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: rgba(44, 56, 74, 0.95);
            color: var(--cui-input-group-addon-color, rgba(44, 56, 74, 0.95));
            text-align: center;
            white-space: nowrap;
            background-color: #d8dbe0;
            background-color: var(--cui-input-group-addon-bg, #d8dbe0);
            border: 1px solid #b1b7c1;
            border: 1px solid var(--cui-input-group-addon-border-color, #b1b7c1);
            border-radius: 0.375rem;
        }

        .input-group-lg>.form-control,
        .input-group-lg>.form-select,
        .input-group-lg>.input-group-text,
        .input-group-lg>.btn {
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            border-radius: 0.5rem;
        }

        .input-group-sm>.form-control,
        .input-group-sm>.form-select,
        .input-group-sm>.input-group-text,
        .input-group-sm>.btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            border-radius: 0.25rem;
        }

        html:not([dir=rtl]) .input-group-lg>.form-select,
        html:not([dir=rtl]) .input-group-sm>.form-select {
            padding-right: 3rem;
        }

        *[dir=rtl] .input-group-lg>.form-select,
        *[dir=rtl] .input-group-sm>.form-select {
            padding-left: 3rem;
        }

        html:not([dir=rtl]) .input-group:not(.has-validation)> :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
        html:not([dir=rtl]) .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
        html:not([dir=rtl]) .input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-control,
        html:not([dir=rtl]) .input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-select {
            border-top-right-radius: 0;
        }

        *[dir=rtl] .input-group:not(.has-validation)> :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
        *[dir=rtl] .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
        *[dir=rtl] .input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-control,
        *[dir=rtl] .input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-select {
            border-top-left-radius: 0;
        }

        html:not([dir=rtl]) .input-group:not(.has-validation)> :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
        html:not([dir=rtl]) .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
        html:not([dir=rtl]) .input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-control,
        html:not([dir=rtl]) .input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-select {
            border-bottom-right-radius: 0;
        }

        *[dir=rtl] .input-group:not(.has-validation)> :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
        *[dir=rtl] .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
        *[dir=rtl] .input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-control,
        *[dir=rtl] .input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-select {
            border-bottom-left-radius: 0;
        }

        html:not([dir=rtl]) .input-group.has-validation> :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
        html:not([dir=rtl]) .input-group.has-validation>.dropdown-toggle:nth-last-child(n+4),
        html:not([dir=rtl]) .input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-control,
        html:not([dir=rtl]) .input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-select {
            border-top-right-radius: 0;
        }

        *[dir=rtl] .input-group.has-validation> :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
        *[dir=rtl] .input-group.has-validation>.dropdown-toggle:nth-last-child(n+4),
        *[dir=rtl] .input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-control,
        *[dir=rtl] .input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-select {
            border-top-left-radius: 0;
        }

        html:not([dir=rtl]) .input-group.has-validation> :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
        html:not([dir=rtl]) .input-group.has-validation>.dropdown-toggle:nth-last-child(n+4),
        html:not([dir=rtl]) .input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-control,
        html:not([dir=rtl]) .input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-select {
            border-bottom-right-radius: 0;
        }

        *[dir=rtl] .input-group.has-validation> :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
        *[dir=rtl] .input-group.has-validation>.dropdown-toggle:nth-last-child(n+4),
        *[dir=rtl] .input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-control,
        *[dir=rtl] .input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-select {
            border-bottom-left-radius: 0;
        }

        html:not([dir=rtl]) .input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            margin-left: -1px;
        }

        *[dir=rtl] .input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            margin-right: -1px;
        }

        html:not([dir=rtl]) .input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            border-top-left-radius: 0;
        }

        *[dir=rtl] .input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            border-top-right-radius: 0;
        }

        html:not([dir=rtl]) .input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            border-bottom-left-radius: 0;
        }

        *[dir=rtl] .input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            border-bottom-right-radius: 0;
        }

        html:not([dir=rtl]) .input-group>.form-floating:not(:first-child)>.form-control,
        html:not([dir=rtl]) .input-group>.form-floating:not(:first-child)>.form-select {
            border-top-left-radius: 0;
        }

        *[dir=rtl] .input-group>.form-floating:not(:first-child)>.form-control,
        *[dir=rtl] .input-group>.form-floating:not(:first-child)>.form-select {
            border-top-right-radius: 0;
        }

        html:not([dir=rtl]) .input-group>.form-floating:not(:first-child)>.form-control,
        html:not([dir=rtl]) .input-group>.form-floating:not(:first-child)>.form-select {
            border-bottom-left-radius: 0;
        }

        *[dir=rtl] .input-group>.form-floating:not(:first-child)>.form-control,
        *[dir=rtl] .input-group>.form-floating:not(:first-child)>.form-select {
            border-bottom-right-radius: 0;
        }

        .valid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #2eb85c;
        }

        .valid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: 0.1rem;
            font-size: 0.875rem;
            color: #000015;
            background-color: rgba(46, 184, 92, 0.9);
            border-radius: 0.375rem;
        }

        .was-validated :valid~.valid-feedback,
        .was-validated :valid~.valid-tooltip,
        .is-valid~.valid-feedback,
        .is-valid~.valid-tooltip {
            display: block;
        }

        .was-validated .form-control:valid,
        .form-control.is-valid {
            border-color: #2eb85c;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%232eb85c' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        html:not([dir=rtl]) .was-validated .form-control:valid,
        html:not([dir=rtl]) .form-control.is-valid {
            padding-right: calc(1.5em + 0.75rem);
        }

        *[dir=rtl] .was-validated .form-control:valid,
        *[dir=rtl] .form-control.is-valid {
            padding-left: calc(1.5em + 0.75rem);
        }

        html:not([dir=rtl]) .was-validated .form-control:valid,
        html:not([dir=rtl]) .form-control.is-valid {
            background-position: right calc(0.375em + 0.1875rem) center;
        }

        *[dir=rtl] .was-validated .form-control:valid,
        *[dir=rtl] .form-control.is-valid {
            background-position: left calc(0.375em + 0.1875rem) center;
        }

        .was-validated .form-control:valid:focus,
        .form-control.is-valid:focus {
            border-color: #2eb85c;
            box-shadow: 0 0 0 0.25rem rgba(46, 184, 92, 0.25);
        }

        html:not([dir=rtl]) .was-validated textarea.form-control:valid,
        html:not([dir=rtl]) textarea.form-control.is-valid {
            padding-right: calc(1.5em + 0.75rem);
        }

        *[dir=rtl] .was-validated textarea.form-control:valid,
        *[dir=rtl] textarea.form-control.is-valid {
            padding-left: calc(1.5em + 0.75rem);
        }

        html:not([dir=rtl]) .was-validated textarea.form-control:valid,
        html:not([dir=rtl]) textarea.form-control.is-valid {
            background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
        }

        *[dir=rtl] .was-validated textarea.form-control:valid,
        *[dir=rtl] textarea.form-control.is-valid {
            background-position: top calc(0.375em + 0.1875rem) left calc(0.375em + 0.1875rem);
        }

        .was-validated .form-select:valid,
        .form-select.is-valid {
            border-color: #2eb85c;
        }

        .was-validated .form-select:valid:not([multiple]):not([size]),
        .was-validated .form-select:valid:not([multiple])[size="1"],
        .form-select.is-valid:not([multiple]):not([size]),
        .form-select.is-valid:not([multiple])[size="1"] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23636f83' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%232eb85c' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        html:not([dir=rtl]) .was-validated .form-select:valid:not([multiple]):not([size]),
        html:not([dir=rtl]) .was-validated .form-select:valid:not([multiple])[size="1"],
        html:not([dir=rtl]) .form-select.is-valid:not([multiple]):not([size]),
        html:not([dir=rtl]) .form-select.is-valid:not([multiple])[size="1"] {
            padding-right: 4.125rem;
        }

        *[dir=rtl] .was-validated .form-select:valid:not([multiple]):not([size]),
        *[dir=rtl] .was-validated .form-select:valid:not([multiple])[size="1"],
        *[dir=rtl] .form-select.is-valid:not([multiple]):not([size]),
        *[dir=rtl] .form-select.is-valid:not([multiple])[size="1"] {
            padding-left: 4.125rem;
        }

        html:not([dir=rtl]) .was-validated .form-select:valid:not([multiple]):not([size]),
        html:not([dir=rtl]) .was-validated .form-select:valid:not([multiple])[size="1"],
        html:not([dir=rtl]) .form-select.is-valid:not([multiple]):not([size]),
        html:not([dir=rtl]) .form-select.is-valid:not([multiple])[size="1"] {
            background-position: right 0.75rem center, center right 2.25rem;
        }

        *[dir=rtl] .was-validated .form-select:valid:not([multiple]):not([size]),
        *[dir=rtl] .was-validated .form-select:valid:not([multiple])[size="1"],
        *[dir=rtl] .form-select.is-valid:not([multiple]):not([size]),
        *[dir=rtl] .form-select.is-valid:not([multiple])[size="1"] {
            background-position: left 0.75rem center, center left 2.25rem;
        }

        .was-validated .form-select:valid:focus,
        .form-select.is-valid:focus {
            border-color: #2eb85c;
            box-shadow: 0 0 0 0.25rem rgba(46, 184, 92, 0.25);
        }

        .was-validated .form-control-color:valid,
        .form-control-color.is-valid {
            width: calc(3rem + calc(1.5em + 0.75rem));
        }

        .was-validated .form-check-input:valid,
        .form-check-input.is-valid {
            border-color: #2eb85c;
        }

        .was-validated .form-check-input:valid:checked,
        .form-check-input.is-valid:checked {
            background-color: #2eb85c;
        }

        .was-validated .form-check-input:valid:focus,
        .form-check-input.is-valid:focus {
            box-shadow: 0 0 0 0.25rem rgba(46, 184, 92, 0.25);
        }

        .was-validated .form-check-input:valid~.form-check-label,
        .form-check-input.is-valid~.form-check-label {
            color: #2eb85c;
        }

        html:not([dir=rtl]) .form-check-inline .form-check-input~.valid-feedback {
            margin-left: 0.5em;
        }

        *[dir=rtl] .form-check-inline .form-check-input~.valid-feedback {
            margin-right: 0.5em;
        }

        .was-validated .input-group>.form-control:not(:focus):valid,
        .input-group>.form-control:not(:focus).is-valid,
        .was-validated .input-group>.form-select:not(:focus):valid,
        .input-group>.form-select:not(:focus).is-valid,
        .was-validated .input-group>.form-floating:not(:focus-within):valid,
        .input-group>.form-floating:not(:focus-within).is-valid {
            z-index: 3;
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #e55353;
        }

        .invalid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: 0.1rem;
            font-size: 0.875rem;
            color: #000015;
            background-color: rgba(229, 83, 83, 0.9);
            border-radius: 0.375rem;
        }

        .was-validated :invalid~.invalid-feedback,
        .was-validated :invalid~.invalid-tooltip,
        .is-invalid~.invalid-feedback,
        .is-invalid~.invalid-tooltip {
            display: block;
        }

        .was-validated .form-control:invalid,
        .form-control.is-invalid {
            border-color: #e55353;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23e55353'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23e55353' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        html:not([dir=rtl]) .was-validated .form-control:invalid,
        html:not([dir=rtl]) .form-control.is-invalid {
            padding-right: calc(1.5em + 0.75rem);
        }

        *[dir=rtl] .was-validated .form-control:invalid,
        *[dir=rtl] .form-control.is-invalid {
            padding-left: calc(1.5em + 0.75rem);
        }

        html:not([dir=rtl]) .was-validated .form-control:invalid,
        html:not([dir=rtl]) .form-control.is-invalid {
            background-position: right calc(0.375em + 0.1875rem) center;
        }

        *[dir=rtl] .was-validated .form-control:invalid,
        *[dir=rtl] .form-control.is-invalid {
            background-position: left calc(0.375em + 0.1875rem) center;
        }

        .was-validated .form-control:invalid:focus,
        .form-control.is-invalid:focus {
            border-color: #e55353;
            box-shadow: 0 0 0 0.25rem rgba(229, 83, 83, 0.25);
        }

        html:not([dir=rtl]) .was-validated textarea.form-control:invalid,
        html:not([dir=rtl]) textarea.form-control.is-invalid {
            padding-right: calc(1.5em + 0.75rem);
        }

        *[dir=rtl] .was-validated textarea.form-control:invalid,
        *[dir=rtl] textarea.form-control.is-invalid {
            padding-left: calc(1.5em + 0.75rem);
        }

        html:not([dir=rtl]) .was-validated textarea.form-control:invalid,
        html:not([dir=rtl]) textarea.form-control.is-invalid {
            background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
        }

        *[dir=rtl] .was-validated textarea.form-control:invalid,
        *[dir=rtl] textarea.form-control.is-invalid {
            background-position: top calc(0.375em + 0.1875rem) left calc(0.375em + 0.1875rem);
        }

        .was-validated .form-select:invalid,
        .form-select.is-invalid {
            border-color: #e55353;
        }

        .was-validated .form-select:invalid:not([multiple]):not([size]),
        .was-validated .form-select:invalid:not([multiple])[size="1"],
        .form-select.is-invalid:not([multiple]):not([size]),
        .form-select.is-invalid:not([multiple])[size="1"] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23636f83' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23e55353'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23e55353' stroke='none'/%3e%3c/svg%3e");
            background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        html:not([dir=rtl]) .was-validated .form-select:invalid:not([multiple]):not([size]),
        html:not([dir=rtl]) .was-validated .form-select:invalid:not([multiple])[size="1"],
        html:not([dir=rtl]) .form-select.is-invalid:not([multiple]):not([size]),
        html:not([dir=rtl]) .form-select.is-invalid:not([multiple])[size="1"] {
            padding-right: 4.125rem;
        }

        *[dir=rtl] .was-validated .form-select:invalid:not([multiple]):not([size]),
        *[dir=rtl] .was-validated .form-select:invalid:not([multiple])[size="1"],
        *[dir=rtl] .form-select.is-invalid:not([multiple]):not([size]),
        *[dir=rtl] .form-select.is-invalid:not([multiple])[size="1"] {
            padding-left: 4.125rem;
        }

        html:not([dir=rtl]) .was-validated .form-select:invalid:not([multiple]):not([size]),
        html:not([dir=rtl]) .was-validated .form-select:invalid:not([multiple])[size="1"],
        html:not([dir=rtl]) .form-select.is-invalid:not([multiple]):not([size]),
        html:not([dir=rtl]) .form-select.is-invalid:not([multiple])[size="1"] {
            background-position: right 0.75rem center, center right 2.25rem;
        }

        *[dir=rtl] .was-validated .form-select:invalid:not([multiple]):not([size]),
        *[dir=rtl] .was-validated .form-select:invalid:not([multiple])[size="1"],
        *[dir=rtl] .form-select.is-invalid:not([multiple]):not([size]),
        *[dir=rtl] .form-select.is-invalid:not([multiple])[size="1"] {
            background-position: left 0.75rem center, center left 2.25rem;
        }

        .was-validated .form-select:invalid:focus,
        .form-select.is-invalid:focus {
            border-color: #e55353;
            box-shadow: 0 0 0 0.25rem rgba(229, 83, 83, 0.25);
        }

        .was-validated .form-control-color:invalid,
        .form-control-color.is-invalid {
            width: calc(3rem + calc(1.5em + 0.75rem));
        }

        .was-validated .form-check-input:invalid,
        .form-check-input.is-invalid {
            border-color: #e55353;
        }

        .was-validated .form-check-input:invalid:checked,
        .form-check-input.is-invalid:checked {
            background-color: #e55353;
        }

        .was-validated .form-check-input:invalid:focus,
        .form-check-input.is-invalid:focus {
            box-shadow: 0 0 0 0.25rem rgba(229, 83, 83, 0.25);
        }

        .was-validated .form-check-input:invalid~.form-check-label,
        .form-check-input.is-invalid~.form-check-label {
            color: #e55353;
        }

        html:not([dir=rtl]) .form-check-inline .form-check-input~.invalid-feedback {
            margin-left: 0.5em;
        }

        *[dir=rtl] .form-check-inline .form-check-input~.invalid-feedback {
            margin-right: 0.5em;
        }

        .was-validated .input-group>.form-control:not(:focus):invalid,
        .input-group>.form-control:not(:focus).is-invalid,
        .was-validated .input-group>.form-select:not(:focus):invalid,
        .input-group>.form-select:not(:focus).is-invalid,
        .was-validated .input-group>.form-floating:not(:focus-within):invalid,
        .input-group>.form-floating:not(:focus-within).is-invalid {
            z-index: 4;
        }

        .btn {
            --cui-btn-padding-x: 0.75rem;
            --cui-btn-padding-y: 0.375rem;
            --cui-btn-font-family: ;
            --cui-btn-font-size: 1rem;
            --cui-btn-font-weight: 400;
            --cui-btn-line-height: 1.5;
            --cui-btn-color: rgba(44, 56, 74, 0.95);
            --cui-btn-bg: transparent;
            --cui-btn-border-width: 1px;
            --cui-btn-border-color: transparent;
            --cui-btn-border-radius: 0.375rem;
            --cui-btn-hover-border-color: transparent;
            --cui-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 21, 0.075);
            --cui-btn-disabled-opacity: 0.65;
            --cui-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--cui-btn-focus-shadow-rgb), .5);
            display: inline-block;
            padding: var(--cui-btn-padding-y) var(--cui-btn-padding-x);
            font-family: var(--cui-btn-font-family);
            font-size: var(--cui-btn-font-size);
            font-weight: var(--cui-btn-font-weight);
            line-height: var(--cui-btn-line-height);
            color: var(--cui-btn-color);
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            border: var(--cui-btn-border-width) solid var(--cui-btn-border-color);
            border-radius: var(--cui-btn-border-radius);
            background-color: var(--cui-btn-bg);
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .btn {
                transition: none;
            }
        }

        .btn:hover {
            color: var(--cui-btn-hover-color);
            background-color: var(--cui-btn-hover-bg);
            border-color: var(--cui-btn-hover-border-color);
        }

        .btn-check+.btn:hover {
            color: var(--cui-btn-color);
            background-color: var(--cui-btn-bg);
            border-color: var(--cui-btn-border-color);
        }

        .btn:focus-visible {
            color: var(--cui-btn-hover-color);
            background-color: var(--cui-btn-hover-bg);
            border-color: var(--cui-btn-hover-border-color);
            outline: 0;
            box-shadow: var(--cui-btn-focus-box-shadow);
        }

        .btn-check:focus-visible+.btn {
            border-color: var(--cui-btn-hover-border-color);
            outline: 0;
            box-shadow: var(--cui-btn-focus-box-shadow);
        }

        .btn-check:checked+.btn,
        :not(.btn-check)+.btn:active,
        .btn:first-child:active,
        .btn.active,
        .btn.show {
            color: var(--cui-btn-active-color);
            background-color: var(--cui-btn-active-bg);
            border-color: var(--cui-btn-active-border-color);
        }

        .btn-check:checked+.btn:focus-visible,
        :not(.btn-check)+.btn:active:focus-visible,
        .btn:first-child:active:focus-visible,
        .btn.active:focus-visible,
        .btn.show:focus-visible {
            box-shadow: var(--cui-btn-focus-box-shadow);
        }

        .btn:disabled,
        .btn.disabled,
        fieldset:disabled .btn {
            color: var(--cui-btn-disabled-color);
            pointer-events: none;
            background-color: var(--cui-btn-disabled-bg);
            border-color: var(--cui-btn-disabled-border-color);
            opacity: var(--cui-btn-disabled-opacity);
        }

        .btn-transparent {
            --cui-btn-active-border-color: transparent;
            --cui-btn-disabled-border-color: transparent;
            --cui-btn-hover-border-color: transparent;
        }

        .btn-primary {
            --cui-btn-color: rgba(255, 255, 255, 0.87);
            --cui-btn-bg: #321fdb;
            --cui-btn-border-color: #321fdb;
            --cui-btn-hover-color: rgba(255, 255, 255, 0.87);
            --cui-btn-hover-bg: #5141e0;
            --cui-btn-hover-border-color: #4735df;
            --cui-btn-focus-shadow-rgb: 75, 58, 223;
            --cui-btn-active-color: rgba(255, 255, 255, 0.87);
            --cui-btn-active-bg: #5b4ce2;
            --cui-btn-active-border-color: #4735df;
            --cui-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 21, 0.125);
            --cui-btn-disabled-color: rgba(255, 255, 255, 0.87);
            --cui-btn-disabled-bg: #321fdb;
            --cui-btn-disabled-border-color: #321fdb;
        }

        .btn-secondary {
            --cui-btn-color: #000015;
            --cui-btn-bg: #9da5b1;
            --cui-btn-border-color: #9da5b1;
            --cui-btn-hover-color: rgba(44, 56, 74, 0.95);
            --cui-btn-hover-bg: #acb3bd;
            --cui-btn-hover-border-color: #a7aeb9;
            --cui-btn-focus-shadow-rgb: 133, 140, 154;
            --cui-btn-active-color: rgba(44, 56, 74, 0.95);
            --cui-btn-active-bg: #b1b7c1;
            --cui-btn-active-border-color: #a7aeb9;
            --cui-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 21, 0.125);
            --cui-btn-disabled-color: #000015;
            --cui-btn-disabled-bg: #9da5b1;
            --cui-btn-disabled-border-color: #9da5b1;
        }

        .btn-success {
            --cui-btn-color: #000015;
            --cui-btn-bg: #2eb85c;
            --cui-btn-border-color: #2eb85c;
            --cui-btn-hover-color: rgba(44, 56, 74, 0.95);
            --cui-btn-hover-bg: #4dc374;
            --cui-btn-hover-border-color: #43bf6c;
            --cui-btn-focus-shadow-rgb: 39, 156, 81;
            --cui-btn-active-color: rgba(44, 56, 74, 0.95);
            --cui-btn-active-bg: #58c67d;
            --cui-btn-active-border-color: #43bf6c;
            --cui-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 21, 0.125);
            --cui-btn-disabled-color: #000015;
            --cui-btn-disabled-bg: #2eb85c;
            --cui-btn-disabled-border-color: #2eb85c;
        }

        .btn-danger {
            --cui-btn-color: #000015;
            --cui-btn-bg: #e55353;
            --cui-btn-border-color: #e55353;
            --cui-btn-hover-color: #000015;
            --cui-btn-hover-bg: #e96d6d;
            --cui-btn-hover-border-color: #e86464;
            --cui-btn-focus-shadow-rgb: 195, 71, 74;
            --cui-btn-active-color: #000015;
            --cui-btn-active-bg: #ea7575;
            --cui-btn-active-border-color: #e86464;
            --cui-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 21, 0.125);
            --cui-btn-disabled-color: #000015;
            --cui-btn-disabled-bg: #e55353;
            --cui-btn-disabled-border-color: #e55353;
        }

        .btn-warning {
            --cui-btn-color: rgba(44, 56, 74, 0.95);
            --cui-btn-bg: #f9b115;
            --cui-btn-border-color: #f9b115;
            --cui-btn-hover-color: #000015;
            --cui-btn-hover-bg: #d49612;
            --cui-btn-hover-border-color: #c78e11;
            --cui-btn-focus-shadow-rgb: 221, 160, 28;
            --cui-btn-active-color: #000015;
            --cui-btn-active-bg: #c78e11;
            --cui-btn-active-border-color: #bb8510;
            --cui-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 21, 0.125);
            --cui-btn-disabled-color: rgba(44, 56, 74, 0.95);
            --cui-btn-disabled-bg: #f9b115;
            --cui-btn-disabled-border-color: #f9b115;
        }

        .btn-info {
            --cui-btn-color: #000015;
            --cui-btn-bg: #39f;
            --cui-btn-border-color: #39f;
            --cui-btn-hover-color: #000015;
            --cui-btn-hover-bg: #52a8ff;
            --cui-btn-hover-border-color: #47a3ff;
            --cui-btn-focus-shadow-rgb: 43, 130, 220;
            --cui-btn-active-color: #000015;
            --cui-btn-active-bg: #5cadff;
            --cui-btn-active-border-color: #47a3ff;
            --cui-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 21, 0.125);
            --cui-btn-disabled-color: #000015;
            --cui-btn-disabled-bg: #39f;
            --cui-btn-disabled-border-color: #39f;
        }

        .btn-light {
            --cui-btn-color: rgba(44, 56, 74, 0.95);
            --cui-btn-bg: #ebedef;
            --cui-btn-border-color: #ebedef;
            --cui-btn-hover-color: rgba(44, 56, 74, 0.95);
            --cui-btn-hover-bg: #c8c9cb;
            --cui-btn-hover-border-color: #bcbebf;
            --cui-btn-focus-shadow-rgb: 209, 212, 216;
            --cui-btn-active-color: rgba(44, 56, 74, 0.95);
            --cui-btn-active-bg: #bcbebf;
            --cui-btn-active-border-color: #b0b2b3;
            --cui-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 21, 0.125);
            --cui-btn-disabled-color: rgba(44, 56, 74, 0.95);
            --cui-btn-disabled-bg: #ebedef;
            --cui-btn-disabled-border-color: #ebedef;
        }

        .btn-dark {
            --cui-btn-color: rgba(255, 255, 255, 0.87);
            --cui-btn-bg: #4f5d73;
            --cui-btn-border-color: #4f5d73;
            --cui-btn-hover-color: #fff;
            --cui-btn-hover-bg: #697588;
            --cui-btn-hover-border-color: #616d81;
            --cui-btn-focus-shadow-rgb: 100, 112, 132;
            --cui-btn-active-color: #fff;
            --cui-btn-active-bg: #727d8f;
            --cui-btn-active-border-color: #616d81;
            --cui-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 21, 0.125);
            --cui-btn-disabled-color: rgba(255, 255, 255, 0.87);
            --cui-btn-disabled-bg: #4f5d73;
            --cui-btn-disabled-border-color: #4f5d73;
        }

        .btn-outline-primary {
            --cui-btn-color: #321fdb;
            --cui-btn-border-color: #321fdb;
            --cui-btn-hover-color: rgba(255, 255, 255, 0.87);
            --cui-btn-hover-bg: #5b4ce2;
            --cui-btn-hover-border-color: #4735df;
            --cui-btn-focus-shadow-rgb: 50, 31, 219;
            --cui-btn-active-color: rgba(255, 255, 255, 0.87);
            --cui-btn-active-bg: #5b4ce2;
            --cui-btn-active-border-color: #4735df;
            --cui-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 21, 0.125);
            --cui-btn-disabled-color: #321fdb;
            --cui-btn-disabled-bg: transparent;
            --cui-gradient: none;
        }

        .btn-outline-secondary {
            --cui-btn-color: #9da5b1;
            --cui-btn-border-color: #9da5b1;
            --cui-btn-hover-color: rgba(44, 56, 74, 0.95);
            --cui-btn-hover-bg: #b1b7c1;
            --cui-btn-hover-border-color: #a7aeb9;
            --cui-btn-focus-shadow-rgb: 157, 165, 177;
            --cui-btn-active-color: rgba(44, 56, 74, 0.95);
            --cui-btn-active-bg: #b1b7c1;
            --cui-btn-active-border-color: #a7aeb9;
            --cui-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 21, 0.125);
            --cui-btn-disabled-color: #9da5b1;
            --cui-btn-disabled-bg: transparent;
            --cui-gradient: none;
        }

        .btn-outline-success {
            --cui-btn-color: #2eb85c;
            --cui-btn-border-color: #2eb85c;
            --cui-btn-hover-color: rgba(44, 56, 74, 0.95);
            --cui-btn-hover-bg: #58c67d;
            --cui-btn-hover-border-color: #43bf6c;
            --cui-btn-focus-shadow-rgb: 46, 184, 92;
            --cui-btn-active-color: rgba(44, 56, 74, 0.95);
            --cui-btn-active-bg: #58c67d;
            --cui-btn-active-border-color: #43bf6c;
            --cui-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 21, 0.125);
            --cui-btn-disabled-color: #2eb85c;
            --cui-btn-disabled-bg: transparent;
            --cui-gradient: none;
        }

        .btn-outline-danger {
            --cui-btn-color: #e55353;
            --cui-btn-border-color: #e55353;
            --cui-btn-hover-color: #000015;
            --cui-btn-hover-bg: #ea7575;
            --cui-btn-hover-border-color: #e86464;
            --cui-btn-focus-shadow-rgb: 229, 83, 83;
            --cui-btn-active-color: #000015;
            --cui-btn-active-bg: #ea7575;
            --cui-btn-active-border-color: #e86464;
            --cui-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 21, 0.125);
            --cui-btn-disabled-color: #e55353;
            --cui-btn-disabled-bg: transparent;
            --cui-gradient: none;
        }

        .btn-outline-warning {
            --cui-btn-color: #f9b115;
            --cui-btn-border-color: #f9b115;
            --cui-btn-hover-color: #000015;
            --cui-btn-hover-bg: #c78e11;
            --cui-btn-hover-border-color: #bb8510;
            --cui-btn-focus-shadow-rgb: 249, 177, 21;
            --cui-btn-active-color: #000015;
            --cui-btn-active-bg: #c78e11;
            --cui-btn-active-border-color: #bb8510;
            --cui-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 21, 0.125);
            --cui-btn-disabled-color: #f9b115;
            --cui-btn-disabled-bg: transparent;
            --cui-gradient: none;
        }

        .btn-outline-info {
            --cui-btn-color: #39f;
            --cui-btn-border-color: #39f;
            --cui-btn-hover-color: #000015;
            --cui-btn-hover-bg: #5cadff;
            --cui-btn-hover-border-color: #47a3ff;
            --cui-btn-focus-shadow-rgb: 51, 153, 255;
            --cui-btn-active-color: #000015;
            --cui-btn-active-bg: #5cadff;
            --cui-btn-active-border-color: #47a3ff;
            --cui-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 21, 0.125);
            --cui-btn-disabled-color: #39f;
            --cui-btn-disabled-bg: transparent;
            --cui-gradient: none;
        }

        .btn-outline-light {
            --cui-btn-color: #ebedef;
            --cui-btn-border-color: #ebedef;
            --cui-btn-hover-color: rgba(44, 56, 74, 0.95);
            --cui-btn-hover-bg: #bcbebf;
            --cui-btn-hover-border-color: #b0b2b3;
            --cui-btn-focus-shadow-rgb: 235, 237, 239;
            --cui-btn-active-color: rgba(44, 56, 74, 0.95);
            --cui-btn-active-bg: #bcbebf;
            --cui-btn-active-border-color: #b0b2b3;
            --cui-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 21, 0.125);
            --cui-btn-disabled-color: #ebedef;
            --cui-btn-disabled-bg: transparent;
            --cui-gradient: none;
        }

        .btn-outline-dark {
            --cui-btn-color: #4f5d73;
            --cui-btn-border-color: #4f5d73;
            --cui-btn-hover-color: #fff;
            --cui-btn-hover-bg: #727d8f;
            --cui-btn-hover-border-color: #616d81;
            --cui-btn-focus-shadow-rgb: 79, 93, 115;
            --cui-btn-active-color: #fff;
            --cui-btn-active-bg: #727d8f;
            --cui-btn-active-border-color: #616d81;
            --cui-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 21, 0.125);
            --cui-btn-disabled-color: #4f5d73;
            --cui-btn-disabled-bg: transparent;
            --cui-gradient: none;
        }

        .btn-ghost-primary {
            --cui-btn-color: #321fdb;
            --cui-btn-hover-bg: #5141e0;
            --cui-btn-hover-border-color: #4735df;
            --cui-btn-hover-color: rgba(255, 255, 255, 0.87);
            --cui-btn-active-bg: #5b4ce2;
            --cui-btn-active-border-color: #4735df;
            --cui-btn-active-color: rgba(255, 255, 255, 0.87);
            --cui-btn-disabled-color: #321fdb;
            --cui-btn-shadow: rgba(50, 31, 219, 0.5);
        }

        .btn-ghost-secondary {
            --cui-btn-color: #9da5b1;
            --cui-btn-hover-bg: #acb3bd;
            --cui-btn-hover-border-color: #a7aeb9;
            --cui-btn-hover-color: rgba(44, 56, 74, 0.95);
            --cui-btn-active-bg: #b1b7c1;
            --cui-btn-active-border-color: #a7aeb9;
            --cui-btn-active-color: rgba(44, 56, 74, 0.95);
            --cui-btn-disabled-color: #9da5b1;
            --cui-btn-shadow: rgba(157, 165, 177, 0.5);
        }

        .btn-ghost-success {
            --cui-btn-color: #2eb85c;
            --cui-btn-hover-bg: #4dc374;
            --cui-btn-hover-border-color: #43bf6c;
            --cui-btn-hover-color: rgba(44, 56, 74, 0.95);
            --cui-btn-active-bg: #58c67d;
            --cui-btn-active-border-color: #43bf6c;
            --cui-btn-active-color: rgba(44, 56, 74, 0.95);
            --cui-btn-disabled-color: #2eb85c;
            --cui-btn-shadow: rgba(46, 184, 92, 0.5);
        }

        .btn-ghost-danger {
            --cui-btn-color: #e55353;
            --cui-btn-hover-bg: #e96d6d;
            --cui-btn-hover-border-color: #e86464;
            --cui-btn-hover-color: #000015;
            --cui-btn-active-bg: #ea7575;
            --cui-btn-active-border-color: #e86464;
            --cui-btn-active-color: #000015;
            --cui-btn-disabled-color: #e55353;
            --cui-btn-shadow: rgba(229, 83, 83, 0.5);
        }

        .btn-ghost-warning {
            --cui-btn-color: #f9b115;
            --cui-btn-hover-bg: #d49612;
            --cui-btn-hover-border-color: #c78e11;
            --cui-btn-hover-color: #000015;
            --cui-btn-active-bg: #c78e11;
            --cui-btn-active-border-color: #bb8510;
            --cui-btn-active-color: #000015;
            --cui-btn-disabled-color: #f9b115;
            --cui-btn-shadow: rgba(249, 177, 21, 0.5);
        }

        .btn-ghost-info {
            --cui-btn-color: #39f;
            --cui-btn-hover-bg: #52a8ff;
            --cui-btn-hover-border-color: #47a3ff;
            --cui-btn-hover-color: #000015;
            --cui-btn-active-bg: #5cadff;
            --cui-btn-active-border-color: #47a3ff;
            --cui-btn-active-color: #000015;
            --cui-btn-disabled-color: #39f;
            --cui-btn-shadow: rgba(51, 153, 255, 0.5);
        }

        .btn-ghost-light {
            --cui-btn-color: #ebedef;
            --cui-btn-hover-bg: #c8c9cb;
            --cui-btn-hover-border-color: #bcbebf;
            --cui-btn-hover-color: rgba(44, 56, 74, 0.95);
            --cui-btn-active-bg: #bcbebf;
            --cui-btn-active-border-color: #b0b2b3;
            --cui-btn-active-color: rgba(44, 56, 74, 0.95);
            --cui-btn-disabled-color: #ebedef;
            --cui-btn-shadow: rgba(235, 237, 239, 0.5);
        }

        .btn-ghost-dark {
            --cui-btn-color: #4f5d73;
            --cui-btn-hover-bg: #697588;
            --cui-btn-hover-border-color: #616d81;
            --cui-btn-hover-color: #fff;
            --cui-btn-active-bg: #727d8f;
            --cui-btn-active-border-color: #616d81;
            --cui-btn-active-color: #fff;
            --cui-btn-disabled-color: #4f5d73;
            --cui-btn-shadow: rgba(79, 93, 115, 0.5);
        }

        .btn-link {
            --cui-btn-font-weight: 400;
            --cui-btn-color: var(--cui-link-color);
            --cui-btn-bg: transparent;
            --cui-btn-border-color: transparent;
            --cui-btn-hover-color: var(--cui-link-hover-color);
            --cui-btn-hover-border-color: transparent;
            --cui-btn-active-border-color: transparent;
            --cui-btn-disabled-color: #8a93a2;
            --cui-btn-disabled-border-color: transparent;
            --cui-btn-box-shadow: none;
            --cui-btn-focus-shadow-rgb: 75, 58, 223;
            text-decoration: underline;
        }

        .btn-link:focus-visible {
            color: var(--cui-btn-color);
        }

        .btn-lg,
        .btn-group-lg>.btn {
            --cui-btn-padding-y: 0.5rem;
            --cui-btn-padding-x: 1rem;
            --cui-btn-font-size: 1.25rem;
            --cui-btn-border-radius: 0.5rem;
        }

        .btn-sm,
        .btn-group-sm>.btn {
            --cui-btn-padding-y: 0.25rem;
            --cui-btn-padding-x: 0.5rem;
            --cui-btn-font-size: 0.875rem;
            --cui-btn-border-radius: 0.25rem;
        }

        .fade {
            transition: opacity 0.15s linear;
        }

        @media (prefers-reduced-motion: reduce) {
            .fade {
                transition: none;
            }
        }

        .fade:not(.show) {
            opacity: 0;
        }

        .collapse:not(.show) {
            display: none;
        }

        .collapsing {
            height: 0;
            overflow: hidden;
            transition: height 0.35s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .collapsing {
                transition: none;
            }
        }

        .collapsing.collapse-horizontal {
            width: 0;
            height: auto;
            transition: width 0.35s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .collapsing.collapse-horizontal {
                transition: none;
            }
        }

        .dropup,
        .dropend,
        .dropdown,
        .dropstart,
        .dropup-center,
        .dropdown-center {
            position: relative;
        }

        .dropdown-toggle {
            white-space: nowrap;
        }

        .dropdown-toggle::after {
            display: inline-block;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid;
            border-right: 0.3em solid transparent;
            border-bottom: 0;
            border-left: 0.3em solid transparent;
        }

        html:not([dir=rtl]) .dropdown-toggle::after {
            margin-left: 0.255em;
        }

        *[dir=rtl] .dropdown-toggle::after {
            margin-right: 0.255em;
        }

        html:not([dir=rtl]) .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        *[dir=rtl] .dropdown-toggle:empty::after {
            margin-right: 0;
        }

        .dropdown-menu {
            --cui-dropdown-zindex: 1000;
            --cui-dropdown-min-width: 10rem;
            --cui-dropdown-padding-x: 0;
            --cui-dropdown-padding-y: 0.5rem;
            --cui-dropdown-spacer: 0.125rem;
            --cui-dropdown-font-size: 1rem;
            --cui-dropdown-color: rgba(44, 56, 74, 0.95);
            --cui-dropdown-bg: #fff;
            --cui-dropdown-border-color: var(--cui-border-color-translucent);
            --cui-dropdown-border-radius: 0.375rem;
            --cui-dropdown-border-width: 1px;
            --cui-dropdown-inner-border-radius: calc(0.375rem - 1px);
            --cui-dropdown-divider-bg: var(--cui-border-color-translucent);
            --cui-dropdown-divider-margin-y: 0.5rem;
            --cui-dropdown-box-shadow: 0 0.5rem 1rem rgba(0, 0, 21, 0.15);
            --cui-dropdown-link-color: #4f5d73;
            --cui-dropdown-link-hover-color: #475468;
            --cui-dropdown-link-hover-bg: #d8dbe0;
            --cui-dropdown-link-active-color: rgba(255, 255, 255, 0.87);
            --cui-dropdown-link-active-bg: #321fdb;
            --cui-dropdown-link-disabled-color: #9da5b1;
            --cui-dropdown-item-padding-x: 1rem;
            --cui-dropdown-item-padding-y: 0.25rem;
            --cui-dropdown-header-color: #8a93a2;
            --cui-dropdown-header-padding-x: 1rem;
            --cui-dropdown-header-padding-y: 0.5rem;
            position: absolute;
            z-index: var(--cui-dropdown-zindex);
            display: none;
            min-width: var(--cui-dropdown-min-width);
            padding: var(--cui-dropdown-padding-y) var(--cui-dropdown-padding-x);
            margin: 0;
            font-size: var(--cui-dropdown-font-size);
            color: var(--cui-dropdown-color);
            text-align: left;
            list-style: none;
            background-color: var(--cui-dropdown-bg);
            background-clip: padding-box;
            border: var(--cui-dropdown-border-width) solid var(--cui-dropdown-border-color);
            border-radius: var(--cui-dropdown-border-radius);
        }

        .dropdown-menu[data-coreui-popper] {
            top: 100%;
            margin-top: var(--cui-dropdown-spacer);
        }

        html:not([dir=rtl]) .dropdown-menu[data-coreui-popper] {
            left: 0;
        }

        *[dir=rtl] .dropdown-menu[data-coreui-popper] {
            right: 0;
        }

        .dropdown-menu-start {
            --cui-position: start;
        }

        .dropdown-menu-start[data-coreui-popper] {
            right: auto;
            left: 0;
        }

        .dropdown-menu-end {
            --cui-position: end;
        }

        .dropdown-menu-end[data-coreui-popper] {
            right: 0;
            left: auto;
        }

        @media (min-width: 576px) {
            .dropdown-menu-sm-start {
                --cui-position: start;
            }

            .dropdown-menu-sm-start[data-coreui-popper] {
                right: auto;
                left: 0;
            }

            .dropdown-menu-sm-end {
                --cui-position: end;
            }

            .dropdown-menu-sm-end[data-coreui-popper] {
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 768px) {
            .dropdown-menu-md-start {
                --cui-position: start;
            }

            .dropdown-menu-md-start[data-coreui-popper] {
                right: auto;
                left: 0;
            }

            .dropdown-menu-md-end {
                --cui-position: end;
            }

            .dropdown-menu-md-end[data-coreui-popper] {
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 992px) {
            .dropdown-menu-lg-start {
                --cui-position: start;
            }

            .dropdown-menu-lg-start[data-coreui-popper] {
                right: auto;
                left: 0;
            }

            .dropdown-menu-lg-end {
                --cui-position: end;
            }

            .dropdown-menu-lg-end[data-coreui-popper] {
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 1200px) {
            .dropdown-menu-xl-start {
                --cui-position: start;
            }

            .dropdown-menu-xl-start[data-coreui-popper] {
                right: auto;
                left: 0;
            }

            .dropdown-menu-xl-end {
                --cui-position: end;
            }

            .dropdown-menu-xl-end[data-coreui-popper] {
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 1400px) {
            .dropdown-menu-xxl-start {
                --cui-position: start;
            }

            .dropdown-menu-xxl-start[data-coreui-popper] {
                right: auto;
                left: 0;
            }

            .dropdown-menu-xxl-end {
                --cui-position: end;
            }

            .dropdown-menu-xxl-end[data-coreui-popper] {
                right: 0;
                left: auto;
            }
        }

        .dropup .dropdown-menu[data-coreui-popper] {
            top: auto;
            bottom: 100%;
            margin-top: 0;
            margin-bottom: var(--cui-dropdown-spacer);
        }

        .dropup .dropdown-toggle::after {
            display: inline-block;
            vertical-align: 0.255em;
            content: "";
            border-top: 0;
            border-right: 0.3em solid transparent;
            border-bottom: 0.3em solid;
            border-left: 0.3em solid transparent;
        }

        html:not([dir=rtl]) .dropup .dropdown-toggle::after {
            margin-left: 0.255em;
        }

        *[dir=rtl] .dropup .dropdown-toggle::after {
            margin-right: 0.255em;
        }

        html:not([dir=rtl]) .dropup .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        *[dir=rtl] .dropup .dropdown-toggle:empty::after {
            margin-right: 0;
        }

        .dropend .dropdown-menu[data-coreui-popper] {
            top: 0;
            margin-top: 0;
        }

        html:not([dir=rtl]) .dropend .dropdown-menu[data-coreui-popper] {
            right: auto;
        }

        *[dir=rtl] .dropend .dropdown-menu[data-coreui-popper] {
            left: auto;
        }

        html:not([dir=rtl]) .dropend .dropdown-menu[data-coreui-popper] {
            left: 100%;
        }

        *[dir=rtl] .dropend .dropdown-menu[data-coreui-popper] {
            right: 100%;
        }

        html:not([dir=rtl]) .dropend .dropdown-menu[data-coreui-popper] {
            margin-left: var(--cui-dropdown-spacer);
        }

        *[dir=rtl] .dropend .dropdown-menu[data-coreui-popper] {
            margin-right: var(--cui-dropdown-spacer);
        }

        .dropend .dropdown-toggle::after {
            display: inline-block;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0;
            border-bottom: 0.3em solid transparent;
            border-left: 0.3em solid;
        }

        html:not([dir=rtl]) .dropend .dropdown-toggle::after {
            margin-left: 0.255em;
        }

        *[dir=rtl] .dropend .dropdown-toggle::after {
            margin-right: 0.255em;
        }

        html:not([dir=rtl]) .dropend .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        *[dir=rtl] .dropend .dropdown-toggle:empty::after {
            margin-right: 0;
        }

        .dropend .dropdown-toggle::after {
            vertical-align: 0;
        }

        .dropstart .dropdown-menu[data-coreui-popper] {
            top: 0;
            margin-top: 0;
        }

        html:not([dir=rtl]) .dropstart .dropdown-menu[data-coreui-popper] {
            right: 100%;
        }

        *[dir=rtl] .dropstart .dropdown-menu[data-coreui-popper] {
            left: 100%;
        }

        html:not([dir=rtl]) .dropstart .dropdown-menu[data-coreui-popper] {
            left: auto;
        }

        *[dir=rtl] .dropstart .dropdown-menu[data-coreui-popper] {
            right: auto;
        }

        html:not([dir=rtl]) .dropstart .dropdown-menu[data-coreui-popper] {
            margin-right: var(--cui-dropdown-spacer);
        }

        *[dir=rtl] .dropstart .dropdown-menu[data-coreui-popper] {
            margin-left: var(--cui-dropdown-spacer);
        }

        .dropstart .dropdown-toggle::after {
            display: inline-block;
            vertical-align: 0.255em;
            content: "";
        }

        html:not([dir=rtl]) .dropstart .dropdown-toggle::after {
            margin-left: 0.255em;
        }

        *[dir=rtl] .dropstart .dropdown-toggle::after {
            margin-right: 0.255em;
        }

        .dropstart .dropdown-toggle::after {
            display: none;
        }

        .dropstart .dropdown-toggle::before {
            display: inline-block;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0.3em solid;
            border-bottom: 0.3em solid transparent;
        }

        html:not([dir=rtl]) .dropstart .dropdown-toggle::before {
            margin-right: 0.255em;
        }

        *[dir=rtl] .dropstart .dropdown-toggle::before {
            margin-left: 0.255em;
        }

        html:not([dir=rtl]) .dropstart .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        *[dir=rtl] .dropstart .dropdown-toggle:empty::after {
            margin-right: 0;
        }

        .dropstart .dropdown-toggle::before {
            vertical-align: 0;
        }

        .dropdown-divider {
            height: 0;
            margin: var(--cui-dropdown-divider-margin-y) 0;
            overflow: hidden;
            border-top: 1px solid var(--cui-dropdown-divider-bg);
            opacity: 1;
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: var(--cui-dropdown-item-padding-y) var(--cui-dropdown-item-padding-x);
            clear: both;
            font-weight: 400;
            color: var(--cui-dropdown-link-color);
            text-align: inherit;
            text-decoration: none;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            color: var(--cui-dropdown-link-hover-color);
            background-color: var(--cui-dropdown-link-hover-bg);
        }

        .dropdown-item.active,
        .dropdown-item:active {
            color: var(--cui-dropdown-link-active-color);
            text-decoration: none;
            background-color: var(--cui-dropdown-link-active-bg);
        }

        .dropdown-item.disabled,
        .dropdown-item:disabled {
            color: var(--cui-dropdown-link-disabled-color);
            pointer-events: none;
            background-color: transparent;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-header {
            display: block;
            padding: var(--cui-dropdown-header-padding-y) var(--cui-dropdown-header-padding-x);
            margin-bottom: 0;
            font-size: 0.875rem;
            color: var(--cui-dropdown-header-color);
            white-space: nowrap;
        }

        .dropdown-item-text {
            display: block;
            padding: var(--cui-dropdown-item-padding-y) var(--cui-dropdown-item-padding-x);
            color: var(--cui-dropdown-link-color);
        }

        .dropdown-menu-dark {
            --cui-dropdown-color: #c4c9d0;
            --cui-dropdown-bg: #636f83;
            --cui-dropdown-border-color: var(--cui-border-color-translucent);
            --cui-dropdown-box-shadow: ;
            --cui-dropdown-link-color: #c4c9d0;
            --cui-dropdown-link-hover-color: rgba(255, 255, 255, 0.87);
            --cui-dropdown-divider-bg: var(--cui-border-color-translucent);
            --cui-dropdown-link-hover-bg: rgba(255, 255, 255, 0.15);
            --cui-dropdown-link-active-color: rgba(255, 255, 255, 0.87);
            --cui-dropdown-link-active-bg: #321fdb;
            --cui-dropdown-link-disabled-color: #9da5b1;
            --cui-dropdown-header-color: #9da5b1;
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: inline-flex;
            vertical-align: middle;
        }

        .btn-group>.btn,
        .btn-group-vertical>.btn {
            position: relative;
            flex: 1 1 auto;
        }

        .btn-group>.btn-check:checked+.btn,
        .btn-group>.btn-check:focus+.btn,
        .btn-group>.btn:hover,
        .btn-group>.btn:focus,
        .btn-group>.btn:active,
        .btn-group>.btn.active,
        .btn-group-vertical>.btn-check:checked+.btn,
        .btn-group-vertical>.btn-check:focus+.btn,
        .btn-group-vertical>.btn:hover,
        .btn-group-vertical>.btn:focus,
        .btn-group-vertical>.btn:active,
        .btn-group-vertical>.btn.active {
            z-index: 1;
        }

        .btn-toolbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
        }

        .btn-toolbar .input-group {
            width: auto;
        }

        .btn-group {
            border-radius: 0.375rem;
        }

        html:not([dir=rtl]) .btn-group> :not(.btn-check:first-child)+.btn,
        html:not([dir=rtl]) .btn-group>.btn-group:not(:first-child) {
            margin-left: -1px;
        }

        *[dir=rtl] .btn-group> :not(.btn-check:first-child)+.btn,
        *[dir=rtl] .btn-group>.btn-group:not(:first-child) {
            margin-right: -1px;
        }

        html:not([dir=rtl]) .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
        html:not([dir=rtl]) .btn-group>.btn.dropdown-toggle-split:first-child,
        html:not([dir=rtl]) .btn-group>.btn-group:not(:last-child)>.btn {
            border-top-right-radius: 0;
        }

        *[dir=rtl] .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
        *[dir=rtl] .btn-group>.btn.dropdown-toggle-split:first-child,
        *[dir=rtl] .btn-group>.btn-group:not(:last-child)>.btn {
            border-top-left-radius: 0;
        }

        html:not([dir=rtl]) .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
        html:not([dir=rtl]) .btn-group>.btn.dropdown-toggle-split:first-child,
        html:not([dir=rtl]) .btn-group>.btn-group:not(:last-child)>.btn {
            border-bottom-right-radius: 0;
        }

        *[dir=rtl] .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
        *[dir=rtl] .btn-group>.btn.dropdown-toggle-split:first-child,
        *[dir=rtl] .btn-group>.btn-group:not(:last-child)>.btn {
            border-bottom-left-radius: 0;
        }

        html:not([dir=rtl]) .btn-group>.btn:nth-child(n+3),
        html:not([dir=rtl]) .btn-group> :not(.btn-check)+.btn,
        html:not([dir=rtl]) .btn-group>.btn-group:not(:first-child)>.btn {
            border-top-left-radius: 0;
        }

        *[dir=rtl] .btn-group>.btn:nth-child(n+3),
        *[dir=rtl] .btn-group> :not(.btn-check)+.btn,
        *[dir=rtl] .btn-group>.btn-group:not(:first-child)>.btn {
            border-top-right-radius: 0;
        }

        html:not([dir=rtl]) .btn-group>.btn:nth-child(n+3),
        html:not([dir=rtl]) .btn-group> :not(.btn-check)+.btn,
        html:not([dir=rtl]) .btn-group>.btn-group:not(:first-child)>.btn {
            border-bottom-left-radius: 0;
        }

        *[dir=rtl] .btn-group>.btn:nth-child(n+3),
        *[dir=rtl] .btn-group> :not(.btn-check)+.btn,
        *[dir=rtl] .btn-group>.btn-group:not(:first-child)>.btn {
            border-bottom-right-radius: 0;
        }

        .dropdown-toggle-split {
            padding-right: 0.5625rem;
            padding-left: 0.5625rem;
        }

        html:not([dir=rtl]) .dropdown-toggle-split::after,
        html:not([dir=rtl]) .dropup .dropdown-toggle-split::after,
        html:not([dir=rtl]) .dropend .dropdown-toggle-split::after {
            margin-left: 0;
        }

        *[dir=rtl] .dropdown-toggle-split::after,
        *[dir=rtl] .dropup .dropdown-toggle-split::after,
        *[dir=rtl] .dropend .dropdown-toggle-split::after {
            margin-right: 0;
        }

        html:not([dir=rtl]) .dropstart .dropdown-toggle-split::before {
            margin-right: 0;
        }

        *[dir=rtl] .dropstart .dropdown-toggle-split::before {
            margin-left: 0;
        }

        .btn-sm+.dropdown-toggle-split,
        .btn-group-sm>.btn+.dropdown-toggle-split {
            padding-right: 0.375rem;
            padding-left: 0.375rem;
        }

        .btn-lg+.dropdown-toggle-split,
        .btn-group-lg>.btn+.dropdown-toggle-split {
            padding-right: 0.75rem;
            padding-left: 0.75rem;
        }

        .btn-group-vertical {
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
        }

        .btn-group-vertical>.btn,
        .btn-group-vertical>.btn-group {
            width: 100%;
        }

        .btn-group-vertical>.btn:not(:first-child),
        .btn-group-vertical>.btn-group:not(:first-child) {
            margin-top: -1px;
        }

        .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),
        .btn-group-vertical>.btn-group:not(:last-child)>.btn {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .btn-group-vertical>.btn~.btn,
        .btn-group-vertical>.btn-group:not(:first-child)>.btn {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .nav {
            --cui-nav-link-padding-x: 1rem;
            --cui-nav-link-padding-y: 0.5rem;
            --cui-nav-link-font-weight: ;
            --cui-nav-link-color: var(--cui-link-color);
            --cui-nav-link-hover-color: var(--cui-link-hover-color);
            --cui-nav-link-disabled-color: #8a93a2;
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 0;
            list-style: none;
        }

        html:not([dir=rtl]) .nav {
            padding-left: 0;
        }

        *[dir=rtl] .nav {
            padding-right: 0;
        }

        .nav-link {
            display: block;
            padding: var(--cui-nav-link-padding-y) var(--cui-nav-link-padding-x);
            font-size: var(--cui-nav-link-font-size);
            font-weight: var(--cui-nav-link-font-weight);
            color: var(--cui-nav-link-color);
            text-decoration: none;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .nav-link {
                transition: none;
            }
        }

        .nav-link:hover,
        .nav-link:focus {
            color: var(--cui-nav-link-hover-color);
        }

        .nav-link.disabled {
            color: var(--cui-nav-link-disabled-color);
            pointer-events: none;
            cursor: default;
        }

        .nav-tabs {
            --cui-nav-tabs-border-width: 1px;
            --cui-nav-tabs-border-color: #c4c9d0;
            --cui-nav-tabs-border-radius: 0.375rem;
            --cui-nav-tabs-link-hover-border-color: #d8dbe0 #d8dbe0 #c4c9d0;
            --cui-nav-tabs-link-active-color: #768192;
            --cui-nav-tabs-link-active-bg: #fff;
            --cui-nav-tabs-link-active-border-color: #c4c9d0 #c4c9d0 #fff;
            border-bottom: var(--cui-nav-tabs-border-width) solid var(--cui-nav-tabs-border-color);
        }

        .nav-tabs .nav-link {
            margin-bottom: calc(-1 * var(--cui-nav-tabs-border-width));
            background: none;
            border: var(--cui-nav-tabs-border-width) solid transparent;
            border-top-left-radius: var(--cui-nav-tabs-border-radius);
            border-top-right-radius: var(--cui-nav-tabs-border-radius);
        }

        .nav-tabs .nav-link:hover,
        .nav-tabs .nav-link:focus {
            isolation: isolate;
            border-color: var(--cui-nav-tabs-link-hover-border-color);
        }

        .nav-tabs .nav-link.disabled,
        .nav-tabs .nav-link:disabled {
            color: var(--cui-nav-link-disabled-color);
            background-color: transparent;
            border-color: transparent;
        }

        .nav-tabs .nav-link.active,
        .nav-tabs .nav-item.show .nav-link {
            color: var(--cui-nav-tabs-link-active-color);
            background-color: var(--cui-nav-tabs-link-active-bg);
            border-color: var(--cui-nav-tabs-link-active-border-color);
        }

        .nav-tabs .dropdown-menu {
            margin-top: calc(-1 * var(--cui-nav-tabs-border-width));
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .nav-pills {
            --cui-nav-pills-border-radius: 0.375rem;
            --cui-nav-pills-link-active-color: rgba(255, 255, 255, 0.87);
            --cui-nav-pills-link-active-bg: #321fdb;
        }

        .nav-pills .nav-link {
            background: none;
            border: 0;
            border-radius: var(--cui-nav-pills-border-radius);
        }

        .nav-pills .nav-link:disabled {
            color: var(--cui-nav-link-disabled-color);
            background-color: transparent;
            border-color: transparent;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: var(--cui-nav-pills-link-active-color);
            background-color: var(--cui-nav-pills-link-active-bg);
        }

        .nav-fill>.nav-link,
        .nav-fill .nav-item {
            flex: 1 1 auto;
            text-align: center;
        }

        .nav-justified>.nav-link,
        .nav-justified .nav-item {
            flex-basis: 0;
            flex-grow: 1;
            text-align: center;
        }

        .nav-fill .nav-item .nav-link,
        .nav-justified .nav-item .nav-link {
            width: 100%;
        }

        .tab-content>.tab-pane {
            display: none;
        }

        .tab-content>.active {
            display: block;
        }

        .navbar {
            --cui-navbar-padding-x: 0;
            --cui-navbar-padding-y: 0.5rem;
            --cui-navbar-color: rgba(44, 56, 74, 0.681);
            --cui-navbar-hover-color: rgba(44, 56, 74, 0.95);
            --cui-navbar-disabled-color: rgba(44, 56, 74, 0.38);
            --cui-navbar-active-color: rgba(44, 56, 74, 0.95);
            --cui-navbar-brand-padding-y: 0.3125rem;
            --cui-navbar-brand-margin-end: 1rem;
            --cui-navbar-brand-font-size: 1.25rem;
            --cui-navbar-brand-color: rgba(44, 56, 74, 0.95);
            --cui-navbar-brand-hover-color: rgba(44, 56, 74, 0.95);
            --cui-navbar-nav-link-padding-x: 0.5rem;
            --cui-navbar-toggler-padding-y: 0.25rem;
            --cui-navbar-toggler-padding-x: 0.75rem;
            --cui-navbar-toggler-font-size: 1.25rem;
            --cui-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2844, 56, 74, 0.681%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            --cui-navbar-toggler-border-color: rgba(0, 0, 21, 0.1);
            --cui-navbar-toggler-border-radius: 0.375rem;
            --cui-navbar-toggler-focus-width: 0.25rem;
            --cui-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: var(--cui-navbar-padding-y) var(--cui-navbar-padding-x);
        }

        .navbar .header>.container,
        .navbar .header>.container-fluid,
        .navbar .header>.container-sm,
        .navbar .header>.container-md,
        .navbar .header>.container-lg,
        .navbar .header>.container-xl,
        .navbar .header>.container-xxl,
        .navbar>.container,
        .navbar>.container-fluid,
        .navbar>.container-sm,
        .navbar>.container-md,
        .navbar>.container-lg,
        .navbar>.container-xl,
        .navbar>.container-xxl {
            display: flex;
            flex-wrap: inherit;
            align-items: center;
            justify-content: space-between;
        }

        .navbar-brand {
            padding-top: var(--cui-navbar-brand-padding-y);
            padding-bottom: var(--cui-navbar-brand-padding-y);
            font-size: var(--cui-navbar-brand-font-size);
            color: var(--cui-navbar-brand-color);
            text-decoration: none;
            white-space: nowrap;
        }

        html:not([dir=rtl]) .navbar-brand {
            margin-right: var(--cui-navbar-brand-margin-end);
        }

        *[dir=rtl] .navbar-brand {
            margin-left: var(--cui-navbar-brand-margin-end);
        }

        .navbar-brand:hover,
        .navbar-brand:focus {
            color: var(--cui-navbar-brand-hover-color);
        }

        .navbar-nav {
            --cui-nav-link-padding-x: 0;
            --cui-nav-link-padding-y: 0.5rem;
            --cui-nav-link-color: var(--cui-navbar-color);
            --cui-nav-link-hover-color: var(--cui-navbar-hover-color);
            --cui-nav-link-disabled-color: var(--cui-navbar-disabled-color);
            display: flex;
            flex-direction: column;
            margin-bottom: 0;
            list-style: none;
        }

        html:not([dir=rtl]) .navbar-nav {
            padding-left: 0;
        }

        *[dir=rtl] .navbar-nav {
            padding-right: 0;
        }

        .navbar-nav .show>.nav-link,
        .navbar-nav .nav-link.active {
            color: var(--cui-navbar-active-color);
        }

        .navbar-nav .dropdown-menu {
            position: static;
        }

        .navbar-text {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            color: var(--cui-navbar-color);
        }

        .navbar-text a,
        .navbar-text a:hover,
        .navbar-text a:focus {
            color: var(--cui-navbar-active-color);
        }

        .navbar-collapse {
            flex-basis: 100%;
            flex-grow: 1;
            align-items: center;
        }

        .navbar-toggler {
            padding: var(--cui-navbar-toggler-padding-y) var(--cui-navbar-toggler-padding-x);
            font-size: var(--cui-navbar-toggler-font-size);
            line-height: 1;
            color: var(--cui-navbar-color);
            background-color: transparent;
            border: 1px solid var(--cui-navbar-toggler-border-color);
            border: var(--cui-border-width) solid var(--cui-navbar-toggler-border-color);
            border-radius: var(--cui-navbar-toggler-border-radius);
            transition: var(--cui-navbar-toggler-transition);
        }

        @media (prefers-reduced-motion: reduce) {
            .navbar-toggler {
                transition: none;
            }
        }

        .navbar-toggler:hover {
            text-decoration: none;
        }

        .navbar-toggler:focus {
            text-decoration: none;
            outline: 0;
            box-shadow: 0 0 0 var(--cui-navbar-toggler-focus-width);
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            background-image: var(--cui-navbar-toggler-icon-bg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
        }

        .navbar-nav-scroll {
            max-height: 75vh;
            max-height: var(--cui-scroll-height, 75vh);
            overflow-y: auto;
        }

        @media (min-width: 576px) {
            .navbar-expand-sm {
                flex-wrap: nowrap;
                justify-content: flex-start;
            }

            .navbar-expand-sm .navbar-nav {
                flex-direction: row;
            }

            .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-sm .navbar-nav .nav-link {
                padding-right: var(--cui-navbar-nav-link-padding-x);
                padding-left: var(--cui-navbar-nav-link-padding-x);
            }

            .navbar-expand-sm .navbar-nav-scroll {
                overflow: visible;
            }

            .navbar-expand-sm .navbar-collapse {
                display: flex !important;
                flex-basis: auto;
            }

            .navbar-expand-sm .navbar-toggler {
                display: none;
            }

            .navbar-expand-sm .offcanvas {
                position: static;
                z-index: auto;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: transparent !important;
                border: 0 !important;
                transform: none !important;
                transition: none;
            }

            .navbar-expand-sm .offcanvas .offcanvas-header {
                display: none;
            }

            .navbar-expand-sm .offcanvas .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }

        @media (min-width: 768px) {
            .navbar-expand-md {
                flex-wrap: nowrap;
                justify-content: flex-start;
            }

            .navbar-expand-md .navbar-nav {
                flex-direction: row;
            }

            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-md .navbar-nav .nav-link {
                padding-right: var(--cui-navbar-nav-link-padding-x);
                padding-left: var(--cui-navbar-nav-link-padding-x);
            }

            .navbar-expand-md .navbar-nav-scroll {
                overflow: visible;
            }

            .navbar-expand-md .navbar-collapse {
                display: flex !important;
                flex-basis: auto;
            }

            .navbar-expand-md .navbar-toggler {
                display: none;
            }

            .navbar-expand-md .offcanvas {
                position: static;
                z-index: auto;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: transparent !important;
                border: 0 !important;
                transform: none !important;
                transition: none;
            }

            .navbar-expand-md .offcanvas .offcanvas-header {
                display: none;
            }

            .navbar-expand-md .offcanvas .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }

        @media (min-width: 992px) {
            .navbar-expand-lg {
                flex-wrap: nowrap;
                justify-content: flex-start;
            }

            .navbar-expand-lg .navbar-nav {
                flex-direction: row;
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: var(--cui-navbar-nav-link-padding-x);
                padding-left: var(--cui-navbar-nav-link-padding-x);
            }

            .navbar-expand-lg .navbar-nav-scroll {
                overflow: visible;
            }

            .navbar-expand-lg .navbar-collapse {
                display: flex !important;
                flex-basis: auto;
            }

            .navbar-expand-lg .navbar-toggler {
                display: none;
            }

            .navbar-expand-lg .offcanvas {
                position: static;
                z-index: auto;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: transparent !important;
                border: 0 !important;
                transform: none !important;
                transition: none;
            }

            .navbar-expand-lg .offcanvas .offcanvas-header {
                display: none;
            }

            .navbar-expand-lg .offcanvas .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }

        @media (min-width: 1200px) {
            .navbar-expand-xl {
                flex-wrap: nowrap;
                justify-content: flex-start;
            }

            .navbar-expand-xl .navbar-nav {
                flex-direction: row;
            }

            .navbar-expand-xl .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-xl .navbar-nav .nav-link {
                padding-right: var(--cui-navbar-nav-link-padding-x);
                padding-left: var(--cui-navbar-nav-link-padding-x);
            }

            .navbar-expand-xl .navbar-nav-scroll {
                overflow: visible;
            }

            .navbar-expand-xl .navbar-collapse {
                display: flex !important;
                flex-basis: auto;
            }

            .navbar-expand-xl .navbar-toggler {
                display: none;
            }

            .navbar-expand-xl .offcanvas {
                position: static;
                z-index: auto;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: transparent !important;
                border: 0 !important;
                transform: none !important;
                transition: none;
            }

            .navbar-expand-xl .offcanvas .offcanvas-header {
                display: none;
            }

            .navbar-expand-xl .offcanvas .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }

        @media (min-width: 1400px) {
            .navbar-expand-xxl {
                flex-wrap: nowrap;
                justify-content: flex-start;
            }

            .navbar-expand-xxl .navbar-nav {
                flex-direction: row;
            }

            .navbar-expand-xxl .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-xxl .navbar-nav .nav-link {
                padding-right: var(--cui-navbar-nav-link-padding-x);
                padding-left: var(--cui-navbar-nav-link-padding-x);
            }

            .navbar-expand-xxl .navbar-nav-scroll {
                overflow: visible;
            }

            .navbar-expand-xxl .navbar-collapse {
                display: flex !important;
                flex-basis: auto;
            }

            .navbar-expand-xxl .navbar-toggler {
                display: none;
            }

            .navbar-expand-xxl .offcanvas {
                position: static;
                z-index: auto;
                flex-grow: 1;
                width: auto !important;
                height: auto !important;
                visibility: visible !important;
                background-color: transparent !important;
                border: 0 !important;
                transform: none !important;
                transition: none;
            }

            .navbar-expand-xxl .offcanvas .offcanvas-header {
                display: none;
            }

            .navbar-expand-xxl .offcanvas .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }

        .navbar-expand {
            flex-wrap: nowrap;
            justify-content: flex-start;
        }

        .navbar-expand .navbar-nav {
            flex-direction: row;
        }

        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand .navbar-nav .nav-link {
            padding-right: var(--cui-navbar-nav-link-padding-x);
            padding-left: var(--cui-navbar-nav-link-padding-x);
        }

        .navbar-expand .navbar-nav-scroll {
            overflow: visible;
        }

        .navbar-expand .navbar-collapse {
            display: flex !important;
            flex-basis: auto;
        }

        .navbar-expand .navbar-toggler {
            display: none;
        }

        .navbar-expand .offcanvas {
            position: static;
            z-index: auto;
            flex-grow: 1;
            width: auto !important;
            height: auto !important;
            visibility: visible !important;
            background-color: transparent !important;
            border: 0 !important;
            transform: none !important;
            transition: none;
        }

        .navbar-expand .offcanvas .offcanvas-header {
            display: none;
        }

        .navbar-expand .offcanvas .offcanvas-body {
            display: flex;
            flex-grow: 0;
            padding: 0;
            overflow-y: visible;
        }

        .navbar-dark {
            --cui-navbar-color: rgba(255, 255, 255, 0.6);
            --cui-navbar-hover-color: rgba(255, 255, 255, 0.87);
            --cui-navbar-disabled-color: rgba(255, 255, 255, 0.38);
            --cui-navbar-active-color: rgba(255, 255, 255, 0.87);
            --cui-navbar-brand-color: rgba(255, 255, 255, 0.87);
            --cui-navbar-brand-hover-color: rgba(255, 255, 255, 0.87);
            --cui-navbar-toggler-border-color: rgba(255, 255, 255, 0.1);
            --cui-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.6%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .card {
            --cui-card-spacer-y: 1rem;
            --cui-card-spacer-x: 1rem;
            --cui-card-title-spacer-y: 0.5rem;
            --cui-card-border-width: 1px;
            --cui-card-border-color: var(--cui-border-color-translucent);
            --cui-card-border-radius: 0.375rem;
            --cui-card-box-shadow: ;
            --cui-card-inner-border-radius: calc(0.375rem - 1px);
            --cui-card-cap-padding-y: 0.5rem;
            --cui-card-cap-padding-x: 1rem;
            --cui-card-cap-bg: rgba(0, 0, 21, 0.03);
            --cui-card-cap-color: unset;
            --cui-card-height: ;
            --cui-card-color: unset;
            --cui-card-bg: #fff;
            --cui-card-img-overlay-padding: 1rem;
            --cui-card-group-margin: 0.75rem;
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            height: var(--cui-card-height);
            word-wrap: break-word;
            background-color: var(--cui-card-bg);
            background-clip: border-box;
            border: var(--cui-card-border-width) solid var(--cui-card-border-color);
            border-radius: var(--cui-card-border-radius);
        }

        .card>hr {
            margin-right: 0;
            margin-left: 0;
        }

        .card>.list-group {
            border-top: inherit;
            border-bottom: inherit;
        }

        .card>.list-group:first-child {
            border-top-width: 0;
            border-top-left-radius: var(--cui-card-inner-border-radius);
            border-top-right-radius: var(--cui-card-inner-border-radius);
        }

        .card>.list-group:last-child {
            border-bottom-width: 0;
            border-bottom-right-radius: var(--cui-card-inner-border-radius);
            border-bottom-left-radius: var(--cui-card-inner-border-radius);
        }

        .card>.card-header+.list-group,
        .card>.list-group+.card-footer {
            border-top: 0;
        }

        .card-body {
            flex: 1 1 auto;
            padding: var(--cui-card-spacer-y) var(--cui-card-spacer-x);
            color: var(--cui-card-color);
        }

        .card-title {
            margin-bottom: var(--cui-card-title-spacer-y);
        }

        .card-subtitle {
            margin-top: calc(-0.5 * var(--cui-card-title-spacer-y));
            margin-bottom: 0;
        }

        .card-text:last-child {
            margin-bottom: 0;
        }

        html:not([dir=rtl]) .card-link+.card-link {
            margin-left: var(--cui-card-spacer-x);
        }

        *[dir=rtl] .card-link+.card-link {
            margin-right: var(--cui-card-spacer-x);
        }

        .card-header {
            padding: var(--cui-card-cap-padding-y) var(--cui-card-cap-padding-x);
            margin-bottom: 0;
            color: var(--cui-card-cap-color);
            background-color: var(--cui-card-cap-bg);
            border-bottom: var(--cui-card-border-width) solid var(--cui-card-border-color);
        }

        .card-header:first-child {
            border-radius: var(--cui-card-inner-border-radius) var(--cui-card-inner-border-radius) 0 0;
        }

        .card-footer {
            padding: var(--cui-card-cap-padding-y) var(--cui-card-cap-padding-x);
            color: var(--cui-card-cap-color);
            background-color: var(--cui-card-cap-bg);
            border-top: var(--cui-card-border-width) solid var(--cui-card-border-color);
        }

        .card-footer:last-child {
            border-radius: 0 0 var(--cui-card-inner-border-radius) var(--cui-card-inner-border-radius);
        }

        .card-header-tabs {
            margin-right: calc(-0.5 * var(--cui-card-cap-padding-x));
            margin-bottom: calc(-1 * var(--cui-card-cap-padding-y));
            margin-left: calc(-0.5 * var(--cui-card-cap-padding-x));
            border-bottom: 0;
        }

        .card-header-tabs .nav-link.active {
            background-color: var(--cui-card-bg);
            border-bottom-color: var(--cui-card-bg);
        }

        .card-header-pills {
            margin-right: calc(-0.5 * var(--cui-card-cap-padding-x));
            margin-left: calc(-0.5 * var(--cui-card-cap-padding-x));
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: var(--cui-card-img-overlay-padding);
            border-radius: var(--cui-card-inner-border-radius);
        }

        .card-img,
        .card-img-top,
        .card-img-bottom {
            width: 100%;
        }

        .card-img,
        .card-img-top {
            border-top-left-radius: var(--cui-card-inner-border-radius);
            border-top-right-radius: var(--cui-card-inner-border-radius);
        }

        .card-img,
        .card-img-bottom {
            border-bottom-right-radius: var(--cui-card-inner-border-radius);
            border-bottom-left-radius: var(--cui-card-inner-border-radius);
        }

        .card-group>.card {
            margin-bottom: var(--cui-card-group-margin);
        }

        @media (min-width: 576px) {
            .card-group {
                display: flex;
                flex-flow: row wrap;
            }

            .card-group>.card {
                flex: 1 0;
                margin-bottom: 0;
            }

            html:not([dir=rtl]) .card-group>.card+.card {
                margin-left: 0;
            }

            *[dir=rtl] .card-group>.card+.card {
                margin-right: 0;
            }

            html:not([dir=rtl]) .card-group>.card+.card {
                border-left: 0;
            }

            *[dir=rtl] .card-group>.card+.card {
                border-right: 0;
            }

            html:not([dir=rtl]) .card-group>.card:not(:last-child) {
                border-top-right-radius: 0;
            }

            *[dir=rtl] .card-group>.card:not(:last-child) {
                border-top-left-radius: 0;
            }

            html:not([dir=rtl]) .card-group>.card:not(:last-child) {
                border-bottom-right-radius: 0;
            }

            *[dir=rtl] .card-group>.card:not(:last-child) {
                border-bottom-left-radius: 0;
            }

            .card-group>.card:not(:last-child) .card-img-top,
            .card-group>.card:not(:last-child) .card-header {
                border-top-right-radius: 0;
            }

            .card-group>.card:not(:last-child) .card-img-bottom,
            .card-group>.card:not(:last-child) .card-footer {
                border-bottom-right-radius: 0;
            }

            html:not([dir=rtl]) .card-group>.card:not(:first-child) {
                border-top-left-radius: 0;
            }

            *[dir=rtl] .card-group>.card:not(:first-child) {
                border-top-right-radius: 0;
            }

            html:not([dir=rtl]) .card-group>.card:not(:first-child) {
                border-bottom-left-radius: 0;
            }

            *[dir=rtl] .card-group>.card:not(:first-child) {
                border-bottom-right-radius: 0;
            }

            .card-group>.card:not(:first-child) .card-img-top,
            .card-group>.card:not(:first-child) .card-header {
                border-top-left-radius: 0;
            }

            .card-group>.card:not(:first-child) .card-img-bottom,
            .card-group>.card:not(:first-child) .card-footer {
                border-bottom-left-radius: 0;
            }
        }

        .accordion {
            --cui-accordion-color: rgba(44, 56, 74, 0.95);
            --cui-accordion-bg: #fff;
            --cui-accordion-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
            --cui-accordion-border-color: var(--cui-border-color);
            --cui-accordion-border-width: 1px;
            --cui-accordion-border-radius: 0.375rem;
            --cui-accordion-inner-border-radius: calc(0.375rem - 1px);
            --cui-accordion-btn-padding-x: 1.25rem;
            --cui-accordion-btn-padding-y: 1rem;
            --cui-accordion-btn-color: rgba(44, 56, 74, 0.95);
            --cui-accordion-btn-color: rgba(44, 56, 74, 0.95);
            --cui-accordion-btn-bg: var(--cui-accordion-bg);
            --cui-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='rgba%2844, 56, 74, 0.95%29'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            --cui-accordion-btn-icon-width: 1.25rem;
            --cui-accordion-btn-icon-transform: rotate(-180deg);
            --cui-accordion-btn-icon-transition: transform 0.2s ease-in-out;
            --cui-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%232d1cc5'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            --cui-accordion-btn-focus-border-color: #998fed;
            --cui-accordion-btn-focus-box-shadow: 0 0 0 0.25rem rgba(50, 31, 219, 0.25);
            --cui-accordion-body-padding-x: 1.25rem;
            --cui-accordion-body-padding-y: 1rem;
            --cui-accordion-active-color: #2d1cc5;
            --cui-accordion-active-bg: #ebe9fb;
        }

        .accordion-button {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            padding: var(--cui-accordion-btn-padding-y) var(--cui-accordion-btn-padding-x);
            font-size: 1rem;
            color: var(--cui-accordion-btn-color);
            text-align: left;
            background-color: var(--cui-accordion-btn-bg);
            border: 0;
            border-radius: 0;
            overflow-anchor: none;
            transition: var(--cui-accordion-transition);
        }

        @media (prefers-reduced-motion: reduce) {
            .accordion-button {
                transition: none;
            }
        }

        .accordion-button:not(.collapsed) {
            color: var(--cui-accordion-active-color);
            background-color: var(--cui-accordion-active-bg);
            box-shadow: inset 0 calc(-1 * var(--cui-accordion-border-width)) 0 var(--cui-accordion-border-color);
        }

        .accordion-button:not(.collapsed)::after {
            background-image: var(--cui-accordion-btn-active-icon);
            transform: var(--cui-accordion-btn-icon-transform);
        }

        .accordion-button::after {
            flex-shrink: 0;
            width: var(--cui-accordion-btn-icon-width);
            height: var(--cui-accordion-btn-icon-width);
            margin-left: auto;
            content: "";
            background-image: var(--cui-accordion-btn-icon);
            background-repeat: no-repeat;
            background-size: var(--cui-accordion-btn-icon-width);
            transition: var(--cui-accordion-btn-icon-transition);
        }

        @media (prefers-reduced-motion: reduce) {
            .accordion-button::after {
                transition: none;
            }
        }

        .accordion-button:hover {
            z-index: 2;
        }

        .accordion-button:focus {
            z-index: 3;
            border-color: var(--cui-accordion-btn-focus-border-color);
            outline: 0;
            box-shadow: var(--cui-accordion-btn-focus-box-shadow);
        }

        .accordion-header {
            margin-bottom: 0;
        }

        .accordion-item {
            color: var(--cui-accordion-color);
            background-color: var(--cui-accordion-bg);
            border: var(--cui-accordion-border-width) solid var(--cui-accordion-border-color);
        }

        .accordion-item:first-of-type {
            border-top-left-radius: var(--cui-accordion-border-radius);
            border-top-right-radius: var(--cui-accordion-border-radius);
        }

        .accordion-item:first-of-type .accordion-button {
            border-top-left-radius: var(--cui-accordion-inner-border-radius);
            border-top-right-radius: var(--cui-accordion-inner-border-radius);
        }

        .accordion-item:not(:first-of-type) {
            border-top: 0;
        }

        .accordion-item:last-of-type {
            border-bottom-right-radius: var(--cui-accordion-border-radius);
            border-bottom-left-radius: var(--cui-accordion-border-radius);
        }

        .accordion-item:last-of-type .accordion-button.collapsed {
            border-bottom-right-radius: var(--cui-accordion-inner-border-radius);
            border-bottom-left-radius: var(--cui-accordion-inner-border-radius);
        }

        .accordion-item:last-of-type .accordion-collapse {
            border-bottom-right-radius: var(--cui-accordion-border-radius);
            border-bottom-left-radius: var(--cui-accordion-border-radius);
        }

        .accordion-body {
            padding: var(--cui-accordion-body-padding-y) var(--cui-accordion-body-padding-x);
        }

        .accordion-flush .accordion-collapse {
            border-width: 0;
        }

        .accordion-flush .accordion-item {
            border-right: 0;
            border-left: 0;
            border-radius: 0;
        }

        .accordion-flush .accordion-item:first-child {
            border-top: 0;
        }

        .accordion-flush .accordion-item:last-child {
            border-bottom: 0;
        }

        .accordion-flush .accordion-item .accordion-button,
        .accordion-flush .accordion-item .accordion-button.collapsed {
            border-radius: 0;
        }

        .breadcrumb {
            --cui-breadcrumb-padding-x: 0;
            --cui-breadcrumb-padding-y: 0;
            --cui-breadcrumb-margin-bottom: 1rem;
            --cui-breadcrumb-bg: unset;
            --cui-breadcrumb-border-radius: ;
            --cui-breadcrumb-divider-color: #8a93a2;
            --cui-breadcrumb-item-padding-x: 0.5rem;
            --cui-breadcrumb-item-active-color: #8a93a2;
            display: flex;
            flex-wrap: wrap;
            padding: var(--cui-breadcrumb-padding-y) var(--cui-breadcrumb-padding-x);
            margin-bottom: var(--cui-breadcrumb-margin-bottom);
            font-size: var(--cui-breadcrumb-font-size);
            list-style: none;
            background-color: var(--cui-breadcrumb-bg);
            border-radius: var(--cui-breadcrumb-border-radius);
        }

        html:not([dir=rtl]) .breadcrumb-item+.breadcrumb-item {
            padding-left: var(--cui-breadcrumb-item-padding-x);
        }

        *[dir=rtl] .breadcrumb-item+.breadcrumb-item {
            padding-right: var(--cui-breadcrumb-item-padding-x);
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: var(--cui-breadcrumb-divider-color);
        }

        html:not([dir=rtl]) .breadcrumb-item+.breadcrumb-item::before {
            float: left;
        }

        *[dir=rtl] .breadcrumb-item+.breadcrumb-item::before {
            float: right;
        }

        html:not([dir=rtl]) .breadcrumb-item+.breadcrumb-item::before {
            padding-right: var(--cui-breadcrumb-item-padding-x);
        }

        *[dir=rtl] .breadcrumb-item+.breadcrumb-item::before {
            padding-left: var(--cui-breadcrumb-item-padding-x);
        }

        html:not([dir=rtl]) .breadcrumb-item+.breadcrumb-item::before {
            content: "/";
            content: var(--cui-breadcrumb-divider, "/");
        }

        *[dir=rtl] .breadcrumb-item+.breadcrumb-item::before {
            content: "/";
            content: var(--cui-breadcrumb-divider-flipped, "/");
        }

        .breadcrumb-item.active {
            color: var(--cui-breadcrumb-item-active-color);
        }

        .pagination {
            --cui-pagination-padding-x: 0.75rem;
            --cui-pagination-padding-y: 0.375rem;
            --cui-pagination-font-size: 1rem;
            --cui-pagination-color: var(--cui-link-color);
            --cui-pagination-bg: #fff;
            --cui-pagination-border-width: 1px;
            --cui-pagination-border-color: #c4c9d0;
            --cui-pagination-border-radius: 0.375rem;
            --cui-pagination-hover-color: var(--cui-link-hover-color);
            --cui-pagination-hover-bg: #d8dbe0;
            --cui-pagination-hover-border-color: #c4c9d0;
            --cui-pagination-focus-color: var(--cui-link-hover-color);
            --cui-pagination-focus-bg: #d8dbe0;
            --cui-pagination-focus-box-shadow: 0 0 0 0.25rem rgba(50, 31, 219, 0.25);
            --cui-pagination-active-color: rgba(255, 255, 255, 0.87);
            --cui-pagination-active-bg: #321fdb;
            --cui-pagination-active-border-color: #321fdb;
            --cui-pagination-disabled-color: #8a93a2;
            --cui-pagination-disabled-bg: #fff;
            --cui-pagination-disabled-border-color: #c4c9d0;
            display: flex;
            list-style: none;
        }

        html:not([dir=rtl]) .pagination {
            padding-left: 0;
        }

        *[dir=rtl] .pagination {
            padding-right: 0;
        }

        .page-link {
            position: relative;
            display: block;
            padding: var(--cui-pagination-padding-y) var(--cui-pagination-padding-x);
            font-size: var(--cui-pagination-font-size);
            color: var(--cui-pagination-color);
            text-decoration: none;
            background-color: var(--cui-pagination-bg);
            border: var(--cui-pagination-border-width) solid var(--cui-pagination-border-color);
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .page-link {
                transition: none;
            }
        }

        .page-link:hover {
            z-index: 2;
            color: var(--cui-pagination-hover-color);
            background-color: var(--cui-pagination-hover-bg);
            border-color: var(--cui-pagination-hover-border-color);
        }

        .page-link:focus {
            z-index: 3;
            color: var(--cui-pagination-focus-color);
            background-color: var(--cui-pagination-focus-bg);
            outline: 0;
            box-shadow: var(--cui-pagination-focus-box-shadow);
        }

        .page-link.active,
        .active>.page-link {
            z-index: 3;
            color: var(--cui-pagination-active-color);
            background-color: var(--cui-pagination-active-bg);
            border-color: var(--cui-pagination-active-border-color);
        }

        .page-link.disabled,
        .disabled>.page-link {
            color: var(--cui-pagination-disabled-color);
            pointer-events: none;
            background-color: var(--cui-pagination-disabled-bg);
            border-color: var(--cui-pagination-disabled-border-color);
        }

        html:not([dir=rtl]) .page-item:not(:first-child) .page-link {
            margin-left: -1px;
        }

        *[dir=rtl] .page-item:not(:first-child) .page-link {
            margin-right: -1px;
        }

        html:not([dir=rtl]) .page-item:first-child .page-link {
            border-top-left-radius: var(--cui-pagination-border-radius);
        }

        *[dir=rtl] .page-item:first-child .page-link {
            border-top-right-radius: var(--cui-pagination-border-radius);
        }

        html:not([dir=rtl]) .page-item:first-child .page-link {
            border-bottom-left-radius: var(--cui-pagination-border-radius);
        }

        *[dir=rtl] .page-item:first-child .page-link {
            border-bottom-right-radius: var(--cui-pagination-border-radius);
        }

        html:not([dir=rtl]) .page-item:last-child .page-link {
            border-top-right-radius: var(--cui-pagination-border-radius);
        }

        *[dir=rtl] .page-item:last-child .page-link {
            border-top-left-radius: var(--cui-pagination-border-radius);
        }

        html:not([dir=rtl]) .page-item:last-child .page-link {
            border-bottom-right-radius: var(--cui-pagination-border-radius);
        }

        *[dir=rtl] .page-item:last-child .page-link {
            border-bottom-left-radius: var(--cui-pagination-border-radius);
        }

        .pagination-lg {
            --cui-pagination-padding-x: 1.5rem;
            --cui-pagination-padding-y: 0.75rem;
            --cui-pagination-font-size: 1.25rem;
            --cui-pagination-border-radius: 0.5rem;
        }

        .pagination-sm {
            --cui-pagination-padding-x: 0.5rem;
            --cui-pagination-padding-y: 0.25rem;
            --cui-pagination-font-size: 0.875rem;
            --cui-pagination-border-radius: 0.25rem;
        }

        .badge {
            --cui-badge-padding-x: 0.65em;
            --cui-badge-padding-y: 0.35em;
            --cui-badge-font-size: 0.75em;
            --cui-badge-font-weight: 700;
            --cui-badge-color: rgba(255, 255, 255, 0.87);
            --cui-badge-border-radius: 0.375rem;
            display: inline-block;
            padding: var(--cui-badge-padding-y) var(--cui-badge-padding-x);
            font-size: var(--cui-badge-font-size);
            font-weight: var(--cui-badge-font-weight);
            line-height: 1;
            color: var(--cui-badge-color);
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0;
            border-radius: var(--cui-badge-border-radius, 0);
        }

        .badge:empty {
            display: none;
        }

        .btn .badge {
            position: relative;
            top: -1px;
        }

        .badge-sm {
            padding: 0.3em 0.5em;
            font-size: 0.65em;
        }

        .alert {
            --cui-alert-bg: transparent;
            --cui-alert-padding-x: 1rem;
            --cui-alert-padding-y: 1rem;
            --cui-alert-margin-bottom: 1rem;
            --cui-alert-color: inherit;
            --cui-alert-border-color: transparent;
            --cui-alert-border: 1px solid var(--cui-alert-border-color);
            --cui-alert-border-radius: 0.375rem;
            position: relative;
            padding: var(--cui-alert-padding-y) var(--cui-alert-padding-x);
            margin-bottom: var(--cui-alert-margin-bottom);
            color: var(--cui-alert-color);
            background-color: var(--cui-alert-bg);
            border: var(--cui-alert-border);
            border-radius: var(--cui-alert-border-radius);
        }

        .alert-heading {
            color: inherit;
        }

        .alert-link {
            font-weight: 700;
            color: var(--cui-alert-link-color);
        }

        html:not([dir=rtl]) .alert-dismissible {
            padding-right: 3rem;
        }

        *[dir=rtl] .alert-dismissible {
            padding-left: 3rem;
        }

        .alert-dismissible .btn-close {
            position: absolute;
            top: 0;
            z-index: 2;
            padding: 1.25rem 1rem;
        }

        html:not([dir=rtl]) .alert-dismissible .btn-close {
            right: 0;
        }

        *[dir=rtl] .alert-dismissible .btn-close {
            left: 0;
        }

        .alert-primary {
            --cui-alert-color: #1e1383;
            --cui-alert-bg: #d6d2f8;
            --cui-alert-border-color: #c2bcf4;
        }

        .alert-primary .alert-link {
            color: #180f69;
        }

        .alert-secondary {
            --cui-alert-color: #5e636a;
            --cui-alert-bg: #ebedef;
            --cui-alert-border-color: #e2e4e8;
        }

        .alert-secondary .alert-link {
            color: #4b4f55;
        }

        .alert-success {
            --cui-alert-color: #1c6e37;
            --cui-alert-bg: #d5f1de;
            --cui-alert-border-color: #c0eace;
        }

        .alert-success .alert-link {
            color: #16582c;
        }

        .alert-info {
            --cui-alert-color: #1f5c99;
            --cui-alert-bg: #d6ebff;
            --cui-alert-border-color: #c2e0ff;
        }

        .alert-info .alert-link {
            color: #194a7a;
        }

        .alert-warning {
            --cui-alert-color: rgba(131, 107, 52, 0.97);
            --cui-alert-bg: #feefd0;
            --cui-alert-border-color: #fde8b9;
        }

        .alert-warning .alert-link {
            color: rgba(104, 85, 41, 0.976);
        }

        .alert-danger {
            --cui-alert-color: #893232;
            --cui-alert-bg: #fadddd;
            --cui-alert-border-color: #f7cbcb;
        }

        .alert-danger .alert-link {
            color: #6e2828;
        }

        .alert-light {
            --cui-alert-color: rgba(125, 133, 144, 0.97);
            --cui-alert-bg: #fbfbfc;
            --cui-alert-border-color: #f9fafa;
        }

        .alert-light .alert-link {
            color: rgba(99, 105, 114, 0.976);
        }

        .alert-dark {
            --cui-alert-color: #2f3845;
            --cui-alert-bg: #dcdfe3;
            --cui-alert-border-color: #caced5;
        }

        .alert-dark .alert-link {
            color: #262d37;
        }

        @keyframes progress-bar-stripes {
            0% {
                background-position-x: 1rem;
            }
        }

        .progress {
            --cui-progress-height: 1rem;
            --cui-progress-font-size: 0.75rem;
            --cui-progress-bg: #d8dbe0;
            --cui-progress-border-radius: 0.375rem;
            --cui-progress-box-shadow: inset 0 1px 2px rgba(0, 0, 21, 0.075);
            --cui-progress-bar-color: rgba(255, 255, 255, 0.87);
            --cui-progress-bar-bg: #321fdb;
            --cui-progress-bar-transition: width 0.6s ease;
            display: flex;
            height: var(--cui-progress-height);
            overflow: hidden;
            font-size: var(--cui-progress-font-size);
            background-color: var(--cui-progress-bg);
            border-radius: var(--cui-progress-border-radius);
        }

        .progress-bar {
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden;
            color: var(--cui-progress-bar-color);
            text-align: center;
            white-space: nowrap;
            background-color: var(--cui-progress-bar-bg);
            transition: var(--cui-progress-bar-transition);
        }

        @media (prefers-reduced-motion: reduce) {
            .progress-bar {
                transition: none;
            }
        }

        .progress-bar-striped {
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-size: var(--cui-progress-height) var(--cui-progress-height);
        }

        .progress-bar-animated {
            animation: 1s linear infinite progress-bar-stripes;
        }

        @media (prefers-reduced-motion: reduce) {
            .progress-bar-animated {
                animation: none;
            }
        }

        .progress-thin {
            height: 4px;
        }

        .progress.progress-white {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .progress.progress-white .progress-bar {
            background-color: #fff;
        }

        .progress-group {
            display: flex;
            flex-flow: row wrap;
            margin-bottom: 1rem;
        }

        .progress-group-prepend {
            flex: 0 0 100px;
            align-self: center;
        }

        .progress-group-header {
            display: flex;
            flex-basis: 100%;
            align-items: center;
            margin-bottom: 0.25rem;
        }

        .progress-group-bars {
            flex-grow: 1;
            align-self: center;
        }

        .progress-group-bars .progress:not(:last-child) {
            margin-bottom: 2px;
        }

        .progress-group-header+.progress-group-bars {
            flex-basis: 100%;
        }

        .list-group {
            --cui-list-group-color: unset;
            --cui-list-group-bg: #fff;
            --cui-list-group-border-color: rgba(0, 0, 21, 0.125);
            --cui-list-group-border-width: 1px;
            --cui-list-group-border-radius: 0.375rem;
            --cui-list-group-item-padding-x: 1rem;
            --cui-list-group-item-padding-y: 0.5rem;
            --cui-list-group-action-color: #768192;
            --cui-list-group-action-hover-color: #768192;
            --cui-list-group-action-hover-bg: #ebedef;
            --cui-list-group-action-active-color: rgba(44, 56, 74, 0.95);
            --cui-list-group-action-active-bg: #d8dbe0;
            --cui-list-group-disabled-color: #8a93a2;
            --cui-list-group-disabled-bg: #fff;
            --cui-list-group-active-color: rgba(255, 255, 255, 0.87);
            --cui-list-group-active-bg: #321fdb;
            --cui-list-group-active-border-color: #321fdb;
            display: flex;
            flex-direction: column;
            margin-bottom: 0;
            border-radius: var(--cui-list-group-border-radius);
        }

        html:not([dir=rtl]) .list-group {
            padding-left: 0;
        }

        *[dir=rtl] .list-group {
            padding-right: 0;
        }

        .list-group-numbered {
            list-style-type: none;
            counter-reset: section;
        }

        .list-group-numbered>.list-group-item::before {
            content: counters(section, ".") ". ";
            counter-increment: section;
        }

        .list-group-item-action {
            width: 100%;
            color: var(--cui-list-group-action-color);
            text-align: inherit;
        }

        .list-group-item-action:hover,
        .list-group-item-action:focus {
            z-index: 1;
            color: var(--cui-list-group-action-hover-color);
            text-decoration: none;
            background-color: var(--cui-list-group-action-hover-bg);
        }

        .list-group-item-action:active {
            color: var(--cui-list-group-action-active-color);
            background-color: var(--cui-list-group-action-active-bg);
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: var(--cui-list-group-item-padding-y) var(--cui-list-group-item-padding-x);
            color: var(--cui-list-group-color);
            text-decoration: none;
            background-color: var(--cui-list-group-bg);
            border: var(--cui-list-group-border-width) solid var(--cui-list-group-border-color);
        }

        .list-group-item:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        .list-group-item:last-child {
            border-bottom-right-radius: inherit;
            border-bottom-left-radius: inherit;
        }

        .list-group-item.disabled,
        .list-group-item:disabled {
            color: var(--cui-list-group-disabled-color);
            pointer-events: none;
            background-color: var(--cui-list-group-disabled-bg);
        }

        .list-group-item.active {
            z-index: 2;
            color: var(--cui-list-group-active-color);
            background-color: var(--cui-list-group-active-bg);
            border-color: var(--cui-list-group-active-border-color);
        }

        .list-group-item+.list-group-item {
            border-top-width: 0;
        }

        .list-group-item+.list-group-item.active {
            margin-top: calc(-1 * var(--cui-list-group-border-width));
            border-top-width: var(--cui-list-group-border-width);
        }

        .list-group-horizontal {
            flex-direction: row;
        }

        html:not([dir=rtl]) .list-group-horizontal>.list-group-item:first-child:not(:last-child) {
            border-bottom-left-radius: var(--cui-list-group-border-radius);
        }

        *[dir=rtl] .list-group-horizontal>.list-group-item:first-child:not(:last-child) {
            border-bottom-right-radius: var(--cui-list-group-border-radius);
        }

        html:not([dir=rtl]) .list-group-horizontal>.list-group-item:first-child:not(:last-child) {
            border-top-right-radius: 0;
        }

        *[dir=rtl] .list-group-horizontal>.list-group-item:first-child:not(:last-child) {
            border-top-left-radius: 0;
        }

        html:not([dir=rtl]) .list-group-horizontal>.list-group-item:last-child:not(:first-child) {
            border-top-right-radius: var(--cui-list-group-border-radius);
        }

        *[dir=rtl] .list-group-horizontal>.list-group-item:last-child:not(:first-child) {
            border-top-left-radius: var(--cui-list-group-border-radius);
        }

        html:not([dir=rtl]) .list-group-horizontal>.list-group-item:last-child:not(:first-child) {
            border-bottom-left-radius: 0;
        }

        *[dir=rtl] .list-group-horizontal>.list-group-item:last-child:not(:first-child) {
            border-bottom-right-radius: 0;
        }

        .list-group-horizontal>.list-group-item.active {
            margin-top: 0;
        }

        .list-group-horizontal>.list-group-item+.list-group-item {
            border-top-width: var(--cui-list-group-border-width);
        }

        html:not([dir=rtl]) .list-group-horizontal>.list-group-item+.list-group-item {
            border-left-width: 0;
        }

        *[dir=rtl] .list-group-horizontal>.list-group-item+.list-group-item {
            border-right-width: 0;
        }

        html:not([dir=rtl]) .list-group-horizontal>.list-group-item+.list-group-item.active {
            margin-left: calc(-1 * var(--cui-list-group-border-width));
        }

        *[dir=rtl] .list-group-horizontal>.list-group-item+.list-group-item.active {
            margin-right: calc(-1 * var(--cui-list-group-border-width));
        }

        html:not([dir=rtl]) .list-group-horizontal>.list-group-item+.list-group-item.active {
            border-left-width: var(--cui-list-group-border-width);
        }

        *[dir=rtl] .list-group-horizontal>.list-group-item+.list-group-item.active {
            border-right-width: var(--cui-list-group-border-width);
        }

        @media (min-width: 576px) {
            .list-group-horizontal-sm {
                flex-direction: row;
            }

            html:not([dir=rtl]) .list-group-horizontal-sm>.list-group-item:first-child:not(:last-child) {
                border-bottom-left-radius: var(--cui-list-group-border-radius);
            }

            *[dir=rtl] .list-group-horizontal-sm>.list-group-item:first-child:not(:last-child) {
                border-bottom-right-radius: var(--cui-list-group-border-radius);
            }

            html:not([dir=rtl]) .list-group-horizontal-sm>.list-group-item:first-child:not(:last-child) {
                border-top-right-radius: 0;
            }

            *[dir=rtl] .list-group-horizontal-sm>.list-group-item:first-child:not(:last-child) {
                border-top-left-radius: 0;
            }

            html:not([dir=rtl]) .list-group-horizontal-sm>.list-group-item:last-child:not(:first-child) {
                border-top-right-radius: var(--cui-list-group-border-radius);
            }

            *[dir=rtl] .list-group-horizontal-sm>.list-group-item:last-child:not(:first-child) {
                border-top-left-radius: var(--cui-list-group-border-radius);
            }

            html:not([dir=rtl]) .list-group-horizontal-sm>.list-group-item:last-child:not(:first-child) {
                border-bottom-left-radius: 0;
            }

            *[dir=rtl] .list-group-horizontal-sm>.list-group-item:last-child:not(:first-child) {
                border-bottom-right-radius: 0;
            }

            .list-group-horizontal-sm>.list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-sm>.list-group-item+.list-group-item {
                border-top-width: var(--cui-list-group-border-width);
            }

            html:not([dir=rtl]) .list-group-horizontal-sm>.list-group-item+.list-group-item {
                border-left-width: 0;
            }

            *[dir=rtl] .list-group-horizontal-sm>.list-group-item+.list-group-item {
                border-right-width: 0;
            }

            html:not([dir=rtl]) .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
                margin-left: calc(-1 * var(--cui-list-group-border-width));
            }

            *[dir=rtl] .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
                margin-right: calc(-1 * var(--cui-list-group-border-width));
            }

            html:not([dir=rtl]) .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
                border-left-width: var(--cui-list-group-border-width);
            }

            *[dir=rtl] .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
                border-right-width: var(--cui-list-group-border-width);
            }
        }

        @media (min-width: 768px) {
            .list-group-horizontal-md {
                flex-direction: row;
            }

            html:not([dir=rtl]) .list-group-horizontal-md>.list-group-item:first-child:not(:last-child) {
                border-bottom-left-radius: var(--cui-list-group-border-radius);
            }

            *[dir=rtl] .list-group-horizontal-md>.list-group-item:first-child:not(:last-child) {
                border-bottom-right-radius: var(--cui-list-group-border-radius);
            }

            html:not([dir=rtl]) .list-group-horizontal-md>.list-group-item:first-child:not(:last-child) {
                border-top-right-radius: 0;
            }

            *[dir=rtl] .list-group-horizontal-md>.list-group-item:first-child:not(:last-child) {
                border-top-left-radius: 0;
            }

            html:not([dir=rtl]) .list-group-horizontal-md>.list-group-item:last-child:not(:first-child) {
                border-top-right-radius: var(--cui-list-group-border-radius);
            }

            *[dir=rtl] .list-group-horizontal-md>.list-group-item:last-child:not(:first-child) {
                border-top-left-radius: var(--cui-list-group-border-radius);
            }

            html:not([dir=rtl]) .list-group-horizontal-md>.list-group-item:last-child:not(:first-child) {
                border-bottom-left-radius: 0;
            }

            *[dir=rtl] .list-group-horizontal-md>.list-group-item:last-child:not(:first-child) {
                border-bottom-right-radius: 0;
            }

            .list-group-horizontal-md>.list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-md>.list-group-item+.list-group-item {
                border-top-width: var(--cui-list-group-border-width);
            }

            html:not([dir=rtl]) .list-group-horizontal-md>.list-group-item+.list-group-item {
                border-left-width: 0;
            }

            *[dir=rtl] .list-group-horizontal-md>.list-group-item+.list-group-item {
                border-right-width: 0;
            }

            html:not([dir=rtl]) .list-group-horizontal-md>.list-group-item+.list-group-item.active {
                margin-left: calc(-1 * var(--cui-list-group-border-width));
            }

            *[dir=rtl] .list-group-horizontal-md>.list-group-item+.list-group-item.active {
                margin-right: calc(-1 * var(--cui-list-group-border-width));
            }

            html:not([dir=rtl]) .list-group-horizontal-md>.list-group-item+.list-group-item.active {
                border-left-width: var(--cui-list-group-border-width);
            }

            *[dir=rtl] .list-group-horizontal-md>.list-group-item+.list-group-item.active {
                border-right-width: var(--cui-list-group-border-width);
            }
        }

        @media (min-width: 992px) {
            .list-group-horizontal-lg {
                flex-direction: row;
            }

            html:not([dir=rtl]) .list-group-horizontal-lg>.list-group-item:first-child:not(:last-child) {
                border-bottom-left-radius: var(--cui-list-group-border-radius);
            }

            *[dir=rtl] .list-group-horizontal-lg>.list-group-item:first-child:not(:last-child) {
                border-bottom-right-radius: var(--cui-list-group-border-radius);
            }

            html:not([dir=rtl]) .list-group-horizontal-lg>.list-group-item:first-child:not(:last-child) {
                border-top-right-radius: 0;
            }

            *[dir=rtl] .list-group-horizontal-lg>.list-group-item:first-child:not(:last-child) {
                border-top-left-radius: 0;
            }

            html:not([dir=rtl]) .list-group-horizontal-lg>.list-group-item:last-child:not(:first-child) {
                border-top-right-radius: var(--cui-list-group-border-radius);
            }

            *[dir=rtl] .list-group-horizontal-lg>.list-group-item:last-child:not(:first-child) {
                border-top-left-radius: var(--cui-list-group-border-radius);
            }

            html:not([dir=rtl]) .list-group-horizontal-lg>.list-group-item:last-child:not(:first-child) {
                border-bottom-left-radius: 0;
            }

            *[dir=rtl] .list-group-horizontal-lg>.list-group-item:last-child:not(:first-child) {
                border-bottom-right-radius: 0;
            }

            .list-group-horizontal-lg>.list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-lg>.list-group-item+.list-group-item {
                border-top-width: var(--cui-list-group-border-width);
            }

            html:not([dir=rtl]) .list-group-horizontal-lg>.list-group-item+.list-group-item {
                border-left-width: 0;
            }

            *[dir=rtl] .list-group-horizontal-lg>.list-group-item+.list-group-item {
                border-right-width: 0;
            }

            html:not([dir=rtl]) .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
                margin-left: calc(-1 * var(--cui-list-group-border-width));
            }

            *[dir=rtl] .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
                margin-right: calc(-1 * var(--cui-list-group-border-width));
            }

            html:not([dir=rtl]) .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
                border-left-width: var(--cui-list-group-border-width);
            }

            *[dir=rtl] .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
                border-right-width: var(--cui-list-group-border-width);
            }
        }

        @media (min-width: 1200px) {
            .list-group-horizontal-xl {
                flex-direction: row;
            }

            html:not([dir=rtl]) .list-group-horizontal-xl>.list-group-item:first-child:not(:last-child) {
                border-bottom-left-radius: var(--cui-list-group-border-radius);
            }

            *[dir=rtl] .list-group-horizontal-xl>.list-group-item:first-child:not(:last-child) {
                border-bottom-right-radius: var(--cui-list-group-border-radius);
            }

            html:not([dir=rtl]) .list-group-horizontal-xl>.list-group-item:first-child:not(:last-child) {
                border-top-right-radius: 0;
            }

            *[dir=rtl] .list-group-horizontal-xl>.list-group-item:first-child:not(:last-child) {
                border-top-left-radius: 0;
            }

            html:not([dir=rtl]) .list-group-horizontal-xl>.list-group-item:last-child:not(:first-child) {
                border-top-right-radius: var(--cui-list-group-border-radius);
            }

            *[dir=rtl] .list-group-horizontal-xl>.list-group-item:last-child:not(:first-child) {
                border-top-left-radius: var(--cui-list-group-border-radius);
            }

            html:not([dir=rtl]) .list-group-horizontal-xl>.list-group-item:last-child:not(:first-child) {
                border-bottom-left-radius: 0;
            }

            *[dir=rtl] .list-group-horizontal-xl>.list-group-item:last-child:not(:first-child) {
                border-bottom-right-radius: 0;
            }

            .list-group-horizontal-xl>.list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-xl>.list-group-item+.list-group-item {
                border-top-width: var(--cui-list-group-border-width);
            }

            html:not([dir=rtl]) .list-group-horizontal-xl>.list-group-item+.list-group-item {
                border-left-width: 0;
            }

            *[dir=rtl] .list-group-horizontal-xl>.list-group-item+.list-group-item {
                border-right-width: 0;
            }

            html:not([dir=rtl]) .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
                margin-left: calc(-1 * var(--cui-list-group-border-width));
            }

            *[dir=rtl] .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
                margin-right: calc(-1 * var(--cui-list-group-border-width));
            }

            html:not([dir=rtl]) .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
                border-left-width: var(--cui-list-group-border-width);
            }

            *[dir=rtl] .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
                border-right-width: var(--cui-list-group-border-width);
            }
        }

        @media (min-width: 1400px) {
            .list-group-horizontal-xxl {
                flex-direction: row;
            }

            html:not([dir=rtl]) .list-group-horizontal-xxl>.list-group-item:first-child:not(:last-child) {
                border-bottom-left-radius: var(--cui-list-group-border-radius);
            }

            *[dir=rtl] .list-group-horizontal-xxl>.list-group-item:first-child:not(:last-child) {
                border-bottom-right-radius: var(--cui-list-group-border-radius);
            }

            html:not([dir=rtl]) .list-group-horizontal-xxl>.list-group-item:first-child:not(:last-child) {
                border-top-right-radius: 0;
            }

            *[dir=rtl] .list-group-horizontal-xxl>.list-group-item:first-child:not(:last-child) {
                border-top-left-radius: 0;
            }

            html:not([dir=rtl]) .list-group-horizontal-xxl>.list-group-item:last-child:not(:first-child) {
                border-top-right-radius: var(--cui-list-group-border-radius);
            }

            *[dir=rtl] .list-group-horizontal-xxl>.list-group-item:last-child:not(:first-child) {
                border-top-left-radius: var(--cui-list-group-border-radius);
            }

            html:not([dir=rtl]) .list-group-horizontal-xxl>.list-group-item:last-child:not(:first-child) {
                border-bottom-left-radius: 0;
            }

            *[dir=rtl] .list-group-horizontal-xxl>.list-group-item:last-child:not(:first-child) {
                border-bottom-right-radius: 0;
            }

            .list-group-horizontal-xxl>.list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-xxl>.list-group-item+.list-group-item {
                border-top-width: var(--cui-list-group-border-width);
            }

            html:not([dir=rtl]) .list-group-horizontal-xxl>.list-group-item+.list-group-item {
                border-left-width: 0;
            }

            *[dir=rtl] .list-group-horizontal-xxl>.list-group-item+.list-group-item {
                border-right-width: 0;
            }

            html:not([dir=rtl]) .list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
                margin-left: calc(-1 * var(--cui-list-group-border-width));
            }

            *[dir=rtl] .list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
                margin-right: calc(-1 * var(--cui-list-group-border-width));
            }

            html:not([dir=rtl]) .list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
                border-left-width: var(--cui-list-group-border-width);
            }

            *[dir=rtl] .list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
                border-right-width: var(--cui-list-group-border-width);
            }
        }

        .list-group-flush {
            border-radius: 0;
        }

        .list-group-flush>.list-group-item {
            border-width: 0 0 var(--cui-list-group-border-width);
        }

        .list-group-flush>.list-group-item:last-child {
            border-bottom-width: 0;
        }

        .list-group-item-primary {
            --cui-list-group-color: contrast-ratio-correction(#1e1383, #d6d2f8, 40%, "primary");
            --cui-list-group-bg: #d6d2f8;
            --cui-list-group-hover-bg: #2d1cc5;
            --cui-list-group-action-hover-color: contrast-ratio-correction(#1e1383, #d6d2f8, 40%, "primary");
            --cui-list-group-action-active-color: #fff;
            --cui-list-group-action-active-bg: contrast-ratio-correction(#1e1383, #d6d2f8, 40%, "primary");
            --cui-list-group-action-active-border-color: contrast-ratio-correction(#1e1383, #d6d2f8, 40%, "primary");
        }

        .list-group-item-secondary {
            --cui-list-group-color: contrast-ratio-correction(#5e636a, #ebedef, 40%, "secondary");
            --cui-list-group-bg: #ebedef;
            --cui-list-group-hover-bg: #8d959f;
            --cui-list-group-action-hover-color: contrast-ratio-correction(#5e636a, #ebedef, 40%, "secondary");
            --cui-list-group-action-active-color: #fff;
            --cui-list-group-action-active-bg: contrast-ratio-correction(#5e636a, #ebedef, 40%, "secondary");
            --cui-list-group-action-active-border-color: contrast-ratio-correction(#5e636a, #ebedef, 40%, "secondary");
        }

        .list-group-item-success {
            --cui-list-group-color: contrast-ratio-correction(#1c6e37, #d5f1de, 40%, "success");
            --cui-list-group-bg: #d5f1de;
            --cui-list-group-hover-bg: #29a653;
            --cui-list-group-action-hover-color: contrast-ratio-correction(#1c6e37, #d5f1de, 40%, "success");
            --cui-list-group-action-active-color: #fff;
            --cui-list-group-action-active-bg: contrast-ratio-correction(#1c6e37, #d5f1de, 40%, "success");
            --cui-list-group-action-active-border-color: contrast-ratio-correction(#1c6e37, #d5f1de, 40%, "success");
        }

        .list-group-item-danger {
            --cui-list-group-color: contrast-ratio-correction(#893232, #fadddd, 40%, "danger");
            --cui-list-group-bg: #fadddd;
            --cui-list-group-hover-bg: #ce4b4b;
            --cui-list-group-action-hover-color: contrast-ratio-correction(#893232, #fadddd, 40%, "danger");
            --cui-list-group-action-active-color: #fff;
            --cui-list-group-action-active-bg: contrast-ratio-correction(#893232, #fadddd, 40%, "danger");
            --cui-list-group-action-active-border-color: contrast-ratio-correction(#893232, #fadddd, 40%, "danger");
        }

        .list-group-item-warning {
            --cui-list-group-color: contrast-ratio-correction(#956a0d, #feefd0, 40%, "warning");
            --cui-list-group-bg: #feefd0;
            --cui-list-group-hover-bg: #e09f13;
            --cui-list-group-action-hover-color: contrast-ratio-correction(#956a0d, #feefd0, 40%, "warning");
            --cui-list-group-action-active-color: #fff;
            --cui-list-group-action-active-bg: contrast-ratio-correction(#956a0d, #feefd0, 40%, "warning");
            --cui-list-group-action-active-border-color: contrast-ratio-correction(#956a0d, #feefd0, 40%, "warning");
        }

        .list-group-item-info {
            --cui-list-group-color: contrast-ratio-correction(#1f5c99, #d6ebff, 40%, "info");
            --cui-list-group-bg: #d6ebff;
            --cui-list-group-hover-bg: #2e8ae6;
            --cui-list-group-action-hover-color: contrast-ratio-correction(#1f5c99, #d6ebff, 40%, "info");
            --cui-list-group-action-active-color: #fff;
            --cui-list-group-action-active-bg: contrast-ratio-correction(#1f5c99, #d6ebff, 40%, "info");
            --cui-list-group-action-active-border-color: contrast-ratio-correction(#1f5c99, #d6ebff, 40%, "info");
        }

        .list-group-item-light {
            --cui-list-group-color: contrast-ratio-correction(#8d8e8f, #fbfbfc, 40%, "light");
            --cui-list-group-bg: #fbfbfc;
            --cui-list-group-hover-bg: #d4d5d7;
            --cui-list-group-action-hover-color: contrast-ratio-correction(#8d8e8f, #fbfbfc, 40%, "light");
            --cui-list-group-action-active-color: #fff;
            --cui-list-group-action-active-bg: contrast-ratio-correction(#8d8e8f, #fbfbfc, 40%, "light");
            --cui-list-group-action-active-border-color: contrast-ratio-correction(#8d8e8f, #fbfbfc, 40%, "light");
        }

        .list-group-item-dark {
            --cui-list-group-color: contrast-ratio-correction(#2f3845, #dcdfe3, 40%, "dark");
            --cui-list-group-bg: #dcdfe3;
            --cui-list-group-hover-bg: #475468;
            --cui-list-group-action-hover-color: contrast-ratio-correction(#2f3845, #dcdfe3, 40%, "dark");
            --cui-list-group-action-active-color: #fff;
            --cui-list-group-action-active-bg: contrast-ratio-correction(#2f3845, #dcdfe3, 40%, "dark");
            --cui-list-group-action-active-border-color: contrast-ratio-correction(#2f3845, #dcdfe3, 40%, "dark");
        }

        .btn-close {
            box-sizing: content-box;
            width: 1em;
            height: 1em;
            padding: 0.25em 0.25em;
            color: rgba(44, 56, 74, 0.95);
            color: var(--cui-btn-close-color, rgba(44, 56, 74, 0.95));
            background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='rgba%2844, 56, 74, 0.95%29'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
            background: transparent var(--cui-btn-close-bg, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='rgba%2844, 56, 74, 0.95%29'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e")) center/1em auto no-repeat;
            border: 0;
            border-radius: 0.375rem;
            opacity: 0.5;
        }

        .btn-close:hover {
            color: rgba(44, 56, 74, 0.95);
            color: var(--cui-btn-close-color, rgba(44, 56, 74, 0.95));
            text-decoration: none;
            opacity: 0.75;
        }

        .btn-close:focus {
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(50, 31, 219, 0.25);
            opacity: 1;
        }

        .btn-close:disabled,
        .btn-close.disabled {
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            opacity: 0.25;
        }

        .btn-close-white {
            filter: invert(1) grayscale(100%) brightness(200%);
        }

        .toast {
            --cui-toast-zindex: 1090;
            --cui-toast-padding-x: 0.75rem;
            --cui-toast-padding-y: 0.5rem;
            --cui-toast-spacing: 1.5rem;
            --cui-toast-max-width: 350px;
            --cui-toast-font-size: 0.875rem;
            --cui-toast-color: unset;
            --cui-toast-bg: rgba(255, 255, 255, 0.85);
            --cui-toast-border-width: 1px;
            --cui-toast-border-color: var(--cui-border-color-translucent);
            --cui-toast-border-radius: 0.375rem;
            --cui-toast-box-shadow: 0 0.5rem 1rem rgba(0, 0, 21, 0.15);
            --cui-toast-header-color: #8a93a2;
            --cui-toast-header-bg: rgba(255, 255, 255, 0.85);
            --cui-toast-header-border-color: rgba(0, 0, 21, 0.05);
            width: var(--cui-toast-max-width);
            max-width: 100%;
            font-size: var(--cui-toast-font-size);
            color: var(--cui-toast-color);
            pointer-events: auto;
            background-color: var(--cui-toast-bg);
            background-clip: padding-box;
            border: var(--cui-toast-border-width) solid var(--cui-toast-border-color);
            box-shadow: var(--cui-toast-box-shadow);
            border-radius: var(--cui-toast-border-radius);
        }

        .toast.showing {
            opacity: 0;
        }

        .toast:not(.show) {
            display: none;
        }

        .toast-container {
            --cui-toast-zindex: 1090;
            position: absolute;
            z-index: var(--cui-toast-zindex);
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            max-width: 100%;
            pointer-events: none;
        }

        .toast-container> :not(:last-child) {
            margin-bottom: var(--cui-toast-spacing);
        }

        .toast-header {
            display: flex;
            align-items: center;
            padding: var(--cui-toast-padding-y) var(--cui-toast-padding-x);
            color: var(--cui-toast-header-color);
            background-color: var(--cui-toast-header-bg);
            background-clip: padding-box;
            border-bottom: var(--cui-toast-border-width) solid var(--cui-toast-header-border-color);
            border-top-left-radius: calc(var(--cui-toast-border-radius) - var(--cui-toast-border-width));
            border-top-right-radius: calc(var(--cui-toast-border-radius) - var(--cui-toast-border-width));
        }

        html:not([dir=rtl]) .toast-header .btn-close {
            margin-right: calc(-0.5 * var(--cui-toast-padding-x));
        }

        *[dir=rtl] .toast-header .btn-close {
            margin-left: calc(-0.5 * var(--cui-toast-padding-x));
        }

        html:not([dir=rtl]) .toast-header .btn-close {
            margin-left: var(--cui-toast-padding-x);
        }

        *[dir=rtl] .toast-header .btn-close {
            margin-right: var(--cui-toast-padding-x);
        }

        .toast-body {
            padding: var(--cui-toast-padding-x);
            word-wrap: break-word;
        }

        .modal {
            --cui-modal-zindex: 1055;
            --cui-modal-width: 500px;
            --cui-modal-padding: 1rem;
            --cui-modal-margin: 0.5rem;
            --cui-modal-color: unset;
            --cui-modal-bg: #fff;
            --cui-modal-border-color: var(--cui-border-color-translucent);
            --cui-modal-border-width: 1px;
            --cui-modal-border-radius: 0.5rem;
            --cui-modal-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 21, 0.075);
            --cui-modal-inner-border-radius: calc(0.5rem - 1px);
            --cui-modal-header-padding-x: 1rem;
            --cui-modal-header-padding-y: 1rem;
            --cui-modal-header-padding: 1rem 1rem;
            --cui-modal-header-border-color: var(--cui-border-color);
            --cui-modal-header-border-width: 1px;
            --cui-modal-title-line-height: 1.5;
            --cui-modal-footer-gap: 0.5rem;
            --cui-modal-footer-bg: ;
            --cui-modal-footer-border-color: var(--cui-border-color);
            --cui-modal-footer-border-width: 1px;
            position: fixed;
            top: 0;
            z-index: var(--cui-modal-zindex);
            display: none;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
            outline: 0;
        }

        html:not([dir=rtl]) .modal {
            left: 0;
        }

        *[dir=rtl] .modal {
            right: 0;
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: var(--cui-modal-margin);
            pointer-events: none;
        }

        .modal.fade .modal-dialog {
            transition: transform 0.3s ease-out;
            transform: translate(0, -50px);
        }

        @media (prefers-reduced-motion: reduce) {
            .modal.fade .modal-dialog {
                transition: none;
            }
        }

        .modal.show .modal-dialog {
            transform: none;
        }

        .modal.modal-static .modal-dialog {
            transform: scale(1.02);
        }

        .modal-dialog-scrollable {
            height: calc(100% - var(--cui-modal-margin) * 2);
        }

        .modal-dialog-scrollable .modal-content {
            max-height: 100%;
            overflow: hidden;
        }

        .modal-dialog-scrollable .modal-body {
            overflow-y: auto;
        }

        .modal-dialog-centered {
            display: flex;
            align-items: center;
            min-height: calc(100% - var(--cui-modal-margin) * 2);
        }

        .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            color: var(--cui-modal-color);
            pointer-events: auto;
            background-color: var(--cui-modal-bg);
            background-clip: padding-box;
            border: var(--cui-modal-border-width) solid var(--cui-modal-border-color);
            border-radius: var(--cui-modal-border-radius);
            outline: 0;
        }

        .modal-backdrop {
            --cui-backdrop-zindex: 1050;
            --cui-backdrop-bg: #000015;
            --cui-backdrop-opacity: 0.5;
            position: fixed;
            top: 0;
            left: 0;
            z-index: var(--cui-backdrop-zindex);
            width: 100vw;
            height: 100vh;
            background-color: var(--cui-backdrop-bg);
        }

        .modal-backdrop.fade {
            opacity: 0;
        }

        .modal-backdrop.show {
            opacity: var(--cui-backdrop-opacity);
        }

        .modal-header {
            display: flex;
            flex-shrink: 0;
            align-items: center;
            justify-content: space-between;
            padding: var(--cui-modal-header-padding);
            border-bottom: var(--cui-modal-header-border-width) solid var(--cui-modal-header-border-color);
            border-top-left-radius: var(--cui-modal-inner-border-radius);
            border-top-right-radius: var(--cui-modal-inner-border-radius);
        }

        .modal-header .btn-close {
            padding: calc(var(--cui-modal-header-padding-y) * 0.5) calc(var(--cui-modal-header-padding-x) * 0.5);
        }

        html:not([dir=rtl]) .modal-header .btn-close {
            margin: calc(-0.5 * var(--cui-modal-header-padding-y)) calc(-0.5 * var(--cui-modal-header-padding-x)) calc(-0.5 * var(--cui-modal-header-padding-y)) auto;
        }

        *[dir=rtl] .modal-header .btn-close {
            margin: calc(-0.5 * var(--cui-modal-header-padding-y)) auto calc(-0.5 * var(--cui-modal-header-padding-y)) calc(-0.5 * var(--cui-modal-header-padding-x));
        }

        .modal-title {
            margin-bottom: 0;
            line-height: var(--cui-modal-title-line-height);
        }

        .modal-body {
            position: relative;
            flex: 1 1 auto;
            padding: var(--cui-modal-padding);
        }

        .modal-footer {
            display: flex;
            flex-shrink: 0;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            padding: calc(var(--cui-modal-padding) - var(--cui-modal-footer-gap) * 0.5);
            background-color: var(--cui-modal-footer-bg);
            border-top: var(--cui-modal-footer-border-width) solid var(--cui-modal-footer-border-color);
            border-bottom-right-radius: var(--cui-modal-inner-border-radius);
            border-bottom-left-radius: var(--cui-modal-inner-border-radius);
        }

        .modal-footer>* {
            margin: calc(var(--cui-modal-footer-gap) * 0.5);
        }

        @media (min-width: 576px) {
            .modal {
                --cui-modal-margin: 1.75rem;
                --cui-modal-box-shadow: 0 0.5rem 1rem rgba(0, 0, 21, 0.15);
            }

            .modal-dialog {
                max-width: var(--cui-modal-width);
                margin-right: auto;
                margin-left: auto;
            }

            .modal-sm {
                --cui-modal-width: 300px;
            }
        }

        @media (min-width: 992px) {

            .modal-lg,
            .modal-xl {
                --cui-modal-width: 800px;
            }
        }

        @media (min-width: 1200px) {
            .modal-xl {
                --cui-modal-width: 1140px;
            }
        }

        .modal-fullscreen {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0;
        }

        .modal-fullscreen .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }

        .modal-fullscreen .modal-header,
        .modal-fullscreen .modal-footer {
            border-radius: 0;
        }

        .modal-fullscreen .modal-body {
            overflow-y: auto;
        }

        @media (max-width: 575.98px) {
            .modal-fullscreen-sm-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }

            .modal-fullscreen-sm-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }

            .modal-fullscreen-sm-down .modal-header,
            .modal-fullscreen-sm-down .modal-footer {
                border-radius: 0;
            }

            .modal-fullscreen-sm-down .modal-body {
                overflow-y: auto;
            }
        }

        @media (max-width: 767.98px) {
            .modal-fullscreen-md-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }

            .modal-fullscreen-md-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }

            .modal-fullscreen-md-down .modal-header,
            .modal-fullscreen-md-down .modal-footer {
                border-radius: 0;
            }

            .modal-fullscreen-md-down .modal-body {
                overflow-y: auto;
            }
        }

        @media (max-width: 991.98px) {
            .modal-fullscreen-lg-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }

            .modal-fullscreen-lg-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }

            .modal-fullscreen-lg-down .modal-header,
            .modal-fullscreen-lg-down .modal-footer {
                border-radius: 0;
            }

            .modal-fullscreen-lg-down .modal-body {
                overflow-y: auto;
            }
        }

        @media (max-width: 1199.98px) {
            .modal-fullscreen-xl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }

            .modal-fullscreen-xl-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }

            .modal-fullscreen-xl-down .modal-header,
            .modal-fullscreen-xl-down .modal-footer {
                border-radius: 0;
            }

            .modal-fullscreen-xl-down .modal-body {
                overflow-y: auto;
            }
        }

        @media (max-width: 1399.98px) {
            .modal-fullscreen-xxl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }

            .modal-fullscreen-xxl-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }

            .modal-fullscreen-xxl-down .modal-header,
            .modal-fullscreen-xxl-down .modal-footer {
                border-radius: 0;
            }

            .modal-fullscreen-xxl-down .modal-body {
                overflow-y: auto;
            }
        }

        .tooltip {
            --cui-tooltip-zindex: 1080;
            --cui-tooltip-max-width: 200px;
            --cui-tooltip-padding-x: 0.5rem;
            --cui-tooltip-padding-y: 0.25rem;
            --cui-tooltip-margin: ;
            --cui-tooltip-font-size: 0.875rem;
            --cui-tooltip-color: rgba(255, 255, 255, 0.87);
            --cui-tooltip-bg: #000015;
            --cui-tooltip-border-radius: 0.375rem;
            --cui-tooltip-opacity: 0.9;
            --cui-tooltip-arrow-width: 0.8rem;
            --cui-tooltip-arrow-height: 0.4rem;
            z-index: var(--cui-tooltip-zindex);
            display: block;
            padding: var(--cui-tooltip-arrow-height);
            margin: var(--cui-tooltip-margin);
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-family: var(--cui-font-sans-serif);
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            white-space: normal;
            word-spacing: normal;
            line-break: auto;
            font-size: var(--cui-tooltip-font-size);
            word-wrap: break-word;
            opacity: 0;
        }

        .tooltip.show {
            opacity: var(--cui-tooltip-opacity);
        }

        .tooltip .tooltip-arrow {
            display: block;
            width: var(--cui-tooltip-arrow-width);
            height: var(--cui-tooltip-arrow-height);
        }

        .tooltip .tooltip-arrow::before {
            position: absolute;
            content: "";
            border-color: transparent;
            border-style: solid;
        }

        .bs-tooltip-top .tooltip-arrow,
        .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow {
            bottom: 0;
        }

        .bs-tooltip-top .tooltip-arrow::before,
        .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before {
            top: -1px;
            border-width: var(--cui-tooltip-arrow-height) calc(var(--cui-tooltip-arrow-width) * 0.5) 0;
            border-top-color: var(--cui-tooltip-bg);
        }

        /* rtl:begin:ignore */
        .bs-tooltip-end .tooltip-arrow,
        .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow {
            left: 0;
            width: var(--cui-tooltip-arrow-height);
            height: var(--cui-tooltip-arrow-width);
        }

        .bs-tooltip-end .tooltip-arrow::before,
        .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before {
            right: -1px;
            border-width: calc(var(--cui-tooltip-arrow-width) * 0.5) var(--cui-tooltip-arrow-height) calc(var(--cui-tooltip-arrow-width) * 0.5) 0;
            border-right-color: var(--cui-tooltip-bg);
        }

        /* rtl:end:ignore */
        .bs-tooltip-bottom .tooltip-arrow,
        .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow {
            top: 0;
        }

        .bs-tooltip-bottom .tooltip-arrow::before,
        .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before {
            bottom: -1px;
            border-width: 0 calc(var(--cui-tooltip-arrow-width) * 0.5) var(--cui-tooltip-arrow-height);
            border-bottom-color: var(--cui-tooltip-bg);
        }

        /* rtl:begin:ignore */
        .bs-tooltip-start .tooltip-arrow,
        .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow {
            right: 0;
            width: var(--cui-tooltip-arrow-height);
            height: var(--cui-tooltip-arrow-width);
        }

        .bs-tooltip-start .tooltip-arrow::before,
        .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
            left: -1px;
            border-width: calc(var(--cui-tooltip-arrow-width) * 0.5) 0 calc(var(--cui-tooltip-arrow-width) * 0.5) var(--cui-tooltip-arrow-height);
            border-left-color: var(--cui-tooltip-bg);
        }

        /* rtl:end:ignore */
        .tooltip-inner {
            max-width: var(--cui-tooltip-max-width);
            padding: var(--cui-tooltip-padding-y) var(--cui-tooltip-padding-x);
            color: var(--cui-tooltip-color);
            text-align: center;
            background-color: var(--cui-tooltip-bg);
            border-radius: 0;
            border-radius: var(--cui-tooltip-border-radius, 0);
        }

        .popover {
            --cui-popover-zindex: 1070;
            --cui-popover-max-width: 276px;
            --cui-popover-font-size: 0.875rem;
            --cui-popover-bg: #fff;
            --cui-popover-border-width: 1px;
            --cui-popover-border-color: var(--cui-border-color-translucent);
            --cui-popover-border-radius: 0.5rem;
            --cui-popover-inner-border-radius: calc(0.5rem - 1px);
            --cui-popover-box-shadow: 0 0.5rem 1rem rgba(0, 0, 21, 0.15);
            --cui-popover-header-padding-x: 1rem;
            --cui-popover-header-padding-y: 0.5rem;
            --cui-popover-header-font-size: 1rem;
            --cui-popover-header-color: unset;
            --cui-popover-header-bg: #f0f0f0;
            --cui-popover-body-padding-x: 1rem;
            --cui-popover-body-padding-y: 1rem;
            --cui-popover-body-color: rgba(44, 56, 74, 0.95);
            --cui-popover-arrow-width: 1rem;
            --cui-popover-arrow-height: 0.5rem;
            --cui-popover-arrow-border: var(--cui-popover-border-color);
            z-index: var(--cui-popover-zindex);
            display: block;
            max-width: var(--cui-popover-max-width);
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-family: var(--cui-font-sans-serif);
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            white-space: normal;
            word-spacing: normal;
            line-break: auto;
            font-size: var(--cui-popover-font-size);
            word-wrap: break-word;
            background-color: var(--cui-popover-bg);
            background-clip: padding-box;
            border: var(--cui-popover-border-width) solid var(--cui-popover-border-color);
            border-radius: var(--cui-popover-border-radius);
        }

        .popover .popover-arrow {
            display: block;
            width: var(--cui-popover-arrow-width);
            height: var(--cui-popover-arrow-height);
        }

        .popover .popover-arrow::before,
        .popover .popover-arrow::after {
            position: absolute;
            display: block;
            content: "";
            border-color: transparent;
            border-style: solid;
            border-width: 0;
        }

        .bs-popover-top>.popover-arrow,
        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow {
            bottom: calc(-1 * (var(--cui-popover-arrow-height)) - var(--cui-popover-border-width));
        }

        .bs-popover-top>.popover-arrow::before,
        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before,
        .bs-popover-top>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after {
            border-width: var(--cui-popover-arrow-height) calc(var(--cui-popover-arrow-width) * 0.5) 0;
        }

        .bs-popover-top>.popover-arrow::before,
        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before {
            bottom: 0;
            border-top-color: var(--cui-popover-arrow-border);
        }

        .bs-popover-top>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after {
            bottom: var(--cui-popover-border-width);
            border-top-color: var(--cui-popover-bg);
        }

        /* rtl:begin:ignore */
        .bs-popover-end>.popover-arrow,
        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow {
            left: calc(-1 * (var(--cui-popover-arrow-height)) - var(--cui-popover-border-width));
            width: var(--cui-popover-arrow-height);
            height: var(--cui-popover-arrow-width);
        }

        .bs-popover-end>.popover-arrow::before,
        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before,
        .bs-popover-end>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after {
            border-width: calc(var(--cui-popover-arrow-width) * 0.5) var(--cui-popover-arrow-height) calc(var(--cui-popover-arrow-width) * 0.5) 0;
        }

        .bs-popover-end>.popover-arrow::before,
        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before {
            left: 0;
            border-right-color: var(--cui-popover-arrow-border);
        }

        .bs-popover-end>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after {
            left: var(--cui-popover-border-width);
            border-right-color: var(--cui-popover-bg);
        }

        /* rtl:end:ignore */
        .bs-popover-bottom>.popover-arrow,
        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow {
            top: calc(-1 * (var(--cui-popover-arrow-height)) - var(--cui-popover-border-width));
        }

        .bs-popover-bottom>.popover-arrow::before,
        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before,
        .bs-popover-bottom>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after {
            border-width: 0 calc(var(--cui-popover-arrow-width) * 0.5) var(--cui-popover-arrow-height);
        }

        .bs-popover-bottom>.popover-arrow::before,
        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before {
            top: 0;
            border-bottom-color: var(--cui-popover-arrow-border);
        }

        .bs-popover-bottom>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after {
            top: var(--cui-popover-border-width);
            border-bottom-color: var(--cui-popover-bg);
        }

        .bs-popover-bottom .popover-header::before,
        .bs-popover-auto[data-popper-placement^=bottom] .popover-header::before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: var(--cui-popover-arrow-width);
            margin-left: calc(-0.5 * var(--cui-popover-arrow-width));
            content: "";
            border-bottom: var(--cui-popover-border-width) solid var(--cui-popover-header-bg);
        }

        /* rtl:begin:ignore */
        .bs-popover-start>.popover-arrow,
        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow {
            right: calc(-1 * (var(--cui-popover-arrow-height)) - var(--cui-popover-border-width));
            width: var(--cui-popover-arrow-height);
            height: var(--cui-popover-arrow-width);
        }

        .bs-popover-start>.popover-arrow::before,
        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before,
        .bs-popover-start>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after {
            border-width: calc(var(--cui-popover-arrow-width) * 0.5) 0 calc(var(--cui-popover-arrow-width) * 0.5) var(--cui-popover-arrow-height);
        }

        .bs-popover-start>.popover-arrow::before,
        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before {
            right: 0;
            border-left-color: var(--cui-popover-arrow-border);
        }

        .bs-popover-start>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after {
            right: var(--cui-popover-border-width);
            border-left-color: var(--cui-popover-bg);
        }

        /* rtl:end:ignore */
        .popover-header {
            padding: var(--cui-popover-header-padding-y) var(--cui-popover-header-padding-x);
            margin-bottom: 0;
            font-size: var(--cui-popover-header-font-size);
            color: var(--cui-popover-header-color);
            background-color: var(--cui-popover-header-bg);
            border-bottom: var(--cui-popover-border-width) solid var(--cui-popover-border-color);
            border-top-left-radius: var(--cui-popover-inner-border-radius);
            border-top-right-radius: var(--cui-popover-inner-border-radius);
        }

        .popover-header:empty {
            display: none;
        }

        .popover-body {
            padding: var(--cui-popover-body-padding-y) var(--cui-popover-body-padding-x);
            color: var(--cui-popover-body-color);
        }

        .carousel {
            position: relative;
        }

        .carousel.pointer-event {
            touch-action: pan-y;
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .carousel-inner::after {
            display: block;
            clear: both;
            content: "";
        }

        .carousel-item {
            position: relative;
            display: none;
            float: left;
            width: 100%;
            margin-right: -100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition: transform 0.6s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .carousel-item {
                transition: none;
            }
        }

        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev {
            display: block;
        }

        .carousel-item-next:not(.carousel-item-start),
        .active.carousel-item-end {
            transform: translateX(100%);
        }

        .carousel-item-prev:not(.carousel-item-end),
        .active.carousel-item-start {
            transform: translateX(-100%);
        }

        .carousel-fade .carousel-item {
            opacity: 0;
            transition-property: opacity;
            transform: none;
        }

        .carousel-fade .carousel-item.active,
        .carousel-fade .carousel-item-next.carousel-item-start,
        .carousel-fade .carousel-item-prev.carousel-item-end {
            z-index: 1;
            opacity: 1;
        }

        .carousel-fade .active.carousel-item-start,
        .carousel-fade .active.carousel-item-end {
            z-index: 0;
            opacity: 0;
            transition: opacity 0s 0.6s;
        }

        @media (prefers-reduced-motion: reduce) {

            .carousel-fade .active.carousel-item-start,
            .carousel-fade .active.carousel-item-end {
                transition: none;
            }
        }

        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 15%;
            padding: 0;
            color: rgba(255, 255, 255, 0.87);
            color: var(--cui-carousel-control-color, rgba(255, 255, 255, 0.87));
            text-align: center;
            background: none;
            border: 0;
            opacity: 0.5;
            transition: opacity 0.15s ease;
        }

        @media (prefers-reduced-motion: reduce) {

            .carousel-control-prev,
            .carousel-control-next {
                transition: none;
            }
        }

        .carousel-control-prev:hover,
        .carousel-control-prev:focus,
        .carousel-control-next:hover,
        .carousel-control-next:focus {
            color: rgba(255, 255, 255, 0.87);
            color: var(--cui-carousel-control-color, rgba(255, 255, 255, 0.87));
            text-decoration: none;
            outline: 0;
            opacity: 0.9;
        }

        .carousel-control-prev {
            left: 0;
        }

        .carousel-control-next {
            right: 0;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            background-repeat: no-repeat;
            background-position: 50%;
            background-size: 100% 100%;
        }

        /* rtl:options: {
      "autoRename": true,
      "stringMap":[ {
        "name"    : "prev-next",
        "search"  : "prev",
        "replace" : "next"
      } ]
    } */
        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='rgba%28255, 255, 255, 0.87%29'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='rgba%28255, 255, 255, 0.87%29'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 2;
            display: flex;
            justify-content: center;
            padding: 0;
            margin-right: 15%;
            margin-bottom: 1rem;
            margin-left: 15%;
            list-style: none;
        }

        .carousel-indicators [data-coreui-target] {
            box-sizing: content-box;
            flex: 0 1 auto;
            width: 30px;
            height: 3px;
            padding: 0;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #fff;
            background-color: var(--cui-carousel-indicator-active-bg, #fff);
            background-clip: padding-box;
            border: 0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: 0.5;
            transition: opacity 0.6s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .carousel-indicators [data-coreui-target] {
                transition: none;
            }
        }

        .carousel-indicators .active {
            opacity: 1;
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 1.25rem;
            left: 15%;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            color: rgba(255, 255, 255, 0.87);
            color: var(--cui-carousel-caption-color, rgba(255, 255, 255, 0.87));
            text-align: center;
        }

        .carousel-dark {
            --cui-carousel-indicator-active-bg: #000015;
            --cui-carousel-caption-color: rgba(44, 56, 74, 0.95);
        }

        .carousel-dark .carousel-control-prev-icon,
        .carousel-dark .carousel-control-next-icon {
            filter: invert(1) grayscale(100);
        }

        .carousel-dark .carousel-indicators [data-coreui-target] {
            background-color: #000015;
        }

        .carousel-dark .carousel-caption {
            color: rgba(44, 56, 74, 0.95);
        }

        .spinner-grow,
        .spinner-border {
            display: inline-block;
            width: var(--cui-spinner-width);
            height: var(--cui-spinner-height);
            vertical-align: var(--cui-spinner-vertical-align);
            border-radius: 50%;
            animation: var(--cui-spinner-animation-speed) linear infinite var(--cui-spinner-animation-name);
        }

        @keyframes spinner-border {
            to {
                transform: rotate(360deg)
                    /* rtl:ignore */
                ;
            }
        }

        .spinner-border {
            --cui-spinner-width: 2rem;
            --cui-spinner-height: 2rem;
            --cui-spinner-vertical-align: -0.125em;
            --cui-spinner-border-width: 0.25em;
            --cui-spinner-animation-speed: 0.75s;
            --cui-spinner-animation-name: spinner-border;
            border: var(--cui-spinner-border-width) solid currentcolor;
            border-right-color: transparent;
        }

        .spinner-border-sm {
            --cui-spinner-width: 1rem;
            --cui-spinner-height: 1rem;
            --cui-spinner-border-width: 0.2em;
        }

        @keyframes spinner-grow {
            0% {
                transform: scale(0);
            }

            50% {
                opacity: 1;
                transform: none;
            }
        }

        .spinner-grow {
            --cui-spinner-width: 2rem;
            --cui-spinner-height: 2rem;
            --cui-spinner-vertical-align: -0.125em;
            --cui-spinner-animation-speed: 0.75s;
            --cui-spinner-animation-name: spinner-grow;
            background-color: currentcolor;
            opacity: 0;
        }

        .spinner-grow-sm {
            --cui-spinner-width: 1rem;
            --cui-spinner-height: 1rem;
        }

        @media (prefers-reduced-motion: reduce) {

            .spinner-border,
            .spinner-grow {
                --cui-spinner-animation-speed: 1.5s;
            }
        }

        .offcanvas,
        .offcanvas-xxl,
        .offcanvas-xl,
        .offcanvas-lg,
        .offcanvas-md,
        .offcanvas-sm {
            --cui-offcanvas-zindex: 1045;
            --cui-offcanvas-width: 400px;
            --cui-offcanvas-height: 30vh;
            --cui-offcanvas-padding-x: 1rem;
            --cui-offcanvas-padding-y: 1rem;
            --cui-offcanvas-color: unset;
            --cui-offcanvas-bg: #fff;
            --cui-offcanvas-border-width: 1px;
            --cui-offcanvas-border-color: var(--cui-border-color-translucent);
            --cui-offcanvas-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 21, 0.075);
        }

        @media (max-width: 575.98px) {
            .offcanvas-sm {
                position: fixed;
                bottom: 0;
                z-index: var(--cui-offcanvas-zindex);
                display: flex;
                flex-direction: column;
                max-width: 100%;
                color: var(--cui-offcanvas-color);
                visibility: hidden;
                background-color: var(--cui-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                transition: transform 0.3s ease-in-out;
            }
        }

        @media (max-width: 575.98px) and (prefers-reduced-motion: reduce) {
            .offcanvas-sm {
                transition: none;
            }
        }

        @media (max-width: 575.98px) {
            .offcanvas-sm.offcanvas-start {
                top: 0;
                width: var(--cui-offcanvas-width);
            }

            html:not([dir=rtl]) .offcanvas-sm.offcanvas-start {
                left: 0;
            }

            *[dir=rtl] .offcanvas-sm.offcanvas-start {
                right: 0;
            }

            html:not([dir=rtl]) .offcanvas-sm.offcanvas-start {
                border-right: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            *[dir=rtl] .offcanvas-sm.offcanvas-start {
                border-left: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            html:not([dir=rtl]) .offcanvas-sm.offcanvas-start {
                transform: translateX(-100%);
            }

            *[dir=rtl] .offcanvas-sm.offcanvas-start {
                transform: translateX(100%);
            }

            .offcanvas-sm.offcanvas-end {
                top: 0;
                width: var(--cui-offcanvas-width);
                transform: translateX(100%);
            }

            html:not([dir=rtl]) .offcanvas-sm.offcanvas-end {
                right: 0;
            }

            *[dir=rtl] .offcanvas-sm.offcanvas-end {
                left: 0;
            }

            html:not([dir=rtl]) .offcanvas-sm.offcanvas-end {
                border-left: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            *[dir=rtl] .offcanvas-sm.offcanvas-end {
                border-right: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            .offcanvas-sm.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--cui-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
                transform: translateY(-100%);
            }

            .offcanvas-sm.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--cui-offcanvas-height);
                max-height: 100%;
                border-top: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
                transform: translateY(100%);
            }

            .offcanvas-sm.showing,
            .offcanvas-sm.show:not(.hiding) {
                transform: none !important;
            }

            .offcanvas-sm.showing,
            .offcanvas-sm.hiding,
            .offcanvas-sm.show {
                visibility: visible;
            }
        }

        @media (min-width: 576px) {
            .offcanvas-sm {
                --cui-offcanvas-height: auto;
                --cui-offcanvas-border-width: 0;
                background-color: transparent !important;
            }

            .offcanvas-sm .offcanvas-header {
                display: none;
            }

            .offcanvas-sm .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: transparent !important;
            }
        }

        @media (max-width: 767.98px) {
            .offcanvas-md {
                position: fixed;
                bottom: 0;
                z-index: var(--cui-offcanvas-zindex);
                display: flex;
                flex-direction: column;
                max-width: 100%;
                color: var(--cui-offcanvas-color);
                visibility: hidden;
                background-color: var(--cui-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                transition: transform 0.3s ease-in-out;
            }
        }

        @media (max-width: 767.98px) and (prefers-reduced-motion: reduce) {
            .offcanvas-md {
                transition: none;
            }
        }

        @media (max-width: 767.98px) {
            .offcanvas-md.offcanvas-start {
                top: 0;
                width: var(--cui-offcanvas-width);
            }

            html:not([dir=rtl]) .offcanvas-md.offcanvas-start {
                left: 0;
            }

            *[dir=rtl] .offcanvas-md.offcanvas-start {
                right: 0;
            }

            html:not([dir=rtl]) .offcanvas-md.offcanvas-start {
                border-right: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            *[dir=rtl] .offcanvas-md.offcanvas-start {
                border-left: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            html:not([dir=rtl]) .offcanvas-md.offcanvas-start {
                transform: translateX(-100%);
            }

            *[dir=rtl] .offcanvas-md.offcanvas-start {
                transform: translateX(100%);
            }

            .offcanvas-md.offcanvas-end {
                top: 0;
                width: var(--cui-offcanvas-width);
                transform: translateX(100%);
            }

            html:not([dir=rtl]) .offcanvas-md.offcanvas-end {
                right: 0;
            }

            *[dir=rtl] .offcanvas-md.offcanvas-end {
                left: 0;
            }

            html:not([dir=rtl]) .offcanvas-md.offcanvas-end {
                border-left: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            *[dir=rtl] .offcanvas-md.offcanvas-end {
                border-right: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            .offcanvas-md.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--cui-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
                transform: translateY(-100%);
            }

            .offcanvas-md.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--cui-offcanvas-height);
                max-height: 100%;
                border-top: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
                transform: translateY(100%);
            }

            .offcanvas-md.showing,
            .offcanvas-md.show:not(.hiding) {
                transform: none !important;
            }

            .offcanvas-md.showing,
            .offcanvas-md.hiding,
            .offcanvas-md.show {
                visibility: visible;
            }
        }

        @media (min-width: 768px) {
            .offcanvas-md {
                --cui-offcanvas-height: auto;
                --cui-offcanvas-border-width: 0;
                background-color: transparent !important;
            }

            .offcanvas-md .offcanvas-header {
                display: none;
            }

            .offcanvas-md .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: transparent !important;
            }
        }

        @media (max-width: 991.98px) {
            .offcanvas-lg {
                position: fixed;
                bottom: 0;
                z-index: var(--cui-offcanvas-zindex);
                display: flex;
                flex-direction: column;
                max-width: 100%;
                color: var(--cui-offcanvas-color);
                visibility: hidden;
                background-color: var(--cui-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                transition: transform 0.3s ease-in-out;
            }
        }

        @media (max-width: 991.98px) and (prefers-reduced-motion: reduce) {
            .offcanvas-lg {
                transition: none;
            }
        }

        @media (max-width: 991.98px) {
            .offcanvas-lg.offcanvas-start {
                top: 0;
                width: var(--cui-offcanvas-width);
            }

            html:not([dir=rtl]) .offcanvas-lg.offcanvas-start {
                left: 0;
            }

            *[dir=rtl] .offcanvas-lg.offcanvas-start {
                right: 0;
            }

            html:not([dir=rtl]) .offcanvas-lg.offcanvas-start {
                border-right: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            *[dir=rtl] .offcanvas-lg.offcanvas-start {
                border-left: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            html:not([dir=rtl]) .offcanvas-lg.offcanvas-start {
                transform: translateX(-100%);
            }

            *[dir=rtl] .offcanvas-lg.offcanvas-start {
                transform: translateX(100%);
            }

            .offcanvas-lg.offcanvas-end {
                top: 0;
                width: var(--cui-offcanvas-width);
                transform: translateX(100%);
            }

            html:not([dir=rtl]) .offcanvas-lg.offcanvas-end {
                right: 0;
            }

            *[dir=rtl] .offcanvas-lg.offcanvas-end {
                left: 0;
            }

            html:not([dir=rtl]) .offcanvas-lg.offcanvas-end {
                border-left: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            *[dir=rtl] .offcanvas-lg.offcanvas-end {
                border-right: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            .offcanvas-lg.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--cui-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
                transform: translateY(-100%);
            }

            .offcanvas-lg.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--cui-offcanvas-height);
                max-height: 100%;
                border-top: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
                transform: translateY(100%);
            }

            .offcanvas-lg.showing,
            .offcanvas-lg.show:not(.hiding) {
                transform: none !important;
            }

            .offcanvas-lg.showing,
            .offcanvas-lg.hiding,
            .offcanvas-lg.show {
                visibility: visible;
            }
        }

        @media (min-width: 992px) {
            .offcanvas-lg {
                --cui-offcanvas-height: auto;
                --cui-offcanvas-border-width: 0;
                background-color: transparent !important;
            }

            .offcanvas-lg .offcanvas-header {
                display: none;
            }

            .offcanvas-lg .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: transparent !important;
            }
        }

        @media (max-width: 1199.98px) {
            .offcanvas-xl {
                position: fixed;
                bottom: 0;
                z-index: var(--cui-offcanvas-zindex);
                display: flex;
                flex-direction: column;
                max-width: 100%;
                color: var(--cui-offcanvas-color);
                visibility: hidden;
                background-color: var(--cui-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                transition: transform 0.3s ease-in-out;
            }
        }

        @media (max-width: 1199.98px) and (prefers-reduced-motion: reduce) {
            .offcanvas-xl {
                transition: none;
            }
        }

        @media (max-width: 1199.98px) {
            .offcanvas-xl.offcanvas-start {
                top: 0;
                width: var(--cui-offcanvas-width);
            }

            html:not([dir=rtl]) .offcanvas-xl.offcanvas-start {
                left: 0;
            }

            *[dir=rtl] .offcanvas-xl.offcanvas-start {
                right: 0;
            }

            html:not([dir=rtl]) .offcanvas-xl.offcanvas-start {
                border-right: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            *[dir=rtl] .offcanvas-xl.offcanvas-start {
                border-left: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            html:not([dir=rtl]) .offcanvas-xl.offcanvas-start {
                transform: translateX(-100%);
            }

            *[dir=rtl] .offcanvas-xl.offcanvas-start {
                transform: translateX(100%);
            }

            .offcanvas-xl.offcanvas-end {
                top: 0;
                width: var(--cui-offcanvas-width);
                transform: translateX(100%);
            }

            html:not([dir=rtl]) .offcanvas-xl.offcanvas-end {
                right: 0;
            }

            *[dir=rtl] .offcanvas-xl.offcanvas-end {
                left: 0;
            }

            html:not([dir=rtl]) .offcanvas-xl.offcanvas-end {
                border-left: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            *[dir=rtl] .offcanvas-xl.offcanvas-end {
                border-right: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            .offcanvas-xl.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--cui-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
                transform: translateY(-100%);
            }

            .offcanvas-xl.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--cui-offcanvas-height);
                max-height: 100%;
                border-top: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
                transform: translateY(100%);
            }

            .offcanvas-xl.showing,
            .offcanvas-xl.show:not(.hiding) {
                transform: none !important;
            }

            .offcanvas-xl.showing,
            .offcanvas-xl.hiding,
            .offcanvas-xl.show {
                visibility: visible;
            }
        }

        @media (min-width: 1200px) {
            .offcanvas-xl {
                --cui-offcanvas-height: auto;
                --cui-offcanvas-border-width: 0;
                background-color: transparent !important;
            }

            .offcanvas-xl .offcanvas-header {
                display: none;
            }

            .offcanvas-xl .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: transparent !important;
            }
        }

        @media (max-width: 1399.98px) {
            .offcanvas-xxl {
                position: fixed;
                bottom: 0;
                z-index: var(--cui-offcanvas-zindex);
                display: flex;
                flex-direction: column;
                max-width: 100%;
                color: var(--cui-offcanvas-color);
                visibility: hidden;
                background-color: var(--cui-offcanvas-bg);
                background-clip: padding-box;
                outline: 0;
                transition: transform 0.3s ease-in-out;
            }
        }

        @media (max-width: 1399.98px) and (prefers-reduced-motion: reduce) {
            .offcanvas-xxl {
                transition: none;
            }
        }

        @media (max-width: 1399.98px) {
            .offcanvas-xxl.offcanvas-start {
                top: 0;
                width: var(--cui-offcanvas-width);
            }

            html:not([dir=rtl]) .offcanvas-xxl.offcanvas-start {
                left: 0;
            }

            *[dir=rtl] .offcanvas-xxl.offcanvas-start {
                right: 0;
            }

            html:not([dir=rtl]) .offcanvas-xxl.offcanvas-start {
                border-right: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            *[dir=rtl] .offcanvas-xxl.offcanvas-start {
                border-left: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            html:not([dir=rtl]) .offcanvas-xxl.offcanvas-start {
                transform: translateX(-100%);
            }

            *[dir=rtl] .offcanvas-xxl.offcanvas-start {
                transform: translateX(100%);
            }

            .offcanvas-xxl.offcanvas-end {
                top: 0;
                width: var(--cui-offcanvas-width);
                transform: translateX(100%);
            }

            html:not([dir=rtl]) .offcanvas-xxl.offcanvas-end {
                right: 0;
            }

            *[dir=rtl] .offcanvas-xxl.offcanvas-end {
                left: 0;
            }

            html:not([dir=rtl]) .offcanvas-xxl.offcanvas-end {
                border-left: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            *[dir=rtl] .offcanvas-xxl.offcanvas-end {
                border-right: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            }

            .offcanvas-xxl.offcanvas-top {
                top: 0;
                right: 0;
                left: 0;
                height: var(--cui-offcanvas-height);
                max-height: 100%;
                border-bottom: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
                transform: translateY(-100%);
            }

            .offcanvas-xxl.offcanvas-bottom {
                right: 0;
                left: 0;
                height: var(--cui-offcanvas-height);
                max-height: 100%;
                border-top: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
                transform: translateY(100%);
            }

            .offcanvas-xxl.showing,
            .offcanvas-xxl.show:not(.hiding) {
                transform: none !important;
            }

            .offcanvas-xxl.showing,
            .offcanvas-xxl.hiding,
            .offcanvas-xxl.show {
                visibility: visible;
            }
        }

        @media (min-width: 1400px) {
            .offcanvas-xxl {
                --cui-offcanvas-height: auto;
                --cui-offcanvas-border-width: 0;
                background-color: transparent !important;
            }

            .offcanvas-xxl .offcanvas-header {
                display: none;
            }

            .offcanvas-xxl .offcanvas-body {
                display: flex;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
                background-color: transparent !important;
            }
        }

        .offcanvas {
            position: fixed;
            bottom: 0;
            z-index: var(--cui-offcanvas-zindex);
            display: flex;
            flex-direction: column;
            max-width: 100%;
            color: var(--cui-offcanvas-color);
            visibility: hidden;
            background-color: var(--cui-offcanvas-bg);
            background-clip: padding-box;
            outline: 0;
            transition: transform 0.3s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .offcanvas {
                transition: none;
            }
        }

        .offcanvas.offcanvas-start {
            top: 0;
            width: var(--cui-offcanvas-width);
        }

        html:not([dir=rtl]) .offcanvas.offcanvas-start {
            left: 0;
        }

        *[dir=rtl] .offcanvas.offcanvas-start {
            right: 0;
        }

        html:not([dir=rtl]) .offcanvas.offcanvas-start {
            border-right: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
        }

        *[dir=rtl] .offcanvas.offcanvas-start {
            border-left: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
        }

        html:not([dir=rtl]) .offcanvas.offcanvas-start {
            transform: translateX(-100%);
        }

        *[dir=rtl] .offcanvas.offcanvas-start {
            transform: translateX(100%);
        }

        .offcanvas.offcanvas-end {
            top: 0;
            width: var(--cui-offcanvas-width);
            transform: translateX(100%);
        }

        html:not([dir=rtl]) .offcanvas.offcanvas-end {
            right: 0;
        }

        *[dir=rtl] .offcanvas.offcanvas-end {
            left: 0;
        }

        html:not([dir=rtl]) .offcanvas.offcanvas-end {
            border-left: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
        }

        *[dir=rtl] .offcanvas.offcanvas-end {
            border-right: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
        }

        .offcanvas.offcanvas-top {
            top: 0;
            right: 0;
            left: 0;
            height: var(--cui-offcanvas-height);
            max-height: 100%;
            border-bottom: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            transform: translateY(-100%);
        }

        .offcanvas.offcanvas-bottom {
            right: 0;
            left: 0;
            height: var(--cui-offcanvas-height);
            max-height: 100%;
            border-top: var(--cui-offcanvas-border-width) solid var(--cui-offcanvas-border-color);
            transform: translateY(100%);
        }

        .offcanvas.showing,
        .offcanvas.show:not(.hiding) {
            transform: none !important;
        }

        .offcanvas.showing,
        .offcanvas.hiding,
        .offcanvas.show {
            visibility: visible;
        }

        .offcanvas-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1040;
            width: 100vw;
            height: 100vh;
            background-color: #000015;
            background-color: var(--cui-offcanvas-backdrop-bg, #000015);
        }

        .offcanvas-backdrop.fade {
            opacity: 0;
        }

        .offcanvas-backdrop.show {
            opacity: 0.5;
        }

        .offcanvas-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: var(--cui-offcanvas-padding-y) var(--cui-offcanvas-padding-x);
        }

        .offcanvas-header .btn-close {
            padding: calc(var(--cui-offcanvas-padding-y) * 0.5) calc(var(--cui-offcanvas-padding-x) * 0.5);
            margin-top: calc(-0.5 * var(--cui-offcanvas-padding-y));
            margin-bottom: calc(-0.5 * var(--cui-offcanvas-padding-y));
        }

        html:not([dir=rtl]) .offcanvas-header .btn-close {
            margin-right: calc(-0.5 * var(--cui-offcanvas-padding-x));
        }

        *[dir=rtl] .offcanvas-header .btn-close {
            margin-left: calc(-0.5 * var(--cui-offcanvas-padding-x));
        }

        .offcanvas-title {
            margin-bottom: 0;
            line-height: 1.5;
        }

        .offcanvas-body {
            flex-grow: 1;
            padding: var(--cui-offcanvas-padding-y) var(--cui-offcanvas-padding-x);
            overflow-y: auto;
        }

        .placeholder {
            display: inline-block;
            min-height: 1em;
            vertical-align: middle;
            cursor: wait;
            background-color: currentcolor;
            opacity: 0.5;
        }

        .placeholder.btn::before {
            display: inline-block;
            content: "";
        }

        .placeholder-xs {
            min-height: 0.6em;
        }

        .placeholder-sm {
            min-height: 0.8em;
        }

        .placeholder-lg {
            min-height: 1.2em;
        }

        .placeholder-glow .placeholder {
            animation: placeholder-glow 2s ease-in-out infinite;
        }

        @keyframes placeholder-glow {
            50% {
                opacity: 0.2;
            }
        }

        .placeholder-wave {
            -webkit-mask-image: linear-gradient(130deg, #000015 55%, rgba(0, 0, 0, 0.8) 75%, #000015 95%);
            mask-image: linear-gradient(130deg, #000015 55%, rgba(0, 0, 0, 0.8) 75%, #000015 95%);
            -webkit-mask-size: 200% 100%;
            mask-size: 200% 100%;
            animation: placeholder-wave 2s linear infinite;
        }

        @keyframes placeholder-wave {
            100% {
                -webkit-mask-position: -200% 0%;
                mask-position: -200% 0%;
            }
        }

        .avatar {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            vertical-align: middle;
            border-radius: 50em;
            transition: margin 0.15s;
            width: 2rem;
            height: 2rem;
            font-size: 0.8rem;
        }

        @media (prefers-reduced-motion: reduce) {
            .avatar {
                transition: none;
            }
        }

        .avatar .avatar-status {
            width: 0.5333333333rem;
            height: 0.5333333333rem;
        }

        .avatar-img {
            width: 100%;
            height: auto;
            border-radius: 50em;
        }

        .avatar-status {
            position: absolute;
            bottom: 0;
            display: block;
            border: 1px solid #fff;
            border-radius: 50em;
        }

        html:not([dir=rtl]) .avatar-status {
            right: 0;
        }

        *[dir=rtl] .avatar-status {
            left: 0;
        }

        .avatar-sm {
            width: 1.5rem;
            height: 1.5rem;
            font-size: 0.6rem;
        }

        .avatar-sm .avatar-status {
            width: 0.4rem;
            height: 0.4rem;
        }

        .avatar-md {
            width: 2.5rem;
            height: 2.5rem;
            font-size: 1rem;
        }

        .avatar-md .avatar-status {
            width: 0.6666666667rem;
            height: 0.6666666667rem;
        }

        .avatar-lg {
            width: 3rem;
            height: 3rem;
            font-size: 1.2rem;
        }

        .avatar-lg .avatar-status {
            width: 0.8rem;
            height: 0.8rem;
        }

        .avatar-xl {
            width: 4rem;
            height: 4rem;
            font-size: 1.6rem;
        }

        .avatar-xl .avatar-status {
            width: 1.0666666667rem;
            height: 1.0666666667rem;
        }

        .avatars-stack {
            display: flex;
        }

        html:not([dir=rtl]) .avatars-stack .avatar {
            margin-right: -0.8rem;
        }

        *[dir=rtl] .avatars-stack .avatar {
            margin-left: -0.8rem;
        }

        html:not([dir=rtl]) .avatars-stack .avatar:hover {
            margin-right: 0;
        }

        *[dir=rtl] .avatars-stack .avatar:hover {
            margin-left: 0;
        }

        html:not([dir=rtl]) .avatars-stack .avatar-sm {
            margin-right: -0.6rem;
        }

        *[dir=rtl] .avatars-stack .avatar-sm {
            margin-left: -0.6rem;
        }

        html:not([dir=rtl]) .avatars-stack .avatar-md {
            margin-right: -1rem;
        }

        *[dir=rtl] .avatars-stack .avatar-md {
            margin-left: -1rem;
        }

        html:not([dir=rtl]) .avatars-stack .avatar-lg {
            margin-right: -1.2rem;
        }

        *[dir=rtl] .avatars-stack .avatar-lg {
            margin-left: -1.2rem;
        }

        html:not([dir=rtl]) .avatars-stack .avatar-xl {
            margin-right: -1.6rem;
        }

        *[dir=rtl] .avatars-stack .avatar-xl {
            margin-left: -1.6rem;
        }

        .callout {
            --cui-callout-padding-x: 1rem;
            --cui-callout-padding-y: 1rem;
            --cui-callout-margin-x: 0;
            --cui-callout-margin-y: 1rem;
            --cui-callout-border-width: 1px;
            --cui-callout-border-color: #d8dbe0;
            --cui-callout-border-left-width: 4px;
            --cui-callout-border-radius: 0.375rem;
            padding: var(--cui-callout-padding-y) var(--cui-callout-padding-x);
            margin: var(--cui-callout-margin-y) var(--cui-callout-margin-x);
            border: var(--cui-callout-border-width) solid var(--cui-callout-border-color);
            border-radius: var(--cui-callout-border-radius);
        }

        html:not([dir=rtl]) .callout {
            border-left-width: var(--cui-callout-border-left-width);
        }

        *[dir=rtl] .callout {
            border-right-width: var(--cui-callout-border-right-width);
        }

        html:not([dir=rtl]) .callout {
            border-left-color: var(--cui-callout-border-left-color);
        }

        *[dir=rtl] .callout {
            border-right-color: var(--cui-callout-border-right-color);
        }

        .callout-primary {
            --cui-callout-border-left-color: #321fdb;
        }

        .callout-secondary {
            --cui-callout-border-left-color: #9da5b1;
        }

        .callout-success {
            --cui-callout-border-left-color: #2eb85c;
        }

        .callout-danger {
            --cui-callout-border-left-color: #e55353;
        }

        .callout-warning {
            --cui-callout-border-left-color: #f9b115;
        }

        .callout-info {
            --cui-callout-border-left-color: #39f;
        }

        .callout-light {
            --cui-callout-border-left-color: #ebedef;
        }

        .callout-dark {
            --cui-callout-border-left-color: #4f5d73;
        }

        .footer {
            --cui-footer-min-height: 3rem;
            --cui-footer-padding-x: 1rem;
            --cui-footer-padding-y: 0.5rem;
            --cui-footer-color: rgba(44, 56, 74, 0.95);
            --cui-footer-bg: #ebedef;
            --cui-footer-border-color: #d8dbe0;
            --cui-footer-border: 1px solid var(--cui-footer-border-color);
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            min-height: var(--cui-footer-min-height);
            padding: var(--cui-footer-padding-y) var(--cui-footer-padding-x);
            color: var(--cui-footer-color);
            background: var(--cui-footer-bg);
            border-top: var(--cui-footer-border);
        }

        .footer-fixed {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
        }

        .footer-sticky {
            position: -webkit-sticky;
            position: sticky;
            bottom: 0;
            z-index: 1030;
        }

        .header {
            --cui-header-min-height: 4rem;
            --cui-header-padding-x: 0.5rem;
            --cui-header-padding-y: 0.5rem;
            --cui-header-bg: #fff;
            --cui-header-color: rgba(44, 56, 74, 0.681);
            --cui-header-border-color: #d8dbe0;
            --cui-header-border: 1px solid var(--cui-header-border-color);
            --cui-header-hover-color: rgba(44, 56, 74, 0.95);
            --cui-header-disabled-color: rgba(44, 56, 74, 0.38);
            --cui-header-active-color: rgba(44, 56, 74, 0.95);
            --cui-header-brand-padding-y: 0.3125rem;
            --cui-header-brand-color: #4f5d73;
            --cui-header-brand-hover-color: #475468;
            --cui-header-toggler-padding-x: 0.75rem;
            --cui-header-toggler-padding-y: 0.25rem;
            --cui-header-toggler-bg: transparent;
            --cui-header-toggler-color: rgba(44, 56, 74, 0.681);
            --cui-header-toggler-border-radius: 0.375rem;
            --cui-header-toggler-hover-color: rgba(44, 56, 74, 0.95);
            --cui-header-toggler-icon-bg: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%2844, 56, 74, 0.681%29' stroke-width='2.25' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
            --cui-header-toggler-hover-icon-bg: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%2844, 56, 74, 0.95%29' stroke-width='2.25' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
            --cui-header-nav-link-padding-x: 0.5rem;
            --cui-header-nav-link-padding-y: 0.5rem;
            --cui-header-divider-border-color: #d8dbe0;
            --cui-header-divider-border: 1px solid var(--cui-header-divider-border-color);
            --cui-subheader-min-height: 3rem;
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            min-height: var(--cui-header-min-height);
            padding: var(--cui-header-padding-y) var(--cui-header-padding-x);
            background: var(--cui-header-bg);
            border-bottom: var(--cui-header-border);
        }

        .header>.container,
        .header>.container-fluid,
        .header>.container-sm,
        .header>.container-md,
        .header>.container-lg,
        .header>.container-xl,
        .header>.container-xxl,
        .header .navbar>.container,
        .header .navbar>.container-fluid,
        .header .navbar>.container-sm,
        .header .navbar>.container-md,
        .header .navbar>.container-lg,
        .header .navbar>.container-xl,
        .header .navbar>.container-xxl {
            display: flex;
            flex-wrap: inherit;
            align-items: center;
            justify-content: space-between;
        }

        .header .container:first-child,
        .header .container-fluid:first-child,
        .header .container-sm:first-child,
        .header .container-md:first-child,
        .header .container-lg:first-child,
        .header .container-xl:first-child,
        .header .container-xxl:first-child {
            min-height: calc(var(--cui-header-min-height) - 2 * var(--cui-header-padding-y));
        }

        .header .container:nth-child(n+2),
        .header .container-fluid:nth-child(n+2),
        .header .container-sm:nth-child(n+2),
        .header .container-md:nth-child(n+2),
        .header .container-lg:nth-child(n+2),
        .header .container-xl:nth-child(n+2),
        .header .container-xxl:nth-child(n+2) {
            min-height: calc(var(--cui-subheader-min-height) - 2 * var(--cui-header-padding-y));
        }

        .header.header-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1029;
        }

        .header-divider {
            flex-basis: calc(100% + 2 * var(--cui-header-padding-x));
            height: 0;
            margin: var(--cui-header-padding-y) calc(var(--cui-header-padding-x) * -1);
            border-top: var(--cui-header-divider-border);
        }

        .header-brand {
            padding-top: var(--cui-header-brand-padding-y);
            padding-bottom: var(--cui-header-brand-padding-y);
            font-size: 1.25rem;
            color: var(--cui-header-brand-color);
            text-decoration: none;
            white-space: nowrap;
        }

        html:not([dir=rtl]) .header-brand {
            margin-right: 1rem;
        }

        *[dir=rtl] .header-brand {
            margin-left: 1rem;
        }

        .header-brand:hover,
        .header-brand:focus {
            color: var(--cui-header-brand-hover-color);
        }

        .header-nav {
            display: flex;
            flex-direction: row;
            margin-bottom: 0;
            list-style: none;
        }

        html:not([dir=rtl]) .header-nav {
            padding-left: 0;
        }

        *[dir=rtl] .header-nav {
            padding-right: 0;
        }

        .header-nav .nav-link {
            padding: var(--cui-header-nav-link-padding-y) var(--cui-header-nav-link-padding-x);
            color: var(--cui-header-color);
        }

        .header-nav .nav-link:hover,
        .header-nav .nav-link:focus {
            color: var(--cui-header-hover-color);
        }

        .header-nav .nav-link.disabled {
            color: var(--cui-header-disabled-color);
        }

        .header-nav .show>.nav-link,
        .header-nav .nav-link.active {
            color: var(--cui-header-active-color);
        }

        .header-nav .dropdown-menu {
            position: absolute;
        }

        .header-text {
            padding-top: var(--cui-header-nav-link-padding-y);
            padding-bottom: var(--cui-header-nav-link-padding-y);
            color: var(--cui-header-color);
        }

        .header-text a {
            color: var(--cui-header-active-color);
        }

        .header-text a:hover,
        .header-text a:focus {
            color: var(--cui-header-active-color);
        }

        .header-toggler {
            padding: var(--cui-header-toggler-padding-y) var(--cui-header-toggler-padding-x);
            font-size: 1.25rem;
            color: var(--cui-header-toggler-color);
            background-color: var(--cui-header-toggler-bg);
            border: 0;
            border-radius: var(--cui-header-toggler-border-radius);
        }

        .header-toggler:hover {
            color: var(--cui-header-toggler-hover-color);
            text-decoration: none;
        }

        .header-toggler:focus {
            outline: 0;
        }

        .header-toggler:not(:disabled) {
            cursor: pointer;
        }

        .header-toggler-icon {
            display: block;
            height: 1.5625rem;
            background-image: var(--cui-header-toggler-icon-bg);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 100% 100%;
        }

        .header-toggler-icon:hover {
            background-image: var(--cui-header-toggler-hover-icon-bg);
        }

        .icon {
            display: inline-block;
            color: inherit;
            text-align: center;
            vertical-align: -0.125rem;
            fill: currentcolor;
        }

        .icon:not(.icon-c-s):not(.icon-custom-size) {
            width: 1rem;
            height: 1rem;
            font-size: 1rem;
        }

        .icon:not(.icon-c-s):not(.icon-custom-size).icon-xxl {
            width: 2rem;
            height: 2rem;
            font-size: 2rem;
        }

        .icon:not(.icon-c-s):not(.icon-custom-size).icon-xl {
            width: 1.5rem;
            height: 1.5rem;
            font-size: 1.5rem;
        }

        .icon:not(.icon-c-s):not(.icon-custom-size).icon-lg {
            width: 1.25rem;
            height: 1.25rem;
            font-size: 1.25rem;
        }

        .icon:not(.icon-c-s):not(.icon-custom-size).icon-sm {
            width: 0.875rem;
            height: 0.875rem;
            font-size: 0.875rem;
        }

        .icon:not(.icon-c-s):not(.icon-custom-size).icon-3xl {
            width: 3rem;
            height: 3rem;
            font-size: 3rem;
        }

        .icon:not(.icon-c-s):not(.icon-custom-size).icon-4xl {
            width: 4rem;
            height: 4rem;
            font-size: 4rem;
        }

        .icon:not(.icon-c-s):not(.icon-custom-size).icon-5xl {
            width: 5rem;
            height: 5rem;
            font-size: 5rem;
        }

        .icon:not(.icon-c-s):not(.icon-custom-size).icon-6xl {
            width: 6rem;
            height: 6rem;
            font-size: 6rem;
        }

        .icon:not(.icon-c-s):not(.icon-custom-size).icon-7xl {
            width: 7rem;
            height: 7rem;
            font-size: 7rem;
        }

        .icon:not(.icon-c-s):not(.icon-custom-size).icon-8xl {
            width: 8rem;
            height: 8rem;
            font-size: 8rem;
        }

        .icon:not(.icon-c-s):not(.icon-custom-size).icon-9xl {
            width: 9rem;
            height: 9rem;
            font-size: 9rem;
        }

        .sidebar {
            --cui-sidebar-width: 16rem;
            --cui-sidebar-bg: #3c4b64;
            --cui-sidebar-padding-x: 0;
            --cui-sidebar-padding-y: 0;
            --cui-sidebar-color: rgba(255, 255, 255, 0.87);
            --cui-sidebar-border-width: 0;
            --cui-sidebar-border-color: transparent;
            --cui-sidebar-brand-color: rgba(255, 255, 255, 0.87);
            --cui-sidebar-brand-height: 4rem;
            --cui-sidebar-brand-bg: rgba(0, 0, 21, 0.2);
            --cui-sidebar-header-height: 4rem;
            --cui-sidebar-header-bg: rgba(0, 0, 21, 0.2);
            --cui-sidebar-header-padding-x: 1rem;
            --cui-sidebar-header-padding-y: 0.75rem;
            --cui-sidebar-footer-bg: rgba(0, 0, 21, 0.2);
            --cui-sidebar-footer-height: auto;
            --cui-sidebar-footer-padding-x: 1rem;
            --cui-sidebar-footer-padding-y: 0.75rem;
            --cui-sidebar-toggler-bg: rgba(0, 0, 21, 0.2);
            --cui-sidebar-toggler-height: 3rem;
            --cui-sidebar-toggler-indicator: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 11 14'%3E%3Cpath fill='%238a93a2' d='M9.148 2.352l-4.148 4.148 4.148 4.148q0.148 0.148 0.148 0.352t-0.148 0.352l-1.297 1.297q-0.148 0.148-0.352 0.148t-0.352-0.148l-5.797-5.797q-0.148-0.148-0.148-0.352t0.148-0.352l5.797-5.797q0.148-0.148 0.352-0.148t0.352 0.148l1.297 1.297q0.148 0.148 0.148 0.352t-0.148 0.352z'/%3E%3C/svg%3E");
            --cui-sidebar-toggler-indicator-width: 4rem;
            --cui-sidebar-toggler-indicator-height: 3rem;
            --cui-sidebar-toggler-hover-bg: rgba(0, 0, 0, 0.3);
            --cui-sidebar-toggler-indicator-hover: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 11 14'%3E%3Cpath fill='rgba%28255, 255, 255, 0.87%29' d='M9.148 2.352l-4.148 4.148 4.148 4.148q0.148 0.148 0.148 0.352t-0.148 0.352l-1.297 1.297q-0.148 0.148-0.352 0.148t-0.352-0.148l-5.797-5.797q-0.148-0.148-0.148-0.352t0.148-0.352l5.797-5.797q0.148-0.148 0.352-0.148t0.352 0.148l1.297 1.297q0.148 0.148 0.148 0.352t-0.148 0.352z'/%3E%3C/svg%3E");
            --cui-sidebar-narrow-width: 4rem;
            --cui-sidebar-nav-title-padding-x: 1rem;
            --cui-sidebar-nav-title-padding-y: 0.75rem;
            --cui-sidebar-nav-title-margin-top: 1rem;
            --cui-sidebar-nav-title-color: rgba(255, 255, 255, 0.6);
            --cui-sidebar-nav-link-padding-x: 1rem;
            --cui-sidebar-nav-link-padding-y: 0.8445rem;
            --cui-sidebar-nav-link-color: rgba(255, 255, 255, 0.6);
            --cui-sidebar-nav-link-bg: transparent;
            --cui-sidebar-nav-link-border-color: transparent;
            --cui-sidebar-nav-link-border: 0 solid var(--cui-sidebar-nav-link-border-color);
            --cui-sidebar-nav-link-border-radius: 0;
            --cui-sidebar-nav-link-active-color: rgba(255, 255, 255, 0.87);
            --cui-sidebar-nav-link-active-bg: rgba(255, 255, 255, 0.05);
            --cui-sidebar-nav-link-active-icon-color: rgba(255, 255, 255, 0.87);
            --cui-sidebar-nav-link-disabled-color: rgba(255, 255, 255, 0.38);
            --cui-sidebar-nav-link-disabled-icon-color: rgba(255, 255, 255, 0.6);
            --cui-sidebar-nav-link-hover-color: rgba(255, 255, 255, 0.87);
            --cui-sidebar-nav-link-hover-bg: rgba(255, 255, 255, 0.05);
            --cui-sidebar-nav-link-hover-icon-color: rgba(255, 255, 255, 0.87);
            --cui-sidebar-nav-icon-width: 4rem;
            --cui-sidebar-nav-icon-height: 1.25rem;
            --cui-sidebar-nav-icon-font-size: 1.25rem;
            --cui-sidebar-nav-link-icon-color: rgba(255, 255, 255, 0.6);
            --cui-sidebar-nav-group-bg: rgba(0, 0, 0, 0.2);
            --cui-sidebar-nav-group-items-padding-y: 0;
            --cui-sidebar-nav-group-items-padding-x: 0;
            --cui-sidebar-nav-group-indicator: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='rgba%28255, 255, 255, 0.6%29'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            --cui-sidebar-nav-group-indicator-hover: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='rgba%28255, 255, 255, 0.87%29'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            --cui-sidebar-nav-group-toggle-show-color: rgba(255, 255, 255, 0.6);
            position: relative;
            display: flex;
            flex: 0 0 var(--cui-sidebar-width);
            flex-direction: column;
            order: -1;
            width: var(--cui-sidebar-width);
            padding: var(--cui-sidebar-padding-y) var(--cui-sidebar-padding-x);
            color: var(--cui-sidebar-color);
            background: var(--cui-sidebar-bg);
            box-shadow: none;
            transition: margin-left 0.15s, margin-right 0.15s, box-shadow 0.075s, transform 0.15s, width 0.15s, z-index 0s ease 0.15s;
        }

        html:not([dir=rtl]) .sidebar {
            border-right: var(--cui-sidebar-border-width) solid var(--cui-sidebar-border-color);
        }

        *[dir=rtl] .sidebar {
            border-left: var(--cui-sidebar-border-width) solid var(--cui-sidebar-border-color);
        }

        @media (prefers-reduced-motion: reduce) {
            .sidebar {
                transition: none;
            }
        }

        html:not([dir=rtl]) .sidebar:not(.sidebar-end) {
            margin-left: 0;
        }

        *[dir=rtl] .sidebar:not(.sidebar-end) {
            margin-right: 0;
        }

        .sidebar:not(.sidebar-end)~* {
            --cui-sidebar-occupy-start: 16rem;
        }

        .sidebar.sidebar-end {
            order: 99;
        }

        html:not([dir=rtl]) .sidebar.sidebar-end {
            margin-right: 0;
        }

        *[dir=rtl] .sidebar.sidebar-end {
            margin-left: 0;
        }

        .sidebar.sidebar-end~* {
            --cui-sidebar-occupy-end: 16rem;
        }

        .sidebar[class*=bg-] {
            border-color: rgba(0, 0, 21, 0.1);
        }

        .sidebar.sidebar-sm {
            --cui-sidebar-width: 12rem;
        }

        @media (min-width: 768px) {
            .sidebar.sidebar-sm:not(.sidebar-end):not(.hide)~* {
                --cui-sidebar-occupy-start: 12rem;
            }

            .sidebar.sidebar-sm.sidebar-end:not(.hide)~* {
                --cui-sidebar-occupy-end: 12rem;
            }
        }

        .sidebar.sidebar-lg {
            --cui-sidebar-width: 20rem;
        }

        @media (min-width: 768px) {
            .sidebar.sidebar-lg:not(.sidebar-end):not(.hide)~* {
                --cui-sidebar-occupy-start: 20rem;
            }

            .sidebar.sidebar-lg.sidebar-end:not(.hide)~* {
                --cui-sidebar-occupy-end: 20rem;
            }
        }

        .sidebar.sidebar-xl {
            --cui-sidebar-width: 24rem;
        }

        @media (min-width: 768px) {
            .sidebar.sidebar-xl:not(.sidebar-end):not(.hide)~* {
                --cui-sidebar-occupy-start: 24rem;
            }

            .sidebar.sidebar-xl.sidebar-end:not(.hide)~* {
                --cui-sidebar-occupy-end: 24rem;
            }
        }

        @media (min-width: 768px) {
            html:not([dir=rtl]) .sidebar.hide:not(.sidebar-end) {
                margin-left: calc(-1 * var(--cui-sidebar-width));
            }

            *[dir=rtl] .sidebar.hide:not(.sidebar-end) {
                margin-right: calc(-1 * var(--cui-sidebar-width));
            }

            .sidebar.hide:not(.sidebar-end)~* {
                --cui-sidebar-occupy-start: 0;
            }

            html:not([dir=rtl]) .sidebar.hide.sidebar-end {
                margin-right: calc(-1 * var(--cui-sidebar-width));
            }

            *[dir=rtl] .sidebar.hide.sidebar-end {
                margin-left: calc(-1 * var(--cui-sidebar-width));
            }

            .sidebar.hide.sidebar-end~* {
                --cui-sidebar-occupy-end: 0;
            }
        }

        @media (min-width: 768px) {
            .sidebar.sidebar-fixed {
                position: fixed;
                top: 0;
                bottom: 0;
                z-index: 1030;
            }

            html:not([dir=rtl]) .sidebar.sidebar-fixed:not(.sidebar-end) {
                left: 0;
            }

            *[dir=rtl] .sidebar.sidebar-fixed:not(.sidebar-end) {
                right: 0;
            }

            html:not([dir=rtl]) .sidebar.sidebar-fixed.sidebar-end {
                right: 0;
            }

            *[dir=rtl] .sidebar.sidebar-fixed.sidebar-end {
                left: 0;
            }
        }

        @media (min-width: 768px) {
            .sidebar.sidebar-sticky {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                height: 100vh;
            }
        }

        .sidebar.sidebar-overlaid {
            position: fixed;
            top: 0;
            bottom: 0;
            z-index: 1032;
        }

        html:not([dir=rtl]) .sidebar.sidebar-overlaid:not(.sidebar-end) {
            left: 0;
        }

        *[dir=rtl] .sidebar.sidebar-overlaid:not(.sidebar-end) {
            right: 0;
        }

        .sidebar.sidebar-overlaid:not(.sidebar-end)~* {
            --cui-sidebar-occupy-start: 0;
        }

        html:not([dir=rtl]) .sidebar.sidebar-overlaid.sidebar-end {
            right: 0;
        }

        *[dir=rtl] .sidebar.sidebar-overlaid.sidebar-end {
            left: 0;
        }

        .sidebar.sidebar-overlaid.sidebar-end~* {
            --cui-sidebar-occupy-end: 0;
        }

        @media (max-width: 767.98px) {
            .sidebar {
                --cui-is-mobile: true;
                position: fixed;
                top: 0;
                bottom: 0;
                z-index: 1031;
            }

            html:not([dir=rtl]) .sidebar:not(.sidebar-end) {
                left: 0;
            }

            *[dir=rtl] .sidebar:not(.sidebar-end) {
                right: 0;
            }

            .sidebar:not(.sidebar-end)~* {
                --cui-sidebar-occupy-start: 0 !important;
            }

            html:not([dir=rtl]) .sidebar:not(.sidebar-end):not(.show) {
                margin-left: calc(-1 * var(--cui-sidebar-width));
            }

            *[dir=rtl] .sidebar:not(.sidebar-end):not(.show) {
                margin-right: calc(-1 * var(--cui-sidebar-width));
            }

            html:not([dir=rtl]) .sidebar.sidebar-end {
                right: 0;
            }

            *[dir=rtl] .sidebar.sidebar-end {
                left: 0;
            }

            .sidebar.sidebar-end~* {
                --cui-sidebar-occupy-end: 0 !important;
            }

            html:not([dir=rtl]) .sidebar.sidebar-end:not(.show) {
                margin-right: calc(-1 * var(--cui-sidebar-width));
            }

            *[dir=rtl] .sidebar.sidebar-end:not(.show) {
                margin-left: calc(-1 * var(--cui-sidebar-width));
            }
        }

        .sidebar-close {
            position: absolute;
            top: 0;
            width: var(--cui-sidebar-width);
            height: var(--cui-sidebar-header-height);
            color: var(--cui-sidebar-color);
            background: transparent;
            border: 0;
        }

        html:not([dir=rtl]) .sidebar-close {
            right: 0;
        }

        *[dir=rtl] .sidebar-close {
            left: 0;
        }

        .sidebar-close:hover {
            text-decoration: none;
        }

        .sidebar-close:focus {
            outline: 0;
        }

        .sidebar-brand {
            display: flex;
            flex: 0 0 var(--cui-sidebar-brand-height);
            align-items: center;
            justify-content: center;
            color: var(--cui-sidebar-brand-color);
            background: var(--cui-sidebar-brand-bg);
        }

        .sidebar-brand .sidebar-brand-narrow {
            display: none;
        }

        .sidebar-header {
            flex: 0 0 var(--cui-sidebar-header-height);
            padding: var(--cui-sidebar-header-padding-y) var(--cui-sidebar-header-padding-x);
            text-align: center;
            background: var(--cui-sidebar-header-bg);
            transition: height 0.15s, padding 0.15s;
        }

        @media (prefers-reduced-motion: reduce) {
            .sidebar-header {
                transition: none;
            }
        }

        .sidebar-header .nav-link {
            display: flex;
            align-items: center;
            min-height: var(--cui-sidebar-header-height);
        }

        .sidebar-footer {
            flex: 0 0 var(--cui-sidebar-footer-height);
            padding: var(--cui-sidebar-footer-padding-y) var(--cui-sidebar-footer-padding-x);
            background: var(--cui-sidebar-footer-bg);
            transition: height 0.15s, padding 0.15s;
        }

        @media (prefers-reduced-motion: reduce) {
            .sidebar-footer {
                transition: none;
            }
        }

        .sidebar-toggler {
            display: flex;
            flex: 0 0 var(--cui-sidebar-toggler-height);
            justify-content: flex-end;
            width: inherit;
            padding: 0;
            cursor: pointer;
            background-color: var(--cui-sidebar-toggler-bg);
            border: 0;
        }

        @media (max-width: 767.98px) {
            .sidebar-toggler {
                display: none;
            }
        }

        .sidebar-toggler::before {
            display: block;
            width: var(--cui-sidebar-toggler-indicator-width);
            height: var(--cui-sidebar-toggler-indicator-height);
            content: "";
            background-image: var(--cui-sidebar-toggler-indicator);
            background-repeat: no-repeat;
            background-position: center;
            background-size: calc(var(--cui-sidebar-toggler-indicator-height) * 0.25);
            transition: transform 0.15s;
        }

        @media (prefers-reduced-motion: reduce) {
            .sidebar-toggler::before {
                transition: none;
            }
        }

        *[dir=rtl] .sidebar-toggler::before {
            transform: rotate(-180deg);
        }

        .sidebar-toggler:focus {
            outline: 0;
        }

        .sidebar-toggler:hover {
            background-color: var(--cui-sidebar-toggler-hover-bg);
        }

        .sidebar-toggler:hover::before {
            background-image: var(--cui-sidebar-toggler-indicator-hover);
        }

        .sidebar-end .sidebar-toggler {
            justify-content: flex-start;
        }

        .sidebar-end .sidebar-toggler::before {
            transform: rotate(-180deg);
        }

        .sidebar-backdrop {
            --cui-backdrop-zindex: 1030;
            --cui-backdrop-bg: #000015;
            --cui-backdrop-opacity: 0.5;
        }

        @media (max-width: 767.98px) {
            .sidebar-backdrop {
                position: fixed;
                top: 0;
                left: 0;
                z-index: var(--cui-backdrop-zindex);
                width: 100vw;
                height: 100vh;
                background-color: var(--cui-backdrop-bg);
            }

            .sidebar-backdrop.fade {
                opacity: 0;
            }

            .sidebar-backdrop.show {
                opacity: var(--cui-backdrop-opacity);
            }
        }

        .sidebar-nav {
            position: relative;
            display: flex;
            flex: 1 1;
            flex-direction: column;
            padding: 0;
            margin-bottom: 0;
            overflow-x: hidden;
            overflow-y: auto;
            list-style: none;
        }

        .sidebar-nav .nav-title {
            padding: var(--cui-sidebar-nav-title-padding-y) var(--cui-sidebar-nav-title-padding-x);
            margin-top: var(--cui-sidebar-nav-title-margin-top);
            font-size: 80%;
            font-weight: 700;
            color: var(--cui-sidebar-nav-title-color);
            text-transform: uppercase;
            transition: height 0.15s, margin 0.15s;
        }

        @media (prefers-reduced-motion: reduce) {
            .sidebar-nav .nav-title {
                transition: none;
            }
        }

        .sidebar-nav .nav-link {
            display: flex;
            flex: 1 1;
            align-items: center;
            padding: var(--cui-sidebar-nav-link-padding-y) var(--cui-sidebar-nav-link-padding-x);
            color: var(--cui-sidebar-nav-link-color);
            text-decoration: none;
            white-space: nowrap;
            background: var(--cui-sidebar-nav-link-bg);
            border: var(--cui-sidebar-nav-link-border);
            border-radius: var(--cui-sidebar-nav-link-border-radius);
            transition: background 0.15s ease, color 0.15s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .sidebar-nav .nav-link {
                transition: none;
            }
        }

        .sidebar-nav .nav-link.active {
            color: var(--cui-sidebar-nav-link-active-color);
            background: var(--cui-sidebar-nav-link-active-bg);
        }

        .sidebar-nav .nav-link.active .nav-icon {
            color: var(--cui-sidebar-nav-link-active-icon-color);
        }

        .sidebar-nav .nav-link.disabled {
            color: var(--cui-sidebar-nav-link-disabled-color);
            pointer-events: none;
            cursor: not-allowed;
            background: transparent;
        }

        .sidebar-nav .nav-link.disabled .nav-icon {
            color: var(--cui-sidebar-nav-link-disabled-icon-color);
        }

        .sidebar-nav .nav-link.disabled:hover {
            color: var(--cui-sidebar-nav-link-disabled-color);
        }

        .sidebar-nav .nav-link.disabled:hover .nav-icon {
            color: var(--cui-sidebar-nav-link-disabled-icon-color);
        }

        .sidebar-nav .nav-link.disabled:hover.nav-dropdown-toggle::after {
            background-image: var(--cui-sidebar-nav-group-indicator-hover);
        }

        @media (hover: hover),
        (-ms-high-contrast: none) {
            .sidebar-nav .nav-link:hover {
                color: var(--cui-sidebar-nav-link-hover-color);
                text-decoration: none;
                background: var(--cui-sidebar-nav-link-hover-bg);
            }

            .sidebar-nav .nav-link:hover .nav-icon {
                color: var(--cui-sidebar-nav-link-hover-icon-color);
            }

            .sidebar-nav .nav-link:hover.nav-group-toggle::after {
                background-image: var(--cui-sidebar-nav-group-indicator-hover);
            }
        }

        .sidebar-nav .nav-icon {
            flex: 0 0 var(--cui-sidebar-nav-icon-width);
            height: var(--cui-sidebar-nav-icon-height);
            font-size: var(--cui-sidebar-nav-icon-font-size);
            color: var(--cui-sidebar-nav-link-icon-color);
            text-align: center;
            pointer-events: none;
            fill: currentcolor;
            transition: inherit;
        }

        @media (prefers-reduced-motion: reduce) {
            .sidebar-nav .nav-icon {
                transition: none;
            }
        }

        html:not([dir=rtl]) .sidebar-nav .nav-icon:first-child {
            margin-left: calc(var(--cui-sidebar-nav-link-padding-x) * -1);
        }

        *[dir=rtl] .sidebar-nav .nav-icon:first-child {
            margin-right: calc(var(--cui-sidebar-nav-link-padding-x) * -1);
        }

        .sidebar-nav svg.nav-icon {
            overflow: hidden;
        }

        .sidebar-nav .nav-group {
            position: relative;
            transition: background 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .sidebar-nav .nav-group {
                transition: none;
            }
        }

        .sidebar-nav .nav-group .nav-group-items {
            padding: var(--cui-sidebar-nav-group-items-padding-y) var(--cui-sidebar-nav-group-items-padding-x);
            overflow: hidden;
            transition: height 0.15s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .sidebar-nav .nav-group .nav-group-items {
                transition: none;
            }
        }

        .sidebar-nav .nav-group:not(.show) .nav-group-items {
            display: none;
        }

        .sidebar-nav .nav-group.show {
            background: var(--cui-sidebar-nav-group-bg);
        }

        .sidebar-nav .nav-group.show .nav-group-toggle {
            color: var(--cui-sidebar-nav-group-toggle-show-color);
        }

        .sidebar-nav .nav-group.show>.nav-group-toggle::after {
            transform: rotate(180deg);
        }

        .sidebar-nav .nav-group.show+.show {
            margin-top: 1px;
        }

        .sidebar-nav .nav-group-toggle {
            cursor: pointer;
        }

        .sidebar-nav .nav-group-toggle::after {
            display: block;
            flex: 0 1 12px;
            height: 12px;
            content: "";
            background-image: var(--cui-sidebar-nav-group-indicator);
            background-repeat: no-repeat;
            background-position: center;
            transition: transform 0.15s;
        }

        html:not([dir=rtl]) .sidebar-nav .nav-group-toggle::after {
            margin-left: auto;
        }

        *[dir=rtl] .sidebar-nav .nav-group-toggle::after {
            margin-right: auto;
        }

        @media (prefers-reduced-motion: reduce) {
            .sidebar-nav .nav-group-toggle::after {
                transition: none;
            }
        }

        .sidebar-nav .nav-group-items {
            padding: 0;
            list-style: none;
        }

        html:not([dir=rtl]) .sidebar-nav .nav-group-items .nav-link {
            padding-left: var(--cui-sidebar-nav-icon-width);
        }

        *[dir=rtl] .sidebar-nav .nav-group-items .nav-link {
            padding-right: var(--cui-sidebar-nav-icon-width);
        }

        html:not([dir=rtl]) .sidebar-nav .nav-group-items .nav-link .nav-icon {
            margin-left: calc(var(--cui-sidebar-nav-icon-width) * -1);
        }

        *[dir=rtl] .sidebar-nav .nav-group-items .nav-link .nav-icon {
            margin-right: calc(var(--cui-sidebar-nav-icon-width) * -1);
        }

        .sidebar-nav.compact .nav-link,
        .sidebar-nav .compact .nav-link {
            padding-top: calc(var(--cui-sidebar-nav-link-padding-y) * 0.5);
            padding-bottom: calc(var(--cui-sidebar-nav-link-padding-y) * 0.5);
        }

        @media (min-width: 768px) {

            .sidebar-narrow-unfoldable:not(:hover),
            .sidebar-narrow {
                z-index: 1031;
                flex: 0 0 var(--cui-sidebar-narrow-width);
                width: var(--cui-sidebar-narrow-width);
                padding-bottom: var(--cui-sidebar-toggler-height);
                overflow: visible;
            }

            .sidebar-fixed.sidebar-narrow-unfoldable:not(:hover),
            .sidebar-fixed.sidebar-narrow {
                z-index: 1031;
                width: var(--cui-sidebar-narrow-width);
            }

            .sidebar-narrow-unfoldable:not(:hover) .sidebar-brand-full,
            .sidebar-narrow .sidebar-brand-full {
                display: none;
            }

            .sidebar-narrow-unfoldable:not(:hover) .sidebar-brand-narrow,
            .sidebar-narrow .sidebar-brand-narrow {
                display: block;
            }

            .sidebar-narrow-unfoldable:not(:hover) .d-narrow-none,
            .sidebar-narrow .d-narrow-none,
            .sidebar-narrow-unfoldable:not(:hover) .nav-label,
            .sidebar-narrow .nav-label,
            .sidebar-narrow-unfoldable:not(:hover) .nav-title,
            .sidebar-narrow .nav-title,
            .sidebar-narrow-unfoldable:not(:hover) .nav-group-items,
            .sidebar-narrow .nav-group-items,
            .sidebar-narrow-unfoldable:not(:hover) .sidebar-footer,
            .sidebar-narrow .sidebar-footer,
            .sidebar-narrow-unfoldable:not(:hover) .sidebar-form,
            .sidebar-narrow .sidebar-form,
            .sidebar-narrow-unfoldable:not(:hover) .sidebar-header,
            .sidebar-narrow .sidebar-header {
                height: 0 !important;
                padding: 0;
                margin: 0;
                visibility: hidden;
                opacity: 0;
            }

            .sidebar-narrow-unfoldable:not(:hover) .sidebar-toggler,
            .sidebar-narrow .sidebar-toggler {
                position: fixed;
                bottom: 0;
            }

            html:not([dir=rtl]) .sidebar-narrow-unfoldable:not(:hover) .sidebar-toggler::before,
            html:not([dir=rtl]) .sidebar-narrow .sidebar-toggler::before {
                transform: rotate(-180deg);
            }

            *[dir=rtl] .sidebar-narrow-unfoldable:not(:hover) .sidebar-toggler::before,
            *[dir=rtl] .sidebar-narrow .sidebar-toggler::before {
                transform: rotate(0deg);
            }

            .sidebar-end.sidebar-narrow-unfoldable:not(:hover) .sidebar-toggler::before,
            .sidebar-end.sidebar-narrow .sidebar-toggler::before {
                transform: rotate(0deg);
            }
        }

        .sidebar-narrow:not(.sidebar-end)~* {
            --cui-sidebar-occupy-start: 4rem;
        }

        .sidebar-narrow.sidebar-end~* {
            --cui-sidebar-occupy-end: 4rem;
        }

        .sidebar-narrow-unfoldable {
            position: fixed;
            z-index: 1031;
        }

        .sidebar-narrow-unfoldable:not(.sidebar-end)~* {
            --cui-sidebar-occupy-start: 4rem;
        }

        .sidebar-narrow-unfoldable.sidebar-end~* {
            --cui-sidebar-occupy-end: 4rem;
        }

        html:not([dir=rtl]) .sidebar-narrow-unfoldable:hover .sidebar-toggler::before {
            transform: rotate(-180deg);
        }

        *[dir=rtl] .sidebar-narrow-unfoldable:hover .sidebar-toggler::before {
            transform: rotate(0deg);
        }

        .sidebar-narrow-unfoldable:hover.sidebar-end .sidebar-toggler::before {
            transform: rotate(0deg);
        }

        html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding.sidebar-narrow:not(.sidebar-end),
        html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding.sidebar-narrow-unfoldable:not(.sidebar-end) {
            margin-left: calc(var(--cui-sidebar-narrow-width) * -1);
        }

        *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding.sidebar-narrow:not(.sidebar-end),
        *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding.sidebar-narrow-unfoldable:not(.sidebar-end) {
            margin-right: calc(var(--cui-sidebar-narrow-width) * -1);
        }

        html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding.sidebar-narrow.sidebar-end,
        html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding.sidebar-narrow-unfoldable.sidebar-end {
            margin-right: calc(var(--cui-sidebar-narrow-width) * -1);
        }

        *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding.sidebar-narrow.sidebar-end,
        *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding.sidebar-narrow-unfoldable.sidebar-end {
            margin-left: calc(var(--cui-sidebar-narrow-width) * -1);
        }

        @media (max-width: 575.98px) {

            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-sm.sidebar-narrow:not(.sidebar-end),
            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-sm.sidebar-narrow-unfoldable:not(.sidebar-end) {
                margin-left: calc(var(--cui-sidebar-narrow-width) * -1);
            }

            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-sm.sidebar-narrow:not(.sidebar-end),
            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-sm.sidebar-narrow-unfoldable:not(.sidebar-end) {
                margin-right: calc(var(--cui-sidebar-narrow-width) * -1);
            }

            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-sm.sidebar-narrow.sidebar-end,
            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-sm.sidebar-narrow-unfoldable.sidebar-end {
                margin-right: calc(var(--cui-sidebar-narrow-width) * -1);
            }

            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-sm.sidebar-narrow.sidebar-end,
            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-sm.sidebar-narrow-unfoldable.sidebar-end {
                margin-left: calc(var(--cui-sidebar-narrow-width) * -1);
            }
        }

        @media (max-width: 767.98px) {

            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-md.sidebar-narrow:not(.sidebar-end),
            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-md.sidebar-narrow-unfoldable:not(.sidebar-end) {
                margin-left: calc(var(--cui-sidebar-narrow-width) * -1);
            }

            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-md.sidebar-narrow:not(.sidebar-end),
            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-md.sidebar-narrow-unfoldable:not(.sidebar-end) {
                margin-right: calc(var(--cui-sidebar-narrow-width) * -1);
            }

            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-md.sidebar-narrow.sidebar-end,
            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-md.sidebar-narrow-unfoldable.sidebar-end {
                margin-right: calc(var(--cui-sidebar-narrow-width) * -1);
            }

            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-md.sidebar-narrow.sidebar-end,
            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-md.sidebar-narrow-unfoldable.sidebar-end {
                margin-left: calc(var(--cui-sidebar-narrow-width) * -1);
            }
        }

        @media (max-width: 991.98px) {

            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-lg.sidebar-narrow:not(.sidebar-end),
            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-lg.sidebar-narrow-unfoldable:not(.sidebar-end) {
                margin-left: calc(var(--cui-sidebar-narrow-width) * -1);
            }

            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-lg.sidebar-narrow:not(.sidebar-end),
            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-lg.sidebar-narrow-unfoldable:not(.sidebar-end) {
                margin-right: calc(var(--cui-sidebar-narrow-width) * -1);
            }

            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-lg.sidebar-narrow.sidebar-end,
            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-lg.sidebar-narrow-unfoldable.sidebar-end {
                margin-right: calc(var(--cui-sidebar-narrow-width) * -1);
            }

            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-lg.sidebar-narrow.sidebar-end,
            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-lg.sidebar-narrow-unfoldable.sidebar-end {
                margin-left: calc(var(--cui-sidebar-narrow-width) * -1);
            }
        }

        @media (max-width: 1199.98px) {

            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-xl.sidebar-narrow:not(.sidebar-end),
            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-xl.sidebar-narrow-unfoldable:not(.sidebar-end) {
                margin-left: calc(var(--cui-sidebar-narrow-width) * -1);
            }

            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-xl.sidebar-narrow:not(.sidebar-end),
            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-xl.sidebar-narrow-unfoldable:not(.sidebar-end) {
                margin-right: calc(var(--cui-sidebar-narrow-width) * -1);
            }

            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-xl.sidebar-narrow.sidebar-end,
            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-xl.sidebar-narrow-unfoldable.sidebar-end {
                margin-right: calc(var(--cui-sidebar-narrow-width) * -1);
            }

            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-xl.sidebar-narrow.sidebar-end,
            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-xl.sidebar-narrow-unfoldable.sidebar-end {
                margin-left: calc(var(--cui-sidebar-narrow-width) * -1);
            }
        }

        @media (max-width: 1399.98px) {

            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-xxl.sidebar-narrow:not(.sidebar-end),
            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-xxl.sidebar-narrow-unfoldable:not(.sidebar-end) {
                margin-left: calc(var(--cui-sidebar-narrow-width) * -1);
            }

            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-xxl.sidebar-narrow:not(.sidebar-end),
            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-xxl.sidebar-narrow-unfoldable:not(.sidebar-end) {
                margin-right: calc(var(--cui-sidebar-narrow-width) * -1);
            }

            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-xxl.sidebar-narrow.sidebar-end,
            html:not([dir=rtl]) .sidebar:not(.show).sidebar-self-hiding-xxl.sidebar-narrow-unfoldable.sidebar-end {
                margin-right: calc(var(--cui-sidebar-narrow-width) * -1);
            }

            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-xxl.sidebar-narrow.sidebar-end,
            *[dir=rtl] .sidebar:not(.show).sidebar-self-hiding-xxl.sidebar-narrow-unfoldable.sidebar-end {
                margin-left: calc(var(--cui-sidebar-narrow-width) * -1);
            }
        }

        .subheader {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            min-height: 3rem;
            padding: 0.5rem 1rem;
            background: #fff;
            background: var(--cui-subheader-bg, #fff);
            border-bottom: 1px solid #d8dbe0;
            border-bottom: var(--cui-subheader-border-width, 1px) solid var(--cui-subheader-border-color, #d8dbe0);
        }

        .subheader-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1029;
        }

        .subheader-nav {
            display: flex;
            flex-direction: row;
            margin-bottom: 0;
            list-style: none;
        }

        html:not([dir=rtl]) .subheader-nav {
            padding-left: 0;
        }

        *[dir=rtl] .subheader-nav {
            padding-right: 0;
        }

        .subheader-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
            color: rgba(44, 56, 74, 0.681);
            color: var(--cui-subheader-color, rgba(44, 56, 74, 0.681));
        }

        .subheader-nav .nav-link:hover,
        .subheader-nav .nav-link:focus {
            color: rgba(44, 56, 74, 0.95);
            color: var(--cui-subheader-hover-color, rgba(44, 56, 74, 0.95));
        }

        .subheader-nav .nav-link.disabled {
            color: rgba(44, 56, 74, 0.38);
            color: var(--cui-subheader-disabled-color, rgba(44, 56, 74, 0.38));
        }

        .subheader-nav .show>.nav-link,
        .subheader-nav .nav-link.active {
            color: rgba(44, 56, 74, 0.95);
            color: var(--cui-subheader-active-color, rgba(44, 56, 74, 0.95));
        }

        .subheader-nav .dropdown-menu {
            position: absolute;
        }

        .subheader-text {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            color: rgba(44, 56, 74, 0.681);
            color: var(--cui-subheader-color, rgba(44, 56, 74, 0.681));
        }

        .subheader-text a {
            color: rgba(44, 56, 74, 0.95);
            color: var(--cui-subheader-active-color, rgba(44, 56, 74, 0.95));
        }

        .subheader-text a:hover,
        .subheader-text a:focus {
            color: rgba(44, 56, 74, 0.95);
            color: var(--cui-subheader-active-color, rgba(44, 56, 74, 0.95));
        }

        .clearfix::after {
            display: block;
            clear: both;
            content: "";
        }

        .text-bg-primary {
            color: rgba(255, 255, 255, 0.87) !important;
            background-color: RGBA(50, 31, 219, 1) !important;
            background-color: RGBA(50, 31, 219, var(--cui-bg-opacity, 1)) !important;
        }

        .text-bg-secondary {
            color: #000015 !important;
            background-color: RGBA(157, 165, 177, 1) !important;
            background-color: RGBA(157, 165, 177, var(--cui-bg-opacity, 1)) !important;
        }

        .text-bg-success {
            color: #000015 !important;
            background-color: RGBA(46, 184, 92, 1) !important;
            background-color: RGBA(46, 184, 92, var(--cui-bg-opacity, 1)) !important;
        }

        .text-bg-info {
            color: #000015 !important;
            background-color: RGBA(51, 153, 255, 1) !important;
            background-color: RGBA(51, 153, 255, var(--cui-bg-opacity, 1)) !important;
        }

        .text-bg-warning {
            color: rgba(44, 56, 74, 0.95) !important;
            background-color: RGBA(249, 177, 21, 1) !important;
            background-color: RGBA(249, 177, 21, var(--cui-bg-opacity, 1)) !important;
        }

        .text-bg-danger {
            color: #000015 !important;
            background-color: RGBA(229, 83, 83, 1) !important;
            background-color: RGBA(229, 83, 83, var(--cui-bg-opacity, 1)) !important;
        }

        .text-bg-light {
            color: rgba(44, 56, 74, 0.95) !important;
            background-color: RGBA(235, 237, 239, 1) !important;
            background-color: RGBA(235, 237, 239, var(--cui-bg-opacity, 1)) !important;
        }

        .text-bg-dark {
            color: rgba(255, 255, 255, 0.87) !important;
            background-color: RGBA(79, 93, 115, 1) !important;
            background-color: RGBA(79, 93, 115, var(--cui-bg-opacity, 1)) !important;
        }

        .link-primary {
            color: #321fdb !important;
        }

        .link-primary:hover,
        .link-primary:focus {
            color: #5b4ce2 !important;
        }

        .link-secondary {
            color: #9da5b1 !important;
        }

        .link-secondary:hover,
        .link-secondary:focus {
            color: #b1b7c1 !important;
        }

        .link-success {
            color: #2eb85c !important;
        }

        .link-success:hover,
        .link-success:focus {
            color: #58c67d !important;
        }

        .link-info {
            color: #39f !important;
        }

        .link-info:hover,
        .link-info:focus {
            color: #5cadff !important;
        }

        .link-warning {
            color: #f9b115 !important;
        }

        .link-warning:hover,
        .link-warning:focus {
            color: #c78e11 !important;
        }

        .link-danger {
            color: #e55353 !important;
        }

        .link-danger:hover,
        .link-danger:focus {
            color: #ea7575 !important;
        }

        .link-light {
            color: #ebedef !important;
        }

        .link-light:hover,
        .link-light:focus {
            color: #bcbebf !important;
        }

        .link-dark {
            color: #4f5d73 !important;
        }

        .link-dark:hover,
        .link-dark:focus {
            color: #727d8f !important;
        }

        .ratio {
            position: relative;
            width: 100%;
        }

        .ratio::before {
            display: block;
            padding-top: var(--cui-aspect-ratio);
            content: "";
        }

        .ratio>* {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
        }

        html:not([dir=rtl]) .ratio>* {
            left: 0;
        }

        *[dir=rtl] .ratio>* {
            right: 0;
        }

        .ratio-1x1 {
            --cui-aspect-ratio: 100%;
        }

        .ratio-4x3 {
            --cui-aspect-ratio: 75%;
        }

        .ratio-16x9 {
            --cui-aspect-ratio: 56.25%;
        }

        .ratio-21x9 {
            --cui-aspect-ratio: 42.8571428571%;
        }

        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;
        }

        .fixed-bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
        }

        .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020;
        }

        .sticky-bottom {
            position: -webkit-sticky;
            position: sticky;
            bottom: 0;
            z-index: 1020;
        }

        @media (min-width: 576px) {
            .sticky-sm-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020;
            }

            .sticky-sm-bottom {
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
                z-index: 1020;
            }
        }

        @media (min-width: 768px) {
            .sticky-md-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020;
            }

            .sticky-md-bottom {
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
                z-index: 1020;
            }
        }

        @media (min-width: 992px) {
            .sticky-lg-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020;
            }

            .sticky-lg-bottom {
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
                z-index: 1020;
            }
        }

        @media (min-width: 1200px) {
            .sticky-xl-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020;
            }

            .sticky-xl-bottom {
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
                z-index: 1020;
            }
        }

        @media (min-width: 1400px) {
            .sticky-xxl-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020;
            }

            .sticky-xxl-bottom {
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
                z-index: 1020;
            }
        }

        .hstack {
            display: flex;
            flex-direction: row;
            align-items: center;
            align-self: stretch;
        }

        .vstack {
            display: flex;
            flex: 1 1 auto;
            flex-direction: column;
            align-self: stretch;
        }

        .visually-hidden,
        .visually-hidden-focusable:not(:focus):not(:focus-within) {
            position: absolute !important;
            width: 1px !important;
            height: 1px !important;
            padding: 0 !important;
            margin: -1px !important;
            overflow: hidden !important;
            clip: rect(0, 0, 0, 0) !important;
            white-space: nowrap !important;
            border: 0 !important;
        }

        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            content: "";
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .vr {
            display: inline-block;
            align-self: stretch;
            width: 1px;
            min-height: 1em;
            padding: 0;
            background-color: currentcolor;
            opacity: 0.25;
        }

        .align-baseline {
            vertical-align: baseline !important;
        }

        .align-top {
            vertical-align: top !important;
        }

        .align-middle {
            vertical-align: middle !important;
        }

        .align-bottom {
            vertical-align: bottom !important;
        }

        .align-text-bottom {
            vertical-align: text-bottom !important;
        }

        .align-text-top {
            vertical-align: text-top !important;
        }

        html:not([dir=rtl]) .float-start {
            float: left !important;
        }

        *[dir=rtl] .float-start {
            float: right !important;
        }

        html:not([dir=rtl]) .float-end {
            float: right !important;
        }

        *[dir=rtl] .float-end {
            float: left !important;
        }

        html:not([dir=rtl]) .float-none {
            float: none !important;
        }

        *[dir=rtl] .float-none {
            float: none !important;
        }

        .opacity-0 {
            opacity: 0 !important;
        }

        .opacity-25 {
            opacity: 0.25 !important;
        }

        .opacity-50 {
            opacity: 0.5 !important;
        }

        .opacity-75 {
            opacity: 0.75 !important;
        }

        .opacity-100 {
            opacity: 1 !important;
        }

        .overflow-auto {
            overflow: auto !important;
        }

        .overflow-hidden {
            overflow: hidden !important;
        }

        .overflow-visible {
            overflow: visible !important;
        }

        .overflow-scroll {
            overflow: scroll !important;
        }

        .d-inline {
            display: inline !important;
        }

        .d-inline-block {
            display: inline-block !important;
        }

        .d-block {
            display: block !important;
        }

        .d-grid {
            display: grid !important;
        }

        .d-table {
            display: table !important;
        }

        .d-table-row {
            display: table-row !important;
        }

        .d-table-cell {
            display: table-cell !important;
        }

        .d-flex {
            display: flex !important;
        }

        .d-inline-flex {
            display: inline-flex !important;
        }

        .d-none {
            display: none !important;
        }

        .shadow {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 21, 0.15) !important;
        }

        .shadow-sm {
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 21, 0.075) !important;
        }

        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(0, 0, 21, 0.175) !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }

        .position-static {
            position: static !important;
        }

        .position-relative {
            position: relative !important;
        }

        .position-absolute {
            position: absolute !important;
        }

        .position-fixed {
            position: fixed !important;
        }

        .position-sticky {
            position: -webkit-sticky !important;
            position: sticky !important;
        }

        .top-0 {
            top: 0 !important;
        }

        .top-50 {
            top: 50% !important;
        }

        .top-100 {
            top: 100% !important;
        }

        .bottom-0 {
            bottom: 0 !important;
        }

        .bottom-50 {
            bottom: 50% !important;
        }

        .bottom-100 {
            bottom: 100% !important;
        }

        .start-0 {
            left: 0 !important;
        }

        .start-50 {
            left: 50% !important;
        }

        .start-100 {
            left: 100% !important;
        }

        .end-0 {
            right: 0 !important;
        }

        .end-50 {
            right: 50% !important;
        }

        .end-100 {
            right: 100% !important;
        }

        .translate-middle {
            transform: translate(-50%, -50%) !important;
        }

        .translate-middle-x {
            transform: translateX(-50%) !important;
        }

        .translate-middle-y {
            transform: translateY(-50%) !important;
        }

        .border {
            border: 1px solid #d8dbe0 !important;
            border: var(--cui-border-width) var(--cui-border-style) var(--cui-border-color) !important;
        }

        .border-0 {
            border: 0 !important;
        }

        .border-top {
            border-top: 1px solid #d8dbe0 !important;
            border-top: var(--cui-border-width) var(--cui-border-style) var(--cui-border-color) !important;
        }

        .border-top-0 {
            border-top: 0 !important;
        }

        html:not([dir=rtl]) .border-end {
            border-right: 1px solid #d8dbe0 !important;
            border-right: var(--cui-border-width) var(--cui-border-style) var(--cui-border-color) !important;
        }

        *[dir=rtl] .border-end {
            border-left: 1px solid #d8dbe0 !important;
            border-left: var(--cui-border-width) var(--cui-border-style) var(--cui-border-color) !important;
        }

        html:not([dir=rtl]) .border-end-0 {
            border-right: 0 !important;
        }

        *[dir=rtl] .border-end-0 {
            border-left: 0 !important;
        }

        .border-bottom {
            border-bottom: 1px solid #d8dbe0 !important;
            border-bottom: var(--cui-border-width) var(--cui-border-style) var(--cui-border-color) !important;
        }

        .border-bottom-0 {
            border-bottom: 0 !important;
        }

        html:not([dir=rtl]) .border-start {
            border-left: 1px solid #d8dbe0 !important;
            border-left: var(--cui-border-width) var(--cui-border-style) var(--cui-border-color) !important;
        }

        *[dir=rtl] .border-start {
            border-right: 1px solid #d8dbe0 !important;
            border-right: var(--cui-border-width) var(--cui-border-style) var(--cui-border-color) !important;
        }

        html:not([dir=rtl]) .border-start-0 {
            border-left: 0 !important;
        }

        *[dir=rtl] .border-start-0 {
            border-right: 0 !important;
        }

        .border-primary {
            --cui-border-opacity: 1;
            border-color: rgba(50, 31, 219, var(--cui-border-opacity)) !important;
            border-color: rgba(var(--cui-primary-rgb), var(--cui-border-opacity)) !important;
        }

        .border-secondary {
            --cui-border-opacity: 1;
            border-color: rgba(157, 165, 177, var(--cui-border-opacity)) !important;
            border-color: rgba(var(--cui-secondary-rgb), var(--cui-border-opacity)) !important;
        }

        .border-success {
            --cui-border-opacity: 1;
            border-color: rgba(46, 184, 92, var(--cui-border-opacity)) !important;
            border-color: rgba(var(--cui-success-rgb), var(--cui-border-opacity)) !important;
        }

        .border-info {
            --cui-border-opacity: 1;
            border-color: rgba(51, 153, 255, var(--cui-border-opacity)) !important;
            border-color: rgba(var(--cui-info-rgb), var(--cui-border-opacity)) !important;
        }

        .border-warning {
            --cui-border-opacity: 1;
            border-color: rgba(249, 177, 21, var(--cui-border-opacity)) !important;
            border-color: rgba(var(--cui-warning-rgb), var(--cui-border-opacity)) !important;
        }

        .border-danger {
            --cui-border-opacity: 1;
            border-color: rgba(229, 83, 83, var(--cui-border-opacity)) !important;
            border-color: rgba(var(--cui-danger-rgb), var(--cui-border-opacity)) !important;
        }

        .border-light {
            --cui-border-opacity: 1;
            border-color: rgba(235, 237, 239, var(--cui-border-opacity)) !important;
            border-color: rgba(var(--cui-light-rgb), var(--cui-border-opacity)) !important;
        }

        .border-dark {
            --cui-border-opacity: 1;
            border-color: rgba(79, 93, 115, var(--cui-border-opacity)) !important;
            border-color: rgba(var(--cui-dark-rgb), var(--cui-border-opacity)) !important;
        }

        .border-white {
            --cui-border-opacity: 1;
            border-color: rgba(255, 255, 255, var(--cui-border-opacity)) !important;
            border-color: rgba(var(--cui-white-rgb), var(--cui-border-opacity)) !important;
        }

        .border-top-primary {
            border-top-color: #321fdb !important;
        }

        .border-top-secondary {
            border-top-color: #9da5b1 !important;
        }

        .border-top-success {
            border-top-color: #2eb85c !important;
        }

        .border-top-info {
            border-top-color: #39f !important;
        }

        .border-top-warning {
            border-top-color: #f9b115 !important;
        }

        .border-top-danger {
            border-top-color: #e55353 !important;
        }

        .border-top-light {
            border-top-color: #ebedef !important;
        }

        .border-top-dark {
            border-top-color: #4f5d73 !important;
        }

        .border-top-white {
            border-top-color: #fff !important;
        }

        html:not([dir=rtl]) .border-end-primary {
            border-right-color: #321fdb !important;
        }

        *[dir=rtl] .border-end-primary {
            border-left-color: #321fdb !important;
        }

        html:not([dir=rtl]) .border-end-secondary {
            border-right-color: #9da5b1 !important;
        }

        *[dir=rtl] .border-end-secondary {
            border-left-color: #9da5b1 !important;
        }

        html:not([dir=rtl]) .border-end-success {
            border-right-color: #2eb85c !important;
        }

        *[dir=rtl] .border-end-success {
            border-left-color: #2eb85c !important;
        }

        html:not([dir=rtl]) .border-end-info {
            border-right-color: #39f !important;
        }

        *[dir=rtl] .border-end-info {
            border-left-color: #39f !important;
        }

        html:not([dir=rtl]) .border-end-warning {
            border-right-color: #f9b115 !important;
        }

        *[dir=rtl] .border-end-warning {
            border-left-color: #f9b115 !important;
        }

        html:not([dir=rtl]) .border-end-danger {
            border-right-color: #e55353 !important;
        }

        *[dir=rtl] .border-end-danger {
            border-left-color: #e55353 !important;
        }

        html:not([dir=rtl]) .border-end-light {
            border-right-color: #ebedef !important;
        }

        *[dir=rtl] .border-end-light {
            border-left-color: #ebedef !important;
        }

        html:not([dir=rtl]) .border-end-dark {
            border-right-color: #4f5d73 !important;
        }

        *[dir=rtl] .border-end-dark {
            border-left-color: #4f5d73 !important;
        }

        html:not([dir=rtl]) .border-end-white {
            border-right-color: #fff !important;
        }

        *[dir=rtl] .border-end-white {
            border-left-color: #fff !important;
        }

        .border-bottom-primary {
            border-bottom-color: #321fdb !important;
        }

        .border-bottom-secondary {
            border-bottom-color: #9da5b1 !important;
        }

        .border-bottom-success {
            border-bottom-color: #2eb85c !important;
        }

        .border-bottom-info {
            border-bottom-color: #39f !important;
        }

        .border-bottom-warning {
            border-bottom-color: #f9b115 !important;
        }

        .border-bottom-danger {
            border-bottom-color: #e55353 !important;
        }

        .border-bottom-light {
            border-bottom-color: #ebedef !important;
        }

        .border-bottom-dark {
            border-bottom-color: #4f5d73 !important;
        }

        .border-bottom-white {
            border-bottom-color: #fff !important;
        }

        html:not([dir=rtl]) .border-start-primary {
            border-left-color: #321fdb !important;
        }

        *[dir=rtl] .border-start-primary {
            border-right-color: #321fdb !important;
        }

        html:not([dir=rtl]) .border-start-secondary {
            border-left-color: #9da5b1 !important;
        }

        *[dir=rtl] .border-start-secondary {
            border-right-color: #9da5b1 !important;
        }

        html:not([dir=rtl]) .border-start-success {
            border-left-color: #2eb85c !important;
        }

        *[dir=rtl] .border-start-success {
            border-right-color: #2eb85c !important;
        }

        html:not([dir=rtl]) .border-start-info {
            border-left-color: #39f !important;
        }

        *[dir=rtl] .border-start-info {
            border-right-color: #39f !important;
        }

        html:not([dir=rtl]) .border-start-warning {
            border-left-color: #f9b115 !important;
        }

        *[dir=rtl] .border-start-warning {
            border-right-color: #f9b115 !important;
        }

        html:not([dir=rtl]) .border-start-danger {
            border-left-color: #e55353 !important;
        }

        *[dir=rtl] .border-start-danger {
            border-right-color: #e55353 !important;
        }

        html:not([dir=rtl]) .border-start-light {
            border-left-color: #ebedef !important;
        }

        *[dir=rtl] .border-start-light {
            border-right-color: #ebedef !important;
        }

        html:not([dir=rtl]) .border-start-dark {
            border-left-color: #4f5d73 !important;
        }

        *[dir=rtl] .border-start-dark {
            border-right-color: #4f5d73 !important;
        }

        html:not([dir=rtl]) .border-start-white {
            border-left-color: #fff !important;
        }

        *[dir=rtl] .border-start-white {
            border-right-color: #fff !important;
        }

        .border-1 {
            --cui-border-width: 1px;
        }

        .border-2 {
            --cui-border-width: 2px;
        }

        .border-3 {
            --cui-border-width: 3px;
        }

        .border-4 {
            --cui-border-width: 4px;
        }

        .border-5 {
            --cui-border-width: 5px;
        }

        .border-top-1 {
            border-top-width: 1px !important;
        }

        .border-top-2 {
            border-top-width: 2px !important;
        }

        .border-top-3 {
            border-top-width: 3px !important;
        }

        .border-top-4 {
            border-top-width: 4px !important;
        }

        .border-top-5 {
            border-top-width: 5px !important;
        }

        html:not([dir=rtl]) .border-end-1 {
            border-right-width: 1px !important;
        }

        *[dir=rtl] .border-end-1 {
            border-left-width: 1px !important;
        }

        html:not([dir=rtl]) .border-end-2 {
            border-right-width: 2px !important;
        }

        *[dir=rtl] .border-end-2 {
            border-left-width: 2px !important;
        }

        html:not([dir=rtl]) .border-end-3 {
            border-right-width: 3px !important;
        }

        *[dir=rtl] .border-end-3 {
            border-left-width: 3px !important;
        }

        html:not([dir=rtl]) .border-end-4 {
            border-right-width: 4px !important;
        }

        *[dir=rtl] .border-end-4 {
            border-left-width: 4px !important;
        }

        html:not([dir=rtl]) .border-end-5 {
            border-right-width: 5px !important;
        }

        *[dir=rtl] .border-end-5 {
            border-left-width: 5px !important;
        }

        .border-bottom-1 {
            border-bottom-width: 1px !important;
        }

        .border-bottom-2 {
            border-bottom-width: 2px !important;
        }

        .border-bottom-3 {
            border-bottom-width: 3px !important;
        }

        .border-bottom-4 {
            border-bottom-width: 4px !important;
        }

        .border-bottom-5 {
            border-bottom-width: 5px !important;
        }

        html:not([dir=rtl]) .border-start-1 {
            border-left-width: 1px !important;
        }

        *[dir=rtl] .border-start-1 {
            border-right-width: 1px !important;
        }

        html:not([dir=rtl]) .border-start-2 {
            border-left-width: 2px !important;
        }

        *[dir=rtl] .border-start-2 {
            border-right-width: 2px !important;
        }

        html:not([dir=rtl]) .border-start-3 {
            border-left-width: 3px !important;
        }

        *[dir=rtl] .border-start-3 {
            border-right-width: 3px !important;
        }

        html:not([dir=rtl]) .border-start-4 {
            border-left-width: 4px !important;
        }

        *[dir=rtl] .border-start-4 {
            border-right-width: 4px !important;
        }

        html:not([dir=rtl]) .border-start-5 {
            border-left-width: 5px !important;
        }

        *[dir=rtl] .border-start-5 {
            border-right-width: 5px !important;
        }

        .border-opacity-10 {
            --cui-border-opacity: 0.1;
        }

        .border-opacity-25 {
            --cui-border-opacity: 0.25;
        }

        .border-opacity-50 {
            --cui-border-opacity: 0.5;
        }

        .border-opacity-75 {
            --cui-border-opacity: 0.75;
        }

        .border-opacity-100 {
            --cui-border-opacity: 1;
        }

        .w-25 {
            width: 25% !important;
        }

        .w-50 {
            width: 50% !important;
        }

        .w-75 {
            width: 75% !important;
        }

        .w-100 {
            width: 100% !important;
        }

        .w-auto {
            width: auto !important;
        }

        .mw-100 {
            max-width: 100% !important;
        }

        .vw-100 {
            width: 100vw !important;
        }

        .min-vw-100 {
            min-width: 100vw !important;
        }

        .h-25 {
            height: 25% !important;
        }

        .h-50 {
            height: 50% !important;
        }

        .h-75 {
            height: 75% !important;
        }

        .h-100 {
            height: 100% !important;
        }

        .h-auto {
            height: auto !important;
        }

        .mh-100 {
            max-height: 100% !important;
        }

        .vh-100 {
            height: 100vh !important;
        }

        .min-vh-100 {
            min-height: 100vh !important;
        }

        .flex-fill {
            flex: 1 1 auto !important;
        }

        .flex-row {
            flex-direction: row !important;
        }

        .flex-column {
            flex-direction: column !important;
        }

        .flex-row-reverse {
            flex-direction: row-reverse !important;
        }

        .flex-column-reverse {
            flex-direction: column-reverse !important;
        }

        .flex-grow-0 {
            flex-grow: 0 !important;
        }

        .flex-grow-1 {
            flex-grow: 1 !important;
        }

        .flex-shrink-0 {
            flex-shrink: 0 !important;
        }

        .flex-shrink-1 {
            flex-shrink: 1 !important;
        }

        .flex-wrap {
            flex-wrap: wrap !important;
        }

        .flex-nowrap {
            flex-wrap: nowrap !important;
        }

        .flex-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }

        .justify-content-start {
            justify-content: flex-start !important;
        }

        .justify-content-end {
            justify-content: flex-end !important;
        }

        .justify-content-center {
            justify-content: center !important;
        }

        .justify-content-between {
            justify-content: space-between !important;
        }

        .justify-content-around {
            justify-content: space-around !important;
        }

        .justify-content-evenly {
            justify-content: space-evenly !important;
        }

        .align-items-start {
            align-items: flex-start !important;
        }

        .align-items-end {
            align-items: flex-end !important;
        }

        .align-items-center {
            align-items: center !important;
        }

        .align-items-baseline {
            align-items: baseline !important;
        }

        .align-items-stretch {
            align-items: stretch !important;
        }

        .align-content-start {
            align-content: flex-start !important;
        }

        .align-content-end {
            align-content: flex-end !important;
        }

        .align-content-center {
            align-content: center !important;
        }

        .align-content-between {
            align-content: space-between !important;
        }

        .align-content-around {
            align-content: space-around !important;
        }

        .align-content-stretch {
            align-content: stretch !important;
        }

        .align-self-auto {
            align-self: auto !important;
        }

        .align-self-start {
            align-self: flex-start !important;
        }

        .align-self-end {
            align-self: flex-end !important;
        }

        .align-self-center {
            align-self: center !important;
        }

        .align-self-baseline {
            align-self: baseline !important;
        }

        .align-self-stretch {
            align-self: stretch !important;
        }

        .order-first {
            order: -1 !important;
        }

        .order-0 {
            order: 0 !important;
        }

        .order-1 {
            order: 1 !important;
        }

        .order-2 {
            order: 2 !important;
        }

        .order-3 {
            order: 3 !important;
        }

        .order-4 {
            order: 4 !important;
        }

        .order-5 {
            order: 5 !important;
        }

        .order-last {
            order: 6 !important;
        }

        .m-0 {
            margin: 0 !important;
        }

        .m-1 {
            margin: 0.25rem !important;
        }

        .m-2 {
            margin: 0.5rem !important;
        }

        .m-3 {
            margin: 1rem !important;
        }

        .m-4 {
            margin: 1.5rem !important;
        }

        .m-5 {
            margin: 3rem !important;
        }

        .m-auto {
            margin: auto !important;
        }

        .mx-0 {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .mx-1 {
            margin-right: 0.25rem !important;
            margin-left: 0.25rem !important;
        }

        .mx-2 {
            margin-right: 0.5rem !important;
            margin-left: 0.5rem !important;
        }

        .mx-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important;
        }

        .mx-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important;
        }

        .mx-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important;
        }

        .mx-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .my-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .my-1 {
            margin-top: 0.25rem !important;
            margin-bottom: 0.25rem !important;
        }

        .my-2 {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important;
        }

        .my-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }

        .my-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important;
        }

        .my-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important;
        }

        .my-auto {
            margin-top: auto !important;
            margin-bottom: auto !important;
        }

        .mt-0 {
            margin-top: 0 !important;
        }

        .mt-1 {
            margin-top: 0.25rem !important;
        }

        .mt-2 {
            margin-top: 0.5rem !important;
        }

        .mt-3 {
            margin-top: 1rem !important;
        }

        .mt-4 {
            margin-top: 1.5rem !important;
        }

        .mt-5 {
            margin-top: 3rem !important;
        }

        .mt-auto {
            margin-top: auto !important;
        }

        html:not([dir=rtl]) .me-0 {
            margin-right: 0 !important;
        }

        *[dir=rtl] .me-0 {
            margin-left: 0 !important;
        }

        html:not([dir=rtl]) .me-1 {
            margin-right: 0.25rem !important;
        }

        *[dir=rtl] .me-1 {
            margin-left: 0.25rem !important;
        }

        html:not([dir=rtl]) .me-2 {
            margin-right: 0.5rem !important;
        }

        *[dir=rtl] .me-2 {
            margin-left: 0.5rem !important;
        }

        html:not([dir=rtl]) .me-3 {
            margin-right: 1rem !important;
        }

        *[dir=rtl] .me-3 {
            margin-left: 1rem !important;
        }

        html:not([dir=rtl]) .me-4 {
            margin-right: 1.5rem !important;
        }

        *[dir=rtl] .me-4 {
            margin-left: 1.5rem !important;
        }

        html:not([dir=rtl]) .me-5 {
            margin-right: 3rem !important;
        }

        *[dir=rtl] .me-5 {
            margin-left: 3rem !important;
        }

        html:not([dir=rtl]) .me-auto {
            margin-right: auto !important;
        }

        *[dir=rtl] .me-auto {
            margin-left: auto !important;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }

        .mb-1 {
            margin-bottom: 0.25rem !important;
        }

        .mb-2 {
            margin-bottom: 0.5rem !important;
        }

        .mb-3 {
            margin-bottom: 1rem !important;
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }

        .mb-5 {
            margin-bottom: 3rem !important;
        }

        .mb-auto {
            margin-bottom: auto !important;
        }

        html:not([dir=rtl]) .ms-0 {
            margin-left: 0 !important;
        }

        *[dir=rtl] .ms-0 {
            margin-right: 0 !important;
        }

        html:not([dir=rtl]) .ms-1 {
            margin-left: 0.25rem !important;
        }

        *[dir=rtl] .ms-1 {
            margin-right: 0.25rem !important;
        }

        html:not([dir=rtl]) .ms-2 {
            margin-left: 0.5rem !important;
        }

        *[dir=rtl] .ms-2 {
            margin-right: 0.5rem !important;
        }

        html:not([dir=rtl]) .ms-3 {
            margin-left: 1rem !important;
        }

        *[dir=rtl] .ms-3 {
            margin-right: 1rem !important;
        }

        html:not([dir=rtl]) .ms-4 {
            margin-left: 1.5rem !important;
        }

        *[dir=rtl] .ms-4 {
            margin-right: 1.5rem !important;
        }

        html:not([dir=rtl]) .ms-5 {
            margin-left: 3rem !important;
        }

        *[dir=rtl] .ms-5 {
            margin-right: 3rem !important;
        }

        html:not([dir=rtl]) .ms-auto {
            margin-left: auto !important;
        }

        *[dir=rtl] .ms-auto {
            margin-right: auto !important;
        }

        .p-0 {
            padding: 0 !important;
        }

        .p-1 {
            padding: 0.25rem !important;
        }

        .p-2 {
            padding: 0.5rem !important;
        }

        .p-3 {
            padding: 1rem !important;
        }

        .p-4 {
            padding: 1.5rem !important;
        }

        .p-5 {
            padding: 3rem !important;
        }

        .px-0 {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        .px-1 {
            padding-right: 0.25rem !important;
            padding-left: 0.25rem !important;
        }

        .px-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important;
        }

        .px-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
        }

        .px-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important;
        }

        .px-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important;
        }

        .py-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .py-1 {
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important;
        }

        .py-2 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }

        .py-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .py-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .pt-0 {
            padding-top: 0 !important;
        }

        .pt-1 {
            padding-top: 0.25rem !important;
        }

        .pt-2 {
            padding-top: 0.5rem !important;
        }

        .pt-3 {
            padding-top: 1rem !important;
        }

        .pt-4 {
            padding-top: 1.5rem !important;
        }

        .pt-5 {
            padding-top: 3rem !important;
        }

        html:not([dir=rtl]) .pe-0 {
            padding-right: 0 !important;
        }

        *[dir=rtl] .pe-0 {
            padding-left: 0 !important;
        }

        html:not([dir=rtl]) .pe-1 {
            padding-right: 0.25rem !important;
        }

        *[dir=rtl] .pe-1 {
            padding-left: 0.25rem !important;
        }

        html:not([dir=rtl]) .pe-2 {
            padding-right: 0.5rem !important;
        }

        *[dir=rtl] .pe-2 {
            padding-left: 0.5rem !important;
        }

        html:not([dir=rtl]) .pe-3 {
            padding-right: 1rem !important;
        }

        *[dir=rtl] .pe-3 {
            padding-left: 1rem !important;
        }

        html:not([dir=rtl]) .pe-4 {
            padding-right: 1.5rem !important;
        }

        *[dir=rtl] .pe-4 {
            padding-left: 1.5rem !important;
        }

        html:not([dir=rtl]) .pe-5 {
            padding-right: 3rem !important;
        }

        *[dir=rtl] .pe-5 {
            padding-left: 3rem !important;
        }

        .pb-0 {
            padding-bottom: 0 !important;
        }

        .pb-1 {
            padding-bottom: 0.25rem !important;
        }

        .pb-2 {
            padding-bottom: 0.5rem !important;
        }

        .pb-3 {
            padding-bottom: 1rem !important;
        }

        .pb-4 {
            padding-bottom: 1.5rem !important;
        }

        .pb-5 {
            padding-bottom: 3rem !important;
        }

        html:not([dir=rtl]) .ps-0 {
            padding-left: 0 !important;
        }

        *[dir=rtl] .ps-0 {
            padding-right: 0 !important;
        }

        html:not([dir=rtl]) .ps-1 {
            padding-left: 0.25rem !important;
        }

        *[dir=rtl] .ps-1 {
            padding-right: 0.25rem !important;
        }

        html:not([dir=rtl]) .ps-2 {
            padding-left: 0.5rem !important;
        }

        *[dir=rtl] .ps-2 {
            padding-right: 0.5rem !important;
        }

        html:not([dir=rtl]) .ps-3 {
            padding-left: 1rem !important;
        }

        *[dir=rtl] .ps-3 {
            padding-right: 1rem !important;
        }

        html:not([dir=rtl]) .ps-4 {
            padding-left: 1.5rem !important;
        }

        *[dir=rtl] .ps-4 {
            padding-right: 1.5rem !important;
        }

        html:not([dir=rtl]) .ps-5 {
            padding-left: 3rem !important;
        }

        *[dir=rtl] .ps-5 {
            padding-right: 3rem !important;
        }

        .gap-0 {
            grid-gap: 0 !important;
            gap: 0 !important;
        }

        .gap-1 {
            grid-gap: 0.25rem !important;
            gap: 0.25rem !important;
        }

        .gap-2 {
            grid-gap: 0.5rem !important;
            gap: 0.5rem !important;
        }

        .gap-3 {
            grid-gap: 1rem !important;
            gap: 1rem !important;
        }

        .gap-4 {
            grid-gap: 1.5rem !important;
            gap: 1.5rem !important;
        }

        .gap-5 {
            grid-gap: 3rem !important;
            gap: 3rem !important;
        }

        .font-monospace {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
            font-family: var(--cui-font-monospace) !important;
        }

        .fs-1 {
            font-size: calc(1.375rem + 1.5vw) !important;
        }

        .fs-2 {
            font-size: calc(1.325rem + 0.9vw) !important;
        }

        .fs-3 {
            font-size: calc(1.3rem + 0.6vw) !important;
        }

        .fs-4 {
            font-size: calc(1.275rem + 0.3vw) !important;
        }

        .fs-5 {
            font-size: 1.25rem !important;
        }

        .fs-6 {
            font-size: 1rem !important;
        }

        .fst-italic {
            font-style: italic !important;
        }

        .fst-normal {
            font-style: normal !important;
        }

        .fw-light {
            font-weight: 300 !important;
        }

        .fw-lighter {
            font-weight: lighter !important;
        }

        .fw-normal {
            font-weight: 400 !important;
        }

        .fw-medium {
            font-weight: 500 !important;
        }

        .fw-semibold {
            font-weight: 600 !important;
        }

        .fw-bold {
            font-weight: 700 !important;
        }

        .fw-bolder {
            font-weight: bolder !important;
        }

        .lh-1 {
            line-height: 1 !important;
        }

        .lh-sm {
            line-height: 1.25 !important;
        }

        .lh-base {
            line-height: 1.5 !important;
        }

        .lh-lg {
            line-height: 2 !important;
        }

        html:not([dir=rtl]) .text-start {
            text-align: left !important;
        }

        *[dir=rtl] .text-start {
            text-align: right !important;
        }

        html:not([dir=rtl]) .text-end {
            text-align: right !important;
        }

        *[dir=rtl] .text-end {
            text-align: left !important;
        }

        html:not([dir=rtl]) .text-center {
            text-align: center !important;
        }

        *[dir=rtl] .text-center {
            text-align: center !important;
        }

        .text-decoration-none {
            text-decoration: none !important;
        }

        .text-decoration-underline {
            text-decoration: underline !important;
        }

        .text-decoration-line-through {
            text-decoration: line-through !important;
        }

        .text-lowercase {
            text-transform: lowercase !important;
        }

        .text-uppercase {
            text-transform: uppercase !important;
        }

        .text-capitalize {
            text-transform: capitalize !important;
        }

        .text-wrap {
            white-space: normal !important;
        }

        .text-nowrap {
            white-space: nowrap !important;
        }

        /* rtl:begin:remove */
        .text-break {
            word-wrap: break-word !important;
            word-break: break-word !important;
        }

        /* rtl:end:remove */
        .text-primary {
            --cui-text-opacity: 1;
            color: rgba(50, 31, 219, var(--cui-text-opacity)) !important;
            color: rgba(var(--cui-primary-rgb), var(--cui-text-opacity)) !important;
        }

        .text-secondary {
            --cui-text-opacity: 1;
            color: rgba(157, 165, 177, var(--cui-text-opacity)) !important;
            color: rgba(var(--cui-secondary-rgb), var(--cui-text-opacity)) !important;
        }

        .text-success {
            --cui-text-opacity: 1;
            color: rgba(46, 184, 92, var(--cui-text-opacity)) !important;
            color: rgba(var(--cui-success-rgb), var(--cui-text-opacity)) !important;
        }

        .text-info {
            --cui-text-opacity: 1;
            color: rgba(51, 153, 255, var(--cui-text-opacity)) !important;
            color: rgba(var(--cui-info-rgb), var(--cui-text-opacity)) !important;
        }

        .text-warning {
            --cui-text-opacity: 1;
            color: rgba(249, 177, 21, var(--cui-text-opacity)) !important;
            color: rgba(var(--cui-warning-rgb), var(--cui-text-opacity)) !important;
        }

        .text-danger {
            --cui-text-opacity: 1;
            color: rgba(229, 83, 83, var(--cui-text-opacity)) !important;
            color: rgba(var(--cui-danger-rgb), var(--cui-text-opacity)) !important;
        }

        .text-light {
            --cui-text-opacity: 1;
            color: rgba(235, 237, 239, var(--cui-text-opacity)) !important;
            color: rgba(var(--cui-light-rgb), var(--cui-text-opacity)) !important;
        }

        .text-dark {
            --cui-text-opacity: 1;
            color: rgba(79, 93, 115, var(--cui-text-opacity)) !important;
            color: rgba(var(--cui-dark-rgb), var(--cui-text-opacity)) !important;
        }

        .text-black {
            --cui-text-opacity: 1;
            color: rgba(0, 0, 21, var(--cui-text-opacity)) !important;
            color: rgba(var(--cui-black-rgb), var(--cui-text-opacity)) !important;
        }

        .text-white {
            --cui-text-opacity: 1;
            color: rgba(255, 255, 255, var(--cui-text-opacity)) !important;
            color: rgba(var(--cui-white-rgb), var(--cui-text-opacity)) !important;
        }

        .text-body {
            --cui-text-opacity: 1;
            color: rgba(44, 56, 74, var(--cui-text-opacity)) !important;
            color: rgba(var(--cui-body-color-rgb), var(--cui-text-opacity)) !important;
        }

        .text-muted {
            --cui-text-opacity: 1;
            color: rgba(44, 56, 74, 0.38) !important;
        }

        .text-black-50 {
            --cui-text-opacity: 1;
            color: rgba(0, 0, 21, 0.5) !important;
        }

        .text-white-50 {
            --cui-text-opacity: 1;
            color: rgba(255, 255, 255, 0.5) !important;
        }

        .text-reset {
            --cui-text-opacity: 1;
            color: inherit !important;
        }

        .text-high-emphasis-inverse {
            --cui-text-opacity: 1;
            color: rgba(255, 255, 255, 0.87) !important;
        }

        .text-medium-emphasis-inverse {
            --cui-text-opacity: 1;
            color: rgba(255, 255, 255, 0.6) !important;
        }

        .text-disabled-inverse {
            --cui-text-opacity: 1;
            color: rgba(255, 255, 255, 0.38) !important;
        }

        .text-high-emphasis {
            --cui-text-opacity: 1;
            color: rgba(44, 56, 74, 0.95) !important;
        }

        .text-medium-emphasis {
            --cui-text-opacity: 1;
            color: rgba(44, 56, 74, 0.681) !important;
        }

        .text-disabled {
            --cui-text-opacity: 1;
            color: rgba(44, 56, 74, 0.38) !important;
        }

        .text-opacity-25 {
            --cui-text-opacity: 0.25;
        }

        .text-opacity-50 {
            --cui-text-opacity: 0.5;
        }

        .text-opacity-75 {
            --cui-text-opacity: 0.75;
        }

        .text-opacity-100 {
            --cui-text-opacity: 1;
        }

        .bg-primary {
            --cui-bg-opacity: 1;
            background-color: rgba(50, 31, 219, var(--cui-bg-opacity)) !important;
            background-color: rgba(var(--cui-primary-rgb), var(--cui-bg-opacity)) !important;
        }

        .bg-secondary {
            --cui-bg-opacity: 1;
            background-color: rgba(157, 165, 177, var(--cui-bg-opacity)) !important;
            background-color: rgba(var(--cui-secondary-rgb), var(--cui-bg-opacity)) !important;
        }

        .bg-success {
            --cui-bg-opacity: 1;
            background-color: rgba(46, 184, 92, var(--cui-bg-opacity)) !important;
            background-color: rgba(var(--cui-success-rgb), var(--cui-bg-opacity)) !important;
        }

        .bg-info {
            --cui-bg-opacity: 1;
            background-color: rgba(51, 153, 255, var(--cui-bg-opacity)) !important;
            background-color: rgba(var(--cui-info-rgb), var(--cui-bg-opacity)) !important;
        }

        .bg-warning {
            --cui-bg-opacity: 1;
            background-color: rgba(249, 177, 21, var(--cui-bg-opacity)) !important;
            background-color: rgba(var(--cui-warning-rgb), var(--cui-bg-opacity)) !important;
        }

        .bg-danger {
            --cui-bg-opacity: 1;
            background-color: rgba(229, 83, 83, var(--cui-bg-opacity)) !important;
            background-color: rgba(var(--cui-danger-rgb), var(--cui-bg-opacity)) !important;
        }

        .bg-light {
            --cui-bg-opacity: 1;
            background-color: rgba(235, 237, 239, var(--cui-bg-opacity)) !important;
            background-color: rgba(var(--cui-light-rgb), var(--cui-bg-opacity)) !important;
        }

        .bg-dark {
            --cui-bg-opacity: 1;
            background-color: rgba(79, 93, 115, var(--cui-bg-opacity)) !important;
            background-color: rgba(var(--cui-dark-rgb), var(--cui-bg-opacity)) !important;
        }

        .bg-black {
            --cui-bg-opacity: 1;
            background-color: rgba(0, 0, 21, var(--cui-bg-opacity)) !important;
            background-color: rgba(var(--cui-black-rgb), var(--cui-bg-opacity)) !important;
        }

        .bg-white {
            --cui-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--cui-bg-opacity)) !important;
            background-color: rgba(var(--cui-white-rgb), var(--cui-bg-opacity)) !important;
        }

        .bg-body {
            --cui-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--cui-bg-opacity)) !important;
            background-color: rgba(var(--cui-body-bg-rgb), var(--cui-bg-opacity)) !important;
        }

        .bg-transparent {
            --cui-bg-opacity: 1;
            background-color: transparent !important;
        }

        .bg-opacity-10 {
            --cui-bg-opacity: 0.1;
        }

        .bg-opacity-25 {
            --cui-bg-opacity: 0.25;
        }

        .bg-opacity-50 {
            --cui-bg-opacity: 0.5;
        }

        .bg-opacity-75 {
            --cui-bg-opacity: 0.75;
        }

        .bg-opacity-100 {
            --cui-bg-opacity: 1;
        }

        .bg-gradient {
            background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0)) !important;
            background-image: var(--cui-gradient) !important;
        }

        .user-select-all {
            -webkit-user-select: all !important;
            -moz-user-select: all !important;
            user-select: all !important;
        }

        .user-select-auto {
            -webkit-user-select: auto !important;
            -moz-user-select: auto !important;
            user-select: auto !important;
        }

        .user-select-none {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            user-select: none !important;
        }

        .pe-none {
            pointer-events: none !important;
        }

        .pe-auto {
            pointer-events: auto !important;
        }

        .rounded {
            border-radius: 0.375rem !important;
            border-radius: var(--cui-border-radius) !important;
        }

        .rounded-0 {
            border-radius: 0 !important;
        }

        .rounded-1 {
            border-radius: 0.25rem !important;
            border-radius: var(--cui-border-radius-sm) !important;
        }

        .rounded-2 {
            border-radius: 0.375rem !important;
            border-radius: var(--cui-border-radius) !important;
        }

        .rounded-3 {
            border-radius: 0.5rem !important;
            border-radius: var(--cui-border-radius-lg) !important;
        }

        .rounded-4 {
            border-radius: 1rem !important;
            border-radius: var(--cui-border-radius-xl) !important;
        }

        .rounded-5 {
            border-radius: 2rem !important;
            border-radius: var(--cui-border-radius-2xl) !important;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .rounded-pill {
            border-radius: 50rem !important;
            border-radius: var(--cui-border-radius-pill) !important;
        }

        .rounded-top {
            border-top-left-radius: 0.375rem !important;
            border-top-left-radius: var(--cui-border-radius) !important;
            border-top-right-radius: 0.375rem !important;
            border-top-right-radius: var(--cui-border-radius) !important;
        }

        html:not([dir=rtl]) .rounded-end {
            border-top-right-radius: 0.375rem !important;
            border-top-right-radius: var(--cui-border-radius) !important;
        }

        *[dir=rtl] .rounded-end {
            border-top-left-radius: 0.375rem !important;
            border-top-left-radius: var(--cui-border-radius) !important;
        }

        html:not([dir=rtl]) .rounded-end {
            border-bottom-right-radius: 0.375rem !important;
            border-bottom-right-radius: var(--cui-border-radius) !important;
        }

        *[dir=rtl] .rounded-end {
            border-bottom-left-radius: 0.375rem !important;
            border-bottom-left-radius: var(--cui-border-radius) !important;
        }

        .rounded-bottom {
            border-bottom-right-radius: 0.375rem !important;
            border-bottom-right-radius: var(--cui-border-radius) !important;
            border-bottom-left-radius: 0.375rem !important;
            border-bottom-left-radius: var(--cui-border-radius) !important;
        }

        html:not([dir=rtl]) .rounded-start {
            border-bottom-left-radius: 0.375rem !important;
            border-bottom-left-radius: var(--cui-border-radius) !important;
        }

        *[dir=rtl] .rounded-start {
            border-bottom-right-radius: 0.375rem !important;
            border-bottom-right-radius: var(--cui-border-radius) !important;
        }

        html:not([dir=rtl]) .rounded-start {
            border-top-left-radius: 0.375rem !important;
            border-top-left-radius: var(--cui-border-radius) !important;
        }

        *[dir=rtl] .rounded-start {
            border-top-right-radius: 0.375rem !important;
            border-top-right-radius: var(--cui-border-radius) !important;
        }

        .visible {
            visibility: visible !important;
        }

        .invisible {
            visibility: hidden !important;
        }

        @media (min-width: 576px) {
            html:not([dir=rtl]) .float-sm-start {
                float: left !important;
            }

            *[dir=rtl] .float-sm-start {
                float: right !important;
            }

            html:not([dir=rtl]) .float-sm-end {
                float: right !important;
            }

            *[dir=rtl] .float-sm-end {
                float: left !important;
            }

            html:not([dir=rtl]) .float-sm-none {
                float: none !important;
            }

            *[dir=rtl] .float-sm-none {
                float: none !important;
            }

            .d-sm-inline {
                display: inline !important;
            }

            .d-sm-inline-block {
                display: inline-block !important;
            }

            .d-sm-block {
                display: block !important;
            }

            .d-sm-grid {
                display: grid !important;
            }

            .d-sm-table {
                display: table !important;
            }

            .d-sm-table-row {
                display: table-row !important;
            }

            .d-sm-table-cell {
                display: table-cell !important;
            }

            .d-sm-flex {
                display: flex !important;
            }

            .d-sm-inline-flex {
                display: inline-flex !important;
            }

            .d-sm-none {
                display: none !important;
            }

            .flex-sm-fill {
                flex: 1 1 auto !important;
            }

            .flex-sm-row {
                flex-direction: row !important;
            }

            .flex-sm-column {
                flex-direction: column !important;
            }

            .flex-sm-row-reverse {
                flex-direction: row-reverse !important;
            }

            .flex-sm-column-reverse {
                flex-direction: column-reverse !important;
            }

            .flex-sm-grow-0 {
                flex-grow: 0 !important;
            }

            .flex-sm-grow-1 {
                flex-grow: 1 !important;
            }

            .flex-sm-shrink-0 {
                flex-shrink: 0 !important;
            }

            .flex-sm-shrink-1 {
                flex-shrink: 1 !important;
            }

            .flex-sm-wrap {
                flex-wrap: wrap !important;
            }

            .flex-sm-nowrap {
                flex-wrap: nowrap !important;
            }

            .flex-sm-wrap-reverse {
                flex-wrap: wrap-reverse !important;
            }

            .justify-content-sm-start {
                justify-content: flex-start !important;
            }

            .justify-content-sm-end {
                justify-content: flex-end !important;
            }

            .justify-content-sm-center {
                justify-content: center !important;
            }

            .justify-content-sm-between {
                justify-content: space-between !important;
            }

            .justify-content-sm-around {
                justify-content: space-around !important;
            }

            .justify-content-sm-evenly {
                justify-content: space-evenly !important;
            }

            .align-items-sm-start {
                align-items: flex-start !important;
            }

            .align-items-sm-end {
                align-items: flex-end !important;
            }

            .align-items-sm-center {
                align-items: center !important;
            }

            .align-items-sm-baseline {
                align-items: baseline !important;
            }

            .align-items-sm-stretch {
                align-items: stretch !important;
            }

            .align-content-sm-start {
                align-content: flex-start !important;
            }

            .align-content-sm-end {
                align-content: flex-end !important;
            }

            .align-content-sm-center {
                align-content: center !important;
            }

            .align-content-sm-between {
                align-content: space-between !important;
            }

            .align-content-sm-around {
                align-content: space-around !important;
            }

            .align-content-sm-stretch {
                align-content: stretch !important;
            }

            .align-self-sm-auto {
                align-self: auto !important;
            }

            .align-self-sm-start {
                align-self: flex-start !important;
            }

            .align-self-sm-end {
                align-self: flex-end !important;
            }

            .align-self-sm-center {
                align-self: center !important;
            }

            .align-self-sm-baseline {
                align-self: baseline !important;
            }

            .align-self-sm-stretch {
                align-self: stretch !important;
            }

            .order-sm-first {
                order: -1 !important;
            }

            .order-sm-0 {
                order: 0 !important;
            }

            .order-sm-1 {
                order: 1 !important;
            }

            .order-sm-2 {
                order: 2 !important;
            }

            .order-sm-3 {
                order: 3 !important;
            }

            .order-sm-4 {
                order: 4 !important;
            }

            .order-sm-5 {
                order: 5 !important;
            }

            .order-sm-last {
                order: 6 !important;
            }

            .m-sm-0 {
                margin: 0 !important;
            }

            .m-sm-1 {
                margin: 0.25rem !important;
            }

            .m-sm-2 {
                margin: 0.5rem !important;
            }

            .m-sm-3 {
                margin: 1rem !important;
            }

            .m-sm-4 {
                margin: 1.5rem !important;
            }

            .m-sm-5 {
                margin: 3rem !important;
            }

            .m-sm-auto {
                margin: auto !important;
            }

            .mx-sm-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .mx-sm-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }

            .mx-sm-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }

            .mx-sm-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }

            .mx-sm-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important;
            }

            .mx-sm-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important;
            }

            .mx-sm-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }

            .my-sm-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-sm-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-sm-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-sm-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-sm-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important;
            }

            .my-sm-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }

            .my-sm-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-sm-0 {
                margin-top: 0 !important;
            }

            .mt-sm-1 {
                margin-top: 0.25rem !important;
            }

            .mt-sm-2 {
                margin-top: 0.5rem !important;
            }

            .mt-sm-3 {
                margin-top: 1rem !important;
            }

            .mt-sm-4 {
                margin-top: 1.5rem !important;
            }

            .mt-sm-5 {
                margin-top: 3rem !important;
            }

            .mt-sm-auto {
                margin-top: auto !important;
            }

            html:not([dir=rtl]) .me-sm-0 {
                margin-right: 0 !important;
            }

            *[dir=rtl] .me-sm-0 {
                margin-left: 0 !important;
            }

            html:not([dir=rtl]) .me-sm-1 {
                margin-right: 0.25rem !important;
            }

            *[dir=rtl] .me-sm-1 {
                margin-left: 0.25rem !important;
            }

            html:not([dir=rtl]) .me-sm-2 {
                margin-right: 0.5rem !important;
            }

            *[dir=rtl] .me-sm-2 {
                margin-left: 0.5rem !important;
            }

            html:not([dir=rtl]) .me-sm-3 {
                margin-right: 1rem !important;
            }

            *[dir=rtl] .me-sm-3 {
                margin-left: 1rem !important;
            }

            html:not([dir=rtl]) .me-sm-4 {
                margin-right: 1.5rem !important;
            }

            *[dir=rtl] .me-sm-4 {
                margin-left: 1.5rem !important;
            }

            html:not([dir=rtl]) .me-sm-5 {
                margin-right: 3rem !important;
            }

            *[dir=rtl] .me-sm-5 {
                margin-left: 3rem !important;
            }

            html:not([dir=rtl]) .me-sm-auto {
                margin-right: auto !important;
            }

            *[dir=rtl] .me-sm-auto {
                margin-left: auto !important;
            }

            .mb-sm-0 {
                margin-bottom: 0 !important;
            }

            .mb-sm-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-sm-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-sm-3 {
                margin-bottom: 1rem !important;
            }

            .mb-sm-4 {
                margin-bottom: 1.5rem !important;
            }

            .mb-sm-5 {
                margin-bottom: 3rem !important;
            }

            .mb-sm-auto {
                margin-bottom: auto !important;
            }

            html:not([dir=rtl]) .ms-sm-0 {
                margin-left: 0 !important;
            }

            *[dir=rtl] .ms-sm-0 {
                margin-right: 0 !important;
            }

            html:not([dir=rtl]) .ms-sm-1 {
                margin-left: 0.25rem !important;
            }

            *[dir=rtl] .ms-sm-1 {
                margin-right: 0.25rem !important;
            }

            html:not([dir=rtl]) .ms-sm-2 {
                margin-left: 0.5rem !important;
            }

            *[dir=rtl] .ms-sm-2 {
                margin-right: 0.5rem !important;
            }

            html:not([dir=rtl]) .ms-sm-3 {
                margin-left: 1rem !important;
            }

            *[dir=rtl] .ms-sm-3 {
                margin-right: 1rem !important;
            }

            html:not([dir=rtl]) .ms-sm-4 {
                margin-left: 1.5rem !important;
            }

            *[dir=rtl] .ms-sm-4 {
                margin-right: 1.5rem !important;
            }

            html:not([dir=rtl]) .ms-sm-5 {
                margin-left: 3rem !important;
            }

            *[dir=rtl] .ms-sm-5 {
                margin-right: 3rem !important;
            }

            html:not([dir=rtl]) .ms-sm-auto {
                margin-left: auto !important;
            }

            *[dir=rtl] .ms-sm-auto {
                margin-right: auto !important;
            }

            .p-sm-0 {
                padding: 0 !important;
            }

            .p-sm-1 {
                padding: 0.25rem !important;
            }

            .p-sm-2 {
                padding: 0.5rem !important;
            }

            .p-sm-3 {
                padding: 1rem !important;
            }

            .p-sm-4 {
                padding: 1.5rem !important;
            }

            .p-sm-5 {
                padding: 3rem !important;
            }

            .px-sm-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .px-sm-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }

            .px-sm-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }

            .px-sm-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }

            .px-sm-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important;
            }

            .px-sm-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important;
            }

            .py-sm-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-sm-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-sm-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-sm-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-sm-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .py-sm-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }

            .pt-sm-0 {
                padding-top: 0 !important;
            }

            .pt-sm-1 {
                padding-top: 0.25rem !important;
            }

            .pt-sm-2 {
                padding-top: 0.5rem !important;
            }

            .pt-sm-3 {
                padding-top: 1rem !important;
            }

            .pt-sm-4 {
                padding-top: 1.5rem !important;
            }

            .pt-sm-5 {
                padding-top: 3rem !important;
            }

            html:not([dir=rtl]) .pe-sm-0 {
                padding-right: 0 !important;
            }

            *[dir=rtl] .pe-sm-0 {
                padding-left: 0 !important;
            }

            html:not([dir=rtl]) .pe-sm-1 {
                padding-right: 0.25rem !important;
            }

            *[dir=rtl] .pe-sm-1 {
                padding-left: 0.25rem !important;
            }

            html:not([dir=rtl]) .pe-sm-2 {
                padding-right: 0.5rem !important;
            }

            *[dir=rtl] .pe-sm-2 {
                padding-left: 0.5rem !important;
            }

            html:not([dir=rtl]) .pe-sm-3 {
                padding-right: 1rem !important;
            }

            *[dir=rtl] .pe-sm-3 {
                padding-left: 1rem !important;
            }

            html:not([dir=rtl]) .pe-sm-4 {
                padding-right: 1.5rem !important;
            }

            *[dir=rtl] .pe-sm-4 {
                padding-left: 1.5rem !important;
            }

            html:not([dir=rtl]) .pe-sm-5 {
                padding-right: 3rem !important;
            }

            *[dir=rtl] .pe-sm-5 {
                padding-left: 3rem !important;
            }

            .pb-sm-0 {
                padding-bottom: 0 !important;
            }

            .pb-sm-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-sm-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-sm-3 {
                padding-bottom: 1rem !important;
            }

            .pb-sm-4 {
                padding-bottom: 1.5rem !important;
            }

            .pb-sm-5 {
                padding-bottom: 3rem !important;
            }

            html:not([dir=rtl]) .ps-sm-0 {
                padding-left: 0 !important;
            }

            *[dir=rtl] .ps-sm-0 {
                padding-right: 0 !important;
            }

            html:not([dir=rtl]) .ps-sm-1 {
                padding-left: 0.25rem !important;
            }

            *[dir=rtl] .ps-sm-1 {
                padding-right: 0.25rem !important;
            }

            html:not([dir=rtl]) .ps-sm-2 {
                padding-left: 0.5rem !important;
            }

            *[dir=rtl] .ps-sm-2 {
                padding-right: 0.5rem !important;
            }

            html:not([dir=rtl]) .ps-sm-3 {
                padding-left: 1rem !important;
            }

            *[dir=rtl] .ps-sm-3 {
                padding-right: 1rem !important;
            }

            html:not([dir=rtl]) .ps-sm-4 {
                padding-left: 1.5rem !important;
            }

            *[dir=rtl] .ps-sm-4 {
                padding-right: 1.5rem !important;
            }

            html:not([dir=rtl]) .ps-sm-5 {
                padding-left: 3rem !important;
            }

            *[dir=rtl] .ps-sm-5 {
                padding-right: 3rem !important;
            }

            .gap-sm-0 {
                grid-gap: 0 !important;
                gap: 0 !important;
            }

            .gap-sm-1 {
                grid-gap: 0.25rem !important;
                gap: 0.25rem !important;
            }

            .gap-sm-2 {
                grid-gap: 0.5rem !important;
                gap: 0.5rem !important;
            }

            .gap-sm-3 {
                grid-gap: 1rem !important;
                gap: 1rem !important;
            }

            .gap-sm-4 {
                grid-gap: 1.5rem !important;
                gap: 1.5rem !important;
            }

            .gap-sm-5 {
                grid-gap: 3rem !important;
                gap: 3rem !important;
            }

            html:not([dir=rtl]) .text-sm-start {
                text-align: left !important;
            }

            *[dir=rtl] .text-sm-start {
                text-align: right !important;
            }

            html:not([dir=rtl]) .text-sm-end {
                text-align: right !important;
            }

            *[dir=rtl] .text-sm-end {
                text-align: left !important;
            }

            html:not([dir=rtl]) .text-sm-center {
                text-align: center !important;
            }

            *[dir=rtl] .text-sm-center {
                text-align: center !important;
            }
        }

        @media (min-width: 768px) {
            html:not([dir=rtl]) .float-md-start {
                float: left !important;
            }

            *[dir=rtl] .float-md-start {
                float: right !important;
            }

            html:not([dir=rtl]) .float-md-end {
                float: right !important;
            }

            *[dir=rtl] .float-md-end {
                float: left !important;
            }

            html:not([dir=rtl]) .float-md-none {
                float: none !important;
            }

            *[dir=rtl] .float-md-none {
                float: none !important;
            }

            .d-md-inline {
                display: inline !important;
            }

            .d-md-inline-block {
                display: inline-block !important;
            }

            .d-md-block {
                display: block !important;
            }

            .d-md-grid {
                display: grid !important;
            }

            .d-md-table {
                display: table !important;
            }

            .d-md-table-row {
                display: table-row !important;
            }

            .d-md-table-cell {
                display: table-cell !important;
            }

            .d-md-flex {
                display: flex !important;
            }

            .d-md-inline-flex {
                display: inline-flex !important;
            }

            .d-md-none {
                display: none !important;
            }

            .flex-md-fill {
                flex: 1 1 auto !important;
            }

            .flex-md-row {
                flex-direction: row !important;
            }

            .flex-md-column {
                flex-direction: column !important;
            }

            .flex-md-row-reverse {
                flex-direction: row-reverse !important;
            }

            .flex-md-column-reverse {
                flex-direction: column-reverse !important;
            }

            .flex-md-grow-0 {
                flex-grow: 0 !important;
            }

            .flex-md-grow-1 {
                flex-grow: 1 !important;
            }

            .flex-md-shrink-0 {
                flex-shrink: 0 !important;
            }

            .flex-md-shrink-1 {
                flex-shrink: 1 !important;
            }

            .flex-md-wrap {
                flex-wrap: wrap !important;
            }

            .flex-md-nowrap {
                flex-wrap: nowrap !important;
            }

            .flex-md-wrap-reverse {
                flex-wrap: wrap-reverse !important;
            }

            .justify-content-md-start {
                justify-content: flex-start !important;
            }

            .justify-content-md-end {
                justify-content: flex-end !important;
            }

            .justify-content-md-center {
                justify-content: center !important;
            }

            .justify-content-md-between {
                justify-content: space-between !important;
            }

            .justify-content-md-around {
                justify-content: space-around !important;
            }

            .justify-content-md-evenly {
                justify-content: space-evenly !important;
            }

            .align-items-md-start {
                align-items: flex-start !important;
            }

            .align-items-md-end {
                align-items: flex-end !important;
            }

            .align-items-md-center {
                align-items: center !important;
            }

            .align-items-md-baseline {
                align-items: baseline !important;
            }

            .align-items-md-stretch {
                align-items: stretch !important;
            }

            .align-content-md-start {
                align-content: flex-start !important;
            }

            .align-content-md-end {
                align-content: flex-end !important;
            }

            .align-content-md-center {
                align-content: center !important;
            }

            .align-content-md-between {
                align-content: space-between !important;
            }

            .align-content-md-around {
                align-content: space-around !important;
            }

            .align-content-md-stretch {
                align-content: stretch !important;
            }

            .align-self-md-auto {
                align-self: auto !important;
            }

            .align-self-md-start {
                align-self: flex-start !important;
            }

            .align-self-md-end {
                align-self: flex-end !important;
            }

            .align-self-md-center {
                align-self: center !important;
            }

            .align-self-md-baseline {
                align-self: baseline !important;
            }

            .align-self-md-stretch {
                align-self: stretch !important;
            }

            .order-md-first {
                order: -1 !important;
            }

            .order-md-0 {
                order: 0 !important;
            }

            .order-md-1 {
                order: 1 !important;
            }

            .order-md-2 {
                order: 2 !important;
            }

            .order-md-3 {
                order: 3 !important;
            }

            .order-md-4 {
                order: 4 !important;
            }

            .order-md-5 {
                order: 5 !important;
            }

            .order-md-last {
                order: 6 !important;
            }

            .m-md-0 {
                margin: 0 !important;
            }

            .m-md-1 {
                margin: 0.25rem !important;
            }

            .m-md-2 {
                margin: 0.5rem !important;
            }

            .m-md-3 {
                margin: 1rem !important;
            }

            .m-md-4 {
                margin: 1.5rem !important;
            }

            .m-md-5 {
                margin: 3rem !important;
            }

            .m-md-auto {
                margin: auto !important;
            }

            .mx-md-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .mx-md-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }

            .mx-md-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }

            .mx-md-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }

            .mx-md-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important;
            }

            .mx-md-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important;
            }

            .mx-md-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }

            .my-md-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-md-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-md-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-md-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-md-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important;
            }

            .my-md-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }

            .my-md-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-md-0 {
                margin-top: 0 !important;
            }

            .mt-md-1 {
                margin-top: 0.25rem !important;
            }

            .mt-md-2 {
                margin-top: 0.5rem !important;
            }

            .mt-md-3 {
                margin-top: 1rem !important;
            }

            .mt-md-4 {
                margin-top: 1.5rem !important;
            }

            .mt-md-5 {
                margin-top: 3rem !important;
            }

            .mt-md-auto {
                margin-top: auto !important;
            }

            html:not([dir=rtl]) .me-md-0 {
                margin-right: 0 !important;
            }

            *[dir=rtl] .me-md-0 {
                margin-left: 0 !important;
            }

            html:not([dir=rtl]) .me-md-1 {
                margin-right: 0.25rem !important;
            }

            *[dir=rtl] .me-md-1 {
                margin-left: 0.25rem !important;
            }

            html:not([dir=rtl]) .me-md-2 {
                margin-right: 0.5rem !important;
            }

            *[dir=rtl] .me-md-2 {
                margin-left: 0.5rem !important;
            }

            html:not([dir=rtl]) .me-md-3 {
                margin-right: 1rem !important;
            }

            *[dir=rtl] .me-md-3 {
                margin-left: 1rem !important;
            }

            html:not([dir=rtl]) .me-md-4 {
                margin-right: 1.5rem !important;
            }

            *[dir=rtl] .me-md-4 {
                margin-left: 1.5rem !important;
            }

            html:not([dir=rtl]) .me-md-5 {
                margin-right: 3rem !important;
            }

            *[dir=rtl] .me-md-5 {
                margin-left: 3rem !important;
            }

            html:not([dir=rtl]) .me-md-auto {
                margin-right: auto !important;
            }

            *[dir=rtl] .me-md-auto {
                margin-left: auto !important;
            }

            .mb-md-0 {
                margin-bottom: 0 !important;
            }

            .mb-md-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-md-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-md-3 {
                margin-bottom: 1rem !important;
            }

            .mb-md-4 {
                margin-bottom: 1.5rem !important;
            }

            .mb-md-5 {
                margin-bottom: 3rem !important;
            }

            .mb-md-auto {
                margin-bottom: auto !important;
            }

            html:not([dir=rtl]) .ms-md-0 {
                margin-left: 0 !important;
            }

            *[dir=rtl] .ms-md-0 {
                margin-right: 0 !important;
            }

            html:not([dir=rtl]) .ms-md-1 {
                margin-left: 0.25rem !important;
            }

            *[dir=rtl] .ms-md-1 {
                margin-right: 0.25rem !important;
            }

            html:not([dir=rtl]) .ms-md-2 {
                margin-left: 0.5rem !important;
            }

            *[dir=rtl] .ms-md-2 {
                margin-right: 0.5rem !important;
            }

            html:not([dir=rtl]) .ms-md-3 {
                margin-left: 1rem !important;
            }

            *[dir=rtl] .ms-md-3 {
                margin-right: 1rem !important;
            }

            html:not([dir=rtl]) .ms-md-4 {
                margin-left: 1.5rem !important;
            }

            *[dir=rtl] .ms-md-4 {
                margin-right: 1.5rem !important;
            }

            html:not([dir=rtl]) .ms-md-5 {
                margin-left: 3rem !important;
            }

            *[dir=rtl] .ms-md-5 {
                margin-right: 3rem !important;
            }

            html:not([dir=rtl]) .ms-md-auto {
                margin-left: auto !important;
            }

            *[dir=rtl] .ms-md-auto {
                margin-right: auto !important;
            }

            .p-md-0 {
                padding: 0 !important;
            }

            .p-md-1 {
                padding: 0.25rem !important;
            }

            .p-md-2 {
                padding: 0.5rem !important;
            }

            .p-md-3 {
                padding: 1rem !important;
            }

            .p-md-4 {
                padding: 1.5rem !important;
            }

            .p-md-5 {
                padding: 3rem !important;
            }

            .px-md-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .px-md-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }

            .px-md-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }

            .px-md-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }

            .px-md-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important;
            }

            .px-md-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important;
            }

            .py-md-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-md-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-md-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-md-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-md-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .py-md-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }

            .pt-md-0 {
                padding-top: 0 !important;
            }

            .pt-md-1 {
                padding-top: 0.25rem !important;
            }

            .pt-md-2 {
                padding-top: 0.5rem !important;
            }

            .pt-md-3 {
                padding-top: 1rem !important;
            }

            .pt-md-4 {
                padding-top: 1.5rem !important;
            }

            .pt-md-5 {
                padding-top: 3rem !important;
            }

            html:not([dir=rtl]) .pe-md-0 {
                padding-right: 0 !important;
            }

            *[dir=rtl] .pe-md-0 {
                padding-left: 0 !important;
            }

            html:not([dir=rtl]) .pe-md-1 {
                padding-right: 0.25rem !important;
            }

            *[dir=rtl] .pe-md-1 {
                padding-left: 0.25rem !important;
            }

            html:not([dir=rtl]) .pe-md-2 {
                padding-right: 0.5rem !important;
            }

            *[dir=rtl] .pe-md-2 {
                padding-left: 0.5rem !important;
            }

            html:not([dir=rtl]) .pe-md-3 {
                padding-right: 1rem !important;
            }

            *[dir=rtl] .pe-md-3 {
                padding-left: 1rem !important;
            }

            html:not([dir=rtl]) .pe-md-4 {
                padding-right: 1.5rem !important;
            }

            *[dir=rtl] .pe-md-4 {
                padding-left: 1.5rem !important;
            }

            html:not([dir=rtl]) .pe-md-5 {
                padding-right: 3rem !important;
            }

            *[dir=rtl] .pe-md-5 {
                padding-left: 3rem !important;
            }

            .pb-md-0 {
                padding-bottom: 0 !important;
            }

            .pb-md-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-md-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-md-3 {
                padding-bottom: 1rem !important;
            }

            .pb-md-4 {
                padding-bottom: 1.5rem !important;
            }

            .pb-md-5 {
                padding-bottom: 3rem !important;
            }

            html:not([dir=rtl]) .ps-md-0 {
                padding-left: 0 !important;
            }

            *[dir=rtl] .ps-md-0 {
                padding-right: 0 !important;
            }

            html:not([dir=rtl]) .ps-md-1 {
                padding-left: 0.25rem !important;
            }

            *[dir=rtl] .ps-md-1 {
                padding-right: 0.25rem !important;
            }

            html:not([dir=rtl]) .ps-md-2 {
                padding-left: 0.5rem !important;
            }

            *[dir=rtl] .ps-md-2 {
                padding-right: 0.5rem !important;
            }

            html:not([dir=rtl]) .ps-md-3 {
                padding-left: 1rem !important;
            }

            *[dir=rtl] .ps-md-3 {
                padding-right: 1rem !important;
            }

            html:not([dir=rtl]) .ps-md-4 {
                padding-left: 1.5rem !important;
            }

            *[dir=rtl] .ps-md-4 {
                padding-right: 1.5rem !important;
            }

            html:not([dir=rtl]) .ps-md-5 {
                padding-left: 3rem !important;
            }

            *[dir=rtl] .ps-md-5 {
                padding-right: 3rem !important;
            }

            .gap-md-0 {
                grid-gap: 0 !important;
                gap: 0 !important;
            }

            .gap-md-1 {
                grid-gap: 0.25rem !important;
                gap: 0.25rem !important;
            }

            .gap-md-2 {
                grid-gap: 0.5rem !important;
                gap: 0.5rem !important;
            }

            .gap-md-3 {
                grid-gap: 1rem !important;
                gap: 1rem !important;
            }

            .gap-md-4 {
                grid-gap: 1.5rem !important;
                gap: 1.5rem !important;
            }

            .gap-md-5 {
                grid-gap: 3rem !important;
                gap: 3rem !important;
            }

            html:not([dir=rtl]) .text-md-start {
                text-align: left !important;
            }

            *[dir=rtl] .text-md-start {
                text-align: right !important;
            }

            html:not([dir=rtl]) .text-md-end {
                text-align: right !important;
            }

            *[dir=rtl] .text-md-end {
                text-align: left !important;
            }

            html:not([dir=rtl]) .text-md-center {
                text-align: center !important;
            }

            *[dir=rtl] .text-md-center {
                text-align: center !important;
            }
        }

        @media (min-width: 992px) {
            html:not([dir=rtl]) .float-lg-start {
                float: left !important;
            }

            *[dir=rtl] .float-lg-start {
                float: right !important;
            }

            html:not([dir=rtl]) .float-lg-end {
                float: right !important;
            }

            *[dir=rtl] .float-lg-end {
                float: left !important;
            }

            html:not([dir=rtl]) .float-lg-none {
                float: none !important;
            }

            *[dir=rtl] .float-lg-none {
                float: none !important;
            }

            .d-lg-inline {
                display: inline !important;
            }

            .d-lg-inline-block {
                display: inline-block !important;
            }

            .d-lg-block {
                display: block !important;
            }

            .d-lg-grid {
                display: grid !important;
            }

            .d-lg-table {
                display: table !important;
            }

            .d-lg-table-row {
                display: table-row !important;
            }

            .d-lg-table-cell {
                display: table-cell !important;
            }

            .d-lg-flex {
                display: flex !important;
            }

            .d-lg-inline-flex {
                display: inline-flex !important;
            }

            .d-lg-none {
                display: none !important;
            }

            .flex-lg-fill {
                flex: 1 1 auto !important;
            }

            .flex-lg-row {
                flex-direction: row !important;
            }

            .flex-lg-column {
                flex-direction: column !important;
            }

            .flex-lg-row-reverse {
                flex-direction: row-reverse !important;
            }

            .flex-lg-column-reverse {
                flex-direction: column-reverse !important;
            }

            .flex-lg-grow-0 {
                flex-grow: 0 !important;
            }

            .flex-lg-grow-1 {
                flex-grow: 1 !important;
            }

            .flex-lg-shrink-0 {
                flex-shrink: 0 !important;
            }

            .flex-lg-shrink-1 {
                flex-shrink: 1 !important;
            }

            .flex-lg-wrap {
                flex-wrap: wrap !important;
            }

            .flex-lg-nowrap {
                flex-wrap: nowrap !important;
            }

            .flex-lg-wrap-reverse {
                flex-wrap: wrap-reverse !important;
            }

            .justify-content-lg-start {
                justify-content: flex-start !important;
            }

            .justify-content-lg-end {
                justify-content: flex-end !important;
            }

            .justify-content-lg-center {
                justify-content: center !important;
            }

            .justify-content-lg-between {
                justify-content: space-between !important;
            }

            .justify-content-lg-around {
                justify-content: space-around !important;
            }

            .justify-content-lg-evenly {
                justify-content: space-evenly !important;
            }

            .align-items-lg-start {
                align-items: flex-start !important;
            }

            .align-items-lg-end {
                align-items: flex-end !important;
            }

            .align-items-lg-center {
                align-items: center !important;
            }

            .align-items-lg-baseline {
                align-items: baseline !important;
            }

            .align-items-lg-stretch {
                align-items: stretch !important;
            }

            .align-content-lg-start {
                align-content: flex-start !important;
            }

            .align-content-lg-end {
                align-content: flex-end !important;
            }

            .align-content-lg-center {
                align-content: center !important;
            }

            .align-content-lg-between {
                align-content: space-between !important;
            }

            .align-content-lg-around {
                align-content: space-around !important;
            }

            .align-content-lg-stretch {
                align-content: stretch !important;
            }

            .align-self-lg-auto {
                align-self: auto !important;
            }

            .align-self-lg-start {
                align-self: flex-start !important;
            }

            .align-self-lg-end {
                align-self: flex-end !important;
            }

            .align-self-lg-center {
                align-self: center !important;
            }

            .align-self-lg-baseline {
                align-self: baseline !important;
            }

            .align-self-lg-stretch {
                align-self: stretch !important;
            }

            .order-lg-first {
                order: -1 !important;
            }

            .order-lg-0 {
                order: 0 !important;
            }

            .order-lg-1 {
                order: 1 !important;
            }

            .order-lg-2 {
                order: 2 !important;
            }

            .order-lg-3 {
                order: 3 !important;
            }

            .order-lg-4 {
                order: 4 !important;
            }

            .order-lg-5 {
                order: 5 !important;
            }

            .order-lg-last {
                order: 6 !important;
            }

            .m-lg-0 {
                margin: 0 !important;
            }

            .m-lg-1 {
                margin: 0.25rem !important;
            }

            .m-lg-2 {
                margin: 0.5rem !important;
            }

            .m-lg-3 {
                margin: 1rem !important;
            }

            .m-lg-4 {
                margin: 1.5rem !important;
            }

            .m-lg-5 {
                margin: 3rem !important;
            }

            .m-lg-auto {
                margin: auto !important;
            }

            .mx-lg-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .mx-lg-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }

            .mx-lg-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }

            .mx-lg-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }

            .mx-lg-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important;
            }

            .mx-lg-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important;
            }

            .mx-lg-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }

            .my-lg-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-lg-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-lg-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-lg-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-lg-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important;
            }

            .my-lg-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }

            .my-lg-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-lg-0 {
                margin-top: 0 !important;
            }

            .mt-lg-1 {
                margin-top: 0.25rem !important;
            }

            .mt-lg-2 {
                margin-top: 0.5rem !important;
            }

            .mt-lg-3 {
                margin-top: 1rem !important;
            }

            .mt-lg-4 {
                margin-top: 1.5rem !important;
            }

            .mt-lg-5 {
                margin-top: 3rem !important;
            }

            .mt-lg-auto {
                margin-top: auto !important;
            }

            html:not([dir=rtl]) .me-lg-0 {
                margin-right: 0 !important;
            }

            *[dir=rtl] .me-lg-0 {
                margin-left: 0 !important;
            }

            html:not([dir=rtl]) .me-lg-1 {
                margin-right: 0.25rem !important;
            }

            *[dir=rtl] .me-lg-1 {
                margin-left: 0.25rem !important;
            }

            html:not([dir=rtl]) .me-lg-2 {
                margin-right: 0.5rem !important;
            }

            *[dir=rtl] .me-lg-2 {
                margin-left: 0.5rem !important;
            }

            html:not([dir=rtl]) .me-lg-3 {
                margin-right: 1rem !important;
            }

            *[dir=rtl] .me-lg-3 {
                margin-left: 1rem !important;
            }

            html:not([dir=rtl]) .me-lg-4 {
                margin-right: 1.5rem !important;
            }

            *[dir=rtl] .me-lg-4 {
                margin-left: 1.5rem !important;
            }

            html:not([dir=rtl]) .me-lg-5 {
                margin-right: 3rem !important;
            }

            *[dir=rtl] .me-lg-5 {
                margin-left: 3rem !important;
            }

            html:not([dir=rtl]) .me-lg-auto {
                margin-right: auto !important;
            }

            *[dir=rtl] .me-lg-auto {
                margin-left: auto !important;
            }

            .mb-lg-0 {
                margin-bottom: 0 !important;
            }

            .mb-lg-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-lg-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-lg-3 {
                margin-bottom: 1rem !important;
            }

            .mb-lg-4 {
                margin-bottom: 1.5rem !important;
            }

            .mb-lg-5 {
                margin-bottom: 3rem !important;
            }

            .mb-lg-auto {
                margin-bottom: auto !important;
            }

            html:not([dir=rtl]) .ms-lg-0 {
                margin-left: 0 !important;
            }

            *[dir=rtl] .ms-lg-0 {
                margin-right: 0 !important;
            }

            html:not([dir=rtl]) .ms-lg-1 {
                margin-left: 0.25rem !important;
            }

            *[dir=rtl] .ms-lg-1 {
                margin-right: 0.25rem !important;
            }

            html:not([dir=rtl]) .ms-lg-2 {
                margin-left: 0.5rem !important;
            }

            *[dir=rtl] .ms-lg-2 {
                margin-right: 0.5rem !important;
            }

            html:not([dir=rtl]) .ms-lg-3 {
                margin-left: 1rem !important;
            }

            *[dir=rtl] .ms-lg-3 {
                margin-right: 1rem !important;
            }

            html:not([dir=rtl]) .ms-lg-4 {
                margin-left: 1.5rem !important;
            }

            *[dir=rtl] .ms-lg-4 {
                margin-right: 1.5rem !important;
            }

            html:not([dir=rtl]) .ms-lg-5 {
                margin-left: 3rem !important;
            }

            *[dir=rtl] .ms-lg-5 {
                margin-right: 3rem !important;
            }

            html:not([dir=rtl]) .ms-lg-auto {
                margin-left: auto !important;
            }

            *[dir=rtl] .ms-lg-auto {
                margin-right: auto !important;
            }

            .p-lg-0 {
                padding: 0 !important;
            }

            .p-lg-1 {
                padding: 0.25rem !important;
            }

            .p-lg-2 {
                padding: 0.5rem !important;
            }

            .p-lg-3 {
                padding: 1rem !important;
            }

            .p-lg-4 {
                padding: 1.5rem !important;
            }

            .p-lg-5 {
                padding: 3rem !important;
            }

            .px-lg-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .px-lg-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }

            .px-lg-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }

            .px-lg-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }

            .px-lg-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important;
            }

            .px-lg-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important;
            }

            .py-lg-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-lg-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-lg-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-lg-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-lg-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .py-lg-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }

            .pt-lg-0 {
                padding-top: 0 !important;
            }

            .pt-lg-1 {
                padding-top: 0.25rem !important;
            }

            .pt-lg-2 {
                padding-top: 0.5rem !important;
            }

            .pt-lg-3 {
                padding-top: 1rem !important;
            }

            .pt-lg-4 {
                padding-top: 1.5rem !important;
            }

            .pt-lg-5 {
                padding-top: 3rem !important;
            }

            html:not([dir=rtl]) .pe-lg-0 {
                padding-right: 0 !important;
            }

            *[dir=rtl] .pe-lg-0 {
                padding-left: 0 !important;
            }

            html:not([dir=rtl]) .pe-lg-1 {
                padding-right: 0.25rem !important;
            }

            *[dir=rtl] .pe-lg-1 {
                padding-left: 0.25rem !important;
            }

            html:not([dir=rtl]) .pe-lg-2 {
                padding-right: 0.5rem !important;
            }

            *[dir=rtl] .pe-lg-2 {
                padding-left: 0.5rem !important;
            }

            html:not([dir=rtl]) .pe-lg-3 {
                padding-right: 1rem !important;
            }

            *[dir=rtl] .pe-lg-3 {
                padding-left: 1rem !important;
            }

            html:not([dir=rtl]) .pe-lg-4 {
                padding-right: 1.5rem !important;
            }

            *[dir=rtl] .pe-lg-4 {
                padding-left: 1.5rem !important;
            }

            html:not([dir=rtl]) .pe-lg-5 {
                padding-right: 3rem !important;
            }

            *[dir=rtl] .pe-lg-5 {
                padding-left: 3rem !important;
            }

            .pb-lg-0 {
                padding-bottom: 0 !important;
            }

            .pb-lg-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-lg-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-lg-3 {
                padding-bottom: 1rem !important;
            }

            .pb-lg-4 {
                padding-bottom: 1.5rem !important;
            }

            .pb-lg-5 {
                padding-bottom: 3rem !important;
            }

            html:not([dir=rtl]) .ps-lg-0 {
                padding-left: 0 !important;
            }

            *[dir=rtl] .ps-lg-0 {
                padding-right: 0 !important;
            }

            html:not([dir=rtl]) .ps-lg-1 {
                padding-left: 0.25rem !important;
            }

            *[dir=rtl] .ps-lg-1 {
                padding-right: 0.25rem !important;
            }

            html:not([dir=rtl]) .ps-lg-2 {
                padding-left: 0.5rem !important;
            }

            *[dir=rtl] .ps-lg-2 {
                padding-right: 0.5rem !important;
            }

            html:not([dir=rtl]) .ps-lg-3 {
                padding-left: 1rem !important;
            }

            *[dir=rtl] .ps-lg-3 {
                padding-right: 1rem !important;
            }

            html:not([dir=rtl]) .ps-lg-4 {
                padding-left: 1.5rem !important;
            }

            *[dir=rtl] .ps-lg-4 {
                padding-right: 1.5rem !important;
            }

            html:not([dir=rtl]) .ps-lg-5 {
                padding-left: 3rem !important;
            }

            *[dir=rtl] .ps-lg-5 {
                padding-right: 3rem !important;
            }

            .gap-lg-0 {
                grid-gap: 0 !important;
                gap: 0 !important;
            }

            .gap-lg-1 {
                grid-gap: 0.25rem !important;
                gap: 0.25rem !important;
            }

            .gap-lg-2 {
                grid-gap: 0.5rem !important;
                gap: 0.5rem !important;
            }

            .gap-lg-3 {
                grid-gap: 1rem !important;
                gap: 1rem !important;
            }

            .gap-lg-4 {
                grid-gap: 1.5rem !important;
                gap: 1.5rem !important;
            }

            .gap-lg-5 {
                grid-gap: 3rem !important;
                gap: 3rem !important;
            }

            html:not([dir=rtl]) .text-lg-start {
                text-align: left !important;
            }

            *[dir=rtl] .text-lg-start {
                text-align: right !important;
            }

            html:not([dir=rtl]) .text-lg-end {
                text-align: right !important;
            }

            *[dir=rtl] .text-lg-end {
                text-align: left !important;
            }

            html:not([dir=rtl]) .text-lg-center {
                text-align: center !important;
            }

            *[dir=rtl] .text-lg-center {
                text-align: center !important;
            }
        }

        @media (min-width: 1200px) {
            html:not([dir=rtl]) .float-xl-start {
                float: left !important;
            }

            *[dir=rtl] .float-xl-start {
                float: right !important;
            }

            html:not([dir=rtl]) .float-xl-end {
                float: right !important;
            }

            *[dir=rtl] .float-xl-end {
                float: left !important;
            }

            html:not([dir=rtl]) .float-xl-none {
                float: none !important;
            }

            *[dir=rtl] .float-xl-none {
                float: none !important;
            }

            .d-xl-inline {
                display: inline !important;
            }

            .d-xl-inline-block {
                display: inline-block !important;
            }

            .d-xl-block {
                display: block !important;
            }

            .d-xl-grid {
                display: grid !important;
            }

            .d-xl-table {
                display: table !important;
            }

            .d-xl-table-row {
                display: table-row !important;
            }

            .d-xl-table-cell {
                display: table-cell !important;
            }

            .d-xl-flex {
                display: flex !important;
            }

            .d-xl-inline-flex {
                display: inline-flex !important;
            }

            .d-xl-none {
                display: none !important;
            }

            .flex-xl-fill {
                flex: 1 1 auto !important;
            }

            .flex-xl-row {
                flex-direction: row !important;
            }

            .flex-xl-column {
                flex-direction: column !important;
            }

            .flex-xl-row-reverse {
                flex-direction: row-reverse !important;
            }

            .flex-xl-column-reverse {
                flex-direction: column-reverse !important;
            }

            .flex-xl-grow-0 {
                flex-grow: 0 !important;
            }

            .flex-xl-grow-1 {
                flex-grow: 1 !important;
            }

            .flex-xl-shrink-0 {
                flex-shrink: 0 !important;
            }

            .flex-xl-shrink-1 {
                flex-shrink: 1 !important;
            }

            .flex-xl-wrap {
                flex-wrap: wrap !important;
            }

            .flex-xl-nowrap {
                flex-wrap: nowrap !important;
            }

            .flex-xl-wrap-reverse {
                flex-wrap: wrap-reverse !important;
            }

            .justify-content-xl-start {
                justify-content: flex-start !important;
            }

            .justify-content-xl-end {
                justify-content: flex-end !important;
            }

            .justify-content-xl-center {
                justify-content: center !important;
            }

            .justify-content-xl-between {
                justify-content: space-between !important;
            }

            .justify-content-xl-around {
                justify-content: space-around !important;
            }

            .justify-content-xl-evenly {
                justify-content: space-evenly !important;
            }

            .align-items-xl-start {
                align-items: flex-start !important;
            }

            .align-items-xl-end {
                align-items: flex-end !important;
            }

            .align-items-xl-center {
                align-items: center !important;
            }

            .align-items-xl-baseline {
                align-items: baseline !important;
            }

            .align-items-xl-stretch {
                align-items: stretch !important;
            }

            .align-content-xl-start {
                align-content: flex-start !important;
            }

            .align-content-xl-end {
                align-content: flex-end !important;
            }

            .align-content-xl-center {
                align-content: center !important;
            }

            .align-content-xl-between {
                align-content: space-between !important;
            }

            .align-content-xl-around {
                align-content: space-around !important;
            }

            .align-content-xl-stretch {
                align-content: stretch !important;
            }

            .align-self-xl-auto {
                align-self: auto !important;
            }

            .align-self-xl-start {
                align-self: flex-start !important;
            }

            .align-self-xl-end {
                align-self: flex-end !important;
            }

            .align-self-xl-center {
                align-self: center !important;
            }

            .align-self-xl-baseline {
                align-self: baseline !important;
            }

            .align-self-xl-stretch {
                align-self: stretch !important;
            }

            .order-xl-first {
                order: -1 !important;
            }

            .order-xl-0 {
                order: 0 !important;
            }

            .order-xl-1 {
                order: 1 !important;
            }

            .order-xl-2 {
                order: 2 !important;
            }

            .order-xl-3 {
                order: 3 !important;
            }

            .order-xl-4 {
                order: 4 !important;
            }

            .order-xl-5 {
                order: 5 !important;
            }

            .order-xl-last {
                order: 6 !important;
            }

            .m-xl-0 {
                margin: 0 !important;
            }

            .m-xl-1 {
                margin: 0.25rem !important;
            }

            .m-xl-2 {
                margin: 0.5rem !important;
            }

            .m-xl-3 {
                margin: 1rem !important;
            }

            .m-xl-4 {
                margin: 1.5rem !important;
            }

            .m-xl-5 {
                margin: 3rem !important;
            }

            .m-xl-auto {
                margin: auto !important;
            }

            .mx-xl-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .mx-xl-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }

            .mx-xl-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }

            .mx-xl-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }

            .mx-xl-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important;
            }

            .mx-xl-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important;
            }

            .mx-xl-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }

            .my-xl-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-xl-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-xl-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-xl-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-xl-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important;
            }

            .my-xl-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }

            .my-xl-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-xl-0 {
                margin-top: 0 !important;
            }

            .mt-xl-1 {
                margin-top: 0.25rem !important;
            }

            .mt-xl-2 {
                margin-top: 0.5rem !important;
            }

            .mt-xl-3 {
                margin-top: 1rem !important;
            }

            .mt-xl-4 {
                margin-top: 1.5rem !important;
            }

            .mt-xl-5 {
                margin-top: 3rem !important;
            }

            .mt-xl-auto {
                margin-top: auto !important;
            }

            html:not([dir=rtl]) .me-xl-0 {
                margin-right: 0 !important;
            }

            *[dir=rtl] .me-xl-0 {
                margin-left: 0 !important;
            }

            html:not([dir=rtl]) .me-xl-1 {
                margin-right: 0.25rem !important;
            }

            *[dir=rtl] .me-xl-1 {
                margin-left: 0.25rem !important;
            }

            html:not([dir=rtl]) .me-xl-2 {
                margin-right: 0.5rem !important;
            }

            *[dir=rtl] .me-xl-2 {
                margin-left: 0.5rem !important;
            }

            html:not([dir=rtl]) .me-xl-3 {
                margin-right: 1rem !important;
            }

            *[dir=rtl] .me-xl-3 {
                margin-left: 1rem !important;
            }

            html:not([dir=rtl]) .me-xl-4 {
                margin-right: 1.5rem !important;
            }

            *[dir=rtl] .me-xl-4 {
                margin-left: 1.5rem !important;
            }

            html:not([dir=rtl]) .me-xl-5 {
                margin-right: 3rem !important;
            }

            *[dir=rtl] .me-xl-5 {
                margin-left: 3rem !important;
            }

            html:not([dir=rtl]) .me-xl-auto {
                margin-right: auto !important;
            }

            *[dir=rtl] .me-xl-auto {
                margin-left: auto !important;
            }

            .mb-xl-0 {
                margin-bottom: 0 !important;
            }

            .mb-xl-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-xl-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-xl-3 {
                margin-bottom: 1rem !important;
            }

            .mb-xl-4 {
                margin-bottom: 1.5rem !important;
            }

            .mb-xl-5 {
                margin-bottom: 3rem !important;
            }

            .mb-xl-auto {
                margin-bottom: auto !important;
            }

            html:not([dir=rtl]) .ms-xl-0 {
                margin-left: 0 !important;
            }

            *[dir=rtl] .ms-xl-0 {
                margin-right: 0 !important;
            }

            html:not([dir=rtl]) .ms-xl-1 {
                margin-left: 0.25rem !important;
            }

            *[dir=rtl] .ms-xl-1 {
                margin-right: 0.25rem !important;
            }

            html:not([dir=rtl]) .ms-xl-2 {
                margin-left: 0.5rem !important;
            }

            *[dir=rtl] .ms-xl-2 {
                margin-right: 0.5rem !important;
            }

            html:not([dir=rtl]) .ms-xl-3 {
                margin-left: 1rem !important;
            }

            *[dir=rtl] .ms-xl-3 {
                margin-right: 1rem !important;
            }

            html:not([dir=rtl]) .ms-xl-4 {
                margin-left: 1.5rem !important;
            }

            *[dir=rtl] .ms-xl-4 {
                margin-right: 1.5rem !important;
            }

            html:not([dir=rtl]) .ms-xl-5 {
                margin-left: 3rem !important;
            }

            *[dir=rtl] .ms-xl-5 {
                margin-right: 3rem !important;
            }

            html:not([dir=rtl]) .ms-xl-auto {
                margin-left: auto !important;
            }

            *[dir=rtl] .ms-xl-auto {
                margin-right: auto !important;
            }

            .p-xl-0 {
                padding: 0 !important;
            }

            .p-xl-1 {
                padding: 0.25rem !important;
            }

            .p-xl-2 {
                padding: 0.5rem !important;
            }

            .p-xl-3 {
                padding: 1rem !important;
            }

            .p-xl-4 {
                padding: 1.5rem !important;
            }

            .p-xl-5 {
                padding: 3rem !important;
            }

            .px-xl-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .px-xl-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }

            .px-xl-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }

            .px-xl-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }

            .px-xl-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important;
            }

            .px-xl-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important;
            }

            .py-xl-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-xl-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-xl-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-xl-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-xl-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .py-xl-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }

            .pt-xl-0 {
                padding-top: 0 !important;
            }

            .pt-xl-1 {
                padding-top: 0.25rem !important;
            }

            .pt-xl-2 {
                padding-top: 0.5rem !important;
            }

            .pt-xl-3 {
                padding-top: 1rem !important;
            }

            .pt-xl-4 {
                padding-top: 1.5rem !important;
            }

            .pt-xl-5 {
                padding-top: 3rem !important;
            }

            html:not([dir=rtl]) .pe-xl-0 {
                padding-right: 0 !important;
            }

            *[dir=rtl] .pe-xl-0 {
                padding-left: 0 !important;
            }

            html:not([dir=rtl]) .pe-xl-1 {
                padding-right: 0.25rem !important;
            }

            *[dir=rtl] .pe-xl-1 {
                padding-left: 0.25rem !important;
            }

            html:not([dir=rtl]) .pe-xl-2 {
                padding-right: 0.5rem !important;
            }

            *[dir=rtl] .pe-xl-2 {
                padding-left: 0.5rem !important;
            }

            html:not([dir=rtl]) .pe-xl-3 {
                padding-right: 1rem !important;
            }

            *[dir=rtl] .pe-xl-3 {
                padding-left: 1rem !important;
            }

            html:not([dir=rtl]) .pe-xl-4 {
                padding-right: 1.5rem !important;
            }

            *[dir=rtl] .pe-xl-4 {
                padding-left: 1.5rem !important;
            }

            html:not([dir=rtl]) .pe-xl-5 {
                padding-right: 3rem !important;
            }

            *[dir=rtl] .pe-xl-5 {
                padding-left: 3rem !important;
            }

            .pb-xl-0 {
                padding-bottom: 0 !important;
            }

            .pb-xl-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-xl-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-xl-3 {
                padding-bottom: 1rem !important;
            }

            .pb-xl-4 {
                padding-bottom: 1.5rem !important;
            }

            .pb-xl-5 {
                padding-bottom: 3rem !important;
            }

            html:not([dir=rtl]) .ps-xl-0 {
                padding-left: 0 !important;
            }

            *[dir=rtl] .ps-xl-0 {
                padding-right: 0 !important;
            }

            html:not([dir=rtl]) .ps-xl-1 {
                padding-left: 0.25rem !important;
            }

            *[dir=rtl] .ps-xl-1 {
                padding-right: 0.25rem !important;
            }

            html:not([dir=rtl]) .ps-xl-2 {
                padding-left: 0.5rem !important;
            }

            *[dir=rtl] .ps-xl-2 {
                padding-right: 0.5rem !important;
            }

            html:not([dir=rtl]) .ps-xl-3 {
                padding-left: 1rem !important;
            }

            *[dir=rtl] .ps-xl-3 {
                padding-right: 1rem !important;
            }

            html:not([dir=rtl]) .ps-xl-4 {
                padding-left: 1.5rem !important;
            }

            *[dir=rtl] .ps-xl-4 {
                padding-right: 1.5rem !important;
            }

            html:not([dir=rtl]) .ps-xl-5 {
                padding-left: 3rem !important;
            }

            *[dir=rtl] .ps-xl-5 {
                padding-right: 3rem !important;
            }

            .gap-xl-0 {
                grid-gap: 0 !important;
                gap: 0 !important;
            }

            .gap-xl-1 {
                grid-gap: 0.25rem !important;
                gap: 0.25rem !important;
            }

            .gap-xl-2 {
                grid-gap: 0.5rem !important;
                gap: 0.5rem !important;
            }

            .gap-xl-3 {
                grid-gap: 1rem !important;
                gap: 1rem !important;
            }

            .gap-xl-4 {
                grid-gap: 1.5rem !important;
                gap: 1.5rem !important;
            }

            .gap-xl-5 {
                grid-gap: 3rem !important;
                gap: 3rem !important;
            }

            html:not([dir=rtl]) .text-xl-start {
                text-align: left !important;
            }

            *[dir=rtl] .text-xl-start {
                text-align: right !important;
            }

            html:not([dir=rtl]) .text-xl-end {
                text-align: right !important;
            }

            *[dir=rtl] .text-xl-end {
                text-align: left !important;
            }

            html:not([dir=rtl]) .text-xl-center {
                text-align: center !important;
            }

            *[dir=rtl] .text-xl-center {
                text-align: center !important;
            }
        }

        @media (min-width: 1400px) {
            html:not([dir=rtl]) .float-xxl-start {
                float: left !important;
            }

            *[dir=rtl] .float-xxl-start {
                float: right !important;
            }

            html:not([dir=rtl]) .float-xxl-end {
                float: right !important;
            }

            *[dir=rtl] .float-xxl-end {
                float: left !important;
            }

            html:not([dir=rtl]) .float-xxl-none {
                float: none !important;
            }

            *[dir=rtl] .float-xxl-none {
                float: none !important;
            }

            .d-xxl-inline {
                display: inline !important;
            }

            .d-xxl-inline-block {
                display: inline-block !important;
            }

            .d-xxl-block {
                display: block !important;
            }

            .d-xxl-grid {
                display: grid !important;
            }

            .d-xxl-table {
                display: table !important;
            }

            .d-xxl-table-row {
                display: table-row !important;
            }

            .d-xxl-table-cell {
                display: table-cell !important;
            }

            .d-xxl-flex {
                display: flex !important;
            }

            .d-xxl-inline-flex {
                display: inline-flex !important;
            }

            .d-xxl-none {
                display: none !important;
            }

            .flex-xxl-fill {
                flex: 1 1 auto !important;
            }

            .flex-xxl-row {
                flex-direction: row !important;
            }

            .flex-xxl-column {
                flex-direction: column !important;
            }

            .flex-xxl-row-reverse {
                flex-direction: row-reverse !important;
            }

            .flex-xxl-column-reverse {
                flex-direction: column-reverse !important;
            }

            .flex-xxl-grow-0 {
                flex-grow: 0 !important;
            }

            .flex-xxl-grow-1 {
                flex-grow: 1 !important;
            }

            .flex-xxl-shrink-0 {
                flex-shrink: 0 !important;
            }

            .flex-xxl-shrink-1 {
                flex-shrink: 1 !important;
            }

            .flex-xxl-wrap {
                flex-wrap: wrap !important;
            }

            .flex-xxl-nowrap {
                flex-wrap: nowrap !important;
            }

            .flex-xxl-wrap-reverse {
                flex-wrap: wrap-reverse !important;
            }

            .justify-content-xxl-start {
                justify-content: flex-start !important;
            }

            .justify-content-xxl-end {
                justify-content: flex-end !important;
            }

            .justify-content-xxl-center {
                justify-content: center !important;
            }

            .justify-content-xxl-between {
                justify-content: space-between !important;
            }

            .justify-content-xxl-around {
                justify-content: space-around !important;
            }

            .justify-content-xxl-evenly {
                justify-content: space-evenly !important;
            }

            .align-items-xxl-start {
                align-items: flex-start !important;
            }

            .align-items-xxl-end {
                align-items: flex-end !important;
            }

            .align-items-xxl-center {
                align-items: center !important;
            }

            .align-items-xxl-baseline {
                align-items: baseline !important;
            }

            .align-items-xxl-stretch {
                align-items: stretch !important;
            }

            .align-content-xxl-start {
                align-content: flex-start !important;
            }

            .align-content-xxl-end {
                align-content: flex-end !important;
            }

            .align-content-xxl-center {
                align-content: center !important;
            }

            .align-content-xxl-between {
                align-content: space-between !important;
            }

            .align-content-xxl-around {
                align-content: space-around !important;
            }

            .align-content-xxl-stretch {
                align-content: stretch !important;
            }

            .align-self-xxl-auto {
                align-self: auto !important;
            }

            .align-self-xxl-start {
                align-self: flex-start !important;
            }

            .align-self-xxl-end {
                align-self: flex-end !important;
            }

            .align-self-xxl-center {
                align-self: center !important;
            }

            .align-self-xxl-baseline {
                align-self: baseline !important;
            }

            .align-self-xxl-stretch {
                align-self: stretch !important;
            }

            .order-xxl-first {
                order: -1 !important;
            }

            .order-xxl-0 {
                order: 0 !important;
            }

            .order-xxl-1 {
                order: 1 !important;
            }

            .order-xxl-2 {
                order: 2 !important;
            }

            .order-xxl-3 {
                order: 3 !important;
            }

            .order-xxl-4 {
                order: 4 !important;
            }

            .order-xxl-5 {
                order: 5 !important;
            }

            .order-xxl-last {
                order: 6 !important;
            }

            .m-xxl-0 {
                margin: 0 !important;
            }

            .m-xxl-1 {
                margin: 0.25rem !important;
            }

            .m-xxl-2 {
                margin: 0.5rem !important;
            }

            .m-xxl-3 {
                margin: 1rem !important;
            }

            .m-xxl-4 {
                margin: 1.5rem !important;
            }

            .m-xxl-5 {
                margin: 3rem !important;
            }

            .m-xxl-auto {
                margin: auto !important;
            }

            .mx-xxl-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .mx-xxl-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }

            .mx-xxl-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }

            .mx-xxl-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }

            .mx-xxl-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important;
            }

            .mx-xxl-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important;
            }

            .mx-xxl-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }

            .my-xxl-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-xxl-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-xxl-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-xxl-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-xxl-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important;
            }

            .my-xxl-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }

            .my-xxl-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-xxl-0 {
                margin-top: 0 !important;
            }

            .mt-xxl-1 {
                margin-top: 0.25rem !important;
            }

            .mt-xxl-2 {
                margin-top: 0.5rem !important;
            }

            .mt-xxl-3 {
                margin-top: 1rem !important;
            }

            .mt-xxl-4 {
                margin-top: 1.5rem !important;
            }

            .mt-xxl-5 {
                margin-top: 3rem !important;
            }

            .mt-xxl-auto {
                margin-top: auto !important;
            }

            html:not([dir=rtl]) .me-xxl-0 {
                margin-right: 0 !important;
            }

            *[dir=rtl] .me-xxl-0 {
                margin-left: 0 !important;
            }

            html:not([dir=rtl]) .me-xxl-1 {
                margin-right: 0.25rem !important;
            }

            *[dir=rtl] .me-xxl-1 {
                margin-left: 0.25rem !important;
            }

            html:not([dir=rtl]) .me-xxl-2 {
                margin-right: 0.5rem !important;
            }

            *[dir=rtl] .me-xxl-2 {
                margin-left: 0.5rem !important;
            }

            html:not([dir=rtl]) .me-xxl-3 {
                margin-right: 1rem !important;
            }

            *[dir=rtl] .me-xxl-3 {
                margin-left: 1rem !important;
            }

            html:not([dir=rtl]) .me-xxl-4 {
                margin-right: 1.5rem !important;
            }

            *[dir=rtl] .me-xxl-4 {
                margin-left: 1.5rem !important;
            }

            html:not([dir=rtl]) .me-xxl-5 {
                margin-right: 3rem !important;
            }

            *[dir=rtl] .me-xxl-5 {
                margin-left: 3rem !important;
            }

            html:not([dir=rtl]) .me-xxl-auto {
                margin-right: auto !important;
            }

            *[dir=rtl] .me-xxl-auto {
                margin-left: auto !important;
            }

            .mb-xxl-0 {
                margin-bottom: 0 !important;
            }

            .mb-xxl-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-xxl-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-xxl-3 {
                margin-bottom: 1rem !important;
            }

            .mb-xxl-4 {
                margin-bottom: 1.5rem !important;
            }

            .mb-xxl-5 {
                margin-bottom: 3rem !important;
            }

            .mb-xxl-auto {
                margin-bottom: auto !important;
            }

            html:not([dir=rtl]) .ms-xxl-0 {
                margin-left: 0 !important;
            }

            *[dir=rtl] .ms-xxl-0 {
                margin-right: 0 !important;
            }

            html:not([dir=rtl]) .ms-xxl-1 {
                margin-left: 0.25rem !important;
            }

            *[dir=rtl] .ms-xxl-1 {
                margin-right: 0.25rem !important;
            }

            html:not([dir=rtl]) .ms-xxl-2 {
                margin-left: 0.5rem !important;
            }

            *[dir=rtl] .ms-xxl-2 {
                margin-right: 0.5rem !important;
            }

            html:not([dir=rtl]) .ms-xxl-3 {
                margin-left: 1rem !important;
            }

            *[dir=rtl] .ms-xxl-3 {
                margin-right: 1rem !important;
            }

            html:not([dir=rtl]) .ms-xxl-4 {
                margin-left: 1.5rem !important;
            }

            *[dir=rtl] .ms-xxl-4 {
                margin-right: 1.5rem !important;
            }

            html:not([dir=rtl]) .ms-xxl-5 {
                margin-left: 3rem !important;
            }

            *[dir=rtl] .ms-xxl-5 {
                margin-right: 3rem !important;
            }

            html:not([dir=rtl]) .ms-xxl-auto {
                margin-left: auto !important;
            }

            *[dir=rtl] .ms-xxl-auto {
                margin-right: auto !important;
            }

            .p-xxl-0 {
                padding: 0 !important;
            }

            .p-xxl-1 {
                padding: 0.25rem !important;
            }

            .p-xxl-2 {
                padding: 0.5rem !important;
            }

            .p-xxl-3 {
                padding: 1rem !important;
            }

            .p-xxl-4 {
                padding: 1.5rem !important;
            }

            .p-xxl-5 {
                padding: 3rem !important;
            }

            .px-xxl-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .px-xxl-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }

            .px-xxl-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }

            .px-xxl-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }

            .px-xxl-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important;
            }

            .px-xxl-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important;
            }

            .py-xxl-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-xxl-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-xxl-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-xxl-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-xxl-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .py-xxl-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }

            .pt-xxl-0 {
                padding-top: 0 !important;
            }

            .pt-xxl-1 {
                padding-top: 0.25rem !important;
            }

            .pt-xxl-2 {
                padding-top: 0.5rem !important;
            }

            .pt-xxl-3 {
                padding-top: 1rem !important;
            }

            .pt-xxl-4 {
                padding-top: 1.5rem !important;
            }

            .pt-xxl-5 {
                padding-top: 3rem !important;
            }

            html:not([dir=rtl]) .pe-xxl-0 {
                padding-right: 0 !important;
            }

            *[dir=rtl] .pe-xxl-0 {
                padding-left: 0 !important;
            }

            html:not([dir=rtl]) .pe-xxl-1 {
                padding-right: 0.25rem !important;
            }

            *[dir=rtl] .pe-xxl-1 {
                padding-left: 0.25rem !important;
            }

            html:not([dir=rtl]) .pe-xxl-2 {
                padding-right: 0.5rem !important;
            }

            *[dir=rtl] .pe-xxl-2 {
                padding-left: 0.5rem !important;
            }

            html:not([dir=rtl]) .pe-xxl-3 {
                padding-right: 1rem !important;
            }

            *[dir=rtl] .pe-xxl-3 {
                padding-left: 1rem !important;
            }

            html:not([dir=rtl]) .pe-xxl-4 {
                padding-right: 1.5rem !important;
            }

            *[dir=rtl] .pe-xxl-4 {
                padding-left: 1.5rem !important;
            }

            html:not([dir=rtl]) .pe-xxl-5 {
                padding-right: 3rem !important;
            }

            *[dir=rtl] .pe-xxl-5 {
                padding-left: 3rem !important;
            }

            .pb-xxl-0 {
                padding-bottom: 0 !important;
            }

            .pb-xxl-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-xxl-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-xxl-3 {
                padding-bottom: 1rem !important;
            }

            .pb-xxl-4 {
                padding-bottom: 1.5rem !important;
            }

            .pb-xxl-5 {
                padding-bottom: 3rem !important;
            }

            html:not([dir=rtl]) .ps-xxl-0 {
                padding-left: 0 !important;
            }

            *[dir=rtl] .ps-xxl-0 {
                padding-right: 0 !important;
            }

            html:not([dir=rtl]) .ps-xxl-1 {
                padding-left: 0.25rem !important;
            }

            *[dir=rtl] .ps-xxl-1 {
                padding-right: 0.25rem !important;
            }

            html:not([dir=rtl]) .ps-xxl-2 {
                padding-left: 0.5rem !important;
            }

            *[dir=rtl] .ps-xxl-2 {
                padding-right: 0.5rem !important;
            }

            html:not([dir=rtl]) .ps-xxl-3 {
                padding-left: 1rem !important;
            }

            *[dir=rtl] .ps-xxl-3 {
                padding-right: 1rem !important;
            }

            html:not([dir=rtl]) .ps-xxl-4 {
                padding-left: 1.5rem !important;
            }

            *[dir=rtl] .ps-xxl-4 {
                padding-right: 1.5rem !important;
            }

            html:not([dir=rtl]) .ps-xxl-5 {
                padding-left: 3rem !important;
            }

            *[dir=rtl] .ps-xxl-5 {
                padding-right: 3rem !important;
            }

            .gap-xxl-0 {
                grid-gap: 0 !important;
                gap: 0 !important;
            }

            .gap-xxl-1 {
                grid-gap: 0.25rem !important;
                gap: 0.25rem !important;
            }

            .gap-xxl-2 {
                grid-gap: 0.5rem !important;
                gap: 0.5rem !important;
            }

            .gap-xxl-3 {
                grid-gap: 1rem !important;
                gap: 1rem !important;
            }

            .gap-xxl-4 {
                grid-gap: 1.5rem !important;
                gap: 1.5rem !important;
            }

            .gap-xxl-5 {
                grid-gap: 3rem !important;
                gap: 3rem !important;
            }

            html:not([dir=rtl]) .text-xxl-start {
                text-align: left !important;
            }

            *[dir=rtl] .text-xxl-start {
                text-align: right !important;
            }

            html:not([dir=rtl]) .text-xxl-end {
                text-align: right !important;
            }

            *[dir=rtl] .text-xxl-end {
                text-align: left !important;
            }

            html:not([dir=rtl]) .text-xxl-center {
                text-align: center !important;
            }

            *[dir=rtl] .text-xxl-center {
                text-align: center !important;
            }
        }

        @media (min-width: 1200px) {
            .fs-1 {
                font-size: 2.5rem !important;
            }

            .fs-2 {
                font-size: 2rem !important;
            }

            .fs-3 {
                font-size: 1.75rem !important;
            }

            .fs-4 {
                font-size: 1.5rem !important;
            }
        }

        @media print {
            .d-print-inline {
                display: inline !important;
            }

            .d-print-inline-block {
                display: inline-block !important;
            }

            .d-print-block {
                display: block !important;
            }

            .d-print-grid {
                display: grid !important;
            }

            .d-print-table {
                display: table !important;
            }

            .d-print-table-row {
                display: table-row !important;
            }

            .d-print-table-cell {
                display: table-cell !important;
            }

            .d-print-flex {
                display: flex !important;
            }

            .d-print-inline-flex {
                display: inline-flex !important;
            }

            .d-print-none {
                display: none !important;
            }
        }

        .wrapper {
            width: 100%;
            will-change: auto;
            transition: padding 0.15s;
        }

        html:not([dir=rtl]) .wrapper {
            padding-left: 0;
            padding-left: var(--cui-sidebar-occupy-start, 0);
        }

        *[dir=rtl] .wrapper {
            padding-right: 0;
            padding-right: var(--cui-sidebar-occupy-start, 0);
        }

        @media (prefers-reduced-motion: reduce) {
            .wrapper {
                transition: none;
            }
        }

        @font-face {
            font-family: "PoppinsRegular";
            src: local("PoppinsRegular"), url(/static/media/Poppins-Regular.8081832f.ttf) format("truetype");
            font-weight: normal;
        }

        body {
            font-family: PoppinsRegular;
        }

        .message-chat-active {
            font-weight: "600" !important;
            color: #5A55CB !important;
        }

        .view-profile-image-css {
            margin-top: 10px;
            height: 190px;
            border-radius: 10px;
        }

        .view-profile-image-border-css {
            border-radius: 10px;
        }

        .message-conversation-user-profile {
            font-size: 11px;
            color: #5A55CB;
            cursor: pointer;
        }

        .message-chat-in-active {
            font-weight: "600" !important;
            color: #000 !important;
        }

        body::-webkit-scrollbar {
            width: 5px;
        }

        body::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        body::-webkit-scrollbar-thumb {
            background-color: darkgrey;
            outline: 1px solid slategrey;
        }

        .chatlist-scrollbar-css::-webkit-scrollbar {
            width: 5px;
        }

        .chatlist-scrollbar-css::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        .chatlist-scrollbar-css::-webkit-scrollbar-thumb {
            background-color: darkgrey;
        }

        .conversation-scrollbar-css::-webkit-scrollbar {
            width: 5px;
        }

        .conversation-scrollbar-css::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        .conversation-scrollbar-css::-webkit-scrollbar-thumb {
            background-color: darkgrey;
        }

        .bg-light {
            background-color: #5A55CB !important;
        }

        .swal2-confirm {
            margin-right: 1rem !important;
        }

        .sidebar-brand {
            background-color: #F3F4F8;
            align-items: center;
            justify-content: center;
            flex: 0 0 7rem;
        }

        .sidebar-nav {
            background-color: #5A55CB;
            padding-top: 1rem;
        }

        .sidebar-toggler {
            background-color: #4640AA;
        }

        .sidebar-toggler:hover {
            background-color: #4640AA;
        }

        .sidebar-nav .nav-link {
            background-color: #5A55CB;
            color: #fff;
            background: #5A55CB;
            padding: 0.5rem 1rem;
        }

        .sidebar-nav .nav-link:hover {
            background-color: #4640AA;
        }

        .sidebar-nav .nav-link.active {
            background-color: white;
            font-weight: bold;
            color: #5A55CB;
            border-top-left-radius: 25rem;
            border-bottom-left-radius: 25rem;
            padding-left: 1.7rem;
        }

        .card-text:last-child {
            margin-bottom: 0;
            color: black;
            font-size: 25px;
        }

        .ql-editor {
            min-height: 200px;
            box-sizing: border-box;
            line-height: 1.42;
            height: 100%;
            outline: none;
            overflow-y: auto;
            padding: 14px 0px 10px 9px !important;
            -o-tab-size: 4;
            tab-size: 4;
            -moz-tab-size: 4;
            text-align: left;
            white-space: pre-wrap;
            word-wrap: break-word;
        }

        .header {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            min-height: 7rem;
            background: #F3F4F8;
            border-bottom: 1px solid #d8dbe0;
            border-bottom: 1px solid #d8dbe0;
            border-bottom: var(--cui-header-border-width, 1px) solid var(--cui-header-border-color, #d8dbe0);
        }

        .header-top-menu-nav-link-css {
            padding: 0px !important;
            text-decoration: none;
        }

        .menu-active-color {
            --cui-btn-bg: #F3F4F8;
            --cui-btn-border-color: #F3F4F8;
            --cui-btn-color: #F3F4F8;
            --cui-btn-hover-bg: #F3F4F8;
            --cui-btn-hover-border-color: #F3F4F8;
            --cui-btn-hover-color: #F3F4F8;
            --cui-btn-active-bg: #F3F4F8;
            --cui-btn-active-border-color: #F3F4F8;
            --cui-btn-active-color: #F3F4F8;
            --cui-btn-disabled-bg: #F3F4F8;
            --cui-btn-disabled-border-color: #F3F4F8;
            --cui-btn-disabled-color: #F3F4F8;
            --cui-btn-shadow: #F3F4F8;
        }

        .dropdown-menu-position-css {
            position: absolute;
            inset: 0px auto auto 0px;
            transform: translate(-20px, 92px);
        }

        .card-css_active_item {
            border: 1px solid #c82090 !important;
            width: 7rem;
            background: linear-gradient(50deg, #c82090 32%, #6a14d1 100%);
        }

        .active-triangle {
            border-style: solid;
            border-width: 10px 10px 0 10px;
            border-color: #c82090 transparent transparent transparent;
            position: absolute;
            top: 78px;
            left: 46px;
        }

        .card-Image {
            height: 20px;
            width: 20px;
        }

        .more-menu-Image {
            height: 25px;
            width: 25px;
            margin-right: 0.5rem;
        }

        .top-menu-padding {
            padding-left: 0px;
        }

        .card-Name {
            color: #797979 !important;
            font-size: 14px !important;
            font-weight: 500;
            text-align: center;
        }

        .card-Name_active_item {
            color: #fff !important;
            font-size: 14px !important;
            font-weight: 500;
            text-align: center;
        }

        .card-css {
            border-color: #fff;
            box-shadow: 0px 1px 1px 2px #ddd;
            width: 7rem;
        }

        .long-menu-card-text-top-menu {
            line-height: 1rem !important;
        }

        .long-menu-card-body-top-menu {
            padding: 0.7rem 0rem !important;
        }

        .custom-headercard-body {
            padding: 1rem 0rem;
        }

        .dropdown-item-css {
            padding: 0.6rem 1rem;
            border-bottom: 2px solid #BCBAE8;
        }

        .dropdown-last-item-css {
            padding: 0.6rem 1rem;
        }

        .dropdown-item-image-css {
            margin-right: 0.5rem;
        }

        .dropdown-active-item-css {
            position: absolute;
            inset: 0px auto auto 0px;
            transform: translate(-32px, 92px);
            box-shadow: 0px 2px 2px 3px #ddd;
        }

        .card-active-css {
            background-color: #7E17C3;
        }

        .header-more-item-background-color:hover {
            background: #F3F4F8;
        }

        .dropdown-menu-row-css {
            margin-top: 0.5rem;
        }

        .body-content-css {
            background-color: #fff;
            width: 92.5%;
            margin-right: 2%;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }

        .right-sidebar-css {
            background-color: #fff;
            width: 5%;
            margin-top: -24px;
            height: auto;
            position: fixed;
            right: 0;
        }

        .active_item {
            background-color: blue;
        }

        .navbar__link:hover {
            transform: translateY(-2px);
        }

        .navbar__link--active {
            border-bottom: 3px solid #29b6f6;
            transition: border-bottom 0.5s ease-in-out;
        }

        .right-sidebar-menu-css {
            justify-content: center;
            text-align: center;
            margin-bottom: 1rem;
        }

        .image-icon-css {
            width: 32px;
            height: 32px;
            margin-bottom: 0.5rem;
        }

        .right-menu-body-css {
            margin-top: 1.5rem;
        }

        .menu-moblie-view {
            width: 23rem;
        }

        .dropdown-menu-phone-css {
            margin-top: 0 !important;
            right: 0 !important;
            padding-bottom: 1rem !important;
            background-color: #5A55CB !important;
        }

        .dropdown-menu-item-phone-css {
            color: #fff;
        }

        .dropdown-menu-item-phone-image-css {
            margin-right: 10px;
        }

        .marker-remove-css {
            color: transparent;
            padding-bottom: 1rem;
        }

        .marker-remove-textbook-css {
            color: transparent;
            padding-bottom: 1rem;
            display: contents;
        }

        .menu-css {
            padding: 0px;
        }

        .footer {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            min-height: 3rem;
            padding: 0.5rem 1rem;
            color: rgba(44, 56, 74, 0.95);
            color: rgba(44, 56, 74, 0.95);
            color: var(--cui-footer-color, rgba(44, 56, 74, 0.95));
            background: #F3F4F8;
        }

        .toggle-menu-hide-from-destop-view {
            display: none !important;
        }

        @media all and (max-width: 1280px) and (min-width: 320px) {
            .body-content-css {
                background-color: #fff;
                width: 92.5%;
                margin-right: 2%;
                border-top-left-radius: 0.5rem;
                border-top-right-radius: 0.5rem;
                margin-left: 14px;
            }

            .textbook-search-mobile-view-css {
                margin-bottom: 10px;
                margin-top: 10px;
            }

            .toggle-menu-hide-from-destop-view {
                display: block !important;
            }

            .top-menu-hide-from-mobile-view {
                display: none !important;
            }
        }

        .accordion-header-css {
            border-radius: 10px;
            background: #F2F4F8;
        }

        .answer-input-css {
            border-radius: 48px;
        }

        .text-book-css {
            background-image: url(/static/media/BackgroundImage.e89866af.png);
            height: auto;
            background-repeat: round;
            border-radius: 0px;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            margin-top: 15px;
            margin-right: 3px;
            margin-left: 3px;
        }

        .textbook-add-button-css,
        .join-school-add-button-css {
            color: white;
            font-weight: 500;
            width: 60px;
            font-size: 12px;
            border-radius: 30px;
            height: 27px;
            text-align: center;
            line-height: 1px;
            border-width: 1px;
            border-color: #fff;
            background-color: #5A55CA;
            margin-left: 1rem;
        }

        select option {
            color: #000;
        }

        .textbook-search-menu-css {
            font-size: 14px;
            padding: 0.375rem 0.75rem 0.375rem 0.75rem;
            -moz-appearance: none;
            -webkit-appearance: auto;
            appearance: auto;
            color: #fff;
            background: rgba(149, 148, 146, 0.3);
            border-radius: 15rem;
            border-width: 1px;
            border-color: #fff;
        }

        .textbook-search-menu-css::-moz-placeholder {
            color: #fff;
        }

        .textbook-search-menu-css::placeholder {
            color: #fff;
        }

        .textbook-search-menu-row-css {
            flex-shrink: 0;
            width: 100%;
            padding-right: calc(var(--cui-gutter-x) * 0) !important;
            padding-left: calc(var(--cui-gutter-x) * 0) !important;
            margin-top: var(--cui-gutter-y);
            justify-content: center;
            margin-left: 0px !important;
            margin-right: 0px !important;
        }

        .textbook-card-list-css {
            border: none;
            margin-bottom: 15px;
        }

        .textbook-card-list-action-menu-css {
            height: 30px;
            width: 30px;
            right: 5px;
            top: 8px;
        }

        .textbook-action-dropdown-menu-css {
            margin-top: 39px;
            margin-left: 30px;
            min-width: 7rem;
        }

        .text-book-card-list-css {
            height: 100px;
            width: 140px;
            border-radius: 10px;
            border: 1px solid black;
            min-height: 130px;
        }

        .text-book-text-css {
            font-weight: bold;
            font-size: 19px;
        }

        .cursor-css {
            cursor: pointer;
        }

        .text-book-card-list-css-static {
            height: 150PX;
            width: 135PX;
            border-radius: 10px;
            border: 1px solid black;
        }

        .textbook-card-list-row-css {
            margin-left: 10px;
            margin-right: 40px;
        }

        .view-textbook-image-col-css {
            flex: 0 1;
            width: 134px;
        }

        /*Login Page*/
        .loginpage {
            background-color: #5A55CA;
        }

        .cust-color {
            background-color: #25217B !important;
            color: white;
            font-size: 18px;
        }

        .textDecorationNone {
            text-decoration: none;
        }

        /**** Registion Page Css ****/
        .rigistonpage {
            background-color: #5A55CA;
        }

        .registertext {
            font-weight: bold;
            color: #333333;
        }

        .iconstyle {
            font-size: 18px;
            font-weight: 500;
            padding: 5px 0px 0px 15px;
        }

        .signup-color {
            background-color: #5A55CA !important;
            color: white;
            font-size: 18px;
        }

        .withoutpage-color {
            background-color: #5A55CA !important;
            color: white;
            font-size: 14px;
        }

        .reset-button-color {
            background-color: white !important;
            font-size: 18px;
            border: none;
            text-decoration: underline;
        }

        .liginlink {
            margin-top: 30px;
            letter-spacing: 1px;
        }

        .network-action-dropdown-menu-css {
            margin-top: 5px;
            min-width: 7rem;
        }

        hr.dashed {
            border-top: 3px dashed #bbb;
            background-color: white;
        }

        .password-show-button {
            float: right;
            right: 35px;
            bottom: 25px;
        }

        .password-show {
            position: absolute;
            /* top: -37px; */
            bottom: 40px;
            right: 30px;
            float: right;
        }

        .login-password-show-button {
            border: 0px;
            right: 10px;
            bottom: 20px;
        }

        .forgot-password-link {
            text-decoration: none;
        }

        /**** My Profile Details Page Css ****/
        /*update start*/
        .page-header-size {
            color: #fff;
            font-size: 24px;
            font-weight: 600;
        }

        .profile-card-list-css {
            background-image: url(assets/images/profile-background.879fbc11.jpg);
            height: auto;
            background-repeat: round;
            border-radius: 0px;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            margin-top: 15px;
            margin-right: 3px;
            margin-left: 3px;
            color: white;
        }

        .myprofile {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .profile-image {
            margin-bottom: -36px;
            max-width: 120px;
            bottom: 65px;
        }

        .cardtitle {
            background-color: #DEDDF4;
        }

        .username {
            font-size: 24px;
            font-weight: 600;
        }

        .button {
            width: 112px;
        }

        .timeinput {
            width: 125px;
        }

        .starcolor {
            color: #E79E00;
        }

        .statecolor {
            color: #E79E00;
        }

        .header-profile-table {
            color: #5A55CA !important;
        }

        .icon-color {
            color: #777777;
        }

        /**** myFriends Page Css ****/
        .network-card-list-css {
            background-image: url(/static/media/Friends-banner.b28b5108.png);
            height: auto;
            background-repeat: round;
            border-radius: 0px;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            margin-top: 15px;
            margin-right: 3px;
            margin-left: 3px;
            color: white;
        }

        .network-header {
            color: #fff;
            font-size: 22px;
            font-weight: 600;
        }

        .searchinput {
            border: 2px solid white;
            background: transparent;
            color: white;
            height: 46px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .groupbutton {
            font-size: 14px;
            padding: 0.175rem 2.175rem 0.175rem 2.175rem;
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            color: #fff;
            background: rgba(223, 166, 12, 0.863);
            border-radius: 15rem;
            border: none;
            font-weight: 600;
        }

        .groupbutton-active {
            font-size: 14px;
            padding: 0.175rem 2.175rem 0.175rem 2.175rem;
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            color: #fff;
            background: #5141e0;
            border-radius: 15rem;
            border: none;
            font-weight: 600;
        }

        .request-icon-css {
            height: 15px;
            width: 15px;
        }

        .accodion-border-css {
            background-color: rgb(242, 244, 248);
            border-left: 5px solid;
            border-left-color: #E49E07;
        }

        /*Course Page */
        .my-course-call-modal {
            font-size: 15px;
        }

        .uncomplete-text {
            text-align: start;
        }

        .text-only-bold {
            font-weight: 600;
        }

        .normal-font {
            font-family: "PoppinsRegular";
            font-size: 14px;
            color: #8D8D8E;
        }

        .simple-normal-font {
            font-family: "PoppinsRegular";
            font-size: 14px;
            color: #111111;
        }

        .my-student-data {
            word-break: break-word;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            line-height: 16px;
            /* fallback */
            max-height: 32px;
            /* fallback */
            -webkit-line-clamp: 2;
            /* number of lines to show */
            -webkit-box-orient: vertical;
        }

        .card-title {
            font-family: "PoppinsRegular";
            font-size: 18px;
            color: #111111;
        }

        .medium-text {
            font-family: "PoppinsRegular";
            font-size: 16px;
            color: #333333;
        }

        .roundshap-button {
            background-color: #5A55CA;
            border-radius: 1.5rem !important;
        }

        /*text book*/
        .text-book-header {
            color: #fff;
            font-size: 22px;
            font-weight: 600;
        }

        /*Search Course Page*/
        .searchcourse-card-list-css {
            background-image: url(/static/media/BackgroundImage.e89866af.png);
            height: auto;
            background-repeat: round;
            border-radius: 0px;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            margin-top: 15px;
            margin-right: 3px;
            margin-left: 3px;
            color: white;
        }

        .searchcourse-header {
            color: #fff;
            font-size: 22px;
            font-weight: 600;
        }

        .buynowbutton {
            background-color: #5A55CA;
            border-radius: 25px 25px;
            padding: 0.475rem 2.175rem 0.475rem 2.175rem;
        }

        .serchcourse-search-menu-css {
            font-size: 14px;
            padding: 0.375rem 2.25rem 0.375rem 0.75rem;
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            color: #fff;
            background: rgba(149, 148, 146, 0.3019607843);
            border-radius: 15rem;
            border-width: 1px;
            border-color: #fff;
        }

        .course-image {
            max-width: 150px;
            width: auto;
        }

        .serchcourse-image {
            max-width: 150px;
            width: auto;
        }

        .serchcourse-buttonellipsis {
            color: black;
        }

        .course-buttonellipsis {
            color: black;
        }

        .list-card {
            background: #f2f4f8;
        }

        .user-img {
            height: 95px;
            width: auto;
        }

        .ellipsisbutton {
            right: 10px;
        }

        .ellipsis {
            color: #000;
        }

        .notebookimage {
            width: 100%;
            height: 150px;
        }

        .notebookdroupdown {
            top: 8px;
            right: 15px;
        }

        .notebookbutton {
            background-color: #454545;
            border: none;
            height: 32px;
            width: 35px;
        }

        .notebookbutton:hover {
            background-color: #454545;
        }

        .bookname {
            font-size: 15px;
            font-weight: 600;
        }

        .droupdownicon {
            margin-right: 10px;
        }

        .note-book-card-list-css {
            height: 130px;
            border-radius: 10px;
            border: 1px solid black;
        }

        .notebook-card-list-css {
            border: none;
            margin-bottom: 15px;
        }

        .notebook-card-list-action-menu-css {
            height: 30px;
            width: 30px;
            right: 5px;
            top: 8px;
        }

        .notebooksearchcontrol {
            border: 2px solid white;
            background: transparent;
            color: white;
            height: 46px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .notebooksearchcontrol::-moz-placeholder {
            color: #FFFFFF;
            word-wrap: break-word;
        }

        .notebooksearchcontrol::placeholder {
            color: #FFFFFF;
            word-wrap: break-word;
        }

        .notebook-runded-button {
            background-color: #5A55CA;
        }

        .notebooksearchbutton {
            background-color: white;
            position: absolute;
            border: 0px;
            right: 26px;
            bottom: 14px;
            padding: 5px 10px;
        }

        .editerlink {
            color: #4540BA;
        }

        /*Timeline Page*/
        .timeline-card {
            background-color: #F2F4F8;
        }

        .comments-button,
        .comments-assign {
            background-color: #5A55CB;
            border: 0px;
            right: 6px;
            bottom: 10px;
            padding: 5px 10px;
        }

        .library-comments-button {
            background-color: #5A55CB;
            border: 0px;
            right: 6px;
            bottom: 42px;
            padding: 5px 10px;
        }

        .timeline-name {
            width: 50px;
            height: 50px;
            background-color: #8987D2;
            border: none;
            position: relative;
        }

        .timeline-add-button {
            font-size: 16px;
            padding: 8px 28px;
            color: white;
            background-color: #4540BA;
            border: none;
            margin-left: 5px;
        }

        .timeline-header-css {
            background-image: url(/static/media/BackgroundImage.e89866af.png);
            height: auto;
            background-repeat: round;
            border-radius: 0px;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            width: 99%;
            margin: auto;
        }

        .timeline-title-row-css {
            margin-top: 30px;
        }

        .tutiondetailcenter {
            margin: auto 0;
        }

        .timelineheader {
            color: #fff;
            font-size: 22px;
            font-weight: 600;
        }

        .timeline-icon-button {
            background-color: #F2F4F8;
            border: none;
            margin-right: 5px;
        }

        .question-icon-button {
            background-color: #fff;
            border: none;
            margin-right: 5px;
        }

        .timelineicon {
            color: #777777;
        }

        .questionanswericon {
            color: #777777;
        }

        .timelineicon-active {
            color: #5A55CB;
        }

        .timeline-icon-button:hover {
            background-color: #F2F4F8;
            border: none;
            outline: none;
        }

        .question-icon-button:hover {
            background-color: #F2F4F8;
            border: none;
            outline: none;
        }

        .timeline-title-evnet-icon {
            margin-right: 10px;
        }

        .timeline-rounded-button {
            background-color: #4540BA;
        }

        .timeline-text {
            color: #777777;
            font-size: 15px;
            font-weight: 500;
        }

        .comments-message-control {
            background: transparent;
            border: 1px solid black;
            height: 46px;
        }

        .time-line-user-name {
            color: white;
            position: absolute !important;
            top: calc(5% - 17px);
            left: calc(5% - 20px);
        }

        .mytime-line-user-name {
            color: white;
            position: absolute !important;
            top: calc(14.5% - 17px);
            left: calc(5% - 20px);
        }

        .timelineSearchinput {
            width: 50%;
            background: transparent;
            border: 1px solid white;
            color: white;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .timelineSearchinput::-moz-placeholder {
            color: #fff;
        }

        .timelineSearchinput::placeholder {
            color: #fff;
        }

        .yourlogoimage {
            height: 300px;
        }

        .partiimage {
            height: 300px;
            max-width: 100%;
        }

        .timelinevideo {
            width: 100%;
        }

        .timelinerow1 {
            margin-left: 30px;
            width: 5px;
            height: 1rem;
            background-color: blue;
        }

        .timelinelist:first-child .timelinerow1 {
            margin-left: 30px;
            width: 5px;
            height: 1rem;
            background-color: white;
        }

        /*notebook*/
        .notebook-card {
            background-color: #F2F4F8;
        }

        .card-ragular-font {
            color: #777777;
            font-size: 15px;
            font-weight: 500;
        }

        .card-only-bold-font {
            font-weight: 600;
        }

        .sticky-top {
            background-color: #FFFFFF;
        }

        /*FeedBack Page */
        .feedback-card {
            background-color: #F2F4F8;
        }

        .feedback-button {
            font-size: 16px;
            font-weight: 600;
            padding: 8px 28px;
            color: white;
            background-color: #4540BA;
            border: none;
            margin-left: 5px;
        }

        .feedback-font-post-name {
            color: #777777;
            font-weight: 600;
            font-size: 15px;
        }

        /* Library */
        .comment-input-div {
            position: relative;
            display: flex;
        }

        .library-header {
            color: #fff;
            font-size: 22px;
            font-weight: 600;
        }

        /*message*/
        /*ask question*/
        .question-ans-questions {
            font-size: 22px;
            font-weight: 400;
            color: #5A55CB;
        }

        .question-ans-dropdown-menu {
            min-width: 7rem;
        }

        /*Assignment*/
        .question-add-checkbox-css {
            cursor: pointer;
            height: 20px;
            width: 20px;
        }

        .assignment-dropdown-menu {
            min-width: 7rem;
            padding-bottom: 0px;
        }

        /*Course*/
        .courses-dropdown-menu {
            min-width: 6rem;
        }

        /*QuestionsBank*/
        .morequestons {
            background-color: #4540BA;
            color: #fff;
            border: none;
        }

        .morequestonsremove {
            background-color: #C92020;
            color: #fff;
            border: none;
        }

        .morequestonsremove:hover {
            background-color: #C92020;
            color: #fff;
            border: none;
        }

        .question-font {
            color: #7773D2;
        }

        .mcq-select-css {
            width: 100%;
            height: 20px;
            border-width: 10px;
            cursor: pointer;
        }

        /*assignment-link*/
        .assignment-link {
            font-size: 18px;
            font-weight: 500;
            color: #5550BE;
        }

        .assignment-card {
            width: 100%;
        }

        .assignment-card-accordion {
            border-radius: 15px;
            border-color: #B2AFE6;
            border-style: solid;
            border-width: 0.5px;
            margin-left: 0.5px;
            margin-right: 0.5px;
            background-color: #F2F4F8;
        }

        .assignment-input-box {
            background-color: #F2F4F8;
        }

        .assignment-line-accordion {
            border-color: #B2AFE6;
            border-style: solid;
            border-width: 0.5px;
        }

        .assignment-page-like {
            text-decoration: none;
        }

        .conversation-mobile-view-css {
            display: block !important;
        }

        .assignment-cursor-pointer {
            cursor: pointer;
        }

        .assignment-Viewpage-section-marksh {
            background-color: #E2E6EF;
            border-color: #C2C8D5;
        }

        .section-marks {
            background-color: #fff;
        }

        .section-part {
            width: 30px;
            height: 30px;
            background-color: #fff;
            border-color: #8E8E8F;
            border-width: 0.5px;
            border-style: solid;
            text-align: center;
            align-items: center;
            display: flex;
            font-size: small;
            color: #777777;
        }

        .section-part1 {
            background-color: #fff;
            border-color: #8E8E8F;
            border-width: 0.5px;
            border-style: solid;
            text-align: center;
            align-items: center;
            display: flex;
            font-size: small;
            color: #777777;
        }

        .section-part-input {
            width: 30px;
            height: 30px;
            background-color: #fff;
            border-color: #8E8E8F;
            border-width: 0.5px;
            border-style: solid;
            text-align: center;
            align-items: center;
            display: flex;
            font-size: small;
            color: #777777;
        }

        .assignment-question-section-font {
            font-family: "PoppinsRegular";
            font-size: 20px;
            color: #5A55CA;
        }

        .assignment-question-font {
            font-family: "PoppinsRegular";
            font-size: 18px;
            color: #777777;
        }

        .assignment-ans-font {
            font-family: "PoppinsRegular";
            font-size: 18px;
            color: #8E8E8F;
        }

        .assignment-normal-font {
            font-family: "PoppinsRegular";
            font-size: 16px;
            color: #8E8F91;
        }

        .assignment-marks-input {
            border-width: 0.5px;
            outline: none;
            width: 40%;
            border-style: solid;
            border-color: #707070;
        }

        .assignment-marks-input::-moz-placeholder {
            text-align: center;
            font-size: small;
        }

        .assignment-marks-input::placeholder {
            text-align: center;
            font-size: small;
        }

        .marksh-add-button {
            height: 30px;
            width: 30px;
            padding: 2px;
        }

        .marks-border-css {
            border-color: #C0C5D2;
            border-width: 0.5px;
            border-style: solid;
            background-color: #E2E6EF;
        }

        .button-color-rounded-pill {
            background-color: #4540BA;
        }

        .button-color-rounded-pill:hover {
            background-color: #4540BA;
        }

        @media (max-width: 699px) {
            .conversation-mobile-view-css {
                display: none !important;
            }

            .message-responsive-display-css {
                display: block !important;
            }

            .message-display-css {
                display: none !important;
            }
        }

        .card-message-header {
            background-color: #D7DFEF;
            color: #5A55CA;
        }

        .messageuser-image {
            height: 50px;
            width: 50px;
        }

        .message-user-profile {
            background-color: white;
        }

        .settingbutton {
            border: none;
            outline: none;
            background-color: #F2F4F8;
            height: 30px;
        }

        .settingicon {
            color: #5A55CB;
            height: 10px;
            width: 10px;
        }

        .message-font-size {
            font-size: 11px;
            color: #999999;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            /* number of lines to show */
            -webkit-box-orient: vertical;
        }

        .message-chat-name-font-size {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            /* number of lines to show */
            -webkit-box-orient: vertical;
        }

        .messageprofile-image {
            width: 47px;
            height: 47px;
        }

        .bage-color {
            background-color: #4E9221;
        }

        .sortup-button {
            float: right;
            border: none;
            background-color: #D7DFEF;
        }

        .sortup-button:hover {
            background-color: #D7DFEF;
        }

        .sortupicon {
            color: #5A55CA;
        }

        .message-me {
            background-color: #5A55FD;
            color: #FFFFFF;
            font-size: 14px;
            border-radius: 0.5rem 0.5rem 0rem 0.5rem !important;
        }

        .time-zone-me {
            color: #fff;
            font-size: 10px;
        }

        .message-you {
            color: #5A55FD;
            background-color: #FFFFFF;
            font-size: 14px;
            border-radius: 0.5rem 0.5rem 0.5rem 0rem !important;
        }

        .time-zone-you {
            color: #5A55FD;
            font-size: 10px;
        }

        .search-chat-input {
            color: black;
        }

        .search-button-chat {
            color: #5A55CB;
            right: 11px;
            bottom: 1px;
            padding: 5px 10px;
        }

        .search-button-chat:hover {
            background-color: #F2F4F8;
        }

        .search-icon-chat {
            color: #5A55CB;
        }

        .group-chat {
            border-bottom: 1px solid #ccc;
        }

        .directchat {
            border-bottom: 1px solid #ccc;
        }

        .card-message-body {
            padding: 0.5rem 1rem;
        }

        .footer-message {
            position: -webkit-sticky;
            position: sticky;
        }

        .smileicon {
            color: #FFC83D;
            border-radius: 50%;
            border-color: black;
            background-color: black;
        }

        .logged-in {
            position: absolute;
            color: green;
            right: 4px;
            bottom: 0px;
        }

        .smilebeam-button,
        .smilebeam-assign {
            left: 6px;
            bottom: 10px;
            color: #EAECF1;
            background-color: #EAECF1;
            padding: 5px 10px;
            border: none;
        }

        .smilebeamicon {
            border-radius: 50%;
            color: #EAECF1;
            background-color: black;
        }

        .timelineheader {
            color: #fff;
            font-size: 22px;
            font-weight: 600;
        }

        /*Todo Page*/
        .todo-comments-message-control {
            background: transparent;
            color: black;
            height: 46px;
        }

        #todoinput-placehoder::-moz-placeholder {
            font-size: 14px;
            font-weight: 400;
            padding-left: 5px;
        }

        #todoinput-placehoder::placeholder {
            font-size: 14px;
            font-weight: 400;
            padding-left: 5px;
        }

        .todo-comments-button {
            background-color: #5A55CB;
            border: 0px;
            right: 5px;
            bottom: 9px;
            padding: 0.375rem 2.175rem 0.375rem 2.175rem;
        }

        .todo-delete-button {
            background: none;
            border: 0px;
            right: 10px;
            bottom: 9px;
            padding: 5px 10px;
        }

        .deleteicon {
            color: black;
        }

        .todocard {
            background-color: #DCE4F3;
        }

        .text-font-unmark-css {
            font-weight: 600;
            font-size: 15px;
        }

        .text-font-mark-css {
            text-decoration: line-through;
            font-weight: 600;
            font-size: 15px;
        }

        /*Search post-job */
        .post-serch-userimage {
            width: auto;
            height: 130px;
        }

        .custom-control-input {
            width: 1.25rem !important;
            height: 1.25rem !important;
            border-radius: 15px;
            border: none;
            cursor: pointer;
        }

        /*chat*/
        .nav-tabs {
            background-color: #EFEFEF !important;
            border: none !important;
        }

        .nav-link.active {
            background-color: #fff !important;
            color: #6356AF !important;
            border-bottom: 2px solid #6356AF !important;
        }

        /*School Diary*/
        .schooldiary-header-css {
            background-image: url(/static/media/SchoolDiary.d35a5417.jpg);
            height: auto;
            background-repeat: round;
            border-radius: 0px;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            width: 99%;
            margin: auto;
        }

        .text-wrap {
            word-wrap: break-word;
        }

        .tableheader {
            background-color: #A5A3E0;
        }

        .form-check-input {
            background-color: #777777;
            border: none;
            outline: none;
        }

        .form-check-input:checked {
            background-color: #2EA82E;
            border: none;
            outline: none;
        }

        .form-switch .form-check-input:checked {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%28255, 255, 255, 0.87%29'/%3e%3c/svg%3e");
            background-image: var(--cui-form-switch-checked-bg-image, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%28255, 255, 255, 0.87%29'/%3e%3c/svg%3e"));
        }

        .form-switch .form-check-input {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%28255, 255, 255, 0.87%29'/%3e%3c/svg%3e");
            background-image: var(--cui-form-switch-checked-bg-image, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%28255, 255, 255, 0.87%29'/%3e%3c/svg%3e"));
        }

        .Accessright-card {
            background-color: #F2F4F8;
            border: 1px solid #A8A6E1;
            border-radius: 5px;
        }

        .accessRights-medium-text {
            font-family: "PoppinsRegular";
            font-size: 20px;
        }

        .accessRights-normal-text {
            font-family: "PoppinsRegular";
            font-size: 16px;
        }

        .accessRights-title {
            font-family: "PoppinsRegular";
            font-size: 20px;
        }

        /*update end*/
        .maileicondiv {
            display: inline-flex;
        }

        .phonecondiv {
            display: inline-flex;
        }

        /**** myFriends Page Css ****/
        .searchinput::-moz-placeholder {
            color: white;
        }

        .searchinput::placeholder {
            color: white;
        }

        .userimage {
            height: 130px;
        }

        .postheader {
            justify-content: space-evenly;
        }

        .mathstext {
            font-size: 14px;
        }

        .friendimage {
            border-radius: 15px;
            border: 3px solid white;
        }

        .friendbutton {
            background-color: #5A55CA;
            border-radius: 50%;
            display: block;
            width: 50px;
            height: 50px;
        }

        .friendcard,
        .assigncard {
            background-color: #F2F4F8;
            border-radius: 10px;
            width: 98%;
            margin: auto;
        }

        .friendcardtext {
            line-height: 1.9;
            font-size: 15px;
        }

        .usertext {
            margin-left: 15px;
        }

        .userbutton {
            margin-top: 32px;
            margin-left: 22px;
        }

        .buttonellipsis {
            font-size: 29px !important;
            margin: 4px 0px 0px -3px;
            color: black;
        }

        .buttonicon {
            font-size: 29px !important;
            margin: 4px 0px 0px -3px;
        }

        .buttoniconchat {
            font-size: 23px !important;
            margin: 9px 0px 0px 0px;
        }

        .headerset {
            display: inline-flex;
            margin-bottom: 15px;
        }

        .addbutton {
            margin-left: 19px;
            font-size: 14px;
            margin-top: 6px;
            background-color: #5A55CA;
        }

        .hedertitle {
            text-align: center;
            font-size: 22px;
            font-weight: 600;
        }

        .myfriendheder {
            display: flex;
            margin: 0 auto;
            align-items: center;
            justify-content: center;
        }

        .groupbutton1 {
            margin: 0 auto;
            text-align: center;
            width: inherit;
            display: inline-block;
        }

        .search {
            position: relative;
            margin-bottom: 5px;
            display: flex;
        }

        .searchbutton {
            background-color: white;
            position: absolute;
            border: 0px;
            right: 18px;
            bottom: 6px;
            padding: 5px 10px;
        }

        .serchingicon {
            color: #5A55CA;
        }

        .dropdown-input-feedback-error-message {
            color: #f44336;
            margin-left: 14px;
            margin-right: 14px;
            font-size: 0.75rem;
            /* margin: 0; */
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            letter-spacing: 0.03333em;
            text-align: left;
            margin-top: 3px;
            line-height: 1.66;
        }

        /**** My Course ****/
        .course-card-list-css {
            background-image: url(assets/images/BackgroundImage.e89866af.png);
            height: auto;
            background-repeat: round;
            border-radius: 0px;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            margin-top: 15px;
            margin-right: 3px;
            margin-left: 3px;
            color: white;
        }

        .course-header {
            width: 100%;
        }

        .mycourse {
            display: flex;
            margin: 0 auto;
            align-items: center;
            justify-content: center;
        }

        .course-group-button {
            margin: 0 auto;
            text-align: center;
            width: inherit;
            display: inline-block;
        }

        @media (max-width: 600px) {
            .user-profile-detils {
                margin-top: -27px;
            }

            .edit-form-image {
                margin-left: 30px;
            }

            .time-line-user-name {
                color: white;
                position: absolute !important;
                top: calc(8.5% - 17px);
                left: calc(16% - 20px);
            }

            .mytime-line-user-name {
                color: white;
                position: absolute !important;
                top: calc(13.5% - 17px);
                left: calc(16% - 20px);
            }

            /* myfirendpage*/
            .myfriend-text-center {
                text-align: center;
                margin-top: 10px;
            }

            /*search post page*/
            .serch-post-text-center {
                text-align: center;
                margin-top: 10px;
            }

            .profiledetils {
                text-align: center;
            }

            .update-profile-button-responsive-css {
                background-color: #5A55CB;
                margin-top: -3rem;
                text-align: center;
            }

            .rounderdbutton {
                margin-top: 10px;
                width: 100%;
            }

            .eyesbutton {
                width: 50%;
                float: left;
            }

            .chatbutton {
                width: 46%;
                float: right;
            }

            .buttonellipsis {
                position: relative;
                bottom: 143px;
                left: 56px;
            }

            .network-action-dropdown-menu-css {
                margin-top: 5px;
                min-width: 7rem;
            }

            .user-image {
                max-width: 150px;
            }

            .serchcourse-image {
                max-width: 150px;
                width: auto;
            }

            .user-image-center {
                display: flex !important;
                justify-items: center !important;
            }

            .timelineSearchinput {
                width: 100%;
            }

            /*feedback*/
            .feedback-user-image {
                max-width: 115px;
                margin-bottom: 6px;
            }

            .feedback-rounded-button {
                justify-content: center;
                margin-top: 10px;
            }

            .feedback-user-profile {
                text-align: center;
            }

            /*Library*/
            .library-text {
                margin-top: 5px;
                text-align: center;
            }

            /*course*/
            .uncomplete-text {
                margin-top: 5px;
                text-align: center;
            }
        }

        @media (max-width: 600px) {
            .update-profile-button-css {
                background-color: #5A55CB;
                margin-top: 0rem;
                text-align: center;
            }
        }

        .update-profile-button-css {
            background-color: #5A55CB;
            margin-top: -7rem;
        }

        .toogle-menu-padding {
            padding-left: 0px;
        }

        .top-header-set {
            margin-right: -5px;
        }

        @media (min-width: 1400px) {
            .container-lg {
                max-width: 5000px;
            }
        }

        @media (min-width: 1200px) {
            .container-lg {
                max-width: 2000px;
            }
        }

        @media (min-width: 992px) {
            .container-lg {
                max-width: 5000px;
            }
        }

        .spinnerCustomCSS {
            align-items: center;
            text-align: center;
            color: #fff;
        }

        html:not([dir=rtl]) legend {
            float: none;
        }

        .join-school-add-button-css {
            width: 70px;
        }

        .assigncardFindTutor:last-child {
            margin-bottom: 1rem;
        }

        .myschoolData {
            padding-top: 10%;
            text-align: center;
        }

        .reset-password-show-button {
            border: 0px;
            right: 35px;
            bottom: 30px;
        }

        .reset-password-confirm-show-button {
            border: 0px;
            right: 46px;
            bottom: 30px;
        }

        .reset-enter-password-show-button {
            border: 0px;
            right: 35px;
            bottom: 50px;
        }

        .reset-enter-password-sucess-button {
            border: 0px;
            right: 35px;
            bottom: 30px;
        }

        .reset-enter-password-confirm-show-button {
            border: 0px;
            right: 46px;
            bottom: 50px;
        }

        .reset-enter-password-confirm-sucess-button {
            border: 0px;
            right: 46px;
            bottom: 30px;
        }

        @media (max-width: 992px) {
            .tution-image {
                width: auto;
            }
        }

        @media (max-width: 576px) {
            .tution-image {
                width: auto;
            }
        }

        .postsearchheader {
            color: #fff;
            font-size: 22px;
            font-weight: 600;
        }

        .syallbusDrop {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
            border-radius: 5px;
            color: Gray;
            height: 40px;
            background: white;
            border-color: blue;
            padding-top: 10px;
        }

        .adminusererromessage {
            color: #f44336;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-size: 0.75rem;
            font-weight: 400;
            letter-spacing: 0.03333em;
            margin-right: 10px;
            margin-left: 25px;
        }

        .school-admin-school-image {
            margin: 10px 5px 8px -15px;
            border-radius: 30px;
            height: 50px;
            width: 50px;
        }

        .headerText {
            color: blue;
            margin-top: 30px;
        }

        .subjectDrop {
            color: black;
            height: 50px;
            border-radius: 5px;
            background: white;
            border-color: blue;
            padding-top: 1%;
            margin-top: 50px;
        }

        .headersearchinput {
            text-align: left;
            outline: transparent;
            opacity: 0.4;
        }

        .coruseText {
            padding-top: 1%;
            color: Gray;
            font-size: 14px;
            font-weight: Bold;
            border-radius: 5px;
            padding-top: 1%;
            margin-top: 50px;
        }

        .assignDesc {
            margin-top: 5px;
            margin-bottom: 0px;
            margin-top: 50px;
        }

        .courseInput {
            margin-left: 10px;
        }

        .searchcontrol {
            background: transparent;
            color: white;
        }

        .postButton {
            background-color: rgb(90, 85, 203);
            border-width: 1px;
            border-color: rgb(255, 255, 255);
            margin-top: 3%;
            width: 350px;
            border-radius: 50px;
            margin-left: 1%;
            font-weight: 500;
            font-size: 20px;
        }

        .subjectRadio {
            margin-left: 10px;
        }

        .postform {
            width: 95%;
            margin: auto;
        }

        .post-header-css {
            background-image: url(/static/media/BackgroundImage.e89866af.png);
            height: auto;
            background-repeat: round;
            border-radius: 0px;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            width: 99%;
            margin: auto;
        }

        .search1 {
            position: relative;
            display: flex;
            margin: auto;
            margin-bottom: 30px;
        }

        .searchcourse {
            position: relative;
            display: flex;
            margin: auto;
        }

        .radioBox {
            width: auto;
            height: 60px;
            border: 1px solid Gray;
            border-radius: 5px;
        }

        .listgroup {
            width: 230px;
        }

        .allevent {
            visibility: hidden;
        }

        .tuitioncard1 {
            width: 98%;
            margin: auto;
            border-radius: 15px;
        }

        .tutiondetail {
            background-color: #eaeaea;
            padding-top: 1.3rem;
            padding-bottom: 1.3rem;
        }

        .form-floating1>.form-control {
            height: 100px;
            line-height: 1.25;
        }

        .form-floating2>.form-select {
            padding-top: 1rem;
            padding-bottom: 0.9rem;
        }

        .tuitioncard {
            border: none;
            width: 99%;
            margin: auto;
            border-radius: 15px;
        }

        .mathimage {
            height: 140px;
            width: 108%;
            border-radius: 10px;
        }

        .tuitioncardlast {
            background-color: #e4e8f1;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        .imagebox {
            width: 150px;
        }

        .CFormSelect1 {
            width: auto;
            font-size: 11px;
        }

        .tutorcard {
            width: 95%;
            margin: auto;
            background: #F2F4F8;
            border-radius: 15px;
        }

        .tutorstar {
            color: orange;
            height: 20px;
        }

        .tutorstar1 {
            height: 20px;
        }

        .tutorname {
            font-weight: 750;
            font-size: 20px;
        }

        .tutornumber {
            font-weight: 400;
            margin-left: 5px;
            font-size: 15px;
            color: gray;
        }

        .tutorexp {
            font-weight: 400;
            margin-left: 15px;
            font-size: 15px;
            color: gray;
        }

        .tutortoggle,
        .questiondots {
            border: none;
            font-size: 20px !important;
            margin: 4px 0px 0px -3px;
            color: black;
        }

        .text-right {
            text-align: end;
        }

        .font-weight-bold {
            font-weight: bold;
        }

        .buttonicontutor {
            font-size: 29px !important;
            margin: 4px 0px 0px -3px;
        }

        .form-floating1>label {
            position: absolute;
            top: 0;
            height: 100%;
            padding: 1rem 0.75rem;
            pointer-events: none;
            border: 1px solid transparent;
            transform-origin: 0 0;
            transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
        }

        .tutorellipsis {
            display: none;
        }

        .course-buttonellipsis {
            left: 110px;
        }

        .tutor-title-row-css {
            margin-top: 10px;
        }

        .tuitionteacher {
            width: 15px;
        }

        .tuitionprice {
            font-size: 25px;
        }

        .tutor-search-menu-row-css {
            width: 94%;
        }

        .tuitiondetailicon {
            margin-left: 30px;
            margin-right: 5px;
        }

        .tuitiondetailicon1 {
            margin-left: 17px;
            margin-right: 5px;
        }

        .tutorheader {
            margin-top: 15px;
        }

        .tuitionimage {
            border-radius: 10px;
        }

        .tution-header-css {
            background-image: url(/static/media/BackgroundImage.e89866af.png);
            height: 120px;
            background-repeat: round;
            border-radius: 0px;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            width: 99%;
            margin: auto;
        }

        .user-img {
            height: 95px;
            width: auto;
        }

        .trashcolor {
            color: red;
        }

        .tutioncardheader {
            width: 100%;
            margin: auto;
            border-radius: 15px;
        }

        .tutioncard {
            width: 97%;
            border-radius: 15px;
            margin: auto;
            background-color: white;
        }

        .pencilcolor {
            color: Black;
        }

        .tutiontext {
            font-size: 15px;
        }

        .editbutton {
            background-color: #f2f4f8;
            border: none;
        }

        .detailbutton {
            background-color: #e4e8f1;
            border: none;
            color: #625dcc;
            font-size: 12px;
        }

        .sharecolor {
            color: #03a3cc;
        }

        .three-dot-menu {
            top: -35px;
            right: -40px;
        }

        @media all and (max-width: 1200px) {
            .three-dot-menu {
                top: -35px;
                right: -40px;
            }
        }

        @media all and (max-width: 1440px) {
            .three-dot-menu {
                top: -35px;
                right: -60px;
            }
        }

        @media all and (max-width: 992px) {
            .three-dot-menu {
                top: -35px;
                right: -30px;
            }
        }

        @media all and (max-width: 767px) {
            .r-dot-menu {
                top: 25px;
                right: 10px;
            }

            .three-dot-menu {
                top: -20px;
                right: 0px;
            }
        }

        @media (max-width: 576px) {
            .r-dot-menu {
                top: 20px;
                right: 5px;
            }

            .three-dot-menu {
                top: -20px;
                right: -10px;
            }

            .CFormSelect4,
            .CFormSelect5 {
                width: 46%;
                margin: auto;
                display: inline;
            }
        }

        @media (max-width: 1400px) {
            .tuitiondetail {
                width: auto;
            }

            .listgroup {
                width: 210px;
                margin: auto;
            }
        }

        @media (max-width: 1200px) {
            .tuitiondetail {
                width: auto;
                padding: 0.5rem 0rem;
            }

            .listgroup {
                width: 210px;
            }
        }

        .classdetail {
            display: inline-block;
        }

        @media (min-width: 767px) {
            .tuitioncardlast {
                width: auto;
            }

            .classdetail {
                display: flex;
                flex-direction: row;
                justify-content: space-evenly;
            }
        }

        @media (max-width: 992px) {
            .tuitionsubtime {
                text-align: center;
            }

            .tuitionsubdetail {
                text-align: center;
            }

            .tuitiondetail {
                padding: 0;
            }

            .mathimage {
                margin-top: 20px;
                width: auto;
            }

            .listgroup {
                width: 210px;
            }
        }

        @media (max-width: 576px) {
            .tuitioncardlast {
                width: auto;
            }

            .classdetail {
                display: inline-block;
            }
        }

        @media (max-width: 576px) {
            .tuitionsubtime {
                text-align: center;
            }

            .tuitionsubdetail {
                text-align: center;
            }

            .tuitiondetail {
                width: auto;
                padding: 0;
            }

            .mathimage {
                margin-top: 20px;
                width: auto;
            }

            .listgroup {
                width: 210px;
            }

            .tutortoggle {
                border: none;
                font-size: 20px !important;
                margin: 28px 7px 0px;
                color: black;
            }
        }

        .CFormSelect4,
        .CFormSelect5 {
            width: 15%;
            margin: auto;
        }

        .CFormSelect5 {
            width: 11%;
            margin: auto;
        }

        .CFormSelect6 {
            width: 97%;
            margin: auto;
        }

        @media (max-width: 320px) {
            .CFormSelect6 {
                width: 97%;
                margin: auto;
            }

            .CFormSelect4,
            .CFormSelect5 {
                width: 46%;
                margin: auto;
                display: inline;
            }

            .tuitioncardlast {
                width: auto;
            }

            .classdetail {
                display: inline-block;
            }
        }

        @media (max-width: 576px) {

            .CFormSelect4,
            .CFormSelect5 {
                width: 46%;
                margin: auto;
                display: inline;
            }
        }

        @media (max-width: 767px) {

            .CFormSelect4,
            .CFormSelect5 {
                width: 46%;
                margin: auto;
                display: inline;
            }
        }

        @media (max-width: 320px) {
            .totalassign {
                padding-left: 13px;
            }

            .tuitionsubtime {
                text-align: center;
            }

            .tuitionsubdetail {
                text-align: center;
            }

            .mathimage {
                width: auto;
                margin-top: 5px;
            }
        }

        .infocircle {
            color: gray;
            font-size: 14px;
        }

        .tutorprogress {
            width: 200px;
            margin-left: auto;
        }

        .tuitiondetail {
            background-color: #e4e8f1;
            border: none;
            line-height: 2.5;
            font-size: 12px;
            padding: 0.4rem 1rem;
        }

        .tutordetail {
            text-align: end;
        }

        @media (max-width: 1004px) {
            .tutordetail {
                text-align: center;
            }

            .tutorprogress {
                margin: auto;
            }
        }

        .mathimagebox {
            width: 150px;
        }

        .shamanimage {
            border-radius: 10px;
            width: 130px;
        }

        .guadiansimage {
            width: 100px;
        }

        @media all and (max-width: 770px) and (min-width: 320px) {
            .guidancecardinfo {
                margin: auto;
                text-align: center;
            }
        }

        .guidancecardinfo {
            line-height: 2;
        }

        .guadiancard {
            height: 95%;
        }

        .guadiansicon {
            width: auto;
            margin: auto;
        }

        .guiadianceimagebox {
            width: 150px;
            padding-left: 20px;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .gudancestatus {
            right: -3px;
            top: -3px;
            color: #2fb22f;
        }

        .guardianstext {
            color: gray;
            font-size: 13px;
        }

        .guiadianceimage {
            border-radius: 15px;
        }

        .statecolor1 {
            color: Black;
        }

        .infocircle1 {
            font-size: 5px;
        }

        .ml-1 {
            margin-left: 0.25rem !important;
        }

        .ml-2 {
            margin-left: 0.5rem !important;
        }

        .ml-3 {
            margin-left: 1rem !important;
        }

        .ml-4 {
            margin-left: 1.5rem !important;
        }

        .ml-5 {
            margin-left: 3rem !important;
        }

        .pl-1 {
            padding-left: 0.25rem !important;
        }

        .pl-2 {
            padding-left: 0.5rem !important;
        }

        .pl-3 {
            padding-left: 1rem !important;
        }

        .pl-4 {
            padding-left: 1.5rem !important;
        }

        .pl-5 {
            padding-left: 3rem !important;
        }

        .pr-5 {
            padding-right: 3rem !important;
        }

        .pr-0 {
            padding-right: 0px !important;
        }

        .mr-1 {
            margin-right: 0.25rem !important;
        }

        .mr-2 {
            margin-right: 0.5rem !important;
        }

        .mr-3 {
            margin-right: 1rem !important;
        }

        .pr-3 {
            padding-right: 1rem !important;
        }

        .mr-4 {
            margin-right: 1.5rem !important;
        }

        .mr-5 {
            margin-right: 3rem !important;
        }

        .ml-auto {
            margin-left: auto;
        }

        .timeline-action-dropdown-menu-css {
            min-width: 5rem;
        }

        .event-header-css {
            background-image: url(/static/media/Events-banner.1a3df44d.png);
            height: auto;
            background-repeat: round;
            border-radius: 0px;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            width: 99%;
            margin: auto;
        }

        .event-add-button-css,
        .session-add-button-css {
            color: white;
            font-weight: 750;
            width: 91px;
            font-size: 12px;
            border-radius: 30px;
            height: 27px;
            text-align: center;
            line-height: 1px;
            border-width: 1px;
            border-color: #fff;
            background-color: #5A55CA;
            margin-left: 1rem;
        }

        .session-add-button-css {
            font-weight: 500;
            width: auto;
            border: none;
        }

        .eventinput {
            width: 450px;
        }

        .eventform {
            width: 97%;
            margin: auto;
        }

        .eventheaderline {
            border: 1px dashed #d3d3d3;
        }

        .eventtitle {
            padding-top: 1%;
            color: Gray;
            font-size: 14px;
            font-weight: Bold;
            border-radius: 5px;
            padding-top: 1%;
            height: 50px;
            border-color: #c3c1eb;
        }

        .event-button-css {
            color: white;
            font-weight: 500;
            width: 200px;
            font-size: 15px;
            border-radius: 30px;
            height: 40px;
            text-align: center;
            line-height: 1px;
            border: none;
            background-color: #4540ba;
        }

        .timeinput {
            position: relative;
        }

        .timepicker {
            position: absolute;
            top: 8px;
            right: 8px;
        }

        .eventcourse {
            position: relative;
            display: flex;
            margin: auto;
        }

        .MuiFormControl-root {
            width: 100%;
        }

        .eventceate {
            color: black;
        }

        .eventdownicon {
            position: absolute;
            top: 17px;
            right: 20px;
            font-size: 28px;
            color: gray;
        }

        .tuitionsubtime {
            font-size: 12px;
        }

        .tuitionsubdetail {
            font-size: 12px;
            color: #454546;
        }

        .question-header-css {
            background-image: url(/static/media/BackgroundImage.e89866af.png);
            background-repeat: round;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            width: 99%;
            margin: auto;
        }

        .childreninput {
            border: 1px solid black;
            background: transparent;
            color: white;
            height: 46px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .childrenbutton {
            background-color: white;
            position: absolute;
            border: 0px;
            right: 32px;
            bottom: 29px;
            padding: 5px 10px;
        }

        .questioncard {
            width: 97%;
            margin: auto;
        }

        .avatarimg {
            width: 3rem;
        }

        .besticonimg {
            font-size: 2rem;
            position: absolute;
            color: #5A55CB;
        }

        .best-answer-css {
            margin-bottom: 0;
            font-size: 15px;
            color: #5A55CB;
            font-weight: 600;
            margin-left: 38px;
            margin-top: 11px;
        }

        .questioncardbody {
            border-radius: 15px;
            background-color: #f2f4f8;
        }

        .cardbodyline {
            border-left: 4px solid #e49e07;
            height: 60px;
        }

        .cardbodyfooterline {
            width: 95%;
            margin: auto;
        }

        .questionbodycard {
            width: 97%;
            margin: auto;
            background-color: #f2f4f8;
        }

        .questionicon,
        .questionicon1 {
            color: #373737;
            font-size: 20px;
            background: #f2f4f8;
            border: none;
            --cui-btn-shadow: none;
            --cui-btn-hover-bg: none;
            --cui-btn-hover-color: #5A55CB;
        }

        .questionicon1 {
            color: #03a3cc;
        }

        .answerinput {
            border: none;
            background-color: #dad9f1;
        }

        .answerbutton {
            height: 43px;
            right: 0px;
            bottom: 1px;
            font-size: 12px;
            background-color: #4540BA;
        }

        .taskAddbutton {
            height: 43px;
            width: 90px;
            right: 0px;
            bottom: 1px;
            background-color: #4540BA;
        }

        .complete-course-button {
            height: 43px;
            border-radius: 7px;
            right: 0px;
            bottom: 1px;
            background-color: #4540BA;
        }

        .answertext {
            width: 95%;
            margin: auto;
            background: white;
            color: #111111;
        }

        .answerbest {
            margin: auto;
            background: white;
            border-radius: 15px;
        }

        .answerbestcard {
            width: 98%;
            margin: auto;
        }

        .answers {
            width: 93%;
            margin: auto;
            font-size: 0.688rem;
            line-height: 1.7;
        }

        .text-small {
            color: #808080;
        }

        .CFormSelect2 {
            padding: 0.3rem 2em 0.3rem 0.7rem;
            width: auto;
            font-size: 12px;
        }

        .CFormSelect3 {
            padding: 0.375rem 2rem 0.375rem 0.75rem;
            width: auto;
            font-size: 12px;
        }

        .editbutton:hover {
            background-color: #f2f4f8;
        }

        .detailbutton:hover {
            color: blue;
            background-color: #e4e8f1;
        }

        .tutorprofile {
            width: 130px;
        }

        .viewmodalcolor {
            background-color: #deddf4;
        }

        .sessiondetail,
        .sessionstar {
            font-size: 0.938rem;
            color: Gray;
        }

        .sessionstar {
            color: black;
        }

        .viewmodalcoursedaetail,
        .diaryviewmodal {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .diaryviewmodal {
            --cui-gutter-x: 0;
        }

        .viewcourselistmodalimage {
            max-height: 170px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .sessionsubdetail {
            font-size: 0.95rem;
        }

        .questionicon:hover,
        .session-add-button-css:hover {
            background-color: #f2f4f8;
            color: #5A55CB;
            border: none;
        }

        .sessionbutton {
            background-color: #5A55CA;
        }

        .questionicon1:hover {
            background-color: #f2f4f8;
            color: #03a3cc;
            border: none;
        }

        .eventbadge {
            background-color: #8987d2;
        }

        .questionfooter {
            width: 97%;
            margin: auto;
            background-color: #F2F4F8;
            border: none;
        }

        .inputsearchheader {
            padding-right: 3rem;
        }

        .answersfooter {
            width: 97%;
            margin: auto;
        }

        .tutionimagebox {
            width: 150px;
        }

        .tuitionicon:hover {
            background-color: #e4e8f1;
            color: #5A55CB;
            border: none;
        }

        .tuitionicon {
            font-size: 13px;
            font-weight: 600;
            background: #e4e8f1;
            border: none;
            --cui-btn-shadow: none;
            --cui-btn-hover-bg: none;
            --cui-btn-hover-color: #5A55CB;
        }

        .assigncard {
            width: 98%;
            margin: auto;
            border-radius: 15px;
        }

        .assign-image {
            height: 170px;
            width: auto;
        }

        .smilebeam-assign {
            left: 2px;
            bottom: 2px;
        }

        .comments-assign {
            border: 0px;
            right: 6px;
            bottom: 6px;
        }

        .joinschoolinfo,
        .Joinschoolinfo1 {
            color: #979798;
            font-size: 16px;
        }

        .Joinschoolinfo1 {
            color: #1c1b1b;
        }

        .tutorcallmodal {
            width: 160px;
        }

        .tutorviewmodalheader {
            background-color: #dbe7f2;
        }

        .tutorviewmodalimage {
            max-height: 220px;
            min-height: 150px;
        }

        .eventhistorytext {
            color: gray;
        }

        .assignloader {
            left: 400px;
            width: 20%;
            align-items: center;
        }

        .diary-add-button-css,
        .mydiarycardbutton,
        .jionstudent-add-button-css {
            font-weight: 500;
            width: auto;
            border-radius: 30px;
            height: 40px;
            text-align: center;
            line-height: 1px;
            border-width: 1px;
            border-color: #fff;
            background-color: #5A55CA;
            margin-left: 1rem;
        }

        .jionstudent-add-button-css {
            height: 50px;
        }

        .custom1-control-input {
            border-radius: 15px;
            border: none;
        }

        .diarystudentname {
            color: #17a2b8;
        }

        .diaryviewmodalcard {
            border: 1px solid Blue;
            width: 95%;
            margin: auto;
        }

        .diary-attachment-css {
            margin-left: 23px;
        }

        .timeline-attachment-css {
            margin-left: 12px;
        }

        .diaryviewcarddivider {
            width: 90%;
            margin: auto;
        }

        .assignmentdescription {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .diaryhederfont {
            font-size: 18px;
        }

        .loader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(248, 248, 248, 0.6784313725);
        }

        .loader-text {
            left: 52%;
            top: 64%;
            z-index: 1000;
            position: absolute;
        }

        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            background: url(/static/media/Spinner-0.6s-118px.611b4067.gif) 50% 50% no-repeat rgb(249, 249, 249);
        }

        .labelDesignScheduleMainDiv {
            display: flex;
            list-style: none;
            color: #818181;
        }

        .labelDesignScheduleStart {
            border-bottom-left-radius: 0.25rem;
            border-top-left-radius: 0.25rem;
            margin-left: -1px;
            padding: 0.375rem 0.375rem;
            position: relative;
            display: block;
            color: #818181;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #c4c9d0;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            min-width: 90px;
        }

        .labelDesignScheduleEnd {
            border-bottom-right-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
            margin-left: -1px;
            padding: 0.375rem 0.375rem;
            position: relative;
            display: block;
            color: #818181;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #c4c9d0;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            min-width: 90px;
        }

        .labelDesignScheduleEnd:hover {
            color: #818181;
        }

        .labelDesignScheduleStart:hover {
            color: #818181;
        }

        .tabelCellCustomDesign {
            color: #321fdb !important;
            font-weight: 600;
            align-items: center;
            vertical-align: middle;
            background-color: #efefef;
            border-right: 1px solid gray;
            border-right-color: var(--cui-table-border-color);
            box-shadow: inset 0 0 0 9999 px var(--cui-table-accent-bg);
        }

        .tabelCellCustomDesignHeader {
            border-right: 1px solid gray;
            border-right-color: var(--cui-table-border-color);
            box-shadow: inset 0 0 0 9999 px var(--cui-table-accent-bg);
        }

        .checkboxCustomDesign {
            margin-left: 0px !important;
            margin-right: 0px !important;
        }

        .button-animate {
            background-color: #5a55cb;
            border-radius: 10px;
            border: none;
            color: #eeeeee;
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
            padding: 7px 10px;
            text-align: center;
            text-decoration: none;
        }

        @keyframes glowing {
            0% {
                background-color: #fd7e14;
                box-shadow: 0 0 5px #fd7e14;
            }

            50% {
                background-color: #fd7e14;
                box-shadow: 0 0 20px #fd7e14;
            }

            100% {
                background-color: #fd7e14;
                box-shadow: 0 0 5px #fd7e14;
            }
        }

        .button-animate {
            animation: glowing 1300ms infinite;
        }

        .tp-id-dispaly-css {
            text-align: center;
            margin-bottom: 0px;
            font-size: 20px;
            background-color: #5a55cb;
            padding-top: 10px;
        }

        .sidebar-nav::-webkit-scrollbar {
            width: 0px;
        }

        .sidebar-nav::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        .sidebar-nav::-webkit-scrollbar-thumb {
            background-color: darkgrey;
        }

        .parent-guardian-image {
            max-width: 150px;
            width: 100px;
        }
    </style>
    <style>
        [data-simplebar] {
            position: relative;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-content: flex-start;
            align-items: flex-start
        }

        .simplebar-wrapper {
            overflow: hidden;
            width: inherit;
            height: inherit;
            max-width: inherit;
            max-height: inherit
        }

        .simplebar-mask {
            direction: inherit;
            position: absolute;
            overflow: hidden;
            padding: 0;
            margin: 0;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            width: auto !important;
            height: auto !important;
            z-index: 0
        }

        .simplebar-offset {
            direction: inherit !important;
            box-sizing: inherit !important;
            resize: none !important;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            padding: 0;
            margin: 0;
            -webkit-overflow-scrolling: touch
        }

        .simplebar-content-wrapper {
            direction: inherit;
            box-sizing: border-box !important;
            position: relative;
            display: block;
            height: 100%;
            width: auto;
            max-width: 100%;
            max-height: 100%;
            scrollbar-width: none;
            -ms-overflow-style: none
        }

        .simplebar-content-wrapper::-webkit-scrollbar,
        .simplebar-hide-scrollbar::-webkit-scrollbar {
            display: none;
            width: 0;
            height: 0
        }

        .simplebar-content:after,
        .simplebar-content:before {
            content: ' ';
            display: table
        }

        .simplebar-placeholder {
            max-height: 100%;
            max-width: 100%;
            width: 100%;
            pointer-events: none
        }

        .simplebar-height-auto-observer-wrapper {
            box-sizing: inherit !important;
            height: 100%;
            width: 100%;
            max-width: 1px;
            position: relative;
            float: left;
            max-height: 1px;
            overflow: hidden;
            z-index: -1;
            padding: 0;
            margin: 0;
            pointer-events: none;
            flex-grow: inherit;
            flex-shrink: 0;
            flex-basis: 0
        }

        .simplebar-height-auto-observer {
            box-sizing: inherit;
            display: block;
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            height: 1000%;
            width: 1000%;
            min-height: 1px;
            min-width: 1px;
            overflow: hidden;
            pointer-events: none;
            z-index: -1
        }

        .simplebar-track {
            z-index: 1;
            position: absolute;
            right: 0;
            bottom: 0;
            pointer-events: none;
            overflow: hidden
        }

        [data-simplebar].simplebar-dragging .simplebar-content {
            pointer-events: none;
            -moz-user-select: none;
            user-select: none;
            -webkit-user-select: none
        }

        [data-simplebar].simplebar-dragging .simplebar-track {
            pointer-events: all
        }

        .simplebar-scrollbar {
            position: absolute;
            left: 0;
            right: 0;
            min-height: 10px
        }

        .simplebar-scrollbar:before {
            position: absolute;
            content: '';
            background: #000;
            border-radius: 7px;
            left: 2px;
            right: 2px;
            opacity: 0;
            transition: opacity .2s linear
        }

        .simplebar-scrollbar.simplebar-visible:before {
            opacity: .5;
            transition: opacity 0s linear
        }

        .simplebar-track.simplebar-vertical {
            top: 0;
            width: 11px
        }

        .simplebar-track.simplebar-vertical .simplebar-scrollbar:before {
            top: 2px;
            bottom: 2px
        }

        .simplebar-track.simplebar-horizontal {
            left: 0;
            height: 11px
        }

        .simplebar-track.simplebar-horizontal .simplebar-scrollbar:before {
            height: 100%;
            left: 2px;
            right: 2px
        }

        .simplebar-track.simplebar-horizontal .simplebar-scrollbar {
            right: auto;
            left: 0;
            top: 2px;
            height: 7px;
            min-height: 0;
            min-width: 10px;
            width: auto
        }

        [data-simplebar-direction=rtl] .simplebar-track.simplebar-vertical {
            right: auto;
            left: 0
        }

        .hs-dummy-scrollbar-size {
            direction: rtl;
            position: fixed;
            opacity: 0;
            visibility: hidden;
            height: 500px;
            width: 500px;
            overflow-y: hidden;
            overflow-x: scroll
        }

        .simplebar-hide-scrollbar {
            position: fixed;
            left: 0;
            visibility: hidden;
            overflow-y: scroll;
            scrollbar-width: none;
            -ms-overflow-style: none
        }
    </style>
    <style>
        :root {
            --toastify-color-light: #fff;
            --toastify-color-dark: #121212;
            --toastify-color-info: #3498db;
            --toastify-color-success: #07bc0c;
            --toastify-color-warning: #f1c40f;
            --toastify-color-error: #e74c3c;
            --toastify-color-transparent: rgba(255, 255, 255, 0.7);
            --toastify-icon-color-info: var(--toastify-color-info);
            --toastify-icon-color-success: var(--toastify-color-success);
            --toastify-icon-color-warning: var(--toastify-color-warning);
            --toastify-icon-color-error: var(--toastify-color-error);
            --toastify-toast-width: 320px;
            --toastify-toast-background: #fff;
            --toastify-toast-min-height: 64px;
            --toastify-toast-max-height: 800px;
            --toastify-font-family: sans-serif;
            --toastify-z-index: 9999;
            --toastify-text-color-light: #757575;
            --toastify-text-color-dark: #fff;
            --toastify-text-color-info: #fff;
            --toastify-text-color-success: #fff;
            --toastify-text-color-warning: #fff;
            --toastify-text-color-error: #fff;
            --toastify-spinner-color: #616161;
            --toastify-spinner-color-empty-area: #e0e0e0;
            --toastify-color-progress-light: linear-gradient(to right,
                    #4cd964,
                    #5ac8fa,
                    #007aff,
                    #34aadc,
                    #5856d6,
                    #ff2d55);
            --toastify-color-progress-dark: #bb86fc;
            --toastify-color-progress-info: var(--toastify-color-info);
            --toastify-color-progress-success: var(--toastify-color-success);
            --toastify-color-progress-warning: var(--toastify-color-warning);
            --toastify-color-progress-error: var(--toastify-color-error);
        }

        .Toastify__toast-container {
            z-index: 9999;
            z-index: var(--toastify-z-index);
            -webkit-transform: translate3d(0, 0, 9999 px);
            -webkit-transform: translate3d(0, 0, var(--toastify-z-index) px);
            position: fixed;
            padding: 4px;
            width: 320px;
            width: var(--toastify-toast-width);
            box-sizing: border-box;
            color: #fff;
        }

        .Toastify__toast-container--top-left {
            top: 1em;
            left: 1em;
        }

        .Toastify__toast-container--top-center {
            top: 1em;
            left: 50%;
            transform: translateX(-50%);
        }

        .Toastify__toast-container--top-right {
            top: 1em;
            right: 1em;
        }

        .Toastify__toast-container--bottom-left {
            bottom: 1em;
            left: 1em;
        }

        .Toastify__toast-container--bottom-center {
            bottom: 1em;
            left: 50%;
            transform: translateX(-50%);
        }

        .Toastify__toast-container--bottom-right {
            bottom: 1em;
            right: 1em;
        }

        @media only screen and (max-width : 480px) {
            .Toastify__toast-container {
                width: 100vw;
                padding: 0;
                left: 0;
                margin: 0;
            }

            .Toastify__toast-container--top-left,
            .Toastify__toast-container--top-center,
            .Toastify__toast-container--top-right {
                top: 0;
                transform: translateX(0);
            }

            .Toastify__toast-container--bottom-left,
            .Toastify__toast-container--bottom-center,
            .Toastify__toast-container--bottom-right {
                bottom: 0;
                transform: translateX(0);
            }

            .Toastify__toast-container--rtl {
                right: 0;
                left: auto;
                left: initial;
            }
        }

        .Toastify__toast {
            position: relative;
            min-height: 64px;
            min-height: var(--toastify-toast-min-height);
            box-sizing: border-box;
            margin-bottom: 1rem;
            padding: 8px;
            border-radius: 4px;
            box-shadow: 0 1px 10px 0 rgba(0, 0, 0, 0.1), 0 2px 15px 0 rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
            max-height: 800px;
            max-height: var(--toastify-toast-max-height);
            overflow: hidden;
            font-family: sans-serif;
            font-family: var(--toastify-font-family);
            cursor: pointer;
            direction: ltr;
        }

        .Toastify__toast--rtl {
            direction: rtl;
        }

        .Toastify__toast-body {
            margin: auto 0;
            flex: 1 1 auto;
            padding: 6px;
            display: flex;
            align-items: center;
        }

        .Toastify__toast-body>div:last-child {
            flex: 1 1;
        }

        .Toastify__toast-icon {
            -webkit-margin-end: 10px;
            margin-inline-end: 10px;
            width: 20px;
            flex-shrink: 0;
            display: flex;
        }

        .Toastify--animate {
            animation-fill-mode: both;
            animation-duration: 0.7s;
        }

        .Toastify--animate-icon {
            animation-fill-mode: both;
            animation-duration: 0.3s;
        }

        @media only screen and (max-width : 480px) {
            .Toastify__toast {
                margin-bottom: 0;
                border-radius: 0;
            }
        }

        .Toastify__toast-theme--dark {
            background: #121212;
            background: var(--toastify-color-dark);
            color: #fff;
            color: var(--toastify-text-color-dark);
        }

        .Toastify__toast-theme--light {
            background: #fff;
            background: var(--toastify-color-light);
            color: #757575;
            color: var(--toastify-text-color-light);
        }

        .Toastify__toast-theme--colored.Toastify__toast--default {
            background: #fff;
            background: var(--toastify-color-light);
            color: #757575;
            color: var(--toastify-text-color-light);
        }

        .Toastify__toast-theme--colored.Toastify__toast--info {
            color: #fff;
            color: var(--toastify-text-color-info);
            background: #3498db;
            background: var(--toastify-color-info);
        }

        .Toastify__toast-theme--colored.Toastify__toast--success {
            color: #fff;
            color: var(--toastify-text-color-success);
            background: #07bc0c;
            background: var(--toastify-color-success);
        }

        .Toastify__toast-theme--colored.Toastify__toast--warning {
            color: #fff;
            color: var(--toastify-text-color-warning);
            background: #f1c40f;
            background: var(--toastify-color-warning);
        }

        .Toastify__toast-theme--colored.Toastify__toast--error {
            color: #fff;
            color: var(--toastify-text-color-error);
            background: #e74c3c;
            background: var(--toastify-color-error);
        }

        .Toastify__progress-bar-theme--light {
            background: linear-gradient(to right,
                    #4cd964,
                    #5ac8fa,
                    #007aff,
                    #34aadc,
                    #5856d6,
                    #ff2d55);
            background: var(--toastify-color-progress-light);
        }

        .Toastify__progress-bar-theme--dark {
            background: #bb86fc;
            background: var(--toastify-color-progress-dark);
        }

        .Toastify__progress-bar--info {
            background: #3498db;
            background: var(--toastify-color-progress-info);
        }

        .Toastify__progress-bar--success {
            background: #07bc0c;
            background: var(--toastify-color-progress-success);
        }

        .Toastify__progress-bar--warning {
            background: #f1c40f;
            background: var(--toastify-color-progress-warning);
        }

        .Toastify__progress-bar--error {
            background: #e74c3c;
            background: var(--toastify-color-progress-error);
        }

        .Toastify__progress-bar-theme--colored.Toastify__progress-bar--info,
        .Toastify__progress-bar-theme--colored.Toastify__progress-bar--success,
        .Toastify__progress-bar-theme--colored.Toastify__progress-bar--warning,
        .Toastify__progress-bar-theme--colored.Toastify__progress-bar--error {
            background: rgba(255, 255, 255, 0.7);
            background: var(--toastify-color-transparent);
        }

        .Toastify__close-button {
            color: #fff;
            background: transparent;
            outline: none;
            border: none;
            padding: 0;
            cursor: pointer;
            opacity: 0.7;
            transition: 0.3s ease;
            align-self: flex-start;
        }

        .Toastify__close-button--light {
            color: #000;
            opacity: 0.3;
        }

        .Toastify__close-button>svg {
            fill: currentColor;
            height: 16px;
            width: 14px;
        }

        .Toastify__close-button:hover,
        .Toastify__close-button:focus {
            opacity: 1;
        }

        @keyframes Toastify__trackProgress {
            0% {
                transform: scaleX(1);
            }

            100% {
                transform: scaleX(0);
            }
        }

        .Toastify__progress-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 5px;
            z-index: 9999;
            z-index: var(--toastify-z-index);
            opacity: 0.7;
            transform-origin: left;
        }

        .Toastify__progress-bar--animated {
            animation: Toastify__trackProgress linear 1 forwards;
        }

        .Toastify__progress-bar--controlled {
            transition: transform 0.2s;
        }

        .Toastify__progress-bar--rtl {
            right: 0;
            left: auto;
            left: initial;
            transform-origin: right;
        }

        .Toastify__spinner {
            width: 20px;
            height: 20px;
            box-sizing: border-box;
            border: 2px solid;
            border-radius: 100%;
            border-color: #e0e0e0;
            border-color: var(--toastify-spinner-color-empty-area);
            border-right-color: #616161;
            border-right-color: var(--toastify-spinner-color);
            animation: Toastify__spin 0.65s linear infinite;
        }

        @keyframes Toastify__bounceInRight {

            from,
            60%,
            75%,
            90%,
            to {
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }

            from {
                opacity: 0;
                transform: translate3d(3000px, 0, 0);
            }

            60% {
                opacity: 1;
                transform: translate3d(-25px, 0, 0);
            }

            75% {
                transform: translate3d(10px, 0, 0);
            }

            90% {
                transform: translate3d(-5px, 0, 0);
            }

            to {
                transform: none;
            }
        }

        @keyframes Toastify__bounceOutRight {
            20% {
                opacity: 1;
                transform: translate3d(-20px, 0, 0);
            }

            to {
                opacity: 0;
                transform: translate3d(2000px, 0, 0);
            }
        }

        @keyframes Toastify__bounceInLeft {

            from,
            60%,
            75%,
            90%,
            to {
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }

            0% {
                opacity: 0;
                transform: translate3d(-3000px, 0, 0);
            }

            60% {
                opacity: 1;
                transform: translate3d(25px, 0, 0);
            }

            75% {
                transform: translate3d(-10px, 0, 0);
            }

            90% {
                transform: translate3d(5px, 0, 0);
            }

            to {
                transform: none;
            }
        }

        @keyframes Toastify__bounceOutLeft {
            20% {
                opacity: 1;
                transform: translate3d(20px, 0, 0);
            }

            to {
                opacity: 0;
                transform: translate3d(-2000px, 0, 0);
            }
        }

        @keyframes Toastify__bounceInUp {

            from,
            60%,
            75%,
            90%,
            to {
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }

            from {
                opacity: 0;
                transform: translate3d(0, 3000px, 0);
            }

            60% {
                opacity: 1;
                transform: translate3d(0, -20px, 0);
            }

            75% {
                transform: translate3d(0, 10px, 0);
            }

            90% {
                transform: translate3d(0, -5px, 0);
            }

            to {
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes Toastify__bounceOutUp {
            20% {
                transform: translate3d(0, -10px, 0);
            }

            40%,
            45% {
                opacity: 1;
                transform: translate3d(0, 20px, 0);
            }

            to {
                opacity: 0;
                transform: translate3d(0, -2000px, 0);
            }
        }

        @keyframes Toastify__bounceInDown {

            from,
            60%,
            75%,
            90%,
            to {
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }

            0% {
                opacity: 0;
                transform: translate3d(0, -3000px, 0);
            }

            60% {
                opacity: 1;
                transform: translate3d(0, 25px, 0);
            }

            75% {
                transform: translate3d(0, -10px, 0);
            }

            90% {
                transform: translate3d(0, 5px, 0);
            }

            to {
                transform: none;
            }
        }

        @keyframes Toastify__bounceOutDown {
            20% {
                transform: translate3d(0, 10px, 0);
            }

            40%,
            45% {
                opacity: 1;
                transform: translate3d(0, -20px, 0);
            }

            to {
                opacity: 0;
                transform: translate3d(0, 2000px, 0);
            }
        }

        .Toastify__bounce-enter--top-left,
        .Toastify__bounce-enter--bottom-left {
            animation-name: Toastify__bounceInLeft;
        }

        .Toastify__bounce-enter--top-right,
        .Toastify__bounce-enter--bottom-right {
            animation-name: Toastify__bounceInRight;
        }

        .Toastify__bounce-enter--top-center {
            animation-name: Toastify__bounceInDown;
        }

        .Toastify__bounce-enter--bottom-center {
            animation-name: Toastify__bounceInUp;
        }

        .Toastify__bounce-exit--top-left,
        .Toastify__bounce-exit--bottom-left {
            animation-name: Toastify__bounceOutLeft;
        }

        .Toastify__bounce-exit--top-right,
        .Toastify__bounce-exit--bottom-right {
            animation-name: Toastify__bounceOutRight;
        }

        .Toastify__bounce-exit--top-center {
            animation-name: Toastify__bounceOutUp;
        }

        .Toastify__bounce-exit--bottom-center {
            animation-name: Toastify__bounceOutDown;
        }

        @keyframes Toastify__zoomIn {
            from {
                opacity: 0;
                transform: scale3d(0.3, 0.3, 0.3);
            }

            50% {
                opacity: 1;
            }
        }

        @keyframes Toastify__zoomOut {
            from {
                opacity: 1;
            }

            50% {
                opacity: 0;
                transform: scale3d(0.3, 0.3, 0.3);
            }

            to {
                opacity: 0;
            }
        }

        .Toastify__zoom-enter {
            animation-name: Toastify__zoomIn;
        }

        .Toastify__zoom-exit {
            animation-name: Toastify__zoomOut;
        }

        @keyframes Toastify__flipIn {
            from {
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                animation-timing-function: ease-in;
                opacity: 0;
            }

            40% {
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                animation-timing-function: ease-in;
            }

            60% {
                transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                opacity: 1;
            }

            80% {
                transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
            }

            to {
                transform: perspective(400px);
            }
        }

        @keyframes Toastify__flipOut {
            from {
                transform: perspective(400px);
            }

            30% {
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                opacity: 1;
            }

            to {
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                opacity: 0;
            }
        }

        .Toastify__flip-enter {
            animation-name: Toastify__flipIn;
        }

        .Toastify__flip-exit {
            animation-name: Toastify__flipOut;
        }

        @keyframes Toastify__slideInRight {
            from {
                transform: translate3d(110%, 0, 0);
                visibility: visible;
            }

            to {
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes Toastify__slideInLeft {
            from {
                transform: translate3d(-110%, 0, 0);
                visibility: visible;
            }

            to {
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes Toastify__slideInUp {
            from {
                transform: translate3d(0, 110%, 0);
                visibility: visible;
            }

            to {
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes Toastify__slideInDown {
            from {
                transform: translate3d(0, -110%, 0);
                visibility: visible;
            }

            to {
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes Toastify__slideOutRight {
            from {
                transform: translate3d(0, 0, 0);
            }

            to {
                visibility: hidden;
                transform: translate3d(110%, 0, 0);
            }
        }

        @keyframes Toastify__slideOutLeft {
            from {
                transform: translate3d(0, 0, 0);
            }

            to {
                visibility: hidden;
                transform: translate3d(-110%, 0, 0);
            }
        }

        @keyframes Toastify__slideOutDown {
            from {
                transform: translate3d(0, 0, 0);
            }

            to {
                visibility: hidden;
                transform: translate3d(0, 500px, 0);
            }
        }

        @keyframes Toastify__slideOutUp {
            from {
                transform: translate3d(0, 0, 0);
            }

            to {
                visibility: hidden;
                transform: translate3d(0, -500px, 0);
            }
        }

        .Toastify__slide-enter--top-left,
        .Toastify__slide-enter--bottom-left {
            animation-name: Toastify__slideInLeft;
        }

        .Toastify__slide-enter--top-right,
        .Toastify__slide-enter--bottom-right {
            animation-name: Toastify__slideInRight;
        }

        .Toastify__slide-enter--top-center {
            animation-name: Toastify__slideInDown;
        }

        .Toastify__slide-enter--bottom-center {
            animation-name: Toastify__slideInUp;
        }

        .Toastify__slide-exit--top-left,
        .Toastify__slide-exit--bottom-left {
            animation-name: Toastify__slideOutLeft;
        }

        .Toastify__slide-exit--top-right,
        .Toastify__slide-exit--bottom-right {
            animation-name: Toastify__slideOutRight;
        }

        .Toastify__slide-exit--top-center {
            animation-name: Toastify__slideOutUp;
        }

        .Toastify__slide-exit--bottom-center {
            animation-name: Toastify__slideOutDown;
        }

        @keyframes Toastify__spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }
    </style>
    <style>
        .swal2-popup.swal2-toast {
            flex-direction: row;
            align-items: center;
            width: auto;
            padding: .625em;
            overflow-y: hidden;
            background: #fff;
            box-shadow: 0 0 .625em #d9d9d9
        }

        .swal2-popup.swal2-toast .swal2-header {
            flex-direction: row;
            padding: 0
        }

        .swal2-popup.swal2-toast .swal2-title {
            flex-grow: 1;
            justify-content: flex-start;
            margin: 0 .6em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-footer {
            margin: .5em 0 0;
            padding: .5em 0 0;
            font-size: .8em
        }

        .swal2-popup.swal2-toast .swal2-close {
            position: static;
            width: .8em;
            height: .8em;
            line-height: .8
        }

        .swal2-popup.swal2-toast .swal2-content {
            justify-content: flex-start;
            padding: 0;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-icon {
            width: 2em;
            min-width: 2em;
            height: 2em;
            margin: 0
        }

        .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
            display: flex;
            align-items: center;
            font-size: 1.8em;
            font-weight: 700
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
                font-size: .25em
            }
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            top: .875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: .3125em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: .3125em
        }

        .swal2-popup.swal2-toast .swal2-actions {
            flex-basis: auto !important;
            width: auto;
            height: auto;
            margin: 0 .3125em;
            padding: 0
        }

        .swal2-popup.swal2-toast .swal2-styled {
            margin: .125em .3125em;
            padding: .3125em .625em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-styled:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(100, 150, 200, .5)
        }

        .swal2-popup.swal2-toast .swal2-success {
            border-color: #a5dc86
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 1.6em;
            height: 3em;
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.8em;
            left: -.5em;
            transform: rotate(-45deg);
            transform-origin: 2em 2em;
            border-radius: 4em 0 0 4em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.25em;
            left: .9375em;
            transform-origin: 0 1.5em;
            border-radius: 0 4em 4em 0
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
            top: 0;
            left: .4375em;
            width: .4375em;
            height: 2.6875em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
            height: .3125em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
            -webkit-animation: swal2-toast-animate-success-line-tip .75s;
            animation: swal2-toast-animate-success-line-tip .75s
        }

        .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
            -webkit-animation: swal2-toast-animate-success-line-long .75s;
            animation: swal2-toast-animate-success-line-long .75s
        }

        .swal2-popup.swal2-toast.swal2-show {
            -webkit-animation: swal2-toast-show .5s;
            animation: swal2-toast-show .5s
        }

        .swal2-popup.swal2-toast.swal2-hide {
            -webkit-animation: swal2-toast-hide .1s forwards;
            animation: swal2-toast-hide .1s forwards
        }

        .swal2-container {
            display: flex;
            position: fixed;
            z-index: 1060;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: .625em;
            overflow-x: hidden;
            transition: background-color .1s;
            -webkit-overflow-scrolling: touch
        }

        .swal2-container.swal2-backdrop-show,
        .swal2-container.swal2-noanimation {
            background: rgba(0, 0, 0, .4)
        }

        .swal2-container.swal2-backdrop-hide {
            background: 0 0 !important
        }

        .swal2-container.swal2-top {
            align-items: flex-start
        }

        .swal2-container.swal2-top-left,
        .swal2-container.swal2-top-start {
            align-items: flex-start;
            justify-content: flex-start
        }

        .swal2-container.swal2-top-end,
        .swal2-container.swal2-top-right {
            align-items: flex-start;
            justify-content: flex-end
        }

        .swal2-container.swal2-center {
            align-items: center
        }

        .swal2-container.swal2-center-left,
        .swal2-container.swal2-center-start {
            align-items: center;
            justify-content: flex-start
        }

        .swal2-container.swal2-center-end,
        .swal2-container.swal2-center-right {
            align-items: center;
            justify-content: flex-end
        }

        .swal2-container.swal2-bottom {
            align-items: flex-end
        }

        .swal2-container.swal2-bottom-left,
        .swal2-container.swal2-bottom-start {
            align-items: flex-end;
            justify-content: flex-start
        }

        .swal2-container.swal2-bottom-end,
        .swal2-container.swal2-bottom-right {
            align-items: flex-end;
            justify-content: flex-end
        }

        .swal2-container.swal2-bottom-end>:first-child,
        .swal2-container.swal2-bottom-left>:first-child,
        .swal2-container.swal2-bottom-right>:first-child,
        .swal2-container.swal2-bottom-start>:first-child,
        .swal2-container.swal2-bottom>:first-child {
            margin-top: auto
        }

        .swal2-container.swal2-grow-fullscreen>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-self: stretch;
            justify-content: center
        }

        .swal2-container.swal2-grow-row>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .swal2-container.swal2-grow-column {
            flex: 1;
            flex-direction: column
        }

        .swal2-container.swal2-grow-column.swal2-bottom,
        .swal2-container.swal2-grow-column.swal2-center,
        .swal2-container.swal2-grow-column.swal2-top {
            align-items: center
        }

        .swal2-container.swal2-grow-column.swal2-bottom-left,
        .swal2-container.swal2-grow-column.swal2-bottom-start,
        .swal2-container.swal2-grow-column.swal2-center-left,
        .swal2-container.swal2-grow-column.swal2-center-start,
        .swal2-container.swal2-grow-column.swal2-top-left,
        .swal2-container.swal2-grow-column.swal2-top-start {
            align-items: flex-start
        }

        .swal2-container.swal2-grow-column.swal2-bottom-end,
        .swal2-container.swal2-grow-column.swal2-bottom-right,
        .swal2-container.swal2-grow-column.swal2-center-end,
        .swal2-container.swal2-grow-column.swal2-center-right,
        .swal2-container.swal2-grow-column.swal2-top-end,
        .swal2-container.swal2-grow-column.swal2-top-right {
            align-items: flex-end
        }

        .swal2-container.swal2-grow-column>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .swal2-container.swal2-no-transition {
            transition: none !important
        }

        .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal {
            margin: auto
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-container .swal2-modal {
                margin: 0 !important
            }
        }

        .swal2-popup {
            display: none;
            position: relative;
            box-sizing: border-box;
            flex-direction: column;
            justify-content: center;
            width: 32em;
            max-width: 100%;
            padding: 1.25em;
            border: none;
            border-radius: 5px;
            background: #fff;
            font-family: inherit;
            font-size: 1rem
        }

        .swal2-popup:focus {
            outline: 0
        }

        .swal2-popup.swal2-loading {
            overflow-y: hidden
        }

        .swal2-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 1.8em
        }

        .swal2-title {
            position: relative;
            max-width: 100%;
            margin: 0 0 .4em;
            padding: 0;
            color: #595959;
            font-size: 1.875em;
            font-weight: 600;
            text-align: center;
            text-transform: none;
            word-wrap: break-word
        }

        .swal2-actions {
            display: flex;
            z-index: 1;
            box-sizing: border-box;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin: 1.25em auto 0;
            padding: 0 1.6em
        }

        .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
            opacity: .4
        }

        .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
            background-image: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1))
        }

        .swal2-actions:not(.swal2-loading) .swal2-styled:active {
            background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2))
        }

        .swal2-loader {
            display: none;
            align-items: center;
            justify-content: center;
            width: 2.2em;
            height: 2.2em;
            margin: 0 1.875em;
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            border-width: .25em;
            border-style: solid;
            border-radius: 100%;
            border-color: #2778c4 transparent #2778c4 transparent
        }

        .swal2-styled {
            margin: .3125em;
            padding: .625em 1.1em;
            box-shadow: none;
            font-weight: 500
        }

        .swal2-styled:not([disabled]) {
            cursor: pointer
        }

        .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #2778c4;
            color: #fff;
            font-size: 1.0625em
        }

        .swal2-styled.swal2-deny {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #d14529;
            color: #fff;
            font-size: 1.0625em
        }

        .swal2-styled.swal2-cancel {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #757575;
            color: #fff;
            font-size: 1.0625em
        }

        .swal2-styled:focus {
            outline: 0;
            box-shadow: 0 0 0 3px rgba(100, 150, 200, .5)
        }

        .swal2-styled::-moz-focus-inner {
            border: 0
        }

        .swal2-footer {
            justify-content: center;
            margin: 1.25em 0 0;
            padding: 1em 0 0;
            border-top: 1px solid #eee;
            color: #545454;
            font-size: 1em
        }

        .swal2-timer-progress-bar-container {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            height: .25em;
            overflow: hidden;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px
        }

        .swal2-timer-progress-bar {
            width: 100%;
            height: .25em;
            background: rgba(0, 0, 0, .2)
        }

        .swal2-image {
            max-width: 100%;
            margin: 1.25em auto
        }

        .swal2-close {
            position: absolute;
            z-index: 2;
            top: 0;
            right: 0;
            align-items: center;
            justify-content: center;
            width: 1.2em;
            height: 1.2em;
            padding: 0;
            overflow: hidden;
            transition: color .1s ease-out;
            border: none;
            border-radius: 5px;
            background: 0 0;
            color: #ccc;
            font-family: serif;
            font-size: 2.5em;
            line-height: 1.2;
            cursor: pointer
        }

        .swal2-close:hover {
            transform: none;
            background: 0 0;
            color: #f27474
        }

        .swal2-close:focus {
            outline: 0;
            box-shadow: inset 0 0 0 3px rgba(100, 150, 200, .5)
        }

        .swal2-close::-moz-focus-inner {
            border: 0
        }

        .swal2-content {
            z-index: 1;
            justify-content: center;
            margin: 0;
            padding: 0 1.6em;
            color: #545454;
            font-size: 1.125em;
            font-weight: 400;
            line-height: normal;
            text-align: center;
            word-wrap: break-word
        }

        .swal2-checkbox,
        .swal2-file,
        .swal2-input,
        .swal2-radio,
        .swal2-select,
        .swal2-textarea {
            margin: 1em auto
        }

        .swal2-file,
        .swal2-input,
        .swal2-textarea {
            box-sizing: border-box;
            width: 100%;
            transition: border-color .3s, box-shadow .3s;
            border: 1px solid #d9d9d9;
            border-radius: .1875em;
            background: inherit;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06);
            color: inherit;
            font-size: 1.125em
        }

        .swal2-file.swal2-inputerror,
        .swal2-input.swal2-inputerror,
        .swal2-textarea.swal2-inputerror {
            border-color: #f27474 !important;
            box-shadow: 0 0 2px #f27474 !important
        }

        .swal2-file:focus,
        .swal2-input:focus,
        .swal2-textarea:focus {
            border: 1px solid #b4dbed;
            outline: 0;
            box-shadow: 0 0 0 3px rgba(100, 150, 200, .5)
        }

        .swal2-file::-moz-placeholder,
        .swal2-input::-moz-placeholder,
        .swal2-textarea::-moz-placeholder {
            color: #ccc
        }

        .swal2-file:-ms-input-placeholder,
        .swal2-input:-ms-input-placeholder,
        .swal2-textarea:-ms-input-placeholder {
            color: #ccc
        }

        .swal2-file::placeholder,
        .swal2-input::placeholder,
        .swal2-textarea::placeholder {
            color: #ccc
        }

        .swal2-range {
            margin: 1em auto;
            background: #fff
        }

        .swal2-range input {
            width: 80%
        }

        .swal2-range output {
            width: 20%;
            color: inherit;
            font-weight: 600;
            text-align: center
        }

        .swal2-range input,
        .swal2-range output {
            height: 2.625em;
            padding: 0;
            font-size: 1.125em;
            line-height: 2.625em
        }

        .swal2-input {
            height: 2.625em;
            padding: 0 .75em
        }

        .swal2-input[type=number] {
            max-width: 10em
        }

        .swal2-file {
            background: inherit;
            font-size: 1.125em
        }

        .swal2-textarea {
            height: 6.75em;
            padding: .75em
        }

        .swal2-select {
            min-width: 50%;
            max-width: 100%;
            padding: .375em .625em;
            background: inherit;
            color: inherit;
            font-size: 1.125em
        }

        .swal2-checkbox,
        .swal2-radio {
            align-items: center;
            justify-content: center;
            background: #fff;
            color: inherit
        }

        .swal2-checkbox label,
        .swal2-radio label {
            margin: 0 .6em;
            font-size: 1.125em
        }

        .swal2-checkbox input,
        .swal2-radio input {
            margin: 0 .4em
        }

        .swal2-input-label {
            display: flex;
            justify-content: center;
            margin: 1em auto
        }

        .swal2-validation-message {
            display: none;
            align-items: center;
            justify-content: center;
            margin: 0 -2.7em;
            padding: .625em;
            overflow: hidden;
            background: #f0f0f0;
            color: #666;
            font-size: 1em;
            font-weight: 300
        }

        .swal2-validation-message::before {
            content: "!";
            display: inline-block;
            width: 1.5em;
            min-width: 1.5em;
            height: 1.5em;
            margin: 0 .625em;
            border-radius: 50%;
            background-color: #f27474;
            color: #fff;
            font-weight: 600;
            line-height: 1.5em;
            text-align: center
        }

        .swal2-icon {
            position: relative;
            box-sizing: content-box;
            justify-content: center;
            width: 5em;
            height: 5em;
            margin: 1.25em auto 1.875em;
            border: .25em solid transparent;
            border-radius: 50%;
            font-family: inherit;
            line-height: 5em;
            cursor: default;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .swal2-icon .swal2-icon-content {
            display: flex;
            align-items: center;
            font-size: 3.75em
        }

        .swal2-icon.swal2-error {
            border-color: #f27474;
            color: #f27474
        }

        .swal2-icon.swal2-error .swal2-x-mark {
            position: relative;
            flex-grow: 1;
            zoom: 1
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            display: block;
            position: absolute;
            top: 2.3125em;
            width: 2.9375em;
            height: .3125em;
            border-radius: .125em;
            background-color: #f27474
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: 1.0625em;
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: 1em;
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-error.swal2-icon-show {
            -webkit-animation: swal2-animate-error-icon .5s;
            animation: swal2-animate-error-icon .5s
        }

        .swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark {
            -webkit-animation: swal2-animate-error-x-mark .5s;
            animation: swal2-animate-error-x-mark .5s
        }

        .swal2-icon.swal2-warning {
            border-color: #facea8;
            color: #f8bb86
        }

        .swal2-icon.swal2-info {
            border-color: #9de0f6;
            color: #3fc3ee
        }

        .swal2-icon.swal2-question {
            border-color: #c9dae1;
            color: #87adbd
        }

        .swal2-icon.swal2-success {
            border-color: #a5dc86;
            color: #a5dc86
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 3.75em;
            height: 7.5em;
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.4375em;
            left: -2.0635em;
            zoom: 1;
            transform: rotate(-45deg);
            transform-origin: 3.75em 3.75em;
            border-radius: 7.5em 0 0 7.5em
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.6875em;
            left: 1.875em;
            zoom: 1;
            transform: rotate(-45deg);
            transform-origin: 0 3.75em;
            border-radius: 0 7.5em 7.5em 0
        }

        .swal2-icon.swal2-success .swal2-success-ring {
            position: absolute;
            z-index: 2;
            top: -.25em;
            left: -.25em;
            box-sizing: content-box;
            width: 100%;
            height: 100%;
            zoom: 1;
            border: .25em solid rgba(165, 220, 134, .3);
            border-radius: 50%
        }

        .swal2-icon.swal2-success .swal2-success-fix {
            position: absolute;
            z-index: 1;
            top: .5em;
            left: 1.625em;
            width: .4375em;
            height: 5.625em;
            zoom: 1;
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-success [class^=swal2-success-line] {
            display: block;
            position: absolute;
            z-index: 2;
            height: .3125em;
            zoom: 1;
            border-radius: .125em;
            background-color: #a5dc86
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
            top: 2.875em;
            left: .8125em;
            width: 1.5625em;
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip {
            -webkit-animation: swal2-animate-success-line-tip .75s;
            animation: swal2-animate-success-line-tip .75s
        }

        .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long {
            -webkit-animation: swal2-animate-success-line-long .75s;
            animation: swal2-animate-success-line-long .75s
        }

        .swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right {
            -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
            animation: swal2-rotate-success-circular-line 4.25s ease-in
        }

        .swal2-progress-steps {
            flex-wrap: wrap;
            align-items: center;
            max-width: 100%;
            margin: 0 0 1.25em;
            padding: 0;
            background: inherit;
            font-weight: 600
        }

        .swal2-progress-steps li {
            display: inline-block;
            position: relative
        }

        .swal2-progress-steps .swal2-progress-step {
            z-index: 20;
            flex-shrink: 0;
            width: 2em;
            height: 2em;
            border-radius: 2em;
            background: #2778c4;
            color: #fff;
            line-height: 2em;
            text-align: center
        }

        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
            background: #2778c4
        }

        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
            background: #add8e6;
            color: #fff
        }

        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
            background: #add8e6
        }

        .swal2-progress-steps .swal2-progress-step-line {
            z-index: 10;
            flex-shrink: 0;
            width: 2.5em;
            height: .4em;
            margin: 0 -1px;
            background: #2778c4
        }

        [class^=swal2] {
            -webkit-tap-highlight-color: transparent
        }

        .swal2-show {
            -webkit-animation: swal2-show .3s;
            animation: swal2-show .3s
        }

        .swal2-hide {
            -webkit-animation: swal2-hide .15s forwards;
            animation: swal2-hide .15s forwards
        }

        .swal2-noanimation {
            transition: none
        }

        .swal2-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll
        }

        .swal2-rtl .swal2-close {
            right: auto;
            left: 0
        }

        .swal2-rtl .swal2-timer-progress-bar {
            right: 0;
            left: auto
        }

        @supports (-ms-accelerator:true) {
            .swal2-range input {
                width: 100% !important
            }

            .swal2-range output {
                display: none
            }
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-range input {
                width: 100% !important
            }

            .swal2-range output {
                display: none
            }
        }

        @-webkit-keyframes swal2-toast-show {
            0% {
                transform: translateY(-.625em) rotateZ(2deg)
            }

            33% {
                transform: translateY(0) rotateZ(-2deg)
            }

            66% {
                transform: translateY(.3125em) rotateZ(2deg)
            }

            100% {
                transform: translateY(0) rotateZ(0)
            }
        }

        @keyframes swal2-toast-show {
            0% {
                transform: translateY(-.625em) rotateZ(2deg)
            }

            33% {
                transform: translateY(0) rotateZ(-2deg)
            }

            66% {
                transform: translateY(.3125em) rotateZ(2deg)
            }

            100% {
                transform: translateY(0) rotateZ(0)
            }
        }

        @-webkit-keyframes swal2-toast-hide {
            100% {
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @keyframes swal2-toast-hide {
            100% {
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @-webkit-keyframes swal2-toast-animate-success-line-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @keyframes swal2-toast-animate-success-line-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @-webkit-keyframes swal2-toast-animate-success-line-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        @keyframes swal2-toast-animate-success-line-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        @-webkit-keyframes swal2-show {
            0% {
                transform: scale(.7)
            }

            45% {
                transform: scale(1.05)
            }

            80% {
                transform: scale(.95)
            }

            100% {
                transform: scale(1)
            }
        }

        @keyframes swal2-show {
            0% {
                transform: scale(.7)
            }

            45% {
                transform: scale(1.05)
            }

            80% {
                transform: scale(.95)
            }

            100% {
                transform: scale(1)
            }
        }

        @-webkit-keyframes swal2-hide {
            0% {
                transform: scale(1);
                opacity: 1
            }

            100% {
                transform: scale(.5);
                opacity: 0
            }
        }

        @keyframes swal2-hide {
            0% {
                transform: scale(1);
                opacity: 1
            }

            100% {
                transform: scale(.5);
                opacity: 0
            }
        }

        @-webkit-keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .8125em;
                width: 1.5625em
            }
        }

        @keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .8125em;
                width: 1.5625em
            }
        }

        @-webkit-keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @-webkit-keyframes swal2-rotate-success-circular-line {
            0% {
                transform: rotate(-45deg)
            }

            5% {
                transform: rotate(-45deg)
            }

            12% {
                transform: rotate(-405deg)
            }

            100% {
                transform: rotate(-405deg)
            }
        }

        @keyframes swal2-rotate-success-circular-line {
            0% {
                transform: rotate(-45deg)
            }

            5% {
                transform: rotate(-45deg)
            }

            12% {
                transform: rotate(-405deg)
            }

            100% {
                transform: rotate(-405deg)
            }
        }

        @-webkit-keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                transform: scale(1);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                transform: scale(1);
                opacity: 1
            }
        }

        @-webkit-keyframes swal2-animate-error-icon {
            0% {
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                transform: rotateX(0);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-icon {
            0% {
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                transform: rotateX(0);
                opacity: 1
            }
        }

        @-webkit-keyframes swal2-rotate-loading {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        @keyframes swal2-rotate-loading {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow: hidden
        }

        body.swal2-height-auto {
            height: auto !important
        }

        body.swal2-no-backdrop .swal2-container {
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            max-width: calc(100% - .625em * 2);
            background-color: transparent !important
        }

        body.swal2-no-backdrop .swal2-container>.swal2-modal {
            box-shadow: 0 0 10px rgba(0, 0, 0, .4)
        }

        body.swal2-no-backdrop .swal2-container.swal2-top {
            top: 0;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-top-left,
        body.swal2-no-backdrop .swal2-container.swal2-top-start {
            top: 0;
            left: 0
        }

        body.swal2-no-backdrop .swal2-container.swal2-top-end,
        body.swal2-no-backdrop .swal2-container.swal2-top-right {
            top: 0;
            right: 0
        }

        body.swal2-no-backdrop .swal2-container.swal2-center {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-center-left,
        body.swal2-no-backdrop .swal2-container.swal2-center-start {
            top: 50%;
            left: 0;
            transform: translateY(-50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-center-end,
        body.swal2-no-backdrop .swal2-container.swal2-center-right {
            top: 50%;
            right: 0;
            transform: translateY(-50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-bottom {
            bottom: 0;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-bottom-left,
        body.swal2-no-backdrop .swal2-container.swal2-bottom-start {
            bottom: 0;
            left: 0
        }

        body.swal2-no-backdrop .swal2-container.swal2-bottom-end,
        body.swal2-no-backdrop .swal2-container.swal2-bottom-right {
            right: 0;
            bottom: 0
        }

        @media print {
            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
                overflow-y: scroll !important
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
                display: none
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
                position: static !important
            }
        }

        body.swal2-toast-shown .swal2-container {
            background-color: transparent
        }

        body.swal2-toast-shown .swal2-container.swal2-top {
            top: 0;
            right: auto;
            bottom: auto;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-top-end,
        body.swal2-toast-shown .swal2-container.swal2-top-right {
            top: 0;
            right: 0;
            bottom: auto;
            left: auto
        }

        body.swal2-toast-shown .swal2-container.swal2-top-left,
        body.swal2-toast-shown .swal2-container.swal2-top-start {
            top: 0;
            right: auto;
            bottom: auto;
            left: 0
        }

        body.swal2-toast-shown .swal2-container.swal2-center-left,
        body.swal2-toast-shown .swal2-container.swal2-center-start {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 0;
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center-end,
        body.swal2-toast-shown .swal2-container.swal2-center-right {
            top: 50%;
            right: 0;
            bottom: auto;
            left: auto;
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-left,
        body.swal2-toast-shown .swal2-container.swal2-bottom-start {
            top: auto;
            right: auto;
            bottom: 0;
            left: 0
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom {
            top: auto;
            right: auto;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-end,
        body.swal2-toast-shown .swal2-container.swal2-bottom-right {
            top: auto;
            right: 0;
            bottom: 0;
            left: auto
        }

        body.swal2-toast-column .swal2-toast {
            flex-direction: column;
            align-items: stretch
        }

        body.swal2-toast-column .swal2-toast .swal2-actions {
            flex: 1;
            align-self: stretch;
            height: 2.2em;
            margin-top: .3125em
        }

        body.swal2-toast-column .swal2-toast .swal2-loading {
            justify-content: center
        }

        body.swal2-toast-column .swal2-toast .swal2-input {
            height: 2em;
            margin: .3125em auto;
            font-size: 1em
        }

        body.swal2-toast-column .swal2-toast .swal2-validation-message {
            font-size: 1em
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-i4bv87-MuiSvgIcon-root {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 1em;
            height: 1em;
            display: inline-block;
            fill: currentColor;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            font-size: 1.5rem;
        }
    </style>
    <style data-jss="" data-meta="MuiFormLabel">
        .MuiFormLabel-root {
            color: rgba(0, 0, 0, 0.54);
            padding: 0;
            font-size: 1rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1;
            letter-spacing: 0.00938em;
        }

        .MuiFormLabel-root.Mui-focused {
            color: #3f51b5;
        }

        .MuiFormLabel-root.Mui-disabled {
            color: rgba(0, 0, 0, 0.38);
        }

        .MuiFormLabel-root.Mui-error {
            color: #f44336;
        }

        .MuiFormLabel-colorSecondary.Mui-focused {
            color: #f50057;
        }

        .MuiFormLabel-asterisk.Mui-error {
            color: #f44336;
        }
    </style>
    <style data-jss="" data-meta="MuiInputLabel">
        .MuiInputLabel-root {
            display: block;
            transform-origin: top left;
        }

        .MuiInputLabel-formControl {
            top: 0;
            left: 0;
            position: absolute;
            transform: translate(0, 24px) scale(1);
        }

        .MuiInputLabel-marginDense {
            transform: translate(0, 21px) scale(1);
        }

        .MuiInputLabel-shrink {
            transform: translate(0, 1.5px) scale(0.75);
            transform-origin: top left;
        }

        .MuiInputLabel-animated {
            transition: color 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms, transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
        }

        .MuiInputLabel-filled {
            z-index: 1;
            transform: translate(12px, 20px) scale(1);
            pointer-events: none;
        }

        .MuiInputLabel-filled.MuiInputLabel-marginDense {
            transform: translate(12px, 17px) scale(1);
        }

        .MuiInputLabel-filled.MuiInputLabel-shrink {
            transform: translate(12px, 10px) scale(0.75);
        }

        .MuiInputLabel-filled.MuiInputLabel-shrink.MuiInputLabel-marginDense {
            transform: translate(12px, 7px) scale(0.75);
        }

        .MuiInputLabel-outlined {
            z-index: 1;
            transform: translate(14px, 20px) scale(1);
            pointer-events: none;
        }

        .MuiInputLabel-outlined.MuiInputLabel-marginDense {
            transform: translate(14px, 12px) scale(1);
        }

        .MuiInputLabel-outlined.MuiInputLabel-shrink {
            transform: translate(14px, -6px) scale(0.75);
        }
    </style>
    <style data-jss="" data-meta="MuiFormControl">
        .MuiFormControl-root {
            border: 0;
            margin: 0;
            display: inline-flex;
            padding: 0;
            position: relative;
            min-width: 0;
            flex-direction: column;
            vertical-align: top;
        }

        .MuiFormControl-marginNormal {
            margin-top: 16px;
            margin-bottom: 8px;
        }

        .MuiFormControl-marginDense {
            margin-top: 8px;
            margin-bottom: 4px;
        }

        .MuiFormControl-fullWidth {
            width: 100%;
        }

        .title {
            color: Green;
            font-size: 30px;
            text-align: center;
            text-decoration: none;
        }

        @media only screen and (max-width: 768px) {
            .title {
                color: white;
                font-size: 20px;
                text-align: center;
            }
        }
    </style>

    <!-- end of style section -->

</head>

<body><noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <div>
            <div class="sidebar sidebar-fixed" selfhiding="md">
                <div class="sidebar-brand d-none d-md-flex" to="/"><a href="#/home" aria-current="page"
                        class="active title">
                        AXISCLASS.COM
                    </a>
                </div>
                <p class="tp-id-dispaly-css">TP-ST000426</p>
                <?php include "sidebar.php";?>
            </div>
            <div class="wrapper d-flex flex-column bg-light" style="min-height: 51px;">
                <div class="header header-sticky mb-3"><button type="button"
                        class="header-toggler ps-1 toggle-menu-hide-from-destop-view"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon" role="img"
                            style="width: 35px; height: 35px; color: rgb(56, 56, 56);">
                            <rect width="352" height="32" x="80" y="96" fill="var(--ci-primary-color, currentColor)"
                                class="ci-primary"></rect>
                            <rect width="352" height="32" x="80" y="240" fill="var(--ci-primary-color, currentColor)"
                                class="ci-primary"></rect>
                            <rect width="352" height="32" x="80" y="384" fill="var(--ci-primary-color, currentColor)"
                                class="ci-primary"></rect>
                        </svg></button><a class="toggle-menu-hide-from-destop-view" href="#/home">
                        <div class="avatar ps-1 toggle-menu-hide-from-destop-view" style="height: 100px; width: 180px;">
                            <img src="data:image/png;base64,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"
                                class="avatar-img">
                        </div>
                    </a>
                    <li class="nav-item dropdown toggle-menu-hide-from-destop-view marker-remove-css "><a href="#"
                            class="nav-link py-0 toggle-menu-hide-from-destop-view " aria-expanded="false">
                            <div class="avatar avatar-md"><img
                                    src="data:image/png;base64,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"
                                    class="avatar-img"></div>
                        </a>
                        <ul class="dropdown-menu pt-0 menu-moblie-view dropdown-menu-phone-css" role="menu"
                            aria-hidden="true" placement="bottom-end" style="display: none;">
                            <li>
                                <div class="row dropdown-menu-row-css">
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><a class="textDecorationNone"
                                            href="#/sessions"><a class="dropdown-item dropdown-menu-item-phone-css"><img
                                                    class="card-img card-Image dropdown-menu-item-phone-image-css"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAMAAADDpiTIAAAAsVBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////+3mHKcAAAAOnRSTlMA9JILbujtLcrO8QX8H/gJEBXkJNdyNlopsoQZ3cBUvI3hnkvSQxyuDWpHMWA6xZi3Tz97ZKSpiH92RoM2yAAAHwJJREFUeNrs3el6ojAUBuCDVrQGWZSiFdyooHXftbn/C5vFiIpOZzoVPDF5f/ZPn5l8JScnJIAkSZIkSZIkfR/JuovVttd4tstFRbqBYtl+bvS2q0WYJYCcYTr1rq5rGpVuTNN0vVt3TAPQylpBxpNDnyitMx1YWUCIuM2NSqUUqJtmiG4usEYdKqWmvLIAE2vepVKq7CaeCJhBg0qpmwxMwMBwNlS6i94YwZLA2lLpbtou3FmtR6U7eq3BXS2eqXRXdgB31JQr/7tTqgTuxPigEgK7PtyFlaESCn4Id2DK8g+NmQXpk3//iPgE0vZEJUQ+IGVzue2LSxVSNcxRCRXVgRS5BSoh0w0hNURu/yDUMyAtSyohVIeUlIpUQkipQDrWVEJpA6kYKlRCSXcgDa/0ASheoTF73ayn/ro3a02eOw/R12hBCgKdcq042WSWqzenElp9sj/M4pZq4/n7btorcP5w098geRPKL7WReR9UDPiDbOXtKdPg+R2HCSSuyu2z0s6sghD+qhSsMh7llDaChBFO3wHrTEdD+GfOalqmXOpmIVkBl7PkeuTA1xBnxWW7U3mDZE35mwGU9lsf/oM5z/BX72o+JIu7I2DecgFXhcNxMK+ORtV5MB6W4Bqy2HE3E3QJJMnhbBs495KHC/nqR2bTera9ck5VFDVX9uznVm+6rA7hwnDJ2aJAXUCStnzNANvhxd/0k9+yVXpV0W74TwsSz3yb8kRrwyVBmwD+GM4Yzemko9NP6Z2J3ySx0HC1+VGABNU4mhK7cxNONf1C7h/njYLfhFNmk6PG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">Sessions</a></a>
                                    </div>
                                    <div class="toogle-menu-padding col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><a
                                            class="textDecorationNone" href="#/events"><a
                                                class="dropdown-item dropdown-menu-item-phone-css"><img
                                                    class="card-img card-Image dropdown-menu-item-phone-image-css"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAMAAADDpiTIAAAApVBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////+4/eNVAAAANnRSTlMA8Q+cFOWtRepP/Qr0MNrWwDQH7gQj+GzgVzpi57aXys+6iXKyxnlcHaArGT+NhKaSQ35JUmj5UfxfAAAP6klEQVR42uzd7Y6aUBDG8fGN4pEFRUWtVmEVdamutG7n/i+tSdN+aCjK2d02PTPP7w5M/pE5LwQCAAAAAPjH2h++epGf8E/GD3fPL10S6uP2Ke0F/Mt4PiwPU1LsuM98rgiG5weSJ555c64wm/UXUmowy7lG9HwkYQ47rtErJfZ+Xz/jG/JvJMmDl3C96Cvps/X5JlNOSIyXkG+7iJ176pwN37P7TEJUYq8a6noMDC7cwEbIhFwavi9SNQt2uJG8TQLsuZFQSO5N7LmhC7mvH3AzQxG5N7EIuCn3x+OHHjf1RDocQ24s+EhuGwy5MSNr6VtrzRY+DchpB7YQqlgMPqzYgumTy7oR23gmBTy2snF5NJps2cpcwUpg5LOdF3JXd85WzJnE+5qwnSeHp4AvbCki8XK2tHJ3MorPbMl3fdVzV9FjW1dyVTtiS4n4MXAbsK1zTI4aGbaVk3Br/kHHVsCBrYXO/tiGPLaWuroQnGwNM2Mh+Jucra1cDSA+s7WV9CkwZWuJqxdD4gtb813e9rCYi22Ygtw0yNhaS/iBUDdka8bV21KDIVsLZiQaAkAACAABIAAEgAAQAAJAAAgAASAABIAAEAACQAAIAAEgAASAAEg0BIAAEAACQAAIAAEgAASAABAAAkAACAABIAAEgAAQAAJAAAgAAZBoCAABIADNAVDE1oyzb0xnbK21JBcMpsXodO3bO/TYmtn23bSI2FrSufbtXU+jYjqgf6JY7Du7PI3C+cp/BcP2xr6jErZmgpVvbzUPozTfdfaLgv6m46HMorFh+E+ZcZSVhyP9FfHSS8cM/71x6i0H9N5G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">Events</a></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row dropdown-menu-row-css">
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><a class="textDecorationNone"
                                            href="#/messages"><a class="dropdown-item dropdown-menu-item-phone-css"><img
                                                    class="card-img card-Image dropdown-menu-item-phone-image-css"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAMAAADDpiTIAAAAolBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8ELnaCAAAANXRSTlMA8375Rhj9CIbBqxPvXK6FEPLfDur3G9M4vFIr2ZDNmmELJSB1TUAzFuW2aMZuMKCCWJSlskbBcX4AAA5cSURBVHja7NxrUhpREIDREVBRQsqoIfhGRDCapKKm97+1vFBhKqmKYf5c+pw1fFB9Z6ZvBQAAAAAAAAAAAAAAAAAAAAAAAMA6uOwNxsPO8ehu0uKvvrYm/dlgu1ozN+Pr1sXOx+CfnJ5N96q10TvptI62gld5HFbrYXy8+z54vfZdVb5Bp7sf/KduVbjB/VGwglZVsqvRTrCa66pc95+CVe3fVIUaXgQNmFRF6k2c+Jtx2KsKNLsNGtKpytN38mvOQ3EPhQ+6QXPOD6qyjL8FDTosLIAv50GT2mVNgdPToFHtzaogHeNf6gCmh0HiAIZ+/5E5gJMPQeIAxl7+/JA3gG1vf37KG8CkHUSkDeDad3+/ZA3AADiXNAADwJOkARwHv+UM4MoJ8EnOAFrBXMoAhhvBXMoATIAvMgYw8wfwImMAZ8GzhAGcvAueJQzAEWBRvgA27QAtyhdAJ1iQLoDtx2BBugCujIBL0gXQDxZlC+ByN1iULYA9Z4Bl2QKYBUuyBfA5WJIsgMu3wZJkARxYBqtJFsDAMkBNsgCmroCuSRbASAA1yQLoCqAmWQCeA9YlC8Bl4HXJArAQUpcsACuhdckC8ByoLlkAbgWrSxaAz4HqkgVgJ6hOAAgAASAABIAAEAACQAAIAAEgAASAABAAAkAACAABIAAE8GdbJRFAw9ob5w+TUb8Qd93bN20BfGfvbnfUBKIwjh+KxVotqyggvoG64ruL2z33f2tt0zRp0mQrDB04p8//AvjCL8NkcsLUlxt8mndJUt0o64UAUFOjZZ/k1c0WAFBLwY5kFvkuAJi3mpPU1qkHAKYFU5Lb0AcA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">Messages</a></a>
                                    </div>
                                    <div class="toogle-menu-padding col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><a
                                            class="textDecorationNone" href="#/chat"><a
                                                class="dropdown-item dropdown-menu-item-phone-css"><img
                                                    class="card-img card-Image dropdown-menu-item-phone-image-css"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAMAAADDpiTIAAAAq1BMVEUAAAD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////Nr6iZAAAAOHRSTlMA/AoSBvb4LvIX7urNG+bYOTSyJCkOg+Ldp1vDPqEfrdO2Zsh+k4pWunKdS5hhQ29Pjnm+R992akhZAV0AABoeSURBVHja7N3p1powEAZgFtkRcEVkcUPwQ0W0VnP/V9av/dPT056eioAT+z534EkMk5lMIgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPKEnSZKhRdX8lJ6LRRhulkvX9y1dN33fny3tcLUoztPbce+NZEmSegK8CUmSR+X8sl3YjqIoqqqKosj+SPykqoqiOPZie8u9ZIKJwLOeJBtafis2pviJPUj8ZNlxOh8YsiQAX3oTY1RNA1thDdA3xSnqGxMBuCAZSXkLXNawZXDyEqwFxEl9bV7YrC3Kl6wa9zEJaPoc/H1ms9Ytz9XYEIAWeVxlG9YVZZeWI8QEZBiDeWyxjn0tck0W4OWS6GMlspewgvUAc+CljCgN2SspwdrDHHgRybsP2evpwXEgQOe0Y2wyIpxtPhKgQ3K+nTFSNukV+YGujO8rRo8Y3DUB2vc920PUMrsK0KrkHiiMMD2eI0HUntFlw8hbfSAgbMeA7tr/KztFMNC88uAybiwzTIFmVYHDuOKeMQWaEwUW4w6mQFMGhc+45J4TAZ6VUMv5PWI5RaXoOUbGUej3J/ZdgPpOS8Y7PawEqMfb6ewNWCtPgMf1C852fn8rFyMUeNiN49jvd7O1AI/Y26RrPg+x3M0qOOMz8ACj4PzjL4qiMvsST9d7b2TI8mQiTdBl+s96+UxknBJVVV8GnwOvyWgtrimJVcYhUdXN2TBbRzLG/RnSmsO0v6pby+KO8+ENGC0YX0Tdmg3TK5oFGyHlfG39dcc+zMcCNKS/ZfxQnGWwRsG3SREnJ74+Wcvh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">Chat</a></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row dropdown-menu-row-css">
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><a class="textDecorationNone"
                                            href="#/timeline"><a class="dropdown-item dropdown-menu-item-phone-css"><img
                                                    class="card-img card-Image dropdown-menu-item-phone-image-css"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAMAAADDpiTIAAAAqFBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8j1z1tAAAAN3RSTlMAnvBW3yr6bi/py3FeBRALt/fzaBzXpZkhu4FQFO4YROTD0XxJsr+HYyUzB47brTnIWnmUoHU+a6U22wAAGA1JREFUeNrs3Nl6okAUReGjURwSFQUJxiFAjFOMmmhnv/+b9fj1qIUC0lq1//tcnQUBqkohIiIiIiIyw6jidfFN16uMJDPrB7uGC2VFBacl9JUT4jehI9nwpyVcNvtNSAY7/GXnSgY+6rh41rYppqtO8I9JVVJ7u/TL/zvbF7P5G+yxcSWlcRHX4dnse8CLh728hqRSfsW1WIrJHBzgSCorXA3rRszlRjggciWFxzaux2QgxnrCIda7pNDDFbHuXsRUikHZkpw/xDXZVcVQ6xIOKi0ksco1/QcAoncxVAWHWY4k5uGqWLYYagmFqSR2Bd8A/9AVQ91D4V4S6+K61MRQBSgUJLHr+Ar8S1EMxQAYAANgAAyAATAAMzEABsAAGAADYAAMwEwMgAEwAAbAABgAAzATA2AADIABMAAGwADMxAAYAANgAAyAATAAMzEABsAAGAADYAAMwEwMgAEwAAbAABgAAzATA2AADIABMAAGwADMxAAYAANgAAyAATAAMzEABsAAGAADYAAMwEwMgAEwAAbAABjAfwqgPaydz7BjMYBLDsAKnp3F4EXOpOWPl9GQAVxsAMHDSM7uo1dkAAcNyhsohPPR+QJo73zJxU2XAezn30wQI3zzzxTA8KEhOfFtBrDH/LaGI5Rm/jkC6MwkP02bAfzNvx3iSIHjZx6A9SR5KkcM4A/Nmy5OEPVbcqJXKK1akqtxhwH8Zu7hRNu5nMStQaWzlpwVGMAv/S5O1u2fNP9eTE8vkrNqwAB+aE2RyFPr+PlPoPYouVsxgO/cHRK6H2R0/SPyJXe3FgP4yp8gsdUom/lj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">Timeline</a></a>
                                    </div>
                                    <div class="toogle-menu-padding col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><a
                                            class="textDecorationNone" href="#/library"><a
                                                class="dropdown-item dropdown-menu-item-phone-css"><img
                                                    class="card-img card-Image dropdown-menu-item-phone-image-css"
                                                    src="./static/media/Library.9de93ad0.png">Library</a></a></div>
                                </div>
                            </li>
                            <li>
                                <div class="row d-flex justify-content-evenly dropdown-menu-row-css">
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><a class="textDecorationNone"
                                            href="#/school-diary"><a
                                                class="dropdown-item dropdown-menu-item-phone-css"><img
                                                    class="card-img card-Image dropdown-menu-item-phone-image-css"
                                                    src="./static/media/Library.9de93ad0.png">School Diary</a></a></div>
                                    <div class="toogle-menu-padding col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"><a
                                            class="textDecorationNone" href="#/class-room"><a
                                                class="dropdown-item dropdown-menu-item-phone-css"><img
                                                    class="card-img card-Image dropdown-menu-item-phone-image-css"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAMAAADDpiTIAAAAq1BMVEUAAAD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////Nr6iZAAAAOHRSTlMA/AoSBvb4LvIX7urNG+bYOTSyJCkOg+Ldp1vDPqEfrdO2Zsh+k4pWunKdS5hhQ29Pjnm+R992akhZAV0AABoeSURBVHja7N3p1powEAZgFtkRcEVkcUPwQ0W0VnP/V9av/dPT056eioAT+z534EkMk5lMIgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPKEnSZKhRdX8lJ6LRRhulkvX9y1dN33fny3tcLUoztPbce+NZEmSegK8CUmSR+X8sl3YjqIoqqqKosj+SPykqoqiOPZie8u9ZIKJwLOeJBtafis2pviJPUj8ZNlxOh8YsiQAX3oTY1RNA1thDdA3xSnqGxMBuCAZSXkLXNawZXDyEqwFxEl9bV7YrC3Kl6wa9zEJaPoc/H1ms9Ytz9XYEIAWeVxlG9YVZZeWI8QEZBiDeWyxjn0tck0W4OWS6GMlspewgvUAc+CljCgN2SspwdrDHHgRybsP2evpwXEgQOe0Y2wyIpxtPhKgQ3K+nTFSNukV+YGujO8rRo8Y3DUB2vc920PUMrsK0KrkHiiMMD2eI0HUntFlw8hbfSAgbMeA7tr/KztFMNC88uAybiwzTIFmVYHDuOKeMQWaEwUW4w6mQFMGhc+45J4TAZ6VUMv5PWI5RaXoOUbGUej3J/ZdgPpOS8Y7PawEqMfb6ewNWCtPgMf1C852fn8rFyMUeNiN49jvd7O1AI/Y26RrPg+x3M0qOOMz8ACj4PzjL4qiMvsST9d7b2TI8mQiTdBl+s96+UxknBJVVV8GnwOvyWgtrimJVcYhUdXN2TBbRzLG/RnSmsO0v6pby+KO8+ENGC0YX0Tdmg3TK5oFGyHlfG39dcc+zMcCNKS/ZfxQnGWwRsG3SREnJ74+Wcvh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">Class
                                                Room</a></a></div>
                                </div>
                            </li>
                        </ul>

                    </li>
                    <?php include "topbar.php";?>
                </div>
                <div class="wrapper d-flex flex-row bg-light p-0" style="min-height: 159px;">
                    <div class="body-content-css" sm="12" md="12" lg="12" xl="12" xxl="12" xs="12">
                        <div class="container col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xs-12">
                            <div class="Toastify"></div>
                            <div class="card course-card-list-css">
                                <div class="course-header">
                                    <div class="col-12">
                                        <div class="row mt-3 d-flex">
                                            <div class="text-center col-12">
                                                <div class="postsearchheader">My Sessions</div>
                                            </div>
                                        </div>
                                        <div class="mt-2 row">
                                            <div class="col-1 col-sm-1 col-md-3 col-lg-3 col-xl-3"></div>
                                            <div
                                                class="col-10 col-sm-10 col-md-6 col-lg-6 col-xl-6 d-flex position-relative text-center">
                                                <input type="text" class="form-control searchinput rounded-pill pr-5"
                                                    placeholder="Search My Sessions" fdprocessedid="hpr5va"><button
                                                    class="btn btn-primary searchbutton rounded-pill" type="button"
                                                    fdprocessedid="b4drlc"><svg aria-hidden="true" focusable="false"
                                                        data-prefix="fas" data-icon="search"
                                                        class="svg-inline--fa fa-search fa-w-16 serchingicon" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="currentColor"
                                                            d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                                        </path>
                                                    </svg></button>
                                            </div>
                                            <div sm="1" md="3" lg="3" xl="3"></div>
                                        </div>
                                        <div class="row mt-2 mb-3 ">
                                            <div class="col-1 col-sm-1 col-md-2 col-lg-2 col-xl-2"></div>
                                            <div class="text-center col-10 col-sm-10 col-md-8 col-lg-8 col-xl-8"><button
                                                    class="btn btn-primary rounded-pill groupbutton-active m-1"
                                                    type="button" id="Upcoming" fdprocessedid="qesd5">Upcoming
                                                    Sessions</button><button
                                                    class="btn btn-primary rounded-pill groupbutton m-1" type="button"
                                                    id="Complete" fdprocessedid="5jf2ke">Completed
                                                    Sessions</button><button
                                                    class="btn btn-primary rounded-pill groupbutton m-1" type="button"
                                                    id="All" fdprocessedid="dre9hn">All Sessions</button></div>
                                            <div class="col-1 col-sm-1 col-md-2 col-lg-2 col-xl-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p>
                                <div style="text-align: center; padding-top: 10%;">
                                    <h4>Upcoming sessions data not available...</h4>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="footer">
                    <div><span class="ms-1">Copyright © 2023 TutorPark Company | All rights reserved.</span></div>
                </div>
            </div>
        </div>
    </div>
    <script>!function (e) { function a(a) { for (var c, f, n = a[0], b = a[1], o = a[2], u = 0, l = []; u < n.length; u++)f = n[u], Object.prototype.hasOwnProperty.call(r, f) && r[f] && l.push(r[f][0]), r[f] = 0; for (c in b) Object.prototype.hasOwnProperty.call(b, c) && (e[c] = b[c]); for (i && i(a); l.length;)l.shift()(); return d.push.apply(d, o || []), t() } function t() { for (var e, a = 0; a < d.length; a++) { for (var t = d[a], c = !0, f = 1; f < t.length; f++) { var b = t[f]; 0 !== r[b] && (c = !1) } c && (d.splice(a--, 1), e = n(n.s = t[0])) } return e } var c = {}, f = { 18: 0 }, r = { 18: 0 }, d = []; function n(a) { if (c[a]) return c[a].exports; var t = c[a] = { i: a, l: !1, exports: {} }; return e[a].call(t.exports, t, t.exports, n), t.l = !0, t.exports } n.e = function (e) { var a = []; f[e] ? a.push(f[e]) : 0 !== f[e] && { 7: 1, 8: 1, 11: 1, 12: 1, 13: 1, 19: 1, 20: 1, 21: 1, 22: 1, 23: 1, 24: 1, 25: 1, 26: 1, 27: 1, 28: 1, 29: 1, 30: 1, 31: 1, 32: 1, 33: 1, 34: 1, 35: 1, 36: 1, 37: 1, 38: 1, 39: 1, 41: 1, 42: 1, 43: 1, 44: 1, 45: 1, 46: 1, 47: 1, 48: 1, 49: 1, 50: 1, 51: 1, 52: 1, 53: 1, 54: 1, 57: 1, 58: 1, 59: 1, 60: 1, 61: 1, 62: 1, 63: 1, 64: 1, 68: 1, 69: 1, 70: 1, 71: 1, 72: 1, 75: 1, 77: 1, 78: 1, 81: 1, 83: 1, 87: 1, 88: 1 }[e] && a.push(f[e] = new Promise((function (a, t) { for (var c = "static/css/" + ({}[e] || e) + "." + { 0: "31d6cfe0", 1: "31d6cfe0", 2: "31d6cfe0", 3: "31d6cfe0", 4: "31d6cfe0", 5: "31d6cfe0", 6: "31d6cfe0", 7: "e26ab769", 8: "e26ab769", 9: "31d6cfe0", 10: "31d6cfe0", 11: "e26ab769", 12: "e26ab769", 13: "52f6cc9e", 14: "31d6cfe0", 15: "31d6cfe0", 16: "31d6cfe0", 19: "e26ab769", 20: "b4f77890", 21: "e26ab769", 22: "e26ab769", 23: "1e1cfe70", 24: "0fbabef7", 25: "e26ab769", 26: "e26ab769", 27: "e26ab769", 28: "e26ab769", 29: "8138f4b2", 30: "e26ab769", 31: "76461623", 32: "e26ab769", 33: "0fbabef7", 34: "e26ab769", 35: "e26ab769", 36: "e26ab769", 37: "e26ab769", 38: "e26ab769", 39: "7a915419", 41: "0fbabef7", 42: "e26ab769", 43: "d3e0ba3b", 44: "e26ab769", 45: "e26ab769", 46: "e26ab769", 47: "e26ab769", 48: "76461623", 49: "e26ab769", 50: "76461623", 51: "76461623", 52: "e26ab769", 53: "76461623", 54: "e26ab769", 55: "31d6cfe0", 56: "31d6cfe0", 57: "e26ab769", 58: "e26ab769", 59: "7a915419", 60: "e26ab769", 61: "e26ab769", 62: "7a915419", 63: "7a915419", 64: "e26ab769", 65: "31d6cfe0", 66: "31d6cfe0", 67: "31d6cfe0", 68: "e26ab769", 69: "e26ab769", 70: "e26ab769", 71: "e26ab769", 72: "e26ab769", 73: "31d6cfe0", 74: "31d6cfe0", 75: "e26ab769", 76: "31d6cfe0", 77: "d3db017b", 78: "d3db017b", 79: "31d6cfe0", 80: "31d6cfe0", 81: "d3db017b", 82: "31d6cfe0", 83: "e26ab769", 84: "31d6cfe0", 85: "31d6cfe0", 86: "31d6cfe0", 87: "e26ab769", 88: "e26ab769", 89: "31d6cfe0", 90: "31d6cfe0", 91: "31d6cfe0", 92: "31d6cfe0", 93: "31d6cfe0", 94: "31d6cfe0", 95: "31d6cfe0", 96: "31d6cfe0", 97: "31d6cfe0", 98: "31d6cfe0", 99: "31d6cfe0", 100: "31d6cfe0" }[e] + ".chunk.css", r = n.p + c, d = document.getElementsByTagName("link"), b = 0; b < d.length; b++) { var o = (i = d[b]).getAttribute("data-href") || i.getAttribute("href"); if ("stylesheet" === i.rel && (o === c || o === r)) return a() } var u = document.getElementsByTagName("style"); for (b = 0; b < u.length; b++) { var i; if ((o = (i = u[b]).getAttribute("data-href")) === c || o === r) return a() } var l = document.createElement("link"); l.rel = "stylesheet", l.type = "text/css", l.onload = a, l.onerror = function (a) { var c = a && a.target && a.target.src || r, d = new Error("Loading CSS chunk " + e + " failed.\n(" + c + ")"); d.code = "CSS_CHUNK_LOAD_FAILED", d.request = c, delete f[e], l.parentNode.removeChild(l), t(d) }, l.href = r, document.getElementsByTagName("head")[0].appendChild(l) })).then((function () { f[e] = 0 }))); var t = r[e]; if (0 !== t) if (t) a.push(t[2]); else { var c = new Promise((function (a, c) { t = r[e] = [a, c] })); a.push(t[2] = c); var d, b = document.createElement("script"); b.charset = "utf-8", b.timeout = 120, n.nc && b.setAttribute("nonce", n.nc), b.src = function (e) { return n.p + "static/js/" + ({}[e] || e) + "." + { 0: "c22ac8c6", 1: "35fa0866", 2: "111b97fc", 3: "128d355a", 4: "40582534", 5: "5cd9b477", 6: "464df14d", 7: "80e5a120", 8: "2cadd4a1", 9: "e6977b0e", 10: "62d2ef8d", 11: "d6d1e2c0", 12: "f9e6a6ed", 13: "12d5e6b9", 14: "0e21aa92", 15: "8a480fa1", 16: "fca56eb3", 19: "10ebfcb1", 20: "2bb17fca", 21: "e7606aaa", 22: "57719757", 23: "ab80a2c6", 24: "15ba95c3", 25: "fe2aae8c", 26: "af880c04", 27: "1b28a7e8", 28: "3fafdb1e", 29: "01a6e9d6", 30: "39da598a", 31: "03e87d99", 32: "f42296f0", 33: "115eb670", 34: "441011d5", 35: "c63b1c86", 36: "090fb9cd", 37: "ad31abb2", 38: "1325c343", 39: "f46f09d1", 41: "90fb1b79", 42: "7c467632", 43: "34101594", 44: "8fdeceff", 45: "1497f9af", 46: "73138e39", 47: "033ca017", 48: "a7f09836", 49: "57269339", 50: "9b4c1397", 51: "d6edff34", 52: "927d5ad3", 53: "b54de506", 54: "7aed5665", 55: "f39b4cc7", 56: "a17f4ef4", 57: "bdaeb87e", 58: "94ec7efe", 59: "b4de7685", 60: "2a33df0e", 61: "e2b4cc09", 62: "a671fb82", 63: "5565342b", 64: "25bf13c6", 65: "9256b9d3", 66: "00c6a5e9", 67: "cb036296", 68: "7ef9152f", 69: "b7cef751", 70: "f1f72ef5", 71: "b2e7cb11", 72: "6e565eba", 73: "734dd6e6", 74: "3959eb1d", 75: "b48ce581", 76: "ccba0a3b", 77: "2e772dc6", 78: "21154822", 79: "9ce45fd8", 80: "932e6230", 81: "e88f271e", 82: "56da15c7", 83: "8d26e9af", 84: "a34c76ba", 85: "31fe2816", 86: "aa54c3bd", 87: "5f483011", 88: "d944b945", 89: "f062b3ab", 90: "288aee98", 91: "b4c96166", 92: "798ea4cb", 93: "dbe62582", 94: "3dbe710e", 95: "22cdde66", 96: "41537f9a", 97: "511d7e4b", 98: "ca9393d1", 99: "d60176d6", 100: "2b570128" }[e] + ".chunk.js" }(e); var o = new Error; d = function (a) { b.onerror = b.onload = null, clearTimeout(u); var t = r[e]; if (0 !== t) { if (t) { var c = a && ("load" === a.type ? "missing" : a.type), f = a && a.target && a.target.src; o.message = "Loading chunk " + e + " failed.\n(" + c + ": " + f + ")", o.name = "ChunkLoadError", o.type = c, o.request = f, t[1](o) } r[e] = void 0 } }; var u = setTimeout((function () { d({ type: "timeout", target: b }) }), 12e4); b.onerror = b.onload = d, document.head.appendChild(b) } return Promise.all(a) }, n.m = e, n.c = c, n.d = function (e, a, t) { n.o(e, a) || Object.defineProperty(e, a, { enumerable: !0, get: t }) }, n.r = function (e) { "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 }) }, n.t = function (e, a) { if (1 & a && (e = n(e)), 8 & a) return e; if (4 & a && "object" == typeof e && e && e.__esModule) return e; var t = Object.create(null); if (n.r(t), Object.defineProperty(t, "default", { enumerable: !0, value: e }), 2 & a && "string" != typeof e) for (var c in e) n.d(t, c, function (a) { return e[a] }.bind(null, c)); return t }, n.n = function (e) { var a = e && e.__esModule ? function () { return e.default } : function () { return e }; return n.d(a, "a", a), a }, n.o = function (e, a) { return Object.prototype.hasOwnProperty.call(e, a) }, n.p = "./", n.oe = function (e) { throw console.error(e), e }; var b = this["webpackJsonptutor-park"] = this["webpackJsonptutor-park"] || [], o = b.push.bind(b); b.push = a, b = b.slice(); for (var u = 0; u < b.length; u++)a(b[u]); var i = o; t() }([])</script>
    <script src="./static/js/40.f77fd6f8.chunk.js"></script>
    <script src="./static/js/main.e355dce4.chunk.js"></script>
</body>

</html>