use Jenilkumar200514591;

CREATE TABLE wedding(
                           id int NOT NULL AUTO_INCREMENT,
                           f_name varchar(100) NOT NULL,
                           l_name varchar(100) NOT NULL,
                           b_date varchar(10) NOT NULL,
                           b_place varchar(100) NOT NULL,
                           age varchar(10) NOT NULL,
                           blood_group varchar(10) NOT NULL,
                           caste varchar(100) NOT NULL,
                           religion varchar(100) NOT NULL,
                           education varchar(100) NOT NULL,
                           occupation varchar(100) NOT NULL,
                           address varchar(100) Not NULL,
                           contact varchar(100) Not NULL,
                           PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

insert into wedding(f_name, l_name, b_date, b_place, age, blood_group, caste, religion, education, occupation, address, contact)
values ("Jenil", "Shah", "15/07/2003", "Navsari", "18", "o-", "Hindu", "Jain", "12 pass", "student", "4 pg garden", "1234567890");

select * from wedding;

drop table wedding;