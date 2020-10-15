
const section = document.querySelector('.section-list')


let news = [
    {
        title: "UNIBEN ALUMNI ASSOCIATION DONATES BOREHOLES TO UNIVERSITY",
        type: "UPDATE",
        content: "Alumni President assures UNIBEN VC Of donation of coordinated projects.",
        image: "./assets/img/news/alumni logo.jpg",
        alt: "UNIBEN ALUMNI ASSOCIATION",
        link: "https://news.uniben.edu/index.php/2020/10/15/uniben-alumni-association-donates-boreholes-to-university/",
        linktitle: "Click to Read More"
    },
    {
        title: "UNIBEN 2019/2020 VIRTUAL MATRICULATION CEREMONY",
        type: "NEWS",
        content: "Watch The matriculation ceremony for 2019/2020.",
        image: "./assets/img/news/uniben_virtual_matric.JPG",
        alt: "2019/2020 VIRTUAL MATRICULATION CEREMONY",
        link: "https://news.uniben.edu/index.php/2020/09/12/watch-live2019-2020-virtual-matriculation-ceremony/",
        linktitle: "Click Here to watch"
    },
    {
        title: "UNIBEN CBT Practice Test 2020/2021",
        type: "NEWS",
        content: "Practice CBT-Styled Text for Post UTME, and other related exams questions to  help you prepare for your exams as you set out on your quest for admission into university",
        image: "./assets/img/news/computer cbt.jpg",
        alt: "UNIBEN CBT Practice Test",
        link: "https://uniben.waeup.org/applicants/cbt2020/",
        linktitle: "Click Here to Apply"
    },
    {
        title: "2020/2021 ADMISSION SCREENING EXERCISE",
        type: "NEWS",
        content: "The  University  of  Benin  (UNIBEN)  Admission  Screening  Exercise  (Post  UTME)  for  2020/2021 Academic Session will take place between Monday, 23rd November, 2020 and  Tuesday,  8th  December,  2020.",
        image: "./assets/img/news/matric.JPG",
        alt: "ADMISSION SCREENING EXERCISE",
        link: "https://uniben.waeup.org/applicants/ase2020/index",
        linktitle: "Click Here to Apply"
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