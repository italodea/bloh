function like(id){
  $.ajax({
  url : "/posts/likes.php",
  type: "POST",
  data : {id : id} , 
  success: function(data, textStatus, jqXHR) {
    $('a#likePost'+id).text(data);
  },
  error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus);// if there is an error
    }

  })
};