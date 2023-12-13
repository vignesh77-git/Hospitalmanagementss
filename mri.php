<!DOCTYPE html>
<html>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 50%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}

.row{
    margin-left: 500px;
}

.btn-primary{
    color: blue;
    margin-top: 70px;
    margin-left: 700px;
}
</style>
<body>

<!-- Header -->
<div class="header">
  <h1>MRI WARD</h1>
  <p>Resize the browser window to see the responsive effect.</p>
</div>

<!-- Photo Grid -->

<div class="row"> 
  <div class="column">
    <img src="./imgs//mri1.jpg" style="width:100%">
    <img src="./imgs//mri2.jpg" style="width:100%">
  </div>

  <div class="column">
  
    <img src="./imgs//mri3.jpg" style="width:100%">
    <img src="./imgs//mri4.jpg" style="width:100%">
  
  </div>
</div>
<button type="button" class="btn btn-primary"><a href="blog.php">GO BACK</a></button>
</body>
</html>
