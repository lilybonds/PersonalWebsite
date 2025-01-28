
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CS 1080 sitemap</title>
    <meta name="author" content="Lily Bonds">
    <meta name="description" content="welcome to my sitemap!">
    <style>
        /* basic CSS */
        body {
            margin: auto;
            padding: 3%;
            width: 90%;
            display: grid;
        }

        figure {
            border: thin solid darkslategray;
            border-radius: 3%;
            padding: 3%;
            text-align: center;
        }

        figcaption {
            color: #839e99;
            font-style: italic;
            text-align: center;
        }

        img {
            border-radius: 3%;
            max-width: 100%
        }

        /* Setting up a grid layout for the sitemap page */
        body>h1 {
            grid-column: 1/2;
            grid-row: 1;

        }

        body>h2 {
            grid-column: 1/2;
            grid-row: 2;

        }

        body>p {
            grid-column: 1/2;
            grid-row: 3;
        }

        figure {
            border: thin solid darkslategray;
            border-radius: 3%;
            padding: 3%;
            text-align: center;
            grid-column: 2 / 2;
            grid-row: 1 / span 3;
        }

        .header {
            grid-area: header;
            grid-column: 1 / 3;
            padding: .5%;
            margin: .5%;
        }

        .lab-layout {
            border-bottom: thin dashed navy;
            display: inline-grid;
            grid-template-columns: 25% 25% 50%;
            grid-template-areas: "header header header"
                "public-files supporting-files grader-notes";
            padding: .5%;
            margin: .5%;
            grid-column: 1 / span 2;
        }

        .public-files {
            grid-area: public-files;
            padding: .5%;
            margin: .5%;
        }

        .supporting-files {
            grid-area: supporting-files;
            padding: .5%;
            margin: .5%;
        }

        .grader-notes {
            grid-area: grader-notes;
            padding: .5%;
            margin: .5%;
        }
    </style>
</head>

<body>
    <figure>
        <img alt="Lily Bonds 2023" src="images/lily-bonds.jpg">
        <figcaption>Traveling in Germany.</figcaption>
    </figure>

    <h1>CS 1080-<em>ol</em> Spring 2024</h1>
    <h2>Lily Bonds - Site map</h2>
    <p><a href="ADMIN/code-viewer.php">My Admin Folder</a> | <a href="ADMIN/table-viewer.php?getDatabase=">Table Viewer</a></p>
    
    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Final Project - Green Mountain Cycles.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="final/about.php">About Page</a></p>
            <p><a href="final/detail.php">Detail Page</a></p>
            <p><a href="final/form.php">Form Page</a></p>
            <p><a href="final/index.php">Home Page</a></p>
            <p><a href="final/array.php">Array Page-data displayed here</a></p>
            
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="final/sql.php">SQL Statements</a></p>
            <p><a href="final/images/records.png">records</a></p>
            <p><a href="final/css/custom.css">css style sheet</a></p>
            <p><a href="final/css/layout-desktop.css">desktop style sheet</a></p>
            <p><a href="final/css/layout-phone.css">phone style sheet</a></p>
            <p><a href="final/css/layout-tablet.css">tablet style sheet</a></p>
            <p><a href="final/images/wireframe-desktop.png">wireframe</a></p>
            <p><a href="final/images/wireframe-tablet.png">Wireframe Tablet</a></p>
            <p><a href="final/images/wireframe-phone.png">Wireframe Phone</a></p>
            <p><a href="final/top.php">Top</a></p>
            <p><a href="final/header.php">Header</a></p>
            <p><a href="final/nav.php">Nav</a></p>
            <p><a href="final/footer.php">Footer</a></p>
            
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab Nine - Saving forms data.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab9/about.php">About Page</a></p>
            <p><a href="lab9/detail.php">Detail Page</a></p>
            <p><a href="lab9/form.php">Form Page</a></p>
            <p><a href="lab9/index.php">Home Page</a></p>
            <p><a href="lab9/array.php">Contest Page</a></p>
            
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="lab9/sql.php">SQL Statements</a></p>
            <p><a href="lab9/images/records.png">records</a></p>
            <p><a href="lab9/css/custom.css">css style sheet</a></p>
            <p><a href="lab9/css/layout-desktop.css">desktop style sheet</a></p>
            <p><a href="lab9/images/wireframe.jpg">wireframe</a></p>
            <p><a href="lab9/top.php">Top</a></p>
            <p><a href="lab9/header.php">Header</a></p>
            <p><a href="lab9/nav.php">Nav</a></p>
            <p><a href="lab9/footer.php">Footer</a></p>
            
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab Eight - Database to display data.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab8/about.php">About Page</a></p>
            <p><a href="lab8/detail.php">Detail Page</a></p>
            <p><a href="lab8/form.php">Form Page</a></p>
            <p><a href="lab8/index.php">Home Page</a></p>
            <p><a href="lab8/array.php">Contest Page</a></p>
            
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="lab8/sql.php">SQL Statements</a></p>
            <p><a href="lab8/images/records.png">records</a></p>
            <p><a href="lab8/css/custom.css">css style sheet</a></p>
            <p><a href="lab8/css/layout-desktop.css">desktop style sheet</a></p>
            <p><a href="lab8/images/wireframe.jpg">wireframe</a></p>
            <p><a href="lab8/top.php">Top</a></p>
            <p><a href="lab8/header.php">Header</a></p>
            <p><a href="lab8/nav.php">Nav</a></p>
            <p><a href="lab8/footer.php">Footer</a></p>
            
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>
    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab Seven - Arrays and Includes.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab7/about.php">About Page</a></p>
            <p><a href="lab7/detail.php">Detail Page</a></p>
            <p><a href="lab7/form.php">Form Page</a></p>
            <p><a href="lab7/index.php">Home Page</a></p>
            <p><a href="lab7/array.php">Contest Page</a></p>
            
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="lab7/css/custom.css">css style sheet</a></p>
            <p><a href="lab7/css/layout-desktop.css">desktop style sheet</a></p>
            <p><a href="lab7/images/wireframe.jpg">wireframe</a></p>
            <p><a href="lab7/top.php">Top</a></p>
            <p><a href="lab7/top.php">Header</a></p>
            <p><a href="lab7/top.php">Nav</a></p>
            <p><a href="lab7/top.php">Footer</a></p>
            
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>
    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab Six - Responsive Design.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab6/about.php">About Page</a></p>
            <p><a href="lab6/detail.php">Detail Page</a></p>
            <p><a href="lab6/form.php">Form Page</a></p>
            <p><a href="lab6/index.php">Home Page</a></p>
            
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="lab6/css/custom.css">css style sheet</a></p>
            <p><a href="lab6/css/layout-desktop.css">desktop style sheet</a></p>
            <p><a href="lab6/images/wireframe.jpg">wireframe</a></p>
            
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab Five - Even more Styling.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab5/about.php">About Page</a></p>
            <p><a href="lab5/detail.php">Detail Page</a></p>
            <p><a href="lab5/form.php">Form Page</a></p>
            <p><a href="lab5/index.php">Home Page</a></p>
            
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="lab5/css/custom.css">css style sheet</a></p>
            <p><a href="lab5/css/layout-desktop.css">desktop style sheet</a></p>
            <p><a href="lab5/images/wireframe.jpg">wireframe</a></p>
            
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>
        <!--     ###########################################  -->

    <section class="lab-layout">
        <h2 class="header">Lab Four - Adding Style.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab4/about.php">About Page</a></p>
            <p><a href="lab4/detail.php">Detail Page</a></p>
            <p><a href="lab4/form.php">Form Page</a></p>
            <p><a href="lab4/index.php">Home Page</a></p>
            
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="lab4/css/custom.css">css style sheet</a></p>
            <p><a href="lab4/images/wireframe.jpg">wireframe</a></p>
            
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab Three B - Creating a form.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab3-B/about.php">About Page</a></p>
            <p><a href="lab3-B/detail.php">Detail Page</a></p>
            <p><a href="lab3-B/form.php">Form Page</a></p>
            <p><a href="lab3-B/index.php">Home Page</a></p>
            
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="lab3-B/css/custom.css">css style sheet</a></p>
            <p><a href="lab3-B/images/wireframe.jpg">wireframe</a></p>
            
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab Three - Creating a website.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab3/about.php">About Page</a></p>
            <p><a href="lab3/detail.php">Detail Page</a></p>
            <p><a href="lab3/index.php">Home Page</a></p>
            
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p><a href="lab3/css/custom.css">css style sheet</a></p>
            <p><a href="lab3/images/wireframe.jpg">wireframe</a></p>
            
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p></p>
        </section>
    </section>

    <!--     ###########################################  -->
    <section class="lab-layout">
        <h2 class="header">Lab Two - Choosing your topic.</h2>
        <section class="public-files">
            <h3>Public Files</h3>
            <p><a href="lab2/index.php">Home Page</a></p>
        </section>

        <section class="supporting-files">
            <h3>Supporting files</h3>
            <p></p>
        </section>

        <section class="grader-notes">
            <h3>Notes to grader</h3>
            <p>Lab topic is about making the world a better place</p>
            <p>Final project topic is Reducing your carbon footprint</p>
        </section>
    </section>
    <!--     ###########################################  -->
</body>

</html>