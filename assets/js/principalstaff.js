
const section = document.querySelector('.section-list')


let principalstaff = [
/*     {
        title: "HIS ROYAL HIGHNESS, MUHAMMADU SANUSI - II",
        type: "Sarkin Kano and Chancellor, University of Benin, Nigeria",
        content: "The former governor of Central Bank of Nigeria, CBN, Emir of Kano and Chancellor, Univeristy of Benin, Nigeria (since April 30th, 2015).",
        image: "./assets/img/staff/sanusi.JPG",
        alt: "HIS ROYAL HIGHNESS, MUHAMMADU SANUSI - II",
        href: "#"
    }, */
    {
        title: "PROF. LILIAN IMUENTINYAN SALAMI",
        type: "Vice Chancellor, University of Benin, Nigeria",
        content: "Prof. L.I. Salami is the first indigenous female Vice-Chancellor, the second female Vice-Chancellor and the tenth substantive Vice-Chancellor of the University of Benin. She recieved her appointment since 2019.",
        image: "./assets/img/staff/PROF SALAMI.jpg",
        alt: "PROF. LILIAN IMUENTINYAN SALAMI",
        href: "profliliansalami.html"
    },
    {
        title: "PROF. ADESUWA ITOHAN OSAHON",
        type: "Deputy Vice Chancellor Administrator, University of Benin, Nigeria",
        content: "She became a Professor in October 2007 making her the first female Professor of Ophthalmology in UNIBEN/UBTH.",
        image: "./assets/img/staff/osahon.jpg",
        alt: "PROF. ADESUWA ITOHAN OSAHON",
        href: "profadesuwaosahon.html"
    },
    {
        title: "PROFESSOR DAVID NOSAKHARE IZEKOR",
        type: "Deputy Vice Chancellor Academics, University of Benin, Nigeria",
        content: "Professor David Nosakhare Izekor is a Professor in the Department of Forest Resources and Wildlife Management and was previously the Director of General Studies, University of Benin.",
        image: "./assets/img/staff/davidizekor.jpg",
        alt: "PROFESSOR DAVID NOSAKHARE IZEKOR",
        href: "profdavidizekor.html"
    },
    {
        title: "PROF. JOHN OGENE (Ph.D.) FSNA, FIPMD, JP",
        type: "Deputy Vice Chancellor Ekenwan, University of Benin, Nigeria",
        content: "Professor John Ogene is a Professor of Art History and Graphics in the Department of Fine and Applied Arts, University of Benin. .",
        image: "./assets/img/staff/prof ogene.jpg",
        alt: "PROF. JOHN OGENE (Ph.D.) FSNA, FIPMD, JP",
        href: "profjohnogene.html"
    }
]

principalstaff.forEach(({title, type, content, image,alt,href}, i) => {
    const slide = document.createElement('article');
    slide.classList.add('news-section')
    slide.classList.add('blog-left')


    const div_image = document.createElement('div')
    
    div_image.classList.add('blog-left-image')

    const news_image = document.createElement('img')
    news_image.classList.add('news-blog-image')
    news_image.alt = alt
    news_image.src = image
    div_image.appendChild(news_image)
  
    const slide_content_link = document.createElement('a')
    slide_content_link.href = href
    slide_content_link.title = title
    // slide_content_link.style.text-decoration = 'none'
    const slide_content = document.createElement('div')
    slide_content.classList.add('blog-right-info')

    const content_title = document.createElement('h3')
    content_title.textContent = title
    slide_content_link.appendChild(content_title)
    const content_type = document.createElement('h4')
    content_type.textContent = type

   
    const content_content = document.createElement('p')
    content_content.textContent = content

    slide_content.appendChild(slide_content_link)
    slide_content.appendChild(content_type)
    slide_content.appendChild(content_content)
    

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