SELECT
	count(lw.track_downloads.download_id) AS 'download_count',
    user_table.user_count,
    user_table.download_time    
FROM 
    (
		select
			count(lw.track_downloads.user_id) AS 'user_count',
			lw.track_downloads.download_time
		from
			lw.track_downloads
		group by
			download_time
	) as user_table
left join
	user_table
on user_table.download_time = lw.track_downloads.download_time
group by 
	download_time