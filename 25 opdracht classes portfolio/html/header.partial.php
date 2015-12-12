<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht classes: portfolio</title>
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">

                    <div class="facade-minimal" data-url="http://www.app.local/index.php">
                        <div class="portfolio">
                        <link href='http://fonts.googleapis.com/css?family=Raleway:400,900,700,200' rel='stylesheet' type='text/css'>
                         <style>
                            .facade-minimal
                            {
                                padding:0px;
                                padding-top:57px;
                                background-color:#354052;
                                
                            }

                            .portfolio
                            {
                                font-family: "Raleway", sans-serif;
                                font-size:14px;
                            }
                            
                            .portfolio img
                            {
                                max-width:100%;
                                border:none;
                            }

                            .portfolio header
                            {
                                position:relative;
                                z-index:10;
                                background-color:#FFFFFF;
                                padding-left: 12px;
                                box-shadow: 0 8px 6px -5px rgba(0,0,0,0.3);
                            }

                            .portfolio header a
                            {
                               color:#2B3536; 
                            }

                            .portfolio header .logo
                            {
                                float:left;
                                font-size:18px;
                                line-height:48px;
                                text-transform:uppercase;
                                font-weight:300;
                            }

                            .portfolio header .logo a
                            {
                                float:left;
                                font-size:18px;
                                text-decoration:none;
                            }
                            .portfolio header .logo span
                            {
                                font-weight:500;
                            }

                            .portfolio nav
                            {
                                float:right;
                            }
                            
                            .portfolio nav ul
                            {
                                list-style-type:none;
                                padding:0px;
                                margin-top:0;
                            }
                            
                             .portfolio nav li
                             {
                                display:inline-block;
                                border-left:1px solid lightgrey;
                                margin-bottom:0;

                             }

                            .portfolio nav li a
                            {
                                display:inline-block;
                                line-height:48px;
                                padding:0 18px;
                                text-decoration:none;
                                transition: all 0.2s ease-in;
                            }

                            .portfolio nav li a:hover
                            {
                                background-color:#ebf1f5;
                            }
                            
                            .portfolio-aside
                            {
                                float:  right;
                                width:30%;
                            }
                            .all-about-float
                            {
                                
                            }
                            .portfolio-content
                            {
                                float:  left;
                                width: 70%;
                                background-color:#FFFFFF;
                            }

                            .portfolio-content .head
                            {
                                position:relative;
                            }

                            .portfolio-content .head .date
                            {
                                position:absolute;
                                width:40px;
                                height:40px;
                                top:24px;
                                right:24px;
                                background-color:rgba(255,255,255,0.5);
                                border-radius:3px;
                                text-align:center;
                                font-weight:bold;
                                font-size:24px;
                                line-height:26px;
                                text-transform:uppercase;
                            }                                                                       
                                                                                                                                                                     
                            .portfolio-content .head .date span
                            {
                                display:block;
                                font-size:10px;                     
                                line-height:10px;
                            }       
                                                            
                            .portfolio-content .head .title
                            {
                                position:absolute;
                                bottom:0;
                                left:0;
                                right:0;
                                color:#FFFFFF;
                                padding: 24px;
                            }

                            .portfolio-content .head .title h1
                            {
                                border-bottom:none;
                                font-size:64px;
                                font-weight:500;
                                margin:0;
                            }

                            .portfolio-content .head .title span
                            {
                                text-align:left;
                            }
                            
                            .portfolio-content .content
                            {
                                padding:24px 48px;
                                line-height:1.5em;
                            }

                            .portfolio-content .content p:first-child
                            {
                                font-weight:bold;
                            }

                            .portfolio-aside
                            {
                                color:#c9d0dd;
                                font-size:13px;
                            }

                            .portfolio-aside ul
                            {
                                list-style-type:none;
                                padding-left:12px;
                            }
                            
                            .portfolio-aside .cat li
                            {
                                display:inline-block;
                            }
                            
                            .portfolio-aside .cat li:not(:last-child):after
                            {
                                content:",";
                            }
                            
                            .portfolio-aside h1
                            {
                                border-bottom:0;
                                margin:0;
                                font-weight:700;
                                font-size:12px;
                                color:#65748d;
                            }

                            .portfolio-aside section
                            {
                                margin-bottom:24px 0;
                                padding:24px;
                                box-shadow: 0 1px 0px #293241, 
                                            0 2px 0px #30394a, 
                                            0 3px 0px #30394a,
                                            0 4px 0px #293241;
                            }

                            .portfolio-aside section:first-child
                            {
                                padding-top:0px;
                            }

                            .portfolio-aside .profile
                            {
                                text-align:center;
                            }

                            .portfolio-aside .profile img
                            {
                                border-radius:100%;
                                max-width:70%;
                                margin:12.5% 12.5% 0% 12.5%;
                            }

                            .portfolio-aside .profile h1
                            {
                                border-bottom:0;
                                margin:0;
                                font-size:18px;
                                font-weight:500;
                                color:#c9d0dd;
                            }

                             .portfolio .body article h1:first-child
                            {
                                font-size:24px;
                                margin:12px 0;
                            }
                            
                            .portfolio footer
                            {
                                padding:6px;
                                color:#FFFFFF;
                                text-align:center;
                                background-color:#ecf2f6;

                                box-shadow: inset 0 8px 6px -5px rgba(0,0,0,0.3);                            }
                        </style>

                        <header class="group">
                            <div class="logo">
                               <a href="#">Theo <span>Jansen</span></a>
                            </div>
                            <nav>
                                <ul>
                                    <li><a href="#">Strandbeesten</a></li><!--
                                    --><li><a href="#">Galerij</a></li><!--
                                    --><li><a href="#">Blog</a></li><!--
                                    --><li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </header>
