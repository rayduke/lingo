<?php require_once('../private/initialize.php');?>

<?php include(SHARED_PATH . '/header.php');?>

        <main>
        <?php
                        
				if (isset($_SESSION['u_id'])){
					echo "Je bent ingelogd";
				}
			?>		    
        <div class="center">
            <div class=video>
                <video autoplay>
                 <source src="video/lingo_intro.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
        </div>

        </main>

    </body>
</html>