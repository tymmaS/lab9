<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="futureStyle.css">
	<title>future</title>
  <style>
   *{
  margin: 0;
  padding: 0;
  list-style: none;
  text-decoration: none;  
}

body{
  background-image: url(https://publicjobs.ie/images/news_and_events/Science-week-article.jpg);
  background-repeat: no-repeat;
    background-size: cover;
}

.header{
  width: 100%;
  height: 80px;
  display: block;
  background-color: #8A2BE2;
}

.options{
  width: 1100px;
  height: 100%;
  display: block;
  margin: 0 auto;
}

.logo{ 
  height: 100%;
  display: table;
  float: left;
}

.logo img{
  padding: 10px;
  height: 60px;
}

.navigation{
  height: 100%;
  display: table;
  float: right;
  padding: 0px 20px;
}

.navigation div{
  display: table-cell;
  vertical-align: middle;
  height: 100%;
  color: black;
  padding: 20px;
  font-family: 'Montserrat';
    font-size: 25px;
}

.slider{
  width: 800px;
  height: 500px;
  border-radius: 10px;
  overflow: hidden;
}

.slides{
  width: 500%;
  height: 500px;
  display: flex;
}

.slides input{
  display: none;
}

.slide{
  width: 20%;
  transition: 2s;
}

.slide img{
  width: 800px;
  height: 500px;
}

.navigation-manual{
  position: absolute;
  width: 800px;
  margin-top: -40px;
  display: flex;
  justify-content: center;
}

.manual-btn{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  cursor: pointer;
  transition: 1s;
}

.manual-btn:not(:last-child){
  margin-right: 40px;
}

.manual-btn:hover{
  background: #40D3DC;
}

#radio1:checked ~ .first{
  margin-left: 0;
}

#radio2:checked ~ .first{
  margin-left: -20%;
}

#radio3:checked ~ .first{
  margin-left: -40%;
}

#radio4:checked ~ .first{
  margin-left: -60%;
}
.navigation-auto{
  position: absolute;
  display: flex;
  width: 800px;
  justify-content: center;
  margin-top: 460px;
}

.navigation-auto div{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  transition: 1s;
}

.navigation-auto div:not(:last-child){
  margin-right: 40px;
}

#radio1:checked ~ .navigation-auto .auto-btn1{
  background: #40D3DC;
}

#radio2:checked ~ .navigation-auto .auto-btn2{
  background: #40D3DC;
}

#radio3:checked ~ .navigation-auto .auto-btn3{
  background: #40D3DC;
}

#radio4:checked ~ .navigation-auto .auto-btn4{
  background: #40D3DC;
}


.container{
  margin: 30px;
}

.row{
  width: 100%;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.image{
  background: #50A7FF;
  position: relative;
  flex: 1;
  max-width: 460px;
  height: 300px;
  margin: 20px;
  overflow: hidden;
}

.image img{
  opacity: 0.8;
  position: relative;
  vertical-align: top;
  transition: 0.6s;
  transition-property: opacity;
}

.image:hover img{
  opacity: 1;
}

.image .details{
  z-index: 1;
  position: absolute;
  top: 0;
  right: 0;
  color: #fff;
  width: 100%;
  height: 100%;
}

.image .details h2{
  text-align: center;
  font-size: 35px;
  text-transform: uppercase;
  font-weight: 300;
  margin-top: 70px;
  transition: 0.4s;
  transition-property: transform;
}

.image .details h2 span{
  font-weight: 900;
}

.image:hover .details h2{
  transform: translateY(-30px);
}

.image .details p{
  margin: 30px 30px 0 30px;
  font-size: 18px;
  font-weight: 600;
  text-align: center;
  opacity: 0;
  transition: 0.6s;
  transition-property: opacity, transform;
}

.image:hover .details p{
  opacity: 1;
  transform: translateY(-40px);
}

.more{
  position: absolute;
  background: rgba(255, 255, 255, 0.8);
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px;
  bottom: -60px;
  transition: 0.6s;
  transition-property: bottom;
}

.image:hover .more{
  bottom: 0;
}

.more .read-more{
  color: #000;
  text-decoration: none;
  font-size: 20px;
  font-weight: 500;
  text-transform: uppercase;
}

.more .read-more span{
  font-weight: 900;
}

.more .icon-links i{
  color: #000;
  font-size: 20px;
}

.more .icon-links a:not(:last-child) i{
  margin-right: 20px;
}

@media (max-width: 1080px){
  .image{
    flex: 100%;
    max-width: 480px;
  }
}

@media (max-width: 400px){
  .image .details p{
    font-size: 16px;
  }

  .more .read-more, .more .icon-links a i{
    font-size: 18px;
  }
}


.charts{
  display: table;
}

.charts div{
  display: table-cell;
  vertical-align: middle;

}

.contact-section{
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.contact-info{
  color: #fff;
  max-width: 500px;
  line-height: 65px;
  padding-left: 50px;
  font-size: 18px;
}

.contact-info i{
  margin-right: 20px;
  font-size: 25px;
}

.contact-form{
  max-width: 700px;
  margin-right: 50px;
}

.contact-info, .contact-form{
  flex: 1;
}

.contact-form h2{
  color: #fff;
  text-align: center;
  font-size: 35px;
  text-transform: uppercase;
  margin-bottom: 30px;
}

.contact-form .text-box{
  background: #000;
  color: #fff;
  border: none;
  width: calc(50% - 10px);
  height: 50px;
  padding: 12px;
  font-size: 15px;
  border-radius: 5px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  opacity: 0.9;
}

.contact-form .text-box:first-child{
  margin-right: 15px;
}

.contact-form textarea{
  background: #000;
  color: #fff;
  border: none;
  width: 100%;
  padding: 12px;
  font-size: 15px;
  min-height: 200px;
  max-height: 400px;
  resize: vertical;
  border-radius: 5px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  opacity: 0.9;
}

.contact-form .send-btn{
  float: right;
  background: #2E94E3;
  color: #fff;
  border: none;
  width: 120px;
  height: 40px;
  font-size: 15px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 2px;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
  transition-property: background;
}

.contact-form .send-btn:hover{
  background: #0582E3;
}

@media screen and (max-width: 950px){
  .contact-section{
    flex-direction: column;
  }

  .contact-info, .contact-form{
    margin: 30px 50px;
  }

  .contact-form h2{
    font-size: 30px;
  }

  .contact-form .text-box{
    width: 100%;
  }
}


  </style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<body>
	<div class="header">
		<div class="options">
			<div onclick="window.location.reload()" class="logo">
				<img src="https://seeklogo.com/images/C/Captain_Future-logo-E6CCC80B6D-seeklogo.com.png">
			</div>

			<div class="navigation">
				<div>Predictions</div>
				<div>Worldwise</div>
				<div>History</div>
				<div>Contacts</div>
			</div>
		</div>
	</div>

    <div class="slider">
      <div class="slides">
       
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
     
        <div class="slide first">
          <img src="https://caylent.com/wp-content/uploads/2019/02/Featured-image-Future-of-Microservices-and-Serverless-1.png">
        </div>
        <div class="slide">
          <img src="https://image.freepik.com/free-vector/colorful-science-education-background_23-2148476361.jpg">
        </div>
        <div class="slide">
          <img src="https://cdn.shopify.com/s/files/1/0002/3596/2395/products/Space_Doodles_Wall_Mural_Wallpaper_a_f1127b84-3f50-458e-8978-c9651c744857_1400x.jpg?v=1571709185">
        </div>
        <div class="slide">
          <img src="https://previews.123rf.com/images/lculig/lculig1410/lculig141000124/32268207-planet-earth-word-cloud-shape-concept.jpg">
        </div>
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
      </div>
 
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
   
    </div>
  

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>



    
    <div class="container">
      
      <div class="row">
      
        <div class="image">
          <img src="https://www.kmslh.com/wp-content/uploads/2018/05/What-Does-a-Web-Based-Knowledge-Management-Software-Do.jpg" alt="">
          <div class="details">
            <h2><span>Cybernetics</span></h2>
            <p>Cybernetics is a transdisciplinary approach for exploring regulatory systems—their structures, constraints, and possibilities.</p>
            <div class="more">
              <a href="#" class="read-more">Read <span>More</span></a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-heart"></i></a>
                <a href="#"><i class="fas fa-eye"></i></a>
                <a href="#"><i class="fas fa-paperclip"></i></a>
                <a href="#"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="image">
          <img src="https://scitechdaily.com/images/Illustration-Photons-Galaxy-777x518.jpg" alt="">
          <div class="details">
            <h2><span>Milky Way</span></h2>
            <p>The Milky Way is the galaxy that contains our Solar System, with the name describing the galaxy's appearance from Earth: a hazy band of light seen in the night sky formed from stars that cannot be individually distinguished by the naked eye.</p>
            <div class="more">
              <a href="#" class="read-more">Read <span>More</span></a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-heart"></i></a>
                <a href="#"><i class="fas fa-eye"></i></a>
                <a href="#"><i class="fas fa-paperclip"></i></a>
                <a href="#"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
 
        <div class="image">
          <img src="https://t2.ea.ltmcdn.com/en/images/3/4/5/img_most_endangered_species_in_north_america_1543_orig.jpg" alt="">
          <div class="details">
          <h2><span>The life</span></h2>
            <p>Animals (also called Metazoa) are multicellular eukaryotic organisms that form the biological kingdom Animalia.</p>
            <div class="more">
              <a href="#" class="read-more">Read <span>More</span></a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-heart"></i></a>
                <a href="#"><i class="fas fa-eye"></i></a>
                <a href="#"><i class="fas fa-paperclip"></i></a>
                <a href="#"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="image">
          <img src="https://www.vaisala.com/sites/default/files/styles/16_9_liftup_extra_large/public/images/LIFT-Mars%20the%20Red%20Planet-1600x900.jpg?itok=YXq-Cv1K" alt="">
          <div class="details">
            <h2><span>Mars</span></h2>
            <p>Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.</p>
            <div class="more">
              <a href="#" class="read-more">Read <span>More</span></a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-heart"></i></a>
                <a href="#"><i class="fas fa-eye"></i></a>
                <a href="#"><i class="fas fa-paperclip"></i></a>
                <a href="#"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="image">
          <img src="https://www.tomswallpapers.com/large/201503/10294.jpg" alt="">
          <div class="details">
            <h2><span>2050 year</span></h2>
            <p>Earth 2050 it's an interactive project that provides a fascinating glimpse at a future based on predictions from futurologists, scientists, and Internet users from all the world</p>
            <div class="more">
              <a href="#" class="read-more">Read <span>More</span></a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-heart"></i></a>
                <a href="#"><i class="fas fa-eye"></i></a>
                <a href="#"><i class="fas fa-paperclip"></i></a>
                <a href="#"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="image">
          <img src="https://static1.bmbfcluster.de/1/1/8/4_6077ddaa413435e/1184meg_e11d22113f60ffb.jpg" alt="">
          <div class="details">
            <h2><span>technology</span></h2>
            <p>Technology is the sum of techniques, skills, methods, and processes used in the production of goods or services or in the accomplishment of objectives, such as scientific investigation.</p>
            <div class="more">
              <a href="#" class="read-more">Read <span>More</span></a>
              <div class="icon-links">
                <a href="#"><i class="fas fa-heart"></i></a>
                <a href="#"><i class="fas fa-eye"></i></a>
                <a href="#"><i class="fas fa-paperclip"></i></a>
                <a href="#"><i class="fas fa-paperclip"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="charts">
      <div>
        <canvas id="myChart" width="400" height="200"></canvas>
        <script  type="text/javascript">
          var ctx = document.getElementById("myChart");
          var myChart = new Chart(ctx,{
            "type":"line",
            "data":{
              "labels":["September2020","October2020","November2020","December2020","January2021","February2021","March2021"],
              "datasets":[{"label":"New cases of coronavirus","data":[293,332,345,453,456,423,360],"fill":false,"borderColor":"rgb(75, 192, 192)","lineTension":0.1}]
             },
            "options":{}
          });
         </script>



      
        <canvas id="myHart" width="800" height="200"></canvas>
        <script type="text/javascript">
          var ctx = document.getElementById("myHart");
          var myHart = new Chart(ctx, {
            type: 'bar',
            data:{
              labels: ["2019","2020","2021"],
              datasets: [
              {
                label: 'Expenses',
                data: [12,193,92],
                backgroundColor :['blue',
                'orange',
                'purple'
                ],
              }]
            },
            options:{
              scales:{
                yAxes:[{
                  ticks:{
                    beginAtZero:true
                  }
                }]
              }
            }
          });
        </script>
      </div>


      <div>
        <canvas id="myart" width="700" height="500"></canvas>
        <script type="text/javascript">
          var ctx = document.getElementById("myart");
          var myart = new Chart(ctx, {
            type:'pie',
            data: {
              labels:["Sick","Recovered","Death"],
              datasets: [
              {label: 'Pie chart example',
              data:[131,74,3],
              backgroundColor:[
              'yellow',
              'green',
              'red',],}]
            },
            options:{
              scales:{
                yAxes:[{
                  ticks:{
                    beginAtZero:true
                  }
                }]
              }
            }
          });
        </script>
      </div>
    </div>



    



    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Aksay, Almaty, Kazakhstan</div>
        <div><i class="fas fa-envelope"></i>future@email.com</div>
        <div><i class="fas fa-phone"></i>+70 0707 070 070</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>







    

    

</body>
</html>