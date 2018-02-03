select 
	student.student_name,
    course.course_name
from
	lw.courses_student
left join 
	lw.course
on 
	courses_student.course_id = lw.course.course_id
left join 
	lw.student
on 
	courses_student.student_id = lw.student.student_id
where
	courses_student.student_id = 1