-- CODE SQL POUR CREER LA TABLE DES SCREENSHOTS DU CARROUSEL

CREATE TABLE screenshots (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255) NOT NULL,
    thumbnail VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL
);

INSERT INTO screenshots (image, thumbnail, created_at, updated_at) VALUES
('Ressource_perso/screenshots/screen1.jpg', 'Ressource_perso/screenshots/thumbnail1.jpg', NOW(), NOW()),
('Ressource_perso/screenshots/screen2.jpg', 'Ressource_perso/screenshots/thumbnail2.jpg', NOW(), NOW()),
('Ressource_perso/screenshots/screen3.jpg', 'Ressource_perso/screenshots/thumbnail3.jpg', NOW(), NOW()),
('Ressource_perso/screenshots/screen4.jpg', 'Ressource_perso/screenshots/thumbnail4.jpg', NOW(), NOW()),
('Ressource_perso/screenshots/screen5.jpg', 'Ressource_perso/screenshots/thumbnail5.jpg', NOW(), NOW()),
('Ressource_perso/screenshots/screen6.jpg', 'Ressource_perso/screenshots/thumbnail6.jpg', NOW(), NOW()),
('Ressource_perso/screenshots/screen7.jpg', 'Ressource_perso/screenshots/thumbnail7.jpg', NOW(), NOW()),
('Ressource_perso/screenshots/screen8.jpg', 'Ressource_perso/screenshots/thumbnail8.jpg', NOW(), NOW());
