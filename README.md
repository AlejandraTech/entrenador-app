# 🏋️‍♂️ Creación de entrenos

Bienvenido a **Creación de entrenos**, una aplicación web desarrollada con **Laravel** que permite a los usuarios crear y gestionar entrenamientos personalizados. Además, proporciona un historial de los entrenamientos creados, asociado a la cuenta de cada usuario.

---

### 🗂️ Índice

| Sección                                                        | Descripción                                                         |
| -------------------------------------------------------------- | ------------------------------------------------------------------- |
| [📄 Descripción del Proyecto](#descripción-del-proyecto)       | Una visión general de la aplicación de creación de entrenos.        |
| [✨ Características Principales](#características-principales) | Funcionalidades clave para la creación y gestión de entrenamientos. |
| [🛠️ Tecnologías Utilizadas](#tecnologías-utilizadas)           | Herramientas y tecnologías empleadas en el desarrollo del proyecto. |
| [⚙️ Instalación](#instalación)                                 | Guía paso a paso para configurar la aplicación en tu entorno local. |
| &nbsp;&nbsp;↳ [Prerequisitos](#prerrequisitos)                 | Requisitos necesarios para la instalación.                          |
| &nbsp;&nbsp;↳ [Pasos de Instalación](#pasos-de-instalación)    | Procedimiento detallado de instalación.                             |
| [💻 Uso](#uso)                                                 | Cómo utilizar la aplicación una vez instalada.                      |

---

## 📌 Descripción del Proyecto

**Creación de entrenos** es una aplicación que facilita la creación de entrenamientos personalizados. Su objetivo es ofrecer una herramienta sencilla pero eficaz para la planificación y seguimiento de entrenamientos, ayudando a los usuarios a alcanzar sus objetivos de fitness.

> **Objetivo**: Proporcionar una solución fácil de usar para la creación y gestión de entrenamientos, adaptada a las necesidades individuales de los usuarios.

---

## ✨ Características Principales

| Funcionalidad                   | Descripción                                                                           |
| ------------------------------- | ------------------------------------------------------------------------------------- |
| **Creación Personalizable**     | Crea entrenamientos con opciones de ejercicios, series y repeticiones.                |
| **Autenticación de Usuarios**   | Sistema de registro e inicio de sesión para gestionar entrenamientos de forma segura. |
| **Historial de Entrenamientos** | Almacena y muestra un historial de los entrenamientos creados por cada usuario.       |
| **Interfaz Intuitiva**          | Diseñada con **Tailwind CSS** para una experiencia de usuario agradable y responsive. |
| **Seguridad de Datos**          | Implementación de protocolos de seguridad para proteger los datos de los usuarios.    |

---

## 🛠️ Tecnologías Utilizadas

| Categoría         | Herramienta                                                                                                                                     |
| ----------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| **Framework Web** | <img src="https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-thebadge&logo=laravel&logoColor=white" alt="Laravel Badge"/>             |
| **PHP**           | <img src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-thebadge&logo=php&logoColor=white" alt="PHP Badge"/>                         |
| **CSS**           | <img src="https://img.shields.io/badge/tailwindcss-%23426D92.svg?style=for-thebadge&logo=tailwindcss&logoColor=white" alt="TailwindCSS Badge"/> |
| **Base de Datos** | <img src="https://img.shields.io/badge/mysql-%2300f0f0.svg?style=for-thebadge&logo=mysql&logoColor=black" alt="MySQL Badge"/>                   |

---

## ⚙️ Instalación

Sigue los pasos a continuación para configurar el proyecto en tu máquina local.

### Prerrequisitos

| Requisito    | Versión Recomendada |
| ------------ | ------------------- |
| **PHP**      | v8.2 o superior     |
| **Composer** | Última versión      |
| **Node.js**  | v14 o superior      |
| **npm**      | Última versión      |
| **MySQL**    | v5.7 o superior     |
| **Git**      | Última versión      |

### Pasos de Instalación

1. **Clona el repositorio:**

    ```bash
    git clone https://github.com/AlejandraTech/entrenador-app.git
    cd entrenador-app
    ```

2. **Instala las dependencias de Laravel y Node.js:**

    ```bash
    composer install
    npm install
    ```

3. **Configura las variables de entorno:**

    Copia el archivo `.env.example` a `.env` y genera una clave de aplicación:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Configura la base de datos:**

    Edita el archivo `.env` con tus credenciales de base de datos.

5. **Ejecuta las migraciones:**

    ```bash
    php artisan migrate
    ```

6. **Compila los assets del frontend:**

    ```bash
    npm run dev
    ```

7. **Inicia el servidor local:**

    ```bash
    php artisan serve
    ```

8. **Accede a la aplicación:**

    Abre tu navegador y navega a `http://localhost:8000`.

---

## 💻 Uso

1. **Registro/Inicio de Sesión**: Regístrate o inicia sesión para acceder a las funcionalidades.
2. **Creación de Entrenamiento**: En la página principal, configura las opciones y crea un nuevo entrenamiento.
3. **Visualización y Almacenamiento**: El entrenamiento creado se muestra y se guarda automáticamente en tu historial.
4. **Historial de Entrenamientos**: Visualiza y gestiona los entrenamientos creados anteriormente.
5. **Cierre de Sesión**: Cierra sesión para proteger tu información.

---

## 👩‍💻 Autor

Este proyecto fue creado por [**@AlejandraTech**](https://github.com/AlejandraTech).

---

¡Crea entrenamientos personalizados y alcanza tus objetivos de fitness con nuestra aplicación! 🏋️‍♂️
