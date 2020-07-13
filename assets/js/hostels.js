const section = document.querySelector('.topiterm')


let guidelines = [
    {
        title: "2019/2020 HOSTEL ACCOMMODATION GUIDELINES",
        description: "NOTICE: All Students that are assigned rooms in the KEYSTONE HOSTEL should" + 
        "go and pay directly to the UNIBEN KEYSTONE BANK AND NOT VIA REMITA. For Avoidance of Doubt."+   
        "Pay for Keystone directly in the Keystone bank!.",
        description2: "*** N5,000 Booking Fee."+ 
                      "***N90,000 Maintenance Fee.",
        
        details: "All students interested in Hostel Accommodation should take note of and follow these guidelines."+
        "Pay your UNIBEN charges for the session. Payment of charges for the new session has been enabled. "+
       
        "Also, ensure that you actually need the accommodation and intend to stay there. You’re not allowed to book and transfer to another student as this is an Offense!",
         
        
        details2: "** Log into your Kofa record. Under Accommodation, Select Particular Hall of Interest."+ 
        "This is a compulsory step for all that require accommodation in any Hostel .",

        details3: "** Under Payments, Create Bed Allocation ticket. Make payment using any valid ATM card. The usual payment procedure."+ 
        "** Go ahead and book your particular space using the activation code on your payment slip, if desired hall is any of 1, 2, 3 or 4. "+ 
        "Those assigned spaces from Student Affairs also need to use their booking code in order to see the space assigned to them. "+ 
        " Immediately proceed to pay the relevant Hostel Maintenance fee assigned to your allocated space, upon successful booking. "+ 
        "Please Note that all allocated spaces will be released back to circulation after 48 hours. "+ 
        "For the avoidance of doubt, Note that allocated spaces will be retrieved and become available for others to book after 2 days (48 hrs) of not paying Hostel maintenance fee. "+ 
        " Print out relevant Slips to use for clearance into the Halls of Residence."+  
        "Students that require space in any of the reserved halls should submit their payment slip to student affairs. "+ 
        "Any Student allocated a space in the reserved hall is also expected to go ahead and book with their activation code and to Immediately proceed to pay the relevant Hostel Maintenance"+ 
        "fee assigned to your allocated space, within 48 hrs, upon successful booking. ",
        
    }       
       
];



guidelines.forEach(({title, description, description2, details, details2, details3}, i) => {
           
    const slide = document.createElement('article');
    slide.classList.add('news-section')
    slide.classList.add('blog-left')
     
    const slide_content = document.createElement('div')
    slide_content.classList.add('blog-right-info')

    const content_title = document.createElement('h3')
    content_title.textContent = title

    const content_description = document.createElement('h4')
    content_description.textContent = description

    const content_description2 = document.createElement('h4')
    content_description2.textContent = description2
      
    const content_details = document.createElement('p')
    content_details.textContent = details

    const content_details2 = document.createElement('p')
    content_details2.textContent = details2

    const content_details3 = document.createElement('p')
    content_details3.textContent = details3

   
    slide_content.appendChild(content_title)
    slide_content.appendChild(content_description)
    slide_content.appendChild(content_description2)
    slide_content.appendChild(content_details)
    slide_content.appendChild(content_details2)
    slide_content.appendChild(content_details3)
    
    
    slide.appendChild(slide_content)

    section.appendChild(slide)

    
});







//hostel table

let hostelsFees = [
    { 
    SERIAL_NUMBER: "1", 
    HOSTELS : "NDDC HOSTEL ", 
    DEMARCATION: " ", 
    AMOUNT : "35,000.00 ", 
    
  },
  
  { 
    SERIAL_NUMBER: "2", 
    HOSTELS: " HALL 5", 
    DEMARCATION: " ", 
    AMOUNT : "25,000.00", 
     
  },
  
  { 
    SERIAL_NUMBER: "3", 
    HOSTELS : "HALL 6 ", 
    DEMARCATION: "  ", 
    AMOUNT : "40,000.00", 
     
  },
  
  { 
    SERIAL_NUMBER: "4", 
    HOSTELS : "OTHER HOSTELS", 
    DEMARCATION: " ", 
    AMOUNT : "17,000.00 ", 
    
  },
  
  { 
    SERIAL_NUMBER: "5 ", 
    HOSTELS : "FESTUS AKINGBOLA ", 
    DEMARCATION: "3RD FLOOR", 
    AMOUNT : "62,000.00 ", 
    
  },
  
  { 
    SERIAL_NUMBER: "6", 
    HOSTELS : "FESTUS AKINGBOLA ", 
    DEMARCATION: "TOP BUNK ", 
    AMOUNT : " 25,000.00", 
     
  },
  
  { 
    SERIAL_NUMBER: "7", 
    HOSTELS : " FESTUS AKINGBOLA ", 
    DEMARCATION: " DOWN BUNK", 
    AMOUNT : "36,000.00 ", 
    
  },
  
  { 
    SERIAL_NUMBER: "8", 
    HOSTELS : "INTERCONTINENTAL HOSTEL  ", 
    DEMARCATION: "  ", 
    AMOUNT : " 62,000.00 ", 
    
  },
  
  { 
    SERIAL_NUMBER: "9", 
    HOSTELS : "PG HOSTEL EKENHUAN  ", 
    DEMARCATION: " ", 
    AMOUNT : "50,000.00 ", 
    
  },
  
    
  { 
    SERIAL_NUMBER: "10", 
    HOSTELS : "HALL 7  ", 
    DEMARCATION: " ", 
    AMOUNT : "75,000.00 ", 
     
  },
  
  { 
    SERIAL_NUMBER: "11", 
    HOSTELS : "KEYSTONE HOSTEL   ", 
    DEMARCATION: "  ", 
    AMOUNT : " 95,000.00  ", 
    
  }
  
  ];
  
  function generateTableHead(table, data) {
    let thead = table.createTHead();
    let row = thead.insertRow();
    for (let key of data) {
      let th = document.createElement("th");
      let text = document.createTextNode(key);
      th.appendChild(text);
      row.appendChild(th);
    }
  }
  
  function generateTable(table, data) {
    for (let element of data) {
      let row = table.insertRow();
      for (key in element) {
        let cell = row.insertCell();
        let text = document.createTextNode(element[key]);
        cell.appendChild(text);
      }
    }
  }
  
  let table = document.querySelector("table");
  let data = Object.keys(hostelsFees[0]);
  //generateTableHead(table, data);
  generateTable(table, hostelsFees);
  
  
  
  
  
  
  