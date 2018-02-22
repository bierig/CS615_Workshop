<!DOCTYPE html>
<html lang="en">

<head>
  <title>Feedback Box</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>

  <div class="jumbotron text-center">
    <h1>Feedback Box</h1>
    <p>Resize this responsive page to see the effect!</p>
  </div>

  <div class="container">

    <!-- new stuff goes here -->
    <form method="post" action="php/feedbackProcessor.php">

      <div class="form-group">
        <label for="module">Module: </label>
        <select class="custom-select" id="module" name="module">
      <option value="CS615">Internet Solutions Engineering</option>
      <option value="CS265">Software Testing</option> </select>
      </div>

      <div class="form-group">
        <label for="semester">Semester: </label>
        <select class="custom-select" id="semester" name="semester">
      <option value="Sem1_2017-18">Sem 1, 2017-18</option>
      <option value="Sem2_2017-18">Sem 2, 2017-18</option> </select>
      </div>

      <div class="form-group">
        <label class="radio-inline"><input type="radio" name="rating" value="1">:((</label>
        <label class="radio-inline"><input type="radio" name="rating" value="2">:(</label>
        <label class="radio-inline"><input type="radio" name="rating" value="3">:|</label>
        <label class="radio-inline"><input type="radio" name="rating" value="4">:)</label>
        <label class="radio-inline"><input type="radio" name="rating" value="5">:))</label>
      </div>

      <div class="form-group">
        <label>Feedback:</label>
        <textarea class="from-control" id="text" name="text" row="3" style="min-width: 100%"></textarea>
        <div>
          <input class="btn btn-primary" id="submit" name="submit" type="submit" value="Drop into Box" />
    </form>

    </div>

</body>

</html>