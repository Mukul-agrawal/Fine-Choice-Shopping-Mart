function checkForm(form)
{
  if(form.username.value == "") {
    alert("Error: Username cannot be blank!");  
    form.username.focus();
    return false;
  }
  re = /^\w+$/;
  if(!re.test(form.username.value)) {
    alert("Error: Username must contain only letters, numbers and underscores!");
    form.username.focus();
    return false;
  }

  if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
    if(form.pwd1.value.length < 6) {
      alert("Error: Password must contain at least six characters!");
      form.pwd1.focus();
      return false;
    }
    if(form.pwd1.value == form.username.value) {
      alert("Error: Password must be different from Username!");
      form.pwd1.focus();
      return false;
    }
    re = /[0-9]/;
    if(!re.test(form.pwd1.value)) {
      alert("Error: password must contain at least one number (0-9)!");
      form.pwd1.focus();
      return false;
    }
    re = /[a-z]/;
    if(!re.test(form.pwd1.value)) {
      alert("Error: password must contain at least one lowercase letter (a-z)!");
      form.pwd1.focus();
      return false;
    }
    re = /[A-Z]/;
    if(!re.test(form.pwd1.value)) {
      alert("Error: password must contain at least one uppercase letter (A-Z)!");
      form.pwd1.focus();
      return false;
    }
  } else {
    alert("Error: Please check that you've entered matching password and confirm your password!");
    form.pwd1.focus();
    return false;
  }
    
  if(form.phn.value == "") {
    alert("Error: phone no. cannot be blank!");  
    form.phn.focus();
    return false;
  }
  if(form.phn.value != "") {
      re = /^\d+$/;
      if(!re.test(form.phn.value)) {
      alert("Error: phone no. must contain only numbers");
      form.phn.focus();
      return false;
  }
      if(form.phn.value.length < 10) {
      alert("Error: phone no. must contain at least 10 numbers!");
      form.phn.focus();
      return false;
    }
      re = /^[7-9][0-9]{9}$/;
      if(!re.test(form.phn.value)) {
      alert("Error: phone no. must start from 7,8,9 numbers");
      form.phn.focus();
      return false;
    }
  }
  alert("You entered a valid password: " + form.pwd1.value);
  return true;
}

