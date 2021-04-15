
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
        date: "18/04/2021",
        content: "Students return to Campus to continue Second Semester Lectures"
    },
    {
        date: "19/04/2021",
        content: "Second Semester Lectures begin"
    },
    {
        date: "11/06/2021",
        content: "Second Semester Lectures end"
    },
    {
        date: "12/06/2021 - 13/06/2021",
        content: "Revision (two days)"
    },
    {
        date: "14/06/2021",
        content: "Examinations begin in Faculties of Education and Pharmacy"
    },
    {
        date: "19/06/2021",
        content: "CED Examinations"
    },
    {
        date: "21/06/2021 - 03/07/2021",
        content: "Other Faculty Examinations (two weeks)"
    },
    {
        date: "5/07/2021 - 10/07/2021",
        content: "General Studies Examinations"
    },
    {
        date: "11/07/2021",
        content: "Students go down (End of 2019/2020 Academic Session - A week and two days)"
    }
    ,
    {
        date: "12/07/2021 - 24/07/2021",
        content: "Schools/Faculties/Institutes/Departments/Board of Studies meet to consider 2019/2020 Sessional Results"
    },
    {
        date: "26/07/2021 - 30/07/2021",
        content: "Business Committee of Senate meet to consider results for lower levels and penultimate year for 2019/2020 Academic Session"
    }
    ,
    {
        date: "2/08/2021 - 06/08/2021",
        content: "Senate meet to consider Sessional Results of final year for 2019/2020 Academic Session"
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