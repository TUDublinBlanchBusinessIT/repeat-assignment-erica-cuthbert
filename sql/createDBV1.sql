create choir_db;

use choir_db;
 
create table events(
    event_id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(100) NOT NULL,
    event_date DATE NOT NULL,
    location VARCHAR(100) NOT NULL
);

INSERT INTO events (event_name, event_date, location)
VALUES
('Summer Concert', '2026-08-20', 'Community Hall'),
('Christmas Recital', '2026-12-15', 'Virgin Mary Church');