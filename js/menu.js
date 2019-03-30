class Menu //Change the style of the active tab of the menu
{
  constructor(){
    this.container = $(".nav-active-tab .nav-item a");
   
    this.container.on("click", this.activeFirstMenu(this));


  }

  activeFirstMenu()//Mangage the style of the header menu
  {
    this.container.on("click", function(){
     $(".nav-active-tab .nav-item a").removeClass("active");
     $(this).addClass("active");

   })
  }

}


var myMenu = new Menu(); 