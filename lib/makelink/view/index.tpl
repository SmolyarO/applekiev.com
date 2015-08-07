<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
  <head>
    <title>Makelink</title>
  </head>
  <body>
    Hello {% name %}! <br />
  
    {% makelink text=object.getValue() c="category" a="add" tag="tag1" id="25" class="testclass"%}
  </body>
</html>