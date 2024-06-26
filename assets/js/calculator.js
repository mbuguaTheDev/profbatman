//Getting the form elements
function formElements(elementID) {
  var value = 0;
  var element = document.getElementById(elementID);
  value = element.options[element.selectedIndex].value;
  return parseFloat(value);
}

function totalPrice() {
  var academic = formElements("academicLevel");
  var deadline = formElements("urgency");
  var pages = document.getElementById("Pages").value;
  var workType = formElements("workType");
  var spacing = formElements("spacing");
  var subject = formElements("subject");

  // Highschool
  if (academic == 1) {
    if ((academic == 1 && deadline == 1) || deadline == 2) {
      var price = 10;
    }
    if ((academic == 1 && deadline == 3) || deadline == 4 || deadline == 5) {
      var price = 11;
    }
    if ((academic == 1 && deadline == 7) || deadline == 6) {
      var price = 12;
    }
    if (academic == 1 && deadline == 8) {
      var price = 13;
    }
  }

  // Undergraduate
  else if (academic == 2) {
    if (academic == 2 && deadline == 1) {
      var price = 11;
    }
    if ((academic == 2 && deadline == 2) || deadline == 3) {
      var price = 12;
    }
    if ((academic == 2 && deadline == 4) || deadline == 5) {
      var price = 13;
    }
    if (academic == 2 && deadline == 6) {
      var price = 14;
    }
    if (academic == 2 && deadline == 7) {
      var price = 15;
    }
    if (academic == 2 && deadline == 8) {
      var price = 17;
    }
  }

  // Masters
  else if (academic == 3) {
    if ((academic == 3 && deadline == 1) || deadline == 2) {
      var price = 23;
    }
    if ((academic == 3 && deadline == 3) || deadline == 4 || deadline == 5) {
      var price = 24;
    }
    if (academic == 3 && deadline == 6) {
      var price = 25;
    }
    if ((academic == 3 && deadline == 7) || deadline == 8) {
      var price = 0;
    }
  }

  // PHD
  else {
    if (academic == 4 && deadline == 1) {
      var price = 32;
    }
    if (academic == 4 && deadline == 2) {
      var price = 33;
    }
    if ((academic == 4 && deadline == 3) || deadline == 4) {
      var price = 34;
    }
    if ((academic == 4 && deadline == 5) ||deadline == 6) {
      var price = 35;
    }
    if ((academic == 4 && deadline == 7) ||deadline == 8) {
      var price = 0;
    }
  }

  //Check Spacing either double or  single
  var spacePrice = spacing == 1 ? 1 : 1.8;

  //Worktype either scratch or proofreading
  var workTypeCost = workType == 1 ? 1 : 0.7;

  //special subject
  if (subject == 1 || subject == 2 || subject == 3 || subject == 4) {
    specialSub = 1.15;
  } else {
    specialSub = 1;
  }

  //Grand total from all variables
  var totalPrice = price * pages * spacePrice * workTypeCost * specialSub;

  //rounded off price
  var roundedPrice = Math.round(totalPrice * 100) / 100;

  // Display the total on the total card round  && pass to paypal
  document.getElementById("totalPrice").innerHTML = roundedPrice;
  document.getElementById("amount").value = roundedPrice;
}

totalPrice();
