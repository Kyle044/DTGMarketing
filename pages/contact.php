<!DOCTYPE html>
<html>

<?php include('headerdito.php') ?>
<body>


<div class="containerzz">

  <div class="rowzz">
    <div class="columnzz">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3866.0154654278226!2d121.02954781744384!3d14.310534199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d7ef7306350f%3A0x9dc75b6546149bed!2sDATAGEN%20FACILITIES%2C%20OPC!5e0!3m2!1sen!2sph!4v1657090101867!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="columnzz">
      <form action="/action_page.php" class="contactform">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
<?php include('footerdito.php') ?>
</body>
</html>
