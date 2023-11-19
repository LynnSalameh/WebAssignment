<?php
session_start();
?>
<html>
    <head>
        <title>
            Gallery
        </title>
      <style>
        /*body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        } */
        body {
            background-color: #063655;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('../images/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            display: block;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9); 
            z-index: -1; 
        }

        .container {
            width: 800px;
            margin: 0 auto; 
            border-radius: 0px;
            overflow: hidden;
            text-align: center; 
            /*margin-left: 80px; */
            justify-content: center;
            align-items: center;
        }

        .imgs {
            border: 2px solid  white;
            display: inline-block;
            margin: 10px;
            padding: 2px;
            width: 200px;
            height: 150px;
            transition: transform 0.3s;
            object-fit: cover; 
            
            
        }

        .imgs:hover {
            transform: scale(1.1); 
        }

        .imgs img {
            width: 100%;
            height: 100%;
        }

        .goback-button {
                    display: block;
                    text-align: center;
                    margin-left: 2%;
                    margin-top: 1%;
                    background-color: #160959;
                    color: #fff;
                    padding: 5px 10px;
                    text-decoration: none;
                    border-radius: 5px;
                    font-size: 14px; 
                    width: 50px;
        }

         .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 999;
        }

         .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .modal-close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .modal-image {
            max-width: 80%;
            max-height: 80%;
            display: block;
            margin: 0 auto;
        }

         :target .modal-overlay {
            display: block;
        }

        #welcome-message {
            color: white;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 14px;
            font-style: italic;
            margin-right: 3%;
        }

        #logout-btn {
            color: #160959;
            background-color:#f2f2f2; 
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 12px;
            border-radius: 10px;
            margin-left: 15px; 
            margin-top: -1%;
            
        }
        #logout-btn:hover {
            background-color: mediumorchid; 
        }


      </style>
    </head>
    <body>
        <a href="main.php" class="goback-button">Home</a>

        <?php
session_start();
function readGalleryFile($filename) {
    $jsonString = file_get_contents($filename);
    return json_decode($jsonString, true);
}
$galleryFile = 'gallery.json';
$galleryData = readGalleryFile($galleryFile);
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    ?>
    <div id="welcome-message">
        Welcome, <?php echo $username; ?>!
        <form action="logout.php" method="post" style="display: inline;">
            <input type="submit" value="Logout" id="logout-btn">
        </form>
    </div>
    <?php
}
?>
<h1 style="color: white; text-align: center; margin-top:8%;">My Gallery</h1>
<h1 style="color: white; text-align: center; font-size: 20px; font-weight:normal;">
    I'm very passionate about F1, so here are pictures of my favorite F1 team:
</h1>
<h1 style="color: red; text-align: center; font-size: 27px; margin-top:5%;">
    Scuderia Ferrari.
</h1>

<div class="container">
    <?php
    
    foreach ($galleryData['images'] as $imageName) {
        ?>
        <div class="imgs" onclick="openModal('<?php echo $imageName; ?>')">
            <img src="../images/<?php echo $imageName; ?>" alt="<?php echo $imageName; ?>">
        </div>
        <?php
    }
    ?>
</div>



      
<div id="imageModal" class="modal-overlay">
    <div class="modal-content">
        <a href="#" class="modal-close">Close</a>
        <img id="modalImage" src="" alt="Image" class="modal-image">
    </div>
</div>
     
<script>
    function openModal(imageName) {
        var modal = document.getElementById('imageModal');
        var modalImage = document.getElementById('modalImage');
        modalImage.src = '../images/' + imageName;
        modal.style.display = 'block';
    }

    function closeModal() {
        var modal = document.getElementById('imageModal');
        modal.style.display = 'none';
    }

    
    document.querySelector('.modal-close').addEventListener('click', closeModal);

    // Close the modal when clicking outside the modal content
    window.addEventListener('click', function (event) {
        var modal = document.getElementById('imageModal');
        if (event.target === modal) {
            closeModal();
        }
    });
</script>

        

    </body>
</html>