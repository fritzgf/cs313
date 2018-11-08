



CREATE TABLE topic (
  id SERIAL PRIMARY KEY NOT NULL,
  name VARCHAR(80) NOT NULL
  );
  INSERT INTO topic (name) VALUES ('Faith');
  INSERT INTO topic (name) VALUES ('Sacrifice');
  INSERT INTO topic (name) VALUES ('Charity');

  CREATE TABLE topic_script (
    scriptures_id INT REFERENCES scriptures (id),
    topic_id INT REFERENCES topic (id)

  );
  