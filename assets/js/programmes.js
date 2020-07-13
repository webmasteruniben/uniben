const section = document.querySelector('.section-list')


let programmes = [
    {
        title: "JUPEB",
        description: "Joint University Prelimenariy Examination Board.",
        details: "All Subjects combinations to gain admission into the undergraduate programmes in the University.",
        
    },
    {
        title: "DIPLOMA",
        description: "Diploma Programmes.",
        details: "Maritime and Informationatin Technology; Nursing Services; Health Services.",
    },
    {
        title: "UNDERGRADUATE PROGRAMMES",
        description: "Full Time",
        details: "Agriculture; Arts; Basic Medical Sciences; Dentistry; Education; Engineering; Law; Life Sciences Medicine; Pharmacy; Physical Sciences; Social Sciences.",
    },
    {
        title: "UNDERGRADUATE PROGRAMMES",
        description: "Part Time and Sandwich Programmes.",
        details: "Computer Science; Enviremental Studies; Political Science; Social Works; Naking and Finance; Accointing.",
    },
    {
        title: "UNDERGRADUATE PROGRAMMES",
        description: "Part Time and Sandwich Programmes.",
        details: "All Fields in Education.",
    },
    {
        title: "POSTGRADUATE PROGRAMMES",
        description: "Part Time and Full Time.",
        details: "",
    }
]

programmes.forEach(({title, description, details}, i) => {
    const slide = document.createElement('article');
    slide.classList.add('news-section')
    slide.classList.add('blog-left')
     
    const slide_content = document.createElement('div')
    slide_content.classList.add('blog-right-info')

    const content_title = document.createElement('h3')
    content_title.textContent = title

    const content_description = document.createElement('h4')
    content_description.textContent = description
      
    const content_details = document.createElement('p')
    content_details.textContent = details

    slide_content.appendChild(content_title)
    slide_content.appendChild(content_description)
    slide_content.appendChild(content_details)
    
   
    slide.appendChild(slide_content)

    section.appendChild(slide)
})
