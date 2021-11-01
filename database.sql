CREATE DATABASE IF NOT EXISTS dines ;

CREATE TABLE dines(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    description VARCHAR(200) NOT NULL,
    score INT NOT NULL,
    restaurant VARCHAR(100) NOT NULL,
    address VARCHAR(200) NOT NULL,
    date DATE NOT NULL, 
    image VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);


CREATE TABLE users(
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO dines
    (name,description,score,restaurant,address,date,image)
    VALUES ('Muffin & coffee','Blueberry muffin filled with cream cheese and strawberry jam','5','Niddo','Dresde 2, Juárez, Cuauhtémoc, 06600 Ciudad de México, CDMX', '2021-10-10','./images/coffee.jpeg');

INSERT INTO dines
    (name,description,score,restaurant,address,date,image)
    VALUES ('Birria tacos with cosnome','Birria tacos with cheese dipped in a spicy birria cosnome','5','La Reyna de la Birria',' Distrito B-4 404, Leones, 64600 Monterrey, N.L.', '2021-10-10','./images/birria.jpeg');

INSERT INTO dines
    (name,description,score,restaurant,address,date,image)
    VALUES ('Double chesseburger','Smashed double burger with American and Monterrey Jack cheese','5','Pinto Bar','Av. del Roble 300, Residencial Santa Barbara, 66266 San Pedro Garza García, N.L.', '2021-10-10','./images/burger.jpeg');

INSERT INTO dines
    (name,description,score,restaurant,address,date,image)
    VALUES ('Chicarron tacos','Authentic chicharron tacos from Monterrey toped with pickled onions','4','Taquería Orinoco','Av. Del Estado 221, Tecnológico, 64700 Monterrey, N.L', '2021-10-10','./images/tacos.jpeg');

