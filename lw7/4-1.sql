select 
	c_course.count_course,
    course.course_name
from
	(	
    select
		count(courses_student.course_id) as 'count_course',
        course_id
	from 
		lw.courses_student
	group by
		course_id
	) as c_course
    
left join 
	lw.course
on 
	c_course.course_id = lw.course.course_id
where
	c_course.count_course >= 5