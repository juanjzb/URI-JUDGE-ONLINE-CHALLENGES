-- 2602 : 
select name from customers where state = 'RS';
-- 2603 : 
select name, street from customers where city='Porto Alegre';
-- 2604 : 
select id, name from products where price < 10 OR price > 100;