
#create DATABASE
CREATE DATABASE test;

use test;



--Q4. Information about students is kept in two separate tables:

-- TABLE junior
--   id INTEGER NOT NULL PRIMARY KEY,
--   name VARCHAR(50) NOT NULL

-- TABLE senior
--   id INTEGER NOT NULL PRIMARY KEY,
--   name VARCHAR(50) NOT NULL
  
-- Write a query that select all distinct student names.


#create TABLE junior
CREATE TABLE junior (
  id INTEGER NOT NULL PRIMARY KEY,
  name VARCHAR(50) NOT NULL
);



#create TABLE senior
CREATE TABLE senior (
  id INTEGER NOT NULL PRIMARY KEY,
  name VARCHAR(50) NOT NULL
);


-- Insert data into the "junior" table
INSERT INTO junior (id,name) VALUES
  (1,'Ajay'),
  (2,'Amit'),
  (3,'Sumit'),
  (4,'Raja');


  -- Insert data into the "senior" table
INSERT INTO senior (id,name) VALUES
  (1,'Ravi'),
  (2,'Hariom'),
  (3,'Niraj'),
  (4,'Amit');


--Write a query that select all distinct student names.
SELECT name FROM junior
UNION
SELECT name FROM senior;





-- Q5. Each item in a web shop belongs to a seller. To ensure service quality, each seller has a rating.

-- The data are kept in the following two tables:

-- TABLE sellers
--   id INTEGER PRIMARY KEY,
--   name VARCHAR(30) NOT NULL,
--   rating INTEGER NOT NULL

-- TABLE items
--   id INTEGER PRIMARY KEY,
--   name VARCHAR(30) NOT NULL,
--   sellerId INTEGER REFERENCES sellers(id)

-- Write a query that selects the item name and the name of its seller for each item that belongs to a seller with a rating greater than 4.



-- Create the "sellers" table
CREATE TABLE sellers (
  id INTEGER PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  rating INTEGER NOT NULL
);

-- Create the "items" table with a foreign key reference to "sellers"
CREATE TABLE items (
  id INTEGER PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  sellerId INTEGER REFERENCES sellers(id)
);



-- Insert sample data into the "sellers" table
INSERT INTO sellers (id, name, rating) VALUES
  (1,'Ajay', 5),
  (2,'Amit', 3),
  (3,'Sumit', 4),
  (4,'Raja', 5);


-- Insert sample data into the "items" table
INSERT INTO items (id, name, sellerId) VALUES
  (1,'Book', 1),  
  (2,'Mobile', 2), 
  (3,'Laptop', 1),  
  (4,'Earphone', 3);  


--Write a query that selects the item name and the name of its seller for each item that belongs to a seller with a rating greater than 4.
SELECT items.name AS item_name, sellers.name AS seller_name
FROM items
JOIN sellers ON items.sellerId = sellers.id
WHERE sellers.rating > 4;


