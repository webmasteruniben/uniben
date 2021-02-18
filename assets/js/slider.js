const next_btn = document.querySelector('#next')
const prev_btn = document.querySelector('#prev')
const slider = document.querySelector('.slider')
let first_slide
let last_slide
var slidertimer = setInterval(TimerHandler, 8000);

let projects = [
    {
        title: "FIRST ANNIVERSARY MEMORIAL LECTURE",
        type: "Live Event",
        content: "FIRST ANNIVERSARY MEMORIAL LECTURE IN HONOUR OF CHIEF (PROF.) EMMANUEL U. EMOVON",
        image: "./assets/images/slider/emovon.jpg",
        link: "https://news.uniben.edu/index.php/2021/02/18/first-anniversary-memorial-lecture-in-honour-of-chief-prof-emmanuel-u-emovon/",
        linktitle: "Watch The Programme"
    },
    {
        title: "UniBEN 50th Founder's Day",
        type: "Live Event",
        content: "Join us online for the 50th Founder's Day.",
        image: "./assets/images/slider/anniv.jpg",
        link: "https://news.uniben.edu/index.php/2020/06/15/the-university-of-benin-golden-jubilee-celebration-matters-arising/",
        linktitle: "Read about Golden Jubilee: Matters Arising"
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

