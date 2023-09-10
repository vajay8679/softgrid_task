4. Information about students is kept in two separate tables:

TABLE junior
  id INTEGER NOT NULL PRIMARY KEY,
  name VARCHAR(50) NOT NULL

TABLE senior
  id INTEGER NOT NULL PRIMARY KEY,
  name VARCHAR(50) NOT NULL
  
Write a query that select all distinct student names.



5. Each item in a web shop belongs to a seller. To ensure service quality, each seller has a rating.

The data are kept in the following two tables:

TABLE sellers
  id INTEGER PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  rating INTEGER NOT NULL

TABLE items
  id INTEGER PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  sellerId INTEGER REFERENCES sellers(id)

Write a query that selects the item name and the name of its seller for each item that belongs to a seller with a rating greater than 4.



#follow all steps from 'question4-5.sql'  file.