
const section = document.querySelector('.section-list')


let news = [
    {
        title: "Pope Francis Appoints UNIBEN Professor",
        type: "NEWS",
        content: "Pope Francis appoints UNIBEN Professor, Kokunre Agbontaen-Eghafona, to the prestigious Pontifical Academy of Social Sciences.",
        image: "./assets/img/news/Prof Eghafona.jpg",
        alt: "Professor Kokunre Agbontaen-Eghafona",
        link: "https://news.uniben.edu/index.php/2020/07/12/pope-francis-appoints-uniben-professor/",
        linktitle: "Click to Read More"
    },
	{
        title: "First Virtual Training Workshop",
        type: "RESEARCH",
        content: "Date is 4th and 5th of August 2020 from 10am to 1pm daily. Online admission starts at 9:30am.Keep a date with us.",
        image: "./assets/img/research/dna-forensic.jpg",
        alt: "First Virtual Training Workshop",
        link: "https://news.uniben.edu/index.php/2020/07/11/first-virtual-training-workshop/",
        linktitle: "Click to Read More"
    },
    {
        title: "46th Matriculation Ceremony",
        type: "NEWS",
        content: "Students' Matriculation Ceremony in the University of Benin.",
        image: "./assets/img/news/news_image.jpg",
        alt: "46th Matriculation Ceremony",
        link: "#",
        linktitle: "Click to Read More"
    },
    {
        title: "234th Inaugural Lecture",
        type: "VIDEOS",
        content: "234 Inaugural Lecture of the University of Benin. Watch live by clicking here.",
        image: "./assets/img/videos/video_image.JPG",
        alt: "234th Inaugural Lecture",
        link: "#",
        linktitle: "Click to Read More"
    }
]

news.forEach(({title, type, content, image,alt, link, linktitle}, i) => {
    const slide = document.createElement('article');
    slide.classList.add('news-section')
    slide.classList.add('blog-left')


	const content_link = document.createElement('a')
    content_link.href =  link; // Insted of calling setAttribute 
    content_link.innerHTML = linktitle

    const div_image = document.createElement('div')
    
    div_image.classList.add('blog-left-image')

    const news_image = document.createElement('img')
    news_image.classList.add('news-blog-image')
    news_image.alt = alt
    news_image.src = image
    div_image.appendChild(news_image)
  
    const slide_content = document.createElement('div')
    slide_content.classList.add('blog-right-info')

    const content_title = document.createElement('h5')
    content_title.textContent = title

    const content_type = document.createElement('h6')
    content_type.textContent = type

   
    const content_content = document.createElement('p')
    content_content.textContent = content

    slide_content.appendChild(content_title)
    slide_content.appendChild(content_content)
	if (link != '#') {
        slide_content.appendChild(content_link)
    }
    slide_content.appendChild(content_type)

    slide.appendChild(div_image)
    slide.appendChild(slide_content)

    section.appendChild(slide)
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