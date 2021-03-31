
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
        date: "Saturday 30 January, 2021",
        content: "All old students come into halls of residence"
    },
    {
        date: "Monday 1 February, 2021",
        content: "First Semester Lectures continue "
    },
    {
        date: "Monday 8 March, 2021",
        content: "Examinations begin in Faculties of Education and Pharmacy"
    },
    {
        date: "Saturday 13 March",
        content: "2021-CED Examinations"
    },
    {
        date: "Monday 15 to Saturday 27 March, 2021",
        content: "Other Faculty Examinations (Two weeks)"
    },
    {
        date: "Monday 29 to Thursday 1 April 2021",
        content: "General Studies Examinations"
    },
    {
        date: "Monday 5 April, 2021",
        content: "Second Semester Lectures begin"
    },
    {
        date: "Friday 28 May, 2021",
        content: "Second Semester Lectures end Monday 31 May, 2021 - Examinations begin in Faculties of Education and Pharmacy"
    },
    {
        date: "Saturday 5 June, 2021",
        content: "CED Examinations"
    }
    ,
    {
        date: "Monday to Saturday 19 June, 2021",
        content: "Other Faculty Exuminations (Two weeks)"
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