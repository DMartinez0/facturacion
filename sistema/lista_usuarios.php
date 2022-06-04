<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php";?>
	<title>Sistema de Ventas</title>
</head>
<body>
<?php include "includes/header.php";?>
	<section id="container">

    <h1>Lista de Usuarios</h1>
    <a href="registro_usuarios.php" class="btn_new">Crear Usuario</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Jorge</td>
            <td>jorge@gmail.com</td>
            <td>administrador</td>
            <td>
                <a class="link_edit" href="#">Editar</a>
                |
                <a class="link_delete" href="#">Eliminar</a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Jorge</td>
            <td>jorge@gmail.com</td>
            <td>administrador</td>
            <td>
                <a class="link_edit" href="#">Editar</a>
                |
                <a class="link_delete" href="#">Eliminar</a>
            </td>
        </tr>


    </table>
	</section>
	<?php include "includes/footer.php";?>
</body>
</html>