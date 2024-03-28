<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        
        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }
            .dark\:animsh{
                background: 50% 100%/50% 50% no-repeat radial-gradient(ellipse at bottom, #ffffff, transparent, transparent);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-size: 10vw;
            font-family: "Source Sans Pro", sans-serif;
            -webkit-animation: reveal 3000ms ease-in-out forwards 800ms, glow 2500ms linear infinite 2000ms;
            animation: reveal 3000ms ease-in-out forwards 800ms, glow 2500ms linear infinite 2000ms;

            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
            .sm\:grid-cols-3{
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
            .md\:grid-cols-3{
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
    <style>
        .langspan {
            width: 24px;
            height: 20px;
            background-size: contain;
            background-repeat: no-repeat;
            margin-left: 6px;
        }

        .not {
            max-width: 150px;
            height: fit-content;
            transform: translate(3px, 40px);
            background-color: #ebe9e9;
            border: 1px solid #c9c9c9;
            color: black;
            padding: 6px;
        }

        .not a {
            display: block;
        }

        .not a:hover {
            background-color: lightsteelblue
        }

        .animsh {
            background: 50% 100%/50% 50% no-repeat radial-gradient(ellipse at bottom, #ffffff, transparent, transparent);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-size: 10vw;
            font-family: "Source Sans Pro", sans-serif;
            -webkit-animation: reveal 3000ms ease-in-out forwards 800ms, glow 2500ms linear infinite 2000ms;
            animation: reveal 3000ms ease-in-out forwards 800ms, glow 2500ms linear infinite 2000ms;

        }
        .animglow{
            background: 50% 100%/50% 50% no-repeat radial-gradient(ellipse at bottom, #000000, transparent, transparent);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-size: 10vw;
            animation:  rev 3000ms ease-in-out forwards 800ms,glowb 2500ms linear infinite 2000ms;
        }
        .animgloww{
            background: 50% 100%/50% 50% no-repeat radial-gradient(ellipse at bottom, #000000, transparent, transparent);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-size: 10vw;
            animation:  rev 3000ms ease-in-out forwards 800ms,glow 2500ms linear infinite 2000ms;
        }

        .animshb {
            background: 50% 100%/50% 50% no-repeat radial-gradient(ellipse at bottom, #000000, transparent, transparent);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-size: 10vw;
            font-family: "Source Sans Pro", sans-serif;
            -webkit-animation: reveal 3000ms ease-in-out forwards 800ms, glowb 2500ms linear infinite 2000ms;
            animation: reveal 3000ms ease-in-out forwards 800ms, glowb 2500ms linear infinite 2000ms;

        }

        @-webkit-keyframes reveal {
            80% {
                letter-spacing: 8px;
            }
            100% {
                background-size: 300% 300%;
            }
        }

        @keyframes reveal {
            80% {
                letter-spacing: 8px;
            }
            100% {
                background-size: 300% 300%;
            }
        }

        @keyframes rev {
            100% {
                background-size: 300% 300%;
            }
        }

        @-webkit-keyframes glow {
            40% {
                text-shadow: 0 0 8px #fff;
            }
        }

        @keyframes glow {
            40% {
                text-shadow: 0 0 8px #fff;
            }
        }

       
        @-webkit-keyframes glowb {
            40% {
                text-shadow: 0 0 8px #000000;
            }
        }

        @keyframes glowb {
            40% {
                text-shadow: 0 0 8px #000000;
            }
        }

        .fpart {
            overflow: hidden;
            white-space: nowrap;
        }

        .fpart {
            /* For increasing performance
                       ID/Class should've been used.
                       For a small demo
                       it's okaish for now */
            animation: showup 7s infinite;
        }

        .fpart {
            width: 0px;
            animation: revealt 7s infinite;
        }

        .spart {

            margin-left: -355px;
            animation: slidein 7s infinite;
        }

        @keyframes showup {
            0% {
                opacity: 0;
            }

            20% {
                opacity: 1;
            }

            80% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes slidein {
            0% {
                margin-left: -800px;
                opacity: 0;
            }

            20% {
                margin-left: -800px;
                opacity: 0;
            }

            35% {
                margin-left: 0px;
                opacity: 1;
            }

            100% {
                margin-left: 0px;
                opacity: 1;
            }
        }

        @keyframes revealt {
            0% {
                opacity: 0;
                width: 0px;
            }

            20% {
                opacity: 1;
                width: 0px;
            }

            30% {
                width: 355px;
            }

            80% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                width: 355px;
            }
        }


        /* custom scrollbar */
        ::-webkit-scrollbar {
            width: 20px;
        }

        ::-webkit-scrollbar-track {
            background-color: #f3f4f6;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #d6dee1;
            border-radius: 20px;
            border: 6px solid transparent;
            background-clip: content-box;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #a8bbbf;
        }

        .spn {
            width: 20px;
            height: 5px;
            background-color: gray;
            margin-top: 3px;
            margin-top: 1px;
            margin-bottom: 1px;
        }
        .grid-cols-3{
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
        #regmob,
        .dontshow {
            display: none;
        }

        @media screen and (max-width: 400px) {
            #regs {
                display: none;
            }

            #regmob {
                display: flex;
                flex-direction: column;
                padding: 6px;
                border: 1px solid gray;
            }

            .showmob {
                display: block;
            }

        }

        
    </style>

    <link rel="stylesheet" href="{{asset('/css/bounce.css')}}">
    <link rel="stylesheet" href="{{asset('/css/flip.css')}}">
    <link rel="stylesheet" href="{{asset('/css/weavy.css')}}">
</head>

<body class="antialiased">
    <div id="aaa"
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="fixed top-0 h-9 w-full flex justify-between bg-gray-100 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent" 
            style="justify-content: space-between;justify-content: space-between;
            position: fixed;
            max-height: fit-content;
            padding: 17px 24px;
            align-items: center;
            left: 1.5rem;
            right: 1.5rem; 
            z-index: 500;">
            <div style="display: flex;flex-direction:row;align-items:center">
                <img src="{{ asset('/imgs/sawalogo.png') }}" height="50px" class="block w-auto rounded-full"
                    style="height: 50px">
                <a href="{{ url('/') }}" style="margin-left: 12px"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
     
                <a href="{{ url('/contact') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    style="margin-left: 12px">
                    Contact Us</a>
                    
            </div>


                @if (Route::has('login'))
                    <div class=" w-full sm:top-0 sm:right-0  text-right z-10 flex justify-center">
                        <button type="button" id="langb"
                            class="mt-3 relative inline-flex items-center p-3 text-sm font-medium text-center text-gray-600 dark:text-gray-400 bg-gray-300 rounded-lg hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800 w-[50px]"
                            style="margin-right:12px;margin-left:12px;">
                            @if (App::getLocale() == 'jp')
                                {{ __('website.jp') }}<span class="langspan"
                                    style="background-image: url('{{ asset('/imgs/jp.png') }}')"></span>
                            @endif
                            @if (App::getLocale() == 'en')
                                {{ __('website.en') }}<span class="langspan"
                                    style="background-image: url('{{ asset('/imgs/en.png') }}')"></span>
                            @endif
                            @if (App::getLocale() == 'ar')
                                {{ __('website.ar') }}<span class="langspan"
                                    style="background-image: url('{{ asset('/imgs/ar.png') }}')"></span>
                            @endif

                            <span class="sr-only"></span>

                            <div id="langs" class="absolute bg-slate-300 dark:bg-slate-500"
                                style="width: 200px;position:absolute;padding-top:0;">
                            </div>
                        </button>
                        <div id="regs" style="padding:0">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                    in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>
                        <button id="regmob" href="#"><span class="spn"
                                style="position: relative"></span><span class="spn"></span><span
                                class="spn"></span>
                            <div id="regmobcon" class="dontshow"
                                style="right:20px;top:50px;position: absolute;padding:12px;width:100px;background-color:white;">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                        in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    @endif
                                @endauth
                            </div>
                        </button>

                    </div>
                @endif
            </div>

            <div id="maint"> </div>

            <div class="p-6  sm:max-w-[200px] bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl text-center mx-auto"
                style="max-width: 400px">
                <p class="text-center text-gray-800 dark:text-gray-200 sm:max-w-20 " style="min-height: 110px">
                    <span class="fpart text-gray-800 dark:text-gray-400"> SAWA </span><span
                        class="spart text-gray-800 dark:text-gray-400">{{ __('website.sawameans') }}<span>
                </p>

                <img src="{{ asset('/imgs/sawalogo.png') }}"
                    class="block  h-16 w-auto bg-gray-100 dark:bg-gray-900 mx-auto rounded-full">
            </div>

            <div class="mt-2">
            </div>
            <div class="mt-4">
                
                @if (App::getLocale() == 'en')
                <h2 class="flip text-gray-800 dark:text-gray-400" style="text-align: center">
                    <span class="text-gray-800 dark:text-gray-400" style="--i:1">A</span>
                    <span class="text-gray-800 dark:text-gray-400" style="--i:2">B</span>
                    <span class="text-gray-800 dark:text-gray-400" style="--i:3">O</span>
                    <span class="text-gray-800 dark:text-gray-400" style="--i:4">U</span>
                    <span class="text-gray-800 dark:text-gray-400" style="--i:5">T</span>
                    <span class="text-gray-800 dark:text-gray-400" style="--i:6">S</span>
                    <span class="text-gray-800 dark:text-gray-400" style="--i:7">A</span>
                    <span class="text-gray-800 dark:text-gray-400" style="--i:8">W</span>
                    <span class="text-gray-800 dark:text-gray-400" style="--i:9">A</span>
                </h2>
                @endif
                @if (App::getLocale() == 'jp')
                <h2 class="flip" style="text-align: center">
                    <span class="text-gray-800 dark:text-gray-400" style="--i:1">私</span>
                    <span class="text-gray-800 dark:text-gray-400" style="--i:2">達</span>
                    <span class="text-gray-800 dark:text-gray-400" style="--i:3">に</span>
                    <span class="text-gray-800 dark:text-gray-400" style="--i:4">つ</span>
                    <span class="text-gray-800 dark:text-gray-400" style="--i:5">い</span>
                    <span class="text-gray-800 dark:text-gray-400" style="--i:6">て</span>
                </h2>
                @endif
                @if (App::getLocale() == 'ar')
                <h2 class="flip" style="text-align: center">
                    <span class="text-gray-800 dark:text-gray-400" style="--i:1">سوا</span>
                    <span class="text-gray-800 dark:text-gray-400" style="--i:2">ل</span>
                    <span class="text-gray-800 dark:text-gray-400" style="--i:3">حو</span>
                </h2>
                    
                @endif
                
                
                <p class="text-center text-gray-800 dark:text-gray-400 w-30" style="max-width: 480px;margin:auto;">
                    {{ __('website.aboutuscontent') }}</p>
            </div>
            <div class="mt-16">
                    @if(App::getLocale() == 'en')
                    <h2 class="flip text-gray-800 dark:text-gray-400" style="text-align: center">
                        <span class="text-gray-800 dark:text-gray-400" style="--i:1">O</span>
                        <span class="text-gray-800 dark:text-gray-400" style="--i:2">U</span>
                        <span class="text-gray-800 dark:text-gray-400" style="--i:3">R</span>
                        <span class="text-gray-800 dark:text-gray-400" style="--i:4"></span>
                        <span class="text-gray-800 dark:text-gray-400" style="--i:5">S</span>
                        <span class="text-gray-800 dark:text-gray-400" style="--i:6">E</span>
                        <span class="text-gray-800 dark:text-gray-400" style="--i:7">R</span>
                        <span class="text-gray-800 dark:text-gray-400" style="--i:8">V</span>
                        <span class="text-gray-800 dark:text-gray-400" style="--i:9">I</span>
                        <span class="text-gray-800 dark:text-gray-400" style="--i:10">C</span>
                        <span class="text-gray-800 dark:text-gray-400" style="--i:11">E</span>
                        <span class="text-gray-800 dark:text-gray-400" style="--i:12">S</span>

                    </h2>
                    @endif
                    @if(App::getLocale() == 'jp')
                    <h2 class="flip" style="text-align: center">
                        <span class="text-gray-800 dark:text-gray-400" style="--i:1">澤</span>
                        <span class="text-gray-800 dark:text-gray-400" style="--i:2">サ</span>
                        <span class="text-gray-800 dark:text-gray-400" style="--i:3">ー</span>
                        <span class="text-gray-800 dark:text-gray-400" style="--i:4">ビ</span>
                        <span class="text-gray-800 dark:text-gray-400" style="--i:5">ス</span>
                    </h2>
                    @endif
                    @if(App::getLocale() == 'ar')
                    <h2 class="flip" style="text-align: center">
                        <span class="text-gray-800 dark:text-gray-400" style="--i:1">تنا</span>
                        <span class="text-gray-800 dark:text-gray-400" style="--i:2">ما</span>
                        <span class="text-gray-800 dark:text-gray-400" style="--i:3">خد</span>
                    </h2>
                    @endif





                @if (App::getLocale() == 'ar')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 " style="direction: rtl">
                        <a href="{{ route('sawaorder.new', 'Translation and Proofreading') }}"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div
                                    class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white  text-right">
                                    {{ __('website.Translation and Proofreading') }}</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-right">
                                    {{ __('services.Translation') }}
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="{{ route('sawaorder.new', 'Teaching Arabic and Japanese') }}"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div
                                    class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-right">
                                    {{ __('website.Teaching Arabic and Japanese') }}</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-right">
                                    {{ __('services.Teaching') }}
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="{{ route('sawaorder.new', 'Voice Recording and Transcription') }}"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div
                                    class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-right">
                                    {{ __('website.Voice Recording and Transcription') }}</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-right">
                                    {{ __('services.Voice') }}
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="{{ route('sawaorder.new', 'Adding Languages to Websites') }}"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div
                                    class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-right">
                                    {{ __('website.Adding Languages to Websites') }}
                                </h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-right">
                                    {{ __('services.Adding') }}
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="{{ route('sawaorder.new', 'Desktop Publishing (DTP)') }}"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div
                                    class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-right">
                                    {{ __('website.Desktop Publishing (DTP)') }}
                                </h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-right">
                                    {{ __('services.Desktop') }}
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="{{ route('sawaorder.new', 'Planning and Preparing News Reports') }}"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div
                                    class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-right">
                                    {{ __('website.Planning and Preparing News Reports') }}
                                </h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-right">
                                    {{ __('services.Planning') }}
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="{{ route('sawaorder.new', 'Design and Programming') }}"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div
                                    class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-right">
                                    {{ __('website.Design and Programming') }}
                                </h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-right">
                                    {{ __('services.Design') }}
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="{{ route('sawaorder.new', 'Tour planning') }}"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div
                                    class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-right">
                                    {{ __('website.Tour planning') }}
                                </h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-right">
                                    {{ __('services.Tour') }}
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="{{ route('sawaorder.new', 'Academic and Cultural Consultations') }}"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div
                                    class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-right">
                                    {{ __('website.Academic and Cultural Consultations') }}
                                </h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-right">
                                    {{ __('services.Academic') }}
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="{{ route('sawaorder.new', 'Support for Scientific and Cultural') }}"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div
                                    class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-right">
                                    {{ __('website.Support for Scientific and Cultural') }}
                                </h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-right">
                                    {{ __('services.Support') }}
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="{{ route('sawaorder.new', 'Investment and Business Consultations') }}"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div
                                    class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-right">
                                    {{ __('website.Investment and Business Consultations') }}
                                </h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-right">
                                    {{ __('services.Investment') }}
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="{{ route('sawaorder.new', 'Import and Export') }}"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div
                                    class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-right">
                                    {{ __('website.Import and Export') }}
                                </h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-right">
                                    {{ __('services.import') }}
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>
                    @else
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                            <a href="{{ route('sawaorder.new', 'Translation and Proofreading') }}"
                                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        {{ __('website.Translation and Proofreading') }}</h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        {{ __('services.Translation') }}
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <a href="{{ route('sawaorder.new', 'Teaching Arabic and Japanese') }}"
                                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        {{ __('Teaching Arabic and Japanese') }}</h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        {{ __('services.Teaching') }}
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <a href="{{ route('sawaorder.new', 'Voice Recording and Transcription') }}"
                                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        {{ __('Voice Recording and Transcription') }}</h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        {{ __('services.Voice') }}
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <a href="{{ route('sawaorder.new', 'Adding Languages to Websites') }}"
                                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        {{ __('website.Adding Languages to Websites') }}
                                    </h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        {{ __('services.Adding') }}
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <a href="{{ route('sawaorder.new', 'Desktop Publishing (DTP)') }}"
                                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        {{ __('website.Desktop Publishing (DTP)') }}
                                    </h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        {{ __('services.Desktop') }}
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <a href="{{ route('sawaorder.new', 'Planning and Preparing News Reports') }}"
                                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        {{ __('website.Planning and Preparing News Reports') }}
                                    </h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        {{ __('services.Planning') }}
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <a href="{{ route('sawaorder.new', 'Design and Programming') }}"
                                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        {{ __('website.Design and Programming') }}
                                    </h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        {{ __('services.Design') }}
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <a href="{{ route('sawaorder.new', 'Tour planning') }}"
                                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        {{ __('website.Tour planning') }}
                                    </h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        {{ __('services.Tour') }}
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <a href="{{ route('sawaorder.new', 'Academic and Cultural Consultations') }}"
                                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        {{ __('website.Academic and Cultural Consultations') }}
                                    </h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        {{ __('services.Academic') }}
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <a href="{{ route('sawaorder.new', 'Support for Scientific and Cultural') }}"
                                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        {{ __('website.Support for Scientific and Cultural') }}
                                    </h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        {{ __('services.Support') }}
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <a href="{{ route('sawaorder.new', 'Investment and Business Consultations') }}"
                                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        {{ __('website.Investment and Business Consultations') }}
                                    </h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        {{ __('services.Investment') }}
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <a href="{{ route('sawaorder.new', 'Import and Export') }}"
                                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <img class="w-7 h-7 stroke-red-500" src="{{ asset('/imgs/sawalogo.png') }}">
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        {{ __('website.Import and Export') }}
                                    </h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        {{ __('services.import') }}
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>
                @endif

            </div>
        </div>

        <div class="mt-4">
            @if (App::getLocale() == 'ar')
                <h2 class="waviy text-gray-400 dark:text-white" style="text-align: center">مجموعة سوا</h2>
            @else
                 <h2 class="waviy text-gray-400 dark:text-white" style="text-align: center">
                <span style="--i:1;" class="text-gray-900 dark:text-white">S</span>
                <span style="--i:2;" class="text-gray-900 dark:text-white">A</span>
                <span style="--i:3;" class="text-gray-400 dark:text-white">W</span>
                <span style="--i:4;" class="text-gray-400 dark:text-white">A</span>
                <span style="--i:5;" class="text-gray-400 dark:text-white">G</span>
                <span style="--i:6;" class="text-gray-400 dark:text-white">R</span>
                <span style="--i:7;" class="text-gray-400 dark:text-white">O</span>
                <span style="--i:8;" class="text-gray-400 dark:text-white">u</span>
                <span style="--i:9;" class="text-gray-400 dark:text-white">P</span>
            </h2>
            @endif
           
            <img src="{{ asset('/imgs/sawalogo.png') }}" height="50px" width="auto" class="block rounded-full" style="margin: auto;margin-top: 77px;width:100px;height:auto">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 " style="margin-top:6px">
                @if (App::getLocale() == 'ar')
                <div  class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <img height="50px" width="auto" style="height: 50px;width:auto;" class="stroke-red-500 bounce" src="{{ asset('/imgs/pnplabe.png') }}">
                        </div>

                        <h2 class="mt-6 text-xl text-right font-semibold text-gray-900 dark:text-white">{{__('website.address')}}</h2>

                        <p class="mt-4 text-gray-500 text-right dark:text-gray-400 text-sm leading-relaxed">
                            {{__('website.theaddress')}}
                        </p>
                    </div>
                </div>

                <div style="justify-content: flex-end;" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <img height="50px" width="auto" style="height: 50px;width:auto;" class=" stroke-red-500 bounce" src="{{ asset('/imgs/pngemail.png') }}">
                        </div>

                        <h2 class="mt-6 text-xl w-full text-right font-semibold text-gray-900 dark:text-white">{{__('website.email')}}</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            {{__('website.theamail')}}
                        </p>
                    </div>
                </div>

                <div style="justify-content: flex-end;" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <img height="50px" width="auto" style="height: 50px;width:auto;" class=" stroke-red-500 bounce" src="{{ asset('/imgs/pngwphone.png') }}">
                        </div>

                        <h2 class="mt-6 text-xl w-full text-right font-semibold text-gray-900 dark:text-white">{{__('website.phone')}}</h2>

                        <p class="mt-4 text-right text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            {{__('website.thephone')}}
                        </p>
                    </div>
                </div>

                @else
                <div  class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <img height="50px" width="auto" style="height: 50px;width:auto;" class=" stroke-red-500 bounce" src="{{ asset('/imgs/pnplabe.png') }}">
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{__('website.address')}}</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            {{__('website.theaddress')}}
                        </p>
                    </div>
                </div>

                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <img height="50px" width="auto" style="height: 50px;width:auto;" class=" stroke-red-500 bounce" src="{{ asset('/imgs/pngemail.png') }}">
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{__('website.email')}}</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            {{__('website.themail')}}
                        </p>
                    </div>
                </div>

                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                            <img height="50px" width="auto" style="height: 50px;width:auto;" class=" stroke-red-500 bounce" src="{{ asset('/imgs/pngwphone.png') }}">
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{__('website.phone')}}</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            {{__('website.thephone')}}
                        </p>
                    </div>
                </div>
                @endif

               
            </div>
        </div>

       

        <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
            <div class="text-center text-sm sm:text-left">
                &nbsp;
            </div>

            <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                Osama Namur
            </div>
        </div>
    </div>
    
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    @if (App::getLocale() == 'ar')
    <script>
        if($('#aaa').hasClass('dark:bg-gray-900')){
            $('#maint').html('<h2  class="mt-16 text-center  animglow" style="font-size:10vw;">مجموعة سوا</h2>');
        }else{
            $('#maint').html('<h2  class="mt-16 text-center  animgloww" style="font-size:10vw;">مجموعة سوا</h2>');
        }
    </script>
    @else
    <script>
        if($('#aaa').hasClass('dark:bg-gray-900')){
            $('#maint').html(' <h1 style="margin-top: 150px;display:block" class="mt-16 text-center  animsh " style="font-size:10vw;">SAWAGROUP</h1>');
    
            }else{
                    $('#maint').html(' <h1 style="margin-top: 150px;display:block" class="mt-16 text-center  animshb" style="font-size:10vw;">SAWAGROUP</h1>');

            }
    </script>
    @endif
    <script type="text/javascript">
    
        window.addEventListener("load", function() {
            $.ajax({
                        url: "{{ route('langs') }}",
                        type: "GET",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            var html = '';
                            $.each(response, function(index, item) {

                                if (item == 'en') {
                                    html += "<a href='{{ url('/lang') }}/" + item +
                                        "' style='padding-top:6px;font-size:large;color:black;width:100%'>{{ __('website.en') }}<span class='langspan' style='display:inline-block;height:13px;background-image:" +
                                        " url({{ asset('/imgs/en.png') }})" +
                                        "'></span></a>";
                                } else if (item == 'ar') {
                                    html += "<a href='{{ url('/lang') }}/" + item +
                                        "' style='padding-top:6px;font-size:x-large;color:black;width:100%'>{{ __('website.ar') }}<span class='langspan' style='display:inline-block;height:13px;background-image:" +
                                        " url({{ asset('/imgs/ar.png') }})" +
                                        "'></span></a>";
                                } else if (item == 'jp') {
                                    html += "<a href='{{ url('/lang') }}/" + item +
                                        "' style='padding-top:6px;font-size:larger;color:black;width:100%'>{{ __('website.jp') }}<span class='langspan' style='display:inline-block;height:13px;background-image: " +
                                        "url({{ asset('/imgs/jp.png') }})" +
                                        "'></span></a>";
                                }

                            });
                            $('#langs').addClass('d-none');
                            $('#langs').html(html);
                        },
                            error:function(e){
                            console.log(e);
                        }
                    });
            $('#regmob').click(function(e) {
                e.preventDefault();
                if ($('#regmobcon').hasClass('showmob')) {
                    $('#regmobcon').removeClass('showmob');
                } else {
                    $('#regmobcon').addClass('showmob');
                }
            });
            $('#langb').click(function(e) {
                e.preventDefault();
                if ($('#langs').hasClass('not')) {
                    $('#langs').removeClass('not');
                   
                } else {
                    $('#langs').addClass('not');
                    
                }        
                });
            });
        
    </script>
</body>

</html>
