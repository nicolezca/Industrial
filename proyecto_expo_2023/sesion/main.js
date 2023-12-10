document.addEventListener("DOMContentLoaded", function () {
    const btnLogin = document.getElementById("btnlogin");
    const btnRegistro = document.getElementById("btnregistro");
    const formLogin = document.getElementById("loginForm");
    const formRegistro = document.getElementById("registroForm");

    const activarBoton = (botonActivado, botonDesactivado, formMostrar, formOcultar) => {
        formMostrar.style.display = "block";
        formOcultar.style.display = "none";
        botonActivado.classList.add("btn-activo");
        botonDesactivado.classList.remove("btn-activo");
    };

    btnLogin.addEventListener("click", function () {
        activarBoton(btnLogin, btnRegistro, formLogin, formRegistro);
    });

    btnRegistro.addEventListener("click", function () {
        activarBoton(btnRegistro, btnLogin, formRegistro, formLogin);
    });
});
