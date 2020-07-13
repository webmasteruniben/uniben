
const calendar_list = document.querySelector('.academic_calendar_list')


let calendar = [
    {
        date: "25/03/2020",
        content: "Students resume academic actvities"
       
    },
    {
        date: "02/04/2020",
        content: "Students begin First Semester Examinations."
    },
    {
        date: "25/03/2020",
        content: "Students resume academic actvities"
    },
    {
        date: "02/04/2020",
        content: "Students begin First Semester Examinations."
    },
    {
        date: "25/03/2020",
        content: "Students resume academic actvities"
    },
    {
        date: "02/04/2020",
        content: "Students begin First Semester Examinations."
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