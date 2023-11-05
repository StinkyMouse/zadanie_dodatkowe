create table product(
	id_produktu int not null PRIMARY KEY AUTO_INCREMENT,
	nazwa char(15) not null,
    opis varchar(50) not null,
    cena float not null,
    dostepnosc bit(1) not null
);
create table Customers(
	id_klienta int not null PRIMARY KEY AUTO_INCREMENT,
	imie char(15) not null,
    nazwisko char(15) not null,
    adres varchar(15) not null,
    e-mail varchar(15)
);
create table Orders(
	id_zamowienia int not null PRIMARY KEY AUTO_INCREMENT,
	data_zamowienia datetime not null,
    id_klienta int not null,
    id_produktu int not null
);
create table Employee(
	id_pracownika int not null PRIMARY KEY AUTO_INCREMENT,
	imie char(15) not null,
    nazwisko char(15) not null,
    stanowisko char(15) not null,
    wynagrodzenie int(5) not null

);
create table EmployeeActions(
	id_akcji int not null PRIMARY KEY AUTO_INCREMENT,
	id_pracownika int not null,
    typ_akcji varchar(30) not null,
    id_produktu int,
    id_klienta int
);

alter table EmployeeActions
add foreign key id_pracownika references Employee(id_pracownika);

alter table EmployeeActions
add foreign key id_produktu references EmployeeActions(id_produktu);

alter table EmployeeActions
add foreign key id_klienta references Customers(id_klienta);

alter table Orders
add foreign key id_klienta references Customers(id_klienta);

alter table Orders
add foreign key id_produktu references product(id_produktu);

insert into product(nazwa, opis, cena, dostepnosc)
values
    ('','','',''),
    ('','','',''),
    ('','','',''),
    ('','','',''),
    ('','','','');

insert into Customers(imie, nazwisko, adres, e-mail)
values
    ('','','',NULL),
    ('','','',''),
    ('','','',NULL),
    ('','','',NULL),
    ('','','','');

insert into Employee(imie, nazwisko, stanowisko, wynagrodzenie)
values
    ('','','',''),
    ('','','',''),
    ('','','',''),
    ('','','',''),
    ('','','','');
