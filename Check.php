php artisan serve --host=0.0.0.0 --port=9093

Users -> personnel, active

https://github.com/yoeunes/toastr


ALTER TABLE variety ADD AltVarieties varchar(100);
ALTER TABLE variety ADD InStock tinyint(1);
update variety set InStock = 1;
update variety set AltVariety = "";
