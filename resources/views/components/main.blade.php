<head>
    <!-- ... --->
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
   <link
   rel="stylesheet"
   href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
 />
 <link
  href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css"
  rel="stylesheet"
/>
</head>
  <body>
      <x-navbar></x-navbar>
      {{$content}}
      <x-footer></x-footer>
  </body>