USE choir_db;

CREATE TABLE songs (
    song_id INT AUTO_INCREMENT PRIMARY KEY,
    song_name VARCHAR(100) NOT NULL,
    pdf_file VARCHAR(255),
    alto_file VARCHAR(255),
    bass_file VARCHAR(255),
    soprano_file VARCHAR(255),
    tenor_file VARCHAR(255)
);