
const calendar_list = document.querySelector('.academic_calendar_list')


let calendar = [
    /*{
        date: "06/01/2020",
        content: "New students come into residence for 2019/2020 Academic Session"
    },
    {
        date: "07/01/2020",
        content: "Clearance begin for new students"
    },
    {
        date: "19/01/2020",
        content: "Old students come into residence for 2019/2020 Academic Session"
    },
    {
        date: "20/01/2020",
        content: "Lectures begin for all students 1st Semester of  2019/2020 Academic Session"
    },
    {
        date: "20/02/2020",
        content: "Students go on mid-semester break"
    },
    {
        date: "12/04/2020",
        content: "Students return to campus from mid-semester break to continue Academic activities"
    },
    {
        date: "03/05/2020",
        content: "Deadline for registration and payment of school charges for 2019/2020 Academic"
    },*/
    {
        date: "10/08/2021",
        content: "Virtual Matriculation Exercise for fresh Students"
        
    },
    {
        date: "12/08/2021",
        content: "Virtual Orientation for fresh Students"
    },
    {
        date: "15/08/2021",
        content: "Old Students come into halls of residence"
    },
    {
        date: "16/08/2021 – 03/09/2021",
        content: "Registration of Courses and payment of School Charges begins and closes on Friday 3rd September, 2021 (Three weeks)"
    },
    {
        date: "23/08/2021",
        content: "First Semester Lectures begin for all Students"
    },
    {
        date: "29/10/2021",
        content: "First Semester Lectures end for all Students"
    },
    {
        date: "01/11/2021 – 05/11/2021",
        content: "Revision (5 days)"
    }
    ,
    {
        date: "08/11/2021",
        content: "Examinations begin in Faculties of Education, Pharmacy, Physical Sciences, Life Sciences and Engineering"
    },
    {
        date: "13/11/2021",
        content: "CED Examinations"
    }
    ,
    {
        date: "15/11/2021 – 27/11/2021",
        content: "Other Faculty Examinations (two weeks)"
    }
]

calendar.forEach(({date, content}, i) => {
    const slide = document.createElement('p');
   
    const hr =  document.createElement('hr');
    const calendar_date = document.createElement('h6')
    calendar_date.textContent = date

   
    const content_content = document.createElement('p')
    content_content.textContent = content


    slide.appendChild(calendar_date)
    slide.appendChild(content_content)
    slide.appendChild(hr)
    calendar_list.appendChild(slide)
})

/* next_btn.addEventListener('click', () => {
    const active_slide = document.querySelector('.slider__slide.active')
    let nextSibling = active_slide.nextElementSibling

    if (nextSibling == null) {
        nextSibling = first_slide
    }

    if (nextSibling.classList.contains('slider__slide')) {
        active_slide.classList.remove('active')
        nextSibling.classList.add('active')
    }
})

prev_btn.addEventListener('click', () => {
    const active_slide = document.querySelector('.slider__slide.active')
    let nextSibling = active_slide.previousElementSibling

    if (nextSibling == null || !nextSibling.classList.contains('slider__slide')) {
        nextSibling = last_slide
    }

    if (nextSibling.classList.contains('slider__slide')) {
        active_slide.classList.remove('active')
        nextSibling.classList.add('active')
    }
})

function TimerHandler () {
    const active_slide = document.querySelector('.slider__slide.active')
    let nextSibling = active_slide.nextElementSibling

    if (nextSibling == null) {
        nextSibling = first_slide
    }

    if (nextSibling.classList.contains('slider__slide')) {
        active_slide.classList.remove('active')
        nextSibling.classList.add('active')
    }
}

 */