function showProducts(){
  $(".productsLabel").css("display","inline");
  $(".homeLabel").css("display","none");
  $(".contactsLabel").css("display","none");
  $(".description").css("display", "block");
}

function showHome(){
  $(".productsLabel").css("display","none");
  $(".homeLabel").css("display","inline");
  $(".contactsLabel").css("display","none");
  $(".description").css("display", "block");

}

function showContacts(){
  $(".productsLabel").css("display","none");
  $(".homeLabel").css("display","none");
  $(".contactsLabel").css("display","block");
  $(".description").css("display", "none");
}
