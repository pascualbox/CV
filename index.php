<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Currículum Vitae</title>
    <link rel="stylesheet" href="public/css/main.css">
</head>
<body>
    <header>
        <h1>Mi Currículum Vitae</h1>
        <div class="menu">
            <a href="#informacion-personal">Datos Personales</a>
            <div class="submenu">
                <button class="submenu-btn">Más Opciones</button>
                <div class="submenu-content">
                    <a href="#experiencia-laboral">Experiencia Laboral</a>
                    <a href="#educacion">Educación</a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section id="informacion-personal">
            <h2>Información Personal</h2>
            <p>Nombre: Pascual</p>
            <p>Apellidos: Box Sánchez</p>
            <p>Email: <a href="mailto:pascualbox1@gmail.com">pascualbox1@gmail.com</a></p>
            <p>Teléfono: <a href="tel:+3461709703">641 70 97 03</a></p>
        </section>
        <section id="experiencia-laboral">
            <h2>Experiencia Laboral</h2>
            <ul>
                <li>
                    <h3>Desarrollador OutSystems - Empresa Adresles.</h3>
                    <p>Desarrollador primero en prácticas y luego contratado. 6 meses.</p>
                    <p>Responsabilidades: desarrollo y mantenimiento de aplicación en OutSystems, así como su testeo y atención al cliente.</p>
                </li>
                <li>
                    <h3>Desarrollador Flutter - Empresa inventi.</h3>
                    <p>Desarrollo de una aplicación móvil para iOS en Flutter. 3 meses.</p>
                    <p>Responsabilidades: desarrollo y mantenimiento de aplicación en Flutter, así como su testeo y diseño.</p>
                </li>
                <li>
                    <h3>QA tester - Empresa Solera.</h3>
                    <p>Testeo manual y automático de aplicaciones en Java. 6 meses.</p>
                    <p>Responsabilidades: testeo manual y automático de la API utilizando Java.</p>
                </li>
            </ul>
        </section>
        <section id="educacion">
            <h2>Educación</h2>
            <ul>
                <li>
                    <h3>Grado superior en Desarrollo de Aplicaciones Web.</h3>
                    <p>2021 - Actualidad.</p>
                </li>
                <li>
                    <h3>Bachiller</h3>
                    <p>2014 - 2017</p>
                </li>
                <li>
                    <h3>Bootcamp en Java y React</h3>
                    <p>2022.</p>
                </li>
                <!-- Añade más educación aquí -->
            </ul>
        </section>
        <section id="habilidades">
            <h2>Habilidades</h2>
            <ul>
                <li>Dart, Flutter, Java, HTML, CSS, JavaScript</li>
                <li>PHP, MySQL, Laravel</li>
                <li>Git, GitHub, Postman</li>
                <li>OutSystems</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Pascual Box Sánchez. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
