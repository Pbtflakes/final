"use strict";
var namebox;
var mailbox;

window.onload = function () {
  namebox = document.getElementById("name");
  mailbox = document.getElementById("mail");
  namebox.value = "";
  mailbox.value = "";
  namebox.addEventListener('focusout', checkName);
  mailbox.addEventListener('focusout', checkMail);
}

function checkName(e) {
  e.preventDefault();
  var valid = namebox.value.length > 0;
  namebox.parentNode.className = (valid) ? "success" : "error";
}

/* A primitive check for email validity.  Guarantees that we at
least have string@string.string, as the email format in various
RFCs is too complex for regular expressions.  */
function checkMail(e) {
  e.preventDefault();
  var re = /\S+@\S+\.\S+/;
  var valid = re.test(mailbox.value);
  mailbox.parentNode.className = (valid) ? "success" : "error";
}
