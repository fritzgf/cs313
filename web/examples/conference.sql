CREATE TALBE users
(
  id SERIAL PRIMARY KEY 
  , userName VARCHAR (50) UNIQUE NOT NULL
  , password VARCHAR (50) NOT NULL,
);

CREATE TABLE speakers
(
  id SERIAL PRIMARY KEY 
  , name VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE sessions
(
  id SERIAL PRIMARY KEY 
  , month VARCHAR(100) UNIQUE NOT NULL
  , year SMALLINT NOT NULL
);

CREATE TABLE notes
(
  id SERIAL PRIMARY KEY 
  , content TEXT
  , date DATE NOT NULL
  , user_id INT NOT NULL REFERENCES users(id)REFERENCES
  , speaker_id INT NOT NULL REFERENCES speakers(id)
  , session_id INT NOT NULL REFERENCES sessions(id)
);