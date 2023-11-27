<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <link rel="stylesheet" href="stylee.css">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background-image: url(_DSC8269.JPG);
        font-family: Arial, sans-serif;
        width: 1024px;
        height: 100%;
    }

    .container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .row {
        display: flex;
        flex-direction: row;
        align-items: center;
        background-color: #fff;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        padding: 30px;
        margin-top: 50px;
        width: 100%;
        max-width: 600px;
    }

    h2 {
        border-radius: 5px;
        font-family: 'Passion One', sans-serif;
        font-family: 'Poppins', sans-serif;
        text-align: center;
        color: #2ecc71;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .input-group {
        display: flex;
        flex-direction: column;
        /* Menjadikan kolom vertikal */
        align-items: center;
        width: 100%;
    }
    
    .bg {
        background-color: #fff;
        margin-left: auto;
        border-radius: 5px;
        padding: 10px 20px 10px;
        margin-left: 30px;
    }

    input[type="text"] {
        margin-top: 1rem;
        margin-left: auto;
        margin-right: auto;
        width: 60%;
        padding: 15px;
        box-sizing: border-box;
        font-size: 18px;
    }

    .custom-btn {
        margin-top: 1rem;
        background-color: #2ecc71;
        color: #fff;
        border: none;
        padding: 15px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .custom-btn:hover {
        background-color: #218c58;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .custom-btn {
        animation: fadeIn 0.5s ease-out;
    }
</style>
<?php
$id = $_GET['ID'];
include "config.php";
$sql = mysqli_query($con, "SELECT * FROM `tabletodo` WHERE `Id` = '$id' ");
$data = mysqli_fetch_array($sql);
?>

<body class="bg-info">
    <form action="update2.php" method="post">
        <div class="container">
            <div class="bg">
                <h2 class="text-center text-success"><span>E</span>dit</h2>
            </div>
            <div class="row">
                <div>
                    <input type="text" value="<?php echo $data['List'] ?>" name="list">
                </div>
                <div>
                    <button class="custom-btn">back</button>
                    <input type="hidden" name="id" value="<?php echo $data['List'] ?>">
                </div>
            </div>
        </div>
    </form>

    <!-- No Bootstrap JavaScript -->
</body>

</html>