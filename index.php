<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Online CV</title>
</head>
<body>
    <div class="profile-img">
    <img src="images/user.png" alt="profile-img">
    </div>

    <div class="profile-info">

    <h1>Nguyễn Trung Hiếu</h1>
    <p class="about">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, molestiae error. Nam, voluptas dolore molestiae soluta officia vel architecto. Quos, perferendis sit? Qui, ad quas corporis saepe fugiat incidunt culpa.</p>
    
    <div class="social-media">
    <img src="images/facebook-icon.png" alt="facebook icon">
    <img src="images/twitter-icon.png" alt="twitter icon">
    <img src="images/whatsapp-icon.png" alt="whatsapp icon">
    </div>

    <h2>Hobby</h2>
    <div class="hobby">
    <img src="images/hobby1.png" alt="hobby1">
    <p><b>Hobby1</b></p>
    <small>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consectetur corporis incidunt, aut, ullam, esse saepe officia repudiandae accusamus quos aliquid porro alias molestiae voluptas quam. Excepturi enim quis quod.
    </small>
    </div>
    <div class="hobby">
    <img src="images/hobby2.png" alt="hobby2">
    <p><b>Hobby2</b></p>
    <small>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consectetur corporis incidunt, aut, ullam, esse saepe officia repudiandae accusamus quos aliquid porro alias molestiae voluptas quam. Excepturi enim quis quod.
    </small>
    </div>
    <div class="hobby">
    <img src="images/hobby3.png" alt="hobby3">
    <p><b>Hobby3</b></p>
    <small>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consectetur corporis incidunt, aut, ullam, esse saepe officia repudiandae accusamus quos aliquid porro alias molestiae voluptas quam. Excepturi enim quis quod.
    </small>
    </div>
    <div class="hobby">
    <img src="images/hobby4.png" alt="hobby4">
    <p><b>Hobby4</b></p>
    <small>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consectetur corporis incidunt, aut, ullam, esse saepe officia repudiandae accusamus quos aliquid porro alias molestiae voluptas quam. Excepturi enim quis quod.
    </small>
    </div>
    
    <h2>Education</h2>
    <div class="education">
    <img src="images/edu1.png" alt="edu1">
    <p><b>edu1</b></p>
    <small>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consectetur corporis incidunt, aut, ullam, esse saepe officia repudiandae accusamus quos aliquid porro alias molestiae voluptas quam. Excepturi enim quis quod.
    </small>
    </div>
    <div class="education">
    <img src="images/edu2.png" alt="edu2">
    <p><b>edu2</b></p>
    <small>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consectetur corporis incidunt, aut, ullam, esse saepe officia repudiandae accusamus quos aliquid porro alias molestiae voluptas quam. Excepturi enim quis quod.
    </small>
    </div>
    <div class="education">
    <img src="images/edu3.png" alt="edu3">
    <p><b>edu3</b></p>
    <small>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consectetur corporis incidunt, aut, ullam, esse saepe officia repudiandae accusamus quos aliquid porro alias molestiae voluptas quam. Excepturi enim quis quod.
    </small>
    </div>
    
    <h2>Expertise</h2>
    <div class="expertise">
    <img src="images/web.png" alt="web">
    <p><b>Web Designing</b></p>
    <small>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ipsa temporibus voluptate delectus doloribus, tempore rem maiores dignissimos, ipsum facilis nobis, soluta totam quo quisquam! Totam quasi iste recusandae a!
    </small>
    </div>
    <div class="expertise">
    <img src="images/marketing.png" alt="marketing">
    <p><b>Digital Marketing</b></p>
    <small>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ipsa temporibus voluptate delectus doloribus, tempore rem maiores dignissimos, ipsum facilis nobis, soluta totam quo quisquam! Totam quasi iste recusandae a!
    </small>
    </div>
    <div class="expertise">
    <img src="images/graphics.png" alt="graphics">
    <p><b>Graphics Designing</b></p>
    <small>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ipsa temporibus voluptate delectus doloribus, tempore rem maiores dignissimos, ipsum facilis nobis, soluta totam quo quisquam! Totam quasi iste recusandae a!
    </small>
    </div>

    <h2>My Project Work</h2>
    
    <div class="projects">
    <img src="images/1.png" alt="1">
    <img src="images/2.png" alt="2">
    <img src="images/3.png" alt="3">
    <img src="images/4.png" alt="4">
    <img src="images/5.png" alt="5">
    <img src="images/6.png" alt="6">
    </div>

    <div class="form-box">
    
    <h2>Contact me</h2>

    <h4 class="send-notification"></h4>

    <form id="contact-form">
        <div class="input-group">
        <input type="text" id="name" placeholder="your name">
        <input type="text" id="subject" placeholder="subject">
        </div>
        <div class="input-group">
        <input type="text" id="Pnum" placeholder="phone number">
        <input type="email" id="email" placeholder="email">
        </div>
        <div class="text-area">
        <textarea rows="4" id="msg" placeholder="your message"></textarea>
        </div>
        <button type="button" onclick="sendMail()" name="btn-send" class="submit-btn">SEND MESSAGE</button>
    </form>

    </div>
    
    <div class="contact">
        <span><img src="images/gmail.png" alt="gmail">hello@website.com</span>
        <span><img src="images/phone.png" alt="phone">+12345677889</span>
    </div>

    <p class="copyright">Designed by Nguyễn Trung Hiếu</p>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script type="text/javascript">
        function sendMail()
        {
            var name=$("#name");
            var email=$("#email");
            var subject=$("#subject");
            var msg= $("#msg");
            var Pnum=$("#Pnum");

            if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(msg) && isNotEmpty(Pnum))
            {
                $.ajax({
                    url: 'sendMail.php',
                    method: 'POST',
                    datatype: 'json',
                    data:
                    {
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        msg: msg.val(),
                        Pnum: Pnum.val()
                    }, success: function(response){
                        $('#contact-form')[0].reset();
                        $('.send-notification').text("Message sent successfully.")
                    }
                });
            }
        }
        function isNotEmpty(caller)
        {
            if(caller.val()=="")
            {
                caller.css('border','1px solid red');
                return false;
            }
            else
            {
                caller.css('border','');
                return true;
            }
        }
    </script>


</body>
</html>

