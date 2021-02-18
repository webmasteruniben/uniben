
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
        date: "06/01/2020",
        content: "New students come into residence for 2019/2020 Academic Session"
    },
    {
        date: "07/01/2020",
        content: "End of First semester lectures for 2019/2020 Academic "
    },
    {
        date: "01/06/2020 – 05/06/2020",
        content: "Revision (one week)"
    },
    {
        date: "06/06/2020",
        content: "Examinations begin in Faculties Education/Pharmacy/Engineering/Life Sciences/Physical Sciences/Environmental Sciences"
    },
    {
        date: "10/06/2020",
        content: "CED Examination"
    },
    {
        date: "03/05/2020",
        content: "Deadline for registration and payment of school charges for 2019/2020 Academic"
    },
    {
        date: "11/06/2020 – 24/06/2020",
        content: "Other Faculties Examinations begin (Two weeks)"
    },
    {
        date: "25/06/2020 – 30/06/2020",
        content: "General Studies Examinations (CBT)"
    },
    {
        date: "01/07/2020 – 14/07/2020",
        content: "Students go down for first semester break (Two weeks break)"
    }
    ,
    {
        date: "SECOND SEMESTER",
        content: "2019/2020"
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