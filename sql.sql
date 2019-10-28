create table border(
    id int(11) NOT NULL AUTO_INCREMENT,
    title varchar(45) NOT NULL,
    description text NOT NULL,
    authod_id int(11) NOT NULL,
    likes int(11) NULL,
    created datetime NOT NULL,
    PRIMARY KEY(id)
) engine=InnoDB;

insert into border(
    title, description, authod_id, likes, created
) VALUES('test','this is test', 1, 0, NOW())

create table authod(
    id int(11) NOT NULL AUTO_INCREMENT,
    name varchar(30) NOT NULL,
    profile varchar(200) NULL,
    PRIMARY KEY(id)
);

insert into authod (name, profile) VALUES('jingyu', 'developer');
insert into authod (name, profile) VALUES('jinwoong', 'developer');
insert into authod (name, profile) VALUES('aly', 'Art');

alter table topic add authod_id int(11);

update topic set authod_id = 1 where id = 13;
update topic set authod_id = 2 where id = 14;
update topic set authod_id = 2 where id = 15;
update topic set authod_id = 3 where id = 17;

ALTER TABLE border CHANGE COLUMN authod_id author_id int(11) NOT NULL;