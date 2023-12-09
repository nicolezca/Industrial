document.addEventListener("DOMContentLoaded", function () {
    const btnLogin = document.getElementById("btnlogin");
    const btnRegistro = document.getElementById("btnregistro");
    const formLogin = document.getElementById("loginForm");
    const formRegistro = document.getElementById("registroForm");

    btnLogin.classList.add("btn-activo"); // Agregar la clase "btn-activo" al botón de login por defecto

    btnLogin.addEventListener("click", function () {
        formLogin.style.display = "block";
        formRegistro.style.display = "none";
        btnLogin.classList.add("btn-activo"); // Agregar la clase "btn-activo" al botón de login
        btnRegistro.classList.remove("btn-activo"); // Quitar la clase "btn-activo" al botón de registro
    });

    btnRegistro.addEventListener("click", function () {
        formLogin.style.display = "none";
        formRegistro.style.display = "block";
        btnRegistro.classList.add("btn-activo"); // Agregar la clase "btn-activo" al botón de registro
        btnLogin.classList.remove("btn-activo"); // Quitar la clase "btn-activo" al botón de login
    });
});
