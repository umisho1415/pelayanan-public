
1.
-Backup 
    mysqldump -u [username] -p [database_name] > [backup_file].sql

-Restore
    mysql -u root -p [database_name] < [backup_file].sql

2.
-DDL untuk menabahkan table parent ’pelayanan_publik’
CREATE TABLE pelayanan_publik (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(50) NOT NULL,
    bidang VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-DDL untuk menabahkan table child 1 ’hotel’
CREATE TABLE ’hotel’ (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pub_id INT NOT NULL,
    total_kamar VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);	

-DDL untuk menabahkan table child 2 ’rs’
CREATE TABLE ’rs’ (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pub_id CHAR(225) NOT NULL,
    total_kamar VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

3.
insert
- CREATE PROCEDURE InsertPelayananPublik(
    IN in_code VARCHAR(50),
    IN in_bidang VARCHAR(50),
)
BEGIN
    INSERT INTO pelayanan_publik (code, bidang)
    VALUES (code, bidang);
END

get
- CREATE PROCEDURE GetAllPelayananPublik()
BEGIN
    SELECT * FROM pelayanan_publik;
END

updated
- CREATE PROCEDURE UpdatePelayananPublik(
    IN input_id INT,
    IN input_code VARCHAR(50),
    IN input_bidang VARCHAR(50)
)
BEGIN
    UPDATE pelayanan_publik
    SET code = input_code,
        bidang = input_bidang
    WHERE id = input_id;
END

CREATE PROCEDURE DeletePelayanPublik(
    IN input_id INT
)
BEGIN
    DELETE FROM pelayanan_publik WHERE id = input_id;
END

5.
WITH cte_rs AS (
	SELECT * FROM rs
) 
SELECT 
	pelayanan_publik.*,
	cte_rs.total_kamar
FROM pelayanan_publik
JOIN cte_rs
ON pelayanan_publik.id = cte_rs.pub_id

WITH cte_hotel AS (
	SELECT * FROM hotel 
) 
SELECT 
	pelayanan_publik.*,
	cte_hotel.total_kamar
FROM pelayanan_publik
JOIN cte_hotel 
ON pelayanan_publik.id = cte_hotel.pub_id