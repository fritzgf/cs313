-- Name: interview_questions interview_questions_pkey; Type: CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.interview_questions
    ADD CONSTRAINT interview_questions_pkey PRIMARY KEY (id);


--
-- Name: jobdevelopers jobdevelopers_pkey; Type: CONSTRAINT; Schema: public; Owner:
xfynifhtbreozx
--

ALTER TABLE ONLY public.jobdevelopers
    ADD CONSTRAINT jobdevelopers_pkey PRIMARY KEY (id);


--
-- Name: scriptures scriptures_pkey; Type: CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.scriptures
    ADD CONSTRAINT scriptures_pkey PRIMARY KEY (id);


--
-- Name: topic topic_pkey; Type: CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.topic
    ADD CONSTRAINT topic_pkey PRIMARY KEY (id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: answers answers_interview_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.answers
    ADD CONSTRAINT answers_interview_id_fkey FOREIGN KEY (interview_id) REFERENCES public.interview_questions(id);


--
-- Name: answers answers_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.answers
    ADD CONSTRAINT answers_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: articles articles_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.articles
    ADD CONSTRAINT articles_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: interview_questions interview_questions_user_id_fkey; Type: FK CONSTRAINT;
Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.interview_questions
    ADD CONSTRAINT interview_questions_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: jobdevelopers jobdevelopers_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.jobdevelopers
    ADD CONSTRAINT jobdevelopers_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: topic_script topic_script_scriptures_id_fkey; Type: FK CONSTRAINT; Schema:
public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.topic_script
    ADD CONSTRAINT topic_script_scriptures_id_fkey FOREIGN KEY (scriptures_id) REFERENCES public.scriptures(id);


--
-- Name: topic_script topic_script_topic_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.topic_script
    ADD CONSTRAINT topic_script_topic_id_fkey FOREIGN KEY (topic_id) REFERENCES public.topic(id);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: xfynifhtbreozx
--

REVOKE ALL ON SCHEMA public FROM postgres;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO xfynifhtbreozx;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- Name: LANGUAGE plpgsql; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON LANGUAGE plpgsql TO xfynifhtbreozx;


--
-- PostgreSQL database dump complete
--

PS C:\Users\fgfev\Desktop\cs313> git add .
PS C:\Users\fgfev\Desktop\cs313> git commit -m "add new files"
[master 0d5d561] add new files
 5 files changed, 636 insertions(+), 1 deletion(-)
 create mode 100644 db/db_php.sql
 create mode 100644 web/sql/scriptures.sql
 create mode 100644 web/view/insertscriptures.php
 create mode 100644 web/view/newscriptures.php
PS C:\Users\fgfev\Desktop\cs313> git push origin  master
Counting objects: 35, done.
Delta compression using up to 8 threads.
Compressing objects: 100% (32/32), done.
Writing objects: 100% (35/35), 5.67 KiB | 341.00 KiB/s, done.
Total 35 (delta 22), reused 0 (delta 0)
remote: Resolving deltas: 100% (22/22), completed with 7 local objects.
To https://github.com/fritzgf/cs313.git
   dd92c3f..0d5d561  master -> master
PS C:\Users\fgfev\Desktop\cs313> heroku pg:psql
--> Connecting to postgresql-flexible-98671
psql (10.4, server 10.5 (Ubuntu 10.5-1.pgdg14.04+1))
WARNING: Console code page (437) differs from Windows code page (1252)
         8-bit characters might not work correctly. See psql reference
         page "Notes for Windows users" for details.
SSL connection (protocol: TLSv1.2, cipher: ECDHE-RSA-AES256-GCM-SHA384, bits: 256, compression: off)
Type "help" for help.

shielded-crag-33463::DATABASE=> CREATE TABLE users_questions
shielded-crag-33463::DATABASE-> (
shielded-crag-33463::DATABASE(> id SERIAL PRIMARY KEY,
shielded-crag-33463::DATABASE(> user_id INT NOT NULL REFERENCES users (user_id),
shielded-crag-33463::DATABASE(> interview_questionsid INT NOT NULL UNIQUE REFERENCES interview_questions (interview_questionsid)
shielded-crag-33463::DATABASE(> );CREATE TABLE users_questions
server closed the connection unexpectedly
        This probably means the server terminated abnormally
        before or while processing the request.
The connection to the server was lost. Attempting reset: Succeeded.
shielded-crag-33463::DATABASE-> (
shielded-crag-33463::DATABASE(> id SERIAL PRIMARY KEY,
shielded-crag-33463::DATABASE(> user_id INT NOT NULL REFERENCES users (user_id),
shielded-crag-33463::DATABASE(> interview_questionsid INT NOT NULL UNIQUE REFERENCES interview_questions (interview_questionsid)
shielded-crag-33463::DATABASE(> );
ERROR:  column "user_id" referenced in foreign key constraint does not exist
shielded-crag-33463::DATABASE=> CREATE TABLE users_questions
shielded-crag-33463::DATABASE-> (
shielded-crag-33463::DATABASE(> id SERIAL PRIMARY KEY,
shielded-crag-33463::DATABASE(> user_id INT NOT NULL REFERENCES users (id),
shielded-crag-33463::DATABASE(> interview_questionsid INT NOT NULL UNIQUE REFERENCES interview_questions (interview_questionsid)
shielded-crag-33463::DATABASE(> );
server closed the connection unexpectedly
        This probably means the server terminated abnormally
        before or while processing the request.
The connection to the server was lost. Attempting reset: Succeeded.
shielded-crag-33463::DATABASE=> CREATE TABLE users_questions
shielded-crag-33463::DATABASE-> (
shielded-crag-33463::DATABASE(> id SERIAL PRIMARY KEY,
shielded-crag-33463::DATABASE(> user_id INT NOT NULL REFERENCES users (id),
shielded-crag-33463::DATABASE(> interview_questionsid INT NOT NULL UNIQUE REFERENCES interview_questions (interview_questionsid)
shielded-crag-33463::DATABASE(> );
ERROR:  column "interview_questionsid" referenced in foreign key constraint does not exist
shielded-crag-33463::DATABASE=> CREATE TABLE users_questions
shielded-crag-33463::DATABASE-> (
shielded-crag-33463::DATABASE(> id SERIAL PRIMARY KEY,
shielded-crag-33463::DATABASE(> user_id INT NOT NULL REFERENCES users (id),
shielded-crag-33463::DATABASE(> interview_questionsid INT NOT NULL UNIQUE REFERENCES interview_questions (id)
shielded-crag-33463::DATABASE(> );
CREATE TABLE
shielded-crag-33463::DATABASE=> ALTER TABLE answers ADD user_id INT NOT NULL REFERENCES users (id);
server closed the connection unexpectedly
        This probably means the server terminated abnormally
        before or while processing the request.
The connection to the server was lost. Attempting reset: Succeeded.
shielded-crag-33463::DATABASE=>
shielded-crag-33463::DATABASE=> ALTER TABLE answers ADD user_id INT NOT NULL REFERENCES users (id);
ERROR:  column "user_id" of relation "answers" already exists
shielded-crag-33463::DATABASE=> ALTER TABLE answers ADD interview_questionsid INT NOT NULL REFERENCES interview_questions (id);
ERROR:  column "interview_questionsid" contains null values
shielded-crag-33463::DATABASE=> select * from interview_questions;
 id |                   interviewtext                   | user_id |    date
----+---------------------------------------------------+---------+------------
  6 | How would you check if a binary tree is balanced? |       1 | 2018-05-26
 23 | What is Java?                                     |      30 | 2018-06-20
(2 rows)


shielded-crag-33463::DATABASE=>
shielded-crag-33463::DATABASE=> heroku run 'pg_dump $DATABASE_URL'
shielded-crag-33463::DATABASE-> \q
PS C:\Users\fgfev\Desktop\cs313> heroku run 'pg_dump $DATABASE_URL'
Running pg_dump $DATABASE_URL on ⬢ shielded-crag-33463... up, run.9905 (Free)--
-- PostgreSQL database dump
--

-- Dumped from database version 10.5 (Ubuntu 10.5-1.pgdg14.04+1)
-- Dumped by pg_dump version 10.5 (Ubuntu 10.5-2.pgdg16.04+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner:
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner:
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: answers; Type: TABLE; Schema: public; Owner: xfynifhtbreozx
--

CREATE TABLE public.answers (
    id integer NOT NULL,
    answer text NOT NULL,
    user_id integer NOT NULL,
    interview_id integer NOT NULL,
    date date NOT NULL
);


ALTER TABLE public.answers OWNER TO xfynifhtbreozx;

--
-- Name: answers_id_seq; Type: SEQUENCE; Schema: public; Owner: xfynifhtbreozx
--

CREATE SEQUENCE public.answers_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.answers_id_seq OWNER TO xfynifhtbreozx;

--
-- Name: answers_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: xfynifhtbreozx
--

ALTER SEQUENCE public.answers_id_seq OWNED BY public.answers.id;


--
-- Name: articles; Type: TABLE; Schema: public; Owner: xfynifhtbreozx
--

CREATE TABLE public.articles (
    id integer NOT NULL,
    article text NOT NULL,
    user_id integer NOT NULL,
    date date NOT NULL
);


ALTER TABLE public.articles OWNER TO xfynifhtbreozx;

--
-- Name: articles_id_seq; Type: SEQUENCE; Schema: public; Owner: xfynifhtbreozx
--

CREATE SEQUENCE public.articles_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.articles_id_seq OWNER TO xfynifhtbreozx;

--
-- Name: articles_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: xfynifhtbreozx
--

ALTER SEQUENCE public.articles_id_seq OWNED BY public.articles.id;


--
-- Name: interview_questions; Type: TABLE; Schema: public; Owner: xfynifhtbreozx
--

CREATE TABLE public.interview_questions (
    id integer NOT NULL,
    interviewtext text NOT NULL,
    user_id integer NOT NULL,
    date date NOT NULL
);


ALTER TABLE public.interview_questions OWNER TO xfynifhtbreozx;

--
-- Name: interview_questions_id_seq; Type: SEQUENCE; Schema: public; Owner: xfynifhtbreozx
--

CREATE SEQUENCE public.interview_questions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.interview_questions_id_seq OWNER TO xfynifhtbreozx;

--
-- Name: interview_questions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: xfynifhtbreozx
--

ALTER SEQUENCE public.interview_questions_id_seq OWNED BY public.interview_questions.id;


--
-- Name: jobdevelopers; Type: TABLE; Schema: public; Owner: xfynifhtbreozx
--

CREATE TABLE public.jobdevelopers (
    id integer NOT NULL,
    jobposting text NOT NULL,
    user_id integer NOT NULL
);


ALTER TABLE public.jobdevelopers OWNER TO xfynifhtbreozx;

--
-- Name: jobdevelopers_id_seq; Type: SEQUENCE; Schema: public; Owner: xfynifhtbreozx--

CREATE SEQUENCE public.jobdevelopers_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.jobdevelopers_id_seq OWNER TO xfynifhtbreozx;

--
-- Name: jobdevelopers_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: xfynifhtbreozx
--

ALTER SEQUENCE public.jobdevelopers_id_seq OWNED BY public.jobdevelopers.id;


--
-- Name: scriptures; Type: TABLE; Schema: public; Owner: xfynifhtbreozx
--

CREATE TABLE public.scriptures (
    id integer NOT NULL,
    book character varying(100) NOT NULL,
    chapter integer NOT NULL,
    verse integer NOT NULL,
    content character varying(1200) NOT NULL
);


ALTER TABLE public.scriptures OWNER TO xfynifhtbreozx;





CREATE TABLE public.users (
    id integer NOT NULL,
    firstname character varying(100) NOT NULL,
    lastname character varying(100) NOT NULL,
    email character varying(100) NOT NULL,
    password character varying(225)
);

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO xfynifhtbreozx;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: xfynifhtbreozx
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: users_questions; Type: TABLE; Schema: public; Owner: xfynifhtbreozx
--

CREATE TABLE public.users_questions (
    id integer NOT NULL,
    user_id integer NOT NULL,
    interview_questionsid integer NOT NULL
);


ALTER TABLE public.users_questions OWNER TO xfynifhtbreozx;

--
-- Name: users_questions_id_seq; Type: SEQUENCE; Schema: public; Owner: xfynifhtbreozx
--

CREATE SEQUENCE public.users_questions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_questions_id_seq OWNER TO xfynifhtbreozx;


ALTER SEQUENCE public.users_questions_id_seq OWNED BY public.users_questions.id;


ALTER TABLE ONLY public.answers ALTER COLUMN id SET DEFAULT nextval('public.answers_id_seq'::regclass);

--
-- Name: interview_questions id; Type: DEFAULT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.interview_questions ALTER COLUMN id SET DEFAULT nextval('public.interview_questions_id_seq'::regclass);


ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


ALTER TABLE ONLY public.users_questions ALTER COLUMN id SET DEFAULT nextval('public.users_questions_id_seq'::regclass);



COPY public.answers (id, answer, user_id, interview_id, date) FROM stdin;
31        Hang it from a clothesline and see if it leans!       33      6       2018-06-14
30       Java is an object language.    30      23      2018-06-20

--
-- Data for Name: interview_questions; Type: TABLE DATA; Schema: public; Owner: xfynifhtbreozx
--

COPY public.interview_questions (id, interviewtext, user_id, date) FROM stdin;
6       How would you check if a binary tree is balanced?       1       2018-05-26
23      What is Java?   30      2018-06-20
\.

COPY public.users (id, firstname, lastname, email, password) FROM stdin;
1       Fritz   Fevrier fgfevrier@gmail.com     \N
14      gerald  fevrier gerald@gmail.com        \N
15                              \N
16                              \N
17                              \N
18                              \N
19                              \N
20      gerald  fevrier gerald@gmail.com        \N
21      paul    john    paul@gmail.com  \N
22      joe     john    joe@gmail.com   \N
23      test    tost    test@gmail.com  ELevonsayiti#1
24      test4   lolo    test4@gmail.com \N
25      test8   lolo    test8@gmail.com $2y$10$tG7vqb9VrmuW5.FQS3Xti.hMVuctBM3GuxP/Tlv9eF6iuwEdrHejK
26      test8   lolo    test8@gmail.com $2y$10$sHz7oYDdINTxRHeeS77m0eQr9pj3B9eI5.rBUA47HDTral0LQsAwW
27      test10  loo     test10@gmail.com        \N
28      test11  lo      test11@gmail.com        $2y$10$pOntZLlI/AMJYTMHKbobIun1r71hjJ7.GMX0WSH8yehUlIaarxvQm
29      test23  ll      test23@gmail.com        $2y$10$8DtFQp/5bJi7aZL.u1TPIuiC4XnchR1x2I29Oop06NYtp/H8OZacK
30      user    phpUser user@gmail.com  $2y$10$1n4wj3r0.hTrsz1cO5rOgukKP683dZ3tcBkvgC6tDrgVJayuQLyY2
31      Admin   AdminUser       admin@gmaill.com        $2y$10$37cvMiiKFfQ4Jjrr18rCQOXTkTJIjEnpUnmfYGHj/YmS.10fWE6nW
32      Admin   AdminUser       admin@gmail.com $2y$10$uL7qjfBG9D.fhSp9EVqFNeUX8SNJ/W9jYKKUtobgu3TrsJ/nSjdY6
33      ta      ta      ta@ta.ta        $2y$10$IpUr8Yt577p9vRwzN82ex.wrOVe.1ehC2PsE/0KKMPhxQPnKe7jvG
\.


--
-- Data for Name: users_questions; Type: TABLE DATA; Schema: public; Owner: xfynifhtbreozx
--

COPY public.users_questions (id, user_id, interview_questionsid) FROM stdin;
\.


--
-- Name: answers_id_seq; Type: SEQUENCE SET; Schema: public; Owner: xfynifhtbreozx
--

SELECT pg_catalog.setval('public.answers_id_seq', 31, true);


--
-- Name: articles_id_seq; Type: SEQUENCE SET; Schema: public; Owner: xfynifhtbreozx
--

SELECT pg_catalog.setval('public.articles_id_seq', 1, false);


--
-- Name: interview_questions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: xfynifhtbreozx
--

SELECT pg_catalog.setval('public.interview_questions_id_seq', 23, true);


--
-- Name: jobdevelopers_id_seq; Type: SEQUENCE SET; Schema: public; Owner: xfynifhtbreozx
--

SELECT pg_catalog.setval('public.jobdevelopers_id_seq', 1, false);


--
-- Name: scriptures_id_seq; Type: SEQUENCE SET; Schema: public; Owner: xfynifhtbreozx
--

SELECT pg_catalog.setval('public.scriptures_id_seq', 4, true);


--
-- Name: topic_id_seq; Type: SEQUENCE SET; Schema: public; Owner: xfynifhtbreozx
--

SELECT pg_catalog.setval('public.topic_id_seq', 3, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: xfynifhtbreozx
--

SELECT pg_catalog.setval('public.users_id_seq', 33, true);


--
-- Name: users_questions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: xfynifhtbreozx
--

SELECT pg_catalog.setval('public.users_questions_id_seq', 1, false);


--
-- Name: answers answers_pkey; Type: CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.answers
    ADD CONSTRAINT answers_pkey PRIMARY KEY (id);

--
-- Name: interview_questions interview_questions_pkey; Type: CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.interview_questions
    ADD CONSTRAINT interview_questions_pkey PRIMARY KEY (id);

--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: users_questions users_questions_interview_questionsid_key; Type: CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.users_questions
    ADD CONSTRAINT users_questions_interview_questionsid_key UNIQUE (interview_questionsid);


--
-- Name: users_questions users_questions_pkey; Type: CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.users_questions
    ADD CONSTRAINT users_questions_pkey PRIMARY KEY (id);


--
-- Name: answers answers_interview_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.answers
    ADD CONSTRAINT answers_interview_id_fkey FOREIGN KEY (interview_id) REFERENCES public.interview_questions(id);


--
-- Name: answers answers_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.answers
    ADD CONSTRAINT answers_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id);

--
-- Name: interview_questions interview_questions_user_id_fkey; Type: FK CONSTRAINT;
Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.interview_questions
    ADD CONSTRAINT interview_questions_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id);

--
-- Name: users_questions users_questions_interview_questionsid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.users_questions
    ADD CONSTRAINT users_questions_interview_questionsid_fkey FOREIGN KEY (interview_questionsid) REFERENCES public.interview_questions(id);


--
-- Name: users_questions users_questions_user_id_fkey; Type: FK CONSTRAINT; Schema:
public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.users_questions
    ADD CONSTRAINT users_questions_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: xfynifhtbreozx
--

REVOKE ALL ON SCHEMA public FROM postgres;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO xfynifhtbreozx;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- Name: LANGUAGE plpgsql; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON LANGUAGE plpgsql TO xfynifhtbreozx;


--
-- PostgreSQL database dump complete
--

PS C:\Users\fgfev\Desktop\cs313>