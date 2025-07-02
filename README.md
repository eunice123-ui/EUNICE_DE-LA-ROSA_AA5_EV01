# 📌 Servicio Web de Registro e Inicio de Sesión - PHP + MySQL

Este proyecto es una API sencilla que permite registrar usuarios y realizar inicio de sesión usando PHP y MySQL. Forma parte de la evidencia **GA7-220501096-AA5-EV01** del programa *Análisis y Desarrollo de Software*.

---

## 🛠️ Tecnologías usadas

- PHP 8+
- MySQL (phpMyAdmin en XAMPP)
- XAMPP
- Postman (para pruebas)
- Git y GitHub (versionamiento)

---

## 📁 Estructura del proyecto

api_login/
├── db.php → Conexión a la base de datos
├── register.php → Registro de usuarios
├── login.php → Inicio de sesión
├── README.md → Explicación del proyecto
├── Img.php →  imagenes con Postman y SQL


---

## 💾 Configuración de base de datos

1. Inicia XAMPP (MySQL y Apache)
2. Entra a: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
3. Crea una base de datos llamada `api_users`
4. Ejecuta esta consulta SQL para crear la tabla:

```sql
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);



🔐 Funcionalidades
✔ Registro de usuario
Ruta: POST http://localhost/api_login/register.php

Cuerpo (raw, JSON):

{
  "username": "usuario1",
  "password": "clave123"
}
📥 Respuestas esperadas:

✅ {"message": "Usuario registrado exitosamente"}

❌ {"message": "Faltan campos"}

❌ {"message": "Error en el registro"}




✔ Inicio de sesión
Ruta: POST http://localhost/api_login/login.php

Cuerpo (raw, JSON):

{
  "username": "usuario1",
  "password": "clave123"
}
📥 Respuestas esperadas:

✅ {"message": "Autenticación satisfactoria"}

❌ {"message": "Contraseña incorrecta"}

❌ {"message": "Usuario no encontrado"}



🔗 Enlace al repositorio GitHub
https://github.com/eunice123-ui/EUNICE_DE-LA-ROSA_AA5_EV01


🧠 Autor
EUNICE DE LA ROSA
Formación SENA – Análisis y Desarrollo de Software
Evidencia: GA7-220501096-AA5-EV01