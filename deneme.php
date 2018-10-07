<!doctype html>
<html>
<head>
</head>

<body>

<script>
if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('./sw.js').then(function(registration) {
      // Registration was successful
      console.log('ServiceWorker registration successful with scope: ', registration.scope);
    }, function(err) {
      // registration failed :(
      console.log('ServiceWorker registration failed: ', err);
    });
  });
}
</script>

<img src="menubar/config.png" alt="Smiley face" >
<img src="menubar/home.png" alt="Smiley face" >




</body>
</html>
