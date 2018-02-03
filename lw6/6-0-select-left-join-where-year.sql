SELECT 
	laboratory_work.dvd.title,
    laboratory_work.customer.first_name,
    laboratory_work.customer.second_name
FROM laboratory_work.dvd
LEFT JOIN laboratory_work.offer
ON laboratory_work.offer.dvd_id = laboratory_work.dvd.dvd_id
LEFT JOIN laboratory_work.customer
ON laboratory_work.offer.customer_id = laboratory_work.customer.customer_id
WHERE YEAR(laboratory_work.offer.offer_date) = YEAR(NOW());