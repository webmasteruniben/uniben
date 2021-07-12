const section = document.querySelector('.section-list')


let programmes = [{
        title: "Faculty of Arts",
        description: "The Following are a list of accredited Deppartments in the Faculty of Arts",
        details: "English & Literature",
        details1: "Foreign Languages",
        details2: "Linguistics  Studies",
        details3: "History and International Studies",
        details4: "Religion",
        details5: "Philosophy",
        details6: "Theatre Arts and Mass Communication",
        details7: "Fine and Applied Arts"
    },
    {
        title: "Faculty of Education",
        description: "The Following are a list of accredited Departments in the Faculty of Education.",
        details: "Vocational and Technical Education",
        details1: "Adult and Formal Education",
        details2: "Educational Psychology and Curriculum Studies",
        details3: "Educational Evaluation and Counseling Psychology",
        details4: "Health and Environmental Education",
        details5: "Human Kinetics and Sports Science",
        details6: "Educational Management",
        details7: "Educational Foundation"
    },
    {
        title: "Basic Medical Science",
        description: "The Following are a list of accredited Departments in Basic Medical Science.",
        details: "Anatomy",
        details1: "Medical Biochemistry",
        details2: "Physiology",
        details3: "Medical Lab. Science",
        details4: "Nursing Science",
        details5: "Physiotherapy",
        details6: "Radiography."
    },


    {
        title: "Faculty of Engineering",
        description: "The Following are a list of accredited Departments in the Faculty of Engineering.",
        details: "Production Engineering",
        details1: "Mechanical Engineering",
        details2: "Civil Engineering",
        details3: "Electrical and Electronic Engineering",
        details4: "Computer Engineering",
        details5: "Chemical Engineering",
        details6: "Petroleum Engineering."
    },

    {
        title: "Faculty of Life Sciences",
        description: "The Following are a list of accredited Departments in the Faculty of Life Sciences.",
        details: "Geomatics Biochemistry",
        details1: "Optometry",
        details2: "Plant and Biotechnology",
        details3: "Microbiology",
        details4: "Animal and Environmental Biology",
        details5: "Science Laboratory Technology",
        details6: "Environmental Management and Toxicology"
    },
    {
        title: "Faculty of Agriculture",
        description: "The Following are a list of accredited Departments in the Faculty of Agriculture",
        details: "Agricultural Economics & Extention Services",
        details1: "Animal Science",
        details2: "Crop Science",
        details3: "Soil and Land Resource Management",
        details4: "Aquaculture and  Fisheries Management",
        details5: "Forestry Resource & Wild Life Management"

    },


    {
        title: "Faculty of Physical Sciences",
        description: "The Following are a list of accredited Departments in the Faculty of Physical Sciences.",
        details: "Chemistry",
        details1: "Geology",
        details2: "Physics",
        details3: "Computer Science",
        details4: "Mathematics",
        details5: "Statistics"
    },
    {
        title: "Faculty of Social Sciences",
        description: "The Following are a list of accredited Departments in the Faculty of Social Sciences.",
        details: "Economics",
        details1: "Geography and Regional Planning",
        details2: "Political Science",
        details3: "Sociology and Anthropology",
        details4: "Social Works",
        details5: "Public Administration"
    },
    {
        title: "Industry/Academic Partnerships",
        description: "The University has partnerships with the following industry players.",
        details: "AMAZON",
        details1: "GOOGLE",
        details2: "HUAWIE",
        details3: "CISCO",
        details4: "IBM"
    },
    {
        title: "Faculty of Managment Sciences",
        description: "The Following are a list of accredited Departments in the Faculty of Management Sciences.",
        details: "Accounting",
        details1: "Business Administration",
        details2: "Banking and Finance",
        details3: "Entrepreneurship"
    },

    {
        title: "Faculty of Pharmacy",
        description: "The Following are a list of accredited Departments in the Faculty of Pharmacy.",
        details: "Pharmacy"
    },
    {
        title: "Faculty of Environmental Sciences",
        description: "The Following are a list of accredited Departments in the Faculty of Environmental Science",
        details: "Geomatics"
    },
    {
        title: "Faculty of Environmental Law",
        description: "The Following are a list of accredited Departments in the Faculty of Law.",
        details: "Law"
    },
    {
        title: "Medicine",
        description: "The Following are a list of accredited Departments in the School of Medicine.",
        details: "Medicine"
    },
    {
        title: "Dentistry",
        description: "The Following are a list of accredited Departments in Dentistry. ",
        details: "Dental Surgery"
    },




]

programmes.forEach(({ title, description, details, details1, details2, details3, details4, details5, details6, details7 }, i) => {
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

    const content_details1 = document.createElement('p')
    content_details1.textContent = details1

    const content_details2 = document.createElement('p')
    content_details2.textContent = details2

    const content_details3 = document.createElement('p')
    content_details3.textContent = details3

    const content_details4 = document.createElement('p')
    content_details4.textContent = details4


    const content_details5 = document.createElement('p')
    content_details5.textContent = details5


    const content_details6 = document.createElement('p')
    content_details6.textContent = details6

    const content_details7 = document.createElement('p')
    content_details7.textContent = details7

    slide_content.appendChild(content_title)
    slide_content.appendChild(content_description)
    slide_content.appendChild(content_details)
    slide_content.appendChild(content_details1)
    slide_content.appendChild(content_details2)
    slide_content.appendChild(content_details3)
    slide_content.appendChild(content_details4)
    slide_content.appendChild(content_details5)
    slide_content.appendChild(content_details6)
    slide_content.appendChild(content_details7)


    slide.appendChild(slide_content)

    section.appendChild(slide)
})