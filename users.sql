CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    gender ENUM('male', 'female') NOT NULL,
    country VARCHAR(50) NOT NULL,
    agreed_terms TINYINT(1) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);