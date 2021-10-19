- các bảng/model cần có:
**-1: TypeStaff:**
+ id
+ string: name
+ text: jd

**-2 :Staff:**
+ id
+ string: first name
+ string: last name
+ date: dob
+ string: address
+ string: cccd
+ int: TypeID (khóa ngoại từ bảng 1)
+ string: ma so thue
+ string: so tai khoan ngan hang
+ integer: status
+ date: createAt
+ date: updateAt
+ date:deleteAt
**-3: Jobs**
+ id
+ name
+ ID nhân viên phụ trách
+ ID nhân viên tham gia trong nhóm
+ ID người giao việc/kiểm tra tiến độ
+ ID người phê duyệt
+ date: ngày giao việc
+ date: ngày deadline dự kiến
+ date: ngày hoàn thành thực tế
+ int: dánh giá mức độ hoàn thành (từ 1 --10)
+ status

