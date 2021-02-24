
let searchitems = [
    {
        title: "online learning",
        href: "onlinelearning.html",
        content: "Online Learning",
        
    },
    {
        title: "staff update",
        href: "https://staff.uniben.edu",
        content: "Staff Update Form",
        
    },
    {
        title: "staff profile",
        href: "https://profiles.uniben.edu",
        content: "Staff Profiles",
        
    },
    {
        title: "staff",
        href: "staff.html",
        content: "Staff",
        
    },
    {
        title: "principal staff",
        href: "principalstaff.html",
        content: "Principal Staff",
        
    },
    {
        title: "students",
        href: "students.html",
        content: "Students",
        
    },
    {
        title: "programs",
        href: "programs.html",
        content: "Programs",
        
    },
    {
        title: "School Fees",
        href: "schoolfees.html",
        content: "School Fees",
        
    },
    {
        title: "transcripts",
        href: "https://uniben.waeup.org/applicants/checktranscript",
        content: "Transcripts",
        
    }
]

//Display search items
const search_btn = document.getElementById("search_btn")
const search_input = document.getElementById("search_input")
const search_result = document.getElementById("search_result")
const search = document.getElementById('search')
const search_btn_close = document.getElementById("search_btn_close")


search_btn.addEventListener('click', () => {
    
    search.style.display = "block"
    
    const search_content = document.createElement('p')
    search_result.innerHTML = ''
    const br = document.createElement('br')
    let found = false
    if (search_input.value != "") {

        searchitems.forEach(({title, href, content}, i) => {
            let searchCriteria = search_input.value
            let isSubstring = title.indexOf(searchCriteria)
            console.log(isSubstring)
            if (isSubstring >= 0) {
                // Create anchor element. 
                var p = document.createElement('p'); 
                var a = document.createElement('a');  
                  
                // Create the text node for anchor element. 
                var link = document.createTextNode(content); 
                  
                // Append the text node to anchor element. 
                a.appendChild(link);  
                  
                // Set the title. 
                a.title = title;
                a.href = href; 
                a.style.color = '#F3F3F3'
                p.appendChild(a)
                search_content.appendChild(p)
                found = true
                console.log(search_content)
            }

        }
        

        
        )
        if (found == false) {
            search_content.textContent = "Not Found"
        }
        search_result.appendChild(search_content)
        search_input.value = ""
        
    } else {
        
        search_content.textContent = "No Search Criteria"
        search_result.appendChild(search_content)
    }
})

search_btn_close.addEventListener('click', () => {
   
    search_result.innerHTML = ''
    search.style.display = "none"
    
})