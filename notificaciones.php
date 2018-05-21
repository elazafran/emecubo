<?php 
    include "head.php";
?>
<body>
    
<?php 
    include "menu.php";
?>
 <div class="container">
    <div class="row">
        <div class="col-12">
            <h1>The Easiest Way To Show Browser Notifications</h1>
            <p>This simple demo aims to show you the easiest possible way to display web notifications using <a href="https://github.com/Nickersoft/push.js" target="_blank">Push.js</a>.</p> 
   
            <button id="demo-btn">Show notification</button>
    
            <p class="footer">To read the full article go to <a href="http://tutorialzine.com/2017/01/the-easiest-way-to-show-browser-notifications">tutorialzine.com</a></p>     
            <p class="footer">The source code for this demo is available on <a href="https://github.com/tutorialzine/web-notifications-demo">GitHub</a></p> 
        </div>
    </div> 
</div>     
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/0.0.11/push.min.js"></script>
    <script>
        Push.Permission.request();
        document.getElementById('demo-btn').onclick = function () {
            Push.create('Holaa...!', {
                body: 'Esto  es una notificación.',
                icon: './images/icons/android-icon-72x72.png',
                timeout: 8000,                  // Timeout before notification closes automatically.
                vibrate: [100, 100, 100],       // An array of vibration pulses for mobile devices.
                onClick: function() {
                    // Callback for when the notification is clicked. 
                    console.log("ha clickado en la alerta");
                    alert("ha clickado en la alerta"); 
                    console.log(this);
                }  
            });
        };
    </script>
</body>
</html>