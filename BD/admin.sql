-- Acceder a MySQL con un usuario que tenga privilegios suficientes (como root).
-- Ejecuta los siguientes comandos uno por uno:

-- Crear el usuario 'admin' con la contraseña especificada
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'Pr0y3ct0';

-- Otorgar todos los privilegios en la base de datos 'tienda_electrodomesticos' al usuario 'admin'
GRANT ALL PRIVILEGES ON tienda_electrodomesticos.* TO 'admin'@'localhost';

-- Aplicar los cambios en los privilegios
FLUSH PRIVILEGES;
