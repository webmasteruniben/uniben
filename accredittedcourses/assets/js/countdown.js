var counter_list = [10,10000,10000];
  var str_counter_0 = counter_list[0];
  var str_counter_1 = counter_list[1];
  var str_counter_2 = counter_list[2];
  var display_str = "";
  var display_div = document.getElementById("display_div_id");
  var display_counter = document.getElementById("display_counter_id");

  function incrementCount(current_count){
    setInterval(function(){
      // clear count
      while (display_div.hasChildNodes()) {
          display_div.removeChild(display_div.lastChild);
      }
      str_counter_0++;
      if (str_counter_0 > 99) {
        str_counter_0 = 10; // reset count
        str_counter_1++;    // increase next count
      }
      if(str_counter_1>99999){
        str_counter_2++;
      }
      display_str = str_counter_2.toString() + str_counter_1.toString() + str_counter_0.toString();
      for (var i = 0; i < display_str.length; i++) {
        var new_span = document.createElement('span');
        new_span.className = 'num_tiles';
        new_span.innerText = display_str[i];
        display_div.appendChild(new_span);
      }
    },1000);
  }

  /*
Counter script
By JavaScript Kit (http://javascriptkit.com)
Over 400+ free scripts here!
Above notice MUST stay entact for use
*/

function fakecounter(){

//decrease/increase counter value (depending on perceived popularity of your site!)
var decrease_increase=50000

var counterdate=new Date()
var currenthits=counterdate.getTime().toString()
currenthits=parseInt(currenthits.substring(2,currenthits.length-4))+decrease_increase

var new_counter = document.createElement('span');
        new_counter.className = 'num_tiles';
        new_counter.innerText = currenthits
        display_counter.appendChild(new_counter);

}
fakecounter()