function showProducts(){
  $(".productsLabel").css("display","inline");
  $(".homeLabel").css("display","none");
  $(".contactsLabel").css("display","none");
}

function showHome(){
  $(".productsLabel").css("display","none");
  $(".homeLabel").css("display","inline");
  $(".contactsLabel").css("display","none");
}

function showContacts(){
  $(".productsLabel").css("display","none");
  $(".homeLabel").css("display","none");
  $(".contactsLabel").css("display","inline");
}
