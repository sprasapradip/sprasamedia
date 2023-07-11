<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
		function showName() {
			var name = document.getElementById("name").value;
			document.getElementById("name-value").innerHTML = name;
		}
	</script>
	<title>Marketing Client Form</title>
	<style>
		/* General styles */
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
			padding: 20px;
		}

		h2 {
			margin-top: 30px;
		}

		/* Form styles */
		form {
			max-width: 700px;
			margin: 0 auto;
			background-color: #fff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		}

		input[type="text"], input[type="email"], input[type="tel"], select, textarea {
			display: block;
			margin: 10px 0;
			padding: 10px;
			width: 100%;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 4px;
			font-size: 16px;
		}

		select {
			height: 40px;
		}

		textarea {
			height: 150px;
		}

		input[type="submit"] {
			background-color: #0b57d0;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			float: right;
			font-size: 16px;
			transition: background-color 0.3s;
		}

		input[type="submit"]:hover {
			background-color: #4CAF50;
		}

		label {
			font-weight: bold;
			font-size: 16px;
		}

		.required:after {
			content: "*";
			color: red;
			font-size: 18px;
			font-weight: bold;
			margin-left: 5px;
		}

		.error {
			color: red;
			font-size: 14px;
			margin-top: 5px;
		}

		.success {
			color: green;
			font-size: 14px;
			margin-top: 5px;
		}
		/* General Styles */

body {
    margin: 0;
    font-family: Arial, sans-serif;
    font-size: 16px;
    line-height: 1.5;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

a {
    color: #333;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Header Styles */

header {
    background-color: #fff;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 999;
}

header a img {
    height: 50px;
    margin-top: 15px;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline-block;
}

nav ul li a {
    display: block;
    padding: 20px;
}

nav ul li a:hover {
    background-color: #f2f2f2;
}

/* Main Styles */

main {
    padding: 50px 0;
}

.featured {
    margin-bottom: 50px;
}

.featured img {
    width: 100%;
    height: auto;
}

.article-content {
    padding: 20px;
}

.article-content h2 {
    font-size: 28px;
    margin-top: 0;
}

.article-content p {
    margin-bottom: 20px;
}

.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 5px;
}

.button:hover {
    background-color: #444;
}

.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 30px;
}

.grid article img {
    width: 100%;
    height: auto;
}

.grid article h3 {
    font-size: 20px;
    margin-top: 0;
}

.grid article p {
    margin-bottom: 20px;
}

/* Footer Styles */

footer {
  background-color: #0b57d0;
  color: #fff;
  padding: 40px 0;
}

.footer-container {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 0 auto;
}

.footer-widget {
  width: calc(33.33% - 20px);
  margin-bottom: 40px;
}

/* Styles for links in footer */
.footer-widget a {
  color: #fff;
  text-decoration: none;
}

.footer-widget a:hover {
  text-decoration: underline;
}

	</style>
</head>
    <body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <a href="https://sprasamedia.com"><img src="https://sprasamedia.com/wp-content/uploads/2022/10/photo_6235646040065815759_y-removebg-preview-300x45.png" alt="Sprasamedia Logo"></a>
            <nav>
                <ul>
                    <li><a href="https://sprasamedia.com">Home</a></li>
                    <li><a href="https://sprasamedia.com">News</a></li>
                    <li><a href="https://sprasamedia.com">Politics</a></li>
                    <li><a href="https://sprasamedia.com">Sports</a></li>
                    <li><a href="https://sprasamedia.com">Entertainment</a></li>
                    <li><a href="https://sprasamedia.com/contact-us/">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
	<form id="client-form" action="submit-form.php" method="post">
		<h2>Advertisement Placement and Pricing</h2>

		<label for="ad-type">Ad Type<span class="required">*</span>:</label>
		<select id="ad-type" name="ad-type" required>
			<option value="">--Select Ad Type--</option>
			<option value="Header">Header Ad</option>
			<option value="Sidebar">Sidebar Ad</option>
			<option value="Banner">Banner Ad</option>
			<option value="Sponsored-Content">Sponsored Content</option>
		</select>

		<label for="ad-location">Ad Location<span class="required">*</span>:</label>
		<select id="ad-location" name="ad-location" required>
			<option value="">--Select Ad Location--</option>
			<option value="Top">Top of Page</option>
			<option value="Bottom">Bottom of Page</option>
			<option value="Left">Left Sidebar</option>
			<option value="Right">Right Sidebar</option>
			<option value="Middle">Middle of Page</option>
		</select>

		<label for ="ad-duration">Ad Duration<span class="required">*</span>:</label>
<select id="ad-duration" name="ad-duration" required>
<option value="">--Select Ad Duration--</option>
<option value="1 Month">1 Month</option>
<option value="2 Months">2 Months</option>
<option value="3 Months">3 Months</option>
<option value="6 Months">6 Months</option>
<option value="1 Year">1 Year</option>
</select>
<label for="ad-price">Ad Price<span class="required">*</span>:</label>
	<input type="text" id="ad-price" name="ad-price" required>

	<label for="ad-description">Ad Description:</label>
	<textarea id="ad-description" name="ad-description"></textarea>

	<h2>Client Information</h2>

	<label for="name">Name<span class="required">*</span>:</label>
	<input type="text" id="name" name="name" required>

	<label for="email">Email<span class="required">*</span>:</label>
	<input type="email" id="email" name="email" required>

	<label for="phone">Phone<span class="required">*</span>:</label>
	<input type="tel" id="phone" name="phone" required>

	<label for="company">Company:</label>
	<input type="text" id="company" name="company">

	<label for="website">Website:</label>
	<input type="text" id="website" name="website">

	<label for="industry">Industry:</label>
	<input type="text" id="industry" name="industry">

	<label for="budget">Budget:</label>
	<input type="text" id="budget" name="budget">

	<input type="submit" value="Submit">
</form>
</body>
<!-- Footer Section -->
    <footer>
        <div class="footer-container">
          <div class="footer-widget">
            <h4>About Us</h4>
            <p>We are a news website dedicated to providing the latest news and updates from around the world.</p>
          </div>
          <div class="footer-widget">
            <h4>Popular Categories</h4>
            <ul>
              <li><a href="https://sprasamedia.com">Politics</a></li>
              <li><a href="https://sprasamedia.com">Business</a></li>
              <li><a href="https://sprasamedia.com">Technology</a></li>
              <li><a href="https://sprasamedia.com">Entertainment</a></li>
              <li><a href="https://sprasamedia.com">Sports</a></li>
            </ul>
          </div>
          <div class="footer-widget">
            <h4>Contact Us</h4>
            <ul>
              <li><a href="info@sprasamedia.com">Email</a></li>
              <li><a href="+977 9805151362">Phone</a></li>
              <li><a href="">Ratnanagar-10,Tandi Chitwan Nepal</a></li>
            </ul>
          </div>
        </div>
        <p>&copy; 2023 Sprasa Media. All rights reserved.</p>
      </footer>
</html>
