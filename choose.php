


<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">
<head>
    

    <script src="/Scripts/jquery-3.0.0.min.js"></script>
    <style>
        body {
            background: url(img/bg_eleve.png) center top repeat-x #f7f2df;
            font-family: sans-serif;
        }

        body .accueil-header, .accueil-body, .accueil-footer {
            width: 100%;
        }

        .accueil-header {
            text-align: center;
            height: 200px;
        }

        .accueil-body {
            text-align: center;
        }

        .accueil-footer {
            position: absolute;
            bottom: 0px;
            left: 18%;
            width: 60%;
            background: #f9f6ea;
            border-top: 1px solid #d2d6de;
            padding: 12px;
        }

        .accueil-component {
            width: 500px;
            height: 184px;
            display: inline-block;
            padding-top: 6px;
            transition: 0.3s ease-out;
        }

        .accueil-component:hover {
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 45px, rgba(0, 0, 0, 0.22) 0px 10px 18px;
            cursor: pointer;
        }

        .materiel-color-orange {
            background: powderblue;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        
        }

        .materiel-color-gray {
            background: #8fa4ae;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .accueil-component-icon {
            width: 40%;
            margin: auto;

            border: 0px solid;
            width: 208px;
            border-radius: 110px;
        }

        .accueil-component-icon img {
            width: 208px;
            height: 208px;
            border-radius: 50%;
            border: 4px solid #9da7dc;
        }

        .accueil-component-title {
            display: inline-block;
            border: 0px solid;
            position: relative;
            background: #eeeeee;
            width: 97%;
            bottom: 15px;
            z-index: -1;
        }

        .accueil-component-title p {
            font-size: 20px;
            font-weight: 700;
            text-align: center;
        }

        .pull-right {
            float: left !important;
        }

        .pull-left {
            float: right !important;
        }
        .logo{
            box-shadow: 3px 2px #8fa4ae, 1px 0 2em rgb(180, 240, 250);
            text-shadow: 1px 1px 1px #06BBCC;
            color: #8fa4ae;
            user-select: none;
        }
        a{
            text-decoration: none;
            color: black;
        }
        @media screen and (max-width: 700px){
                
        }

    </style>

</head>
<body>
    <div class="accueil-header">
    <h2 class="logo">BookHaven</h2>
    </div>
    <div class="accueil-body">

        <table style="margin: auto;">
            <tr class="tt">
                <td>
                    <a href="log_admin.php">
                    <div class="accueil-component materiel-color-gray" data-url="./waliye">
                        <div class="accueil-component-icon">
                            <img src="img/team-1.jpg" />
                        </div>
                        <div class="accueil-component-title">
                            <p>The space for  Admin</p>
                        </div>
                    </div>
                    </a>
                </td>
                <td>
                    <a href="courses.php">
                    <div class="accueil-component materiel-color-orange" data-url="./moutamadris">
                        <div class="accueil-component-icon">
                            <img src="img/course-3.jpg" />
                        </div>
                        <div class="accueil-component-title">
                            <p>The space for students</p>
                        </div>
                    </div>
                    </a>
                </td>
            </tr>
        </table>




    </div>
    <div class="accueil-footer">
        <div class="pull-right">
            <b>Version</b> 2.0
        </div>
        <div class="pull-left">
            <strong>Copyright © 2023 </strong>
        </div>

    </div>

    <script>

        $(".accueil-component").click(function () {

            var $url = $(this).data("url");

            window.location.href = $url;
        })

    </script>

</body>

</html>