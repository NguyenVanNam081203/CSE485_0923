create database PhongMach;
use PhongMach;

create table Bacsi(
	id int unsigned auto_increment primary key not null,
	tenBacSi varchar(255) not null,
    chuyenKhoa varchar(255) not null
);
select *from Bacsi;
drop table Bacsi;
create table Benhnhan(
	id int unsigned auto_increment primary key not null,
    tenBenhNhan varchar(255) not null,
    ngayKham date not null,
    trieuChung text,
	idBacsi int unsigned not null,
    FOREIGN KEY (idBacsi) REFERENCES Bacsi(id)
);
drop table Benhnhan;
select*from Benhnhan;
insert into Bacsi (id, tenBacSi, chuyenKhoa) values (1, 'Oralla Poon', 'Tim');
insert into Bacsi (id, tenBacSi, chuyenKhoa) values (2, 'Erich Maryman', 'Chuan doan');
insert into Bacsi (id, tenBacSi, chuyenKhoa) values (3, 'Ives Binding', 'Sieu am');
insert into Bacsi (id, tenBacSi, chuyenKhoa) values (4, 'Ami Cowp', 'Khoa nhi');
insert into Bacsi (id, tenBacSi, chuyenKhoa) values (5, 'Gabey Hoble', 'Xet nghiem');
insert into Bacsi (id, tenBacSi, chuyenKhoa) values (6, 'Maison Kapiloff', 'Do mach');
insert into Bacsi (id, tenBacSi, chuyenKhoa) values (7, 'Ravid Order', 'Ravid');
insert into Bacsi (id, tenBacSi, chuyenKhoa) values (8, 'Shepperd Mathewson', 'Shepperd');
insert into Bacsi (id, tenBacSi, chuyenKhoa) values (9, 'Farlie Dorrins', 'Farlie');
insert into Bacsi (id, tenBacSi, chuyenKhoa) values (10, 'Ruben Perview', 'Ruben');

insert into Benhnhan (tenBenhNhan, ngayKham, trieuChung, idBacsi) values ('Natalya Scullin', '2023-07-14', 'Redford Zorer', 1);
insert into Benhnhan (tenBenhNhan, ngayKham, trieuChung, idBacsi) values ('Leeanne Kelby', '2023-02-28', 'Leta Stocken', 2);
insert into Benhnhan (tenBenhNhan, ngayKham, trieuChung, idBacsi) values ('Haily Gravenell', '2022-11-21', 'Karrie Lytle', 3);
insert into Benhnhan (tenBenhNhan, ngayKham, trieuChung, idBacsi) values ('Jobye Chesshire', '2023-04-01', 'Noell Sweatland', 4);
insert into Benhnhan (tenBenhNhan, ngayKham, trieuChung, idBacsi) values ('Andreas Gwillym', '2023-09-25', 'Clare Gianetti', 5);
insert into Benhnhan (tenBenhNhan, ngayKham, trieuChung, idBacsi) values ('Kamilah Millson', '2022-12-28', 'Bron Daynter', 6);
insert into Benhnhan (tenBenhNhan, ngayKham, trieuChung, idBacsi) values ('Rolfe Thoresby', '2023-03-07', 'Margaux Rootham', 7);
insert into Benhnhan (tenBenhNhan, ngayKham, trieuChung, idBacsi) values ('Suki Szwarc', '2023-01-04', 'Pepillo Densey', 8);
insert into Benhnhan (tenBenhNhan, ngayKham, trieuChung, idBacsi) values ('Veronike Applin', '2023-07-26', 'Rachel McPheat', 9);
insert into Benhnhan (tenBenhNhan, ngayKham, trieuChung, idBacsi) values ('Bourke Croxton', '2023-07-01', 'Annmaria Lovelace', 10);