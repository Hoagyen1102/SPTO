<?php
    include('connect.php');
    $sql = "SELECT * FROM course inner join programming_language on course.p_id = programming_language.p_id ORDER BY click DESC LIMIT 8";
    $query = mysqli_query($conn, $sql);
?>  
<div class="intro">
    <h1>Featured courses</h1>
    <p>Courses of interest</p>
    <br><br><br>
</div>
<div class=course>
    <ul class="course_list">
        <?php
            while($row = mysqli_fetch_assoc($query))
            {
        ?>
            <li>
                <a href="index.php?quanly=content&c_id=<?php echo $row['c_id']?>">
                <center><img src="img/<?php echo $row['image']; ?>"></center>
                <p class=title_course><?php echo $row['c_name']; ?></p>
                <p class=title_course>Programming language: <?php echo $row['p_language']; ?></p>
                <p class=title_course>Author: <?php echo $row['author']; ?></p>
                </a>
            </li>
        <?php
            }
        ?>
    </ul>
</div>
<div class=clear></div>
<div class="intro">
    <h1>PROGRAMMING LANGUAGE</h1>
    <p>Learn all programming language</p>
        <div class="nd_main">
        <a href="index.php?quanly=detail&id=1">
            <h3>C #</h3>
            <p>C# (C-Sharp) is a programming language developed by Microsoft that runs on the .NET Framework.</p>
        </a>
        </div>
        <div class="nd_main">
        <a href="index.php?quanly=detail&id=2">
            <h3>C++</h3>
            <p>C++ is used to create computer programs, and is one of the most used language in game development.</p>
        </a>
        </div>
        <div class="nd_main">
        <a href="index.php?quanly=detail&id=3">
            <h3>Java</h3>
            <p>Java is used to develop mobile apps, web apps, desktop apps, games and much more.</p>
        </a>
        </div>
        <div class="nd_main">
        <a href="index.php?quanly=detail&id=4">
            <h3>PHP</h3>
            <p>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.</p>
        </a>
        </div>
        <div class="nd_main">
        <a href="index.php?quanly=detail&id=5">
            <h3>MySQL</h3>
            <p>MySQL is a widely used relational database management system.</p>
        </a>
        </div>
        <div class="nd_main">
        <a href="index.php?quanly=detail&id=6">
            <h3>CSS</h3>
            <p>CSS is the language we use to style an HTML document.</p>
        </a>
        </div>
        <div class="nd_main">
        <a href="index.php?quanly=detail&id=7">
            <h3>Python</h3>
            <p>Python can be used on a server to create web applications.</p>
        </a>
        </div>
        <div class="nd_main">
        <a href="index.php?quanly=detail&id=8">
            <h3>JavaScript</h3>
            <p>JavaScript is the programming language of the Web.</p>
            </a>
        </div>
</div>
<div class=clear></div>
<div class="intro">
    <h1>SOME POPULAR IDES</h1>
    <p>Integrated Development Environment</p>
        <div class="ide">
        <a href="https://sourceforge.net/projects/orwelldevcpp/"><img src="Img/DevC++.png" alt="C++"></a>
        </div>
        <div class="ide">
        <a href="https://netbeans.apache.org/download/index.html"><img src="Img/NetBeans.png" alt="NetBeans"></a>
        </div>
        <div class="ide"><a href="https://www.eclipse.org/downloads/"><img src="Img/Eclipse.png" alt="Eclipse"></a>
        </div>
        <div class="ide">
        <a href="https://www.jetbrains.com/idea/download/#section=windows"><img src="Img/IntelliJ.png" alt="TntelliJ"></a>
        </div>
        <div class="ide">
        <a href="https://visualstudio.microsoft.com/fr/downloads/"><img src="Img/VisualStudio.png" alt="VS"></a>
        </div>
    <p style="margin-top:300px">You can download the IDEs by clicking on the icons</p>
</div>
<div class="image">
    <img src="Img/3.jpg" alt="Image">
</div>
<div class="imager">
    <img src="Img/1.jpg" alt="Image">
    <img src="Img/2.jpg" alt="Image">
</div>
<div class=clear></div>