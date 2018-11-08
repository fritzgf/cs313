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

--
-- Name: scriptures_id_seq; Type: SEQUENCE; Schema: public; Owner: xfynifhtbreozx
--

CREATE SEQUENCE public.scriptures_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.scriptures_id_seq OWNER TO xfynifhtbreozx;

--
-- Name: scriptures_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: xfynifhtbreozx
--

ALTER SEQUENCE public.scriptures_id_seq OWNED BY public.scriptures.id;


--
-- Name: topic; Type: TABLE; Schema: public; Owner: xfynifhtbreozx
--

CREATE TABLE public.topic (
    id integer NOT NULL,
    name character varying(80) NOT NULL
);


ALTER TABLE public.topic OWNER TO xfynifhtbreozx;

--
-- Name: topic_id_seq; Type: SEQUENCE; Schema: public; Owner: xfynifhtbreozx
--

CREATE SEQUENCE public.topic_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.topic_id_seq OWNER TO xfynifhtbreozx;

--
-- Name: topic_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: xfynifhtbreozx
--

ALTER SEQUENCE public.topic_id_seq OWNED BY public.topic.id;


--
-- Name: topic_script; Type: TABLE; Schema: public; Owner: xfynifhtbreozx
--

CREATE TABLE public.topic_script (
    scriptures_id integer,
    topic_id integer
);


ALTER TABLE public.topic_script OWNER TO xfynifhtbreozx;

--
-- Name: users; Type: TABLE; Schema: public; Owner: xfynifhtbreozx
--

CREATE TABLE public.users (
    id integer NOT NULL,
    firstname character varying(100) NOT NULL,
    lastname character varying(100) NOT NULL,
    email character varying(100) NOT NULL,
    password character varying(225)
);


ALTER TABLE public.users OWNER TO xfynifhtbreozx;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: xfynifhtbreozx
--

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
-- Name: answers id; Type: DEFAULT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.answers ALTER COLUMN id SET DEFAULT nextval('public.answers_id_seq'::regclass);


--
-- Name: articles id; Type: DEFAULT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.articles ALTER COLUMN id SET DEFAULT nextval('public.articles_id_seq'::regclass);


--
-- Name: interview_questions id; Type: DEFAULT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.interview_questions ALTER COLUMN id SET DEFAULT nextval('public.interview_questions_id_seq'::regclass);


--
-- Name: jobdevelopers id; Type: DEFAULT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.jobdevelopers ALTER COLUMN id SET DEFAULT nextval('public.jobdevelopers_id_seq'::regclass);


--
-- Name: scriptures id; Type: DEFAULT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.scriptures ALTER COLUMN id SET DEFAULT nextval('public.scriptures_id_seq'::regclass);


--
-- Name: topic id; Type: DEFAULT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.topic ALTER COLUMN id SET DEFAULT nextval('public.topic_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: answers; Type: TABLE DATA; Schema: public; Owner: xfynifhtbreozx
--

COPY public.answers (id, answer, user_id, interview_id, date) FROM stdin;
31        Hang it from a clothesline and see if it leans!       33      6       2018-06-14
30       Java is an object language.    30      23      2018-06-20
\.


--
-- Data for Name: articles; Type: TABLE DATA; Schema: public; Owner: xfynifhtbreozx
--

COPY public.articles (id, article, user_id, date) FROM stdin;
\.


--
-- Data for Name: interview_questions; Type: TABLE DATA; Schema: public; Owner: xfynifhtbreozx
--

COPY public.interview_questions (id, interviewtext, user_id, date) FROM stdin;
6       How would you check if a binary tree is balanced?       1       2018-05-26
23      What is Java?   30      2018-06-20
\.


--
-- Data for Name: jobdevelopers; Type: TABLE DATA; Schema: public; Owner: xfynifhtbreozx
--

COPY public.jobdevelopers (id, jobposting, user_id) FROM stdin;
\.


--
-- Data for Name: scriptures; Type: TABLE DATA; Schema: public; Owner: xfynifhtbreozx
--

COPY public.scriptures (id, book, chapter, verse, content) FROM stdin;
1       John    1       5       And the light shineth in darkness; and the darkness
comprehended it not.
2       Doctrine and Covenants  88      49      The light shineth in darkness; and the darkness comprehended it not.\nNevertheles, the day shall come when you shall comprehend even God, being quickened in him and by him.
3       Doctrine and Covenants  93      28      He that keepeth his commandments receiveth truth and light,\nuntil he is glorified in truth and knoweth all things.
4       Mosiah  16      9       He is the light abd tge kufe if tge wirkd; yea, a light that is endless, that can never be darkened, yea,\nalso a life which is endless, that there can be no more death.
\.


--
-- Data for Name: topic; Type: TABLE DATA; Schema: public; Owner: xfynifhtbreozx
--

COPY public.topic (id, name) FROM stdin;
1       Faith
2       Sacrifice
3       Charity
\.


--
-- Data for Name: topic_script; Type: TABLE DATA; Schema: public; Owner: xfynifhtbreozx
--

COPY public.topic_script (scriptures_id, topic_id) FROM stdin;
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: xfynifhtbreozx
--

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
-- Name: answers answers_pkey; Type: CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.answers
    ADD CONSTRAINT answers_pkey PRIMARY KEY (id);


--
-- Name: articles articles_pkey; Type: CONSTRAINT; Schema: public; Owner: xfynifhtbreozx
--

ALTER TABLE ONLY public.articles
    ADD CONSTRAINT articles_pkey PRIMARY KEY (id);


--
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