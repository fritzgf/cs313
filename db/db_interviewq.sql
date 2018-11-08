CREATE TABLE answers (
    id integer NOT NULL,
    answer text NOT NULL,
    user_id INT NOT NULL REFERENCES users (id),
    interview_questionsid INT NOT NULL REFERENCES interview_questions (id),
    date date NOT NULL
);
ALTER TABLE answers ADD interview_questionsid INT NOT NULL REFERENCES interview_questions (id);

CREATE TABLE interview_questions (
    id SERIAL PRIMARY KEY,
    interviewtext text NOT NULL,
    date date NOT NULL
);

CREATE TABLE users (
    id integer NOT NULL,
    firstname character varying(100) NOT NULL,
    lastname character varying(100) NOT NULL,
    email character varying(100) NOT NULL,
    password character varying(225)
);
CREATE TABLE users (
    id integer NOT NULL,
    firstname character varying(100) NOT NULL,
    lastname character varying(100) NOT NULL,
    email character varying(100) NOT NULL,
    password character varying(225)
);

CREATE TABLE users_questions
(
id SERIAL PRIMARY KEY,
user_id INT NOT NULL REFERENCES users (id),
interview_questionsid INT NOT NULL UNIQUE REFERENCES interview_questions (id)
);

CREATE TABLE interviewsq
(
 interviewq_id SERIAL PRIMARY KEY,
 interviewText text NOT NULL,
 create_at TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP
); 

CREATE TABLE accounts
(
user_id SERIAL PRIMARY KEY,
userfirstname VARCHAR(100) NOT NULL,
userlastname VARCHAR(100) NOT NULL,
useremail VARCHAR(100) NOT NULL UNIQUE
);
 CREATE TABLE answers
(
answer_id SERIAL PRIMARY KEY,
 answerText text,
 account_id INT NOT NULL REFERENCES accounts (user_id),
 questions_id INT NOT NULL REFERENCES interviewsq (interviewq_id),
 create_at TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP
); 