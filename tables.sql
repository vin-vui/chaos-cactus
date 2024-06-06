CREATE TABLE screenshots (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_path VARCHAR(255) NOT NULL,
    alt_text VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


INSERT INTO screenshots (image_path, alt_text) VALUES ('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/screenshots/screen1', 'screenshot 1');
INSERT INTO screenshots (image_path, alt_text) VALUES ('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/screenshots/screen2', 'screenshot 2');
INSERT INTO screenshots (image_path, alt_text) VALUES ('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/screenshots/screen3', 'screenshot 3');
INSERT INTO screenshots (image_path, alt_text) VALUES ('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/screenshots/screen4', 'screenshot 4');
INSERT INTO screenshots (image_path, alt_text) VALUES ('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/screenshots/screen5', 'screenshot 5');
INSERT INTO screenshots (image_path, alt_text) VALUES ('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/screenshots/screen6', 'screenshot 6');
INSERT INTO screenshots (image_path, alt_text) VALUES ('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/screenshots/screen7', 'screenshot 7');
INSERT INTO screenshots (image_path, alt_text) VALUES ('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/screenshots/screen8', 'screenshot 8');
