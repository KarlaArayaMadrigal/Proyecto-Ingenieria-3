-- Creación de la Base de Datos
CREATE DATABASE IF NOT EXISTS tienda_electrodomesticos;
USE tienda_electrodomesticos;

-- Tabla de Usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario VARCHAR(50) NOT NULL UNIQUE,
    contraseña VARCHAR(255) NOT NULL,
    rol ENUM('empleado', 'supervisor', 'jefe') NOT NULL,
    nombre_completo VARCHAR(100) NOT NULL
);

-- Tabla de Productos
CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL,
    imagen_url VARCHAR(255)
);

-- Tabla de Carrito (relacionado con el usuario)
CREATE TABLE IF NOT EXISTS carrito (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

-- Tabla de Detalles del Carrito (relaciona carrito y productos)
CREATE TABLE IF NOT EXISTS carrito_detalles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    carrito_id INT NOT NULL,
    producto_id INT NOT NULL,
    cantidad INT NOT NULL,
    FOREIGN KEY (carrito_id) REFERENCES carrito(id) ON DELETE CASCADE,
    FOREIGN KEY (producto_id) REFERENCES productos(id) ON DELETE CASCADE
);

-- Tabla de Órdenes (Historial de Ventas)
CREATE TABLE IF NOT EXISTS ordenes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

-- Tabla de Detalles de Ordenes (relaciona orden y productos)
CREATE TABLE IF NOT EXISTS orden_detalles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    orden_id INT NOT NULL,
    producto_id INT NOT NULL,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (orden_id) REFERENCES ordenes(id) ON DELETE CASCADE,
    FOREIGN KEY (producto_id) REFERENCES productos(id) ON DELETE CASCADE
);

-- Insertar Datos de Ejemplo
INSERT INTO usuarios (nombre_usuario, contraseña, rol, nombre_completo) VALUES
('empleado1', 'password1', 'empleado', 'Empleado Uno'),
('supervisor1', 'password2', 'supervisor', 'Supervisor Uno'),
('jefe1', 'password3', 'jefe', 'Jefe Uno');

INSERT INTO productos (nombre, descripcion, precio, stock, imagen_url) VALUES
('Lavadora', 'Lavadora de alta eficiencia 7kg', 299.99, 10, 'lavadora.jpg'),
('Refrigerador', 'Refrigerador 300L No Frost', 599.99, 5, 'refrigerador.jpg'),
('Televisor', 'Televisor 4K UHD 55 pulgadas', 799.99, 8, 'televisor.jpg');

