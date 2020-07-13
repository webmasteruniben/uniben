



let schoolFees = [
  { 
  DETAILS: "Tuition (in Naira)", 
  SCIENCE : " ", 
  NON_SCIENCE: " ", 
  SCIENCE_RETURNING_STUDENTS : " ", 
  NON_SCIENCE_RETURNING_STUDENTS: " "
},

{ 
  DETAILS: "Examination Fees", 
  SCIENCE: " 7,000.00", 
  NON_SCIENCE: "5,000.00", 
  SCIENCE_RETURNING_STUDENTS : "7,000.00", 
  NON_SCIENCE_RETURNING_STUDENTS: "5,000.00 "
},

{ 
  DETAILS: "Labouratory Fees", 
  SCIENCE : " 3,000.00", 
  NON_SCIENCE: "  1,500.00", 
  SCIENCE_RETURNING_STUDENTS : "3,000.00", 
  NON_SCIENCE_RETURNING_STUDENTS: " 1,000.00"
},

{ 
  DETAILS: "Librart / MTN Lib.", 
  SCIENCE : "2,000.00 ", 
  NON_SCIENCE: " 2,000.00", 
  SCIENCE_RETURNING_STUDENTS : "2,000.00 ", 
  NON_SCIENCE_RETURNING_STUDENTS: "2,000.00 "
},

{ 
  DETAILS: "Admission Brochure ", 
  SCIENCE : "1,500.00 ", 
  NON_SCIENCE: " 1,500.00", 
  SCIENCE_RETURNING_STUDENTS : " ", 
  NON_SCIENCE_RETURNING_STUDENTS: " "
},

{ 
  DETAILS: "Orientation Brochure", 
  SCIENCE : "1,500.00 ", 
  NON_SCIENCE: "1,500.00 ", 
  SCIENCE_RETURNING_STUDENTS : " ", 
  NON_SCIENCE_RETURNING_STUDENTS: " "
},

{ 
  DETAILS: "Sport", 
  SCIENCE : "1,000.00  ", 
  NON_SCIENCE: "1,000.00  ", 
  SCIENCE_RETURNING_STUDENTS : " 1,000.00 ", 
  NON_SCIENCE_RETURNING_STUDENTS: " 1,000.00 "
},

{ 
  DETAILS: "Student Comm Service", 
  SCIENCE : "1,000.00 ", 
  NON_SCIENCE: "1,000.00 ", 
  SCIENCE_RETURNING_STUDENTS : " ", 
  NON_SCIENCE_RETURNING_STUDENTS: " "
},

{ 
  DETAILS: "Student Handbook Brochure", 
  SCIENCE : " 1,500.00", 
  NON_SCIENCE: " 1,500.00", 
  SCIENCE_RETURNING_STUDENTS : " ", 
  NON_SCIENCE_RETURNING_STUDENTS: " "
},

{ 
  DETAILS: "Utility", 
  SCIENCE : "7,000.00 ", 
  NON_SCIENCE: "7,000.00 ", 
  SCIENCE_RETURNING_STUDENTS : "7,000.00 ", 
  NON_SCIENCE_RETURNING_STUDENTS: "7,000.00 "
},

{ 
  DETAILS: "Med. Char / TSHIP /NHIS / Life Ins", 
  SCIENCE : " 7,400.00  ", 
  NON_SCIENCE: " 7,400.00  ", 
  SCIENCE_RETURNING_STUDENTS : " 7,400.00  ", 
  NON_SCIENCE_RETURNING_STUDENTS: " 7,400.00  "
},

{ 
  DETAILS: "Verification of Result", 
  SCIENCE_FRESH_STUDENTS: "5,000.00 ", 
  NON_SCIENCE_FRESH_STUDENTS: " 5,000.00", 
  SCIENCE_RETURNING_STUDENTS : " ", 
  NON_SCIENCE_RETURNING_STUDENTS: " "
},

{ 
  DETAILS: "Medical Exam / Eye Test", 
  SCIENCE_FRESH_STUDENTS : "5,500.00", 
  NON_SCIENCE_FRESH_STUDENTS: " 5,500.00", 
  SCIENCE_RETURNING_STUDENTS : " ", 
  NON_SCIENCE_RETURNING_STUDENTS: " "
},

{ 
  DETAILS: "Academic Gown (Rental)", 
  SCIENCE_FRESH_STUDENTS : "5,000.00 ", 
  NON_SCIENCE_FRESH_STUDENTS: "5,000.00 ", 
  SCIENCE_RETURNING_STUDENTS : " ", 
  NON_SCIENCE_RETURNING_STUDENTS: " "
},

{ 
  DETAILS: "Forensic ID Card", 
  SCIENCE_FRESH_STUDENTS : "2,000.00 ", 
  NON_SCIENCE_FRESH_STUDENTS: " 2,000.00", 
  SCIENCE_RETURNING_STUDENTS : " ", 
  NON_SCIENCE_RETURNING_STUDENTS: " "
},

{ 
  DETAILS: "Bank Charges / Portal Charges", 
  SCIENCE_FRESH_STUDENTS : "2,000.00  ", 
  NON_SCIENCE_FRESH_STUDENTS: " 2,000.00 ", 
  SCIENCE_RETURNING_STUDENTS : "2,000.00  ", 
  NON_SCIENCE_RETURNING_STUDENTS: "2,000.00  "
},

{ 
  DETAILS: "Development Levy", 
  SCIENCE_FRESH_STUDENTS : "20,000.00  ", 
  NON_SCIENCE_FRESH_STUDENTS: " 20,000.00 ", 
  SCIENCE_RETURNING_STUDENTS : "20,000.00  ", 
  NON_SCIENCE_RETURNING_STUDENTS: " 20,000.00 "
},

{ 
  DETAILS: "Student Union Dues", 
  SCIENCE_FRESH_STUDENTS : " 1,000.00", 
  NON_SCIENCE_FRESH_STUDENTS: " 1,000.00", 
  SCIENCE_RETURNING_STUDENTS : "1,000.00 ", 
  NON_SCIENCE_RETURNING_STUDENTS: " 1,000.00"
},

{ 
  DETAILS: "TOTAL", 
  SCIENCE_FRESH_STUDENTS : " 73,400.00", 
  NON_SCIENCE_FRESH_STUDENTS: "69,900.00 ", 
  SCIENCE_RETURNING_STUDENTS : "45,400.00 ", 
  NON_SCIENCE_RETURNING_STUDENTS: " 41,400.00 "
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
let data = Object.keys(schoolFees[0]);
//generateTableHead(table, data);
generateTable(table, schoolFees);






