CREATE TABLE interview_questions
(
 id SERIAL PRIMARY KEY,
 interviewText text NOT NULL,
 user_id INT NOT NULL  REFERENCES users(id), 
"date" date NOT NULL
); 


CREATE TABLE users
(
id SERIAL PRIMARY KEY,
firstName VARCHAR(100) NOT NULL,
lastName VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL
interview_id INT NOT NULL  REFERENCES interview_questions(id) 
);

 

CREATE TABLE jobDevelopers
(
id SERIAL PRIMARY KEY,
jobPosting text NOT NULL,
user_id INT NOT NULL REFERENCES users(id)
);

CREATE TABLE articles 
(
id SERIAL PRIMARY KEY,
article text NOT NULL,
user_id INT NOT NULL REFERENCES users(id),
"date" date NOT NULL
);



CREATE TABLE ask_questions 
SELECT iq.interviewText, iq.date, iq.user_id, u.firstName FROM interview_questions as iq INNER JOIN users as u ON iq.user_id= u.id;
(
id SERIAL PRIMARY KEY,
ask_question VARCHAR(1200) NOT NULL,
user_id INT NOT NULL REFERENCES users(id),
"date" date NOT NULL
);

INSERT INTO users(firstName, lastName, email) VALUES ('Fritz', 'Fevrier', 'fgfevrier@gmail.com');


SELECT interview_questions.interview_interviewText, interview_questions.date, users.user_id FROM interview_questions INNER JOIN interview_questions ON interview_questions.interview_question_id = interview_question.user_id WHERE interview_question_id = interview_question_id;

