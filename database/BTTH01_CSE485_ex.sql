----------- a --------------
SELECT * FROM baiviet,theloai
WHERE baiviet.ma_tloai = theloai.ma_tloai
AND ten_tloai LIKE "Nhac tru tinh"



----------- b ---------------
SELECT * FROM baiviet,tacgia
WHERE baiviet.ma_tgia = tacgia.ma_tgia
AND ten_tgia = "Nhacvietplus"


------------ d ----------------
SELECT ma_bviet,ten_bviet,ten_bhat,ten_tgia,ten_tloai,ngayviet 
FROM baiviet,theloai,tacgia
WHERE baiviet.ma_tloai = theloai.ma_tloai
AND baiviet.ma_tgia = tacgia.ma_tgia

------------- g ----------------

SELECT * FROM baiviet
WHERE baiviet.ten_bhat LIKE '%yêu%' 
	  OR baiviet.ten_bhat LIKE '%thương%' 
    OR baiviet.ten_bhat LIKE '%anh%' 
    OR baiviet.ten_bhat LIKE '%em%' 

-------------- h ---------------

SELECT * FROM baiviet
WHERE baiviet.tieude LIKE '%yêu%' 
	  OR baiviet.tieude LIKE '%thương%' 
    OR baiviet.tieude LIKE '%anh%' 
    OR baiviet.tieude LIKE '%em%' 
    OR baiviet.ten_bhat LIKE '%yêu%' 
	  OR baiviet.ten_bhat LIKE '%thương%' 
    OR baiviet.ten_bhat LIKE '%anh%' 
    OR baiviet.ten_bhat LIKE '%em%' 

