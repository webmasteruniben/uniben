const next_btn = document.querySelector('#next')
const prev_btn = document.querySelector('#prev')
const slider = document.querySelector('.slider')
let first_slide
let last_slide
var slidertimer = setInterval(TimerHandler, 8000);

let projects = [
     {
        title: "247 Inaugural Lecture",
        type: "Inaugural Lectures",
        content: "The Vice-Chancellor, Prof Lilian Imuetinyan Salami on behalf of the University Senate invites all Staff, Students and the general public to the 247th  Inaugural Lecture Series of the University of Benin",
        image: "./assets/images/slider/inaugural247.png",
        link: "https://news.uniben.edu/index.php/2021/06/24/invitation-to-the-247th-inaugural-lecture/",
        linktitle: "Read More"
    },
    {
        title: "ADMISSION INTO PART-TIME DEGREE PROGRAMMES",
        type: "Admission",
        content: "ADMISSION INTO PART-TIME DEGREE PROGRAMMES OF THE UNIVERSITY OF BENIN 2020/2021 SESSION",
        image: "./assets/images/slider/parttime2021.png",
        link: "https://news.uniben.edu/index.php/2021/06/23/admission-into-part-time-degree-programmes-of-the-university-of-benin-2020-2021-session/",
        linktitle: "Read More"
    },
    {
        title: "UNIBEN Online Clearance",
        type: "Students",
        content: "NEWLY ADMITTED STUDENTS FOR 2020/2021 (UTME AND DE) REQUIREMENTS FOR ONLINE CLEARANCE",
        image: "./assets/images/slider/clearancenews.JPG",
        link: "https://uniben.waeup.org/",
        linktitle: "Read More"
    },   
    {
        title: "The Biomedical Explorer",
        type: "Research News",
        content: "A Textbook of Biomedical Research Innovation",
        image: "./assets/images/slider/biomed.PNG",
        link: "https://news.uniben.edu/index.php/2021/03/30/medical-and-life-sciences-education-receives-boost/",
        linktitle: "Read More"
    },
    {
        title: "FIRST ANNIVERSARY MEMORIAL LECTURE",
        type: "Live Event",
        content: "FIRST ANNIVERSARY MEMORIAL LECTURE IN HONOUR OF CHIEF (PROF.) EMMANUEL U. EMOVON",
        image: "./assets/images/slider/emovon.jpg",
        link: "https://news.uniben.edu/index.php/2021/02/18/first-anniversary-memorial-lecture-in-honour-of-chief-prof-emmanuel-u-emovon/",
        linktitle: "Watch The Programme"
    },
    {
        title: "UniBEN Ugbowo Campus",
        type: "Photos around the Campus",
        content: "Viewing Uniben from the Main Entrance.",
        image: "./assets/images/slider/uniben_welcome.JPG",
        link: "#",
        linktitle: "Click Here to Read More"
    },
    {
        title: "2019/2020 VIRTUAL MATRICULATION CEREMONY",
        type: "Matriculation Ceremony",
        content: "Watch the Matriculation ceremony for 2019/2020.",
        image: "./assets/images/slider/uniben_matric_virtual.JPG",
        link: "https://news.uniben.edu/index.php/2020/09/12/watch-live2019-2020-virtual-matriculation-ceremony/",
        linktitle: "Click Here to Watch"
    },
    {
        title: "Ugbowo Campus Main Gate",
        type: "Photos around the Campus",
        content: "Welcome to The University of Benin",
        image: "./assets/images/slider/uniben_gate2.png",
        link: "#",
        linktitle: "Click to Read More"
    },
    {
        title: "2020/2021 ADMISSION SCREENING EXERCISE",
        type: "Application",
        content: "Apply Now to study at UNIBEN",
        image: "./assets/images/slider/matriculating students.JPG",
        link: "https://news.uniben.edu/index.php/2020/08/17/2020-2021-admission-screening-exercise/",
        linktitle: "Click Here to Read More"
    },
    {
        title: "2019/2020 Convocation",
        type: "Graduating Students",
        content: "Our students are preprared to serve humanity",
        image: "./assets/images/slider/3.jpg",
        link: "#",
        linktitle: "Click to Read More"
    }
]

projects.forEach(({title, type, content, image, link, linktitle}, i) => {
    const slide = document.createElement('div');
    slide.classList.add('slider__slide')
    slide.style.backgroundImage = "url('" + image + "')"
    if (i == 0) {
        first_slide = slide
        slide.classList.add('active')
    } else if (i + 1 == projects.length) {
        last_slide = slide
    }

    const content_link = document.createElement('a')
    content_link.href =  link; // Insted of calling setAttribute 
    content_link.innerHTML = linktitle // <a>INNER_TEXT</a>
    content_link.classList.add("secondary-menu-link")
    content_link.classList.add("secondary-menu-link-slider")
    
    const space_slider1 = document.createElement('div')
   
    space_slider1.innerHTML = '<br>'

    const slide_content = document.createElement('div')
    slide_content.classList.add('slider__content')

    const content_title = document.createElement('h3')
    content_title.classList.add('slider__title')
    content_title.textContent = title

    const content_type = document.createElement('span')
    content_type.textContent = type

    const content_content = document.createElement('div')
    content_content.classList.add('slider__desc')
    content_content.textContent = content

    content_title.appendChild(content_type)
    slide_content.appendChild(content_title)
    slide_content.appendChild(content_content)
    slide_content.appendChild(space_slider1)
if (link != '#') {
        slide_content.appendChild(content_link)
    }

    
    slide.appendChild(slide_content)

    slider.appendChild(slide)
})

next_btn.addEventListener('click', () => {
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

