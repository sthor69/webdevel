<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta charset=utf-8 />
<title>HTML5 jQuery Tabs</title>
</head>
<body>
  <div class="tabs">
    <a data-toggle="tab1">Tab1</a>
    <a data-toggle="tab2">Tab2</a>
    <a data-toggle="tab3">Tab3</a>
    <a data-toggle="tab4">Tab4</a>
    <a data-toggle="tab5">Tab5</a>
  </div>
<div class="tabContent">  
  <div id="tab1">
    <h5>Tab1</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget sollicitudin nibh. Duis semper, diam sed iaculis dictum, libero erat molestie dui, ac suscipit felis leo sed ipsum. </p>
    <input type="text" name="user-name" id="user-name" placeholder="at least 3 characters" required> <br />
    <label>Your favorite fruit:
      <datalist id="fruits">
         <option value="Blackberry">Blackberry</option>
         <option value="Blackcurrant">Blackcurrant</option>
         <option value="Blueberry">Blueberry</option>
         <!-- . -->
      </datalist>
    If other, please specify:
    <input type="text" name="fruit" list="fruits"> <br />
    <input type="search" name="search"> <br />
    <input type="tel" name="tel" id="tel" required> <br />
    <input id="startdate" name="startdate" min="2012-01-01" max="2013-01-01" type="date">
   </label>
  </div>
  
  <div id="tab2">
    
    <h5>Tab2</h5>
    <p>Donec pellentesque sapien neque, ac lobortis erat facilisis quis. Praesent faucibus arcu eros. Proin id tortor euismod, vulputate neque id, placerat nunc.</p>
  </div>
  
  <div id="tab3">
    <h5>Tab3</h5>
    <p>Duis justo mi, egestas euismod placerat a, eleifend vitae lacus. Integer non odio nec libero lacinia vulputate. Phasellus ante lectus, congue vel volutpat vitae, dictum quis est. </p>
  </div>
  
  <div id="tab4">
    <h5>Tab4</h5>
    <p>Nulla varius sit amet augue vel consequat. Aenean faucibus vehicula interdum. Integer eleifend, lectus eget vulputate feugiat, nibh nulla congue ipsum, eu mattis tortor nulla vitae diam. Maecenas rutrum risus non libero ullamcorper, nec vehicula sapien tincidunt. </p>
  </div>
  
  <div id="tab5">
    <h5>Tab5</h5>
    <p>Suspendisse vulputate ornare dui, sed luctus est mattis nec. Curabitur ut dolor eleifend, vulputate purus et, ullamcorper tortor. In posuere ultricies lectus. Vestibulum vitae odio ut est sagittis porta. </p>
  </div>
  
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/html5jtabs.js"></script>
<script>
$(function() {
  $(".tabs a").html5jTabs();
});
</script>
</body>
</html>
