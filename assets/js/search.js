// Поиск квартиры
$('.search').keyup(function(){
 var val = $(this).val().toLowerCase();
  if(0< val.length){
    $('.header').addClass('hide');
    $('.emty').fadeIn();
  }
  else{
     $('.header').removeClass('hide');
    $('.emty').fadeOut();
  }
  
   $('.card').each(function()
   {
     var text = $(this).text();
     if(text.indexOf(val)==-1)
       {
         $(this).hide();
       }
     else
       {
           $(this).show();
       }
       
   })
});

// Очистка поисковой строки
$('.emty').click(function(){
    $('.search').val('');
    $(this).fadeOut().removeClass('hide');
    $('.card').show();
  });













  document.addEventListener("DOMContentLoaded", function() {
    "use strict"
  
    var style = ""
      + "<style>"
    //   +   "input.animated-search-filter {"
    //   +     "-webkit-tap-highlight-color: transparent;"
    //   +   "}"
      +   ".animated-search-filter .hidden {"
    //   +     "opacity: 0;"
      +     "display: none;"
    //   +     "pointer-events: none;"
      +   "}"
    //   +   ".animated-search-filter > * {"
    //   +     "transition: .5s;"
    //   +   "}"
      + "</style>"
  
    document.head.insertAdjacentHTML("beforeend", style)
  
    var items = document.querySelectorAll(".animated-search-filter > *")
    // var itemHeight = items[0].offsetHeight
    var texts = []
    var i = -1
    var len = items.length
    // var transform = "transform" in document.body.style ? "transform" : "webkitTransform"
  
    while (++i < len) {
      texts.push(items[i].textContent.trim())
    }
  
    document.querySelector("input.animated-search-filter").addEventListener("input", function() {
      var re = new RegExp(this.value, "i")
      texts.forEach(function(element, index) {
        if (re.test(element)) {
        //   items[index].classList.remove("hidden")
        items[index].classList.remove("d-none")
        }
        else {
            $('.emty').fadeIn();
            // items[index].classList.add("hidden")
            items[index].classList.add("d-none")
        }
        // var i = -1
        // var position = 0
        // while (++i < len) {
        //   if (items[i].className != "hidden") {
        //   }
        // }
      })
    })
  })

// Очистка поисковой строки
$('.emty').click(function(){
    $('.animated-search-filter').val('');
    $('.card').removeClass('hidden');
    $('.card').removeClass('d-none');
  });

  