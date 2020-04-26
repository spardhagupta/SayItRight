function validateForm() {

  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

var x = document.forms["myForm"]["firstname"].value;
  if (x == "") {
    alert("FirstName must be filled out");
    return false;
  }

var a = document.forms["myForm"]["lastname"].value;
  if (a == "") {
    alert("LastName must be filled out");
    return false;
  }

var b = document.forms["myForm"]["telephone"].value;
  if (b == "") {
    alert("Telephone Number must be filled out");
    return false;
  }

var c = document.forms["myForm"]["message"].value;
    if (c == "") {
      alert("Message must be filled out");
      return false;
    }
}
//
// function validateForm() {
//   var x = document.forms["myForm"]["telephone"].value;
//   if (x == "") {
//     alert("Number must be filled out");
//     return false;
//   }
// }
//
// function validateForm() {
//   var x = document.forms["myForm"]["message"].value;
//   if (x == "") {
//     alert("Message must be filled out");
//     return false;
//   }
// }
//
// function validateForm() {
//   var x = document.forms["myForm"]["name"].value;
//   if (x == "") {
//     alert("Name must be filled out");
//     return false;
//   }
// }
//
// function validateForm() {
//   var x = document.forms["myForm"]["location"].value;
//   if (x == "") {
//     alert("Location must be filled out");
//     return false;
//   }
// }
//
// function validateForm() {
//   var x = document.forms["myForm"]["date"].value;
//   if (x == "") {
//     alert("Date must be filled out");
//     return false;
//   }
// }
//
// function validateForm() {
//   var x = document.forms["myForm"]["time"].value;
//   if (x == "") {
//     alert("Time must be filled out");
//     return false;
//   }
// }
//
// function validateForm() {
//   var x = document.forms["myForm"]["address"].value;
//   if (x == "") {
//     alert("Address must be filled out");
//     return false;
//   }
// }
//
// function validateForm() {
//   var x = document.forms["myForm"]["apartment"].value;
//   if (x == "") {
//     alert("Apartment details must be filled out");
//     return false;
//   }
// }
//
// function validateForm() {
//   var x = document.forms["myForm"]["postalcode"].value;
//   if (x == "") {
//     alert("PostalCode must be filled out");
//     return false;
//   }
// }
//
// function validateForm() {
//   var x = document.forms["myForm"]["city"].value;
//   if (x == "") {
//     alert("City Name must be filled out");
//     return false;
//   }
// }
//
// function validateForm() {
//   var x = document.forms["myForm"]["description"].value;
//   if (x == "") {
//     alert("Description must be filled out");
//     return false;
//   }
// }
//
// function validateForm() {
//   var x = document.forms["myForm"]["workplace"].value;
//   if (x == "") {
//     alert("WorkPlace must be filled out");
//     return false;
//   }
// }
//
// function validateForm() {
//   var x = document.forms["myForm"]["schoolname"].value;
//   if (x == "") {
//     alert("SchoolName must be filled out");
//     return false;
//   }
// }
