<!--Inicio del archivo-->
<!DOCTYPE html>
<html lang="es">

    <!--Inicio del "head"-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <title>Contacto</title>
    </head>

    <body>

        <h1 class="Title Form">CONTACTAME</h1>

        <div class="nav">
            <div>
                <a href="index.html">
                    <button class="btn index">
                        INDEX
                    </button>
                </a>
                <a href="formulario.php">
                    <button class="btn formu">
                        FORMULARIO
                    </button>
                </a>
            </div>
        </div>

        <hr>

        <br>
        
        <form action="envio_datos.php" method="POST">
            <label for="nombre">
                Nombre:
                <br>
                <input type="text" name="nombre" placeholder="Escribe tu nombre" required>
            </label>

            <br>

            <label for="email">
                Correo:
                <br>
                <input type="email" name="email" placeholder="Escribe tu email" required>
            </label>

            <br>

            <label for="pass">
                Contraseña:
                <br>
                <input type="password" name="pass" placeholder="Escribe tu contraseña" required>
            </label>

            <br>

            <label for="género">
                M:
                <input type="radio" name="género" value="Masculino" checked>
            </label>
            <label for="género">
                F:
                <input type="radio" name="género" value="Femenino">
            </label>

            <br>

            <label for="ciudad">
                ¿De dónde eres?
                <br>
                <select name="ciudad">
                    <option value="Guadalajara">Guadalajara</option>
                    <option value="Tonalá">Tonalá</option>
                    <option value="Tlaquepaque">Tlaquepaque</option>
                    <option value="Zapopan">Zapopan</option>
                    <option value="Tlajomulco">Tlajomulco</option>
                    <option value="Otro">Otro</option>
                </select>
            </label>

            <br>

            <label for="contra">
                Página Web
                <input type="checkbox" name="contra" value="Página Web" checked>
            </label>
            <label for="contra">
                Software
                <input type="checkbox" name="contra" value="Software">
            </label>
            <label for="contra">
                Base de datos
                <input type="checkbox" name="contra" value="Base de datos">
            </label>
            <label for="contra">
                Mantenimiento de dispositivos
                <input type="checkbox" name="contra" value="Mantenimiento">
            </label>

            <br>

            <label for="comen">
                Comentarios extra:
                <br>
                <textarea name="comen" placeholder="Deja un comentario extra" cols="30" rows="10"></textarea>
            </label>

            <br>

            <label for="submit">
                <input type="submit" name="submite" id="sum">
            </label>

        </form>

    </body>

</html>