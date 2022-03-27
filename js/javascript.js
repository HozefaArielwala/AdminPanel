  function Validate(){
  var first_name1=document.form.first_name.value;
  var last_name1=document.form.last_name.value;
  var address1=document.form.address.value;
  var phone_number1=document.form.phone_no.value;
  if((first_name1.length<3) || (!first_name1)){
    alert("Enter Correct First Name.");
    return false;
  }
  else if((last_name1.length<3) || (!last_name1)){
    alert("Enter Correct First Name.");
    return false;
  }
  else if((address1.length<50) || (!address1)){
    alert("Please Enter correct Address\nNotes : Addresss length should be more then 50 characters.But we got "+address1.length+" character only");
    return false;
  }
  else{
    return true;
  }
}
function validURL() {
    var str=document.form.url.value;
    var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
      '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
      '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
      '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
      '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
      '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
      a=!!pattern.test(str);
      if(!!pattern.test(str)==false){
        alert("Enter the correct url");
        return false;
      }
      else{
        return true;
      }
  }

  function ValidateEmail() {
      var email1=document.form.email.value;
      var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
      if (email1.match(validRegex)) {
            return true;
      } 
      else {
            alert("Invalid email address!");
            return false;
      }
    }