<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>@yield('title')</title>
</head>

<body>
  @yield("content");
  <script>
    const hamburgerButton = document.querySelector(".hamburger");
    const popup = document.querySelector(".popup");

    hamburgerButton.addEventListener("click", () => {
      popup.classList.toggle("active");

      if (popup.classList.contains("active")) {
        hamburgerButton.querySelector("img").src = "./assets/close.svg";
      } else {
        hamburgerButton.querySelector("img").src = "./assets/hamburger.svg";
      }
    })
  </script>
</body>

</html>