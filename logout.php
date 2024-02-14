<?php
// Esta función cierra la sesión y redirige a una página de inicio de sesión o a donde desees.
function cerrarSesion() {
    // Iniciar la sesión si no está iniciada
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    // Destruir todas las variables de sesión
    $_SESSION = array();
    
    // Si se desea destruir la cookie, también se debe borrar su contenido
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    
    // Finalmente, destruir la sesión
    session_destroy();
    
    // Redirigir a una página de inicio de sesión o a cualquier otra página que desees
    header("Location: formulari_login.php");
    exit();
}

// Llama a la función para cerrar la sesión cuando se reciba una solicitud para cerrar sesión
if (isset($_GET['logout'])) {
    cerrarSesion();
}
?>