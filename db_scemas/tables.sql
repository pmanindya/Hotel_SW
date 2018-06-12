CREATE TABLE IF NOT EXISTS hotel_type_master(
    id int AUTO_INCREMENT PRIMARY key,
    type_name varchar(255),
    description text
);
CREATE TABLE IF NOT EXISTS hotel_master(
    id int AUTO_INCREMENT PRIMARY key,
    hotel_type int, 
    hotel_address text,
    hotel_reg_number varchar(50),
    hotel_gst_number varchar(50),
    check_in varchar(15),
    check_out varchar(15),
    is_resturant enum('1','0'),
    is_bar enum('1','0')
);

