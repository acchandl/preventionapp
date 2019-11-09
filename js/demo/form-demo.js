// ALEXIS C

function displayActivity(answer) {

  //document.getElementById('activityArea' + answer + 'Div').style.display = "block";

  if (answer == "Prevention") { // hide the div that is not selected

    document.getElementById('activityAreaPreventionDiv').style.display = "block";
    document.getElementById('activityAreaTreatmentDiv').style.display = "none";
    document.getElementById('activityAreaReentryDiv').style.display = "none";
    document.getElementById('activityAreaOutreachDiv').style.display = "none";

  } else if (answer == "Treatment") {

   document.getElementById('activityAreaTreatmentDiv').style.display = "block";
    document.getElementById('activityAreaPreventionDiv').style.display = "none";
    document.getElementById('activityAreaReentryDiv').style.display = "none";
    document.getElementById('activityAreaOutreachDiv').style.display = "none";

  }else if (answer == "Reentry") {

    document.getElementById('activityAreaReentryDiv').style.display = "block";
    document.getElementById('activityAreaPreventionDiv').style.display = "none";
    document.getElementById('activityAreaTreatmentDiv').style.display = "none";
    document.getElementById('activityAreaOutreachDiv').style.display = "none";

  }
  else if (answer == "Outreach") {

    document.getElementById('activityAreaOutreachDiv').style.display = "block";
    document.getElementById('activityAreaPreventionDiv').style.display = "none";
    document.getElementById('activityAreaTreatmentDiv').style.display = "none";
    document.getElementById('activityAreaReentryDiv').style.display = "none";

  }

}
