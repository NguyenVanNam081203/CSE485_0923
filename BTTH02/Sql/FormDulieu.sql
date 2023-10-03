create database  BTT01B;
use  BTT01B;

create table tagia(
	ma_tgia int unsigned not null AUTO_INCREMENT  primary key,
    ten_tgia varchar(100) not null,
    hinh_tgia varchar(100)
);

create table theloai(
	ma_tloai int unsigned not null AUTO_INCREMENT primary key,
    ten_tloai varchar(50) not null
);
create table users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email varchar(50) NOT NULL,
    pass VARCHAR(255) NOT NULL
);

create table baiviet(
	ma_bviet int unsigned not null AUTO_INCREMENT primary key,
    tieude varchar(200) not null,
    ten_bhat varchar(100) not null,
    ma_tloai int unsigned not null,
    tomtat text  not null,
    noidung text,
    ma_tgia int unsigned not null,
    ngayviet datetime not null DEFAULT CURRENT_TIMESTAMP,
    hinhanh varchar(200),
    FOREIGN KEY (ma_tgia) REFERENCES tagia(ma_tgia),
    FOREIGN KEY (ma_tloai) REFERENCES theloai(ma_tloai)
);

INSERT INTO users (username,email, pass) VALUES
('admin','nguyenvannam@gmail.com', '000'),
('nam','nguyenvanNam@gmail.com','123'
);

INSERT INTO tagia ( ten_tgia, hinh_tgia) VALUES
( 'Nguyễn Văn Giả', 'ChuyenTinhCayVaLa.jpg'),
( 'Nguyễn Văn A','Oicuocsongmenthuong.jpg'),
( 'Nguyễn Văn B','Longme.jpg'),
( 'Nguyễn Văn C','Phoipha.jpg'),
( 'Nguyễn Văn D','Noitinhyeubatdau.jpg'
);


INSERT INTO theloai ( ten_tloai) VALUES
( 'Nhạc trữ tình'),
('Nhạc cải lương'),
('Nhạc tình thương'),
('Nhạc buồn'),
('Nhạc tình yêu'
);


INSERT INTO baiviet ( tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) VALUES
( 'Cảm nhận về bài hát Cây và gió', 'Cây và gió', 1, 'Em và anh, hai đứa quen nhau thật tình cờ. Lời hát của anh từ bài hát "Cây và gió" đã làm tâm 
                                            hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận 
                                            sâu trong tim mình.Bởi vì em nhút nhát , em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em 
                                            không dám đối diện với chính mình.', 'Em và anh, hai đứa quen nhau thật tình cờ. Lời hát của anh từ bài hát "Cây và gió" đã làm tâm 
                                            hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận 
                                            sâu trong tim mình.Bởi vì em nhút nhát , em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em 
                                            không dám đối diện với chính mình.', 1, 'ChuyenTinhCayVaLa.jpg'),
( 'Cảm nhận về bài hát Cuộc sống mến thương', 'Cuộc sống mến thương', 2, 'Bài hát Cuộc sống mến thương thuộc thể loại Nhạc cải lương.', 'Nội dung bài viết về bài hát Cuộc sống mến thương.', 2, 'Oicuocsongmenthuong.jpg'),
( 'Bài viết về bài hát Lòng mẹ', 'Lòng mẹ', 3, 'Bài hát Lòng mẹ thuộc thể loại Nhạc tình thương.', 'Nội dung bài viết về bài hát Lòng mẹ .', 3, 'Longme.jpg'),
( 'Bài viết về bài hát Phôi pha', 'Phôi pha', 4, 'Bài hát Phôi pha thuộc thể loại Nhạc buồn.', 'Nội dung bài viết về bài hát Phôi pha.', 4, 'Phoipha.jpg'),
( 'Bài viết về bài hát Nơi tình yêu bắt đầu', 'Nơi tình yêu bắt đầu',5 , 'Bài hát Nơi tình yêu bắt đầu thuộc thể loại Nhạc tình yêu.', 'Nội dung bài viết về bài hát Nơi tình yêu bắt đầu.', 5, 'Noitinhyeubatdau.jpg'
);


drop table tagia;
drop table theloai;
drop table baiviet;
drop table users;

select *from users;
select *from baiviet;
select *from theloai;
select *from tagia;

select * from tagia join baiviet on tagia.ma_tgia = baiviet.ma_tgia;

select * from tagia join baiviet on tagia.ma_tgia = baiviet.ma_tgia where ma_bviet = 2 ;

select * from  baiviet join theloai on baiviet.ma_tloai = theloai.ma_tloai join tagia on tagia.ma_tgia = baiviet.ma_tgia where ma_bviet = 1 ;

select * from tagia join baiviet on tagia.ma_tgia = baiviet.ma_tgia;

select * from  baiviet join theloai on baiviet.ma_tloai = theloai.ma_tloai join tagia on tagia.ma_tgia = baiviet.ma_tgia where ma_bviet = 2;

select * from users where usersname = 'admin' and pass = '000';
UPDATE theloai SET  ten_tloai = 'Ten the loai moi' WHERE ma_tloai = 1;

DELETE FROM theloai WHERE ma_tloai = 5;

select * from  baiviet join theloai on baiviet.ma_tloai = theloai.ma_tloai join tagia on tagia.ma_tgia = baiviet.ma_tgia where ma_bviet = 2;

select * from users where usersname = 'admin' and pass = '000';
UPDATE theloai SET  ten_tloai = 'Ten the loai moi' WHERE ma_tloai = 1;

DELETE FROM theloai WHERE ma_tloai = 5;

select * from users where username = 'nam' and pass = '123';