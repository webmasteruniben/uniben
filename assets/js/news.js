
const section = document.querySelector('.section-list')


let news = [
    {
        title: "UNIBEN 2020/2021 VIRTUAL MATRICULATION",
        type: "NEWS",
        content: "Watch the proceedings of the 2020/2021 Matriculation Event live here. August 10 2021, 10.30 a.m.",
        image: "./assets/img/news/matric_2021_news.jpg",
        alt: "UNIBEN 2020/2021 VIRTUAL MATRICULATION",
        link: "https://news.uniben.edu/index.php/2021/08/08/watch-live-proceedings-of-the-2021-matriculation-ceremony/",
        linktitle: "Click Here to Watch"
    },
    {
        title: "FIRST ANNIVERSARY MEMORIAL LECTURE",
        type: "NEWS",
        content: "FIRST ANNIVERSARY MEMORIAL LECTURE IN HONOUR OF CHIEF (PROF.) EMMANUEL U. EMOVON CON FAS KSP JP. Time: Feb 18, 2021 11:00 AM West Central Africa.",
        image: "./assets/img/news/evo.jpg",
        alt: "FIRST ANNIVERSARY MEMORIAL LECTURE",
        link: "https://news.uniben.edu/index.php/2021/02/18/first-anniversary-memorial-lecture-in-honour-of-chief-prof-emmanuel-u-emovon/",
        linktitle: "Click Here to Watch"
    },
    {
        title: "RESUMPTION OF UNIBEN SANDWICH PROGRAMME FOR 2019/2021",
        type: "NEWS",
        content: "The University of Benin has resumed the Sandwich Programme for the 2019/2020 contact. A schedule released by the Faculty of Education lists the date for students' registration and documentation as 2nd August, 2021",
        image: "./assets/img/news/matric.JPG",
        alt: "RESUMPTION OF UNIBEN SANDWICH PROGRAMME",
        link: "http://myuniben.org/",
        linktitle: "Visit Portal"
    },
    {
        title: "UNIBEN AT 50: FOUNDERS DAY",
        type: "NEWS",
        content: "Watch Golden Jubilee of the University as UNIBEN marks 50 years. Watch the Event and view the gallery photos.",
        image: "./assets/img/news/vcfoundersday.JPG",
        alt: "UNIBEN FOUNDERS DAY",
        link: "https://news.uniben.edu/index.php/2020/11/20/live-event-50th-founders-day/",
        linktitle: "Click Here to watch"
    },
    {
        title: "Transcripts",
        type: "NEWS",
        content: "Our esteemed students can now apply for transripts on the student portal.",
        image: "./assets/img/news/Transcripts.jpg",
        alt: "Transcripts Application",
        link: "https://uniben.waeup.org/applicants/checktranscript",
        linktitle: "Click to Apply"
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