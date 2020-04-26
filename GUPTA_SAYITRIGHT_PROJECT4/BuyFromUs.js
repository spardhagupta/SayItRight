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

var b = document.forms["myForm"]["address"].value;
    if (b == "") {
      alert("Address must be filled out");
      return false;
    }

var c = document.forms["myForm"]["apartment"].value;
      if (c == "") {
        alert("Apartment must be filled out");
        return false;
      }

var d = document.forms["myForm"]["city"].value;
        if (d == "") {
          alert("City must be filled out");
          return false;
        }

var e = document.forms["myForm"]["postalcode"].value;
  if (e == "") {
    alert("PostalCode must be filled out");
    return false;
  }

var f = document.forms["myForm"]["email"].value;
    if (f == "") {
      alert("Email must be filled out");
      return false;
    }

    if(!(f.match(mailformat)))
    {
    alert("Enter valid email address");
            return false;

    }
}
