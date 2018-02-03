SELECT 
	laboratory_work.dvd.title
FROM laboratory_work.dvd
LEFT JOIN laboratory_work.offer
ON laboratory_work.offer.dvd_id = laboratory_work.dvd.dvd_id
WHERE laboratory_work.offer.return_date = '0000-00-00 00:00:00' //почему не null