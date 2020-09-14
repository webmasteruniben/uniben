const next_btn = document.querySelector('#next')
const prev_btn = document.querySelector('#prev')
const slider = document.querySelector('.slider')
let first_slide
let last_slide
var slidertimer = setInterval(TimerHandler, 8000);

let projects = [
    {
        title: "2019/2020 VIRTUAL MATRICULATION CEREMONY",
        type: "Matriculation Ceremony",
        content: "Matriculation ceremony for 2019/2020 session holds virtually. Date: Tuesday 15, 2020. Time: 10:00 AM",
        image: "./assets/images/slider/matric_virtual_slider.jpg",
        link: "https://news.uniben.edu/index.php/2020/09/12/watch-live2019-2020-virtual-matriculation-ceremony/",
        linktitle: "Click Here to Link Up"
    },
    {
        title: "Welcome",
        type: "University of Benin",
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
        title: "The First of Many to Come",
        type: "Ongoing Major Projects",
        content: "TETFUND COMMENCES CONSTRUCTION OF 28-EXECUTIVE-ROOM INTERNATIONAL HOSTEL",
        image: "./assets/images/slider/tetfund hostel project.jpeg",
        link: "https://news.uniben.edu/index.php/2020/07/10/tetfund-commences-construction-of-28-executive-room-international-hostel-at-uniben/",
        linktitle: "Click to Read More"
    },
    {
        title: "Uniben Orientation",
        type: "New Students",
        content: "We welcome our new Students",
        image: "./assets/images/slider/2.jpg",
        link: "#",
        linktitle: "Click to Read More"
    },
    {
        title: "2019/2020 Convocation",
        type: "Graduating Students",
        content: "Our students are preprared to serve humanity",
        image: "./assets/images/slider/3.jpg",
        link: "#",
        linktitle: "Click to Read More"
    },
    {
        title: "Uniben sets the pace",
        type: "Serene Environment",
        content: "The University environment is conducive for learning",
        image: "./assets/images/slider/4.jpg",
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

