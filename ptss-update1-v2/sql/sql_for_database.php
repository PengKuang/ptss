<?php

//create the answer table and gradually add columns to it
CREATE TABLE answer
(
q1a VARCHAR(20),
q1b VARCHAR(20),
q1c VARCHAR(20),
q1c_event VARCHAR(200),
q1d VARCHAR(20),
q1d_other VARCHAR(200),
q2 VARCHAR(20),
q3a VARCHAR(200),
q3b VARCHAR(200)
);


ALTER TABLE answer
ADD (
q4a VARCHAR(20),
q4b VARCHAR(20),
q4c VARCHAR(20),
q5a VARCHAR(20),
q5b VARCHAR(20),
q5c VARCHAR(20),
q6a VARCHAR(20),
q6b VARCHAR(20),
q6c VARCHAR(20),
q7a VARCHAR(20),
q7b VARCHAR(20),
q7c VARCHAR(20),
q8a VARCHAR(20),
q8b VARCHAR(20),
q8c VARCHAR(20),
q9a VARCHAR(20),
q9b VARCHAR(20),
q9c VARCHAR(20),
q10a VARCHAR(20),
q10b VARCHAR(20),
q10c VARCHAR(20)
);


ALTER TABLE answer
    ADD (
    q11a VARCHAR(20),
    q11b VARCHAR(20),
    q11c VARCHAR(20),
   	q12a VARCHAR(20),
    q12b VARCHAR(20),
    q12c VARCHAR(20),
    q13a VARCHAR(20),
    q13b VARCHAR(20),
    q13c VARCHAR(20),
    q14a VARCHAR(20),
    q14b VARCHAR(20),
    q14c VARCHAR(20),
    q15a VARCHAR(20),
    q15b VARCHAR(20),
    q15c VARCHAR(20)
    );


ALTER TABLE answer
    ADD (
    q16a VARCHAR(20),
    q16b VARCHAR(20),
    q16c VARCHAR(20),
   	q17a VARCHAR(20),
    q17b VARCHAR(20),
    q17c VARCHAR(20),
    q18a VARCHAR(20),
    q18b VARCHAR(20),
    q18c VARCHAR(20),
    q19a VARCHAR(20),
    q19b VARCHAR(20),
    q19c VARCHAR(20),
    q20a VARCHAR(20),
    q20b VARCHAR(20),
    q20c VARCHAR(20)
    );


ALTER TABLE answer
    ADD (
    q21a VARCHAR(20),
    q21b VARCHAR(20),
    q21c VARCHAR(20),
    q22a VARCHAR(20),
    q22b VARCHAR(20),
    q22c VARCHAR(20),
    q23a VARCHAR(20),
    q23b VARCHAR(20),
    q23c VARCHAR(20),
    q24a VARCHAR(20),
    q24b VARCHAR(20),
    q24c VARCHAR(20)
    );


 ALTER TABLE answer
    ADD (
    q25 VARCHAR(20),
    q26 VARCHAR(20),
    q27 VARCHAR(20),
    q28 VARCHAR(20),
    q29 VARCHAR(20)
    );