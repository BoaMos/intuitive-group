<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<title>intuitive E-healthcare | Admin Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Fonts -->
<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Styles -->
<style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
</style>

<style>
    body {
        font-family: 'Nunito', sans-serif;
    }
</style>
</head>
<!-- add nav bar -->
<body>
    <!-- component -->
    <style>
      /* Compiled dark classes from Tailwind */
      .dark .dark\:divide-gray-700 > :not([hidden]) ~ :not([hidden]) {
        border-color: rgba(55, 65, 81);
      }
      .dark .dark\:bg-gray-50 {
        background-color: rgba(249, 250, 251);
      }
      .dark .dark\:bg-gray-100 {
        background-color: rgba(243, 244, 246);
      }
      .dark .dark\:bg-gray-600 {
        background-color: rgba(75, 85, 99);
      }
      .dark .dark\:bg-gray-700 {
        background-color: rgba(55, 65, 81);
      }
      .dark .dark\:bg-gray-800 {
        background-color: rgba(31, 41, 55);
      }
      .dark .dark\:bg-gray-900 {
        background-color: rgba(17, 24, 39);
      }
      .dark .dark\:bg-red-700 {
        background-color: rgba(185, 28, 28);
      }
      .dark .dark\:bg-green-700 {
        background-color: rgba(4, 120, 87);
      }
      .dark .dark\:hover\:bg-gray-200:hover {
        background-color: rgba(229, 231, 235);
      }
      .dark .dark\:hover\:bg-gray-600:hover {
        background-color: rgba(75, 85, 99);
      }
      .dark .dark\:hover\:bg-gray-700:hover {
        background-color: rgba(55, 65, 81);
      }
      .dark .dark\:hover\:bg-gray-900:hover {
        background-color: rgba(17, 24, 39);
      }
      .dark .dark\:border-gray-100 {
        border-color: rgba(243, 244, 246);
      }
      .dark .dark\:border-gray-400 {
        border-color: rgba(156, 163, 175);
      }
      .dark .dark\:border-gray-500 {
        border-color: rgba(107, 114, 128);
      }
      .dark .dark\:border-gray-600 {
        border-color: rgba(75, 85, 99);
      }
      .dark .dark\:border-gray-700 {
        border-color: rgba(55, 65, 81);
      }
      .dark .dark\:border-gray-900 {
        border-color: rgba(17, 24, 39);
      }
      .dark .dark\:hover\:border-gray-800:hover {
        border-color: rgba(31, 41, 55);
      }
      .dark .dark\:text-white {
        color: rgba(255, 255, 255);
      }
      .dark .dark\:text-gray-50 {
        color: rgba(249, 250, 251);
      }
      .dark .dark\:text-gray-100 {
        color: rgba(243, 244, 246);
      }
      .dark .dark\:text-gray-200 {
        color: rgba(229, 231, 235);
      }
      .dark .dark\:text-gray-400 {
        color: rgba(156, 163, 175);
      }
      .dark .dark\:text-gray-500 {
        color: rgba(107, 114, 128);
      }
      .dark .dark\:text-gray-700 {
        color: rgba(55, 65, 81);
      }
      .dark .dark\:text-gray-800 {
        color: rgba(31, 41, 55);
      }
      .dark .dark\:text-red-100 {
        color: rgba(254, 226, 226);
      }
      .dark .dark\:text-green-100 {
        color: rgba(209, 250, 229);
      }
      .dark .dark\:text-blue-400 {
        color: rgba(96, 165, 250);
      }
      .dark .group:hover .dark\:group-hover\:text-gray-500 {
        color: rgba(107, 114, 128);
      }
      .dark .group:focus .dark\:group-focus\:text-gray-700 {
        color: rgba(55, 65, 81);
      }
      .dark .dark\:hover\:text-gray-100:hover {
        color: rgba(243, 244, 246);
      }
      .dark .dark\:hover\:text-blue-500:hover {
        color: rgba(59, 130, 246);
      }

      /* Custom style */
      .header-right {
          width: calc(100% - 3.5rem);
      }
      .sidebar:hover {
          width: 16rem;
      }
      @media only screen and (min-width: 768px) {
          .header-right {
              width: calc(100% - 16rem);
          }
      }
    </style>
    <div x-data="setup()" :class="{ 'dark': isDark }">
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white text-black dark:text-white"   style="background-color:#072870">

          <!-- Header -->
          
          <div class="fixed w-full flex items-center justify-around h-14 text-white z-10" style="background-color: #000435">
            <div class="ml-10">
              <a href="/">
                <img class ="h-12" src="logo.svg" alt="Our Logo" >
              </a>
            </div>
            <div class="flex justify-between items-center h-14  header-right" > 
              <!-- heading/search   div  -->
              <div class="flex justify-between ml-12">
                <div class="mb-3 xl:w-96">
                  <div class="input-group mt-6 flex items-stretch w-full mb-4">
                    <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                    <button class="btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="button" id="button-addon2">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <ul class="flex items-center">
                <li>
                  <button
                    aria-hidden="true"
                    @click="toggleTheme"
                    class="group p-2 transition-colors duration-200 rounded-full shadow-md bg-blue-200 hover:bg-blue-200 dark:bg-gray-50 dark:hover:bg-gray-200 text-gray-900 focus:outline-none"
                  >
                    <svg
                      x-show="isDark"
                      width="24"
                      height="24"
                      class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke=""
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                      />
                    </svg>
                    <svg
                      x-show="!isDark"
                      width="24"
                      height="24"
                      class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke=""
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                      />
                    </svg>
                  </button>
                </li>
                <li>
                  <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
                </li>
                <div class = "flex justify-end">
                  <x-app-layout>
                
                  </x-app-layout>
                </div>
                
              </ul>
            </div>
          </div>
          <!-- ./Header -->

          <!-- Sidebar -->
          
          <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 h-full text-white transition-all duration-300 border-none z-10 sidebar" style="background-color: #000435"><!- side bar color -->
            
            <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
              <ul class="flex flex-col py-4 space-y-1">
                <li class="px-5 hidden md:block">
                  <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                  </div>
                </li>
                <li>
                  <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                      </svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="white" stroke="currentColor"  viewBox="0 0 122.88 118.45">
                        <path d="M14.61 72.18c5-.41 8.43-3.22 10.77-7.28s3.62-9.55 4.25-15.07c.33-2.91.53-6 .73-9 1-15.22 2-31.64 19.33-38.63a29.49 29.49 0 0 1 25.53 1.6 28.69 28.69 0 0 1 12.35 14.36A36.78 36.78 0 0 1 90 28.29v.06c0 9.19 1.42 22.09 5.41 31.55 2.87 6.8 7 11.81 12.87 12.28a.45.45 0 0 1 .41.47v.14c-1.13 3.11-6.29 5.42-12.4 6.44 9.08 2.18 15.36 4.79 19.59 9.46 5.13 5.66 7 14.08 7 28.08a1.68 1.68 0 0 1-1.67 1.68H1.67A1.68 1.68 0 0 1 0 116.77C0 103.14 1.82 94.71 6.66 89c4-4.7 9.88-7.39 18.38-9.48-5.32-1.19-9.71-3.66-10.81-6.77a.44.44 0 0 1 .27-.56h.11Zm61.32 4.67q-.53-.33-1-.69a8.14 8.14 0 0 1-2.52-3.08 18.67 18.67 0 0 1-11.07 3.35 18.29 18.29 0 0 1-12.14-4.49c-.58 2.37-1.54 5-2.77 5.7-3.27 2-8.53 2.84-12.37 3.47-.92.15-1.76.28-2.5.43-1.22.24-2.4.48-3.53.73 10.89 10.59 21.86 16.5 32.9 16.84s22.37-5 33.95-16.77c-1.68-.4-3.47-.78-5.36-1.16l-.27-.06c-3.32-.65-9.38-1.87-13.2-4.19l-.12-.08ZM44.84 59.93a31.64 31.64 0 0 1-.49-4.75 1.75 1.75 0 0 1 0-.33l-4.29-7a26 26 0 0 0 2.37 7.7 51.48 51.48 0 0 0 2.35 4.29Zm-5.07-16.59 6.53 10.28a45.13 45.13 0 0 1 15-3.24 33.52 33.52 0 0 1 15 3.12l7.33-11.14V42a50 50 0 0 0-1-9.8 19.42 19.42 0 0 1-7.88-7.09 34.47 34.47 0 0 1-4.32-10.25c-2.9 12.4-15.38 15.29-24 17.28a31.83 31.83 0 0 0-6.65 2c0 1.46 0 3-.08 4.42 0 1.69-.09 3.3-.06 4.87Zm43.68 3.25-5.17 8.06a.36.36 0 0 1 0 .09 1.06 1.06 0 0 1 .08.4 27.31 27.31 0 0 1-.25 4.12c.4-.54.79-1.09 1.17-1.64a39.5 39.5 0 0 0 3.42-6.22 48.12 48.12 0 0 0 .75-4.81Zm-27.07-9.86c1.8.68 2.18 2.18 1.17 2.74-1.18.66-2.66-.32-3.81-.69-3-1-6.58-1.07-9.17.55A14.92 14.92 0 0 0 42.46 41a7.26 7.26 0 0 1 1.28-2.58c2.61-3.28 9.16-3.48 12.64-1.69Zm10.13 0c-1.8.68-2.18 2.18-1.18 2.74 1.19.66 2.67-.32 3.82-.69 3-1 6.57-1.07 9.17.55A14.92 14.92 0 0 1 80.43 41a7.43 7.43 0 0 0-1.28-2.58c-2.61-3.28-9.16-3.48-12.64-1.69Zm-19.92 6.46a.78.78 0 0 1-.5-.54.87.87 0 0 1 .46-1.07 12.37 12.37 0 0 1 9 0 .87.87 0 0 1 .45 1.05.74.74 0 0 1-.93.55 13.08 13.08 0 0 0-1.47-.45 2.1 2.1 0 0 1 .07.56 2.07 2.07 0 1 1-4-.8 11.45 11.45 0 0 0-2.23.53 1.34 1.34 0 0 1-.85.17Zm23.24-.52a2.12 2.12 0 0 0-.1.62 2.08 2.08 0 0 0 4.15 0 2.14 2.14 0 0 0-.21-.92 13.66 13.66 0 0 1 2.73.6.73.73 0 0 0 .92-.58.87.87 0 0 0-.51-1 14.29 14.29 0 0 0-4.48-.73 13.8 13.8 0 0 0-4.42.74.87.87 0 0 0-.51 1 .73.73 0 0 0 .91.57c.49-.16 1-.29 1.46-.4.14 0 .11-.06.06.1Z"/>
                      </svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Patients</span>
                    <!--<span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>-->
                  </a>
                </li>
                <li>
                  <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="white" stroke="currentColor"  style="enable-background:new 0 0 122.88 110.34" viewBox="0 0 122.88 110.34">
                        <path d="M78.07 75.9c-1.73-1.75-3.01-3.63-4.29-5.49-.21-.31-.42-.61-.63-.92-3.08 2.45-6.82 4-11.69 3.99-5.26-.01-9.21-2.02-12.46-4.99-.19-.18-.39-.36-.57-.54-.46 1.29-1.06 2.84-1.69 4.28-.6 1.37-1.25 2.67-1.88 3.6C51.62 89.52 71.6 90 78.07 75.9zM60.09 6.44h2.71c.51 0 .92.41.92.92v4.03h4.03c.51 0 .92.41.92.92v2.71c0 .51-.41.92-.92.92h-4.03v4.03c0 .51-.41.92-.92.92h-2.71c-.51 0-.92-.41-.92-.92v-4.03h-4.03c-.51 0-.92-.41-.92-.92v-2.71c0-.51.41-.92.92-.92h4.03V7.36c0-.5.41-.92.92-.92zm18.95 66.92c6.36 5.72 25.19 6.87 32.2 10.78 2.22 1.24 4.22 2.81 5.83 4.93 4.54 6 4.79 7.51 5.81 14.98-.36 3.78-2.5 5.96-6.73 6.29H6.73c-4.22-.32-6.37-2.5-6.73-6.29 1.02-7.47 1.27-8.98 5.81-14.98 1.61-2.13 3.61-3.7 5.83-4.93 6.78-3.78 24.65-4.98 31.56-10.25.43-.73.87-1.66 1.31-2.64.82-1.87 1.57-3.92 2.05-5.32-2-2.36-3.71-5.01-5.36-7.63l-5.42-8.62c-1.98-2.96-3.01-5.66-3.07-7.87-.03-1.04.15-1.99.53-2.82.4-.87 1.03-1.6 1.86-2.16.39-.26.83-.49 1.31-.67-.35-4.67-.48-10.57-.26-15.5.12-1.17.34-2.34.67-3.51C48.38-11.22 88.5-.81 87.81 22.65l-.34 14.05c1.5.46 2.47 1.41 2.86 2.95.44 1.71-.04 4.12-1.49 7.4l-.09.18-6.18 10.17c-2.27 3.74-4.57 7.49-7.58 10.44.27.39.54.78.81 1.18 1.01 1.48 2.03 2.97 3.24 4.34zM67.91 41.53a.971.971 0 0 1-.27-1.35c.3-.45.91-.57 1.35-.27.54.36 1.46.55 2.43.53.92-.02 1.86-.22 2.52-.64a.975.975 0 0 1 1.35.3c.29.45.16 1.06-.3 1.35-.98.63-2.29.93-3.54.95-1.34.01-2.68-.29-3.54-.87zm-20.96 9.96c4.81-1.85 9.63-3 14.47-3.12 4.83-.12 9.67.77 14.5 3l6.02-13.3c5.44-12.19-38.93-21.96-40.56.49l5.57 12.93zm36.7-11.99-5.87 12.99c-.01.03-.03.05-.04.08.05.12.07.25.08.38.04 3.06-.41 5.79-1.23 8.17 1.17-1.69 2.28-3.5 3.37-5.3l6.11-10.06c1.14-2.6 1.55-4.34 1.29-5.35-.15-.61-.82-.9-1.97-.96-.24-.01-.49-.01-.74-.01-.27.01-.56.03-.85.05-.06.01-.11.01-.15.01zM46.24 60.44c-.67-2.18-1.08-4.66-1.16-7.44 0-.11.01-.22.04-.32l-6.04-14c-.98.09-1.74.32-2.29.69-.35.24-.62.54-.78.9-.19.4-.27.89-.26 1.45.05 1.65.91 3.8 2.58 6.29l.02.04 5.42 8.62c.81 1.25 1.62 2.53 2.47 3.77zm15.23-9.92c-4.73.12-9.47 1.28-14.22 3.16.43 8.29 4.06 13.39 8.59 15.57.47.23.96.42 1.45.59 1.28.37 2.66.57 4.17.57.76 0 1.48-.04 2.17-.13 1.31-.24 2.6-.68 3.82-1.31 4.58-2.4 8.13-7.6 8.22-15.34-4.74-2.31-9.47-3.23-14.2-3.11zm-13.35-8.99a.971.971 0 0 1-.27-1.35c.3-.45.91-.57 1.35-.27.55.37 1.48.57 2.48.57.94-.01 1.9-.2 2.65-.64a.97.97 0 0 1 1.33.36.97.97 0 0 1-.36 1.33c-1.05.61-2.37.89-3.62.9-1.36 0-2.69-.32-3.56-.9zm-.39-4.36a.976.976 0 0 1-1.13-1.59c1.45-1.03 2.94-1.56 4.47-1.56 1.52-.01 3.04.51 4.56 1.56.44.31.55.91.25 1.36-.31.44-.91.55-1.36.25-1.18-.82-2.33-1.22-3.45-1.21-1.11-.01-2.22.4-3.34 1.19zm21.11 0a.976.976 0 0 1-1.13-1.59c1.45-1.03 2.94-1.56 4.47-1.56 1.52-.01 3.04.51 4.56 1.56.44.31.56.91.25 1.36-.31.44-.91.55-1.36.25-1.18-.82-2.33-1.22-3.45-1.21-1.11-.01-2.22.4-3.34 1.19z" style="fill-rule:evenodd;clip-rule:evenodd"/>
                      </svg>                    
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Doctors</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="white" stroke="currentColor" style="enable-background:new 0 0 122.88 100.32" viewBox="0 0 122.88 100.32">
                        <path d="M27.63 16.77c-.51.02-.89.12-1.15.3-.15.1-.26.23-.33.38-.08.17-.11.37-.11.61.02.69.38 1.6 1.09 2.64l.01.01 2.28 3.63c.91 1.45 1.87 2.94 3.06 4.03 1.14 1.05 2.54 1.76 4.37 1.76 1.99 0 3.45-.73 4.63-1.84 1.23-1.15 2.2-2.73 3.15-4.3l2.57-4.23c.48-1.09.65-1.82.54-2.25-.06-.26-.35-.38-.83-.4-.1 0-.21-.01-.31 0-.11 0-.23.01-.36.02-.07.01-.13 0-.2-.01-.23.01-.46 0-.7-.04l.88-3.89c-6.53 1.03-11.41-3.82-18.31-.97l.5 4.59c-.27.01-.53 0-.78-.04zm46.64-4.74h40.28a2.94 2.94 0 0 1 2.93 2.93V38.8a2.94 2.94 0 0 1-2.93 2.93H98.99l2.29 5.76h17.17c1.22 0 2.33.5 3.13 1.3.8.8 1.3 1.91 1.3 3.13v10.11c0 1.21-.5 2.32-1.3 3.12l-.01.01c-.8.8-1.91 1.3-3.12 1.3h-2.78v30.51c0 .92-.38 1.76-.98 2.37-.61.61-1.45.98-2.37.98H11.6c-.93 0-1.77-.38-2.38-.99-.06-.06-.11-.12-.16-.18-.51-.59-.83-1.36-.83-2.2v-30.5h-3.8c-1.22 0-2.33-.5-3.13-1.3-.05-.05-.1-.1-.14-.15A4.402 4.402 0 0 1 0 62.02V51.91c0-1.22.5-2.33 1.3-3.13.05-.05.11-.1.16-.14.79-.72 1.83-1.15 2.97-1.15h8.09c-.06-.21-.11-.43-.13-.68.08-6.38-.89-7.57 5.82-11.32 2.46-1.37 8.8-1.84 11.57-3.65.42-.8.89-2.22 1.17-3.07l.03-.08c-1.02-1.09-1.85-2.38-2.65-3.65l-2.28-3.62c-.83-1.24-1.27-2.38-1.29-3.31-.01-.44.06-.84.22-1.19.17-.37.43-.67.78-.91.16-.11.35-.2.55-.28-.15-1.97-.2-4.44-.11-6.52.05-.49.14-.98.28-1.48.83-2.98 3.4-5.13 6.33-6.14 1.43-.49.88-1.66 2.32-1.59 3.4.19 8.65 2.38 10.67 4.7 2.83 3.26 2.1 7.27 2 11.25.63.19 1.04.59 1.2 1.24.18.72-.02 1.73-.62 3.11-.01.03-.02.05-.04.07l-2.6 4.28c-1 1.65-2.02 3.3-3.38 4.57l-.06.08c.13.19.27.39.42.61.45.66.96 1.41 1.44 2 2.82 1.76 9.04 2.23 11.46 3.58 6.18 3.45 4.65 5.29 5.1 11.32-.02.24-.07.47-.13.68h27l2.69-5.76H74.27a2.94 2.94 0 0 1-2.93-2.93V14.96c0-1.62 1.32-2.93 2.93-2.93zM9.59 51.65a1.841 1.841 0 0 1-.66 0h-4.5c-.05 0-.11.01-.14.04l-.04.04a.25.25 0 0 0-.08.18v10.11c0 .06.02.11.04.15l.03.03c.05.05.11.08.18.08h5.6c.09-.01.19-.02.28-.02.1 0 .19.01.28.02h102.71c.09-.01.19-.02.28-.02.1 0 .19.01.28.02h4.58c.07 0 .14-.03.18-.07.05-.05.07-.11.07-.19V51.91a.25.25 0 0 0-.08-.18.25.25 0 0 0-.18-.08H9.59zm2.81 14.8v29.7h99.11v-29.7H12.4zm19.82-30.56c-1.15-1.31-1.25-2.68 0-4.13 1.44.36 2.76.99 3.98 1.83.26-.11.57-.16.87-.14 1.26-.9 2.88-1.26 4.29-1.93 1.68 1.64 1.5 3.15-.15 4.55-.92-.21-1.8-.54-2.65-.97-.02.22-.08.45-.18.71l1.84 8.72c1.4-2.94 2.85-7.62 3.22-11.42-.61-.69-1.26-1.64-1.82-2.46-.13-.19-.25-.36-.36-.53-1.19.8-2.61 1.29-4.39 1.29-1.98 0-3.52-.68-4.8-1.72-.36 1.07-.89 2.55-1.39 3.26-.04.05-.08.1-.13.14.67 4.13 2.11 8.61 3.43 11.45l1.84-8.72c-.27-.45-.37-.84-.36-1.17-1.02.6-2.11.99-3.24 1.24z" style="fill-rule:evenodd;clip-rule:evenodd"/>
                      </svg>                    
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Office Assistant</span>
                    <!--<span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">1.2k</span>-->
                  </a>
                </li>
                <li class="px-5 hidden md:block">
                  <div class="flex flex-row items-center mt-5 h-8">
                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                  </div>
                </li>
                <li>
                  <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      </svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                  </a>
                </li>
              </ul>
              <p class="mb-14 px-3 py-3 hidden md:block text-center text-xs">Copyright @2021</p>
              
            </div>
          </div>
          <!-- ./Sidebar -->

          <div class="h-full ml-14 mt-14 mb-10 md:ml-64">



            <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">




            </div>



<!-- Add your content here       -->




















<!-- /Add your content here       -->



          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
      <script>
        const setup = () => {
          const getTheme = () => {
            if (window.localStorage.getItem('dark')) {
              return JSON.parse(window.localStorage.getItem('dark'))
            }
            return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
          }

          const setTheme = (value) => {
            window.localStorage.setItem('dark', value)
          }

          return {
            loading: true,
            isDark: getTheme(),
            toggleTheme() {
              this.isDark = !this.isDark
              setTheme(this.isDark)
            },
          }
        }
      </script>

</body>


<!-- add footer -->






</html>
