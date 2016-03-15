CREATE TABLE public.university
(
   id serial,
   name text NOT NULL,
   abbr text NOT NULL,
   home_page text NOT NULL,
   registration_page text NOT NULL,
   main_color text NOT NULL,
   accent_color text NOT NULL,
   topic_name text,
   created_at timestamp without time zone,
   updated_at timestamp without time zone,
   CONSTRAINT pk_university PRIMARY KEY (id),
   CONSTRAINT created_at_not_null CHECK (created_at IS NOT NULL),
   CONSTRAINT updated_at_not_null CHECK (updated_at IS NOT NULL)
)
WITH (
  OIDS = FALSE
)
;
ALTER TABLE public.university
  OWNER TO postgres;

COMMENT ON COLUMN public.university.abbr IS 'Abbreviation of the university name';
COMMENT ON COLUMN public.university.home_page IS 'The homepage page of the university';
COMMENT ON COLUMN public.university.registration_page IS 'The registration page  of the university';
COMMENT ON COLUMN public.university.main_color IS 'ARGB hex of the main color of the university';
COMMENT ON COLUMN public.university.accent_color IS 'ARGB hex of the accent color of the university';
COMMENT ON COLUMN public.university.topic_name IS 'The topic name of this university. Used to build topic url';


CREATE TYPE seasons AS ENUM (
  'Fall',
  'Spring',
  'Summer',
  'Winter');

CREATE TABLE public.subject
(
   id serial,
   univeristy_id serial NOT NULL,
   name text NOT NULL,
   abbr text NOT NULL,
   season seasons NOT NULL,
   year date NOT NULL,
   topic_name text,
   created_at timestamp without time zone,
   updated_at timestamp without time zone,
   CONSTRAINT pk_subject PRIMARY KEY (id),
   CONSTRAINT fk_university_subject FOREIGN KEY (univeristy_id) REFERENCES public.university (id) ON UPDATE CASCADE ON DELETE CASCADE
)
WITH (
  OIDS = FALSE
)
;
ALTER TABLE public.subject
  OWNER TO postgres;

COMMENT ON COLUMN public.subject.univeristy_id IS 'The university this subject belongs to';
COMMENT ON COLUMN public.subject.name IS 'The name of the subject';
COMMENT ON COLUMN public.subject.abbr IS 'The abbreviation of the name of the subject name.';
COMMENT ON COLUMN public.subject.season IS 'The season for which this subject is offered';
COMMENT ON COLUMN public.subject.year IS 'The year this subject is currently offered. Subjects are not guaranteed to be offered every year.';
COMMENT ON COLUMN public.subject.topic_name IS 'The topic name of this subject. Used to build topic url';
COMMENT ON COLUMN public.subject.updated_at IS 'Time this row was updated';
COMMENT ON TABLE public.subject  IS 'Contains the subject offered from a particular university';
