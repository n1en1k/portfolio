function validate(){
    var name = document.getElementById("name").value;
    var subject = document.getElementById("subject").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    var errMsg = document.getElementById("errMsg");
    
    errMsg.style.padding = "10px";
    
    var text;
    if(name.length < 3){
      text = "Check name";
      errMsg.innerHTML = text;
      return false;
    }
    if(subject.length < 5){
      text = "Check subject";
      errMsg.innerHTML = text;
      return false;
    }
    if(isNaN(phone) || phone.length != 10){
      text = "Check phone number";
      errMsg.innerHTML = text;
      return false;
    }
    if(email.indexOf("@") == -1 || email.length < 6){
      text = "Check email";
      errMsg.innerHTML = text;
      return false;
    }
    if(message.length <= 20){
      text = "Write at least 20 characters";
      errMsg.innerHTML = text;
      return false;
    }
    alert("Form Submitted!");
    return true;
  }