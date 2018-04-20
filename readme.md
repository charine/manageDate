#Manage Date Function (PHP)

ฟังก์ชัน php สำหรับแปลงวันเดือนปีจาก คริสตศักราช เป็น พุทธศักราช และหาความต่างของวัน เดือน ปี และเวลา ซึ่งดัดแปลงและแก้ไขตามที่ได้ใช้งานจริงมาแล้ว

##How to use
**ConvertDateToThai** - ฟังก์ชันสำหรับแปลงวันเดือนปี จาก คริสตศักราช เป็น พุทธศักราช

เริ่มเรียกใช้ไฟล์โดยการ include เข้ามาในไฟล์ php ที่จะใช้ในการคำนวณ
แล้วเรียกใช้ฟัวก์ขัน โดยใส่วันเดือนปี และลักษณะของวันที่

```
//include file date.func.php
include 'date.func.php';

//call function and put date value want to convert
ConvertDateToThai("2018-04-20","mini");  
```