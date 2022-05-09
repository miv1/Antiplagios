<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.8.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyByVlMBMTSGFoaZBSTx-KMycXVK3v7HW9E",
    authDomain: "proyectoantiplagio.firebaseapp.com",
    projectId: "proyectoantiplagio",
    storageBucket: "proyectoantiplagio.appspot.com",
    messagingSenderId: "594557958871",
    appId: "1:594557958871:web:5098aff5e3096d2e448e92",
    measurementId: "G-YN9J40KPKZ"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
    

    <div class="login">
        <h1>Iniciar sesión</h1>
        <form action="" method="post">
            <label for="username">Usuario</label>
            <input type="email" placeholder="Introduzca el correo" name="ingCorreo">

            <label for="password">Contraseña</label>
            <input type="password" placeholder="Introduzca la contraseña", name="ingContraseña">

            <input type="submit" value="Iniciar sesión">

            <?php
                $login = new ControladorUsuarios();
                $login-> controlIngreso();
            ?> 
        </form>
    </div>  

</body>

</html>