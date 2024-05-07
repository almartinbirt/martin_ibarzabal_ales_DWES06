

CREATE DATABASE martin_ibarzabal_ales_DWES05;

USE martin_ibarzabal_ales_DWES05;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    correo VARCHAR(255) UNIQUE,
    telefono VARCHAR(255),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);


CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    precio FLOAT,
    cantidad FLOAT,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);



CREATE TABLE compras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    producto_id INT,
    cantidad INT,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (producto_id) REFERENCES productos(id)
);



INSERT INTO usuarios (nombre, correo, telefono, created_at, updated_at) VALUES
('Juan Perez', 'juan@example.com', '123-456-7890', NOW(), NOW()),
('María López', 'maria@example.com', '987-654-3210', NOW(), NOW()),
('Carlos García', 'carlos@example.com', '456-789-0123', NOW(), NOW());


INSERT INTO productos (nombre, precio, cantidad, created_at, updated_at) VALUES
('Producto A', 10.99, 100, NOW(), NOW()),
('Producto B', 20.50, 50, NOW(), NOW()),
('Producto C', 5.75, 200, NOW(), NOW());


INSERT INTO compras (usuario_id, producto_id, cantidad, created_at, updated_at) VALUES
(1, 1, 2, NOW(), NOW()), -- Usuario 1 compró 2 del producto 1
(2, 2, 5, NOW(), NOW()), -- Usuario 2 compró 5 del producto 2
(1, 3, 1, NOW(), NOW()), -- Usuario 1 compró 1 del producto 3
(3, 3, 3, NOW(), NOW()); -- Usuario 1 compró 3 del producto 3

